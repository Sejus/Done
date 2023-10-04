<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'utilisateurId',
        'nom',
        'prenom',
        'email',
        'motDePasse',
    ];

    public function tache()
    {
        return $this->hasMany(Tache::class);
    }

    public function getTache() : Collection
    {
        return $this->tache;
    }

    public function store()
    {
        $this->validate();

        if ($this->email === '') {
            throw new \Exception('L\'adresse e-mail est obligatoire.');
        }

        if ($this->motDePasse === '') {
            throw new \Exception('Le mot de passe est obligatoire.');
        }

        return $this->save();
    }

    public function update()
    {
        $this->validate();

        if ($this->email === '') {
            throw new \Exception('L\'adresse e-mail est obligatoire.');
        }

        if ($this->motDePasse === '') {
            throw new \Exception('Le mot de passe est obligatoire.');
        }

        return $this->save();
    }

    public function destroy()
    {
        return $this->delete();
    }
}
