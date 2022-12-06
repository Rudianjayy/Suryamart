<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

>>>>>>> 04033e82fb43ba077c93ad16495737f4f0cb1378

class SuryamartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        DB::table('abouts')->insert([
            'foto_about' => 'TempSuryamart/suryamart/mart/html/assets/surya/img/product/3.png',
            'penjelasan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse maiores non ipsa tempore nihil nemo, aperiam repellendus aut temporibus labore hic soluta dolorem quam modi mollitia perspiciatis consectetur quibusdam fuga.',
            'alamat' => 'KH. AHMAD DAHLAN NO 10',
            'notelpon' => '0876664',
            'email' => 'smkmuhi.genteng1968@gmail.com',
            'link_fb' => 'https://www.facebook.com/profile.php?id=100067357426555',
            'link_ig' => 'https://www.instagram.com/upjtekaje/',
            'link_wa' => 'https://wa.wizard.id/',
            'link_map' => 'https://',
        ]);
    }
}

=======
        DB::table('sejarahs')->insert([
            'deskripsi' => 'deskripsi',
        ]);

    }
}
>>>>>>> 04033e82fb43ba077c93ad16495737f4f0cb1378
