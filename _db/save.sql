-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 29 sep. 2020 à 09:37
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exerciseLooper`
--

-- --------------------------------------------------------

--
-- Structure de la table `exercises`
--

CREATE TABLE `exercises` (
  `idExercises` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `state` int NOT NULL,
   CONSTRAINT exercises_PK PRIMARY KEY (idExercises)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `exercises`
--

INSERT INTO `exercises` (`idExercises`, `title`, `state`) VALUES
(1, 'TestExercice', 1),
(3, 'Exercice2', 1),
(17, 'Exercice4', 1),
(18, 'Exercice5', 1),
(19, 'Exercice6', 1),
(20, 'Exercice7', 1),
(21, 'Exercice8', 1),
(22, 'Exercice9', 1);

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `idQuestions` int NOT NULL,
  `title` text NOT NULL,
  `type` int NOT NULL,
  `FK_idExercises` int NOT NULL,
   CONSTRAINT questions_PK PRIMARY KEY (idQuestions),
  INDEX `FK_idExercises` (FK_idExercises),
  FOREIGN KEY (FK_idExercises)
  	REFERENCES exercises(idExercises) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`idQuestions`, `title`, `type`, `FK_idExercises`) VALUES
(1, 'Question1', 1, 1),
(2, 'Questions3', 1, 1),
(3, 'Questions4', 1, 1),
(4, 'Questions5', 1, 1),
(5, 'Questions6', 1, 1),
(6, 'Questions7', 1, 1),
(7, 'Questions8', 1, 1),
(8, 'Questions9', 1, 1),
(9, 'Questions10', 1, 1),
(10, 'Questions11', 1, 1),
(11, 'Questions12', 1, 1),
(12, 'questions1', 1, 17),
(13, 'questions2', 1, 17),
(14, 'questions3', 1, 17),
(15, 'questions4', 1, 17),
(16, 'questions5', 1, 17),
(17, 'questions6', 1, 17),
(18, 'questions7', 1, 17),
(19, 'questions8', 1, 17),
(20, 'questions9', 1, 17),
(21, 'questions1', 1, 18),
(22, 'questions2', 1, 18),
(23, 'questions3', 1, 18),
(24, 'questions4', 1, 18),
(25, 'questions5', 1, 18),
(26, 'questions6', 1, 18),
(27, 'questions7', 1, 18),
(28, 'questions8', 1, 18),
(29, 'questions9', 1, 18),
(30, 'questions1', 1, 19),
(31, 'questions2', 1, 19),
(32, 'questions3', 1, 19),
(33, 'questions4', 1, 19),
(34, 'questions5', 1, 19),
(35, 'questions6', 1, 19),
(36, 'questions7', 1, 19),
(37, 'questions8', 1, 19),
(38, 'questions9', 1, 19),
(39, 'questions1', 1, 20),
(40, 'questions2', 1, 20),
(41, 'questions3', 1, 20),
(42, 'questions4', 1, 20),
(43, 'questions5', 1, 20),
(44, 'questions6', 1, 20),
(45, 'questions7', 1, 20),
(46, 'questions8', 1, 20),
(47, 'questions9', 1, 20),
(48, 'questions1', 1, 21),
(49, 'questions2', 1, 21),
(50, 'questions3', 1, 21),
(51, 'questions4', 1, 21),
(52, 'questions5', 1, 21),
(53, 'questions6', 1, 21),
(54, 'questions7', 1, 21),
(55, 'questions8', 1, 21),
(56, 'questions9', 1, 21),
(57, 'questions1', 1, 22),
(58, 'questions2', 1, 22),
(59, 'questions3', 1, 22),
(60, 'questions4', 1, 22),
(61, 'questions5', 1, 22),
(62, 'questions6', 1, 22),
(63, 'questions7', 1, 22),
(64, 'questions8', 1, 22),
(65, 'questions9', 1, 22);

-- --------------------------------------------------------

--
-- Structure de la table `responses`
--

CREATE TABLE `responses` (
  `idResponses` int NOT NULL,
  `content` varchar(100) DEFAULT NULL,
   `FK_idQuestions` int NOT NULL,
    CONSTRAINT responses_PK PRIMARY KEY (idResponses),
   INDEX `FK_idQuestions` (FK_idQuestions),
  FOREIGN KEY (FK_idQuestions)
  	REFERENCES questions(idQuestions) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `responses`
--
INSERT INTO `responses` (`idResponses`, `FK_idQuestions`, `content`) VALUES
(1, 1, 'COUCOU 1'),
(2, 2, 'COUCOU2'),
(3, 3, 'COUCOU3'),
(4, 4, 'COUCOU4'),
(5, 5, 'COUCOU5'),
(6, 6, 'COUCOU6'),
(7, 7, 'COUCOU7'),
(8, 8, 'COUCOU8'),
(9, 9, 'COUCOU9'),
(10, 10, 'COUCOU10'),
(11, 11, 'COUCOU11'),
(12, 12, 'COUCOU12'),
(13, 13, 'COUCOU13'),
(14, 14, 'COUCOU14'),
(15, 15, 'COUCOU15'),
(16, 16, 'COUCOU16'),
(17, 17, 'COUCOU17'),
(18, 18, 'COUCOU18'),
(19, 19, 'COUCOU19'),
(20, 20, 'COUCOU20'),
(21, 21, 'COUCOU21'),
(22, 22, 'COUCOU22'),
(23, 23, 'COUCOU23'),
(24, 24, 'COUCOU24'),
(25, 25, 'COUCOU25'),
(26, 26, 'COUCOU26'),
(27, 27, 'COUCOU27'),
(28, 28, 'COUCOU28'),
(29, 29, 'COUCOU29'),
(30, 30, 'COUCOU30'),
(31, 31, 'COUCOU31'),
(32, 32, 'COUCOU32'),
(33, 33, 'COUCOU33'),
(34, 34, 'COUCOU34'),
(35, 35, 'COUCOU35'),
(36, 36, 'COUCOU36'),
(37, 37, 'COUCOU37'),
(38, 38, 'COUCOU38'),
(39, 39, 'COUCOU39'),
(40, 40, 'COUCOU40'),
(41, 41, 'COUCOU41'),
(42, 42, 'COUCOU42'),
(43, 43, 'COUCOU43'),
(44, 44, 'COUCOU44'),
(45, 45, 'COUCOU45'),
(46, 46, 'COUCOU46'),
(47, 47, 'COUCOU47'),
(48, 48, 'COUCOU48'),
(49, 49, 'COUCOU49'),
(50, 50, 'COUCOU50'),
(51, 51, 'COUCOU51'),
(52, 52, 'COUCOU52'),
(53, 53, 'COUCOU53'),
(54, 54, 'COUCOU54'),
(55, 55, 'COUCOU55'),
(56, 56, 'COUCOU56'),
(57, 57, 'COUCOU57'),
(58, 58, 'COUCOU58'),
(59, 59, 'COUCOU59'),
(60, 60, 'COUCOU60'),
(61, 61, 'COUCOU61'),
(62, 62, 'COUCOU62'),
(63, 63, 'COUCOU63'),
(64, 64, 'COUCOU64'),
(65, 65, 'COUCOU65'),
(68, 2, 'COUCOU2'),
(69, 3, 'COUCOU3'),
(70, 4, 'COUCOU4'),
(71, 5, 'COUCOU5'),
(72, 6, 'COUCOU6'),
(73, 7, 'COUCOU7'),
(74, 8, 'COUCOU8'),
(75, 9, 'COUCOU9'),
(76, 10, 'COUCOU10'),
(77, 11, 'COUCOU11'),
(78, 12, 'COUCOU12'),
(79, 13, 'COUCOU13'),
(80, 14, 'COUCOU14'),
(81, 15, 'COUCOU15'),
(82, 16, 'COUCOU16'),
(83, 17, 'COUCOU17'),
(84, 18, 'COUCOU18'),
(85, 19, 'COUCOU19'),
(86, 20, 'COUCOU20'),
(87, 21, 'COUCOU21'),
(88, 22, 'COUCOU22'),
(89, 23, 'COUCOU23'),
(90, 24, 'COUCOU24'),
(91, 25, 'COUCOU25'),
(92, 26, 'COUCOU26'),
(93, 27, 'COUCOU27'),
(94, 28, 'COUCOU28'),
(95, 29, 'COUCOU29'),
(96, 30, 'COUCOU30'),
(97, 31, 'COUCOU31'),
(98, 32, 'COUCOU32'),
(99, 33, 'COUCOU33'),
(100, 34, 'COUCOU34'),
(101, 35, 'COUCOU35'),
(102, 36, 'COUCOU36'),
(103, 37, 'COUCOU37'),
(104, 38, 'COUCOU38'),
(105, 39, 'COUCOU39'),
(106, 40, 'COUCOU40'),
(107, 41, 'COUCOU41'),
(108, 42, 'COUCOU42'),
(109, 43, 'COUCOU43'),
(110, 44, 'COUCOU44'),
(111, 45, 'COUCOU45'),
(112, 46, 'COUCOU46'),
(113, 47, 'COUCOU47'),
(114, 48, 'COUCOU48'),
(115, 49, 'COUCOU49'),
(116, 50, 'COUCOU50'),
(117, 51, 'COUCOU51'),
(118, 52, 'COUCOU52'),
(119, 53, 'COUCOU53'),
(120, 54, 'COUCOU54'),
(121, 55, 'COUCOU55'),
(122, 56, 'COUCOU56'),
(123, 57, 'COUCOU57'),
(124, 58, 'COUCOU58'),
(125, 59, 'COUCOU59'),
(126, 60, 'COUCOU60'),
(127, 61, 'COUCOU61'),
(128, 62, 'COUCOU62'),
(129, 63, 'COUCOU63'),
(130, 64, 'COUCOU64'),
(131, 65, 'COUCOU65');
--
-- Structure de la table `fullfilments`
--

CREATE TABLE `fullfilments` (
  `date` timestamp NOT NULL,
    `FK_idExercises` INT NOT NULL,
    `FK_idResponses` INT NOT NULL,
  INDEX `FK_idExercises` (FK_idExercises),
  INDEX `FK_idResponses` (FK_idResponses),
  FOREIGN KEY (FK_idResponses)
  	REFERENCES responses(idResponses) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fullfilments`
--

INSERT INTO `fullfilments` (`FK_idExercises`, `FK_idResponses`, `date`) VALUES
(1, 1, '2018-08-20 00:00:00'),
(1, 2, '2018-08-20 00:00:00'),
(1, 3, '2018-08-20 00:00:00'),
(1, 4, '2018-08-20 00:00:00'),
(1, 5, '2018-08-20 00:00:00'),
(1, 6, '2018-08-20 00:00:00'),
(1, 7, '2018-08-20 00:00:00'),
(1, 8, '2018-08-20 00:00:00'),
(1, 9, '2018-08-20 00:00:00'),
(1, 10, '2018-08-20 00:00:00'),
(1, 11, '2018-08-20 00:00:00');


