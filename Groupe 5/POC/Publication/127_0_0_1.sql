-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 12 Janvier 2015 à 17:00
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `covoiturage`
--

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `dep_num` int(11) NOT NULL AUTO_INCREMENT,
  `dep_nom` varchar(30) NOT NULL,
  `vil_num` int(11) NOT NULL,
  PRIMARY KEY (`dep_num`),
  KEY `vil_num` (`vil_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`dep_num`, `dep_nom`, `vil_num`) VALUES
(1, 'Informatique', 7),
(2, 'GEA', 6),
(3, 'GEA', 7),
(4, 'SRC', 7),
(5, 'HSE', 5),
(6, 'GÃ©nie civil', 16);

-- --------------------------------------------------------

--
-- Structure de la table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `div_num` int(11) NOT NULL AUTO_INCREMENT,
  `div_nom` varchar(30) NOT NULL,
  PRIMARY KEY (`div_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `division`
--

INSERT INTO `division` (`div_num`, `div_nom`) VALUES
(1, 'AnnÃ©e 1'),
(2, 'AnnÃ©e 2'),
(3, 'AnnÃ©e SpÃ©ciale'),
(4, 'Licence Professionnelle');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `per_num` int(11) NOT NULL,
  `dep_num` int(11) NOT NULL,
  `div_num` int(11) NOT NULL,
  PRIMARY KEY (`per_num`),
  KEY `dep_num` (`dep_num`),
  KEY `div_num` (`div_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`per_num`, `dep_num`, `div_num`) VALUES
(38, 6, 1),
(39, 2, 4),
(53, 2, 1),
(54, 3, 2),
(62, 1, 1),
(66, 1, 1),
(67, 3, 4),
(69, 1, 1),
(70, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE IF NOT EXISTS `fonction` (
  `fon_num` int(11) NOT NULL AUTO_INCREMENT,
  `fon_libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`fon_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `fonction`
--

INSERT INTO `fonction` (`fon_num`, `fon_libelle`) VALUES
(1, 'Directeur'),
(2, 'Chef de dÃ©partement'),
(3, 'Technicien'),
(4, 'SecrÃ©taire'),
(5, 'IngÃ©nieur'),
(6, 'Imprimeur'),
(7, 'Enseignant'),
(8, 'Chercheur');

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE IF NOT EXISTS `parcours` (
  `par_num` int(11) NOT NULL AUTO_INCREMENT,
  `par_km` float NOT NULL,
  `vil_num1` int(11) NOT NULL,
  `vil_num2` int(11) NOT NULL,
  PRIMARY KEY (`par_num`),
  KEY `vil1` (`vil_num1`),
  KEY `vil2` (`vil_num2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `parcours`
--

INSERT INTO `parcours` (`par_num`, `par_km`, `vil_num1`, `vil_num2`) VALUES
(1, 500, 10, 11),
(2, 100, 7, 5),
(3, 225, 8, 13),
(4, 300, 5, 13),
(5, 345, 15, 11),
(7, 45, 15, 16),
(8, 0, 15, 5),
(9, 0, 15, 5),
(10, 100, 15, 5),
(11, 14, 5, 5),
(12, 145, 15, 7),
(13, 14, 17, 16),
(14, 5, 17, 6),
(15, 159, 9, 17),
(16, 150, 17, 18),
(17, 145, 10, 18);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `per_num` int(11) NOT NULL AUTO_INCREMENT,
  `per_nom` varchar(30) NOT NULL,
  `per_prenom` varchar(30) NOT NULL,
  `per_tel` char(14) NOT NULL,
  `per_mail` varchar(30) NOT NULL,
  `per_login` varchar(20) NOT NULL,
  `per_pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`per_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`per_num`, `per_nom`, `per_prenom`, `per_tel`, `per_mail`, `per_login`, `per_pwd`) VALUES
(38, 'Michu', 'Marcel', '0555555555', 'Michu@sfr.fr', 'Marcel', 'd41d8cd98f00b204e9800998ecf8427e'),
(39, 'Renard', 'Pierrot', '0655555555', 'Pierrot@gmail.fr', 'sql', 'ac5c74b64b4b8352ef2f181affb5ac2a'),
(52, 'Adam', 'Pomme', '0555775555', 'Pomme@apple.com', 'Pomme', 'ac5c74b64b4b8352ef2f181affb5ac2a'),
(53, 'Delmas', 'Sophie', '0789562314', 'Sophie@unilim.fr', 'Soso', 'd41d8cd98f00b204e9800998ecf8427e'),
(54, 'Dupuy', 'Pascale', '0554565859', 'pascale@free.fr', 'Pascale', '4cf4c21e98d1e2ec4e61dac94b6cdc07'),
(56, 'a', 'a', '0123456789', 'a.a@a.fr', 'aaa', 'd03d5c3ef8c2595958dc55aea761098348ba0295'),
(57, 'a', 'a', '0123456789', 'a.a@a.fr', 'a', '989b5b19dd6aa7fd62b1b34e3875ad263fae6f9c'),
(58, 'a', 'a', '0123456789', 'a.a@a.fr', 'a', '989b5b19dd6aa7fd62b1b34e3875ad263fae6f9c'),
(59, 'a', 'a', '0123456789', 'a.a@a.fr', 'aaa', 'fe2ff4adcd0d69918becaeb0aaee23e6f5bdf70b'),
(60, 'a', 'a', '0123456789', 'a.a@a.fr', 'aaa', 'fe2ff4adcd0d69918becaeb0aaee23e6f5bdf70b'),
(61, 'a', 'a', '0123456789', 'a.a@a.fr', 'a', 'bffa7e4e377c89152064cea29808a4e292d3da85'),
(62, 'a', 'a', '0123456789', 'a.a@a.fr', 'a', 'bffa7e4e377c89152064cea29808a4e292d3da85'),
(64, 'test', 'sal', '0987654321', 'test.sal@sal.fr', 'testsal', 'de72455d40044c9dda939633d3209a9f6a59bac5'),
(66, 'test1', 'test1', '0123456789', 'test.test@test.test1', 'test1', 'ddcb6db4f7310c8894ede6a5b9b4ffba5fdb6b25'),
(67, 'test', 'test', '0123456789', 'test.test@test.test', 'test', '02e48725062a0051c3469e0a604ac2273f84a813'),
(68, 'test', 'a', '0123456789', 'a.a@a.fr', 'a', '7e11e9be1a2c7b8ac32fe6426d7e072c17e052d8'),
(69, 'a', 'a', '0123456789', 'a.a@a.fr', 'a', '7e11e9be1a2c7b8ac32fe6426d7e072c17e052d8'),
(70, 'a', 'test', '0123456789', 'a.a@a.fr', 'a', '7e11e9be1a2c7b8ac32fe6426d7e072c17e052d8'),
(71, 'test', 'test', '0987654321', 'test.test@test.test', 'test', '02e48725062a0051c3469e0a604ac2273f84a813');

-- --------------------------------------------------------

--
-- Structure de la table `propose`
--

CREATE TABLE IF NOT EXISTS `propose` (
  `par_num` int(11) NOT NULL,
  `per_num` int(11) NOT NULL,
  `pro_date` date NOT NULL,
  `pro_time` time NOT NULL,
  `pro_place` int(11) NOT NULL,
  `pro_sens` tinyint(1) NOT NULL COMMENT '0 : vil1 -> vil2 1: vil2 -> vil1',
  PRIMARY KEY (`par_num`,`per_num`,`pro_date`,`pro_time`),
  KEY `per_num` (`per_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `propose`
--

INSERT INTO `propose` (`par_num`, `per_num`, `pro_date`, `pro_time`, `pro_place`, `pro_sens`) VALUES
(1, 39, '2014-11-04', '21:07:42', 0, 1),
(2, 67, '0000-00-00', '16:29:32', 1, 1),
(2, 67, '0000-00-00', '16:40:48', 1, 1),
(2, 67, '2014-12-06', '16:54:07', 1, 1),
(2, 67, '2014-12-06', '19:32:57', 1, 1),
(4, 67, '2014-12-06', '19:21:28', 13, 0),
(17, 67, '2014-12-06', '16:47:32', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

CREATE TABLE IF NOT EXISTS `salarie` (
  `per_num` int(11) NOT NULL,
  `sal_telprof` varchar(20) NOT NULL,
  `fon_num` int(11) NOT NULL,
  PRIMARY KEY (`per_num`),
  KEY `fon_num` (`fon_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `salarie`
--

INSERT INTO `salarie` (`per_num`, `sal_telprof`, `fon_num`) VALUES
(52, '0666666666', 8),
(64, '0987654321', 1),
(68, '0987654321', 5),
(71, '0987654321', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `vil_num` int(11) NOT NULL AUTO_INCREMENT,
  `vil_nom` varchar(100) NOT NULL,
  PRIMARY KEY (`vil_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`vil_num`, `vil_nom`) VALUES
(5, 'Tulle'),
(6, 'Brive'),
(7, 'Limoges'),
(8, 'GuÃ©ret'),
(9, 'PÃ©rigueux'),
(10, 'Bordeaux'),
(11, 'Paris'),
(12, 'Toulouse'),
(13, 'Lyon'),
(14, 'Poitiers'),
(15, 'Ambazac'),
(16, 'Egletons'),
(17, 'test'),
(18, 'test1'),
(19, 'test12'),
(20, 'test12');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`vil_num`) REFERENCES `ville` (`vil_num`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`per_num`) REFERENCES `personne` (`per_num`),
  ADD CONSTRAINT `etudiant_ibfk_2` FOREIGN KEY (`dep_num`) REFERENCES `departement` (`dep_num`),
  ADD CONSTRAINT `etudiant_ibfk_3` FOREIGN KEY (`div_num`) REFERENCES `division` (`div_num`);

--
-- Contraintes pour la table `parcours`
--
ALTER TABLE `parcours`
  ADD CONSTRAINT `parcours_ibfk_2` FOREIGN KEY (`vil_num1`) REFERENCES `ville` (`vil_num`),
  ADD CONSTRAINT `parcours_ibfk_3` FOREIGN KEY (`vil_num2`) REFERENCES `ville` (`vil_num`);

--
-- Contraintes pour la table `propose`
--
ALTER TABLE `propose`
  ADD CONSTRAINT `propose_ibfk_1` FOREIGN KEY (`par_num`) REFERENCES `parcours` (`par_num`),
  ADD CONSTRAINT `propose_ibfk_2` FOREIGN KEY (`per_num`) REFERENCES `personne` (`per_num`);

--
-- Contraintes pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD CONSTRAINT `salarie_ibfk_1` FOREIGN KEY (`per_num`) REFERENCES `personne` (`per_num`),
  ADD CONSTRAINT `salarie_ibfk_2` FOREIGN KEY (`fon_num`) REFERENCES `fonction` (`fon_num`);
--
-- Base de données :  `pr2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `idArticle` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `corpsTexte` varchar(10000) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(30) NOT NULL,
  `user_mdp` varchar(30) NOT NULL,
  `user_nom` varchar(30) NOT NULL,
  `user_prenom` varchar(30) NOT NULL,
  `user_tel` char(10) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_adherent` char(1) NOT NULL,
  `user_typeCompte` varchar(30) NOT NULL,
  `user_roles` varchar(100) NOT NULL,
  `user_derniereConnexion` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `user_login`, `user_mdp`, `user_nom`, `user_prenom`, `user_tel`, `user_email`, `user_adherent`, `user_typeCompte`, `user_roles`, `user_derniereConnexion`) VALUES
(1, 'jean87', '123456', 'jean', 'jacques', '0123456789', 'jean.jacques@orange.fr', 'o', 'administrateur', 'directeur,administrateur', '2014-11-27'),
(2, 'Thierry01', 'azerty', 'Thierry', 'Henri', '0987654321', 'thierry.henri@bouygues.fr', 'n', 'visiteur', 'visiteur', '2014-11-24');
--
-- Base de données :  `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
