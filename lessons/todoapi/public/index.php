<?php

require_once __DIR__.'/../vendor/autoload.php';

header('Access-Control-Allow-Origin: http://127.0.0.1:5500');

$router = new \Bramus\Router\Router();

$router->get('/tasks', 'Mvc\Controller\TodoController@list');
$router->get('/tasks/(\d+)', 'Mvc\Controller\TodoController@read');
$router->post('/tasks', 'Mvc\Controller\TodoController@create');
$router->put('/tasks/(\d+)', 'Mvc\Controller\TodoController@update');
$router->delete('/tasks/(\d+)', 'Mvc\Controller\TodoController@delete');

$router->run();