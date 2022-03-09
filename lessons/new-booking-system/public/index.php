<?php

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$router = new Bramus\Router\Router();

$router->before('GET|POST', '/admin', function() {
    if (!isset($_SESSION['user'])) {
        header('location: /login');
        exit();
    }
});

$router->get('/register', 'NewBookingSystem\Controller\UserController@register');
$router->post('/register', 'NewBookingSystem\Controller\UserController@register');
$router->get('/login', 'NewBookingSystem\Controller\UserController@login');
$router->post('/login', 'NewBookingSystem\Controller\UserController@login');
$router->get('/admin', 'NewBookingSystem\Controller\AdminController@listEvent');

$router->run();