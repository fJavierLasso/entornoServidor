<?php

class Circulo {

    private $radio;
    private const PI = M_PI;

    function setRadio($radio){
        $this->radio = $radio;
    }

    function getRadio(){
        return round(2 * $this::PI * $this->radio,2);
    }

    function getArea(){
        return round($this::PI * pow( $this->radio,2),2);
    }


}

?>