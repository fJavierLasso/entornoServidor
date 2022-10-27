<?php

require_once('7.2-iPlataformaPago.php');

class BancoMalvado implements PlataformaPago {

    function estableceConexión(): bool
    {
        echo ("Conexión con Banco Malvado realizada exitosamente.<br>");
        return true;
    }

    function compruebaSeguridad(): bool
    {
        echo ("La seguridad se ha comprobado correctamente.<br>");
        return true;
    }

    function pagar($cuenta, $cantidad)
    {
        echo ("$cantidad euros han sido transferidos a la cuenta $cuenta <br>");
    }
}

?>