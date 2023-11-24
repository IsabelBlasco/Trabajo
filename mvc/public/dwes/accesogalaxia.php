<?php
    namespace Dwes;

    require "galaxia.php";
    require "galaxiaenana/galaxiaenana.php";
    
    echo "Namespace ATUAL:" . __NAMESPACE__;

    echo "<h2>Acceso sin cualificar</h2>"; //Clases del mismo paquete
    observar("Via lactea");
    echo "El radio es " . RADIO;
    $gl = new galaxia();
    galaxia::muerte();

    echo "<h2>Acceso Cualificado</h2>"; //absoluto desde mi ubicacion

    Galaxiaenana\observar("Los 3 Pilares");
    echo "El radio es " . Galaxiaenana\RADIO;
    $gl = new Galaxiaenana\galaxia();
    Galaxiaenana\galaxia::muerte();

    echo "<h2>Acceso Totalmente Cualificado</h2>"; //absoluto desde mi ubicacion

    \Dwes\Galaxiaenana\observar("NGC 5709");
    echo "El radio es " . \Dwes\Galaxiaenana\RADIO;
    $gl = new \Dwes\Galaxiaenana\galaxia();
    \Dwes\Galaxiaenana\galaxia::muerte();

    //Importar la clase: comando use
    echo "<h2>Importar con use</h2>";
    use function \Dwes\Galaxiaenana\observar;
    use const \Dwes\Galaxiaenana\RADIO;
    observar("Otra galaxia");
    echo "El radio es " . RADIO;

    echo "<h2>Apodar/alias namespace</h2>";
    use function \Dwes\Galaxiaenana\observar as mirar;

    echo mirar("Cometa haley");

    echo "<h2>Namespaces Glovales</h2>";

    echo "Vida de la galaxia".time() . "<br>";
    echo "Hora actual:" .\time();
?>


