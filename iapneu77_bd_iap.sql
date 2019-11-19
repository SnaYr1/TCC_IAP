-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Nov-2019 às 18:13
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_postagens`
--

INSERT INTO `tb_postagens` (`id`, `titulo`, `data`, `imagem`, `exibir`, `descricao`) VALUES
(1, 'Lorem Ipsum', '21/31/2311', '29623.jpg', 'Sim', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus feugiat dui, sed pulvinar velit condimentum in. Vestibulum id sagittis ipsum, eget fermentum enim. In iaculis semper tempor. Nam non pretium lectus. Nam dignissim lorem vel mollis eleifend. Sed eget risus bibendum, faucibus enim at, facilisis arcu. Integer tempor ligula id velit faucibus mollis. Ut risus mauris, congue non justo eget, suscipit tincidunt odio. Donec quis ultricies tortor. Vestibulum neque erat, congue sit amet suscipit at, efficitur eget nisl. Praesent malesuada nunc et leo auctor, ac accumsan lacus condimentum. Nunc lobortis pharetra eleifend. Aenean in laoreet ligula. Pellentesque a nulla eu mauris elementum tempor aliquet id dolor. Suspendisse id nunc et est bibendum euismod in id orci.</span>'),
(2, 'Quais sÃ£o os principais distÃºrbios de aprendizagem ?', '06/11/2019', '1121902982.jpg', 'Sim', '<span style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">Alguns exemplos de transtornos de aprendizagem mais conhecidos sÃ£o:</span><div><br style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><ul><li><span style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Dislexia:</b> Os alunos que enfrentam esse distÃºrbio apresentam, tipicamente, uma dificuldade de leitura.</span></li><li><span style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Disgrafia:</b> Os alunos que enfrentam esse distÃºrbio apresentam dificuldade na escrita. Isso inclui, principalmente, erros de ortografia, como trocar, omitir, acrescentar ou inverter letras.</span></li><li><span style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Discalculia:</b> Os alunos que enfrentam esse distÃºrbio sÃ£o afetados, principalmente, em sua relaÃ§Ã£o com a matemÃ¡tica.&nbsp;</span><span class=\"text_exposed_show\" style=\"display: inline; font-family: Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 14px;\">Portanto, os sinais envolvem dificuldade em organizar, classificar e realizar operaÃ§Ãµes com nÃºmeros.<br></span></li><li><span class=\"text_exposed_show\" style=\"display: inline; font-family: Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 14px;\"><b>Dislalia:</b> Os alunos que enfrentam esse distÃºrbio demonstram dificuldades na fala.</span></li><li><span class=\"text_exposed_show\" style=\"display: inline; font-family: Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 14px;\"><b>Disortografia:</b> Os alunos que enfrentam esse distÃºrbio geralmente tambÃ©m sÃ£o afetados pela dislexia. Ainda que se relacione Ã  linguagem escrita, a disortografia Ã© mais ampla do que a disgrafia. Pode envolver desde a falta de vontade de escrever atÃ© a dificuldade em concatenar oraÃ§Ãµes.</span></li><li><span class=\"text_exposed_show\" style=\"display: inline; font-family: Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 14px;\"><b>Transtorno de DÃ©ficit de AtenÃ§Ã£o e Hiperatividade (TDAH):</b> Os alunos que enfrentam esse distÃºrbio apresentam baixa concentraÃ§Ã£o, inquietude e impulsividade.</span></li></ul><span class=\"text_exposed_show\" style=\"display: inline; font-family: Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 14px;\">.<br>.<br>.<br>.<br>.<br><a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/mococa?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">mococa</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/iap?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">iap</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/escola?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">escola</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/ajudasuacrian%C3%A7a?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">ajudasuacrianÃ§a</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/crian%C3%A7as?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">crianÃ§as</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/disturbio?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">disturbio</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/disturbiodeaprendizagem?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">disturbiodeaprendizagem</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/concentra%C3%A7a%C3%B5?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">concentraÃ§aÃµ</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/umpulsividade?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">umpulsividade</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/inquieto?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARBA5UiEZJkw3oimOw6IBQLGYNB6ziq732M7xwTydz4RTlXqWlHV9Xo4qm_GuV6fVFpfbpPPWZ2gp2dBwrGG4PFf00pwau61k-NutcUGRyTgMVHCIzRdmLiUTLf1GoC8_OQSyYyOYwbEDxhY0uXDEHR6p4twm65UiZvg2btCMeIFGRrIarUO-H7r3xyBTLdzIumaEgaBS52HWIC4bCzcLgvLlPDRXZPeyIYyir92aP3YRIYGc0Y6jD1Si6a11Kci22jatjzIHVGwoUW_-ZoUGdP4-06yxF8gytmrPeI8TkAo0e4ttmLewvD-l0F2Ak2EkGGJfOCfn8J2u60H80TullWEsA&amp;__tn__=%2ANK-R\" data-ft=\"{\" type\":104,\"tn\":\"*n\"}\"=\"\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">inquieto</span></span></a></span><br></div>'),
(3, 'O que Ã© um distÃºrbio de aprendizagem ?', '06/11/2019', '700260571.jpg', 'Sim', '<span style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">Os transtornos relacionados ao processo de aprendizagem estÃ£o entre as dificuldades de aprendizagem que o aluno pode manifestar, entretanto, correspondem a um padrÃ£o muito abaixo da expectativa em relaÃ§Ã£o Ã  capacidade cognitiva esperada para determinada etapa escolar.</span><br style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><span style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">Os distÃºrbios de aprendizagem estÃ£o relacionados a problemas que nÃ£o decorrem de causas educativas. Isso significa que, mesmo apÃ³s uma mudanÃ§a na abordagem educacional do professor, o aluno continua apresentando</span><span class=\"text_exposed_show\" style=\"display: inline; font-family: Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 14px;\">&nbsp;os mesmos sintomas. Isso aponta para a necessidade de uma investigaÃ§Ã£o mais aprofundada, que determinarÃ¡ quais sÃ£o as causas da dificuldade em questÃ£o.<br>.<br>.<br>.<br>.<br>.<br><a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/crian%C3%A7as?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARCth4GXWXdKW5PtX-fdFMH8fEI05fjx54kWAv12ElSwL9dZBA5jkWjf4IqCPrwF3Nfst1RJxrdYjeNqAY1jppN1Hv9Ve5hfCxGLhBP7IoO0fW6bjQB0iqMCuGHAe8oE-qLG2iZkleFYHotoitIpLSHLvAQt2YgJ2CG5DNxrs7n_HcaICtzzo-qjujlgWTe31rQJTVPzOnpDcPYdJwGZGQ6u9TVsETpxZQYoNFMM8M8jEmaKd99ceMaFHQKCDlDuH_LecPTw4hcbW7bu8rrdQM56RbsyCTJb9XTS4cBO0cQ_sSAsJ1VLjZYEJACWeeqlX7EM1DqphjBADlOAAJlDuRRv1A&amp;__tn__=%2ANK-R\" data-ft=\"{&quot;type&quot;:104,&quot;tn&quot;:&quot;*N&quot;}\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">crianÃ§as</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/disturbiodeaprendizagem?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARCth4GXWXdKW5PtX-fdFMH8fEI05fjx54kWAv12ElSwL9dZBA5jkWjf4IqCPrwF3Nfst1RJxrdYjeNqAY1jppN1Hv9Ve5hfCxGLhBP7IoO0fW6bjQB0iqMCuGHAe8oE-qLG2iZkleFYHotoitIpLSHLvAQt2YgJ2CG5DNxrs7n_HcaICtzzo-qjujlgWTe31rQJTVPzOnpDcPYdJwGZGQ6u9TVsETpxZQYoNFMM8M8jEmaKd99ceMaFHQKCDlDuH_LecPTw4hcbW7bu8rrdQM56RbsyCTJb9XTS4cBO0cQ_sSAsJ1VLjZYEJACWeeqlX7EM1DqphjBADlOAAJlDuRRv1A&amp;__tn__=%2ANK-R\" data-ft=\"{&quot;type&quot;:104,&quot;tn&quot;:&quot;*N&quot;}\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">disturbiodeaprendizagem</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/aprendizagem?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARCth4GXWXdKW5PtX-fdFMH8fEI05fjx54kWAv12ElSwL9dZBA5jkWjf4IqCPrwF3Nfst1RJxrdYjeNqAY1jppN1Hv9Ve5hfCxGLhBP7IoO0fW6bjQB0iqMCuGHAe8oE-qLG2iZkleFYHotoitIpLSHLvAQt2YgJ2CG5DNxrs7n_HcaICtzzo-qjujlgWTe31rQJTVPzOnpDcPYdJwGZGQ6u9TVsETpxZQYoNFMM8M8jEmaKd99ceMaFHQKCDlDuH_LecPTw4hcbW7bu8rrdQM56RbsyCTJb9XTS4cBO0cQ_sSAsJ1VLjZYEJACWeeqlX7EM1DqphjBADlOAAJlDuRRv1A&amp;__tn__=%2ANK-R\" data-ft=\"{&quot;type&quot;:104,&quot;tn&quot;:&quot;*N&quot;}\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">aprendizagem</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/iap?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARCth4GXWXdKW5PtX-fdFMH8fEI05fjx54kWAv12ElSwL9dZBA5jkWjf4IqCPrwF3Nfst1RJxrdYjeNqAY1jppN1Hv9Ve5hfCxGLhBP7IoO0fW6bjQB0iqMCuGHAe8oE-qLG2iZkleFYHotoitIpLSHLvAQt2YgJ2CG5DNxrs7n_HcaICtzzo-qjujlgWTe31rQJTVPzOnpDcPYdJwGZGQ6u9TVsETpxZQYoNFMM8M8jEmaKd99ceMaFHQKCDlDuH_LecPTw4hcbW7bu8rrdQM56RbsyCTJb9XTS4cBO0cQ_sSAsJ1VLjZYEJACWeeqlX7EM1DqphjBADlOAAJlDuRRv1A&amp;__tn__=%2ANK-R\" data-ft=\"{&quot;type&quot;:104,&quot;tn&quot;:&quot;*N&quot;}\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">iap</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/aprender?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARCth4GXWXdKW5PtX-fdFMH8fEI05fjx54kWAv12ElSwL9dZBA5jkWjf4IqCPrwF3Nfst1RJxrdYjeNqAY1jppN1Hv9Ve5hfCxGLhBP7IoO0fW6bjQB0iqMCuGHAe8oE-qLG2iZkleFYHotoitIpLSHLvAQt2YgJ2CG5DNxrs7n_HcaICtzzo-qjujlgWTe31rQJTVPzOnpDcPYdJwGZGQ6u9TVsETpxZQYoNFMM8M8jEmaKd99ceMaFHQKCDlDuH_LecPTw4hcbW7bu8rrdQM56RbsyCTJb9XTS4cBO0cQ_sSAsJ1VLjZYEJACWeeqlX7EM1DqphjBADlOAAJlDuRRv1A&amp;__tn__=%2ANK-R\" data-ft=\"{&quot;type&quot;:104,&quot;tn&quot;:&quot;*N&quot;}\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">aprender</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/institutodeaprendizagem?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARCth4GXWXdKW5PtX-fdFMH8fEI05fjx54kWAv12ElSwL9dZBA5jkWjf4IqCPrwF3Nfst1RJxrdYjeNqAY1jppN1Hv9Ve5hfCxGLhBP7IoO0fW6bjQB0iqMCuGHAe8oE-qLG2iZkleFYHotoitIpLSHLvAQt2YgJ2CG5DNxrs7n_HcaICtzzo-qjujlgWTe31rQJTVPzOnpDcPYdJwGZGQ6u9TVsETpxZQYoNFMM8M8jEmaKd99ceMaFHQKCDlDuH_LecPTw4hcbW7bu8rrdQM56RbsyCTJb9XTS4cBO0cQ_sSAsJ1VLjZYEJACWeeqlX7EM1DqphjBADlOAAJlDuRRv1A&amp;__tn__=%2ANK-R\" data-ft=\"{&quot;type&quot;:104,&quot;tn&quot;:&quot;*N&quot;}\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">institutodeaprendizagem</span></span></a>&nbsp;<a class=\"_58cn\" href=\"https://web.facebook.com/hashtag/mococa?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARCth4GXWXdKW5PtX-fdFMH8fEI05fjx54kWAv12ElSwL9dZBA5jkWjf4IqCPrwF3Nfst1RJxrdYjeNqAY1jppN1Hv9Ve5hfCxGLhBP7IoO0fW6bjQB0iqMCuGHAe8oE-qLG2iZkleFYHotoitIpLSHLvAQt2YgJ2CG5DNxrs7n_HcaICtzzo-qjujlgWTe31rQJTVPzOnpDcPYdJwGZGQ6u9TVsETpxZQYoNFMM8M8jEmaKd99ceMaFHQKCDlDuH_LecPTw4hcbW7bu8rrdQM56RbsyCTJb9XTS4cBO0cQ_sSAsJ1VLjZYEJACWeeqlX7EM1DqphjBADlOAAJlDuRRv1A&amp;__tn__=%2ANK-R\" data-ft=\"{&quot;type&quot;:104,&quot;tn&quot;:&quot;*N&quot;}\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">mococa</span></span></a></span><br>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
