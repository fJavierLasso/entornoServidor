<?php

class Coche {
    private $matricula;
    private $marca;
    private $carga;
    protected $cocheCargado = false;


    function __construct($mat,$mar,$car) {
        $this->matricula = $mat;
        $this->marca = $mar;
        $this->carga = $car;
    }
    
    public function pintarInformacion(){
        return "Matrícula: " . $this->matricula .  "<br>Marca: " . $this->marca . "<br>Capacidad de carga: " . $this->carga;
    }

      /**
     * Get the value of velocidad
     */ 
    public function getCarga()
    {
        return $this->carga;
    }

    /**
     * Set the value of velocidad
     *
     * @return  self
     */ 
    public function setCarga($carga)
    {
        $this->carga = $carga;

        return $this;
    }
      /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
 /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }
   


    /**
     * Get the value of cocheCargado
     */ 
    public function getCocheCargado()
    {
        return $this->cocheCargado;
    }

    /**
     * Set the value of cocheCargado
     *
     * @return  self
     */ 
    public function setCocheCargado($cocheCargado)
    {
        $this->cocheCargado = $cocheCargado;

        return $this;
    }
}
?>