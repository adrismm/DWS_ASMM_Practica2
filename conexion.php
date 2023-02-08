<?php
    class Conexion
    {
        protected $conexion;

        public function __construct()
        {
            $servidor = 'localhost';
            $usuario = 'studium';
            $clave = 'studium_';
            $baseDatos = 'studium_dws_p2';

            $this -> conexion = new mysqli($servidor, $usuario, $clave, $baseDatos);
            $this -> conexion -> set_charset("utf8");

            if (mysqli_connect_error())
            {
                die("Error de conexión (" . mysqli_connect_errno() . ") ". mysqli_connect_error());
            }
            else
            {
                return $this -> conexion;
            }
        }
    }
?>