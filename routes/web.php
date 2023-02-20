<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/article/{id}', [PageController::class, 'article']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/article', [ArticleController::class, 'index']);