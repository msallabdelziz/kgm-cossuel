-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 16 juin 2022 à 18:54
-- Version du serveur : 10.1.48-MariaDB-0ubuntu0.18.04.1
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cossuel_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectations_agents`
--

CREATE TABLE `affectations_agents` (
  `id` int(11) NOT NULL,
  `agence_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `date_affectation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `affectations_agents`
--

INSERT INTO `affectations_agents` (`id`, `agence_id`, `agent_id`, `date_affectation`) VALUES
(1, 1, 1, '2022-05-05'),
(2, 2, 2, '2022-05-05'),
(3, 1, 3, '2022-05-05'),
(4, 2, 4, '2022-05-05'),
(5, 1, 5, '2022-05-05'),
(6, 2, 6, '2022-05-05'),
(7, 1, 7, '2022-05-05'),
(8, 2, 8, '2022-05-05'),
(9, 1, 9, '2022-05-05'),
(10, 2, 10, '2022-05-05'),
(11, 1, 11, '2022-05-05'),
(12, 1, 13, '2022-05-05'),
(13, 2, 14, '2022-05-05'),
(14, 1, 15, '2022-05-05'),
(15, 1, 201, '2022-05-05'),
(16, 1, 218, '2022-05-11'),
(17, 1, 219, '2022-05-11'),
(18, 1, 220, '2022-05-11'),
(19, 1, 222, '2022-05-11'),
(20, 1, 223, '2022-05-11'),
(21, 1, 224, '2022-05-11'),
(22, 1, 225, '2022-05-16'),
(23, 1, 226, '2022-05-16'),
(24, 1, 227, '2022-05-16'),
(25, 1, 228, '2022-05-16'),
(26, 1, 229, '2022-05-16'),
(27, 2, 230, '2022-05-16'),
(28, 1, 232, '2022-05-16'),
(29, 1, 233, '2022-05-16'),
(30, 1, 2, '2022-05-16'),
(31, 1, 234, '2022-05-16'),
(32, 1, 235, '2022-05-16'),
(33, 2, 236, '2022-05-17'),
(34, 2, 237, '2022-06-02'),
(35, 2, 238, '2022-06-02'),
(36, 1, 239, '2022-06-02'),
(37, 1, 238, '2022-06-02'),
(38, 1, 240, '2022-06-02'),
(39, 1, 241, '2022-06-02'),
(40, 1, 242, '2022-06-03'),
(41, 1, 243, '2022-06-03'),
(42, 1, 244, '2022-06-03'),
(43, 1, 250, '2022-06-09'),
(44, 1, 251, '2022-06-09'),
(45, 1, 252, '2022-06-09'),
(46, 5, 253, '2022-06-14'),
(47, 5, 254, '2022-06-14'),
(48, 5, 255, '2022-06-14'),
(49, 5, 256, '2022-06-14');

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`id`, `code`, `nom`, `telephone`, `email`, `adresse`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'DK-01', 'Cossuel Dakar1', '773799200', 'mlthioune9@gmail.com', 'Ouakam, Cité Avion', '2022-04-15 23:13:44', NULL, '', NULL),
(2, 'DK-02', 'Cossuel Dakar2', '339248501', 'cossuel@cossuel.sn', 'DK', '2022-04-30 19:13:36', NULL, '', NULL),
(3, 'DK-03', 'Cossuel Dakar3', '339248501', 'cossuel@cossuel.sn', 'DK', '2022-04-30 19:15:01', NULL, '', NULL),
(4, '411', 'Cossuel Centre Ouest', '339248501', 'cossuel@cossuel.sn', 'BAMBEY', '2022-05-01 01:08:00', NULL, '', NULL),
(5, '28', 'Cossuel Touba', '338223322', 'cossueltouba@cossuel.sn', 'Touba heliport', '2022-05-17 10:21:21', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `id_agence` int(11) DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `matricule`, `prenom`, `nom`, `adresse`, `telephone`, `email`, `photo`, `created_at`, `updated_at`, `created_by`, `updated_by`, `id_agence`, `profil_id`) VALUES
(1, 'M501', 'ACCUEIL', 'ONE', 'DAKAR ONE', '774376940', 'accueilone@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 1, 1),
(2, 'M502', 'ACCUEIL', 'TWO', 'DAKAR TWO', '773463849', 'accueiltwo@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 1, 1),
(3, 'M503', 'REFERENT', 'ONE', 'Test Adresse', '773463547', 'testreferentone@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 1, 6),
(4, 'M504', 'Referent', 'TWO', 'Test Adresse', '7734684597', 'testreferenttwo@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 2, 6),
(5, 'M505', 'Controleur', 'ONE', 'Test Adresse', '774538590', 'testcontroleurone@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 1, 7),
(6, 'M506', 'Controleur', 'TWO', 'Test Adresse', '774365838', 'testcontroleurtwo@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 2, 7),
(7, 'M507', 'Backoffice', 'ONE', 'Test Adresse', '774385395', 'testbackofficeone@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 1, 5),
(8, 'M508', 'Back Office', 'TWO', 'Test Adresse', '774368539', 'testbackofficetwo@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 2, 5),
(9, 'M509', 'Comptable', 'ONE', 'Test Adresse', '774365839', 'testcomptableone@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 1, 3),
(10, 'M510', 'Comptable', 'TWO', 'Test Adresse', '774365839', 'testcomptabletwo@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 2, 3),
(11, 'M511', 'DAF', 'ONE', 'Test Adresse', '774365758', 'testdafone@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 1, 4),
(13, 'M513', 'Caissier', 'ONE', 'Test Adresse', '779437659', 'testcaissierone@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 1, 2),
(14, 'M514', 'Caissier', 'TWO', 'Test Adresse', '774365378', 'testcaissiertwo@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 2, 2),
(15, 'M515', 'Superviseur', 'ONE', 'Test Adresse', '774368539', 'testsuperviseurone@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, 1, 9),
(17, 'M517', 'ADMIN', 'ONE', 'Test Adresse', '774368590', 'testadminone@mailinator.com', NULL, '2022-05-06 00:00:00', NULL, '', NULL, NULL, 8),
(201, 'M518', 'Modou', 'FALL', 'Dakar', '7723456789', 'modou.fall@gmail.com', NULL, '2022-05-05 16:03:45', NULL, '', NULL, NULL, 1),
(217, 'M519', 'Papa', 'FAYE', 'Dakar', '7712121212', 'papafaye@gmail.com', NULL, '2022-05-05 23:31:55', NULL, '', NULL, NULL, 1),
(218, 'accueil1', 'Accueil-1', 'ACCUEIL', 'Dakar', '7711111111', 'accueil1@cossuel.sn', 'none-627c06474d86a.png', '2022-05-11 18:53:59', NULL, '', NULL, NULL, 1),
(219, 'caissier1', 'Caissier-1', 'CAISSIER', 'Dakar', '7711111111', 'caissier1@cossuel.sn', 'none-627c069c66afb.png', '2022-05-11 18:55:24', NULL, '', NULL, NULL, 2),
(220, 'comptable1', 'Comptable-1', 'COMPTABLE', 'Dakar', '7722222222', 'comptable1@cossuel.sn', 'none-627c06fe827bc.png', '2022-05-11 18:57:02', NULL, '', NULL, NULL, 3),
(221, 'daf', 'DAF', 'DAF', 'Dakar', '773333333', 'daf@cossuel.sn', 'none-627c0753e5690.png', '2022-05-11 18:58:27', NULL, '', NULL, NULL, 4),
(222, 'rfo1', 'RFO-1', 'RFO', 'Dakar', '775555555', 'rfo1@cossuel.sn', 'none-627c07c66ae5b.png', '2022-05-11 19:00:22', NULL, '', NULL, NULL, 5),
(223, 'referent1', 'Referent-1', 'REFERENT', 'Dakar', '776666666', 'referent1@cossuel.sn', 'none-627c07f8a7cb9.png', '2022-05-11 19:01:12', NULL, '', NULL, NULL, 6),
(224, 'controleur1', 'Controleur-1', 'CONTROLEUR', 'Dakar', '777777772', 'controleur1@cossuel.sn', 'none-627c082b678ed.png', '2022-05-11 19:02:03', NULL, '', NULL, NULL, 7),
(225, 'M117', 'Abdoukhadre Adama', 'NDIONGUE', 'HLM', '782918105', 'abdoukhadre.ndiongue@cossuel.sn', NULL, '2022-05-16 08:49:31', NULL, '', NULL, NULL, 6),
(226, 'M122', 'Mariama', 'TOURE', 'Mamelle B20', '777180148', 'mariama.toure@cossuel.sn', NULL, '2022-05-16 08:52:06', NULL, '', NULL, NULL, 1),
(227, 'M144', 'Moustapha', 'KEBE', 'Thiaroye sur mer', '775454049', 'mamadou.kebe@cossuel.sn', NULL, '2022-05-16 08:58:27', NULL, '', NULL, NULL, 7),
(228, 'M174', 'Yacine', 'Gaye', 'Pikine', '771974604', 'yacine.gaye@cossuel.sn', NULL, '2022-05-16 09:00:56', NULL, '', NULL, NULL, 2),
(229, 'M121', 'Fatou Lahi', 'Sow', 'Pikine', '771510228', 'fatou.sow@cossuel.sn', NULL, '2022-05-16 09:03:38', NULL, '', NULL, NULL, 5),
(230, 'M162', 'Cheikh', 'Beye', 'Cossuel', '774528489', 'bamba.beye@cossuel.sn', NULL, '2022-05-16 09:06:05', NULL, '', NULL, NULL, 7),
(231, 'C103', 'Abdoulaye', 'DIALLO', 'HLM', '775755243', 'abdoulaye.diallo@cossuel.sn', NULL, '2022-05-16 09:14:00', NULL, '', NULL, NULL, 8),
(232, 'accueil2', 'Accueil-2', 'ACCUEIL', 'DKR', '7711111111', 'accueil2@cossuel.sn', NULL, '2022-05-16 16:11:52', NULL, '', NULL, NULL, 1),
(233, 'accueil3', 'Accueil-3', 'ACCUEIL', 'DK', '772223333', 'accueil3@cossuel.sn', NULL, '2022-05-16 16:12:30', NULL, '', NULL, NULL, 1),
(234, 'accueil4', 'Accueil-4', 'ACCUEIL', 'DKR', '7754345', 'accueil4@cossuel.sn', NULL, '2022-05-16 16:20:25', NULL, '', NULL, NULL, 1),
(235, 'accueil5', 'Accueil-5', 'ACCUEIL', 'Dkar', '77876543', 'accueil5@cossuel.sn', NULL, '2022-05-16 16:24:32', NULL, '', NULL, NULL, 1),
(236, 'M211', 'Modou', 'Mar', 'Camberene', '771166556', 'modou.mar@cossuel.sn', 'casqueAccueil-62837a2e8c91c.png', '2022-05-17 10:34:22', NULL, '', NULL, NULL, 8),
(237, 'M281', 'KIA', 'DIOUK', 'pikine', '778962255', 'kia@cossuel.sn', NULL, '2022-06-02 10:36:28', NULL, '', NULL, NULL, 1),
(238, 'M282', 'Ibrahima', 'SEYE', 'sangalkam', '778956699', 'ibrahima.seye@cossuel.sn', NULL, '2022-06-02 12:06:31', NULL, '', NULL, 1, 2),
(239, 'M283', 'Fatoumata', 'Laye', 'guediawaye', '789562031', 'layefatoumata@gmail.com', NULL, '2022-06-02 15:51:53', NULL, '', NULL, NULL, 5),
(240, 'M119', 'Serigne Mbacke', 'Sall', 'fass', '774525809', 'serigne.sall@cossuel.sn', NULL, '2022-06-02 16:24:07', NULL, '', NULL, NULL, 6),
(241, 'M285', 'Ahmadou Bamba', 'Beye', 'cite alioune sow', '778563322', 'beyeahmadou@cossuel.sn', 'nifi2-6298e748edf26.png', '2022-06-02 16:37:28', NULL, '', NULL, NULL, 7),
(242, 'M286', 'khady', 'SOW', 'dakar', '771833655', 'khady.sow@cossuel.sn', NULL, '2022-06-03 10:03:56', NULL, '', NULL, NULL, 3),
(243, 'M287', 'Abdou khadre', 'Sow', 'fouta', '778952266', 'abdou.sow@cossuel.sn', NULL, '2022-06-03 10:05:37', NULL, '', NULL, NULL, 4),
(244, 'M288', 'Ibrahima', 'DIop', 'ibrahima.diop@cossuel.sn', '785692301', 'ibrahima.diop@cossuel.sn', NULL, '2022-06-03 10:07:36', NULL, '', NULL, NULL, 9),
(245, 'M158', 'Bassirou', 'Tall', 'Rufisque cité Filao', '775093449', 'bassirou.tall@cossuel.sn', NULL, '2022-06-03 10:58:45', NULL, '', NULL, NULL, 7),
(246, 'M116', 'Gogo', 'Mbodj', 'Yoff', '776507947', 'gogo.mbodj@cossuel.sn', NULL, '2022-06-03 11:22:29', NULL, '', NULL, NULL, 6),
(247, 'M181', 'MAGUETTE', 'KONARE', 'Mariste', '784702146', 'maguette.konare@cossuel.sn', NULL, '2022-06-07 09:55:10', NULL, '', NULL, NULL, 1),
(248, 'C105', 'Boubacar', 'SAMBA', 'Nord Foire', '771661095', 'boubacar.samba@cossuel.sn', NULL, '2022-06-07 10:18:10', NULL, '', NULL, NULL, 9),
(249, 'M214', 'Assane', 'Ngome', 'Rufisque Cité Serigne Mansour', '771820982', 'assane.ngom@cossuel.sn', NULL, '2022-06-07 11:47:43', NULL, '', NULL, NULL, 1),
(250, 'M999', 'M999', 'TEST M999', 'FASS DELORME', '77222210843954', 'testm99@mailinator.com', 'Capture1-62a1c304b90a7.png', '2022-06-09 09:53:08', NULL, '', NULL, NULL, 1),
(251, 'M1000', 'TEST M1000', 'TEST M1000', 'ADRESSE TEST M1000', '78437843959353', 'testm1000@mailinator.com', 'Capture1-62a1d0145ca27.png', '2022-06-09 10:48:52', NULL, '', NULL, NULL, 1),
(252, 'M1001', '1001', 'TEST M1001', 'Adresse Test M1001', '77348473993743843', 'testm1001@mailinator.com', NULL, '2022-06-09 11:41:47', NULL, '', NULL, NULL, 1),
(253, 'M600', 'Abdou', 'Fall', 'touba occass', '789987675', 'fallabdou@gmail.com', NULL, '2022-06-14 11:06:15', NULL, '', NULL, NULL, 1),
(254, 'M602', 'Marie', 'Diop', 'touba Fall', '778906756', 'mariediop@gmail.com', NULL, '2022-06-14 11:10:35', NULL, '', NULL, NULL, 2),
(255, 'M603', 'Fallou', 'NDiaye', 'Dakar', '777289900', 'ndiayefallou@gmail.com', NULL, '2022-06-14 11:12:35', NULL, '', NULL, NULL, 5),
(256, 'M604', 'Ibrahima', 'Sanokho', 'Parcelle', '778789088', 'sanoikho.ibrahim@gmail.com', NULL, '2022-06-14 11:15:40', NULL, '', NULL, NULL, 6),
(257, 'M188', 'ALI', 'BA', 'SICAP FOIRE', '776500791', 'ali.ba@cossuel.sn', NULL, '2022-06-15 15:14:29', NULL, '', NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Structure de la table `attestation`
--

CREATE TABLE `attestation` (
  `id` int(11) NOT NULL,
  `dossier_id` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `date_delivrance` datetime NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) NOT NULL,
  `demande_parente` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `installation_id` int(11) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `etat` varchar(255) NOT NULL,
  `puissance` varchar(255) NOT NULL,
  `type_demande` varchar(255) DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  `numero_passage` int(11) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL,
  `cout` int(11) DEFAULT NULL,
  `id_paiement` int(11) DEFAULT NULL,
  `dossier_id` int(11) DEFAULT NULL,
  `paiement_id` int(11) DEFAULT NULL,
  `soumis` tinyint(1) NOT NULL,
  `date_acceptation` datetime DEFAULT NULL,
  `valide` tinyint(1) NOT NULL,
  `accepte` tinyint(1) NOT NULL,
  `rejet` tinyint(1) NOT NULL,
  `motif_rejet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `demande_parente`, `utilisateur_id`, `installation_id`, `numero`, `date_creation`, `etat`, `puissance`, `type_demande`, `date_validation`, `numero_passage`, `created_at`, `created_by`, `updated_at`, `updated_by`, `cout`, `id_paiement`, `dossier_id`, `paiement_id`, `soumis`, `date_acceptation`, `valide`, `accepte`, `rejet`, `motif_rejet`) VALUES
(3, NULL, NULL, 13, '00000003', '2022-04-21 08:24:51', 'Demande validée', '10', NULL, NULL, 1, '2022-04-21 08:24:51', '', NULL, NULL, 150000, 7, 4, 7, 1, NULL, 1, 1, 0, NULL),
(4, NULL, NULL, 14, '00000004', '2022-04-21 11:03:15', 'Demande validée', '18', NULL, NULL, 1, '2022-04-21 11:03:15', '', NULL, NULL, 100000, 1, 11, 1, 1, NULL, 1, 1, 0, NULL),
(5, NULL, NULL, 16, '00000005', '2022-04-29 10:56:38', 'Demande validée', '10', NULL, NULL, 1, '2022-04-29 10:56:38', '9', NULL, NULL, 30000, 2, 14, 2, 1, NULL, 1, 1, 0, NULL),
(6, NULL, NULL, 17, '00000006', '2022-04-29 15:37:11', 'Demande validée', '6', NULL, NULL, 1, '2022-04-29 15:37:11', '11', NULL, NULL, 10000, 3, 3, 3, 1, NULL, 1, 1, 0, NULL),
(7, NULL, NULL, 18, '00000007', '2022-04-30 03:08:42', 'Paiement validé', '6', NULL, NULL, 1, '2022-04-30 03:08:42', '12', NULL, NULL, 10000, 4, NULL, 4, 1, NULL, 0, 1, 0, NULL),
(8, NULL, NULL, 20, '00000008', '2022-04-30 16:07:18', 'Paiement validé', '16', NULL, NULL, 1, '2022-04-30 16:07:18', '12', NULL, NULL, 150000, 5, NULL, 5, 1, NULL, 0, 1, 0, NULL),
(9, NULL, NULL, 22, '00000009', '2022-05-01 16:50:58', 'Paiement validé', '12', NULL, NULL, 1, '2022-05-01 16:50:58', '10', NULL, NULL, 150000, 6, NULL, 6, 1, NULL, 0, 1, 0, NULL),
(10, NULL, NULL, 23, '00000010', '2022-05-04 18:50:56', 'Demande validée', '7', NULL, NULL, 1, '2022-05-04 18:50:56', '1', NULL, NULL, 30000, 8, 18, 8, 1, NULL, 1, 1, 0, NULL),
(11, NULL, NULL, 21, '00000011', '2022-05-05 16:17:51', 'Demande validée', '8', NULL, NULL, 1, '2022-05-05 16:17:51', '1', NULL, NULL, 30000, 9, 1, 9, 1, NULL, 1, 1, 0, NULL),
(12, NULL, NULL, 26, '00000012', '2022-05-16 16:26:39', 'Demande validée', '17', NULL, NULL, 1, '2022-05-16 16:26:39', '17', NULL, NULL, 30000, 12, 6, 12, 1, NULL, 1, 1, 0, NULL),
(13, NULL, NULL, 24, '00000013', '2022-05-16 16:27:12', 'Demande validée', '7', NULL, NULL, 1, '2022-05-16 16:27:12', '17', NULL, NULL, 30000, 10, 5, 10, 1, NULL, 1, 1, 0, NULL),
(14, NULL, NULL, 27, '00000014', '2022-05-16 16:29:27', 'Demande validée', '12', NULL, NULL, 1, '2022-05-16 16:29:27', '42', NULL, NULL, 30000, 30, 19, 30, 1, NULL, 1, 1, 0, NULL),
(15, NULL, NULL, 25, '00000015', '2022-05-16 16:32:27', 'Demande validée', '34', NULL, NULL, 1, '2022-05-16 16:32:27', '18', NULL, NULL, 100000, 13, 13, 13, 1, NULL, 1, 1, 0, NULL),
(16, NULL, NULL, 29, '00000016', '2022-05-16 16:34:05', 'Paiement validé', '6', NULL, NULL, 1, '2022-05-16 16:34:05', '40', NULL, NULL, 10000, 11, NULL, 11, 1, NULL, 0, 1, 0, NULL),
(17, NULL, NULL, 30, '00000017', '2022-05-16 16:44:32', 'Paiement validé', '10', NULL, NULL, 1, '2022-05-16 16:44:32', '42', NULL, NULL, 30000, 16, NULL, 16, 1, NULL, 0, 1, 0, NULL),
(18, NULL, NULL, 31, '00000018', '2022-05-16 16:46:36', 'Paiement validé', '34', NULL, NULL, 1, '2022-05-16 16:46:36', '18', NULL, NULL, 250000, 33, NULL, 33, 1, NULL, 0, 1, 0, NULL),
(19, NULL, NULL, 28, '00000019', '2022-05-16 16:48:03', 'Paiement validé', '15', NULL, NULL, 1, '2022-05-16 16:48:03', '41', NULL, NULL, 30000, 14, NULL, 14, 1, NULL, 0, 1, 0, NULL),
(20, NULL, NULL, 15, '00000020', '2022-05-16 17:07:17', 'Paiement validé', '2', NULL, NULL, 1, '2022-05-16 17:07:17', '44', NULL, NULL, 10000, 15, NULL, 15, 1, NULL, 0, 1, 0, NULL),
(21, NULL, NULL, 35, '00000021', '2022-05-16 17:15:10', 'Soumis', '34', NULL, NULL, 1, '2022-05-16 17:15:10', '41', NULL, NULL, 250000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(22, NULL, NULL, 36, '00000022', '2022-05-19 12:37:00', 'Demande validée', '15', NULL, NULL, 1, '2022-05-19 12:37:00', '42', NULL, NULL, 150000, 26, 17, 26, 1, NULL, 1, 1, 0, NULL),
(23, NULL, NULL, 38, '00000023', '2022-05-19 12:59:20', 'Paiement enregistré', '20', NULL, NULL, 1, '2022-05-19 12:59:20', '18', NULL, NULL, 250000, 34, NULL, 34, 1, NULL, 0, 1, 0, NULL),
(31, 11, NULL, 44, '00000031', '2022-05-31 14:37:19', 'Paiement validé', '8', NULL, NULL, 2, '2022-05-31 14:37:19', '1', NULL, NULL, 24000, 28, NULL, 28, 1, NULL, 0, 1, 0, NULL),
(32, NULL, NULL, 46, '00000032', '2022-06-01 09:36:56', 'Demande validée', '31', NULL, NULL, 1, '2022-06-01 09:36:56', '31', NULL, NULL, 250000, 17, 7, 17, 1, NULL, 1, 1, 0, NULL),
(33, NULL, NULL, 47, '00000033', '2022-06-01 12:42:00', 'Paiement validé', '6', NULL, NULL, 1, '2022-06-01 12:42:00', '31', NULL, NULL, 10000, 18, NULL, 18, 1, NULL, 0, 1, 0, NULL),
(34, NULL, NULL, 48, '00000034', '2022-06-01 13:12:52', 'Demande validée', '6', NULL, NULL, 1, '2022-06-01 13:12:52', '18', NULL, NULL, 10000, 19, 8, 19, 1, NULL, 1, 1, 0, NULL),
(35, NULL, NULL, 49, '00000035', '2022-06-01 13:20:26', 'Soumis', '6', NULL, NULL, 1, '2022-06-01 13:20:26', '18', NULL, NULL, 10000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(36, NULL, NULL, 50, '00000036', '2022-06-01 13:28:41', 'Soumis', '7', NULL, NULL, 1, '2022-06-01 13:28:41', '18', NULL, NULL, 150000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(37, 32, NULL, 51, '00000037', '2022-06-01 15:21:33', 'Soumis', '31', NULL, NULL, 2, '2022-06-01 15:21:33', '31', NULL, NULL, 200000, NULL, NULL, NULL, 0, NULL, 0, 0, 0, NULL),
(38, NULL, NULL, 52, '00000038', '2022-06-01 18:47:19', 'Demande validée', '15', NULL, NULL, 1, '2022-06-01 18:47:19', '17', NULL, NULL, 30000, 20, 16, 20, 1, NULL, 1, 1, 0, NULL),
(39, NULL, NULL, 53, '00000039', '2022-06-02 11:12:35', 'Soumis', '6', NULL, NULL, 1, '2022-06-02 11:12:35', '49', NULL, NULL, 10000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(40, NULL, NULL, 56, '00000040', '2022-06-02 15:41:34', 'Demande validée', '6', NULL, NULL, 1, '2022-06-02 15:41:34', '49', NULL, NULL, 12000, 21, 9, 21, 1, NULL, 1, 1, 0, NULL),
(41, NULL, NULL, 57, '00000041', '2022-06-02 16:37:43', 'Demande validée', '10', NULL, NULL, 1, '2022-06-02 16:37:43', '31', NULL, NULL, 150000, 22, 12, 22, 1, NULL, 1, 1, 0, NULL),
(42, NULL, NULL, 59, '00000042', '2022-06-03 10:06:30', 'Paiement enregistré', '4', NULL, NULL, 1, '2022-06-03 10:06:30', '31', NULL, NULL, 12000, 23, NULL, 23, 1, NULL, 0, 1, 0, NULL),
(43, NULL, NULL, 60, '00000043', '2022-06-03 10:22:41', 'Soumis', '18', NULL, NULL, 1, '2022-06-03 10:22:41', '31', NULL, NULL, 250000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(44, NULL, NULL, 62, '00000044', '2022-06-03 11:55:07', 'Paiement validé', '6', NULL, NULL, 1, '2022-06-03 11:55:07', '61', NULL, NULL, 10000, 24, NULL, 24, 1, NULL, 0, 1, 0, NULL),
(45, NULL, NULL, 63, '00000045', '2022-06-03 12:53:33', 'Demande validée', '17', NULL, NULL, 1, '2022-06-03 12:53:33', '61', NULL, NULL, 30000, 25, 10, 25, 1, NULL, 1, 1, 0, NULL),
(46, NULL, NULL, 66, '00000046', '2022-06-03 14:59:32', 'Demande validée', '7', NULL, NULL, 1, '2022-06-03 14:59:32', '31', NULL, NULL, 30000, 27, 15, 27, 1, NULL, 1, 1, 0, NULL),
(47, NULL, NULL, 65, '00000047', '2022-06-03 15:19:29', 'Paiement validé', '15', NULL, NULL, 1, '2022-06-03 15:19:29', '33', NULL, NULL, 30000, 31, NULL, 31, 1, NULL, 0, 1, 0, NULL),
(48, NULL, NULL, 70, '00000048', '2022-06-03 15:50:32', 'Paiement validé', '8', NULL, NULL, 1, '2022-06-03 15:50:32', '61', NULL, NULL, 150000, 32, NULL, 32, 1, NULL, 0, 1, 0, NULL),
(49, NULL, NULL, 71, '00000049', '2022-06-03 15:59:35', 'Soumis', '6', NULL, NULL, 1, '2022-06-03 15:59:35', '61', NULL, NULL, 12000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(50, NULL, NULL, 72, '00000050', '2022-06-03 20:47:43', 'Soumis', '15', NULL, NULL, 1, '2022-06-03 20:47:43', '17', NULL, NULL, 30000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(51, NULL, NULL, 74, '00000051', '2022-06-07 10:20:59', 'Soumis', '34', NULL, NULL, 1, '2022-06-07 10:20:59', '61', NULL, NULL, 250000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(52, NULL, NULL, 67, '00000052', '2022-06-07 11:47:04', 'Paiement enregistré', '6', NULL, NULL, 1, '2022-06-07 11:47:04', '61', NULL, NULL, 10000, 29, NULL, 29, 1, NULL, 0, 1, 0, NULL),
(53, NULL, NULL, 76, '00000053', '2022-06-07 15:32:47', 'Soumis', '6', NULL, NULL, 1, '2022-06-07 15:32:47', '67', NULL, NULL, 12000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(54, NULL, NULL, 78, '00000054', '2022-06-08 09:59:34', 'Soumis', '6', NULL, NULL, 1, '2022-06-08 09:59:34', '17', NULL, NULL, 10000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, NULL),
(55, NULL, NULL, 83, '00000055', '2022-06-11 09:56:26', 'Soumis', '3', NULL, NULL, 1, '2022-06-11 09:56:26', '17', NULL, NULL, 10000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, ''),
(56, NULL, NULL, 85, '00000056', '2022-06-14 08:53:42', 'Soumis', '8', NULL, NULL, 1, '2022-06-14 08:53:42', '18', NULL, NULL, 30000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, ''),
(57, NULL, NULL, 86, '00000057', '2022-06-14 10:05:16', 'Soumis', '19', NULL, NULL, 1, '2022-06-14 10:05:16', '18', NULL, NULL, 250000, NULL, NULL, NULL, 1, NULL, 0, 0, 0, ''),
(58, NULL, NULL, 87, '00000058', '2022-06-15 16:16:48', 'Soumis', '4', NULL, NULL, 1, '2022-06-15 16:16:48', '61', NULL, NULL, 10000, NULL, NULL, NULL, 0, NULL, 0, 0, 0, ''),
(59, NULL, NULL, 55, '00000059', '2022-06-15 16:23:57', 'Soumis', '3', NULL, NULL, 1, '2022-06-15 16:23:57', '1', NULL, NULL, 10000, NULL, NULL, NULL, 0, NULL, 0, 0, 0, ''),
(60, NULL, NULL, 88, '00000060', '2022-06-15 16:37:32', 'Accepté', '7', NULL, NULL, 1, '2022-06-15 16:37:32', '31', NULL, NULL, 150000, NULL, NULL, NULL, 1, NULL, 0, 1, 0, ''),
(61, NULL, NULL, 89, '00000061', '2022-06-15 22:51:12', 'Rejeté', '7', NULL, NULL, 1, '2022-06-15 22:51:12', '31', NULL, NULL, 150000, NULL, NULL, NULL, 0, NULL, 0, 0, 1, 'Données propriétaires à corriger !'),
(62, NULL, NULL, 90, '00000062', '2022-06-16 09:57:56', 'Soumis', '15', NULL, NULL, 1, '2022-06-16 09:57:56', '31', NULL, NULL, 30000, NULL, NULL, NULL, 0, NULL, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `region_id`, `nom`, `code`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'Dakar', 'DK-01', '2022-04-14 17:30:33', NULL, '', NULL),
(2, 1, 'Guediawaye', 'DK-02', '2022-04-14 17:34:04', NULL, '', NULL),
(3, 1, 'Pikine', 'DK-03', '2022-04-14 17:35:02', NULL, '', NULL),
(5, 1, 'Rufisque', 'DK-04', '2022-04-14 18:00:26', NULL, '', NULL),
(7, 2, 'Thiès', 'TH-01', '2022-04-14 18:06:19', NULL, '', NULL),
(8, 2, 'Mbour', 'TH-02', '2022-04-14 18:07:44', NULL, '', NULL),
(9, 2, 'Tivaouane', 'TH-03', '2022-04-14 18:08:36', NULL, '', NULL),
(12, 5, 'Kaoulack', 'KL-01', '2022-05-01 00:18:33', NULL, '', NULL),
(13, 5, 'Guinguineo', 'KL-02', '2022-05-01 00:21:49', NULL, '', NULL),
(14, 5, 'Nioro du Rip', 'KL-03', '2022-05-01 00:23:05', NULL, '', NULL),
(15, 7, 'Kébémer', 'LG-02', '2022-05-01 00:25:02', NULL, '', NULL),
(16, 7, 'Linguere', 'LG-03', '2022-05-01 00:25:34', NULL, '', NULL),
(17, 7, 'Louga', 'LG-01', '2022-05-01 00:26:41', NULL, '', NULL),
(18, 3, 'Diourbel', 'DL-01', '2022-05-01 00:28:55', NULL, '', NULL),
(19, 3, 'Bambey', 'DL-02', '2022-05-01 00:29:24', NULL, '', NULL),
(21, 3, 'Mbacke', 'DL-03', '2022-05-01 00:30:29', NULL, '', NULL),
(22, 4, 'Kolda', 'KD-01', '2022-05-01 00:32:19', NULL, '', NULL),
(23, 4, 'Vélingara', 'KD-02', '2022-05-01 00:32:52', NULL, '', NULL),
(24, 4, 'Médina Yoro Foulah', 'KD-03', '2022-05-01 00:33:30', NULL, '', NULL),
(26, 15, 'Foundiougne', 'FT-02', '2022-05-01 00:40:27', NULL, '', NULL),
(27, 15, 'Fatick', 'FT-01', '2022-05-01 00:42:04', NULL, '', NULL),
(28, 15, 'Gossas', 'FT-03', '2022-05-01 00:42:35', NULL, '', NULL),
(29, 9, 'Kaffrine', 'KF-01', '2022-05-01 00:44:04', NULL, '', NULL),
(30, 9, 'Birkelane', 'KF-02', '2022-05-01 00:44:51', NULL, '', NULL),
(33, 9, 'Koungheul', 'KF-03', '2022-05-01 00:47:13', NULL, '', NULL),
(34, 9, 'Malem-Hodar', 'KF-04', '2022-05-01 00:47:48', NULL, '', NULL),
(35, 10, 'Kedougou', 'KG-01', '2022-05-01 00:48:14', NULL, '', NULL),
(36, 10, 'Salemata', 'KG-02', '2022-05-01 00:48:43', NULL, '', NULL),
(37, 10, 'Saraya', 'KF-03', '2022-05-01 00:49:05', NULL, '', NULL),
(38, 8, 'Matam', 'MT-01', '2022-05-01 00:50:06', NULL, '', NULL),
(39, 8, 'Kanel', 'MT-02', '2022-05-01 00:50:23', NULL, '', NULL),
(40, 10, 'Ranérou', 'KG-03', '2022-05-01 00:50:51', NULL, '', NULL),
(41, 8, 'Ranérou', 'MT-03', '2022-05-01 00:51:18', NULL, '', NULL),
(42, 11, 'Sedhiou', 'SD-01', '2022-05-01 00:52:05', NULL, '', NULL),
(43, 11, 'Bounkiling', 'SD-02', '2022-05-01 00:52:47', NULL, '', NULL),
(44, 11, 'Goudomp', 'SD-03', '2022-05-01 00:53:26', NULL, '', NULL),
(45, 13, 'Saint Louis', 'SL-01', '2022-05-01 00:54:25', NULL, '', NULL),
(46, 13, 'Dagana', 'SL-02', '2022-05-01 00:55:03', NULL, '', NULL),
(47, 13, 'Podor', 'SL-03', '2022-05-01 00:58:41', NULL, '', NULL),
(48, 14, 'TAmbacounda', 'TC-01', '2022-05-01 00:59:26', NULL, '', NULL),
(49, 14, 'Bakel', 'TC-02', '2022-05-01 00:59:42', NULL, '', NULL),
(50, 14, 'Goudiry', 'TC-03', '2022-05-01 01:00:32', NULL, '', NULL),
(51, 14, 'Koumpentoum', 'TC-04', '2022-05-01 01:00:57', NULL, '', NULL),
(52, 12, 'Ziguinchor', 'ZG-01', '2022-05-01 01:02:00', NULL, '', NULL),
(53, 12, 'Bignona', 'ZG-02', '2022-05-01 01:02:14', NULL, '', NULL),
(54, 12, 'Oussouye', 'ZG-03', '2022-05-01 01:02:53', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `detail_verification`
--

CREATE TABLE `detail_verification` (
  `id` int(11) NOT NULL,
  `point_verification_id` int(11) DEFAULT NULL,
  `visite_id` int(11) DEFAULT NULL,
  `conclusion` tinyint(1) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `detail_verification`
--

INSERT INTO `detail_verification` (`id`, `point_verification_id`, `visite_id`, `conclusion`, `commentaire`) VALUES
(21, 4, 6, 1, NULL),
(22, 5, 6, 1, NULL),
(23, 6, 6, 0, 'sdsd'),
(24, 7, 6, 1, NULL),
(25, 8, 6, 0, NULL),
(26, 4, 7, NULL, NULL),
(27, 5, 7, NULL, NULL),
(28, 6, 7, NULL, NULL),
(29, 7, 7, NULL, NULL),
(30, 8, 7, NULL, NULL),
(31, 2, 8, NULL, NULL),
(32, 3, 8, NULL, NULL),
(33, 2, 9, 1, NULL),
(34, 3, 9, 0, 'Scnovdo'),
(35, 2, 10, 1, NULL),
(36, 3, 10, 1, NULL),
(37, 4, 12, 1, NULL),
(38, 5, 12, 1, NULL),
(39, 6, 12, 1, NULL),
(40, 7, 12, 0, NULL),
(41, 8, 12, 0, NULL),
(42, 2, 13, 1, NULL),
(43, 3, 13, 1, NULL),
(44, 2, 14, 1, NULL),
(45, 3, 14, 1, NULL),
(46, 4, 11, 1, NULL),
(47, 5, 11, 0, NULL),
(48, 6, 11, 1, NULL),
(49, 7, 11, 1, NULL),
(50, 8, 11, 1, NULL),
(51, 4, 15, 1, NULL),
(52, 5, 15, 1, NULL),
(53, 6, 15, 1, NULL),
(54, 7, 15, 1, NULL),
(55, 8, 15, 1, NULL),
(56, 2, 16, NULL, NULL),
(57, 3, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220503234816', '2022-05-03 23:48:24', 56),
('DoctrineMigrations\\Version20220505101811', '2022-05-05 10:18:17', 336),
('DoctrineMigrations\\Version20220505152013', '2022-05-06 18:27:01', 71),
('DoctrineMigrations\\Version20220505152109', '2022-05-05 15:22:40', 83),
('DoctrineMigrations\\Version20220505231028', '2022-05-05 23:10:34', 128),
('DoctrineMigrations\\Version20220506113839', '2022-05-06 11:38:54', 150),
('DoctrineMigrations\\Version20220506183326', '2022-05-06 18:33:29', 343),
('DoctrineMigrations\\Version20220506183655', '2022-05-06 18:36:58', 381),
('DoctrineMigrations\\Version20220506205850', '2022-05-06 20:58:55', 222),
('DoctrineMigrations\\Version20220506210910', '2022-05-06 21:09:14', 153),
('DoctrineMigrations\\Version20220508150055', '2022-05-08 15:01:00', 97),
('DoctrineMigrations\\Version20220509123448', '2022-05-09 12:34:51', 161),
('DoctrineMigrations\\Version20220511100451', '2022-05-11 10:04:56', 111),
('DoctrineMigrations\\Version20220514103304', '2022-05-14 10:33:18', 184),
('DoctrineMigrations\\Version20220514104421', '2022-05-14 10:44:26', 84),
('DoctrineMigrations\\Version20220526150539', '2022-05-26 15:05:44', 248),
('DoctrineMigrations\\Version20220527160726', '2022-05-27 16:07:34', 213),
('DoctrineMigrations\\Version20220527163009', '2022-05-27 16:30:12', 179);

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

CREATE TABLE `dossier` (
  `id` int(11) NOT NULL,
  `demande_id` int(11) NOT NULL,
  `respo_front_office_id` int(11) DEFAULT NULL,
  `controleur_id` int(11) DEFAULT NULL,
  `referent_id` int(11) DEFAULT NULL,
  `num` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_cloture` datetime DEFAULT NULL,
  `affecte` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL,
  `visite` tinyint(1) DEFAULT NULL,
  `rapport` tinyint(1) DEFAULT NULL,
  `attestation` tinyint(1) DEFAULT NULL,
  `date_affecte` datetime DEFAULT NULL,
  `cloture` tinyint(1) DEFAULT NULL,
  `conforme` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dossier`
--

INSERT INTO `dossier` (`id`, `demande_id`, `respo_front_office_id`, `controleur_id`, `referent_id`, `num`, `date_creation`, `date_cloture`, `affecte`, `created_at`, `created_by`, `updated_at`, `updated_by`, `visite`, `rapport`, `attestation`, `date_affecte`, `cloture`, `conforme`) VALUES
(1, 11, NULL, 5, 3, 11, '2022-05-06 21:18:03', '2022-05-31 02:11:52', 1, '2022-05-06 21:18:03', '', NULL, NULL, 1, 1, 1, '2022-05-06 21:18:03', 1, 0),
(3, 6, NULL, 224, 3, 6, '2022-05-06 22:54:41', NULL, 1, '2022-05-06 22:54:41', '', NULL, NULL, 1, 0, 0, '2022-05-06 22:54:41', NULL, NULL),
(4, 3, NULL, 5, 3, 3, '2022-05-13 12:25:19', NULL, 1, '2022-05-13 12:25:19', '', NULL, NULL, 0, 0, 0, '2022-06-08 10:06:34', NULL, NULL),
(5, 13, NULL, 5, 3, 13, '2022-05-16 16:36:02', NULL, 1, '2022-05-16 16:36:02', '', NULL, NULL, 1, 0, 0, '2022-05-16 16:40:45', NULL, NULL),
(6, 12, NULL, 5, NULL, 12, '2022-05-16 16:51:04', '2022-06-09 11:56:16', 1, '2022-05-16 16:51:04', '', NULL, NULL, 1, 1, 1, '2022-05-16 16:52:32', 1, 0),
(7, 32, NULL, 227, 3, 32, '2022-06-01 09:37:59', '2022-06-01 10:32:24', 1, '2022-06-01 09:37:59', '31', NULL, NULL, 1, 1, 1, '2022-06-01 09:51:15', 1, 0),
(8, 34, NULL, NULL, NULL, 34, '2022-06-01 14:56:30', NULL, 0, '2022-06-01 14:56:30', '31', NULL, NULL, 0, 0, 0, NULL, NULL, NULL),
(9, 40, NULL, NULL, 3, 40, '2022-06-02 16:04:06', NULL, 0, '2022-06-02 16:04:06', '51', NULL, NULL, 0, 0, 0, NULL, NULL, NULL),
(10, 45, NULL, 5, 3, 45, '2022-06-03 13:00:03', NULL, 1, '2022-06-03 13:00:03', '51', NULL, NULL, 1, 1, 0, '2022-06-03 13:01:46', NULL, NULL),
(11, 4, NULL, 5, 3, 4, '2022-06-03 13:27:29', NULL, 1, '2022-06-03 13:27:29', '58', NULL, NULL, 1, 0, 0, '2022-06-11 10:31:39', NULL, NULL),
(12, 41, NULL, NULL, 3, 41, '2022-06-03 13:29:02', NULL, 0, '2022-06-03 13:29:02', '58', NULL, NULL, 0, 0, 0, NULL, NULL, NULL),
(13, 15, NULL, NULL, 3, 15, '2022-06-03 13:32:59', NULL, 0, '2022-06-03 13:32:58', '58', NULL, NULL, 0, 0, 0, NULL, NULL, NULL),
(14, 5, NULL, NULL, 3, 5, '2022-06-03 13:34:08', NULL, 0, '2022-06-03 13:34:08', '58', NULL, NULL, 0, 0, 0, NULL, NULL, NULL),
(15, 46, NULL, NULL, 3, 46, '2022-06-03 15:09:21', NULL, 0, '2022-06-03 15:09:21', '58', NULL, NULL, 0, 0, 0, NULL, NULL, NULL),
(16, 38, NULL, 5, 3, 38, '2022-06-03 16:09:29', '2022-06-03 17:37:17', 1, '2022-06-03 16:09:29', '37', NULL, NULL, 1, 1, 1, '2022-06-03 16:52:00', 1, 1),
(17, 22, NULL, 5, 3, 22, '2022-06-03 20:55:09', '2022-06-03 21:02:26', 1, '2022-06-03 20:55:09', '23', NULL, NULL, 1, 1, 1, '2022-06-03 20:56:12', 1, 1),
(18, 10, NULL, NULL, 3, 10, '2022-06-07 10:01:45', NULL, 0, '2022-06-07 10:01:44', '58', NULL, NULL, 0, 0, 0, NULL, NULL, NULL),
(19, 14, NULL, 5, 3, 14, '2022-06-09 09:06:23', '2022-06-09 09:13:25', 1, '2022-06-09 09:06:23', '31', NULL, NULL, 1, 1, 1, '2022-06-09 09:08:42', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `electricien`
--

CREATE TABLE `electricien` (
  `id` int(11) NOT NULL,
  `localite_id` int(11) DEFAULT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type_piece` varchar(255) NOT NULL,
  `num_piece` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `electricien`
--

INSERT INTO `electricien` (`id`, `localite_id`, `prenom`, `nom`, `adresse`, `telephone`, `email`, `type_piece`, `num_piece`, `role`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 2, 'Mamadou', 'FAYE', 'Thiès 2', '779876543', 'mlthioune@gmail.com', 'CNI', '1878909987651', '', '2022-04-18 11:46:23', '', NULL, NULL),
(2, NULL, 'Abdou Salam', 'Fall', 'Thiès Nord Q03', '771298811', 'mlthioune@gmail.com', 'CNI', '173456789', '', '2022-04-20 17:31:33', '', NULL, NULL),
(3, NULL, 'Mamadou', 'FAYE', 'Thiès 2', '779876543', 'mlthioune@gmail.com', 'CNI', '1878909987654', '', '2022-04-20 21:28:11', '', NULL, NULL),
(4, 2, 'Mamadou', 'FAYE', 'Thiès 2', '779876543', 'mlthioune@gmail.com', 'CNI', '1878909987654', '', '2022-04-20 22:23:56', '', NULL, NULL),
(5, 2, 'El Hadji', 'Thiam', 'Diakhao', '771977454', 'TE@gmail.com', 'CNI', '3456789987', '', '2022-04-29 10:54:46', '', NULL, NULL),
(6, 2, 'BOUBACAR', 'SENE', NULL, '773799200', 'mlthioune@gmail.com', 'CNI', '1234', '', '2022-04-29 15:31:14', '', NULL, NULL),
(7, 3, 'papa', 'Badiane', 'prcelle2', '777287788mm', 'papa55@gmail.com', 'CNI', '12332232123222mm2', '', '2022-04-30 02:58:00', '', NULL, NULL),
(8, 3, 'Cheikh', 'Sow', 'thies', '77oo78778', 'sow322@gmail.com', 'CNI', '217388787077087000', '', '2022-04-30 15:59:43', '', NULL, NULL),
(9, 1, 'Jean', 'Kane', 'Fass Delorme', '786321224', 'jeankane@mailinator.com', 'CNI', '144368585457', '', '2022-04-30 17:32:06', '', NULL, NULL),
(10, 9, 'BADA', 'SENE', '1111', '339248501', 'test@gmail.com888', 'CNI', '788900°°+++°°P', '', '2022-05-01 01:31:48', '', NULL, NULL),
(11, NULL, 'Abdou Khadre', 'Thiam', 'Dakar', '7737099200', 'papathiam@gmail.com', 'CNI', '1234444sdsdsd', 'ROLE_CLIENT', '2022-05-04 14:49:44', '', NULL, NULL),
(12, 4, 'Ndiaga', 'FALL', 'Dakar', '7767777777', 'ndiagafall@gmail.com', 'CNI', '1456789098765', 'ROLE_CLIENT', '2022-05-04 18:49:22', '', NULL, NULL),
(13, 4, 'Abdou', 'Diop', 'Dakar', '77123456', 'diopabdou@gmail.com', 'CNI', '123456', 'ROLE_CLIENT', '2022-05-05 16:16:45', '', NULL, NULL),
(14, 11, 'pape cheikh', 'Badiane', 'rufisque2', '778569233', 'badiane@gmail.com', 'CNI', '1233445545', 'ROLE_PUBLIC', '2022-05-16 16:23:07', '', NULL, NULL),
(15, 8, 'First', 'Born', 'Gadaay', '705064893', 'bornfirst@gmail.com', 'CNI', '17511986025', 'ROLE_PUBLIC', '2022-05-16 16:25:10', '', NULL, NULL),
(16, 9, 'Fatou', 'Sy', 'Pikine', '77000000', 'syfatou@gmail.com', 'CNI', '12222333990', 'ROLE_PUBLIC', '2022-05-16 16:26:17', '', NULL, NULL),
(17, 10, 'Mamadou Lamine', 'KEBE', 'Thiaroye Gare', '777180148', 'kebe.lamine@cossuel.sn', 'CNI', '1751199902', 'ROLE_PUBLIC', '2022-05-16 16:26:57', '', NULL, NULL),
(18, 11, 'Cheikh', 'THIAM', '414 FASS MBAO', '775690863', 'cheikh.thiam@senelec.sn', 'CNI', '12345678902', 'ROLE_PUBLIC', '2022-05-16 16:32:17', '', NULL, NULL),
(19, 13, 'Kebe', 'Momo', 'Grand', '777777', 'moomo@yahoo.fr.com', 'CNI', '12345678901', 'ROLE_PUBLIC', '2022-05-16 16:40:19', '', NULL, NULL),
(20, 17, 'Yacine', 'GAYE', 'Front de Mer', '777180148', 'yacine.gaye@cossuel.sn', 'CNI', '963852455', 'ROLE_PUBLIC', '2022-05-16 16:42:52', '', NULL, NULL),
(21, 9, 'Fatou', 'sow', 'Pikine', '775552211', 'sowfatou@gmail.com', 'CNI', '25554879621', 'ROLE_PUBLIC', '2022-05-16 16:43:34', '', NULL, NULL),
(22, 9, 'Cheikh', 'THIAM', '414 FASS MBAO', '775690863', 'cheikh.thiam@senelec.sn', 'CNI', '12345678902', 'ROLE_PUBLIC', '2022-05-16 16:58:35', '', NULL, NULL),
(23, 16, 'Bamba', 'BEYE', 'C12 SC', '52828828', 'sjsjsjsjks@kksksk.com', 'Passeport', '209928838', 'ROLE_PUBLIC', '2022-05-16 17:04:44', '', NULL, NULL),
(24, 13, 'Kebe', 'Momo', 'Grand', '777777', 'moomo@yahoo.fr.com', 'CNI', '12345678901', 'ROLE_PUBLIC', '2022-05-16 17:12:54', '', NULL, NULL),
(25, 10, 'Mamadou Lamine', 'KEBE', 'Thiaroye Gare', '777180148', 'kebe.lamine@cossuel.sn', 'CNI', '1751199902', 'ROLE_PUBLIC', '2022-05-19 12:36:36', '', NULL, NULL),
(26, 15, 'Modou', 'Fall', 'u8', '778563322', 'fall@gmail.com', 'CNI', '12365489756', 'ROLE_PUBLIC', '2022-05-19 12:53:45', '', NULL, NULL),
(27, 20, 'Samba', 'Fall', 'Keur massar3', '778962365', 'fallsamba@gmail.com', 'CNI', '1236149445623', 'ROLE_PUBLIC', '2022-06-01 09:26:05', '', NULL, NULL),
(28, 1, 'Badiane', 'Macodou', 'hurom', '789652302', 'badianemacc@gmail.com', 'CNI', '123568944562', 'ROLE_PUBLIC', '2022-06-01 12:38:22', '', NULL, NULL),
(29, 9, 'Mamadou', 'Koulibaly', '2eme robinet', '786322664', 'kouli@gmail.com', 'CNI', '1236547895462', 'ROLE_PUBLIC', '2022-06-01 13:09:33', '', NULL, NULL),
(30, 9, 'Mamadou', 'Koulibaly', '2eme robinet', '786322664', 'kouli@gmail.com', 'CNI', '1235689402321', 'ROLE_PUBLIC', '2022-06-01 13:18:53', '', NULL, NULL),
(31, 2, 'Mamadou', 'FAYE', 'Thiès 2', '779876543', 'mlthioune@gmail.com', 'CNI', '1878909987651', 'ROLE_PUBLIC', '2022-06-01 13:27:01', '', NULL, NULL),
(32, NULL, 'Guide', 'User', '', '781529360', 'esaienourdine.s@gmail.com', '', '', 'ROLE_PUBLIC', '2022-06-01 16:25:35', '', NULL, NULL),
(33, NULL, 'Utilisateur', 'Guide', '', '762383853', 'nourdine.sorgho@kangameconsulting.com', '', '', 'ROLE_PUBLIC', '2022-06-01 18:23:46', '', NULL, NULL),
(34, 16, 'Utilisateur', 'Guide', '12345', '762383853', 'nourdine.sorgho@kangameconsulting.com', 'Passeport', 'A3003838', 'ROLE_PUBLIC', '2022-06-01 18:37:00', '', NULL, NULL),
(35, 13, 'gotier', 'sopa', 'patte d\'oie', '779601233', 'gotier@gmail.com', 'CNI', '1235894564541', 'ROLE_PUBLIC', '2022-06-02 10:45:06', '', NULL, NULL),
(36, 14, 'Moussa', 'faye', 'poguene', '776322664', 'faye.moussa@gmail.com', 'CNI', '1253102360231', 'ROLE_PUBLIC', '2022-06-02 15:39:49', '', NULL, NULL),
(37, 2, 'BOUBACAR', 'SENE', '1111', '775755243', 'test@gmail.com', 'CNI', '1234', 'ROLE_PUBLIC', '2022-06-02 16:32:24', '', NULL, NULL),
(38, 2, 'BOUBACAR', 'SENE', '1111', '775755243', 'test@gmail.com', 'CNI', '1234', 'ROLE_PUBLIC', '2022-06-03 09:39:26', '', NULL, NULL),
(39, 2, 'BOUBACAR', 'SENE', '1111', '775755243', 'test@gmail.com', 'CNI', '1234', 'ROLE_PUBLIC', '2022-06-03 10:02:19', '', NULL, NULL),
(40, NULL, 'Mara', 'Badiane', '', '778953622', 'marabadiane@gmail.com', '', '', 'ROLE_PUBLIC', '2022-06-03 10:21:34', '', NULL, NULL),
(41, 2, 'BOUBACAR', 'SENE', '1111', '775755243', 'test@gmail.com', 'CNI', '1234', 'ROLE_PUBLIC', '2022-06-03 10:22:03', '', NULL, NULL),
(42, NULL, 'Makhfuz', 'Badiane', '', '786322664', 'modoumakhuz@gmail.com', '', '', 'ROLE_PUBLIC', '2022-06-03 10:39:22', '', NULL, NULL),
(43, 13, 'Maguette', 'KONARE', 'Gueule Tapée', '784702146', 'pklf@kk.chn', 'CNI', '2751199902303', 'ROLE_PUBLIC', '2022-06-03 11:42:08', '', NULL, NULL),
(44, 13, 'Maguette', 'KONARE', 'Gueule Tapée', '784702146', 'pklf@kk.chn', 'CNI', '2751199902303', 'ROLE_PUBLIC', '2022-06-03 11:54:46', '', NULL, NULL),
(45, 13, 'Mar', 'Loloclone', 'Camberene', '708378701', 'mail@mail.com', 'CNI', '123456708911', 'ROLE_PUBLIC', '2022-06-03 12:29:08', '', NULL, NULL),
(46, 16, 'Guide', 'User', '12345', '781529360', 'esaienourdine.s@gmail.com', 'CNI', '122452542542', 'ROLE_PUBLIC', '2022-06-03 13:49:43', '', NULL, NULL),
(47, 3, 'Baba', 'LAM', 'Thies', '7777777777', 'x@g.com', 'CNI', '175424', 'ROLE_PUBLIC', '2022-06-03 15:45:19', '', NULL, NULL),
(48, 3, 'Ismaila', 'NDIAYE', 'Guinaw Rails', '777741', NULL, 'CNI', '78545', 'ROLE_PUBLIC', '2022-06-03 15:57:00', '', NULL, NULL),
(49, NULL, 'Makha', 'makhfuza', '', '763402414', 'modoumar@esp.sn', '', '', 'ROLE_PUBLIC', '2022-06-03 16:30:59', '', NULL, NULL),
(50, NULL, 'Souleymane', 'BA', '', '774462727', 'souleymane.ba@gmail.com', '', '', 'ROLE_PUBLIC', '2022-06-03 20:34:50', '', NULL, NULL),
(51, 22, 'Pape', 'DIOP', 'Cambérene', '774462727', 'souleymane.ba@gmail.com', 'CNI', '1871198100774', 'ROLE_PUBLIC', '2022-06-03 20:45:56', '', NULL, NULL),
(52, 10, 'Mamadou Lamine', 'KEBE', 'Thiaroye Gare', '777180148', 'kebe.lamine@cossuel.sn', 'CNI', '17', 'ROLE_PUBLIC', '2022-06-07 09:36:58', '', NULL, NULL),
(53, 9, 'Fatou', 'Sow', 'Pikine', '770000000', NULL, 'CNI', '20256545587', 'ROLE_PUBLIC', '2022-06-07 10:18:57', '', NULL, NULL),
(54, 13, 'errr', 'rttt', 'Pikine', '0770000000', NULL, 'CNI', '20256545587', 'ROLE_PUBLIC', '2022-06-07 11:21:57', '', NULL, NULL),
(55, 22, 'Aliou', 'KANDJI', 'Marché colobane', '779273742', NULL, 'CNI', '1238200705179', 'ROLE_PUBLIC', '2022-06-07 15:28:21', '', NULL, NULL),
(56, 13, 'Soumaila', 'DJAHO', 'FASS', '785958102', 'soumdjaho@gmail.com', 'Passeport', '500614236', 'ROLE_PUBLIC', '2022-06-08 09:58:00', '', NULL, NULL),
(57, 9, 'SOULEYMANE', 'SEYE', 'RUE WAGANE DIOUF,DAKAR SENEGAL, Imeuble Mame Alassane FALL', '775755243', 'abdoulaye.diallo@cossuel.sn', 'CNI', '1234567890123', 'ROLE_PUBLIC', '2022-06-10 12:56:16', '', NULL, NULL),
(58, 14, 'Soumaila', 'DJAHO', 'FASS', '67129854', 'soumdjaho@gmail.com', 'CNI', '1234567', 'ROLE_PUBLIC', '2022-06-11 09:51:43', '', NULL, NULL),
(59, NULL, 'Soumaila', 'DJAHO', '', '785958102', 'soumdjaho@gmail.com', '', '', 'ROLE_PUBLIC', '2022-06-11 10:16:34', '', NULL, NULL),
(60, 22, 'bOUBACAR', 'SOW', 'Camverene Carrefour', '775755243', 'abdoulaye.diallo@cossuel.sn', 'CNI', '123538495760984', 'ROLE_PUBLIC', '2022-06-13 13:13:26', '', NULL, NULL),
(61, 14, 'Samba', 'Sarr', 'hann', '778788877', 'sarr@gmailcom', 'CNI', '1237896996968', 'ROLE_PUBLIC', '2022-06-14 10:03:54', '', NULL, NULL),
(62, 26, 'Mariama', 'TOURE', 'Mamelles Aviations B20', '77723', NULL, 'CNI', '275119990230', 'ROLE_PUBLIC', '2022-06-15 15:49:23', '', NULL, NULL),
(63, 13, 'ABDOULAYE', 'DIALLO', 'RUE WAGANE DIOUF,DAKAR SENEGAL, Imeuble Mame Alassane FALL', '775755243', 'abdoulaye.diallo@cossuel.sn', 'CNI', '1234567890123', 'ROLE_PUBLIC', '2022-06-15 16:35:25', '', NULL, NULL),
(64, 16, 'ABDOULAYE', 'DIALLO', 'RUE WAGANE DIOUF,DAKAR SENEGAL, Imeuble Mame Alassane FALL', '775755243', 'abdoulaye.diallo@cossuel.sn', 'CNI', '1234567890123', 'ROLE_PUBLIC', '2022-06-15 22:49:52', '', NULL, NULL),
(65, 2, 'BOUBACAR', 'SENE', NULL, '775755243', 'abdoulaye.diallo@cossuel.sn', 'CNI', '1234', 'ROLE_PUBLIC', '2022-06-16 09:56:36', '', NULL, NULL),
(66, NULL, 'Mouhamad Mourtada', 'DIOP', 'Dakar', '773799200', 'mouhamadmourtadadiop@esp.sn', 'CNI', '1', 'ROLE_PUBLIC', '2022-06-16 16:24:39', '', NULL, NULL),
(67, 15, 'khadim', 'ndiaye', 'parcelle assainies', '786094021', 'mourtadadiop.1999@gmail.com', 'CNI', '1225200010101', 'ROLE_PUBLIC', '2022-06-16 17:26:21', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `grille`
--

CREATE TABLE `grille` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `installation`
--

CREATE TABLE `installation` (
  `id` int(11) NOT NULL,
  `localite_id` int(11) DEFAULT NULL,
  `type_construction_id` int(11) DEFAULT NULL,
  `nature_batiment_id` int(11) DEFAULT NULL,
  `nature_travaux_id` int(11) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `compteur` varchar(255) DEFAULT NULL,
  `abonnement` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `nom_site` varchar(255) DEFAULT NULL,
  `lattitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `date_installation` datetime DEFAULT NULL,
  `grst_reseau` varchar(255) DEFAULT NULL,
  `neuf15` varchar(255) DEFAULT NULL,
  `existant15` varchar(255) DEFAULT NULL,
  `neuf25` varchar(255) DEFAULT NULL,
  `existant25` varchar(255) DEFAULT NULL,
  `neuf_autre` varchar(255) DEFAULT NULL,
  `existant_autre` varchar(255) DEFAULT NULL,
  `titre_prop` varchar(255) DEFAULT NULL,
  `intervenant` varchar(255) DEFAULT NULL,
  `intervenant_autre` varchar(255) DEFAULT NULL,
  `collectif` varchar(255) DEFAULT NULL,
  `logement` varchar(255) DEFAULT NULL,
  `priece` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL,
  `activite` varchar(255) DEFAULT NULL,
  `niveau` varchar(255) DEFAULT NULL,
  `habitation` varchar(255) DEFAULT NULL,
  `alimente` varchar(255) DEFAULT NULL,
  `usages` varchar(255) NOT NULL,
  `proprietaire_id` int(11) DEFAULT NULL,
  `electricien_id` int(11) DEFAULT NULL,
  `step` int(11) NOT NULL,
  `type_installation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `installation`
--

INSERT INTO `installation` (`id`, `localite_id`, `type_construction_id`, `nature_batiment_id`, `nature_travaux_id`, `etat`, `compteur`, `abonnement`, `adresse`, `nom_site`, `lattitude`, `longitude`, `date_installation`, `grst_reseau`, `neuf15`, `existant15`, `neuf25`, `existant25`, `neuf_autre`, `existant_autre`, `titre_prop`, `intervenant`, `intervenant_autre`, `collectif`, `logement`, `priece`, `created_at`, `created_by`, `updated_at`, `updated_by`, `activite`, `niveau`, `habitation`, `alimente`, `usages`, `proprietaire_id`, `electricien_id`, `step`, `type_installation`) VALUES
(13, 4, 3, NULL, 1, 'Soumis', 'AX-32', 'BD_0121', 'Thies Nord 02', 'Site A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '2', NULL, '2022-04-20 14:23:49', '1', NULL, NULL, NULL, NULL, 'Ville - Thies Nord 02', '1', 'non_domestique', 2, 4, 10, NULL),
(14, 4, 5, NULL, 3, 'Soumis', NULL, NULL, 'Thies Nord 01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '10', '2022-04-20 21:25:47', '1', NULL, NULL, NULL, '2', 'Q1 - Thies Nord 01', '', 'domestique', 3, 3, 10, NULL),
(15, 4, 6, NULL, NULL, 'Soumis', NULL, NULL, 'Thiès SD 01', NULL, '1', '1.1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2', '2022-04-25 08:58:33', '33', NULL, NULL, NULL, '1', 'Ville Sud Thiès', '', 'domestique', 21, 23, 9, NULL),
(16, 4, 5, NULL, 1, 'Soumis', NULL, NULL, 'ACAPESS', NULL, '1.23', '1.234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '8', '2022-04-29 10:52:04', '9', NULL, NULL, NULL, '2', 'Autoroute', '', 'domestique', 4, 5, 10, NULL),
(17, 4, 6, NULL, 1, 'Soumis', NULL, NULL, 'ECOLE YEVUS SELIM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '0', '2022-04-29 15:18:33', '11', NULL, NULL, NULL, NULL, '12', '', 'domestique', 5, 6, 10, NULL),
(18, 4, 5, NULL, 1, 'Soumis', '08098989090909090', '22222222', 'thies', NULL, '12', '78', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '20', '2022-04-30 02:43:49', '12', NULL, NULL, NULL, '1', 'bokk', '1', 'domestique', 6, 7, 9, NULL),
(20, 4, 2, NULL, 1, 'Soumis', NULL, NULL, 'thies66 l\' ecole 2', 'togore', '34,4', '55,4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '6', NULL, '2022-04-30 15:56:41', '12', NULL, NULL, 'logement', NULL, 'thies', '', 'non_domestique', 7, 8, 9, NULL),
(21, 4, 5, NULL, 1, 'Soumis', '13457497608', '1546857957', 'HLM NIMZATT', NULL, '14', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-04-30 17:34:10', '10', NULL, NULL, NULL, '2', 'NIMZATT', '1', 'domestique', 11, 13, 10, NULL),
(22, 4, 3, NULL, 4, 'Soumis', NULL, NULL, 'Catchor', NULL, NULL, NULL, NULL, NULL, '2', '4', '4', '6', '6', '9', NULL, 'LAMINE THIOUNE', '1', '', NULL, NULL, '2022-05-01 01:28:46', '11', NULL, NULL, NULL, NULL, '02', '', 'non_domestique', 8, 10, 9, NULL),
(23, 4, 8, NULL, 1, 'Soumis', NULL, NULL, 'Dakar', NULL, '123', '2345mm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-05-04 18:46:28', '1', NULL, NULL, NULL, NULL, 'PMA', '', 'domestique', 10, 12, 10, NULL),
(24, 15, 5, NULL, 1, 'Soumis', '1114542', '1521', 'Parcelles unites 5', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '10', '2022-05-16 16:20:46', '17', NULL, NULL, NULL, '3', 'frontier camberene', '1', 'domestique', 12, 14, 10, NULL),
(25, 15, 7, NULL, 2, 'Soumis', NULL, NULL, 'parcelles U26', NULL, '0.0002', '1.225', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-05-16 16:21:19', '18', NULL, NULL, 'commerce', NULL, 'villa 1018', '', 'domestique', 14, 16, 10, NULL),
(26, 11, 5, NULL, 1, 'Soumis', '1234567', '651156', 'Bambilor CDC', NULL, '15365165', '1651651', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Personne lamda', '1', '', NULL, '5', '2022-05-16 16:21:54', '17', NULL, NULL, NULL, '1', 'Villa 65', '1', 'domestique', 13, 15, 10, NULL),
(27, 13, 6, NULL, 3, 'Soumis', NULL, NULL, 'Cite Impots et Domaines', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Senelec', '1', '', NULL, '3', '2022-05-16 16:24:45', '42', NULL, NULL, NULL, NULL, 'Quartier', '', 'domestique', 15, 17, 10, NULL),
(28, 10, 6, NULL, 3, 'Soumis', NULL, NULL, 'Thiaroye sur mer', 'Maria', '9898089', '999898', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '10', '3', '2022-05-16 16:29:02', '41', NULL, NULL, NULL, NULL, '555669', '', 'domestique', 19, 19, 9, NULL),
(29, 20, 9, NULL, 2, 'Soumis', NULL, NULL, 'CITE GENDARMERIE', NULL, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-05-16 16:29:38', '40', NULL, NULL, NULL, NULL, 'DAKAR', '', 'domestique', 16, 18, 9, NULL),
(30, 16, 11, NULL, 4, 'Soumis', NULL, NULL, 'Sacre Coeur 4', NULL, '7', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Senelec', '', '', NULL, NULL, '2022-05-16 16:39:23', '42', NULL, NULL, NULL, NULL, 'Villa', '', 'domestique', 17, 20, 9, NULL),
(31, 11, 2, NULL, 1, 'Soumis', NULL, NULL, 'rufisque ouest', NULL, '02.33', '10.33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-05-16 16:41:37', '18', NULL, NULL, 'commerce', NULL, 'villa 1018', '', 'non_domestique', 18, 21, 9, NULL),
(32, 17, 12, NULL, 1, 'En Saisie 4/6', NULL, NULL, 'Yoff Cite Apecsy 2', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-05-16 16:47:29', '42', NULL, NULL, NULL, '8', NULL, '', 'erp_ert', NULL, NULL, 4, 'monophase'),
(33, 4, NULL, NULL, NULL, 'En Saisie 2/6', NULL, NULL, 'vincens', NULL, '0.25', '0.25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 16:52:14', '18', NULL, NULL, NULL, NULL, 'villa 1018', '', 'erp_ert', NULL, NULL, 2, NULL),
(34, 9, 13, NULL, 1, 'En Saisie 6/6', NULL, NULL, 'FASS MBAO', NULL, '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-05-16 16:56:31', '40', NULL, NULL, 'RESTAURANT', NULL, 'DAKAR', '', 'erp_ert', 20, 22, 6, NULL),
(35, 8, 3, NULL, 1, 'Soumis', NULL, NULL, 'Rycc', NULL, '98980890000000000', '00000000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-05-16 17:09:20', '41', NULL, NULL, NULL, NULL, 'Fgngvb', '', 'non_domestique', 22, 24, 7, NULL),
(36, 17, 14, NULL, 1, 'Soumis', NULL, NULL, 'Apecsy 1', NULL, '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-05-19 12:36:03', '42', NULL, NULL, NULL, NULL, 'Atelier', '', 'erp_ert', 23, 25, 10, NULL),
(37, 19, NULL, NULL, NULL, 'En Saisie 2/6', NULL, NULL, 'LS', NULL, '111', '111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 12:43:49', '31', NULL, NULL, NULL, NULL, 'B7', '', 'erp_ert', NULL, NULL, 2, NULL),
(38, 15, 12, NULL, 1, 'Soumis', NULL, NULL, 'u5', NULL, '12', '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '50', '2022-05-19 12:51:39', '18', NULL, NULL, NULL, '5', 'boulevar', '', 'erp_ert', 24, 26, 8, NULL),
(42, 2, NULL, NULL, NULL, 'En Saisie 4/6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-31 12:53:14', '33', NULL, NULL, NULL, NULL, NULL, NULL, 'domestique', NULL, 1, 4, NULL),
(44, 4, 5, NULL, 1, 'Soumis', '13457497608', '1546857957', 'HLM NIMZATT', NULL, '14', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-05-31 14:37:19', '1', NULL, NULL, NULL, '2', 'NIMZATT', '1', 'domestique', 11, 13, 9, NULL),
(46, 15, 13, NULL, 1, 'Soumis', NULL, NULL, 'Parcelles unites 5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-01 09:17:23', '31', NULL, NULL, 'Hopital', NULL, 'extension', '', 'erp_ert', 25, 27, 10, 'triphase'),
(47, 1, 5, NULL, 1, 'Soumis', NULL, NULL, 'Bene raye', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-06-01 12:36:24', '31', NULL, NULL, NULL, '1', NULL, '', 'domestique', 26, 28, 9, 'monophase'),
(48, 9, 5, NULL, 1, 'Soumis', NULL, NULL, '2eme robinet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '9', '2022-06-01 13:05:43', '18', NULL, NULL, NULL, '2', NULL, '', 'domestique', 27, 29, 10, 'monophase'),
(49, 9, 5, NULL, 1, 'Soumis', NULL, NULL, '2eme robinet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '9', '2022-06-01 13:16:40', '18', NULL, NULL, NULL, '2', NULL, '', 'domestique', 28, 30, 7, 'monophase'),
(50, 8, 4, NULL, 1, 'Soumis', NULL, NULL, 'cite enseignant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-01 13:25:18', '18', NULL, NULL, NULL, NULL, NULL, '', 'non_domestique', 29, 31, 7, 'monophase'),
(51, 15, 13, NULL, 1, 'En Saisie 6/6', NULL, NULL, 'Parcelles unites 5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-01 15:21:33', '31', NULL, NULL, 'Hopital', NULL, 'extension', '', 'erp_ert', 25, 27, 6, 'triphase'),
(52, 16, 5, NULL, 1, 'Soumis', NULL, NULL, 'rue bis 60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '7', '2022-06-01 18:33:09', '17', NULL, NULL, NULL, '2', '123453', '', 'domestique', 30, 34, 10, 'triphase'),
(53, 10, 5, NULL, 1, 'Soumis', NULL, NULL, 'pikine', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '8', '2022-06-02 10:39:23', '49', NULL, NULL, NULL, '2', NULL, '', 'domestique', 31, 35, 7, 'monophase'),
(55, 4, 6, NULL, 1, 'Soumis', NULL, NULL, 'ECOLE YEVUS SELIM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '0', '2022-06-02 13:06:54', '1', NULL, NULL, NULL, NULL, '12', '', 'domestique', 5, 6, 7, NULL),
(56, 4, 4, NULL, 1, 'Soumis', NULL, NULL, 'vicelina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-02 15:35:54', '49', NULL, NULL, NULL, NULL, NULL, '', 'non_domestique', 32, 36, 10, 'monophase'),
(57, 23, 1, NULL, 1, 'Soumis', NULL, NULL, 'LS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2', '2022-06-02 16:28:44', '31', NULL, NULL, NULL, '3', NULL, '', 'non_domestique', 33, 37, 10, 'monophase'),
(58, 4, 5, NULL, 1, 'En Saisie 5/6', NULL, NULL, 'dakar', 'keur Cossuel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '2', '2', '2022-06-03 09:11:01', '31', NULL, NULL, NULL, '1', NULL, '', 'domestique', NULL, 38, 5, 'monophase'),
(59, 4, 1, NULL, 1, 'Soumis', NULL, NULL, 'zig', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2', '2022-06-03 09:49:36', '31', NULL, NULL, NULL, '1', NULL, '', 'non_domestique', 34, 39, 8, 'triphase'),
(60, 2, 14, NULL, 2, 'Soumis', NULL, NULL, 'Colobane', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Moussa Bangoura', '1', '', NULL, NULL, '2022-06-03 10:15:39', '31', NULL, NULL, NULL, NULL, NULL, '', 'erp_ert', 35, 41, 7, 'monophase'),
(61, 18, 5, NULL, 1, 'En Saisie 6/6', NULL, NULL, 'Malika 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-06-03 11:35:19', '61', NULL, NULL, NULL, '1', NULL, '', 'domestique', 36, 43, 6, 'monophase'),
(62, 10, 6, NULL, 3, 'Soumis', NULL, NULL, 'Thiaroye sur mer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '3', '2022-06-03 11:54:12', '61', NULL, NULL, NULL, NULL, NULL, '', 'domestique', 37, 44, 9, 'monophase'),
(63, 16, 7, NULL, 4, 'Soumis', NULL, NULL, 'Sacre coeur 3', NULL, NULL, NULL, NULL, NULL, '5', '5', '7', '7', '3', '63', NULL, NULL, '', '', NULL, '2', '2022-06-03 12:12:36', '61', NULL, NULL, NULL, NULL, NULL, '', 'domestique', 38, 45, 10, 'triphase'),
(64, 8, NULL, NULL, NULL, 'En Saisie 2/6', NULL, NULL, 'Fadia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-03 12:54:05', '61', NULL, NULL, NULL, NULL, NULL, '', 'erp_ert', NULL, NULL, 2, NULL),
(65, 4, 6, NULL, 1, 'Soumis', NULL, NULL, 'rue bis 60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-06-03 13:20:21', '33', NULL, NULL, NULL, NULL, NULL, '', 'domestique', 39, 46, 9, 'triphase'),
(66, 16, 7, NULL, 4, 'Soumis', NULL, NULL, 'Sacre coeur 3', NULL, NULL, NULL, NULL, NULL, '5', '5', '7', '7', '3', '63', NULL, NULL, '', '', NULL, '2', '2022-06-03 14:58:08', '31', NULL, NULL, NULL, NULL, NULL, '', 'domestique', 38, 45, 10, 'triphase'),
(67, 4, 5, NULL, 1, 'Soumis', '13457497608', '1546857957', 'HLM NIMZATT', NULL, '14', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-06-03 15:17:16', '61', NULL, NULL, NULL, '2', 'NIMZATT', '1', 'domestique', 11, 13, 8, NULL),
(68, 4, 5, NULL, 1, 'En Saisie 6/6', '13457497608', '1546857957', 'HLM NIMZATT', NULL, '14', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-06-03 15:18:19', '61', NULL, NULL, NULL, '2', 'NIMZATT', '1', 'domestique', 11, 13, 6, NULL),
(69, 4, 5, NULL, 1, 'En Saisie 6/6', '13457497608', '1546857957', 'HLM NIMZATT', NULL, '14', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-06-03 15:20:10', '61', NULL, NULL, NULL, '2', 'NIMZATT', '1', 'domestique', 11, 13, 6, NULL),
(70, 4, 3, NULL, 2, 'Soumis', NULL, NULL, 'Vincens', 'Skylar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '5', NULL, '2022-06-03 15:41:57', '61', NULL, NULL, NULL, NULL, NULL, '', 'non_domestique', 40, 47, 9, 'triphase'),
(71, 11, 2, NULL, 2, 'Soumis', NULL, NULL, 'Niaga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-03 15:54:42', '61', NULL, NULL, 'Boutique', NULL, NULL, '', 'non_domestique', 41, 48, 7, 'monophase'),
(72, 11, 5, NULL, 1, 'Soumis', NULL, NULL, 'Niakhirate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '4', '2022-06-03 20:38:34', '17', NULL, NULL, NULL, '1', NULL, '', 'domestique', 42, 51, 7, 'monophase'),
(73, 17, 13, NULL, 2, 'En Saisie 6/6', NULL, NULL, 'Apecsy 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-07 09:34:41', '61', NULL, NULL, 'Restaurant', NULL, NULL, '', 'erp_ert', 43, 52, 6, 'monophase'),
(74, 16, 13, NULL, 1, 'Soumis', NULL, NULL, 'Cité BCEAO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-07 10:17:28', '61', NULL, NULL, 'USINE', NULL, NULL, '', 'erp_ert', 44, 53, 7, 'triphase'),
(75, 13, 5, NULL, 1, 'En Saisie 5/6', NULL, NULL, 'dakar 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '10', '2022-06-07 11:21:09', '61', NULL, NULL, NULL, '5', NULL, '', 'domestique', NULL, 54, 5, 'monophase'),
(76, 4, 2, NULL, 1, 'Soumis', NULL, NULL, 'Marché Colobane', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-07 15:18:05', '67', NULL, NULL, 'CENTRE COMM', NULL, NULL, '', 'non_domestique', 45, 55, 7, 'monophase'),
(77, 2, NULL, NULL, NULL, 'En Saisie 4/6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-08 09:05:39', '17', NULL, NULL, NULL, NULL, NULL, NULL, 'domestique', NULL, 1, 4, NULL),
(78, 11, 6, NULL, 1, 'Soumis', NULL, NULL, 'Fass', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '14', '2022-06-08 09:56:23', '17', NULL, NULL, NULL, NULL, NULL, '', 'domestique', 46, 56, 7, 'monophase'),
(79, 13, 5, NULL, 1, 'En Saisie 4/6', NULL, NULL, 'Builders', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '3', '2022-06-08 16:30:29', '18', NULL, NULL, NULL, '3', NULL, '', 'domestique', NULL, NULL, 4, 'monophase'),
(80, 11, 2, NULL, 1, 'En Saisie 4/6', NULL, NULL, 'Marché Colobane', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-09 09:17:47', '67', NULL, NULL, 'CENTRE COMM', NULL, NULL, '', 'non_domestique', NULL, NULL, 4, 'monophase'),
(81, 17, 6, NULL, 1, 'En Saisie 4/6', NULL, NULL, 'Apecsy 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '3', '2022-06-09 11:59:41', '61', NULL, NULL, NULL, NULL, NULL, '', 'domestique', NULL, NULL, 4, 'monophase'),
(82, 21, 1, NULL, 1, 'En Saisie 5/6', NULL, NULL, 'RUE WAGANE DIOUF,DAKAR SENEGAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '5', '2022-06-10 12:52:55', '31', NULL, NULL, NULL, '4', 'Imeuble Mame Alassane FALL', '', 'non_domestique', NULL, 57, 5, 'monophase'),
(83, 14, 5, NULL, 1, 'Soumis', NULL, NULL, 'Mariste 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '4', '2022-06-11 09:49:16', '17', NULL, NULL, NULL, '2', NULL, '', 'domestique', 47, 58, 7, 'monophase'),
(84, 32, 13, NULL, 4, 'En Saisie 5/6', NULL, NULL, 'RUE WAGANE DIOUF,DAKAR SENEGAL', NULL, NULL, NULL, NULL, NULL, '15', NULL, '24', NULL, '0', NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-13 12:50:19', '31', NULL, NULL, NULL, NULL, 'Imeuble Mame Alassane FALL', '', 'erp_ert', NULL, 60, 5, 'triphase'),
(85, 22, 5, NULL, 1, 'Soumis', NULL, NULL, 'kawsrara 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '10', '2022-06-14 08:34:06', '18', NULL, NULL, NULL, '2', NULL, '', 'domestique', 48, 1, 7, 'triphase'),
(86, 13, 1, NULL, 1, 'Soumis', NULL, NULL, 'bulders 1', 'cite rtss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '60', '100', '2022-06-14 09:27:01', '18', NULL, NULL, NULL, '4', 'senelec', '', 'non_domestique', 49, 61, 7, 'monophase'),
(87, 24, 6, NULL, 1, 'Soumis', NULL, NULL, 'Fenetre mermoz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2', '2022-06-15 15:46:05', '61', NULL, NULL, NULL, NULL, NULL, '', 'domestique', 50, 62, 7, 'monophase'),
(88, 16, 1, NULL, 1, 'Soumis', NULL, NULL, 'RUE WAGANE DIOUF,DAKAR SENEGAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2', '2022-06-15 16:32:45', '31', NULL, NULL, NULL, '2', 'Imeuble Mame Alassane FALL', '', 'non_domestique', 51, 63, 7, 'monophase'),
(89, 16, 2, NULL, 2, 'En Saisie 6/6', NULL, NULL, 'RUE WAGANE DIOUF,DAKAR SENEGAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-06-15 22:48:33', '31', NULL, NULL, NULL, NULL, 'Imeuble Mame Alassane FALL', '', 'non_domestique', 52, 64, 6, 'monophase'),
(90, 22, 6, NULL, 1, 'Soumis', NULL, NULL, 'AU NIVEAU DU PONT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '3', '2022-06-16 09:55:14', '31', NULL, NULL, NULL, NULL, 'STATION EDK', '', 'domestique', 53, 65, 7, 'monophase'),
(91, 20, 5, NULL, 1, 'En Saisie 6/6', NULL, NULL, 'keur massar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '7', '2022-06-16 17:19:30', '74', NULL, NULL, NULL, '2', NULL, '', 'domestique', 54, 67, 6, 'monophase');

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

CREATE TABLE `localite` (
  `id` int(11) NOT NULL,
  `departement_id` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `agence_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `localite`
--

INSERT INTO `localite` (`id`, `departement_id`, `nom`, `code`, `created_at`, `updated_at`, `created_by`, `updated_by`, `agence_id`) VALUES
(1, 7, 'Thiès Ouest', 'TH 01-01', '2022-04-15 00:31:58', NULL, '', NULL, 4),
(2, 8, 'Thiès Sud', 'TH 03-01', '2022-04-15 01:03:22', NULL, '', NULL, NULL),
(3, 8, 'Thiès Nord', 'TH 03-02', '2022-04-15 01:06:12', NULL, '', NULL, NULL),
(4, 1, 'Vincens', '150', '2022-05-01 01:09:38', NULL, '', NULL, 1),
(8, 2, 'Guediawaye', '210', '2022-05-01 01:11:43', NULL, '', NULL, 2),
(9, 3, 'Pikine', '230', '2022-05-01 01:13:04', NULL, '', NULL, NULL),
(10, 3, 'Thiaroye', '250', '2022-05-01 01:14:18', NULL, '', NULL, NULL),
(11, 5, 'Rufisque', '240', '2022-05-01 01:14:58', NULL, '', NULL, NULL),
(13, 1, 'Patte d\'Oie', '140', '2022-05-01 01:47:44', NULL, '', NULL, 1),
(14, 1, 'Hann Mariste', '151', '2022-05-01 01:48:12', NULL, '', NULL, 1),
(15, 1, 'Parcelles Assainies', '160', '2022-05-01 01:49:29', NULL, '', NULL, 1),
(16, 1, 'Sacré Cœur', '170', '2022-05-01 01:49:46', NULL, '', NULL, 1),
(17, 1, 'Yoff', '221', '2022-05-01 01:52:02', NULL, '', NULL, 1),
(18, 3, 'Malika', '221', '2022-05-01 01:52:59', NULL, '', NULL, NULL),
(19, 2, 'Daroukhane', '260', '2022-05-01 01:54:29', NULL, '', NULL, NULL),
(20, 2, 'Keur Massar', '220', '2022-05-01 01:55:02', NULL, '', NULL, NULL),
(21, 5, 'Mbao', '270', '2022-05-01 01:56:49', NULL, '', NULL, NULL),
(22, 1, 'Cambérène', '23', '2022-06-02 08:44:46', NULL, '', NULL, 1),
(23, 3, 'Pikine 2', 'PK-TEST', '2022-06-02 16:27:31', NULL, '', NULL, 1),
(24, 1, 'Mermoz Sacre Coeur', '130', '2022-06-13 11:41:53', NULL, '', NULL, 1),
(25, 1, 'Ngor', '180', '2022-06-13 11:43:18', NULL, '', NULL, 1),
(26, 1, 'Ouakam', '130', '2022-06-13 11:44:21', NULL, '', NULL, 1),
(27, 1, 'Gueule Tapée-Fass-Colobane', 'Médina', '2022-06-13 11:47:40', NULL, '', NULL, 1),
(28, 1, 'Biscuiterie', '110', '2022-06-13 11:48:34', NULL, '', NULL, 1),
(29, 1, 'Dieuppeul Derklé', '110', '2022-06-13 11:50:17', NULL, '', NULL, 1),
(30, 1, 'Grand Dakar', '110', '2022-06-13 11:51:15', NULL, '', NULL, 1),
(31, 1, 'Hann Bel Air', '120', '2022-06-13 11:52:35', NULL, '', NULL, 1),
(32, 1, 'HLMDakar', '110', '2022-06-13 11:53:54', NULL, '', NULL, 1),
(33, 1, 'Sicap-Liberté', '151', '2022-06-13 11:54:34', NULL, '', NULL, 1),
(34, 1, 'Cambérène', '160', '2022-06-13 11:56:04', NULL, '', NULL, NULL),
(35, 1, 'Grand Yoff', '140', '2022-06-13 11:57:16', NULL, '', NULL, 1),
(36, 1, 'liberté5', '110', '2022-06-13 12:00:57', NULL, '', NULL, 1),
(37, 1, 'Gnary Tally', '110', '2022-06-13 12:02:47', NULL, '', NULL, 1),
(38, 1, 'Ouagou Niayes', '110', '2022-06-13 12:05:35', NULL, '', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `nature_batiment`
--

CREATE TABLE `nature_batiment` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `nature_travaux`
--

CREATE TABLE `nature_travaux` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `nature_travaux`
--

INSERT INTO `nature_travaux` (`id`, `code`, `nom`) VALUES
(1, 'Installation Neuve', 'Installation Neuve'),
(2, 'Mise en Sécurité', 'Mise en Sécurité'),
(3, 'Rénovation Totale', 'Rénovation Totale'),
(4, 'Rénovation Partielle', 'Rénovation Partielle'),
(5, 'Diagnostics', 'Diagnostics');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id` int(11) NOT NULL,
  `demande_id` int(11) DEFAULT NULL,
  `comptable_id` int(11) DEFAULT NULL,
  `date_paiement` datetime DEFAULT NULL,
  `mode` varchar(255) NOT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `etat_rembousement` varchar(255) DEFAULT NULL,
  `date_saisie` datetime NOT NULL,
  `paiement_effectue` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL,
  `observation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`id`, `demande_id`, `comptable_id`, `date_paiement`, `mode`, `reference`, `etat_rembousement`, `date_saisie`, `paiement_effectue`, `created_at`, `created_by`, `updated_at`, `updated_by`, `observation`) VALUES
(1, 4, NULL, '2022-05-12 11:30:06', 'Espèce', NULL, NULL, '2022-04-28 02:11:11', 1, '2022-04-28 02:11:11', '', NULL, NULL, NULL),
(2, 5, NULL, '2022-05-16 17:07:52', 'Espèce', NULL, NULL, '2022-04-29 10:57:23', 1, '2022-04-29 10:57:23', '', NULL, NULL, NULL),
(3, 6, NULL, '2022-05-04 00:43:53', 'Espèce', NULL, NULL, '2022-04-29 15:41:57', 1, '2022-04-29 15:41:57', '', NULL, NULL, NULL),
(4, 7, NULL, '2022-06-10 20:26:53', 'Espèce', NULL, NULL, '2022-04-30 03:10:07', 1, '2022-04-30 03:10:07', '', NULL, '45', NULL),
(5, 8, NULL, '2022-06-10 20:28:46', 'Espèce', NULL, NULL, '2022-04-30 16:07:56', 1, '2022-04-30 16:07:56', '', NULL, '45', 'tt'),
(6, 9, NULL, '2022-06-10 20:30:01', 'Espèce', NULL, NULL, '2022-05-01 16:51:21', 1, '2022-05-01 16:51:21', '', NULL, '45', NULL),
(7, 3, NULL, '2022-05-12 01:00:23', 'Espèce', NULL, NULL, '2022-05-04 00:43:38', 1, '2022-05-04 00:43:38', '', NULL, NULL, NULL),
(8, 10, NULL, '2022-05-04 18:54:04', 'Chèque', 'CH3456789', NULL, '2022-05-04 18:52:55', 1, '2022-05-04 18:52:55', '', NULL, NULL, NULL),
(9, 11, NULL, '2022-05-05 16:21:32', 'Chèque', 'CH1234', NULL, '2022-05-05 16:18:53', 1, '2022-05-05 16:18:53', '', NULL, NULL, NULL),
(10, 13, NULL, '2022-05-16 16:32:20', 'Espèce', NULL, NULL, '2022-05-16 16:32:10', 1, '2022-05-16 16:32:10', '', NULL, NULL, NULL),
(11, 16, NULL, '2022-06-11 11:05:44', 'Espèce', NULL, NULL, '2022-05-16 16:44:32', 1, '2022-05-16 16:44:32', '', NULL, '25', NULL),
(12, 12, NULL, '2022-05-16 16:49:45', 'Espèce', NULL, NULL, '2022-05-16 16:48:43', 1, '2022-05-16 16:48:43', '', NULL, NULL, NULL),
(13, 15, NULL, '2022-05-16 16:52:27', 'Espèce', NULL, NULL, '2022-05-16 16:51:52', 1, '2022-05-16 16:51:52', '', NULL, NULL, NULL),
(14, 19, NULL, '2022-06-11 11:08:17', 'Espèce', NULL, NULL, '2022-05-16 16:56:02', 1, '2022-05-16 16:56:02', '', NULL, '27', NULL),
(15, 20, NULL, '2022-06-10 10:02:08', 'Espèce', NULL, NULL, '2022-05-16 17:07:41', 1, '2022-05-16 17:07:41', '', NULL, '25', NULL),
(16, 17, NULL, '2022-06-10 09:41:19', 'Espèce', NULL, NULL, '2022-05-18 15:53:44', 1, '2022-05-18 15:53:44', '', NULL, '25', NULL),
(17, 32, NULL, '2022-06-01 09:37:41', 'Espèce', NULL, NULL, '2022-06-01 09:37:20', 1, '2022-06-01 09:37:20', '31', NULL, '31', NULL),
(18, 33, NULL, '2022-06-01 12:49:41', 'Espèce', NULL, NULL, '2022-06-01 12:49:31', 1, '2022-06-01 12:49:31', '31', NULL, '31', NULL),
(19, 34, NULL, '2022-06-01 14:55:20', 'Espèce', NULL, NULL, '2022-06-01 14:48:24', 1, '2022-06-01 14:48:24', '31', NULL, '31', NULL),
(20, 38, NULL, '2022-06-03 16:00:25', 'Espèce', NULL, NULL, '2022-06-02 15:48:43', 1, '2022-06-02 15:48:43', '28', NULL, '45', NULL),
(21, 40, NULL, '2022-06-02 16:03:18', 'Espèce', NULL, NULL, '2022-06-02 15:49:16', 1, '2022-06-02 15:49:16', '28', NULL, '31', NULL),
(22, 41, NULL, '2022-06-02 16:38:27', 'Espèce', NULL, NULL, '2022-06-02 16:38:04', 1, '2022-06-02 16:38:04', '31', NULL, '31', NULL),
(23, 42, NULL, NULL, 'Espèce', NULL, NULL, '2022-06-03 10:10:39', 0, '2022-06-03 10:10:39', '31', NULL, NULL, NULL),
(24, 44, NULL, '2022-06-03 12:05:38', 'Espèce', NULL, NULL, '2022-06-03 12:05:13', 1, '2022-06-03 12:05:13', '31', NULL, '31', NULL),
(25, 45, NULL, '2022-06-03 12:57:29', 'Espèce', NULL, NULL, '2022-06-03 12:57:17', 1, '2022-06-03 12:57:17', '50', NULL, '50', NULL),
(26, 22, NULL, '2022-06-03 14:59:46', 'Espèce', NULL, NULL, '2022-06-03 14:48:02', 1, '2022-06-03 14:48:02', '34', NULL, '34', 'ok'),
(27, 46, NULL, '2022-06-03 15:00:43', 'Espèce', NULL, NULL, '2022-06-03 15:00:27', 1, '2022-06-03 15:00:27', '50', NULL, '50', NULL),
(28, 31, NULL, '2022-06-13 11:33:13', 'Espèce', NULL, NULL, '2022-06-03 20:52:09', 1, '2022-06-03 20:52:09', '28', NULL, '45', 'ok'),
(29, 52, NULL, NULL, 'Espèce', NULL, NULL, '2022-06-08 09:37:14', 0, '2022-06-08 09:37:14', '50', NULL, NULL, NULL),
(30, 14, NULL, '2022-06-09 09:05:07', 'Espèce', NULL, NULL, '2022-06-09 08:55:06', 1, '2022-06-09 08:55:06', '50', NULL, '31', NULL),
(31, 47, NULL, '2022-06-09 10:29:42', 'Espèce', NULL, NULL, '2022-06-09 10:29:34', 1, '2022-06-09 10:29:34', '45', NULL, '45', NULL),
(32, 48, NULL, '2022-06-09 10:30:20', 'Espèce', NULL, NULL, '2022-06-09 10:30:13', 1, '2022-06-09 10:30:13', '45', NULL, '45', NULL),
(33, 18, NULL, '2022-06-10 12:42:55', 'Espèce', NULL, NULL, '2022-06-10 12:40:42', 1, '2022-06-10 12:40:42', '45', NULL, '45', NULL),
(34, 23, NULL, NULL, 'Espèce', NULL, NULL, '2022-06-15 16:30:45', 0, '2022-06-15 16:30:45', '45', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `piece_jointe`
--

CREATE TABLE `piece_jointe` (
  `id` int(11) NOT NULL,
  `installation_id` int(11) DEFAULT NULL,
  `libelle` varchar(255) NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piece_jointe`
--

INSERT INTO `piece_jointe` (`id`, `installation_id`, `libelle`, `fichier`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 46, 'PJ Electricien', 'Capturepass-62973218a9395.png', '2022-06-01 09:32:08', '31', NULL, NULL),
(2, 46, 'PJ Propriétaire', 'nifi2-629732e8b9de3.png', '2022-06-01 09:35:36', '31', NULL, NULL),
(3, 52, 'PJ Electricien', 'Capture-d-ecran-2022-05-23-a-10-12-00-6297b1cca3134.png', '2022-06-01 18:37:00', '17', NULL, NULL),
(4, 57, 'PJ Electricien', 'image-6298e618914f9.png', '2022-06-02 16:32:24', '31', NULL, NULL),
(5, 58, 'PJ Electricien', 'FAC-Jaune-Logement-domestique-6299d6cea73c7.pdf', '2022-06-03 09:39:26', '31', NULL, NULL),
(6, 65, 'PJ Electricien', 'Sans-titre-629a117777bd6.png', '2022-06-03 13:49:43', '33', NULL, NULL),
(7, 65, 'PJ Propriétaire', 'Sans-titre-629a12a8a7074.png', '2022-06-03 13:54:48', '33', NULL, NULL),
(8, 65, 'PJ Dossier Technique', 'Sans-titre-629a12a8a7d67.png', '2022-06-03 13:54:48', '33', NULL, NULL),
(9, 78, 'PJ Electricien', 'Modele-CR-signe-62a072a88d1aa.pdf', '2022-06-08 09:58:00', '17', NULL, NULL),
(10, 78, 'PJ Propriétaire', 'Modele-CR-signe-62a072d74e6f9.pdf', '2022-06-08 09:58:47', '17', NULL, NULL),
(11, 78, 'PJ Dossier Technique', 'Modele-CR-signe-62a072d74fa40.pdf', '2022-06-08 09:58:47', '17', NULL, NULL),
(12, 84, 'PJ Electricien', 'PBX-PLUG-62a737f62872f.jpg', '2022-06-13 13:13:26', '31', NULL, NULL),
(13, 85, 'PJ Propriétaire', 'testscan-62a84ba7ee278.pdf', '2022-06-14 08:49:43', '18', NULL, NULL),
(14, 85, 'PJ Dossier Technique', 'nifi2-62a84ba7ef347.png', '2022-06-14 08:49:43', '18', NULL, NULL),
(15, 87, 'PJ Electricien', 'Guide-connexion-sur-le-webservice-4-1-62a9ff83552ab.pdf', '2022-06-15 15:49:23', '61', NULL, NULL),
(16, 87, 'PJ Propriétaire', 'Abonnement-Orange-62aa05b0b47d9.pdf', '2022-06-15 16:06:43', '61', NULL, NULL),
(17, 55, 'PJ Electricien', 'doc-test-62aa076fdcefb.pdf', '2022-06-15 16:23:11', '1', NULL, NULL),
(18, 55, 'PJ Propriétaire', 'doc-test-62aa079670d95.pdf', '2022-06-15 16:23:50', '1', NULL, NULL),
(19, 88, 'PJ Electricien', 'Abonnement-Orange-62aa0a4d7d777.pdf', '2022-06-15 16:35:25', '31', NULL, NULL),
(20, 88, 'PJ Propriétaire', 'FIBRE-OFFICE-INTENSE-62aa0ab423a27.pdf', '2022-06-15 16:37:08', '31', NULL, NULL),
(21, 88, 'PJ Dossier Technique', 'Facture-Num-8377f1d8-b6ce-45a0-877f-eed7fde97b43-62aa0ab424891.pdf', '2022-06-15 16:37:08', '31', NULL, NULL),
(22, 89, 'PJ Electricien', 'ticket-62aa6210e3056.pdf', '2022-06-15 22:49:52', '31', NULL, NULL),
(23, 89, 'PJ Propriétaire', 'Guide-connexion-sur-le-webservice-4-1-62aa625092540.pdf', '2022-06-15 22:50:56', '31', NULL, NULL),
(24, 89, 'PJ Dossier Technique', 'Guide-connexion-sur-le-webservice-4-1-62aa6250935e8.pdf', '2022-06-15 22:50:56', '31', NULL, NULL),
(25, 90, 'PJ Electricien', 'Abonnement-Orange-62aafe5514d9e.pdf', '2022-06-16 09:56:37', '31', NULL, NULL),
(26, 90, 'PJ Propriétaire', 'Capture-62aafe9457ad4.png', '2022-06-16 09:57:40', '31', NULL, NULL),
(27, 90, 'PJ Dossier Technique', 'PBX-PLUG-62aafe9458983.jpg', '2022-06-16 09:57:40', '31', NULL, NULL),
(28, 91, 'PJ Electricien', 'images-62ab67bd743d4.jpg', '2022-06-16 17:26:21', '74', NULL, NULL),
(29, 91, 'PJ Propriétaire', 'telecharger-1-62ab6858505aa.jpg', '2022-06-16 17:28:56', '74', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `point_verification`
--

CREATE TABLE `point_verification` (
  `id` int(11) NOT NULL,
  `rubrique_id` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `objet_verification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_conclusion1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_conclusion2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `point_verification`
--

INSERT INTO `point_verification` (`id`, `rubrique_id`, `numero`, `objet_verification`, `libelle_conclusion1`, `libelle_conclusion2`) VALUES
(1, NULL, 1, '1ere Vérification niveau installation', 'Installation correcte', 'Installation incorrecte'),
(2, 1, 1, '1ere Vérification niveau installation', 'Installation correcte', 'Installation incorrecte'),
(3, 1, 2, '2e Vérification niveau installation', 'OK', 'Non OK'),
(4, 3, 1, '1ere Vérification niveau installation', 'OK c\'est bon', 'Non OK'),
(5, 3, 2, '2e Vérification niveau installation', 'OK', 'Non OK'),
(6, 3, 3, 'Emplacement de l\'installation', 'Conforme', 'Non Conforme'),
(7, 4, 1, 'Qualité cablage extérieur', 'Conforme', 'Non Conforme'),
(8, 4, 2, 'Qualité cablage intérieur', 'Conforme', 'Non Conforme');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id`, `code`, `nom`, `description`) VALUES
(1, 'accueil', 'Agent d\'accueil', NULL),
(2, 'caissier', 'Caissier', NULL),
(3, 'comptable', 'Comptable', NULL),
(4, 'daf', 'DAF', NULL),
(5, 'rfo', 'Responsable Front Office', NULL),
(6, 'referent', 'Référent', NULL),
(7, 'controleur', 'Contrôleur', NULL),
(8, 'administrateur', 'Administrateur', NULL),
(9, 'observateur', 'Observateur', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `id` int(11) NOT NULL,
  `localite_id` int(11) DEFAULT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type_piece` varchar(255) NOT NULL,
  `num_piece` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proprietaire`
--

INSERT INTO `proprietaire` (`id`, `localite_id`, `prenom`, `nom`, `adresse`, `telephone`, `email`, `type_piece`, `num_piece`, `role`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, NULL, 'Abdoulaye', 'Ndiaye', 'Thiès 1', '771234567', 'mlthioune@gmail.com', 'CNI', '1777191100001', '', '2022-04-18 11:45:23', '', NULL, NULL),
(2, NULL, 'Abdoulaye', 'Ndiaye', 'Thiès 1', '771234567', 'mlthioune@gmail.com', 'CNI', '1777191100001', '', '2022-04-20 22:41:29', '', NULL, NULL),
(3, NULL, 'Abdoulaye', 'Ndiaye', 'Thiès 1', '771234567', 'mlthioune@gmail.com', 'CNI', '1777191100001', '', '2022-04-21 11:00:07', '', NULL, NULL),
(4, NULL, 'Racine', 'Dieng', 'nguenth', '34567890', 'DR@gamil.com', 'CNI', '34567890', '', '2022-04-29 10:56:02', '', NULL, NULL),
(5, NULL, 'LAHAD', 'LEYE', NULL, '773799200', 'mlthioune@GMAIL.com', 'CNI', '66666666666666YGF', '', '2022-04-29 15:33:22', '', NULL, NULL),
(6, NULL, 'Makhfuz', 'Thiam', 'thies, rue22', '787e83777', 'makhfuz@gmail.com', 'CNI', '123557676887989888', '', '2022-04-30 03:07:48', '', NULL, NULL),
(7, NULL, 'Sohaibou', 'Thiam', 'fann', '7772727722', 'soy898@gmail.com', 'CNI', '12387837938398', '', '2022-04-30 16:06:04', '', NULL, NULL),
(8, NULL, 'MBACKE', 'LEYE', '1111', '339248501', 'TEST@GMAIL.com', 'Autre', '66666666666666YGF', '', '2022-05-01 01:32:35', '', NULL, NULL),
(9, NULL, 'Mohamet', 'THIOUNE', '', '773799201', 'mlthioune@hotmail.com', '', '', 'ROLE_CLIENT', '2022-05-04 14:55:37', '', NULL, NULL),
(10, NULL, 'Sohaibou', 'Thiam', 'fann', '7772727722', 'soy898@gmail.com', 'CNI', '12387837938398', 'ROLE_CLIENT', '2022-05-04 18:50:04', '', NULL, NULL),
(11, NULL, 'Fatou', 'Ngom', 'Dakar', '77654321', 'ngomfatou@gmail.com', 'CNI', '1132323', 'ROLE_CLIENT', '2022-05-05 16:17:27', '', NULL, NULL),
(12, NULL, 'Penda', 'Diakhoumpa', 'unite5', '771256331', 'penda@gmail.com', 'CNI', '1246754658', 'ROLE_PUBLIC', '2022-05-16 16:24:23', '', NULL, NULL),
(13, NULL, 'First', 'Client', 'Rue 10', '765483215', 'clientfirst@gmail.com', 'CNI', '15474582349', 'ROLE_PUBLIC', '2022-05-16 16:25:59', '', NULL, NULL),
(14, NULL, 'Mohamed', 'Sow', 'cite socabeg', '771111111', 'sowmamadou@gmail.com', 'CNI', '12569874523', 'ROLE_PUBLIC', '2022-05-16 16:27:58', '', NULL, NULL),
(15, NULL, 'Mariama', 'TOURE', 'Mamelles Aviations B20', '777180148', 'mariama.toure@cossuel.sn', 'CNI', '27511999023', 'ROLE_PUBLIC', '2022-05-16 16:28:18', '', NULL, NULL),
(16, NULL, 'Cheikh', 'THIAM', '414 FASS MBAO', '775690863', 'cheikh.thiam@senelec.sn', 'CNI', '1234567891', 'ROLE_PUBLIC', '2022-05-16 16:33:11', '', NULL, NULL),
(17, NULL, 'Mariama', 'TOURE', 'Mamelles Aviations B20', '777180148', 'mariama.toure@cossuel.sn', 'CNI', '27511999023', 'ROLE_PUBLIC', '2022-05-16 16:44:15', '', NULL, NULL),
(18, NULL, 'Fatou', 'lahi', 'Pikine', '771512236', 'fatou@gmail.com', 'CNI', '215487965412', 'ROLE_PUBLIC', '2022-05-16 16:44:32', '', NULL, NULL),
(19, NULL, 'Mariama', 'TOURE', 'Mamelle', '77790', 'mamm@ex.com', 'CNI', '129', 'ROLE_PUBLIC', '2022-05-16 16:46:37', '', NULL, NULL),
(20, NULL, 'Cheikh', 'THIAM', '414 FASS MBAO', '775690863', 'cheikh.thiam@senelec.sn', 'CNI', '1234567891', 'ROLE_PUBLIC', '2022-05-16 16:59:27', '', NULL, NULL),
(21, NULL, 'Alassane', 'Ba', 'Walidaan', '83838387373', 'ksisopppz@lslslls.com', 'CNI', '8828282892', 'ROLE_PUBLIC', '2022-05-16 17:06:28', '', NULL, NULL),
(22, NULL, 'Mariama', 'TOURE', 'Mamelle', '77790', 'mamm@ex.com', 'CNI', '129', 'ROLE_PUBLIC', '2022-05-16 17:13:41', '', NULL, NULL),
(23, NULL, 'Mariama', 'TOURE', 'Mamelles Aviations B20', '777180148', 'mariama.toure@cossuel.sn', 'CNI', '27511999023', 'ROLE_PUBLIC', '2022-05-19 12:36:45', '', NULL, NULL),
(24, NULL, 'Boussa', 'Thiam', 'Touba kaira', '769794466', 'thiam@gmail.sn', 'CNI', '132169046544144', 'ROLE_PUBLIC', '2022-05-19 12:54:52', '', NULL, NULL),
(25, NULL, 'Abdou', 'Fall', 'Dakar patte d\'oie', '783232664', 'abdoufall@gmail.com', 'CNI', '1234569865452', 'ROLE_USER', '2022-06-01 09:35:36', '', NULL, NULL),
(26, NULL, 'Bamba', 'Fall', 'SOBB', '789563300', 'fallbamba@gmail.com', 'CNI', '1236560249965', 'ROLE_USER', '2022-06-01 12:40:46', '', NULL, NULL),
(27, NULL, 'Khadija', 'Diarra', '2eme robinet', '789657855', 'khadydiarra@cd.com', 'CNI', '1236548956455', 'ROLE_USER', '2022-06-01 13:12:25', '', NULL, NULL),
(28, NULL, 'Khadija', 'D', '2eme robinet', '774648965', 'diarra@gmail.com', 'CNI', '12345867002398', 'ROLE_USER', '2022-06-01 13:20:04', '', NULL, NULL),
(29, NULL, 'Adama', 'Sow', 'Cite des enseignant', '775728377', 'sowadama@gmail.com', 'CNI', '1235689454564', 'ROLE_USER', '2022-06-01 13:28:23', '', NULL, NULL),
(30, NULL, 'Iétaire', 'Prop', 'SC 133', '781529360', 'esaienourdine.s@gmail.com', 'Passeport', '12435534', 'ROLE_USER', '2022-06-01 18:43:45', '', NULL, NULL),
(31, NULL, 'philomene', 'Mbendy', 'kawsara', '775623055', 'philomene@gmail.com', 'CNI', '1230568945650', 'ROLE_USER', '2022-06-02 10:50:01', '', NULL, NULL),
(32, NULL, 'Idrissa', 'Pouye', '2 rail', '777895612', 'modoumakhfuz@gmail.com', 'CNI', '1236547945623', 'ROLE_PUBLIC', '2022-06-02 15:41:07', '', NULL, NULL),
(33, NULL, 'philomene', 'Mbendy', 'kawsara', '775623055', 'philomene@gmail.com', 'CNI', '1230568945650', 'ROLE_PUBLIC', '2022-06-02 16:35:37', '', NULL, NULL),
(34, NULL, 'ABDOULAYE', 'DIALLO', 'TEST', '775755243', 'abdoulaye.diallo@cossuel.sn', 'CNI', '12394856509785', 'ROLE_PUBLIC', '2022-06-03 10:03:10', '', NULL, NULL),
(35, NULL, 'ABDOULAYE', 'DIALLO', 'TEST', '775755243', 'abdoulaye.diallo@cossuel.sn', 'CNI', '12394856509785', 'ROLE_PUBLIC', '2022-06-03 10:22:22', '', NULL, NULL),
(36, NULL, 'Mariama', 'TOURE', 'Mamelles Aviations B20', '777180148', 'anb@gm.com', 'CNI', '255656897418', 'ROLE_PUBLIC', '2022-06-03 11:46:44', '', NULL, NULL),
(37, NULL, 'Mariama', 'TOURE', 'Mamelles Aviations B20', '777180148', 'mariama.toure@cossuel.sn', 'CNI', '27511999023', 'ROLE_PUBLIC', '2022-06-03 11:54:57', '', NULL, NULL),
(38, NULL, 'Aicha', 'ka', 'Ouakam', '784702146', '5@6.com', 'CNI', '20258568', 'ROLE_PUBLIC', '2022-06-03 12:31:46', '', NULL, NULL),
(39, NULL, 'guide', 'utilsateur', 'SC 133', '762383853', 'esaienourdine.s@gmail.com', 'Passeport', '1243536', 'ROLE_PUBLIC', '2022-06-03 13:54:48', '', NULL, NULL),
(40, NULL, 'Fatima', 'GUEYE', 'Pikine', '770000000000', '5@6.com', 'CNI', '1584888', 'ROLE_PUBLIC', '2022-06-03 15:50:22', '', NULL, NULL),
(41, NULL, 'Mariama', 'TOURE', 'Mamelles Aviations B20', '777180148', 'mariama.toure@cossuel.sn', 'CNI', '27511999023', 'ROLE_PUBLIC', '2022-06-03 15:59:18', '', NULL, NULL),
(42, NULL, 'Souleymane', 'BA', 'Niakhirate', '774462727', 'souleymane.ba@gmail.com', 'CNI', '1871198100774', 'ROLE_PUBLIC', '2022-06-03 20:46:45', '', NULL, NULL),
(43, NULL, 'Aicha', 'ka', 'Ouakam', '784702146', '5@6.com', 'CNI', '202585682366', 'ROLE_PUBLIC', '2022-06-07 09:37:32', '', NULL, NULL),
(44, NULL, 'Lahi', 'Sow', 'Pikine', '770000000', NULL, 'CNI', '21526645256', 'ROLE_PUBLIC', '2022-06-07 10:20:07', '', NULL, NULL),
(45, NULL, 'IMMO', 'SK', 'Marché colobane', '776343030', NULL, 'CNI', '176772020', 'ROLE_PUBLIC', '2022-06-07 15:29:39', '', NULL, NULL),
(46, NULL, 'Soumaila', 'DJAHO', 'FASS', '785958102', 'soumdjaho@gmail.com', 'CNI', '50042356', 'ROLE_PUBLIC', '2022-06-08 09:58:47', '', NULL, NULL),
(47, NULL, 'Soumaila', 'DJAHO', 'FASS', '785958102', 'soumdjaho@gmail.com', 'CNI', '50042356', 'ROLE_PUBLIC', '2022-06-11 09:56:09', '', NULL, NULL),
(48, NULL, 'Abdou Rakhmane', 'Diop', 'cite soprime', '778987788', 'diopabdou@gmail.com', 'CNI', '1237568904567', 'ROLE_PUBLIC', '2022-06-14 08:49:43', '', NULL, NULL),
(49, NULL, 'Ibra', 'DIALLO', 'medina', '788887999', NULL, 'CNI', '1236768678680', 'ROLE_PUBLIC', '2022-06-14 10:04:54', '', NULL, NULL),
(50, NULL, 'GOGO', 'Mbodj', NULL, '776579047', NULL, 'CNI', '3345454334544', 'ROLE_PUBLIC', '2022-06-15 16:15:44', '', NULL, NULL),
(51, NULL, 'ABDOULAYE', 'DIALLO', 'RUE WAGANE DIOUF,DAKAR SENEGAL', '775755243', 'abdoulaye.diallo@cossuel.sn', 'CNI', '1234567890123', 'ROLE_PUBLIC', '2022-06-15 16:37:08', '', NULL, NULL),
(52, NULL, 'ML', 'Thioune', 'RUE WAGANE DIOUF,DAKAR SENEGAL', '773799200', 'mlthioune@gmail.com', 'CNI', '12394856509785', 'ROLE_PUBLIC', '2022-06-15 22:50:56', '', NULL, NULL),
(53, NULL, 'ABDOULAYE', 'DIALLO', NULL, '775755243', 'abdoulaye.diallo@cossuel.sn', 'CNI', '12394856509785', 'ROLE_PUBLIC', '2022-06-16 09:57:40', '', NULL, NULL),
(54, NULL, 'mourtada', 'diop', NULL, '781045043', 'mourtadadiop.1999@gmail.com', 'CNI', '0000000000000', 'ROLE_PUBLIC', '2022-06-16 17:28:56', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE `rapport` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`id`, `libelle`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Rapport 1', '2022-05-09 09:42:21', '', NULL, NULL),
(2, 'Rapport 2', '2022-05-09 12:59:27', '', NULL, NULL),
(3, 'RapportTest3', '2022-06-09 09:47:34', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recu`
--

CREATE TABLE `recu` (
  `id` int(11) NOT NULL,
  `paiement_id` int(11) DEFAULT NULL,
  `caissier_id` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `date_edition` datetime NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `nom`, `code`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Dakar', 'DK', '2022-04-11 13:17:30', NULL, '', NULL),
(2, 'Thiès', 'TH', '2022-04-14 17:59:00', NULL, '', NULL),
(3, 'Diourbel', 'DL', '2022-04-15 23:18:04', NULL, '', NULL),
(4, 'Kolda', 'KD', '2022-04-18 14:39:36', NULL, '', NULL),
(5, 'Kaolack', 'KL', '2022-04-18 17:50:21', NULL, '', NULL),
(7, 'Louga', 'LG', '2022-05-01 00:24:11', NULL, '', NULL),
(8, 'Matam', 'MT', '2022-05-01 00:34:21', NULL, '', NULL),
(9, 'Kaffrine', 'KF', '2022-05-01 00:34:52', NULL, '', NULL),
(10, 'Kedougou', 'KG', '2022-05-01 00:35:26', NULL, '', NULL),
(11, 'Sédhiou', 'SD', '2022-05-01 00:35:44', NULL, '', NULL),
(12, 'Ziguinchor', 'ZG', '2022-05-01 00:36:21', NULL, '', NULL),
(13, 'Saint Louis', 'SL', '2022-05-01 00:36:46', NULL, '', NULL),
(14, 'Tambacounda', 'TC', '2022-05-01 00:37:20', NULL, '', NULL),
(15, 'Fatick', 'FT', '2022-05-01 00:37:47', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `remboursement`
--

CREATE TABLE `remboursement` (
  `id` int(11) NOT NULL,
  `paiement_id` int(11) NOT NULL,
  `date_demande` date NOT NULL,
  `date_validation` datetime DEFAULT NULL,
  `montant` int(11) NOT NULL,
  `valide` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motif_rejet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rejete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `remboursement`
--

INSERT INTO `remboursement` (`id`, `paiement_id`, `date_demande`, `date_validation`, `montant`, `valide`, `created_at`, `created_by`, `updated_at`, `updated_by`, `motif`, `motif_rejet`, `rejete`) VALUES
(1, 21, '2022-06-02', NULL, 12000, 0, '2022-06-02 16:05:21', '31', NULL, NULL, NULL, NULL, 0),
(2, 22, '2022-06-02', NULL, 150000, 0, '2022-06-02 16:38:39', '31', NULL, NULL, NULL, NULL, 0),
(3, 14, '2022-06-11', NULL, 30000, 0, '2022-06-11 11:09:45', '27', NULL, NULL, 'Test', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) NOT NULL,
  `hashed_token` varchar(100) NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(12, 62, 'OH5kdA2ImV98IINz3sz5', 'rKX/lhHhqvuCeef3Bbn8G4Qw0ze08yEDRu4UqVPNkt0=', '2022-06-15 16:40:59', '2022-06-15 17:40:59');

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE `rubrique` (
  `id` int(11) NOT NULL,
  `rapport_id` int(11) DEFAULT NULL,
  `libelle` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rubrique`
--

INSERT INTO `rubrique` (`id`, `rapport_id`, `libelle`, `numero`) VALUES
(1, 1, 'R1', 1),
(3, 2, 'Controle de niveau 1', 1),
(4, 2, 'Controle de niveau 2', 2);

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(11) NOT NULL,
  `usages` varchar(255) NOT NULL,
  `puissance` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL,
  `cout1` int(11) NOT NULL,
  `cout2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_construction`
--

CREATE TABLE `type_construction` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `usages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_construction`
--

INSERT INTO `type_construction` (`id`, `code`, `nom`, `usages`) VALUES
(1, 'IGH', 'IGH (Immeuble de Grande Hauteur)', 'non_domestique'),
(2, 'EP', 'Etablissement Public', 'non_domestique'),
(3, 'SG', 'Services Généraux', 'non_domestique'),
(4, 'FL', 'Foyer Logement (Hors Unité de Vie)', 'non_domestique'),
(5, 'MAI', 'Maison', 'domestique'),
(6, 'APP', 'Appartement', 'domestique'),
(7, 'FOY', 'Foyer Logement', 'domestique'),
(8, 'DEP', 'Dépendance', 'domestique'),
(9, 'PIS', 'Piscine', 'domestique'),
(10, 'BOR', 'Borne', 'domestique'),
(11, 'AUT', 'Autre', 'domestique'),
(12, 'IGH', 'IGH (Immeuble de Grande Hauteur)', 'erp_ert'),
(13, 'ERP', 'Etablissement Recevant du Public (ERP)', 'erp_ert'),
(14, 'ERT', 'Etablissement Recevant des Travailleurs (ERT)', 'erp_ert');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `roles` longtext NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `id_type` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `roles`, `password`, `created_at`, `created_by`, `updated_at`, `updated_by`, `type`, `id_type`, `nom`, `prenom`, `adresse`, `telephone`, `email`, `is_verified`) VALUES
(1, 'mlthioune@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$6PXjYxjLtaQ3lTQsxuWiJ.xS2ZSAZnr2k0O8lSLkLE79MkFSe2zna', '2022-04-12 23:22:51', '', NULL, NULL, 'Electricien', 0, 'THIOUNE', 'Mohamet', NULL, '+221 0773799200', 'mlthioune@gmail.com', 1),
(8, '772687407', '[\"ROLE_PUBLIC\"]', '$2y$13$bEe1dsZnMPim.FxlXDUSqOKIArEniyuqq9XIJt.IgXRtyiMJONyY6', '2022-04-29 10:17:13', '', NULL, NULL, 'Proprietaire', 0, 'test', 'test', 'Dkr', '772687407', 'test@test.com', 0),
(9, 'msall.ozil@gmail.com', '[\"ROLE_PUBLIC\"]', '$2y$13$WY3gydxetbR5oCmqhnTt.O5muC0qHySWzT1hALvDPspSDdiZ9d2La', '2022-04-29 10:43:47', '', NULL, NULL, 'Proprietaire', 0, 'client', 'client', NULL, '763916861', 'msall.ozil@gmail.com', 1),
(10, 'mamadou.dione@cossuel.sn', '[\"ROLE_PUBLIC\"]', '$2y$13$OXj5liLsTZKyD0WyQpoV1OYPY96UOiRV3pF07IGFBXFfLX2xGRpnC', '2022-04-29 14:48:59', '', NULL, NULL, 'Electricien', 0, 'Dione', 'Mamadou', NULL, '00221772222100', 'mamadou.dione@cossuel.sn', 1),
(11, 'abdoulaye.diallo@cossuel.sn', '[\"ROLE_PUBLIC\"]', '$2y$13$wyBuOsGgZ4WKv9LPATKUVeAso75JiboquLEWb15BvSd/TXRtwm12O', '2022-04-29 14:58:39', '', NULL, NULL, 'Electricien', 0, 'DIALLO', 'ABDOULAYE', NULL, '775755243', 'abdoulaye.diallo@cossuel.sn', 1),
(12, '777283722', '[\"ROLE_PUBLIC\"]', '$2y$13$DJhEVmirHcpTKCGHmQfg3uWuwugHRAGB6BOYBmVE7wLQ9uO8aXf4a', '2022-04-30 01:22:08', '', NULL, NULL, 'Electricien', 0, 'MAR', 'Modou', NULL, '777283722', 'makhfuzmar@gmail.com', 1),
(13, 'ibrahima.diop@cossuel.sn', '[\"ROLE_PUBLIC\"]', '$2y$13$H6eIMc.c2q3VMXgQQpVVYOtyTg8iUdKw1K0/RZFyZil.W0PomK9du', '2022-04-30 14:50:30', '', NULL, NULL, 'Electricien', 0, 'Diop', 'Ibrahima', NULL, '703421747', 'ibrahima.diop@cossuel.sn', 1),
(15, 'papathiam@gmail.com', '[\"ROLE_PUBLIC\"]', '$2y$13$szbHS47xARvjnGi3AaVod.wyuZ8OG7w.F9ZL.nZY1falG3rLImtum', '2022-05-04 14:49:44', '', NULL, NULL, 'Electricien', 11, 'Thiam', 'Abdou Khadre', 'Dakar', '7737099200', 'papathiam@gmail.com', 1),
(17, 'M501', '[\"ROLE_ACCUEIL\"]', '$2y$13$s3qQq3VZLYoTiGBuJPuhouWNedhXx2TwV4zmEM275x3WE6Ij0wKeK', '2022-05-05 14:30:47', '', NULL, NULL, 'Agent', 1, 'ONE', 'ACCUEIL', 'DAKAR ONE', '774376940', 'accueilone@mailinator.com', 1),
(18, 'M502', '[\"ROLE_ACCUEIL\"]', '$2y$13$bJxFQv42nGz38tDir15HlublwJjBFh6AyhIkt.VfeIOlBX7Qz2Hwy', '2022-05-05 14:30:52', '', NULL, NULL, 'Agent', 2, 'TWO', 'ACCUEIL', 'DAKAR TWO', '773463849', 'accueiltwo@mailinator.com', 1),
(19, 'M503', '[\"ROLE_REFERENT\"]', '$2y$13$UwRX6WlcNkQNuL8qRdP6huvBfSsvP5Chh9Vy9eSa.ygkL95SY6RVK', '2022-05-05 14:30:56', '', NULL, NULL, 'Agent', 3, 'ONE', 'REFERENT', 'Test Adresse', '773463547', 'testreferentone@mailinator.com', 1),
(20, 'M504', '[\"ROLE_REFERENT\"]', '$2y$13$1zq.5HAt6hUkEoiZbVmWXuVcBaXgrb5ce.ct9gXb34ua.PCjSg7fG', '2022-05-05 14:31:03', '', NULL, NULL, 'Agent', 4, 'TWO', 'Referent', 'Test Adresse', '7734684597', 'testreferenttwo@mailinator.com', 1),
(21, 'M505', '[\"ROLE_CONTROLEUR\"]', '$2y$13$9w9oQeAYq9X2v7vrLYrlz./YyOrBlrmFnXEAHYu79HgPa73CZ.zs2', '2022-05-05 14:31:07', '', NULL, NULL, 'Agent', 5, 'ONE', 'Controleur', 'Test Adresse', '774538590', 'testcontroleurone@mailinator.com', 1),
(22, 'M506', '[\"ROLE_CONTROLEUR\"]', '$2y$13$v4g.BGvqK.MKfYLp.f1Rt.WvTqZvYv6sro/lmZLjcvq6iaMwr4ysC', '2022-05-05 14:31:10', '', NULL, NULL, 'Agent', 6, 'TWO', 'Controleur', 'Test Adresse', '774365838', 'testcontroleurtwo@mailinator.com', 1),
(23, 'M507', '[\"ROLE_RFO\"]', '$2y$13$7uqXFWxirSW00d3UHsm6j.ISgnq7hyCKS17A8oGV/vW69UGk5PWXW', '2022-05-05 14:31:13', '', NULL, NULL, 'Agent', 7, 'ONE', 'Backoffice', 'Test Adresse', '774385395', 'testbackofficeone@mailinator.com', 1),
(24, 'M508', '[\"ROLE_RFO\"]', '$2y$13$wgSDtSETXMpff2siHYLYw.XGZPdJMyifXrQsKV61dMvkY3wYNAH8S', '2022-05-05 14:31:17', '', NULL, NULL, 'Agent', 8, 'TWO', 'Back Office', 'Test Adresse', '774368539', 'testbackofficetwo@mailinator.com', 1),
(25, 'M509', '[\"ROLE_COMPTABLE\"]', '$2y$13$5ZwRDLEqgiNQjne2a7RcjOe25ATrrJUuRcKId/Kade/SeoOG437ly', '2022-05-05 14:31:20', '', NULL, NULL, 'Agent', 9, 'ONE', 'Comptable', 'Test Adresse', '774365839', 'testcomptableone@mailinator.com', 1),
(26, 'M510', '[\"ROLE_COMPTABLE\"]', '$2y$13$E4WHV5smDrKGWdbpDJAWX.Hwh6v2mZOA3pb24qHtPccsmdcXIrrHm', '2022-05-05 14:31:24', '', NULL, NULL, 'Agent', 10, 'TWO', 'Comptable', 'Test Adresse', '774365839', 'testcomptabletwo@mailinator.com', 1),
(27, 'M511', '[\"ROLE_DAF\"]', '$2y$13$gxZhP36HE3wsZiLayfjr2eXr54ELewza0hVaGauX6E6nPFXBGYWoa', '2022-05-05 14:31:27', '', NULL, NULL, 'Agent', 11, 'ONE', 'DAF', 'Test Adresse', '774365758', 'testdafone@mailinator.com', 1),
(28, 'M513', '[\"ROLE_CAISSIER\"]', '$2y$13$lDGKNkSblHOJjJrqUZoHhOYeMdSkR1qCFspUHG8OBZ3UKH/C4SSsW', '2022-05-05 14:31:32', '', NULL, NULL, 'Agent', 13, 'ONE', 'Caissier', 'Test Adresse', '779437659', 'testcaissierone@mailinator.com', 1),
(29, 'M514', '[\"ROLE_CAISSIER\"]', '$2y$13$xDWY6.ahueApiLm/FrbVmOss8Mhosc5GPb/6PepXAVp1wiwl5isze', '2022-05-05 14:31:35', '', NULL, NULL, 'Agent', 14, 'TWO', 'Caissier', 'Test Adresse', '774365378', 'testcaissiertwo@mailinator.com', 1),
(30, 'M515', '[\"ROLE_OBSERVATEUR\"]', '$2y$13$E.PJ.cZ4Fd4HtIy6j0BGg.JyZPuZqCmn/c6oA107FguRuCBOPG682', '2022-05-05 14:31:40', '', NULL, NULL, 'Agent', 15, 'ONE', 'Superviseur', 'Test Adresse', '774368539', 'testsuperviseurone@mailinator.com', 1),
(31, 'M517', '[\"ROLE_ADMIN\"]', '$2y$13$Tz54UUST4yaX9AO4rDciAOK7aF1m7kGTxN57st1p0dVbFyLiKZl5S', '2022-05-05 14:31:45', '', NULL, NULL, 'Agent', 17, 'ONE', 'ADMIN', 'Test Adresse', '774368590', 'testadminone@mailinator.com', 1),
(32, 'M518', '[\"ROLE_ACCUEIL\"]', '$2y$13$8YBpo5r4SmlgTg9gDLY.6OLi.SDn0VModB.BAQm4wVIL5xdXSOUyu', '2022-05-05 16:05:31', '', NULL, NULL, 'Agent', 201, 'FALL', 'Modou', 'Dakar', '7723456789', 'modou.fall@gmail.com', 1),
(33, 'accueil1', '[\"ROLE_ACCUEIL\"]', '$2y$13$uwHy09zlh2AmOC4RiWTwVeDqAjzgwwb54rhyXQdRiZ7hORkzrnrRi', '2022-05-11 18:54:27', '', NULL, NULL, 'Agent', 218, 'ACCUEIL', 'Accueil-1', 'Dakar', '7711111111', 'accueil1@cossuel.sn', 1),
(34, 'caissier1', '[\"ROLE_CAISSIER\"]', '$2y$13$ubJiG/.ZK357WU7tNHMqpuycn9Vvs13PKutVtF./97smYtHhy1/0C', '2022-05-11 18:55:38', '', NULL, NULL, 'Agent', 219, 'CAISSIER', 'Caissier-1', 'Dakar', '7711111111', 'caissier1@cossuel.sn', 1),
(35, 'comptable1', '[\"ROLE_COMPTABLE\"]', '$2y$13$fdMmAz9uF5/VCDkDSgKz4.pgpf8f1A6MU9zPEcxl5YCnpTK/xyJmG', '2022-05-11 18:57:52', '', NULL, NULL, 'Agent', 220, 'COMPTABLE', 'Comptable-1', 'Dakar', '7722222222', 'comptable1@cossuel.sn', 1),
(36, 'daf', '[\"ROLE_DAF\"]', '$2y$13$UMYMvZN4nXubsWNKalkARevWa7UNZXKAJVE1LgDrUYLUhtv8BuJuC', '2022-05-11 18:58:31', '', NULL, NULL, 'Agent', 221, 'DAF', 'DAF', 'Dakar', '773333333', 'daf@cossuel.sn', 1),
(37, 'rfo1', '[\"ROLE_RFO\"]', '$2y$13$j9ip9mfvXMz3oF.TVbYnzeJY5Y0p86z8DPIa.0QMXG1yTZ8acrFE2', '2022-05-11 19:00:25', '', NULL, NULL, 'Agent', 222, 'RFO', 'RFO-1', 'Dakar', '775555555', 'rfo1@cossuel.sn', 1),
(38, 'referent1', '[\"ROLE_REFERENT\"]', '$2y$13$bk.rPDMHxpIUu9l524hA/e3Ghva20M8FkTiNOV69fyMayqGW3z.Wy', '2022-05-11 19:01:15', '', NULL, NULL, 'Agent', 223, 'REFERENT', 'Referent-1', 'Dakar', '776666666', 'referent1@cossuel.sn', 1),
(39, 'controleur1', '[\"ROLE_CONTROLEUR\"]', '$2y$13$f7WOZS55cmRkJEVdYRoRq.yYbBCy1fYUL/trkzNEB0oZy7a.vwEqm', '2022-05-11 19:02:06', '', NULL, NULL, 'Agent', 224, 'CONTROLEUR', 'Controleur-1', 'Dakar', '777777777', 'controleur1@cossuel.sn', 1),
(40, 'accueil2', '[\"ROLE_ACCUEIL\"]', '$2y$13$2sJCmUP1nDXpYdZLS0XEwORfnf9uSj.3fFFs.TKQlE7Uutn1LjSm2', '2022-05-16 16:11:57', '', NULL, NULL, 'Agent', 232, 'ACCUEIL', 'Accueil-2', 'DKR', '7711111111', 'accueil2@cossuel.sn', 1),
(41, 'accueil3', '[\"ROLE_ACCUEIL\"]', '$2y$13$1MYzYq66hqZJCjtLXOy7PeYHUcyq2WXvkDX1GffbN8BathNw0.RcO', '2022-05-16 16:12:33', '', NULL, NULL, 'Agent', 233, 'ACCUEIL', 'Accueil-3', 'DK', '772223333', 'accueil3@cossuel.sn', 1),
(42, 'accueil4', '[\"ROLE_ACCUEIL\"]', '$2y$13$gnwbh4Nzx9CSfzqjJCvREu7buZZsydss7KvvBtn/oAPahxei9p1nG', '2022-05-16 16:20:28', '', NULL, NULL, 'Agent', 234, 'ACCUEIL', 'Accueil-4', 'DKR', '7754345', 'accueil4@cossuel.sn', 1),
(43, 'accueil5', '[\"ROLE_ACCUEIL\"]', '$2y$13$XD5QzxWFEUQMoOG4Uvrj4efBZ.c8zDfRI74QYU2PBGaAnyq6c6pIO', '2022-05-16 16:24:42', '', NULL, NULL, 'Agent', 235, 'ACCUEIL', 'Accueil-5', 'Dkar', '77876543', 'accueil5@cossuel.sn', 1),
(44, 'M162', '[\"ROLE_CONTROLEUR\"]', '$2y$13$7SHpMBHHK2KC70ajaeiUbOoRBjPZYw56H5PntDQ1qYoOpjIc/0NVa', '2022-05-16 16:35:42', '', NULL, NULL, 'Agent', 230, 'Beye', 'Cheikh', 'Cossuel', '774528489', 'bamba.beye@cossuel.sn', 1),
(45, 'M 174', '[\"ROLE_CAISSIER\"]', '$2y$13$Qv2YtbefE2tFwzY1smCNUuSeEncycmrWlDyNkzcpfz9RaNXNarwca', '2022-05-16 16:47:51', '', NULL, NULL, 'Agent', 228, 'Gaye', 'Yacine', 'Pikine', '771974604', 'yacine.gaye@cossuel.sn', 1),
(46, 'esaienourdine.s@gmail.com', '[\"ROLE_PUBLIC\"]', '$2y$13$zmL2VuGa/qPTKfg0aD98f.5ov0VjN/QcQ0lQC0AYQaE6nwZVTLbXm', '2022-06-01 16:25:35', '', NULL, NULL, 'Electricien', 32, 'User', 'Guide', '', '781529360', 'esaienourdine.s@gmail.com', 1),
(47, 'nourdine.sorgho@kangameconsulting.com', '[\"ROLE_PUBLIC\"]', '$2y$13$SEHwaXOXt0wu5qXXGPh6CeOKg1OlO8nyupEe56iBrW/9LwC4X8jE.', '2022-06-01 18:23:45', '', NULL, NULL, 'Electricien', 33, 'Guide', 'Utilisateur', '', '762383853', 'nourdine.sorgho@kangameconsulting.com', 1),
(48, 'M211', '[\"ROLE_ADMINISTRATEUR\"]', '$2y$13$Jdu.pOIo4ddGCNPOBqXcaeqO/02.cQsRHBNpTCdWUhrflo8DnPs2u', '2022-06-02 08:57:42', '', NULL, NULL, 'Agent', 236, 'Mar', 'Modou', 'Camberene', '771166556', 'modou.mar@cossuel.sn', 1),
(49, 'M281', '[\"ROLE_ACCUEIL\"]', '$2y$13$UpDeMA2uzIRvNKxuIkaKAesriS9ZRNj7/KDqGqnFuEQo/bAhTWSNS', '2022-06-02 10:36:42', '', NULL, NULL, 'Agent', 237, 'DIOUK', 'KIA', 'pikine', '778962255', 'kia@cossuel.sn', 1),
(50, 'M282', '[\"ROLE_CAISSIER\"]', '$2y$13$yeN0tYBE1dojjbeq4yfdWuQJMT/NrdOjqWgSyIyUrYBs6CplkDBzq', '2022-06-02 12:06:58', '', NULL, NULL, 'Agent', 238, 'SEYE', 'Ibrahima', 'sangalkam', '778956699', 'ibrahima.seye@cossuel.sn', 1),
(51, 'M283', '[\"ROLE_RFO\"]', '$2y$13$OnzePURf0BpqY/JqbyaOOeeORe8/.ctydYHdfTd8JA3smDCVRLMdy', '2022-06-02 15:52:06', '', NULL, NULL, 'Agent', 239, 'Laye', 'Fatoumata', 'guediawaye', '789562031', 'layefatoumata@gmail.com', 1),
(52, 'M284', '[\"ROLE_REFERENT\"]', '$2y$13$KNYy8pU7OgtWlqHXoqHm3OYwu0EPONx1OcNljTR.ZlqsWlBWOw14S', '2022-06-02 16:25:33', '', NULL, NULL, 'Agent', 240, 'Sall', 'Serigne Mbacke', 'fass', '789965623', 'sallmbacke@gmail.com', 1),
(53, 'M285', '[\"ROLE_CONTROLEUR\"]', '$2y$13$lwxyPAmd5SLEiFwXy35MnOHJiVNCJcOLV3DG12n3dViQSZSGaVp/S', '2022-06-02 16:37:37', '', NULL, NULL, 'Agent', 241, 'Beye', 'Ahmadou Bamba', 'cite alioune sow', '778563322', 'beyeahmadou@cossuel.sn', 1),
(54, 'M286', '[\"ROLE_COMPTABLE\"]', '$2y$13$jroFFNoNgZvUnfYXBP58KuNeRptquUfZGGGsaBTxpQxwOXMy9cS6i', '2022-06-03 10:04:03', '', NULL, NULL, 'Agent', 242, 'SOW', 'khady', 'dakar', '771833655', 'khady.sow@cossuel.sn', 1),
(55, 'M287', '[\"ROLE_DAF\"]', '$2y$13$9HbUVW5JeDeldTXRjkIvuON0MjoILuR7j7IX7CAn5ojg47vzEsmRW', '2022-06-03 10:06:01', '', NULL, NULL, 'Agent', 243, 'Sow', 'Abdou khadre', 'fouta', '778952266', 'abdou.sow@cossuel.sn', 1),
(56, 'marabadiane@gmail.com', '[\"ROLE_USER\"]', '$2y$13$qhE7hbRwtQFbFvJD2juCkerxDR64npOhj9LAr04gFQM7Kz6rQAtF2', '2022-06-03 10:21:33', '', NULL, NULL, 'Electricien', 40, 'Badiane', 'Mara', '', '778953622', 'marabadiane@gmail.com', 0),
(57, '786322664', '[\"ROLE_USER\"]', '$2y$13$/cOtVnE/XxTEMTGuMfsOAOQyqWYnxnJXtJkhA6Et2LP3cyl86Gm86', '2022-06-03 10:39:22', '', NULL, NULL, 'Electricien', 42, 'Badiane', 'Makhfuz', '', '786322664', 'modoumakhuz@gmail.com', 0),
(58, 'M121', '[\"ROLE_RFO\"]', '$2y$13$vq5VEFPUeKETn7CEIFHZ4.TVwu0992pJq1aLd7zl1WwIETkj0XgRC', '2022-06-03 10:50:52', '', NULL, NULL, 'Agent', 229, 'Sow', 'Fatou Lahi', 'Pikine', '771510228', 'fatou.sow@cossuel.sn', 1),
(59, 'M158', '[\"ROLE_CONTROLEUR\"]', '$2y$13$glLYHTVTi4yuTbGGiAeHa.IPqeUvvdzk2YBHOTbmoRzq2Qe0dFXk2', '2022-06-03 10:58:53', '', NULL, NULL, 'Agent', 245, 'Tall', 'Bassirou', 'Rufisque cité Filao', '775093449', 'bassirou.tall@cossuel.sn', 1),
(60, 'M144', '[\"ROLE_CONTROLEUR\"]', '$2y$13$X.Z97G53rVKxeedKqs1PUeIiW4Qtfjj/3rAqoUDDlica5Vta.g9by', '2022-06-03 11:16:02', '', NULL, NULL, 'Agent', 227, 'KEBE', 'Moustapha', 'Thiaroye sur mer', '775454049', 'mamadou.kebe@cossuel.sn', 1),
(61, 'M122', '[\"ROLE_ACCUEIL\"]', '$2y$13$7kr.ZrUh7JyolnLElyamUOLU2KlG66xPpZvXFhkN6518S1B6dseI2', '2022-06-03 11:17:42', '', NULL, NULL, 'Agent', 226, 'TOURE', 'Mariama', 'Mamelle B20', '777180148', 'mariama.toure@cossuel.sn', 1),
(62, 'M116', '[\"ROLE_REFERENT\"]', '$2y$13$q9LR1h0pVhfRxomjCsf3peluVmQPskzHTMksvUS1kIsVb1xNYoLca', '2022-06-03 11:22:35', '', NULL, NULL, 'Agent', 246, 'Mbodj', 'Gogo', 'Yoff', '776507947', 'gogo.mbodj@cossuel.sn', 1),
(63, 'modoumar@esp.sn', '[\"ROLE_USER\"]', '$2y$13$optfGLrbIlmw3Y8P8xp0b.foTSTe008c6y2Fwu1WLM/KQjVS54xGm', '2022-06-03 16:30:59', '', NULL, NULL, 'Electricien', 49, 'makhfuza', 'Makha', '', '763402414', 'modoumar@esp.sn', 0),
(64, 'souleymane.ba@gmail.com', '[\"ROLE_USER\"]', '$2y$13$9GAGY5blSrjUuKbqNEz7s.hcsiereD1yVNPH7.5t6oMY4w.BIpEk.', '2022-06-03 20:34:49', '', NULL, NULL, 'Electricien', 50, 'BA', 'Souleymane', '', '774462727', 'souleymane.ba@gmail.com', 0),
(65, 'M181', '[\"ROLE_ACCUEIL\"]', '$2y$13$oI9XBsqLPbPMNt41Ishuvuxo1X4x0D1IWkEb2j2z3bRheEsjEHvYu', '2022-06-07 09:55:37', '', NULL, NULL, 'Agent', 247, 'KONARE', 'MAGUETTE', 'Mariste', '784702146', 'maguette.konare@cossuel.sn', 1),
(66, 'C105', '[\"ROLE_OBSERVATEUR\"]', '$2y$13$kuTFBy0mqGLInaHzSOvpQ.iSwzkfA6kYnDsnbypcgUSGlzMnt9O/O', '2022-06-07 10:18:21', '', NULL, NULL, 'Agent', 248, 'SAMBA', 'Boubacar', 'Nord Foire', '771661095', 'boubacar.samba@cossuel.sn', 1),
(67, 'M214', '[\"ROLE_ACCUEIL\"]', '$2y$13$HDPu3GADI6ozsem9mor13.RNZwnmVKiMHRGvM8EIXI9Y6rp4s.KRe', '2022-06-07 11:48:07', '', NULL, NULL, 'Agent', 249, 'Ngome', 'Assane', 'Rufisque Cité Serigne Mansour', '771820982', 'assane.ngom@cossuel.sn', 1),
(68, 'M1000', '[\"ROLE_ACCUEIL\"]', '$2y$13$EdkSOQYd6RAP6LNjYQxd3uzu/VRiBTLSHTbyVkNSvM1Gm4nSuIh/u', '2022-06-09 10:49:52', '', NULL, NULL, 'Agent', 251, 'TEST M1000', 'TEST M1000', 'ADRESSE TEST M1000', '78437843959353', 'testm1000@mailinator.com', 1),
(69, 'soumdjaho@gmail.com', '[\"ROLE_PUBLIC\"]', '$2y$13$OgDzmdR05CY91IFXmVSGmuEApAz6WQJGUWiJJk4dSycpvp6pGm7fm', '2022-06-11 10:16:33', '', NULL, NULL, 'Electricien', 59, 'DJAHO', 'Soumaila', '', '785958102', 'soumdjaho@gmail.com', 0),
(70, 'M601', '[\"ROLE_ACCUEIL\"]', '$2y$13$3huGMlUeQNKXH.gmsRH/u.FSIsBVATsnqUUPQYvvnGzcyut/V/9T6', '2022-06-14 11:06:24', '', NULL, NULL, 'Agent', 253, 'Fall', 'Abdou', 'touba occass', '789987675', 'fallabdou@gmail.com', 1),
(71, 'M602', '[\"ROLE_CAISSIER\"]', '$2y$13$8XqrerBETgQFbrBkEEmR6eftnryMCr8936/MhZpDH/DckLX7Uv4.m', '2022-06-14 11:10:49', '', NULL, NULL, 'Agent', 254, 'Diop', 'Marie', 'touba Fall', '778906756', 'mariediop@gmail.com', 1),
(72, 'M603', '[\"ROLE_RFO\"]', '$2y$13$fHD.rUjVD6HwuxeeCJ3DiOn42ZNFNkIIQiiNuyI7BfDmqp05qC2OS', '2022-06-14 11:13:30', '', NULL, NULL, 'Agent', 255, 'NDiaye', 'Fallou', 'Dakar', '777289900', 'ndiayefallou@gmail.com', 1),
(73, 'M188', '[\"ROLE_CONTROLEUR\"]', '$2y$13$nwnuOYtvhkM8CHhYYxVd4eMJvSU64DkSN6hOQFiLnHgd1sUI3k7Dm', '2022-06-15 15:14:42', '', NULL, NULL, 'Agent', 257, 'BA', 'ALI', 'SICAP FOIRE', '776500791', 'ali.ba@cossuel.sn', 1),
(74, 'mmdiop', '[\"ROLE_ADMIN\"]', '$2y$13$SwNgc5EI61pEfaHsD7bFAuXLGW2M.I/n9bMSzf6iqozOsHUgVlRpa', '2022-06-16 16:24:39', '', NULL, NULL, 'Electricien', 66, 'DIOP', 'Mouhamad Mourtada', 'Dakar', '773799200', 'mouhamadmourtadadiop@esp.sn', 1);

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `id` int(11) NOT NULL,
  `dossier_id` int(11) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_by` varchar(255) DEFAULT NULL,
  `rapport_id` int(11) DEFAULT NULL,
  `date_planifie` datetime DEFAULT NULL,
  `date_realise` datetime DEFAULT NULL,
  `date_rapporte` datetime DEFAULT NULL,
  `planifie` tinyint(1) DEFAULT NULL,
  `realise` tinyint(1) DEFAULT NULL,
  `conclusion` tinyint(1) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  `date_atteste` datetime DEFAULT NULL,
  `rapporte` tinyint(1) DEFAULT NULL,
  `atteste` tinyint(1) DEFAULT NULL,
  `motif_rejet_rapport` varchar(255) DEFAULT NULL,
  `rejet_rapport` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`id`, `dossier_id`, `etat`, `created_at`, `created_by`, `updated_at`, `updated_by`, `rapport_id`, `date_planifie`, `date_realise`, `date_rapporte`, `planifie`, `realise`, `conclusion`, `commentaire`, `date_atteste`, `rapporte`, `atteste`, `motif_rejet_rapport`, `rejet_rapport`) VALUES
(6, 1, 'Rapport validé', '2022-05-10 21:15:21', '', NULL, NULL, 2, '2022-05-10 21:19:00', '2022-05-10 22:47:00', '2022-05-31 02:10:00', 1, 1, 0, NULL, '2022-05-31 02:11:52', 1, 1, NULL, 0),
(7, 3, 'Planifié', '2022-05-14 01:36:25', '', NULL, NULL, 2, '2022-05-14 01:37:00', NULL, NULL, 1, 0, 0, 'Electricien injoignable', NULL, 0, 0, NULL, 0),
(8, 5, 'Planifié', '2022-05-16 16:42:30', '', NULL, NULL, 1, '2022-05-17 12:22:00', NULL, NULL, 1, 0, 0, NULL, NULL, 0, 0, NULL, 0),
(9, 6, 'Rapport validé', '2022-05-16 16:55:18', '', NULL, NULL, 1, '2022-05-16 16:56:00', '2022-05-16 16:56:00', '2022-05-31 02:10:15', 1, 1, 0, 'Délai épuisé, électricien introuvable', '2022-06-09 11:56:16', 1, 1, NULL, 0),
(10, 7, 'Rapport validé', '2022-06-01 09:55:45', '21', NULL, NULL, 1, '2022-06-06 09:55:00', '2022-06-01 10:00:00', '2022-06-01 10:25:42', 1, 1, 0, NULL, '2022-06-01 10:32:24', 1, 1, NULL, 0),
(11, 3, 'Réalisé', '2022-06-01 15:42:39', '31', NULL, NULL, 2, '2022-06-28 15:40:00', '2022-06-08 12:41:00', NULL, 1, 1, 0, NULL, NULL, 0, 0, NULL, 0),
(12, 10, 'Rapport finalisé', '2022-06-03 13:03:11', '21', NULL, NULL, 2, '2022-06-04 22:22:00', '2022-06-03 17:26:00', '2022-06-03 17:27:31', 1, 1, 0, NULL, NULL, 1, 0, NULL, 0),
(13, 16, 'Rapport validé', '2022-06-03 17:16:02', '21', NULL, NULL, 1, '2022-06-03 18:14:00', '2022-06-03 17:17:00', '2022-06-03 17:19:39', 1, 1, 1, 'ok', '2022-06-03 17:37:17', 1, 1, NULL, 0),
(14, 17, 'Rapport validé', '2022-06-03 20:57:49', '21', NULL, NULL, 1, '2022-06-06 10:00:00', '2022-06-02 10:00:00', '2022-06-03 21:00:44', 1, 1, 1, NULL, '2022-06-03 21:02:26', 1, 1, NULL, 0),
(15, 19, 'Rapport validé', '2022-06-09 09:10:23', '21', NULL, NULL, 2, '2022-06-11 09:09:00', '2022-06-09 09:11:00', '2022-06-09 09:11:45', 1, 1, 1, NULL, '2022-06-09 09:13:25', 1, 1, NULL, 0),
(16, 11, 'Planifié', '2022-06-11 10:33:36', '21', NULL, NULL, 1, '2022-06-13 15:34:00', NULL, NULL, 1, 0, 0, NULL, NULL, 0, 0, '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectations_agents`
--
ALTER TABLE `affectations_agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_73154BD725330D` (`agence_id`),
  ADD KEY `IDX_73154B3414710B` (`agent_id`);

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_268B9C9DE7927C74` (`email`),
  ADD KEY `IDX_268B9C9D275ED078` (`profil_id`);

--
-- Index pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_326EC63F611C0C56` (`dossier_id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2694D7A5611C0C56` (`dossier_id`),
  ADD UNIQUE KEY `UNIQ_2694D7A52A4C4478` (`paiement_id`),
  ADD KEY `IDX_2694D7A5FB88E14F` (`utilisateur_id`),
  ADD KEY `IDX_2694D7A5167B88B4` (`installation_id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C1765B6398260155` (`region_id`);

--
-- Index pour la table `detail_verification`
--
ALTER TABLE `detail_verification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_46F2AF04E1846C45` (`point_verification_id`),
  ADD KEY `IDX_46F2AF04C1C5DC59` (`visite_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3D48E03780E95E18` (`demande_id`),
  ADD KEY `IDX_3D48E037F4CF9AD9` (`respo_front_office_id`),
  ADD KEY `IDX_3D48E037B13E6101` (`controleur_id`),
  ADD KEY `IDX_3D48E03735E47E35` (`referent_id`);

--
-- Index pour la table `electricien`
--
ALTER TABLE `electricien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DFB53AEA924DD2B5` (`localite_id`);

--
-- Index pour la table `grille`
--
ALTER TABLE `grille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `installation`
--
ALTER TABLE `installation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1CBA6AB1924DD2B5` (`localite_id`),
  ADD KEY `IDX_1CBA6AB1387C850E` (`type_construction_id`),
  ADD KEY `IDX_1CBA6AB1B871F14F` (`nature_batiment_id`),
  ADD KEY `IDX_1CBA6AB178EB7775` (`nature_travaux_id`),
  ADD KEY `IDX_1CBA6AB176C50E4A` (`proprietaire_id`),
  ADD KEY `IDX_1CBA6AB15C9609E3` (`electricien_id`);

--
-- Index pour la table `localite`
--
ALTER TABLE `localite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5D7E4A9CCF9E01E` (`departement_id`),
  ADD KEY `IDX_F5D7E4A9D725330D` (`agence_id`);

--
-- Index pour la table `nature_batiment`
--
ALTER TABLE `nature_batiment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nature_travaux`
--
ALTER TABLE `nature_travaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B1DC7A1E80E95E18` (`demande_id`),
  ADD KEY `IDX_B1DC7A1EBA52A149` (`comptable_id`);

--
-- Index pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AB5111D4167B88B4` (`installation_id`);

--
-- Index pour la table `point_verification`
--
ALTER TABLE `point_verification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AC7E3C6F3BD38833` (`rubrique_id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_69E399D6924DD2B5` (`localite_id`);

--
-- Index pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recu`
--
ALTER TABLE `recu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C0D103172A4C4478` (`paiement_id`),
  ADD KEY `IDX_C0D10317B514973B` (`caissier_id`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `remboursement`
--
ALTER TABLE `remboursement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C0C0D9EF2A4C4478` (`paiement_id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8FA4097C1DFBCC46` (`rapport_id`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_construction`
--
ALTER TABLE `type_construction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3AA08CB10` (`login`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B09C8CBB611C0C56` (`dossier_id`),
  ADD KEY `IDX_B09C8CBB1DFBCC46` (`rapport_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectations_agents`
--
ALTER TABLE `affectations_agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT pour la table `attestation`
--
ALTER TABLE `attestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `detail_verification`
--
ALTER TABLE `detail_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `electricien`
--
ALTER TABLE `electricien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT pour la table `grille`
--
ALTER TABLE `grille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `installation`
--
ALTER TABLE `installation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT pour la table `localite`
--
ALTER TABLE `localite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `nature_batiment`
--
ALTER TABLE `nature_batiment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `nature_travaux`
--
ALTER TABLE `nature_travaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `point_verification`
--
ALTER TABLE `point_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `recu`
--
ALTER TABLE `recu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `remboursement`
--
ALTER TABLE `remboursement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `rubrique`
--
ALTER TABLE `rubrique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_construction`
--
ALTER TABLE `type_construction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `visite`
--
ALTER TABLE `visite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affectations_agents`
--
ALTER TABLE `affectations_agents`
  ADD CONSTRAINT `FK_73154B3414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`),
  ADD CONSTRAINT `FK_73154BD725330D` FOREIGN KEY (`agence_id`) REFERENCES `agence` (`id`);

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `FK_268B9C9D275ED078` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`);

--
-- Contraintes pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD CONSTRAINT `FK_326EC63F611C0C56` FOREIGN KEY (`dossier_id`) REFERENCES `dossier` (`id`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `FK_2694D7A5167B88B4` FOREIGN KEY (`installation_id`) REFERENCES `installation` (`id`),
  ADD CONSTRAINT `FK_2694D7A52A4C4478` FOREIGN KEY (`paiement_id`) REFERENCES `paiement` (`id`),
  ADD CONSTRAINT `FK_2694D7A5611C0C56` FOREIGN KEY (`dossier_id`) REFERENCES `dossier` (`id`),
  ADD CONSTRAINT `FK_2694D7A5FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `FK_C1765B6398260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Contraintes pour la table `detail_verification`
--
ALTER TABLE `detail_verification`
  ADD CONSTRAINT `FK_46F2AF04C1C5DC59` FOREIGN KEY (`visite_id`) REFERENCES `visite` (`id`),
  ADD CONSTRAINT `FK_46F2AF04E1846C45` FOREIGN KEY (`point_verification_id`) REFERENCES `point_verification` (`id`);

--
-- Contraintes pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD CONSTRAINT `FK_3D48E03735E47E35` FOREIGN KEY (`referent_id`) REFERENCES `agent` (`id`),
  ADD CONSTRAINT `FK_3D48E03780E95E18` FOREIGN KEY (`demande_id`) REFERENCES `demande` (`id`),
  ADD CONSTRAINT `FK_3D48E037B13E6101` FOREIGN KEY (`controleur_id`) REFERENCES `agent` (`id`),
  ADD CONSTRAINT `FK_3D48E037F4CF9AD9` FOREIGN KEY (`respo_front_office_id`) REFERENCES `agent` (`id`);

--
-- Contraintes pour la table `electricien`
--
ALTER TABLE `electricien`
  ADD CONSTRAINT `FK_DFB53AEA924DD2B5` FOREIGN KEY (`localite_id`) REFERENCES `localite` (`id`);

--
-- Contraintes pour la table `installation`
--
ALTER TABLE `installation`
  ADD CONSTRAINT `FK_1CBA6AB1387C850E` FOREIGN KEY (`type_construction_id`) REFERENCES `type_construction` (`id`),
  ADD CONSTRAINT `FK_1CBA6AB15C9609E3` FOREIGN KEY (`electricien_id`) REFERENCES `electricien` (`id`),
  ADD CONSTRAINT `FK_1CBA6AB176C50E4A` FOREIGN KEY (`proprietaire_id`) REFERENCES `proprietaire` (`id`),
  ADD CONSTRAINT `FK_1CBA6AB178EB7775` FOREIGN KEY (`nature_travaux_id`) REFERENCES `nature_travaux` (`id`),
  ADD CONSTRAINT `FK_1CBA6AB1924DD2B5` FOREIGN KEY (`localite_id`) REFERENCES `localite` (`id`),
  ADD CONSTRAINT `FK_1CBA6AB1B871F14F` FOREIGN KEY (`nature_batiment_id`) REFERENCES `nature_batiment` (`id`);

--
-- Contraintes pour la table `localite`
--
ALTER TABLE `localite`
  ADD CONSTRAINT `FK_F5D7E4A9CCF9E01E` FOREIGN KEY (`departement_id`) REFERENCES `departement` (`id`),
  ADD CONSTRAINT `FK_F5D7E4A9D725330D` FOREIGN KEY (`agence_id`) REFERENCES `agence` (`id`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `FK_B1DC7A1E80E95E18` FOREIGN KEY (`demande_id`) REFERENCES `demande` (`id`),
  ADD CONSTRAINT `FK_B1DC7A1EBA52A149` FOREIGN KEY (`comptable_id`) REFERENCES `agent` (`id`);

--
-- Contraintes pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  ADD CONSTRAINT `FK_AB5111D4167B88B4` FOREIGN KEY (`installation_id`) REFERENCES `installation` (`id`);

--
-- Contraintes pour la table `point_verification`
--
ALTER TABLE `point_verification`
  ADD CONSTRAINT `FK_AC7E3C6F3BD38833` FOREIGN KEY (`rubrique_id`) REFERENCES `rubrique` (`id`);

--
-- Contraintes pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD CONSTRAINT `FK_69E399D6924DD2B5` FOREIGN KEY (`localite_id`) REFERENCES `localite` (`id`);

--
-- Contraintes pour la table `recu`
--
ALTER TABLE `recu`
  ADD CONSTRAINT `FK_C0D103172A4C4478` FOREIGN KEY (`paiement_id`) REFERENCES `paiement` (`id`),
  ADD CONSTRAINT `FK_C0D10317B514973B` FOREIGN KEY (`caissier_id`) REFERENCES `agent` (`id`);

--
-- Contraintes pour la table `remboursement`
--
ALTER TABLE `remboursement`
  ADD CONSTRAINT `FK_C0C0D9EF2A4C4478` FOREIGN KEY (`paiement_id`) REFERENCES `paiement` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD CONSTRAINT `FK_8FA4097C1DFBCC46` FOREIGN KEY (`rapport_id`) REFERENCES `rapport` (`id`);

--
-- Contraintes pour la table `visite`
--
ALTER TABLE `visite`
  ADD CONSTRAINT `FK_B09C8CBB1DFBCC46` FOREIGN KEY (`rapport_id`) REFERENCES `rapport` (`id`),
  ADD CONSTRAINT `FK_B09C8CBB611C0C56` FOREIGN KEY (`dossier_id`) REFERENCES `dossier` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
