<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsBladeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ContactUsBladeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\NewsBladeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdileController;
use App\Http\Controllers\ProductBladeController;
use App\Http\Controllers\ProgramBladeController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //echo "Selamat Datang";
//});

//Route::get('/about', function () {
    //echo "2141720013 Yisha Zukhrufin Angelyna";
//});


//Route::get('/articles/{id}', function ($id) {
    //echo "Hallo Yisha Zukhrufin Angelyna kamu mendapatkan ID:".$id;
//});

//

//praktikum 3
//no1
//
// Route::get('/prak2', function (){
//     return view ('layout.template');
// });

// Route::get('/', [DashboardController::class, 'index']);
// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/profile', [ProdileController::class, 'index']);
// Route::get('/kuliah', [KuliahController::class, 'index']);

// Route::get('/kendaraan', [KendaraanController::class, 'index']);
// Route::get('/hobi', [HobiController::class, 'index']);
// Route::get('/keluarga', [KeluargaController::class, 'index']);
// Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth']) ->group(function(){
    Route::get('/prak2', function (){
        return view ('layout.template');
    });
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProdileController::class, 'index']);
    Route::get('/kuliah', [KuliahController::class, 'index']);

    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::get('/hobi', [HobiController::class, 'index']);
    Route::get('/keluarga', [KeluargaController::class, 'index']);
    Route::get('/matakuliah', [MatakuliahController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');
    Route::get('/mahasiswa/{id}/khs',[MahasiswaController::class,'khs']);

    //tugas p10
    Route::get('/mahasiswa/khs/{id}', [MahasiswaController::class, 'cetak_pdf']);
    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');
    //p12
    Route::post('/mahasiswa/data', [MahasiswaController::class, 'data']);

    //praktikum 10
    Route::resource('article', ArticleController::class);
    Route::get('/articlecetak', [ArticleController::class, 'cetak_pdf']); 
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
