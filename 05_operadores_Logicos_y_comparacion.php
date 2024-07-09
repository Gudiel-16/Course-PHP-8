<?php
    
    // ---------------------- OPERADORES DE COMPARACION

    $a = 10;
    $b = 10;

    // retorna 1 o 0
    echo $a == $b;

    // var_dump: retorna algo como: bool(true)
    var_dump($a == $b);
    var_dump($a <> $b); // si son diferente
    var_dump($a != $b); // si son diferente
    var_dump($a > $b);
    var_dump($a < $b);
    var_dump($a >= $b);
    var_dump($a <= $b);

    // ---------------------- OPERADORES LOGICOS

    $c = true;
    $d = true;

    var_dump($c && $d); // and
    var_dump($c || $d); // or

    // ---------------------- OPERADORES DE ASIGNACION COMBINADA

    // aumenta y disminuye en 1
    echo $a++:
    echo $a--:

    // aumenta y disminuye en 1
    echo ++$a:
    echo --$a:

    // ejemplo:
    $e = 10;
    $f = $e++; // f tendra un valor de 10 (primero asigna y despues aumenta el valor de e)

    $g = 10;
    $h = ++10; // h tendra un valor de 11 (primero aumenta el valor de g y luego asigna)

    // si se usa +=, es algo como: $g = $g + $h; (en $g se asigna el resultado)
    $g += $h;
    $g -= $h;
    $g *= $h;
    $g /= $h;

    // Retorna True
        // $a = "Hola Mundo";
        // $a = 45;

    // Retorna False
        // $b = "";
        // $b = 0;
        // $b = null;

?>
