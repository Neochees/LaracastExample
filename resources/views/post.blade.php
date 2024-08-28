<!doctype html>
<html lang="en">
<link rel="stylesheet" href="/app.css">
<head>
    <title>Document</title>
</head>
<body>

<article>
@foreach($posts as $post)
{{--    @dump($post) // toont type en toont alle inhoud--}}
{{--    {{ $post }} // escaped alle inhoud van een string waarde / variabel--}}
    {!! $post !!} // toont unescaped inhoud van een string waarde / variabel
@endforeach
</article>


</body>
</html>
