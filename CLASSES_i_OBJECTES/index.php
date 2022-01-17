<?php
    require_once('./Classes.php');
    $coches = new Coches("BMW", "Rojo");
    $coches .= new Coches("Fiat", "Verde");
    $coches .= new Coches("Mercedes", "Gris");

    //$coches->setMarca("BMW");
    //$coches->setColor("Rojo);

    echo $coches
?>