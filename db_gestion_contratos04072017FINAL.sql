-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2017 a las 07:34:19
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_gestion_contratos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_docentes`
--

CREATE TABLE `antecedentes_docentes` (
  `id_ant_doc` int(11) NOT NULL,
  `desde` varchar(4) NOT NULL,
  `hasta` varchar(4) NOT NULL,
  `universidad` varchar(255) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `catedra` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  `facultad` varchar(255) NOT NULL,
  `rela_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `antecedentes_docentes`
--

INSERT INTO `antecedentes_docentes` (`id_ant_doc`, `desde`, `hasta`, `universidad`, `cargo`, `catedra`, `carrera`, `facultad`, `rela_usuario`) VALUES
(1, '2000', '2010', 'unaf', 'profesor adjunto', 'matematica II', 'lic en tic', 'economia', 3),
(2, '2007', '2010', 'Unaf', 'Profesor Titular', 'Programacion 4', 'Lic. en TIC', 'FAEN', 3),
(3, '2007', '2010', 'UVA', 'Profesor titular', 'TEC', 'Lic. en Sistemas de Informacion', 'UNAF', 3),
(4, '2005', '2007', 'iac', 'Profesor titular', 'Programacion I', 'Lic. en Sistemas de Informacion', 'FAEN', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_laborales`
--

CREATE TABLE `antecedentes_laborales` (
  `id_ant_lab` int(4) NOT NULL,
  `desde` varchar(4) NOT NULL,
  `hasta` varchar(4) NOT NULL,
  `organizacion` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `rela_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `antecedentes_laborales`
--

INSERT INTO `antecedentes_laborales` (`id_ant_lab`, `desde`, `hasta`, `organizacion`, `cargo`, `rela_usuario`) VALUES
(1, '1999', '2005', 'nose', 'nada', 0),
(2, '2010', '2012', 'Lapacho canal 11', 'sonidista-iluminador', 3),
(3, '2005', '2010', 'xmen', 'mecanico', 3),
(4, '2003', '2007', 'xmen', 'mecanico', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id_asignatura` int(11) NOT NULL,
  `nombre_asignatura` varchar(255) NOT NULL,
  `rela_carrera` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoridades`
--

CREATE TABLE `autoridades` (
  `id_autoridad` int(4) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autoridades`
--

INSERT INTO `autoridades` (`id_autoridad`, `rela_persona`, `cargo`) VALUES
(1, 3, 'Decano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(255) NOT NULL,
  `facultad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `nombre_carrera`, `facultad`) VALUES
(1, 'lic tic', 'economia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `id_contrato` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `asignatura` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `desde` varchar(30) NOT NULL,
  `hasta` varchar(30) NOT NULL,
  `autoridad` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `monto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id_contrato`, `rela_persona`, `asignatura`, `cargo`, `desde`, `hasta`, `autoridad`, `fecha`, `monto`) VALUES
(1, 15, 'Matematica 1', 'Profesor Titular', '01/07/2017', '10/12/2017', 'Evelio Irala', '2017-07-01', '$9000'),
(2, 18, 'Matematica 2', 'Profesor Adjunto', '01/07/2017', '10/12/2017', 'Evelio Irala', '2017-07-01', '$9000'),
(3, 17, 'Programacion 4', 'Profesor Adjunto', '01/07/2017', '10/12/2017', 'Evelio Irala', '2017-07-02', '$10000'),
(5, 18, 'Base de datos 1', 'Jefe de Trabajos practicos', '01/07/2017', '10/12/2017', 'Evelio Irala', '2017-07-03', '$9000'),
(6, 18, 'Programacion 2', 'Profesor Titular', '01/07/2017', '10/12/2017', 'Evelio Irala', '2017-07-03', '8500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personas`
--

CREATE TABLE `datos_personas` (
  `id_persona` int(11) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `cuil` varchar(11) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `lugar_nac` varchar(255) NOT NULL,
  `fecha_nac` date NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rela_usuario` int(11) NOT NULL,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `datos_personas`
--

INSERT INTO `datos_personas` (`id_persona`, `apellido`, `nombre`, `dni`, `cuil`, `nacionalidad`, `lugar_nac`, `fecha_nac`, `domicilio`, `telefono`, `celular`, `email`, `rela_usuario`, `foto`) VALUES
(1, 'caro', 'lopez', '31406229', '27314062294', 'argentina', 'formosa', '1985-03-28', 'don bosco 3124 - mariano moreno', '4453602', '3704677420', 'carolopez@gmail.com', 1, ''),
(14, 'gregori', 'nicasio', '125458', '121245487', 'Boliviana', 'quito', '1994-06-12', 'la paz', '37042656', '3704895656', 'gregori@gmail.com', 6, ''),
(15, 'oconeer', 'brian', '77777777', '20777777772', 'estado unidense', 'california', '1975-06-09', 'Malibu', '5455587526', '5455587963', 'exfbi@gmail.com', 8, ''),
(16, 'veira', 'beto', '12528745', '12458748', 'Argentina', 'La Plata', '1960-05-01', 'Liniers', '44885522', '44778855', 'sanlorenzo@yahoo.com.ar', 7, ''),
(17, 'stark', 'anthony', '44225588', '1144885523', 'estado unidense', 'Boston', '1970-05-02', 'New York', '1122558896', '332244558', 'ironman@theavengers.com.ar', 9, ''),
(18, 'canesin', 'luis', '14852758', '20148527582', 'Paraguaya', 'Formosa', '1971-02-06', 'Rivadavia 250', '44227788', '3704258969', 'luiscanesion@gmail.com', 4, ''),
(19, 'vorhees', 'jason', '44225588', '442588563', 'estado unidense', 'montana', '1960-05-01', 'lago del terror', '44885522', '332244558', 'killemall@isat.com.ar', 10, ''),
(21, 'parker', 'peter', '22558877', '442588563', 'estado unidense', 'new york', '1995-06-02', 'Brooklin', '55598574', '3725998855', 'spiderman2017@theavengers.org', 13, ''),
(22, 'Acosta', 'Carlitos', '40528458', '2040528458', 'Peruano', 'Formosa', '1994-06-05', 'Barrio Covifol', '37042656', '3704895656', 'lord_cas@hotmail.com', 3, NULL),
(23, 'user simple', 'user', '1111111', '111111', 'Argentina', 'for', '1970-01-01', 'formosa', '3704125963', '3704528963', 'usersimple@gmail.com', 17, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_titulo`
--

CREATE TABLE `tipo_titulo` (
  `id_tipo_titulo` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_titulo`
--

INSERT INTO `tipo_titulo` (`id_tipo_titulo`, `descripcion`) VALUES
(1, 'Grado'),
(2, 'Posgrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos_obtenidos`
--

CREATE TABLE `titulos_obtenidos` (
  `id_titulo` int(11) NOT NULL,
  `tipo_titulo` varchar(11) NOT NULL,
  `desde` varchar(4) NOT NULL,
  `hasta` varchar(4) NOT NULL,
  `universidad` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `rela_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `titulos_obtenidos`
--

INSERT INTO `titulos_obtenidos` (`id_titulo`, `tipo_titulo`, `desde`, `hasta`, `universidad`, `titulo`, `rela_usuario`) VALUES
(1, 'Grado', '1990', '1995', 'UNAF', 'lic en com ext', 3),
(3, 'Grado', '1999', '2003', 'Boston', 'astronomo', 3),
(4, 'Grado', '2004', '2010', 'Yale', 'CIrujano22', 3),
(5, 'Grado', '2003', '2007', 'utn', 'lic. en bromatologia', 4),
(6, 'Grado', '2005', '2007', 'UNAF', 'lic. en bromatologia', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Cod_usuario` int(4) NOT NULL,
  `NombreUsuario` text NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Tipo_usuario` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cod_usuario`, `NombreUsuario`, `Usuario`, `Password`, `Tipo_usuario`, `email`) VALUES
(1, 'CARO', 'caro_admin', '123', 'Admin', 'caroemail@gmail.com'),
(3, 'carlos', 'carlos_user', '123', 'User', 'carlitos@gmail.com'),
(4, 'Luis', 'luis_user', '123', 'User', 'luis@gmail.com'),
(5, 'Dario', 'dar_admin', '123', 'Admin', 'fmsagames@gmail.com'),
(6, 'nico', 'nico_user', '123', 'User', 'nico@nico.com'),
(7, 'el bambino', 'bambi_user', '123', 'User', 'bambino@veira.com'),
(8, 'brian oconner', 'brian_user', '123', 'User', 'fast@furius.com'),
(9, 'tony stark', 'ironman', '123', 'User', 'starkindustries@stark.com.ar'),
(10, 'jason', 'jason_vorhees', '123', 'User', 'viernes13@machete.com'),
(11, 'steve roggers', 'el_cap', '123', 'User', 'elcap@theavengers.org'),
(12, 'Pablo', 'Pablo_user', '123', 'User', 'newuser01@hotmail.com'),
(13, 'peter', 'spider_man', '123', 'User', 'spider@man.com.ar'),
(14, 'Luisao', 'luis_admin', '123', 'Admin', 'luiscanesin@hotmail.com'),
(15, 'Admin', 'admin_admin', '123', 'Admin', 'Admin@admin.org'),
(16, 'superadmin', 'super_admin', '12345', 'super_', 'Admin'),
(17, 'user_prueba', 'user_user', '123', 'User', 'user@user.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes_docentes`
--
ALTER TABLE `antecedentes_docentes`
  ADD PRIMARY KEY (`id_ant_doc`);

--
-- Indices de la tabla `antecedentes_laborales`
--
ALTER TABLE `antecedentes_laborales`
  ADD PRIMARY KEY (`id_ant_lab`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indices de la tabla `autoridades`
--
ALTER TABLE `autoridades`
  ADD PRIMARY KEY (`id_autoridad`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id_contrato`);

--
-- Indices de la tabla `datos_personas`
--
ALTER TABLE `datos_personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `tipo_titulo`
--
ALTER TABLE `tipo_titulo`
  ADD PRIMARY KEY (`id_tipo_titulo`);

--
-- Indices de la tabla `titulos_obtenidos`
--
ALTER TABLE `titulos_obtenidos`
  ADD PRIMARY KEY (`id_titulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentes_docentes`
--
ALTER TABLE `antecedentes_docentes`
  MODIFY `id_ant_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `antecedentes_laborales`
--
ALTER TABLE `antecedentes_laborales`
  MODIFY `id_ant_lab` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `autoridades`
--
ALTER TABLE `autoridades`
  MODIFY `id_autoridad` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_personas`
--
ALTER TABLE `datos_personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `tipo_titulo`
--
ALTER TABLE `tipo_titulo`
  MODIFY `id_tipo_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `titulos_obtenidos`
--
ALTER TABLE `titulos_obtenidos`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Cod_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
