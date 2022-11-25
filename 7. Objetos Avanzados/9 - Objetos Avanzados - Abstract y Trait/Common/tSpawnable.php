<?php

namespace Common;
//Los traits son para implementar métodos etc. en varias clases que no tienen nada que ver (Sin herencia)
trait tSpawnable {

    public $nombre;
    public $descripcion;
    public $x;
    public $y;
    public $z;

    //print all class variables
    public function getAllValues(){

        echo "<div style='font-family:Arial;width:20vw;padding: 2%;margin:5%;background-color:aliceblue;border:1px solid;border-radius:25px;'>";
        foreach ($this as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        echo "</div>";
    }

    /**
     * Get the value of x
     */ 
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */ 
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     */ 
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */ 
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get the value of z
     */ 
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Set the value of z
     *
     * @return  self
     */ 
    public function setZ($z)
    {
        $this->z = $z;

        return $this;
    }
    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}

?>