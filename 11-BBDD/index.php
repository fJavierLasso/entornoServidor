<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="search" id="">
    <input type="submit" value="Buscar">
  </form>
</body>
</html>

<?php

$dsn = 'mysql:host=localhost;dbname=primeraBase';
$user = 'fjavierlasso';
$password = '1234';

try {
  $dbh = new PDO($dsn, $user, $password); //Abro la conexión
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Manejo de errores


  // Utilizar la conexión aquí
  if (isset($_POST['search'])) {
    
    $resultado = $dbh->prepare("SELECT id,nombre,num_trofeos FROM ciclistas WHERE nombre LIKE ?");
    $nom = $_POST['search'];
    $resultado->bindValue(1,"%$nom%");
    $resultado->execute();

  } else {
    $resultado = $dbh->query('SELECT id,nombre,num_trofeos FROM ciclistas');
  }
  $resultado->setFetchMode(PDO::FETCH_ASSOC); //Asigno el modo de fetch a asociativo

  echo '<h1>Ciclistas chulos</h1>';
  foreach ($resultado as $fila) {

    echo '<div class=ciclista>';
    echo "<a href='detalle.php?id=".$fila['id']."'>" . $fila['nombre'] . "</a> ";

    for ($i=0;$i<$fila['num_trofeos'];$i++) {
      echo "<img style='width:20px;' src='trophy.png'>";
    }

    echo " <i>(" . $fila['num_trofeos'] . ")</i><hr>";
    echo '</div>';
  }

  // Ya se ha terminado; se cierra
  $resultado = null;
  $dbh = null;
} catch (PDOException $e) {
  print "¡Error!: " . $e->getMessage() . "\n";
  die();
}

?>

