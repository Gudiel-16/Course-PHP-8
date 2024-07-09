<?php

    class Humano{

        // Con el public en los parametros, de una vez las declara y asigna los valores
        public function __construct(public $nombre, public $apellido_materno, public $apellido_paterno, public $dni)
        {
            // $this->nombre = $nombre;
            // $this->apellido_materno = $apellido_materno;
            // $this->apellido_paterno = $apellido_paterno;
            // $this->dni = $dni;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
            return $this;
        }

        public function setApellidos($apellido_materno, $apellido_paterno){
            $this->apellido_materno = $apellido_materno;
            $this->apellido_paterno = $apellido_paterno;
            return $this;
        }

        public function setDni($dni){
            $this->dni = $dni;
            return $this;
        }

        public function imprimirDatos(){
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Apellido materno: " . $this->apellido_materno . "<br>";
            echo "Apellido paterno: " . $this->apellido_paterno . "<br>";
            echo "DNI: " . $this->dni . "<br>";
        }

    }

    // hacemos referencia a que atributo asignar
    $humano = new Humano(nombre:'Christopher', apellido_materno:'Gudiel', apellido_paterno:'Acajabon', dni:123456);

    // Importante que tenga el return $this en los metodos
    $humano->imprimirDatos();

?>