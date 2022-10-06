-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Set-2022 às 05:05
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `entregas_top`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `cliente_nome` varchar(50) NOT NULL,
  `cliente_endereco` varchar(180) NOT NULL,
  `cliente_email` varchar(25) NOT NULL,
  `cliente_telefone` varchar(18) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cliente_nome`, `cliente_endereco`, `cliente_email`, `cliente_telefone`, `senha`) VALUES
(1, 'Pizzaria Barba Negra', 'Rua P?rola Negra - 777', '', '0', ''),
(2, 'Farmácia Taokey', 'Rua do Ni?bio - 17', '', '0', ''),
(3, 'Pizzaria do MST', 'Rua Bolsa Fam?lia - 1313', '', '0', ''),
(4, 'Padaria da Anira', 'Rua das Poderosas - 515', '', '0', ''),
(38, 'Cliente x', 'rua xyz', 'yuri@gmail.com', '5122222222222', '1234'),
(39, 'teste', 'andress', 'yuri@gmail.com', '(08) 0000-00000', '123'),
(40, 'Lamen do Naruto', 'Rua da Folha 999', 'narutousumaki@gmail.com', '5199999999', '123'),
(41, 'Power Ranger Vermelho', 'Japão', 'pwred@pw.com', '1235464', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregador`
--

CREATE TABLE `entregador` (
  `id_entregador` int(11) NOT NULL,
  `entregador_nome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `entregador_email` varchar(50) NOT NULL,
  `entregador_telefone` varchar(50) NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entregador`
--

INSERT INTO `entregador` (`id_entregador`, `entregador_nome`, `entregador_email`, `entregador_telefone`, `senha`) VALUES
(1, 'Luiz Inácio', '', '', ''),
(2, 'Jair Biroliro', '', '', ''),
(3, 'Anira', '', '', ''),
(4, 'Jack Sparow', '', '', ''),
(7, 'teste', 'ymachado1995@gmail.com', '(62) 6666-66666', '123'),
(8, 'teste', 'yuri@gmail.com', '(99) 9999-99999', 'erewr'),
(9, 'Atumalaca', 'atumalaca@ratinho.com', '6969696999', '123'),
(10, 'Novo entregador', 'umnovoentregador@email.com', '123456789', '123'),
(11, 'Chaves', 'chaves@8.com', '1651465651', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregas`
--

CREATE TABLE `entregas` (
  `id_entrega` int(11) NOT NULL,
  `entrega_cliente` int(11) NOT NULL,
  `entrega_entregador` int(11) NOT NULL,
  `entrega_origem` varchar(180) CHARACTER SET latin1 NOT NULL,
  `entrega_destino` varchar(180) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL,
  `entrega_criada_as` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entregas`
--

INSERT INTO `entregas` (`id_entrega`, `entrega_cliente`, `entrega_entregador`, `entrega_origem`, `entrega_destino`, `status`, `entrega_criada_as`) VALUES
(1, 1, 4, 'Rua Pérola Negra - 486', 'Rua Jonny Deep - 789', 1, '2022-09-25 00:52:01'),
(2, 2, 3, 'Rua Dilma - 154', 'Rua Bolsa Familia - 1234', 3, '2022-09-25 00:52:01'),
(3, 3, 4, 'Rua Pérola Negra - 486', 'Rua Jonny Deep - 789', 2, '2022-09-25 00:52:01'),
(4, 3, 2, 'Rua Dilma - 154', 'Rua Bolsa Familia - 1234', 2, '2022-09-25 00:52:01'),
(5, 1, 1, 'Rua Pérola Negra - 486', 'Rua Jonny Deep - 789', 1, '2022-09-25 00:52:01'),
(6, 2, 1, 'Rua Das Poderosas - 457', 'Rua Envolver - 7349', 3, '2022-09-25 00:52:01'),
(7, 3, 2, 'Rua Pérola Negra - 486', 'Rua 7 mares - 5256', 2, '2022-09-25 00:52:01'),
(8, 4, 3, 'Rua Das Poderosas - 457', 'Rua Envolver - 7349', 2, '2022-09-25 00:52:01'),
(9, 1, 2, 'Rua 7 mares - 5256', 'Rua Pérola Negra - 486', 1, '2022-09-25 00:52:01'),
(10, 2, 1, 'Rua Envolver - 7349', 'Rua Das Poderosas - 457', 1, '2022-09-25 00:52:01'),
(23, 2, 2, 'teste', 'teste', 0, '2022-09-25 00:52:01'),
(24, 38, 7, '', '', 0, '2022-09-25 00:52:01'),
(25, 3, 2, 'teste', 'teste', 0, '2022-09-25 00:52:01'),
(26, 2, 2, '25 de março n123', '7 de setembro n32', 0, '2022-09-25 00:52:01'),
(27, 2, 2, 'Rua da dona florinda', 'Rua do Ronaldinho Gaucho', 0, '2022-09-25 00:52:01'),
(34, 1, 1, '25 de março n123', 'Rua do Ronaldinho Gaucho', 0, '2022-09-25 00:52:01'),
(35, 3, 4, '25 de março n123', '7 de setembro n32', 0, '2022-09-25 00:52:01'),
(36, 1, 2, 'Rua da dona florinda', 'Rua do Ronaldinho Gaucho', 0, '2022-09-25 00:52:01'),
(37, 1, 1, '25 de março n123', '7 de setembro n32', 0, '2022-09-25 00:52:01'),
(38, 2, 3, '25 de março n123', '7 de setembro n32', 0, '2022-09-25 00:52:19');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `entregador`
--
ALTER TABLE `entregador`
  ADD PRIMARY KEY (`id_entregador`);

--
-- Índices para tabela `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`id_entrega`),
  ADD KEY `entrega_cliente` (`entrega_cliente`),
  ADD KEY `entrega_entregador` (`entrega_entregador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `entregador`
--
ALTER TABLE `entregador`
  MODIFY `id_entregador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `entregas`
--
ALTER TABLE `entregas`
  MODIFY `id_entrega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
