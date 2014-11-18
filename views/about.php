<?php

    $options = [
        "rebuild"     => false,
        "cachefolder" => "cache:thumbs",
        "quality"     => 100,
        "base64"      => false,
        "mode"        => "best_fit" // 'crop', 'best_fit', 'resize'
    ];

    $items = collection('posts')->find()->toArray();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
    <?php
        cockpit("cockpit")->assets([
            "css/reset.css",
            "css/style.css",
            "css/about.css"
        ], 'style-about');
    ?>
</head>
<body>
    <?php region('header') ?>

    <div class="content">
        <div class="content-wrapper about">
            <?php thumbnail($items[0]["media"], 350, $options); ?>
            <h2><?php echo $items[0]['title']; ?></h2>
            <?php echo $items[0]['content']; ?>
        </div>
    </div>
</body>
</html>

