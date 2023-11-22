-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/11/2023 às 17:37
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alugue`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_adicionar_carro`
--

CREATE TABLE `tb_adicionar_carro` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `marca` varchar(120) NOT NULL,
  `modelo` varchar(120) NOT NULL,
  `ano` int(11) NOT NULL,
  `motorizacao` varchar(10) NOT NULL,
  `combustivel` varchar(30) NOT NULL,
  `direcao` varchar(50) NOT NULL,
  `cambio` varchar(20) NOT NULL,
  `portas` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ar` varchar(50) NOT NULL,
  `abs` varchar(4) NOT NULL,
  `alugado` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_adicionar_carro`
--

INSERT INTO `tb_adicionar_carro` (`id`, `nome`, `marca`, `modelo`, `ano`, `motorizacao`, `combustivel`, `direcao`, `cambio`, `portas`, `foto`, `ar`, `abs`, `alugado`, `preco`) VALUES
(1, 'HB 20 ', 'hyundai', 'Comfort', 2020, '1.0', 'Gasolina/Alcool', 'hidráulica', 'manual de 5 marchas', 4, 'hb20_2020.jpeg', '1', '1', 1, 100.98),
(5, 'Onix', 'chevrolet', 'Comfort', 2019, '1.0', 'Álcool/Gasolina', 'Elétrica', 'manual de 6 marchas', 4, 'onix2019.jpg', '1', '1', 0, 120.99),
(6, 'Ford Fusion', 'Ford', 'Comfort', 2017, '2.0', 'Gasolina', 'Elétrica', 'automático de 6 marc', 4, 'fusionflex_capa_620x350.jpg', '1', '1', 0, 140.99),
(7, 'CLA 200', 'Mercedes', 'Esport', 2019, '1.6 turbo', 'Álcool', 'Elétrica', 'borboleta com 7 marc', 4, 'cla200part2.jpg', '1', '1', 1, 230.99),
(8, 'M3', 'BMW', 'Sedan', 2019, '3.0 ', 'Gasolina', 'Elétrica', 'borboleta com  7 mar', 4, 'M3_2019.jpg', '1', '1', 0, 245.45),
(9, 'TT rs', 'Audi', 'esport', 2022, '2.5 turbo', 'Gasolina', 'Elétrica', 'borboleta com  7 mar', 2, 'audi-tt-rs-2022-7.jpg', '1', '1', 1, 270.50);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `sobrenome` varchar(120) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cep` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`codigo`, `nome`, `sobrenome`, `cpf`, `nascimento`, `rua`, `bairro`, `cep`) VALUES
(25, 'Marco ', 'Barros', '000-000-000-00', '08/09/2003', 'teste rua alterar', 'teste bairro altera', '18333-333');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_veiculos`
--

CREATE TABLE `tb_veiculos` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `marca` varchar(120) NOT NULL,
  `modelo` varchar(120) NOT NULL,
  `ano` varchar(10) NOT NULL,
  `motorizacao` varchar(100) NOT NULL,
  `combustivel` varchar(100) NOT NULL,
  `direcao` varchar(100) NOT NULL,
  `cambio` varchar(100) NOT NULL,
  `portas` varchar(15) NOT NULL,
  `codigo` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_veiculos`
--

INSERT INTO `tb_veiculos` (`id`, `nome`, `marca`, `modelo`, `ano`, `motorizacao`, `combustivel`, `direcao`, `cambio`, `portas`, `codigo`, `status`) VALUES
(49, 'Teste nome alterar', 'teste marca alterar', 'Teste modelo alterar', '2020', '1.5 turbo', 'Alcool', 'Hidraulica', 'manual', '4 portas', 2, 'disp');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data_alteracao` timestamp NOT NULL DEFAULT current_timestamp(),
  `situacao` enum('Habilitado','Desabilitado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `nome`, `email`, `login`, `senha`, `tipo`, `data_registro`, `data_alteracao`, `situacao`) VALUES
(3, 'teste nome', 'teste@gmail.com', 'teste', '123', '', '2023-11-09 17:07:11', '2023-11-09 15:13:11', 'Habilitado'),
(4, 'Marco A', 'mantabreu@gmail.com', 'marco', '123', '', '2023-11-09 17:57:03', '2023-11-09 17:57:03', 'Habilitado'),
(5, 'admin', 'admin@gmail.com', 'admin', '123', 'admin', '2023-11-09 22:38:07', '2023-11-09 18:22:03', ''),
(6, '', '', '', '', '', '2023-11-20 15:28:59', '2023-11-20 15:28:59', 'Habilitado'),
(7, '', '', '', '', '', '2023-11-20 17:26:31', '2023-11-20 17:26:31', 'Habilitado'),
(8, '', '', '', '', '', '2023-11-21 21:58:34', '2023-11-21 21:58:34', 'Habilitado'),
(9, '', '', '', '', '', '2023-11-21 22:10:22', '2023-11-21 22:10:22', 'Habilitado');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_adicionar_carro`
--
ALTER TABLE `tb_adicionar_carro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_adicionar_carro`
--
ALTER TABLE `tb_adicionar_carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
