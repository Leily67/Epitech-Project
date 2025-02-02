<?php


namespace Core;

use \PDO;

class Database 
{
    public static $database = null;
    private $_handle;

    private function __construct()
    {
        $this->_handle = new \PDO('mysql:host=localhost;dbname=spotify;charset=utf8', 'leily', 'Ni269bjaa');
    }

    public static function getDatabase(){
        if(is_null(self::$database)){
            self::$database = new self();
        }
        return self::$database;
    }

    public function handle(){
        return $this->_handle;;
    }
}