<?php
    
    for ($i=0; $i <= 10; $i++) { 

        if ($i == 5) {
             break;
        }

        echo $i . "<br>";

        if($i == 8){
            continue;

            // terminan el programa
            // exit();
            // die();
        }

        echo 'Despues de Continue <br>';
    }

?>
