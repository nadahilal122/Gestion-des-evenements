<?php

namespace Database\Seeders;

use App\Models\event_type as ModelsEvent_type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class event_type extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\event_type::factory(5)->create();

    }

 }
