<?php

require_once __DIR__ . '/../vendor/autoload.php';

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View'); //on lui dit où il peut trouver des fichiers twig, à modifier si le chemin ne correspond pas
$twig = new Twig\Environment($loader); //création de l'environnement à partir du loader
echo $twig->render('index.html.twig', [
    'products' => $products
]);    //déclencher le rendu, conversion twig vers html

