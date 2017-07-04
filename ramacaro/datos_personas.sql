-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2017 a las 23:02:49
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_gestion_contratos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personas`
--

CREATE TABLE `datos_personas` (
  `id_persona` int(11) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `cuil` varchar(11) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `lugar_nac` varchar(255) NOT NULL,
  `fecha_nac` date NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `datos_personas`
--

INSERT INTO `datos_personas` (`id_persona`, `apellido`, `nombre`, `dni`, `cuil`, `nacionalidad`, `lugar_nac`, `fecha_nac`, `domicilio`, `telefono`, `celular`, `email`) VALUES
(1, 'caro', 'lopez', '31406229', '27314062294', 'argentina', 'formosa', '1985-03-28', 'don bosco 3124 - mariano moreno', '4453602', '3704677420', 'carolopez@gmail.com'),
(2, 'asd', 'hjjkj', '999', '8888', 'uuuuu', 'jjjj', '1985-04-23', 'jjjkkj', '8788', '9999', 'hjhjjjjk');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_personas`
--
ALTER TABLE `datos_personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_personas`
--
ALTER TABLE `datos_personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
