<?php


namespace Personajes;
use \Common\iPersonaje;

class Humano implements iPersonaje {

    use \Common\tSpawnable;
    
    public function atacar()
    {
        echo ("puñetazo<br>");
    }

    public function defender()
    {
        echo ("bloqueo<br>");
    }
}

?>