<?php
    require("funcionalidadRegalos.php");

    $regalos = new Regalos();
    $filas = $regalos -> mostrarTablaRegalos();

    if($filas -> num_rows == 0)
    {
        $mensajeErr = "No tenemos los datos de ningún regalo.";
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
                <h1> Regalos </h1>
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
                <a href="anadirRegalo.php"><button class="btn btn-primary"  type="button"> Añadir Regalo </button></a>
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
                                <th> Precio </th>
                                <th> Rey Mago </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($fila = $filas -> fetch_assoc())
                            {
                            ?>
                            <tr>
                                <td><?php echo $fila["idRegalo"]; ?></td>
                                <td><?php echo $fila["nombreRegalo"]; ?></td>
                                <td><?php echo $fila["precioRegalo"]; ?></td>
                                <td><?php echo $fila["idReyMagoFK"]; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <td><a href = "modificarRegalo.php"><button class="btn btn-success"  type="button"> Editar </button></a></td>
                            <td><a href = "borrarRegalo.php"><button class="btn btn-danger"  type="button"> Borrar </button></a></td>
                        </tfoot>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>
    </body>
</html>