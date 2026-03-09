<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store() {
        $creds = request()->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (! Auth::attempt($creds)) {
            throw ValidationException::withMessages([
                'username' => 'Those credentials do not match'
            ]);
        }

        request()->session()->regenerate();

        return redirect()->route('dashboard');
    }

    public function destroy() {
        Auth::logout();

        return redirect()->route('dashboard');
    }
}
