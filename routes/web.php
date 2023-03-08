<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsBladeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ContactUsBladeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\NewsBladeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdileController;
use App\Http\Controllers\ProductBladeController;
use App\Http\Controllers\ProgramBladeController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
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