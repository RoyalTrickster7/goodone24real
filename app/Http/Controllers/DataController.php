<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Note;
use App\Models\Folder;
use App\Models\Category;

class DataController extends Controller
{
    public function retrieveData()
    {
        // Recuperar todos los registros de cada tabla
        $users = User::orderBy('name', 'asc')->get();       // Variable para usuarios, ordenados por nombre
        $notes = Note::where('user_id', 1)->get();          // Variable para notas, filtradas por user_id
        $folders = Folder::limit(5)->get();                 // Variable para carpetas, limitadas a 5
        $categories = Category::all();                      // Variable para todas las categorías

        // Mostrar el resultado en el navegador usando dd()
        dd(compact('users', 'notes', 'folders', 'categories'));
    }
}
