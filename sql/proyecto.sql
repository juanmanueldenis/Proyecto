-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2021 a las 15:20:25
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tdoc` varchar(10) NOT NULL,
  `ndoc` int(15) NOT NULL,
  `fnac` date NOT NULL,
  `email` varchar(80) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `año` varchar(50) NOT NULL,
  `exp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`nombre`, `apellido`, `tdoc`, `ndoc`, `fnac`, `email`, `carrera`, `año`, `exp`) VALUES
('Maria', 'Fernandez', 'DNI', 2147483647, '1997-03-14', 'maria@prueba.com', 'Lic. Terapia Ocupacional', '2', 'Trabaje varios años de pasante en una fundación para chicos y jovenes.'),
('Juan', 'Peres', 'DNI', 4578457, '1986-01-05', 'juanperez@prueba.com', 'Ing. Petroleo', '3', 'Mi familia tiene una empresa en el sur que se dedica a la materia y hace varios años que desarrollo diferentes tareas.'),
('oscar', 'rodriguez', 'DNI', 22487568, '1997-06-23', 'oscarr@prueba.com', 'Ing. IndustriaL', '1', ''),
('', '', '', 0, '0000-00-00', '', '', '', ''),
('Juan', 'Denis', 'DNI', 2147483647, '1997-03-14', 'invent@prueba.com', 'Lic. Terapia Ocupacional', '2', 'Trabaje varios años de pasante en una fundación para chicos y jovenes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `nomemp` varchar(50) NOT NULL,
  `cuit` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `descpues` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`nomemp`, `cuit`, `provincia`, `localidad`, `direccion`, `telefono`, `mail`, `descpues`) VALUES
('Invent', '30-54545454-2', 'Buenos Aires', 'quilmes', 'abcddef 1223', '1122334455', 'invent@prueba.com', 'Nos orientamos a un Profesional Proactivo, con iniciativa y aptitud para liderar y supervisar equipos de trabajo. Con capacidad de autogestión. Indispensable idioma inglés y manejo de PC. f.inicio: 25/3  - f. finalizado:25/5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
