-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2022 a las 20:08:12
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kawak`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_documento`
--

CREATE TABLE `doc_documento` (
  `doc_id` int(11) NOT NULL,
  `doc_nombre` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `doc_codigo` int(11) NOT NULL,
  `doc_contenido` varchar(4000) COLLATE latin1_spanish_ci NOT NULL,
  `doc_id_tipo` int(11) NOT NULL,
  `doc_id_proceso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `doc_documento`
--

INSERT INTO `doc_documento` (`doc_id`, `doc_nombre`, `doc_codigo`, `doc_contenido`, `doc_id_tipo`, `doc_id_proceso`) VALUES
(1, 'INSTRUTIVO DE DESARROLLO', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1, 1),
(3, 'educativo', 3, 'contido educativo', 3, 3),
(6, 'Dougla', 3456701, 'ins mark', 1, 3),
(7, 'leo', 3456, 'tipo 3 proceso 5', 3, 5),
(9, 'Anita Roses', 12345968, '5 ventas educativo', 5, 4),
(10, 'arturo calle', 23435, 'Lorem ipsum es el texto que se usa habitualmente en diseÃ±o grÃ¡fico en demostraciones de tipografÃ­as o de borradores de diseÃ±o para probar el diseÃ±o visual antes de insertar el texto final', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_proceso`
--

CREATE TABLE `pro_proceso` (
  `pro_id` int(11) NOT NULL,
  `pro_prefijo` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `pro_nombre` varchar(60) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pro_proceso`
--

INSERT INTO `pro_proceso` (`pro_id`, `pro_prefijo`, `pro_nombre`) VALUES
(1, 'ING', 'Ingenieria'),
(2, 'DES', 'Desarrollo'),
(3, 'MAR', 'Marketing'),
(4, 'VEN', 'Ventas'),
(5, 'SAL', 'Salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_tipo_doc`
--

CREATE TABLE `tip_tipo_doc` (
  `tip_id` int(11) NOT NULL,
  `tip_nombre` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `tip_prefijo` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tip_tipo_doc`
--

INSERT INTO `tip_tipo_doc` (`tip_id`, `tip_nombre`, `tip_prefijo`) VALUES
(1, 'Instructivo', 'INS'),
(2, 'Ilustrativo', 'ILU'),
(3, 'Explicativo', 'EXP'),
(4, 'Formativo', 'FOR'),
(5, 'Educativo', 'EDU');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doc_documento`
--
ALTER TABLE `doc_documento`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indices de la tabla `pro_proceso`
--
ALTER TABLE `pro_proceso`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indices de la tabla `tip_tipo_doc`
--
ALTER TABLE `tip_tipo_doc`
  ADD PRIMARY KEY (`tip_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `doc_documento`
--
ALTER TABLE `doc_documento`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pro_proceso`
--
ALTER TABLE `pro_proceso`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tip_tipo_doc`
--
ALTER TABLE `tip_tipo_doc`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
