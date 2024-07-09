<?php

    // USO DE UN METODO ESPECIFICO DE trait, cuando 2 trait tienen el un metodo con el mismo nombre

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

        public function saludo(){
            echo "trait A";
        }

    }
   
    trait B{

        public function saludo(){
            echo "trait B";
        }

    }

    class Peruano extends Persona {

        use A, B { 
            A::saludo insteadOf B; // indicamos que use el metodo saludo de A, ya que ambos tienen el mismo nombre
        } 

    }

    $objeto = new Peruano;
    $objeto->saludo();

?>