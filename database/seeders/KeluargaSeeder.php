<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('keluarga')->insert([
            [
                'no' => '1',
                'nama' => 'Agus Subagio',
                'status' => 'Ayah',
                'jenis_kelamin' => 'L',
                'tangga_lahir' => '1974-08-17',
                'agama' => 'Islam',
                'pekerjaan' => 'wiraswasta'
            ],
            [
                'no' => '2',
                'nama' => 'Yuli Samsul A',
                'status' => 'Ibu',
                'jenis_kelamin' => 'P',
                'tangga_lahir' => '1982-08-15',
                'agama' => 'Islam',
                'pekerjaan' => 'Ibu Rumah Tangga'
            ],
            [
                'no' => '3',
                'nama' => 'Yisha Zukhrufin A',
                'status' => 'Kakak',
                'jenis_kelamin' => 'P',
                'tangga_lahir' => '2003-08-30',
                'agama' => 'Islam',
                'pekerjaan' => 'Pelajar'
            ],
            [
                'no' => '4',
                'nama' => 'Yasha Hafizdho Z',
                'status' => 'Adek',
                'jenis_kelamin' => 'L',
                'tangga_lahir' => '2013-02-25',
                'agama' => 'Islam',
                'pekerjaan' => 'Pelajar'
            ],
            [
                'no' => '5',
                'nama' => 'Nadhira Hilla Aufa',
                'status' => 'Adek',
                'jenis_kelamin' => 'P',
                'tangga_lahir' => '2018-02-08',
                'agama' => 'Islam',
                'pekerjaan' => 'Pelajar'
            ],
            [
                'no' => '6',
                'nama' => 'Djamiran',
                'status' => 'Kakek',
                'jenis_kelamin' => 'L',
                'tangga_lahir' => '1950-05-29',
                'agama' => 'Islam',
                'pekerjaan' => 'Petani'
            ],
            [
                'no' => '7',
                'nama' => 'Sukarti',
                'status' => 'Nenek',
                'jenis_kelamin' => 'P',
                'tangga_lahir' => '1955-03-08',
                'agama' => 'Islam',
                'pekerjaan' => 'Ibu Rumah Tangga'
            ],
            [
                'no' => '8',
                'nama' => 'Supartinah',
                'status' => 'Nenek',
                'jenis_kelamin' => 'P',
                'tangga_lahir' => '1953-11-02',
                'agama' => 'Islam',
                'pekerjaan' => 'Ibu Rumah Tangga'
            ]
        ]);
    }
}
