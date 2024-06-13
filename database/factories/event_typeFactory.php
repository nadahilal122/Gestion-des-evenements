<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event_type>
 */
class event_typeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_type'=> fake()->randomElement(['Conference', 'Workshop', 'Networking', 'festival','sport','party','comedy']),
        ];
    }
}
