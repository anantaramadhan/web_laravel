<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address'   => 'Jember',
            'nomor_tlp' => '08565667456',
            'ttl'       => '2000-11-26',
            'foto'      => 'picture.png'
        ]);
    }
}
