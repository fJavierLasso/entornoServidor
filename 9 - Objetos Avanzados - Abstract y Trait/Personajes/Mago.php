<?php

namespace Personajes;
use \Common\iPersonaje;

abstract class Mago implements iPersonaje {

    use \Common\tSpawnable;
    
    public function defender(){
        echo "<br>hechizo protector";
    }
    abstract public function atacar();
}
?>