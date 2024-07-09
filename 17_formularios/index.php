<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP</title>
</head>
<body>
    <form action="procesar.php" method="POST" enctype="multipart/form-data">

        <label for="name">Nombre:</label>
        <input id="name" type="text" name="name">

        <br>

        <label>
            Edad:
            <input type="number" name="edad">
        </label>

        <br>

        <!-- RADIO -->

        <p>Sexo:</p>

        <label>
            <input type="radio" name="sexo" value="Masculino">
            Masculino
        </label>

        <label>
            <input type="radio" name="sexo" value="Femenino">
            Femenino
        </label>

        <br>

        <!-- SELECT -->

        <select name="pais">
            <option value="Guatemala">Guatemala</option>
            <option value="Brasil" selected>Brasil</option>
        </select>

        <br>

        <!-- CHECKBOX -->

        <p>Roles:</p>

        <label>
            <input type="checkbox" name="roles[]" value="Administrador">
            Administrador
        </label>

        <label>
            <input type="checkbox" name="roles[]" value="Editor ">
            Editor
        </label>

        <label>
            <input type="checkbox" name="roles[]" value="Moderador ">
            Moderador
        </label>

        <br>
        <br>

        <!-- FILE -->

        <label>
            Imagen:
            <br>
            <input type="file" name="image">
        </label>

        <br>
        <br>

        <!-- TEXTAREA -->

        <label>Mensaje:</label>
        <br>
        <textarea name="mensaje" cols="30" rows="10"></textarea>

        <br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>