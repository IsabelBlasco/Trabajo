<?php
    namespace Core;

    class App {
        function __construct(){
            isset($_GET["url"]) ? $url = $_GET["url"] : $url = "cervezas";
            $arguments = explode('/', trim($url,'/'));

            $controllerName = array_shift($arguments);                                         
            $controllerName = ucwords($controllerName) . "Controller";
            count($arguments) ? $method = array_shift($arguments) : $method = "index";
            
            //$file = "../controller/$controllerName" . ".php";
            $file = "../controller/CervezasController.php";
            
            echo "Comprobamos archivo" . realpath($file);
            
            if(file_exists($file)){
                require "$file"; 
            }
            else{
                http_response_code(404);
                echo "Recurso no encontrado 2";
                die();
            }
            
            $controllerName = "\\App\\Controller\\" . $controllerName;
            $controllerObject = new $controllerName;
            if(method_exists($controllerObject, $method)){
                $controllerObject -> $method($arguments);
            }
            else{
                http_response_code(404);
                echo "Funcion no encontrada";
                die();
            }
        }
    }