<?php

use App\Config\Repository;
use App\Result\ResultsManager;
use App\Telegram\Madeline\Factory;

$root = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;

require $root . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

Repository::getInstance($root . 'config' . DIRECTORY_SEPARATOR . 'main.local.json');
Factory::getInstance($root . 'var' . DIRECTORY_SEPARATOR . 'madeline' . DIRECTORY_SEPARATOR);
ResultsManager::getInstance($root . 'results' . DIRECTORY_SEPARATOR);
