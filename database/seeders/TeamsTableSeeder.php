<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TeamsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('teams')->insert([
            [
                'id' => 1,
                'name' => 'Air',
                'created_at' => Carbon::parse('2024-11-12 04:46:46'),
                'updated_at' => Carbon::parse('2024-11-12 04:46:46'),
            ],
            [
                'id' => 2,
                'name' => 'Paket Hemat Indihome',
                'created_at' => Carbon::parse('2024-11-12 04:48:05'),
                'updated_at' => Carbon::parse('2024-11-12 04:48:05'),
            ],
        ]);
    }
}
