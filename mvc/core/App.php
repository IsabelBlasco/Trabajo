<?php
    /*
        http://mvc.local/user/show
        http://mvc.local/index.php?url=user/show
        La petiion del get:
        http://mvc.local/controlador/metodo/argl/arg
        http://mvc.local/user/show/1

        /user/show/1/ -> user/show/1 (trim) -> [user,show,1] (explode)
        //user -> UserController : (ucwoed)

    */
    namespace Core;

    class App {
        function __construct(){
            isset($_GET["url"]) ? $url = $_GET["url"] : $url = "home";
            $arguments = explode('/', trim($url,'/'));

            //obtener controlador
            $controllerName = array_shift($arguments); //user | product | home...
                                                       //UserController, ProductController
            $controllerName = ucwords($controllerName) . "Controller";

            //Transformacion para el metodo
            count($arguments) ? $method = array_shift($arguments) : $method = "index";
            // Esta linea es igual a la anterior. 
            //count($arguments) > 0 ? $method = array_shift($arguments) : $method = "idex";
            //Aunque no lo ponga la condicion es que si el conteo es mayor a cero da true 
            //y si es igual o menor es false
            /*$method = count($arguments) ? array_shift($arguments) : "idex";
            $edad = rand(1,99);
            echo $edad >= 18 ? "Adulto" : "Menor"; 
            En el anterios si la edad es mayor o igual a 18 marca true y saca Adulto y si es menor
            a 18  marca false y saca menor*/

            //Importar el comtrolador
            $file = "../app/controllers/$controllerName" . ".php";
            if(file_exists($file)){
                require "$file"; //importo controlador
            }
            else{
                http_response_code(404);
                echo "Recurso no encontrado";
                die();
            }
            //crear una instancia del controlador y llamar al metodo
            $controllerName = "\\App\\Controllers\\" . $controllerName;
            $controllerObject = new $controllerName;
            //verificar si existe el metodo de la peticion en la clase/controlador
            if(method_exists($controllerObject, $method)){
                //invocarlo
                $controllerObject -> $method($arguments);
            }
            else{
                http_response_code(404);
                echo "Funcion no encontrada";
                die();
            }
        }
    }