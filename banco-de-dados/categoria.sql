SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria`(
  `cod_categoria` int(3) NOT NUll,
  `nome_categoria` varchar(255) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabela `usuario`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Inserindo dados da tabela `produto`
--

INSERT INTO `categoria` (`cod_categoria`, `nome_categoria`) VALUES
(1, 'Trator'),
(2, 'Seifa'),
(3, 'plantadeira'),
(4, 'pulverizador'),
(5, 'grades-agricolas'),
(6, 'subsolador');


