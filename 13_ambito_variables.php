<?php
    
    $a = 5;
    $b = 10;

    function test(&$n){ // variable por referencia

        // global $a; // para poder acceder a la variable global

        $n = $n + 10;        
    }

    test($a);
    test($b);

    echo $a . "<br>";
    echo $b . "<br>";

?>
