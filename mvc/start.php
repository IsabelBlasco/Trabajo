<?php
require "core/App.php";
$app = new Core\App(); //crea el enrutador




    //require "core/Model.php";
    //$app = new Core\Model();
    //Core\Model::db();
    
    
    //require "app/models/User.php";
    //use App\Models\User;
   
    //$user = new User();
    //$user->all();
    
    
    /*require_once "Controler.php";
    $app = new Controler();
    //url:
    //http://mvc.local?method=[index|show]&id=[id_usuario]
    if(isset($_GET['method'])) {
        $method = $_GET['method'];
    } else {
        $method = 'index';
    }
    try {
        if(method_exists($app, $method)) {
            $app->$method();
        } else {
            throw new Exception("No encontrado");
        }
    } catch (Exception $ex) {
        http_response_code(404);
        echo "No se ha encontrado el metodo solicitado";
    }
    require "User.php";
    echo "<h3>Prueva recuperacion usuario</h3>";
    var_dump(User::find(3));*/
?>


    