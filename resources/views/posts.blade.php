<!doctype html>
<html lang="en">
<link rel="stylesheet" href="/app.css">
<head>
    <title>Document</title>
</head>
<body>

<article>
@foreach($posts as $post)
    <h1><a href="/posts/<?= $post->slug; ?>">
        {!! $post->title !!}
        </a>
    </h1>

    <div>{!! $post->excerpt !!}</div>
@endforeach
</article>


</body>
</html>
