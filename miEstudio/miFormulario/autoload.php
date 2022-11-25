<?php
//autoload.php
// echo "------------------autoload.php------------------<br>";
spl_autoload_register(function ($class) {

    $classPath = realpath("../");
    $file = str_replace('\\', '/', $class);
    $include = "$classPath/${file}.php";
    // echo $include . "<br>";
    require($include);
});


?>