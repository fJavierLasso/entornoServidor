<?php
// Crea una función que reciba un array con distintos tipos de valores de tal forma que:
//     Si son enteros: el primer entero sea elevado al cuadrado, el segundo entero sea elevado al cubo y 
//     así sucesivamente con los números enteros.
//     Si el valor es un double lo convertirá a su valor negativo (si es negativo al positivo)
//     Si es una cadena cambiará las mayúsuclas por minúsculas y viceversa.
//     En caso de no estar entre estos valores lo dejará sin modificar.

function segunTipo($arr){

    $contInt = 2;

    for ($i=0;$i<count($arr);$i++):
        switch (gettype($arr[$i])) {

            case "integer":
                $arr[$i] = pow($arr[$i],$contInt);
                $contInt++;
                break;

            case "double":
                $arr[$i] *=-1;
                break;

            case "string":
                $arrCadena = str_split($arr[$i]);
                foreach ($arrCadena as &$char):
                $char==strtoupper($char)?$char=strtolower($char):$char=strtoupper($char);
                endforeach;
                $arr[$i] = implode("",$arrCadena);
                break;

            default:
                echo "no entró en nada :C";
                break;
        }
    endfor;

    print_r($arr);
}

print_r(segunTipo([2,3,4,1.1,"Abecedario"]));
