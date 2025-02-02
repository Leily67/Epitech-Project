<?php

namespace Controller;

class UserController extends \Core\Controller{

    function addAction(){
         $this->render('register'); // Va rendre la vue src/View/User/register.php
    }


}