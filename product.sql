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
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `note_final` float DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `alcohol_percentage` float NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  `id_cepage` int(11) DEFAULT NULL,
  `id_taste` int(11) DEFAULT NULL,
  `id_association` int(11) DEFAULT NULL,
  `id_comment` int(11) DEFAULT NULL,
  `id_type` int(11) NOT NULL,
  `price` float NOT NULL,
  `is_featured` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `note_final`, `photo`, `stock`, `alcohol_percentage`, `id_region`, `id_cepage`, `id_taste`, `id_association`, `id_comment`, `id_type`, `price`, `is_featured`) VALUES
(10001, 'CH&Acirc;TEAU CORMEIL FIGEAC 2018', 'Saint-Emilion Grand cru', NULL, '9386696179742.png', 150, 14, 10, 10, 5, 1, NULL, 2, 27, 1),
(10002, 'CH&Acirc;TEAU LATOUR CAMBLANES 2018', '1&egrave;res Ctes Bordeaux/Ctes Bordx', NULL, '9373946413086 (1).png', 150, 14, 10, 10, 5, 1, NULL, 2, 11, 1),
(10003, 'MOUTON CADET BARON PHILIPPE DE ROTHSCHILD 2019', 'Bordeaux', NULL, '9514026205214-mouton.png', 150, 14, 10, 8, 4, 1, NULL, 2, 12, 1),
(10004, 'CH&Acirc;TEAU D\'ARCINS 2018', 'Haut Medoc Cru Bourgeois', NULL, '9510399246366-arcins.png', 150, 14, 10, 8, 5, 1, NULL, 2, 14, 1),
(10005, 'CH&Auml;TEAU TOUR DE LEYSSAC 2020', 'Saint-Est&egrave;phe', NULL, '9420960071710-treyllissac.png', 150, 13, 10, 10, 5, 1, NULL, 2, 18, 1),
(10006, 'JURANCON INFLUENCE SEC 2021', 'Juran&ccedil;on Sec', NULL, '9489653628958-jurancon.png', 150, 13, 10, 3, 2, 5, NULL, 1, 8, 1),
(10007, 'CH&Acirc;TEAU DE LA MULONNIERE 2020', 'Anjou Rouge Et Blanc', NULL, '9308988637214-mulonnerie.png', 150, 13, 4, 4, 2, 5, NULL, 1, 8, 1),
(10008, 'JURANCON GALET D\'OR 2020', 'Juran&ccedil;on Moelleux', NULL, '9266776178718-jurancon2.png', 150, 12, 10, 3, 2, 5, NULL, 1, 10.5, 1),
(10009, 'HAUTES C&Ocirc;TES BEAUNE 2019', 'Bourgogne Hautes C&ocirc;tes Beaune', NULL, '9323949359134-beaunes.png', 150, 14, 2, 2, 2, 2, NULL, 1, 12, 1),
(10010, 'CROZES HERMITAGE BLANC 2020', 'Crozes Hermitage', NULL, '9304942608414-hermitages.png', 150, 13, 1, 1, 1, 2, NULL, 1, 12, 1),
(10011, 'CHAMPAGNE HEIDSIECK &amp; CO MONOPOLE &quot;SILVER TOP&quot;', 'Champagne', NULL, '9519080996894-heidsieck.png', 150, 12, 2, 2, 6, 4, NULL, 3, 24, 1),
(10012, 'CHAMPAGNE MALARD BRUT 1ER CRU', 'Champagne', NULL, '8995531128862-malard.png', 150, 12, 2, 9, 6, 5, NULL, 3, 29, 1),
(10013, 'CHAMPAGNE VRANKEN CUV&Eacute;E DEMOISELLE ROS&Eacute; PRESTIGE PR&Eacute;SENTATION SP&Eacute;CIALE', 'Champagne Ros&eacute;', NULL, '9374421123102-demoiselle.png', 150, 12, 2, 2, 5, 4, NULL, 3, 39, 1),
(10014, 'CHAMPAGNE NICOLAS 1ER CRU BRUT', 'Champagne Blanc', NULL, '8803569729566-nicolas.png', 150, 12, 2, 9, 5, 3, NULL, 3, 32, 1),
(10015, 'NICOLAS FEUILLATTE RESERVE EXCLUSIVE', 'Champagne Blanc', NULL, '9292270469150-nicolas2.png', 150, 12, 2, 9, 2, 5, NULL, 3, 33, 1),
(10016, ' 	 COFFRET TRIO - CHAMPAGNES DE VIGNERONS', ' Coffret 3 bouteilles Blanc / France / Champagne / Champagne AOC ', NULL, 'coffret-trio-champagnes-de-vignerons.png', 150, 14, 2, 4, 5, 5, NULL, 4, 63, 1),
(10017, 'COFFRET SP&Eacute;CIAL RACLETTE', 'Coffret 3 bouteilles / France ', NULL, 'coffret-special-raclette.png', 150, 14, 1, 2, 1, 5, NULL, 4, 30, 1),
(10018, 'COFFRET TRIO - 90+/100 PARKER 100% BOURGOGNE', 'coffret 3 bouteilles', NULL, 'coffret-trio-90-100-parker-100-bourgogne.png', 150, 14, 2, 3, 1, 2, NULL, 4, 93, 1),
(10019, 'COFFRET TRIO - ALSACE LES INDISPENSABLES', 'Coffret 3 bouteilles / France / Alsace', NULL, 'coffret-trio-alsace-les-indispensables.png', 150, 14, 6, 7, 1, 2, NULL, 4, 31, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_cepage` (`id_cepage`),
  ADD KEY `id_taste` (`id_taste`),
  ADD KEY `id_association` (`id_association`),
  ADD KEY `id_comment` (`id_comment`),
  ADD KEY `id_type` (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_association`) REFERENCES `association` (`id_association`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_cepage`) REFERENCES `cepage` (`id_cepage`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_5` FOREIGN KEY (`id_taste`) REFERENCES `taste` (`id_taste`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_6` FOREIGN KEY (`id_type`) REFERENCES `type_product` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
