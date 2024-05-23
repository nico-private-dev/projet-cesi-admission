-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 mai 2024 à 21:05
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
-- Base de données : `projet-cesi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Structure de la table `card`
--

DROP TABLE IF EXISTS `card`;
CREATE TABLE IF NOT EXISTS `card` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `appearance` varchar(50) DEFAULT NULL,
  `short_description` text,
  `long_description` text,
  `link` varchar(255) DEFAULT NULL,
  `admin_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `card`
--

INSERT INTO `card` (`id`, `title`, `location`, `start_date`, `salary`, `type`, `appearance`, `short_description`, `long_description`, `link`, `admin_id`) VALUES
(1, 'développeur fullstack', 'caen', '2024-05-31', '2000.00', 'CDI', 'full remote', 'poste qui vous permettra de monter en expérience dans des projets passionnants et complexe', 'Lorem ipsum dolor sit amet consectetur adipiscing elit non urna, sodales lacinia curabitur netus suscipit mollis mus gravida nullam, per felis luctus aenean tellus tempor taciti iaculis. Himenaeos ultrices augue placerat eleifend litora facilisi elementum, natoque vulputate quisque habitasse tempor nunc non magna, metus aliquam commodo convallis diam inceptos. Placerat nullam praesent dignissim ridiculus lacus pulvinar vivamus nisi elementum potenti, vel vehicula eleifend quam magna mollis eu pellentesque mattis, nibh purus lectus cras vulputate est ut quisque montes.', 'https://google.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `search`
--

DROP TABLE IF EXISTS `search`;
CREATE TABLE IF NOT EXISTS `search` (
  `id` int NOT NULL AUTO_INCREMENT,
  `keywords` varchar(255) NOT NULL,
  `card_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `card_id` (`card_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
