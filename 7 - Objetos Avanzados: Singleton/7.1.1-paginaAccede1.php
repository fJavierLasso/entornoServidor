<?php
require_once('7.1-singleton.php');

$objeto = Singleton::getInstance();
$objeto->setNombreApp("quieroCocaCola");

echo ($objeto->getNombreApp() . "<br>");

$objeto2 = Singleton::getInstance();

echo ($objeto2->getNombreApp());


?>