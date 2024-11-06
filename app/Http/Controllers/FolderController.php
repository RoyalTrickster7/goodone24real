<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\User;

class FolderController extends Controller
{
    public function index()
    {
        $folders = Folder::all();
        return view('folders.index', compact('folders'));
    }

    public function create()
    {
        return view('folders.create');
    }

    public function store(Request $request)
    {
        Folder::create([
            'name' => $request->name,
            'user_id' => Auth::id(), // Para asociar la carpeta al usuario autenticado
        ]);

        return to_route('folders.index');
    }

    public function show($id)
    {
        $folder = Folder::findOrFail($id);
        return view('folders.show', compact('folder'));
    }

    public function edit($id)
    {
        $folder = Folder::findOrFail($id);
        return view('folders.edit', compact('folder'));
    }

    public function update(Request $request, $id)
    {
        $folder = Folder::findOrFail($id);

        $folder->update([
            'name' => $request->name,
        ]);

        return to_route('folders.show', $id);
    }

    public function destroy($id)
    {
        $folder = Folder::findOrFail($id);
        $folder->delete();
        return to_route('folders.index');
    }
}
