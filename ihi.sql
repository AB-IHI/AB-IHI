-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 11 oct. 2022 à 17:58
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ihi`
--

-- --------------------------------------------------------

--
-- Structure de la table `beneficiaire`
--

CREATE TABLE `beneficiaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `passport` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `id_dossier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `beneficiaire`
--

INSERT INTO `beneficiaire` (`id`, `nom`, `prenom`, `passport`, `date`, `pays`, `adress`, `photo`, `telephone`, `id_dossier`) VALUES
(2, 'b', 'b', 'bb', 'b', 'b', 'b', 'b', '1', 3),
(3, 'b', 'b', 'bb', 'b', 'b', 'b', 'b', '1', 4);

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

CREATE TABLE `dossier` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `id_benevole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dossier`
--

INSERT INTO `dossier` (`id`, `nom`, `id_benevole`) VALUES
(3, 'ksqjd', 6),
(4, '2', 6),
(5, 'lksqdjj', 6),
(6, 'uh uh', 8),
(7, 'uh uh', 8),
(8, 'uh uh', 8),
(9, 'uh uh', 8),
(10, 'dqf', 8);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `passport` varchar(11) DEFAULT NULL,
  `date` varchar(11) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `adress` varchar(300) DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `telephone` int(11) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `rib` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `prenom`, `nom`, `passport`, `date`, `pays`, `adress`, `email`, `telephone`, `photo`, `rib`) VALUES
(6, 'qsdf', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 1, 'b', NULL),
(7, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 1, 'b', NULL),
(8, 'uh', '$2y$10$3zFhBCy4sZ10alcN32mEfeLZ3kZB1haeJUoyUa.6rUkdQ1ZtSxhge', 'uh', 'uh', '451', '152', 'ogaboga', '89, washington street', 'qsdf@sqdf.fd', 6354, NULL, '1234567891234567');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dossier` (`id_dossier`);

--
-- Index pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_benevole` (`id_benevole`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  ADD CONSTRAINT `beneficiaire_ibfk_1` FOREIGN KEY (`id_dossier`) REFERENCES `dossier` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD CONSTRAINT `dossier_ibfk_2` FOREIGN KEY (`id_benevole`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
