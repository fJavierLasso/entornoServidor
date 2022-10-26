<?php

require "6.3-Coche.php";
require "6.3.1-CocheConRemolque.php";
require "6.3.15-Grua.php";

$vehiculos = [
    $coche1 = new Coche(1000,"BMW",30),
    $cocheR1 = new CocheConRemolque(1001,"Renault",30,200),
    $coche2 = new Coche(1002,"Porsche",40),
    $grua1 = new Grua(1003,"Ford",20)
];

$grua1->cargarCoche($vehiculos[2]);

foreach ($vehiculos as $vehiculo):
    echo ($vehiculo->pintarInformacion() . "<br><br>");
endforeach;


// $cocheNormal = new Coche();
// $cocheNormal->setCarga("100L")->setMatricula("3083KYJ")->setMarca("Honda");
// echo($cocheNormal->pintarInformacion()) . "<br><br>";

// $remolque = new CocheConRemolque();
// $remolque->setCarga("500L")->setMatricula("7275JLR")->setMarca("Hyundai");
// $remolque->setCapacidadRemolque("1000kg");
// echo($remolque->pintarInformacion()) . "<br><br>";

// $grua = new Grua();
// $grua->setCarga("500L")->setMatricula("3083JJL")->setMarca("BMW");
// $grua->cargarCoche($cocheNormal);
// echo($grua->pintarInformacion()) . "<br><br>";

// $grua2 = new Grua();
// $grua2->setCarga("600L")->setMatricula("2080AAC")->setMarca("TruckBunny");
// $grua2->cargarCoche($remolque);
// echo($grua2->pintarInformacion()) . "<br><br>";

// $grua3 = new Grua();
// $grua3->setCarga("600L")->setMatricula("2283ZAZ")->setMarca("Chintruck");
// $grua3->cargarCoche($remolque);
// echo($grua3->pintarInformacion()) . "<br><br>";

?>