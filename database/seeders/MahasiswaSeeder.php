<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa_matkul')->insert([
            [
                'mahasiswa_id' => '1',
                'matkul_id' => '3',
            ],
            [
                'mahasiswa_id' => '1',
                'matkul_id' => '5',
            ],
            [
                'mahasiswa_id' => '1',
                'matkul_id' => '2',
            ],
            [
                'mahasiswa_id' => '1',
                'matkul_id' => '1',
            ],
            [
                'mahasiswa_id' => '1',
                'matkul_id' => '4',
            ],
           
        ]);
    }
}
