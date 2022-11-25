<?php
namespace Models;
class Selector extends AInput {

    private $isMultiple = false;
    private $options = array();

    
    public function __construct($title, $isMultiple, $options) {

        parent::__construct($title);
        $this->isMultiple = $isMultiple;
        
        foreach ($options as $option) {
            array_push($this->options,$option);
        }

    }
	
	public function specificCheck() {
        if (in_array($this->value, $this->options)) { //el valor que llegue tiene que estar entre las opciones.
            return true;
        } else {
            $this->error = "<div class='error'>$this->value no es una opción válida.</div>";
            return false;
        }
	}

    public function printItem() {
        if ($this->generalCheck()) {
            if ($this->isMultiple) {
                //imprimo checkboxes
                echo "<div class='checkboxGroup'>";
                foreach ($this->options as $option) {
                    echo "<label for='$option'>$option</label>";
                    echo "<input type='checkbox' name='$option' id='$option' value='$option'>";
                }
                echo "</div>";
    
            } else {
                echo "<div class='selectorGroup'>";
                echo "<label for='$this->title'>$this->title</label>";
                echo "<select name='$this->title' id='$this->title'>";
                foreach ($this->options as $option) {
                    echo "<option value='$option'>$option</option>";
                }
                echo "</select>";
                echo "</div>";
            }
        }
    }
}
?>