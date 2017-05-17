-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Maio-2017 às 02:13
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `frases`
--

DROP SCHEMA IF EXISTS `frases` ;

-- -----------------------------------------------------
-- Schema frases
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `frases` DEFAULT CHARACTER SET utf8 ;
USE `frases` ;


-- --------------------------------------------------------

--
-- Estrutura da tabela `lista`
--

CREATE TABLE IF NOT EXISTS `lista` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frase` varchar(1000) NOT NULL DEFAULT '0',
  `autor` varchar(150) NOT NULL DEFAULT '0',
  KEY `Index 1` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `lista`
--

INSERT INTO `lista` (`id`, `frase`, `autor`) VALUES
(1, '"Nunca devemos envergonharmo-nos das nossas próprias lágrimas."', 'Charles Dickens'),
(2, '"Carregue dentro si apenas o bem. O amor, a bondade e a paz são sempre boas companhias."', 'Autor Desconhecido'),
(3, '"Tenho em mim todos os sonhos do mundo."', 'Fernando Pessoa'),
(4, '"Amigo de verdade é aquele que diz o que você precisa ouvir, não o que você quer ouvir. Ele arrisca a amizade pelo seu bem!"', 'Autor Desconhecido'),
(5, '"Não compreendo como querer o outro possa tornar-se mais forte do que querer a si próprio."', 'Caio Fernando Abreu'),
(6, '"Quando o sorriso de um amigo lhe fizer feliz, você saberá que tornou-se amigo de verdade."', 'Autor Desconhecido'),
(7, '"Quem não compreende um olhar, tampouco há de compreender uma longa explicação."', 'Mário Quintana'),
(8, '"Sou como você me vê. Posso ser leve como uma brisa ou forte como uma ventania, depende de quando e como você me vê passar."', 'Clarice Lispector'),
(9, '"Não sabendo que era impossível, ele foi lá e fez."', 'Jean Cocteau'),
(10, '"Liberdade é pouco. O que eu desejo ainda não tem nome."', 'Clarice Lispector');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
