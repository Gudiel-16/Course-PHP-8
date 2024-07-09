<?php

    class Humano{

        public static $nombre = "Christopher Gudiel";

        public static function saludar(){
            echo "Hola Mundo";
        }

        public function saludoPersonalizado(){
            echo "Hola " . self::$nombre; // hacemos referencia a la variable estatica
        }
    }

    class Peruano extends Humano{
        public function saludoPeruano(){
            echo "Hola desde Peru, " . parent::$nombre; // hace refencia a la variable estatica del padre
        }
    }

    // Sin necesidad de instanciar
    // Humano::saludar();
    // echo Humano::$nombre;

    // $humano = new Humano;
    // $humano->saludoPersonalizado();

    $peruano = new Peruano;
    $peruano->saludoPeruano();

?>