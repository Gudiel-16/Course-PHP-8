<?php

    // final: no se podra heredar de esta
    // final class Hogar{
    //     public $color, $seguridad;
    // }

    class Hogar{
        public $color, $seguridad;

        public function saludar(){ // al poner final aca, no se podra sobreescribir este metodo
            echo "Bienvenido a mi hogar";
        }
    }

    class Departamento extends Hogar{
        public function saludar(){
            echo "Bienvenido a mi departamento";
        }
    }

    $departamento = new Departamento;
    $departamento->saludar();

?>