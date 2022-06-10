-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2022 at 11:18 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juego_preguntas`
--

-- --------------------------------------------------------

--
-- Table structure for table `pt_categoria`
--

CREATE TABLE `pt_categoria` (
  `id_categoria` int(11) NOT NULL,
  `dificultad` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `id_premio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `pt_categoria`
--

INSERT INTO `pt_categoria` (`id_categoria`, `dificultad`, `nombre`, `id_premio`) VALUES
(1, 'Acero', 'Colombia', 1),
(2, 'Bronce', 'Sur America', 2),
(3, 'Plata', 'Resto De America', 3),
(4, 'Oro', 'Europa', 4),
(5, 'Platino', 'Resto Del mundo', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pt_juego`
--

CREATE TABLE `pt_juego` (
  `id_juego` int(11) NOT NULL,
  `id_ronda` int(11) NOT NULL,
  `estado_juego` varchar(1) NOT NULL,
  `premio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pt_jugador`
--

CREATE TABLE `pt_jugador` (
  `alias_jug` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_jug` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `clave_jug` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `rol_jug` varchar(13) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `pt_jugador`
--

INSERT INTO `pt_jugador` (`alias_jug`, `nombre_jug`, `clave_jug`, `rol_jug`) VALUES
('test', 'Usuario de Prueba', '654321', 'estandar'),
('will', 'William Castillo', '123456', 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Table structure for table `pt_opcion`
--

CREATE TABLE `pt_opcion` (
  `id_opcion` int(11) NOT NULL,
  `descripcion_opc` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `estado_opc` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pt_opcion`
--

INSERT INTO `pt_opcion` (`id_opcion`, `descripcion_opc`, `id_pregunta`, `estado_opc`) VALUES
(1, 'Mompox', 1, 'F'),
(2, 'Sincelejo', 1, 'F'),
(3, 'Barranquilla', 1, 'F'),
(4, 'Cartagena', 1, 'V'),
(5, 'San Gil', 2, 'F'),
(6, 'Villavicencio', 2, 'V'),
(7, 'Villa de Leyva', 2, 'F'),
(8, 'Tunja', 2, 'F'),
(9, 'Mitú', 3, 'F'),
(10, 'Medellin', 3, 'V'),
(11, 'Apartado', 3, 'F'),
(12, 'Envigado', 3, 'F'),
(13, 'Popayan', 4, 'V'),
(14, 'Pasto', 4, 'F'),
(15, 'Florencia', 4, 'F'),
(16, 'Mocoa', 4, 'F'),
(17, 'Ipiales', 5, 'F'),
(18, 'Puerto Triunfo', 5, 'F'),
(19, 'Leticia', 5, 'V'),
(20, 'Yopal', 5, 'F'),
(21, 'Santiago', 6, 'F'),
(22, 'Montevideo', 6, 'V'),
(23, 'Mendoza', 6, 'F'),
(24, 'Salto', 6, 'F'),
(25, 'Lima', 7, 'V'),
(26, 'Arequipa', 7, 'F'),
(27, 'Quito', 7, 'F'),
(28, 'Cuzco', 7, 'F'),
(29, 'Guayaquil', 8, 'F'),
(30, 'Montevideo', 8, 'F'),
(31, 'Santiago', 8, 'V'),
(32, 'Santa Cruz', 8, 'F'),
(33, 'Quito', 9, 'F'),
(34, 'Asunción', 9, 'V'),
(35, 'Santiago', 9, 'F'),
(36, 'Luque', 9, 'F'),
(37, 'Rio de Janeiro', 10, 'F'),
(38, 'Sao Pablo', 10, 'F'),
(39, 'Fortaleza', 10, 'F'),
(40, 'Brasilia', 10, 'V'),
(41, 'Colón', 11, 'F'),
(42, 'Ciudad de Panama', 11, 'V'),
(43, 'Managua', 11, 'F'),
(44, 'Pacora', 11, 'F'),
(45, 'Toronto', 12, 'F'),
(46, 'Vancouver', 12, 'F'),
(47, 'Montreal', 12, 'F'),
(48, 'Ottawa', 12, 'V'),
(49, 'Oranjestad', 13, 'V'),
(50, 'Noord', 13, 'F'),
(51, 'Aruba', 13, 'F'),
(52, 'Puerto Principe', 13, 'F'),
(53, 'San Pedro Sula', 14, 'F'),
(54, 'Ocotepeque', 14, 'F'),
(55, 'Tegucigalpa', 14, 'V'),
(56, 'San José', 14, 'F'),
(57, 'San Cristobal', 15, 'F'),
(58, 'Santo Domingo', 15, 'V'),
(59, 'La Romana', 15, 'F'),
(60, 'San Juan', 15, 'F'),
(61, 'Lisboa', 16, 'V'),
(62, 'Oporto', 16, 'F'),
(63, 'Sevilla', 16, 'F'),
(64, 'Braga', 16, 'F'),
(65, 'Glasgow', 17, 'F'),
(66, 'Belfast', 17, 'F'),
(67, 'Dublin', 17, 'V'),
(68, 'Galway', 17, 'F'),
(69, 'Brucelas', 18, 'F'),
(70, 'Zurich', 18, 'F'),
(71, 'Ginebra', 18, 'F'),
(72, 'Berna', 18, 'V'),
(73, 'Esparta', 19, 'F'),
(74, 'Atenas', 19, 'V'),
(75, 'Tebas', 19, 'F'),
(76, 'Corinto', 19, 'F'),
(77, 'Belgrado', 20, 'V'),
(78, 'Subonita', 20, 'F'),
(79, 'Estocolmo', 20, 'F'),
(80, 'Praga', 20, 'F'),
(81, 'Orán', 21, 'F'),
(82, 'Casa Blanca', 21, 'F'),
(83, 'Argel', 21, 'V'),
(84, 'Médéa', 21, 'F'),
(85, 'Lagos', 22, 'F'),
(86, 'Abuya', 22, 'V'),
(87, 'Ibadan', 22, 'F'),
(88, 'Yaundé', 22, 'F'),
(89, 'Busan', 23, 'F'),
(90, 'Kanagawa', 23, 'F'),
(91, 'Ulsan', 23, 'F'),
(92, 'Seúl', 23, 'V'),
(93, 'Dávao', 24, 'F'),
(94, 'Manila', 24, 'V'),
(95, 'Makati', 24, 'F'),
(96, 'Kuala Lumpur', 24, 'F'),
(97, 'Auckland', 25, 'F'),
(98, 'Queenstown', 25, 'F'),
(99, 'Wellington', 25, 'V'),
(100, 'Tauranga', 25, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `pt_pregunta`
--

CREATE TABLE `pt_pregunta` (
  `id_pregunta` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `contenido` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pt_pregunta`
--

INSERT INTO `pt_pregunta` (`id_pregunta`, `id_categoria`, `contenido`) VALUES
(1, 1, 'Bolívar'),
(2, 1, 'Meta'),
(3, 1, 'Antioquia'),
(4, 1, 'Cauca'),
(5, 1, 'Amazonas'),
(6, 2, 'Uruguay'),
(7, 2, 'Perú'),
(8, 2, 'Chile'),
(9, 2, 'Paraguay'),
(10, 2, 'Brasil'),
(11, 3, 'Panamá '),
(12, 3, 'Canadá'),
(13, 3, 'Aruba'),
(14, 3, 'Honduras'),
(15, 3, 'Republica Dominicana'),
(16, 4, 'Portugal'),
(17, 4, 'Irlanda'),
(18, 4, 'Suiza'),
(19, 4, 'Grecia'),
(20, 4, 'Serbia'),
(21, 5, 'Argelia'),
(22, 5, 'Nigeria'),
(23, 5, 'Korea del Sur'),
(24, 5, 'Filipinas'),
(25, 5, 'Nueva Zelanda');

-- --------------------------------------------------------

--
-- Table structure for table `pt_premio`
--

CREATE TABLE `pt_premio` (
  `id_premio` int(11) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pt_premio`
--

INSERT INTO `pt_premio` (`id_premio`, `valor`) VALUES
(1, 1000),
(2, 20000),
(3, 300000),
(4, 4000000),
(5, 50000000);

-- --------------------------------------------------------

--
-- Table structure for table `pt_ronda`
--

CREATE TABLE `pt_ronda` (
  `id` int(11) NOT NULL,
  `id_ronda` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `acumulado_ronda` double NOT NULL,
  `estado_ronda` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `alias_jug` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pt_categoria`
--
ALTER TABLE `pt_categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `id_categoria_3` (`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_categoria_2` (`id_categoria`);

--
-- Indexes for table `pt_juego`
--
ALTER TABLE `pt_juego`
  ADD PRIMARY KEY (`id_juego`,`id_ronda`);

--
-- Indexes for table `pt_jugador`
--
ALTER TABLE `pt_jugador`
  ADD PRIMARY KEY (`alias_jug`);

--
-- Indexes for table `pt_opcion`
--
ALTER TABLE `pt_opcion`
  ADD PRIMARY KEY (`id_opcion`);

--
-- Indexes for table `pt_pregunta`
--
ALTER TABLE `pt_pregunta`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indexes for table `pt_premio`
--
ALTER TABLE `pt_premio`
  ADD PRIMARY KEY (`id_premio`),
  ADD UNIQUE KEY `id_premio` (`id_premio`);

--
-- Indexes for table `pt_ronda`
--
ALTER TABLE `pt_ronda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pt_opcion`
--
ALTER TABLE `pt_opcion`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `pt_pregunta`
--
ALTER TABLE `pt_pregunta`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pt_premio`
--
ALTER TABLE `pt_premio`
  MODIFY `id_premio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pt_ronda`
--
ALTER TABLE `pt_ronda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
