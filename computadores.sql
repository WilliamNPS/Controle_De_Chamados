-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2022 às 17:17
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `computadores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dti`
--

CREATE TABLE `dti` (
  `id` int(11) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `tombo` varchar(255) NOT NULL,
  `setor` varchar(255) NOT NULL,
  `responsavel` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `data_cadastrato` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dti`
--

INSERT INTO `dti` (`id`, `Modelo`, `tombo`, `setor`, `responsavel`, `status`, `observacao`, `data_cadastrato`) VALUES
(37, 'a', 'dd', 'dd', 'dd', ' ok ', 'ddd', '2022-10-18'),
(38, 'weewr', 'wewe', 'ewqeqw', 'qweqwe', ' ok ', 'qwewq', '2022-09-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `login`, `senha`) VALUES
(1, 'administrador', 'abc@1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dti`
--
ALTER TABLE `dti`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dti`
--
ALTER TABLE `dti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
