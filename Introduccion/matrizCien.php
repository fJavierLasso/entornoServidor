<?php
$filas = 10;
$columnas = 10;
$numero = 1;

function esPrimo($numero)
{
    $primo = true;
    if ($numero == 0 || $numero == 1) {
        $primo = true;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = false;
            }
        }
    }
    if ($primo==true) echo "class='esPrimo'";
}  
?>
<html>
<head>
    <title>Mi maravillosa Matriz</title>
    <style>
        .esPrimo {
            color: red;
        }
        body {
            font-family: arial;
        }
        td {
            font-weight: bold;
            font-size: 40px;
            text-align: center;
            width:<?php echo $columnas?>vw;
            height:<?php echo $filas*1.6 ?>vh;
        }

        .titulo {
            width:100vw;

        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td colspan="<?=$columnas?>" class="titulo">La matriz más guay del mundo</td>
        </tr>
        <?php for($i=0;$i<$filas;$i++) { ?>
            <tr>
                <?php for($j=0;$j<$columnas;$j++) { ?>
                    <td style="background-color:rgba(<?php echo $numero*2; ?>, <?php echo $numero*4; ?>, <?php echo $numero*6; ?>, 0.7);" <?php esPrimo($numero) ?>>
                        <?=$numero?>
                    </td>
                <?php $numero++;
                }
                ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>