<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Archetype;
use App\Models\Background;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Species;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    public function index() {
        if (Auth::user()->role == "admin" || Auth::user()->role == "runner") {
            $characters = Character::all();
        } else {
            $characters = Character::where('user_id',intval(Auth::user()->id))->get();
        }

        return view('characters.index', [
            'characters' => $characters,
        ]);
    }

    public function show(Character $character) {
        $actions = Action::where('character_id', $character->id)->get();

        return view('characters.show', [
            'character' => $character,
            'actions' => $actions,
        ]);
    }

    public function create() {
        $species = Species::all();
        $archetypes = Archetype::all();
        $backgrounds = Background::all();
        
        return view('characters.create', [
            'species' => $species,
            'archetypes' => $archetypes,
            'backgrounds' => $backgrounds,
        ]);
    }

    public function use(Character $character) {
        $user = Auth::user();
        
        $user->update([
            'character_id' => $character->id,
        ]);

        return redirect('/');
    }
}
