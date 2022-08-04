-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Out-2019 às 11:42
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fasttravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_comuns`
--

CREATE TABLE `usuarios_comuns` (
  `id` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `nome_completo` text NOT NULL,
  `cpf` int(14) NOT NULL,
  `endereco` text NOT NULL,
  `celular` int(20) NOT NULL,
  `telefone` int(20) NOT NULL,
  `chave` int(100) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `sexo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios_comuns`
--

INSERT INTO `usuarios_comuns` (`id`, `nome_usuario`, `nome`, `sobrenome`, `nome_completo`, `cpf`, `endereco`, `celular`, `telefone`, `chave`, `senha`, `email`, `sexo`) VALUES
(1, 'bob', 'caio', 'caio', '0', 0, '0', 0, 0, 1, '123', 'caio@gmail.com', '0'),
(2, 'adm', '', '', '', 0, '', 0, 0, 0, '123', '', ''),
(3, 'administrador', '', '', '', 0, '', 0, 0, 0, '123', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios_comuns`
--
ALTER TABLE `usuarios_comuns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios_comuns`
--
ALTER TABLE `usuarios_comuns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
