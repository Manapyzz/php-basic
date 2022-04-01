<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->get('/', 'Mvc\Controller\PostController@homepage');
$router->get('/api', 'Mvc\Controller\PostController@api');
$router->post('/api/post', 'Mvc\Controller\PostController@apiPost');
$router->post('/posts', 'Mvc\Controller\PostController@add');
$router->get('/posts/(\d+)', 'Mvc\Controller\PostController@readOne');
$router->post('/api/search', 'Mvc\Controller\PostController@search');

$router->run();