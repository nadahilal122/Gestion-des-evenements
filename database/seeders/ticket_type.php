<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ticket_type extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\ticket_type::factory(4)->create();

    }
}
