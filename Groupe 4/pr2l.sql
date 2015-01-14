-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 12 Janvier 2015 à 12:25
-- Version du serveur: 5.5.40-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `pr2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idMenuParent` int(11) DEFAULT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `libelle`, `idMenuParent`, `lien`) VALUES
(1, 'PR2L', NULL, 'pr2l'),
(2, 'Le projet', 1, 'le projet'),
(3, 'Fondateurs', 1, 'fondateurs'),
(4, 'ACTUALITÉS', NULL, 'actualités'),
(5, 'Revue de presse', 1, 'revue de presse'),
(6, 'Adhérer à l''association', 1, 'adhérer à l''association'),
(7, 'Vie de l''association', 1, 'vie de l''association'),
(8, 'Actions / Événements', 4, 'actions evenements'),
(9, 'Quoi de neuf?', 4, 'quoi de neuf'),
(10, 'Autour de nous', 4, 'autour de nous'),
(11, 'PARTENAIRES', NULL, 'partenaires'),
(12, 'Gérer les partenaires', 11, 'gerer les partenaires'),
(13, 'RESSOURCES', NULL, 'ressources'),
(14, 'Catalogues d''archives', 13, 'catalogues d''archives'),
(15, 'Bibliothèque', 13, 'bibliotheque'),
(16, 'Travaux de recherche', 13, 'travaux de recherche'),
(17, 'Nos publications', 13, 'nos publications'),
(18, 'Liens utiles', 13, 'liens utiles'),
(19, 'CHANTIERS', NULL, 'chantiers'),
(20, 'Recensement pour la mutualité', 19, 'recensement pour la mutualite'),
(21, 'Inventaire de la coopérative en Limousin', 19, 'inventaire de la coopérative en limousin'),
(22, 'INTRANET', NULL, 'connexion'),
(23, 'Connexion', 22, 'connexion'),
(24, 'Création', 22, 'creation'),
(25, 'Gestion des utilisateurs', 22, 'gestion des utilisateurs'),
(26, 'Modification d''informations', 22, 'modification d''informations'),
(27, 'Déconnexion', 22, 'deconnexion');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `droits` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `nom`, `prenom`, `droits`) VALUES
(1, 'ODubos', 'azerty', 'Dubos', 'Olivier', 'admin'),
(13, 'PFrey', 'azerty', 'Frey', 'Pierre-Yves', 'admin'),
(14, 'test', 'test', 'test', 'test', 'aucun'),
(15, 'FJuchereau', 'mdp', 'Juchereau', 'Francis', 'lecture/ecriture');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
