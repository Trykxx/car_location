<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Repository\UserRepository;
use App\Core\Session;

class AdminUserController extends AbstractAdminController
{
    public function index(): void
    {
        $allUsers = new UserRepository();
        $users = $allUsers->getAllUsers();

        $this->render('dashboard-users', ['users' => $users]);
    }

    public function showUserUpdateForm($param)
    {

        $id = $param['id'];
        $users = new UserRepository;
        $user = $users->getUserById($id);

        $this->render('user-update-form', ['user' => $user]);
    }

    public function userUpdate()
    {
        $this->render('user-update-form');
    }

    public function processUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $session = new Session();
            if (
                !isset($_POST['newPseudo']) ||
                empty($_POST['newPseudo'])
            ) {
                $session->setFlashMessage('Veuillez remplir tous les champs', 'danger');
                header("Location:" . SITE_NAME . '/dashboard/user/modifier');
                exit;
            } else {
                echo 'données reçues';
                $newPseudo = trim($_POST['newPseudo']);

                $userRepository = new UserRepository();
                echo '<pre>';
                var_dump($userRepository);
                echo '</pre>';

                // $userRepository->updateUser($user);
            }
        }
    }
}
