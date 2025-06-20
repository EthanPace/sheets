<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index() {
        $user = Auth::user();

        if ($user->role === "player" || $user->role === "runner") {
            $notes = Note::where('user_id', $user->id)->get();
        } else {
            $notes = Note::all();
        }

        return view('notes.index',  [
            'user' => Auth::user(),
            'notes' => $notes,
        ]);
    }

    public function show(Note $note) {
        $user = Auth::user();

        return view('notes.show', [
            'user' => $user,
            'note' => $note,
        ]);
    }

    public function export() {
        $user = Auth::user();

        if ($user->role === "player" || $user->role === "runner") {
            $notes = Note::where('user_id', $user->id)->get();
        } else {
            $notes = Note::all();
        }

        return view('notes.export', [
            'notes' => $notes,
            'user' => $user,
        ]);
    }

    public function store() {
        $user = Auth::user();
        $title = e(request('title'));
        if (in_array(request('theme'), ["rose","yellow","indigo","gray","cyan","lime","purple","orange","pink"])) {
            $theme = request('theme');
        } else {
            $theme = "yellow";
        }
        $text = e(request('text'));

        Note::create([
            'user_id' => $user->id,
            'title' => $title,
            'theme' => $theme,
            'text' => $text,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect("/notes");
    }

    public function create() {
        return view('notes.create', [
            'user' => Auth::user(),
        ]);
    }

    public function swatch(Note $note) {
        if (in_array(request('theme'), ["rose","yellow","indigo","gray","cyan","lime","purple","orange","pink"])) {
            $note->update([
                'theme' => request('theme'),
                'updated_at' => now(),
            ]);
        }

        return redirect("/notes/" . $note->id);
    }

    public function edit(Note $note) {
        $user = Auth::user();

        return view('notes.edit', [
            'user' => $user,
            'note' => $note,
        ]);
    }

    public function update(Note $note) {
        if (request('act') === "delete") {
            $this->destroy($note);
            return redirect('/notes');
        }

        $title = e(request('title'));
        $text = e(request('text'));

        $note->update([
            'title' => $title,
            'text' => $text,
            'updated_at' => now(),
        ]);

        return redirect("/notes/" . $note->id);
    }

    public function destroy(Note $note) {
        $note->delete();
    }
}
