<?php
//Crea una web similar a la anterior pero que pare al finalizar la cadena 
//o al encontrar el carácter 'a', tanto minúscula como mayúscula. Usa While

$cadena = "ola k ase";
$i = 0;
    while ($i<strlen($cadena) && strtolower(substr($cadena,$i,1))!='a'):
    echo ("<h4>".substr($cadena,$i,1)."</h4>"); 
    $i++;
    endwhile;

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