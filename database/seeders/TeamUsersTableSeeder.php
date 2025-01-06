<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TeamUsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('team_users')->insert([
            [
                'team_id' => 1,
                'user_id' => 4,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:46:46'),
                'updated_at' => Carbon::parse('2024-11-12 04:46:46'),
            ],            [
                'team_id' => 1,
                'user_id' => 6,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:46:46'),
                'updated_at' => Carbon::parse('2024-11-12 04:46:46'),
            ],
            [
                'team_id' => 1,
                'user_id' => 5,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:46:46'),
                'updated_at' => Carbon::parse('2024-11-12 04:46:46'),
            ],
            [
                'team_id' => 2,
                'user_id' => 8,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:48:05'),
                'updated_at' => Carbon::parse('2024-11-12 04:48:05'),
            ],
            [
                'team_id' => 2,
                'user_id' => 9,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:48:05'),
                'updated_at' => Carbon::parse('2024-11-12 04:48:05'),
            ],

            [
                'team_id' => 2,
                'user_id' => 7,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:48:05'),
                'updated_at' => Carbon::parse('2024-11-12 04:48:05'),
            ],

            [
                'team_id' => 3,
                'user_id' => 4,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:48:05'),
                'updated_at' => Carbon::parse('2024-11-12 04:48:05'),
            ],

            [
                'team_id' => 3,
                'user_id' => 6,
                'role_in_team' => null,
                'created_at' => Carbon::parse('2024-11-12 04:48:05'),
                'updated_at' => Carbon::parse('2024-11-12 04:48:05'),
            ],
            
        ]);
    }
}
