<?php
    $cadenafecha = "12/10/2022";
    $fecha = DateTime::createFromFormat('d/m/Y',$cadenafecha);
    echo "<h1>Objeto fecha</h1>";
    var_dump($fecha);
    $sfecha = $fecha->format('#Y#m#d');
    echo "<br><br> " . $sfecha;
?>