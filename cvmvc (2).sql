-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2021 at 06:40 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `competence`
--

CREATE TABLE `competence` (
  `id` int(10) UNSIGNED NOT NULL,
  `comp` varchar(50) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competence`
--

INSERT INTO `competence` (`id`, `comp`, `dates`, `niveau`) VALUES
(1, 'HTML5', '2021-04-01', '75'),
(2, 'CSS3', '2021-05-01', '80'),
(3, 'BOOTSTRAP', '2021-05-15', '80'),
(4, 'JAVA SCRIPT', '2021-06-05', '55'),
(5, 'JQUERY', '2021-07-05', '55'),
(6, 'PHP', '2021-08-05', '75'),
(7, 'SYMPHONIE', '2021-09-15', '55');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `debut` varchar(250) NOT NULL,
  `fin` varchar(250) NOT NULL,
  `lieu` varchar(250) NOT NULL,
  `poste` varchar(250) DEFAULT NULL,
  `descriptif` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `debut`, `fin`, `lieu`, `poste`, `descriptif`) VALUES
(1, 'avril 2013', 'février 2015', 'Garges-les-Gonesse', 'Stagiaire Electrotechnicien', 'Stage effectuer durant mes années lycée en tant que Electrotechnicien : Tirage de câble ,raccordement électrique '),
(2, 'septembre 2016', 'mars 2020', 'La Défense', 'Agent de sécurité incendie et assistance à la personne', 'j\'ai travailler durant quatre ans dans le domaine de la sécurité incendie : intervention sur départ de feu, intervention sanitaire, désincarcération ascenseur'),
(3, 'mars 2019', 'mai 2019', 'Rolland Garros', 'Agent de sécurité', 'Agent de sécurité pendant deux mois a Rolland Garros:  palpation, contrôle d\'accès '),
(4, 'mars 2019', 'Juin 2020', 'La Défense', 'Chef d\'équipe en sécurité incendie', 'Management d\'une équipe de 4 à 10 personnes et gestion de multiple situation de crise');

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `id` int(10) UNSIGNED NOT NULL,
  `annee` int(10) NOT NULL,
  `lieu` varchar(250) NOT NULL,
  `nomform` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`id`, `annee`, `lieu`, `nomform`) VALUES
(1, 2015, 'Sarcelle - Lycée de la tourelle', 'Bac pro Electrotechnique'),
(2, 2016, 'Courbevoie - CECYS', 'Agent de sécurité incendie (SSIAP1)'),
(3, 2018, 'Courbevoie - CECYS', 'Premiers secours à personne (PSE1)'),
(4, 2019, 'Courbevoie - CECYS', 'Sauveteur secouriste du travaille (SST)'),
(5, 2019, 'Bobigny', 'Chef d\'équipe de sécurité incendie et d\'assistance à la personne (SSIAP2)');

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(20) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `pays` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loisir`
--

CREATE TABLE `loisir` (
  `id` int(10) UNSIGNED NOT NULL,
  `loisir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loisir`
--

INSERT INTO `loisir` (`id`, `loisir`) VALUES
(1, 'CROSSFIT.JPG'),
(3, 'VOYAGE.JPG'),
(4, 'TRAIDING.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `ville` varchar(30) NOT NULL,
  `codepostal` int(11) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `emploi` varchar(50) DEFAULT NULL,
  `apropos` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nom`, `prenom`, `age`, `email`, `photo`, `adresse`, `ville`, `codepostal`, `pays`, `numero`, `emploi`, `apropos`) VALUES
(1, 'BARBOSA LOPES', 'Michel', '22/07/1997', 'Michel351@hotmail.fr', 'homme.jpg', '1 rue averroes', 'villiers le bel', 95400, 'Franco-Portugais', '0623022797', 'Développeur Web & Web mobile', 'Etant titulaire d\'un Bac Pro Eléctrotechnique et ayant travailler pendant quatres ans dans le domaine de la sécurité incendie et l\'assistance à la personne, je suis actuellement en pleine reconvertion professionelle en tant que dévellopeur Web Et Web Mobile');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `loisir`
--
ALTER TABLE `loisir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competence`
--
ALTER TABLE `competence`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loisir`
--
ALTER TABLE `loisir`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
