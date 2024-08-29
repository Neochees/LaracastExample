@extends('layout')

@section('çontent')
    @foreach($posts as $post)
        <article>

            <h1><a href="/posts/<?= $post->slug; ?>">
                    {!! $post->title !!}
                </a>
            </h1>

            <div>{!! $post->excerpt !!}</div>

        </article>
    @endforeach
@endsection


{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<link rel="stylesheet" href="/app.css">--}}
{{--<head>--}}
{{--    <title>My blog</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--@foreach($posts as $post)--}}
{{--<article>--}}

{{--    <h1><a href="/posts/<?= $post->slug; ?>">--}}
{{--        {!! $post->title !!}--}}
{{--        </a>--}}
{{--    </h1>--}}

{{--    <div>{!! $post->excerpt !!}</div>--}}

{{--</article>--}}
{{--@endforeach--}}

{{--</body>--}}
{{--</html>--}}
