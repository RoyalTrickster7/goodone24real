<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por middleware de autenticación
Route::middleware('auth')->group(function () {
    // Rutas de perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas de CRUD para categorías
    Route::resource('categories', CategoryController::class);

    // Rutas de CRUD para usuarios
    Route::resource('users', UserController::class);

    // Rutas de CRUD para notas
    Route::resource('notes', NoteController::class);

    // Rutas de CRUD para carpetas
    Route::resource('folders', FolderController::class);
});

// Ruta para la actividad de DataController
Route::get('/retrieve-data', [DataController::class, 'retrieveData']);

// Archivo de autenticación (login, registro, etc.)
require __DIR__.'/auth.php';

/*

MIGRATIONS
SEEDERS
FACTORIES
ELOQUENT ORM
CRUD OPERATIONS
AUTHENTICATION SYSTEM
FILE STORAGE

*/
