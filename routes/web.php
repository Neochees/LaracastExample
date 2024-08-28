<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $files = File::files(resource_path("posts"));
    $posts = [];

    foreach ($files as $file) {
        $document = \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);

        $posts[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body()
        );
    }

    var_dump($posts[0]);

    return view ('post', [
        'posts' => $posts
    ]);
});

Route:: get('posts/{post}', function ($slug) {
    return view('post' , [
        'post' => Post::find($slug),
    ]);
}) ->where('posts', '[A-z_\-]+');
