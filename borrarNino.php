<?php
    require("ninos.php");

    $ninos = new Ninos();
    $borrar = $ninos -> eliminarNinos();
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
        <h1> Eliminar Niño </h1>

        <form action="borrarNino.php" method="POST">
            <p> Introduzca el Id del Niño a borrar </p>
            <label for="idNino"> Id Niño </label>
            <input type="number" id="idNino" name="idNino">
            <button class="btn btn-danger" type="submit" name="eliminar"> Ejecutar </button>
        </form>
    </body>
</html>