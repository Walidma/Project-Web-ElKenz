-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mer 25 Mai 2016 à 08:42
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `tut`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(5, 'white dress', 12),
(6, 'yellow dress', 14),
(7, 'gold ring', 1200),
(8, 'diamond ring', 4500),
(9, 'Air Jordan for women', 124),
(10, 'Air jordan for men', 110),
(11, 'Macbook pro', 1400),
(12, 'Hp pavillon', 950),
(15, 'Black suit', 400),
(16, 'Blue suit', 600),
(17, 'Black shirt', 16),
(18, 'Yellow shirt', 10);

-- --------------------------------------------------------

--
-- Structure de la table `ProductsElec`
--

CREATE TABLE `ProductsElec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ProductsElec`
--

INSERT INTO `ProductsElec` (`id`, `name`, `price`) VALUES
(11, 'macbook pro', 1400),
(12, 'hp pavillon', 980);

-- --------------------------------------------------------

--
-- Structure de la table `ProductsFashion`
--

CREATE TABLE `ProductsFashion` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ProductsFashion`
--

INSERT INTO `ProductsFashion` (`id`, `name`, `price`) VALUES
(5, 'white dress', 12),
(6, 'yellow dress', 14),
(15, 'Black suit', 400),
(16, 'Blue suit', 600),
(17, 'Black shirt', 16),
(18, 'Yellow shirt', 10);

-- --------------------------------------------------------

--
-- Structure de la table `productsJewelry`
--

CREATE TABLE `productsJewelry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `productsJewelry`
--

INSERT INTO `productsJewelry` (`id`, `name`, `price`) VALUES
(7, 'gold ring', 1200),
(8, 'diamond ring', 4500);

-- --------------------------------------------------------

--
-- Structure de la table `productsShoes`
--

CREATE TABLE `productsShoes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `productsShoes`
--

INSERT INTO `productsShoes` (`id`, `name`, `price`) VALUES
(9, 'air Jordan women', 124),
(10, 'Air Jordan men', 110);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ProductsElec`
--
ALTER TABLE `ProductsElec`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ProductsFashion`
--
ALTER TABLE `ProductsFashion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productsJewelry`
--
ALTER TABLE `productsJewelry`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productsShoes`
--
ALTER TABLE `productsShoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `ProductsElec`
--
ALTER TABLE `ProductsElec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `ProductsFashion`
--
ALTER TABLE `ProductsFashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `productsJewelry`
--
ALTER TABLE `productsJewelry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `productsShoes`
--
ALTER TABLE `productsShoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;