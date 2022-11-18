-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2022 a las 17:44:18
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alta_usuarios`
--

CREATE TABLE `alta_usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alta_usuarios`
--

INSERT INTO `alta_usuarios` (`id_usuarios`, `nombre`, `email`, `contrasena`, `create_time`) VALUES
(1, 'rolando', 'rolando@gmail.com', 'unununy', '2022-11-18 03:00:00'),
(126, 'melisa', 'melibhv@gmail.com', 'uyv7tvy7y7yvt', '2022-11-18 03:00:00'),
(129, 'melisa', 'melibhv@gmail.com', 'uyv7tvy7y7yvt', '2022-11-18 03:00:00'),
(130, 'melisa', 'melibhv@gmail.com', 'yhbyhbyb', '2022-11-18 03:00:00'),
(131, 'melisa', 'melibhv@gmail.com', 'yhbyhbyb', '2022-11-18 03:00:00'),
(132, 'melisa', 'melibhv@gmail.com', 'hyubny7ubb7 y7b', '2022-11-18 03:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_usuarios`
--

CREATE TABLE `login_usuarios` (
  `email` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `contraseña` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `rol_modificar` varchar(50) DEFAULT NULL,
  `rol_alta` varchar(45) DEFAULT NULL,
  `rol_eliminar` varchar(45) DEFAULT NULL,
  `rol_baja` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag_adquirido`
--

CREATE TABLE `tag_adquirido` (
  `id_tag` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_usuarios` int(11) NOT NULL,
  `id_roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tag`
--

CREATE TABLE `usuario_tag` (
  `id_tag` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alta_usuarios`
--
ALTER TABLE `alta_usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indices de la tabla `tag_adquirido`
--
ALTER TABLE `tag_adquirido`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_usuarios`,`id_roles`);

--
-- Indices de la tabla `usuario_tag`
--
ALTER TABLE `usuario_tag`
  ADD PRIMARY KEY (`id_tag`,`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alta_usuarios`
--
ALTER TABLE `alta_usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
