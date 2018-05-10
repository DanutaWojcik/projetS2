-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 10 mai 2018 à 13:32
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cnam_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `content`
--

CREATE TABLE `content` (
  `id_article` int(10) NOT NULL,
  `title_article` varchar(255) NOT NULL,
  `description_article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `content`
--

INSERT INTO `content` (`id_article`, `title_article`, `description_article`) VALUES
(1, 'HDNC pour le corps', '<h1>HDNC pour le corps</h1>\r\n<h2> Trois recettes basiques pour votre bien-être...</h2>\r\n            <div class=\"v3\">\r\n              <div class=\"gallery1\">\r\n                <img src=\"images/baume.jpg\" alt=\"baume\"/>\r\n                <div class=\"desc1\">\r\n                  <span id=\"recette\"><strong>Baume pour le corps multi-usage</strong></span><br/><br/><br/>\r\n                    Dans un bol, mélangez 4 c. à s. de <strong>HDNC</strong> avec une demi c. à c. de miel.\r\n                    Transferez ce mélange dans un petit bocal vide et fermez-le.<br/>\r\n                    Utilisez ce mélange comme baume pour le corps, directement après la douche sur la peau humide.<br/>\r\n                    Parfait aussi comme crème de rassage. Ce mélange retarde la repousse des poils, est antiseptique \r\n                    et protège la peau contre les irritations pendant et après le rassage.<br/>\r\n                    Votre peau est plus ferme, la cellulite et les vergitures diminuent.<br/>\r\n                    Trés bien aussi pour estomper les cicatrisses et pour accelérer la géurrison des bléssures et \r\n                    des brûlures superficielles. <br/>\r\n                    Parfum très agréable...\r\n                </div>\r\n              </div>\r\n              <div class=\"gallery1\">\r\n                <img src=\"images/scrub1.jpg\" alt=\"scrub\"/>\r\n                <div class=\"desc1\">\r\n                  <span id=\"recette\"><strong>Gommage au café</strong></span><br/>\r\n                    Mélangez 1 c.à s.  <strong>d\'huile de coco HDNC</strong><br/> avec 4 c.à s. \r\n                    de sucre roux et 2 c.à s. de marc de café.<br/>\r\n                    Appliquez sur la peau propre et humide, et massez pendant quelques minutes.<br/>\r\n                    Rincez et profitez de votre peau douce, ferme, hydratée et parfumée.\r\n                    <br/>\r\n                    Utilisez ce gommage une fois par semaine.<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>\r\n                </div>\r\n              </div>\r\n              <div class=\"gallery1\">\r\n                <img src=\"images/dentifrice1.jpg\" alt=\"dentifrice charbon\"/>\r\n                  <div class=\"desc1\">\r\n                    <span id=\"recette\"><strong>Dentifrice blanchissant</strong></span><br/>\r\n                      Mélangez 1 c.à s.  <strong>d\'huile de coco HDNC</strong> avec 1 c. à c. de poudre de charbon \r\n                      active trés fin. Brossez vos dents pendant quelques minutes, deux fois par semaine,\r\n                      avec cette melange.<br/>\r\n                      Ils deviendront plus blanches, les tâches vont disparaitre et vos gencives seront en\r\n                      plein forme grâce à \r\n                      <strong>l\'huile HDNC.</strong><br/>\r\n                      <br/><br/><br/><br/><br/><br/><br/><br/><br/>\r\n                      <br/><br/>\r\n                  </div>\r\n                </div>\r\n              </div>');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `content`
--
ALTER TABLE `content`
  MODIFY `id_article` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
