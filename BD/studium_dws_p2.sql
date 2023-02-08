-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2023 a las 06:54:20
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `studium_dws_p2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE `ninos` (
  `idNino` int(11) NOT NULL,
  `nombreNino` varchar(45) NOT NULL,
  `apellidosNino` varchar(45) NOT NULL,
  `fechaNacimientoNino` date NOT NULL,
  `comportamientoNino` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ninos`
--

INSERT INTO `ninos` (`idNino`, `nombreNino`, `apellidosNino`, `fechaNacimientoNino`, `comportamientoNino`) VALUES
(1, 'Alberto', 'Alcántara', '1994-10-13', 'No'),
(2, 'Beatriz', 'Bueno', '1982-04-18', 'Sí'),
(3, 'Carlos', 'Crepo', '1998-12-01', 'Sí'),
(4, 'Diana', 'Domínguez', '1987-09-02', 'No'),
(5, 'Emilio', 'Enamorado', '1996-08-12', 'Sí'),
(6, 'Francisca', 'Fernández', '1990-07-28', 'Sí'),
(7, 'Javier', 'Romeo', '1988-02-04', 'No'),
(11, 'Hola', 'Adiós', '1995-06-04', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idNinoFk` int(11) NOT NULL,
  `idRegaloFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `idRegalo` int(11) NOT NULL,
  `nombreRegalo` varchar(45) NOT NULL,
  `precioRegalo` decimal(6,2) NOT NULL,
  `idReyMagoFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`idRegalo`, `nombreRegalo`, `precioRegalo`, `idReyMagoFK`) VALUES
(1, 'Aula de ciencia: Robot Mini ERP', '159.95', 2),
(2, 'Carbón', '0.00', 1),
(3, 'Cochecito Classic', '99.95', 3),
(4, 'Consola PS4 1 TB', '349.90', 2),
(5, 'Lego Villa familiar modular', '64.99', 3),
(6, 'Magia Borrás Clásica 150 trucos con luz', '32.95', 1),
(7, 'Meccano Excavadora construcción', '30.99', 2),
(8, 'Nenuco Hace pompas', '29.95', 3),
(9, 'Peluche delfín rosa', '34.00', 3),
(10, 'Pequeordenador', '22.95', 1),
(11, 'Robot Coji', '69.95', 2),
(12, 'Telescopio astronómico terrestre', '72.00', 2),
(13, 'Twister', '17.95', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reyesmagos`
--

CREATE TABLE `reyesmagos` (
  `idReyMago` int(11) NOT NULL,
  `nombreReyMago` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reyesmagos`
--

INSERT INTO `reyesmagos` (`idReyMago`, `nombreReyMago`) VALUES
(1, 'Baltasar'),
(2, 'Gaspar'),
(3, 'Melchor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`idNino`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idNinoFk`,`idRegaloFK`),
  ADD KEY `idRegaloFK` (`idRegaloFK`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`idRegalo`),
  ADD KEY `idReyMagoFK` (`idReyMagoFK`);

--
-- Indices de la tabla `reyesmagos`
--
ALTER TABLE `reyesmagos`
  ADD PRIMARY KEY (`idReyMago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `idNino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `idRegalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `reyesmagos`
--
ALTER TABLE `reyesmagos`
  MODIFY `idReyMago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `idNinoFK` FOREIGN KEY (`idNinoFk`) REFERENCES `ninos` (`idNino`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idRegaloFK` FOREIGN KEY (`idRegaloFK`) REFERENCES `regalos` (`idRegalo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD CONSTRAINT `idReyMagoFK` FOREIGN KEY (`idReyMagoFK`) REFERENCES `reyesmagos` (`idReyMago`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
