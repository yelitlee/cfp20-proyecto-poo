-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2024 a las 18:26:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pet_shop`
--
CREATE DATABASE IF NOT EXISTS `pet_shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pet_shop`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `nombre`) VALUES
(1, 'gato'),
(2, 'perro'),
(3, 'hamsters');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id`, `nombre`) VALUES
(1, 'rosa'),
(2, 'blanco con naranja'),
(3, 'blanco con gris'),
(4, 'azul'),
(5, 'gris'),
(6, 'varios'),
(7, 'amarillo'),
(8, 'azul y blanco'),
(9, 'rojo'),
(10, 'blanco'),
(11, 'marron');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `id_catalogo` int(11) NOT NULL,
  `id_colores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `titulo`, `descripcion`, `stock`, `precio`, `imagen`, `id_catalogo`, `id_colores`) VALUES
(1, 'pechera', 'Arnes Y Correa Import M Gatos Conejos Huron Perros Mascotas', 'Algunos gatos aman caminar con sus dueños. Nuestros sets para ello consisten en arneses y correas para mascotas. Así las mascotas de interiores podrán disfrutar del aire fresco y explorar los alrededo', 'disponible', 15990, 'gato1.webp', 1, 1),
(2, 'juguete', 'Juguete Interactivo Tornado Perros Gatos', 'La máxima diversión para su gato recogida en este juguete con forma de carrusel. La base es un circuito circular con una pequeña bola que, gracias a su led interno activado por el movimiento, emite un', 'disponible', 89300, 'gato2.webp', 1, 2),
(3, 'Litera', 'Litera Higienica Trixie Maro Esquinera Gatos\r\n\r\n           ', 'En cuanto a las bandejas higiénicas, cada gato tiene sus propios gustos. Por ello, tenemos nuestras bandejas higiénicas en diferentes versiones: abiertas, con borde, con cubierta y tapa, con o sin sis', 'disponible', 60700, 'gato3.webp', 1, 3),
(4, 'Tunel', ' Tunel Vesper Juego Cama Gatos\r\n           ', '\"El túnel más cómodo nunca visto. Para jugar y para descansar gracias a su cama de 40 cm de diámetro. El túnel está hecho de tela de alta calidad, que resiste los arañazos de las uñas de los gatos y n', 'disponible', 37500, 'gato4.webp', 1, 4),
(5, '\"Rascador\"', ' \"Rascador Alessia Premium Gatos\"', '\"Para rascar, esconderse, acurrucarse, trepar y disfrutar de una vista: Nuestros postes rascadores y muebles rascadores ofrecen todo esto y mucho más. Para uno o más gatos, con o sin juguetes, para ga', 'disponible', 220000, 'gato5.webp', 1, 5),
(6, 'juguetes', '\"Juguete Torre Pelota\"\r\n            ', '\"Los juguetes para gatos están disponibles en todo tipo de versiones dependiendo de cómo quieren jugar los gatos. De felpa o de otras telas, de yute o de plástico, con catnip, valeriana o matatabi, te', 'disponible', 22000, 'gato6.webp', 1, 6),
(7, 'peluche', '\"Juguete Peluche Pato C/sonido\"\r\n  ', '\"Te ofrecemos todo lo que tu perro necesita para jugar y corretear, Juguetes de felpa, cuerdas para jugar, pelotas robustas de caucho natural y figuras coloridas hechas de vinilo o de duradero caucho ', 'disponible', 10700, 'perro1.webp', 2, 7),
(10, 'pelota', 'Pelota Con Soga Resistente Glotoni\"', 'Glotoni es un juguete ideal para perros que suelen romper todo tipo de juguetes u objetos del hogar. Es super resistente y de caucho natural NO TÓXICO. A diferencia de otros juguetes sintéticos, el ca', 'disponible', 15100, 'perro2.webp', 2, 8),
(11, 'Frisbee', '\"Juguete Frisbee Extra Resistente\",', ' \"Trixie Flyer Dog activity Frisbee Disco Profesional. El juguete para perros Trixie Dog Disc Dog Activity es perfecto para jugar con tu mascota. Está Hecho de plástico flexible, suave y resistente, u', 'disponible', 16500, 'perro3.webp', 2, 6),
(12, 'cama', '\"Cama Cucha Relax Trixie Perros\"', '\"Para una pequeña siesta o sueños profundos, te ofrecemos a ti y a tu perro una gran variedad de cojines, camas y mantas, como también canastas o cuevas suaves. Todo en diferentes formas, colores, tam', 'disponible', 46090, 'perro4.webp', 2, 6),
(13, '\"soga\"', '\"Juguete Pesa De Cuerda Algodon\"', '\"Juguetes de felpa, cuerdas para jugar, pelotas robustas de caucho natural y figuras coloridas hechas de vinilo o de duradero caucho termoplástico, TRIXIE te ofrece todo lo que tu perro necesita para ', 'disponible', 4600, 'perro5.webp', 2, 6),
(14, 'pelotas', '\"Juguete Pelota Beisbol L Perros\"', '\"Juguete Trixie dental pelota chica. La línea Dental elimina la acumulación de sarro y restos de comida en sus dientes favoreciendo a su salud dental. Los perros sufren estrés al estar solos o encerra', 'disponible', 6000, 'perro6.webp', 2, 6),
(15, 'Dispenser', '\"Ferplast Pelota Dispensadora de Snacks\"', '\" Un pequeño premio para tu hamsters! Es un juguete de plástico distribuidor de galletas mientras rueda. Tiene un particular mecanismo que permite poner galletas en el interior; jugando y haciendo rod', 'disponible', 10200, 'hamsters5.jpg', 3, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_catalago` (`id_catalogo`),
  ADD KEY `fk_colores` (`id_colores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_catalago` FOREIGN KEY (`id_catalogo`) REFERENCES `catalogo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_colores` FOREIGN KEY (`id_colores`) REFERENCES `colores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
