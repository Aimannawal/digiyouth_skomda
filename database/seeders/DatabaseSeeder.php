<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            CategoriesSeeder::class,
            TeamsTableSeeder::class,
            TeamUsersTableSeeder::class,
            ProjectSeeder::class,
            CommentSeeder::class,
            LikeSeeder::class,
            ReplySeeder::class,
            ToolSeeder::class,
        ]);
    }
    
}
