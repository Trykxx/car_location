<?php

require_once '../src/Core/Autoloader.php';
require_once '../config/env.php';

// echo DIR_PATH . '<br>';
// echo $dirPath;

use App\Core\Autoloader;
use App\Core\Router;

Autoloader::autoload();

$router = new Router();
$router->execute();

