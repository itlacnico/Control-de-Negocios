-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2013 a las 20:13:14
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `timsalzc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `actividad`) VALUES
(1, 'Libre'),
(2, 'Ocupado'),
(3, 'Preparado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_flete`
--

CREATE TABLE IF NOT EXISTS `actividades_flete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE IF NOT EXISTS `agencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `statusA` tinyint(1) NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`id`, `nombre`, `fecha_ingreso`, `statusA`, `fecha_salida`, `imagen`) VALUES
(1, 'Maersk', '2008-01-01', 1, NULL, 'user.jpg'),
(2, 'Novell', '2008-01-01', 1, NULL, 'user.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(550) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `fecha_ingreso`, `statusA`, `fecha_salida`, `imagen`, `description`) VALUES
(1, 'Nissan', '2008-01-01', 1, NULL, 'user.jpg', 'Este es un cliente de prueba.\r\nCualquier parecido con la vida real es pura coincidencia.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenedor`
--

CREATE TABLE IF NOT EXISTS `contenedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota`
--

CREATE TABLE IF NOT EXISTS `cuota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  `reutilizadoSencillo` decimal(10,2) NOT NULL,
  `reutilizadoFull` decimal(10,2) NOT NULL,
  `importacionSencillo` decimal(10,2) NOT NULL,
  `importacionFull` decimal(10,2) NOT NULL,
  `exportacionSencillo` decimal(10,2) NOT NULL,
  `exportacionFull` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `cuota`
--

INSERT INTO `cuota` (`id`, `nombre`, `statusA`, `reutilizadoSencillo`, `reutilizadoFull`, `importacionSencillo`, `importacionFull`, `exportacionSencillo`, `exportacionFull`) VALUES
(1, 'Mexico 2012', 1, 20000.00, 21000.00, 22000.00, 23000.00, 24000.00, 25000.00),
(2, 'Jalisco 2012', 1, 7410.00, 7501.00, 7630.00, 7720.00, 7850.00, 7950.00),
(3, 'Rojo te ves bien', 1, 654.00, 654.00, 5465.00, 654.00, 65456.00, 654.00),
(4, 'Mexico para novel', 1, 65465.00, 65456.00, 65456.00, 65456.00, 65465.00, 65456.00),
(5, 'mexico para novell', 1, 65456.00, 56456.00, 65456.00, 65456.00, 65456.00, 654564.00),
(6, 'de rojo te ves bien', 1, 65456.00, 65456.00, 4564.00, 65456.00, 65456.00, 65456.00),
(7, 'sdf', 1, 456.00, 65456.00, 45.00, 65465.00, 5445.00, 65465.00),
(8, 'fgdfgf', 1, 544565.00, 654.00, 54568.00, 65456.00, 465.00, 654.00),
(9, 'lkajsdfl|', 1, 65456.00, 65456.00, 4654.00, 6546.00, 564564.00, 654654.00),
(10, 'dasd', 1, 654564.00, 54564.00, 4564.00, 654564.00, 56145.00, 654564.00),
(11, 'Cuota 1', 1, 6545.00, 65456.00, 5456.00, 65456.00, 65456.00, 4564.00),
(12, 'sdfg', 1, 456.00, 456.00, 5456.00, 456.00, 456.00, 456.00),
(13, 'Queretaro 2013', 1, 484.00, 1249.00, 456.00, 45.00, 45879.00, 4587.00),
(14, 'gfdg', 1, 4545.00, 45.00, 654.00, 45647894.00, 45.00, 45.40),
(15, 'dfgd', 1, 48945.00, 561.00, 4563.00, 56456.00, 654.00, 65456.20),
(16, 'fdhgfh', 1, 4456.00, 45646.00, 46.00, 457.00, 45455.00, 4566.45),
(17, 'rdfgh', 1, 65456.00, 41.00, 465.00, 65465.00, 846.00, 1313.24),
(18, 'fcghfg', 1, 4564.45, 45654.00, 456.46, 456.00, 4564.46, 45645.46),
(19, 'fcghfg', 1, 4564.45, 45654.00, 456.46, 456.00, 4564.46, 45645.46),
(20, 'Queretaro', 1, 654.00, 64.00, 5.00, 654.00, 45.00, 654.00),
(21, 'Cuota de prueba', 1, 65465.00, 6545.00, 65456.00, 65456.00, 654165.00, 65456.00),
(22, 'fgsdgdsf', 1, 654.00, 654.00, 9546.00, 654.00, 6546.00, 654.00),
(23, 'sdgdfsg', 1, 654.00, 654.00, 4654.00, 654.00, 65465.00, 654.00),
(24, 'hola', 1, 65465.00, 654.00, 65456.00, 64.00, 65465.00, 654.00),
(25, 'ghkhk', 1, 654.00, 564.00, 515.00, 654.00, 654.00, 654.00),
(26, 'Mexico 2014', 1, 654.00, 654.00, 48466.00, 654.00, 65465.00, 654.00),
(27, 'Jalisco 2013', 1, 654.00, 654.00, 465.00, 654.00, 654.00, 654.00),
(28, 'fghgfh', 1, 45.00, 45.00, 45.00, 45.00, 454.00, 45.00),
(29, 'fghf', 1, 64.00, 654.00, 45.00, 654.00, 654.00, 654.00),
(30, 'sadf', 1, 654.00, 654.00, 541465.00, 654.00, 654.00, 654.00),
(31, 'ghf', 1, 654.00, 654.00, 854.00, 654.00, 89486.00, 654.00),
(32, 'sdfg', 1, 456.00, 456.00, 456.00, 456.00, 456.00, 456.00),
(33, 'sdfg', 1, 456.00, 456.00, 456.00, 456.00, 456.00, 456.00),
(34, 'sdfg', 1, 456.00, 456.00, 456.00, 456.00, 456.00, 456.00),
(35, 'asdfsadf', 1, 654.00, 654.00, 4659.00, 654.00, 6546.00, 654.00),
(36, 'Queretaro 2013', 1, 6514.00, 654.00, 5456.00, 654.00, 654.00, 654.00),
(37, 'Mexico 203', 1, 654.00, 654.00, 65456.00, 654.00, 6545.00, 654.00),
(38, '756', 1, 654.00, 654.00, 45.00, 654.00, 65465.00, 654.00),
(39, 'Cuota para mexico novell', 1, 654.00, 654.00, 74654.00, 654.00, 654.00, 654.00),
(40, 'Cuota para mexico segun novell', 1, 654.00, 654.00, 78654.00, 654.00, 654.00, 654.00),
(41, 'Cuota para mexico segun novell', 1, 654.00, 654.00, 78654.00, 654.00, 654.00, 654.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `economico`
--

CREATE TABLE IF NOT EXISTS `economico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `placas` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `numero_serie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transponder` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_vehiculo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_659DDCD88DF2BD06` (`actividad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Volcado de datos para la tabla `economico`
--

INSERT INTO `economico` (`id`, `actividad`, `numero`, `placas`, `statusA`, `fecha_ingreso`, `fecha_salida`, `numero_serie`, `modelo`, `transponder`, `marca`, `imagen`, `tipo_vehiculo`) VALUES
(1, 2, 83, '948EJ6', 1, '2013-11-06', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(2, 1, 81, '059EJ1', 1, '2013-11-23', NULL, NULL, '2014', 'Freigtliner', NULL, 'user.jpg', NULL),
(3, 1, 16, '826EJ6', 1, '2013-11-23', NULL, NULL, '2014', NULL, 'Freigtliner', 'user.jpg', NULL),
(4, 1, 1, '768EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(5, 1, 86, '807EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(6, 1, 8, '092EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(7, 2, 84, '945EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(8, 1, 89, '834EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(9, 1, 82, '040EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(10, 1, 87, '808EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(11, 1, 9, '058EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(12, 1, 85, '947EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(13, 1, 83, '948EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(14, 1, 88, '816EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(15, 1, 110, '859EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(16, 1, 111, '100EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(17, 1, 11, '882EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(18, 1, 113, '711EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(19, 1, 13, '885EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(20, 1, 94, '653EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(21, 1, 17, '885EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(22, 1, 14, '822EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(23, 1, 95, '080EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(24, 1, 46, '567EH8', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(25, 1, 22, '867EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(26, 1, 23, '820EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(27, 1, 44, '706CD1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(28, 1, 54, '112EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(29, 1, 57, '935EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(30, 1, 136, '838EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(31, 1, 58, '819EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(32, 1, 56, '782EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(33, 1, 55, '899EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(34, 1, 59, '708EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(35, 1, 104, '079EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(36, 1, 100, '846EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(37, 1, 105, '842EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(38, 1, 103, '869EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(39, 1, 112, '845EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(40, 1, 120, '674EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(41, 1, 121, '404EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(42, 1, 126, '536DS6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(43, 1, 135, '419EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(44, 1, 137, '677EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(45, 1, 147, '594EH8', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(46, 1, 145, '929EJ6', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(47, 1, 146, '099EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(48, 1, 150, '073EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(49, 1, 148, '806EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(50, 1, 153, '796EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(51, 1, 149, '856EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(52, 1, 151, '019EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(53, 1, 157, '713EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(54, 1, 158, '873EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(55, 1, 154, '832EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(56, 1, 155, '837EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(57, 1, 164, '565EH8', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(58, 1, 162, '011EA7', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(59, 1, 160, '895EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(60, 1, 159, '102EJ1', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(61, 1, 163, '555EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(62, 1, 161, '412EH9', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL),
(63, 1, 37, 'GX49215', 1, '2013-11-23', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flete`
--

CREATE TABLE IF NOT EXISTS `flete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` int(11) DEFAULT NULL,
  `relacion_id` int(11) DEFAULT NULL,
  `agencia_id` int(11) DEFAULT NULL,
  `flete_padre_id` int(11) DEFAULT NULL,
  `flete_hijo_id` int(11) DEFAULT NULL,
  `sucursal` int(11) DEFAULT NULL,
  `cuota` int(11) DEFAULT NULL,
  `tipo_viaje` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  `comentarios` varchar(700) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_llegada` date DEFAULT NULL,
  `fecha_facturacion` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_99371DA58DF2BD06` (`actividad`),
  KEY `IDX_99371DA5902F331B` (`relacion_id`),
  KEY `IDX_99371DA5A6F796BE` (`agencia_id`),
  KEY `IDX_99371DA551DC9636` (`flete_padre_id`),
  KEY `IDX_99371DA5768C901A` (`flete_hijo_id`),
  KEY `IDX_99371DA5E99C6D56` (`sucursal`),
  KEY `IDX_99371DA5763CCB0F` (`cuota`),
  KEY `IDX_99371DA51BFD77DE` (`tipo_viaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_group`
--

CREATE TABLE IF NOT EXISTS `fos_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4B019DDB5E237E06` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `fos_group`
--

INSERT INTO `fos_group` (`id`, `name`, `roles`) VALUES
(1, 'admin', 'a:1:{i:0;s:10:"ROLE_ADMIN";} ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fos_user_user_group`
--

INSERT INTO `fos_user_user_group` (`user_id`, `group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE IF NOT EXISTS `operador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CURP` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  `fecha_deprecated` date DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CB8004F18DF2BD06` (`actividad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Volcado de datos para la tabla `operador`
--

INSERT INTO `operador` (`id`, `actividad`, `nombre`, `RC`, `CURP`, `fecha_ingreso`, `statusA`, `fecha_deprecated`, `telefono`, `imagen`) VALUES
(1, 1, 'SANTIAGO PALOMINOS', NULL, NULL, '2013-11-06', 1, NULL, NULL, 'user.jpg'),
(2, 1, 'SEBASTIAN GONZALEZ ORTEGA', NULL, NULL, '2013-11-20', 1, NULL, '7531059293', 'user.jpg'),
(3, 1, 'AGUSTIN RIEBLING', NULL, NULL, '2013-11-20', 1, NULL, '7531103834', 'user.jpg'),
(4, 1, 'RAMON LEON', NULL, NULL, '2013-11-20', 1, NULL, '7531364080', 'user.jpg'),
(5, 1, 'RIGOBERTO ARREGUIN', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(6, 1, 'ESAU GUIDO DIAZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(7, 1, 'JUAN HERNANDEZ FLORES', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(8, 1, 'FEDERICO', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(9, 1, 'JAIRO ALBERTO VAZQUEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(10, 1, 'LUIS ALBERTO MARTINEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(11, 1, 'GABRIEL VALENTE', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(12, 1, 'ARMANDO VARGAS QUINTERO', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(13, 1, 'MARCO ANTONIO', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(14, 1, 'MIGUEL ANGEL SOLIS', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(15, 1, 'JOEL HERNANDEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(16, 1, 'ARCELIO HERNANDEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(17, 1, 'JOSE LUIS ARENASAS', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(18, 1, 'LUIS ANGEL RODRIGUEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(19, 1, 'ALBINO VARGAS CAZARES', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(20, 1, 'JOSE MARTIN ARENASAS', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(21, 1, 'JOSE BENJAMIN VERA', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(22, 1, 'ALFONSO RAMIREZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(23, 1, 'IVAN CORTES', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(25, 1, 'SALVADOR DIAZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(26, 1, 'ROBERTO RAMIREZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(27, 1, 'LUIS LORENZO', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(28, 1, 'FERNANDO RODRIGUEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(29, 1, 'JESUS MONDRAGON', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(30, 1, 'ALBERTO JIMENEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(31, 1, 'ROBERTO SOLIS', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(32, 1, 'FRANCISCO ADAME V.', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(33, 1, 'SALVADOR SALGADO PARRA', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(34, 1, 'EFRAIN CAMPOS LUNA', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(35, 1, 'DANIEL H. SOLIS', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(36, 1, 'DOROTEO ONOFRE', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(37, 1, 'ARMANDO JIMENEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(38, 1, 'FRANCISCO JAVIER CHAVEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(39, 1, 'FRANCISCO JAVIER REA', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(40, 1, 'FRANCISCO JAVIER OJENDIZ D.', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(41, 1, 'JOSE ANTONIO RUIZ MEDINA', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(42, 1, 'ABEL PADILLA SILVA', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(43, 1, 'JUAN RAMIREZ FLORES', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(44, 1, 'FERNANDO QUINTERO Q.', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(45, 1, 'JESUS CHAVEZ CASTREJON', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(46, 1, 'NESTOR GARCIA JAIMES', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(47, 1, 'MIGUEL RUIZ LOPEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(48, 1, 'FERNANDO SOTO ALCAZAR', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(49, 1, 'FELIPE VELAZQUEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(50, 1, 'ENRIQUE RAMIREZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(51, 1, 'RIGOBERTO PALACIOS', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(52, 1, 'MANUEL LOPEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(53, 1, 'SILVESTRE LOPEZ', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(54, 1, 'ARMANDO ROJAS', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(55, 1, 'FERNANDO SOTO', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(56, 1, 'JORGE EDUARDO CASTILLO', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(57, 1, 'JULIO CESAR CARVAJAL', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(58, 1, 'CIRENIO NAMBO BUSTAMANTE', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(59, 1, 'JOSE MATILDE QUINTERO', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg'),
(60, 1, 'JOSUE GARCIA CASTRO', NULL, NULL, '2013-11-20', 1, NULL, NULL, 'user.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE IF NOT EXISTS `relacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operador_id` int(11) DEFAULT NULL,
  `economico_id` int(11) DEFAULT NULL,
  `socio_id` int(11) DEFAULT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  `prioridad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_56314A395B939A38` (`operador_id`),
  KEY `IDX_56314A395ED91FCF` (`economico_id`),
  KEY `IDX_56314A39DA04E6A9` (`socio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Volcado de datos para la tabla `relacion`
--

INSERT INTO `relacion` (`id`, `operador_id`, `economico_id`, `socio_id`, `statusA`, `prioridad`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 22, 2, 1, 1, 1),
(3, 8, 3, 2, 1, 1),
(4, 2, 4, 3, 1, 1),
(5, 27, 5, 1, 1, 1),
(6, 2, 6, 1, 1, 1),
(7, 25, 7, 1, 1, 1),
(8, 30, 8, 1, 1, 1),
(9, 23, 9, 1, 1, 1),
(10, 28, 10, 1, 1, 1),
(11, 4, 8, 1, 1, 1),
(12, 26, 12, 1, 1, 1),
(14, 29, 14, 1, 1, 1),
(15, 37, 15, 4, 1, 1),
(16, 38, 16, 4, 1, 1),
(17, 5, 17, 4, 1, 1),
(18, 39, 18, 4, 1, 1),
(19, 6, 19, 2, 1, 1),
(20, 31, 20, 2, 1, 1),
(21, 9, 21, 2, 1, 1),
(22, 7, 22, 2, 1, 1),
(23, 32, 23, 2, 1, 1),
(24, 14, 24, 2, 1, 1),
(25, 10, 25, 5, 1, 1),
(26, 11, 26, 5, 1, 1),
(27, 13, 27, 6, 1, 1),
(28, 16, 28, 7, 1, 1),
(29, 19, 29, 8, 1, 1),
(30, 17, 30, 8, 1, 1),
(31, 20, 31, 8, 1, 1),
(32, 20, 32, 8, 1, 1),
(33, 17, 33, 8, 1, 1),
(34, 21, 34, 8, 1, 1),
(35, 35, 35, 9, 1, 1),
(36, 33, 36, 9, 1, 1),
(37, 36, 37, 9, 1, 1),
(38, 34, 38, 9, 1, 1),
(39, 39, 39, 10, 1, 1),
(40, 40, 40, 11, 1, 1),
(41, 41, 41, 11, 1, 1),
(42, 42, 42, 12, 1, 1),
(43, 42, 43, 13, 1, 1),
(44, 44, 44, 14, 1, 1),
(45, 47, 45, 15, 1, 1),
(46, 45, 46, 15, 1, 1),
(47, 46, 47, 15, 1, 1),
(48, 50, 48, 16, 1, 1),
(49, 48, 49, 16, 1, 1),
(50, 53, 50, 16, 1, 1),
(51, 49, 51, 16, 1, 1),
(52, 49, 52, 17, 1, 1),
(53, 56, 53, 17, 1, 1),
(54, 57, 54, 17, 1, 1),
(55, 54, 55, 18, 1, 1),
(56, 48, 56, 18, 1, 1),
(57, 12, 57, 19, 1, 1),
(58, 60, 58, 19, 1, 1),
(59, 59, 59, 20, 1, 1),
(60, 58, 60, 20, 1, 1),
(61, 59, 61, 20, 1, 1),
(62, 58, 62, 20, 1, 1),
(63, 12, 63, 20, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sello`
--

CREATE TABLE IF NOT EXISTS `sello` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workorder_id` int(11) DEFAULT NULL,
  `sello` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_sello` int(11) NOT NULL,
  `fecha_sellado` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_212000152C1C3467` (`workorder_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE IF NOT EXISTS `socio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actividad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_deprecated` date DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`id`, `nombre`, `telefono`, `actividad`, `statusA`, `fecha_ingreso`, `fecha_deprecated`, `imagen`) VALUES
(1, 'MARIANO ORTEGA SANCHEZ', NULL, 'Activo', 1, '2013-11-06', NULL, 'user2.png'),
(2, 'AUTOTRANSPORTES ITC SA DE CV', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(3, 'CONSTRUCTORA SUR DE MICHOACAN SA DE CV', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(4, 'ROBERTO MEDINA RINCON', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(5, 'JOSE ANTONIO VILLA MIRANDA', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(6, 'SUSANA LETICIA RODRIGUEZ MORAN', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(7, 'CELIA MARLINA GARIBO HERNANDEZ', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(8, 'VICTOR IVAN ZAVALA AGUILERA', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(9, 'MARIA ELENA VARGAS CAMPOS', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(10, 'MIRIAM ANAHI SALAZAR GARCIA', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(11, 'ESQUIVEL CONTENEDORES SA DE CV', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(12, 'TRANSLOBO SA de CV', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(13, 'J NATIVIDAD RAUL HEREDIA FLORES', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(14, 'JUAN MANUEL SOSA SAVEDRA', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(15, 'ESTEBAN MENDEZ VELAZQUEZ', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(16, 'BLANCA ESTELA GARCIA DELGADILLO', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(17, 'ALBINO SOLIS TORRES', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(18, 'MARCO ANTONIO CAMPOS VEGA', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(19, 'EVA PATRICIA ROSAS GUZMAN', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png'),
(20, 'MARIA ERENDIRA GUZMAN GOMEZ', NULL, 'Activo', 1, '2013-11-23', NULL, 'user2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE IF NOT EXISTS `sucursal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `calle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `colonia` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localidad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_deprecated` date DEFAULT NULL,
  `lat` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lon` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E99C6D56DE734E51` (`cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `cliente_id`, `nombre`, `email`, `calle`, `numero`, `colonia`, `localidad`, `ciudad`, `estado`, `telefono`, `statusA`, `fecha_ingreso`, `fecha_deprecated`, `lat`, `lon`) VALUES
(1, 1, 'Sucursal de Prueba', 'timsa@timsalzc.com', 'Valenciana', '44', 'asdf', 'asf', 'fds', 'asdf', '75450125', 1, '2013-11-08', NULL, '21.90227796666864', '-101.4697265625');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE IF NOT EXISTS `tarifa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`id`, `nombre`, `statusA`) VALUES
(1, 'Mexico', 1),
(2, 'Jalisco', 1),
(3, 'Queretaro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa_agencia`
--

CREATE TABLE IF NOT EXISTS `tarifa_agencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarifa_id` int(11) DEFAULT NULL,
  `agencia_id` int(11) DEFAULT NULL,
  `cuota_id` int(11) DEFAULT NULL,
  `statusA` tinyint(1) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `clasificacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7F1205C9FE3B76B` (`tarifa_id`),
  KEY `IDX_7F1205C9A6F796BE` (`agencia_id`),
  KEY `IDX_7F1205C96A7CF079` (`cuota_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- Volcado de datos para la tabla `tarifa_agencia`
--

INSERT INTO `tarifa_agencia` (`id`, `tarifa_id`, `agencia_id`, `cuota_id`, `statusA`, `fecha_ingreso`, `fecha_salida`, `clasificacion`) VALUES
(1, 1, 1, 1, 0, '2013-11-06', NULL, '2012'),
(2, 2, 1, 2, 0, '2013-11-08', NULL, '2013'),
(3, 3, 1, 2, 0, '2013-11-08', NULL, '2012'),
(4, 1, 1, 3, 0, '2013-11-14', NULL, '2012'),
(8, 1, 2, 7, 0, '2013-11-14', NULL, '2012'),
(9, 1, 2, 8, 0, '2013-11-14', NULL, '2012'),
(10, 3, 2, 9, 1, '2013-11-14', NULL, '2013'),
(11, 1, 2, 10, 1, '2013-11-14', NULL, '2014'),
(12, 1, 2, 11, 1, '2013-11-14', NULL, '2013'),
(13, 1, 2, 12, 1, '2013-11-14', NULL, '2013'),
(14, 3, 2, 13, 1, '2013-11-14', NULL, '2015'),
(15, 1, 2, 14, 0, '2013-11-14', NULL, '2015'),
(16, 2, 2, 15, 1, '2013-11-14', NULL, '2015'),
(17, 1, 2, 16, 0, '2013-11-14', NULL, '2015'),
(18, 1, 2, 17, 0, '2013-11-14', NULL, '2015'),
(19, 1, 2, 18, 0, '2013-11-14', NULL, '2015'),
(20, 1, 2, 19, 0, '2013-11-14', NULL, '2015'),
(21, 1, 2, 20, 0, '2013-11-14', NULL, '2015'),
(22, 3, 2, 21, 1, '2013-11-14', NULL, '2015'),
(23, 1, 2, 22, 0, '2013-11-14', NULL, '2015'),
(24, 1, 2, 23, 0, '2013-11-14', NULL, '2015'),
(25, 1, 2, 24, 0, '2013-11-14', NULL, '2015'),
(26, 1, 2, 25, 0, '2013-11-14', NULL, '2015'),
(27, 1, 2, 26, 1, '2013-11-15', NULL, '2013'),
(28, 2, 2, 27, 0, '2013-11-15', NULL, '2018'),
(29, 1, 2, 28, 0, '2013-11-15', NULL, '2018'),
(30, 3, 2, 29, 0, '2013-11-15', NULL, '2018'),
(31, 1, 2, 30, 0, '2013-11-15', NULL, '2018'),
(32, 2, 2, 31, 0, '2013-11-15', NULL, '2018'),
(33, 3, 2, 32, 0, '2013-11-15', NULL, '2018'),
(34, 1, 2, 33, 0, '2013-11-15', NULL, '2018'),
(35, 1, 2, 34, 0, '2013-11-15', NULL, '2018'),
(36, 1, 2, 35, 1, '2013-11-15', NULL, '2102'),
(37, 3, 2, 36, 1, '2013-11-15', NULL, '2102'),
(38, 1, 1, 37, 0, '2013-11-15', NULL, '2013'),
(39, 1, 1, 2, 0, '2013-11-15', NULL, '2012'),
(40, 1, 1, 3, 0, '2013-11-15', NULL, '2013'),
(41, 1, 1, 4, 0, '2013-11-15', NULL, '2013'),
(42, 1, 1, 38, 0, '2013-11-15', NULL, '2013'),
(43, 1, 1, 2, 0, '2013-11-15', NULL, '2013'),
(44, 2, 1, 3, 0, '2013-11-15', NULL, '2012'),
(45, 1, 1, 2, 0, '2013-11-16', NULL, '2012'),
(46, 1, 2, 20, 1, '2013-11-16', NULL, '2018'),
(47, 2, 2, 2, 1, '2013-11-16', NULL, '2018'),
(48, 3, 2, 20, 1, '2013-11-16', NULL, '2018'),
(49, 1, 2, 39, 0, '2013-11-16', NULL, '2015'),
(50, 1, 2, 40, 1, '2013-11-16', NULL, '2015'),
(51, 1, 2, 41, 1, '2013-11-16', NULL, '2012'),
(52, 1, 1, 3, 0, '2013-11-16', NULL, '2012'),
(53, 1, 1, 3, 0, '2013-11-16', NULL, '2012'),
(54, 1, 1, 4, 0, '2013-11-16', NULL, '2012'),
(55, 1, 1, 2, 0, '2013-11-16', NULL, '2012'),
(56, 2, 1, 1, 1, '2013-11-16', NULL, '2012'),
(57, 3, 1, 3, 1, '2013-11-16', NULL, '2012');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa_sucursal`
--

CREATE TABLE IF NOT EXISTS `tarifa_sucursal` (
  `sucursal_id` int(11) NOT NULL,
  `tarifa_id` int(11) NOT NULL,
  PRIMARY KEY (`sucursal_id`,`tarifa_id`),
  KEY `IDX_8263428C279A5D5E` (`sucursal_id`),
  KEY `IDX_8263428CFE3B76B` (`tarifa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tarifa_sucursal`
--

INSERT INTO `tarifa_sucursal` (`sucursal_id`, `tarifa_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timsa_users`
--

CREATE TABLE IF NOT EXISTS `timsa_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_85C5E02092FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_85C5E020A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `timsa_users`
--

INSERT INTO `timsa_users` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin', 'admin', 'rmoctezumap@gmail.com', 'rmoctezumap@gmail.com', 1, 'c0e96f8ca0d7dba43b5b18cb7249e228', 'p+UnyX/2F6ZgRaDaTfdivlSBLtK6hJFwuZMyI+rNY6yTIwxc+UJb8D6hBq6U58vseHER/RuowUtNZcMp4URSow==', '2013-11-23 18:18:52', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_viaje`
--

CREATE TABLE IF NOT EXISTS `tipo_viaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `viaje` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `trafico` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workorder`
--

CREATE TABLE IF NOT EXISTS `workorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenedor_id` int(11) DEFAULT NULL,
  `flete_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `workorder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_51CF52BBC1A15772` (`contenedor_id`),
  KEY `IDX_51CF52BBFE239331` (`flete_id`),
  KEY `IDX_51CF52BB3301C60` (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `economico`
--
ALTER TABLE `economico`
  ADD CONSTRAINT `FK_659DDCD88DF2BD06` FOREIGN KEY (`actividad`) REFERENCES `actividades` (`id`);

--
-- Filtros para la tabla `flete`
--
ALTER TABLE `flete`
  ADD CONSTRAINT `FK_99371DA51BFD77DE` FOREIGN KEY (`tipo_viaje`) REFERENCES `tipo_viaje` (`id`),
  ADD CONSTRAINT `FK_99371DA551DC9636` FOREIGN KEY (`flete_padre_id`) REFERENCES `flete` (`id`),
  ADD CONSTRAINT `FK_99371DA5763CCB0F` FOREIGN KEY (`cuota`) REFERENCES `cuota` (`id`),
  ADD CONSTRAINT `FK_99371DA5768C901A` FOREIGN KEY (`flete_hijo_id`) REFERENCES `flete` (`id`),
  ADD CONSTRAINT `FK_99371DA58DF2BD06` FOREIGN KEY (`actividad`) REFERENCES `actividades_flete` (`id`),
  ADD CONSTRAINT `FK_99371DA5902F331B` FOREIGN KEY (`relacion_id`) REFERENCES `relacion` (`id`),
  ADD CONSTRAINT `FK_99371DA5A6F796BE` FOREIGN KEY (`agencia_id`) REFERENCES `agencia` (`id`),
  ADD CONSTRAINT `FK_99371DA5E99C6D56` FOREIGN KEY (`sucursal`) REFERENCES `sucursal` (`id`);

--
-- Filtros para la tabla `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `timsa_users` (`id`),
  ADD CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_group` (`id`);

--
-- Filtros para la tabla `operador`
--
ALTER TABLE `operador`
  ADD CONSTRAINT `FK_CB8004F18DF2BD06` FOREIGN KEY (`actividad`) REFERENCES `actividades` (`id`);

--
-- Filtros para la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD CONSTRAINT `FK_56314A395B939A38` FOREIGN KEY (`operador_id`) REFERENCES `operador` (`id`),
  ADD CONSTRAINT `FK_56314A395ED91FCF` FOREIGN KEY (`economico_id`) REFERENCES `economico` (`id`),
  ADD CONSTRAINT `FK_56314A39DA04E6A9` FOREIGN KEY (`socio_id`) REFERENCES `socio` (`id`);

--
-- Filtros para la tabla `sello`
--
ALTER TABLE `sello`
  ADD CONSTRAINT `FK_212000152C1C3467` FOREIGN KEY (`workorder_id`) REFERENCES `workorder` (`id`);

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `FK_E99C6D56DE734E51` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `tarifa_agencia`
--
ALTER TABLE `tarifa_agencia`
  ADD CONSTRAINT `FK_7F1205C96A7CF079` FOREIGN KEY (`cuota_id`) REFERENCES `cuota` (`id`),
  ADD CONSTRAINT `FK_7F1205C9A6F796BE` FOREIGN KEY (`agencia_id`) REFERENCES `agencia` (`id`),
  ADD CONSTRAINT `FK_7F1205C9FE3B76B` FOREIGN KEY (`tarifa_id`) REFERENCES `tarifa` (`id`);

--
-- Filtros para la tabla `tarifa_sucursal`
--
ALTER TABLE `tarifa_sucursal`
  ADD CONSTRAINT `FK_8263428C279A5D5E` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursal` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8263428CFE3B76B` FOREIGN KEY (`tarifa_id`) REFERENCES `tarifa` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `workorder`
--
ALTER TABLE `workorder`
  ADD CONSTRAINT `FK_51CF52BB3301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`),
  ADD CONSTRAINT `FK_51CF52BBC1A15772` FOREIGN KEY (`contenedor_id`) REFERENCES `contenedor` (`id`),
  ADD CONSTRAINT `FK_51CF52BBFE239331` FOREIGN KEY (`flete_id`) REFERENCES `flete` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
