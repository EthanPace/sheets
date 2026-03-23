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
})->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'characters'], function () {
        Route::get('/', [CharacterController::class, 'index'])->name('characters');
        Route::post('/none', [CharacterController::class, 'none']);
        Route::get('/{character}', [CharacterController::class, 'show'])->can('view', 'character');
        Route::post('/{character}/use', [CharacterController::class, 'use'])->can('use', 'character');
    });

    Route::post('/longrest', [CharacterController::class, 'longrest']);

    Route::group(['prefix' => 'builder'], function () {

        Route::group(['prefix' => 'character'], function () {
            Route::get('/', [CharacterBuilderController::class, 'create'])->name('builder.character.create');
            Route::post('/', [CharacterBuilderController::class, 'store']);
            Route::get('/{character}', [CharacterBuilderController::class, 'details'])->can('view', 'character');
            Route::post('/{character}', [CharacterBuilderController::class, 'update'])->can('update', 'character');
        });

        Route::get('/random', [CharacterBuilderController::class, 'random']);
    });

    Route::group(['prefix' => 'notes'], function () {
        Route::get('/', [NoteController::class, 'index'])->name('notes');
        Route::get('/export', [NoteController::class, 'export'])->name('notes.export');
        Route::get('/create', [NoteController::class, 'create'])->name('notes.create');
        Route::post('/create', [NoteController::class, 'store']);
        Route::get('/{note}', [NoteController::class, 'show'])->can('view', 'note');
        Route::post('/{note}/swatch', [NoteController::class, 'swatch'])->can('update', 'note');
        Route::get('/{note}/edit', [NoteController::class, 'edit'])->can('update', 'note');
        Route::post('/{note}/edit', [NoteController::class, 'update'])->can('update', 'note');
        Route::delete('/{note}/delete', [NoteController::class, 'destroy'])->can('delete', 'note');
    });

    Route::get('/items', [InventoryController::class, 'index'])->name('items');

    Route::get('/inventory', [InventoryController::class, 'inventory'])->name('inventory');

    Route::group(['prefix' => 'spells'], function () {
        Route::get('/', [SpellController::class, 'index'])->name('spells');
        Route::get('/{spell}', [SpellController::class, 'show']);
    });

    Route::get('/spellbook', [SpellController::class, 'spellbook'])->name('spellbook');

    Route::post('/cast/{level}', [SpellController::class, 'cast']);

    Route::group(['prefix' => 'combat'], function () {
        Route::get('/', [CombatController::class, 'index'])->name('combat');
        Route::post('/damage/{character}', [CombatController::class, 'damage'])->can('update','character');
        Route::post('/heal/{character}', [CombatController::class, 'heal'])->can('update','character');
        Route::post('/health/{character}', [CombatController::class, 'health'])->can('update','character');
    });
    
    Route::group(['prefix' => 'initiative'], function () {
        Route::post('/set', [CombatController::class, 'set']);
        Route::post('/roll', [CombatController::class, 'roll']);
        Route::post('/health/{initiative}', [CombatController::class, 'update']);
        Route::post('/kill/{character}', [CombatController::class, 'kill'])->can('use', 'character');

        Route::post('/', [CombatController::class, 'store']);
        Route::post('/{initiative}', [CombatController::class, 'update']);
        Route::delete('/{initiative}', [CombatController::class, 'destroy']);
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [UserController::class, 'show'])->name('profile');
        Route::get('/password', [UserController::class, 'edit'])->name('profile.password');
        Route::post('/password', [UserController::class, 'update']);
    });

    Route::group(['middleware' => 'admin', 'prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('users');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/create', [UserController::class, 'store']);
        Route::post('/{user}/password-reset', [UserController::class, 'password_reset']);
    });
});

Route::group(['prefix' => 'login'], function () {
    Route::get('/', [SessionController::class, 'create'])->name('login');
    Route::post('/', [SessionController::class, 'store'])->middleware('throttle:5,1');
});

Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/nope', function() { return view('auth.dead'); })->name('nope');