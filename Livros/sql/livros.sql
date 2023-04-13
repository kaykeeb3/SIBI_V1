-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03-Abr-2023 às 19:13
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `quantidade` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`titulo`, `autor`, `categoria`, `quantidade`) VALUES
('Dom Casmurro', 'Machado de Assis', 'Romance', 1),
('Madame Bovary', 'John Green', 'Romance', 0),
('As Aventuras de PI', 'Alison', 'Aventura e Drama', 3),
('As Crônicas de Nárnia', 'C.S. Lewis', 'Fantasia', 4),
('Harry Potter e o Cálice de Fogo', 'J.K. Rowling', 'Fantasia e Aventura', 8),
('O Cortiço', 'Luiz Azevedo', 'Romance', 10),
('Exemplo1', 'Autor1', 'Drama', 8),
('Exemplo2', 'Autor2', 'Suspense', 8),
('Exemplo3', 'Autor3', 'Terror/Horror', 8),
('Exemplo4', 'Autor4', 'Crônica', 8),
('Exemplo5', 'Autor5', 'Conto', 8),
('Exemplo6', 'Autor6', 'Poesia', 8),
('Exemplo7', 'Autor7', 'Biografia', 8),
('Exemplo8', 'Autor8', 'Nacional', 8),
('Exemplo9', 'Autor9', 'Material Acadêmico', 8),
('Exemplo10', 'Autor10', 'Outros', 8),
('Exemplo11', 'Autor11', 'outros', 7),
('Exemplo12', 'Autor12', 'Terror e Horror', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
