<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Galeria</title>
    </head>
    <body>
        <h1>Galeria de imagenes</h1>

        <?php
        foreach($cervezas as $cerveza){
            echo $cerveza->Nombre;
            echo "<br>";
        }
        ?>
    </body>
</html>