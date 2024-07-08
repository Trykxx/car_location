<?php

// require_once '../src/Entity/Test.php';
require_once '../src/Core/Autoloader.php';

use App\Core\Autoloader;

Autoloader::autoload();

use App\Entity\Test;

$test = new Test();
echo $test->display();
