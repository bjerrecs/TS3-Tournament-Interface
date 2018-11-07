<?php

require_once 'core.php';

//echo $twig->render('matches.html', array('matches' => $config["matches"]));

if (isset($_GET['id']) && $_GET['id'] >= 0) {
    echo $twig->render('match.html', array('match' => $config["matches"][$_GET["id"]]));
}
