-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12/09/2024 às 16:12
-- Versão do servidor: 8.3.0
-- Versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste-ksi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `ID-CLIENTE` int NOT NULL AUTO_INCREMENT,
  `NOMES` varchar(100) NOT NULL COMMENT 'nome do cliente cadastrado',
  `EMAIL` varchar(100) NOT NULL COMMENT 'email cliente cadastrado',
  PRIMARY KEY (`ID-CLIENTE`)
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='cadastros clientes ksi';

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`ID-CLIENTE`, `NOMES`, `EMAIL`) VALUES
(1, 'taiane', 'taiane@gmail.com'),
(2, 'saijs', 'asaskn@isjai.com'),
(3, 'saijsgrydrf', 'gtsfatfdauh@alsakmd.com'),
(4, 'saijsgrydrf', 'gtsfatfdauh@alsakmd.com'),
(5, 'asdsafasd', 'fgasfas@szfds.br'),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, '', ''),
(12, '', ''),
(13, '', ''),
(14, '', ''),
(15, '', ''),
(16, 'dsfds', 'tai@usp.br'),
(17, 'dv', 'tai@usp.br'),
(18, 'dv', 'tai@usp.br'),
(19, 'fabianelopes', 'dfabiane@usp.br'),
(20, 'fabianelopes', 'dfabiane@usp.br'),
(21, 'fabianelopes', 'dfabiane@usp.br'),
(22, 'fabianelopes', 'dfabiane@usp.br'),
(23, 'fabianelopes', 'dfabiane@usp.br'),
(24, 'fabianelopes', 'dfabiane@usp.br'),
(25, 'fabianelopes', 'dfabiane@usp.br'),
(26, 'fabianelopes', 'dfabiane@usp.br'),
(27, 'fabianelopes', 'dfabiane@usp.br'),
(28, 'fabianelopes', 'dfabiane@usp.br'),
(29, 'fabianelopes', 'dfabiane@usp.br'),
(30, 'fabianelopes', 'dfabiane@usp.br'),
(31, 'fabianelopes', 'dfabiane@usp.br'),
(32, 'fabianelopes', 'dfabiane@usp.br'),
(33, 'fabianelopes', 'dfabiane@usp.br'),
(34, 'ygy', ''),
(35, 'ygy', ''),
(36, 'ygy', ''),
(37, 'ygy', ''),
(38, 'ygy', ''),
(39, 'yfgygyugu', ''),
(40, 'yfgygyugu', ''),
(41, 'yfgygyugu', ''),
(42, 'yfgygyugu', ''),
(43, 'yfgygyugu', ''),
(44, 'yfgygyugu', ''),
(45, 'yfgygyugu', ''),
(46, 'yfgygyugu', ''),
(47, 'yfgygyugu', ''),
(48, 'yfgygyugu', ''),
(49, 'yfgygyugu', ''),
(50, 'yfgygyugu', ''),
(51, 'yfgygyugu', ''),
(52, 'yfgygyugu', ''),
(53, 'yfgygyugu', ''),
(54, 'yfgygyugu', ''),
(55, 'yfgygyugu', ''),
(56, 'yfgygyugu', ''),
(57, 'yfgygyugu', ''),
(58, 'yfgygyugu', ''),
(59, 'yfgygyugu', ''),
(60, 'yfgygyugu', ''),
(61, 'yfgygyugu', ''),
(62, 'yfgygyugu', ''),
(63, 'yfgygyugu', ''),
(64, 'yfgygyugu', ''),
(65, 'yfgygyugu', ''),
(66, 'yfgygyugu', ''),
(67, 'yfgygyugu', ''),
(68, 'yfgygyugu', ''),
(69, 'yfgygyugu', ''),
(70, 'yfgygyugu', ''),
(71, 'yfgygyugu', ''),
(72, 'yfgygyugu', ''),
(73, 'yfgygyugu', ''),
(74, 'yfgygyugu', ''),
(75, 'yfgygyugu', ''),
(76, 'yfgygyugu', ''),
(77, 'yfgygyugu', ''),
(78, 'yfgygyugu', ''),
(79, 'yfgygyugu', ''),
(80, 'yfgygyugu', ''),
(81, 'yfgygyugu', ''),
(82, 'yfgygyugu', ''),
(83, 'yfgygyugu', ''),
(84, 'yfgygyugu', ''),
(85, 'yfgygyugu', ''),
(86, 'yfgygyugu', ''),
(87, 'yfgygyugu', ''),
(88, 'yfgygyugu', ''),
(89, 'yfgygyugu', ''),
(90, 'yfgygyugu', ''),
(91, 'yfgygyugu', ''),
(92, 'yfgygyugu', ''),
(93, 'yfgygyugu', ''),
(94, 'yfgygyugu', ''),
(95, 'yfgygyugu', ''),
(96, 'yfgygyugu', ''),
(97, 'yfgygyugu', ''),
(98, 'yfgygyugu', ''),
(99, 'yfgygyugu', ''),
(100, 'yfgygyugu', ''),
(101, 'yfgygyugu', ''),
(102, 'd', 'dfabiane@usp.br'),
(103, '', 'tai@s'),
(104, '', 'tai@s'),
(105, '', 'tai@s'),
(106, '', 'tai@s'),
(107, '', 'tai@s'),
(108, '', 'TaianeTerassaka@usp.br'),
(109, 'dsfd', 'dfabiane@usp.br'),
(110, '', 'fg@d.com'),
(111, '', 'fg@d.com'),
(112, '', 'dfabiane@us'),
(113, '', 'dfabiane@usp.br'),
(114, '', 'dfabiane@usp.br'),
(115, '', 'dfabiane@usp.br'),
(116, '', 'dfabiane@usp.br'),
(117, '', 'dfabiane@usp.br'),
(118, '', 'dfabiane@usp.br'),
(119, '', ''),
(120, '', ''),
(121, '', ''),
(122, '', ''),
(123, '', ''),
(124, '', ''),
(125, '', 'dfabiane@usp'),
(126, '', 'dfabiane@usp'),
(127, '', 'dfabiane@usp'),
(128, '', 'dfabiane@usp'),
(129, 'dsfds', 'dfabiane@usp.b'),
(130, '', ''),
(131, '', ''),
(132, '', ''),
(133, '', ''),
(134, '', ''),
(135, '', ''),
(136, '', ''),
(137, '', ''),
(138, '', ''),
(139, '', ''),
(140, '', ''),
(141, '', ''),
(142, 'dsfds', 'dfabiane@usp.br'),
(143, 'dsfds', 'dfabiane@usp.br'),
(144, 'dsfds', 'dfabiane@usp.br'),
(145, 'dsfds', 'dfabiane@usp.br'),
(146, 'dsfds', 'dfabiane@usp.br'),
(147, 'dsfds', 'dfabiane@usp.br'),
(148, 'dsfds', 'dfabiane@usp.br'),
(149, 'dsfds', 'dfabiane@usp.br'),
(150, 'dsfds', 'dfabiane@usp.br'),
(151, 'dsfds', 'dfabiane@usp.br'),
(152, 'dsfds', 'dfabiane@usp.br'),
(153, 'dsfds', 'TaianeTerassaka@usp.br'),
(154, 'dsf', ''),
(155, 'dsfds', 'dfabiane@usp.br'),
(156, 'kaio', 'TaianeTerassaka@usp.br'),
(157, 'fabianelopes', 'dfabiane@usp.br'),
(158, 'dsfds', 'fg@d.com'),
(159, 'mutil', 'tai@s'),
(160, 'k', 'dfabiane@usp.br'),
(161, '', ''),
(162, 'dv', ''),
(163, 'jk', 'tai@s'),
(164, 'dsf', 'b@h'),
(165, 'ds', 'g@hi'),
(166, 'jf', 'dfabiane@usp'),
(167, '', 'dfabiane@usp.br'),
(168, '', 'dfabiane@usp.br'),
(169, 'dv', 'dfabiane@usp.br'),
(170, 'dv', 'dfabiane@usp.br'),
(171, 'dvjh', 'dfabiane@usp.br'),
(172, 'taiaine', 'TaianeTerassaka@usp.br'),
(173, 'taiaine', 'TaianeTerassaka@usp.br'),
(174, 'taiaine', 'TaianeTerassaka@usp.br'),
(175, 'taiaine', 'TaianeTerassaka@usp.br'),
(176, 'taiaine', 'TaianeTerassaka@usp.br'),
(177, 'taiaine', 'TaianeTerassaka@usp.br'),
(178, 'taiaine', 'TaianeTerassaka@usp.br'),
(179, 'taiaine', 'TaianeTerassaka@usp.br'),
(180, 'dedao', 'dedao@gmail.com'),
(181, 'dedao', 'dedao@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
