-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 25 mai 2018 à 23:37
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
  `id_article` int(4) NOT NULL,
  `date_article` varchar(25) NOT NULL,
  `title_article` varchar(255) NOT NULL,
  `description_article` text NOT NULL,
  `auteur_modif` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `content`
--

INSERT INTO `content` (`id_article`, `date_article`, `title_article`, `description_article`, `auteur_modif`) VALUES
(1, '25/05/2018', 'HDNC pour le corps', '<h1>HDNC pour le corps</h1>\r\n<h2> Trois recettes basiques pour votre bien-être...</h2>\r\n            <div class=\"v3\">\r\n              <div class=\"gallery1\">\r\n                <img src=\"images/baume.jpg\" alt=\"baume\"/>\r\n                <div class=\"desc1\">\r\n                  <span id=\"recette\"><strong>Baume pour le corps multi-usage</strong></span><br/><br/><br/>\r\n                    Dans un bol, mélangez 4 c. à s. de <strong>HDNC</strong> avec une demi c. à c. de miel.\r\n                    Transferez ce mélange dans un petit bocal vide et fermez-le.<br/>\r\n                    Utilisez ce mélange comme baume pour le corps, directement après la douche sur la peau humide.<br/>\r\n                    Parfait aussi comme crème de rassage. Ce mélange retarde la repousse des poils, est antiseptique \r\n                    et protège la peau contre les irritations pendant et après le rassage.<br/>\r\n                    Votre peau est plus ferme, la cellulite et les vergitures diminuent.<br/>\r\n                    Trés bien aussi pour estomper les cicatrisses et pour accelérer la géurrison des bléssures et \r\n                    des brûlures superficielles. <br/>\r\n                    Parfum très agréable...\r\n                </div>\r\n              </div>\r\n              <div class=\"gallery1\">\r\n                <img src=\"images/scrub1.jpg\" alt=\"scrub\"/>\r\n                <div class=\"desc1\">\r\n                  <span id=\"recette\"><strong>Gommage au café</strong></span><br/>\r\n                    Mélangez 1 c.à s.  <strong>d\'huile de coco HDNC</strong><br/> avec 4 c.à s. \r\n                    de sucre roux et 2 c.à s. de marc de café.<br/>\r\n                    Appliquez sur la peau propre et humide, et massez pendant quelques minutes.<br/>\r\n                    Rincez et profitez de votre peau douce, ferme, hydratée et parfumée.\r\n                    <br/>\r\n                    Utilisez ce gommage une fois par semaine.<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>\r\n                </div>\r\n              </div>\r\n              <div class=\"gallery1\">\r\n                <img src=\"images/dentifrice1.jpg\" alt=\"dentifrice charbon\"/>\r\n                  <div class=\"desc1\">\r\n                    <span id=\"recette\"><strong>Dentifrice blanchissant</strong></span><br/>\r\n                      Mélangez 1 c.à s.  <strong>d\'huile de coco HDNC</strong> avec 1 c. à c. de poudre de charbon \r\n                      active trés fin. Brossez vos dents pendant quelques minutes, deux fois par semaine,\r\n                      avec cette melange.<br/>\r\n                      Ils deviendront plus blanches, les tâches vont disparaitre et vos gencives seront en\r\n                      plein forme grâce à \r\n                      <strong>l\'huile HDNC.</strong><br/>\r\n                      <br/><br/><br/><br/><br/><br/><br/><br/><br/>\r\n                      <br/><br/>\r\n                  </div>\r\n                </div>\r\n              </div>', 'DanutaWo'),
(2, '25/05/2018', ' HDNC Dans Les Plats Salées', '<h1> HDNC Dans Les Plats Salées</h1>\r\n        <h2> HDNC est très bonne pour la cuisson mais aussi pour les tartines</h2>\r\n          <div class=\"v3\">\r\n            <div class=\"gallery1\">\r\n              <img src=\"images/curry.jpg\" alt=\"curry thai\"/>\r\n                <div class=\"desc1\">\r\n                  <span id=\"recette\"><strong> Curry Thaï Rouge</strong></span><br/>\r\n                    Pour 4-5 personnes<br/>\r\n                    Faites revenir une cuillère de curry rouge Thaï, sur une cuillère <strong> d\'huile HDNC</strong>.\r\n                    Ajoutez 1kg de filet de poulet coupé en dés. Mélangez bien.<br/>\r\n                    Après environ 5 minutes, ajoutez dans le poulet le mélange de légumes asiatiques surgélés.\r\n                    Après 10 minutes, ajoutez 400ml de crème de coco et 2 à 4 c. à s. de sauce soja salée (selon le goût)<br/>\r\n                    Mélangez. C\'est prêt!<br/>\r\n                    A servir avec le riz blanc.<br/>\r\n                    <br/><br/><br/>\r\n                </div>\r\n            </div>\r\n            <div class=\"gallery1\">\r\n              <img src=\"images/frites.jpg\" alt=\"frites\"/>\r\n                <div class=\"desc1\">\r\n                  <span id=\"recette\"><strong>Les frites de potimarron</strong></span><br/>\r\n                    Pour environ 4 personnes<br>\r\n                    Lavez bien et videz (sans éplucher), le potimarron d\'une taille moyenne.<br/>\r\n                    Coupez le en grosses frites.<br/>\r\n                    Prenez 1 c. à s.  <strong>d\'huile coco HDNC</strong> mélangez avec 1 c. à c. d\'ail en semoule,\r\n                    1 c. à c. de gros sel et 1 c. à c. d\'épices 5 saveurs.<br/>\r\n                    Mélangez tout cela avecle potimarron, placez à plat sur une plaque de cuisson et enfournez à\r\n                    210°C (thermostat 7), chaleur tournante, pendant environ 20-25 minutes.<br/>\r\n                    Elle sont idéales pour accompagner les viandes grillées. \r\n                </div>\r\n              </div>\r\n              <div class=\"gallery1\">\r\n                <img src=\"images/tartine.jpg\" alt=\"tartine\"/>\r\n                  <div class=\"desc1\"><span id=\"recette\"><strong>Tartine à l\'ognion rouge et tomate</strong></span><br/>\r\n                    Pour une tartine.<br/>\r\n                    Prenez une portion de votre pain favori (complèt de préfèrence). \r\n                    Etalez bien une portion (quantité selon goût) <strong>d\'huile de noix coco HDNC.</strong><br/>\r\n                    Coupez les tomates en tranches fines et l\'ognion en demi-lunes très fines.<br/>\r\n                    Posez les tomates, puis les ognions sur votre tartine. Salez, poivrez et dégustez!\r\n                    <br/><br/><br/><br/><br/><br/>\r\n              </div>\r\n            </div>\r\n          </div>', 'DanutaWo'),
(3, '25/05/2018', 'HDNC pour les cheveux', '<h1> HDNC pour les cheveux</h1>\r\n        <h2> Une recette, trois usages différentes...</h2>\r\n          <p>Mèlangez 2 c. à s.  <strong>d\'huile HDNC</strong> avec 2 gouttes d\'huile de ricin.\r\n            Utilisez cette préparation  en trois façons differentes, selon vos besoins.\r\n          </p>\r\n      <div class=\"v3\">\r\n        <div class=\"gallery1\">\r\n          <img src=\"images/cheveux1.jpg\" alt=\"pointes en forme\"/>\r\n          <div class=\"desc1\">\r\n            <span id=\"recette\"><strong>Un masque pour les pointes en plein forme</strong></span><br/>\r\n              Humidifiez les cheveux avec l\'eau tiède et appliquez\r\n              le mélange <strong>d\'huile HDNC</strong> avec l\'huile de ricin,\r\n              jusqu’à ce qu’ils soient complètement recouverts.<br/>\r\n              Laissez agir pendant minimum une heure, puis lavez vos cheveux comme d\'habitude.\r\n              Utilisez une fois par semaine. <br/><br/>\r\n          </div>\r\n        </div>\r\n        <div class=\"gallery1\"> \r\n          <img src=\"images/lissage.jpg\" alt=\"lissage\"/>\r\n          <div class=\"desc1\">\r\n            <span id=\"recette\"><strong>Pour les cheveux lisses</strong></span><br/>\r\n              Ce mélange <strong>d\'huile HDNC</strong> et d\'huile de ricin est un produit de lissage trés efficasse<br/>\r\n              Prenez simplement une goutte et chauffez dans vos mains, ensuite appliquez sur tout la chevelure, sauf sur les racines.<br/>\r\n              Brossez, séchez et profitez des cheveux douces et lisses.<br/>\r\n              <br/>\r\n          </div>\r\n        </div>\r\n        <div class=\"gallery1\">\r\n          <img src=\"images/bouclettes.jpg\" alt=\"bouclettes\"/>\r\n          <div class=\"desc1\">\r\n            <span id=\"recette\"><strong>Pour discipliner les boucles</strong></span><br/>\r\n              Prennez une goutte de ce mélange <strong>d\'huile HDNC</strong> \r\n              et d\'huile de ricin. Chauffez dans vos mains et\r\n              appliquez sur toute la chevelure sauf sur les racines.<br/>\r\n              Formez vos boucles et laissez sécher à l\'air libre. Vos cheveux seront bien\r\n              nourris, les boucles bien définis et disciplinés.\r\n              <br/><br/>\r\n          </div>\r\n        </div>\r\n      </div>', 'DanutaWo'),
(4, '25/05/2018', 'HDNC Dans La Patisserie', '<h1> HDNC Dans La Patisserie</h1>\r\n        <h2> Les grandes classiques deviennent bons pour la santé!</h2>	\r\n          <div class=\"v3\">\r\n            <div class=\"gallery1\">\r\n              <img src=\"images/gateau1.jpg\" alt=\"moelleux au chocolat\"/>\r\n                <div class=\"desc1\">\r\n                  <span id=\"recette\"><strong>Moelleux au chocolat et coco</strong></span><br/>\r\n                    Battez 4 oeufs avec 200g de sucre. Ajoutez 100g de farine de ble ou de farine de noix de coco. Mélangez<br/>\r\n                    Faitez fondre 200g de chocolat noir dessert avec 200g <strong>d\'huile de coco HDNC.</strong><br/>\r\n                    Mélangez, mettez dans une moule à cake et enfournez à 180°C (thermostat 6), chaleur tournante pendant 40 min.<br/>\r\n                    Laissez refroidir et mettez au refrigirateur pour environ 1h avant dégustation.<br/><br/><br/>\r\n                </div>\r\n              </div>\r\n              <div class=\"gallery1\">\r\n                <img src=\"images/gateau4.jpg\" alt=\"gateau citron\"/>\r\n                  <div class=\"desc1\">\r\n                    <span id=\"recette\"><strong>Gâteau au yaourt citron</strong></span><br/>\r\n                      Mélangez 3 pots (de yaourt) de farine, un sachet de levure chimique et 1 pot de sucre.<br/>\r\n                      Ajoutez 4 oeufs. Bien remuez. Incorporez un demi pot <strong>d\'huile de coco HDNC</strong>.\r\n                      Ensuite, versez un pot de yaourt. Bien mélangez tout pour obtenir une pâte onctueuse.<br/>\r\n                      Parfumez avec un zeste de citron.<br/>\r\n                      Versez dans un moule à monqué et enfournez à 180°C (thermostat 6) pendant env. 30 min.<br/>\r\n                      <br/><br/><br/>\r\n                  </div>\r\n                </div>\r\n                <div class=\"gallery1\">\r\n                  <img src=\"images/gateau2.jpg\" alt=\"petits gateaux\"/>\r\n                  <div class=\"desc1\">\r\n                    <span id=\"recette\"><strong>Les gâteaux d\'avoine</strong></span><br/>\r\n                      2 verres de flocons d\'avoine mélangez avec 1 c. à s.  <strong>d\'huile de coco HDNC</strong>,\r\n                      4 c. à s. de miel et 1 c. à s. de poudre de cacao.\r\n                      Ajoutez petit à petit de l\'eau dans cette préparation en mélangeant.</br>\r\n                      Formez les petits gâteaux et placez les sur une plaque. \r\n                      Enfournez à 150°C (thermostat 5) pendant 15-20 minutes.\r\n                      </br><br/></br></br></br><br/>\r\n                  </div>\r\n                </div>\r\n              </div>', 'DanutaWo'),
(7, '25/05/2018', 'sdfsdfs', 'dsfsfsd\'rt', 'DanutaWo');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `name_message` varchar(255) NOT NULL,
  `content_message` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `nom`) VALUES
(1, 'DanutaWo', 'Danuta1980', 'Wojcik'),
(2, 'philippe', 'Phil-2016', 'Bouquet');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `content`
--
ALTER TABLE `content`
  MODIFY `id_article` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
