<?php
namespace Controllers;

class Formulario {

    private const FORM_ACTION = "index.php";
    private $inputs = array();

    public function __construct() {

        foreach (func_get_args() as $arg) {
            array_push($this->inputs, $arg);
        }

        //imprimo el formulario, ya validado item a item.

        echo "<form action='".self::FORM_ACTION."' method='post'>";

        foreach($this->inputs as $input) {
            $input->printItem();
        }
        
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
    }

    public function load($candidato) {

        if ($candidato->generalCheck()) {
            array_push($this->inputs, $candidato);
        } else {
            echo $candidato->getError();
        }

    }

}
?>