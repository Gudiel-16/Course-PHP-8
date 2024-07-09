<?php
    // no son iguales, varia por mayusculas o minisculas
    $nombre = "Gudiel";
    $Nombre = "Acajabon"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo "Hola mundo, mi nombre es: " . $nombre;
            echo "Hola mundo, mi nombre es: $nombre"; // funciona solo con comillas dobles
        ?>
    </h1>
</body>
</html>

