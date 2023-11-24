<?php
    namespace Dwes;

    const RADIO = 126.88; //millones de kilometros
    function observar($nombre){
        echo "<br>Observando la galaxia: $nombre </br>";
    }
    function time(){
        echo "Me quedan 345678909847 años de vida";
    }
    class galaxia{
        function __construct(){
            $this->nacer();
        }
        function nacer(){
            echo "<br> Hola, soy una nueva galaxia";
        }
        static function muerte(){
            echo "<br> Me estoy muriendo...";
        }

        
    }
?>