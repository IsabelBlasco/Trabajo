<?php 
namespace App\Models;
use PDO;
require "../core/Model.php";
use Core\Model;

class User extends Model{

    public static function all(){
        $dbh =  User::db();
        $sql = "SELECT * FROM users";
        
        $statement = $dbh->query($sql);
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $statement->fetchAll(PDO::FETCH_CLASS);
        return $user;
    }
    
    public static function find($id){
        $dbh = self::db();
        $sql = "SELECT * FROM users WHERE id = :id";
        $statement = $dbh->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $statement->fetch(PDO::FETCH_CLASS);
        return $user;
    }

    public function insert(){
        $dbh = self::db();
        $sql = "INSERT INTO users(name, surname, birthdate, email) 
        VALUES(:nombre, :apellido, :fecha, :correo)";
        $statement = $dbh->prepare($sql);
        $statement->bindValue(":nombre",$this->name);
        $statement->bindValue(":apellido",$this->surname);
        $statement->bindValue(":fecha",$this->birthdate);
        $statement->bindValue(":correo",$this->email);
        return $statement->execute();
    }
    public function save(){
        $dbh = self::db();
        $sql = 'UPDATE users SET name = :nombre, surname = :apellido, 
        birthdate = :fecha, email = :correo WHERE id = :id';
        $statement = $dbh->prepare($sql);
        $statement->bindValue(":id",$this->id);
        $statement->bindValue(":nombre",$this->name);
        $statement->bindValue(":apellido",$this->surname);
        $statement->bindValue(":fecha",$this->birthdate);
        $statement->bindValue(":correo",$this->email);
        return $statement->execute(); 
    }
    public function delete(){
        $db = User::db();
        $stmt = $db->prepare('DELETE FROM users WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
    
?>