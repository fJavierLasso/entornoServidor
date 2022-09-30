<?php 
     function directory() {
            $dir = './ejercicios';
            $files = scandir($dir);

            echo "<ul>";
                foreach($files as $file) {
                    if (preg_match("/.php\b/",$file)){
                        echo "<a href=".$dir."/".$file."><li>".$file."</li></a>";
                    }
                }
            echo "<ul>";
        }
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Inicio</title>
     <link rel="stylesheet" href="indexStyles.css">
 </head>
 <body>  
         <header>
             <h2>Ejercicios Javier Lasso</h2>
         </header>
         <main>
             <div class="list">
                 <?php 
                     directory();
                 ?>
             </div>
         </main>
 </body>
 </html>