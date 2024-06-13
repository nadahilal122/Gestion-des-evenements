<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ticket_type>
 */
class ticket_typeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     */
    public function definition(): array
    {
        return [
            'ticket_type' => fake()->randomElement(['basic', 'standart', 'VIP']),
        ];
    }
}
