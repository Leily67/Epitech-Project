<?php

namespace Core;
// use Core\Request;

class Controller {

    private static $_render;
    protected $request;

function __construct()
{
    $this->request = new Request;
}

//mettre en place la funciton destruct
function __destruct()
{
    echo self::$_render;
}

protected function render($view, $scope = []){
    extract($scope);
    $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', str_replace('Controller', '', (new \ReflectionClass($this))->getShortName()), $view]) . '.php';
    if(file_exists($f)){
        ob_start();
        include($f);
        $view = ob_get_clean();
        ob_start();
        include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 'index']) . '.php');
        self::$_render = ob_get_clean();
        }
    }
}