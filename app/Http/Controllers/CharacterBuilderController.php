<?php

namespace App\Http\Controllers;

use App\Models\Archetype;
use App\Models\Background;
use App\Models\Character;
use App\Models\CharacterSpellslots;
use App\Models\Proficiency;
use App\Models\Skill;
use App\Models\Species;
use App\Models\Spell;
use App\Models\Statistic;
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
            'name'         => 'required|string|max:80',
            'species'      => ['required', 'string', Rule::exists('species', 'name')],
            'archetype'    => ['required', 'string', Rule::exists('archetypes', 'name')],
            'background'   => ['required', 'string', Rule::exists('backgrounds', 'name')],
            'strength'     => 'required|integer|min:1|max:20',
            'dexterity'    => 'required|integer|min:1|max:20',
            'constitution' => 'required|integer|min:1|max:20',
            'intelligence' => 'required|integer|min:1|max:20',
            'wisdom'       => 'required|integer|min:1|max:20',
            'charisma'     => 'required|integer|min:1|max:20',
        ]);

        $archetype  = Archetype::where('name', $valid['archetype'])->first();
        $species    = Species::where('name', $valid['species'])->first();
        $background = Background::where('name', $valid['background'])->first();

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

        foreach (['strength', 'dexterity', 'constitution', 'intelligence', 'wisdom', 'charisma'] as $stat) {
            $name = ucfirst($stat);
            $score = $valid[$stat];
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
            'skills'   => 'nullable|array',
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
}
