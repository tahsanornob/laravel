<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', ['posts' => $posts]);
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);
    return view('post', ['post' => $post]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/started', function () {
    return view('started');
});
