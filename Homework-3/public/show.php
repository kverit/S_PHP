<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$loader = new FilesystemLoader(dirname(__DIR__) . '/templates');

$twig = new Environment($loader, []);

$id = $_GET['image_id'];

try {
    echo $twig -> render('home/show.twig', [
        'id' => $id,
    ]);
} catch ( Exception $exception){
    var_dump($exception);
}

;