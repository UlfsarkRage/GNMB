-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2023 a las 05:13:27
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
-- Estructura de tabla para la tabla `seguimiento_uso`
--

CREATE TABLE `seguimiento_uso` (
  `ID` int(255) NOT NULL,
  `Numero_Documento` int(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Tipo_Solicitud` varchar(255) NOT NULL,
  `A_donde_se_envia` varchar(255) NOT NULL,
  `Base_64` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seguimiento_uso`
--

INSERT INTO `seguimiento_uso` (`ID`, `Numero_Documento`, `Nombre`, `Fecha`, `Tipo_Solicitud`, `A_donde_se_envia`, `Base_64`) VALUES
(38, 123456789, 'Nicolas Alberto', '2023-04-03 19:58:10', 'Certificado Laboral', 'Alfa@gmail.com', 'N/AA'),
(39, 987654321, 'Pablo Alfonzo', '2023-04-03 20:02:19', 'Certificado Laboral', 'Omega@gmail.com', 'N/AA'),
(40, 987654321, 'Pablo Alfonzo', '2023-04-03 20:02:29', 'Certificado Laboral', 'Omega@gmail.com', 'N/AA'),
(41, 111222333, 'Juan Silva', '2023-04-03 20:03:01', 'Certificado Laboral', 'Beta@gmail.com', 'JVBERi0xLjMKMyAwIG9iago8PC9UeXBlIC9QYWdlCi9QYXJlbnQgMSAwIFIKL1Jlc291cmNlcyAyIDAgUgovQ29udGVudHMgNCAwIFI+PgplbmRvYmoKNCAwIG9iago8PC9GaWx0ZXIgL0ZsYXRlRGVjb2RlIC9MZW5ndGggNDQ3Pj4Kc3RyZWFtCnicbZFPb5wwEMXv+RRzbKTExfbCwt666d8oTaKGKucBZreOwKY2Tj91D7nm1DGoVSOCOCB'),
(42, 123456789, 'Nicolas Alberto', '2023-04-03 20:11:14', 'Certificado Laboral', 'Alfa@gmail.com', 'JVBERi0xLjMKMyAwIG9iago8PC9UeXBlIC9QYWdlCi9QYXJlbnQgMSAwIFIKL1Jlc291cmNlcyAyIDAgUgovQ29udGVudHMgNCAwIFI+PgplbmRvYmoKNCAwIG9iago8PC9GaWx0ZXIgL0ZsYXRlRGVjb2RlIC9MZW5ndGggNDQ5Pj4Kc3RyZWFtCnicbZFLT90wEIX3/IpZthIY23nfHRf6FAXUpuraSebeGiWe1E7or+6CbVcdJ6IChciLyDN'),
(43, 987654321, 'Pablo Alfonzo', '2023-04-03 20:11:58', 'Retiro Cesantias', 'Omega@gmail.com', 'JVBERi0xLjMKMyAwIG9iago8PC9UeXBlIC9QYWdlCi9QYXJlbnQgMSAwIFIKL1Jlc291cmNlcyAyIDAgUgovQ29udGVudHMgNCAwIFI+PgplbmRvYmoKNCAwIG9iago8PC9GaWx0ZXIgL0ZsYXRlRGVjb2RlIC9MZW5ndGggNTc5Pj4Kc3RyZWFtCnicjVLLbtswELznK/aYAAYrUg9LvsVG0wcaN4jVngwUa4l2GUikQ1Iukr/NB/RQ+NZTl1K'),
(44, 111222333, 'Juan Silva', '2023-04-03 20:12:10', 'Apertura Cuenta Bancaria', 'Beta@gmail.com', ''),
(45, 111222333, 'Juan Silva', '2023-04-03 20:12:47', 'Apertura Cuenta Bancaria', 'Beta@gmail.com', ''),
(46, 111222333, 'Juan Silva', '2023-04-03 20:13:49', 'Apertura Cuenta Bancaria', 'Beta@gmail.com', 'JVBERi0xLjMKMyAwIG9iago8PC9UeXBlIC9QYWdlCi9QYXJlbnQgMSAwIFIKL1Jlc291cmNlcyAyIDAgUgovQ29udGVudHMgNCAwIFI+PgplbmRvYmoKNCAwIG9iago8PC9GaWx0ZXIgL0ZsYXRlRGVjb2RlIC9MZW5ndGggNDU3Pj4Kc3RyZWFtCnicbVLLbtswELz7K/aYAAUjknrmFruvBGiKNuotlzVFuyxoUibNFu1fF/2BrsQEbSBDgkC'),
(47, 123456789, 'Nicolas Alberto', '2023-04-03 20:59:17', 'Certificado Laboral', 'Alfa@gmail.com', 'JVBERi0xLjMKMyAwIG9iago8PC9UeXBlIC9QYWdlCi9QYXJlbnQgMSAwIFIKL1Jlc291cmNlcyAyIDAgUgovQ29udGVudHMgNCAwIFI+PgplbmRvYmoKNCAwIG9iago8PC9GaWx0ZXIgL0ZsYXRlRGVjb2RlIC9MZW5ndGggNDQ5Pj4Kc3RyZWFtCnicbZFLT90wEIX3/IpZthIY23nfHRf6FAXUpuraSebeGiWe1E7or+6CbVcdJ6IChciLyDN'),
(48, 111222333, 'Juan Silva', '2023-04-03 21:57:47', 'Certificado Laboral', 'Beta@gmail.com', 'JVBERi0xLjMKMyAwIG9iago8PC9UeXBlIC9QYWdlCi9QYXJlbnQgMSAwIFIKL1Jlc291cmNlcyAyIDAgUgovQ29udGVudHMgNCAwIFI+PgplbmRvYmoKNCAwIG9iago8PC9GaWx0ZXIgL0ZsYXRlRGVjb2RlIC9MZW5ndGggNDQ3Pj4Kc3RyZWFtCnicbZFPb5wwEMXv+RRzbKTExfbCwt666d8oTaKGKucBZreOwKY2Tj91D7nm1DGoVSOCOCB'),
(49, 123456789, 'Nicolas Alberto', '2023-04-03 22:11:07', 'Certificado Laboral', 'Alfa@gmail.com', 'JVBERi0xLjMKMyAwIG9iago8PC9UeXBlIC9QYWdlCi9QYXJlbnQgMSAwIFIKL1Jlc291cmNlcyAyIDAgUgovQ29udGVudHMgNCAwIFI+PgplbmRvYmoKNCAwIG9iago8PC9GaWx0ZXIgL0ZsYXRlRGVjb2RlIC9MZW5ndGggNDQ5Pj4Kc3RyZWFtCnicbZFLT90wEIX3/IpZthIY23nfHRf6FAXUpuraSebeGiWe1E7or+6CbVcdJ6IChciLyDN'),
(50, 987654321, 'Pablo Alfonzo', '2023-04-03 22:11:21', 'Retiro Cesantias', 'Omega@gmail.com', 'JVBERi0xLjMKMyAwIG9iago8PC9UeXBlIC9QYWdlCi9QYXJlbnQgMSAwIFIKL1Jlc291cmNlcyAyIDAgUgovQ29udGVudHMgNCAwIFI+PgplbmRvYmoKNCAwIG9iago8PC9GaWx0ZXIgL0ZsYXRlRGVjb2RlIC9MZW5ndGggNTc5Pj4Kc3RyZWFtCnicjVLLbtswELznK/aYAAYrUg9LvsVG0wcaN4jVngwUa4l2GUikQ1Iukr/NB/RQ+NZTl1K'),
(51, 111222333, 'Juan Silva', '2023-04-03 22:11:37', 'Apertura Cuenta Bancaria', 'Beta@gmail.com', 'JVBERi0xLjMKMyAwIG9iago8PC9UeXBlIC9QYWdlCi9QYXJlbnQgMSAwIFIKL1Jlc291cmNlcyAyIDAgUgovQ29udGVudHMgNCAwIFI+PgplbmRvYmoKNCAwIG9iago8PC9GaWx0ZXIgL0ZsYXRlRGVjb2RlIC9MZW5ndGggNDU3Pj4Kc3RyZWFtCnicbVLLbtswELz7K/aYAAUjknrmFruvBGiKNuotlzVFuyxoUibNFu1fF/2BrsQEbSBDgkC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `seguimiento_uso`
--
ALTER TABLE `seguimiento_uso`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `seguimiento_uso`
--
ALTER TABLE `seguimiento_uso`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
