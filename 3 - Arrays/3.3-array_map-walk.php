<?php

$personas = [
    ["Jorge",1],
    ["Bea",0],
    ["Paco",1],
    ["Amparo",0]
];

//Chequear diferencias entre array_walk y array_map!!
//Aquí lo hago con una función anónima, pero puedo hacerlo llamando a una función declarada antes con "nombrefuncion".
$resultado = array_map(function($arrayPersonas){
     return ($arrayPersonas[1] ? "Señor" : "Señora") . " " . $arrayPersonas[0];}
     ,$personas);

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
    array_walk($resultado,function($elemento,$clave){
        echo $elemento . "<br>";
    });
    ?>
</body>
</html>