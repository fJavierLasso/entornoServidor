<?php
require ('6.4-Usuario.php');
require ('6.4.1-UsuarioPremium.php');
require ('6.4.2-UsuarioAdmin.php');

$juanP2W = new UsuarioPremium("juan","p2w","fútbol");

for ($i = 0; $i < 6; $i++ ):
    $juanP2W->introducirResultado("victoria");
endfor;

for ($i = 0; $i < 6; $i++ ):
    $juanP2W->introducirResultado("derrota");
endfor;

$pepe = new Usuario("Pepe","Pérez","Tenis");

for ($i = 0; $i < 35; $i++ ):
    $pepe->introducirResultado("victoria");
endfor;

for ($i = 0; $i < 39; $i++ ):
    $pepe->introducirResultado("derrota");
endfor;

$pepe->imprimirInformacion();
$juanP2W->imprimirInformacion();

$super = new UsuarioAdmin("Eugenio","López","Baloncesto");

$super->iniciarPartido();

for ($i = 0; $i < 12; $i++ ):
    $super->introducirResultado("victoria");
endfor;

for ($i = 0; $i < 6; $i++ ):
    $super->introducirResultado("derrota");
endfor;

$super->imprimirInformacion();
?>