-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Maio-2024 às 22:32
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_2024`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `ingressos` int(255) NOT NULL,
  `local` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho_pw`
--

CREATE TABLE `trabalho_pw` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contato` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `trabalho_pw`
--

INSERT INTO `trabalho_pw` (`id`, `nome`, `idade`, `email`, `contato`, `cpf`, `senha`) VALUES
(1, 'Gabriel', 0, 'gabriel@gmail.com', '8589929969', '112.234.902-54', 'gabriel'),
(5, 'kaka', 99, 'kaka@gmail.com', '(88)9999999', '111.111.111-08', 'kaka');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `trabalho_pw`
--
ALTER TABLE `trabalho_pw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `trabalho_pw`
--
ALTER TABLE `trabalho_pw`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
