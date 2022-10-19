<?php
//Crea una función que reciba dos variables cualesquiera e intercambie su valor. 
//Las variables tendrá ese valor fuera de la función. PRUEBA: Crea una web en la 
//que se muestre cómo se comporta esta función con variables de distinto tipo.
$num1 = 2;
$num2 = "ola k ase";

function intercambia(&$a,&$b) 
{
    $mrd = $a;
    $a = $b;
    $b = $mrd;
}

echo ($num1." y ".$num2."<br>");
intercambia($num1,$num2);
echo ($num1." y ".$num2);
?>