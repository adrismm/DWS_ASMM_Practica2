<?php
    require("regalos.php");

    $regalos = new Regalos();
    $anadir = $regalos -> crearRegalos();
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
        <h1> Crear Regalo </h1>

        <form action="anadirRegalo.php" method="POST">
            <label for="name"> Nombre </label>
            <input type="text" id="name" name="nombreRegalo">
            <label for="name"> Precio </label>
            <input type="text" id="name" name="precioRegalo">
            <label for="fecha"> Rey Mago </label>
            <input type="text" id="mago" name="idReyMagoFK">
            <button class="btn btn-success" type="submit" name="enviar"> Añadir </button> 
        </form>
    </body>
</html>