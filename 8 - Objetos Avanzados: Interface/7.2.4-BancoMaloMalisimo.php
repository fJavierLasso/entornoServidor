<?php
require_once('7.2-iPlataformaPago.php');

class BancoMaloMalisimo implements PlataformaPago{

    function estableceConexión(): bool
    {
        echo ("Banco Malo Malísimo estableció conexión malvada.<br>");
        return true;
    }

    function compruebaSeguridad(): bool
    {
        echo ("Banco malo malísimo dice que la seguridad se ha comprobado. Es mentira. Ya ha vendido tus datos.<br>");
        return true;
    }

    function pagar($cuenta, $cantidad)
    {
        echo ("$cantidad euros transferidos a la cuenta $cuenta, y banco malo malísimo ha matado a un gatito.<br>");
    }
}

?>