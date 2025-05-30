<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SpellController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/characters', [CharacterController::class, 'index'])->middleware('auth');
Route::get('/characters/create', [CharacterController::class, 'create'])->middleware('auth');
Route::post('/characters/none', [CharacterController::class, 'use'])->middleware('auth');
Route::get('/characters/{character}', [CharacterController::class, 'show'])->middleware('auth');
Route::post('/characters/{character}/use', [CharacterController::class, 'use'])->middleware('auth')->can('use', 'character');

Route::get('/notes', [NoteController::class, 'index'])->middleware('auth');
Route::get('/notes/export', [NoteController::class, 'export'])->middleware('auth');
Route::get('/notes/create', [NoteController::class, 'create'])->middleware('auth');
Route::post('/notes/create', [NoteController::class, 'store'])->middleware('auth');
Route::get('/notes/{note}', [NoteController::class, 'show'])->middleware('auth')->can('view', 'note');
Route::post('/notes/{note}/swatch', [NoteController::class, 'swatch'])->middleware('auth')->can('update', 'note');
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->middleware('auth')->can('update', 'note');
Route::post('/notes/{note}/edit', [NoteController::class, 'update'])->middleware('auth')->can('update', 'note');
Route::delete('/notes/{note}/delete', [NoteController::class, 'destroy'])->middleware('auth')->can('delete', 'note');

Route::get('/items', [InventoryController::class, 'index'])->middleware('auth');

Route::get('/inventory', [InventoryController::class, 'inventory'])->middleware('auth');

Route::get('/spells', [SpellController::class, 'index'])->middleware('auth');
Route::get('/spells/{spell}', [SpellController::class, 'show'])->middleware('auth');

Route::get('/spellbook', [SpellController::class, 'spellbook'])->middleware('auth');

Route::get('/potions', function () {
    return view('potions');
})->middleware('auth');

Route::get('/almanac', function () {
    return view('almanac');
})->middleware('auth');

Route::get('/quests', function () {
    return view('quests');
})->middleware('auth');

Route::get('/maps', function () {
    return view('maps');
})->middleware('auth');

Route::get('/contacts', function () {
    return view('contacts');
})->middleware('auth');

Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);