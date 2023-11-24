<?php
    namespace Core;
    require "../config/db.php";
    use const DSN;
    use const USUARIO;
    use const PASSWORD;
    use PDO;
    use PDOException;
    #[\AllowDynamicProperties]
    class Model{
        static function db(){
            try{
                $dbh = new PDO(DSN, USUARIO, PASSWORD);
                $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //echo "Coxexion correcta";
                return $dbh;
            }
            catch(PDOException $ex){
                echo "Fallo en la conexion: " . $ex->getMessage();
            }
            
        }
    }
?>