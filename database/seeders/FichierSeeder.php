<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fichier;
use App\Models\Tache;

class FichierSeeder extends Seeder
{
    public function run()
    {
        Tache::all()->each(function ($tache) {
            Fichier::factory()->count(2)->create(['id_tache' => $tache->id]);
        });
    }
}

