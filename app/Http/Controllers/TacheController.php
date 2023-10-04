<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function create(Request $request)
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

        return redirect()->route('tache.show', $tache->tacheId)->with('success', 'Tâche créée avec succès.');
    }

    public function show($tacheId)
    {
        $tache = Tache::findOrFail($tacheId);
        return view('tache.show', compact('tache'));
    }

    public function edit($tacheId)
    {
        $tache = Tache::findOrFail($tacheId);
        return view('tache.edit', compact('tache'));
    }

    public function update(Request $request, $tacheId)
    {
        $tache = Tache::findOrFail($tacheId);

        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'dateCreation' => 'required|date',
            'dateEcheance' => 'required|date',
            'priorite' => 'required|in:haute,moyenne,basse',
            'etat' => 'required|in:en cours,terminée',
        ]);

        $tache->update($request->all());

        return redirect()->route('tache.show', $tache->tacheId)->with('success', 'Tâche mise à jour avec succès.');
    }

    public function destroy($tacheId)
    {
        $tache = Tache::findOrFail($tacheId);
        $tache->delete();

        return redirect()->route('tache.index')->with('success', 'Tâche supprimée avec succès.');
    }
}
