<?php

function genera_select(array $opciones, int $seleccionada = -1)
{
?> 
<select> 
<?php
        for ($i = 0; $i < count($opciones); $i++) :
            echo ("<option value='$opciones[$i]' ");
            echo ($i == $seleccionada) ? ("selected>$opciones[$i]</option>") : (">$opciones[$i]</option>");
        endfor;
?> 
</select> 
<?php
}
genera_select(["pepe", "juan", "paco", "merche"], 1);
?>