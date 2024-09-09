<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use function PHPSTORM_META\map;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all(),
    ]);
})->name('category');

Route::get('author/{author:username}', function (\App\Models\User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all(),
    ]);
});
