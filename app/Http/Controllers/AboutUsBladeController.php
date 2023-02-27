<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsBladeController extends Controller
{
    public function aboutus(){
        return view('about-us',
        ['aboutus' => '
            <a href="akan menampilkan link pada berita dan product kami">Bisa dilihat pada link</a>
        ']);

    }
}
