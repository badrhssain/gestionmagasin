-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 mars 2022 à 13:14
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionmagasin`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `telephone` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `pass` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `adresse`, `telephone`, `email`, `pass`) VALUES
(4, 'hssain', 'badr', 'tanger', '0612', 'hssain.badr.solicode@gmail.com', 'badr123'),
(5, 'hssain', 'badr', 'tanger', '0612', 'hssain.badr.solicode@gmail.com', 'badr123'),
(6, 'hssain', 'badr', 'tanger', '0612', 'hssain.badr.solicode@gmail.com', 'badr123'),
(7, 'hssain', 'badr', 'tanger', '0612', 'hssain.badr.solicode@gmail.com', 'badr123');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `adresseLivraison` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `detailscommande`
--

CREATE TABLE `detailscommande` (
  `idCommande` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `libelle` varchar(254) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL,
  `prix` decimal(8,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `libelle`, `description`, `prix`, `stock`, `image`) VALUES
(1, '3d Hydra Lipgloss\r\n', 'Brillant à lèvres émollient effet 3D, pour un résultat brillant. Sa texture, douce et sensorielle, fond sur vos lèvres et les laisse lisses et lumineuses. Sa formule contient de l’extrait de Bidens', '8.00', 100, 'images/pr1.png'),
(2, 'Skin Tone Concealer', 'La nouvelle formule fluide camoufle imperfections et cernes, en garantissant une couvrance moyenne et un estompage parfait. Le résultat ? Un maquillage effet sans maquillage.', '5.00', 120, 'images/pr2.png'),
(3, 'invisible touch face fixing powder', 'Sa texture crée un voile transparent au fini mat. À l’application, elle adhère parfaitement à votre peau pour un effet « seconde peau » délicat et impalpable. Toucher doux, agréablement velouté.', '12.99', NULL, 'images/pr3.png'),
(4, 'Blossoming Beauty Flower Escape', 'Ses particularités :\r\n - Sa formule enrichie en pétales de bleuet est délicatement parfumée de notes florales.\r\n - Sa texture douce et onctueuse nourrit vos lèvres et leur procure une sensation de confort tout en les recouvrant d’un voile légèrement bril', '9.99', 200, 'images/pr4.png'),
(5, 'Unexpected Paradise 3d Blush', 'Ses particularités :\r\n - Enrichie en beurre de mangue, sa texture légère, soyeuse et pigmentée est extrêmement agréable à appliquer.\r\n - Il est facile à estomper, pour un résultat modulable allant de léger à intense.', '5.99', 0, 'images/pr5.png'),
(6, 'Smart Eyes And Face Palette', 'Palette d\'ombres à paupières et de poudres visage.\r\n\r\nPalette composée d\'une poudre bronzante, d\'un fard à joues et de 8 ombres à paupières, dont 4 au fini mat et 4 au fini nacré', '7.49', 50, 'images/pr6.png'),
(7, ' Rosy Glow Potion', 'Produit 2 en 1 sérum et base aux propriétés hydratantes.\r\n\r\nParfait pour :\r\nhydrater la peau du visage, donner un éclat fabuleux au teint et faciliter l’application du maquillage.', '7.49', 50, 'images/pr7.png'),
(8, 'Building Base Coat Mascara', 'Une base de mascara efficace, capable d\'apporter 169 % de volume en plus par rapport aux mascaras habituels.\r\n Sa formule crème enrichie de poudres volumisatrices, donne corps et structure à vos cils, garantissant leur souplesse et facilitant l\'applicati', '3.99', 50, 'images/pr8.png'),
(9, 'Blossoming Beauty Floral Blush\r\n', 'Blush au fini mat et nacré.\r\n\r\nParfait pour :\r\n- raviver le teint et jouer sur la lumière et les volumes, sculptant ainsi les traits du visage.', '14.99', 100, 'images/pr9.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD PRIMARY KEY (`idCommande`,`idProduit`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Contraintes pour la table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD CONSTRAINT `detailscommande_ibfk_1` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `detailscommande_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
