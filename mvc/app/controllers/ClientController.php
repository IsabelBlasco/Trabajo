<?php
    namespace App\Controllers;
    require "../app/models/User.php";
    use App\Models\User;
    class ClientController{
        function __construct(){
            echo "<br>Construyendo CLIENT controller...";
        }
        function index(){
           
           $users = User::all();
           require "../views/client/index.php";
        }
        function show(){
            echo "<br>En el SHOW de CLIENT";
        }
    }
?>