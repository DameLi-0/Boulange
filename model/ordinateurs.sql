-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 06 mars 2022 à 10:32
-- Version du serveur :  5.7.31
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `ordinateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `ordi`
--

DROP TABLE IF EXISTS `ordi`;
CREATE TABLE IF NOT EXISTS `ordi` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`denomination` varchar(150) NOT NULL,
`processeur` varchar(150) NOT NULL,
`prix` float(10,2) NOT NULL,
`ecran` varchar(150) NOT NULL,
`vive` varchar(150) NOT NULL,
`image` varchar(150) NOT NULL,
`lien` varchar(150) NOT NULL,
PRIMARY KEY (`id`)
);

--
-- Déchargement des données de la table `ordi`
--

INSERT INTO `ordi` (`id`, `denomination`, `processeur`, `prix`, `ecran`,`vive`,`image`,`lien`) VALUES
(1, 'Ordinateur Apple MACBOOK CTO Pro 13 New M1 16 256 iGris sideral', 'Puce Apple M1', 1549.99, '13,3 pouces (33,8 cm)', '16 Go', '01.png', 'https://www.boulanger.com/ref/1156449'),
(2, 'PACKARD BELL PB314-35-P53X', 'Intel Pentium Silver N6000', 449, '14 pouces (35,6 cm)', '8 Go', '02.png', 'https://www.boulanger.com/ref/1164052'),
(3, 'Matebook 14s 2021 I7 16Go 512 Touch', 'Intel Core i7 11370H', 1049, '14,2 pouces (36,06 cm)', '16 Go', '03.png', 'https://www.boulanger.com/ref/1171445'),
(4, 'ACER Aspire A317-52-54QM Noir', 'Intel Core i7 11370H', 699, '17,3 pouces (43,9 cm)', '8 Go', '04.png', 'https://www.boulanger.com/ref/1148125'),
(5, 'ACER Aspire Vero AV15-51-78H5', 'Intel Core i7 1195G7', 899, '15,6 pouces (39,6 cm)', '16 Go', '05.png', 'https://www.boulanger.com/ref/1170405'),
(6, 'PC Hybride HP ENVY x360 13-ay0034nf', 'AMD Ryzen 5 4500U', 799, '13,3 pouces (33,8 cm)', '8 Go', '06.png', 'https://www.boulanger.com/ref/1163913'),
(7, 'PC Hybride LENOVO Flex 5 14ITL05-257', 'Intel Core i5 1135G7', 936.17, '14 pouces (35,6 cm)', '16 Go', '07.png', 'https://www.boulanger.com/ref/1164775'),
(8, 'HP Envy 17-ch0039nf', 'Intel Core i7 1165G7', 1499.39, '17,3 pouces (43,9 cm)', '16 Go', '08.png', 'https://www.boulanger.com/ref/1161111'),
(9, 'HP 17-cp0054', 'AMD Athlon Silver 3050U', 449, '17 pouces (43,18 cm)', '8 Go', '09.png', 'https://www.boulanger.com/ref/1169654'),
(10, 'ACER Aspire A517-52G-757L', 'Intel Core i7 1165G7', 1099, '17,3 pouces (43,9 cm)', '16 Go', '10.png', 'https://www.boulanger.com/ref/1164115'),
(11, 'PC Gamer MSI GS66 Stealth 11UG-289FR', 'Intel Core i7 11800H - 32 Go', 3199, '15,6 pouces (39,6 cm)', '32 Go', '11.png', 'https://www.boulanger.com/ref/1164182'),
(12, 'ACER Swift SF514-55T-73TS Vert', 'Intel Core i7 11800H - 32 Go', 1199, '14 pouces (35,6 cm)', '16 Go', '12.png', 'https://www.boulanger.com/ref/1164097');
COMMIT;