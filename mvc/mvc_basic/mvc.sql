-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 nov. 2023 à 08:33
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
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `publish_date` datetime NOT NULL,
  `id_author` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`id_author`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `publish_date`, `id_author`) VALUES
(1, 'The Adventures of Little Explorer', 'Once upon a time in a small village, a curious child named Alex embarked on exciting adventures to discover the world around them.', '2023-11-24 10:00:00', 1),
(2, 'Secrets of the Enchanted Forest', 'In the heart of the mystical forest, a group of friends uncovered ancient secrets and forged unbreakable bonds with magical creatures.', '2023-11-25 14:30:00', 2),
(3, 'Time-traveling with Professor Whiz', 'Join Professor Whiz on a time-traveling journey through history, where unexpected twists and turns shape the destiny of our brave adventurers.', '2023-11-26 18:45:00', 1),
(4, 'The Starlight Serenade', 'In the vast expanse of the cosmos, a group of interstellar explorers embarked on a celestial journey. Their mission: to uncover the mysteries of distant galaxies and encounter ethereal wonders that would forever change their understanding of the universe.', '2023-11-27 12:00:00', 3),
(5, 'Chronicles of the Quantum Realm', 'Venture into the microscopic world with a team of intrepid scientists as they shrink down to explore the hidden dimensions of the quantum realm. Unraveling the secrets of subatomic particles, they discover a realm where reality bends and time dances to its own rhythm.', '2023-11-28 15:15:00', 4),
(6, 'Island of Whispers', 'Set sail with Captain Morgan and his crew as they navigate the treacherous waters surrounding the mysterious Island of Whispers. Legends speak of a hidden treasure guarded by ancient spirits. Will the crew overcome supernatural challenges and claim the prize, or will they become lost to the whispers of the island?', '2023-11-29 18:30:00', 1),
(7, 'Songbird\'s Sonata', 'In a magical kingdom where music holds the power of creation, follow the journey of Melody, a gifted songbird. As she learns to harness her musical abilities, Melody discovers that her songs can shape reality itself, leading her on a quest to restore harmony to a world in discord.', '2023-11-30 20:45:00', 2),
(8, 'The Labyrinth of Dreams', 'Step into a realm where dreams become reality. A diverse group of individuals finds themselves drawn into a mystical labyrinth that weaves through the landscapes of their deepest desires and fears. As they navigate the labyrinth, they must confront the illusions that blur the lines between dreams and truth.', '2023-12-01 22:00:00', 1),
(9, 'Skyward Symphony', 'In a floating city above the clouds, where technology and magic coexist, follow the story of a young inventor named Lila. When an ancient artifact threatens the city\'s stability, Lila must use her ingenuity and courage to soar to new heights and save her home from a looming catastrophe.', '2023-12-02 23:15:00', 3),
(10, 'Cogs of Destiny', 'In a steampunk-inspired world fueled by intricate machinery and clockwork wonders, a group of unlikely heroes discovers a set of enchanted gears that hold the key to shaping destiny itself. As they unlock the potential of these cogs, they find themselves entangled in a web of fate that transcends time and reality.', '2023-12-03 10:30:00', 4);

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `author`) VALUES
(1, 'Jean-Eude de Dampremy'),
(2, 'J.K. Rowling'),
(3, 'George R.R. Martin'),
(4, 'Agatha Christie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
