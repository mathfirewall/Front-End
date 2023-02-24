<?php

require __DIR__ . '/../controllers/LoginController';
class Router extends LoginController
{
    public function run(string $requestUri)
    {
        $route = substr($requestUri, 1);

        if (empty($route)) {
            $this->login();
        } else {
            $this->$route();
        }
    }
}





