<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('likes')->insert([
            [
                'user_id' => 4, 
                'project_id' => 1, 
            ],
            [
                'user_id' => 5, 
                'project_id' => 2, 
            ],
            [
                'user_id' => 6, 
                'project_id' => 2, 
            ],
            [
                'user_id' => 7, 
                'project_id' => 2, 
            ],
            [
                'user_id' => 8, 
                'project_id' => 2, 
            ],
            [
                'user_id' => 5, 
                'project_id' => 1, 
            ],
        ]);
    }
}
