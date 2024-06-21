-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2024 a las 23:36:22
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
-- Base de datos: `loshermanos`
--
CREATE DATABASE IF NOT EXISTS loshermanos DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE loshermanos;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_empresa`
--

CREATE TABLE `login_empresa` (
  `id_login` int(11) NOT NULL,
  `user` text NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login_empresa`
--

INSERT INTO `login_empresa` (`id_login`, `user`, `password`) VALUES
(1, 'leo123', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_producto` int(11) NOT NULL,
  `tipo` text DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `tamaño` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_producto`, `tipo`, `stock`, `tamaño`, `img`, `precio`) VALUES
(5, 'BBQ Pollo', 40, 'Chica', 'img/pizza-bbq-Pollo.jpg', 9000),
(6, 'Margarita', 138, 'Chica', 'img/pizza-margarita.jpg', 11000),
(7, 'Vegetariana', 43, 'Chica', 'img/pizza-vegetariana.jpg', 11000),
(8, 'Marinera', 484, 'Chica', 'img/pizza-marinera.jpg', 15000),
(9, 'Pepperoni', 496, 'Chica', 'img/pizza-pepperoni.jpg', 11500),
(10, 'Hawaiana', 484, 'Chica', 'img/pizza-hawaiana.jpg', 14000),
(11, 'Cuatro Quesos', 350, 'Chica', 'img/pizzacuatro-quesos.jpg', 14500),
(12, 'Diavola', 268, 'Chica', 'img/pizza-diavola.jpg', 14000),
(13, 'Capricciosa', 157, 'Chica', 'img/pizza-capricciosa.jpg', 14000),
(14, 'BBQ Pollo', 456, 'Grande', 'img/pizza-bbq-Pollo.jpg', 15000),
(15, 'Margarita', 452, 'Grande', 'img/pizza-margarita.jpg', 17000),
(16, 'Vegetariana', 328, 'Grande', 'img/pizza-vegetariana.jpg', 16850),
(17, 'Marinera', 200, 'Grande', 'img/pizza-marinera.jpg', 18950),
(18, 'Pepperoni', 324, 'Grande', 'img/pizza-pepperoni.jpg', 18999),
(19, 'Hawaiana', 720, 'Grande', 'img/pizza-hawaiana.jpg', 18999),
(20, 'Cuatro Quesos', 394, 'Grande', 'img/pizzacuatro-quesos.jpg', 18999),
(21, 'Diavola', 159, 'Grande', 'img/pizza-diavola.jpg', 18999),
(22, 'Capricciosa', 297, 'Grande', 'img/pizza-capricciosa.jpg\r\n', 18999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `tipo` text DEFAULT NULL,
  `tamaño` text DEFAULT NULL,
  `nombre_cliente` text DEFAULT NULL,
  `cantidad` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `tipo`, `tamaño`, `nombre_cliente`, `cantidad`, `img`, `total`) VALUES
(95, 'Margarita, Vegetariana, ', 'Chica, Chica, ', 'vicky123', '1, 1, ', NULL, 22000),
(96, 'Margarita, Vegetariana', 'Chica, Chica', 'vicky123', '1, 1', NULL, 22000),
(97, 'Margarita, Vegetariana', 'Chica, Chica', 'vicky123', '1, 1', NULL, 22000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

CREATE TABLE `registro_usuario` (
  `id_regis_usuario` int(11) NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `user_registration` varchar(255) NOT NULL,
  `registry_key` varchar(255) NOT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` text NOT NULL,
  `date` date NOT NULL,
  `sex` text NOT NULL,
  `reset_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro_usuario`
--

INSERT INTO `registro_usuario` (`id_regis_usuario`, `name`, `lastname`, `user_registration`, `registry_key`, `tel`, `address`, `email`, `date`, `sex`, `reset_token`) VALUES
(18, 'Erik', 'Salinas', 'erik123', '$2y$10$2GXCJDtp8i90nSoHLXdYxu4BGnuja.mIRqJ18WeOFdPbCm8aZj0xi', NULL, NULL, 'erik61869@gmail.com', '2024-05-17', 'Hombre', ''),
(19, 'Geovanna', 'Cagua', 'Geo', '$2y$10$2GXCJDtp8i90nSoHLXdYxu4BGnuja.mIRqJ18WeOFdPbCm8aZj0xi', NULL, NULL, 'geovannacagua2@gmail.com', '2002-02-02', 'Mujer', ''),
(20, 'erik', 'salinas', 'erik321', '$2y$10$2GXCJDtp8i90nSoHLXdYxu4BGnuja.mIRqJ18WeOFdPbCm8aZj0xi', NULL, NULL, 'salinas.erik2002@gmail.com', '2002-02-01', 'Hombre', ''),
(29, 'Vicky', 'Rios', 'vicky123', '$2y$10$XfD8Y7o3I0D/mk05YalL4.Xko2xbkRBrci7aPFvdPTyr.6oBFvZr2', NULL, NULL, 'm@gmail.com', '2003-09-15', 'Mujer', ''),
(30, 'vicky', 'rios', 'vickyrios', '$2y$10$NKiNEokonclllYnvqdmiPuKWudj4d7COod70xIjo2MvxjxQ.rewMm', NULL, NULL, 'm@gmail.com', '2003-09-15', 'Personalizado', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `apellido` text DEFAULT NULL,
  `correo` text DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login_empresa`
--
ALTER TABLE `login_empresa`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  ADD PRIMARY KEY (`id_regis_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login_empresa`
--
ALTER TABLE `login_empresa`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  MODIFY `id_regis_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
