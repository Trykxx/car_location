<?php

namespace App\Controller;

use App\Controller\AbstractController;

class LoginController extends AbstractController
{
    public function showLoginForm():void
    {
        $this->render('connexion');
    }
}