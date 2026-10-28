<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'curso_id' => Curso::factory(),
            'numeroCiclo' => fake()->numberBetween(1, 3),
            'anio' => fake()->numberBetween(2024, 2030),
            'numeroGrupo' => fake()->numberBetween(1, 10),
            'abierto' => fake()->boolean(),
        ];
    }
}
