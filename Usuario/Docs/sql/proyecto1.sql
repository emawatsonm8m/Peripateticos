-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2023 a las 00:50:49
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `ID_Club` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Reglas` varchar(500) NOT NULL,
  `Tipo` varchar(255) NOT NULL,
  `Proposito` varchar(500) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `ID_Comentario` int(11) NOT NULL,
  `ID_Club` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `Comentario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `festividades`
--

CREATE TABLE `festividades` (
  `ID_Festividades` int(11) NOT NULL,
  `ID_Mes` int(11) NOT NULL,
  `Dia` int(11) NOT NULL,
  `Año` int(11) NOT NULL,
  `Festividades` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes`
--

CREATE TABLE `mes` (
  `ID_Mes` int(11) NOT NULL,
  `Mes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros_club`
--

CREATE TABLE `miembros_club` (
  `ID_Miembro` int(11) NOT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `ID_Club` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moderadores`
--

CREATE TABLE `moderadores` (
  `ID_Moderadores` int(11) NOT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `ID_Club` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto`
--

CREATE TABLE `objeto` (
  `ID_Objeto` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `ID_PuntosPrepa` int(11) NOT NULL,
  `NombreObjeto` varchar(255) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Recompensa` varchar(50) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `ID_PuntosPrepa` int(11) NOT NULL,
  `NombreProducto` varchar(255) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Costo` decimal(10,2) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `FechaVenta` date NOT NULL,
  `Calificacion` int(11) NOT NULL,
  `Horario` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntosprepa`
--

CREATE TABLE `puntosprepa` (
  `ID_PuntosPrepa` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Foto_Lugar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puntosprepa`
--

INSERT INTO `puntosprepa` (`ID_PuntosPrepa`, `Nombre`, `Foto_Lugar`) VALUES
(1, 'Entrada', '../../Statics/media/puntosPrepa/entrada.jpg'),
(2, 'Patio de Sextos', '../../Statics/media/puntosPrepa/sextos.jpg'),
(3, 'Patio de Cuartos', '../../Statics/media/puntosPrepa/cuartos.jpg'),
(4, 'Patio de Quintos', '../../Statics/media/puntosPrepa/quintos.jpg'),
(5, 'Pulpo', '../../Statics/media/puntosPrepa/pulpo.jpg'),
(6, 'Mesas', '../../Statics/media/puntosPrepa/mesas.jpg'),
(7, 'Canchas', '../../Statics/media/puntosPrepa/canchas.jpg'),
(8, 'Pimponeras', '../../Statics/media/puntosPrepa/pimpos.jpg'),
(9, 'Los H', '../../Statics/media/puntosPrepa/h.jpg'),
(10, 'Biblioteca', '../../Statics/media/puntosPrepa/biblio.jpg'),
(11, 'Vestidores', '../../Statics/media/puntosPrepa/vestidores.jpg'),
(13, 'MAPA', '../../Statics/media/puntosPrepa/mapa.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `ID_Respuesta` int(11) NOT NULL,
  `ID_Comentario` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `Respuesta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Cuenta` int(11) DEFAULT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `Foto_Perfil` varchar(255) DEFAULT NULL,
  `Instagram` varchar(255) NOT NULL,
  `Celular` bigint(10) NOT NULL,
  `Sal` varchar(255) DEFAULT NULL,
  `Pim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Cuenta`, `Nombre`, `Contraseña`, `Foto_Perfil`, `Instagram`, `Celular`, `Sal`, `Pim`) VALUES
(1, 322100000, 'Prueba', 'prueba123', NULL, '', 0, NULL, NULL),
(2, 322157000, 'Luana', 'b92ab7ea80e99ee043251a3186d1d3d87a0474a44c1ec50aeb98f2f908380ce7', NULL, '@tilin', 5529391270, '6492554b654ae', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`ID_Club`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`ID_Comentario`),
  ADD KEY `ID_Club` (`ID_Club`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `festividades`
--
ALTER TABLE `festividades`
  ADD PRIMARY KEY (`ID_Festividades`),
  ADD KEY `ID_Mes` (`ID_Mes`);

--
-- Indices de la tabla `mes`
--
ALTER TABLE `mes`
  ADD PRIMARY KEY (`ID_Mes`);

--
-- Indices de la tabla `miembros_club`
--
ALTER TABLE `miembros_club`
  ADD PRIMARY KEY (`ID_Miembro`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Club` (`ID_Club`);

--
-- Indices de la tabla `moderadores`
--
ALTER TABLE `moderadores`
  ADD PRIMARY KEY (`ID_Moderadores`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Club` (`ID_Club`);

--
-- Indices de la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD PRIMARY KEY (`ID_Objeto`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_PuntosPrepa` (`ID_PuntosPrepa`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_Producto`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_PuntosPrepa` (`ID_PuntosPrepa`);

--
-- Indices de la tabla `puntosprepa`
--
ALTER TABLE `puntosprepa`
  ADD PRIMARY KEY (`ID_PuntosPrepa`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`ID_Respuesta`),
  ADD KEY `ID_Comentario` (`ID_Comentario`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD UNIQUE KEY `Cuenta` (`Cuenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `club`
--
ALTER TABLE `club`
  MODIFY `ID_Club` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `ID_Comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `festividades`
--
ALTER TABLE `festividades`
  MODIFY `ID_Festividades` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mes`
--
ALTER TABLE `mes`
  MODIFY `ID_Mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `miembros_club`
--
ALTER TABLE `miembros_club`
  MODIFY `ID_Miembro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `moderadores`
--
ALTER TABLE `moderadores`
  MODIFY `ID_Moderadores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `objeto`
--
ALTER TABLE `objeto`
  MODIFY `ID_Objeto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `puntosprepa`
--
ALTER TABLE `puntosprepa`
  MODIFY `ID_PuntosPrepa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `ID_Respuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `club_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`ID_Club`) REFERENCES `club` (`ID_Club`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`);

--
-- Filtros para la tabla `festividades`
--
ALTER TABLE `festividades`
  ADD CONSTRAINT `festividades_ibfk_1` FOREIGN KEY (`ID_Mes`) REFERENCES `mes` (`ID_Mes`);

--
-- Filtros para la tabla `miembros_club`
--
ALTER TABLE `miembros_club`
  ADD CONSTRAINT `miembros_club_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`),
  ADD CONSTRAINT `miembros_club_ibfk_2` FOREIGN KEY (`ID_Club`) REFERENCES `club` (`ID_Club`);

--
-- Filtros para la tabla `moderadores`
--
ALTER TABLE `moderadores`
  ADD CONSTRAINT `moderadores_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`),
  ADD CONSTRAINT `moderadores_ibfk_2` FOREIGN KEY (`ID_Club`) REFERENCES `club` (`ID_Club`);

--
-- Filtros para la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD CONSTRAINT `objeto_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`),
  ADD CONSTRAINT `objeto_ibfk_2` FOREIGN KEY (`ID_PuntosPrepa`) REFERENCES `puntosprepa` (`ID_PuntosPrepa`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`ID_PuntosPrepa`) REFERENCES `puntosprepa` (`ID_PuntosPrepa`);

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`ID_Comentario`) REFERENCES `comentario` (`ID_Comentario`),
  ADD CONSTRAINT `respuestas_ibfk_2` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
