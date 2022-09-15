-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-09-2021 a las 22:25:39
-- Versión del servidor: 10.2.40-MariaDB-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pastel19_carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Bocaditos', 'Ropar para dama', 'women.jpg'),
(2, 'Tortas', 'Ropa para hombre', 'men.jpg'),
(3, 'Kekes', 'Ropa para niños', 'children.jpg'),
(4, 'Tartas', '', ''),
(5, 'Postres Individuales', '', ''),
(6, 'Pasteles', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `fecha_vencimiento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`id`, `codigo`, `status`, `tipo`, `valor`, `fecha_vencimiento`) VALUES
(1, '48607', 'utilizado', 'moneda', '10', '2021-06-30'),
(2, 'FELIZDIAPAPA', 'utilizado', 'moneda', '20', '2021-06-27'),
(3, '50163', 'utilizado', 'porcentaje', '10', '2021-07-04'),
(4, '19866', 'utilizado', 'moneda', '11', '2021-06-06'),
(5, '20287', 'utilizado', 'porcentaje', '1', '2021-06-26'),
(6, '16521', 'utilizado', 'porcentaje', '10', '2021-06-30'),
(7, '66616', 'utilizado', 'moneda', '5', '2021-07-03'),
(8, '97112', 'utilizado', 'moneda', '12', '2021-06-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id_envio` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cp` int(10) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`id_envio`, `company`, `direccion`, `estado`, `cp`, `id_venta`) VALUES
(31, 'UCH', 'Mz U Lt 17. AA.HH Parcela C Las Brisas', 'Ventanilla', 7066, 32),
(32, 'UCH', 'Los Olivos', 'Los Olivos', 10080, 33),
(33, 'JOSE SAC', 'Ventanilla', 'Ventanilla', 7066, 34),
(34, 'VENTANILLA', 'VENTA', 'VENTANILLA', 7066, 35),
(35, 'JOSE SAC', '3780 Fairfax Drive', 'Estados Unidos', 10080, 36),
(36, 'PRUEBA', 'PRUEBA', 'PRUEBA', 0, 37),
(37, 'prueba', 'prueba', 'prueba', 0, 38),
(38, 's', 's', 's', 0, 39),
(39, '', '', '', 0, 40),
(40, '', '', '', 0, 41),
(41, '', '', '', 0, 42),
(42, 'UCH', 'prueba', 'Eslovenia', 0, 43),
(43, '', '', '', 0, 44),
(44, 'prueba', 'prueba', 'Eslovenia', 7066, 45),
(45, 'prueba', 'prueba', 'Eslovenia', 7066, 46),
(46, 'josejose', 'josejose', 'josejose', 0, 47),
(47, 'jaja', 'jajaj', 'jajaj', 0, 48),
(48, 'rapido', 'rapido', 'rapido', 0, 49),
(49, 'hola', 'hola', 'final', 0, 50),
(50, 'Jose', 'Callao', 'Ventanilla', 1235, 51),
(51, 'jose', 'comas', 'comas', 12541, 52),
(52, 'UCH', 'Mz U Lt 17. AA.HH Parcela C Las Brisas', 'ventanilla', 7066, 53),
(53, 'UCH', 'Mz U Lt 17. AA.HH Parcela C Las Brisas', 'VENTANILLA', 7066, 54),
(54, 'UNIVERSIDAD', 'LOS OLIVOS S/N', 'LOS OLIVOS', 7006, 55),
(55, 'JOSE', 'LEONEL', 'INGA', 0, 56),
(56, 'prueba 23', 'direccion', 'distritp', 0, 57),
(57, 'casass', 'urb. REAL SANTA', 'LIMA', 1897, 58),
(58, 'jajja', 'jajaja', 'jajaj', 0, 59),
(59, 'sos', 'urb. REAL SANTA', 'LIMA', 1897, 60),
(60, 'UCH', 'urb. REAL SANTA', 'LIMA', 1897, 61);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `metodo` varchar(50) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `metodo`, `id_venta`) VALUES
(24, 'mercado_pago', 32),
(25, 'paypal', 33),
(26, 'paypal', 34),
(27, 'mercado_pago', 35),
(28, 'mercado_pago', 36),
(29, 'mercado_pago', 49),
(30, 'paypal', 50),
(31, 'paypal', 51),
(32, 'paypal', 53),
(33, 'paypal', 54),
(34, 'mercado_pago', 55),
(35, 'paypal', 59),
(36, 'mercado_pago', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `inventario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `inventario`, `id_categoria`) VALUES
(1, 'Tarta Sacher', 'Rica torta sacher elaborada con insumos naturales', 45, '1624312319.jpg', 10, 2),
(3, 'Keke de Naranja', 'Elaborado con naranjas naturales y edulcorante natural Stevia ', 11, '1624276180.jpg', 6, 3),
(58, 'Empanada de Carne', 'Ricas empanadas reciÃ©n hechas de carne', 3, '1624279643.jpg', 36, 1),
(59, 'Empanadas de Pollo', 'Ricas empanadas de pollo recien hechas', 2, '1624279686.jpg', 70, 1),
(74, 'Alfajores Tradicionales', 'Delicioso alfajores hecho a base de insumos naturales', 1, '1624279879.jpg', 81, 1),
(84, 'Mil hojas', 'Ricas milhojas hechas a base de insumos naturales', 3, '1624279955.jpg', 27, 1),
(94, 'TequeÃ±os con Queso', 'Ricoss tequeÃ±os con queso hechos a base de insumos naturales', 3, '1624280260.jpg', 100, 1),
(95, 'Trufas de manjar blanco', 'Ricas trufas de manjar blanco hechas a base de insumos naturales', 4, '1624280363.jpg', 50, 1),
(96, 'Keke de Platano', 'Elaborado con plÃ¡tanos naturales y edulcorante natural Stevia ', 12, '1624275803.jpg', 3, 3),
(97, 'Keke de Vainilla', 'Elaborado insumos naturales sin preservantes y  edulcorante natural Stevia ', 10, '1624276124.jpg', 9, 3),
(99, 'Keke de PiÃ±a', 'Elaborado con productos naturales sin preservantes y con edulcorante natural Stevia ', 13, '1624276312.jpg', 9, 3),
(100, 'Keke de Pecanas', 'Elaborado con productos naturales sin preservantes y edulcorante natural Stevia ', 12, '1624276382.jpg', 10, 3),
(101, 'Keke de Pasas', 'Elaborado con productos naturales sin preservantes y edulcorante natural Stevia ', 10, '1624276497.jpg', 10, 3),
(102, 'Keke de Pera', 'Elaborado con peras naturales y edulcorante natural Stevia ', 14, '1624276582.jpg', 10, 3),
(103, 'Keke de Chocolate', 'Elaborado con chocolate natural y edulcorante natural Stevia ', 15, '1624276673.jpg', 10, 3),
(104, 'Keke Marmoleado', 'Elaborado con vainilla, chocolate y edulcorante natural Stevia ', 10, '1624276845.jpg', 10, 3),
(105, 'Keke de Zanahoria', 'Elaborado con zanahorias naturales y edulcorante natural Stevia ', 13, '1624276997.jpg', 8, 3),
(106, 'Keke de Mandarina', 'Elaborado con mandarinas naturales y edulcorante natural Stevia ', 16, '1624277326.jpg', 10, 3),
(107, 'Keke de LimÃ³n', 'Elaborado con limones naturales y fresco ademÃ¡s de edulcorante natural Stevia ', 17, '1624277441.jpg', 10, 3),
(108, 'Cupcakes de ArÃ¡ndanos', 'Deliciosos cupcakes elaborado con arÃ¡ndanos frescos', 6, '1624307832.jpg', 50, 5),
(110, 'Cupcakes de calabazas', 'Ricos cupcakes hechos de calabaza elaborados con Stevia', 6.5, '1624308050.jpg', 20, 5),
(111, 'Cupcakes de relleno de piÃ±a', 'Ricos cupcakes a base de piÃ±a elaborados con Stevia', 5.5, '1624308166.jpg', 50, 5),
(112, 'Cupcakes de Naranja', 'Ricos cupcakes elaborados con naranjas frescas elaborados a base de Stevia', 3.5, '1624308259.jpg', 50, 5),
(113, 'Cupcakes de Chocolate', 'Ricos cupcakes de chocolate fresco con arÃ¡ndanos elaborados con Stevia', 4.5, '1624308347.jpg', 50, 5),
(114, 'Tartaleta de Fresa', 'Ricas tartaletas elaborados con fresas frescas con insumos naturales', 4.5, '1624308428.jpg', 50, 5),
(115, 'Tartaleta de Merengue', 'Ricas tartaletas elaborados frescas elaborados con insumos naturales', 3.5, '1624308482.jpg', 50, 5),
(116, 'Tartaleta de TuTi Fruti', 'Ricas tartaletas elaborados con frutas frescas y con insumos naturales', 5.5, '1624308542.jpg', 50, 5),
(117, 'Crema Volteada', 'Rica crema volteada casera elaborada con insumos frescos', 1.5, '1624308624.jpg', 50, 5),
(118, 'Flan', 'Rica porciÃ³n de individual de flan casera', 1, '1624308681.jpg', 50, 5),
(119, 'Leche Asada', 'Rica leche asada de casa elaborada con insumos frescos', 3.5, '1624308732.jpg', 50, 5),
(120, 'Mousse de Naranja', 'Rico mousse de naranja elaborado con stevia', 3, '1624308824.jpg', 20, 5),
(121, 'Torta Selva Negra', 'Rica torta selva negra elaborada con insumos naturales', 23.5, '1624312056.jpg', 10, 2),
(122, 'Torta Selva Negra', 'Rica torta selva negra elaborada con insumos naturales', 23.5, '1624312189.jpg', 10, 2),
(123, 'Torta de Frutas', 'Rica torta de frutas elaborada con insumos naturales', 30.5, '1624312262.jpg', 10, 2),
(124, 'Torta de Chocolate', 'Rica torta de chocolate elaborada con insumos naturales', 30.5, '1624312360.jpg', 10, 2),
(125, 'Cheesecake de mango', 'Rico cheesecake de mango elaborada con insumos naturales', 25.5, '1624312520.jpg', 10, 2),
(126, 'Cheesecake de arÃ¡ndano', 'Rico cheesecake de arÃ¡ndano elaborada con insumos naturales', 26.5, '1624312573.jpg', 10, 2),
(127, 'Cheesecake de oreo', 'Rico cheesecake de oreo elaborada con insumos naturales', 35.5, '1624312618.jpg', 10, 2),
(128, 'Cheesecake de maracuyÃ¡', 'Rico cheesecake de maracuyÃ¡ elaborada con insumos naturales', 26.5, '1624312695.jpg', 10, 2),
(129, 'Cheesecake de moras', 'Rico cheesecake de moras elaborada con insumos naturales', 29.5, '1624312743.jpg', 10, 2),
(130, 'Torta de Moka', 'Rica torta de moka elaborada con insumos naturales', 45.5, '1624312788.jpg', 10, 2),
(131, 'Torta de Tres Leches', 'Rica torta de tres leches elaborada con insumos naturales', 38.5, '1624312846.jpg', 10, 2),
(132, 'Tarta de Manzana', 'Rica tarta de Manzana elaborada con insumos naturales', 12.5, '1624313793.jpg', 10, 4),
(133, 'Tarta de PiÃ±a', 'Rica tarta de PiÃ±a elaborada con insumos naturales', 13.5, '1624313827.jpg', 10, 4),
(134, 'Tarta de Durazno', 'Rica tarta de durazno elaborada con insumos naturales', 14.5, '1624313862.jpg', 10, 4),
(135, 'Tarta de Mango', 'Rica tarta de Mango elaborada con insumos naturales', 15, '1624313899.jpg', 10, 4),
(136, 'Tarta de ArÃ¡ndano ', 'Rica tarta de arÃ¡ndano elaborada con insumos naturales', 15, '1624313937.jpg', 3, 4),
(137, 'Tarta de Fresa', 'Rica tarta de fresa elaborada con insumos naturales', 16, '1624313969.jpg', 7, 4),
(138, 'Bizcocho', 'Ricos bizcochos elaborados con productos naturales', 15, '1624316568.jpg', 9, 6),
(139, 'Pastel de merengue', 'Rico pastel de merengue elaborados con productos naturales', 15.5, '1624316612.jpg', 10, 6),
(140, 'Chiffon', 'Rico chiffon elaborado con productos naturales', 16, '1624316653.jpg', 10, 6),
(141, 'Pastel de Zanahoria', 'Rico pastel de zanahoria elaborado con productos naturales', 17, '1624316694.jpg', 10, 6),
(142, 'Pastel de PiÃ±a', 'Rica pastel de piÃ±a elaborado con productos naturales', 13, '1624316740.jpg', 9, 6),
(143, 'Pastel de Choclo', 'Rico pastel de choclo elaborado con productos naturales', 16.5, '1624316776.jpg', 5, 6),
(144, 'Pastel de Chocolate', 'Rico pastel de chocolate elaborado con productos naturales', 15.5, '1624316829.jpg', 7, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_venta`
--

INSERT INTO `productos_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(37, 32, 58, 1, 10, 10),
(38, 33, 59, 2, 71, 142),
(39, 34, 74, 1, 79, 79),
(40, 35, 94, 1, 11, 11),
(41, 36, 58, 3, 10, 30),
(43, 38, 105, 1, 13, 13),
(44, 39, 136, 1, 15, 15),
(45, 40, 136, 1, 15, 15),
(46, 41, 136, 1, 15, 15),
(47, 42, 136, 1, 15, 15),
(48, 43, 137, 1, 16, 16),
(49, 44, 137, 1, 16, 16),
(50, 45, 136, 1, 15, 15),
(51, 46, 136, 1, 15, 15),
(52, 47, 137, 1, 16, 16),
(53, 47, 136, 1, 15, 15),
(54, 48, 144, 1, 15.5, 15.5),
(55, 49, 99, 1, 13, 13),
(56, 50, 97, 1, 10, 10),
(57, 51, 143, 1, 16.5, 16.5),
(58, 52, 142, 1, 13, 13),
(59, 53, 59, 1, 2, 2),
(60, 54, 138, 1, 15, 15),
(61, 55, 143, 4, 16.5, 66),
(62, 56, 96, 2, 12, 24),
(63, 57, 144, 1, 15.5, 15.5),
(64, 58, 3, 1, 11, 11),
(65, 59, 144, 1, 15.5, 15.5),
(66, 60, 3, 2, 11, 22),
(67, 61, 3, 1, 11, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_perfil` varchar(300) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `telefono`, `email`, `password`, `img_perfil`, `nivel`) VALUES
(2, 'Leonel Quintana', '987654321', 'josingaq@uch.pe', '123456', '1624177634.jpg', 'admin'),
(6, 'franco', '123', 'franco@uch.pe', '450', '1624207343.jpg', 'admin'),
(10, 'Olenka', '999999999', 'olesamamev@uch.pe', '123456', '1624479982.jpg', 'cliente'),
(11, 'jose', '922652524', 'prueba@uch.pe', '123456', '1624480018.jpg', 'cliente'),
(39, 'stephanne', '4582416351', 'stephanne@gmail.com', '12345', 'default.jpg', 'cliente'),
(41, 'JOSE', '922652524', 'JOSE@UCH.PE', '123456', 'default.jpg', 'cliente'),
(42, 'Lorena Herrera', '957314543', 'lorena070395@gmail.com', 'holachiqui', '1624480863.jpg', 'cliente'),
(43, 'Stuward', '953275598', 'gricasanor@uch.pe', '123', '1624480588.jpg', 'admin'),
(44, 'Esther', '456123789', 'esther@uch.pe', '123', '1624481078.jpg', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_cupon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `total`, `fecha`, `id_cupon`) VALUES
(32, 2, 10, '2021-06-20 15:06:47', 0),
(33, 11, 142, '2021-06-21 05:06:20', 0),
(34, 11, 79, '2021-06-21 06:06:27', 0),
(35, 11, 11, '2021-06-21 06:06:02', 0),
(36, 11, 30, '2021-06-21 09:06:21', 0),
(38, 2, 13, '2021-06-21 10:06:49', 0),
(39, 2, 15, '2021-06-21 10:06:43', 0),
(40, 2, 15, '2021-06-21 10:06:17', 0),
(41, 2, 15, '2021-06-21 10:06:36', 0),
(42, 2, 15, '2021-06-21 10:06:36', 0),
(43, 2, 16, '2021-06-21 10:06:21', 0),
(44, 2, 16, '2021-06-21 10:06:42', 0),
(45, 2, 15, '2021-06-21 10:06:02', 0),
(46, 2, 15, '2021-06-21 10:06:47', 0),
(47, 2, 31, '2021-06-21 11:06:43', 1),
(48, 2, 15.5, '2021-06-21 12:06:52', 3),
(49, 11, 13, '2021-06-21 12:06:19', 4),
(50, 11, 10, '2021-06-21 12:06:08', 5),
(51, 11, 16.5, '2021-06-21 12:06:03', 0),
(52, 11, 13, '2021-06-21 12:06:59', 0),
(53, 2, 2, '2021-06-21 13:06:03', 0),
(54, 41, 15, '2021-06-21 15:06:55', 6),
(55, 41, 66, '2021-06-21 15:06:47', 7),
(56, 41, 24, '2021-06-21 15:06:16', 8),
(57, 2, 15.5, '2021-06-23 08:06:48', 0),
(58, 44, 11, '2021-06-23 08:06:51', 0),
(59, 2, 15.5, '2021-06-23 09:06:38', 0),
(60, 43, 22, '2021-06-23 10:06:27', 0),
(61, 43, 11, '2021-06-23 10:06:49', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id_envio`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
