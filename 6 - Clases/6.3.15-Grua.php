<?php

class Grua extends Coche {

    private $transporta;

    public function pintarInformacion()
    { //Si lleva un objeto, concatenamos la info con el objeto que transporta.
        if (is_object($this->transporta)) {

            return parent::pintarInformacion() . "<br>Transporta coche: " . $this->transporta->getMatricula() . "," . " con carga de " . $this->transporta->getCarga();
        //Si no, pues no.
        } else {
            return parent::pintarInformacion();
        }
    }
    
    public function cargarCoche($coche) {
        
        //Si ya lleva un objeto, no lo permitimos.
        if (is_object($this->transporta)) {
            echo "Esta grúa ya transporta al vehículo " . $this->transporta->getMatricula();
        //Si el objeto ya está siendo llevado.
        } else if ($coche->cocheCargado) {
            echo "El coche " . $coche->getMatricula() . " ya está siendo cargado.<br><br>";
        //Si 
        } else {
            $coche->cocheCargado = true;
            $this->transporta = $coche;
        }

    }

    public function descargarCoche() {

        if (is_object($this->transporta)) {
            echo "La grúa " . $this->getMatricula() . 
            "ha descargado al coche " . $this->transporta->cocheCargado;
            $this->transporta->cocheCargado = false;
            $this->transporta = "";
            
        }

}

}
