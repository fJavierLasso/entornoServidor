<?php
$tablaElegida = 5;
$cantidadColumnas = 10;
?>

<html>
    <head>
        <title>Multiplicar</title>
        <style>
        
        body {
            font-family: arial;
        }
        table {
        padding: 5%;
        }

        td,tr {
            font-size: 25px;
            text-align: center;
            padding: 5%;
        }

        td {
            width: 10%;
        }
        
        </style>
        
    </head>
    <body>
        <table>
            <tr>
                <td colspan="2" style="background-color:gray">LA TABLA DEL 5</td>
            </tr>
        
         <?php
            for($i = 0; $i<$cantidadColumnas;$i++) {
         ?>
            <tr style="background-color:#31E1F<?=$i?>">
        	    <td><?php echo "$tablaElegida * $i"?></td>
        	    <td><?php echo $tablaElegida*$i?></td>
            </tr>
         <?php
          }
         ?>
        </table>
       
    </body>
</html>