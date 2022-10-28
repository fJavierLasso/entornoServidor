<?php

//NO FUNCIONA
// spl_autoload_register(function ($class) {
//     $classPath = "./";
//     require("./" . $class . ".php");
// });

require_once ("Personajes/Humano.php");
require_once ("Personajes/MagoBlanco.php");
require_once ("Personajes/MagoOscuro.php");
require_once ("Objetos/Edificio.php");
require_once ("Objetos/objeto.php");

$chars = [
    $char1 = new Humano(),
    $char2 = new MagoBlanco(),
    $char3 = new MagoOscuro()
];

$char2->setNombre("Harry Potter");
$char2->setDescripcion("Un mago estúpido que rompió y tiró la varita de Dumbledore");
$char3->setNombre("Voldemort");

$torre = new Edificio();
$torre->setAltura(150); //cosa liosa: Cómo accedo a todas las propiedades de una clase si están esparcidas por interfaces, traits..?
$torre->setNombre("torreDura");

foreach ($chars as $char) {
    $char->atacar();
    $char->defender();
    $char->getAllValues();
}

?>