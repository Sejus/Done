<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    // Affiche la liste des utilisateurs
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return view('utilisateurs.index', compact('utilisateurs'));
    }

    // Affiche le formulaire de création d'un nouvel utilisateur
    public function create()
    {
        return view('utilisateurs.create');
    }

    // Enregistre un nouvel utilisateur dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:utilisateurs',
            'motDePasse' => 'required|min:6',
            // Ajoutez les autres règles de validation ici
        ]);

        Utilisateur::create($request->all());

        return redirect('/utilisateurs')->with('success', 'Utilisateur créé avec succès !');
    }

    // Affiche les détails d'un utilisateur spécifique
    public function show(Utilisateur $utilisateur)
    {
        return view('utilisateurs.show', compact('utilisateur'));
    }

    // Affiche le formulaire d'édition d'un utilisateur
    public function edit(Utilisateur $utilisateur)
    {
        return view('utilisateurs.edit', compact('utilisateur'));
    }

    // Met à jour les informations d'un utilisateur dans la base de données
    public function update(Request $request, Utilisateur $utilisateur)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:utilisateurs,email,' . $utilisateur->id,
            'motDePasse' => 'nullable|min:6',
            // Ajoutez les autres règles de validation ici
        ]);

        $utilisateur->update($request->all());

        return redirect('/utilisateurs')->with('success', 'Utilisateur mis à jour avec succès !');
    }

    // Supprime un utilisateur de la base de données
    public function destroy(Utilisateur $utilisateur)
    {
        $utilisateur->delete();

        return redirect('/utilisateurs')->with('success', 'Utilisateur supprimé avec succès !');
    }
}

