<?php
    require "../bdcon.php";
    //echo "<h2>Bbbdd con PHP</h2>";
    //print_r(PDO::getAvailableDrivers());
    try {
        $dbh = new PDO(DSN, USERNAME, PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM city";
        echo "<h3>Conexion satisfactoria</h3>";
        //hay dos maneras de realizar las consultas: 
        //Forma 1: QUERY
        /*
        $regsters = $dbh->query($sql);
        foreach($regsters as $row){
            echo "id: " . $row["ID"];
            echo " Nombre: " . $row["Name"];
            echo " Distrito: " . $row["District"];
            echo " Poblacion: " . $row["Population"];
            echo "<br>";
        }*/
        //Forma 2: PREPARE + EXECUTE
        $stmnt = $dbh->prepare($sql);
        $stmnt->execute();
            //recoger los enunciados;
            //Opcion A: fetchall como array asociativo
            /*$regsters = $stmnt->fetchAll(PDO::FETCH_ASSOC);
            foreach($regsters as $row){
                echo "id: " . $row["ID"];
                echo " Nombre: " . $row["Name"];
                echo " Distrito: " . $row["District"];
                echo " Poblacion: " . $row["Population"];
                echo "<br>";
            }*/
            //Opcion B: fetchAll como un objeto
            $regsters = $stmnt->fetchAll(PDO::FETCH_OBJ);
            foreach($regsters as $row){
                echo "id: " . $row->ID;
                echo " Nombre: " . $row->Name;
                echo " Distrito: " . $row->District;
                echo " Poblacion: " . $row->Population;
                echo "<br>";
            }
    } catch (Exception $ex) {
        echo "<br>Fallo en la conexion: " . $ex->getMessage();
        //throw $th;
    }
    finally{
        $dbh = null;
        echo "<br>Conexion cerrada";
    }
?>