<?php

require_once 'core.php';

echo $twig->render(
    'index.html', 
    array(
        'matches' => $config["matches"],
        'info' => $config["panelinfo"],
        'teams' => $config["matchea"]["team"]
    )
);