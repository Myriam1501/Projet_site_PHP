-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 02 mai 2022 à 13:36
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `telephone` int(11) NOT NULL,
  `mail` text NOT NULL,
  `pseudo` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `adresse` text NOT NULL,
  `codepostal` text NOT NULL,
  `horaire` text NOT NULL,
  `nbrreservation` text NOT NULL,
  `demande` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`telephone`, `mail`, `pseudo`, `nom`, `prenom`, `adresse`, `codepostal`, `horaire`, `nbrreservation`, `demande`) VALUES
(1, 'j@k.k', 'ddd', 'dd', 'dd', 'fer 2', '22 ,d', 'qsdfghj', '3', 'dc'),
(5, 'hg@jh.jh', 'ddh', 'dd', 'gh', 'kjj', '78 hjb', 'qsdfghj', '4', '!'),
(7, 'ghj@ghj.hjk', 'ddd', 'dd', 'dd', 'n,', '67 ty', 'n,', '23', 'h'),
(17, 'n @jk.k', 'mmmmm-8', 'mmm', 'mmm', 'vdf', '98 jh', 'dfv', '4', 'cdf'),
(54, 'ghj@ghj.ghjk', 'dfgfgh', 'DFG', 'DFGH', 'ghj', '45 ty', 'hjk', '3', 'hj'),
(55, 'vbn@fghj.dfg', 'dfgfgh', 'DFG', 'DFGH', '56 rfgh', '567 ghj', 'ez', '4', 'ghj'),
(76, 'ghj@hj.hjk', 'ddd', 'dd', 'dd', 'dfg fgh', '78 yu', 'vfd', '3', 'sss'),
(79, 'jk@kj.d', 'mmmmm', 'mmm', 'mmm', 'df', '98 f', 'jkl', '8', 'x'),
(87, 'kj@j.ki', 'iii', 'ii', 'ii', 'nl', '7 j', 'hj', '2', 'zs'),
(92, 'jk@kj.kjl', 'mmmmm', 'mmm', 'mmm', 'jk', '89 j', 'hj', '5', 'hj'),
(97, 'kjn@kj.hjk', 'mmmmm', 'mmm', 'mmm', 'kj', '8 kl', ',', '3', 'n,'),
(121, 'jk@kj.l', 'mmmmm', 'mmm', 'mmm', ' k', '1 jk', 'dddd', '23', 'ds'),
(333, 'sdfghj@dfghj.dfgh', 'ghj', 'ghj', 'hjk', '123 rue dfgh', '23456 dfg', 'sdfghj', '5', 'sdfg'),
(345, 'jh@jh.kj', 'mmmmm', 'mmm', 'mmm', ',;', '889 hh', 'n,', '26', 'qs'),
(754, 'ghjk@ghj.hjk', 'dfgfgh', 'DFG', 'DFGH', '56 th', '67 ghj', 'fre', '2', 'gh'),
(777, 'fghj@fghjk.ghj', 'dd', 'dd', 'dd', '78 yu jk', '4567 erty', 'dddd', '5', 'ghj'),
(876, 'hj@hj.hj', 'ddd', 'dd', 'dd', 'ghj', '4567 gh', 'dddd', '7', 'hj'),
(887, 'gh@dfc.kj', 'mmmmm-10', 'mmm', 'mmm', 'tg', '32 v', 'k', '3', 'g'),
(893, 'j@kj.i', 'mmmmm', 'mmm', 'mmm', 'kjn', '89 hj', 'dd', '2', 'dc'),
(986, 'fgh@fghj.fgh', 'dfgfgh', 'DFG', 'DFGH', '23 ert', '23 fg', 'sdfghj', '3', 'hj'),
(987, 'fgh@ghj.gfh', 'ddd', 'dd', 'dd', '678 hj', '789 ghyj', 'sdfghj', '3', 'hj'),
(3433, 'kj@jk.Q', 'mmmmm-8', 'mmm', 'mmm', 'jn', '78 j ', 'cd', '25', 's'),
(9876, 'fghj@dfghj.ghj', 'dfgfgh', 'DFG', 'DFGH', '22 derty', '22 ghj', 'hj', '6', 'h'),
(23456, 'dfg@dfghj.fghj', 'dfgfgh', 'DFG', 'DFGH', '23 hj', '2345 gh', 'fghj', '5', 'xdx'),
(98761, 'fgh@ghj.ghj', 'ddd', 'dd', 'dd', 'hjk', '456 fgh', 'jkl', '4', 'jk,'),
(99999, 'vbn@fghj.dfg', 'dfgfgh', 'DFG', 'DFGH', '56 rfgh', '567 ghj', 'ez', '4', 'ghj'),
(456789, 'fgh@dfg.fg', 'dfgfgh', 'DFG', 'DFGH', '345 rty', '1234 ghj', 'jkl', '14', 'xedec'),
(5555555, 'j@kj.k', 'mmmmm', 'mmm', 'mmm', 'jkdn', '89 j ', 'qsdfghj', '2', 'vc'),
(987654321, 'ghjk@ghj.fgh', 'ghj', 'ghj', 'hjk', '67 rue gh', '6789 gh', '', '13', 'ghjk'),
(987654678, 'de@jnk.j', 'mmmmm', 'mmm', 'mmm', 'dsc', '78 nk', 'sdfghj', '27', 'cd'),
(1111111111, 'fgh@fgh.yj', 'ghjdfgh', 'ghj', 'dfgh', 'ERt345, ,; de', '3456 hj', 'hj', '4', 'fghj');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`telephone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `telephone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567891;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
