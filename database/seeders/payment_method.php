<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class payment_method extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\payment_method::factory(4)->create();
    }
}    