-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2024 a las 20:43:08
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `forga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnado`
--

CREATE TABLE `alumnado` (
  `id` int(11) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Fecha_atencion` date NOT NULL,
  `Asistencia` varchar(10) NOT NULL,
  `Info_asistencia` varchar(20) NOT NULL,
  `Info_ausencia` varchar(20) NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Prestacion` varchar(30) NOT NULL,
  `Nivel_estudios` varchar(30) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Carnet` varchar(50) NOT NULL,
  `Vehiculo` varchar(10) NOT NULL,
  `Tipo_entrevista` varchar(10) NOT NULL,
  `Tipo_atencion` varchar(10) NOT NULL,
  `Situacion` varchar(20) NOT NULL,
  `Ocupado` varchar(10) NOT NULL,
  `Discapacidad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `info_1` varchar(100) NOT NULL,
  `info_2` varchar(100) NOT NULL,
  `info_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `mes`, `info_1`, `info_2`, `info_3`) VALUES
(1, 'abril', '56', '111', '239'),
(2, 'mayo', '29', '50', '70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnado`
--
ALTER TABLE `alumnado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnado`
--
ALTER TABLE `alumnado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
