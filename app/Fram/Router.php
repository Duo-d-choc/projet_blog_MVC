<?php

namespace App\Fram;

use App\Controller\ErrorController;

class Router
{
    public function getController()
    {
        $xml = new \DOMDocument();
        $xml->load('./Config/routes.xml');
        $routes = $xml->getElementsByTagName('route');

        isset($_GET['p']) ? $path = htmlspecialchars($_GET['p']) : $path = "";

        foreach ($routes as $route){
            if ($path === $route->getAttribute('path')){
                $controllerClass = 'Controller\\' . $route->getAttribute('controller');
                $action = $route->getAtrribute('action');
                $params = [];
                if ($route->hasAttribute('params')){
                    $keys = explode(',',$route->getAttribute('params'));
                    foreach ($keys as $key) {
                        $params[$key] = $_GET[$key];
                    }
                }
                return new $controllerClass($action, $params);
            }
        }
        return new ErrorController('error404');
    }
}