<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Client extends Seeder
{

    public function run(): void
    {
        \App\Models\Client::factory(5)->create();
    }
}
