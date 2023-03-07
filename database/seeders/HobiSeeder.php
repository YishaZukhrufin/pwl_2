<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'hobi' => 'Tidur',
                'alesan' => 'karena dengan kita tidur akan melupakan masalah walapun hanya sebentar'
            ],
            [
                'hobi' => 'Membaca Novel/Wattpad',
                'alesan' => 'karena menyukai hal hal fiksi, dan semoga bisa menerbitkan buku'
            ],
            [
                'hobi' => 'voly',
                'alesan' => 'karena ingin melatih kekuatan tangan agar lebih kuat menghadapi bahwa dia sudah menggandeng tangan yang lain:)'
            ],
            [
                'hobi' => 'melihat alam',
                'alesan' => 'karena alam menenangkan tidak seperti dia yang selalu menyakiti'
            ]
        ]);
    }
}
