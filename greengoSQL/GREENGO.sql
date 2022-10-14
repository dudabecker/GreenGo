-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14-Out-2022 às 17:38
-- Versão do servidor: 8.0.30-0ubuntu0.20.04.2
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `GREENGO`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `idEquipe` int NOT NULL,
  `nomeEquipe` varchar(100) NOT NULL,
  `codigoEnt` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `especie`
--

CREATE TABLE `especie` (
  `idEspecie` int NOT NULL,
  `nomePop` varchar(100) NOT NULL,
  `nomeCie` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` blob NOT NULL,
  `frutifera` tinyint(1) NOT NULL,
  `raridade` tinyint(1) NOT NULL,
  `medicinal` tinyint(1) NOT NULL,
  `toxidade` tinyint(1) NOT NULL,
  `exotica` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `myuser`
--

CREATE TABLE `myuser` (
  `id` int NOT NULL,
  `name` varchar(90) DEFAULT NULL,
  `genero` varchar(100) NOT NULL,
  `escolaridade` varchar(500) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `myuser`
--

INSERT INTO `myuser` (`id`, `name`, `genero`, `escolaridade`, `email`, `password`) VALUES
(1, 'duda heck', 'feminino', 'ensino fundamental 1', 'mariaehsb@gmail.com', '4444'),
(2, 'jefferson', 'masculino', 'ensino superior', 'jefferson@email.com', '1234'),
(3, 'teste2', 'feminino', 'ensino médio', 'jefferson.chaves@ifpr.edu.br', '123456'),
(4, 'mariaehsb', 'feminino', 'ensino fundamental 1', 'maria@gmail.com', 'mariae'),
(5, 'mariaehsb4', 'masculino', 'ensino superior', 'maria@gmail.com', 'mariae'),
(6, 'mariaehsb7', 'feminino', 'ensino fundamental 1', 'maria@gmail.com', 'mariae'),
(7, 'julia', 'outro', 'ensino medio', 'juju@gmail.com', 'juju');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planta`
--

CREATE TABLE `planta` (
  `id` int NOT NULL,
  `idEspecie` int NOT NULL,
  `codNumerico` int NOT NULL,
  `codQR` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quizz`
--

CREATE TABLE `quizz` (
  `idQuizz` int NOT NULL,
  `pergunta` varchar(500) NOT NULL,
  `resposta` tinyint(1) NOT NULL,
  `idZona` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `quizz`
--

INSERT INTO `quizz` (`idQuizz`, `pergunta`, `resposta`, `idZona`) VALUES
(1, 'qual a cor da folha ?', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `zona`
--

CREATE TABLE `zona` (
  `idZona` int NOT NULL,
  `qntPlantas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `zona`
--

INSERT INTO `zona` (`idZona`, `qntPlantas`) VALUES
(1, 100);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`idEquipe`);

--
-- Índices para tabela `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`idEspecie`);

--
-- Índices para tabela `myuser`
--
ALTER TABLE `myuser`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `planta`
--
ALTER TABLE `planta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`idQuizz`);

--
-- Índices para tabela `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`idZona`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `equipe`
--
ALTER TABLE `equipe`
  MODIFY `idEquipe` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `especie`
--
ALTER TABLE `especie`
  MODIFY `idEspecie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `myuser`
--
ALTER TABLE `myuser`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `planta`
--
ALTER TABLE `planta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `quizz`
--
ALTER TABLE `quizz`
  MODIFY `idQuizz` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `zona`
--
ALTER TABLE `zona`
  MODIFY `idZona` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
