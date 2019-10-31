-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 31-Out-2019 às 19:54
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iapneu77_bd_iap`
--
CREATE DATABASE IF NOT EXISTS `iapneu77_bd_iap` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `iapneu77_bd_iap`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

DROP TABLE IF EXISTS `atividades`;
CREATE TABLE IF NOT EXISTS `atividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dataNasc` date NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imagem` varchar(255) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `nivel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `dataNasc`, `usuario`, `senha`, `dataCadastro`, `imagem`, `thumb`, `nivel`) VALUES
(1, 'Administrador', 'Administrador@iapneuro.com.br', '2000-03-23', 'admin', 'admin', '2019-10-25 23:08:10', '', NULL, '1'),
(2, 'Usuario', 'usuario@iapneuro.com.br', '2000-03-23', 'user', 'user', '2019-10-25 23:08:10', '', NULL, '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_galeria`
--

DROP TABLE IF EXISTS `tb_galeria`;
CREATE TABLE IF NOT EXISTS `tb_galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(12) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `exibir` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_galeria`
--

INSERT INTO `tb_galeria` (`id`, `titulo`, `data`, `imagem`, `exibir`) VALUES
(16, 'gdfgfdg', '21/31/2311', '19126.jpg', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_postagens`
--

DROP TABLE IF EXISTS `tb_postagens`;
CREATE TABLE IF NOT EXISTS `tb_postagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(12) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `exibir` varchar(5) NOT NULL,
  `descricao` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_postagens`
--

INSERT INTO `tb_postagens` (`id`, `titulo`, `data`, `imagem`, `exibir`, `descricao`) VALUES
(1, 'jhkhjkhjkhjkh', '21/31/2311', '29623.jpg', 'Sim', 'bvcncncvncvnnvcn');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
