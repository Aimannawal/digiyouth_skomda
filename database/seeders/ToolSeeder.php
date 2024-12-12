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
            "image" => "/assets/tools/adobeillustrator.png",    
        ]);

        $tool = Tool::create([
            "name" => "Adobe Photoshop",
            "image" => "/assets/tools/adobephotoshop.png",    
        ]);

        $tool = Tool::create([
            "name" => "Arduino",
            "image" => "/assets/tools/arduino.png",    
        ]);

        $tool = Tool::create([
            "name" => "Bootstrap",
            "image" => "/assets/tools/bootstrap.png",    
        ]);

        $tool = Tool::create([
            "name" => "Coreldraw",
            "image" => "/assets/tools/coreldraw.png",    
        ]);

        $tool = Tool::create([
            "name" => "Figma",
            "image" => "/assets/tools/figma.png",    
        ]);

        $tool = Tool::create([
            "name" => "Filament",
            "image" => "/assets/tools/filament.png",    
        ]);

        $tool = Tool::create([
            "name" => "Laravel",
            "image" => "/assets/tools/laravel.png",    
        ]);

        $tool = Tool::create([
            "name" => "MySQL",
            "image" => "/assets/tools/mysql.png",    
        ]);

        $tool = Tool::create([
            "name" => "NextJs",
            "image" => "/assets/tools/next.png",    
        ]);

        $tool = Tool::create([
            "name" => "NodeJs",
            "image" => "/assets/tools/nodejs.png",    
        ]);

        $tool = Tool::create([
            "name" => "Postman",
            "image" => "/assets/tools/postman.png",    
        ]);

        $tool = Tool::create([
            "name" => "React",
            "image" => "/assets/tools/react.png",    
        ]);

        $tool = Tool::create([
            "name" => "Tailwind CSS",
            "image" => "/assets/tools/tailwind.png",    
        ]);

        $tool = Tool::create([
            "name" => "Visual Studio",
            "image" => "/assets/tools/visualstudio.png",    
        ]);
        
        $tool = Tool::create([
            "name" => "Visual Studio Code",
            "image" => "/assets/tools/vscode.png",    
        ]);
    }
}
