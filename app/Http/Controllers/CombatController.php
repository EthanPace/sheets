<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Initiative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CombatController extends Controller
{
    public function index() {
        $user = Auth::user();
        $goodies = Character::whereNot('turn_order', 0)->select('id','name','turn_order')->get();
        $baddies = Initiative::whereNot('turn_order', 0)->select('id','name','turn_order')->get();
        $round = $goodies->merge($baddies)->sortByDesc('turn_order');

        return view('combat', [
            'user' => $user,
            'round' => $round,
        ]);
    }

    public function set() {
        $user = Auth::user();

        $valid = request()->validate([
            'num' => 'bail|integer|max:255'
        ]);

        if ($valid['num'] && $user->character) {
            $user->character->update([
                'turn_order' => $valid['num'],
            ]);
        }

        return redirect('/combat');
    }

    public function roll() {
        $user = Auth::user();
        $num = rand(1,20);

        if ($user->character) {
            $num += $user->character->initiative;

            $user->character->update([
                'turn_order' => $num,
            ]);
        }

        return redirect('/combat');
    }

    public function kill(Character $character) {
        $character->update([
            'turn_order' => 0,
        ]);

        return redirect('/combat');
    }

    public function store() {
        $user = Auth::user();

        $valid = request()->validate([
            'name' => 'bail|string|max:30',
            'turn_order' => 'integer|max:255',
        ]);

        Initiative::create($valid);

        return redirect('/combat');
    }

    public function destroy(Initiative $initiative) {
        $initiative->delete();

        return redirect('/combat');
    }

    public function heal(Character $character) {
        $valid = request()->validate([
            'health' => "integer|max:255",
        ]);

        $health = $character->current_hit_points + $valid['health'];

        if ($character->current_hit_points + $valid['health'] < $character->max_hit_points) {
            $character->update([
                'current_hit_points' => $health,
            ]);
        } else {
            $character->update([
                'current_hit_points' => $character->max_hit_points,
            ]);
        }

        return redirect('/combat');
    }

    public function health(Character $character) {
        $valid = request()->validate([
            'health' => "integer|max:255",
        ]);

        if ($valid['health'] < $character->max_hit_points && $valid['health'] >= 0) {
            $character->update([
                'current_hit_points' => $valid['health'],
            ]);
        } elseif ($valid['health'] > $character->max_hit_points) {
            $character->update([
                'current_hit_points' => $character->max_hit_points,
            ]);
        } elseif ($valid['health'] < 0) {
            $character->update([
                'current_hit_points' => 0,
            ]);
        }

        return redirect('/combat');
    }

    public function damage(Character $character) {
        $valid = request()->validate([
            'damage' => "integer|max:255",
        ]);

        $damage = $character->current_hit_points - $valid['damage'];

        if ($character->current_hit_points - $valid['damage'] >= 0) {
            $character->update([
                'current_hit_points' => $damage,
            ]);
        } else {
            $character->update([
                'current_hit_points' => 0,
            ]);
        }

        return redirect('/combat');
    }
}
