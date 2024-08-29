<!doctype html>
<html lang="en">
<link rel="stylesheet" href="/app.css">
<head>
    <title>Document</title>
</head>
<body>

<article>
@foreach($posts as $post)
{{--// toont type en toont alle inhoud--}}

{{--    {{ $post }}
// escaped alle inhoud van een string waarde / variabel--}}

{{--    {!! $post->title !!}--}}
{{--        // toont unescaped inhoud van een string waarde / variabel--}}
    <h1><a href="/posts/<?= $post->slug; ?>">
        {!! $post->title !!}</a>
    </h1>

    <div>{!! $post->excerpt !!}</div>
@endforeach
</article>


</body>
</html>
