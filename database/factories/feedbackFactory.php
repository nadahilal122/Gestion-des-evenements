<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\feedback>
 */
class feedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => function () {
                return Client::factory()->create()->id;
            },
            'event_id' => function () {
                return event::factory()->create()->id;
            },
            'rating'=> fake()->numberBetween(1, 5),
            'comments'=> fake()->paragraph(),
            'likes'=> fake()->numberBetween(0, 1000),

        ];

    }
}
