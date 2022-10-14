<?php

//declaro asignaturas
$asignaturas = [
    $ecl = "Entorno Cliente",
    $esr = "Entorno Servidor",
    $dis = "Diseño de Interfaces Web",
    $des = "Despliegue de Aplicaciones Web",
    $ing = "Inglés Técnico",
    $emp = "Empresa e Iniciativa Emprendedora"
];

//defino por filas. Dentro de las array hay otra: [valor,horas].
$horario = [
    [["",1],["Lunes",1],["martes", 1],["miércoles", 1],["jueves", 1],["viernes", 1]],
    [["16:00 - 16:55",1],[$ecl,3],[$ing,1],[$dis,3],[$emp,1],[$esr,3]],
    [["16:55 - 17:50",1],[$des,2],[$des,2]],
    [["17:50 - 18:45",1]],
    [["18:45 - 19:10",1],["P",1],["A",1],["T",1],["I",1],["O",1]],
    [["19:10 - 20:05",1],[$emp,2],[$dis,3],[$esr,3],[$esr,3],[$ecl,3]],
    [["20:05 - 21:00",1]],
    [["21:00 - 21:55",1],[$ing,1]]
];

//función para definir color de fondo según asignatura
function style($var){

    global $asignaturas;
    $style="";

    switch ($var){
        case $asignaturas[0]:
            $style = "background-color: #9790e8;";
            break;
        case $asignaturas[1]:
            $style = "background-color: #e89690;";
            break;
        case $asignaturas[2]:
            $style = "background-color: #e2e890;";
            break;
        case $asignaturas[3]:
            $style = "background-color: #e8c390;";
            break;
        case $asignaturas[4]:
            $style = "background-color: #ade890;";
            break;
        case $asignaturas[5]:
            $style = "background-color: #e890e2;";
            break;
        case "":
            $style = "background-color: #ffffff;";
    };

    return " style='".$style."'";
}

//función para iterar y crear la tabla
function crearHorario($var){

    for ($i=0;$i<count($var);$i++) {

        echo "<tr>";
        
        for ($j=0;$j<count($var[$i]);$j++) {
    
                echo "<td rowspan=" . $var[$i][$j][1] . style($var[$i][$j][0]) .">" . $var[$i][$j][0] . "</td>";
        }
        
        echo "</tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="3.1-stylesArrays.css">
        <title>EJERCICIO 6</title>
    </head>
    <body>
        <table>
        <?php crearHorario($horario);?>
        </table> 
    </body>
</html>