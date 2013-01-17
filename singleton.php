<?php

error_reporting(E_ALL | E_STRICT);

class Singleton
{
    private static $instance;

    private function __construct(){}

    public static function getInstance()
    {
        if(self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

$a = Singleton::getInstance();
echo $a;
