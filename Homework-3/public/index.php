<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$loader = new FilesystemLoader(dirname(__DIR__) . '/templates');

$twig = new Environment($loader, []);

$images = [
    [
        'imagePath' => '../images/img1.jpg',
        'id' => '../public/show.php?image_id=1',
    ],
    [
        'imagePath' => '../images/img2.jpg',
        'id' => '../public/show.php?image_id=2',
    ],
    [
        'imagePath' => '../images/img3.jpg',
        'id' => '../public/show.php?image_id=3',
    ],
    [
        'imagePath' => '../images/img4.jpg',
        'id' => '../public/show.php?image_id=4',
    ],
];


try {
    echo $twig -> render('home/index.twig', [
        'images' => $images,
    ]);
} catch ( Exception $exception){
    var_dump($exception);
}

;