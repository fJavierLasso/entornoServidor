<?php
print_r($_POST);

$temazo ="";
date_default_timezone_set('CET');
$hora = date('H');
$minuto = date('i');
$opcionesMinuto = [0,15,30,45];
$errores = [];


echo $hora . $minuto;

$mayores = array_filter($opcionesMinuto, function($m){
    global $min;
    return $m > $min;
});

if (empty($mayores)) {
    $min = 0;
    $hora++;
} else {
    $min = array_shift($mayores);
}

//Ver si el usuario envía la información

if (isset($_POST['enviar'])) {
    if ($_POST['temazo']) {
        $temazo = $_POST['temazo'];
    } else {
        $errores['temazo'] = 'No puede estar vacío';
    }
}

if (isset($_POST['minuto'])) {
    $minuto = $_POST['minuto'];
} else {
    $errores['minuto'] = 'No puede estar vacío';
}

//Si no hay errores

if (count($errores) == 0) {
    echo "sin errores";
    //prevent xss

    $temazo = htmlspecialchars($temazo);
    //header('Location: 10.2.1-formularioCancion.php?temazo=' . $temazo . '&hora=' . $hora . '&minuto=' . $minuto);
    //die();
}
print_r($errores);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Bootrstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Form Canción</title>

</head>

<body>
<form class="p-5" method="POST">
  <div class="form-group text-center">
    <label for="nombre">Canción</label>
    <input type="text" class="form-control" id="nombre" name="temazo" placeholder="Introduce tu temazo">
<?php
  if (isset($errores['temazo'])) {
    echo "<div class='alert alert-danger mt-1' role='alert'>" . $errores['temazo'] . "</div>";
}
?>
  </div>
  <div class="form-group mt-2 text-center">
    <label for="hora">Hora</label><br>
    <input type="number" max="23" class="form-control-inline" value="<?=$hora?>" name="hora">
    <select name="minuto" id="min">

        <?php
        array_walk(
            $opcionesMinuto,
            function($op,$k,$d){
                $sel=($op==$d)?"selected":"";
                echo "<option value='$op' $sel>$op</option>";
            }, $min
        );
        ?>

    </select>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary mt-2" name="enviar">Enviar</button>
  </div>

</form>
</body>

</html>