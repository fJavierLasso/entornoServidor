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

class PDF extends FPDF {
function Header()
{
    global $title;

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculamos ancho y posición del título.
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    // Colores de los bordes, fondo y texto
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    // Ancho del borde (1 mm)
    $this->SetLineWidth(1);
    // Título
    $this->Cell($w,9,$title,1,1,'C',true);
    // Salto de línea
    $this->Ln(10);
}

function Footer()
{
    // Posición a 1,5 cm del final
    $this->SetY(-15);
    // Arial itálica 8
    $this->SetFont('Arial','I',8);
    // Color del texto en gris
    $this->SetTextColor(128);
    // Número de página
    $this->Cell(0,10,'Página '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Color de fondo
    $this->SetFillColor(200,220,255);
    // Título
    $this->Cell(0,6,"Capítulo $num : $label",0,1,'L',true);
    // Salto de línea
    $this->Ln(4);
}

function ChapterBody($file)
{
    // Leemos el fichero
    $txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Times','',12);
    // Imprimimos el texto justificado
    $this->MultiCell(0,5,$txt);
    // Salto de línea
    $this->Ln();
    // Cita en itálica
    $this->SetFont('','I');
    $this->Cell(0,5,'(fin del extracto)');
}

function PrintChapter($num, $title, $file)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody($file);
}
}

$imprimirPDF = true;

for($i=0;$i<count($valores);$i++){

    if($valores[$i]=="") {
        $imprimirPDF = false;
    }
}

if ($imprimirPDF == true){
    $pdf = new PDF();
    $title = 'Carta de recomendacion';
    $pdf->SetTitle($title);
    $pdf->SetAuthor('Javier Lasso');
    $pdf->PrintChapter(1,'','recomendacion.txt');
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