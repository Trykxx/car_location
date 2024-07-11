<?php

namespace App\Controller\Front;


use App\Controller\Front\AbstractController;

class HomeController extends AbstractController
{
    public function index():void
    {
        $this->render('/front/home');
    }
}