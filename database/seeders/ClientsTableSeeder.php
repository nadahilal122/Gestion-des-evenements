<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
        Client::updateOrCreate(
            ['username' => 'Admin'],
            [
                'email' => 'admin@example.com',
                'location' => 'Admin Location',
                'number' => '123456789',
                'password' => Hash::make('AdminAdmin'),
                'photo' => 'default.jpg' // Or any other default value
            ]
        );
    }
}
