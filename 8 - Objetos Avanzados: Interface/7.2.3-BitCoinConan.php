<?php
require_once('7.2-iPlataformaPago.php');

class BitCoinConan implements PlataformaPago{

    function estableceConexión(): bool
    {
        echo ("BitCoinConan estableció conexión anónima.<br>");
        return true;
    }

    function compruebaSeguridad(): bool
    {
        echo ("BitCoinConan no neesita comprobar la seguridad. Él es la seguridad.<br>");
        return true;
    }

    function pagar($cuenta, $cantidad)
    {
        echo ("La cantidad de $cantidad ha sido transferida a la cuenta $cuenta, de la que suerte para sacar tu dinero.<br>");
    }

}
?>