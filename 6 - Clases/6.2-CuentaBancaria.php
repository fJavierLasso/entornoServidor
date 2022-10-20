<?php

class CuentaBancaria {
    
    private static $contadorCuentas = 100001;
    
    private $numCuenta;
    private $nombre;
    private $saldo;

    function __construct($name = "anónimo",$saldo = 0) {
        $this->numCuenta = CuentaBancaria::$contadorCuentas + 1;
        $this->nombre = $name;
        $this->saldo = $saldo;

        CuentaBancaria::$contadorCuentas++;
    }

    function ingresar($cant) {
        $this->saldo += $cant;
    }

    function retirar($cant) {
        $this->saldo -= $cant;
    }

    function saldo() {
        return $this->saldo;
    }

    function transferir($cant,$cuenta) {
        $this->saldo -= $cant;
        $cuenta->saldo += $cant;
    }

    function bancarrota() {
        $this->saldo = 0;
    }

    function unir($target) {
        $this->saldo += $target->saldo;
        $target->bancarrota();
        $target->numCuenta = -1;
    }

    function mostrar() {
        echo ("
        <div class='mostrarDatos'>
        <table>
        <tr>
            <td>NºCUENTA</td>
            <td>NOMBRE</td>
            <td>SALDO</td>
        </tr>
        <tr>
            <td>". $this->numCuenta ."</td>
            <td>". $this->nombre ."</td>
            <td>". $this->saldo ."</td>
        </tr>
        </table>
        </div>
        ");
    }

    

}
?>