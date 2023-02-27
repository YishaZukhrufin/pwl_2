<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsBladeController extends Controller
{
    public function index(){
        return view('contact-us',
        ['contactus' => 'Hubungi kontak kami pada Nomer dibawah ini <br>
            <a href="menuju ke laman wa">085606224256</a> <br>
            Terimakasih Sudah Datang
        ']);
    }
}
