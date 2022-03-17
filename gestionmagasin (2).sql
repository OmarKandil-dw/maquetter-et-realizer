-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 06:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionmagasin`
--
CREATE DATABASE IF NOT EXISTS `gestionmagasin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gestionmagasin`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idClient` varchar(254) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `telephone` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `pass` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `adresse`, `telephone`, `email`, `pass`) VALUES
('MA62320e615f5b34.95045208', 'aatrox', 'Battery', '124qasdf', '0601224180', 'younes_tm@outlook.com', 'Testing1234'),
('MA62321090ae3c13.54190793', 'aatrox', 'Elabbas', '124qasdf', '0601224181', 'younes_ab@outlook.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `adresseLivraison` varchar(254) DEFAULT NULL,
  `idClient` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`idCommande`, `date`, `adresseLivraison`, `idClient`) VALUES
(157, '2022-03-17', '124qasdf', 'MA62321090ae3c13.54190793'),
(158, '2022-05-17', '124qasdf', 'MA62321090ae3c13.54190793'),
(159, '2022-12-16', '124qasdf', 'MA62321090ae3c13.54190793'),
(160, '2022-09-15', '124qasdf', 'MA62321090ae3c13.54190793'),
(161, '2022-05-26', '124qasdf', 'MA62321090ae3c13.54190793'),
(162, '2022-07-03', '124qasdf', 'MA62321090ae3c13.54190793'),
(163, '2022-10-13', '124qasdf', 'MA62321090ae3c13.54190793'),
(164, '2022-10-10', '124qasdf', 'MA62321090ae3c13.54190793'),
(165, '2022-09-28', '124qasdf', 'MA62321090ae3c13.54190793'),
(166, '2022-05-27', '124qasdf', 'MA62321090ae3c13.54190793');

-- --------------------------------------------------------

--
-- Table structure for table `detailscommande`
--

CREATE TABLE `detailscommande` (
  `idCommande` int(11) NOT NULL,
  `idProduit` varchar(254) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailscommande`
--

INSERT INTO `detailscommande` (`idCommande`, `idProduit`, `quantite`) VALUES
(166, 'PD622a7ab1f3ee47.91542660', 12);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idProduit` varchar(254) NOT NULL,
  `libelle` varchar(254) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL,
  `prix` decimal(8,0) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL,
  `Promo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProduit`, `libelle`, `description`, `prix`, `stock`, `image`, `Promo`) VALUES
('PD622a7aa82ded18.78304602', 'first', 'first', '14', 14, 'product details/images/image 1.png', 1),
('PD622a7ab1f3ee47.91542660', 'sec', 'sec', '14', 14, 'product details/images/image 2.png', 0),
('PD622a7abe182d25.62632281', 'third', 'third', '14', 14, 'product details/images/image 3.png', 1),
('PD622a7afdb75960.88761961', 'four', 'fourth', '14', 14, 'product details/images/image 4.png', 1),
('PD622a7b1344a1f2.78170507', 'five', 'five', '14', 5, 'product details/images/image 5.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `quantity` int(11) DEFAULT NULL,
  `idProduit` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`quantity`, `idProduit`) VALUES
(12, 'PD622a7ab1f3ee47.91542660');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idClient` (`idClient`);

--
-- Indexes for table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD PRIMARY KEY (`idCommande`,`idProduit`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`idProduit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `detailscommande`
--
ALTER TABLE `detailscommande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Constraints for table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD CONSTRAINT `detailscommande_ibfk_1` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`),
  ADD CONSTRAINT `detailscommande_ibfk_2` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
