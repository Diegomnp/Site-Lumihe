-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2021 às 14:19
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `endereco`, `complemento`, `telefone`, `bairro`, `cidade`, `cep`) VALUES
(66, 'DIEGO MURILO DO', 'PESSOA', 'diegonp18@gmail.co', 'Rua Henrique Salvatori 55', 'Bloco N1 APTO.23', '11993435164', 'Loteamento City Jaragua', 'São Paulo', '02998260'),
(67, 'DIEGO MURILO DO', 'PESSOA', 'diegonp18@gmail.com', 'Rua Henrique Salvatori 55', 'Bloco N1 APTO.23', '11993435164', 'h', 'São Paulo', '02998260'),
(68, 'DIEGO MURILO DO', 'PESSOA', 'diegonp18@gmail.com', 'Rua Henrique Salvatori 55', 'Bloco N1 APTO.23', '11993435164', 'kkk', 'São Paulo', '02998260'),
(69, 'DIEGO MURILO DO', 'PESSOA', 'diegonp18@gmail.com', 'Rua Henrique Salvatori 55', 'Bloco N1 APTO.23', '11993435164', 'as', 'São Paulo', '02998260'),
(70, 'DIEGO MURILO DO', 'PESSOA', 'diegonp18@gmail.com', 'Rua Henrique Salvatori 55', 'Bloco N1 APTO.23', '11993435164', 'pppppppp', 'São Paulo', '02998260'),
(71, 'DIEGO MURILO DO', 'PESSOA', 'diegonp18@gmail.com', 'Rua Henrique Salvatori 55', 'Bloco N1 APTO.23', '11993435164', 'gloria', 'São Paulo', '02998260'),
(72, 'Elaine', 'Pessoa', 'elaine.sbn@hotmail.com', 'Av. Lins,123', 'Casa 33', '119935174', 'Lapa', 'São Paulo', '02998-000');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
