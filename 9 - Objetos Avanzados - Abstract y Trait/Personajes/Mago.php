<?php

require_once ("iPersonaje.php");

abstract class Mago implements iPersonaje {

    use tSpawnable;
    
    public function defender(){
        echo "<br>hechizo protector";
    }
    abstract public function atacar();
}
?>