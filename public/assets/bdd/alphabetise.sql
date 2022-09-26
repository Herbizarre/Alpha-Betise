-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 sep. 2022 à 13:50
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `alphabetise`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_edition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_book` double NOT NULL,
  `couverture_book` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_libraire` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_user` longtext COLLATE utf8mb4_unicode_ci,
  `code_ean` int(11) NOT NULL,
  `code_isbn` int(11) NOT NULL,
  `editeur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_date` date NOT NULL,
  `collection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_number` int(11) NOT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poids` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `langue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `langue_originale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `title`, `rate`, `author`, `home_edition`, `disponibility`, `price_book`, `couverture_book`, `comment_libraire`, `comment_user`, `code_ean`, `code_isbn`, `editeur`, `publication_date`, `collection`, `page_number`, `dimension`, `poids`, `langue`, `langue_originale`) VALUES
(1, 'Les Profs - tome 24: Oral de rattrapage', NULL, 'Erroc & Sti', 'Bamboo Edition', 'en stock', 1190, '9604f4a8c06e5b27ff9a3be6f73510c3e0164a90.jpg', 'Suite à une énième explosion due à au prof de chimie, le lycée Fanfaron est inopérationnel… Mais pas question pour la fine fleur professorale que leurs élèves n’aient pas de continuité pédagogique… Visioconférences gênées par les pleurs du bébé Polochon que même ses baby-sitters Boulard et Louise n’arrivent pas à calmer, cours dans le parc municipal ou le bistrot du coin, ils ne les lâcheront pas, quitte à aller les rechercher à la fête foraine qui vient de s’installer en ville… Ah les élèves veulent un tour gratuit ? Eh bien, ça sera avec Gladys… Le train fantôme ne fera jamais aussi peur !', NULL, 978281, 281898, 'Bamboo; Illustrated édition', '2021-11-03', 'Bamboo humour', 48, '21.6 x 0.7 x 29.3 cm', '369 g', 'Français', 'Français'),
(2, 'Nana, tome 1', NULL, 'Yazawa Aï', 'Delcourt', 'épuisé', 699, '773fa68f9b18e68917466b73d65fc3874752bcb9.jpg', 'Ces deux jeunes filles s\'appellent Nana. Elles ont le même âge, éprouvent toutes deux une grande attirance pour Tokyo, et font très attention à leur look. La première est une étudiante rêveuse et tête en l\'air, à la recherche désespérée du prince charmant. Quant à l\'autre, plus déterminée et solitaire, c\'est grâce à son premier amour qu\'elle est devenue chanteuse dans un groupe de rock amateur. Toutes deux ont pour objectif d\'aller s\'installer à Tokyo...à savoir Des personnages influencés par les dernières modes tokyoïtes,...', NULL, 9782840, 284055, 'Delcourt', '2004-01-01', 'Sakura', 192, '11cm x 17cm', '150 g', 'Française', 'Japonaise');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220925143705', '2022-09-25 14:38:09', 82);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
