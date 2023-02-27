<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdileController extends Controller
{
    public function index(){
        return view ('profile')
            ->with('name', 'Yisha Zukhrufin Angelyna')
            ->with('nama', 'Yisha')
            ->with('nim', '2141720013')
            ->with('kelas', 'TI-2B')
            ->with('absen', '28')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Teknologi Informasi')
            ->with('univ', 'Politeknik Negeri Malang');
    }
}
