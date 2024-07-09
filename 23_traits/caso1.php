<?php

    // USO DE Trait

    class Persona{

        public $nombre;

        public function setNombre($nombre){
            $this->nombre = strtolower($nombre); // minusculas
        }

        public function getNombre(){
            return ucwords($this->nombre); // retornar con la primera letra mayuscula
        }

    }

    // no se pueden instanciar
    trait Latinoamericano{

        public function saludoLatinoamericano(){
            echo "Este es un saludo lationamericano";
        }

    }

    trait Europeo{

        public function saludoEuropeo(){
            echo "Este es un saludo europeo";
        }

    }

    class Peruano extends Persona {

        use Latinoamericano;

    }

    class Aleman extends Persona{

        use Europeo;

    }

    $objeto = new Peruano;
    $objeto->saludoLatinoamericano();

?>