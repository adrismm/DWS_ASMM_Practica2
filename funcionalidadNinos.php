<?php
    require("conexion.php");

    class Ninos extends Conexion
    {
        public function mostrarTablaNinos()
        {
            $sql = "SELECT * FROM ninos ORDER BY nombreNino ASC";
            return $this -> conexion -> query($sql);
        }

        public function crearNinos()
        {
            if(isset($_POST['enviar']))
            {
                if(strlen($_POST['nombreNino']) >= 1 && strlen($_POST['apellidosNino']) >= 1 &&
                strlen($_POST['fechaNacimientoNino']) >= 1 && strlen($_POST['comportamientoNino']) >= 1)
                {
                    
                    $nombreNino = trim($_POST['nombreNino']);
                    $apellidosNino = trim($_POST['apellidosNino']);
                    $fechaNacimientoNino = trim($_POST['fechaNacimientoNino']);
                    $comportamientoNino = trim($_POST['comportamientoNino']);

                    $sql = "INSERT INTO ninos(nombreNino, apellidosNino, fechaNacimientoNino, comportamientoNino) 
                    VALUES ('$nombreNino','$apellidosNino','$fechaNacimientoNino','$comportamientoNino')";
                
                    $con = new Conexion();
                    $con = $con -> __construct(); 
                    $sql = mysqli_query($con, $sql);

                    if($sql)
                    {
                        ?>
                        <p> Se ha creado correctamente </p>   
                        <a href="ninos.php"><button class="btn btn-primary"  type="button"> Actualizar Tabla </button>             
                        <?php
                    }
                    else
                    {
                        ?>
                        <p> No se ha creado correctamente </p>
                        <?php
                    }
                }
                else
                {
                ?>
                <h4> Debe rellenar todos los campos </h4>
                <?php
                }
            }
        }

        public function editarNinos()
        {
            if(isset($_POST['actualizar']))
            {
                if(strlen($_POST['idNino']) >= 1 && strlen($_POST['nombreNino']) >= 1 && strlen($_POST['apellidosNino']) >= 1 &&
                strlen($_POST['fechaNacimientoNino']) >= 1 && strlen($_POST['comportamientoNino']))
                {
                    $idNino = trim($_POST['idNino']);
                    $nombreNino = trim($_POST['nombreNino']);
                    $apellidosNino = trim($_POST['apellidosNino']);
                    $fechaNacimientoNino = trim($_POST['fechaNacimientoNino']);
                    $comportamientoNino = trim($_POST['comportamientoNino']);

                    $sql = "UPDATE ninos SET nombreNino = '$nombreNino', apellidosNino = '$apellidosNino',
                    fechaNacimientoNino = '$fechaNacimientoNino', comportamientoNino = '$comportamientoNino' WHERE idNino = '$idNino'" ;
                    $con = new Conexion();
                    $con = $con -> __construct(); 
                    $sql = mysqli_query($con, $sql);

                    if($sql)
                    {
                    ?>
                        <p> Se ha modificado correctamente </p>   
                        <a href="ninos.php"><button class="btn btn-primary" type="button"> Actualizar Tabla </button>             
                    <?php
                    }
                    else
                    {
                    ?>
                        <p> No se ha modificado correctamente </p>
                    <?php
                    }
                }
                else
                {
                ?>
                    <h4> Debe rellenar todos los campos </h4>
                <?php
               
                }
            }
        }

        public function eliminarNinos()
        {
            if(isset($_POST['eliminar']))
            {
                   if(strlen($_POST['idNino']) >= 1)
                   {
                        $idNino = trim($_POST['idNino']);

                        $sql = "DELETE FROM ninos where idNino = ('$idNino')";
                        $con = new Conexion();
                        $con = $con -> __construct(); 
                        $sql = mysqli_query($con, $sql);

                        if($sql)
                        {
                           ?>
                           <p> Se ha borrado correctamente </p> 
                           <a href="ninos.php"><button class="btn btn-primary"  type="button"> Actualizar Tabla </button>               
                           <?php
                        }
                        else
                        {
                           ?>
                           <p> No se ha borrado correctamente </p>
                           <?php
                       }
               }
               else
               {
                   ?>
                   <h4> Debe rellenar todos los campos </h4>
                   <?php
           
               }
            }
        }
    }
?>