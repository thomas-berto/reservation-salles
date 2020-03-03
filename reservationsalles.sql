-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 03 mars 2020 à 12:41
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `fin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `id_utilisateur`, `fin`) VALUES
(23, 'Enregistrement ', 'son le futur feat 2babe', '2020-02-01 10:00:00', 3, '2020-02-01 11:00:00'),
(27, 'karaoke', 'soirer karaoke avec les winners', '2020-01-31 16:00:00', 6, '2020-01-31 18:00:00'),
(26, 'Dinner', 'dinner avec arianna', '2020-01-29 14:00:00', 4, '2020-01-29 16:00:00'),
(28, 'film', 'bad boy 3 au cinema du prado', '2020-02-01 08:00:00', 9, '2020-02-01 10:00:00'),
(30, 'massage', 'initiation au massage', '2020-03-02 10:00:00', 32, '2020-03-02 11:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `Password`) VALUES
(3, 'toto', 'toto'),
(4, 'popo', 'bobo'),
(5, 'ines', 'leyla'),
(18, 'thom', '77add44f8f13cf5b3298a7833613aca42430386d'),
(19, 'mars', 'f66cfb9906fec24661cf6589dfbb76e4003c8da0'),
(32, 'papy', '1b075ba43f4a5dfea44b6cd27eed9c666fd6f389'),
(31, 'a', 'da39a3ee5e6b4b0d3255bfef95601890afd80709');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
