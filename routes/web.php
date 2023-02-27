<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsBladeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactUsBladeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsBladeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductBladeController;
use App\Http\Controllers\ProgramBladeController;
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
Route::get('/home', [HomeController::class, 'index']);
//no2
Route::prefix('/product')->group(function (){
    Route::get('/list', [ProductBladeController::class, 'product']);
});
//no3
Route::get('/news/{param}', [NewsBladeController::class, 'news']);
//no4
Route::prefix('program')->group(function (){
    Route::get('/list', [ProgramBladeController::class, 'program']);
});
//no5
Route::get('/aboutus', [AboutUsBladeController::class, 'aboutus']);
//no6
Route::resource('contactus', ContactUsBladeController::class);
