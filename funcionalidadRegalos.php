<?php
    require("conexion.php");

    class Regalos extends Conexion
    {
        public function mostrarTablaRegalos()
        {
            $sql = "SELECT * FROM regalos";
            return $this -> conexion -> query($sql);
        }

        public function crearRegalos()
        {
            if(isset($_POST['enviar']))
            {
                if(strlen($_POST['nombreRegalo']) >= 1 && strlen($_POST['precioRegalo']) >= 1 && strlen($_POST['idReyMagoFK']))
                {
                    
                    $nombreRegalo = trim($_POST['nombreRegalo']);
                    $precioRegalo = trim($_POST['precioRegalo']);
                    $idReyMagoFK = trim($_POST['idReyMagoFK']);

                    $sql = "INSERT INTO regalos(nombreRegalo, precioRegalo, idReyMagoFK) 
                    VALUES ('$nombreRegalo','$precioRegalo','$idReyMagoFK')";
                
                    $con = new Conexion();
                    $con = $con -> __construct(); 
                    $sql = mysqli_query($con, $sql);

                    if($sql)
                    {
                        ?>
                        <p> Se ha creado correctamente </p>   
                        <a href="regalos.php"><button class="btn btn-primary"  type="button"> Actualizar Tabla </button>             
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

        public function editarRegalos()
        {
            if(isset($_POST['actualizar']))
            {
                if(strlen($_POST['idRegalo']) >= 1 && strlen($_POST['nombreRegalo']) >= 1 && strlen($_POST['precioRegalo']) >= 1 &&
                strlen($_POST['idReyMagoFK']))
                {
                    $idRegalo = trim($_POST['idRegalo']);
                    $nombreRegalo = trim($_POST['nombreRegalo']);
                    $precioRegalo = trim($_POST['precioRegalo']);
                    $idReyMagoFK = trim($_POST['idReyMagoFK']);

                    $sql = "UPDATE regalos SET nombreRegalo = '$nombreRegalo', precioRegalo = '$precioRegalo',
                    idReyMagoFK = '$idReyMagoFK' WHERE idRegalo = '$idRegalo'" ;
                    $con = new Conexion();
                    $con = $con -> __construct(); 
                    $sql = mysqli_query($con, $sql);

                    if($sql)
                    {
                    ?>
                        <p> Se ha modificado correctamente </p>   
                        <a href="regalos.php"><button class="btn btn-primary" type="button"> Actualizar Tabla </button>             
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

        public function eliminarRegalos()
        {
            if(isset($_POST['eliminar']))
            {
                   if(strlen($_POST['idRegalo']) >= 1)
                   {
                        $idRegalo = trim($_POST['idRegalo']);

                        $sql = "DELETE FROM regalos where idRegalo = ('$idRegalo')";
                        $con = new Conexion();
                        $con = $con -> __construct(); 
                        $sql = mysqli_query($con, $sql);

                        if($sql)
                        {
                           ?>
                           <p> Se ha borrado correctamente </p> 
                           <a href="regalos.php"><button class="btn btn-primary"  type="button"> Actualizar Tabla </button>               
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