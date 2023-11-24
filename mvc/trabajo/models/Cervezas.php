<?php 
namespace Trabajo\Models;
use PDO;
require "../core/Model.php";
use Core\Model;

class Cervezas extends Model{

    public static function all(){
        $dbh =  Cervezas::db();
        $sql = "SELECT * FROM Cervezas";
        $statement = $dbh->query($sql);
        $statement->setFetchMode(PDO::FETCH_CLASS, Cervezas::class);
        $cervezas = $statement->fetchAll(PDO::FETCH_CLASS);
        return $cervezas;
    }
    
    public function insert(){
        $dbh = self::db();
        $sql = "INSERT INTO Cervezas (Nombre, Tipo, Graduacion, Pais, Precio, Ruta) 
        VALUES (:nombre, :tipo, :graduacion, :pais, :precio, :ruta)";
        $stmnt = $dbh->prepare($sql);
        $stmnt->bindParam(':nombre', $nombre);
        $stmnt->bindParam(':tipo', $tipo);
        $stmnt->bindParam(':graduacion', $graduacion);
        $stmnt->bindParam(':pais', $pais);
        $stmnt->bindParam(':precio', $precio);
        $stmnt->bindParam(':ruta', $ruta);
        return $stmnt->execute();
    }

    public static function find($id){
        $dbh = self::db();
        $sql = "SELECT * FROM Cervezas WHERE id = :id";
        $statement = $dbh->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, Cervezas::class);
        $cervezas = $statement->fetch(PDO::FETCH_CLASS);
        return $cervezas;
    }

    public function save(){
        $dbh = self::db();
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $graduacion = $_POST["graducion"];
        $pais = $_POST["pais"];
        $precio = $_POST["precio"];
        $ruta = $_POST["ruta"];
        $sql = "UPDATE Cervezas SET Nombre = '$nombre', Tipo = '$tipo', Graduacion = '$graduacion', 
        Pais = '$pais', Precio = '$precio', Ruta = '$ruta' WHERE ID = $id";
        $stmnt= $dbh->prepare($sql);
        return $stmnt->execute(); 
    }
    public function delete(){
        $db = Cervezas::db();
        $stmt = $db->prepare('DELETE FROM Cervezas WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
    
?>