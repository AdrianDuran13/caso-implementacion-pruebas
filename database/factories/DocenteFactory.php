<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocenteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'codEmpleado' => fake()->unique()->numerify('EMP#####'),
            'nombreEmpleado' => fake()->firstName(),
            'apellidosEmpleado' => fake()->lastName() . ' ' . fake()->lastName(),
        ];
    }
}

