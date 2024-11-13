<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('replies')->insert([
            [
                'user_id' => 8, 
                'comment_id' => 1, 
                'content' => 'Senang sekali kita punya selera yang sama! Sweater dari Tredwear memang juara banget ya.',
                'status' => 1,
            ],
            [
                'user_id' => 4, 
                'comment_id' => 2, 
                'content' => 'Wah, menarik juga! Saya akan coba kedua solusi ini dan lihat mana yang paling cocok.',
                'status' => 0,
            ],
        ]);
    }
}
