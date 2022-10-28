<?php

class Objeto {
    
    use tSpawnable;
    public $peso;

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }
}

?>