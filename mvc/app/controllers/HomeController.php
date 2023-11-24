<?php
    namespace App\Controllers;

    class HomeController{
        function __construct(){
            echo "<br>Construyendo HOME controller...";
        }
        function index(){
            require "../views/home/index.php";
        }
        function show(){
            echo "<br>En el SHOW de HOME";
        }
    }
?>