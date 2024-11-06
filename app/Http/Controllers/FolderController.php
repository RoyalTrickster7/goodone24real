<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\User;
use App\Models\Category; 
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    /**
     * Display a listing of the folders.
     */
    public function index()
    {
        $folders = Folder::all();
        return view('folders.index', compact('folders'));
    }

    /**
     * Show the form for creating a new folder.
     */
    public function create()
    {
        $categories = Category::all(); // Obtiene todas las categorías para el formulario
        return view('folders.create', compact('categories'));
    }

    /**
     * Store a newly created folder in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'categories_id' => 'required|exists:categories,id', // Asegura que categories_id es válido
        ]);

        Folder::create([
            'name' => $request->name,
            'user_id' => Auth::id(), // Asigna la carpeta al usuario autenticado
            'categories_id' => $request->categories_id, // Almacena categories_id
        ]);

        return redirect()->route('folders.index')->with('success', 'Folder created successfully.');
    }

    /**
     * Display the specified folder.
     */
    public function show($id)
    {
        $folder = Folder::findOrFail($id);
        return view('folders.show', compact('folder'));
    }

    /**
     * Show the form for editing the specified folder.
     */
    public function edit($id)
    {
        $folder = Folder::findOrFail($id);
        $categories = Category::all(); // Obtiene todas las categorías para el formulario de edición
        return view('folders.edit', compact('folder', 'categories'));
    }

    /**
     * Update the specified folder in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'categories_id' => 'required|exists:categories,id', // Asegura que categories_id es válido
        ]);

        $folder = Folder::findOrFail($id);

        $folder->update([
            'name' => $request->name,
            'categories_id' => $request->categories_id, // Actualiza categories_id
        ]);

        return redirect()->route('folders.show', $id)->with('success', 'Folder updated successfully.');
    }

    /**
     * Remove the specified folder from storage.
     */
    public function destroy($id)
    {
        $folder = Folder::findOrFail($id);
        $folder->delete();
        return redirect()->route('folders.index')->with('success', 'Folder deleted successfully.');
    }
}
