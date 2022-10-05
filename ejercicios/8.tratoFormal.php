<?php

$personas = [
    ["Jorge",1],
    ["Bea",0],
    ["Paco",1],
    ["Amparo",0]
];

function chequeaGenero($arrayPersonas) {
    return ($arrayPersonas[1] ? "Señor" : "Señora") . " " . $arrayPersonas[0];

}

$resultado = array_map("chequeaGenero",$personas);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print_r($resultado);
    ?>
</body>
</html>