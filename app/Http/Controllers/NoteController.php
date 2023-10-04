<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Tache;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function create(Request $request, $tacheId)
    {
        $request->validate([
            'texte' => 'required',
            'dateCreation' => 'required|date',
        ]);

        $note = new Note($request->all());
        $note->id_tache = $tacheId;
        $note->save();

        return redirect()->route('tache.show', $tacheId)->with('success', 'Note créée avec succès.');
    }

    public function show($tacheId, $noteId)
    {
        $note = Note::findOrFail($noteId);
        return view('note.show', compact('note'));
    }

    public function edit($tacheId, $noteId)
    {
        $note = Note::findOrFail($noteId);
        return view('note.edit', compact('note'));
    }

    public function update(Request $request, $tacheId, $noteId)
    {
        $note = Note::findOrFail($noteId);

        $request->validate([
            'texte' => 'required',
            'dateCreation' => 'required|date',
        ]);

        $note->update($request->all());

        return redirect()->route('note.show', [$tacheId, $noteId])->with('success', 'Note mise à jour avec succès.');
    }

    public function destroy($tacheId, $noteId)
    {
        $note = Note::findOrFail($noteId);
        $note->delete();

        return redirect()->route('tache.show', $tacheId)->with('success', 'Note supprimée avec succès.');
    }
}
