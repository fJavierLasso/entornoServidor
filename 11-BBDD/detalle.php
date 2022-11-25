<?php

$dsn = 'mysql:host=localhost;dbname=primeraBase';
$user = 'fjavierlasso';
$password = '1234';

if (isset($_GET)) {
    try {
        $dbh = new PDO($dsn, $user, $password); //Abro la conexión
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Manejo de errores

        // Utilizar la conexión aquí
        $resultado = $dbh->prepare("SELECT * FROM ciclistas WHERE id = (?)"); //uso parametros para proteger.

        $id = $_GET['id'];
        $resultado->bindParam(1,$id);
        $resultado->execute();

    
        //imprimo lo que quiero
        foreach ($resultado as $fila) {
            echo "<h1>" . $fila['nombre'] . "</h1>";
            echo "<p>" . $fila['num_trofeos'] . " trofeos.</p>";
            echo "<p>Su id es #" . $fila['id'] . ".</p>";
        }

        // Ya se ha terminado; se cierra
        $resultado = null;
        $dbh = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "\n";
        die();
    }
}
