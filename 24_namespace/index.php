<?php

    use Carpeta1\Humano;
    use Carpeta2\Humano as Humano2;

    require_once('Carpeta1/Humano.php');
    require_once('Carpeta2/Humano.php');
    
    // $humano1 = new Carpeta1\Humano;
    $humano1 = new Humano;
    $humano1->saludar();
    
    // $humano2 = new Carpeta2\Humano;
    $humano2 = new Humano2;
    $humano2->saludar();

?>