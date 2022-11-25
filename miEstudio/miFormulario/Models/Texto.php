<?php
namespace Models;

class Texto extends AInput
{
    const LENGTH_TO_TEXTAREA = 26;
    private $maxLength;
    private $required;

    public function __construct($title, $maxLength=25,$required=true)
    {
        parent::__construct($title);
        $this->required = $required;
        $this->maxLength = $maxLength;
    }
    
    public function specificCheck()
    {
        //Comprobar tamaño del texto correcto.
        if (count_chars($this->value) > $this->maxLength) {
            $this->error = "<div class='error'>$this->title no puede tener más de $this->maxLength caracteres.</div>";
            return false;
        } else {
            //Prevenir XSS
            $this->value = htmlspecialchars($this->value, ENT_QUOTES, 'UTF-8');
            return true;
        }
    }

    public function printItem()
    {
        echo "<div class='textGroup'>";
        echo "<label for='$this->title'>$this->title</label>";
        echo ($this->maxLength < self::LENGTH_TO_TEXTAREA)? //en función de longitud del texto, imprimo textarea o input.
            "<textarea name='$this->title' id='$this->title' cols='30' rows='10' required='$this->required'></textarea>":
            "<input type='text' name='$this->title' id='$this->title' required='$this->required'>";
        echo "</div>";

        echo $this->error;
    }
}
?>