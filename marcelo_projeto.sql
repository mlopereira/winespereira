-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 23-Fev-2018 às 00:54
-- Versão do servidor: 5.5.52-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marcelo_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(4) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `foto_perfil` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `email`, `senha`, `admin`, `foto_perfil`) VALUES
(1, 'Eduardo Pereira', 'Av 15 de Setembro', '1977', 'Nova Jaboticabal', 'Jaboticabal', 'SP', 'eduardo@email.com.br', '123456', 1, ''),
(2, 'Paulo Dutra', 'Av dos JequitibÃ¡s', '250', 'Nova AlianÃ§a', 'PenÃ¡polis', 'SP', 'paulodutra@email.com.br', '123456', 0, ''),
(3, 'Fernanda Almeida', 'Rua das toras', '155', 'Nova Madeira', 'SÃ£o Caetano do Sul', 'SP', 'feral@email.com.br', '12345', 0, ''),
(4, 'Teste', 'Teste1', '123', 'Teste2', 'Teste3', 'SP', 'testando123@teste.com.br', 'Teste123', 0, ''),
(5, '', '', '', '', '', '', '', '', 0, ''),
(6, 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 0, ''),
(7, '', '', '', '', '', '', '', '', 0, ''),
(8, 'Marcelo Pereira', 'Av. MAestro MIchelino Maizano', '275', 'Nova Jaboticabal', 'Jaboticabal', 'SP', 'mlo.pereira@uol.com.br', '15mn09cp77', 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(4) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `origem` varchar(50) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `estoque` int(4) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `especificacao` varchar(50) NOT NULL,
  `foto_principal` varchar(50) NOT NULL,
  `foto2` varchar(50) DEFAULT NULL,
  `foto3` varchar(50) DEFAULT NULL,
  `ranking` int(1) NOT NULL,
  `quantidade` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `tipo`, `origem`, `preco`, `estoque`, `descricao`, `especificacao`, `foto_principal`, `foto2`, `foto3`, `ranking`, `quantidade`) VALUES
(5, 'Vinho Fortant', 'Tinto', 'África do Sul', 85000.00, 10, 'Bom com Carnes vermelhas.', 'Vinho Tinto', '67847d2c28c226b9d2216d9016895097.jpg', 'f25727afe04e2c6d8ea3db173b63b321.jpg', 'e8466993a6f254a7091abe180743673e.jpg', 0, 0),
(6, 'Sauvignon', 'Branco', 'Chile', 650.00, 20, 'Bom com Carnes Brancas, tipo peixes.', 'Vinho Branco', 'f054f5c32c8065b3bb1caa3bcc8b51cf.jpg', '609530f4311d9d61496361843391d1bc.jpg', '8b08aea143e41779d09315bd47263958.jpg', 0, 0),
(7, 'Solar das Bouças', 'Branco', 'Itália', 650.00, 50, 'Bom com Carnes Brancas, tipo peixes.', 'Vinho Branco', 'fcc370d44661d2afe0d0ce36ce91ef33.jpg', '499f7417b062add2172e5c6cd2cf20dd.jpg', 'e6b8e49c7d493291625d0c5edb1e5cef.jpg', 0, 0),
(8, 'Veuve D´argent', 'Branco', 'França', 890.00, 5, 'Bom com Carnes Brancas, tipo aves.', 'Vinho Branco', 'ab0d55625981924035e2bd00bac94555.jpg', '29afb440faec26b8526001022092d252.jpg', '1e10c95e9b7a116ca19141e16c3c98c1.jpg', 0, 0),
(9, 'Salton', 'Tinto', 'Nova Zelândia', 450.00, 8, 'Bom com carnes vermelhas e com caldos fortes.', 'Vinho Tinto', '3463534b5a03722f3a4367b70ae8d028.jpg', 'e0794a0bb1e49eb6747d56e728d0943b.jpg', '92378d1730ea234c596c48fd1a470cfa.jpg', 0, 0),
(10, 'Chandon', 'Espumante', 'Espanha', 320.00, 150, 'Bom com canapés, petiscos.', 'Champanhe', 'f25ff3070d436c6b2454b62c5ce8a127.jpg', '0dbed1be85b6a5225be7564cd9f2d2c8.jpg', '362a33561d40f526f7714cc5823674ac.jpg', 0, 0),
(11, 'Miolo', 'Branco', 'Estados Unidos', 250.00, 80, 'Bom com crustáceos, frutos do mar.', 'Vinho Branco.', 'c669a900979068a0003a54d4a2aa5235.jpg', 'ceb443b2c695a5226ea07e56b76fc68c.jpg', '8d250f6b4e8bef7f5294df7a6ca0c6e3.jpg', 0, 0),
(12, 'Manz', 'Rosê', 'França', 150.00, 25, 'Bom com caldos simples.', 'Vinho Rosê.', '56ee94f4455113ff7fdb5a5c3cfec369.jpg', '19c8f6ae8eec46b490d4d627126556c1.jpg', '8d0f9e1c2c9be00403711e10e7af84b1.jpg', 0, 0),
(13, 'Lunae', 'Rosê', 'Portugal', 120.00, 15, 'Bom com caldos simples.', 'Vinho Rosê.', '934fa926051a74c1026ee272fa5867fe.jpg', '454aa2f23ebb382d5edddfef8631928b.jpg', 'bfc144a24a0b0a715a1cdb71820f7293.jpg', 0, 0),
(14, 'Costa do Sal', 'Branco', 'Portugal', 210.00, 15, 'Bom com frutas.', 'Vinho Branco.', 'dc44ba93a30d122188f8003270c0b4b8.jpg', '0df9941a7a0bf00d71e63020e52e62f7.jpg', 'bffae1efe7b65228046813b1242bac32.jpg', 0, 0),
(17, 'Teste', 'Licoroso', 'Argentina', 12345.00, 12, 'Teste', 'Teste', '7bac8261dadff7ea654863849287fd2e.jpg', '4ffa7c1b9d17d9ca9a3fb32ed29b6ce7.jpg', '71438dd5801b73be8c9796464f7ecba6.jpg', 0, 0),
(18, 'Teste', 'Licoroso', 'Marrocos', 12345.00, 12, 'Teste', 'Teste', '8791469d9151e04fff23fd8d405c4ff2.jpg', '60dbea376c9897c83b515140ce34cb0b.jpg', '1c644dba4f91e52ea181514d18b6c473.jpg', 0, 0),
(20, 'Merlot', 'Tinto', 'Grécia', 52.00, 20, 'Vinho tinto', '...', '3b1fcea289680a09c87a2fea3a0abadb.jpg', '7117448421d6468bee9c2aa99b8d6aaa.jpg', '2b4ec32eab9b84244f73345910123af7.jpg', 0, 0),
(21, 'Merlot', 'Tinto', 'Alemanha', 52.00, 20, 'Vinho tinto', 'Carne vermelha', '8d65a06531a1f0bdda38c1de8c0dd64c.jpg', '65bf15e599694b96544383e25432da94.jpg', '0b6d40e5ab3a2d1951b1d55ad519af0b.jpg', 0, 0),
(23, 'Merlot', 'Tinto', 'Brasil', 250.00, 85, 'Vinho Tinto', 'Carne Vermelha', '6a16409d6e4410870be84b41ee2e2652.jpg', 'f2b4be1207e8c8739c9e0f1b784a5bd6.jpg', 'adf852af6f4ec0374565b5c971043762.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao`
--

CREATE TABLE IF NOT EXISTS `promocao` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `desconto` decimal(10,2) NOT NULL,
  `link` varchar(50) NOT NULL,
  `banner` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `promocao`
--

INSERT INTO `promocao` (`id`, `tipo`, `desconto`, `link`, `banner`) VALUES
(1, 'Hardware', 20.00, 'Teste', '17613af62adeb2076b383ffe03531dc1.jpg'),
(2, 'Computadores', 15.00, 'promocao.php', '1466efabf5a8da95975569cb2768fdc7.jpg'),
(3, 'Computadores', 85.00, 'promocao.php', '45c80decb008c8cf45953b28d0eb7930.jpg'),
(4, 'Periferico', 95.00, 'promocao.php', 'fa36af2b2598a189bfdfb7340208df67.jpg'),
(5, 'Periferico', 41.00, 'promocao.php', 'f0c667d1462f3b71a8697c06cfab3275.jpg'),
(6, 'Frisante', 150.00, '', '7cc4bebcd60153f34a9fbea2c7725774.jpg'),
(7, 'Rosê', 85.00, 'promocao.php', '626cd57e48070f16045ef5de1af8ade1.jpg'),
(8, 'Branco', 50.00, 'teste.php', '16195199529c2ab585796f3218d81d05.jpg'),
(9, 'Tinto', 850.00, 'teste.php', 'dbc77d05d4a322481d4c9a62edf16f43.jpg'),
(10, 'Licoroso', 65.00, 'promocao.php', 'c1b1a1679934d94c89f5fbd2043ac0b8.jpg'),
(11, 'Tinto', 96.00, 'promocao.php', '2365265a47ceadb6eee951cfd231e660.jpg'),
(12, 'Espumante', 985.00, 'promocao.php', '100bb0b57a6105730e1e031a78878da8.jpg'),
(13, 'Licoroso', 950.00, 'promocao.php', '526c5ea4816baa5bbddc9de22f8de37f.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(4) NOT NULL,
  `ticket` varchar(20) NOT NULL,
  `id_cliente` int(4) NOT NULL,
  `data` date NOT NULL,
  `id_prod` int(4) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `valor` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `ticket`, `id_cliente`, `data`, `id_prod`, `quantidade`, `valor`) VALUES
(26, '5a7cca5e9c459', 3, '2018-02-08', 4, 1, 8500.00),
(27, '5a7cca5e9c459', 3, '2018-02-08', 2, 1, 650.00),
(28, '5a7cca5e9c459', 3, '2018-02-08', 1, 1, 360.00),
(29, '5a7cce946c3f9', 3, '2018-02-08', 4, 1, 8500.00),
(30, '5a7cce946c3f9', 3, '2018-02-08', 2, 1, 650.00),
(31, '5a7cce946c3f9', 3, '2018-02-08', 1, 1, 360.00),
(32, '5a7cd45297335', 8, '2018-02-08', 4, 1, 8500.00),
(33, '5a7ce02711d3c', 8, '2018-02-08', 4, 1, 8500.00),
(34, '5a7ce2a60191d', 8, '2018-02-08', 4, 1, 8500.00),
(35, '5a860db2f38d2', 3, '2018-02-15', 14, 1, 210.00),
(36, '5a860db2f38d2', 3, '2018-02-15', 12, 1, 150.00),
(37, '5a860db2f38d2', 3, '2018-02-15', 10, 1, 320.00),
(38, '5a861071ad3f5', 3, '2018-02-15', 13, 1, 120.00),
(39, '5a861071ad3f5', 3, '2018-02-15', 10, 1, 320.00),
(40, '5a8610addb1c0', 3, '2018-02-15', 13, 1, 120.00),
(41, '5a8610addb1c0', 3, '2018-02-15', 10, 1, 320.00),
(42, '5a86114127436', 3, '2018-02-15', 13, 1, 120.00),
(43, '5a86114127436', 3, '2018-02-15', 10, 1, 320.00),
(44, '5a86180768b0b', 3, '2018-02-15', 11, 1, 250.00),
(45, '5a86180768b0b', 3, '2018-02-15', 8, 1, 890.00),
(46, '5a86180768b0b', 3, '2018-02-15', 6, 1, 650.00),
(47, '5a86180768b0b', 3, '2018-02-15', 13, 1, 120.00),
(48, '5a8619dfdc5ae', 3, '2018-02-15', 14, 1, 210.00),
(49, '5a8619dfdc5ae', 3, '2018-02-15', 12, 1, 150.00),
(50, '5a8619dfdc5ae', 3, '2018-02-15', 9, 1, 450.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocao`
--
ALTER TABLE `promocao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `promocao`
--
ALTER TABLE `promocao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
