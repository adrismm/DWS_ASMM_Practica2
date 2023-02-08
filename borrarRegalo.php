<?php
    require("regalos.php");

    $regalos = new Regalos();
    $anadir = $regalos -> eliminarRegalos();
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
        <h1> Eliminar Regalo </h1>

        <form action="borrarRegalo.php" method="POST">
            <p> Introduzca el Id del Regalo a borrar </p>
            <label for="idRegalo"> Id Regalo </label>
            <input type="number" id="idRegalo" name="idRegalo">
            <button class="btn btn-danger" type="submit" name="eliminar"> Ejecutar </button>
        </form>
    </body>
</html>