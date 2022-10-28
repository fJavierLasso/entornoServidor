<?php

require_once ("Mago.php");

class MagoOscuro extends Mago {
    public function atacar()
    {
        echo "<br>$this->nombre: <span style='color:red'>ataque de sombra</span>";
    }
}

?>