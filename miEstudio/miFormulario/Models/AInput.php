<?php
namespace Models;
abstract class AInput {

    protected $title; //El título del input.
    protected $value; //El valor que recibirá.
    protected $error; //Recogidos por generalCheck.

    public function __construct($title) {
    	$this->title = $title;
    	
        if (isset($_POST[$title])) { //si existe el input en el post, lo guardo.
            $this->value = $_POST[$title];
        } else {
            $this->value = "";
        }
    }

    public function generalCheck() {
        
        //descubrir que quiero de un general check

    }

    public function getError() {
        return $this->error;
    }

    abstract function specificCheck();
    abstract function printItem();
}

?>