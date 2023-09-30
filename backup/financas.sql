-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Sep 30, 2023 at 01:01 AM
-- Server version: 8.1.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financas`
--

-- --------------------------------------------------------

--
-- Table structure for table `lancamentos`
--

CREATE TABLE `lancamentos` (
  `id` int NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `tipo` enum('DESPESA','RECEITA') NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `data_lancamento` date DEFAULT (curdate())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lancamentos`
--

INSERT INTO `lancamentos` (`id`, `descricao`, `tipo`, `valor`, `data_lancamento`) VALUES
(1, 'Compras', 'DESPESA', 79.90, '2023-09-30'),
(2, 'Salario', 'RECEITA', 2645.90, '2023-09-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lancamentos`
--
ALTER TABLE `lancamentos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
