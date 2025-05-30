<?php

namespace App\Http\Controllers;

use App\Models\Archetype;
use App\Models\Spell;
use Illuminate\Support\Facades\Auth;

class SpellController extends Controller
{
    public function index() {
        $user = Auth::user();
        $spells = Spell::whereNot('id',0);
        $orders = explode(',',request()->query('order'));
        $filters = explode(',',request()->query('filter'));


        foreach ($orders as $order) {
            if ($order == "school") {
                $spells = $spells->orderBy('school');
            } elseif ($order == "level") {
                $spells = $spells->orderBy('level');
            }
        }

        foreach ($filters as $filter) {
            if (Archetype::where('name', $filter)->exists()) {
                $spells = $spells->where('spell_lists', 'LIKE', '%'.$filter.'%');
            } elseif ($filter == "verbal") {
                $spells = $spells->where('verbal', true);
            } elseif ($filter == "somatic") {
                $spells = $spells->where('somatic', true);
            } elseif ($filter == "material") {
                $spells = $spells->whereNot('material', null);
            }
        }

        $spells = $spells->get();

        return view('spells.index', [
            'user' => $user,
            'spells' => $spells,
        ]);
    }

    public function show(Spell $spell) {
        $user = Auth::user();
        
        return view('spells.show', [
            'user' => $user,
            'spell' => $spell,
        ]);
    }

    public function spellbook() {
        $user = Auth::user();
        $spells = $user->character->spells;

        return view('spells.index', [
            'user' => $user,
            'spells' => $spells,
        ]);
    }
}
