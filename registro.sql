-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2021 a las 23:41:11
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `redes` varchar(60) NOT NULL,
  `contacto` int(100) NOT NULL,
  `negocio` varchar(150) NOT NULL,
  `fecha_reg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `horario`, `redes`, `contacto`, `negocio`, `fecha_reg`) VALUES
(36, 'juan david', 'JUANT666@HOTMAIL.COM', '666', 'facebook', 345678, 'la fritanga 56', '16/07/21'),
(37, 'jorge', 'JUANT666@HOTMAIL.COM', '6m g', 'facebook', 44556789, 'la fritanga 56', '16/07/21'),
(38, 'juan david', 'jorge@jjj', '6m g', 'facebook', 345678, 'la fritanga 56', '16/07/21'),
(39, 'juan david', 'jorge@jjj', '6m g', 'facebook', 345678, 'la fritanga 56', '16/07/21'),
(40, 'juan david', 'jorge@jjj', '6m g', 'facebook', 345678, 'la fritanga 56', '16/07/21'),
(41, 'juan david', 'JUANT666@HOTMAIL.COM', '6 a9', 'facebook', 44556789, 'la fritanga', '16/07/21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
