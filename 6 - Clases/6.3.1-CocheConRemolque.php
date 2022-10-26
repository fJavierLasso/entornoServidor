<?php

class CocheConRemolque extends Coche {
    private $capacidadRemolque;

    function __construct($mat,$mar,$car,$cap) {
        parent::__construct($mat,$mar,$car);
        $this->capacidadRemolque = $cap;
    }

    public function pintarInformacion(){
        return parent::pintarInformacion(). "<br>Capacidad de Remolque: " .$this->capacidadRemolque;
    }

    /**
     * Get the value of capacidadRemolque
     */ 
    public function getCapacidadRemolque()
    {
        return $this->capacidadRemolque;
    }

    /**
     * Set the value of capacidadRemolque
     *
     * @return  self
     */ 
    public function setCapacidadRemolque($capacidadRemolque)
    {
        $this->capacidadRemolque = $capacidadRemolque;

        return $this;
    }
}
?>