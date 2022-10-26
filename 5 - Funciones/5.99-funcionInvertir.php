<?php

function invertir($cadena) {
    return (strlen($cadena) < 2) ? $cadena : invertir(substr($cadena, 1)) . $cadena[0];
}

echo (invertir("ola k ase"));
?>