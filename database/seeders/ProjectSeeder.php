<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            [
                'user_id' => 4,
                'category_id' => 1, 
                'team_id' => 1,
                'title' => 'Treadwear.co',
                'slug' => 'treadwear.co',
                'description' => '<h2>About Treadwear</h2><h2>Irreplaceable Comfort</h2><p>Treadwear is here as an answer to the need for streetwear clothing that is not only stylish, but also comfortable to wear in daily activities. By prioritizing the selection of high-quality materials and ergonomic designs, each Treadwear product is designed to provide maximum comfort without sacrificing style. Whether its a t-shirt, hoodie, or pants, Treadwear ensures you feel confident and comfortable on every occasion.</p><h2>Express Yourself with a Unique Style</h2><p>Treadwear believes that fashion is a form of self-expression. Therefore, each Treadwear collection presents unique and innovative designs that reflect a strong personality. By combining trendy streetwear elements with a distinctive aesthetic touch, Treadwear gives you the freedom to create a truly authentic style.</p><h2>More Than Just Clothes</h2><p>Treadwear is not just a clothing brand, but also a community that upholds positive values. We believe that fashion has the power to inspire and unite people. By joining the Treadwear community, you will not only get quality products, but also the opportunity to connect with fellow streetwear lovers who have the same interests.</p><p><br><br></p><p><br></p>',
                'photo' => 'project/Air1.png,project/Air2.png,project/Air3.png,project/Air4.png',
                'url' => 'https://treadwear.vercel.app',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('projects')->insert([
            [
                'user_id' => 7,
                'category_id' => 1, 
                'team_id' => 2, 
                'title' => 'Devforum',
                'slug' => 'devforum',
                'description' => '<p><strong>DevForum: Platform Kolaborasi Pengembang dengan Dokumentasi Lengkap dan Dukungan AI</strong></p><p>DevForum adalah platform komunitas yang dirancang untuk memfasilitasi kolaborasi, pembelajaran, dan berbagi pengetahuan di kalangan pengembang perangkat lunak. Dengan fitur dokumentasi paket yang terperinci, pengguna dapat dengan mudah menemukan dan memahami berbagai pustaka atau framework yang digunakan dalam pengembangan perangkat lunak. Selain itu, forum DevForum menyediakan ruang bagi pengembang untuk berdiskusi, bertanya, dan berbagi pengalaman terkait tantangan teknis yang dihadapi.</p><p>DevForum juga dilengkapi dengan dukungan AI, memberikan bantuan cerdas dalam bentuk saran, tips, dan solusi otomatis untuk masalah pengembangan perangkat lunak. Baik Anda seorang pemula yang baru memulai atau seorang ahli berpengalaman, DevForum adalah tempat yang tepat untuk berkembang, belajar, dan berkolaborasi dalam dunia teknologi.</p>',
                'photo' => 'project/Paket1.png,project/Paket2.png,project/Paket3.png,project/Paket4.png',
                'url' => 'https://devforum.afifrzn.my.id/',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
