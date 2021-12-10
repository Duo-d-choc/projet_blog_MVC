-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 10 déc. 2021 à 16:25
-- Version du serveur : 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `my_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE `Article` (
  `id` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Article`
--

INSERT INTO `Article` (`id`, `id_user`, `title`, `content`, `date`) VALUES
(1, 1, 'Premier article', 'La première biographie d’Olaf Scholz paraît donc cette semaine en librairie. «On m’a appelé à la dernière minute pour la rédiger», raconte l’auteur, Lars Haider, rédacteur en chef du quotidien régional de Hambourg, Hamburger Abendblatt, qui l’a suivi et côtoyé pendant sept ans comme maire de la deuxième ville d’Allemagne. «On m’a laissé quinze jours pour livrer le texte», ajoute-t-il. Le journaliste se souvient d’avoir reçu en 2018 dans son bureau le futur chancelier, alors encore maire de Hambourg. Olaf Scholz, élu ce mercredi par le Bundestag, l’assemblée fédérale allemande, était venu faire ses adieux au journal avant de rejoindre la «grande coalition» de Merkel à Berlin comme ministre fédéral des Finances. «Il avait un plan très précis en tête, se souvient le journaliste. Conquérir la chancellerie ! Il y croyait dur comme fer.»', '2021-12-08 18:04:00'),
(2, 1, 'Second article', 'Merkel incarne ce à quoi les Allemands ont toujours aspiré depuis la fin de la guerre : la stabilité (qu’elle symbolise avec son losange formé par ses mains). Sa patience et sa recherche du compromis suscitent un grand respect y compris chez ses adversaires. Même les jeunes reconnaissent son talent de négociatrice. «Son style de gouvernance, conciliateur, serein, rassurant, a fini par déteindre sur eux», assure Klaus Hurrelmann, sociologue à la Hertie School de Berlin. Toujours habillée d’un uniforme (veste boutonnée de couleur sur pantalon noir), la chancelière est l’antithèse de la culture bling-bling. Le monde du luxe et de l’argent ne l’a jamais intéressée. Elle fait elle-même ses courses au supermarché, sans entourage, et, chaque année, passe inlassablement ses vacances au même endroit, dans le Tyrol du Sud, pour faire des randonnées. Des millions d’Allemands se reconnaissent à travers sa façon de vivre. Comme elle, ils n’aiment pas les changements.', '2021-12-08 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `Comment`
--

CREATE TABLE `Comment` (
  `id` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `id_article` int(6) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Comment`
--

INSERT INTO `Comment` (`id`, `id_user`, `id_article`, `content`, `date`) VALUES
(1, 1, 1, 'Super article !', '2021-12-09 10:17:47'),
(2, 2, 1, 'Je suis pas vraiment d\'accord...', '2021-12-08 07:17:47'),
(3, 1, 2, 'Merci pour l\'article', '2021-12-09 17:17:47'),
(4, 1, 1, 'Beaucoup de bla bla', '2021-12-10 13:31:31'),
(5, 1, 1, '0', '2021-12-10 15:24:35'),
(6, 1, 1, 'faezfdza', '2021-12-10 15:40:55'),
(7, 1, 1, 'tagazog', '2021-12-10 15:41:04');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(6) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`id`, `pseudo`, `email`, `password`, `status`) VALUES
(1, 'cdoust', 'cdoustalet@gmail.com', 'tressecure123', 'admin'),
(2, 'nicofo', 'nicolas_foessel@gmail.com', 'encoresecure123', 'standard');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Article`
--
ALTER TABLE `Article`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
