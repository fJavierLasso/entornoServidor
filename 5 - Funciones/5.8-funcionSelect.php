<?php

function genera_select(array $opciones, int $seleccionada = -1) {
    echo ("<select>");   
    for($i=0;$i<count($opciones);$i++):
        echo ("<option value='$opciones[$i]' ");
        echo ($i==$seleccionada)?("selected>$opciones[$i]</option>"):(">$opciones[$i]</option>");
    endfor;
    echo ("</select>");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?=genera_select(["pepe","juan","paco","merche"],2)?>
</body>
</html>