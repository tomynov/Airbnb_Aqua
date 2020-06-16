-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 juin 2020 à 11:51
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aquabnb`
--

-- --------------------------------------------------------

--
-- Structure de la table `hebergement`
--

CREATE TABLE `hebergement` (
  `id_hebergement` int(4) NOT NULL,
  `id_users` int(4) DEFAULT NULL,
  `title` varchar(30) NOT NULL,
  `desc_hebergement` varchar(1000) NOT NULL,
  `nbr_place` int(2) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `prix` int(4) NOT NULL,
  `couchage` varchar(250) NOT NULL,
  `equipement` varchar(500) NOT NULL,
  `equipement_1` varchar(250) DEFAULT NULL,
  `equipement_2` varchar(250) DEFAULT NULL,
  `equipement_3` varchar(250) DEFAULT NULL,
  `equipement_4` varchar(250) DEFAULT NULL,
  `equipement_5` varchar(250) DEFAULT NULL,
  `equipement_6` varchar(250) DEFAULT NULL,
  `equipement_7` varchar(250) DEFAULT NULL,
  `img_principal` varchar(20) DEFAULT 'maison_7',
  `img2` varchar(20) DEFAULT NULL,
  `img3` varchar(20) DEFAULT NULL,
  `img4` varchar(20) DEFAULT NULL,
  `deletion_flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `hebergement`
--

INSERT INTO `hebergement` (`id_hebergement`, `id_users`, `title`, `desc_hebergement`, `nbr_place`, `adresse`, `prix`, `couchage`, `equipement`, `equipement_1`, `equipement_2`, `equipement_3`, `equipement_4`, `equipement_5`, `equipement_6`, `equipement_7`, `img_principal`, `img2`, `img3`, `img4`, `deletion_flag`) VALUES
(2, 1, 'P&eacute;niche sur l&#039;oc&a', 'Venez appr&eacute;cier la nature au gr&eacute; des vagues sur notre p&eacute;niche accueillant une famille. Cette immense coin permettra de raviver vos instinct.', 4, '8 lac Gr&eacute;', 120, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'maison_2', NULL, NULL, NULL, 1),
(6, 1, 'Maison en bois sur l&#039;eau', 'Magnifique maison spacieuse sur l&#039;eau. R&eacute;nover en 2018, cette maison est parfaite pour vous ressourcer et &agrave; 15min en voiture de la ville', 4, 'lac gr&eacute;', 78, '6 voyageurs, 3 chambres, 2 lits double et 2 lits simple', 'Wi-Fi', 'T&eacute;l&eacute;vision', 'Chauffage', 'Lave-vaisselle', 'Ustensiles de cuisine', 'R&eacute;frig&eacute;rateur', 'Micro-ondes', 'Draps', 'maison_1', NULL, NULL, NULL, 0),
(7, 1, 'P&eacute;niche sur l&#039;oc&a', 'Venez appr&eacute;cier la nature au gr&eacute; des vagues sur notre p&eacute;niche accueillant une famille. Cette immense coin permettra de raviver vos instinct.', 5, 'Poirier Fontaine', 100, '3 chambres, 1 lits double et 4 lits simple', 'Wi-Fi', 'T&eacute;l&eacute;vision', 'Chauffage', 'Lave-vaisselle', 'Ustensiles de cuisine', 'R&eacute;frig&eacute;rateur', 'Micro-ondes', 'Draps', 'peniche_2', NULL, NULL, NULL, 0),
(8, 6, 'test annonce', 'la desc', 4, 'lac gr&eacute;', 120, '3 chambres, 1 lits double et 3 lits simple', 'Wi-Fi', 'T&eacute;l&eacute;vision', 'Chauffage', 'Lave-vaisselle', 'Ustensiles de cuisine', 'R&eacute;frig&eacute;rateur', 'Micro-ondes', 'Draps', 'maison_7', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(4) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse_mail` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `deletion_flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `nom`, `prenom`, `adresse_mail`, `password_user`, `confirm_password`, `deletion_flag`) VALUES
(1, 'Dupond', 'Stephane', 'jacques.dupond@test.com', 'nouveaumdp', 'nouveaumdp', 0),
(2, 'Dupont', 'Jean', 'jean.dupont@test.com', 'testde', 'testde', 0),
(4, 'Goldman', 'Jacques', 'goldman.jacques@gmai.com', 'testmdp', 'testmdp', 0),
(5, 'Gainsbourg', 'Serge', 'serge.gainsbourg@gmai.com', 'mdpdeserge', 'mdpdeserge', 0),
(6, 'Escobar', 'Paulo', 'escobar.pablo@gmai.com', 'mdpdepablo', 'mdpdepablo', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD PRIMARY KEY (`id_hebergement`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hebergement`
--
ALTER TABLE `hebergement`
  MODIFY `id_hebergement` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD CONSTRAINT `hebergement_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
