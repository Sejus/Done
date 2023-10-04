<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note;
use App\Models\Tache;

class NoteSeeder extends Seeder
{
    public function run()
    {
        Tache::all()->each(function ($tache) {
            Note::factory()->count(3)->create(['id_tache' => $tache->id]);
        });
    }
}
