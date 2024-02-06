SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `descricao_produto` varchar(255) NOT NULL,
  `valor_produto` float NOT NULL,
  `cod_categoria` int(3) NOT NULL,
  `img` varchar(255) NOT NULL,

  `destaque` boolean NOT NULL,
  FOREIGN KEY (cod_categoria) REFERENCES categoria(cod_categoria)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_produto`);

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

--
-- Inserindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_produto`, `nome_produto`, `descricao_produto`, `valor_produto`, `cod_categoria`, `img`, `destaque`) VALUES
(1,'trator','preto','32243,',1,'2023.11.30-19.45.53.jpg',true);


