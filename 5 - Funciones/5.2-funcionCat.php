<?php

function concatenaGuay($separador,...$cadenas) {
    $final = "";
    foreach ($cadenas as $k => $cadena):
        $final .= (($k==0)?"":$separador) . $cadena;
    endforeach;
    $final .= "<br>";
    return $final;
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
    <?=concatenaGuay(" ","ola","k","ase");?>
    <?=concatenaGuay("--","trabaja","o","k","ase");?>
    <?=concatenaGuay("______","jaja","isi","bro");?>
</body>
</html>