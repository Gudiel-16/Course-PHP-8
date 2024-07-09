<?php

    // con interfaces solo metodos pubicos
    // con clases abstractas se puede trabajar con metodos protegidos

    abstract class ClaseAbstracta {

        // se tienen que definir en las clases donde se hereda
        abstract protected function getValor();
        abstract public function valorPrefijo($prefijo);

        public function imprimir(){
            echo $this->getValor();
        }

    }

    class ClaseConcreta extends ClaseAbstracta {

        protected function getValor(){
            return "Clase concreta";
        }

        public function valorPrefijo($prefijo, $separador = "."){ // $separador es opcional
            return $prefijo . " Clase concreta";
        }     

    }

    $objeto = new ClaseConcreta;

    $objeto->imprimir();
    echo "<br>";
    echo $objeto->valorPrefijo("Gudiel");

?>