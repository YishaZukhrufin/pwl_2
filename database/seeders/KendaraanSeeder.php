<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'no_pol' => 'AG978IU',
                'merk' => 'yamaha',
                'jenis' => 'jupiter',
                'tahun' => 2015,
                'warna' => 'biru'
            ],
            [
                'no_pol' => 'AG564TU',
                'merk' => 'honda',
                'jenis' => 'astrea',
                'tahun' => 2003,
                'warna' => 'hitam'
            ]
            ]);
    }
}
