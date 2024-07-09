<?php

    // USO DE VARIOS trait en un clase

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
    trait hola{

        public function decirHola(){
            echo "Hola";
        }

    }
    
    trait mundo{

        public function decirMundo(){
            echo " Mundo";
        }

    }

    class Peruano extends Persona {

        use hola, mundo;

        // se va imprimir esto, si no luego la de trait, si no la de 'Persona'
        public function saludo() {
            echo "Hola mundo desde la clase peruano";
        }

    }

    $objeto = new Peruano;
    $objeto->decirHola();
    $objeto->decirMundo();

?>