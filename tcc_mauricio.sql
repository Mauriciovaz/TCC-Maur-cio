-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2020 às 09:40
-- Versão do servidor: 5.6.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tcc_mauricio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE IF NOT EXISTS `atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `questao1` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `op1q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op2q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op3q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op4q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op5q1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `questao2` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `op1q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op2q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op3q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op4q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op5q2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `questao3` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `op1q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op2q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op3q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op4q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `op5q3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `correta1` int(11) NOT NULL,
  `correta2` int(11) NOT NULL,
  `correta3` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
