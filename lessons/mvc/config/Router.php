<?php

require_once __DIR__ . '/../src/controller/BookController.php';
require_once __DIR__ . '/../src/controller/UserController.php';

class Router
{
    public function run(string $routeName, string $method)
    {
        $bookController = new BookController();
        $userController = new UserController();

        if ($routeName === '/books')
        {
            $bookController->listBook();
        } elseif ($routeName === '/book') {
            $bookController->readBook();
        } elseif ($routeName === '/users') {
            $userController->listUser();
        } elseif ($routeName === '/book/create' && $method === 'POST') {
            $bookController->createBook($_POST);
        } else {
            echo 'Oups il n\'y a rien à voir ici !';
        }
    }
}