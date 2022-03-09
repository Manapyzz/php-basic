<?php

namespace NewBookingSystem\Controller;

use Framework\Controller;
use NewBookingSystem\Model\UserModel;

class UserController extends Controller
{
    private UserModel $userModel;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password']))
        {
            $this->userModel->createUser($_POST['lastname'], $_POST['firstname'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT));
        }

        echo $this->twig->render('user/register.html.twig');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['password']))
        {
            $user = $this->userModel->findOneByEmail($_POST['email']);

            if ($user && password_verify($_POST['password'], $user['password']))
            {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'lastname' => $user['lastname'],
                    'firstname' => $user['firstname'],
                    'email' => $user['email'],
                ];

                header('Location:/admin');
                exit();
            }
        }

        echo $this->twig->render('user/login.html.twig');
    }
}