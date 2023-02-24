<?php

//require __DIR__ . '../controllers/LoginController';
class Router extends RouteSwitch
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


abstract class RouteSwitch
{
    protected function login()
    {
       require __DIR__ . '/../views/Login.php';
        //echo "Teste";

    }

    protected function cadUser()
    {
        require __DIR__ . '/insereUsers.php';
    }

    protected function teste()
    {
        require __DIR__ . '/getUsers.php';
    }

    protected function produtosAll()
    {
        require __DIR__ . '/consulta.php';
    }

    protected function produtos($id)
    {
        //require __DIR__ . '/consulta.php';
        
        echo $id;
    }

    
    function __call($name, $arguments)
    {
        http_response_code(404);
       // $resposta[] = "Nada Encontrado";
        //echo json_encode($resposta);
        return $this->home();
    }
}


