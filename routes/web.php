<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use function PHPSTORM_META\map;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);

});

Route::get('posts/{post}', function (Post  $post) {
    return view('post', [
        'post' => $post
    ]);
});


