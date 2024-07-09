<?php
    
    // --------------- ALUNAS NATIVAS

    echo "Marca de tiempo: " . time() . "<br>";
    echo "Raiz cuadrada de 25 " . sqrt(25) . "<br>";
    echo "Numero aleatorio entre 90 y 100 " . rand(90, 100) . "<br>";
    echo "Numero pi: " . pi() . "<br>";

    // --------------- DECLARACION DE VARIABELS

    function factorial($n){
        $resultado = 1;

        for ($i=0; $i < $n; $i++) { 
            $resultado = $resultado * $i;
        }

        return $resultado;
    }

    $resultado = factorial(10);

    echo "El factorial de 10 es: $resultado <br>";

    // --------------- ARGUMENTOS FIJOS Y VARIABLES

    function valoracion($nombre, $rating = 5){ // $rating opcional, sera 5 si no lo mandan

        echo "$nombre tiene un rating de $rating <br>";

    }

    valoracion("PHP", 5);

    function concatenar(...$palabras){ // juntar todas las variales dentro de un array

        $resultado = "";
        foreach ($palabras as $palabra) {
            $resultado .= $palabra . " " ; // .= ira concatenando, paracedo al += de js
        }

        echo $resultado . "<br>";

    }

    concatenar("a", "b", "c", "d");

    // --------------- CON TIPADO DEFINIDO

    // declare(strict_types=1); // para que marque error cuando se mande un float o decimal y la funcion espera un int

    // datos que se pueden usar en tipado: int, float, string, bool, array, object, null
    function sumarEnteros(int $n1, int $n2): int | float {
        return $n1 + $n2;
    }

    $suma = sumarEnteros(2, 3.2); // 3.2 lo trata de transformar a int

    echo $suma;


?>
