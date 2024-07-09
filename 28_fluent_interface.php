<?php

    class Humano{

        public $nombre, $apellido_materno, $apellido_paterno, $dni;

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

    $humano = new Humano;

    // Importante que tenga el return $this en los metodos
    $humano->setNombre("Christopher")
            ->setApellidos('Acajabon', 'Gudiel')
            ->setDni('123456')
            ->imprimirDatos();

?>