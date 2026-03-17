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
use App\Services\CharacterBuilderService;
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

    public function store(StoreCharacterRequest $request, CharacterBuilderService $builder) {
        $user = Auth::user();
        $valid = $request->validated();
        $character = $builder->initialise($valid, $user);

        return redirect('/builder/character/' . $character->id . '?page=choices');
    }

    public function details(Character $character) {
        return view('builder.character.details', [
            'user'      => Auth::user(),
            'character' => $character,
            'skills'    => Skill::all(),
        ]);
    }

    public function update(Character $character, UpdateCharacterRequest $request, CharacterBuilderService $builder) {

        $valid = $request->validated();
        $selectedSkills = $valid['skills'] ?? [];

        $builder->attachSkills($character, $selectedSkills);
        $builder->attachGear($character);
        $builder->attachActions($character);

        $builder->finish($character);

        return redirect('/characters/' . $character->id);
    }

    public function random(CharacterBuilderService $builder) {
        $user = Auth::user();

        $character = $builder->random($user);

        return redirect('/builder/character/' . $character->id . '?page=choices');
    }
}
