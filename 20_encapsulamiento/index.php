<?php

    class MyClass{
        public $public = "Public";

        // encapsulamiento
        protected $protected = "Protected"; // puede ser accedida desde el padre e hijo
        private $private = "Private"; // puede ser accesible solo de esta clase

        function printHello(){
            echo $this->public . "<br>";
            echo $this->protected . "<br>";
            echo $this->private . "<br>";
        }       

    }

    class MyClass2 extends MyClass{

        // sobre escribiendo propiedad publica y protegidas
        public $public = "Public2";
        protected $protected = "Protected2";

        function printHello(){
            echo $this->public . "<br>";
            echo $this->protected . "<br>";
            // echo $this->private . "<br>"; // no se puede acceder ya que es privada
        }
    }

    $objeto = new MyClass2;

    echo $objeto->printHello();
    // echo "<br>";
    // echo $objeto->protected;
    // echo "<br>";
    // echo $objeto->private;

?>