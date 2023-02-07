-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Fev-2023 às 16:27
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdustrinox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentários`
--

CREATE TABLE `comentários` (
  `id` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `estrela` int(5) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentários`
--

INSERT INTO `comentários` (`id`, `Data`, `Titulo`, `comentario`, `estrela`, `id_user`) VALUES
(15, '2023-01-11', 'Sobre o site', 'xx', 5, 79),
(18, '2023-02-02', 'Sobre o site', 'xxDDDDDDDSADADSADA', 3, 78),
(19, '2023-02-07', 'ssss', 'xx e um teste1', 4, 78),
(20, '2023-02-02', 'critica ccccc', 'ccccc', 1, 78);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Telefone` int(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `tipo_cliente` varchar(10) NOT NULL,
  `denominacao` varchar(100) NOT NULL,
  `admin` int(10) NOT NULL,
  `desativar` int(5) NOT NULL,
  `Data` date NOT NULL,
  `ultima_atividade` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `Nome`, `Telefone`, `Email`, `Password`, `tipo_cliente`, `denominacao`, `admin`, `desativar`, `Data`, `ultima_atividade`) VALUES
(64, 'João Castro1', 98553455, 'castro@gmail.com', '5a5f1e7ce7e139b1894a20e852920188', 'particular', '', 0, 0, '2020-06-24', '2020-11-15 14:05:16'),
(65, 'Daniel Almeida', 914563827, 'almeida@gmail.com', 'b400de1f64beb532d80982347ebb5989', 'empresa', 'GHetto', 0, 0, '2020-06-24', '2020-11-19 22:54:57'),
(68, 'Pedro Pereira', 98553455, 'pp@gmail.com', '1191ea6cf52864ab243eda0e23b3fd42', 'empresa', 'wee', 0, 0, '2020-07-02', '2020-07-23 18:33:56'),
(70, 'Elsa Coelho', 919100760, 'elsa@gmail.com', '04a2db8af1724c5f9e669f06572872e2', 'empresa', 'Dustrinox', 0, 0, '2020-07-14', '2020-07-23 18:34:41'),
(72, 'Daniel', 2147483647, 'danielalmeida.da3@gmail.com', '334a0841e10ec8db5d34a724f97994f4', 'particular', '', 0, 0, '2020-07-24', '2020-07-24 16:25:01'),
(76, 'Rui', 930605209, 'trash@ruiteixeira.com', '11673d715911784420e8b983802677de', 'particular', '', 0, 0, '2022-12-16', '2022-12-16 13:05:40'),
(77, 'Antonio', 930605209, 'antonio@gmail.com', 'ece36e266507f4c39e33fda2b232c784', 'particular', '', 1, 0, '2022-12-19', '2022-12-19 18:21:51'),
(78, 'Admin', 966989227, 'admin@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'particular', '', 0, 0, '2023-01-09', '2023-02-07 14:54:11'),
(79, 'Daniel Coelho', 966989227, 'ddccddcc2009ddccddcc@gmail.com', 'b76eb99fb0c240d068fe1d4bc0d6347b', 'empresa', 'keygun', 0, 0, '2023-01-09', '2023-01-13 17:22:14'),
(80, 'miguel rúbio', 123456789, 'miguelrubio1421@gmail.com', 'ae28016394abfa950cfcf78fbf091032', 'particular', '', 0, 0, '2023-01-10', '2023-01-10 15:48:32'),
(81, 'tom', 918786545, 'correiatomas88@gmail.com', 'cc3159e32a720fa53cc5420986d69872', 'particular', '', 0, 0, '2023-01-11', '2023-01-11 17:20:59'),
(82, 'antrob', 961254874, 'antrob@gmail.com', '5f8b62a2dced0cd28946a9c891ff3e5e', 'particular', '', 0, 0, '2023-01-13', '2023-01-13 17:30:10');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentários`
--
ALTER TABLE `comentários`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentários`
--
ALTER TABLE `comentários`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentários`
--
ALTER TABLE `comentários`
  ADD CONSTRAINT `comentários_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
