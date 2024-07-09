<?php
    
    for ($i=0; $i <= 10; $i++) { 
        echo "Hola Mundo";
    }

    $vocales = ['a', 'e', 'i', 'o', 'u'];

    foreach ($vocales as $indice => $vocal) {
        echo $indice . " $vocal <br>";
    }
?>
