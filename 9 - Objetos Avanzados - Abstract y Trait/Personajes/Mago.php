<?php

namespace Personajes;
abstract class Mago implements \Common\iPersonaje {

    use \Common\tSpawnable;
    
    public function defender(){
        echo "<br>hechizo protector";
    }
    abstract public function atacar();
}
?>