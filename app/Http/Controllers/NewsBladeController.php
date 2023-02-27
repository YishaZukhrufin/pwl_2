<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsBladeController extends Controller
{
    public function news(){
        return view('news',
        ['data' => '
            <ul>
                <li>
                    <a href="akan menampilkan berita terbaru kami">News 1</a>
                </li>
                <li>
                    <a href="akan menampilkan berita terbaru kami">News 2</a>
                </li>
                <li>
                    <a href="akan menampilkan berita terbaru kami">News 3</a>
                </li>
            </ul>'
        ]);
    }
}
