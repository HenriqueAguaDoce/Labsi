-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Fev-2017 às 01:25
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pi3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `areas`
--

INSERT INTO `areas` (`id`, `nome`) VALUES
(1, 'AdministraÃ§Ã£o de redes'),
(2, 'AnÃ¡lise de sistemas informÃ¡ticos'),
(3, 'AplicaÃ§Ãµes informÃ¡ticas (concepÃ§Ã£o)'),
(4, 'CiÃªncias informÃ¡ticas'),
(5, 'ConcepÃ§Ã£o de sistemas informÃ¡ticos'),
(6, 'InformÃ¡tica'),
(7, 'Linguagens de programaÃ§Ã£o'),
(8, 'ProgramaÃ§Ã£o'),
(9, 'Sistemas operativos'),
(10, 'DomÃ³tica'),
(11, 'ElectrÃ³nica da radiodifusÃ£o'),
(12, 'Engenharia de controlo electrÃ³nico'),
(13, 'Engenharia electrÃ³nica'),
(14, 'Engenharia informÃ¡tica'),
(15, 'RobÃ³tica'),
(16, 'Sistemas de comunicaÃ§Ã£o'),
(17, 'Tecnologia de redes'),
(18, 'Tecnologia de telecomunicaÃ§Ãµes'),
(19, 'Tecnologia digital'),
(20, 'Biotecnologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(8000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_areas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `titulo`, `descricao`, `foto`, `documento`, `data`, `hora`, `id_areas`) VALUES
(6, 'Proj 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fpvcam.jpg', 'trabalho_pratico_grupo1.pdf', '2017-02-12', '21:56:28', 1),
(7, 'Proj 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'icon.png', 'Relatorio_PDM2.pdf', '2017-02-12', '21:58:58', 2),
(8, 'Proj 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'icon.png', '97-Things-Every-Programmer-Should-Know-Extended.pdf', '2017-02-12', '22:00:12', 3),
(9, 'Proj 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '10357262_1087265141314452_4556263755687510506_n.jpg', 'Enunciado3_ProjInt3_InformacaoInvestigadores.pdf', '2017-02-12', '22:02:25', 4),
(10, 'Proj 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '11134102_10205734305812521_3103846086664144154_o.jpg', '97-Things-Every-Programmer-Should-Know-Extended.pdf', '2017-02-12', '22:04:09', 5),
(12, 'Proj 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fpvcam.jpg', '97-Things-Every-Programmer-Should-Know-Extended.pdf', '2017-02-13', '15:24:09', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

CREATE TABLE `publicacoes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(8000) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_areas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `titulo`, `descricao`, `documento`, `data`, `hora`, `id_areas`) VALUES
(93, 'Pub 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'trabalho_pratico_grupo1.pdf', '2017-02-12', '21:36:51', 1),
(94, 'Pub 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Relatorio_PDM2.pdf', '2017-02-12', '21:37:58', 2),
(95, 'Pub 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '97-Things-Every-Programmer-Should-Know-Extended.pdf', '2017-02-12', '21:40:05', 3),
(96, 'Pub 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Classificacao_PDM1_2015-16.pdf', '2017-02-12', '21:41:03', 4),
(97, 'Pub 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Enunciado3_ProjInt3_InformacaoInvestigadores.pdf', '2017-02-12', '21:42:55', 5),
(98, 'Pub 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Enunciado1_ProjInt3_Alertas_Ambientais.pdf', '2017-02-12', '21:43:30', 6),
(99, 'Pub 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'trabalho_pratico_grupo1.pdf', '2017-02-12', '21:45:40', 1),
(100, 'Pub 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Relatorio_PDM2.pdf', '2017-02-12', '21:46:19', 2),
(101, 'Pub 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'trabalho_pratico_grupo1.pdf', '2017-02-12', '21:49:02', 3),
(102, 'Pub 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Relatorio_PDM2.pdf', '2017-02-12', '21:49:49', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_utilizadores`
--

CREATE TABLE `tipo_utilizadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_utilizadores`
--

INSERT INTO `tipo_utilizadores` (`id`, `nome`) VALUES
(1, 'Aluno'),
(2, 'Docente'),
(3, 'Investigador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `descricao` varchar(8000) NOT NULL,
  `id_tipo_utilizadores` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `nome`, `email`, `password`, `foto`, `descricao`, `id_tipo_utilizadores`, `admin`) VALUES
(17, 'Pedro', 'pedro@mail.com', '$2a$10$26HqIO3iA9Zx3j/FFahoM.UlcKrDffHiKcpblXyvpTJzcw8spGO1S', '', '', 1, 0),
(19, 'Joao', 'joao@mail.com', '$2a$10$pBU.aokPXq6j6htGFKkBEeZoA4FaGx6hEBqCpfaW5eojeue5.73Te', '', '', 1, 0),
(21, 'Fortes', 'fortes@mail.com', '$2a$10$pWYkpHR8ICF3mZomuKzOpOkFxt.sy31MHL179619sYfyCZeIqvpR2', 'micro105-6_preview_featured.jpg', 'Teste Ã  descriÃ§Ã£o !', 2, 0),
(22, 'Henrique', 'henriqueaguadoce@gmail.com', '$2a$10$ZqnHNMBS/A4oO1Hm9Z4Vg.gAYMYYcXERzs5hKNAKBNtZYiIT3dDPu', '10357262_1087265141314452_4556263755687510506_n.jpg', 'OlÃ¡, o meu nome Ã© Henrique Ãgua-Doce!', 1, 0),
(23, 'Admin', 'admin@admin.pt', '$2a$10$dAjGfRebuTCiD2iwj2SqJuOAQ5obnSy9q7a7NSeG6uS9vLKZzx9/G', '', '', 2, 2),
(26, 'Bento', 'bento@mail.com', '$2a$10$N.MjQjL4wDFVF4//HZGo0eBhUkYOWvGDeYtuaeLRDDpnCZmqFPee6', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores_projetos`
--

CREATE TABLE `utilizadores_projetos` (
  `id` int(11) NOT NULL,
  `id_utilizadores` int(11) NOT NULL,
  `id_projetos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizadores_projetos`
--

INSERT INTO `utilizadores_projetos` (`id`, `id_utilizadores`, `id_projetos`) VALUES
(11, 26, 6),
(12, 17, 6),
(13, 19, 6),
(14, 26, 7),
(15, 17, 8),
(16, 17, 9),
(17, 21, 9),
(18, 22, 10),
(22, 17, 10),
(23, 22, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores_publicacoes`
--

CREATE TABLE `utilizadores_publicacoes` (
  `id` int(11) NOT NULL,
  `id_utilizadores` int(11) NOT NULL,
  `id_publicacoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizadores_publicacoes`
--

INSERT INTO `utilizadores_publicacoes` (`id`, `id_utilizadores`, `id_publicacoes`) VALUES
(114, 22, 93),
(115, 17, 93),
(116, 19, 93),
(117, 22, 94),
(119, 21, 94),
(120, 19, 95),
(121, 21, 95),
(122, 19, 96),
(123, 21, 97),
(125, 21, 98),
(126, 17, 98),
(127, 17, 99),
(128, 17, 100),
(130, 26, 101),
(131, 19, 101),
(132, 22, 101),
(133, 26, 102),
(134, 19, 102),
(135, 26, 94);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_areas` (`id_areas`);

--
-- Indexes for table `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_areas` (`id_areas`);

--
-- Indexes for table `tipo_utilizadores`
--
ALTER TABLE `tipo_utilizadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_utilizadores` (`id_tipo_utilizadores`);

--
-- Indexes for table `utilizadores_projetos`
--
ALTER TABLE `utilizadores_projetos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilizadores` (`id_utilizadores`),
  ADD KEY `id_projetos` (`id_projetos`);

--
-- Indexes for table `utilizadores_publicacoes`
--
ALTER TABLE `utilizadores_publicacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilizadores` (`id_utilizadores`),
  ADD KEY `id_publicacoes` (`id_publicacoes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `tipo_utilizadores`
--
ALTER TABLE `tipo_utilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `utilizadores_projetos`
--
ALTER TABLE `utilizadores_projetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `utilizadores_publicacoes`
--
ALTER TABLE `utilizadores_publicacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `projetos`
--
ALTER TABLE `projetos`
  ADD CONSTRAINT `projetos_ibfk_1` FOREIGN KEY (`id_areas`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD CONSTRAINT `publicacoes_ibfk_1` FOREIGN KEY (`id_areas`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD CONSTRAINT `utilizadores_ibfk_1` FOREIGN KEY (`id_tipo_utilizadores`) REFERENCES `tipo_utilizadores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `utilizadores_projetos`
--
ALTER TABLE `utilizadores_projetos`
  ADD CONSTRAINT `utilizadores_projetos_ibfk_1` FOREIGN KEY (`id_utilizadores`) REFERENCES `utilizadores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizadores_projetos_ibfk_2` FOREIGN KEY (`id_projetos`) REFERENCES `projetos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `utilizadores_publicacoes`
--
ALTER TABLE `utilizadores_publicacoes`
  ADD CONSTRAINT `utilizadores_publicacoes_ibfk_1` FOREIGN KEY (`id_utilizadores`) REFERENCES `utilizadores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizadores_publicacoes_ibfk_2` FOREIGN KEY (`id_publicacoes`) REFERENCES `publicacoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
