<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Repository\UserRepository;

class AdminUserController extends AbstractAdminController
{
    public function index(): void
    {
        $allUsers = new UserRepository();
        $users = $allUsers->getAllUsers();

        $this->render('dashboard-users',['users'=>$users]);

    }
}
