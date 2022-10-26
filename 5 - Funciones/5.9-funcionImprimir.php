<?php

$cosas = [
    3,
    "frutas"  => ["a" => "naranja", "b" => [1, 2], "c" => "manzana"],
    "números" => [1, 2, 3, 4, 5, 6],
    "hoyos"   => ["primero", 5 => "segundo", "tercero"],
    "asd"
];

function imprimeTabulado($array,$contador="") {

    foreach ($array as $cosa) {
        if (is_array($cosa)) {
            echo $contador . "Array<br>";
            $contador2 = $contador . "_ _ _ _ ";
            imprimeTabulado($cosa,$contador2);
        } else {
           echo ($contador . $cosa . "<br>");
        }
    }
}
imprimeTabulado($cosas);
?>

