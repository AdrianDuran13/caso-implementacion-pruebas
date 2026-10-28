<?php

namespace Database\Factories;

use App\Models\Estudiante;
use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteMatriculadoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'estudiante_id' => Estudiante::factory(),
            'grupo_id' => Grupo::factory(),
            'nota' => fake()->randomFloat(2, 0, 10),
        ];
    }
}