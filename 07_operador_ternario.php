<?php
    
    $a = 10;
    $b = 20;

    $valor = $a > $b ? 'a > b' : 'a < b';

    $valor2 = $a > $b ? 'a > b' : ( $a < $b ? 'a < b' : 'a = b' );

    echo $valor;
    echo $valor2;
?>
