<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use App\Models\Tache;
use Illuminate\Http\Request;

class FichierController extends Controller
{
    public function create(Request $request, $tacheId)
    {
        $request->validate([
            'nom' => 'required',
            'chemin' => 'required',
            'id_tache' => 'required|exists:taches,tacheId',
        ]);

        $fichier = new Fichier($request->all());
        $fichier->id_tache = $tacheId;
        $fichier->save();

        return redirect()->route('tache.show', $tacheId)->with('success', 'Fichier créé avec succès.');
    }

    public function download($tacheId, $fichierId)
    {
        $fichier = Fichier::findOrFail($fichierId);
        $path = storage_path('app/' . $fichier->chemin);

        return response()->download($path, $fichier->nom);
    }

    public function edit($tacheId, $fichierId)
    {
        $fichier = Fichier::findOrFail($fichierId);
        return view('fichier.edit', compact('fichier'));
    }

    public function update(Request $request, $tacheId, $fichierId)
    {
        $fichier = Fichier::findOrFail($fichierId);

        $request->validate([
            'nom' => 'required',
            'chemin' => 'required',
            'id_tache' => 'required|exists:taches,tacheId',
        ]);

        $fichier->update($request->all());

        return redirect()->route('fichier.show', [$tacheId, $fichierId])->with('success', 'Fichier mis à jour avec succès.');
    }

    public function destroy($tacheId, $fichierId)
    {
        $fichier = Fichier::findOrFail($fichierId);
        $fichier->delete();

        return redirect()->route('tache.show', $tacheId)->with('success', 'Fichier supprimé avec succès.');
    }
}
