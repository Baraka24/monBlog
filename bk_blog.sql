-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 02 mai 2022 à 23:19
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bk_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `blogger`
--

CREATE TABLE `blogger` (
  `id` int(11) NOT NULL,
  `noms` text NOT NULL,
  `facebook` text NOT NULL,
  `whatsapp` text NOT NULL,
  `twitter` text NOT NULL,
  `phone` text NOT NULL,
  `gmail` text NOT NULL,
  `pwd` text NOT NULL,
  `profile` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blogger`
--

INSERT INTO `blogger` (`id`, `noms`, `facebook`, `whatsapp`, `twitter`, `phone`, `gmail`, `pwd`, `profile`, `description`) VALUES
(1, 'Daniel', 'https://free.facebook.com/baraka.kinywa?ref_component=mfreebasic_home_header&ref_page=%2Fwap%2Fhome.php&refid=8', '+243993342115', 'https://twitter.com/KinywaBaraka', '0993342115', 'bkinywa24@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'image/barolanded.JPG', 'Un developpeur prêt à vous servir à tout temps pour vos projets                                                                                                                                                               ');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `date_hour` datetime NOT NULL,
  `noms` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `photo` text NOT NULL,
  `categorie` int(11) NOT NULL,
  `date_published` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `libelle`, `photo`, `categorie`, `date_published`) VALUES
(1, 'Apprendre les bases du HTML et CSS', 'imagesFormations/Codeweb.jpeg', 1, '2022-04-08'),
(2, 'Apprendre PHP de A-Z', 'imagesFormations/Code.jpg', 2, '2022-04-13'),
(3, 'Comprendre Javascript pour les nulls, formation complète.', '', 3, '2022-04-13'),
(6, 'ok', 'imagesFormations/kin.jpg', 9, '2022-04-26'),
(7, 'CCA5', 'imagesFormations/Happy-New-Year-Wishes-for-Boss-1.jpg', 10, '2022-04-26');

-- --------------------------------------------------------

--
-- Structure de la table `formations_categories`
--

CREATE TABLE `formations_categories` (
  `id` int(11) NOT NULL,
  `categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formations_categories`
--

INSERT INTO `formations_categories` (`id`, `categorie`) VALUES
(1, 'HTML&CSS'),
(2, 'PHP'),
(3, 'JS'),
(4, 'NodeJs'),
(9, 'Piratage'),
(10, 'Computer<br />\r\nTech');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `postnom` varchar(25) NOT NULL,
  `id_formation` int(11) NOT NULL,
  `numTel` varchar(20) NOT NULL,
  `date_inscription` date NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `message` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `postnom`, `id_formation`, `numTel`, `date_inscription`, `adresse`, `message`) VALUES
(2, 'Sarah', 'Vinywasiki', 2, '0979072042', '2022-04-21', 'KIKUNGU', ''),
(3, 'Kimbesa', 'Merveille', 1, '+243993342115', '2022-04-21', 'Beni', 'J\'aimerai suivre cette formation en ligne. Comment puis je?');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_blogger` int(11) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `date_hour` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `id_blogger`, `description`, `content`, `image`, `date_hour`) VALUES
(2, 1, 'Formation PHP1', 'Salut! Nous organisons une formation 1pour débutants en PHP.', 'imagesNouvelles/Code web.jpeg', '2022-04-14 19:53:00'),
(4, 1, 'ok', '5kj', 'imagesNouvelles/Happy-New-Year-Wishes-for-Boss-1.jpg', '2022-04-30 01:04:00'),
(6, 1, 'Formation MSWORD', 'Nous débutons la formation', 'imagesNouvelles/abstract-blurred-people-doing-workshop-in-training-AL3AYBJ.jpg', '2022-05-02 19:05:56');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `id_blogger` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `id_blogger`) VALUES
(2, 'programmeurD', 1),
(3, 'Formateur C#', 1),
(4, 'Formateur PHP', 1),
(5, 'Enseignant', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blogger`
--
ALTER TABLE `blogger`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations_categories`
--
ALTER TABLE `formations_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blogger`
--
ALTER TABLE `blogger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `formations_categories`
--
ALTER TABLE `formations_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
