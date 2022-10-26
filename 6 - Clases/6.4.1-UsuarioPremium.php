<?php

class UsuarioPremium extends Usuario {
    
     public function __construct($nom,$ape,$dep){
        parent::__construct($nom,$ape,$dep);
        $this->paraSubir = 3;
        $this->nombre = "*premium*" . $nom;
     }
}
?>