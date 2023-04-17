-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2023 at 03:38 PM
-- Server version: 10.11.2-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca_teste`
--

-- --------------------------------------------------------

--
-- Table structure for table `livro`
--

CREATE TABLE `livro` (
  `id` int(4) NOT NULL,
  `nome_livro` varchar(150) NOT NULL,
  `num_livro` varchar(120) NOT NULL,
  `autor_livro` varchar(130) NOT NULL,
  `genero_livro` varchar(120) NOT NULL,
  `quant_livro` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livro`
--

INSERT INTO `livro` (`id`, `nome_livro`, `num_livro`, `autor_livro`, `genero_livro`, `quant_livro`) VALUES
(683, 'NomeLivroTeste', 'NumLivroTeste', 'AutorLivroTeste', 'GenerLivroTeste', 9);

-- --------------------------------------------------------

--
-- Table structure for table `requisicao`
--

CREATE TABLE `requisicao` (
  `id` int(4) NOT NULL,
  `aluno_req` varchar(120) NOT NULL,
  `turma_req` varchar(120) NOT NULL,
  `livro_req` varchar(150) NOT NULL,
  `autor_req` varchar(130) NOT NULL,
  `dataRequisicao_req` date NOT NULL,
  `dataDevolucao_req` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requisicao`
--

INSERT INTO `requisicao` (`id`, `aluno_req`, `turma_req`, `livro_req`, `autor_req`, `dataRequisicao_req`, `dataDevolucao_req`) VALUES
(33, 'Romario', '3° Informática', 'NomeLivroTeste', ' AutorLivroTeste', '2023-04-17', '2023-04-20'),
(34, 'Carlos', '3° Segurança do Trabalho', 'NomeLivroTeste', ' AutorLivroTeste', '2023-04-18', '2023-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'ke6717', 'Kayke@2023'),
(2, 'mv1025', 'Marcos@2023'),
(3, 'rh1478', 'Romario@2023'),
(4, 'ja2369', 'Alison@2023'),
(5, 'br9875', 'Bruno@2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisicao`
--
ALTER TABLE `requisicao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=684;

--
-- AUTO_INCREMENT for table `requisicao`
--
ALTER TABLE `requisicao`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
