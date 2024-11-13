<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'user_id' => 9, 
                'project_id' => 1, 
                'text' => 'Kualitas sweaternya keren banget! Bahannya tebal dan nyaman dipakai. Desainnya juga kekinian dan banyak pilihan warna. Saya sudah punya beberapa koleksi dari Tredwear dan selalu puas.',
                'status' => 1,
            ],
            [
                'user_id' => 5, 
                'project_id' => 2, 
                'text' => 'Fitur dokumentasi di Devforum ini sangat membantu! Penjelasannya jelas dan mudah dipahami, bahkan untuk konsep yang cukup kompleks. Semoga ke depannya ada fitur untuk membandingkan berbagai package atau framework secara langsung.',
                'status' => 0,
            ],
        ]);
    }
}