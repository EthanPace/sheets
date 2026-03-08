<?php

namespace App\Http\Controllers;

use App\Enums\Stat;
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

    public function store() {
        $valid = request()->validate([
            'name'         => ['required', 'string', 'max:80'],
            'species'      => ['required', 'string', Rule::exists('species', 'name')],
            'archetype'    => ['required', 'string', Rule::exists('archetypes', 'name')],
            'background'   => ['required', 'string', Rule::exists('backgrounds', 'name')],
            'strength'     => ['required', 'integer', 'min:1', 'max:20'],
            'dexterity'    => ['required', 'integer', 'min:1', 'max:20'],
            'constitution' => ['required', 'integer', 'min:1', 'max:20'],
            'intelligence' => ['required', 'integer', 'min:1', 'max:20'],
            'wisdom'       => ['required', 'integer', 'min:1', 'max:20'],
            'charisma'     => ['required', 'integer', 'min:1', 'max:20'],
        ]);

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

    public function update(Character $character) {
        $valid = request()->validate([
            'skills'   => ['nullable', 'array'],
            'skills.*' => ['required', 'string', Rule::exists('skills', 'name')],
        ]);

        $selectedSkills = $valid['skills'] ?? [];
        $limit = $character->archetype->num_skills;

        if (count($selectedSkills) > $limit) {
            return back()->withErrors(['skills' => "You may only choose {$limit} skill" . ($limit === 1 ? '' : 's') . "."]);
        }

        foreach ($selectedSkills as $skillName) {
            if (!$character->can_take($skillName)) {
                return back()->withErrors(['skills' => 'You cannot select the skill: ' . $skillName]);
            }
        }

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
        // character
        $character = Character::factory()->create([
            'user_id' => Auth::id(),
        ]);
        // stats
        foreach (Stat::cases() as $stat) {
            $score = fake()->numberBetween(8,18);
            CharacterStatistic::factory()->create([
                'character_id' => $character->id,
                'statistic_id' => Statistic::where('name', $stat->name)->first()->id,
                'score'        => $score,
                'modifier'     => (int) floor(($score - 10) / 2),
                'proficient'   => fake()->boolean(),
            ]);
        }
        // skills (proficiencies)
        foreach (Skill::all() as $skill) {
            Proficiency::factory()->create([
                'character_id' => $character->id,
                'skill_id'     => $skill->id,
                'proficient'   => fake()->boolean(),
                'mastery'      => false,
            ]);
        }
        // character spells (if applicable)
        if ($character->archetype->spellcaster !== 'NONE') {
            foreach (Spell::all() as $spell) {
                if (in_array($character->archetype->name, explode(', ', $spell->spell_lists))) {
                    CharacterSpells::factory()->create([
                        'character_id' => $character->id,
                        'spell_id' => $spell->id,
                        'prepared' => fake()->boolean(),
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
            CharacterSpellslots::factory()->create([
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
                Inventory::factory()->create([
                    'character_id' => $character->id,
                    'equippable_id' => $item->id,
                    'equippable_type' => Item::class,
                ]);
                continue;
            }
            $armor = Armor::firstWhere('name', $gear);
            if ($armor) {
                Inventory::factory()->create([
                    'character_id' => $character->id,
                    'equippable_id' => $armor->id,
                    'equippable_type' => Armor::class,
                ]);
                continue;
            }
            $weapon = Weapon::firstWhere('name', $gear);
            if ($weapon) {
                Inventory::factory()->create([
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
                Inventory::factory()->create([
                    'character_id' => $character->id,
                    'equippable_id' => $item->id,
                    'equippable_type' => Item::class,
                ]);
                continue;
            }
            $armor = Armor::firstWhere('name', $gear);
            if ($armor) {
                Inventory::factory()->create([
                    'character_id' => $character->id,
                    'equippable_id' => $armor->id,
                    'equippable_type' => Armor::class,
                ]);
                continue;
            }
            $weapon = Weapon::firstWhere('name', $gear);
            if ($weapon) {
                Inventory::factory()->create([
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
            Action::factory()->create([
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
