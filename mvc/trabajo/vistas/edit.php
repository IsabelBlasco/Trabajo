<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create</title>
    </head>
    <body>
        <h1>Editar cerveza</h1>
        <form name="update" action="/cervezas/update" method="post"> 
            <div>
                <label for="nombre">Introducir Nombre</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $cerveza->Nombre ?>">
                <br><br>
                <label for="tipo">Introduce Tipo</label>
                <select id="tipo" name="tipo">
                    <?php
                    $tiposDeCerveza = array("tostada", "rubia", "deTrigo", "negra");
                    $tipoCervezaSeleccionada = $cerveza->Tipo;
                    foreach ($tiposDeCerveza as $tipo) {
                        echo "<option value=\"$tipo\"";
                        if ($tipo == $tipoCervezaSeleccionada) {
                            echo " selected";
                        }
                        echo ">$tipo</option>";
                    }
                    ?>
                </select>
                
                <br><br>
                <label for="graducion">Introduce Graducion</label>
                <input type="text" name="graducion" id="graducion" value="<?php echo $cerveza->Graduacion ?>">
                <br><br>
                <label for="pais">Introduce Pais</label>
                <input type="text" name="pais" id="pais" value="<?php echo $cerveza->Pais?>">
                <br><br>
                <label for="precio">Introduce Precio</label>
                <input type="text" name="precio" id="precio" value="<?php echo $cerveza->Precio ?>">
                <br><br>
                <label for="ruta">Introduce Ruta de la imagen</label>
                <input type="text" name="ruta" id="ruta" value="<?php echo $cerveza->Ruta ?>">
                <br><br>
                <label for="fichero">Introduce Fichero</label>
                <input type="text" name="fichero" id="fichero">
                <br><br>
                <input type="hidden" name="id" value="<?php echo $cerveza->id?>">
                <input type="submit" name="ienviar" value="Enviar">
            </div>
        </form>
    </body>
</html>