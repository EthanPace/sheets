<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Archetype;
use App\Models\Background;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\CharacterSpells;
use App\Models\Species;
use App\Models\Spell;
use App\Models\Statistic;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    public function index() {
        if (Auth::user()->role == "admin" || Auth::user()->role == "runner") {
            $characters = Character::where('draft',false)->get();
        } else {
            $characters = Character::where('user_id',Auth::user()->id)->get();
        }

        $drafts = Character::where('user_id',Auth::user()->id)->where('draft',true)->get();

        return view('characters.index', [
            'characters' => $characters,
            'drafts' => $drafts,
        ]);
    }

    public function show(Character $character) {
        $actions = Action::where('character_id', $character->id)->get();
        $user = Auth::user();
        $stats = Statistic::all();

        return view('characters.show', [
            'user' => $user,
            'character' => $character,
            'actions' => $actions,
            'stats' => $stats,
        ]);
    }

    public function edit(Character $character) {
        $this->authorize('update', $character);

        $user = Auth::user();

        return view('characters.edit', [
            'user' => $user,
            'character' => $character,
        ]);
    }

    public function update(Character $character) {
        $this->authorize('update', $character);

        $valid = request()->validate([
            'name'                  => 'sometimes|string|max:80',
            'level'                 => 'sometimes|integer|min:1|max:20',
            'experience_points'     => 'sometimes|integer|min:0',
            'armor_class'           => 'sometimes|integer|min:0|max:30',
            'proficiency_bonus'     => 'sometimes|integer|min:0',
            'inspiration'           => 'sometimes|boolean',
            'current_hit_points'    => 'sometimes|integer|min:0',
            'max_hit_points'        => 'sometimes|integer|min:0',
            'temporary_hit_points'  => 'sometimes|integer|min:0',
        ]);

        $character->update($valid);

        return redirect('/characters/' . $character->id);
    }

    public function use(Character $character) {
        $user = Auth::user();
        
        $user->update([
            'character_id' => $character->id,
        ]);

        return redirect('/');
    }

    public function none() {
        $user = Auth::user();

        $user->update([
            'character_id' => null,
        ]);

        return redirect('/characters');
    }

    public function longrest() {
        $user = Auth::user();
        
        if ($user->character) {
            $user->character->longrest();
        }

        return redirect()->back();
    }
}
