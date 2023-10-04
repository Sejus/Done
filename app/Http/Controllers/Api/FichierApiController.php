<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fichier;
use App\Models\Tache;
use Illuminate\Http\Request;

class FichierApiController extends Controller
{
    public function store(Request $request, $tacheId)
    {
        $request->validate([
            'nom' => 'required',
            'chemin' => 'required',
        ]);

        $fichier = new Fichier($request->all());
        $fichier->id_tache = $tacheId;
        $fichier->save();

        return response()->json(['fichier' => $fichier], 201);
    }

    public function destroy($tacheId, $fichierId)
    {
        $fichier = Fichier::findOrFail($fichierId);
        $fichier->delete();

        return response()->json(['message' => 'Fichier supprimé avec succès']);
    }
}
