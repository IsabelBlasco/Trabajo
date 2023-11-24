<?php
    require_once "User.php";
    class Controler{
        //recupera todos los usuarios
        //Invoca a vista con todos los usuarion
        public function index(){
            $arrusers = User::all();
            require "views/index.php";
        }
        public function show(){
            $id = $_GET["id"];
            $user = User::find($id);
            require "views/show.php";
        }
    }
?>