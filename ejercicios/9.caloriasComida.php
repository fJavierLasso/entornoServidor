<?php

$comida = [
 0=>["Banana",3,56],
 1=>["Chuleta",1,256],
 2=>["Pan",1,90]
];

function calTotales($acumulador,$array) {
    $acumulador += $array[1] * $array[2];
    return $acumulador;
}

echo(array_reduce($comida,"calTotales")); //es un puto bucle pero con menos legibilidad. 
//array_reduce($arrayAoperar,función hecha por mí que haga algo con un valor del array a operar y arroje un resultado. Se hara con todos los valores
//de la array, y posteriormente estos se sumarán.)

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
    
</body>
</html>