<?php

    // nos sirve para saber como estaran construidas nuestras clases
    // son como plantillas para saber como trabajar las estructuras de las clases
    interface iTemplate{
        public function setVariable();
        public function getHtml();
    }

    class Template implements iTemplate{

        public function setVariable(){

        }

        public function getHtml(){

        }
    }

    // Otro ejemplo:

    interface a {
        public function prueba();
    }

    interface b extends a {
        public function prueba2();
    }

    interface c extends a, b {
        public function prueba3();
    }

    // se tiene que declarar los 3 metodos
    class d implements c {

        // al menos tiene que existis los meodos de las interfaces
        public function prueba(){

        }

        public function prueba2(){

        }

        public function prueba3(){

        }

        public function prueba4(){

        }
    }


?>