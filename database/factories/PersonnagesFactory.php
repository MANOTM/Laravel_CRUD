<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personnages>
 */
class PersonnagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=>fake()->name(),
            'detail'=>fake()->sentence($nbWords = 6, $variableNbWords = true),
            'company'=>fake()->name(),
            'fortune'=>fake()->numberBetween($min = 1000, $max = 9000),
        ];
    }
}
