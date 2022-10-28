<?php


namespace Personajes;

class Humano implements \Common\iPersonaje {

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