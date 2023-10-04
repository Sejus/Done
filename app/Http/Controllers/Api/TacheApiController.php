<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tache;
use Illuminate\Http\Request;

class TacheApiController extends Controller
{
    public function index()
    {
        $taches = Tache::all();
        return response()->json(['taches' => $taches]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'dateCreation' => 'required|date',
            'dateEcheance' => 'required|date',
            'priorite' => 'required|in:haute,moyenne,basse',
            'etat' => 'required|in:en cours,terminée',
        ]);

        $tache = Tache::create($request->all());

        return response()->json(['tache' => $tache], 201);
    }

    public function show($id)
    {
        $tache = Tache::findOrFail($id);
        return response()->json(['tache' => $tache]);
    }

    public function update(Request $request, $id)
    {
        $tache = Tache::findOrFail($id);

        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'dateCreation' => 'required|date',
            'dateEcheance' => 'required|date',
            'priorite' => 'required|in:haute,moyenne,basse',
            'etat' => 'required|in:en cours,terminée',
        ]);

        $tache->update($request->all());

        return response()->json(['tache' => $tache], 200);
    }

    public function destroy($id)
    {
        $tache = Tache::findOrFail($id);
        $tache->delete();

        return response()->json(['message' => 'Tâche supprimée avec succès']);
    }
}
