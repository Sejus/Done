<?php

namespace Database\Factories;

use App\Models\Fichier;
use Illuminate\Database\Eloquent\Factories\Factory;

class FichierFactory extends Factory
{
    protected $model = Fichier::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'chemin' => $this->faker->file(storage_path('app/public')),
        ];
    }
}
