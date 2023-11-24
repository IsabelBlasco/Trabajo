<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eliminar una Cerveza</title>
    </head>
    <body>
    <h2>Eliminar una Cerveza por ID</h2>
        
        <form name = "flogin" action = "index.php?method=eliminar" method="post"> 
            <div>
                <label for="ID">Introduce ID</label>
                <input type="text" name="iID" id="ID">
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
                    $sql2 = "DELETE FROM Cervezas WHERE id = $id";
                    $stmnt2 = $dbh->prepare($sql2);
                    $stmnt2->execute();
                    echo "Registro eliminado";
                }
                else{
                    echo "<p style = \"color: red\">No hay ningun registro con ese id</p>";;
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