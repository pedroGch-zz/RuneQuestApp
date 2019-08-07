-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2019 a las 01:01:25
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `runequest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `culturas`
--

CREATE TABLE `culturas` (
  `id` int(11) NOT NULL,
  `dado` int(11) NOT NULL,
  `cultura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `culturas`
--

INSERT INTO `culturas` (`id`, `dado`, `cultura`) VALUES
(1, 1, 'primitiva'),
(2, 2, 'primitiva'),
(3, 3, 'nómada'),
(4, 4, 'nómada'),
(5, 5, 'bárbara'),
(6, 6, 'bárbara'),
(7, 7, 'bárbara'),
(8, 8, 'civilizada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `culturas`
--
ALTER TABLE `culturas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `culturas`
--
ALTER TABLE `culturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
