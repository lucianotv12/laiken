-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2016 a las 23:46:17
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laiken`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `activo`) VALUES
(1, 'Proteccion Catodica', 1),
(2, 'Lineas Especiales', 1),
(3, 'Grafito', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `industrias`
--

CREATE TABLE `industrias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `industrias`
--

INSERT INTO `industrias` (`id`, `nombre`, `activo`) VALUES
(1, 'Oil & Gas', 1),
(2, 'Industria', 1),
(3, 'Energía', 1),
(4, 'Minería', 1),
(5, 'Construcción', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text,
  `idCategoria` int(11) NOT NULL,
  `idSubcategoria` int(11) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `idCategoria`, `idSubcategoria`, `activo`) VALUES
(1, 'Anodos de Magnesio', ' ALEACIÃ“N', 1, 1, 1),
(2, 'MGLK 4-8-14-14b-22-28', ' CAÃ‘ERÃAS ENTERRADAS', 1, 1, 1),
(3, 'MGLK 17-44-44B', ' FONDO DE TANQUE DE ALMACENAMIENTO DE AGUA', 1, 1, 1),
(4, 'MGLK 34-43', ' CASCO DE BARCOS', 1, 1, 1),
(5, 'MGLK 36-38', ' CASCO DE BARCOS', 1, 1, 1),
(6, 'MGLK 37-39-42', ' CASCO DE BARCOS', 1, 1, 1),
(7, 'MGLK 40-41', ' CASCO DE BARCOS', 1, 1, 1),
(8, 'MGLK-ER', ' CAÃ‘ERIAS ENTERRADAS / TERMOTANQUES', 1, 1, 1),
(9, 'MGLK-R', ' CAÃ‘ERÃAS ENTERRADAS', 1, 1, 1),
(10, 'MGLKY20-21', ' INTERCAMBIADORES DE CALOR', 1, 1, 1),
(11, 'Ãnodos de Zinc', ' ALEACIÃ“N', 1, 2, 1),
(12, 'ZNLK 34-43', ' CASCO DE BARCOS', 1, 2, 1),
(13, 'ZNLK 36-38', ' CASCO DE BARCOS', 1, 2, 1),
(14, 'ZNLK 37-39-42', ' CASCO DE BARCOS', 1, 2, 1),
(15, 'ZNLK 40-41', ' CASCO DE BARCOS', 1, 2, 1),
(16, 'ZNLK45-60', ' CAÃ‘ERÃAS ENTERRADAS', 1, 2, 1),
(17, 'ZNLK-R', ' TORRES DE ALTA TENSIÃ“N', 1, 2, 1),
(18, 'Ãnodos de Aluminio', ' ALEACIÃ“N', 1, 3, 1),
(19, 'ALLK 3-60', ' SEPARADORES DE PETRÃ“LEO', 1, 3, 1),
(20, 'ALLK 34-43', ' CASCO DE BARCOS', 1, 3, 1),
(21, 'ALLK 36-38', ' CASCO DE BARCOS', 1, 3, 1),
(22, 'ALLK 37-39-42', ' CASCO DE BARCOS', 1, 3, 1),
(23, 'ALLK 40-41', ' CASCO DE BARCOS', 1, 3, 1),
(24, 'ALLK 44-44B-17', ' FONDO DE TANQUE DE ALMACENAMIENTO DE PETROLEO', 1, 3, 1),
(25, 'ALLK 45-60', ' TANQUES DE BALASTO', 1, 3, 1),
(26, 'ALLK 70 A - 70 F - 71 A', ' ESTRUCTURAS METALICAS EN AMBIENTES MARINOS', 1, 3, 1),
(27, 'ALLK 70-75', ' ESTRUCTURAS METALICAS EN AMBIENTES MARINOS', 1, 3, 1),
(28, 'ALLK 95', ' ESTRUCTURAS METALICAS EN AMBIENTES MARINOS', 1, 3, 1),
(29, 'ALLK98', ' PLATAFORMAS OFFSHORE', 1, 3, 1),
(30, 'ALLK99', ' PLATAFORMAS OFFSHORE', 1, 3, 1),
(31, 'ALLKB 90 - 91', ' CAÃ‘ERÃAS SUMERGIDAS', 1, 3, 1),
(32, 'ALLKT48D-E-6', ' ESTRUCTURAS METÃLICAS EN AMBIENTES MARINOS', 1, 3, 1),
(33, 'ALLKT48D-E-8', ' ESTRUCTURAS METÃLICAS EN AMBIENTES MARINOS', 1, 3, 1),
(34, 'GRAFITO: GRLK 3-60 4-80', ' CORRIENTE IMPRESA', 1, 4, 1),
(35, 'HIERRO SILICIO: LKFSC260F G', ' CORRIENTE IMPRESA', 1, 4, 1),
(36, 'GRAFITO: TI - MMO: TILK 1-40 1-60', ' CORRIENTE IMPRESA', 1, 4, 1),
(37, 'Cadweld plus', ' ', 1, 5, 1),
(38, 'Elecsys ISM-4', ' ', 1, 6, 1),
(39, 'SentraLink CP ', ' ', 1, 6, 1),
(40, 'Watchdog Scout', ' ', 1, 6, 1),
(41, 'Watchdog Tracker', ' ', 1, 6, 1),
(42, 'Super Therm ', ' ', 2, 7, 1),
(43, 'SunshieldÂ®', ' ', 2, 7, 1),
(44, 'HPC', ' ', 2, 7, 1),
(45, 'Epoxotherm', ' ', 2, 7, 1),
(46, 'HSC', ' ', 2, 7, 1),
(47, 'Omega Fire', ' ', 2, 7, 1),
(48, 'Rust Grip', ' ', 2, 8, 1),
(49, 'Lining Kote 6000 ', ' ', 2, 8, 1),
(50, 'Moist Metal GripÂ®', ' ', 2, 8, 1),
(51, 'Chlor Rid', ' ', 2, 8, 1),
(52, 'Alocit Systems', ' ', 2, 8, 1),
(53, 'Enviropeel ', ' ', 2, 8, 1),
(54, 'Discos de ruptura de grafito', ' ', 2, 9, 1),
(55, 'Discos de Ruptura', ' ', 2, 10, 1),
(56, 'ProtecciÃ³n de Explosiones', ' ', 2, 10, 1),
(57, 'Paneles de Venteo', ' ', 2, 10, 1),
(58, 'DetecciÃ³n y Control', ' ', 2, 10, 1),
(59, 'MANGUITOS CON ROSCA CONICA LENTONÂ® ', ' ', 2, 11, 1),
(60, 'LENTONÂ® ', ' ', 2, 11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_img`
--

CREATE TABLE `productos_img` (
  `id` int(11) NOT NULL,
  `url_img` varchar(150) NOT NULL,
  `activo` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_img`
--

INSERT INTO `productos_img` (`id`, `url_img`, `activo`, `idProducto`) VALUES
(1, 'AM-01.jpg', 1, 1),
(2, 'AM-02.jpg', 1, 2),
(3, 'AM-03.jpg', 1, 3),
(4, 'AM-04.jpg', 1, 4),
(5, 'AM-05.jpg', 1, 5),
(6, 'AM-06.jpg', 1, 6),
(7, 'AM-07.jpg', 1, 7),
(8, 'AM-08.jpg', 1, 8),
(9, 'AM-09.jpg', 1, 9),
(10, 'AM-10.jpg', 1, 10),
(11, 'AZ-01.png', 1, 11),
(12, 'AZ-02.png', 1, 12),
(13, 'AZ-03.png', 1, 13),
(14, 'AZ-04.png', 1, 14),
(15, 'AZ-05.png', 1, 15),
(16, 'AZ-06.png', 1, 16),
(17, 'AZ-07.png', 1, 17),
(18, 'AA-01.png', 1, 18),
(19, 'AA-02.png', 1, 19),
(20, 'AA-03.png', 1, 20),
(21, 'AA-04.png', 1, 21),
(22, 'AA-05.png', 1, 22),
(23, 'AA-06.png', 1, 23),
(24, 'AA-07.png', 1, 24),
(25, 'AA-08.png', 1, 25),
(26, 'AA-09.png', 1, 26),
(27, 'AA-10.png', 1, 27),
(28, 'AA-11.png', 1, 28),
(29, 'AA-12.png', 1, 29),
(30, 'AA-13.png', 1, 30),
(31, 'AA-14.png', 1, 31),
(32, 'AA-15.png', 1, 32),
(33, 'AA-16.png', 1, 33),
(34, 'CI-01.png', 1, 34),
(35, 'CI-02.png', 1, 35),
(36, 'CI-03.png', 1, 36),
(37, 'SE-01.png', 1, 37),
(38, 'MR-01.png', 1, 38),
(39, 'MR-02.png', 1, 39),
(40, 'MR-03.png', 1, 40),
(41, 'MR-04.png', 1, 41),
(42, 'AT-01.jpg', 1, 42),
(43, 'AT-02.jpg', 1, 43),
(44, 'AT-03.jpg', 1, 44),
(45, 'AT-04.jpg', 1, 45),
(46, 'AT-05.jpg', 1, 46),
(47, 'AT-06.jpg', 1, 47),
(48, 'CC-01.jpg', 1, 48),
(49, 'CC-02.jpg', 1, 49),
(50, 'CC-03.jpg', 1, 50),
(51, 'CC-04.jpg', 1, 51),
(52, 'CC-05.jpg', 1, 52),
(53, 'CC-06.jpg', 1, 53),
(54, 'DRG-01.jpg', 1, 54),
(55, 'FIKE-01.png', 1, 55),
(56, 'FIKE-02.png', 1, 56),
(57, 'FIKE-03.png', 1, 57),
(58, 'FIKE-04.png', 1, 58),
(59, 'LE-02.png', 1, 59),
(60, 'LE-01.png', 1, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_industrias`
--

CREATE TABLE `productos_industrias` (
  `idProducto` int(11) NOT NULL,
  `idIndustria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_industrias`
--

INSERT INTO `productos_industrias` (`idProducto`, `idIndustria`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(42, 4),
(42, 5),
(43, 1),
(43, 2),
(43, 4),
(43, 5),
(44, 1),
(44, 2),
(44, 4),
(44, 5),
(45, 1),
(45, 2),
(45, 4),
(45, 5),
(46, 1),
(46, 2),
(46, 4),
(46, 5),
(47, 1),
(47, 2),
(47, 4),
(47, 5),
(48, 1),
(48, 2),
(48, 4),
(48, 5),
(49, 1),
(49, 2),
(49, 4),
(49, 5),
(50, 1),
(50, 2),
(50, 4),
(50, 5),
(51, 1),
(51, 2),
(51, 4),
(51, 5),
(52, 1),
(52, 2),
(52, 4),
(52, 5),
(53, 1),
(53, 2),
(53, 4),
(53, 5),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 5),
(60, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `idCategoria`, `nombre`, `activo`) VALUES
(1, 1, 'Anodos Magnesio', 1),
(2, 1, 'Anodos Zinc', 1),
(3, 1, 'Anodos Aluminio', 1),
(4, 1, 'Corriente Impresa', 1),
(5, 1, 'Soldaduras Exotérmicas', 1),
(6, 1, 'Monitoreo Remoto', 1),
(7, 2, 'Aislación Térmica', 1),
(8, 2, 'Control de corrosión', 1),
(9, 2, 'Discos de ruptura de grafito', 1),
(10, 2, 'FIKE', 1),
(11, 2, 'PENTAIR', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `industrias`
--
ALTER TABLE `industrias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_img`
--
ALTER TABLE `productos_img`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_industrias`
--
ALTER TABLE `productos_industrias`
  ADD PRIMARY KEY (`idProducto`,`idIndustria`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `industrias`
--
ALTER TABLE `industrias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT de la tabla `productos_img`
--
ALTER TABLE `productos_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
