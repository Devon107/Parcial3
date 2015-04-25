-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2014 a las 09:06:27
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `Carnet` varchar(8) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Carrera` varchar(30) NOT NULL,
  `Especialidad` varchar(30) NOT NULL,
  `Universidad` varchar(45) NOT NULL,
  `DUI` varchar(10) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Responsable` varchar(45) NOT NULL,
  PRIMARY KEY (`Carnet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`Carnet`, `Nombre`, `Carrera`, `Especialidad`, `Universidad`, `DUI`, `Edad`, `Responsable`) VALUES
('FA131689', 'Roberto Flores', 'Ingenieria', 'Ciencias de la computacion', 'Don bosco', '45682137-9', 24, 'Familiar'),
('FD895623', 'Karen', 'licenciatura', 'idiomas', 'tecnologica', '78945613-1', 18, 'familiar'),
('FZ555555', 'ADMIN', 'admin', 'admin', 'admin', '45678919-2', 30, 'na'),
('GH111130', 'Abinadi Henriquez', 'Ingenieria', 'Ciencias de la computacion', 'Don Bosco', '47895612-3', 22, 'Familiar'),
('sd123456', 'Juan bolanos', 'Ingenieria', 'Computacion', 'Don bosco', '47956332-1', 25, 'Raul Bolanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `clave` varchar(300) NOT NULL,
  `id_datos` varchar(8) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `cargo` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `usuario`, `clave`, `id_datos`, `estado`, `cargo`) VALUES
(1, 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 'FZ555555', 1, 1),
(2, 'Roberto', 'e10adc3949ba59abbe56e057f20f883e', 'FA131689', 1, 0),
(3, 'Abinadi', 'e10adc3949ba59abbe56e057f20f883e', 'GH111130', 0, 0),
(6, 'usuario', 'e10adc3949ba59abbe56e057f20f883e', 'sd123456', 0, 0),
(9, 'karen', 'e10adc3949ba59abbe56e057f20f883e', 'FD895623', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
