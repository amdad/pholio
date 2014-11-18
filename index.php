<?php require_once("admin/bootstrap.php");

$app = new Lime\App();

$app->bind("/", function() use($app) {

    return $app->render('views/index.php');
});


$app->bind("/gallery/:gallery_slug", function($params) use($app) {

    $gallery = cockpit("galleries")->gallery($params['gallery_slug']);

    return $app->render('views/gallery.php', ['gallery' => $gallery]);
});


$app->bind("/about", function() use($app) {


    return $app->render('views/about.php');
});

$app->bind("/contact", function() use($app) {


    return $app->render('views/contact.php');
});



$app->run();

?>