<?php
namespace Core;

use Core\Router;


class Core
{

    public function run() {
        require_once 'src/routes.php';

        $requestUri = $_SERVER['REQUEST_URI'];
        $url = str_replace(BASE_URI, '', $requestUri);
        $route = Router::get($url);
        
        $controllerName = "Controller\\".ucfirst($route['controller'])."Controller";
        $methodName = $route['action']."Action";

        if(!class_exists($controllerName)){
            $errors = new \Controller\ErrorController();
            return $errors->error404(); 
        }

        $controller = new $controllerName();
        if(!method_exists($controller, $methodName)){
            $errors = new \Controller\ErrorController();
            return $errors->error404(); 
        }

        $controller->$methodName();
    }

} 

