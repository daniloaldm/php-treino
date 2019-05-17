-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2019 às 01:55
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phptreino`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prazo` date NOT NULL,
  `prioridade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situacao` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `nome`, `descricao`, `prazo`, `prioridade`, `situacao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Sujar', 'Sujar a casa!', '2019-05-16', 'Alta', 'Concluída', '2019-05-16 03:31:51', '2019-05-16 05:05:19', NULL),
(8, 'Limpar', 'Limpar cômodos da casa!', '2019-05-17', 'Média', 'Em processo', '2019-05-16 22:05:22', '2019-05-16 22:05:22', NULL),
(9, 'Nova Tarefa', 'Inserindo tarefa!', '2019-05-17', 'Baixa', 'Em análise', '2019-05-18 02:52:58', '2019-05-18 02:52:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
