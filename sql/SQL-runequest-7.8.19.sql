-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2019 a las 22:08:32
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
-- Estructura de tabla para la tabla `arma`
--

CREATE TABLE `arma` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fue` int(11) NOT NULL,
  `des` int(11) NOT NULL,
  `car` int(11) NOT NULL,
  `bs` int(11) NOT NULL,
  `pa` int(11) NOT NULL,
  `mr` int(11) NOT NULL,
  `p_salv` int(11) NOT NULL,
  `p_rural` int(11) NOT NULL,
  `p_peq` int(11) NOT NULL,
  `p_gran` int(11) NOT NULL,
  `manos` int(11) NOT NULL,
  `tiempo_fav` int(11) NOT NULL,
  `ef` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `tf` int(11) DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `arma`
--

INSERT INTO `arma` (`id`, `nombre`, `material`, `danio`, `fue`, `des`, `car`, `bs`, `pa`, `mr`, `p_salv`, `p_rural`, `p_peq`, `p_gran`, `manos`, `tiempo_fav`, `ef`, `max`, `tf`, `tipo`) VALUES
(1, 'cuchillo', '10', '1d3', 0, 0, 0, 15, 2, 3, 3, 2, 0, 0, 1, 0, 0, 0, 0, '1'),
(2, 'cuchillo', '2', '1d3+1', 0, 0, 0, 15, 3, 3, 0, 10, 8, 0, 1, 0, 0, 0, 0, '1'),
(3, 'cuchillo', '4', '1d3+1', 0, 0, 0, 15, 4, 3, 0, 20, 10, 10, 1, 0, 0, 0, 0, '1'),
(4, 'daga', '2', '1d4+2', 0, 0, 0, 15, 6, 3, 0, 60, 35, 33, 1, 1, 0, 0, 0, '1'),
(5, 'daga', '4', '1d4+2', 0, 0, 0, 15, 8, 3, 0, 0, 100, 65, 1, 2, 0, 0, 0, '1'),
(6, 'daga guarda', '2', '1d4+2', 0, 9, 0, 10, 10, 3, 0, 120, 60, 55, 1, 3, 0, 0, 0, '1'),
(7, 'daga guarda', '4', '1d4+2', 0, 9, 0, 10, 14, 3, 0, 0, 200, 110, 1, 6, 0, 0, 0, '1'),
(8, 'daga larga', '2', '1d6+1', 0, 0, 1, 15, 7, 3, 0, 200, 100, 50, 1, 1, 0, 0, 0, '1'),
(9, 'daga larga', '4', '1d6+1', 0, 0, 1, 15, 9, 3, 0, 0, 200, 100, 1, 2, 0, 0, 0, '1'),
(10, 'navajón', '2', '1d4+3', 0, 11, 1, 10, 8, 3, 0, 260, 130, 120, 1, 2, 0, 0, 0, '1'),
(11, 'navajón', '4', '1d4+3', 0, 11, 1, 10, 11, 3, 0, 0, 480, 240, 1, 4, 0, 0, 0, '1'),
(12, 'puñal', '2', '1d2+3', 0, 0, 0, 15, 2, 3, 0, 20, 10, 10, 1, 0, 0, 0, 0, '1'),
(13, 'puñal', '4', '1d2+3', 0, 0, 0, 15, 3, 3, 0, 40, 25, 20, 1, 1, 0, 0, 0, '1'),
(14, 'sai', '2', '1d6', 0, 11, 1, 5, 10, 2, 0, 200, 100, 60, 1, 4, 0, 0, 0, '1'),
(15, 'sai', '4', '1d6', 0, 11, 1, 5, 14, 2, 0, 0, 240, 120, 1, 8, 0, 0, 0, '1'),
(16, 'cuadrado', '16', '1d4', 0, 0, 1, 10, 4, 3, 30, 20, 0, 0, 1, 2, 0, 0, 0, '2'),
(17, 'cuadrado', '12', '1d4', 0, 0, 1, 10, 5, 3, 45, 25, 0, 0, 1, 2, 0, 0, 0, '2'),
(18, 'cuadrado', '2', '1d4+1', 7, 0, 2, 10, 8, 3, 175, 100, 80, 65, 1, 4, 0, 0, 0, '2'),
(19, 'cuadrado', '4', '1d4+1', 7, 0, 2, 10, 10, 3, 0, 200, 125, 90, 1, 4, 0, 0, 0, '2'),
(20, 'cometa', '2', '1d6', 11, 0, 5, 15, 12, 3, 0, 200, 110, 90, 1, 7, 0, 0, 0, '2');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_tipo`
--

CREATE TABLE `material_tipo` (
  `id` int(11) NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `material_tipo`
--

INSERT INTO `material_tipo` (`id`, `material`) VALUES
(1, 'aluminio'),
(2, 'bronce'),
(3, 'cobre'),
(4, 'hierro'),
(5, 'oro'),
(6, 'plomo'),
(7, 'mercurio'),
(8, 'plata'),
(9, 'estaño'),
(10, 'piedra'),
(11, 'coral'),
(12, 'madera'),
(13, 'compuesto c/ hueso'),
(14, 'compuesto c/ metal'),
(15, 'piedra'),
(16, 'cuero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20181122022436'),
('20181124032257');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_arma`
--

CREATE TABLE `tipo_arma` (
  `id` int(11) NOT NULL,
  `nombre_tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_arma`
--

INSERT INTO `tipo_arma` (`id`, `nombre_tipo`) VALUES
(1, 'daga'),
(2, 'escudo'),
(3, 'espada'),
(4, 'hacha'),
(5, 'lanza'),
(6, 'martillo'),
(7, 'maza'),
(8, 'puños'),
(9, 'arrojadizas'),
(10, 'proyectiles');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arma`
--
ALTER TABLE `arma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `culturas`
--
ALTER TABLE `culturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `material_tipo`
--
ALTER TABLE `material_tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `tipo_arma`
--
ALTER TABLE `tipo_arma`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arma`
--
ALTER TABLE `arma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `culturas`
--
ALTER TABLE `culturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `material_tipo`
--
ALTER TABLE `material_tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tipo_arma`
--
ALTER TABLE `tipo_arma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
