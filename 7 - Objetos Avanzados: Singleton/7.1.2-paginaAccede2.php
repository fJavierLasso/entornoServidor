<?php

require('7.1.1-paginaAccede1.php');

$objetox = Singleton::getInstance();

echo ($objetox->getNombreApp());

$objetoy = Singleton::getInstance();

echo ($objetoy->getNombreApp());

?>