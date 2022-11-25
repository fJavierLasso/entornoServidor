<?php

if ($_GET["dato"]) {
    echo "Recibiendo formulario";
} else {
    header('Location: 10.1-direccionIp.php');
    die;
    // echo "<p style='color:red;font-weight:bold;'>HAY UN ERROOOOOR AAAA</p>";
    // echo "<a href='10.1-direccionIp.php'>Rellena el formulario</a>";
}
?>