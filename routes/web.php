<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();
    return view ('post', [
        'posts' => Post::all()
    ]);
});

Route:: get('posts/{post}', function ($slug) {
    return view('post' , [
        'post' => Post::find($slug),
    ]);
}) ->where('posts', '[A-z_\-]+');
