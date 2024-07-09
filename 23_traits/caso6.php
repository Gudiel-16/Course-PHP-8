<?php

    // trait compuestos de otros traits y metodo abstracto

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

        public function decirHola(){
            echo "Hola ";
        }

    }

    trait B{

        public function decirMundo(){
            echo "Mundo ";
        }

        abstract public function saludar();
        
    }
    
    trait C{

        use A, B;

        // hay que declarar por el metodo abstracto de B
        public function saludar(){
            $this->decirHola();
            $this->decirMundo();
        }

    }

    class Peruano extends Persona {

        use C;

    }

    $objeto = new Peruano;
    $objeto->saludar();

?>