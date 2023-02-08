<?php
    require("conexion.php");
    require("funcionalidadNinos.php");
    require("funcionalidadRegalos.php");

    $ninos = new Ninos();
    $filas_ninos = $ninos -> mostrarTablaNinos();

    if($filas_ninos -> num_rows == 0)
    {
        $mensajeErr = "No tenemos los datos de ningún niño.";
    }

    if(isset($_POST["buscar"]))
    {
        if(isset($_POST["idNino"]))
        {
            $idNino = $_POST["idNino"];
            $nino = $ninos -> select($idNino);
        }
        else
        {
            $mensajeErr = "Debe seleccionar un niño.";
        }
    
        $regalos = new Regalos();
        $filas_regalos = $regalo -> mostrarTablaRegalos();

        if($filas_regalos -> num_rows == 0)
        {
            $mensajeErr = "No tenemos los datos de ningún regalo.";
        }
    }
    
    /*
    if (isset($_POST["anadir"])) {
        $idNino = $_POST["idNino"];
        $idRegalo = $_POST["idRegalo"];
    
        try
        {
            $id = $recibidos->insert($id_nino, $id_regalo);
            if ((int) $id) {
                $mensajeOK = 'El regalo se ha añadido correctamente.';
            }
        } catch (Exception $ex) {
            $mensajeKO = $ex->getMessage();
        }
        $nino = $ninos->select($id_nino);
        $regalosDeNino = $recibidos->selectFromNino($id_nino);
    
        $regalo = new Regalos();
        $rows_regalos = $regalo->selectAll();
        if ($rows_regalos->num_rows == 0) {
            $mensajeKO = 'No existen regalos.';
        }
    }*/
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
            <a href="index.php"><button class="btn btn-primary"  type="button"> Inicio </button></a>
        </div>
        <div>
            <h1> Búsqueda </h1>
                <?php
                if (isset($mensajeErr))
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
            <form method="POST" action="busqueda.php">
                <select id="inputChildren" class="form-control" name="nino">
                    <option selected disabled value="null"> Elige un niño...</option>
                    <?php
                        while ($fila = $filas_ninos -> fetch_assoc())
                        {
                                    $id = $fila['idNino'];
                                    $nombre = $fila['nombreNino'];
                                    echo "<option value = $id > $nombre </option>";
                        }
                    ?>
                </select>
                <button type="submit" class="btn btn-success" name="buscar"> Buscar </button>
            </form>
        </div>
        <?php
        if(isset($_POST["idNino"]))
        {
        ?>
            <div>
                <h5>Lista de regalos de <?php echo $idNino['nombreNino']; ?></h5>
                    <ul>
                        <?php /*
                        if($regalosDeNino-> num_rows != 0){
                            while ($fila = $regalosDeNino->fetch_assoc()) {
                                $nombre_regalo = $fila['nombre'];
                                 echo "<li>$nombre_regalo</li>";   
                            }
                        } else {
                            echo "<li>" . $nino['nombre'] . " no tiene regalos</li>";
                        } */
                        ?>
                    </ul>
            </div>
            <div>
                <form method="POST" action="busqueda.php">
                        <input type="hidden" name="nino" value="<?php echo $_POST["nombreNino"] ?>">
                            <p><?php $_POST["nombreNino"] ?></p>
                                <select id="inputToys" class="form-control" name="regalo">
                                        <option selected> Elige un regalo...</option>
                                        <?php
                                        while ($fila = $filas_regalos -> fetch_assoc()) {
                                            $id = $fila['idRegalo'];
                                            $nombre = $fila['nombreRegalo'];
                                            echo "<option value=$id>$nombre</option>";
                                        }
                                        ?>
                                </select>
                                <button type="submit" class="btn btn-success" name="anadir">  Añadir </button>
                            </div>
                        </form>
                    </div>
                </div>
        <?php } ?>

    </div>
</body>
</html>