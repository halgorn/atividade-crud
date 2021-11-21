-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2021 às 10:36
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_atividade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `janeiro` double DEFAULT NULL,
  `fevereiro` double DEFAULT NULL,
  `marco` double DEFAULT NULL,
  `abril` double DEFAULT NULL,
  `maio` double DEFAULT NULL,
  `junho` double DEFAULT NULL,
  `julho` double DEFAULT NULL,
  `agosto` double DEFAULT NULL,
  `setembro` double DEFAULT NULL,
  `outubro` double DEFAULT NULL,
  `novembro` double DEFAULT NULL,
  `dezembro` double DEFAULT NULL,
  `fixo` double DEFAULT NULL,
  `dataContratacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `janeiro`, `fevereiro`, `marco`, `abril`, `maio`, `junho`, `julho`, `agosto`, `setembro`, `outubro`, `novembro`, `dezembro`, `fixo`, `dataContratacao`) VALUES
(1, 'João', 6000, 8000, 5500, 7500, 10500, 12000, 16000, 16500, 18000, 780, 11000, 15000, 2890, '2010-02-02'),
(2, 'Maria', 5000, 5550, 6000, 6000, 10000, 13000, 12000, 15000, 18000, 19000, 20500, 21000, 2300, '2018-01-01'),
(3, 'Paulo', 3000, 3500, 4000, 5500, 68000, 8000, 10000, 10600, 11000, 12000, 11000, 22000, 1890, '2019-03-03'),
(4, 'pedro', 123123123, 23423423, 12343, 312342, 123324, 5345, 345, 34534, 324234, 12313, 3423423, 234234, 3123123, '2021-11-17'),
(5, 'carlos', 123123123, 423, 343, 312342, 3324, 534345, 345, 34534, 324234, 12313, 3423423, 54234, 3123123, '2021-11-17'),
(6, 'dagoberto', 123123123, 423, 343, 3455542, 3324, 535445, 345, 36534, 36534, 12313, 65423, 534, 323, '2021-11-18'),
(7, 'rogério', 4333, 423, 34343, 3455342, 3324, 53675, 345, 36534, 35534, 12433, 65423, 534, 334323, '2021-11-19'),
(8, 'Carla', 43333, 45423, 65343, 65342, 33, 663675, 345, 3534, 35534, 15433, 65423, 5454, 33223, '2021-11-10'),
(9, 'Fernanda', 54543, 4543, 233, 54342, 4333, 65675, 34534, 35434, 334, 133, 6544323, 554, 333, '2033-11-09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
