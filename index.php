<?php 
     function directory() {
            $dir = './ejercicios';
            $files = scandir($dir);
            sort($files,SORT_NUMERIC);
            echo "<ul class='list-group'>";
                foreach($files as $file) {
                    if (preg_match("/.php\b/",$file)){
                        echo "<a href=".$dir."/".$file."><li class='list-group-item'>".$file."</li></a>";
                    }
                }
            echo "<ul>";
        }
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
    <!-- Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
     crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Meta -->
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