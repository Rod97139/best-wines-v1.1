-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 17 déc. 2022 à 18:36
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `best_wines`
--

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `clientName` varchar(255) DEFAULT NULL,
  `billingAddress` varchar(255) DEFAULT NULL,
  `total_price` float NOT NULL,
  `orderId_Invoice` varchar(255) DEFAULT NULL,
  `id_sale` int(11) NOT NULL,
  `id_promotion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_sale` (`id_sale`),
  ADD KEY `id_promotion` (`id_promotion`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
