<?php

namespace Database\Factories;

use App\Models\Client ;
use App\Models\event_type;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event>
 */
class eventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->title(),
            'photo'=>fake()->image(),
            'ville'=> fake() ->city(),
            'description'=> fake()->text(200),
            'date_deput'=>fake()->date(),
            'client_id' => Client::factory()->create()->id,
            'event_type_id' => Event_Type::factory()->create()->id,
        ];
    }
}
