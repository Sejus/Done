<?php

use App\Http\Controllers\Api\TacheApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NoteApiController;
use App\Http\Controllers\Api\FichierApiController;

// Routes pour les Tâches
Route::apiResource('taches', TacheApiController::class);

// Routes pour les Notes (liées aux Tâches)
Route::prefix('taches/{tache}')->group(function () {
    Route::apiResource('notes', NoteApiController::class);
});

// Routes pour les Fichiers (liés aux Tâches)
Route::prefix('taches/{tache}')->group(function () {
    Route::apiResource('fichiers', FichierApiController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/api/mobile/login', 'AuthController@mobileLogin');
