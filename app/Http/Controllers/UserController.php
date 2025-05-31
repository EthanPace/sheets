<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
