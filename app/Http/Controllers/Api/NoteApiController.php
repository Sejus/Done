<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use App\Models\Tache;
use Illuminate\Http\Request;

class NoteApiController extends Controller
{
    public function index($tacheId)
    {
        $notes = Note::where('id_tache', $tacheId)->get();
        return response()->json(['notes' => $notes]);
    }

    public function store(Request $request, $tacheId)
    {
        $request->validate([
            'texte' => 'required',
            'dateCreation' => 'required|date',
        ]);

        $note = new Note($request->all());
        $note->id_tache = $tacheId;
        $note->save();

        return response()->json(['note' => $note], 201);
    }

    public function show($tacheId, $noteId)
    {
        $note = Note::findOrFail($noteId);
        return response()->json(['note' => $note]);
    }

    public function update(Request $request, $tacheId, $noteId)
    {
        $note = Note::findOrFail($noteId);

        $request->validate([
            'texte' => 'required',
            'dateCreation' => 'required|date',
        ]);

        $note->update($request->all());

        return response()->json(['note' => $note], 200);
    }

    public function destroy($tacheId, $noteId)
    {
        $note = Note::findOrFail($noteId);
        $note->delete();

        return response()->json(['message' => 'Note supprimée avec succès']);
    }
}
