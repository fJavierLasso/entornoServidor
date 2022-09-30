<?php
 
$arrayReemplazo = [1=>20, 3=>7, 4=>13];
 
$arrays = [
  $array1 = [1,2,13,4,15,6,7,18,9],
  $array2 = [1,12,13,14,5,6,7,18,19],
  $arrayFusionada = array_replace(array_intersect($array1,$array2), $arrayReemplazo)
];
 
$busqueda = array_search(13, $arrayFusionada); //devolvería el 4 (el índice)
 
//Función para imprimir arrays
function imprimirArray($arr){
 for ($i=0;$i<count($arr);$i++) {
    for ($j=0;$j<count($arr[$i]);$j++){
       echo "  " . $arr[$i][$j] ;
    }
    echo "<br>";
 }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUM</title>
</head>
<body>
<?php
imprimirArray($arrays);
echo "¿En qué índice está el 13? - En el índice " . $busqueda;
?>
</body>
</html>
 
 

