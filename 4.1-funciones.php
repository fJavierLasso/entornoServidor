<?php
//Crea una página web que genere 3 números aleatorios "mt_rand()", 
//con sentencias condicionales los asigna a tres variables: mayor, 
//mediano y pequeño. Después los mostrará en h1, h2 y h3 respectivamente.
$numeros = [mt_rand(),mt_rand(),mt_rand()];
sort($numeros);
for ($i=1;$i<4;$i++): echo("<h".$i.">".$numeros[$i-1]."</h>"); endfor;
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
    
</body>
</html>