-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-06-2023 a las 07:41:09
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fr-ss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE IF NOT EXISTS `autos` (
  `num_serie` double NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `precio` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`num_serie`, `nombre`, `marca`, `precio`, `modelo`, `foto`) VALUES
(1, 'Corvette', 'Chevrolet', '3687000', 'Z06 C6.R', ''),
(2, 'Camaro', 'Chevrolet', '2600000', 'Copo', ''),
(3, 'Huracan', 'Lamborghini', '2498260', 'Coupe', ''),
(4, 'Aventador', 'Lamborghini', '2200000', 'Coupe', ''),
(5, 'GTR', 'Nissan', '2791600', 'R35', ''),
(6, 'EB', 'Bugatti', '28000000', '110ss', ''),
(7, 'Zonda', 'Pagani', '87000000', 'Revolution', ''),
(8, 'EB', 'Bugatti', '50000000', '110ss', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
