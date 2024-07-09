<?php

    // PRECEDENCIA, metodo saludo

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
    trait Latinoamericano{

        public function saludo(){
            echo "Hola Mundo";
        }

    }

    class Peruano extends Persona {

        use Latinoamericano; // sobreescribe cualquier metodo de la clase padre 'persona' con el mismo nombre

        // se va imprimir esto, si no luego la de trait, si no la de 'Persona'
        public function saludo() {
            echo "Hola mundo desde la clase peruano";
        }

    }

    $objeto = new Peruano;
    $objeto->saludo();

?>