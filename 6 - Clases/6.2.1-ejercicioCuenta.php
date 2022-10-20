<?php

require ("6.2-CuentaBancaria.php");
$cuentas = [
$cuenta1 = new CuentaBancaria("Milloneti",1000000),
$cuenta2 = new CuentaBancaria("Agapito",30345),
$cuenta3 = new CuentaBancaria("Pobretón", -10000)
];

echo("milloneti saca 1000e 100veces <br>");
for ($i=0;$i<100;$i++):
    $cuenta1->retirar(1000);
endfor;

//agapito ingresa 1200e
$cuenta2->ingresar(1200);

echo("mostramos solo el saldo de todas <br>");
foreach ($cuentas as $cuenta) {
    echo ($cuenta->saldo() . "<br>");
}

echo("pobretón hackea <br>");
$cuenta3->unir($cuenta1);

echo("el bueno de agapito ayuda <br><br>");
$cuenta2->transferir($cuenta2->saldo()/2,$cuenta1);

foreach($cuentas as $cuenta) {
    echo ($cuenta->mostrar());
}
?>

