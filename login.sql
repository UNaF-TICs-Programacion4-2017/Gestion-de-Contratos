--
-- Base de datos: `login`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personas`
--

CREATE TABLE `datos_personas` (
  `id_persona` int(11) NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `cuil` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_nac` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `domicilio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rela_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_personas`
--

INSERT INTO `datos_personas` (`id_persona`, `apellido`, `nombre`, `dni`, `cuil`, `nacionalidad`, `lugar_nac`, `fecha_nac`, `domicilio`, `telefono`, `celular`, `email`, `rela_user`) VALUES
(1, 'Acosta', 'Carlos Adalberto', '44258963', '20-44258963', 'Boliviano', 'Mariano Roque Alonso', '1996-06-05', 'Cerca del Paraiso de los niÃ±os', '3704-42879', '3704-69874', 'lord_cas@yimeil.com.ar', 5);

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
  `rela_titulo` int(11) NOT NULL,
  `desde` varchar(4) NOT NULL,
  `hasta` varchar(4) NOT NULL,
  `universidad` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `rela_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Cod_usuario` int(25) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo_usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cod_usuario`, `Nombre`, `Usuario`, `Password`, `Tipo_usuario`, `email`) VALUES
(1, 'dario', 'dar_user', '123', 'Admin', 'dariodanielbenitez@yahoo.com.ar'),
(3, 'Carolina', 'car_user', '123', 'Admin', 'carolopez@gmail.com'),
(4, 'Luis', 'Luis_user', '123', 'Admin', 'luiscanesin@gmail.com'),
(5, 'Carlos', 'carlos_user', '123', 'User', 'lordcas@gmail.com');

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
  MODIFY `id_ant_doc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `antecedentes_laborales`
--
ALTER TABLE `antecedentes_laborales`
  MODIFY `id_ant_lab` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `datos_personas`
--
ALTER TABLE `datos_personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_titulo`
--
ALTER TABLE `tipo_titulo`
  MODIFY `id_tipo_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `titulos_obtenidos`
--
ALTER TABLE `titulos_obtenidos`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Cod_usuario` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
