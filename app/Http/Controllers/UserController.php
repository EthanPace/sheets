<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $user = Auth::user();
        $users = User::all();

        return view('users.index', [
            'user' => $user,
            'users' => $users,
        ]);
    }

    public function show() {
        return view('users.profile');
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $valid = $request->validate([
            'username' => 'required',
            'role' => 'required|in:admin,runner,player',
        ]);

        $randomPassword = strtoupper(fake()->word() . fake()->word() . fake()->word());

        User::create([
            'username' => $valid['username'],
            'role' => $valid['role'],
            'password' => $randomPassword,
        ]);

        return redirect()->back()->with('success', 'Success: ' . $randomPassword)->with('scope', 'form');
    }

    public function edit() {
        return view('users.password');
    }

    public function update(Request $request) {
        $user = Auth::user();

        $valid = $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|confirmed|min:6',
        ]);

        $user->update(['password' => $valid['password']]);

        return redirect( '/users/profile/');
    }

    public function password_reset(User $user) {
        $randomPassword = strtoupper(fake()->word() . fake()->word() . fake()->word());

        $user->update(['password' => $randomPassword]);

        return redirect()->back()->with('success', 'Success: ' . $randomPassword)->with('scope', 'post-reset');
    }
}
