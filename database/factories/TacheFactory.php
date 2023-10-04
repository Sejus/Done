<?php

namespace Database\Factories;

use App\Models\Tache;
use Illuminate\Database\Eloquent\Factories\Factory;

class TacheFactory extends Factory
{
    protected $model = Tache::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'dateCreation' => now(),
            'dateEcheance' => $this->faker->dateTimeBetween('now', '+1 month'),
            'priorite' => $this->faker->randomElement(['haute', 'moyenne', 'basse']),
            'etat' => $this->faker->randomElement(['en cours', 'terminee']),
        ];
    }
}


