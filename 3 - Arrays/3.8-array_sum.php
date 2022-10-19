<?php
// Con el siguiente array de productos, crea una lista de la compra 
// en la que puedas seleccionar la cantidad de productos que quieres 
// adquirir y te muestre el precio total por producto y el total de 
// la factura:

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$productos = [
    "naranja" => 1.2,
    "manzana" => 1.5,
    "pera" => 1.8,
    "platano" => 0.8,
    "kiwi" => 0.75,
    "macarrones" => 0.5,
    "arroz" => 0.75,
    "salchichas" => 1,
    "patatas_fritas" => 3,
    "paninis" => 1.5,
    "leche_6_uds" => 5,
    "pizza_jamon_serrano" => 2.59,
    "helado_chocolate" => 2.99
];

function generarLista($prd) {

    foreach($prd as $llave => $producto) {
        echo("
        <tr>
            <td>$llave</td>
            <td>$producto</td>
            <td><input type='number' value=0 name='arrCants[]'></td>
        </tr>
        ");
    }
}

function generarFactura($productos) {
    if(isset($_GET["arrCants"])){

        $cantidades = $_GET["arrCants"];
    
        $precioPorProducto = array_map(function($x, $y) { return $x * $y; },
        $cantidades, $productos);
    
        $precioFinal = 0;
    
            $precioFinal = array_sum($precioPorProducto);
            $cont = 0;
        foreach($productos as $llave => $producto) {
            
            echo ($llave . " " . $cantidades[$cont] . "uds " . $precioPorProducto[$cont] . "€<br>");
            $cont++;
    
        }
        echo ("PRECIO FINAL: ".$precioFinal);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="14.array_sum.php" method="GET">
    <table>
    <tr>
        <td>Producto</td>
        <td>Precio</td>
        <td>Cantidad</td>
    </tr>
    <?php
    generarLista($productos);
    ?>
    </table>
    <button type="submit">Comprar</button>
    </form>
    <?php
    generarFactura($productos);
    ?>
</body>
</html>