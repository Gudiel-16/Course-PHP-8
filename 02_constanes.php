<?php
    // (nombre, valor)
    define('CURSO', 'PHP 8 desde 0');
    define('USUARIO_1', 'Gudiel');
    define('ANIMALES', ['perro', 'gato', 'loro', 'tortuga']);


    echo CURSO;
    echo USUARIO_1;
    echo ANIMALES[0];

    // defined: verifica si se ha definido
    if(defined('CURSO')){
        echo "Si se ha definido";
    }

    // variable definida por PHP 
    echo "Mi version de PHP es: " . PHP_VERSION; 
    echo "Mi sistema operativo es: " . PHP_OS; 
    echo "Mi sistema operativo es: " . PHP_OS; 
    echo PHP_EXTENSION_DIR; // ruta de extensiones
    echo PHP_SAPI; // api del servidor
    echo __LINE__; // en que linea se esta ejecutando esta linea de codigo
    echo __FILE__: // directorio completo donde me encuentro

?>
