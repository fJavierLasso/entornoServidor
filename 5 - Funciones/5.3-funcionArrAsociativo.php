<?php
function analizadorTipo(...$params) {
    $arrayChula = [];
    foreach ($params as $par):
        array_key_exists(gettype($par),$arrayChula) ? $arrayChula[gettype($par)]++ : $arrayChula[gettype($par)] = 1;
    endforeach;
    print_r($arrayChula);
};
analizadorTipo("a",1,'a',[1,2,3],2,3,4,3,3,4);
?>
