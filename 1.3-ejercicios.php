<html>


<head>
    <title>Ejercicios JL</title>
    <link rel="stylesheet" href="./1.3-stylesEjercicios.css">
    <meta http-equiv="refresh" content="30">
</head>
<body>

<div class="ejercicio">
<!-- 1. Escriba "Hola mundo!" de forma dinámica con la instrucción echo -->
<?php
echo "hola mundo";



// 2. Escriba "Hola mundo!" usando una variable para almacenar la cadena
$saludo = "hola mundo";
?>
</div>
<div class="ejercicio">
<?=$saludo?>
</div>

<!-- 
3. Escriba después de "Hola mundo!" "Esta página ha sido programada por " 
4. Modifica la página para que escriba la parte "Esta página..." en cursiva y "" en 
cursiva y negrita. NOTA: Puedes utilizar el operador "." para concatenar la salida
-->
<div class="ejercicio"> 
<!-- La manera seria de hacerlo. El php se coloca en la cabecera, no se mezcla con el html si es posible. -->
<?php
$nombre = "Javier Lasso";
?>
<p>Hola mundo! <i>Esta página</i> ha sido programada por <i><strong><?=$nombre?></strong></i> </p>

</div>

<div class="ejercicio">
    <i><?php echo "Esta página" ?></i> ha sido programada por 
</div>

<!-- 
5. Utilice 3 variables: $nombre, $r, $pi. Al visitar la página establecerá el valor 
de las variables, escribirá un mensaje de bienvenida y escribirá el área y el perímetro 
de la circunferencia. NOTA: Utiliza un fichero css para dar estilo a cada parte. -->
<div class="ejercicio">
<?php
$nombre = "Pepito";
$r = 50;
$pi = 3.14;
echo pow($r,2)*M_PI;
?>
</div>

<div class="ejercicio">
<!-- 6. Declare 2 variables, después produzca la suma, resta, multiplicación, división, resto 
y muestre la salida de aplicar el operador ++ y -- NOTA: ¿Qué variables hemos definido? 
print_r(get_defined_vars()); http://php.net/manual/es/function.get-defined-vars.php http://php.net/manual/es/function.print-r.php -->
<?php
$variable1 = 56;
$variable2 = 45;
?>
<p>Suma: <?=$variable1+$variable2?></p>
<p>Resta: <?=$variable1-$variable2?></p>
<p>Multiplicación: <?=$variable1*$variable2?></p>
<p>División: <?=$variable1/$variable2?></p>
<p>Resto:<?=$variable1%$variable2?></p>
<p>Variables definidas: <?php print_r(get_defined_vars()); ?></p>
</div>

<div class="ejercicio">
<!--7-. Imprima una pirámide de asteriscos, tamaño definido por una variable $n -->
<?php
$piramideSize = 10;

function imprimirPiramide($size) {
    for($i=0;$i<$size;$i++){
        for($z=0;$z<$i;$z++){
            echo "*";
        }
        echo "<br>";
    }
}

imprimirPiramide($piramideSize)
?>
</div>

<div class="ejercicio ejercicioColores">
<!-- 8. Imprima una pirámide de colores NOTA: Utiliza css para definir elementos que tengan ancho fijo 
y un asterisco en el centro. NOTA2: Utiliza la siguiente función php para pintar colores aleatorios, 
debes sobrescribir la propiedad background-color del elemento html a través de la etiqueta style. -->

<?php for($i=0;$i<$piramideSize;$i++){ ?>
    <span style="
        color: rgb(<?php echo(rand(1,100) . "," . rand(1,100) . "," . rand(1,100)) ?>);
        background-color: rgb(<?php echo(rand(1,300) . "," . rand(1,300) . "," . rand(1,300)) ?>);
        font-size: 80px;
        ">
        <?php
          for($z=0;$z<$i;$z++){
            echo "
            *
            ";
        }
        echo "<br>";
    }
        ?>
    </span>
  

</div>

</body>
</html>