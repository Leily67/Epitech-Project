<?php

namespace Controller;

class AppController extends \Core\Controller {
    
    public function indexAction(){
        // session_start();
        $this->render('index');
    }
}