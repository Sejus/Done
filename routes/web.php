<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\FichierController;
use App\Http\Controllers\UtilisateurController;

// Routes pour les Tâches
Route::resource('taches', TacheController::class);

// Routes pour les Notes (liées aux Tâches)
Route::resource('taches.notes', NoteController::class)->except(['index', 'show']);

// Routes pour les Fichiers (liés aux Tâches)
Route::resource('taches.fichiers', FichierController::class)->except(['index', 'show', 'edit']);

// Routes pour les Utilisateurs
Route::resource('utilisateur', UtilisateurController::class);

Route::get('/', function () {
    return view('welcome');
});
