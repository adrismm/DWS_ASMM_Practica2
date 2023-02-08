<?php
    require("ninos.php");

    $ninos = new Ninos();
    $modificar = $ninos -> editarNinos();
?>

<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

        <title> DWS | Práctica Tema 2 </title>
    </head>
    <body>
        <h1> Modificar Niño </h1>

        <form action="modificarNino.php" method="POST">
            <label for="name"> Id del Niño a modificar </label>
            <input type="text" id="name" name="idNino"><br>
            <label for="name"> Nombre </label>
            <input type="text" id="name" name="nombreNino">
            <label for="name"> Apellido </label>
            <input type="text" id="name" name="apellidosNino">
            <label for="fecha"> Fecha Nacimiento </label>
            <input type="text" id="fecha" name="fechaNacimientoNino">
            <label for="comportamiento"> ¿Ha sido bueno? </label>
            <input type="text" id="comportamiento" name="comportamientoNino">
            <button class="btn btn-success" type="submit" name="actualizar"> Actualizar </button>
        </form>
    </body>
</html>