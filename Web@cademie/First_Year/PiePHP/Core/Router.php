<?php
namespace Core;


class Router {
    private static $routes;
    public static function connect($url, $route){
        self::$routes[$url] = $route;
    }

    public static function get($url){
        if (array_key_exists($url, self::$routes)){
            return self::$routes[$url];
        } else {
            $parts = explode(DIRECTORY_SEPARATOR, $url);
            return['action' => $parts[2], 'controller' => $parts[1]];
        // TODO add dynamic routing
         ///user/action
         //$parts = explode(DIRECTORY_SEPARATOR, $URL);
         //return ["action" => $part[2], "Controller" => $parts[1];
        }
    }
}