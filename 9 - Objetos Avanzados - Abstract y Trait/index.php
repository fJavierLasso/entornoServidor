<?php

spl_autoload_register(function ($class) {
    $classPath = realpath("./");
    $file = str_replace('\\','/', $class);
    $include = "$classPath/${file}.php";
    require($include);
});

$chars = [
    $char1 = new Personajes\Humano(),
    $char2 = new Personajes\MagoBlanco(),
    $char3 = new Personajes\MagoOscuro()
];

$char2->setNombre("Harry Potter");
$char2->setDescripcion("Un mago estúpido que rompió y tiró la varita de Dumbledore");
$char3->setNombre("Voldemort");

$torre = new Objetos\Edificio();
$torre->setAltura(150); //cosa liosa: Cómo accedo a todas las propiedades de una clase si están esparcidas por interfaces, traits..?
$torre->setNombre("torreDura");

foreach ($chars as $char) {
    $char->atacar();
    $char->defender();
    $char->getAllValues();
}

?>