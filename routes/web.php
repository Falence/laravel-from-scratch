<?php

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

Route::get('/posts/{post}', function ($post) {

    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Hello, I am getting a hang of this blogging thing!'
    ];

    if ( !array_key_exists($post, $posts) ) {
        abort(404, 'Sorry, that post was not found!');
    }

    return view('posts', [
        'post' => $posts[$post] // ?? 'Nothing here yet'
    ]);
});

