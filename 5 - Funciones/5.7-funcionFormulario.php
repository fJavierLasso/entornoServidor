<!-- Crea una función que reciba un array con información de un usuario y escriba un formulario relleno. 
En este caso solo utiliza campos de texto o enteros.

NOTA: Utiliza las funciones array_map o array_walk

Ejemplo
$yo = [
  "nombre" => "Jorge Dueñas Lerín",
  "dirección" => "Calle falsa número 1234"
  "teléfono" => "91 123 45 67",
  "población" => "Madrid",
  "edad" => 23,
]
format_form_user($yo);
Imprime:

<form id="datos personales" action="post">
  <input name="nombre" value="Jorge Dueñas Lerín"></input>
  ... etc.
</form> -->
<?php
$profe = [
    "nombre" => "Jorge Dueñas Lerín",
    "dirección" => "Calle falsa número 1234",
    "teléfono" => "91 123 45 67",
    "población" => "Madrid",
    "edad" => 23
];

function generarFormulario($datos){
    echo "<form>";
    array_walk($datos,function($value,$key){
        echo "<input type='text' name='".$key."' value='".$value."'></input><br>";
    });
}

generarFormulario($profe);
?>