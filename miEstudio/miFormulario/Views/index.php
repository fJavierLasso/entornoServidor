<?php

require_once("../autoload.php");

$form = new \Controllers\Formulario(
    new \Models\Selector("Selector", false, array("Opcion 1", "Opcion 2", "Opcion 3")),
    new \Models\Texto("Texto",25)
);


print_r($_POST);
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