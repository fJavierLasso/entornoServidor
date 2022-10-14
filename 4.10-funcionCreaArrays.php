<?php
//Crea una función que genera un array aleatorio con parámetros variables Por defecto generará 10 valores 
//entre 0 y 10 Puedes especificar el número de valores como primer parámetro, Puedes especificar el valor 
//máximo como segundo parámetro o Puedes especificar número de valores, máximo y mínimo
//aleatorio(); // [n,n,n,n,n,n,n,n,n,n] aleatorio(5) // [n,n,n,n,n] aleatorio(5,50) aleatorio(5,50,-50)

function arrGen($cantVal = 9,$max = 100,$min = 0) {
    $arr = [];
    for ($i=0;$i<=$cantVal;$i++):
        array_push($arr,round(mt_rand($min,$max)));
    endfor;
    print_r($arr);
}

arrGen(3,1000,990);
echo "<br>";
arrGen();

?>