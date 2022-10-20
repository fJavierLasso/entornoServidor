<?php
require '/Users/javierlasso/Documents/DAW2/Entorno Servidor/6 - Clases/6.1-Circulo.php';
$circuloGuay = new Circulo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body class="p-5 text-center">
    <form action="6.1.1-ejercicioCirculo.php">
        <div class="input-group">
            <input class="form-control" type="text" name="radio" id="">
            <div class="input-group-text">
                <?php
                if (isset($_GET['radio']) && is_numeric($_GET['radio'])) :
                    $circuloGuay->setRadio($_GET['radio']);
                    echo ($circuloGuay->getArea());
                endif;
                ?>
            </div>
        </div>
                <input class="btn btn-primary mt-2"type="submit" value="Dale">
    </form>
</body>

</html>