-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 23 Août 2013 à 14:45
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
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presentation` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `tel`, `mobile`, `cv`, `presentation`) VALUES
(1, 'Administrateur', 'Admin', '+710000000', '+21633333333', 'rien', 'rien'),
(4, 'kjhjkhk', 'kjhkjh', '', '', '', ''),
(5, 'Admin', 'Admin', '', '', '', ''),
(6, 'kjhjkhk', 'recruteur', '', '', '', ''),
(9, 'Admin', 'Admin', '+71000000', '+22222222', NULL, NULL),
(10, 'prof', 'prof', '+71000000', '+22222222', NULL, NULL),
(11, 'Admin', 'Admin', '+71000000', '+22222222', NULL, NULL),
(12, 'Admin', 'superadmin', '+71000000', '+22222222', NULL, NULL),
(13, 'kljkl', 'jlkjklj', 'lkjklj', 'lkjklj', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_document_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_211FE8206A24B1A2` (`user_document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presentation` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `tel`, `mobile`, `cv`, `presentation`) VALUES
(2, 'etudiant', 'etudiant', '', '', '', ''),
(16, 'etudiant22', 'etudiant22', '+00', '+22222222', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE IF NOT EXISTS `prof` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presentation` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `prof`
--

INSERT INTO `prof` (`id`, `nom`, `prenom`, `tel`, `mobile`, `cv`, `presentation`) VALUES
(3, 'abdelaziz', 'abdelaziz', '+717177171', '+22222222', 'rien', 'rien'),
(8, 'prof', 'prof', '', '', '', ''),
(14, 'prof', 'prof', '+71000000', '+22222222', NULL, NULL),
(15, 'prof', 'prof', '+71000000', '+22222222', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) DEFAULT NULL,
  `expired` tinyint(1) DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) DEFAULT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `type`, `new`) VALUES
(1, 'admin', 'admin', 'admin@abshoer.tn', 'admin@abshoer.tn', 1, 'hvkkmze6kf4kks0s0kgwcoggkkg4gkw', 'gKZJzGy6Avf3TrXjAgnmmv+e+DtunMhBkGAM2FRRMvcvsDSEOSE+ftBPyn63COvhL6y9L7vusjncZwkHNw1TRw==', '2013-08-23 13:49:39', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'admin', 0),
(2, 'etudiant', 'etudiant', 'etudiant@abshore.tn', 'etudiant@abshore.tn', 1, 'p2wl0bdlglcwgscs0c84ogkc4oscogc', 'nDHJ/NajZw3LrK6v85O/ot8JaRX5XzpYsq4gVdatclROJlHCfCzJyRAxseU+QnKgatNAvbinjuduaNzsi9X6CA==', '2013-08-23 10:20:45', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:13:"ROLE_ETUDIANT";}', 0, NULL, 'etudiant', 1),
(3, 'prof', 'prof', 'prof@abshore.tn', 'prof@abshore.tn', 1, 'op69t5xk2xccwckwgcg4cc8o84wwko4', '37ct73UkR+ZIrl5Jf8Dtj3Hudthj4RX0uBIkR8hcu0F0oLsYME/sCaXsc5I1QJLUCdbMRK5CctTcMLjrLQylLQ==', '2013-08-23 14:13:06', 0, 0, '2017-05-18 15:18:00', NULL, NULL, 'a:1:{i:0;s:9:"ROLE_PROF";}', 0, NULL, 'prof', 1),
(4, 'kjhjk', 'kjhjk', 'khkjhjk@hg.h', 'khkjhjk@hg.h', 1, 'dhlvly4ujuo00ggoo4gw0wkgcc4804o', 'Sw6XtXP/uFSvM3ukmgtey+cXoagaV0A91oATsDbGssceGTvYQt5saW8oNyHcUexE7TzwKWDzDTCP1btC30T/rQ==', NULL, 0, 1, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'admin', 0),
(5, 'admin1', 'admin1', 'admin@abshoaer.tn', 'admin@abshoaer.tn', 1, 'kj76g68mys08kwwo0w0wcsgc8440w0o', '1wBcwI0rQQH5+i33kBW7UF2q5Vm5Wn9zXAistNAhcHGGeJjIE5Bw4cw6JJvwCe81198M9pKRTVD7ot4+ajT9EA==', '2013-08-21 13:30:31', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'admin', 0),
(6, 'admin2', 'admin2', 'admin@abshoaer2.tn', 'admin@abshoaer2.tn', 1, 'g681b1fh5nw404wksscwkoogss8wso0', 'UoMGvKqzxQE90cLL15E2oyj+8SMOCCGr6uhQFQqK/zFffwUCsUOXAEy4+bDUqmW+sY2DvDv0eLheANPY2ybfhg==', NULL, 0, 0, '2018-08-16 17:33:00', NULL, NULL, 'a:0:{}', 0, NULL, 'admin', 0),
(8, 'prof1', 'prof1', 'prof1@abshore.tn', 'prof1@abshore.tn', 1, 'iocdj2ocrsowcs8o480kwc4k40okcsk', 'd/M/ZkqG4zqXpARDuu/OaDylbBsCAYb4ymFUvTqD79rcAJZ2Nc30HwEWhsmPc28z3ANZGT4WiXlsYeQMWBhcrg==', NULL, 0, 0, '2017-10-18 17:16:00', NULL, NULL, 'a:1:{i:0;s:9:"ROLE_PROF";}', 0, NULL, 'prof', 0),
(9, 'adminadmina', 'adminadmina', 'admin@abshoer.tnasa', 'admin@abshoer.tnasa', 1, 'o954qge8amsosgkg8socg8skkks4k88', 'E0tqCbYFPgNvAz+DEJFr0RMJ7zDe4u+xpgHRAOYp4o7+a39h9Pn9JD3UlVZcv0bPkwHn3VvscPPONnqNvVgbrw==', '2013-08-22 15:53:13', 0, 0, '2017-11-18 18:18:00', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'admin', NULL),
(10, 'prof2', 'prof2', 'prof1@abshore.tnn', 'prof1@abshore.tnn', 1, '6l0hsov6l008k4osc0w4o4sgsws8cws', 'E0/CBCcjaiQCNVFn8LOHASbRgAIcHQfsYnbJFGchNuZ0QxRUARC2l87lZCR33VY41NmelH2/Tpj9TBQSuV9uxw==', NULL, 0, 0, '2013-08-22 00:00:00', NULL, NULL, 'a:1:{i:0;s:9:"ROLE_PROF";}', 0, NULL, 'admin', NULL),
(11, 'admindashbord', 'admindashbord', 'adminboard1@abshore.tnnh', 'adminboard1@abshore.tnnh', 1, 'ptihxxzu18g4swcss4ko4ws84w8csgg', 'UAaCVYgt7/nnQXuwD/zQAm7C5dxoabP6m2qlAQoJUsShyzxyXTM38K8k1zHP4C1LHvG+dN1Zna1Bz2cpVNdAzw==', NULL, 0, 0, '2013-08-22 00:00:00', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'admin', NULL),
(12, 'adminprof', 'adminprof', 'adminprof@kj.uh', 'adminprof@kj.uh', 1, 'ooc1i6fudeokckcoow4kossso84okwk', '7RFiFyTU7d5q5souduuLtbMlyA03mh12OH7zEWpTsRN7PLYtq/9Aza1RORzkFVRyhguDvakE1w3Ouh0G9q7WIQ==', NULL, 0, 0, '2013-08-22 00:00:00', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'admin', NULL),
(13, 'hhjkhkjhljhjh', 'hhjkhkjhljhjh', 'jkhkjhkjlhkjhjk@j.k', 'jkhkjhkjlhkjhjk@j.k', 1, '14duvzt9wao00occokos40kkksw04ss', 'dMnoVWlSyOkYX62+ug4prSSkPZ27qjIFv6iq7mj567e62CPoEMMK5z1XSxUWHP+8ZLJj2ckdNfHS1spaoznImw==', NULL, 0, 0, '2013-08-22 00:00:00', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'admin', NULL),
(14, 'prof3', 'prof3', 'prof3@o.i', 'prof3@o.i', 1, 'j7ovxszst1c08c48o04gscwkssck408', 'OEWULU8Eg2t8XST8sWdkm2L/cQ4V38botkrwXp6C6pJadP6EoxmK1RNB7nMK1E6N2A+oRFQ28CDSYlwqogUxyA==', '2013-08-23 10:24:04', 0, 0, '2018-08-23 00:00:00', NULL, NULL, 'a:1:{i:0;s:9:"ROLE_PROF";}', 0, NULL, 'prof', 1),
(15, 'prof4', 'prof4', 'prof3@o.id', 'prof3@o.id', 1, 'j9jhztof9f4s8ok8gs8wgo0o8swsgkw', '5w00tOqQsFcWGWmrJOP1RDMPoAbgq/ET+9DqcXwD7QhDiupb60WtN/844MdT0V3M1gSu8qct3K2Z/UofSpOh0A==', '2013-08-23 10:26:58', 0, 0, '2019-08-23 00:00:00', NULL, NULL, 'a:1:{i:0;s:9:"ROLE_PROF";}', 0, NULL, 'prof', NULL),
(16, 'etudiant22', 'etudiant22', 'etudiant22@o.k', 'etudiant22@o.k', 1, 'aoyi8dt92d4ws48w48kgowsokocw80g', 'nYJGR3dHhe20XcVwYSx/bUBnZHW9kSc6rl+YHQ+q3NqlCqQe0pXb+kc4h63pfYpzNu5fOALhDh2DTFq6DbDolA==', '2013-08-23 14:40:08', 0, 0, '2017-08-23 00:00:00', NULL, NULL, 'a:1:{i:0;s:13:"ROLE_ETUDIANT";}', 0, NULL, 'etudiant', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_880E0D76BF396750` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_211FE8206A24B1A2` FOREIGN KEY (`user_document_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_717E22E3BF396750` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `prof`
--
ALTER TABLE `prof`
  ADD CONSTRAINT `FK_5BBA70BBBF396750` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
