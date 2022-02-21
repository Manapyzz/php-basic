<?php

require_once __DIR__ . '/../config/Router.php';

$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router = new Router();

$router->run($url, $method);
