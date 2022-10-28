<?php


require_once ("iPersonaje.php");
require_once ("tSpawnable.php");

class Humano implements iPersonaje {

    //POR QUÉ NO EN VEZ DE UNA INTERFAZ, UNA CLASE ABSTRACTA? ASÍ PODRÍAMOS OBLIGAR A QUE TODAS LAS CLASES TENGAN NOMBRE XEJ
    //CON UNA CLASE ABSTRACTA PODRÍAMOS UNIFICAR LA INTERFAZ Y EL TRAIT QUE TENEMOS.
    //AL FINAL OBLIGUÉ A QUE TUVIERAN UNA PROPIEDAD NOMBRE GLOBALIZANDO EL TRAIT, PERO NO SE SI ES LA MEJOR FORMA

    use tSpawnable;
    
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