<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'chemin',
        'id_tache',
    ];

    public function tache()
    {
        return $this->belongsTo(Tache::class, 'id_tache');
    }

    public function getTache() : Tache
    {
        return $this->tache;
    }

    public function getTaille() : int
    {
        return $this->taille;
    }

    public function getMimeType() : string
    {
        return $this->mime_type;
    }
}
