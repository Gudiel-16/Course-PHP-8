<?php

    class Persona{

        public $nombre, $edad;
        public $apellido1, $apellido2;

        public function setNombre($nombre){
            $this->nombre = strtolower($nombre); // minusculas
        }

        public function getNombre(){
            return ucwords($this->nombre); // retornar con la primera letra mayuscula
        }

        public function setApellidos($apellido1, $apellido2){
            $this->apellido1 = $apellido1;
            $this->apellido2 = $apellido2;
        }

        public function getApellidos(){
            return $this->apellido1 . " " . $this->apellido2;
        }

    }

    class Peruano extends Persona{
        public $departamento, $ciudad;

        public function setApellidos($apellido1, $apellido2){

            // hereda de la funcion setApellidos del padre, osea que va ejecutar la logica que tenga el metodo del padre
            parent::setApellidos($apellido1, $apellido2);

            echo "Los apellidos se asignaron con exito";
        }
    }

    class Chileno extends Persona{
        public $comunda, $region;

        // Hara referencia a este metodo y no al padre cuando se este usando objeto 'Chileno'
        public function setApellidos($apellido1, $apellido2){ // para sobreescribir metodo
            $this->apellido1 = $apellido2;
            $this->apellido2 = $apellido1;
        }
    }
    

?>