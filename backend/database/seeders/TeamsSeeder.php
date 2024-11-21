<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("teams")->insert([[
            'short_name' => 'BOS',
            'full_name' => 'Boston Celtics',
            ],
            [
            'short_name' => 'GSW',
            'full_name' => 'Golden State Warriors',
            ],
            [
            'short_name' => 'MIN',
            'full_name' => 'Minnesota Timberwolves',
            ],
            [
            'short_name' => 'MIA',
            'full_name' => 'Miami Heat',
            ],]
        );
    }
}
