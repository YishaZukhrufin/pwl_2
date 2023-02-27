<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        return "Selamat Datang";
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return 'Yisha Zukhrufin A';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function article($id)
    {
        return 'Halaman Artikel dengan ID:'.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    //nomer 1
    public function home(){
        return 'SELAMAT DATANG DI TOKOKITA <br>
        <label>Cari Barang</label> 
            <input placholder="Masukkan Barang">
            <button>Submit</button>
        ';
    }
    //nomer 2
    public function product()
    {
        echo "
            <ul>
                <li>
                    <a href='https://www.educastudio.com/category/marbel-edu-games'>Product 1</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>Product 2</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/category/riri-story-books'>Product 3</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/category/kolak-kids-songs'>Product 4</a>
                </li>
            </ul>
        ";
    }

    //nomer 3
    public function news()
    {
        echo "
            <ul>
                <li>
                    <a href='https://www.educastudio.com/news'>Berita 1</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'>Berita 2</a>
                </li>
            </ul>
        ";
    }

    //nomer 4
    public function program()
    {
        echo "
            <ul>
                <li>
                    <a href='https://www.educastudio.com/program/karir'>Program 1</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/program/magang'>Program 2</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/program/kunjungan-industri'>Program 3</a>
                </li>
            </ul>
        ";
    }

    //nomer 5
    public function aboutus()
    {
        echo "
            <a href='https://www.educastudio.com/about-us'>About Us</a>
        ";
    }

    //nomer 6
    public function contactus(){
        return 'TERIMAKASIH SUDAH BERBELANJA DI TOKO KAMI <br>
        <ul>
            <li> Instagram : yishangly </li>
            <li> Whatshap : 085606224256 </li>
        </ul>
        ';
    }
}


