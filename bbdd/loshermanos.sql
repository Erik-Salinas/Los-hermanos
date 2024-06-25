-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2024 a las 20:30:47
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
CREATE DATABASE IF NOT EXISTS `loshermanos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `loshermanos`;

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
(1, 'BBQ Pollo', 500, 'Chica', 'img/pizza-bbq-Pollo.jpg', 9500),
(2, 'Capricciosa', 139, 'Chica', 'img/pizza-capricciosa.jpg', 11500),
(3, 'Cuatro Quesos', 305, 'Chica', 'img/pizzacuatro-quesos.jpg', 12000),
(4, 'Diavola', 450, 'Chica', 'img/pizza-diavola.jpg', 12500),
(5, 'Hawaiana', 100, 'Chica', 'img/pizza-hawaiana.jpg', 11000),
(6, 'Margarita', 20, 'Chica', 'img/pizza-margarita.jpg', 11500),
(7, 'Marinera', 65, 'Chica', 'img/pizza-marinera.jpg', 11500),
(8, 'Pepperoni', 21, 'Chica', 'img/pizza-pepperoni.jpg', 11000),
(9, 'Vegetariana', 460, 'Chica', 'img/pizza-vegetariana.jpg', 12000),
(10, 'BBQ Pollo', 228, 'Grande', 'img/pizza-bbq-Pollo.jpg', 15000),
(11, 'Capricciosa', 180, 'Grande', 'img/pizza-capricciosa.jpg', 16000),
(12, 'Cuatro Quesos', 363, 'Grande', 'img/pizzacuatro-quesos.jpg', 16500),
(13, 'Diavola', 20, 'Grande', 'img/pizza-diavola.jpg', 16500),
(14, 'Hawaiana', 189, 'Grande', 'img/pizza-hawaiana.jpg', 16000),
(15, 'Margarita', 30, 'Grande', 'img/pizza-margarita.jpg', 17000),
(16, 'Marinera', 345, 'Grande', 'img/pizza-marinera.jpg', 16500),
(17, 'Pepperoni', 186, 'Grande', 'img/pizza-pepperoni.jpg', 16500),
(18, 'Vegetariana', 62, 'Grande', 'img/pizza-vegetariana.jpg', 17500);

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
  `dire` text DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `tipo`, `tamaño`, `nombre_cliente`, `cantidad`, `dire`, `tel`, `total`) VALUES
(1, 'Capricciosa, Cuatro Quesos', 'Chica, Grande', 'vicky123', '1, 1', 'Corrientes 3934', 1132742025, 28000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

CREATE TABLE `registro_usuario` (
  `id_regis_usuario` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `user_registration` varchar(255) DEFAULT NULL,
  `registry_key` varchar(255) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `dire` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `sex` text DEFAULT NULL,
  `reset_token` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro_usuario`
--

INSERT INTO `registro_usuario` (`id_regis_usuario`, `name`, `lastname`, `user_registration`, `registry_key`, `tel`, `dire`, `email`, `date`, `sex`, `reset_token`) VALUES
(1, 'Victoria', 'Rios', 'vicky123', '$2y$10$e3PqEbm326e7ZyQpZ3gZWuChp3QD1cOS/nvxnBCE/os0LIwcNjgyi', '1132742025', 'Corrientes 3934', 'mvriosdonadeo@emae.edu.ar', '2003-09-15', 'Mujer', NULL);

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
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  MODIFY `id_regis_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
