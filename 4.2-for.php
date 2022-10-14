<?php
//Crea una página web que recorra una variable de tipo cadena 
//accediendo a cada letra y escriba cada una en un h4. Usa for.
$cadena = "ola k ase";
for ($i=0; $i<strlen($cadena);$i++): echo ("<h4>".substr($cadena,$i,1)."</h4>"); endfor;
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