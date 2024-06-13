<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
    {
        /**
         * The current password being used by the factory.
         */
        protected static ?string $password;
     
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            return [
                'username'=>fake()->userName(),
                'location'=>fake()->city(),
                'email' => fake()->unique()->safeEmail(),
                'number'=>substr(fake()->phoneNumber(), 0, 10),
                'password' => static::$password ??= Hash::make('password'),
                'remember_token' => Str::random(10),
            ];
        }
        
     
        /**
         * Indicate that the model's email address should be unverified.
         */
        public function unverified(): static
        {
            return $this->state(fn (array $attributes) => [
                'email_verified_at' => null,
            ]);
        }
    }