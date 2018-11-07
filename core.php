<?php

require __DIR__ . '/vendor/autoload.php';

// Prepare Twig environment
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

// Load config.json
$file = file_get_contents(__DIR__ . "/config.json");
$config = json_decode($file, true);