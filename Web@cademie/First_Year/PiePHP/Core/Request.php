<?php

namespace Core;

class Request{

    private $queryParams;
    private $body;

    public function __construct()
    {
        $this->queryParams = [];
        foreach($_GET as $key => $value){
            $this->queryParams[$key] = trim(htmlspecialchars(stripcslashes($value)));
        }
        $this->body = [];
        foreach($_POST as $key => $value){
            $this->body[$key] = trim(htmlspecialchars(stripcslashes($value)));
        }
    }


    public function getQueryParams() {
        return $this->queryParams;
    }

    public function getBody() {
        return $this->body;
    }
}