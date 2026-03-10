<?php

namespace App\Http\Controllers;

use App\Enums\Stat;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Action;
use App\Models\Archetype;
use App\Models\Armor;
use App\Models\Background;
use App\Models\Character;
use App\Models\CharacterSpells;
use App\Models\CharacterSpellslots;
use App\Models\CharacterStatistic;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Proficiency;
use App\Models\Skill;
use App\Models\Species;
use App\Models\Spell;
use App\Models\Statistic;
use App\Models\Weapon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CharacterBuilderController extends Controller
{
    public function create() {
        return view('builder.character.create', [
            'species'    => Species::all(),
            'archetypes' => Archetype::all(),
            'backgrounds' => Background::all(),
        ]);
    }

    public function store(StoreCharacterRequest $request) {
        $valid = $request->validated();

        $archetype  = Archetype::firstWhere('name', $valid['archetype']);
        $species    = Species::firstWhere('name', $valid['species']);
        $background = Background::firstWhere('name', $valid['background']);

        $character = Character::create([
            'user_id'                 => Auth::id(),
            'name'                    => $valid['name'],
            'species_id'              => $species->id,
            'archetype_id'            => $archetype->id,
            'background_id'           => $background->id,
            'archetype_proficiencies' => $archetype->skill_proficiencies,
            'level'                   => 1,
            'proficiency_bonus'       => 2,
        ]);

        $saves      = $archetype->saves();
        $statistics = Statistic::all()->keyBy('name');

        foreach (Stat::cases() as $stat) {
            $name = $stat->name;
            $score = $valid[$stat->value];
            $character->statistics()->create([
                'statistic_id' => $statistics[$name]->id,
                'score'        => $score,
                'modifier'     => (int) floor(($score - 10) / 2),
                'proficient'   => in_array($name, $saves),
            ]);
        }

        if ($archetype->spellcaster !== 'NONE' && $archetype->spellslots) {
            $slots = $archetype->spellslots->slots_at_level(1);
            if (count($slots) < 9) {
                $slots = array_merge($slots, array_fill(0, 9 - count($slots), 0));
            }
            CharacterSpellslots::create([
                'character_id' => $character->id,
                'level_one'    => (int) $slots[0],
                'level_two'    => (int) $slots[1],
                'level_three'  => (int) $slots[2],
                'level_four'   => (int) $slots[3],
                'level_five'   => (int) $slots[4],
                'level_six'    => (int) $slots[5],
                'level_seven'  => (int) $slots[6],
                'level_eight'  => (int) $slots[7],
                'level_nine'   => (int) $slots[8],
            ]);
        }

        if ($archetype->spell_list === 'FULL') {
            foreach (Spell::all() as $spell) {
                if (in_array($archetype->name, explode(', ', $spell->spell_lists))) {
                    $character->spells()->attach($spell->id, [
                        'prepared'        => false,
                        'always_prepared' => false,
                    ]);
                }
            }
        }

        return redirect('/builder/character/' . $character->id . '?page=choices');
    }

    public function details(Character $character) {
        return view('builder.character.details', [
            'user'      => Auth::user(),
            'character' => $character,
            'skills'    => Skill::all(),
        ]);
    }

    public function update(UpdateCharacterRequest $request, Character $character) {
        $valid = $request->validated();
        $selectedSkills = $valid['skills'] ?? [];

        foreach (Skill::all() as $skill) {
            Proficiency::create([
                'character_id' => $character->id,
                'skill_id'     => $skill->id,
                'proficient'   => in_array($skill->name, $selectedSkills),
                'mastery'      => false,
            ]);
        }

        $character->update(['draft' => false]);

        return redirect('/characters/' . $character->id);
    }

    public function random() {
        $user = Auth::user();
        // character
        $character = Character::create([
            'user_id' => $user->id,
            'name' => $user->username,

            'draft' => true,

            'species_id' => Species::inRandomOrder()->first()->id,
            'background_id' => Background::inRandomOrder()->first()->id,
            'archetype_id' => Species::inRandomOrder()->first()->id,

            'level' => rand(1,20),
            'experience_points' => rand(0,1000),
            'armor_class' => rand(11,20),
            'initiative' => 0,
            'inspiration' => 'false',
            'proficiency_bonus' => rand(1,5),

            'current_hit_points' => rand(6,66),
            'max_hit_points' => rand(12,120),
            'temporary_hit_points' => 0,

            'turn_order' => 0,
        ]);
        // stats
        foreach (Stat::cases() as $stat) {
            $score = rand(8,18);
            CharacterStatistic::create([
                'character_id' => $character->id,
                'statistic_id' => Statistic::where('name', $stat->name)->first()->id,
                'score'        => $score,
                'modifier'     => (int) floor(($score - 10) / 2),
                'proficient'   => (bool) rand(0,1),
            ]);
        }
        // skills (proficiencies)
        foreach (Skill::all() as $skill) {
            Proficiency::create([
                'character_id' => $character->id,
                'skill_id'     => $skill->id,
                'proficient'   => (bool) rand(0,1),
                'mastery'      => false,
            ]);
        }
        // character spells (if applicable)
        if ($character->archetype->spellcaster !== 'NONE') {
            foreach (Spell::all() as $spell) {
                if (in_array($character->archetype->name, explode(', ', $spell->spell_lists))) {
                    CharacterSpells::create([
                        'character_id' => $character->id,
                        'spell_id' => $spell->id,
                        'prepared' => (bool) rand(0,1),
                        'always_prepared' => false,
                    ]);
                }
            }
        }
        // spellslots (if applicable)
        if ($character->archetype->spellcaster !== 'NONE' && $character->archetype->spellslots) {
            $slots = $character->archetype->spellslots->slots_at_level(1);
            if (count($slots) < 9) {
                $slots = array_merge($slots, array_fill(0, 9 - count($slots), 0));
            }
            CharacterSpellslots::create([
                'character_id' => $character->id,
                'level_one'    => (int) $slots[0],
                'level_two'    => (int) $slots[1],
                'level_three'  => (int) $slots[2],
                'level_four'   => (int) $slots[3],
                'level_five'   => (int) $slots[4],
                'level_six'    => (int) $slots[5],
                'level_seven'  => (int) $slots[6],
                'level_eight'  => (int) $slots[7],
                'level_nine'   => (int) $slots[8],
            ]);
        }
        // grab random equipment option from archetype
        $options = explode(' OR ', $character->archetype->starter_gear);
        $selection = $options[0];
        // find which ones are items, armors, or weapons and add to inventory
        foreach (explode(', ', $selection) as $gear) {
            $item = Item::firstWhere('name', $gear);
            if ($item) {
                Inventory::create([
                    'character_id' => $character->id,
                    'equippable_id' => $item->id,
                    'equippable_type' => Item::class,
                ]);
                continue;
            }
            $armor = Armor::firstWhere('name', $gear);
            if ($armor) {
                Inventory::create([
                    'character_id' => $character->id,
                    'equippable_id' => $armor->id,
                    'equippable_type' => Armor::class,
                ]);
                continue;
            }
            $weapon = Weapon::firstWhere('name', $gear);
            if ($weapon) {
                Inventory::create([
                    'character_id' => $character->id,
                    'equippable_id' => $weapon->id,
                    'equippable_type' => Weapon::class,
                ]);
                continue;
            }
        }
        // background only has one option, but still need to find the right types
        foreach (explode(', ', $character->background->equipment) as $gear) {
            $item = Item::firstWhere('name', $gear);
            if ($item) {
                Inventory::create([
                    'character_id' => $character->id,
                    'equippable_id' => $item->id,
                    'equippable_type' => Item::class,
                ]);
                continue;
            }
            $armor = Armor::firstWhere('name', $gear);
            if ($armor) {
                Inventory::create([
                    'character_id' => $character->id,
                    'equippable_id' => $armor->id,
                    'equippable_type' => Armor::class,
                ]);
                continue;
            }
            $weapon = Weapon::firstWhere('name', $gear);
            if ($weapon) {
                Inventory::create([
                    'character_id' => $character->id,
                    'equippable_id' => $weapon->id,
                    'equippable_type' => Weapon::class,
                ]);
                continue;
            }
        }
        // add one action per unique weapon type
        $weapons = Inventory::where('character_id', $character->id)->where('equippable_type', Weapon::class)->get();
        foreach ($weapons as $weaponInventory) {
            $weaponModel = $weaponInventory->equippable;
            if ($character->actions()->where('name', $weaponModel->name)->exists()) {
                continue;
            }
            $properties = explode(', ', $weaponModel->properties ?? '');
            $statName = in_array('Finesse', $properties) && $character->stat('Dexterity') > $character->stat('Strength')
                ? 'Dexterity'
                : 'Strength';
            Action::create([
                'character_id' => $character->id,
                'statistic_id' => Statistic::firstWhere('name', $statName)->id,
                'name' => $weaponModel->name,
                'damage' => $weaponModel->damage_die_number . 'd' . $weaponModel->damage_die,
                'type' => $weaponModel->damage_type,
            ]);
        }
        // finalize
        $character->update(['draft' => false]);

        return redirect('/characters/' . $character->id);
    }
}
