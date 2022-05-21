<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ArticleTagController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [ArticleController::class,'allArticles']);
Route::get('/posts/{code}', [ArticleController::class,'articleOnId']);
Route::get('/tags', [TagController::class,'index']);
Route::get('/articles_tags', [ArticleTagController::class,'index']);
