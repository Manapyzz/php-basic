<?php

require_once __DIR__ . '/../model/User.php';

class UserController
{
    public function listUser()
    {
        $userModel = new User();
        $users = $userModel->findAll();
        require_once __DIR__.'/../view/user/users.php';
    }
}