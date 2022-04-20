<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('/');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());



echo $twig->render('block.twig', [
    'name' => 'Alex'
]);