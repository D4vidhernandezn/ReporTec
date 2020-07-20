-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2020 a las 21:14:53
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reportec_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_acoso`
--

CREATE TABLE `reportes_acoso` (
  `id` int(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `problema` varchar(100) NOT NULL,
  `riesgo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reportes_acoso`
--

INSERT INTO `reportes_acoso` (`id`, `fecha`, `lugar`, `problema`, `riesgo`, `descripcion`, `nombre`, `ruta`) VALUES
(40, '', 'Q3', 'Hacen Bullying a compañero', 'Moderado', 'XERTGFT3G43TG4 rfx4f4f 4 tf4tf4ftftf', 'Bullying.jpg', 'FotosReportec/Bullying.jpg'),
(41, '', 'P', 'Caida de las escaleras', 'Moderado', 'Joven tropezó al bajar de las escalera \r\ntiene sangrado leve', 'Caida en la escalera.jpg', 'FotosReportec/Caida en la escalera.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reportes_acoso`
--
ALTER TABLE `reportes_acoso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reportes_acoso`
--
ALTER TABLE `reportes_acoso`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
