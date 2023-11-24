<?php
    namespace Dwes\Galaxiaenana;

    const RADIO = 35; //millones de kilometros
    function observar($nombre){
        echo "<br>Mirando a: $nombre </br>";
    }
    class galaxia{
        function __construct(){
            $this->nacer();
        }
        function nacer(){
            echo "<br> Nueva galaxia en camino.";
        }
        static function muerte(){
            echo "<br> Galaxia destruyedose en 3,2,1...";
        }
    }
?>