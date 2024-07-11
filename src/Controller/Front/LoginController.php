<?php

namespace App\Controller\Front;

use App\Controller\Front\AbstractController;
use App\Core\Session;
use App\Repository\UserRepository;

class LoginController extends AbstractController
{
    public function showLoginForm(): void
    {
        $this->render('/front/connexion');
    }

    public function processLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $session = new Session();
            if (
                !isset($_POST['email']) ||
                !isset($_POST['mdp']) ||
                empty($_POST['email']) ||
                empty($_POST['mdp'])
            ) {
                $session->setFlashMessage('Veuillez remplir tous les champs', 'danger');
                header("Location:" . SITE_NAME . '/admin/connexion');
                exit;
            } else {
                $email = trim($_POST['email']);
                $password = trim($_POST['mdp']);

                $userRpository = new UserRepository();
                $user = $userRpository->getUserByEmail($email);

                if (!$user || $user['mot_de_passe'] !== $password) {
                    $session->setFlashMessage('Email ou mot de passe incorrect', 'danger');
                    header("Location:" . SITE_NAME . '/admin/connexion');
                    exit;
                }

                if ($user && $user['mot_de_passe'] == $password) {
                    $session->setFlashMessage('Vous etes connecté', 'success');
                    header("Location:" . SITE_NAME . '/admin/connexion');
                    exit;
                }
            }
        } else {
            header("Location:" . SITE_NAME . '/admin/connexion');
            exit;
        }
    }
}
