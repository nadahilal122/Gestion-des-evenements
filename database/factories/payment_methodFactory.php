<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\payment_method>
 */
class payment_methodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_method'=> fake()->randomElement(['Credit Card', 'PayPal', 'Cash', 'Checks','Alipay','Apple Pay']),
        ];
    }
}
