-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 05 Février 2015 à 14:27
-- Version du serveur :  5.6.21
-- Version de PHP :  5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pr2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `Document`
--

CREATE TABLE IF NOT EXISTS `Document` (
`id` int(11) NOT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreation` datetime NOT NULL,
  `dateDerniereModif` datetime NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Document`
--

INSERT INTO `Document` (`id`, `template`, `contenu`, `titre`, `auteur`, `dateCreation`, `dateDerniereModif`, `type`) VALUES
(2, 'template_image_coin_gauche', '<img src="{{ asset(''bundles/pr2lsite/images/presPR2L.jpg'') }}" id=''imagPres''>\n	<p>L’association PR2L est une association d’intérêt général ouverte à tous qui a pour objectifs :\n		<ul>\n			<li>D’appeler et d’aider à <em>la collecte de documents et archives concernant l’histoire ouvrière, des entreprises et des associations d’économie sociale et des syndicats professionnels</em> en partenariat avec les institutions et organismes intéressés ;</li>\n\n			<li>De <em>promouvoir un programme de sauvegarde et de valorisation de ces documents et archives</em> (guides, numérisation partagée de corpus documentaires ou des enquêtes) en liaison avec les Ministères, les chercheurs et les archivistes professionnels de la conservation (archivistes, bibliothécaires, documentalistes….) ;</li>\n\n			<li>De <em>conduire des projets fédérateurs</em> (colloques, rencontres, séminaires) à l’échelle régionale, nationale et internationale ;</li>\n\n			<li>De <em>contribuer et participer à la diffusion documentaire et pédagogique des ressources collectées disponibles</em>, en utilisant les outils informatiques appropriés.</li>\n		</ul>\n	</p>', '<h1>Présentation de l''association PR2L</h1>', 'test', '2015-01-16 17:00:00', '2015-01-16 17:00:00', 'projet');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idMenuParent` int(11) NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `libelle`, `idMenuParent`, `lien`) VALUES
(1, 'PR2L', 0, 'accueil'),
(2, 'Le projet', 1, 'projet'),
(3, 'Fondateurs', 1, 'fondateurs'),
(4, 'ACTUALITÉS', 0, 'actualites'),
(5, 'Revue de presse', 1, 'revuePresse'),
(6, 'Adhérer à l''association', 1, 'adherer'),
(7, 'Vie de l''association', 1, 'vieAssociation'),
(8, 'Actions / Événements', 4, 'actionsEvenements'),
(9, 'Quoi de neuf?', 4, 'quoiDeNeuf'),
(10, 'Autour de nous', 4, 'autourDeNous'),
(11, 'PARTENAIRES', 0, 'partenaires'),
(12, 'Gérer les partenaires', 11, 'gererPartenaires'),
(13, 'RESSOURCES', 0, 'ressources'),
(14, 'Catalogues d''archives', 13, 'archives'),
(15, 'Bibliothèque', 13, 'bibliotheque'),
(16, 'Travaux de recherche', 13, 'travauxRecherche'),
(17, 'Nos publications', 13, 'publications'),
(18, 'Liens utiles', 13, 'liensUtiles'),
(19, 'CHANTIERS', 0, 'chantiers'),
(20, 'Recensement pour la mutualité', 19, 'recensementMutualite'),
(21, 'Inventaire de la coopérative en Limousin', 19, 'inventaireCooperation'),
(22, 'INTRANET', 0, 'login'),
(23, 'Création', 22, 'creation'),
(24, 'Gestion des utilisateurs', 22, 'gestionAdmin'),
(25, 'Modification d''informations', 22, 'modification'),
(26, 'Déconnexion', 22, 'logout');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `password`, `prenom`, `nom`, `email`, `salt`, `roles`) VALUES
(3, 'Alexandre', 'Alexandre', 'Alexandre', 'Alexandre', 'Alexandre', '', 'a:1:{i:0;s:9:"ROLE_USER";}'),
(4, 'Marine', 'Marine', 'Marine', 'Marine', 'Marine', '', 'a:1:{i:0;s:9:"ROLE_USER";}'),
(5, 'Anna', 'Anna', 'Anna', 'Anna', 'Anna', '', 'a:4:{i:0;s:9:"ROLE_USER";i:1;s:6:"ROLE_R";i:2;s:8:"ROLE_R/W";i:3;s:10:"ROLE_ADMIN";}'),
(6, 'test', 'test', 'test', 'test', 'test@test.fr', '', 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(7, 'test2', 'test2', 'test2', 'test2', 'test2@test.fr', '', 'a:1:{i:0;s:10:"ROLE_ADMIN";}');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Document`
--
ALTER TABLE `Document`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Document`
--
ALTER TABLE `Document`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
