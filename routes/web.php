<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
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
Route::view('/', 'welcome');
Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/about', function () {

   return view('about', [
       'articles' => App\Models\Article::latest()->get()
   ]);
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('articles/create', [ArticleController::class, 'create']);
Route::get('/articles/{article}', [ArticleController::class, 'show']);

