-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2024 a las 11:12:20
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nif` varchar(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nif`, `nombre`, `edad`, `usuario`, `pass`) VALUES
('11111111E', 'Andrés', 28, 'andres', 'andres'),
('22222222D', 'Julia', 31, 'julia', 'julia'),
('33333333V', 'Alejandro', 27, 'alex', 'alex'),
('44444444Z', 'Iria', 35, 'iria', 'iria'),
('55555555U', 'Paula', 29, 'paula', 'paula'),
('66666666K', 'Rogelio', 35, 'roge', 'roge'),
('77777777X', 'Héctor', 25, 'hector', 'hector'),
('88888888F', 'Luis', 25, 'luis', 'luis'),
('99999999R', 'Carmen', 25, 'carmen', 'carmen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod`, `descripcion`, `precio`) VALUES
(1, 'Chocolate', 0.25),
(2, 'Azúcar', 1.50),
(3, 'Harina', 1.25),
(4, 'Colorante', 1.50),
(5, 'Molde 1', 15.25),
(6, 'Obleas', 0.35),
(7, 'Levadura', 0.75),
(8, 'Molde 2', 13.50),
(9, 'Sacarina', 1.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `cliente` varchar(10) DEFAULT NULL,
  `producto` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cantidad` decimal(10,2) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`cliente`, `producto`, `fecha`, `cantidad`, `estado`) VALUES
('11111111E', 1, '2023-04-20', 0.20, 'p'),
('11111111E', 1, '2023-04-22', 1.20, 'p'),
('11111111E', 1, '2023-04-26', 2.00, NULL),
('11111111E', 2, '2023-04-24', 1.00, NULL),
('11111111E', 3, '2023-04-24', 5.00, NULL),
('11111111E', 4, '2023-04-24', 0.25, NULL),
('11111111E', 5, '2023-04-25', 1.00, 'p'),
('11111111E', 6, '2023-04-21', 12.00, 'p'),
('11111111E', 8, '2023-04-22', 2.00, NULL),
('22222222D', 2, '2023-04-23', 1.00, 'p'),
('22222222D', 3, '2023-04-23', 1.00, 'p'),
('22222222D', 5, '2023-04-21', 1.00, 'p'),
('22222222D', 6, '2023-04-25', 21.00, 'p'),
('22222222D', 7, '2023-04-22', 0.15, 'p'),
('33333333V', 1, '2023-04-27', 1.30, 'p'),
('33333333V', 2, '2023-04-24', 2.00, NULL),
('33333333V', 3, '2023-04-25', 2.00, 'p'),
('33333333V', 2, '2023-04-24', 1.00, NULL),
('33333333V', 4, '2023-04-24', 0.25, 'p'),
('33333333V', 6, '2023-04-21', 10.00, NULL),
('33333333V', 6, '2023-04-23', 10.00, NULL),
('33333333V', 6, '2023-04-26', 19.00, 'p'),
('33333333V', 7, '2023-04-26', 0.55, 'p'),
('44444444Z', 2, '2023-04-21', 1.00, 'p'),
('44444444Z', 2, '2023-04-22', 1.00, 'p');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`nif`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD KEY `cliente` (`cliente`),
  ADD KEY `venta_prod` (`producto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`nif`),
  ADD CONSTRAINT `venta_prod` FOREIGN KEY (`producto`) REFERENCES `producto` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
