<?php
    $options = [
        "rebuild"     => false,
        "cachefolder" => "cache:thumbs",
        "quality"     => 100,
        "base64"      => false,
        "mode"        => "best_fit" // 'crop', 'best_fit', 'resize'
    ];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
    <?php
        cockpit("cockpit")->assets([
            "js/jquery-2.1.1.js",
            "js/imagesloaded.pkgd.min.js",
            "js/packery.pkgd.min.js",
            "js/intense.min.js",
            "js/spin.min.js",
            "js/script.js",
            "css/reset.css",
            "css/style.css"
        ], 'style');
    ?>
</head>
<body>
    <?php region('header') ?>

    <div class="content">
        <div class="content-wrapper grid">

            <?php foreach($gallery as $image): ?>
                <?php $thumburl = thumbnail_url($image["path"], 1280, $options); ?>

                <div class="item">
                    <a data-image="<?php echo $thumburl; ?>" data-title="<?php echo $image["data"]["title"]; ?>" data-caption="<?php echo $image["data"]["caption"]; ?>" href="javascript:void(0);" >
                        <?php thumbnail($image["path"], 250, $options) ?>
                    </a>
                </div>

            <?php endforeach;?>

        </div>
    </div>
</body>
</html>