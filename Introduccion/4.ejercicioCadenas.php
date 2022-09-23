<?php

if(isset($_GET['introducido']) && $_GET['introducido'] != "") {

    $valor = $_GET['introducido'];
    $tarjetaRespuesta = 'tarjeta';

} else {
    $tarjetaRespuesta = 'tarjetaVacia';
    $valor = "";
}

function contarVocales($palabra){

    $vocales = "aeiouAEIOUáéíóú";
    $voc = 0;

    for($i=0;$i<mb_strlen($palabra);$i++) {
        for($j=0;$j<mb_strlen($vocales);$j++) {
            if($palabra[$i]==$vocales[$j]){
                $voc++;
            } 
        }
    }

    $con = mb_strlen($palabra) - $voc;
    return array($voc,$con);
}

function esPalindromo($palabra){

    $chequeos = (integer)mb_strlen($palabra)/2;
    $esPal = true;
    for ($i=0;$i<$chequeos;$i++){
        if ($palabra[$i]!=$palabra[mb_strlen($palabra)-$i-1]){
            $esPal = false;
        } 
    }

    if ($esPal) {
        return "esPalíndromo";
    } else {
        return "noPalíndromo";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesCadenas.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <div class="tarjeta">
        <div class="intro">

        </div>
        <h1>Analizar palabra:</h1>
        <form action="4.ejercicioCadenas.php" method="get">
            <input type="text" name="introducido" value="<?=$valor?>">
        </form>
    </div>
    <div class="<?=$tarjetaRespuesta?> tarjeta__resultados" id="">
        <div class="tarjetaInterior">
        <p><h3>Has escrito</h3> <?=$valor?>.</p>
        </div>
        <div class="tarjetaInterior">
            <div class="contadoresNumericos">
                <div class="contador">
                    <p>Vocales</p>
                    <div class="contador__circulo"><?=contarVocales($valor)[0];?></div>
                </div>
                <div class="contador">
                    <p>Consonantes</p>
                    <div class="contador__circulo"><?=contarVocales($valor)[1];?></div>
                </div>
            </div>
           
            
        <p>
            <div class="tipoPalabra" id="<?=esPalindromo($valor)?>">
            <?php
                if (esPalindromo($valor)=="esPalíndromo") {
                    echo "Tu palabra es un <strong><i>palíndromo</i></strong>.";
                } else {
                    echo "Tu palabra no es un <strong><i>palíndromo</i></strong>.";
                }
            ?>
            </div>
        </p>
        <p></p>
        </div>
        
        
    </div>
    <div class="firma">By Javier Lasso</div>
</body>
</html>