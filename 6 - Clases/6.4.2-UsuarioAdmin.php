<?php

class UsuarioAdmin extends UsuarioPremium {

    public function __construct($nom,$ape,$dep) {
        parent::__construct($nom,$ape,$dep);
        $this->paraSubir = 3;
        $this->nombre = "*admin*" . $nom;
     }

     public function iniciarPartido(){
        echo ("<br><b>$this->nombre inicia un partido.</b><br><br>");
     }

}

?>