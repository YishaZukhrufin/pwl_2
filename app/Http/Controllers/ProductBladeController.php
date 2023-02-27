<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductBladeController extends Controller
{

    public function product(){
        return view('product',
        ['data' => '
            <ul>
                <li>
                    <a href="terdapat produk pertama dari toko kami">Product 1</a>
                </li>
                <li>
                    <a href="terdapat produk kedua dari toko kami">product 2</a>
                </li>
            </ul>'
        ]);
    }
}
