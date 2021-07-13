-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jul-2021 às 18:18
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbvelharia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadcliente`
--

CREATE TABLE `tbcadcliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `sobrenome` varchar(90) DEFAULT NULL,
  `rg` int(15) DEFAULT NULL,
  `cpf` int(15) DEFAULT NULL,
  `nickname` varchar(30) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `endereco` varchar(90) DEFAULT NULL,
  `cidade` varchar(90) DEFAULT NULL,
  `estado` varchar(90) DEFAULT NULL,
  `cep` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadfornecedor`
--

CREATE TABLE `tbcadfornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `sobrenome` varchar(90) DEFAULT NULL,
  `rg` int(15) DEFAULT NULL,
  `cpf` int(15) DEFAULT NULL,
  `nickname` varchar(30) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `endereco` varchar(90) DEFAULT NULL,
  `cidade` varchar(90) DEFAULT NULL,
  `estado` varchar(90) DEFAULT NULL,
  `cep` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpromocoes`
--

CREATE TABLE `tbpromocoes` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `id` int(11) NOT NULL,
  `nomeusuario` varchar(90) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `email` varchar(64) NOT NULL,
  `senha` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcadcliente`
--
ALTER TABLE `tbcadcliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbcadfornecedor`
--
ALTER TABLE `tbcadfornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbpromocoes`
--
ALTER TABLE `tbpromocoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcadcliente`
--
ALTER TABLE `tbcadcliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `tbcadfornecedor`
--
ALTER TABLE `tbcadfornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tbpromocoes`
--
ALTER TABLE `tbpromocoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
