-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2013 a las 23:51:19
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `timsa_lzc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `actividad`) VALUES
(1, 'Libre'),
(2, 'Ocupado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_flete`
--

CREATE TABLE IF NOT EXISTS `actividades_flete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `actividades_flete`
--

INSERT INTO `actividades_flete` (`id`, `actividad`) VALUES
(1, 'Activo'),
(2, 'Pendiente Facturacion'),
(3, 'Completo'),
(4, 'Cancelado'),
(5, 'Preparado');

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
(1, 'Mersk', '2008-01-01', 1, NULL, 'user.jpg'),
(2, 'APL', '2008-01-01', 1, NULL, 'user.jpg');

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
  `statusA` tinyint(1) NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `fecha_ingreso`, `statusA`, `fecha_salida`, `imagen`) VALUES
(1, 'Nissan', '2008-01-01', 1, NULL, 'user.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenedor`
--

CREATE TABLE IF NOT EXISTS `contenedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `workorder_id` int(11) DEFAULT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E6B58BB12C1C3467` (`workorder_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contenedor`
--

INSERT INTO `contenedor` (`id`, `tipo`, `workorder_id`, `codigo`) VALUES
(1, '40DC', NULL, 'MXF2490''FG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenedores_flete`
--

CREATE TABLE IF NOT EXISTS `contenedores_flete` (
  `flete_id` int(11) NOT NULL,
  `contenedor_id` int(11) NOT NULL,
  PRIMARY KEY (`flete_id`,`contenedor_id`),
  KEY `IDX_FFBA3312FE239331` (`flete_id`),
  KEY `IDX_FFBA3312C1A15772` (`contenedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota`
--

CREATE TABLE IF NOT EXISTS `cuota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `statusA` tinyint(1) NOT NULL,
  `reutilizadoSencillo` int(11) NOT NULL,
  `reutilizadoFull` int(11) NOT NULL,
  `importacionSencillo` int(11) NOT NULL,
  `importacionFull` int(11) NOT NULL,
  `exportacionSencillo` int(11) NOT NULL,
  `exportacionFull` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cuota`
--

INSERT INTO `cuota` (`id`, `nombre`, `statusA`, `reutilizadoSencillo`, `reutilizadoFull`, `importacionSencillo`, `importacionFull`, `exportacionSencillo`, `exportacionFull`) VALUES
(1, 'Nissan por Mexico', 1, 500, 600, 700, 800, 900, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `economico`
--

CREATE TABLE IF NOT EXISTS `economico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placas` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `statusA` tinyint(1) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `numero_serie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transponder` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_vehiculo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `actividad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_659DDCD88DF2BD06` (`actividad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `economico`
--

INSERT INTO `economico` (`id`, `placas`, `statusA`, `fecha_ingreso`, `fecha_salida`, `numero_serie`, `modelo`, `transponder`, `marca`, `imagen`, `tipo_vehiculo`, `numero`, `actividad`) VALUES
(1, '040EJ1', 1, '2013-08-24', NULL, NULL, 'Freigtliner', NULL, NULL, 'user.jpg', NULL, 82, 1),
(2, '768EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 1, 1),
(3, '808EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 87, 1),
(4, '058EJ1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 9, 1),
(5, '947EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 85, 1),
(6, '948EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 83, 1),
(7, '816EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 88, 1),
(8, '816EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 81, 1),
(9, '807EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 86, 1),
(10, '092EJ1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 8, 1),
(11, '945EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 84, 1),
(12, '100EJ1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 111, 1),
(13, '882EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 11, 1),
(14, '711EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 113, 1),
(15, '859EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 110, 1),
(16, '885EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 17, 1),
(17, '822EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 14, 1),
(18, '080EJ1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 95, 1),
(19, '567EH8', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 46, 1),
(20, '826EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 16, 1),
(21, '885EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 13, 1),
(22, '653EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 94, 1),
(23, '820EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 23, 1),
(24, '867EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 22, 1),
(25, '706CD1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 44, 1),
(26, '706CD1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 54, 1),
(27, '819EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 58, 1),
(28, '782EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 56, 1),
(29, '899EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 55, 1),
(30, '708EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 69, 1),
(31, '935EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 57, 1),
(32, '838EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 136, 1),
(33, '842EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 105, 1),
(34, '869EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 103, 1),
(35, '079EJ1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 104, 1),
(36, '846EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 100, 1),
(37, '845EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 112, 1),
(38, '404EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 121, 1),
(39, '674EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 120, 1),
(40, '536DS6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 126, 1),
(41, '419EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 135, 1),
(42, '677EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 137, 1),
(43, '099EJ1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 146, 1),
(44, '594EH8', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 147, 1),
(45, '929EJ6', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 145, 1),
(46, '806EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 148, 1),
(47, '796EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 153, 1),
(48, '856EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 149, 1),
(49, '073EJ1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 150, 1),
(50, '713EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 157, 1),
(51, '873EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 158, 1),
(52, '019EJ1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 151, 1),
(53, '837EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 155, 1),
(54, '832EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 154, 1),
(55, '011EA7', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 162, 1),
(56, '565EH8', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 164, 1),
(57, '102EJ1', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 159, 1),
(58, '555EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 163, 1),
(59, '412EH9', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 161, 1),
(60, 'GX49215', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 37, 1),
(61, 'GX49215', 1, '2013-08-27', NULL, NULL, NULL, NULL, NULL, 'user.jpg', NULL, 160, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flete`
--

CREATE TABLE IF NOT EXISTS `flete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agencia_id` int(11) DEFAULT NULL,
  `flete_padre_id` int(11) DEFAULT NULL,
  `flete_hijo_id` int(11) DEFAULT NULL,
  `cuota` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `statusA` tinyint(1) NOT NULL,
  `comentarios` varchar(700) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_llegada` date DEFAULT NULL,
  `fecha_facturacion` date DEFAULT NULL,
  `relacion_id` int(11) DEFAULT NULL,
  `tipo_viaje` int(11) DEFAULT NULL,
  `actividad` int(11) DEFAULT NULL,
  `workorders_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_99371DA5A6F796BE` (`agencia_id`),
  KEY `IDX_99371DA551DC9636` (`flete_padre_id`),
  KEY `IDX_99371DA5768C901A` (`flete_hijo_id`),
  KEY `IDX_99371DA5763CCB0F` (`cuota`),
  KEY `IDX_99371DA5902F331B` (`relacion_id`),
  KEY `IDX_99371DA51BFD77DE` (`tipo_viaje`),
  KEY `IDX_99371DA58DF2BD06` (`actividad`),
  KEY `IDX_99371DA5348B55EA` (`workorders_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `flete`
--

INSERT INTO `flete` (`id`, `agencia_id`, `flete_padre_id`, `flete_hijo_id`, `cuota`, `fecha`, `statusA`, `comentarios`, `fecha_llegada`, `fecha_facturacion`, `relacion_id`, `tipo_viaje`, `actividad`, `workorders_id`) VALUES
(1, 1, NULL, NULL, 1, '2008-01-01', 1, 'Flete de Prueba desde administrador', NULL, NULL, 1, 2, 1, NULL),
(2, 1, NULL, NULL, 1, '2008-01-01', 1, 'Segundo flete de prueba', NULL, NULL, 6, 2, 5, NULL),
(3, 1, NULL, NULL, 1, '2008-01-01', 1, 'Tercero', NULL, NULL, 6, 1, 5, NULL),
(4, 1, NULL, NULL, 1, '2008-01-01', 1, NULL, NULL, NULL, 3, 2, 1, NULL),
(5, 1, NULL, NULL, 1, '2008-01-01', 1, NULL, NULL, NULL, 1, 6, NULL, NULL),
(6, 2, NULL, NULL, 1, '2008-01-01', 1, NULL, NULL, NULL, 1, 2, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `fos_group`
--

INSERT INTO `fos_group` (`id`, `name`, `roles`) VALUES
(1, 'Usuarios', 'a:1:{i:0;s:9:"ROLE_USER";}'),
(2, 'Administradores', 'a:1:{i:0;s:10:"ROLE_ADMIN";}');

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
(1, 1),
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE IF NOT EXISTS `operador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CURP` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `statusA` tinyint(1) NOT NULL,
  `fecha_deprecated` date DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actividad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CB8004F18DF2BD06` (`actividad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `operador`
--

INSERT INTO `operador` (`id`, `nombre`, `RC`, `CURP`, `fecha_ingreso`, `statusA`, `fecha_deprecated`, `telefono`, `imagen`, `actividad`) VALUES
(1, 'SEBASTIAN GONZALEZ ORTEGA', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(2, 'AGUSTIN RIEBLING', NULL, NULL, '2013-08-24', 1, NULL, '7531103834', 'user.jpg', 1),
(3, 'RAMON LEON', NULL, NULL, '2013-08-24', 1, NULL, '7531364080', 'user.jpg', 1),
(4, 'RIGOBERTO ARREGUIN', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(5, 'ESAU GUIDO DIAZ', NULL, NULL, '2013-08-24', 1, NULL, '7531127537', 'user.jpg', 1),
(6, 'JUAN HERNANDEZ FLORES', NULL, NULL, '2013-08-24', 1, NULL, '7531361688', 'user.jpg', 1),
(7, 'FEDERICO', NULL, NULL, '2013-08-24', 1, NULL, '7442558177', 'user.jpg', 1),
(8, 'JAIRO ALBERTO VAZQUEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531410354', 'user.jpg', 1),
(9, 'LUIS ALBERTO MARTINEZ', NULL, NULL, '2013-08-24', 1, NULL, '531049641', 'user.jpg', 1),
(10, 'GABRIEL VALENTE', NULL, NULL, '2013-08-24', 1, NULL, '7531049236', 'user.jpg', 1),
(11, 'ARMANDO VARGAS QUINTERO', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(12, 'MARCO ANTONIO', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(13, 'MIGUEL ANGEL SOLIS', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(14, 'JOEL HERNANDEZ', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(15, 'ARCELIO HERNANDEZ', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(16, 'JOSE LUIS ARENASAS', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(17, 'LUIS ANGEL RODRIGUEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531364511', 'user.jpg', 1),
(18, 'ALBINO VARGAS CAZARES', NULL, NULL, '2013-08-24', 1, NULL, '7531101399', 'user.jpg', 1),
(19, 'JOSE MARTIN ARENASAS', NULL, NULL, '2013-08-24', 1, NULL, '7531364319', 'user.jpg', 1),
(20, 'JOSE BENJAMIN VERA', NULL, NULL, '2013-08-24', 1, NULL, '7414110604', 'user.jpg', 1),
(21, 'ALFONSO RAMIREZ', NULL, NULL, '2013-08-24', 1, NULL, '7531364080', 'user.jpg', 1),
(22, 'IVAN CORTES', NULL, NULL, '2013-08-24', 1, NULL, '7531364197', 'user.jpg', 1),
(23, 'SANTIAGO PALOMINOS', NULL, NULL, '2013-08-24', 1, NULL, '7531200527', 'user.jpg', 1),
(24, 'SALVADOR DIAZ', NULL, NULL, '2013-08-24', 1, NULL, '7531395127', 'user.jpg', 1),
(25, 'ROBERTO RAMIREZ', NULL, NULL, '2013-08-24', 1, NULL, '7531392129', 'user.jpg', 1),
(26, 'LUIS LORENZO', NULL, NULL, '2013-08-24', 1, NULL, '7531043462', 'user.jpg', 1),
(27, 'FERNANDO RODRIGUEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531043414', 'user.jpg', 1),
(28, 'JESUS MONDRAGON', NULL, NULL, '2013-08-24', 1, NULL, '7531043458', 'user.jpg', 1),
(29, 'ALBERTO JIMENEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531200528', 'user.jpg', 1),
(30, 'ROBERTO SOLIS', NULL, NULL, '2013-08-24', 1, NULL, '7531043432', 'user.jpg', 1),
(31, 'FRANCISCO ADAME V', NULL, NULL, '2013-08-24', 1, NULL, '7531043857', 'user.jpg', 1),
(32, 'SALVADOR SALGADO PARRA', NULL, NULL, '2013-08-24', 1, NULL, '7531361248', 'user.jpg', 1),
(33, 'EFRAIN CAMPOS LUNA', NULL, NULL, '2013-08-24', 1, NULL, '7531361247', 'user.jpg', 1),
(34, 'DANIEL H. SOLIS', NULL, NULL, '2013-08-24', 1, NULL, '7531363351', 'user.jpg', 1),
(35, 'DOROTEO ONOFRE', NULL, NULL, '2013-08-24', 1, NULL, '7531361249', 'user.jpg', 1),
(36, 'ARMANDO JIMENEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531049778', 'user.jpg', 1),
(37, 'FRANCISCO JAVIER CHAVEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531465704', 'user.jpg', 1),
(38, 'FRANCISCO JAVIER REA', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(39, 'FRANCISCO JAVIER OJENDIZ D.', NULL, NULL, '2013-08-24', 1, NULL, '7531366885', 'user.jpg', 1),
(40, 'JOSE ANTONIO RUIZ MEDINA', NULL, NULL, '2013-08-24', 1, NULL, '7531366895', 'user.jpg', 1),
(41, 'ABEL PADILLA SILVA', NULL, NULL, '2013-08-24', 1, NULL, NULL, 'user.jpg', 1),
(42, 'JUAN RAMIREZ FLORES', NULL, NULL, '2013-08-24', 1, NULL, '7531366980', 'user.jpg', 1),
(43, 'FERNANDO QUINTERO Q.', NULL, NULL, '2013-08-24', 1, NULL, '7531404574', 'user.jpg', 1),
(44, 'JESUS CHAVEZ CASTREJON', NULL, NULL, '2013-08-24', 1, NULL, '7531049788', 'user.jpg', 1),
(45, 'NESTOR GARCIA JAIMES', NULL, NULL, '2013-08-24', 1, NULL, '7531459541', 'user.jpg', 1),
(46, 'MIGUEL RUIZ LOPEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531049780', 'user.jpg', 1),
(47, 'FERNANDO SOTO ALCAZAR', NULL, NULL, '2013-08-24', 1, NULL, '7531364937', 'user.jpg', 1),
(48, 'FELIPE VELAZQUEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531363221', 'user.jpg', 1),
(49, 'ENRIQUE RAMIREZ', NULL, NULL, '2013-08-24', 1, NULL, '7531364015', 'user.jpg', 1),
(50, 'RIGOBERTO PALACIOS', NULL, NULL, '2013-08-24', 1, NULL, '7531049900', 'user.jpg', 1),
(51, 'MANUEL LOPEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531101052', 'user.jpg', 1),
(52, 'SILVESTRE LOPEZ', NULL, NULL, '2013-08-24', 1, NULL, '7531364941', 'user.jpg', 1),
(53, 'ARMANDO ROJAS', NULL, NULL, '2013-08-24', 1, NULL, '7531365261', 'user.jpg', 1),
(54, 'FERNANDO SOTO', NULL, NULL, '2013-08-24', 1, NULL, '7531360440', 'user.jpg', 1),
(55, 'JORGE EDUARDO CASTILLO', NULL, NULL, '2013-08-24', 1, NULL, '7531049900', 'user.jpg', 1),
(56, 'JULIO CESAR CARVAJAL', NULL, NULL, '2013-08-24', 1, NULL, '7531361275', 'user.jpg', 1),
(57, 'CIRENIO NAMBO BUSTAMANTE', NULL, NULL, '2013-08-24', 1, NULL, '7531049784', 'user.jpg', 1),
(58, 'JOSE MATILDE QUINTERO', NULL, NULL, '2013-08-24', 1, NULL, '7535344526', 'user.jpg', 1),
(59, 'JOSUE GARCIA CASTRO', NULL, NULL, '2013-08-24', 1, NULL, '7531049359', 'user.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE IF NOT EXISTS `relacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operador_id` int(11) DEFAULT NULL,
  `economico_id` int(11) DEFAULT NULL,
  `socio_id` int(11) DEFAULT NULL,
  `statusA` tinyint(1) NOT NULL,
  `prioridad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_56314A395B939A38` (`operador_id`),
  KEY `IDX_56314A395ED91FCF` (`economico_id`),
  KEY `IDX_56314A39DA04E6A9` (`socio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `relacion`
--

INSERT INTO `relacion` (`id`, `operador_id`, `economico_id`, `socio_id`, `statusA`, `prioridad`) VALUES
(1, 22, 1, 1, 1, 10),
(2, 1, 2, 2, 1, 1),
(3, 27, 3, 1, 1, 1),
(4, 3, 4, 1, 1, 1),
(5, 1, 10, 1, 1, 1),
(6, 24, 11, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sello`
--

CREATE TABLE IF NOT EXISTS `sello` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sello` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_sello` int(11) NOT NULL,
  `fecha_sellado` date NOT NULL,
  PRIMARY KEY (`id`)
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
  `statusA` tinyint(1) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_deprecated` date DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`id`, `nombre`, `telefono`, `actividad`, `statusA`, `fecha_ingreso`, `fecha_deprecated`, `imagen`) VALUES
(1, 'MARIANO ORTEGA SANCHEZ', '0', 'Activo', 1, '2013-08-24', NULL, 'user2.png'),
(2, 'CONSTRUCTORA SUR DE MICHOACAN SA DE CV', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(3, 'ROBERTO MEDINA RINCON', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(4, 'AUTOTRANSPORTES ITC SA DE C', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(5, 'JOSE ANTONIO VILLA MIRANDA', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(6, 'SUSANA LETICIA RODRIGUEZ MORAN', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(7, 'CELIA MARLINA GARIBO HERNANDEZ', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(8, 'VICTOR IVAN ZAVALA AGUILERA', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(9, 'MARIA ELENA VARGAS CAMPOS', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(10, 'MIRIAM ANAHI SALAZAR GARCIA', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(11, 'ESQUIVEL CONTENEDORES SA DE CV', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(12, 'TRANSLOBO SA de CV', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(13, 'J. NATIVIDAD RAUL HEREDIA FLORES', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(16, 'ESTEBAN MENDEZ VELAZQUEZ', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(17, 'BLANCA ESTELA GARCIA DELGADILLO', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(18, 'ALBINO SOLIS TORRES', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(19, 'MARCO ANTONIO CAMPOS VEGA', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(20, 'EVA PATRICIA ROSAS GUZMAN', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(21, 'MARIA ERENDIRA GUZMAN GOMEZ', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png'),
(22, 'JUAN MANUEL SOSA SAVEDRA', NULL, 'Activo', 1, '2013-08-27', NULL, 'user2.png');

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
  `statusA` tinyint(1) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_deprecated` date DEFAULT NULL,
  `lat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E99C6D56DE734E51` (`cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `cliente_id`, `nombre`, `email`, `calle`, `numero`, `colonia`, `localidad`, `ciudad`, `estado`, `telefono`, `statusA`, `fecha_ingreso`, `fecha_deprecated`, `lat`, `lon`) VALUES
(1, 1, 'Nissan Mexico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2008-01-01', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE IF NOT EXISTS `tarifa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `statusA` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`id`, `nombre`, `statusA`) VALUES
(1, 'Mexico', 1),
(2, 'Durango', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa_agencia`
--

CREATE TABLE IF NOT EXISTS `tarifa_agencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarifa_id` int(11) DEFAULT NULL,
  `agencia_id` int(11) DEFAULT NULL,
  `cuota_id` int(11) DEFAULT NULL,
  `statusA` tinyint(1) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7F1205C9FE3B76B` (`tarifa_id`),
  KEY `IDX_7F1205C9A6F796BE` (`agencia_id`),
  KEY `IDX_7F1205C96A7CF079` (`cuota_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tarifa_agencia`
--

INSERT INTO `tarifa_agencia` (`id`, `tarifa_id`, `agencia_id`, `cuota_id`, `statusA`, `fecha_ingreso`, `fecha_salida`) VALUES
(1, 1, 1, 1, 1, '0000-00-00', NULL);

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
(1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `timsa_users`
--

INSERT INTO `timsa_users` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'Raul', 'raul', 'admin@admin.cpm', 'admin@admin.cpm', 1, '56ba388c452b4e222ceadc8fb8d9116f', '1cmeSfiHpRSS4b+y39NwmFQKz8zZswefTUG2XGZn1LXaeYaeDC5A8zj0uZrVJToYQntnrnv+dxmh1wR5BY9R4A==', '2013-08-24 16:48:57', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:1:"R";}', 0, NULL),
(2, 'Admin', 'admin', 'rmoctezuma@timsalzc.com', 'rmoctezuma@timsalzc.com', 1, 'ee515c80179e10ffed99f4ef1dfc543b', 'rh5qQOLTl87JYDnlPLQzSTiBE/NzGEzfVl7GbVP3zXDJG+vf9IKpNsv0McnAv/AREN6pmSqE66h37vg1TJRizg==', '2013-09-17 23:45:03', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(3, 'Contadora', 'contadora', 'guadalupe.lopez@timsalzc.com', 'guadalupe.lopez@timsalzc.com', 1, '730a1b714348d899bf7122aef4510a72', 'SvM5lW/mngVs05FmW9b/NScnogaXD/DZHBE44JOcmRpFHC134IOVBsITttTEQOSmhJ1a8YZtP8bw5ydKMe6KIA==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_viaje`
--

CREATE TABLE IF NOT EXISTS `tipo_viaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `viaje` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `trafico` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipo_viaje`
--

INSERT INTO `tipo_viaje` (`id`, `viaje`, `trafico`) VALUES
(1, 'Importacion', 'Sencillo'),
(2, 'Importacion', 'Full'),
(3, 'Exportacion', 'Sencillo'),
(4, 'Exportacion', 'Full'),
(5, 'Reutilizado', 'Sencillo'),
(6, 'Reutilizado', 'Full');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workorder`
--

CREATE TABLE IF NOT EXISTS `workorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workorder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sellos_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_51CF52BB7FE45F1D` (`sellos_id`),
  KEY `IDX_51CF52BB3301C60` (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contenedor`
--
ALTER TABLE `contenedor`
  ADD CONSTRAINT `FK_E6B58BB12C1C3467` FOREIGN KEY (`workorder_id`) REFERENCES `workorder` (`id`);

--
-- Filtros para la tabla `contenedores_flete`
--
ALTER TABLE `contenedores_flete`
  ADD CONSTRAINT `FK_FFBA3312C1A15772` FOREIGN KEY (`contenedor_id`) REFERENCES `contenedor` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FFBA3312FE239331` FOREIGN KEY (`flete_id`) REFERENCES `flete` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `FK_99371DA5348B55EA` FOREIGN KEY (`workorders_id`) REFERENCES `workorder` (`id`),
  ADD CONSTRAINT `FK_99371DA551DC9636` FOREIGN KEY (`flete_padre_id`) REFERENCES `flete` (`id`),
  ADD CONSTRAINT `FK_99371DA5763CCB0F` FOREIGN KEY (`cuota`) REFERENCES `cuota` (`id`),
  ADD CONSTRAINT `FK_99371DA5768C901A` FOREIGN KEY (`flete_hijo_id`) REFERENCES `sucursal` (`id`),
  ADD CONSTRAINT `FK_99371DA58DF2BD06` FOREIGN KEY (`actividad`) REFERENCES `actividades_flete` (`id`),
  ADD CONSTRAINT `FK_99371DA5902F331B` FOREIGN KEY (`relacion_id`) REFERENCES `relacion` (`id`),
  ADD CONSTRAINT `FK_99371DA5A6F796BE` FOREIGN KEY (`agencia_id`) REFERENCES `agencia` (`id`);

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
  ADD CONSTRAINT `FK_51CF52BB7FE45F1D` FOREIGN KEY (`sellos_id`) REFERENCES `sello` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
