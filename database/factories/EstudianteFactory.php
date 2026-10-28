<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'carne' => fake()->unique()->numerify('C######'),
            'nombre' => fake()->firstName(),
            'apellidos' => fake()->lastName() . ' ' . fake()->lastName(),
            'docente_consejero_id' => Docente::factory(),
        ];
    }
}
