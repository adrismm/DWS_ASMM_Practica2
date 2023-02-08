<?php
    require("funcionalidadNinos.php");

    $ninos = new Ninos();
    $filas = $ninos -> mostrarTablaNinos();

    if($filas -> num_rows == 0)
    {
        $mensajeErr = "No tenemos los datos de ningún niño.";
    }
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
        <div>
            <div>
                <h1> Niños </h1>
                <?php
                if(isset($mensajeErr))
                {
                ?>
                <div>
                    <?php echo $mensajeErr; ?>
                </div>
                <?php
                }
                ?>
            </div>
            <div>
                <a href="index.php"><button class="btn btn-primary"  type="button"> Inicio </button></a>
                <a href="anadirNino.php"><button class="btn btn-primary"  type="button"> Añadir Niño </button></a>
            </div>

            <?php 
            if((int)$filas -> num_rows)
            { 
            ?>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> Nombre </th>
                                <th> Apellidos </th>
                                <th> Fecha Nacimiento </th>
                                <th> ¿Bueno? </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($fila = $filas -> fetch_assoc())
                            {
                            ?>
                            <tr>
                                <td><?php echo $fila["idNino"]; ?></td>
                                <td><?php echo $fila["nombreNino"]; ?></td>
                                <td><?php echo $fila["apellidosNino"]; ?></td>
                                <td><?php echo $fila["fechaNacimientoNino"]; ?></td>
                                <td><?php echo $fila["comportamientoNino"]; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <td><a href = "modificarNino.php"><button class="btn btn-success"  type="button"> Editar </button></a></td>
                            <td><a href = "borrarNino.php"><button class="btn btn-danger"  type="button"> Borrar </button></a></td>
                        </tfoot>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>
    </body>
</html>