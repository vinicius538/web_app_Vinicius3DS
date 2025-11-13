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

CREATE TABLE `sign_up` (
  id_user int(4) primary key not null auto_increment,
  `email` varchar(256) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `nome` varchar(56) NOT NULL,
  sobrenome varchar(200) not null,
  `numero` int(15) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'disponivel',
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table eventos(
	id_evento int primary key auto_increment,
    nome_evento varchar(120) not null,
    descricao varchar(500) not null,
    local varchar(200) not null,
    data date not null,
    hora time not null,
    capacidade int(6),
    imagem varchar(255)
);

create table reservas(
	id_reserva int primary key auto_increment,
    id_usuario int not null,
    id_evento int not null,
    status_reserva char(1) not null,
    
    foreign key(id_usuario) references sign_up(id_user),
    foreign key(id_evento) references eventos(id_evento)
);
--
-- Despejando dados para a tabela `sign_up`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
