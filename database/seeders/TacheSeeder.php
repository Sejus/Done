<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tache;

class TacheSeeder extends Seeder
{
    public function run()
    {
        Tache::factory()->count(10)->create();
    }
}
