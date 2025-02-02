<?php

namespace Controller;

class ErrorController extends \Core\Controller{

    function error404(){
        $this->render('404');
    }


}