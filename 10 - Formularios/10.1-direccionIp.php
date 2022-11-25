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

    echo ("tu user agent es:<br>" . $_SERVER['HTTP_USER_AGENT']);
    echo ("<br>tu ip es:<br>" . $_SERVER['REMOTE_ADDR']);
    
    switch ($_SERVER['HTTP_ACCEPT_LANGUAGE']) { //podría hacerlo con ifelse y str_contains pero me da pereza xD
        case 'es-ES,es;q=0.9':
            echo "<br>Estás visitándome desde un navegador en español :-)";
            break;
        case 'en-US,en;q=0.9';
        echo "<br>Your browser is set in english! Good for you :-)";
        break;
        default:
        echo "<br>Pero que idioma es ese loco<br>";
        break;
    }
    ?>

    <form action="10.1.1-formulario.php" method="get">
    <br>
    Dato super importante:<input type="text" name="dato" id="">
    </form>
    
</body>
</html>