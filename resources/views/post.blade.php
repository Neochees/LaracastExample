<!doctype html>
<link rel="stylesheet" href="/app.css">

    <title>My blog</title>

<body>
    <article>
        <h1><?= $post->title; ?></h1>


        <div>
            <?= $post->body; ?>
        </div>
    </article>
{{--    <a href="/">Back</a>--}}
</body>

