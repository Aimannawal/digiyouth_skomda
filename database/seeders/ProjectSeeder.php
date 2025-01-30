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
                'description' => 'About Treadwear Irreplaceable Comfort Treadwear is here as an answer to the need for streetwear clothing that is not only stylish, but also comfortable to wear in daily activities. By prioritizing the selection of high-quality materials and ergonomic designs, each Treadwear product is designed to provide maximum comfort without sacrificing style. Whether its a t-shirt, hoodie, or pants, Treadwear ensures you feel confident and comfortable on every occasion. Express Yourself with a Unique Style Treadwear believes that fashion is a form of self-expression. Therefore, each Treadwear collection presents unique and innovative designs that reflect a strong personality. By combining trendy streetwear elements with a distinctive aesthetic touch, Treadwear gives you the freedom to create a truly authentic style. More Than Just Clothes Treadwear is not just a clothing brand, but also a community that upholds positive values. We believe that fashion has the power to inspire and unite people. By joining the Treadwear community, you will not only get quality products, but also the opportunity to connect with fellow streetwear lovers who have the same interests.',
                'photo' => 'photo_projects/01JEXNJ05KTHWHRVCY11ZVTZ9A.png,photo_projects/01JEXNJ05R5YXSMSAA25JAKY1W.png,photo_projects/01JEXNJ063ZYDHCNSX4MWJAKBE.png,photo_projects/01JEXNJ0592K63ZA2QH6J5NEDV.png',
                'url' => 'https://treadwear.vercel.app',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('projects')->insert([
            [
                'user_id' => 4,
                'category_id' => 1, 
                'team_id' => 2, 
                'title' => ' Web Portal Berita',
                'slug' => 'web-portal-berita',
                'description' => '<p>Pada kelas terbaru ini maka kita akan belajar menggunakan framework php laravel versi 11 dalam membangun sebuah website portal berita dengan tampilan design modern disertai fitur unggulan yang dapat meningkatkan user experience.</p><p>Kita juga akan belajar menggunakan package filament pada projek laravel sehingga proses pembuatan dashboard admin beserta fitur CRUD hanya dalam kurang dari 10 menit saja, filament menggunakan tech stack tailwind, alpine, laravel, livewire (TALL).</p><p>Pada projek ini kita akan hubungkan dengan server pada local dan menyimpan data berita, author, category, lainnya pada mysql sehingga tampilan website menjadi lebih dinamis dan siap digunakan oleh perusahaan kecil hingga besar.</p>',
                'photo' => 'photo_projects/01JEXWPFX2DYXG5CNJBA7ZDJ73.png',
                'url' => 'https://devforum.afifrzn.my.id/',
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
                'photo' => 'photo_projects/01JEXNNYRX1R9C293KDE5PF7CA.png,photo_projects/01JEXNNYS6Q5N37BK0C81P6GA4.png,photo_projects/01JEXNNYSAV6FKX7PSZ3F103YR.png',
                'url' => 'https://devforum.afifrzn.my.id/',
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
                'title' => 'Platform Freelancer dan Klien',
                'slug' => 'platform-freelancer-dan-klien',
                'description' => '<p>Pada kelas PHP Laravel 11 online terbaru ini, kita akan belajar mulai dari awal dalam mengembangkan sebuah website untuk mempertemukan antara freelancer dan klien (marketplace freelancer) seperti website Upwork atau Fiverr. Kursus online untuk cocok buat kalian yang sedang ingin berkarir sebagai seorang website developer dan mempersiapkan pekerjaan full-time atau juga freelancer (work from anywhere).</p><p>Proses belajar website development kita mulai dari memahami ERD, user flow, dan brief projek lalu lanjut kepada tahap coding menggunakan framework php laravel versi 11.x terbaru. Kita akan belajar menggunakan beberapa package rekomendasi laravel seperti breeze dan spatie permission sehingga proses development menjadi lebih cepat dan menghasilkan projek yang mudah dipelihara (maintainable) dan diperbesar (scalable).</p><p>Beberapa fitur unggulan yang akan kita bangun dengan laravel 11 seperti fitur login, register, topup wallet, withdraw wallet, apply job, CRUD projects dan tools, payment with wallet, dan juga fitur menarik lainnya yang dapat meningkatkan skills berpikir kita sebagai seorang website developer. Okay people with the spirit of learning, silahkan bergabung dan kami akan tunggu kalian di kelas, mari kita ciptakan portfolio menarik!</p>',
                'photo' => 'photo_projects/01JEXWJS5JKYBKA0D3K0EGQRT9.png',
                'url' => 'https://buildwithangga.com/',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('projects')->insert([
            [
                'user_id' => 6,
                'category_id' => 4, 
                'team_id' => 3, 
                'title' => 'Modern UI Dashboard Design',
                'slug' => 'modern-ui-dashboard-design',
                'description' => '<p>Dalam membuat User Interface sebuah website, Designer harus memerhatikan visual design yang atraktif demi kepuasan pengguna. Hal ini berarti tampilan situs tidak hanya enak dipandang, namun juga pengguna bisa memahami kegunaan setiap komponen desain yang dipilih Designer. Prosesnya dimulai dari memahami dahulu fitur apa yang dibutuhkan pengguna, lalu bagaimana menggambarkannya melalui wireframe (layout berisi draf komponen UI), hingga membangun konsep desain itu menjadi nyata melalui visual design yaitu desain lengkap yang disertai gambar, warna dan tipografi.</p><p>Kali ini Anda akan belajar visual design berupa tampilan dashboard dengan tool populer Figma. Dashboard sangat dibutuhkan dalam situs bisnis karena berisi data penting pengguna. Desain yang terencana dengan baik dapat meningkatkan produktifitas bisnis dan profit penjualan. Bersama Mentor ahli, Anda akan membuat desain yang efektif meliputi design project, export design, sampai design presentation demi peluang karir yang lebih baik. Hasil project kelas ini nantinya bisa Anda kembangkan lagi sesuai keinginan dan showcase pada platform online seperti Dribbble.</p><p>Untuk bergabung pada kelas ini, Kami menyarankan untuk terlebih dulu belajar dasar Visual Design dan Icon pada Kelas Starter BuildWith Angga. Silakan up paket ke Freemium Plus agar bisa mendapat seluruh materi yang bermanfaat di kelas ini. Terima kasih telah mendukung Kelas Premium BWA dan Kami tunggu di kelas!</p>',
                'photo' => 'photo_projects/01JEXTNCQ3AN7EHVYVAA8ZMQ2Y.png',
                'url' => 'https://buildwithangga.com/',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('projects')->insert([
            [
                'user_id' => 6,
                'category_id' => 4, 
                'team_id' => 3, 
                'title' => 'Website Portfolio Freelancer',
                'slug' => 'website-portfolio-freelancer',
                'description' => '<p>Portfolio adalah nilai jual utama ketika kita berkarir sebagai Freelancer atau Full-Time UI/UX Designer, Web Developer, Graphic Designer, Copywriter, atau bidang karir lainnya yang akan kita fokuskan.</p><p>Kelas ini akan membantu kita untuk mendesain dan membangun website portfolio tanpa harus menggunakan koding. Dimulai dari proses UI/UX menggunakan Figma dan Miro untuk mendesain landing page dan case study page, lalu akan dilanjutkan kepada proses web development menggunakan software Webflow (bikin website tanpa koding).</p><p>Dengan memiliki website portfolio dan beberapa karya terbaik di dalamnya maka kita bisa lebih matang lagi untuk fokus berkarir dan mendapatkan penghasilan yang besar sebagai designer atau developer. Belajar bersama mentor yang sudah berpengalaman akan lebih mudah dan terarah tanpa harus pusing browsing sana dan sini.</p><p>Silahkan bergabung apabila kamu ingin memiliki website pribadi sebagai tempat portfolio terbaik dan mendapatkan pekerjaan impian, kami akan menunggu kamu di kelas, see ya.</p><p>Perfect place to begin your career development.</p>',
                'photo' => 'photo_projects/01JEXVJXXKKHWVGKQ0SQFBNXNH.webp,photo_projects/01JEXVJXXX8B6W3NANCCF73NG9.webp,photo_projects/01JEXVJXY1DAR6PH5PCXZVPHDW.webp',
                'url' => 'https://buildwithangga.com/',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
                DB::table('projects')->insert([
            [
                'user_id' => 6,
                'category_id' => 1, 
                'team_id' => 3, 
                'title' => 'Web Food Recipes',
                'slug' => 'web-food-recipes',
                'description' => '<p>Selamat datang di kelas web development yang dirancang untuk menguasai teknologi web terbaru seperti PHP, JavaScript, Laravel, React JS, dan FilamentPHP. Anda akan belajar menggunakan PHP 8, React JS 18, dan Laravel 11, serta TypeScript untuk kode yang rapi dan mudah dipelihara.</p><p>Proyek utama adalah membangun website penyedia buku resep makanan dengan fitur kategori, pencarian, detail resep, dan unduhan PDF. Anda juga akan membuat dashboard CMS untuk super admin dengan FilamentPHP. Proyek ini akan terhubung dengan database MySQL untuk manajemen data yang efisien.</p><p>Pengembangan dimulai dari backend dengan membuat API yang dilindungi CORS dan custom API key, kemudian menggunakan API tersebut dalam proyek React JS. Proyek berjalan di server lokal, tanpa perlu deployment ke production.</p>',
                'photo' => 'photo_projects/01JEXW5YFQ1RJF9FVE1JJV17E3.png',
                'url' => 'https://devforum.afifrzn.my.id/',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}   
