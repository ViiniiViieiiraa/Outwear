SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE outwear;

--
-- Estrutura da tabela `profile_reg`
--
USE outwear;
CREATE TABLE `profile_reg` (
  `idProfile` int(11) NOT NULL,
  `nameProfile` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `profile_reg`
--

INSERT INTO `profile_reg` (`idProfile`, `nameProfile`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_roupas`
--
USE outwear;
CREATE TABLE `categoria_roupas` (
  `idCategoria` int(11) NOT NULL,
  `nameCategoria` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria_roupas`
--

INSERT INTO `categoria_roupas` (`idCategoria`, `nameCategoria`) VALUES
(1, 'Camiseta'),
(2, 'Moletom'),
(3, 'Calca'),
(4, 'Social'),
(5, 'MaisVendidos'),
(6, 'Shorts');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg`
--

USE outwear;
CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `aniversario` varchar(50) NOT NULL,
  `fk_idProfile` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserindo dados da tabela `reg`
--

INSERT INTO `reg` (`id`,`name`, `username`, `password`, `city`, `image`, `gender`, `cpf`, `aniversario`, `fk_idProfile`) VALUES
(1, 'Vinicius Vieira', 'vini', '123', 'Hortolandia', 'BancoDeImagens/Usuarios/viniciusperfil.png', 'Masculino', '123.456.789-12', '09/12/2004', 1);

INSERT INTO `reg` (`id`,`name`, `username`, `password`, `city`, `image`, `gender`, `cpf`, `aniversario`, `fk_idProfile`) VALUES
(2, 'Lucas Gabriel', 'lucas', '123', 'Hortolandia', 'BancoDeImagens/Usuarios/lucasperfil.png', 'Masculino','123.456.789-12', '09/12/2004', 1);

INSERT INTO `reg` (`id`,`name`, `username`, `password`, `city`, `image`, `gender`, `cpf`, `aniversario`, `fk_idProfile`) VALUES
(3, 'Kaio Guerra', 'kaio', '123', 'Sumare', 'BancoDeImagens/Usuarios/kaioperfil.png', 'Masculino','123.456.789-12', '09/12/2004', 1);

INSERT INTO `reg` (`id`,`name`, `username`, `password`, `city`, `image`, `gender`, `cpf`, `aniversario`, `fk_idProfile`) VALUES
(4, 'Alciomar Holanda', 'alciomar', '123', 'Hortolandia', 'BancoDeImagens/Usuarios/alciomarperfil.png', 'Masculino','123.456.789-12', '09/12/2004', 2);

INSERT INTO `reg` (`id`,`name`, `username`, `password`, `city`, `image`, `gender`, `cpf`, `aniversario`, `fk_idProfile`) VALUES
(5, 'Fabiano Souza', 'fabiano', '123', 'Hortolandia', 'BancoDeImagens/Usuarios/fabianoperfil.png', 'Masculino','123.456.789-12', '09/12/2004', 2);

INSERT INTO `reg` (`id`,`name`, `username`, `password`, `city`, `image`, `gender`, `cpf`, `aniversario`, `fk_idProfile`) VALUES
(6, 'Wesley', 'wesley', '123', 'Hortolandia', 'BancoDeImagens/Usuarios/wesleyperfil.png', 'Masculino','123.456.789-12', '09/12/2004', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

USE outwear;
CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`,`nome`, `pais`, `estado`, `endereco`, `cep`, `telefone`, `email`, `image`) VALUES
(1, 'Vinicius Vieira Guima', 'Brasil', 'Sao Paulo', 'Rua Fake', '783465374', '123312', 'email@teste.com','');

--
-- Estrutura da tabela `prod`
--

USE outwear;
CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `NomeProduto` varchar(50) NOT NULL,
  `PrecoProduto` varchar(50) NOT NULL,
  `CorProduto` varchar(50) NOT NULL,
  `TamanhoProduto` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `fk_idCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- QUANTIDADE

--
-- Extraindo dados da tabela `prod`
--

/*
INSERT INTO `prod` (`id`,`NomeProduto`, `PrecoProduto`, `CorProduto`, `TamanhoProduto`, `image`) VALUES
(1, 'Air Jordan 1', 'R$1000,00', 'Preto', '40', 'image/images.png');

INSERT INTO `prod` (`id`,`NomeProduto`, `PrecoProduto`, `CorProduto`, `TamanhoProduto`, `image`) VALUES
(2, 'Air Jordan 4', 'R$2000,00', 'Branco', '41', 'image/images.png');

INSERT INTO `prod` (`id`,`NomeProduto`, `PrecoProduto`, `CorProduto`, `TamanhoProduto`, `image`) VALUES
(3, 'New Balance 550', 'R$3000,00', 'Cinza', '42', 'image/images.png');

INSERT INTO `prod` (`id`,`NomeProduto`, `PrecoProduto`, `CorProduto`, `TamanhoProduto`, `image`) VALUES
(4, 'Nike Air Max', 'R$4000,00', 'Vermelho', '43', 'image/images.png');

INSERT INTO `prod` (`id`,`NomeProduto`, `PrecoProduto`, `CorProduto`, `TamanhoProduto`, `image`) VALUES
(5, 'All star', 'R$5000,00', 'Bege', '44', 'image/images.png');
*/

-- purpose/BancoDeImagens/Roupas/CamisetaOficial/1.png
-- purpose/BancoDeImagens/Roupas/CalcaOficial/1.png

INSERT INTO `prod` (`id`,`NomeProduto`, `PrecoProduto`, `CorProduto`, `TamanhoProduto`, `image`, `fk_idCategoria`) VALUES
(1, 'Camiseta Up', 'R$150,00', 'Preto e Branca', 'M', 'BancoDeImagens/Roupas/CamisetaOficial/1.png', 1),
(2, 'Camiseta NB', 'R$150,00', 'Preto e Vermelha', 'M', 'BancoDeImagens/Roupas/CamisetaOficial/2.png', 1),
(3, 'Camiseta Freddys', 'R$150,00', 'Branca e Vermelha', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/3.png', 1),
(4, 'Camiseta Japonesa', 'R$150,00', 'Preto e Laranja', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/4.png', 1),
(5, 'Camiseta Coelho', 'R$150,00', 'Preto e Cinza', 'M', 'BancoDeImagens/Roupas/CamisetaOficial/5.png', 1),
(6, 'Camiseta Saturday', 'R$150,00', 'Preto e Branca', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/6.png', 1),
(7, 'Camiseta Itachi', 'R$200,00', 'Preto', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/7.png', 1),
(8, 'Camiseta Corrida', 'R$100,00', 'Preto,Branca e Vermelha', 'P', 'BancoDeImagens/Roupas/CamisetaOficial/8.png', 1),
(9, 'Camiseta Rap', 'R$200,00', 'Preto', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/9.png', 1),
(10, 'Camiseta Vanquish', 'R$100,00', 'Branca', 'P', 'BancoDeImagens/Roupas/CamisetaOficial/10.png', 1),
(11, 'Camiseta Good Water', 'R$100,00', 'Preto', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/11.png', 1),
(12, 'Camiseta Sonhos', 'R$200,00', 'Preto e Vermelha', 'P', 'BancoDeImagens/Roupas/CamisetaOficial/12.png', 1),
(13, 'Camiseta Space Book', 'R$100,00', 'Branca', 'M', 'BancoDeImagens/Roupas/CamisetaOficial/13.png', 1),
(14, 'Camiseta Drive', 'R$150,00', 'Preto e Rosa', 'P', 'BancoDeImagens/Roupas/CamisetaOficial/14.png', 1),
(15, 'Camiseta Kitty', 'R$150,00', 'Preto e Rosa', 'P', 'BancoDeImagens/Roupas/CamisetaOficial/15.png', 1),
(16, 'Camiseta Dragon', 'R$200,00', 'Preto', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/16.png', 1),
(17, 'Camiseta Butterfly', 'R$200,00', 'Roxo e Rosa', 'M', 'BancoDeImagens/Roupas/CamisetaOficial/17.png', 1),
(18, 'Camiseta Poker', 'R$100,00', 'Preto', 'M', 'BancoDeImagens/Roupas/CamisetaOficial/18.png', 1),
(19, 'Camiseta Esqueleto', 'R$150,00', 'Preto e Verde', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/19.png', 1),
(20, 'Camiseta Cats', 'R$200,00', 'Azul', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/20.png', 1),
(21, 'Camiseta Princesa', 'R$100,00', 'Azul', 'P', 'BancoDeImagens/Roupas/CamisetaOficial/21.png', 1),
(22, 'Camiseta Vogue', 'R$200,00', 'Branca', 'G', 'BancoDeImagens/Roupas/CamisetaOficial/22.png', 1),

(23, 'Calça Cargo pesada', 'R$200,00', 'Preto', 'G', 'BancoDeImagens/Roupas/CalcaOficial/1.png', 3),
(24, 'Calça Cargo basica', 'R$150,00', 'Off-White', 'M', 'BancoDeImagens/Roupas/CalcaOficial/2.png', 3),
(25, 'Calça Cargo casual', 'R$150,00', 'Branca', 'G', 'BancoDeImagens/Roupas/CalcaOficial/3.png', 3),
(26, 'Calça Preta basica', 'R$100,00', 'Preto', 'P', 'BancoDeImagens/Roupas/CalcaOficial/4.png', 3),
(27, 'Calça Moderna cargo', 'R$150,00', 'Preto', 'M', 'BancoDeImagens/Roupas/CalcaOficial/5.png', 3),
(28, 'Calça Anos 2000', 'R$100,00', 'Beje', 'P', 'BancoDeImagens/Roupas/CalcaOficial/6.png', 3),
(29, 'Calça Estilo basico', 'R$100,00', 'Preto', 'P', 'BancoDeImagens/Roupas/CalcaOficial/7.png', 3),
(30, 'Calça Skinny bolsos', 'R$100,00', 'Verde', 'M', 'BancoDeImagens/Roupas/CalcaOficial/8.png', 3),
(31, 'Calça Street', 'R$200,00', 'Preto', 'G', 'BancoDeImagens/Roupas/CalcaOficial/9.png', 3),
(32, 'Calça Rapper', 'R$200,00', 'Vermelha', 'G', 'BancoDeImagens/Roupas/CalcaOficial/10.png', 3),
(33, 'Calça Tatica moderna', 'R$200,00', 'Preto e Branca', 'G', 'BancoDeImagens/Roupas/CalcaOficial/11.png', 3),
(34, 'Calça Sinny cargo', 'R$100,00', 'Preto', 'P', 'BancoDeImagens/Roupas/CalcaOficial/12.png', 3),
(35, 'Calça Jeans moderna', 'R$200,00', 'Azul clara', 'G', 'BancoDeImagens/Roupas/CalcaOficial/13.png', 3),
(36, 'Calça Cargo moderna', 'R$150,00', 'Branca', 'G', 'BancoDeImagens/Roupas/CalcaOficial/14.png', 3),
(37, 'Calça Moletom listra', 'R$150,00', 'Preto e Branca', 'P', 'BancoDeImagens/Roupas/CalcaOficial/15.png', 3),
(38, 'Calça Borboletas', 'R$200,00', 'Azul', 'G', 'BancoDeImagens/Roupas/CalcaOficial/16.png', 3),
(39, 'Calça Alta classe', 'R$200,00', 'Branca', 'M', 'BancoDeImagens/Roupas/CalcaOficial/17.png', 3),
(40, 'Calça Tinta', 'R$100,00', 'Roxa e Branca', 'P', 'BancoDeImagens/Roupas/CalcaOficial/18.png', 3),
(41, 'Calça Fly', 'R$150,00', 'Preto', 'G', 'BancoDeImagens/Roupas/CalcaOficial/19.png', 3),
(42, 'Calça Militar', 'R$100,00', 'Bege', 'M', 'BancoDeImagens/Roupas/CalcaOficial/20.png', 3),
(43, 'Calça Jens rasgado', 'R$200,00', 'Azul', 'G', 'BancoDeImagens/Roupas/CalcaOficial/21.png', 3),
(44, 'Calça Corrente', 'R$200,00', 'Preto', 'M', 'BancoDeImagens/Roupas/CalcaOficial/22.png', 3);

-- INSERT INTO `reg` (`name`, `username`, `password`, `city`, `image`, `gender`, `id`, `fk_idProfile`) VALUES
-- ('Bikash', 'bikash', 'bikash', 'knp', 'image/images.png', 'male', 2, NULL),
-- ('Alciomar Hollanda', 'alciomar@gmail.com', '123', 'knp', 'image/github-octocat.png', 'male', 3, 2);

--
-- Índices para tabela `profile_reg`
--
ALTER TABLE `profile_reg`
  ADD PRIMARY KEY (`idProfile`);

--
-- Índices para tabela `categoria_roupas`
--
ALTER TABLE `categoria_roupas`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idProfile` (`fk_idProfile`);

--
-- Índices para tabela `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `reg`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

--
-- AUTO_INCREMENT de tabela `profile_reg`
--
ALTER TABLE `profile_reg`
  MODIFY `idProfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categoria_roupas`
--
ALTER TABLE `categoria_roupas`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;



--
-- Limitadores para a tabela `reg`
--
ALTER TABLE `reg`
  ADD CONSTRAINT `reg_ibfk_1` FOREIGN KEY (`fk_idProfile`) REFERENCES `profile_reg` (`idProfile`);
COMMIT;

--
-- Limitadores para a tabela `reg`
--
ALTER TABLE `prod`
  ADD CONSTRAINT `prod_ibfk_1` FOREIGN KEY (`fk_idCategoria`) REFERENCES `categoria_roupas` (`idCategoria`);
COMMIT;