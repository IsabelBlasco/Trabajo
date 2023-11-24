<?php
    $error = null;
    if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){  
        if(isset($_POST["iID"]) && !empty($_POST["iID"])){
            $ID = $_POST["iID"];
        }
        if(!empty($ID)){
            require "../trabajo/bdcon.php";

            try {
                $dbh = new PDO(DSN, USERNAME, PASSWORD);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM Cervezas WHERE ID = $ID";
                $stmnt = $dbh->prepare($sql);
                $stmnt->execute();
                $regsters = $stmnt->fetchAll(PDO::FETCH_OBJ);
                if (count($regsters) > 0) {
                    foreach ($regsters as $row) {
                        echo "id: " . $row->ID;
                        echo " Nombre: " . $row->Nombre;
                        echo " Tipo: " . $row->Tipo;
                        echo " Graduacion alcholica: " . $row->Graduacion;
                        echo " Pais: " . $row->Pais;
                        echo " Precio: " . $row->Precio;
                        
                        echo "<br>";
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
