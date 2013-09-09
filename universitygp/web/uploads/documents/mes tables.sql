-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 28 Août 2013 à 13:15
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `university`
--
CREATE DATABASE IF NOT EXISTS `university` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `university`;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE IF NOT EXISTS `chambre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C509E4FFA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `syllabsus` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`id`, `code`, `libelle`, `syllabsus`) VALUES
(1, '5245', 'jee', 'architecture jee'),
(2, '24534', 'symfony2', 'bundle avec composer');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `destination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `corps` longtext COLLATE utf8_unicode_ci NOT NULL,
  `piece_jointe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datemsg` datetime DEFAULT NULL,
  `msglu` tinyint(1) DEFAULT '0',
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B6BD307FA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `user_id`, `destination`, `subject`, `corps`, `piece_jointe`, `datemsg`, `msglu`, `filename`) VALUES
(1, 1, 'admin', 'test d''un mailing', 'test', 'C:\\wamp\\www\\Communication\\src\\User\\CommunicationBundle\\Entity/../../../../web/uploads/documents\\example.jpg', '2013-08-26 00:00:00', 1, 'example.jpg'),
(2, 1, 'etudiant', 'dsfsdfs', 'dsfsdfsdf', 'C:\\wamp\\www\\Communication\\src\\User\\CommunicationBundle\\Entity/../../../../web/uploads/documents\\admin.contact', '2013-08-26 00:00:00', 0, NULL),
(3, 1, 'prof', 'dgsdsd', 'egsegsgs', NULL, '2013-08-26 00:00:00', 1, NULL),
(4, 1, 'prof', 'test', 'test', NULL, '2013-08-26 00:00:00', 1, NULL),
(5, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 1, NULL),
(6, 1, 'admin', 'toi', 'toi', NULL, '2013-08-26 00:00:00', 1, NULL),
(7, 1, 'admin', 'toi', 'toit', NULL, '2013-08-26 00:00:00', 1, NULL),
(8, 1, 'admin', 'test', 'test', 'C:\\wamp\\www\\universityhier\\src\\User\\CommunicationBundle\\Entity/../../../../web/uploads/documents\\e.jpg', '2013-08-26 00:00:00', 1, 'e.jpg'),
(9, 1, 'etudiant', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(10, 1, 'etudiant', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(11, 1, 'etudiant', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(12, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(13, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(14, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 1, NULL),
(15, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(16, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(17, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(18, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(19, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(20, 1, 'admin', 'moi', 'moi', NULL, '2013-08-26 00:00:00', 0, NULL),
(21, 1, 'admin', 'download', 'download', 'C:\\wamp\\www\\universityhier\\src\\User\\CommunicationBundle\\Entity/../../../../web/uploads/documents\\university.sql', '2013-08-26 00:00:00', 1, 'university.sql'),
(22, 1, 'admin', 'time', 'time', NULL, '2013-08-26 11:09:43', 0, NULL),
(23, 1, 'admin', 'hhhhh', 'css', NULL, '2013-08-28 08:35:50', 1, NULL),
(25, 3, 'prof', 'test', 'test', 'C:\\wamp\\www\\universityhier\\src\\User\\CommunicationBundle\\Entity/../../../../web/uploads/documents\\demandetest1.doc', '2013-08-28 09:18:17', 1, 'demandetest1.doc'),
(26, 1, 'admin', 'editor', '<p><em><strong>Bonjour Mr l&#39;admin,</strong></em></p><ul><li>Avez vous test&eacute; les plugins pour le ckeditor?</li><li>Avez vous test&eacute; tout pour le moment?</li><li><a href="http://www.google.fr">http://www.google.fr</a></li></ul>', 'C:\\wamp\\www\\universityhier\\src\\User\\CommunicationBundle\\Entity/../../../../web/uploads/documents\\use case malek.jpg', '2013-08-28 10:16:55', 1, 'use case malek.jpg'),
(27, 1, 'admin', 'reponse editor', '<p><em><strong>oui bien sur ! &ccedil;a marche parfait!</strong></em></p>', NULL, '2013-08-28 10:17:55', 1, NULL),
(28, 1, 'admin', 'editor', '<p><a href="http://sdsqdsq"><em><strong>sqdqdsqdsq</strong></em></a></p>', NULL, '2013-08-28 11:19:43', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `matiere` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prof` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `piece_jointe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datequestion` datetime DEFAULT NULL,
  `questionlu` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_B6F7494EA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id`, `user_id`, `matiere`, `prof`, `question`, `piece_jointe`, `filename`, `datequestion`, `questionlu`) VALUES
(3, 1, 'jee', 'prof', 'L’objet de ce document est de définir les spécifications fonctionnelles détaillées de l’application « College Management ».\nLes spécifications fonctionnelles détaillées ont pour but de décrire précisément :\n	L’ensemble des fonctionnalités de l’application.\n	Les objets manipulés, leurs buts et leurs principes de fonctionnement.\n	Les écrans utilisateurs mettant en œuvre les fonctionnalités de l’application.\n	Le but, le type et le caractère obligatoire de chacun des champs présents sur les écrans de saisie, ainsi que les actions possibles à partir des écrans.\nToutes les fonctionnalités prévues lors de la phase de conception sont précisées dans ce document en indiquant l’implémentation de ces fonctionnalités dans l’application.\n', NULL, NULL, '2013-08-26 13:59:17', 1),
(4, 1, 'jee', 'prof', 'gfghfgh', NULL, NULL, '2013-08-26 14:06:18', 1),
(5, 1, 'jee', 'trmalek', 'gsfrzegfrzegfe', NULL, NULL, '2013-08-26 14:08:04', 0),
(6, 1, 'jee', 'trmalek', 'ddddddddddd', 'C:\\wamp\\www\\universityhier\\src\\Question\\Reponse\\QuestionReponseBundle\\Entity/../../../../web/uploads/documents\\ABshore_SuiviIndicateurs_Studio - Sarra-02-05-2013 -.xlsx', 'ABshore_SuiviIndicateurs_Studio - Sarra-02-05-2013 -.xlsx', '2013-08-26 14:09:56', 0),
(7, 3, 'jee', 'prof', 'test', NULL, NULL, '2013-08-27 10:40:37', 1),
(8, 1, 'tuto', 'prof', 'L’objet de ce document est de définir les spécifications fonctionnelles détaillées de l’application « College Management ».\r\nLes spécifications fonctionnelles détaillées ont pour but de décrire précisément :\r\n	L’ensemble des fonctionnalités de l’application.\r\n	Les objets manipulés, leurs buts et leurs principes de fonctionnement.\r\n	Les écrans utilisateurs mettant en œuvre les fonctionnalités de l’application.\r\n	Le but, le type et le caractère obligatoire de chacun des champs présents sur les écrans de saisie, ainsi que les actions possibles à partir des écrans.\r\nToutes les fonctionnalités prévues lors de la phase de conception sont précisées dans ce document en indiquant l’implémentation de ces fonctionnalités dans l’application.\r\n', NULL, NULL, '2013-08-26 13:59:17', 1),
(9, 1, 'jee', 'prof', 'L’objet de ce document est de définir les spécifications fonctionnelles détaillées de l’application « College Management ».\r\nLes spécifications fonctionnelles détaillées ont pour but de décrire précisément :\r\n	L’ensemble des fonctionnalités de l’application.\r\n	Les objets manipulés, leurs buts et leurs principes de fonctionnement.\r\n	Les écrans utilisateurs mettant en œuvre les fonctionnalités de l’application.\r\n	Le but, le type et le caractère obligatoire de chacun des champs présents sur les écrans de saisie, ainsi que les actions possibles à partir des écrans.\r\nToutes les fonctionnalités prévues lors de la phase de conception sont précisées dans ce document en indiquant l’implémentation de ces fonctionnalités dans l’application.\r\n', NULL, NULL, '2013-08-26 13:59:17', 1),
(10, 1, 'tuto', 'prof', 'L’objet de ce document est de définir les spécifications fonctionnelles détaillées de l’application « College Management ».\r\nLes spécifications fonctionnelles détaillées ont pour but de décrire précisément :\r\n	L’ensemble des fonctionnalités de l’application.\r\n	Les objets manipulés, leurs buts et leurs principes de fonctionnement.\r\n	Les écrans utilisateurs mettant en œuvre les fonctionnalités de l’application.\r\n	Le but, le type et le caractère obligatoire de chacun des champs présents sur les écrans de saisie, ainsi que les actions possibles à partir des écrans.\r\nToutes les fonctionnalités prévues lors de la phase de conception sont précisées dans ce document en indiquant l’implémentation de ces fonctionnalités dans l’application.\r\n', NULL, NULL, '2013-08-26 13:59:17', 1),
(11, 1, 'tuto', 'prof', 'L’objet de ce document est de définir les spécifications fonctionnelles détaillées de l’application « College Management ».\r\nLes spécifications fonctionnelles détaillées ont pour but de décrire précisément :\r\n	L’ensemble des fonctionnalités de l’application.\r\n	Les objets manipulés, leurs buts et leurs principes de fonctionnement.\r\n	Les écrans utilisateurs mettant en œuvre les fonctionnalités de l’application.\r\n	Le but, le type et le caractère obligatoire de chacun des champs présents sur les écrans de saisie, ainsi que les actions possibles à partir des écrans.\r\nToutes les fonctionnalités prévues lors de la phase de conception sont précisées dans ce document en indiquant l’implémentation de ces fonctionnalités dans l’application.\r\n', NULL, NULL, '2013-08-26 13:59:17', 1),
(12, 1, 'jee', 'prof', 'L’objet de ce document est de définir les spécifications fonctionnelles détaillées de l’application « College Management ».\r\nLes spécifications fonctionnelles détaillées ont pour but de décrire précisément :\r\n	L’ensemble des fonctionnalités de l’application.\r\n	Les objets manipulés, leurs buts et leurs principes de fonctionnement.\r\n	Les écrans utilisateurs mettant en œuvre les fonctionnalités de l’application.\r\n	Le but, le type et le caractère obligatoire de chacun des champs présents sur les écrans de saisie, ainsi que les actions possibles à partir des écrans.\r\nToutes les fonctionnalités prévues lors de la phase de conception sont précisées dans ce document en indiquant l’implémentation de ces fonctionnalités dans l’application.\r\n', NULL, NULL, '2013-08-26 13:59:17', 1),
(13, 3, 'jee', 'prof', 'test', NULL, NULL, '2013-08-27 10:40:37', 1),
(14, 1, 'jee', 'prof', 'testo', 'C:\\wamp\\www\\universityhier\\src\\Question\\Reponse\\QuestionReponseBundle\\Entity/../../../../web/uploads/documents\\conception.uml', 'conception.uml', '2013-08-28 07:52:33', 1),
(15, 1, 'jee', 'prof', 'ssssssssss', NULL, NULL, '2013-08-28 08:16:11', 1),
(16, 1, 'jee', 'prof', 'sdsqdsqd', NULL, NULL, '2013-08-28 08:16:42', 0),
(17, 1, 'jee', 'prof', 'sdsqdsqd', NULL, NULL, '2013-08-28 08:17:14', 0),
(18, 1, 'jee', 'prof', 'ttttt', NULL, NULL, '2013-08-28 08:32:56', 0),
(19, 1, 'jee', 'prof', 'test telechargement', 'C:\\wamp\\www\\universityhier\\src\\Question\\Reponse\\QuestionReponseBundle\\Entity/../../../../web/uploads/documents\\Chiffrage -V2.xlsx', 'Chiffrage -V2.xlsx', '2013-08-28 09:12:32', 1),
(20, 1, 'symfony2', 'prof', 'test', 'C:\\wamp\\www\\universityhier\\src\\Question\\Reponse\\QuestionReponseBundle\\Entity/../../../../web/uploads/documents\\ABshore_SuiviIndicateurs_Studio - Sarra-02-05-2013 -.xlsx', 'ABshore_SuiviIndicateurs_Studio - Sarra-02-05-2013 -.xlsx', '2013-08-28 09:21:02', 1),
(21, 1, 'jee', 'prof', 'test', 'C:\\wamp\\www\\universityhier\\src\\Question\\Reponse\\QuestionReponseBundle\\Entity/../../../../../web/uploads/documents\\ABshore_SuiviIndicateurs_Studio - Sarra-02-05-2013 -.xlsx', 'ABshore_SuiviIndicateurs_Studio - Sarra-02-05-2013 -.xlsx', '2013-08-28 09:28:15', 1),
(22, 1, 'jee', 'prof', '<ol><li><em><strong>bbbbbbbbbbb</strong></em></li></ol>', NULL, NULL, '2013-08-28 10:10:44', 0),
(23, 1, 'symfony2', 'prof', '<p><strong><em>dsqdqsdq</em></strong></p>', NULL, NULL, '2013-08-28 11:20:13', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE IF NOT EXISTS `reponse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `matiere` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etudiant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reponse` longtext COLLATE utf8_unicode_ci NOT NULL,
  `piece_jointe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datereponse` datetime DEFAULT NULL,
  `reponselu` tinyint(1) DEFAULT '0',
  `idquestion` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5FB6DEC7A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `reponse`
--

INSERT INTO `reponse` (`id`, `user_id`, `matiere`, `etudiant`, `reponse`, `piece_jointe`, `filename`, `datereponse`, `reponselu`, `idquestion`) VALUES
(1, 3, 'jee', 'admin', 'test admin', NULL, NULL, '2013-08-27 10:22:23', 1, 1),
(2, 3, 'jee', 'admin', 'test mail', NULL, NULL, '2013-08-27 10:23:58', 1, 2),
(3, 3, 'jee', 'admin', 'ok ok', NULL, NULL, '2013-08-27 12:59:42', 1, 3),
(4, 3, 'jee', 'prof', 'd''accord', NULL, NULL, '2013-08-27 12:59:59', 0, 4),
(5, 3, 'jee', 'admin', 'ok', NULL, NULL, '2013-08-28 07:55:59', 1, 14),
(6, 3, 'jee', 'admin', 'oui', NULL, NULL, '2013-08-28 08:30:46', 1, 15);

-- --------------------------------------------------------

--
-- Structure de la table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `search` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `FK_C509E4FFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_B6BD307FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_B6F7494EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `FK_5FB6DEC7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
