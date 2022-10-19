<?php
require('./fpdf184/fpdf.php');

$nombre = "";
$empresa = "";
$representante = "";
$fecha = "";
$valoresIterable=array('nombre','empresa','representante','fecha');
$valores=array($nombre,$empresa,$representante,$fecha);
$imprimirPDF = true;

//Compruebo que todo esté escrito, guardo valores
for($i=0;$i<count($valoresIterable);$i++){

    if(isset($_GET[$valoresIterable[$i]]) && $_GET[$valoresIterable[$i]]!=""){
        $valores[$i] = $_GET[$valoresIterable[$i]];
    } else {
        $imprimirPDF = false;
    }
}

//arreglo orden de la fecha
$nuevaFecha = substr($valores[3],8,2) . '/' . substr($valores[3],5,2) . '/' . substr($valores[3],0,4);

//imprimo PDF

if ($imprimirPDF == true){
    $pdf = new FPDF();
    $pdf->setMargins(15,15,15);
    $pdf->addPage();
    $pdf->setFont('Times','',28);
    //titulo
    $pdf->Cell(0,20,utf8_decode('CARTA DE RECOMENDACIÓN'),'B',1,'C');
    $pdf->SetFont('Times','',12);
    $pdf->ln(10);
    //fecha
    $pdf->Cell(0,5,'Madrid, a ' . $nuevaFecha,0,1,'R');
    $pdf->ln(10);
    $pdf->MultiCell(0,5,utf8_decode('
A quien le pueda interesar:
    
    
Reciba un cordial saludo. A través de estas líneas deseo hacer de su conocimiento que '.$valores[0].', quien laboró en mi organización, '.$valores[1].', es un trabajador con una conducta intachable. Ha demostrado ser una excelente persona con rendimiento y compromiso impecables en cualquier proyecto en el que se haya encontrado trabajando.

Como representante de '.$valores[1].', yo, '.$valores[2].', acredito la valía del citado trabajador, '.$valores[0].', y recomiendo la incorporación a su empresa. Quedo a su disposición para cualquier información adicional que pudieran requerir.

Atentamente,


'.$valores[2]

    ));
    //imprimir
    $pdf->Output();

} 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="2.2-stylesCarta.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Carta de Recomendación</h1>
    
   <div class="todo">
     <form action="2.2-fpdf_carta.php" method="get">
        <div class="formulario">
            <div class="sector">
                <div class="botones">
                    <p>Nombre:</p>
                    <input type="text" name="nombre" value="<?=$valores[0]?>">
                </div>
                <div class="botones">
                    <p>Empresa:</p>
                    <input type="text" name="empresa" value="<?=$valores[1]?>">
                </div>
            </div>
            <div class="sector">
                <div class="botones">
                    <p>Representante:</p>
                    <input type="text" name="representante" value="<?=$valores[2]?>">
                </div>
                <div class="botones">
                    <p>Fecha:</p>
                    <input type="date" name="fecha" class="fecha" value="<?=$valores[3]?>">
                </div>
            </div>
        </div>
            <input type="submit" value="Generar PDF" class="generar">
    </form>
   </div>
</body>
</html>