<?php
    
   $array = [1, 2, 3];
   list($a, $b, $c) = $array; // parecido a la destructuracion de js
   echo $b;

   $array2 = range(10, 20); // llenar array con valores
   var_dump($array2);
   echo count($array2);

   $array3 = ['Christopher', 'Alexander', 'Acajabon', 'Gudiel'];
   unset($array3[2]); // eliminamos indice 2
   
   if(in_array('Gudiel', $array3)){
        echo "El valor esta en el array";
   }else{
        echo "El valor no esta en el array";
   }

?>
