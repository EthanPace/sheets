<?php

use App\Http\Controllers\CharacterBuilderController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CombatController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SpellController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/characters', [CharacterController::class, 'index']);
    Route::post('/characters/none', [CharacterController::class, 'none']);
    Route::get('/characters/{character}', [CharacterController::class, 'show'])->can('view', 'character');
    Route::post('/characters/{character}/use', [CharacterController::class, 'use'])->can('use', 'character');

    Route::post('/longrest', [CharacterController::class, 'longrest']);

    Route::get('/builder/character', [CharacterBuilderController::class, 'create']);
    Route::post('/builder/character', [CharacterBuilderController::class, 'store']);
    Route::get('/builder/character/{character}', [CharacterBuilderController::class, 'details'])->can('view', 'character');
    Route::post('/builder/character/{character}', [CharacterBuilderController::class, 'update'])->can('update', 'character');

    Route::get('/builder/random', [CharacterBuilderController::class, 'random']);

    Route::get('/notes', [NoteController::class, 'index']);
    Route::get('/notes/export', [NoteController::class, 'export']);
    Route::get('/notes/create', [NoteController::class, 'create']);
    Route::post('/notes/create', [NoteController::class, 'store']);
    Route::get('/notes/{note}', [NoteController::class, 'show'])->can('view', 'note');
    Route::post('/notes/{note}/swatch', [NoteController::class, 'swatch'])->can('update', 'note');
    Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->can('update', 'note');
    Route::post('/notes/{note}/edit', [NoteController::class, 'update'])->can('update', 'note');
    Route::delete('/notes/{note}/delete', [NoteController::class, 'destroy'])->can('delete', 'note');

    Route::get('/items', [InventoryController::class, 'index']);

    Route::get('/inventory', [InventoryController::class, 'inventory']);

    Route::get('/spells', [SpellController::class, 'index']);
    Route::get('/spells/{spell}', [SpellController::class, 'show']);

    Route::get('/spellbook', [SpellController::class, 'spellbook']);

    Route::post('/cast/{level}', [SpellController::class, 'cast']);

    Route::get('/combat', [CombatController::class, 'index']);
    Route::post('/combat/damage/{character}', [CombatController::class, 'damage'])->can('update','character');
    Route::post('/combat/heal/{character}', [CombatController::class, 'heal'])->can('update','character');
    Route::post('/combat/health/{character}', [CombatController::class, 'health'])->can('update','character');
    
    Route::post('/initiative/set', [CombatController::class, 'set']);
    Route::post('/initiative/roll', [CombatController::class, 'roll']);
    Route::post('/initiative/health/{initiative}', [CombatController::class, 'update']);
    Route::post('/initiative/kill/{character}', [CombatController::class, 'kill'])->can('use', 'character');   

    Route::post('/initiative', [CombatController::class, 'store']);
    Route::post('/initiative/{initiative}', [CombatController::class, 'update']);
    Route::delete('/initiative/{initiative}', [CombatController::class, 'destroy']);

    Route::get('/profile', [UserController::class, 'show']);
    Route::get('/profile/password', [UserController::class, 'edit']);
    Route::post('/profile/password', [UserController::class, 'update']);

    Route::get('/users', [UserController::class, 'index'])->middleware('admin');
    Route::get('/users/create', [UserController::class, 'create'])->middleware('admin');
    Route::post('/users/create', [UserController::class, 'store'])->middleware('admin');
    Route::post('/users/{user}/password-reset', [UserController::class, 'password_reset'])->middleware('admin');
});

Route::get('/nope', function() { return view('auth.dead'); });

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->middleware('throttle:5,1');

Route::post('/logout', [SessionController::class, 'destroy']);