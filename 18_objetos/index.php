<?php

    require_once('clases/Persona.php');

    // $persona1 = new Persona; // sin constructor
    $persona1 = new Persona("ChriStopHer AleXanDer", "Acajabon Gudiel", 28);

    // $persona1->setNombre("ChriStopHer AleXanDer"); // asignando y convirtiendo a minusculas
    // $persona1->apellido = "Acajabon Gudiel";
    // $persona1->edad = 28;

    // $persona2 = new Persona; // sin constructor
    $persona2 = new Persona("Edna Liseth", "Gudiel Ortiz", 50);

    // $persona2->setNombre("Edna Liseth");
    // $persona2->apellido = "Gudiel Ortiz";
    // $persona2->edad = 50;

    var_dump($persona1);
    echo "<br>";
    var_dump($persona2);
    echo "<br>";

    echo "El nombre de persona1 es: " . $persona1->getNombre();
    echo "<br>";
    echo "El nombre de persona2 es: " . $persona2->getNombre();

?>