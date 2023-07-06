<?php

use Cedric\OssTd2\Monster;

require_once __DIR__ . '/../vendor/autoload.php';

$api = new Monster();
var_dump($api->getAllWatersMonsters());
var_dump($api->getMonsterByName("Bolverk"));