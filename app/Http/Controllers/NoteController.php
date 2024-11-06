<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        Note::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(), // Para asociar la nota al usuario autenticado
        ]);

        return to_route('notes.index');
    }

    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.show', compact('note'));
    }

    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);

        $note->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return to_route('notes.show', $id);
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return to_route('notes.index');
    }
}
