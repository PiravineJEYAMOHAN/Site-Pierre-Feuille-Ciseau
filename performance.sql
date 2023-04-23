-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 23 avr. 2023 à 18:05
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shifumi`
--

-- --------------------------------------------------------

--
-- Structure de la table `performance`
--

DROP TABLE IF EXISTS `performance`;
CREATE TABLE IF NOT EXISTS `performance` (
  `id_perf` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `victory_nb` int NOT NULL DEFAULT '0',
  `defeat_nb` int NOT NULL DEFAULT '0',
  `draw_nb` int NOT NULL DEFAULT '0',
  `match_nb` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_perf`),
  KEY `fk_user` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `performance`
--

INSERT INTO `performance` (`id_perf`, `user_id`, `victory_nb`, `defeat_nb`, `draw_nb`, `match_nb`) VALUES
(9, 14, 11, 1, 22, 81),
(10, 27, 1, 0, 0, 1),
(13, 30, 0, 0, 0, 0),
(12, 29, 0, 2, 0, 3),
(14, 31, 0, 0, 0, 0),
(15, 32, 0, 0, 0, 0),
(16, 33, 0, 0, 0, 0),
(17, 34, 0, 0, 0, 0),
(18, 35, 0, 0, 0, 0),
(19, 36, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
