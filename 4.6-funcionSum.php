<?php
function sumarNums($inicio, $fin)
{
    $final = 0;
    for ($i = $inicio + 1; $i < $fin; $i++):
        $final += $i;
    endfor;
    echo  "<li class='list-group-item'>" . $final . " (" . $inicio . " y " . $fin . ")</li>";
}

function randomConSentido()
{
    $num1 = rand(1, 19);
    do {
        $num2 = rand(2, 20);
    } while ($num2 < $num1);
    return [$num1, $num2];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <ul class="list-group p-5 w-25">
        <?php
        for ($i = 0; $i < 11; $i++) {
            sumarNums(...randomConSentido());
        }
        ?>
    </ul>

</body>

</html>