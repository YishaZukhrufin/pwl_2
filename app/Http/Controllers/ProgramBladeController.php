<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramBladeController extends Controller
{
    public function program(){
            return view('program',
            ['data' => '
                <ul>
                    <li>
                        <a href="akan menampilkan program kami">Program 1</a>
                    </li>
                    <li>
                        <a href="akan menampilkan program kami">program 2</a>
                    </li>
                    <li>
                        <a href="akan menampilkan program kami">program 3</a>
                    </li>
                </ul>'
            ]);
    }
}
