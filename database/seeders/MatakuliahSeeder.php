<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matakuliah')->insert([ 
            [
                'kode_mk'=> 'RTI211001',
                'nama_matkul' => 'Pancasila',
                'sks' => '2',
                'nama_dosen' => 'Widaningsih Condrowardhani, SH, MH.',
                'jam' => '2',
                'semester' => '1',
                'nilai' => 'B+'
            ],
            [
                'kode_mk'=> 'RTI211004',
                'nama_matkul' => 'Matematika 1',
                'sks' => '3',
                'nama_dosen' => 'Rudy Ariyanto, ST., M.Cs.',
                'jam' => '6',
                'semester' => '1',
                'nilai' => 'B+'
            ],
            [
                'kode_mk'=> 'RTI211005',
                'nama_matkul' => 'Bahasa Inggris 1',
                'sks' => '2',
                'nama_dosen' => 'Farida Ulfa, S.Pd., M.Pd.',
                'jam' => '4',
                'semester' => '1',
                'nilai' => 'B'
            ],
            [
                'kode_mk'=> 'RTI211008',
                'nama_matkul' => 'Keselamatan dan Kesehatan Kerja',
                'sks' => '2',
                'nama_dosen' => 'Meyti Eka Apriyani ST., MT.',
                'jam' => '4',
                'semester' => '1',
                'nilai' => 'B'
            ],
            [
                'kode_mk'=> 'RTI211003',
                'nama_matkul' => 'Critical Thinking dan Problem Solving',
                'sks' => '2',
                'nama_dosen' => 'Dwi Puspitasari, S.Kom., M.Kom.',
                'jam' => '4',
                'semester' => '1',
                'nilai' => 'A'
            ],
        ]);
    
    }
}
