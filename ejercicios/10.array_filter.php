<?php

$personas = [
    ["Jorge",1],
    ["Bea",0],
    ["Paco",1],
    ["Amparo",0]
];

//Ejercicio 10:

$mujeres = array_filter($personas,function($val){
    return $val[1]==0;
});

$hombres = array_filter($personas,function($val){
    return $val[1]==1;
});

function imprimir($array){
    foreach ($array as $valor) {
        echo $valor[0]." ";
    }
    echo "<br>";
}

imprimir($mujeres);
imprimir($hombres);

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