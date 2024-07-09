<?php

    // $nombre = $_GET['name'];
    // $nombre = $_POST['name'];

    $nombre = $_REQUEST['name']; // no importara si es get o post
    $edad = $_REQUEST['edad'];
    $sexo = $_REQUEST['sexo'];
    $pais = $_REQUEST['pais'];
    $roles = $_REQUEST['roles'];
    $mensaje = $_REQUEST['mensaje'];

    $image = $_FILES['image'];
	
	// la carpeta '17_formularios' tiene que estar dentro de htdocs de xampp
    $path = $_SERVER['DOCUMENT_ROOT'] . '/17_formularios/images/' . $image['name']; // path donde voy a guardar la img

    echo "<p>El nombre de usuario es: $nombre <p>";
    echo "<p>La edad del usuario es: $edad <p>";
    echo "<p>El sexo del usuario es: $sexo <p>";
    echo "<p>El pais del usuario es: $pais <p>";
    echo "<p>Roles:<p>";

    echo "<ul>";
        foreach ($roles as $rol) {
            echo "<li>$rol</li>";
        }
    echo "</ul>";

    move_uploaded_file($image["tmp_name"], $path); // mover la imagen a la path correspondiente

    echo "<p>Mensaje enviado:</p>";
    echo "<p>$mensaje</p>";

?>