<?php

namespace App\Core;

class Autoloader
{
    public static function autoload()
    {
        spl_autoload_register(function ($a) { // register va sauvegarder ma fonction pour la declencher a chaque fois qu'elle trouve pas le chemin de ma classe.
            // $a est le nom de notre classe 'App\Entity\Bd' => son namespace

            $path = "$a.php";
            $path = str_replace('App', '', $path);
            $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
            $dirPath = str_replace(DIRECTORY_SEPARATOR . "Core", '', __DIR__);

            require_once $dirPath . $path;
        });
    }
}
