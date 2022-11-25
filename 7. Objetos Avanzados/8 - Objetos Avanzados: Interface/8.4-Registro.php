<?php
require_once('8.1-BancoMalvado.php');
require_once('8.2-BitCoinConan.php');
require_once('8.3-BancoMaloMalisimo.php');

$bancos = [
    $banco1 = new BancoMalvado(),
    $banco2 = new BitCoinConan(),
    $banco3 = new BancoMaloMalisimo()
];

$banco1->estableceConexión();
$banco1->compruebaSeguridad();
$banco1->pagar("0123","300");

echo ("<br><br>");
$banco2->estableceConexión();
$banco2->compruebaSeguridad();
$banco2->pagar("0123","300");

echo "<br><br>";
$banco3->estableceConexión();
$banco3->compruebaSeguridad();
$banco3->pagar("0123","300");

function realizarTransaccion(PlataformaPago $obj) {
    $obj->estableceConexión();
    $obj->compruebaSeguridad();
    $obj->pagar("1234","400");
}

echo "<br><br>";
realizarTransaccion($bancos[rand(0,2)]);

echo "<br><br>";

?>