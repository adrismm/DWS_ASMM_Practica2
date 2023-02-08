<?php
    require("conexion.php");

    class ReyesMagos extends Conexion
    {
        public function mostrarTablaReyesMagos()
        {
            $sql = "SELECT * FROM reyesmagos";
            return $this -> conexion -> query($sql);
        }

        public function mostrarTablaBaltasar()
        {
            $sql = "SELECT ninos.nombreNino, ninos.comportamientoNino, regalos.nombreRegalo, regalos.precioRegalo
            FROM ninos
            INNER JOIN pedidos ON ninos.idNino = pedidos.idNinoFK
            INNER JOIN regalos ON pedidos.idRegaloFK = regalos.idRegalo
            INNER JOIN reyesmagos ON regalos.idReyMagoFK = reyesmagos.idReyMago
            WHERE idReyMagoFK = 1";

            return $this -> conexion -> query($sql);
        }

        public function mostrarTablaGaspar()
        {
            $sql = "SELECT ninos.nombreNino, ninos.comportamientoNino, regalos.nombreRegalo, regalos.precioRegalo
            FROM ninos
            INNER JOIN pedidos ON ninos.idNino = pedidos.idNinoFK
            INNER JOIN regalos ON pedidos.idRegaloFK = regalos.idRegalo
            INNER JOIN reyesmagos ON regalos.idReyMagoFK = reyesmagos.idReyMago
            WHERE idReyMagoFK = 2";

            return $this -> conexion -> query($sql);
        }

        public function mostrarTablaMelchor()
        {
            $sql = "SELECT ninos.nombreNino, ninos.comportamientoNino, regalos.nombreRegalo, regalos.precioRegalo
            FROM ninos
            INNER JOIN pedidos ON ninos.idNino = pedidos.idNinoFK
            INNER JOIN regalos ON pedidos.idRegaloFK = regalos.idRegalo
            INNER JOIN reyesmagos ON regalos.idReyMagoFK = reyesmagos.idReyMago
            WHERE idReyMagoFK = 3";

            return $this -> conexion -> query($sql);
        }
    }
?>