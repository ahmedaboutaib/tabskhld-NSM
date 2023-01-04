-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 déc. 2022 à 15:00
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `miniprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idam` int(11) NOT NULL,
  `pseudo` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `modpass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idam`, `pseudo`, `email`, `modpass`) VALUES
(1, 'oum', 'oumayma@oumayma.com', 'oumayma.oumayma'),
(2, 'admin', 'admine@admine.com', 'admine');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `motedpasse` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `adresse`, `tel`, `email`, `motedpasse`) VALUES
(1, 'rom', 'oumayma', 'maroc', '06453317842', 'rom.oumayma@gmail.com', 'oumaymarom'),
(12, 'CLIENT', 'CLIENT', 'MAROC', '0603124845', 'client@gmail.com', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `pannel`
--

CREATE TABLE `pannel` (
  `idpro` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `datepro` datetime NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pannel`
--

INSERT INTO `pannel` (`idpro`, `id`, `datepro`, `qte`) VALUES
(1, 3, '2022-12-09 20:40:39', 7),
(1, 4, '2022-12-09 20:40:48', 2),
(2, 12, '2022-12-15 14:53:55', 2);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idpro` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `nbStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idpro`, `image`, `nom`, `prix`, `description`, `nbStock`) VALUES
(1, 'https://i.pinimg.com/564x/f2/9c/b0/f29cb050827409a1b7726fa65b625578.jpg', 'tapie', 2000, 'Tapis berbere multicolore- 150 x 220 cm ', 10),
(2, 'https://i.pinimg.com/564x/cd/af/d4/cdafd49f96f54356f550515c57e7b81b.jpg', 'tapis', 2500, 'tapis berbere style OURIKA-200x150cm', 8),
(3, 'https://i.pinimg.com/564x/cf/23/f9/cf23f932cc8260faf85ee9d77c39f8d3.jpg', 'tapie', 1500, 'Tapis berbere blanc - 150 x 220 cm ', 4),
(4, 'https://i.pinimg.com/564x/a5/1b/30/a51b30df66a68899b66f4c7a1b7cb7fb.jpg', 'tapis', 1800, 'tapis maroccain blanc et noire', 5);

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `idpro` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Datepro` date NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`idpro`, `id`, `Datepro`, `qte`) VALUES
(2, 1, '2022-12-09', 5),
(3, 1, '2022-12-09', 4),
(3, 12, '2022-12-15', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idam`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pannel`
--
ALTER TABLE `pannel`
  ADD PRIMARY KEY (`idpro`,`id`),
  ADD KEY `idpro` (`idpro`,`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idpro`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`idpro`,`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `idpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
