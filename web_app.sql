-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/09/2025 às 02:11
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
CREATE DATABASE `web_app`;
USE web_app;
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `sign_up`
--

CREATE TABLE `users` (
  id_user int(4) primary key not null auto_increment,
  `email` varchar(256) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `numero` int(15) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'disponivel',
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sign_up`
--

INSERT INTO `users` (`email`, `senha`, `nome`, `numero`, `status`, `qtd_acesso`) VALUES
('vinicius.souza110208@gmail.com', 'eunaoaguentomais', 'vinopavel', 12121212, 'disponivel', NULL),
('vinicius.pcd@gmail.com', 'Pcd1234', 'Vinicius de Souza', 981879552, 'disponivel', NULL),
('untitled@gmail.com', 'null', 'nulo', 1298181879, 'disponivel', NULL),
('nameless@gmail.com', '1234qp', 'Sem Nome', 123, 'disponivel', NULL),
('jokerdop5r@gmail.com', 'persona5', 'joker do persona 5', 555555555, 'disponivel', NULL),
('exemplo@gmail.com', 'exemplo', 'exemplo', 2147483647, 'disponivel', NULL),
('eu@gmail.com', '1234', 'viniço', 2147483647, 'disponivel', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
