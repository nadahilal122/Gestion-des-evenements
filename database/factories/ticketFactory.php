<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\event;
use App\Models\price_type;
use App\Models\quantity_available;
use App\Models\ticket_type;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ticket>
 */
class ticketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => event::factory()->create()->id,
            'price_type_id' => price_type::factory()->create()->id,
            'quantity_available_id' =>quantity_available::factory()->create()->id,
        ];
    }
}
