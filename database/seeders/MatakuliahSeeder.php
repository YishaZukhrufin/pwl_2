<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
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
                'kode_mk' => 'RTI211001',
                'nama_mk' => 'Pancasila',
                'sks' => '2',
                'nama_dosen' => 'Widaningsih, S.H., M.H',
                'jam' => '2',
                'semester' => '1',
                'nilai' => 'B+'
            ],
            [
                'kode_mk' => 'RTI211004',
                'nama_mk' => 'Matematika 1',
                'sks' => '3',
                'nama_dosen' => 'Rudy Ariyanto, S.T., M.Cs.',
                'jam' => '6',
                'semester' => '1',
                'nilai' => 'B+'
            ],
            [
                'kode_mk' => 'RTI211005',
                'nama_mk' => 'Bahasa Inggris 1',
                'sks' => '2',
                'nama_dosen' => 'Farida Ulfa, S.pd, M.pd',
                'jam' => '4',
                'semester' => '1',
                'nilai' => 'B'
            ],
            [
                'kode_mk' => 'RTI211008',
                'nama_mk' => 'Keselamatan dan Kesehatan Kerja',
                'sks' => '2',
                'nama_dosen' => 'Meyti Eka Apriyani, S.T., M.T.',
                'jam' => '4',
                'semester' => '1',
                'nilai' => 'B'
            ],
            [
                'kode_mk' => 'RTI211003',
                'nama_mk' => 'Critical Thinking dan Problem Solving',
                'sks' => '2',
                'nama_dosen' => 'Dwi Puspitasari, S.Kom., M.Kom',
                'jam' => '4',
                'semester' => '1',
                'nilai' => 'A'
            ],
            [
                'kode_mk' => 'RTI211007',
                'nama_mk' => 'Praktikum Dasar Pemrograman',
                'sks' => '3',
                'nama_dosen' => 'Mamluatul Haniah, S.Kom., M.Kom',
                'jam' => '6',
                'semester' => '1',
                'nilai' => 'C'
            ],
            [
                'kode_mk' => 'RTI211006',
                'nama_mk' => 'Dasar Pemrograman',
                'sks' => '2',
                'nama_dosen' => 'Mamluatul Haniah, S.Kom., M.Kom',
                'jam' => '4',
                'semester' => '1',
                'nilai' => 'C+'
            ],
            [
                'kode_mk' => 'RTI211002',
                'nama_mk' => 'Konsep Teknologi Informasi',
                'sks' => '2',
                'nama_dosen' => 'Indra Dharma Wijaya, ST., M.MT.',
                'jam' => '4',
                'semester' => '1',
                'nilai' => 'B'
            ],
            [
                'kode_mk' => 'RTI212008',
                'nama_mk' => 'Algoritma dan Struktur Data',
                'sks' => '2',
                'nama_dosen' => 'Mungki Astiningrum, ST., M.Kom',
                'jam' => '4',
                'semester' => '2',
                'nilai' => 'B'
            ],
            [
                'kode_mk' => 'RTI212009',
                'nama_mk' => 'Praktikum Algoritma dan Struktur Data',
                'sks' => '2',
                'nama_dosen' => 'Mungki Astiningrum, ST., M.Kom',
                'jam' => '4',
                'semester' => '2',
                'nilai' => 'B+'
            ],
            [
                'kode_mk' => 'RTI212010',
                'nama_mk' => 'Ilmu Komunikasi dan Organisasi',
                'sks' => '2',
                'nama_dosen' => 'Robby Anggriawan, SE., ME.',
                'jam' => '4',
                'semester' => '2',
                'nilai' => 'B+'
            ],
            [
                'kode_mk' => 'RTI212004',
                'nama_mk' => 'Sistem Operasi',
                'sks' => '2',
                'nama_dosen' => 'Ika Kusumaning Putri, S.Kom.,M.T.',
                'jam' => '4',
                'semester' => '2',
                'nilai' => 'A'
            ],
            [
                'kode_mk' => 'RTI212005',
                'nama_mk' => 'Rekayasa Perangkat Lunak',
                'sks' => '2',
                'nama_dosen' => 'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom',
                'jam' => '4',
                'semester' => '2',
                'nilai' => 'B'
            ],
            [
                'kode_mk' => 'RTI212002',
                'nama_mk' => 'Matematika 2',
                'sks' => '2',
                'nama_dosen' => 'Deasy Sandhya Elya Ikawati, S.Si, M.Si',
                'jam' => '4',
                'semester' => '2',
                'nilai' => 'B'
            ],
            [
                'kode_mk' => 'RTI212001',
                'nama_mk' => 'Agama',
                'sks' => '2',
                'nama_dosen' => 'Dr. M. Mukhlis Fahruddin, M.S.I',
                'jam' => '2',
                'semester' => '2',
                'nilai' => 'A'
            ],
            [
                'kode_mk' => 'RTI212003',
                'nama_mk' => 'Bahasa Inggris 2',
                'sks' => '2',
                'nama_dosen' => 'Atiqah Nurul Asri, S.Pd,. M.Pd.',
                'jam' => '4',
                'semester' => '2',
                'nilai' => 'A'
            ],
            [
                'kode_mk' => 'RTI212007',
                'nama_mk' => 'Praktikum Basis Data',
                'sks' => '2',
                'nama_dosen' => 'Elok Nur Hamdana, ST., M.MT',
                'jam' => '4',
                'semester' => '2',
                'nilai' => 'B+'
            ],
            [
                'kode_mk' => 'RTI212006',
                'nama_mk' => 'Basis Data',
                'sks' => '2',
                'nama_dosen' => 'Elok Nur Hamdana, ST., M.MT',
                'jam' => '4',
                'semester' => '2',
                'nilai' => 'B'
            ],
            [
                'kode_mk' => 'RTI213007',
                'nama_mk' => 'Pemrograman Berbasis Objek',
                'sks' => '2',
                'nama_dosen' => 'Elok Nur Hamdana, ST., M.MT',
                'jam' => '4',
                'semester' => '3',
                'nilai' => 'C'
            ],
            [
                'kode_mk' => 'RTI213008',
                'nama_mk' => 'Praktikum Pemrograman Berbasis Objek',
                'sks' => '3',
                'nama_dosen' => 'Elok Nur Hamdana, ST., M.MT',
                'jam' => '6',
                'semester' => '3',
                'nilai' => 'B+'
            ],
            [
                'kode_mk' => 'RTI213002',
                'nama_mk' => 'Sistem Manajemen Kualitas',
                'sks' => '2',
                'nama_dosen' => 'Farida Ulfa, S.Pd., M.Pd',
                'jam' => '4',
                'semester' => '3',
                'nilai' => 'B+'
            ],
            [
                'kode_mk' => 'RTI213001',
                'nama_mk' => 'Desain Antarmuka',
                'sks' => '2',
                'nama_dosen' => 'Anugrah Nur Rahmanto, S.Sn., M.Ds',
                'jam' => '4',
                'semester' => '3',
                'nilai' => 'A'
            ],
            [
                'kode_mk' => 'RTI213004',
                'nama_mk' => 'Desain dan Pemrograman Web',
                'sks' => '3',
                'nama_dosen' => 'Dimas Wahyu Wibowo, ST., M.MT.',
                'jam' => '6',
                'semester' => '3',
                'nilai' => 'A'
            ],
            [
                'kode_mk' => 'RTI213003',
                'nama_mk' => 'Kecerdasan Buatan',
                'sks' => '2',
                'nama_dosen' => 'Mustika Mentari, S.Kom., M.Kom',
                'jam' => '4',
                'semester' => '3',
                'nilai' => 'B+'
            ],
            [
                'kode_mk' => 'RTI213006',
                'nama_mk' => 'Matematika 3',
                'sks' => '2',
                'nama_dosen' => 'Deasy Sadhya Elya Ikawati, S.Si, M.Si',
                'jam' => '4',
                'semester' => '3',
                'nilai' => 'A'
            ],
            [
                'kode_mk' => 'RTI213005',
                'nama_mk' => 'Basis Data Lanjut',
                'sks' => '3',
                'nama_dosen' => 'Eka Larasati Amalias,S.ST., M.MT',
                'jam' => '4',
                'semester' => '3',
                'nilai' => 'B'
            ],
            [
                'kode_mk' => 'RTI214008',
                'nama_mk' => 'Pemrograman Web Lanjut',
                'sks' => '3',
                'nama_dosen' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom.',
                'jam' => '6',
                'semester' => '4',
                'nilai' => ''
            ],
            [
                'kode_mk' => 'RTI214009',
                'nama_mk' => 'Statistik Komputasi',
                'sks' => '2',
                'nama_dosen' => 'Elok Nur Hamdana, S.T, M.T.',
                'jam' => '4',
                'semester' => '4',
                'nilai' => ''
            ],
            [
                'kode_mk' => 'RTI214004',
                'nama_mk' => 'Proyek 1',
                'sks' => '3',
                'nama_dosen' => 'Farid Angga Pribadi, S.Kom., M.Kom.',
                'jam' => '6',
                'semester' => '4',
                'nilai' => ''
            ],
            [
                'kode_mk' => 'RTI214005',
                'nama_mk' => 'Business Intelligence',
                'sks' => '2',
                'nama_dosen' => 'Endah Septa Sintiya, S.Pd., M.Kom.',
                'jam' => '4',
                'semester' => '4',
                'nilai' => ''
            ],
            [
                'kode_mk' => 'RTI214006',
                'nama_mk' => 'Jaringan Komputer',
                'sks' => '2',
                'nama_dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
                'jam' => '4',
                'semester' => '4',
                'nilai' => ''
            ],
            [
                'kode_mk' => 'RTI214007',
                'nama_mk' => 'Pratikum Jaringan Komputer',
                'sks' => '3',
                'nama_dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
                'jam' => '6',
                'semester' => '4',
                'nilai' => ''
            ],
            [
                'kode_mk' => 'RTI214003',
                'nama_mk' => 'Manajemen Proyek',
                'sks' => '2',
                'nama_dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
                'jam' => '3',
                'semester' => '4',
                'nilai' => ''
            ],
            [
                'kode_mk' => 'RTI214001',
                'nama_mk' => 'Kewarganegaraan',
                'sks' => '2',
                'nama_dosen' => 'Widaningsih, S.H., M.H.',
                'jam' => '2',
                'semester' => '4',
                'nilai' => ''
            ],
            [
                'kode_mk' => 'RTI214002',
                'nama_mk' => 'Analisis dan Desain Berorentasi Objek',
                'sks' => '2',
                'nama_dosen' => 'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom.',
                'jam' => '4',
                'semester' => '4',
                'nilai' => ''
            ]
        ]);
    }
}
