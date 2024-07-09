<?php

namespace App\Controller;

use App\Controller\AbstractController;

class LoginController extends AbstractController
{
    public function showLoginForm(): void
    {
        $this->render('connexion');
    }

    public function processLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (
                !isset($_POST['email']) ||
                !isset($_POST['mdp']) ||
                empty($_POST['email']) ||
                empty($_POST['mdp'])
            ) {
                echo 'Données incorrectes';

            } else {
                $email = $_POST['email'];
                $password = $_POST['mdp'];

                $email = trim($email);
                $password = trim($password);

                $password_hache = password_hash($password, PASSWORD_DEFAULT);

                echo 'Connexion réussie!';
                // header('Location: ');
            }
        } else {
            // $_SESSION['message'] = 'Mauvaise méthode de requête';
        }
    }
}
