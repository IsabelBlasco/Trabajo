<?php
    require "../bdcon.php";

    echo "<h2>BBDD Sentencia</h2>";

    /* 
    1- Preparar sentencia 
        -named placeholder : :nomvariable
        -question mark placeholder : ?
    2- Vincular valores a las variables
        -bindParam
        -bindValue
    3- Ejercutar la sentencia -> execute
    
    */

    try {
        $dbh = new PDO(DSN2,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //FORMA A: NAME PLACEHOLDER
        $sql = "INSERT INTO " .TABLACLIENTS."(ID,Name,Adress,Age,Telephone) 
        VALUES(:id,:nombre,:direccion,:edad,:telefono)";
        //FORMA B: NAMED PLACEHOLDER
        $sql2 = "INSERT INTO " .TABLACLIENTS."(ID,Name,Adress,Age,Telephone) 
        VALUES(?,?,?,?,?)";
        $statement = $dbh->prepare($sql2);
        //Opcion 1: bindParam -> varible es una referencia.
        $id = null;
        $nombre = "Casa Garcia";
        $direccion = "C/ Marron";
        $edad = 41;
        $telefono = 998877665;
        /*
        $statement->bindParam(':id',$id);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':direccion',$direccion);
        $statement->bindParam(':edad',$edad);
        $statement->bindParam(':telefono',$telefono);*/

        //Opcion 2: bindValue ->asocio los valores.
        /*$statement->bindValue(':id',$id);
        $statement->bindValue(':nombre',$nombre);
        $statement->bindValue(':direccion',$direccion);
        $statement->bindValue(':edad',$edad);
        $statement->bindValue(':telefono',$telefono);*/

        //con QUESTION MARK PLACEHOLDER
        /*$statement->bindParam(1,$id);
        $statement->bindParam(2,$nombre);
        $statement->bindParam(3,$direccion);
        $statement->bindParam(4,$edad);
        $statement->bindParam(5,$telefono);*/

        $statement->bindValue(1,$id);
        $statement->bindValue(2,$nombre);
        $statement->bindValue(3,$direccion);
        $statement->bindValue(4,$edad);
        $statement->bindValue(5,$telefono);
        //Ejecutar la sentencia
        $statement->execute();
        //$sql = "INSERT INTO TABLACLIENTES VALUES(null, 'Luis Fernandez', 'C Dorada', 41, 000000000)";
    }
    catch (Exception $ex) {
        echo "<br>Fallo en la conexion: " . $ex->getMessage();
    }
    finally{
        $dbh = null;
        echo "<br>Conexion cerrada";
    }
?>