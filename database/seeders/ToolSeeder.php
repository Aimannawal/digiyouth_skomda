<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tool = Tool::create([
            "name" => "Adobe Illustrator",
            "image" => "/assets/tools/adobeillustrator.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Adobe Photoshop",
            "image" => "/assets/tools/adobephotoshop.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Arduino",
            "image" => "/assets/tools/arduino.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Bootstrap",
            "image" => "/assets/tools/bootstrap.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Coreldraw",
            "image" => "/assets/tools/coreldraw.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Figma",
            "image" => "/assets/tools/figma.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Filament",
            "image" => "/assets/tools/filament.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Laravel",
            "image" => "/assets/tools/laravel.webp",    
        ]);

        $tool = Tool::create([
            "name" => "MySQL",
            "image" => "/assets/tools/mysql.webp",    
        ]);

        $tool = Tool::create([
            "name" => "NextJs",
            "image" => "/assets/tools/next.webp",    
        ]);

        $tool = Tool::create([
            "name" => "NodeJs",
            "image" => "/assets/tools/nodejs.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Postman",
            "image" => "/assets/tools/postman.webp",    
        ]);

        $tool = Tool::create([
            "name" => "React",
            "image" => "/assets/tools/react.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Tailwind CSS",
            "image" => "/assets/tools/tailwind.webp",    
        ]);

        $tool = Tool::create([
            "name" => "Visual Studio",
            "image" => "/assets/tools/visualstudio.webp",    
        ]);
        
        $tool = Tool::create([
            "name" => "Visual Studio Code",
            "image" => "/assets/tools/vscode.webp",    
        ]);
    }
}
