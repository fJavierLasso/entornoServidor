<?php

class Singleton
{
    private static $instance = null;
    private $nombreApp;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function setNombreApp($value)
    {
        $this->data = $value;
    }

    public function getNombreApp()
    {
        return $this->data;
    }
}

?>