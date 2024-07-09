<?php

    // CAMBIAR protected a public

    class Persona{

        public $nombre;

        public function saludo() {
            echo "Hola";
        }

        public function setNombre($nombre){
            $this->nombre = strtolower($nombre); // minusculas
        }

        public function getNombre(){
            return ucwords($this->nombre); // retornar con la primera letra mayuscula
        }

    }

    // no se pueden instanciar
    trait A{

        protected function saludo(){
            echo "trait A";
        }

    }

    class Peruano extends Persona {

        use A { saludo as public; } // cambiando de protected a public

    }

    $objeto = new Peruano;
    $objeto->saludo();

?>