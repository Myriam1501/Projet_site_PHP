-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 02 mai 2022 à 15:30
-- Version du serveur : 10.7.1-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_panier`
--

-- --------------------------------------------------------

--
-- Structure de la table `panier2`
--

DROP TABLE IF EXISTS `panier2`;
CREATE TABLE IF NOT EXISTS `panier2` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prix` float NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `panier2`
--

INSERT INTO `panier2` (`id`, `nom`, `prix`, `image`) VALUES
(1, 'Martini (rouge ou blanc)\r\n', 4, 'image menu/martini.jpg'),
(2, 'Ricard', 4, 'image menu/ricard.jpg'),
(3, 'Whisky JB', 4, 'image menu/whisky.jpg'),
(4, 'Soho au litchi', 6, 'image menu/soho.jpg'),
(5, 'Umeshu (liqueur de prune japonais)', 6, 'image menu/umeshu.jpg'),
(6, 'Soju', 6, 'image menu/soju.jpg'),
(7, 'E1 Takoyaki poulpe 5 pièces', 4, 'image menu/E1.jpg'),
(8, 'E2 Tempura crevettes 5 Pièces', 3, 'image menu/E2.jpg'),
(9, 'E3 Edamame', 3, 'image menu/E3.jpg'),
(10, 'E4 Salade de concombre au vinaigre chinois', 3, 'image menu/E4.jpg'),
(11, 'E5 Tteokbokki', 4, 'image menu/E5.jpg'),
(12, 'E6 Gyoza au poulet 5 pièces', 4, 'image menu/E6.jpg'),
(13, 'E7 Poulet frit à la coréen 5 pièces', 5, 'image menu/E7.jpg'),
(14, 'E8 Hotdog coréen 2 pièces', 5, 'image menu/E8.jpg'),
(15, 'E9 Bouché au porc 6 pièces', 4, 'image menu/E9.jpg'),
(16, 'E10 Planche à partager', 12, 'image menu/E9.jpg'),
(17, 'N1 Udon (ramen ou sauté) (du japon)', 9, 'image menu/N1.jpg'),
(18, 'N2 Yakisoba (Nouilles épaisse de chine)(sauté)', 9, 'image menu/N2.jpg'),
(19, 'N3 Pad thai (sauté)', 8.5, 'image menu/N3.jpg'),
(20, 'N4 BiangBiangMian (sauté)', 9, 'image menu/N4.jpg'),
(21, 'N5 Liangpi (Nouille froide)', 9, 'image menu/N5.jpg'),
(22, 'N6 Soba (Froid ou ramen)', 8.5, 'image menu/N6.jpg'),
(23, 'N7 Ramen dandan (Sauté ou soupe)', 8.5, 'image menu/N7.jpg'),
(24, 'N8 Soupe de ravioli au porc haché', 8, 'image menu/N8.jpg'),
(25, 'R1 Kastu curry poulet / porc pané', 9, 'image menu/R1.jpg'),
(26, 'R2 Lok lak boeuf', 9, 'image menu/R2.jpg'),
(27, 'R3 Riz sauté Poulet / porc pané)', 8, 'image menu/R3.jpg'),
(28, 'R4 Khao pad thai', 8.5, 'image menu/R4.jpg'),
(29, 'R5 Omurice', 9, 'image menu/R5.jpg'),
(30, 'D1 Mochi glacé (Mangue, thé vert, coco, vanille)', 4, 'image menu/D1.jpg'),
(31, 'D2 Mangue fraiche', 3, 'image menu/D2.jpg'),
(32, 'D3 Perles de coco', 4, 'image menu/D3.jpg'),
(33, 'D4 Nem nutella', 4, 'image menu/D4.jpg'),
(34, 'D5 Banane flambé saké', 4, 'image menu/D5.jpg'),
(35, 'G1 Banana split', 5, 'image menu/G1.jpg'),
(36, 'G2 Dame blanche', 4, 'image menu/G2.jpg'),
(37, 'G3 Coupe café ou chocolat liégeois', 4, 'image menu/G3.jpg'),
(38, 'G4 Coupe tropical', 4, 'image menu/G4.jpg'),
(39, 'G6 Boules de glace au choix (3 parfums)', 5, 'image menu/G6.jpg'),
(40, 'J1 Jus d’ananas', 4, 'image menu/jusfruit.jpg'),
(41, 'J2 Jus de mangue', 4, 'image menu/jusfruit.jpg'),
(42, 'J3 Jus d’orange', 4, 'image menu/jusfruit.jpg'),
(43, 'J4 Jus de pomme', 4, 'image menu/jusfruit.jpg'),
(44, 'Coca cola', 3, 'image menu/caco.jpg'),
(45, 'Ice tea', 3, 'image menu/icetea.jpg'),
(46, 'Orangina', 3, 'image menu/orangina.jpg'),
(47, 'Evian (petit / grande)', 3, 'image menu/evian.jpg'),
(48, 'Perrier', 3, 'image menu/perrier.jpg'),
(49, 'San pelligrino (petit / grande)', 3, 'image menu/sanpelligrino.jpg'),
(50, 'Thé jasmin de chine', 4, 'image menu/the.jpg'),
(51, 'Thé vert du japon', 4, 'image menu/the.jpg'),
(52, 'Thé noir du japon', 4, 'image menu/the.jpg'),
(53, 'Café', 2, 'image menu/cafeviennois.jpg'),
(54, 'Café Noisette', 2, 'image menu/cafeviennois.jpg'),
(55, 'Café crème', 2, 'image menu/cafeviennois.jpg'),
(56, 'Capuccino', 2, 'image menu/cafeviennois.jpg'),
(57, 'Café viennois', 2, 'image menu/cafeviennois.jpg'),
(58, 'Chocolat chaud', 2, 'image menu/chocolatchaud.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
