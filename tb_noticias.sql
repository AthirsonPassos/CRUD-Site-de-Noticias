-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jan-2021 às 23:25
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_noticias`
--

CREATE TABLE `tb_noticias` (
  `id_noticias` int(11) NOT NULL,
  `nm_titulo` varchar(255) NOT NULL,
  `nm_slug` varchar(255) NOT NULL,
  `ds_noticia` varchar(300) NOT NULL,
  `nm_palavrasChave` varchar(255) NOT NULL,
  `ds_conteudo` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_noticias`
--

INSERT INTO `tb_noticias` (`id_noticias`, `nm_titulo`, `nm_slug`, `ds_noticia`, `nm_palavrasChave`, `ds_conteudo`) VALUES
(9, 'quase', 'la', 'vamos ', 'com ', 'fe'),
(10, 'quase', 'la', 'vamos ', 'com ', 'fe'),
(11, '1', '2', '3', '4', '5'),
(12, 'Hoje', '?', 'dia ', 'de ', 'celebracao');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_noticias`
--
ALTER TABLE `tb_noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_noticias`
--
ALTER TABLE `tb_noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
