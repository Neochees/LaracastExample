<!doctype html>
<html lang="en">
<link rel="stylesheet" href="/app.css">
<head>
    <title>Document</title>
</head>
<body>
    <?php foreach ($posts as $post) ?>
    <article>
        <?= $post; ?>
    </article>
    <?php endforeach; ?>
</body>
</html>
