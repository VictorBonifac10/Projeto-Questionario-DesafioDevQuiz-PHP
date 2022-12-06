-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2022 às 18:21
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerador_prova`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id` int(11) NOT NULL,
  `correta` tinyint(4) NOT NULL,
  `alternativa` text NOT NULL,
  `pergunta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id`, `correta`, `alternativa`, `pergunta_id`) VALUES
(142, 0, 'Tecnologia exclusiva de indústrias para conexão de equipamentos ', 263),
(143, 1, ' Objetos cotidianos conectados à internet e que conversam entre si', 263),
(144, 0, 'Venda de produtos eletrônicos na internet', 263),
(145, 0, '', 263),
(146, 0, '', 263),
(147, 1, '8 bits', 261),
(148, 0, '1 bit', 261),
(149, 0, '12 bits', 261),
(150, 0, '64 bits', 261),
(151, 0, '128 bits', 261),
(152, 1, 'World Wide Web', 259),
(153, 0, 'Web Word Wide', 259),
(154, 0, 'Wide Web World', 259),
(155, 0, '', 259),
(156, 0, '', 259),
(157, 0, '1380 x 620', 260),
(158, 1, '1920 x 1080', 260),
(159, 0, '1280 x 720  ', 260),
(160, 0, '2560 x 1440', 260),
(161, 0, '', 260),
(162, 0, 'Processador de última geração para computadores', 264),
(163, 0, 'Sistema programado por máquinas que toma decisões pelos humanos  ', 264),
(164, 1, 'Emprega técnicas de levantamento de dados e formas de processá-los', 264),
(165, 0, '', 264),
(166, 0, '', 264);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `pergunta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`) VALUES
(259, 'O que significa a sigla “www” na internet?'),
(260, 'Qual a resolução de uma imagem Full HD?'),
(261, 'Quantos bits cabem em um byte?'),
(263, 'O que significa o termo Internet das Coisas (IoT)?'),
(264, 'Qual a melhor definição para Algoritmo?');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pergunta_id` (`pergunta_id`);

--
-- Índices para tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD CONSTRAINT `alternativas_ibfk_1` FOREIGN KEY (`pergunta_id`) REFERENCES `perguntas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
