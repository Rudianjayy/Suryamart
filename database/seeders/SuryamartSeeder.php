<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SuryamartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarahs')->insert([
            'deskripsi' => 'deskripsi',
        ]);
        DB::table('galeris')->insert([
            'foto' => '0.png',
            'foto' => 'foto',
        ]);
        DB::table('suryateams')->insert([
            'foto_team' => 'foto',
            'jabatan' => 'jabatan',
            'nama_team' => 'Misi',
            'link_fb' => 'link_fb',
            'link_wa' => 'link_wa',
            'link_ig' => 'link_ig',

        ]);
        DB::table('sliders')->insert([
            'foto_team' => 'foto',
            'deskripsi' => 'deskripsi',
        ]);
    }
}
