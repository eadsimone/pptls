<?php

// Composer autoload
require_once __DIR__ . '/vendor/autoload.php';

use Eadesimone\PPTLS\Player;
use Eadesimone\PPTLS\iGame;
use Eadesimone\PPTLS\Pptls;


$p1 = new Player('Pedro');
$p2 = new Player('Juan');
$game = new Pptls(3, array($p1, $p2));

$game ->play();

