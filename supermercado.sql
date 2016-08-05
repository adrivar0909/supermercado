-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 02-08-2016 a las 00:19:50
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `supermercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
`idCat` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCat`, `nombre`) VALUES
(1, 'Verduras'),
(2, 'Bebidas'),
(3, 'Carnes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`idCliente` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `contrasena` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `direccion` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `correo`, `contrasena`, `direccion`, `telefono`) VALUES
(1, 'Juan Pablo Mercado', 'juanpablo20@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '4to anillo Av. alemana nro 49', '70895962'),
(2, 'Mario Antonio Cruz', 'juanpablo20@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '60894652'),
(3, 'Pedro Alejandro', 'pedroale55@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '77895126'),
(4, 'Elizabeth Salvatierra', 'elisalvatierra_4@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '70432415'),
(5, 'Vania Flores', 'vania44@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '60854213');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE IF NOT EXISTS `detallepedido` (
  `idDetalle` int(11) NOT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`idDetalle`, `idPedido`, `idProducto`) VALUES
(1, 2, 2),
(2, 2, 3),
(3, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enviador`
--

CREATE TABLE IF NOT EXISTS `enviador` (
`idEnviador` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `fechaNacimiento` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enviador`
--

INSERT INTO `enviador` (`idEnviador`, `nombre`, `direccion`, `fechaNacimiento`) VALUES
(1, 'Mario Andres Pedraza', 'Calle 4 de mayo B/Los olivos', '29/05/94');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
`idPedido` int(11) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idEnviador` int(11) DEFAULT NULL,
  `latitud` varchar(100) DEFAULT NULL,
  `longitud` varchar(100) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `monto` float DEFAULT NULL,
  `cliente` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `idCliente`, `idEnviador`, `latitud`, `longitud`, `fecha`, `estado`, `monto`, `cliente`, `direccion`) VALUES
(2, 1, 1, '-17.774221', '-63.186772', '08/07/16', 'S', 104.5, 'Juan Pablo Mercado', 'Avenida Busch nro 400'),
(3, 2, 1, '-17.778701', '-63.183088', '07/07/16', 'S', 80.5, 'Mario Antonio Cruz', 'Calle  de junio nro 27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
`idPro` int(11) NOT NULL,
  `idCat` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idPro`, `idCat`, `cantidad`, `precio`, `descripcion`) VALUES
(2, 1, 3, 4.7, 'Lechuga'),
(3, 1, 100, 10.2, 'Tomate'),
(4, 1, 100, 5, 'Cebolla'),
(5, 2, 50, 8, 'Cerveza Paceña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`idUser` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `codigo_verificacion` varchar(128) NOT NULL,
  `tipo` char(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `email`, `codigo_verificacion`, `tipo`) VALUES
(1, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'hussepe@gmail.com', 'abcdef123456', 'a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`idCat`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
 ADD PRIMARY KEY (`idDetalle`), ADD KEY `idPedido` (`idPedido`), ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `enviador`
--
ALTER TABLE `enviador`
 ADD PRIMARY KEY (`idEnviador`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
 ADD PRIMARY KEY (`idPedido`), ADD KEY `idCliente` (`idCliente`), ADD KEY `idEnviador` (`idEnviador`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`idPro`), ADD KEY `idCat` (`idCat`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `enviador`
--
ALTER TABLE `enviador`
MODIFY `idEnviador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
MODIFY `idPro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
ADD CONSTRAINT `FK_detallePedido_pedido` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_detallePedido_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idPro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
ADD CONSTRAINT `FK_pedido_cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_pedido_enviador` FOREIGN KEY (`idEnviador`) REFERENCES `enviador` (`idEnviador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categoria` (`idCat`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
