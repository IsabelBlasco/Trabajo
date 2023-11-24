<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de Cerveza</title>
    </head>
    <body>
    <h2>Agregar una cerveza</h2>
        <form name = "flogin" action = "Cerveza/store" method="post"> 
            <div>
                <label for="nombre">Introducir Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <br><br>
                <label for="tipo">Introduce Tipo</label>
                <select id="tipo" name="tipo">
                    <?php
                    $tiposDeCerveza = array("tostada", "rubia", "deTrigo", "negra");
                    $tipoCervezaSeleccionada = "rubia";  // viene de base de datos
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
                <input type="number" name="graducion" id="graducion" min= "0" max = "100" pattern="\d+">
                <br><br>
                <label for="pais">Introduce Pais</label>
                <input type="text" name="pais" id="pais">
                <br><br>
                <label for="precio">Introduce Precio</label>
                <input type="number" name="precio" id="precio">
                <br><br>
                <label for="ruta">Introduce Ruta de la imagen</label>
                <input type="text" name="ruta" id="ruta">
                <br><br>
                <label for="fichero">Introduce Fichero</label>
                <input type="text" name="fichero" id="fichero">
                <br><br>
                <input type="submit" name="ienviar" value="Enviar">
            </div>
        </form>
    </body>
</html>