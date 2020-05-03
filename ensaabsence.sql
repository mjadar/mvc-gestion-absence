-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 03 mai 2020 à 13:44
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ensaabsence`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
  `CNE` varchar(20) NOT NULL,
  `DATE_ABS` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `absences`
--

INSERT INTO `absences` (`CNE`, `DATE_ABS`) VALUES
('A1230', ' . '),
('A1230', ' . 2020-05-01'),
('A1230', ' . 2020-05-03'),
('A1230', ' . 2020-05-04'),
('A1230', ' . 2020-05-05'),
('A1230', ' . 2020-05-08'),
('A1231', ' . '),
('A1231', ' . 2020-05-01'),
('A1231', ' . 2020-05-03'),
('A1231', ' . 2020-05-04'),
('A1231', ' . 2020-05-05'),
('A1232', ' . '),
('A1232', ' . 2020-05-01'),
('A1232', ' . 2020-05-03'),
('A1232', ' . 2020-05-04'),
('A1232', ' . 2020-05-05'),
('A1233', ' . '),
('A1233', ' . 2020-05-01'),
('A1233', ' . 2020-05-04'),
('A1233', ' . 2020-05-08'),
('A1234', ' . '),
('A1234', ' . 2020-05-04'),
('A1235', ' . '),
('A1235', ' . 2020-05-04'),
('A1236', ' . '),
('A1236', ' . 2020-05-03'),
('A1236', ' . 2020-05-04'),
('A1236', ' . 2020-05-08');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `CNE` varchar(20) NOT NULL,
  `NOM` varchar(25) NOT NULL,
  `PRENOM` varchar(25) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `PHOTO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`CNE`, `NOM`, `PRENOM`, `EMAIL`, `PHOTO`) VALUES
('A1230', 'jadar', 'mohamed', 'mohamed.jadar990@gmail.com', 'img1'),
('A1231', 'jadar1', 'mohamed1', 'mohamed.jadar991@gmail.com', 'img1'),
('A1232', 'jadar2', 'mohamed2', 'mohamed.jadar992@gmail.com', 'img1'),
('A1233', 'jadar3', 'mohamed3', 'mohamed.jadar993@gmail.com', 'img1'),
('A1234', 'jadar4', 'mohamed4', 'mohamed.jadar994@gmail.com', 'img1'),
('A1235', 'jadar5', 'mohamed5', 'mohamed.jadar995@gmail.com', 'img1'),
('A1236', 'jadar6', 'mohamed6', 'mohamed.jadar996@gmail.com', 'img1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`CNE`,`DATE_ABS`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`CNE`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absences`
--
ALTER TABLE `absences`
  ADD CONSTRAINT `FK_ABSENCES_ABSENTER_ELEVES` FOREIGN KEY (`CNE`) REFERENCES `eleves` (`CNE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
