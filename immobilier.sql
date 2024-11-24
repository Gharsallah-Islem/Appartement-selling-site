-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 10:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionimmobiliere`
--

-- --------------------------------------------------------

--
-- Table structure for table `immobilier`
--

CREATE TABLE `immobilier` (
  `reference` int(11) NOT NULL,
  `proprietaire` varchar(255) NOT NULL,
  `localite` varchar(255) NOT NULL,
  `nbPieces` int(11) NOT NULL,
  `domaineUsage` varchar(255) NOT NULL,
  `Nature` enum('Appartement','Villa') NOT NULL,
  `nbEtage` int(11) DEFAULT NULL,
  `surfaceCommune` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `immobilier`
--

INSERT INTO `immobilier` (`reference`, `proprietaire`, `localite`, `nbPieces`, `domaineUsage`, `Nature`, `nbEtage`, `surfaceCommune`) VALUES
(15, 'lasmer_immobilaire', 'marsa ', 5, 'living,renting', 'Villa', 1, 354.21),
(125, 'Asslema_immobilaire', 'mourouj 1', 3, 'living,renting', 'Appartement', 1, 154.21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `immobilier`
--
ALTER TABLE `immobilier`
  ADD PRIMARY KEY (`reference`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `immobilier`
--
ALTER TABLE `immobilier`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
