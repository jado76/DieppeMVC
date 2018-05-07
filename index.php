<?php
date_default_timezone_set("Europe/Paris");
require_once "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$toto = new Controler();

$machin = explode("/", $toto->getURL());

var_dump($machin);