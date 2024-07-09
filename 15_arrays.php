<?php
    
   // --------------- UNIDIMENSIONALES

   $array = [1, "Gudiel", 3 ,4, false];
   $array2 = [
    'nombre' => "Gudiel",
    "email" => "gudiel.lv16@gmail.com",
    'celular' => '12345678'
   ]

   $array[] = 5; // agregando

   echo $array[0] . '<br>';

   echo $array2['email'] . '<br>';

   // --------------- MULTIDIMENSIONALES

   $array2 = [
    [
        'nombre' => "Christopher",
        "email" => "christopher@gmail.com",
        'direccion' => [
            'pais' => 'Guatemala',
            'ciudad' => 'Guatemala'
        ]
    ],
    [
        'nombre' => "Alexander",
        "email" => "alexander@gmail.com",
        'celular' => '12345678'
    ],
    [
        'nombre' => "Acajabon",
        "email" => "acajabon@gmail.com",
        'celular' => '12345678'
    ],
   ]

   echo $array2[0]['nombre'] . '<br>';
   echo $array2[0]['direccion']['pais'] . '<br>';

   foreach ($array2 as $item) {
        echo $item['nombre'] . '<br>';
        echo $item['email'] . '<br>';
        echo $item['celular'] . '<br>';
        echo '<hr>';
   }

?>
