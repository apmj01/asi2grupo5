-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2015 a las 07:18:27
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atencion_ciudadana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads_acr_recollecion`
--

CREATE TABLE `ads_acr_recollecion` (
  `id_ads_acr` varchar(5) NOT NULL,
  `ads_camion` varchar(45) NOT NULL,
  `ads_serie_camion` varchar(45) NOT NULL,
  `ads_placa` varchar(45) NOT NULL,
  `ads_kilometraje` varchar(45) NOT NULL,
  `id_ads_area` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads_area`
--

CREATE TABLE `ads_area` (
  `id_ads_area` varchar(5) NOT NULL,
  `ads_descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads_atr_tipo_recoleccion`
--

CREATE TABLE `ads_atr_tipo_recoleccion` (
  `id_ads_atr` varchar(5) NOT NULL,
  `id_cat_atr` varchar(5) NOT NULL,
  `ads_fecha_inicio` date DEFAULT NULL,
  `ads_fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads_catalogo_atr`
--

CREATE TABLE `ads_catalogo_atr` (
  `id_cat_atr` varchar(5) NOT NULL,
  `ads_tipo_recoleccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads_resoluciones`
--

CREATE TABLE `ads_resoluciones` (
  `id_ads_resoluciones` varchar(5) NOT NULL,
  `ads_resolcuion_solicitud` varchar(1) NOT NULL,
  `id_ads_atr` varchar(5) NOT NULL,
  `id_ads_acr` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads_solicitud`
--

CREATE TABLE `ads_solicitud` (
  `id_ads_solicitud` varchar(5) NOT NULL,
  `id_ads_resoluciones` varchar(5) NOT NULL,
  `id_contribuyente` varchar(5) NOT NULL,
  `id_modulo` varchar(5) NOT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `hora_solicitud` time DEFAULT NULL,
  `descripcion_solicitud` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cmt_enterrador`
--

CREATE TABLE `cmt_enterrador` (
  `id_enterrador` varchar(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cmt_fallecido`
--

CREATE TABLE `cmt_fallecido` (
  `id_fallecido` varchar(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `fecha_defuncion` date DEFAULT NULL,
  `id_familia` varchar(5) NOT NULL,
  `id_enterrador` varchar(5) NOT NULL,
  `id_tumba` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cmt_familiar`
--

CREATE TABLE `cmt_familiar` (
  `id_familia` varchar(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `movil` varchar(25) NOT NULL,
  `dui` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cmt_sector`
--

CREATE TABLE `cmt_sector` (
  `id_sector` varchar(5) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion_geografica` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cmt_solicitud`
--

CREATE TABLE `cmt_solicitud` (
  `id_solcitud` varchar(5) NOT NULL,
  `id_fallecido` varchar(5) NOT NULL,
  `id_modulo` varchar(5) NOT NULL,
  `id_contribuyente` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cmt_tipo_tumba`
--

CREATE TABLE `cmt_tipo_tumba` (
  `id_tipo_tumba` varchar(5) NOT NULL,
  `descipcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cmt_tumba`
--

CREATE TABLE `cmt_tumba` (
  `id_tumba` varchar(5) NOT NULL,
  `id_tipo_tumba` varchar(5) NOT NULL,
  `tamanno` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `precio` float DEFAULT NULL,
  `sector` varchar(5) NOT NULL,
  `id_sector` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_contribuyente`
--

CREATE TABLE `core_contribuyente` (
  `id_contribuyente` varchar(50) NOT NULL,
  `nombre_contribuyente` varchar(150) NOT NULL,
  `dui_contribuyete` varchar(10) NOT NULL,
  `direccion_contribuyete` varchar(150) NOT NULL,
  `correo_contribuyete` varchar(50) NOT NULL,
  `telefono_contribuyete` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_forma_pago`
--

CREATE TABLE `core_forma_pago` (
  `id_forma_pago` varchar(5) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_modulos`
--

CREATE TABLE `core_modulos` (
  `id_modulo` varchar(5) NOT NULL,
  `descripcion_modulo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_pagos`
--

CREATE TABLE `core_pagos` (
  `id_pago` varchar(5) NOT NULL,
  `id_transaccion` varchar(5) NOT NULL,
  `id_tipo_pago` varchar(5) NOT NULL,
  `id_forma_pago` varchar(5) NOT NULL,
  `no_factura` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_roles`
--

CREATE TABLE `core_roles` (
  `id_rol` varchar(5) NOT NULL,
  `descripcion_rol` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `core_roles`
--

INSERT INTO `core_roles` (`id_rol`, `descripcion_rol`) VALUES
('00001', 'Administrador'),
('00002', 'Soporte'),
('00003', 'Supervisor Mercados'),
('00004', 'Agente Mercados'),
('00005', 'Supervisor Desechos'),
('00006', 'Agente desechos'),
('00007', 'Supervisor Cementerio'),
('00008', 'Agente Cementerio'),
('00009', 'Supervisor Registro'),
('00010', 'Agente Registro'),
('00011', 'Contribuyente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_tipo_pago`
--

CREATE TABLE `core_tipo_pago` (
  `id_tipo_pago` varchar(5) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_transacciones`
--

CREATE TABLE `core_transacciones` (
  `id_transaccion` varchar(5) NOT NULL,
  `id_solicitud` varchar(15) NOT NULL,
  `id_modulo` varchar(5) NOT NULL,
  `id_contribuyente` varchar(50) NOT NULL,
  `id_usuario` varchar(20) NOT NULL,
  `estatus` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core_usuarios`
--

CREATE TABLE `core_usuarios` (
  `id_usuario` varchar(20) NOT NULL,
  `clave_acceso` varchar(15) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `id_rol` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `core_usuarios`
--

INSERT INTO `core_usuarios` (`id_usuario`, `clave_acceso`, `nombre`, `apellido`, `dui`, `nit`, `estatus`, `id_rol`) VALUES
('Josue.Arias', '12345', 'Josue', 'Arias', '45646546-5', '5464-654654-331-2', '2', '00006');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mdo_puesto`
--

CREATE TABLE `mdo_puesto` (
  `id_puesto` varchar(5) NOT NULL,
  `Numero_Puesto` varchar(5) DEFAULT NULL,
  `Num_Personas` int(11) DEFAULT NULL,
  `Largo` decimal(5,0) DEFAULT NULL,
  `id_tipo_puesto` varchar(5) DEFAULT NULL,
  `Ancho` decimal(5,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mdo_puesto_contrato`
--

CREATE TABLE `mdo_puesto_contrato` (
  `id_Contrato` varchar(5) NOT NULL,
  `id_puesto` varchar(5) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  `id_tipo_contrato` varchar(5) NOT NULL,
  `id_solicitud` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mdo_puesto_solicitud`
--

CREATE TABLE `mdo_puesto_solicitud` (
  `id_solicitud` varchar(5) NOT NULL,
  `id_contribuyente` varchar(50) NOT NULL,
  `id_modulo` varchar(5) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Estado` varchar(2) DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mdo_servicio_x_puesto`
--

CREATE TABLE `mdo_servicio_x_puesto` (
  `id_servicio_x_puesto` varchar(5) NOT NULL,
  `id_puesto` varchar(5) NOT NULL,
  `id_tipo_servicio` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mdo_tipo_contrato_puesto`
--

CREATE TABLE `mdo_tipo_contrato_puesto` (
  `Id_Tipo_Contrato` varchar(5) NOT NULL,
  `Tipo_Contrato` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mdo_tipo_puesto`
--

CREATE TABLE `mdo_tipo_puesto` (
  `id_tipo_puesto` varchar(5) NOT NULL,
  `Costo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mdo_tipo_servicio`
--

CREATE TABLE `mdo_tipo_servicio` (
  `id_tipo_servicio` varchar(5) NOT NULL,
  `Tipo_Servicio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_db_familia`
--

CREATE TABLE `reg_db_familia` (
  `no_folio` varchar(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `dui` varchar(10) DEFAULT NULL,
  `nit` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion` varchar(250) NOT NULL,
  `estatus` varchar(20) DEFAULT NULL,
  `nombres_conyuge` varchar(50) DEFAULT NULL,
  `apellidos_conyuge` varchar(50) DEFAULT NULL,
  `dui_conyuge` varchar(10) DEFAULT NULL,
  `nit_conyuge` varchar(20) DEFAULT NULL,
  `fecha_nacimiento_conyuge` date DEFAULT NULL,
  `direccion_conyuge` varchar(250) NOT NULL,
  `fallecido` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_db_nacimientos`
--

CREATE TABLE `reg_db_nacimientos` (
  `no_folio` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido1` varchar(15) NOT NULL,
  `apellido2` varchar(15) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `nombre_padre` varchar(75) NOT NULL,
  `dui_padre` varchar(10) DEFAULT NULL,
  `nit_padre` varchar(20) DEFAULT NULL,
  `fecha_nacimiento_padre` date DEFAULT NULL,
  `nombre_madre` varchar(75) NOT NULL,
  `dui_madre` varchar(10) DEFAULT NULL,
  `nit_madre` varchar(20) DEFAULT NULL,
  `fecha_nacimiento_madre` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_solicitud`
--

CREATE TABLE `reg_solicitud` (
  `id_solicitud` varchar(15) NOT NULL,
  `id_modulo` varchar(5) NOT NULL,
  `id_contribuyente` varchar(50) NOT NULL,
  `id_tipo_solicitud` varchar(10) NOT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `documento` varchar(20) NOT NULL,
  `no_folio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_solicitud_formato`
--

CREATE TABLE `reg_solicitud_formato` (
  `id_formato` varchar(5) NOT NULL,
  `columna1` varchar(800) NOT NULL,
  `columna2` varchar(800) NOT NULL,
  `columna3` varchar(800) NOT NULL,
  `columna4` varchar(800) NOT NULL,
  `columna5` varchar(800) NOT NULL,
  `columna6` varchar(800) NOT NULL,
  `columna7` varchar(800) NOT NULL,
  `columna8` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_tipo_solicitud`
--

CREATE TABLE `reg_tipo_solicitud` (
  `id_tipo_solicitud` varchar(5) NOT NULL,
  `id_formato` varchar(5) NOT NULL,
  `descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ads_acr_recollecion`
--
ALTER TABLE `ads_acr_recollecion`
  ADD PRIMARY KEY (`id_ads_acr`),
  ADD KEY `id_ads_area` (`id_ads_area`);

--
-- Indices de la tabla `ads_area`
--
ALTER TABLE `ads_area`
  ADD PRIMARY KEY (`id_ads_area`);

--
-- Indices de la tabla `ads_atr_tipo_recoleccion`
--
ALTER TABLE `ads_atr_tipo_recoleccion`
  ADD PRIMARY KEY (`id_ads_atr`),
  ADD KEY `id_cat_atr` (`id_cat_atr`);

--
-- Indices de la tabla `ads_catalogo_atr`
--
ALTER TABLE `ads_catalogo_atr`
  ADD PRIMARY KEY (`id_cat_atr`);

--
-- Indices de la tabla `ads_resoluciones`
--
ALTER TABLE `ads_resoluciones`
  ADD PRIMARY KEY (`id_ads_resoluciones`),
  ADD KEY `id_ads_atr` (`id_ads_atr`),
  ADD KEY `id_ads_acr` (`id_ads_acr`);

--
-- Indices de la tabla `ads_solicitud`
--
ALTER TABLE `ads_solicitud`
  ADD PRIMARY KEY (`id_ads_solicitud`),
  ADD KEY `id_ads_resoluciones` (`id_ads_resoluciones`),
  ADD KEY `id_contribuyente_ads` (`id_contribuyente`),
  ADD KEY `id_modulo_ads` (`id_modulo`);

--
-- Indices de la tabla `cmt_enterrador`
--
ALTER TABLE `cmt_enterrador`
  ADD PRIMARY KEY (`id_enterrador`);

--
-- Indices de la tabla `cmt_fallecido`
--
ALTER TABLE `cmt_fallecido`
  ADD PRIMARY KEY (`id_fallecido`),
  ADD KEY `id_familia` (`id_familia`),
  ADD KEY `id_enterrador` (`id_enterrador`),
  ADD KEY `id_tumba` (`id_tumba`);

--
-- Indices de la tabla `cmt_familiar`
--
ALTER TABLE `cmt_familiar`
  ADD PRIMARY KEY (`id_familia`);

--
-- Indices de la tabla `cmt_sector`
--
ALTER TABLE `cmt_sector`
  ADD PRIMARY KEY (`id_sector`);

--
-- Indices de la tabla `cmt_solicitud`
--
ALTER TABLE `cmt_solicitud`
  ADD PRIMARY KEY (`id_solcitud`),
  ADD KEY `id_fallecido` (`id_fallecido`),
  ADD KEY `id_contribuyente_cmt` (`id_contribuyente`),
  ADD KEY `id_modulo_cmt` (`id_modulo`);

--
-- Indices de la tabla `cmt_tipo_tumba`
--
ALTER TABLE `cmt_tipo_tumba`
  ADD PRIMARY KEY (`id_tipo_tumba`);

--
-- Indices de la tabla `cmt_tumba`
--
ALTER TABLE `cmt_tumba`
  ADD PRIMARY KEY (`id_tumba`),
  ADD KEY `id_tipo_tumba` (`id_tipo_tumba`),
  ADD KEY `id_sector` (`id_sector`);

--
-- Indices de la tabla `core_contribuyente`
--
ALTER TABLE `core_contribuyente`
  ADD PRIMARY KEY (`id_contribuyente`);

--
-- Indices de la tabla `core_forma_pago`
--
ALTER TABLE `core_forma_pago`
  ADD PRIMARY KEY (`id_forma_pago`);

--
-- Indices de la tabla `core_modulos`
--
ALTER TABLE `core_modulos`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `core_pagos`
--
ALTER TABLE `core_pagos`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_tipo_pago` (`id_tipo_pago`),
  ADD KEY `id_forma_pago` (`id_forma_pago`),
  ADD KEY `id_transaccion` (`id_transaccion`);

--
-- Indices de la tabla `core_roles`
--
ALTER TABLE `core_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `core_tipo_pago`
--
ALTER TABLE `core_tipo_pago`
  ADD PRIMARY KEY (`id_tipo_pago`);

--
-- Indices de la tabla `core_transacciones`
--
ALTER TABLE `core_transacciones`
  ADD PRIMARY KEY (`id_transaccion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `core_usuarios`
--
ALTER TABLE `core_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `mdo_puesto`
--
ALTER TABLE `mdo_puesto`
  ADD PRIMARY KEY (`id_puesto`),
  ADD KEY `id_tipo_puesto_idx` (`id_tipo_puesto`);

--
-- Indices de la tabla `mdo_puesto_contrato`
--
ALTER TABLE `mdo_puesto_contrato`
  ADD PRIMARY KEY (`id_Contrato`),
  ADD KEY `id_solicitud_idx` (`id_solicitud`),
  ADD KEY `id_tipo_contrato_idx` (`id_tipo_contrato`),
  ADD KEY `id_puesto_idx` (`id_puesto`);

--
-- Indices de la tabla `mdo_puesto_solicitud`
--
ALTER TABLE `mdo_puesto_solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_contribuyente_mdo` (`id_contribuyente`),
  ADD KEY `id_modulo_mdo` (`id_modulo`);

--
-- Indices de la tabla `mdo_servicio_x_puesto`
--
ALTER TABLE `mdo_servicio_x_puesto`
  ADD PRIMARY KEY (`id_servicio_x_puesto`),
  ADD KEY `id_tipo_servicio_idx` (`id_tipo_servicio`),
  ADD KEY `id_puesto_idx` (`id_puesto`);

--
-- Indices de la tabla `mdo_tipo_contrato_puesto`
--
ALTER TABLE `mdo_tipo_contrato_puesto`
  ADD PRIMARY KEY (`Id_Tipo_Contrato`);

--
-- Indices de la tabla `mdo_tipo_puesto`
--
ALTER TABLE `mdo_tipo_puesto`
  ADD PRIMARY KEY (`id_tipo_puesto`);

--
-- Indices de la tabla `mdo_tipo_servicio`
--
ALTER TABLE `mdo_tipo_servicio`
  ADD PRIMARY KEY (`id_tipo_servicio`);

--
-- Indices de la tabla `reg_db_familia`
--
ALTER TABLE `reg_db_familia`
  ADD PRIMARY KEY (`no_folio`);

--
-- Indices de la tabla `reg_db_nacimientos`
--
ALTER TABLE `reg_db_nacimientos`
  ADD PRIMARY KEY (`no_folio`);

--
-- Indices de la tabla `reg_solicitud`
--
ALTER TABLE `reg_solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_contribuyente` (`id_contribuyente`),
  ADD KEY `id_modulo` (`id_modulo`),
  ADD KEY `id_tipo_solicitud` (`id_tipo_solicitud`);

--
-- Indices de la tabla `reg_solicitud_formato`
--
ALTER TABLE `reg_solicitud_formato`
  ADD PRIMARY KEY (`id_formato`);

--
-- Indices de la tabla `reg_tipo_solicitud`
--
ALTER TABLE `reg_tipo_solicitud`
  ADD PRIMARY KEY (`id_tipo_solicitud`),
  ADD KEY `id_formato` (`id_formato`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ads_acr_recollecion`
--
ALTER TABLE `ads_acr_recollecion`
  ADD CONSTRAINT `id_ads_area` FOREIGN KEY (`id_ads_area`) REFERENCES `ads_area` (`id_ads_area`);

--
-- Filtros para la tabla `ads_atr_tipo_recoleccion`
--
ALTER TABLE `ads_atr_tipo_recoleccion`
  ADD CONSTRAINT `id_cat_atr` FOREIGN KEY (`id_cat_atr`) REFERENCES `ads_catalogo_atr` (`id_cat_atr`);

--
-- Filtros para la tabla `ads_resoluciones`
--
ALTER TABLE `ads_resoluciones`
  ADD CONSTRAINT `id_ads_acr` FOREIGN KEY (`id_ads_acr`) REFERENCES `ads_acr_recollecion` (`id_ads_acr`),
  ADD CONSTRAINT `id_ads_atr` FOREIGN KEY (`id_ads_atr`) REFERENCES `ads_atr_tipo_recoleccion` (`id_ads_atr`);

--
-- Filtros para la tabla `ads_solicitud`
--
ALTER TABLE `ads_solicitud`
  ADD CONSTRAINT `id_ads_resoluciones` FOREIGN KEY (`id_ads_resoluciones`) REFERENCES `ads_resoluciones` (`id_ads_resoluciones`),
  ADD CONSTRAINT `id_contribuyente_ads` FOREIGN KEY (`id_contribuyente`) REFERENCES `core_contribuyente` (`id_contribuyente`),
  ADD CONSTRAINT `id_modulo_ads` FOREIGN KEY (`id_modulo`) REFERENCES `core_modulos` (`id_modulo`);

--
-- Filtros para la tabla `cmt_fallecido`
--
ALTER TABLE `cmt_fallecido`
  ADD CONSTRAINT `id_enterrador` FOREIGN KEY (`id_enterrador`) REFERENCES `cmt_enterrador` (`id_enterrador`),
  ADD CONSTRAINT `id_familia` FOREIGN KEY (`id_familia`) REFERENCES `cmt_familiar` (`id_familia`),
  ADD CONSTRAINT `id_tumba` FOREIGN KEY (`id_tumba`) REFERENCES `cmt_tumba` (`id_tumba`);

--
-- Filtros para la tabla `cmt_solicitud`
--
ALTER TABLE `cmt_solicitud`
  ADD CONSTRAINT `id_contribuyente_cmt` FOREIGN KEY (`id_contribuyente`) REFERENCES `core_contribuyente` (`id_contribuyente`),
  ADD CONSTRAINT `id_fallecido` FOREIGN KEY (`id_fallecido`) REFERENCES `cmt_fallecido` (`id_fallecido`),
  ADD CONSTRAINT `id_modulo_cmt` FOREIGN KEY (`id_modulo`) REFERENCES `core_modulos` (`id_modulo`);

--
-- Filtros para la tabla `cmt_tumba`
--
ALTER TABLE `cmt_tumba`
  ADD CONSTRAINT `id_sector` FOREIGN KEY (`id_sector`) REFERENCES `cmt_sector` (`id_sector`),
  ADD CONSTRAINT `id_tipo_tumba` FOREIGN KEY (`id_tipo_tumba`) REFERENCES `cmt_tipo_tumba` (`id_tipo_tumba`);

--
-- Filtros para la tabla `core_pagos`
--
ALTER TABLE `core_pagos`
  ADD CONSTRAINT `id_forma_pago` FOREIGN KEY (`id_forma_pago`) REFERENCES `core_forma_pago` (`id_forma_pago`),
  ADD CONSTRAINT `id_tipo_pago` FOREIGN KEY (`id_tipo_pago`) REFERENCES `core_tipo_pago` (`id_tipo_pago`),
  ADD CONSTRAINT `id_transaccion` FOREIGN KEY (`id_transaccion`) REFERENCES `core_transacciones` (`id_transaccion`);

--
-- Filtros para la tabla `core_transacciones`
--
ALTER TABLE `core_transacciones`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `core_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `core_usuarios`
--
ALTER TABLE `core_usuarios`
  ADD CONSTRAINT `id_rol` FOREIGN KEY (`id_rol`) REFERENCES `core_roles` (`id_rol`);

--
-- Filtros para la tabla `mdo_puesto`
--
ALTER TABLE `mdo_puesto`
  ADD CONSTRAINT `id_tipo_puesto` FOREIGN KEY (`id_tipo_puesto`) REFERENCES `mdo_tipo_puesto` (`id_tipo_puesto`);

--
-- Filtros para la tabla `mdo_puesto_contrato`
--
ALTER TABLE `mdo_puesto_contrato`
  ADD CONSTRAINT `Id_Solicitud` FOREIGN KEY (`id_solicitud`) REFERENCES `mdo_puesto_solicitud` (`id_solicitud`),
  ADD CONSTRAINT `id_puesto` FOREIGN KEY (`id_puesto`) REFERENCES `mdo_puesto` (`id_puesto`),
  ADD CONSTRAINT `id_tipo_contrato` FOREIGN KEY (`id_tipo_contrato`) REFERENCES `mdo_tipo_contrato_puesto` (`Id_Tipo_Contrato`);

--
-- Filtros para la tabla `mdo_puesto_solicitud`
--
ALTER TABLE `mdo_puesto_solicitud`
  ADD CONSTRAINT `id_contribuyente_mdo` FOREIGN KEY (`id_contribuyente`) REFERENCES `core_contribuyente` (`id_contribuyente`),
  ADD CONSTRAINT `id_modulo_mdo` FOREIGN KEY (`id_modulo`) REFERENCES `core_modulos` (`id_modulo`);

--
-- Filtros para la tabla `mdo_servicio_x_puesto`
--
ALTER TABLE `mdo_servicio_x_puesto`
  ADD CONSTRAINT `id_puesto_serv` FOREIGN KEY (`id_puesto`) REFERENCES `mdo_puesto` (`id_puesto`),
  ADD CONSTRAINT `id_tipo_servicio` FOREIGN KEY (`id_tipo_servicio`) REFERENCES `mdo_tipo_servicio` (`id_tipo_servicio`);

--
-- Filtros para la tabla `reg_solicitud`
--
ALTER TABLE `reg_solicitud`
  ADD CONSTRAINT `id_contribuyente` FOREIGN KEY (`id_contribuyente`) REFERENCES `core_contribuyente` (`id_contribuyente`),
  ADD CONSTRAINT `id_modulo` FOREIGN KEY (`id_modulo`) REFERENCES `core_modulos` (`id_modulo`),
  ADD CONSTRAINT `id_tipo_solicitud` FOREIGN KEY (`id_tipo_solicitud`) REFERENCES `reg_tipo_solicitud` (`id_tipo_solicitud`);

--
-- Filtros para la tabla `reg_tipo_solicitud`
--
ALTER TABLE `reg_tipo_solicitud`
  ADD CONSTRAINT `id_formato` FOREIGN KEY (`id_formato`) REFERENCES `reg_solicitud_formato` (`id_formato`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
