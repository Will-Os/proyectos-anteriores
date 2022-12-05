-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-08-2018 a las 01:27:56
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `condominio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE IF NOT EXISTS `archivos` (
  `rut` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_ent` date NOT NULL,
  `hora_ent` time NOT NULL,
  `nom_arch` text NOT NULL,
  UNIQUE KEY `rut` (`rut`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_acc`
--

CREATE TABLE IF NOT EXISTS `control_acc` (
  `nom_visita` varchar(300) NOT NULL,
  `rut_visita` varchar(300) NOT NULL,
  `depto_visita` varchar(3) NOT NULL,
  PRIMARY KEY (`rut_visita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamiento`
--

CREATE TABLE IF NOT EXISTS `estacionamiento` (
  `num` int(2) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `nom_visita` varchar(300) NOT NULL,
  `rut_visita` varchar(300) NOT NULL,
  `depto_visita` varchar(3) NOT NULL,
  PRIMARY KEY (`num`),
  KEY `rut_visita` (`rut_visita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estacionamiento`
--

INSERT INTO `estacionamiento` (`num`, `estado`, `nom_visita`, `rut_visita`, `depto_visita`) VALUES
(1, 'disponible', ' ', ' ', ' '),
(2, 'disponible', ' ', ' ', ' '),
(3, 'disponible', '', '', ''),
(4, 'disponible', ' ', ' ', ' '),
(5, 'disponible', '', '', ''),
(6, 'disponible', '', '', ''),
(7, 'disponible', '', '', ''),
(8, 'disponible', '', '', ''),
(9, 'disponible', '', '', ''),
(10, 'disponible', '', '', ''),
(11, 'disponible', '', '', ''),
(12, 'disponible', '', '', ''),
(13, 'disponible', '', '', ''),
(14, 'disponible', '', '', ''),
(15, 'disponible', ' ', ' ', ' '),
(16, 'disponible', '', '', ''),
(17, 'disponible', '', '', ''),
(18, 'disponible', '', '', ''),
(19, 'disponible', '', '', ''),
(20, 'disponible', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha_lim`
--

CREATE TABLE IF NOT EXISTS `fecha_lim` (
  `dia` int(2) DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fecha_lim`
--

INSERT INTO `fecha_lim` (`dia`, `hora`) VALUES
(21, '20:12:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `num` int(30) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) NOT NULL,
  `noticia` longtext NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`num`),
  UNIQUE KEY `num` (`num`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`num`, `titulo`, `noticia`, `fecha`) VALUES
(1, 'Se estrena pagina web', 'La pÃ¡gina web del condominio ya estÃ¡ disponible\r\n\r\n', '2018-08-12'),
(6, 'Ahora separado!', 'La barra de noticias ahora se encontrarÃ¡ separada de la pÃ¡gina principal para el cÃ³modo uso de este espacio donde se redactarÃ¡ toda la informaciÃ³n de la pÃ¡gina.', '2018-08-13'),
(3, 'BotÃ³n de elegir noticia', 'Este botÃ³n fue implementado para acomodar todas las noticias, las mas recientes siempre estarÃ¡n al principio pero se puede filtrar por tÃ­tulo, prÃ³ximamente por FECHA!', '2018-08-13'),
(9, 'Ha llegado carta!', 'Ahora la web cuenta con un sistema de correos desde administraciÃ³n, donde se enviarÃ¡ informaciÃ³n a cada uno de los usuarios si es que es necesario.\r\nSe puede seleccionar un usuario o correos masivos, dependiendo del administrador.', '2018-08-15'),
(11, 'Pagos Mensuales', 'Los pagos mensuales ya han sido insertados en la pÃ¡gina para una mejor administraciÃ³n de los pagos mensuales. A futuro se implementarÃ¡ un sistema de alerta cuando no se ha pagado la cuota del condominio y la fecha de paga mensual estÃ© cerca.', '2018-08-18'),
(12, 'Sistema de alertas', 'Si el archivo no es subido en la fecha lÃ­mite se le enviarÃ¡ una alerta al correo avisando sobre la multa que se debe pagar. La fecha lÃ­mite se establece en la pÃ¡gina de usuarios.  ', '2018-08-20'),
(13, 'Reglamento y reuniones', 'La pÃ¡gina web ya cuenta con interfaz para poder revisar el reglamento mas actual del condominio en cuestiÃ³n. TambiÃ©n existe un sistema que avisarÃ¡ por correo la multa a pagar si es que no se asiste a una reuniÃ³n.', '2018-08-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reunion`
--

CREATE TABLE IF NOT EXISTS `reunion` (
  `rut` int(9) NOT NULL,
  `estado` varchar(100) DEFAULT NULL,
  KEY `rut` (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reunion`
--

INSERT INTO `reunion` (`rut`, `estado`) VALUES
(205813349, 'ausente'),
(207211486, 'ausente'),
(203835647, 'asistente'),
(300000000, 'ausente'),
(300000001, 'ausente'),
(300000002, 'ausente'),
(300000003, 'ausente'),
(300000004, 'ausente'),
(300000005, 'ausente'),
(300000006, 'ausente'),
(300000007, 'ausente'),
(300000008, 'ausente'),
(300000009, 'ausente'),
(300000010, 'ausente'),
(300000011, 'ausente'),
(300000012, 'ausente'),
(300000013, 'ausente'),
(300000014, 'ausente'),
(300000015, 'ausente'),
(300000016, 'ausente'),
(300000017, 'ausente'),
(300000018, 'ausente'),
(300000019, 'ausente'),
(300000020, 'ausente'),
(300000021, 'ausente'),
(300000022, 'ausente'),
(300000023, 'ausente'),
(300000024, 'ausente'),
(300000025, 'ausente'),
(300000026, 'ausente'),
(300000027, 'ausente'),
(300000028, 'ausente'),
(300000029, 'ausente'),
(300000030, 'ausente'),
(300000031, 'ausente'),
(300000032, 'ausente'),
(300000033, 'ausente'),
(300000034, 'ausente'),
(300000035, 'ausente'),
(300000036, 'ausente'),
(300000037, 'ausente'),
(300000038, 'ausente'),
(300000039, 'ausente'),
(300000040, 'ausente'),
(300000041, 'ausente'),
(300000042, 'ausente'),
(300000043, 'ausente'),
(300000044, 'ausente'),
(300000045, 'ausente'),
(300000046, 'ausente'),
(300000047, 'ausente'),
(300000048, 'ausente'),
(300000049, 'ausente'),
(300000050, 'ausente'),
(300000051, 'ausente'),
(300000052, 'ausente'),
(300000053, 'ausente'),
(300000054, 'ausente'),
(300000055, 'ausente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `rut` int(9) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `password` varchar(400) NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`rut`, `nombre`, `correo`, `password`) VALUES
(123456789, 'Admin', 'admincondo@yopmail.com', 'adm123'),
(203835647, 'Lucas Mendez', 'lucasmendez800@yopmail.com', 'luc123'),
(205813349, 'Diego Quezada', 'diegoquezadapavez@yopmail.com', 'die123'),
(207211486, 'Vicente Puebla', 'vicente.daniel.puebla@yopmail.com', 'vic123'),
(300000000, 'usuario0', 'mailusu0@ejemplo.com', 'usu0'),
(300000001, 'usuario1', 'mailusu1@ejemplo.com', 'usu1'),
(300000002, 'usuario2', 'mailusu2@ejemplo.com', 'usu2'),
(300000003, 'usuario3', 'mailusu3@ejemplo.com', 'usu3'),
(300000004, 'usuario4', 'mailusu4@ejemplo.com', 'usu4'),
(300000005, 'usuario5', 'mailusu5@ejemplo.com', 'usu5'),
(300000006, 'usuario6', 'mailusu6@ejemplo.com', 'usu6'),
(300000007, 'usuario7', 'mailusu7@ejemplo.com', 'usu7'),
(300000008, 'usuario8', 'mailusu8@ejemplo.com', 'usu8'),
(300000009, 'usuario9', 'mailusu9@ejemplo.com', 'usu9'),
(300000010, 'usuario10', 'mailusu10@ejemplo.com', 'usu10'),
(300000011, 'usuario11', 'mailusu11@ejemplo.com', 'usu11'),
(300000012, 'usuario12', 'mailusu12@ejemplo.com', 'usu12'),
(300000013, 'usuario13', 'mailusu13@ejemplo.com', 'usu13'),
(300000014, 'usuario14', 'mailusu14@ejemplo.com', 'usu14'),
(300000015, 'usuario15', 'mailusu15@ejemplo.com', 'usu15'),
(300000016, 'usuario16', 'mailusu16@ejemplo.com', 'usu16'),
(300000017, 'usuario17', 'mailusu17@ejemplo.com', 'usu17'),
(300000018, 'usuario18', 'mailusu18@ejemplo.com', 'usu18'),
(300000019, 'usuario19', 'mailusu19@ejemplo.com', 'usu19'),
(300000020, 'usuario20', 'mailusu20@ejemplo.com', 'usu20'),
(300000021, 'usuario21', 'mailusu21@ejemplo.com', 'usu21'),
(300000022, 'usuario22', 'mailusu22@ejemplo.com', 'usu22'),
(300000023, 'usuario23', 'mailusu23@ejemplo.com', 'usu23'),
(300000024, 'usuario24', 'mailusu24@ejemplo.com', 'usu24'),
(300000025, 'usuario25', 'mailusu25@ejemplo.com', 'usu25'),
(300000026, 'usuario26', 'mailusu26@ejemplo.com', 'usu26'),
(300000027, 'usuario27', 'mailusu27@ejemplo.com', 'usu27'),
(300000028, 'usuario28', 'mailusu28@ejemplo.com', 'usu28'),
(300000029, 'usuario29', 'mailusu29@ejemplo.com', 'usu29'),
(300000030, 'usuario30', 'mailusu30@ejemplo.com', 'usu30'),
(300000031, 'usuario31', 'mailusu31@ejemplo.com', 'usu31'),
(300000032, 'usuario32', 'mailusu32@ejemplo.com', 'usu32'),
(300000033, 'usuario33', 'mailusu33@ejemplo.com', 'usu33'),
(300000034, 'usuario34', 'mailusu34@ejemplo.com', 'usu34'),
(300000035, 'usuario35', 'mailusu35@ejemplo.com', 'usu35'),
(300000036, 'usuario36', 'mailusu36@ejemplo.com', 'usu36'),
(300000037, 'usuario37', 'mailusu37@ejemplo.com', 'usu37'),
(300000038, 'usuario38', 'mailusu38@ejemplo.com', 'usu38'),
(300000039, 'usuario39', 'mailusu39@ejemplo.com', 'usu39'),
(300000040, 'usuario40', 'mailusu40@ejemplo.com', 'usu40'),
(300000041, 'usuario41', 'mailusu41@ejemplo.com', 'usu41'),
(300000042, 'usuario42', 'mailusu42@ejemplo.com', 'usu42'),
(300000043, 'usuario43', 'mailusu43@ejemplo.com', 'usu43'),
(300000044, 'usuario44', 'mailusu44@ejemplo.com', 'usu44'),
(300000045, 'usuario45', 'mailusu45@ejemplo.com', 'usu45'),
(300000046, 'usuario46', 'mailusu46@ejemplo.com', 'usu46'),
(300000047, 'usuario47', 'mailusu47@ejemplo.com', 'usu47'),
(300000048, 'usuario48', 'mailusu48@ejemplo.com', 'usu48'),
(300000049, 'usuario49', 'mailusu49@ejemplo.com', 'usu49'),
(300000050, 'usuario50', 'mailusu50@ejemplo.com', 'usu50'),
(300000051, 'usuario51', 'mailusu51@ejemplo.com', 'usu51'),
(300000052, 'usuario52', 'mailusu52@ejemplo.com', 'usu52'),
(300000053, 'usuario53', 'mailusu53@ejemplo.com', 'usu53'),
(300000054, 'usuario54', 'mailusu54@ejemplo.com', 'usu54'),
(300000055, 'usuario55', 'mailusu55@ejemplo.com', 'usu55'),
(987654321, 'Conserje', 'conserje123@gmail.com', 'con123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  ADD CONSTRAINT `estacionamiento_ibfk_1` FOREIGN KEY (`rut_visita`) REFERENCES `control_acc` (`rut_visita`);

--
-- Filtros para la tabla `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `reunion_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `usuarios` (`rut`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
