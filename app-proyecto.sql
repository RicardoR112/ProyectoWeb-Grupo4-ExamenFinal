-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2021 a las 04:59:14
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app-proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `palabras_clave` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `resumen` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `texto_completo` mediumtext COLLATE utf8_spanish2_ci DEFAULT NULL,
  `topico` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `autor` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(4) DEFAULT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_calificador` int(11) NOT NULL,
  `calificacion` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `titulo`, `palabras_clave`, `resumen`, `texto_completo`, `topico`, `autor`, `fecha`, `estado`, `id_estudiante`, `id_calificador`, `calificacion`) VALUES
(3, 'Las Mujeres son sanas', 'Mujeres, Hombres, Vida cotidiana', 'Resumen: Cotidianidad de la vida humana', 'LAS ROSAS SON ROJAS', 'Salud', 'Stephany', '2021-05-21 20:51:51', 1, 20, 27, 4),
(4, 'LA VIDA', 'VIVIR, RESPIRAR, COMER', 'COMO VIVIR', 'PARA VIVIR HAY QUE COMER SANO Y TENER BUENOS HABITOS', 'Salud', 'Stephany', '2021-05-22 02:41:47', 1, 20, 28, 4.8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `documento` varchar(13) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_documento` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_user` int(11) NOT NULL DEFAULT 3,
  `sexo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `profile_img` varchar(255) COLLATE utf8_spanish_ci DEFAULT 'public/uploads/user.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `password`, `email`, `documento`, `tipo_documento`, `tipo_user`, `sexo`, `fecha_nac`, `profile_img`) VALUES
(2, 'Juan Diego', 'Buitrago M', '$2y$10$30HGIcV9/frhXM.S1K5W0exjKxRzfsju7LChGndOG8EQhLqAhvWpC', 'juandbm@gmail.com', '123456789', 'Cedula Ciudadania (CC)', 0, 'Masculino', '1989-12-16', ''),
(20, 'Stephany', 'Jaimes ', '$2y$10$W1DjEvmSgGcl6Ue0qYP2guV40P/rHHX3JWZA14vPOBEdUCQ6r5EUa', 'stephany1234@gmail.com', '1738668689', 'Cedula Ciudadania (CC)', 3, 'Femenino', '1990-12-12', ''),
(25, 'Joel', 'Lopez', '$2y$10$xxNH.rn2x8dNQKdM9U2K7esbLKg.GdQqaI.MtUqZQiXL/JzMLqJje', 'joellopezag@ufps.edu.co', '12726354433', 'Cedula Ciudadania (CC)', 2, 'Masculino', '1997-12-24', ''),
(27, 'Jaime Ricardo', 'Rolon', '$2y$10$4RujxSqqzs7Xp1.Xb0mcQ.tx4uYF6nrXsb8NRizyl5qEJRIdixUNe', 'JaimeRR@ufps.edu.co', '333435', 'Cedula Ciudadania (CC)', 1, 'Masculino', '1990-12-24', ''),
(28, 'Juan David', 'Contreras', '$2y$10$rzh4xOv/Vr.XbO.jYdec3echp7L1ZCdGqR14Bp0ynR4SfAQK5YCN.', 'JuanDavidC@ufps.edu.co', '121314', 'Cedula Ciudadania (CC)', 1, 'Masculino', '1990-12-24', ''),
(29, 'nicolas', 'jaimes', '$2y$10$MENfUW88aRrfsLD.3g0ePu/IjaOW6Kc3GSzb1ynX0N7awAWYVjATC', 'nicolas@gmail.com', '454647', 'Cedula Ciudadania (CC)', 2, 'Masculino', '1990-12-24', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
