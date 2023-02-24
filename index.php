<?php

require __DIR__ . '/routers/Router.php';

 $requestUri = $_SERVER['REQUEST_URI'];

$router = new Router;
$router->run($requestUri);