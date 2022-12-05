-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-10-2018 a las 00:19:21
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `a`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora_e`
--

DROP TABLE IF EXISTS `hora_e`;
CREATE TABLE IF NOT EXISTS `hora_e` (
  `id_tra` int(9) NOT NULL,
  `hora_e` time NOT NULL,
  `dia` date NOT NULL,
  KEY `id_tra` (`id_tra`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hora_e`
--

INSERT INTO `hora_e` (`id_tra`, `hora_e`, `dia`) VALUES
(206711868, '10:39:43', '2018-08-16'),
(206711868, '18:36:49', '2018-08-22'),
(207211486, '19:58:46', '2018-10-03'),
(206711868, '20:55:27', '2018-10-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora_s`
--

DROP TABLE IF EXISTS `hora_s`;
CREATE TABLE IF NOT EXISTS `hora_s` (
  `id_tra` int(9) NOT NULL,
  `hora_s` time NOT NULL,
  `dia` date NOT NULL,
  KEY `id_tra` (`id_tra`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hora_s`
--

INSERT INTO `hora_s` (`id_tra`, `hora_s`, `dia`) VALUES
(206711868, '10:39:56', '2018-08-16'),
(206711868, '19:46:59', '2018-08-22'),
(207211486, '21:16:30', '2018-10-03'),
(206711868, '20:55:32', '2018-10-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

DROP TABLE IF EXISTS `trabajadores`;
CREATE TABLE IF NOT EXISTS `trabajadores` (
  `id_tra` int(9) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  PRIMARY KEY (`id_tra`),
  UNIQUE KEY `id_tra` (`id_tra`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id_tra`, `nombre`, `apellidos`) VALUES
(206711868, 'Hernan', 'Alvarez'),
(207211486, 'Vicente', 'Puebla');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
