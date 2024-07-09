<?php

    use Controllers\CourseController;
    use Models\Course;

    // importacion automatica
    // es importante que el nombre del archivo sea el mismo que el de la clase (CourseController y Course)
    spl_autoload_register(function($clase){

        if(file_exists(str_replace('\\', '/', $clase) . ".php")){
            require_once str_replace('\\', '/', $clase) . ".php"; // reemplazamos \ por /
        }

    });

    $course = new Course;
    $course->saludar();
    
    echo "<br>";

    $course_controller = new CourseController;
    $course_controller->saludar();

?>