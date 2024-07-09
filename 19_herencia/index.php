<?php

    require_once('clases/Persona.php');

    $peruano = new Peruano;
    $peruano->setApellidos("Acajabon", "Gudiel");
    
    $chileno = new Chileno;
    $chileno->setApellidos("Acajabon", "Gudiel"); // invierte los apellidos por el metodo

    echo "<br>";
    var_dump($peruano);
    echo "<br>";
    var_dump($chileno);

?>