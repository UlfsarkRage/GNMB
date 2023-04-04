-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2023 a las 05:13:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `generador de documentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID` int(255) NOT NULL,
  `Numero_Documento` int(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Fecha_Salida` date DEFAULT NULL,
  `Cargo` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Salario` varchar(255) NOT NULL,
  `Comentarios` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID`, `Numero_Documento`, `Nombre`, `Fecha_Ingreso`, `Fecha_Salida`, `Cargo`, `Correo`, `Salario`, `Comentarios`) VALUES
(1, 123456789, 'Nicolas Alberto', '2023-03-31', NULL, 'Web Developer', 'Alfa@gmail.com', '3500000', 'N/A'),
(2, 987654321, 'Pablo Alfonzo', '2023-03-31', NULL, 'Web QA', 'Omega@gmail.com', '3800000', 'Tiene Ruta'),
(3, 111222333, 'Juan Silva', '2023-03-31', NULL, 'Web Trainer', 'Beta@gmail.com', '2300000', 'Trabajo remoto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
