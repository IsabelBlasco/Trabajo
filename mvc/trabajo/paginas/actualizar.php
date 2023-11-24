<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar una Cerveza</title>
    </head>
    <body>
    <h2>Actualizar una Cerveza por ID</h2>
        
        <form name = "flogin" action = "index.php?method=actualizar" method="post"> 
            <div>
                <label for="ID">Introduce ID</label>
                <input type="text" name="iID" id="ID">
                <br><br>
                <label for="nombre">Introduce Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <br><br>
                <label for="tipo">Introduce Tipo</label>
                <input type="text" name="tipo" id="tipo">
                <br><br>
                <label for="graducion">Introduce Graducion</label>
                <input type="text" name="graducion" id="graducion">
                <br><br>
                <label for="pais">Introduce Pais</label>
                <input type="text" name="pais" id="pais">
                <br><br>
                <label for="precio">Introduce Precio</label>
                <input type="text" name="precio" id="precio">
                <br><br>
                <label for="ruta">Introduce Ruta de la imagen</label>
                <input type="text" name="ruta" id="ruta">
                <br><br>
                <input type="submit" name="ienviar" value="Enviar">
            </div>
        </form>
    </body>
</html>

<?php
    $error = null;
    if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){  
        if(isset($_POST["iID"]) && !empty($_POST["iID"])){
            $id = $_POST["iID"];
        }
        if(!empty($id)){
            require "../trabajo/bdcon.php";
            try {
                $dbh = new PDO(DSN, USERNAME, PASSWORD);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
                $sql = "SELECT * FROM Cervezas WHERE ID = $id";
                $stmnt = $dbh->prepare($sql);
                $stmnt->execute();
                $regsters = $stmnt->fetchAll(PDO::FETCH_OBJ);
                if(count($regsters) > 0){
                    $nombre = $_POST["nombre"];
                    $tipo = $_POST["tipo"];
                    $graduacion = $_POST["graducion"];
                    $pais = $_POST["pais"];
                    $precio = $_POST["precio"];
                    $ruta = $_POST["ruta"];
                    if ($tipo !== "Tostada" && $tipo !== "Rubia" && $tipo !== "De trigo" && $tipo !== "Negra") {
                        echo "<p style = \"color: red\">El tipo debe ser Tostada, Rubia, De trigo o Negra. No se pudo realizar la inserción.</p>";
                    } 
                    else if ($graduacion <= 0) {
                        echo "<p style = \"color: red\">La graduación alcohólica debe ser superior a 0. No se pudo realizar la inserción.</p>";
                    } 
                    /*else if($ruta == 1){

                    }*/
                    else {
                        $sql2 = "UPDATE Cervezas SET Nombre = '$nombre', Tipo = '$tipo', Graduacion = '$graduacion', Pais = '$pais', Precio = '$precio', Ruta = '$ruta' WHERE ID = $id";
                        $stmnt2 = $dbh->prepare($sql2);
                        $stmnt2->execute();
                        echo "Se ha actualizado el registro de la base de datos<br><br>";
                    }
                    
                }
                else{
                    echo "<p style = \"color: red\">No hay ningun registro con ese id</p>";
                }
                
            } catch (Exception $ex) {
                echo "<br>Fallo en la conexión: " . $ex->getMessage();
            } finally {
                $dbh = null;
                echo "<br>Conexión cerrada";
            }
        }
        $error = true;
    }
?>