<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Payment;
use App\Models\payment_method;
use App\Models\Ticket;
use App\Models\ticket_type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\payments>
 */
class paymentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::factory()->create()->id,
            'ticket_id' => Ticket::factory()->create()->id,
            'ticket_type_id' => ticket_type::factory()->create()->id,
            'payment_method_id' => payment_method::factory()->create()->id,

        ];
    }
}
