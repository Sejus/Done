<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'texte',
        'date_creation',
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
}
