<?php
    
   $cadena = "Hola aeiou";
   $cadena2 = "Hola aeiou";

   echo $cadena[1]; // caracter en indice especifico

   echo strlen($cadena); // tamanio de cadena (si tuviera tilde, estas suma 1 por la tilde)

   echo mb_strlen($cadena); // tamabio sin importar tildes

   echo strpos($cadena, 'i'); // retorna el indice (primera coincidencia de derecha a izquierda)
   echo strrpos($cadena, 'i'); // retorna el indice (primera coincidencia de izquierda a derecha)

   echo str_contains($cadena, 'mundo'); // retorna un bool sin contiene la palabra

   echo str_starts_with($cadena, 'Hola'); // si empieza con esa palabra
   echo str_ends_with($cadena, 'aeiou'); // si empieza con esa palabra

   // strcasecmp: compara sin importar mayusculas o minusculas
   if(strcmp($cadena, $cadena2) == 0){
    echo "Cadenas iguales"
   }else{
    echo "Cadenas diferentes"
   }

   echo substr($cadena, 1); // recortar de indice 1 hasta el final
   echo substr($cadena, 1, 3); // recortar de indice 1 a 3
   echo substr($cadena, -2); // ultimos 2 caracteres
   echo substr($cadena, -5, 3); // empieza en la posicion 5 de derecha a izquierda y a apartir de ahi trae las 3 caracteres

   echo str_replace("aeiou", "aaaaa", $cadena); // reemplaza aeiou por aaaaa de la cadena $cadena

   echo strtolower($cadena); // minusculas
   echo strtoupper($cadena); // mayuscula
   echo ucfirst($cadena); // primera letra en mayuscula
   echo ucwords($cadena); // primera letra de cada palabra en mayuscula

?>
