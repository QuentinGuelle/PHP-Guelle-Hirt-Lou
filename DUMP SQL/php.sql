-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 19 Mars 2020 à 19:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `resumes`
--

CREATE TABLE IF NOT EXISTS `resumes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `resumes`
--

INSERT INTO `resumes` (`id`, `description`) VALUES
(1, 'Bienvenue dans notre portfolio un peu particulier. En effet, ce n''est pas un portfolio de nos projets, mais de nos exploits sur Warzone. Notre équipe n''est pas la BAC, le GIGN, ou le RAID. Nous sommes la [BAC19], la Brigade Anti Covid-19. Nous intervenons partout dans Verdansk (map de Warzone) pour éliminer chaque porteur du virus.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) CHARACTER SET latin1 NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$Ox7ZW96z73/1JMHaaCOR6Oer8V5n4F/1iOeAMzWw0GiD5BsNPBlFy');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `works`
--

INSERT INTO `works` (`id`, `title`, `description`) VALUES
(14, 'Titre du premier article', 'Ceci et la description du premier article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du premier article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du premier article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du premier article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du premier article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. '),
(15, 'Titre du deuxième article', 'Ceci et la description du deuxième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du deuxième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du deuxième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du deuxième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du deuxième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. '),
(16, 'Titre du troisième article', 'Ceci et la description du troisième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du troisième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du troisième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du troisième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du troisième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. '),
(17, 'Titre du quatrième article', 'Ceci et la description du quatrième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du quatrième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du quatrième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du quatrième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du quatrième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. '),
(18, 'Titre du cinquième article', 'Ceci et la description du cinquième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du cinquième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du cinquième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du cinquième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du cinquième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. '),
(19, 'Titre du sixième article', 'Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. '),
(20, 'Titre du septième article', 'Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du sixième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. '),
(21, 'Titre du huitième article', 'Ceci et la description du huitième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du huitième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du huitième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du huitième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. Ceci et la description du huitième article. Vous pouvez la lire, ou vous pouvez passer à l''article suivant. ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
