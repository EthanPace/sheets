<?php

namespace App\Http\Controllers;

use App\Models\Spell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpellController extends Controller
{
    public function index() {
        $user = Auth::user();
        $spells = Spell::all();

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
}
