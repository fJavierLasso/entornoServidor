<?php
require('./fpdf184/fpdf.php');

$nombre = "";
$empresa = "";
$representante = "";
$fecha = "";
$valoresIterable=array('nombre','empresa','representante','fecha');
$valores=array($nombre,$empresa,$representante,$fecha);

for($i=0;$i<count($valoresIterable);$i++){

    if(isset($_GET[$valoresIterable[$i]])){
        $valores[$i] = $_GET[$valoresIterable[$i]];
    }
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'');

// Ver en la página cómo formatear el pdf: http://www.fpdf.org

$imprimirPDF = true;

for($i=0;$i<count($valores);$i++){

    if($valores[$i]="") {
        $imprimirPDF = false;
    }
}

if ($imprimirPDF == true){
    $pdf->Output();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="5.cartaPresentacion.php" method="get">
        <p>Nombre:</p>
        <input type="text" name="nombre" value="<?=$valores[0]?>">
        <p>Empresa:</p>
        <input type="text" name="empresa" value="<?=$valores[1]?>">
        <p>Representante:</p>
        <input type="text" name="representante" value="<?=$valores[2]?>">
        <p>Fecha:</p>
        <input type="date" name="fecha" value="<?=$valores[3]?>">
        <br>
        <input type="submit" value="Generar PDF">
    </form>
</body>
</html>