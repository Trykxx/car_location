<?php

namespace App\Controller;

class HomeController
{
    public function index():void
    {
        require_once '../templates/home.php';
    }
}