-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/05/2025 às 01:33
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_escolar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `matricula`, `email`, `telefone`) VALUES
(2, 'Marcos Joel', '202510001', 'marcosjoel@gmail.com', '85987654321'),
(3, 'Moises', '202510002', 'moises@gmail.com', '85987654321'),
(4, 'Ana Catarina Lima Cordeiro', '20250001', 'limacordeiroanacatarina@gmail.com', '(85)996232407'),
(5, 'LARISSA BARBOSA MOREIRA', '20250000011', 'Larissa.brmoreira@gmail.com', '999162985'),
(7, 'Lyncoln', '20250012', 'lyncoln.ferreira2008@gmail.com', '85996470029'),
(8, 'Moisés Emanuel', '2025.00000.17', 'moisesemanuel1415@gmail.com', '85992970934'),
(11, 'Tayla Ravenna', '20251', 'taylaravennaaraujo@gmail.com', '085992232955'),
(17, 'Evelyn Waldireny Soares De Barros', '03', 'evelynsoares6890@gmail.com', '85989618152'),
(20, 'Pedro Alvares Cabral', '20250014', 'giohs444445@gmail.com', '85996470027');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricula` (`matricula`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
