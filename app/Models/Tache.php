<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'dateCreation',
        'dateEcheance',
        'priorite',
        'etat',
    ];

    public static function create(array $all)
    {
    }

    public function fichiers()
    {
        return $this->belongsToMany(Fichier::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function getFichier() : Collection
    {
        return $this->fichier;
    }

    public function getUtilisateur() : Utilisateur
    {
        return $this->utilisateur;
    }

    public function store()
    {
        $this->validate();

        if ($this->titre === '') {
            throw new \Exception('Le titre de la tâche est obligatoire.');
        }

        if ($this->dateEcheance === '') {
            throw new \Exception('La date d\'échéance de la tâche est obligatoire.');
        }

        if ($this->utilisateurId === null) {
            throw new \Exception('L\'identifiant de l\'utilisateur est obligatoire.');
        }

        return $this->save();
    }

    public function update(array $attributes = [], array $options = [])
    {

    }
}
