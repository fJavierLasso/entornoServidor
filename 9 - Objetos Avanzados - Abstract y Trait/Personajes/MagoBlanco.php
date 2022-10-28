<?php

namespace Personajes;

class MagoBlanco extends Mago {

public function atacar()
{
    echo "<br>$this->nombre: <span style='color:blue'>ataque de luz</span>";
}
}

?>