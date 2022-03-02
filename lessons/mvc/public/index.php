<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->get('/books', 'Mvc\Controller\BookController@listBook');
$router->post('/books/create', 'Mvc\Controller\BookController@createBook');
$router->get('/books/(\d+)', 'Mvc\Controller\BookController@getBook');
$router->post('/books/(\d+)/delete', 'Mvc\Controller\BookController@deleteBook');
$router->get('/books/(\d+)/update', 'Mvc\Controller\BookController@updateBook');
$router->post('/books/(\d+)/update', 'Mvc\Controller\BookController@updateBook');

$router->run();