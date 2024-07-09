<?php

require_once '../src/Core/Autoloader.php';
require_once '../config/env.php';

// echo DIR_PATH . '<br>';
// echo $dirPath;

use App\Core\Autoloader;
use App\Core\Router;
use App\Core\Database;

Autoloader::autoload();
Database::iniConnection(); // cree la variable $connection

$pdo = Database::getConnection();

$router = new Router();
$router->execute();

