<?php
    $error = null;
    if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){  
        
        require "../trabajo/bdcon.php";
        try {
            $dbh = new PDO(DSN, USERNAME, PASSWORD);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
                $sql = "INSERT INTO Cervezas (Nombre, Tipo, Graduacion, Pais, Precio, Ruta) VALUES (:nombre, :tipo, :graduacion, :pais, :precio, :ruta)";
                $stmnt = $dbh->prepare($sql);
                $stmnt->bindParam(':nombre', $nombre);
                $stmnt->bindParam(':tipo', $tipo);
                $stmnt->bindParam(':graduacion', $graduacion);
                $stmnt->bindParam(':pais', $pais);
                $stmnt->bindParam(':precio', $precio);
                $stmnt->bindParam(':ruta', $ruta);
                $stmnt->execute();
                echo "Se ha añadido el registro de la base de datos<br><br>";
            }
        
        } catch (Exception $ex) {
            echo "<br>Fallo en la conexión: " . $ex->getMessage();
        } finally {
            $dbh = null;
            echo "<br>Conexión cerrada";
        }
    }
        $error = true;
    
?>