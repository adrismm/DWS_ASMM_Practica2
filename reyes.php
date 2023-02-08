<?php
    require("funcionalidadReyesMagos.php");

    $reyes = new ReyesMagos();
    $regalosBaltasar = $reyes -> mostrarTablaBaltasar();
    $regalosGaspar = $reyes -> mostrarTablaGaspar();
    $regalosMelchor = $reyes -> mostrarTablaMelchor();

    if($regalosBaltasar -> num_rows == 0)
    {
        $mensajeErr1 = "Baltasar no tiene regalos.";
    }

    if($regalosGaspar -> num_rows == 0)
    {
        $mensajeErr2 = "Gaspar no tiene regalos.";
    }
    
    if($regalosMelchor -> num_rows == 0)
    {
        $mensajeErr3 = "Melchor no tiene regalos.";
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
                <h1> Reyes Magos </h1>
                <?php
                if(isset($mensajeErr1))
                {
                ?>
                <div>
                    <?php echo $mensajeErr1; ?>
                </div>
                <?php
                }

                if(isset($mensajeErr2))
                {
                ?>
                <div>
                    <?php echo $mensajeErr2; ?>
                </div>
                <?php
                }

                if(isset($mensajeErr3))
                {
                ?>
                <div>
                    <?php echo $mensajeErr3; ?>
                </div>
                <?php
                }
                ?>
            </div>
            <div>
                <a href="index.php"> Inicio </a>
            </div>

            <?php 
            if((int)$regalosBaltasar -> num_rows)
            { 
            ?>
                <div>
                    <h2> Baltasar </h2>
                </div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th> Regalo </th>
                                <th> Niño </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($regaloBaltasar = $regalosBaltasar -> fetch_assoc())
                            {
                            ?>
                            <tr>
                                <td><?php echo $regaloBaltasar["nombreRegalo"]; ?></td>
                                <td><?php echo $regaloBaltasar["nombreNino"]; ?></td>
                            </tr>
                            <?php
                            $dineroTotalBaltasar = $regaloBaltasar["precioRegalo"] + $dineroTotalBaltasar;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <td> Precio Total: <?php echo $dineroTotalBaltasar; ?> € </td>
                        </tfoot>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>

        <?php 
            if((int)$regalosGaspar -> num_rows)
            { 
            ?>
                <div>
                    <h2> Gaspar </h2>
                </div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th> Regalo </th>
                                <th> Niño </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($regaloGaspar = $regalosGaspar -> fetch_assoc())
                            {
                            ?>
                            <tr>
                                <td><?php echo $regaloGaspar["nombreRegalo"]; ?></td>
                                <td><?php echo $regaloGaspar["nombreNino"]; ?></td>
                            </tr>
                            <?php
                            $dineroTotalGaspar = $regaloGaspar["precioRegalo"] + $dineroTotalGaspar;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <td> Precio Total: <?php echo $dineroTotalGaspar; ?> € </td>
                        </tfoot>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>

        <?php 
            if((int)$regalosMelchor -> num_rows)
            { 
            ?>
                <div>
                    <h2> Melchor </h2>
                </div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th> Regalo </th>
                                <th> Niño </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($regaloMelchor = $regalosMelchor -> fetch_assoc())
                            {
                            ?>
                            <tr>
                                <td><?php echo $regaloMelchor["nombreRegalo"]; ?></td>
                                <td><?php echo $regaloMelchor["nombreNino"]; ?></td>
                            </tr>
                            <?php
                            $dineroTotalMelchor = $regaloMelchor["precioRegalo"] + $dineroTotalMelchor;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <td> Precio Total: <?php echo $dineroTotalMelchor; ?> € </td>
                        </tfoot>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>
    </body>
</html>