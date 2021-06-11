-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-06-2021 a las 10:35:09
-- Versión del servidor: 5.7.32-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `rfc` varchar(50) DEFAULT NULL,
  `nombre_completo_materia` varchar(100) DEFAULT NULL,
  `nombre_carrera` varchar(100) DEFAULT NULL,
  `grupo` varchar(10) DEFAULT NULL,
  `aula` varchar(10) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `hora_inicial` time DEFAULT NULL,
  `dia_semana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `rfc`, `nombre_completo_materia`, `nombre_carrera`, `grupo`, `aula`, `periodo`, `hora_final`, `hora_inicial`, `dia_semana`) VALUES
(1, 'AUCJ790311C95', 'Seguridad Informática', 'Ingenieria informatica', 'A', 'SC8', '2019A', '09:00:00', '08:00:00', 1),
(2, 'AUCJ790311C95', 'Seguridad Informática', 'Ingenieria informatica', 'A', 'SC8', '2019A', '09:00:00', '08:00:00', 2),
(3, 'AUCJ790311C95', 'Seguridad Informática', 'Ingenieria informatica', 'A', 'SC8', '2019A', '09:00:00', '08:00:00', 3),
(4, 'AUCJ790311C95', 'Seguridad Informática', 'Ingenieria informatica', 'A', 'SC8', '2019A', '09:00:00', '08:00:00', 4),
(5, 'AUCJ790311C95', 'Electronica', 'Ingenieria Sistemas Computacionales', 'A', 'SC10', '2019A', '10:00:00', '09:00:00', 1),
(6, 'AUCJ790311C95', 'Electronica', 'Ingenieria Sistemas Computacionales', 'A', 'SC10', '2019A', '10:00:00', '09:00:00', 2),
(7, 'AUCJ790311C95', 'Electronica', 'Ingenieria Sistemas Computacionales', 'A', 'SC10', '2019A', '10:00:00', '09:00:00', 3),
(8, 'AUCJ790311C95', 'Electronica', 'Ingenieria Sistemas Computacionales', 'A', 'SC10', '2019A', '10:00:00', '09:00:00', 4),
(9, 'AUCJ790311C95', 'Electronica', 'Ingenieria Sistemas Computacionales', 'A', 'SC10', '2019A', '10:00:00', '09:00:00', 5),
(10, 'AUCJ790311C95', 'Administracion de Servidores', 'Ingenieria Informatica', 'A', 'SC8', '2019A', '11:00:00', '10:00:00', 1),
(11, 'AUCJ790311C95', 'Administracion de Servidores', 'Ingenieria Informatica', 'A', 'SC8', '2019A', '11:00:00', '10:00:00', 2),
(12, 'AUCJ790311C95', 'Administracion de Servidores', 'Ingenieria Informatica', 'A', 'SC8', '2019A', '11:00:00', '10:00:00', 3),
(13, 'AUCJ790311C95', 'Administracion de Servidores', 'Ingenieria Informatica', 'A', 'SC8', '2019A', '11:00:00', '10:00:00', 4),
(14, 'AUCJ790311C95', 'Administracion de Servidores', 'Ingenieria Informatica', 'A', 'SC8', '2019A', '11:00:00', '10:00:00', 5),
(15, 'EHJL750311C65', 'Calculo Diferencial', 'Ingeniería informatica', 'A', 'SC5', '2019A', '09:00:00', '08:00:00', 2),
(16, 'EHJL750311C65', 'Calculo Diferencial', 'Ingeniería informatica', 'A', 'SC5', '2019A', '09:00:00', '08:00:00', 3),
(17, 'EHJL750311C65', 'Calculo Diferencial', 'Ingeniería informatica', 'A', 'SC5', '2019A', '09:00:00', '08:00:00', 4),
(18, 'EHJL750311C65', 'Calculo Diferencial', 'Ingeniería informatica', 'A', 'SC5', '2019A', '09:00:00', '08:00:00', 5),
(19, 'EHJL750311C65', 'Calculo Integral', 'Ingeniería informatica', 'A', 'SC5', '2019A', '10:00:00', '09:00:00', 1),
(20, 'EHJL750311C65', 'Calculo Integral', 'Ingeniería informatica', 'A', 'SC5', '2019A', '10:00:00', '09:00:00', 2),
(21, 'EHJL750311C65', 'Calculo Integral', 'Ingeniería informatica', 'A', 'SC5', '2019A', '10:00:00', '09:00:00', 3),
(22, 'EHJL750311C65', 'Calculo Integral', 'Ingeniería informatica', 'A', 'SC5', '2019A', '10:00:00', '09:00:00', 4),
(23, 'EHJL750311C65', 'Calculo Integral', 'Ingeniería informatica', 'A', 'SC5', '2019A', '10:00:00', '09:00:00', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `nombre_completo_docente` varchar(50) DEFAULT NULL,
  `rfc` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`nombre_completo_docente`, `rfc`, `correo_electronico`) VALUES
('Administrador', 'ADMIN50311C65', 'admin@gmail.com'),
('Julio Aguilar Carmona', 'AUCJ790311C95', 'julius@gmail.com'),
('Jorge Luis Espinoza', 'EHJL750311C65', 'jorgio@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `idproyector` int(10) DEFAULT NULL,
  `rfc` varchar(50) DEFAULT NULL,
  `id_horario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `idproyector`, `rfc`, `id_horario`) VALUES
(14, 71, 'AUCJ790311C95', 12),
(15, 71, 'AUCJ790311C95', 7),
(16, 71, 'AUCJ790311C95', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectores`
--

CREATE TABLE `proyectores` (
  `idproyector` int(10) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `num_serie` varchar(45) NOT NULL,
  `depto` varchar(45) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectores`
--

INSERT INTO `proyectores` (`idproyector`, `clave`, `marca`, `modelo`, `num_serie`, `depto`, `status`) VALUES
(1, 'PM01', 'Canon', 'FLOP', 'HLOP', 'Computo', 0),
(22, 'PM02', 'Sony', 'GOP1002', 'BCJBSK78', 'Academico', 0),
(40, 'PM03', 'Hitachi', 'SHARINGAN', 'TSUKUYOMI', 'Academico', 1),
(56, 'PM04', 'Lenovo', 'fsooi', 'ouhdsoh', 'Computo', 1),
(71, 'PM05', 'Dell', 'fsooi', 'ouhdsoh', 'Computo', 0),
(74, 'PM06', 'Canon', 'LOSSW-01', 'HLOP', 'Academico', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(20) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `contraseña` varchar(20) NOT NULL,
  `rfc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `correo_electronico`, `contraseña`, `rfc`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'ADMIN50311C65 '),
(2, 'julius', 'julius@gmail.com', '12345', 'AUCJ790311C95'),
(3, 'jorgio', 'jorgio@gmail.com', '12345', 'EHJL750311C65');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `rfc` (`rfc`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`rfc`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `idproyector` (`idproyector`),
  ADD KEY `rfc` (`rfc`),
  ADD KEY `id_horario` (`id_horario`);

--
-- Indices de la tabla `proyectores`
--
ALTER TABLE `proyectores`
  ADD PRIMARY KEY (`idproyector`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rfc` (`rfc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `proyectores`
--
ALTER TABLE `proyectores`
  MODIFY `idproyector` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`rfc`) REFERENCES `personal` (`rfc`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`idproyector`) REFERENCES `proyectores` (`idproyector`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`rfc`) REFERENCES `personal` (`rfc`),
  ADD CONSTRAINT `prestamos_ibfk_3` FOREIGN KEY (`id_horario`) REFERENCES `horarios` (`id_horario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rfc`) REFERENCES `personal` (`rfc`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
