-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 02 sep. 2020 à 20:41
-- Version du serveur :  8.0.18
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
-- Base de données :  `aen`
--

-- --------------------------------------------------------

--
-- Structure de la table `avions`
--

DROP TABLE IF EXISTS `avions`;
CREATE TABLE IF NOT EXISTS `avions` (
  `idAvions` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `statut` int(11) DEFAULT NULL,
  `utilisation` int(11) DEFAULT NULL,
  `tarifSolo` int(11) NOT NULL,
  `tarifInstructeur` int(11) DEFAULT NULL,
  `idUserAvion` int(11) NOT NULL,
  PRIMARY KEY (`idAvions`),
  KEY `idUserAvion` (`idUserAvion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avions`
--

INSERT INTO `avions` (`idAvions`, `type`, `statut`, `utilisation`, `tarifSolo`, `tarifInstructeur`, `idUserAvion`) VALUES
(1, 'Robin DR 400 120cv FGDES', NULL, 0, 162, 162, 10),
(2, 'PIPER PA 28 180 cv FGIDI', NULL, 0, 195, 195, 10);

-- --------------------------------------------------------

--
-- Structure de la table `carteb`
--

DROP TABLE IF EXISTS `carteb`;
CREATE TABLE IF NOT EXISTS `carteb` (
  `idCarte` int(11) NOT NULL AUTO_INCREMENT,
  `numeroCarte` varchar(16) NOT NULL,
  `dateExpirationC` varchar(5) NOT NULL,
  `codeSecuC` int(11) NOT NULL,
  PRIMARY KEY (`idCarte`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carteb`
--

INSERT INTO `carteb` (`idCarte`, `numeroCarte`, `dateExpirationC`, `codeSecuC`) VALUES
(1, '4444444444444444', '21/21', 4);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idCours` int(11) NOT NULL AUTO_INCREMENT,
  `nomC` varchar(255) NOT NULL,
  `courPdf` varchar(255) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idCours`),
  KEY `idUserCours` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `nomC`, `courPdf`, `idUser`) VALUES
(2, 'La connaissance de l\'avion', 'ADMIN/COURS/PDF/10.2020-08-30-02-05-48.pdf', 10);

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

DROP TABLE IF EXISTS `factures`;
CREATE TABLE IF NOT EXISTS `factures` (
  `idFactures` int(11) NOT NULL AUTO_INCREMENT,
  `pdfFacture` varchar(255) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idFactures`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `idService` int(11) NOT NULL AUTO_INCREMENT,
  `nomS` varchar(155) NOT NULL,
  `detailS` text NOT NULL,
  `typeServices` int(11) DEFAULT NULL,
  `imgS` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `idUserService` int(11) NOT NULL,
  PRIMARY KEY (`idService`),
  KEY `idUserService` (`idUserService`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`idService`, `nomS`, `detailS`, `typeServices`, `imgS`, `idUserService`) VALUES
(23, 'Stationnement', 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique', 0, NULL, 10),
(24, 'Avitaillement', 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique', 0, NULL, 10),
(25, 'Nettoyage intérieur', 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique', 0, NULL, 10),
(26, 'Informations météorologiques', 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique', 0, NULL, 10),
(27, 'BAPTÊMES DE L\'AIR', '<p>Vous désirez effectuer un baptême de l’air,<br> vous initier au pilotage ou offrir un chèque cadeau ?<br>\r\n\r\n                L\'AeroClub d\'evreux Normandie est vous propose de découvrir le plaisir de voler <br> Tout en admirant les magnifiques paysages de la Lozère et de la région Occitanie.</p>\r\n          ', 1, 'IMAGES/10.2020-08-28-07-22-40.png', 10),
(28, 'SAUT EN PARACHUTE', 'Vous souhaitez savoir pourquoi nos sauts en parachute ne sont pas chers?<br>\r\nNous venons de mettre en place un calendrier tarifaire pour le saut en parachute.<br> Merci d\'en prendre connaissance.', 1, 'IMAGES/10.2020-08-28-07-23-23.png', 10),
(29, 'LOCATION ULM', 'Nous vous proposons de louer des ULM multi-axes <br>de dernière génération pour du vol loisir, <br>du remorquage, du voyage et/ou écolage. <br>Que ce soit à courte ou longue durée nous nous efforcerons<br> de trouver le meilleur compromis pour vos besoins ', 1, 'IMAGES/10.2020-08-28-07-24-04.png', 10);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nomU` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenomU` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `numeroTel` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adresse` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `confirmeKey` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `confirme` tinyint(1) DEFAULT NULL,
  `typeUsers` int(11) DEFAULT '0',
  `avatar` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '../IMAGES/icone/avatar-default.png',
  `dateNaissance` date NOT NULL,
  `ageU` int(3) DEFAULT NULL,
  `date_fin_souscription` date DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nomU`, `prenomU`, `email`, `password`, `numeroTel`, `adresse`, `confirmeKey`, `confirme`, `typeUsers`, `avatar`, `dateNaissance`, `ageU`, `date_fin_souscription`) VALUES
(10, 'root', 'ousmane', 'ousmanesalamatao79@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '0658632547', '139 boulevard robert ballanger', '11398325174578', NULL, 2, '../IMAGES/icone/avatar-default.png', '0000-00-00', NULL, NULL),
(12, 'mirko', 'toto', 'toto78@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '0580885644', '255 rue jul', '62882919131856', NULL, 0, '../IMAGES/icone/avatar-default.png', '0000-00-00', NULL, NULL),
(19, 'Adherant', 'numero1', 'adheran01@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '0758311254', '48 rue Ph78', '73353943331786', NULL, 4, '../IMAGES/icone/avatar-default.png', '2002-02-23', NULL, '2020-12-31');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avions`
--
ALTER TABLE `avions`
  ADD CONSTRAINT `idUserAvion` FOREIGN KEY (`idUserAvion`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `idUserCours` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `idUserService` FOREIGN KEY (`idUserService`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
