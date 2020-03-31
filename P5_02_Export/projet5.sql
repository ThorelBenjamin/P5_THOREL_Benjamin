-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 25 mars 2020 à 17:10
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet5`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_billet`
--

DROP TABLE IF EXISTS `t_billet`;
CREATE TABLE IF NOT EXISTS `t_billet` (
  `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BIL_DATE` date NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` varchar(3000) NOT NULL,
  PRIMARY KEY (`BIL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(1, '2020-03-22', 'Restez chez soi', 'Aucun événement aura lieu pendant la maintenance du site internet.Restez chez soi');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

DROP TABLE IF EXISTS `t_commentaire`;
CREATE TABLE IF NOT EXISTS `t_commentaire` (
  `COM_ID` int(10) NOT NULL,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(3000) NOT NULL,
  `Signalement` int(10) NOT NULL,
  `BIL_ID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_contact`
--

DROP TABLE IF EXISTS `t_contact`;
CREATE TABLE IF NOT EXISTS `t_contact` (
  `MESS_ID` int(10) NOT NULL AUTO_INCREMENT,
  `MESS_NOM` varchar(50) NOT NULL,
  `MESS_PRENOM` varchar(50) NOT NULL,
  `MESS_EMAIL` varchar(50) NOT NULL,
  `MESS_TITRE` varchar(100) NOT NULL,
  `MESS_CONTENU` varchar(500) NOT NULL,
  PRIMARY KEY (`MESS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_contact`
--

INSERT INTO `t_contact` (`MESS_ID`, `MESS_NOM`, `MESS_PRENOM`, `MESS_EMAIL`, `MESS_TITRE`, `MESS_CONTENU`) VALUES
(1, 'THOREL', 'Benjamin', 'contacts@benjaminthorel.fr', 'Test de la messagerie', 'Si tu vois ce message c\'est que tu a bien travaillé.');

-- --------------------------------------------------------

--
-- Structure de la table `t_information`
--

DROP TABLE IF EXISTS `t_information`;
CREATE TABLE IF NOT EXISTS `t_information` (
  `INF_ID` int(11) NOT NULL AUTO_INCREMENT,
  `INF_DATE` date NOT NULL,
  `INF_TITRE` varchar(100) NOT NULL,
  `INF_CONTENU` varchar(3000) NOT NULL,
  PRIMARY KEY (`INF_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_information`
--

INSERT INTO `t_information` (`INF_ID`, `INF_DATE`, `INF_TITRE`, `INF_CONTENU`) VALUES
(1, '2020-03-22', 'Maintenance du site', 'Aucun &eacute;v&eacute;nement aura lieu pendant la maintenance du site internet.'),
(2, '2020-03-22', 'Événement annulé  ', 'Suite au confinement les &eacute;v&eacute;nements sont annul&eacute;s.');

-- --------------------------------------------------------

--
-- Structure de la table `t_inscription`
--

DROP TABLE IF EXISTS `t_inscription`;
CREATE TABLE IF NOT EXISTS `t_inscription` (
  `INS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `INS_DATE` date NOT NULL,
  `INS_NOM` varchar(100) NOT NULL,
  `INS_PRENOM` varchar(100) NOT NULL,
  `INS_EMAIL` varchar(50) NOT NULL,
  `INS_TEL` int(10) NOT NULL,
  `INS_OPTION` varchar(50) NOT NULL,
  `INS_NOTE` varchar(3000) NOT NULL,
  PRIMARY KEY (`INS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_inscription`
--

INSERT INTO `t_inscription` (`INS_ID`, `INS_DATE`, `INS_NOM`, `INS_PRENOM`, `INS_EMAIL`, `INS_TEL`, `INS_OPTION`, `INS_NOTE`) VALUES
(3, '2020-03-24', 'THOREL', 'Benjamin', 'thorel.benjamin1@gmail.com', 640107537, 'Choisir un événement', 'hrhh');

-- --------------------------------------------------------

--
-- Structure de la table `t_jeux`
--

DROP TABLE IF EXISTS `t_jeux`;
CREATE TABLE IF NOT EXISTS `t_jeux` (
  `jeux_id` int(10) NOT NULL AUTO_INCREMENT,
  `jeux_genre` varchar(200) DEFAULT NULL,
  `jeux_genre_2` varchar(200) DEFAULT NULL,
  `jeux_genre_3` varchar(200) DEFAULT NULL,
  `jeux_duree` int(10) NOT NULL,
  `jeux_nbjoueurmax` int(10) NOT NULL,
  `jeux_nbjoueurmin` int(10) NOT NULL,
  `jeux_age` int(10) NOT NULL,
  `jeux_regle` varchar(3000) NOT NULL,
  `jeux_titre` varchar(100) NOT NULL,
  `jeux_lien` varchar(100) DEFAULT NULL,
  `jeux_auteur` varchar(50) DEFAULT NULL,
  `jeux_illustrateur` varchar(50) DEFAULT NULL,
  `jeux_editeur` varchar(50) DEFAULT NULL,
  `jeux_distributeur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`jeux_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_jeux`
--

INSERT INTO `t_jeux` (`jeux_id`, `jeux_genre`, `jeux_genre_2`, `jeux_genre_3`, `jeux_duree`, `jeux_nbjoueurmax`, `jeux_nbjoueurmin`, `jeux_age`, `jeux_regle`, `jeux_titre`, `jeux_lien`, `jeux_auteur`, `jeux_illustrateur`, `jeux_editeur`, `jeux_distributeur`) VALUES
(1, 'Ambiance', 'Coopératifs', 'Trahison', 45, 7, 3, 10, 'Tentez de vous échapper des Enfers, avec Cerbère à vos trousses ! Coopérez pour progresser vers la barque qui vous fera traverser le Styx. Mais attention, les places sont limitées… Combien de temps coopérerez-vous pour échapper à Cerbère, et quand déciderez-vous de trahir le groupe pour vous assurer une place dans la barque ?\r\n \r\nÀ votre tour, choisissez entre : vous avantager un peu au détriment du groupe, ou bien avantager le groupe mais en restant sur place. Si tout le monde privilégie l’entraide, il devient plus facile d’échapper à Cerbère. Mais souvent, il est trop tentant d’avancer seul et de laisser ses compagnons en pâture à la bête… Vous commencez la partie en coopérant, mais les places pour la victoire sont limitées. Et si Cerbère vous rattrape, il vous propose de gagner la partie en faisant échouer vos anciens compagnons ! Allez-vous faire confiance aux autre joueurs, même dans les pires moments, ou serez-vous le premier à trahir pour sauver votre peau ? « Cerbère » propose des retournements de situations épiques, met votre confiance à rude épreuve, et vous fait vivre des aventures marquantes. Vous n’avez pas fini de rappeler à vos compagnons d’infortune quelle crasse ils vous ont faite la dernière fois, ou avec quel acte héroïque vous avez sauvé le groupe !', 'Cerbère', 'https://www.laboitedejeu.fr/cerbere/', 'Pierre Buty', 'Pierre Ples & Jules Dubost', ' La boite de jeu & Origames', 'Blackrock'),
(2, 'Stratégie', 'Conquête', 'Réflexion ', 75, 5, 2, 8, 'Dans Small World, les joueurs luttent pour conquérir les régions d\'un monde où il n\'y a pas de place pour tous !\r\n\r\nConçu par Philippe Keyaerts dans la droite ligne du jeu Vinci™, primé à plusieurs reprises, Small World plongera les joueurs dans un monde habité par des nains, des mages, des amazones, des géants, des orcs et même des humains. Ces peuples luttent sans merci en envoyant leurs troupes à la conquête de nouvelles régions : les civilisations les plus faibles seront impitoyablement chassées du monde de Small World !\r\n\r\nEn choisissant la bonne combinaison entre les 14 Peuples et les 20 Pouvoirs Spéciaux au bon moment, les joueurs pourront étendre leur empire, souvent aux dépens de leurs voisins ! Cependant, leur civilisation finira par s\'essouffler - il leur faudra alors en choisir une autre pour remporter la victoire.', 'Smallworld', 'https://www.daysofwonder.com/smallworld/fr/', 'Philippe keyaerts', 'Miguel Coimbra, Cyrille Daujean', 'Days of wonder', NULL),
(3, 'Ambiance', 'Bluff', '', 15, 8, 2, 8, 'Une ville corrompue, soumise aux vices et avarices, est sous le contrôle de vils personnages. Le pouvoir est vacant, à vous de vous en emparer.\r\nVous disposez en secret de l’aide de deux personnages et par la ruse, la manipulation et le bluff, vous n’aurez qu’une obsession : éliminer tous les autres de votre chemin.\r\nÀ votre tour, vous pourrez user du pouvoir d’un des 6 personnages pour espionner, soudoyer, prendre ou voler de l’argent et assassiner vos adversaires...\r\nSi personne ne remet en doute votre parole, vous pourrez effectuer librement votre action, sinon un duel de bluff s’engagera et un seul en sortira vivant ! Serez-vous le dernier ?', 'Complots', 'https://www.ferti-games.com/complotsgamme', 'Rikki Tahta', 'Naïade', 'Ferti', NULL),
(4, 'Stratégie', 'Déduction', '', 30, 2, 2, 9, '1888 - Londres - Quartier de Whitechapel. La nuit recouvre les sombres ruelles de son manteau ténébreux. Jack se glisse dans l\'ombre… La fine fleur des enquêteurs de l\'époque s\'est réunie afin de le capturer avant qu\'il ne profite de l\'obscurité pour définitivement disparaître. Le piège se referme sur lui peu à peu… Mais Jack est malin. Il a usurpé l\'identité d\'un des enquêteurs… Les autres sauront-ils le démasquer?', 'Mr.Jack', 'http://www.hurricangames.com/game/mr-jack-london', 'Ludovic Maublanc, Bruno Cathala', 'Piero', 'Hurrican Games ', NULL),
(5, 'Stratégie', 'Course à la victoire', '', 45, 4, 2, 14, 'Depuis des siècles, des créatures règnent sans partage dans les profondeurs des océans. Leur Royaume, Abyss, est respecté par tous les peuples alliés, heureux d’y trouver une protection contre les redoutables monstres sous-marins.\r\nBientôt le Trône sera vacant...\r\nEt si c’était le moment de vous emparer ?\r\n\r\nLe temps presse ! Plus que quelques jours avant la nomination du futur monarque. Pour étendre votre influence et apparaître comme le seul et unique recours, explorez, recruter, contrôler...', 'Abyss', 'http://www.abyss-the-game.com', 'Charles Chevallier, Bruno Cathala', 'Xavier Colette', 'Bombyx', 'ASMODEE');

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur`
--

DROP TABLE IF EXISTS `t_utilisateur`;
CREATE TABLE IF NOT EXISTS `t_utilisateur` (
  `UTIL_ID` int(10) NOT NULL AUTO_INCREMENT,
  `UTIL_LOGIN` varchar(100) NOT NULL,
  `UTIL_MDP` varchar(100) NOT NULL,
  `UTIL_NOM` varchar(100) NOT NULL,
  `UTIL_PRENOM` varchar(100) NOT NULL,
  `UTIL_AGE` int(10) NOT NULL,
  `UTIL_EMAIL` varchar(100) NOT NULL,
  `UTIL_TELEPHONE` int(10) NOT NULL,
  PRIMARY KEY (`UTIL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_utilisateur`
--

INSERT INTO `t_utilisateur` (`UTIL_ID`, `UTIL_LOGIN`, `UTIL_MDP`, `UTIL_NOM`, `UTIL_PRENOM`, `UTIL_AGE`, `UTIL_EMAIL`, `UTIL_TELEPHONE`) VALUES
(1, 'T_benjamin', '$2y$10$Uy7e6kBjR.FsyOVrY7FdxebMM4NNFWc9f2R1VDN2gI5u1FQv3HYSq', 'THOREL', 'Benjamin', 21, 'contacts@benjaminthorel.fr', 601020304);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
