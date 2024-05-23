-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 mai 2024 à 21:14
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `card`
--

INSERT INTO `card` (`id`, `title`, `location`, `start_date`, `salary`, `type`, `appearance`, `short_description`, `long_description`, `link`, `admin_id`) VALUES
(1, 'développeur fullstack', 'caen', '2024-05-31', '2000.00', 'CDI', 'full remote', 'poste qui vous permettra de monter en expérience dans des projets passionnants et complexe', 'Lorem ipsum dolor sit amet consectetur adipiscing elit non urna, sodales lacinia curabitur netus suscipit mollis mus gravida nullam, per felis luctus aenean tellus tempor taciti iaculis. Himenaeos ultrices augue placerat eleifend litora facilisi elementum, natoque vulputate quisque habitasse tempor nunc non magna, metus aliquam commodo convallis diam inceptos. Placerat nullam praesent dignissim ridiculus lacus pulvinar vivamus nisi elementum potenti, vel vehicula eleifend quam magna mollis eu pellentesque mattis, nibh purus lectus cras vulputate est ut quisque montes.', 'https://google.com', 1),
(16, 'Développeur Front-End', 'Caen', '2024-05-14', '3000.00', 'CDI', 'Partiel', 'Nous recherchons un développeur front-end talentueux pour rejoindre notre équipe dynamique.', 'En tant que développeur front-end, vous serez responsable de la création et de la maintenance des interfaces utilisateurs de nos applications web. Vous travaillerez en étroite collaboration avec nos designers et développeurs back-end pour offrir des expériences utilisateurs fluides et engageantes. Vous devez avoir une bonne maîtrise des technologies telles que HTML, CSS, JavaScript et des frameworks comme React ou Angular. Une expérience en intégration continue et déploiement continu (CI/CD) sera un plus. Nous offrons un environnement de travail flexible avec la possibilité de travailler en télétravail partiel.', '', NULL),
(17, 'Chef de Projet Digital', 'Caen', '2024-06-15', '4000.00', 'CDI', 'Présentiel', 'Nous recherchons un chef de projet digital expérimenté pour diriger nos projets web.', 'En tant que chef de projet digital, vous serez en charge de la gestion et de la coordination de nos projets web de bout en bout. Vous travaillerez en étroite collaboration avec les clients pour comprendre leurs besoins et vous assurerez que les projets sont livrés dans les délais et respectent les standards de qualité. Vous serez également responsable de la gestion des ressources, de la planification et du suivi budgétaire. Une expérience avérée dans la gestion de projets web complexes et une connaissance approfondie des outils de gestion de projet comme Jira ou Trello sont indispensables. Ce poste nécessite une présence régulière au bureau pour faciliter la communication et la coordination avec l\'équipe.', '', NULL),
(18, 'Designer UX/UI', 'Caen', '2024-05-14', '3500.00', 'CDD', 'Présentiel', 'Nous cherchons un designer UX/UI créatif pour améliorer l\'expérience utilisateur de nos produits.\r\n\r\n', 'En tant que designer UX/UI, vous jouerez un rôle clé dans la conception de nos produits web et mobiles. Vous serez responsable de l\'ensemble du processus de conception, de la recherche utilisateur à la création de prototypes haute fidélité. Vous travaillerez en étroite collaboration avec les développeurs et les chefs de projet pour assurer une intégration harmonieuse des designs. Vous devez avoir une solide expérience en design centré utilisateur et être à l\'aise avec des outils comme Sketch, Figma ou Adobe XD. Une capacité à comprendre et à interpréter les feedbacks des utilisateurs pour améliorer les produits est essentielle. Ce poste est basé à notre siège, avec une forte interaction quotidienne avec les équipes internes.', '', NULL),
(19, 'Développeur Back-End', 'Caen', '2024-05-24', '3200.00', 'Freelance', 'Full remote', 'Nous recrutons un développeur back-end pour renforcer notre équipe de développement.\r\n\r\n', 'Le développeur back-end sera responsable du développement, de la maintenance et de l\'optimisation de nos systèmes serveurs et bases de données. Vous devez avoir une excellente maîtrise de langages tels que Python, Ruby, ou Node.js, ainsi qu\'une expérience solide avec des bases de données relationnelles et NoSQL. La connaissance des pratiques de développement sécurisées et de la mise en place d\'API RESTful est nécessaire. Vous travaillerez en étroite collaboration avec l\'équipe front-end pour assurer une intégration efficace et une performance optimale des applications. Ce poste est entièrement en télétravail, offrant une grande flexibilité tout en exigeant une communication et une collaboration efficaces à distance.', '', NULL),
(20, 'Spécialiste SEO/SEM', 'Caen', '2024-09-14', '2800.00', 'CDD', 'Partiel', 'Une personne qui connait l\'environnement google comme sa poche et qui est force de proposition', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, hac ornare diam lectus cursus mattis conubia, sem odio montes habitasse bibendum nisi. Varius bibendum tortor nascetur in turpis integer dictum, dapibus senectus dictumst vivamus torquent fermentum. Bibendum augue eleifend pretium malesuada imperdiet congue urna, metus dignissim fringilla euismod iaculis.', '', NULL);

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
