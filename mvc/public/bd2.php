<?php
    require "../bdcon2.php";
    try {
        $dbh = new PDO(DSN, USERNAME, PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM clients";
        $sql2 = "INSERT INTO clients VALUES(null, 'Luis Fernandez', 'C Dorada', 41, 000000000)";

        echo "<h3>Conexion satisfactoria</h3>";
        $stmnt = $dbh->prepare($sql);
        $stmnt->execute();
            $registers = $stmnt->fetchAll(PDO::FETCH_OBJ);
            foreach($registers as $row){
                echo "id: " . $row->ID;
                echo " Nombre: " . $row->Name;
                echo " Direccion: " . $row->Adress;
                echo " Edad: " . $row->Age;
                echo " Telefono: " . $row->Telephone;
                echo "<br>";
            }
            $num_filas = count($registers);
            echo "Número de filas: " . $num_filas;
            //echo "Numero filas: "  . $registers->rowCount();
            echo "Ultimo id: " . $dbh->lastInsertId();
    } catch (Exception $ex) {
        echo "<br>Fallo en la conexion: " . $ex->getMessage();
    }
    finally{
        $dbh = null;
        echo "<br>Conexion cerrada";
    }
?>
