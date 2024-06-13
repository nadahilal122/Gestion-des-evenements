<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\price_type>
 */
class price_typeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'basic' => fake()->numberBetween($min = 1, $max = 200),
            'standart' => fake()->numberBetween($min = 1, $max = 200),
            'VIP' => fake()->numberBetween($min = 1, $max = 200),
        ];
    }
}
