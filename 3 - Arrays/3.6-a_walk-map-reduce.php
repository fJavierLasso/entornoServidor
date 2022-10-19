<?php

$usuarios = [
	"jorge" => "1234",
	"amparo" => "admin",
	"mary" => "",
];

// Enunciado: Crea una array bidimesional que guarda nombre de usuario y contraseña de usuario en texto claro. 
// array_walk ejecuta una funcion predefinida mostrando nombre de usuario y contraseña
array_walk($usuarios,function($array,$indice){
    echo ('Usuario: '.$indice.'<br>Contraseña: '.$array.'<br><br>');
});

// Enunciado: Utilizando las funciones de contraseñas y la función array_map. Genera un array nuevo con los 
//usuarios y su contraseña en formato hash.

$usuariosEncriptados = array_map(function($array){
return password_hash($array,PASSWORD_DEFAULT).'<br>';
},$usuarios);

print_r($usuariosEncriptados);

// Enunciado: En base al ejercicio anterior cambia la función para que los usuarios sin contraseña tenga la 
// contraseña "tmp2022"

$usuariosEncriptados = array_map(function($array){
    if ($array=""){$array="tmp2022";};
    return password_hash($array,PASSWORD_DEFAULT).'<br>';
    },$usuarios);
    
    print_r($usuariosEncriptados);

    // Enunciado: Haz un filtrado de usuarios sin contraseña, utiliza array_replace para establecer en el array 
    // original $usuariosla contraseña de los usuarios que no tenían.

array_walk($usuarios,function($valor,$indice){
    $valor = ($valor == "") ? $valor = "tmp2022" : $valor;
    echo ('Usuario: '.$indice.'<br>Contraseña: '.$valor.'<br><br>');
})

?>