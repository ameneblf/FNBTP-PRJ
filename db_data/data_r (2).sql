-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 19, 2023 at 10:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_r`
--

-- --------------------------------------------------------

--
-- Table structure for table `adhesion`
--

CREATE TABLE `adhesion` (
  `id` int(5) NOT NULL,
  `nb_national` int(11) NOT NULL,
  `ENTREPRISE` varchar(30) NOT NULL,
  `qualite_membre` int(11) NOT NULL,
  `date_ad` date DEFAULT NULL,
  `id_entre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `adhesion`
--

INSERT INTO `adhesion` (`id`, `nb_national`, `ENTREPRISE`, `qualite_membre`, `date_ad`, `id_entre`) VALUES
(1, 27, 'EL MOKHA', 0, '2023-01-01', 1),
(2, 1, 'ENCEC (ENTREPRISE CHERRARDA DE', 3, '2023-01-01', 2),
(3, 1, 'VALTECH', 3, '2023-01-01', 3),
(4, 40, 'SBC', 0, '2023-01-01', 4),
(5, 41, 'RAJA BINAA', 1, '2023-01-01', 5),
(6, 42, 'SAD', 0, '2023-01-01', 6),
(7, 48, 'SELIBA (SOCIETE D’ELITE DE BAT', 4, '2023-01-01', 7),
(8, 50, 'CEETD/CONCEIL ETUDE EQUIPEMENT', 0, '2023-01-01', 8),
(9, 52, 'STE DE BATIMENT DU PLATEAU-SBP', 4, '2023-01-01', 9),
(10, 1, 'HYDRO CHALLENGE', 3, '2023-01-01', 10),
(11, 78, 'SECHO ( SOCIETE ECHCHERKI DES ', 4, '2023-01-01', 11),
(12, 83, 'ENTREPRISE BELGHERCH', 0, '2023-01-01', 12),
(13, 85, 'TILILT', 0, '2023-01-01', 13),
(14, 86, 'GMCT', 0, '2023-01-01', 14),
(15, 1, 'SEDEC- Société d’Exploitation ', 3, '2023-01-01', 15),
(16, 99, 'SMATRA (SOCIETE MAROCAINE DE R', 4, '2023-01-01', 16),
(17, 103, 'ENTENTE TRAVAUX', 0, '2023-01-01', 17),
(18, 104, 'MARIAMA', 0, '2023-01-01', 18),
(19, 111, 'SAG', 0, '2023-01-01', 19),
(20, 113, 'MACOD', 0, '2023-01-01', 20),
(21, 114, 'SACOD', 0, '2023-01-01', 21),
(22, 1, 'SMETEG sarl (Société Marocaine', 3, '2023-01-01', 22),
(23, 116, 'LES OUVRAGES MODERNES', 4, '2023-01-01', 23),
(24, 118, 'LAHCEN FAHIM', 0, '2023-01-01', 24),
(25, 123, 'ETPE', 1, '2023-01-01', 25),
(26, 127, 'EDI MAROC- LES EDIFICES MAROCA', 1, '2023-01-01', 26),
(27, 129, 'DELTA HOLDING', 4, '2023-01-01', 27),
(28, 145, 'CCC MOROCCO', 0, '2023-01-01', 28),
(29, 152, 'FINE WORK', 0, '2023-01-01', 29),
(30, 174, 'RED SEA COE', 0, '2023-01-01', 30),
(31, 175, 'SOTRADEL', 0, '2023-01-01', 31),
(32, 176, 'SNEE/SOCIETE NATIONALE D\'ETUDE', 0, '2023-01-01', 32),
(33, 179, 'SELATRAC resiliation', 0, '2023-01-01', 33),
(34, 180, 'SOGRAMA', 0, '2023-01-01', 34),
(35, 181, 'SETRAT (SOCIETE D’ETUDES ET TR', 1, '2023-01-01', 35),
(36, 182, 'SNCE (SOCIETE NOUVELLE DES CON', 1, '2023-01-01', 36),
(37, 183, 'GROUPEMENT AUXITEC KADMIRI', 4, '2023-01-01', 37),
(38, 184, 'EQUELEC (EQUIPEMENTS ELECTRONI', 4, '2023-01-01', 38),
(39, 185, 'ENTPE/ENTREPRISE NOUVELLE DE T', 0, '2023-01-01', 39),
(40, 186, 'SRGM (SOCIETE DE REALISATIONS ', 0, '2023-01-01', 40),
(41, 187, 'SATECO', 0, '2023-01-01', 41),
(42, 188, 'BUILDER (ENTRPRISE DES TRAVAUX', 4, '2023-01-01', 42),
(43, 190, 'COGEC', 0, '2023-01-01', 43),
(44, 191, 'GTP/ STE GHANDOUR DE CONSRUCTI', 0, '2023-01-01', 44),
(45, 192, 'EMACI', 0, '2023-01-01', 45),
(46, 193, 'ETDB ARRET D ACTIVITE', 0, '2023-01-01', 46),
(47, 194, 'C2EM', 0, '2023-01-01', 47),
(48, 195, 'SETUMA (SOCIETE D’ETUDE ET DE ', 4, '2023-01-01', 48),
(49, 1, 'SOGEA MAROC', 5, '2023-01-01', 49),
(50, 197, 'GTGC/Ste des GRANDS Travaux de', 0, '2023-01-01', 50),
(51, 1, 'ASSKHOR', 3, '2023-01-01', 51),
(52, 1, 'ASSABBANE ET KHORSSA', 3, '2023-01-01', 52),
(53, 200, 'BOUYA', 0, '2023-01-01', 53),
(54, 1, 'ABHAT', 3, '2023-01-01', 54),
(55, 202, 'KHOUADER DE BATIMENT', 0, '2023-01-01', 55),
(56, 203, 'SARRA FORAGES', 0, '2023-01-01', 56),
(57, 1, 'TRAMCO', 3, '2023-01-01', 57),
(58, 221, 'EMIBA', 0, '2023-01-01', 58),
(59, 222, 'SOFIBOUC', 4, '2023-01-01', 59),
(60, 227, 'EMB', 1, '2023-01-01', 60),
(61, 1, 'JET ALU MAROC', 5, '2023-01-01', 61),
(62, 292, 'SDET', 0, '2023-01-01', 62),
(63, 368, 'LBM -COMPAGNIE DE BATIMENT', 0, '2023-01-01', 63),
(64, 377, 'SIGNAL MAROC', 0, '2023-01-01', 64),
(65, 385, 'CHOUROUK', 0, '2023-01-01', 65),
(66, 386, 'SBTP', 0, '2023-01-01', 66),
(67, 399, 'GTP/ Khemisset', 0, '2023-01-01', 67),
(68, 403, 'SABIMA', 0, '2023-01-01', 68),
(69, 404, 'SMIRRI BTP', 0, '2023-01-01', 69),
(70, 406, 'FARIDI ALANBARI', 0, '2023-01-01', 70),
(71, 407, 'EBKC', 0, '2023-01-01', 71),
(72, 408, 'AL ANBARI', 0, '2023-01-01', 72),
(73, 1, 'SOCA', 5, '2023-01-01', 73),
(74, 417, 'SANI PLOMB', 4, '2023-01-01', 74),
(75, 424, 'GERAB (GROUPEMENT D’ETUDE ET D', 4, '2023-01-01', 75),
(76, 1, 'GRENSON & PERFETINI- EXPLOITAT', 3, '2023-01-01', 76),
(77, 432, 'COMASITCONSTRUCTION', 0, '2023-01-01', 77),
(78, 435, 'HBLM', 0, '2023-01-01', 78),
(79, 440, 'AIN JOHRA DE CONSTRUCTION', 0, '2023-01-01', 79),
(80, 444, 'FIRCO', 0, '2023-01-01', 80),
(81, 446, 'TCBM/TUYAUX ET CANNAUX EN BETO', 0, '2023-01-01', 81),
(82, 458, 'ECAV', 0, '2023-01-01', 82),
(83, 494, 'SDAGET (SOCIETE DHABA DE GENIE', 0, '2023-01-01', 83),
(84, 501, 'AMACONS', 4, '2023-01-01', 84),
(85, 506, 'MRIMEE', 4, '2023-01-01', 85),
(86, 1, 'ABEC EL BARAKA BATIMENT', 3, '2023-01-01', 86),
(87, 509, 'RAQAQ', 0, '2023-01-01', 87),
(88, 535, 'FERRAOUI', 4, '2023-01-01', 88),
(89, 536, 'VIA MAROC', 0, '2023-01-01', 89),
(90, 590, 'CERS', 4, '2023-01-01', 90),
(91, 597, 'CATER (COMPAGNIE D’AMENAGEMENT', 1, '2023-01-01', 91),
(92, 598, 'SOCOTRD', 0, '2023-01-01', 92),
(93, 605, 'PROVAC', 0, '2023-01-01', 93),
(94, 608, 'BAHAOUI M\'HAMED', 0, '2023-01-01', 94),
(95, 625, 'HADJ OMAR BENSAID', 4, '2023-01-01', 95),
(96, 646, 'SOHATECO (SOCIETE HACHIMI DE T', 4, '2023-01-01', 96),
(97, 1, 'MAGHREB PLANTES', 3, '2023-01-01', 97),
(98, 675, 'WETRA', 0, '2023-01-01', 98),
(99, 715, 'S.O.I.T', 0, '2023-01-01', 99),
(100, 716, 'THERMO DARIAS', 0, '2023-01-01', 100),
(101, 729, 'COMET -COMPAGNIE MAROCAINE D E', 0, '2023-01-01', 101),
(102, 733, 'ESPACE BETON', 4, '2023-01-01', 102),
(103, 742, 'LAHYANI', 0, '2023-01-01', 103),
(104, 1, 'SUMC', 3, '2023-01-01', 104),
(105, 746, 'STRACOBA', 4, '2023-01-01', 105),
(106, 1, 'DINO/OUAZZANI TAIBI( DEVELOPPE', 3, '2023-01-01', 106),
(107, 748, 'AZZI- ENTREPRISE DE TRAVAUX', 4, '2023-01-01', 107),
(108, 749, 'SOCOTRAD', 4, '2023-01-01', 108),
(109, 750, 'SARAH SOCIETE - AFRICAINE DE R', 4, '2023-01-01', 109),
(110, 751, 'BELKASTALI', 0, '2023-01-01', 110),
(111, 758, 'SMTD', 0, '2023-01-01', 111),
(112, 760, 'ABEINO', 4, '2023-01-01', 112),
(113, 761, 'TAGANTE', 4, '2023-01-01', 113),
(114, 762, 'STE FILS AL HABIB', 0, '2023-01-01', 114),
(115, 763, 'VAMEPE (VITRERIE AGENCEMENT ME', 4, '2023-01-01', 115),
(116, 764, 'SBT', 0, '2023-01-01', 116),
(117, 765, 'OPALINE DECOR', 0, '2023-01-01', 117),
(118, 766, 'MACOBATE (DOMEBOIS)', 1, '2023-01-01', 118),
(119, 767, 'AZ CONSTRUCTIONS ARRET DE TRAV', 0, '2023-01-01', 119),
(120, 768, 'COTREX', 4, '2023-01-01', 120),
(121, 769, 'UBAC UNION ( BATIMENT ET CONDU', 4, '2023-01-01', 121),
(122, 770, 'CHIBAR', 4, '2023-01-01', 122),
(123, 771, 'MAJIHAR', 4, '2023-01-01', 123),
(124, 1, 'SOLSIF MAROC', 3, '2023-01-01', 124),
(125, 778, 'BATISOM', 0, '2023-01-01', 125),
(126, 779, 'CODETEC', 0, '2023-01-01', 126),
(127, 783, 'CONTRANSIMEX SUD DAKHLA', 0, '2023-01-01', 127),
(128, 1, 'THERMO ENERGIE', 3, '2023-01-01', 128),
(129, 787, 'GEOPRA', 0, '2023-01-01', 129),
(130, 790, 'EBET', 0, '2023-01-01', 130),
(131, 791, 'NOMATRAB', 0, '2023-01-01', 131),
(132, 798, 'RIMS', 4, '2023-01-01', 132),
(133, 1, 'GTR', 5, '2023-01-01', 133),
(134, 1, 'LRM (LA ROUTE MAROCAINE)', 5, '2023-01-01', 134),
(135, 801, 'CNBTP', 0, '2023-01-01', 135),
(136, 1, 'SOGEBAC', 3, '2023-01-01', 136),
(137, 803, 'LAMSETRI', 0, '2023-01-01', 137),
(138, 804, 'ZOUAYAT CONSTRUCTION', 4, '2023-01-01', 138),
(139, 805, 'ELECLAR?BATLARIM', 0, '2023-01-01', 139),
(140, 806, 'YOUR BTP', 4, '2023-01-01', 140),
(141, 807, 'TAGHI', 4, '2023-01-01', 141),
(142, 808, 'ACHOUAK', 4, '2023-01-01', 142),
(143, 809, 'ECOBA - ENTREPRISE DE CONSTRUC', 4, '2023-01-01', 143),
(144, 810, 'AJIAL CONSTRUCTION', 4, '2023-01-01', 144),
(145, 811, 'EL FILALI HAMID', 4, '2023-01-01', 145),
(146, 812, 'GENERALE DE PROJETS', 4, '2023-01-01', 146),
(147, 813, 'AUGUST', 1, '2023-01-01', 147),
(148, 819, 'AIR INDUSTRIE', 4, '2023-01-01', 148),
(149, 839, 'SOLROC', 4, '2023-01-01', 149),
(150, 840, 'MAGHREB NET RTABI', 1, '2023-01-01', 150),
(151, 841, 'DAE', 0, '2023-01-01', 151),
(152, 842, 'SECOMAV', 4, '2023-01-01', 152),
(153, 877, 'SITRATEC', 4, '2023-01-01', 153),
(154, 895, 'SOTAJID', 4, '2023-01-01', 154),
(155, 907, 'BTP OPTIMUM', 4, '2023-01-01', 155),
(156, 909, 'AFRICAXION', 4, '2023-01-01', 156),
(157, 910, 'ENNAJMAOUI RACHID', 4, '2023-01-01', 157),
(158, 911, 'ENNAJMAOUI DRISS', 4, '2023-01-01', 158),
(159, 912, 'HYDEMA - HYDRO DEVELOPPEMENT M', 4, '2023-01-01', 159),
(160, 913, 'SOMADAS SPORTS', 4, '2023-01-01', 160),
(161, 914, 'EL RHALLAMI', 4, '2023-01-01', 161),
(162, 915, 'SOREVAMLIL (SOCIETE DE REVETEM', 4, '2023-01-01', 162),
(163, 916, 'SOCACED', 4, '2023-01-01', 163),
(164, 917, 'ANOUAR', 0, '2023-01-01', 164),
(165, 918, 'AMINZOU', 4, '2023-01-01', 165),
(166, 919, 'ALU FACADE', 4, '2023-01-01', 166),
(167, 1, 'ATELIER TEULI', 3, '2023-01-01', 167),
(168, 921, 'DARHMANE ET FILS', 4, '2023-01-01', 168),
(169, 922, 'ECOGEC', 4, '2023-01-01', 169),
(170, 923, 'EL HAIDAOUI', 4, '2023-01-01', 170),
(171, 925, 'ELECTRATEC', 4, '2023-01-01', 171),
(172, 926, 'ENTIB JABA MUSTAPHA', 4, '2023-01-01', 172),
(173, 927, 'GECAF', 0, '2023-01-01', 173),
(174, 928, 'MEDIA LUNA', 0, '2023-01-01', 174),
(175, 929, 'MOUMNI LARBI', 0, '2023-01-01', 175),
(176, 930, 'ORNOS', 0, '2023-01-01', 176),
(177, 931, 'PLAFONDS RESO MAROC', 4, '2023-01-01', 177),
(178, 932, 'POLY RESO', 0, '2023-01-01', 178),
(179, 933, 'SOSOTRAD- SOULAIMANI DES TRAVA', 4, '2023-01-01', 179),
(180, 934, 'SRTHYG BTP- SOCIETE DE REALISA', 4, '2023-01-01', 180),
(181, 935, 'TAJEDIC', 4, '2023-01-01', 181),
(182, 936, 'TAMC', 0, '2023-01-01', 182),
(183, 937, 'VORTEX', 4, '2023-01-01', 183),
(184, 938, 'SOCOFAF', 4, '2023-01-01', 184),
(185, 1, 'TCN TRAVAUX DU CENTRE ET DU NI', 3, '2023-01-01', 185),
(186, 941, 'PRO-BUILDER', 4, '2023-01-01', 186),
(187, 942, 'RAZIKI', 4, '2023-01-01', 187),
(188, 943, 'SOTRACOBA', 0, '2023-01-01', 188),
(189, 944, 'SOZATRAD', 4, '2023-01-01', 189),
(190, 1, 'URBAGEC', 3, '2023-01-01', 190),
(191, 979, 'COVATRAP', 4, '2023-01-01', 191),
(192, 980, 'IBRAHIMI M\'BAREK', 0, '2023-01-01', 192),
(193, 981, 'INGENIERIE ET TRAVAUX', 0, '2023-01-01', 193),
(194, 982, 'RADI', 4, '2023-01-01', 194),
(195, 983, 'SOTRACOPA', 0, '2023-01-01', 195),
(196, 984, 'GETHERM- resiliation', 0, '2023-01-01', 196),
(197, 985, 'AAMAL CHLIEH', 4, '2023-01-01', 197),
(198, 986, 'MEGATEL AIR TELECOM', 4, '2023-01-01', 198),
(199, 987, 'ELPRO TRAVAUX', 4, '2023-01-01', 199),
(200, 988, 'AMRAOUI DE TRAVAUX', 4, '2023-01-01', 200),
(201, 989, 'BLOUTANE', 4, '2023-01-01', 201),
(202, 990, 'FEMOTRA', 4, '2023-01-01', 202),
(203, 991, 'WORLD HYDROLIC', 4, '2023-01-01', 203),
(204, 992, 'AHMINA RADOUANE ( ENTRACON)', 4, '2023-01-01', 204),
(205, 993, 'ATEMA', 0, '2023-01-01', 205),
(206, 994, 'SCPS', 4, '2023-01-01', 206),
(207, 995, 'SETRAB', 4, '2023-01-01', 207),
(208, 996, 'AGEBAC', 4, '2023-01-01', 208),
(209, 997, 'MEROUANI EL GHEZOUANI- ART MET', 4, '2023-01-01', 209),
(210, 998, 'TRADIO', 4, '2023-01-01', 210),
(211, 999, 'NEW LABEL OF CONSTRUCTION', 4, '2023-01-01', 211),
(212, 1018, 'GCR- Les Grands Chantiers Rout', 4, '2023-01-01', 212),
(213, 1, 'BITUMA', 3, '2023-01-01', 213),
(214, 1, 'OMCE ( OMNIUM MAGHREBIN DES CO', 5, '2023-01-01', 214),
(215, 1025, 'ASSALIHINE', 4, '2023-01-01', 215),
(216, 1026, 'BAKR EXTINCTEURS', 4, '2023-01-01', 216),
(217, 1027, 'EL YAZALI', 4, '2023-01-01', 217),
(218, 1028, 'SALE ELECTRICITE', 4, '2023-01-01', 218),
(219, 1033, 'BOUGHABA de Travaux Divers', 4, '2023-01-01', 219),
(220, 1075, 'CEB ( construction equipement ', 4, '2023-01-01', 220),
(221, 1076, 'EL KOURDI', 0, '2023-01-01', 221),
(222, 1077, 'SOTRAPI', 4, '2023-01-01', 222),
(223, 1, 'CCGT- CONSORTIUM POUR LES CANA', 3, '2023-01-01', 223),
(224, 1, 'SIDEN (Societé industrielle d’', 3, '2023-01-01', 224),
(225, 1080, 'GUIROUAN', 0, '2023-01-01', 225),
(226, 1081, 'ELOMARI FRERES', 4, '2023-01-01', 226),
(227, 1083, 'SODESTRAS', 4, '2023-01-01', 227),
(228, 1084, 'INTEGRANET', 4, '2023-01-01', 228),
(229, 1087, 'EXTRA BATISSE', 4, '2023-01-01', 229),
(230, 1088, 'MATRAGEC', 4, '2023-01-01', 230),
(231, 1, 'SMADIRE- Société Marocaine d’I', 3, '2023-01-01', 231),
(232, 1, 'AVANZIT MAROC', 3, '2023-01-01', 232),
(233, 1097, 'AMTRA- AHMAMOUCH DE TRAVAUX', 4, '2023-01-01', 233),
(234, 1098, 'NEW GARDEN', 4, '2023-01-01', 234),
(235, 1102, 'RIMINES', 4, '2023-01-01', 235),
(236, 1103, 'ROSSELL', 4, '2023-01-01', 236),
(237, 1106, 'LABIAD TRAVAUX', 4, '2023-01-01', 237),
(238, 1107, 'CINREX', 4, '2023-01-01', 238),
(239, 1115, 'MAISON MODELE', 4, '2023-01-01', 239),
(240, 1116, 'JIBAL AL ALPI- ALPIDECO-', 4, '2023-01-01', 240),
(241, 1082, 'SERAVE/SOCIETE D\'ETUDE ET DE L', 4, '2023-01-01', 241),
(242, 1099, 'SOBETRA', 4, '2023-01-01', 242),
(243, 0, 'SACT/SOCIETE AFRICAINE DES CON', 4, '2023-01-01', 243),
(244, 0, 'ALEQ -ALAM EQUIPEMENT', 1, '2023-01-01', 244),
(245, 0, 'ADDIAR ARRIBATIA', 0, '2023-01-01', 245),
(246, 0, 'SOCIETE DE CONSTRUCTION ABIDAR', 0, '2023-01-01', 246),
(247, 0, 'ECTAV', 0, '2023-01-01', 247),
(248, 0, 'EL HADDAD', 0, '2023-01-01', 248),
(249, 0, 'JETRAMO ( JERRY TRAVAUX MOURAD', 0, '2023-01-01', 249),
(250, 0, 'SBC/Ste BOUHMOUCHE DE CONSTRUC', 0, '2023-01-01', 250),
(251, 0, 'SOMEXET', 0, '2023-01-01', 251),
(252, 0, 'ZGHIYO SERVICE', 0, '2023-01-01', 252),
(253, 0, 'DECOMAV', 0, '2023-01-01', 253),
(254, 0, 'IDH MAROC', 4, '2023-01-01', 254),
(255, 0, 'L\'EXPERT DES OUVRAGES TECHNIQU', 4, '2023-01-01', 255),
(256, 0, 'SOGEBEM', 4, '2023-01-01', 256),
(257, 0, 'MEGAFOR', 4, '2023-01-01', 257),
(258, 0, 'ASDEC', 4, '2023-01-01', 258),
(259, 0, 'ACAMELEC', 4, '2023-01-01', 259),
(260, 0, 'SCEPSI', 4, '2023-01-01', 260),
(261, 0, 'CIMELECT', 4, '2023-01-01', 261),
(262, 0, 'ACOPT ( maazaz lahcen)', 4, '2023-01-01', 262),
(263, 0, 'MENUISERIE AL WAFA', 4, '2023-01-01', 263),
(264, 0, 'Ete LAMKADAM', 4, '2023-01-01', 264),
(265, 0, 'SABER', 4, '2023-01-01', 265),
(266, 0, 'RABAT GRAVURE PUB', 4, '2023-01-01', 266),
(267, 0, 'ALOUSS', 4, '2023-01-01', 267),
(268, 0, 'SCOTIM', 4, '2023-01-01', 268),
(269, 0, 'ELFILALI MOHAMED ABDELLAH', 4, '2023-01-01', 269),
(270, 0, 'LA GENERALE DES RESEAUX', 4, '2023-01-01', 270),
(271, 0, 'TER Travaux Electriques et Rea', 4, '2023-01-01', 271),
(272, 0, 'RPSN', 4, '2023-01-01', 272),
(273, 0, 'LARAICHI Abdelhaq', 1, '2023-01-01', 273),
(274, 0, 'MESRAR INETRIEUR', 4, '2023-01-01', 274),
(275, 0, 'TRAMADA', 4, '2023-01-01', 275),
(276, 0, 'ZITOUNI', 4, '2023-01-01', 276),
(277, 0, 'ITTRI.EP.', 0, '2023-01-01', 277),
(278, 0, 'IDAANI', 4, '2023-01-01', 278),
(279, 0, 'SAHARATEL', 4, '2023-01-01', 279),
(280, 0, 'RADIOCOM', 4, '2023-01-01', 280),
(281, 0, 'MYFAK', 4, '2023-01-01', 281),
(282, 0, 'COTRAVET', 4, '2023-01-01', 282),
(283, 0, 'SOTRATEP', 4, '2023-01-01', 283),
(284, 0, 'Etablissement Zemmouri TAHAR', 4, '2023-01-01', 284),
(285, 0, 'ATR ( ASSMENT TRAVAUX ROUTIER)', 4, '2023-01-01', 285),
(286, 2, 'SEAGRIME', 4, '2023-01-01', 286),
(287, 1, 'SYSTHERM', 3, '2023-01-01', 287),
(288, 0, 'EAACT- AIT LAHCEN ABDERRAHIME ', 4, '2023-01-01', 288),
(289, 0, 'HARISKOU TRAVAUX', 4, '2023-01-01', 289),
(290, 0, 'TECATLAN', 4, '2023-01-01', 290),
(291, 0, 'OUBAMI DE BATIMENT', 4, '2023-01-01', 291),
(292, 0, 'KATRAV SERVICE', 4, '2023-01-01', 292),
(293, 0, 'BENAAMMOUCH OMAR', 4, '2023-01-01', 293),
(294, 0, 'EL OUFIR FAYCAL -en veilleuse-', 0, '2023-01-01', 294),
(295, 1, 'GENERATION MAROC TECHNOLOGIE -', 3, '2023-01-01', 295),
(296, 0, 'FER PLATRE', 4, '2023-01-01', 296),
(297, 0, 'PEDECOR', 4, '2023-01-01', 297),
(298, 2, 'TROVAC', 4, '2023-01-01', 298),
(299, 3, 'ECG Entretien et construction ', 4, '2023-01-01', 299),
(300, 0, 'ARITRAVO', 4, '2023-01-01', 300),
(301, 0, 'LARCO', 4, '2023-01-01', 301),
(302, 0, 'EL ABDERRAHMANI OMARI Med', 4, '2023-01-01', 302),
(303, 0, 'STADE', 4, '2023-01-01', 303),
(304, 0, 'TPCR', 4, '2023-01-01', 304),
(305, 1, 'BRAIN AND WORKS ENGINEERING (B', 3, '2023-01-01', 305),
(306, 1, 'HTECH', 3, '2023-01-01', 306),
(307, 0, 'TARCO MAROC', 4, '2023-01-01', 307),
(308, 0, 'AFRILAB', 4, '2023-01-01', 308),
(309, 0, 'STPG', 4, '2023-01-01', 309),
(310, 0, 'ETP (ENTREPRISE DE TOUTES PRES', 4, '2023-01-01', 310),
(311, 0, 'LES JARDINS DE VERSAILLES', 4, '2023-01-01', 311),
(312, 0, 'MAZZA ET BELHADJ', 4, '2023-01-01', 312),
(313, 0, 'SARA ( entreprise d\'electricit', 4, '2023-01-01', 313),
(314, 0, 'TIZTA', 4, '2023-01-01', 314),
(315, 0, 'AMANOR', 4, '2023-01-01', 315),
(316, 0, 'MODULAR SYSTEM MAROC', 4, '2023-01-01', 316),
(317, 0, 'LE ROMANIA', 4, '2023-01-01', 317),
(318, 0, 'KHARBOUCH LARBI', 4, '2023-01-01', 318),
(319, 0, 'HALCODEC', 4, '2023-01-01', 319),
(320, 0, 'SOBAY', 4, '2023-01-01', 320),
(321, 2, 'REVOLUS VOIR CA', 4, '2023-01-01', 321),
(322, 0, 'SAR INGENIERIE', 4, '2023-01-01', 322),
(323, 1, 'SOUTHYDRAULIC', 3, '2023-01-01', 323),
(324, 1, 'INGEBAK', 3, '2023-01-01', 324),
(325, 0, 'BILTER CONSEIL', 4, '2023-01-01', 325),
(326, 0, 'HASSANE', 4, '2023-01-01', 326),
(327, 0, 'RECOVA', 4, '2023-01-01', 327),
(328, 1, 'TRAVAUX DE CONSTRUCTION ET DE ', 3, '2023-01-01', 328),
(329, 1, 'COMEFAL', 3, '2023-01-01', 329),
(330, 0, 'SEITE VRD', 4, '2023-01-01', 330),
(331, 0, 'CHRONOBAT', 4, '2023-01-01', 331),
(332, 0, 'SUNLIGHT POWER', 4, '2023-01-01', 332),
(333, 0, 'SONASCOTRAP', 4, '2023-01-01', 333),
(334, 0, 'RIMO CONSTRUCTION', 4, '2023-01-01', 334),
(335, 0, 'AMANDIC', 4, '2023-01-01', 335),
(336, 0, 'GHAZZA', 4, '2023-01-01', 336),
(337, 0, 'ASSAKA NIGROU', 4, '2023-01-01', 337),
(338, 0, 'OUHOUD DE CONSTRUCTION', 4, '2023-01-01', 338),
(339, 0, 'OSRIM COMPROCLIM', 4, '2023-01-01', 339),
(340, 0, 'YASSINE OUAKKA', 4, '2023-01-01', 340),
(341, 0, 'DRISSAT DRISS', 4, '2023-01-01', 341),
(342, 0, 'ALPHA BUREAU', 4, '2023-01-01', 342),
(343, 0, 'KHARBOUCH ABDELFATTAH', 4, '2023-01-01', 343),
(344, 0, 'EDIFICA', 4, '2023-01-01', 344),
(345, 0, 'ABOUTALEB TAYFOUR', 4, '2023-01-01', 345),
(346, 0, 'ENOBATAL', 4, '2023-01-01', 346),
(347, 0, 'TIZOUDA', 4, '2023-01-01', 347),
(348, 0, 'CURNET', 4, '2023-01-01', 348),
(349, 0, 'BELATEL', 4, '2023-01-01', 349),
(350, 0, 'COTER CONSTRUCTION TERHZAZ', 4, '2023-01-01', 350),
(351, 0, 'EQUIMARO', 4, '2023-01-01', 351),
(352, 0, 'SOMT (Société maghrébine de tr', 4, '2023-01-01', 352),
(353, 0, 'OTRAD', 4, '2023-01-01', 353),
(354, 0, 'MEGA PISCINE', 4, '2023-01-01', 354),
(355, 0, 'TP LAND', 4, '2023-01-01', 355),
(356, 0, 'SODEVA', 4, '2023-01-01', 356),
(357, 0, 'FIDEL CONSTRUCTION EL BAHI', 4, '2023-01-01', 357),
(358, 0, 'PROJEXET', 4, '2023-01-01', 358),
(359, 1, 'CIRGEC', 3, '2023-01-01', 359),
(360, 0, 'AL ASSEMA TRAVAUX', 4, '2023-01-01', 360),
(361, 0, 'SOCIETE DE GESTION ZNIBER ( SG', 4, '2023-01-01', 361),
(362, 0, 'TG TOP', 4, '2023-01-01', 362),
(363, 0, 'EBER', 4, '2023-01-01', 363),
(364, 0, 'SME CLIM', 4, '2023-01-01', 364),
(365, 0, 'CHTOUKI', 4, '2023-01-01', 365),
(366, 0, 'MENUISERIE AGOUZOUL', 4, '2023-01-01', 366),
(367, 0, 'JASOTRAV', 4, '2023-01-01', 367),
(368, 0, 'SOTRIBEL', 4, '2023-01-01', 368),
(369, 0, 'EGCA ( ENTREPRISE DE GENIE CIV', 4, '2023-01-01', 369),
(370, 0, 'SOMATEV', 4, '2023-01-01', 370),
(371, 0, 'POLE DE CONSTRUCTION ET D\'INGE', 4, '2023-01-01', 371),
(372, 0, 'TEMA', 4, '2023-01-01', 372),
(373, 3, 'ENTRASOL', 4, '2023-01-01', 373),
(374, 0, 'TRAGEC', 4, '2023-01-01', 374),
(375, 0, 'EVERY CONTRACTRO\'S', 4, '2023-01-01', 375),
(376, 0, 'SOGATRAF SOCIETE GARDMIT DE TR', 4, '2023-01-01', 376),
(377, 0, 'MODELOMC', 4, '2023-01-01', 377),
(378, 0, 'JAMAL EDDINE KHALIFA', 4, '2023-01-01', 378),
(379, 0, 'TRANS IFTIKHAR', 4, '2023-01-01', 379),
(380, 0, 'SI EL MOKHTAR DE TRAVAUX', 4, '2023-01-01', 380),
(381, 0, 'CEMATEC(societé centrale maroc', 4, '2023-01-01', 381),
(382, 0, 'CONFORAMA ( CONFORT AMEUBLEMEN', 4, '2023-01-01', 382),
(383, 0, 'ACF SYSTEME', 4, '2023-01-01', 383),
(384, 0, 'REDA', 4, '2023-01-01', 384),
(385, 0, 'AGHRIS KHALID BENSALAH', 4, '2023-01-01', 385),
(386, 0, 'ARKEVA', 4, '2023-01-01', 386),
(387, 0, 'TAHA CORPORATION', 4, '2023-01-01', 387),
(388, 0, 'HAJJINE ET CIE', 4, '2023-01-01', 388),
(389, 0, 'NOBLE SERVICE', 4, '2023-01-01', 389),
(390, 0, 'HITRAF CONSTRUCTION ET DIVERS ', 1, '2023-01-01', 390),
(391, 0, 'SOGETRA', 4, '2023-01-01', 391),
(392, 0, 'MSK', 4, '2023-01-01', 392),
(393, 0, 'VISIOLINK', 4, '2023-01-01', 393),
(394, 0, '2 IR', 4, '2023-01-01', 394),
(395, 0, 'COMPAGNIE DE COMMERCIALISATION', 4, '2023-01-01', 395),
(396, 0, '911 SERVICE NDD', 4, '2023-01-01', 396),
(397, 0, 'GTCI GENIE DE TRAVAUX CIVILS', 4, '2023-01-01', 397),
(398, 0, 'HT TRAVAUX', 4, '2023-01-01', 398),
(399, 0, 'L\'ART DE CONSTRUIRE', 4, '2023-01-01', 399),
(400, 0, 'ARHYM', 4, '2023-01-01', 400),
(401, 0, 'ENRG', 4, '2023-01-01', 401),
(402, 0, 'CLEMESSY', 4, '2023-01-01', 402),
(403, 0, 'STBO', 4, '2023-01-01', 403),
(404, 0, 'POLYVATECH', 4, '2023-01-01', 404),
(405, 0, 'EGTHM ( entreprise générale de', 4, '2023-01-01', 405),
(406, 0, 'LAKHLIFI', 4, '2023-01-01', 406),
(407, 0, 'MAN SERVICE', 4, '2023-01-01', 407),
(408, 0, 'G3P', 4, '2023-01-01', 408),
(409, 0, 'AFRICA DEVELOPPEMENT', 4, '2023-01-01', 409),
(410, 0, 'LES CHANTIERS MAROCAINS MODERN', 4, '2023-01-01', 410),
(411, 0, 'IDEAL CLIMA', 4, '2023-01-01', 411),
(412, 0, 'CODEMTHEP', 4, '2023-01-01', 412),
(413, 0, 'AL ORZE', 4, '2023-01-01', 413),
(414, 0, 'AYOTRA', 4, '2023-01-01', 414),
(415, 0, 'AMRHAR TRAITEMENT PAYSAGER', 4, '2023-01-01', 415),
(416, 0, 'ITCANAT', 4, '2023-01-01', 416),
(417, 0, 'SROC( A VERIFIER ADNAN)', 4, '2023-01-01', 417),
(418, 0, 'LES CHANTIERS MODERNES DE TEMA', 4, '2023-01-01', 418),
(419, 0, 'TECHNO EXPERTISES ET TRAVAUX', 4, '2023-01-01', 419),
(420, 0, 'SOJADECOR', 4, '2023-01-01', 420),
(421, 0, 'PETRADIS', 4, '2023-01-01', 421),
(422, 0, 'LE PARAPLUIE', 4, '2023-01-01', 422),
(423, 0, 'SOTACBAT', 4, '2023-01-01', 423),
(424, 0, 'ETIMAS', 4, '2023-01-01', 424),
(425, 0, 'ASSOUINIA', 4, '2023-01-01', 425),
(426, 0, 'SOTCOB', 4, '2023-01-01', 426),
(427, 0, 'MACHARIA AL MAMLAKA', 4, '2023-01-01', 427),
(428, 0, 'SONOGEC', 4, '2023-01-01', 428),
(429, 0, 'RAPIBAT', 4, '2023-01-01', 429),
(430, 0, 'ARCON', 4, '2023-01-01', 430),
(431, 0, 'SOSIMAT', 4, '2023-01-01', 431),
(432, 0, 'TACHMAMOT TRAD', 4, '2023-01-01', 432),
(433, 0, 'HAMASS DE TRAVAUX DIVERS', 4, '2023-01-01', 433),
(434, 0, 'ERREGGUI', 4, '2023-01-01', 434),
(435, 0, 'GESER', 4, '2023-01-01', 435),
(436, 0, 'ELECTRIBA - Entreprise d\'insta', 4, '2023-01-01', 436),
(437, 0, 'COSMATRAV', 4, '2023-01-01', 437),
(438, 0, 'BENJEBBOUR', 4, '2023-01-01', 438),
(439, 0, 'HYDRO PRO- TANMIA OMRANIA', 4, '2023-01-01', 439),
(440, 0, 'TETRALEC', 4, '2023-01-01', 440),
(441, 0, 'L ART DE GENIE CIVIL(ARDEGEC)', 4, '2023-01-01', 441),
(442, 0, 'POINT BLEU', 4, '2023-01-01', 442),
(443, 0, 'UNIVERS PLOMBERIE CHAUFFAGE', 4, '2023-01-01', 443),
(444, 0, 'BENMOUSSA', 4, '2023-01-01', 444),
(445, 0, 'AWRACH', 4, '2023-01-01', 445),
(446, 0, 'RAMUZA', 4, '2023-01-01', 446),
(447, 0, 'SJS MAROC', 4, '2023-01-01', 447),
(448, 0, 'GECOMAR- LA GENERALE DES CONDU', 4, '2023-01-01', 448),
(449, 0, 'AZIZ BOUKHLIQ ET FRERES', 4, '2023-01-01', 449),
(450, 0, 'FORMULE 02 Chèque impayé (3000', 0, '2023-01-01', 450),
(451, 0, 'CAP TP', 1, '2023-01-01', 451),
(452, 0, 'SQUARE CONTACT AND HYDRAULIC E', 0, '2023-01-01', 452),
(453, 0, 'BENMOUNA', 4, '2023-01-01', 453),
(454, 0, 'BMG TRAVAUX', 4, '2023-01-01', 454),
(455, 0, 'TECH ELEC', 4, '2023-01-01', 455),
(456, 0, 'A2TP', 4, '2023-01-01', 456),
(457, 1, 'SODRET', 3, '2023-01-01', 457),
(458, 0, 'RITEL', 4, '2023-01-01', 458),
(459, 0, 'BELYOU', 4, '2023-01-01', 459),
(460, 0, 'BELECTRABAT', 4, '2023-01-01', 460),
(461, 0, 'INDRASS SISTEMAS MAGREB', 4, '2023-01-01', 461),
(462, 0, 'SOMMANE FATHI', 4, '2023-01-01', 462),
(463, 0, 'NCIRI', 4, '2023-01-01', 463),
(464, 0, 'SARFOUTRAV', 4, '2023-01-01', 464),
(465, 0, 'AL JIHAOUIA CONSTRUCTION', 4, '2023-01-01', 465),
(466, 0, 'RIEGONOR', 4, '2023-01-01', 466),
(467, 0, 'AL RYANE', 4, '2023-01-01', 467),
(468, 0, 'TIPE HOLDING', 4, '2023-01-01', 468),
(469, 0, 'GECITRAM', 4, '2023-01-01', 469),
(470, 0, 'MAZATRASO', 4, '2023-01-01', 470),
(471, 0, 'LABINATE', 4, '2023-01-01', 471),
(472, 0, 'ETRIBEN', 4, '2023-01-01', 472),
(473, 0, 'RABAT CHANTIER', 4, '2023-01-01', 473),
(474, 0, 'SANI SHOP', 4, '2023-01-01', 474),
(475, 0, 'TRINGET', 4, '2023-01-01', 475),
(476, 0, 'AZ NET', 4, '2023-01-01', 476),
(477, 0, 'OUVRAGE DE SUD', 4, '2023-01-01', 477),
(478, 1, 'MZOUDA', 3, '2023-01-01', 478),
(479, 0, 'ETTOLBA', 4, '2023-01-01', 479),
(480, 0, 'TIMIDER', 4, '2023-01-01', 480),
(481, 0, 'PUR SANG', 4, '2023-01-01', 481),
(482, 0, 'L\'INVENTEUR', 4, '2023-01-01', 482),
(483, 0, 'SUFT', 4, '2023-01-01', 483),
(484, 0, 'ENNASR ASCENSEUR', 4, '2023-01-01', 484),
(485, 0, 'HUB DE GENIE CIVIL', 4, '2023-01-01', 485),
(486, 0, 'BATI VERT', 4, '2023-01-01', 486),
(487, 0, 'OCTATRAV', 4, '2023-01-01', 487),
(488, 0, 'GENSAV TRAV', 4, '2023-01-01', 488),
(489, 0, 'ADCO', 4, '2023-01-01', 489),
(490, 0, 'STBR', 4, '2023-01-01', 490),
(491, 0, 'WORK ET AM', 4, '2023-01-01', 491),
(492, 0, 'LES CHANTIERS DU CAPITAL', 4, '2023-01-01', 492),
(493, 0, 'SEVEN TECHNIQUE', 4, '2023-01-01', 493),
(494, 0, 'TRAVES', 4, '2023-01-01', 494),
(495, 0, 'ALTATRAV', 4, '2023-01-01', 495),
(496, 0, 'EL MOUSSAOUI MED', 4, '2023-01-01', 496),
(497, 0, 'DOUSSOU- SODOCO-', 4, '2023-01-01', 497),
(498, 0, 'ERE MAROC', 4, '2023-01-01', 498),
(499, 0, 'TECHLAND', 4, '2023-01-01', 499),
(500, 0, 'SOCLIMAT', 4, '2023-01-01', 500),
(501, 0, 'LOUKILI BOUCHTA', 4, '2023-01-01', 501),
(502, 0, 'AHMED SAAD TRAVAUX', 4, '2023-01-01', 502),
(503, 1, 'AMANCOM ( AMAN CONDUITES MODER', 3, '2023-01-01', 503),
(504, 0, 'FREYSSIMA', 4, '2023-01-01', 504),
(505, 0, 'LOGISOFT', 4, '2023-01-01', 505),
(506, 0, 'SEEA', 4, '2023-01-01', 506),
(507, 1, 'GRIMM', 3, '2023-01-01', 507),
(508, 0, 'DIMAH MACHINERY', 4, '2023-01-01', 508),
(509, 0, 'AFKIR -IBRAHIMI BOUCHTA-', 4, '2023-01-01', 509),
(510, 0, 'TIMZRAY', 4, '2023-01-01', 510),
(511, 0, 'DOKA', 4, '2023-01-01', 511),
(512, 1, 'OULAD ZERRAD', 3, '2023-01-01', 512),
(513, 0, 'SASMA CONSULTING', 4, '2023-01-01', 513),
(514, 0, 'TANSIFT CONTRACTOR', 4, '2023-01-01', 514),
(515, 0, 'SECOMATUBE', 4, '2023-01-01', 515),
(516, 0, 'LANNET', 4, '2023-01-01', 516),
(517, 0, 'RR HOLDING /BGI CONSTRUCTION', 4, '2023-01-01', 517),
(518, 0, 'GHAIT DEVELOPPEMENT', 4, '2023-01-01', 518),
(519, 0, 'MPIM', 4, '2023-01-01', 519),
(520, 0, 'CABBSA OBRAS Y SERVICIOS MAROC', 0, '2023-01-01', 520),
(521, 0, 'NADHIS', 4, '2023-01-01', 521),
(522, 0, 'MOBATRAV', 4, '2023-01-01', 522),
(523, 0, 'RAKKAZ TRVAUX DIVERS', 4, '2023-01-01', 523),
(524, 0, 'DIMENSION DATA MAROC', 4, '2023-01-01', 524),
(525, 0, 'AGC GESTION GENIE ET CONSTRUCT', 4, '2023-01-01', 525),
(526, 0, 'RIDAMINE TRAVAUX', 4, '2023-01-01', 526),
(527, 0, 'MEGA CHANTIER', 4, '2023-01-01', 527),
(528, 0, 'BEN AHMED', 4, '2023-01-01', 528),
(529, 0, 'DOSSOUR', 4, '2023-01-01', 529),
(530, 0, 'AMCM TRAD', 4, '2023-01-01', 530),
(531, 0, 'MABEF MARBRE', 4, '2023-01-01', 531),
(532, 0, 'SUD AFRICAIN D ELECTRICITE GEN', 4, '2023-01-01', 532),
(533, 0, 'ING TRAVAUX', 4, '2023-01-01', 533),
(534, 0, 'LABERAGA (en 3 traites)', 4, '2023-01-01', 534),
(535, 0, 'DREAM VIEW', 4, '2023-01-01', 535),
(536, 1, 'BOULMACO', 3, '2023-01-01', 536),
(537, 0, 'AHAME ALACHGHAL', 4, '2023-01-01', 537),
(538, 0, 'MAROCAINE DE CONSTRUCTION ET E', 4, '2023-01-01', 538),
(539, 0, 'AIT LKHEIR', 4, '2023-01-01', 539),
(540, 1, 'INNOVATIVE BUILDER', 3, '2023-01-01', 540),
(541, 1, 'GCB', 3, '2023-01-01', 541),
(542, 1, 'MENASTEEL INDUSTRY', 3, '2023-01-01', 542),
(543, 139654, 'NIGROU LARBI', 4, '2023-01-01', 543),
(544, 0, 'CAPITAL', 4, '2023-01-01', 544),
(545, 0, 'BELECTROTEC', 4, '2023-01-01', 545),
(546, 0, 'SONOTAC', 4, '2023-01-01', 546),
(547, 0, 'FOMELEPE', 4, '2023-01-01', 547),
(548, 0, 'BUILTRAD', 4, '2023-01-01', 548),
(549, 0, 'TOLBA VERRE SARL', 4, '2023-01-01', 549),
(550, 0, 'FINITION DESIGN', 4, '2023-01-01', 550),
(551, 0, 'ASSABBANE HELEC', 4, '2023-01-01', 551),
(552, 0, 'CONTRADIS SARL', 4, '2023-01-01', 552),
(553, 0, 'ALL PROJECTS', 4, '2023-01-01', 553),
(554, 0, 'VALUSTRAD', 4, '2023-01-01', 554),
(555, 0, 'SODICOTRA', 4, '2023-01-01', 555),
(556, 0, 'NAROUZE TRAVAUX SARL', 4, '2023-01-01', 556),
(557, 0, 'INAJA BAT CO NEGOCE SARL AU', 4, '2023-01-01', 557),
(558, 0, 'LES TRAVAUX', 4, '2023-01-01', 558),
(559, 0, 'PAVO COLOR', 4, '2023-01-01', 559),
(560, 0, 'MAROUF BTP', 4, '2023-01-01', 560),
(561, 0, 'COBATIP', 1, '2023-01-01', 561),
(562, 0, 'COPREF', 1, '2023-01-01', 562),
(563, 0, 'HTTC', 1, '2023-01-01', 563),
(564, 0, 'EAM SERVICES', 3, '2023-01-01', 564),
(565, 0, 'ETABLISSEMENT AHOUZI MOHAMED T', 3, '2023-01-01', 565),
(566, 0, 'PECARE ESPACES VERTS', 3, '2023-01-01', 566),
(567, 0, 'SONAFIA', 3, '2023-01-01', 567),
(568, 0, 'SOCOMBUS SARL', 3, '2023-01-01', 568),
(569, 0, 'SAVOIR VERT SARL', 3, '2023-01-01', 569),
(570, 0, 'ECO VERT', 3, '2023-01-01', 570),
(571, 0, 'AHOUZI TRAVAUX', 1, '2023-01-01', 571),
(572, 500, 'mohamed amine belfencha', 4, '2023-03-16', 575);

-- --------------------------------------------------------

--
-- Table structure for table `banque`
--

CREATE TABLE `banque` (
  `code` varchar(2) NOT NULL,
  `Nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `banque`
--

INSERT INTO `banque` (`code`, `Nom`) VALUES
('AB', 'ATTIJARI BANK'),
('BA', 'BANQUE AL MAGHREB'),
('BM', 'BANQUE MAROCAINE DU COMME'),
('BP', 'BANQUE POPULAIRE'),
('CA', 'CREDIT AGRICOLE'),
('CD', 'CREDIT DU MAROC'),
('SG', 'SOCIETE GENERALE MAROCAIN');

-- --------------------------------------------------------

--
-- Table structure for table `categ`
--

CREATE TABLE `categ` (
  `code` varchar(2) NOT NULL,
  `nom` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categ`
--

INSERT INTO `categ` (`code`, `nom`) VALUES
('B', 'BATIMENT'),
('BT', 'BATIMENT et TRAVAUX PUBLICS'),
('T', 'TRAVAUX PUBLICS');

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
  `code` varchar(3) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `ministere` varchar(2) NOT NULL,
  `type_direction` varchar(1) NOT NULL,
  `chiffre_aff` int(11) NOT NULL,
  `CS` float NOT NULL,
  `Nb_min_ing` int(11) NOT NULL,
  `Nb_tech` int(11) NOT NULL,
  `nb_min_encadre` int(11) NOT NULL,
  `secteur` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`code`, `nom`, `ministere`, `type_direction`, `chiffre_aff`, `CS`, `Nb_min_ing`, `Nb_tech`, `nb_min_encadre`, `secteur`) VALUES
('C1', 'CLASSE 1', 'E', 'N', 70, 0, 2, 2, 80, 'SA'),
('C2', 'CLASSE 2', 'E', 'N', 30, 0, 1, 1, 60, 'SA'),
('C3', 'CLASSE 3', 'E', 'R', 10, 0, 0, 1, 40, 'SA'),
('C4', 'CLASSE 4', 'E', 'R', 3, 0, 0, 0, 28, 'SA'),
('C5', 'CLASSE 5', 'E', 'R', 0, 0, 0, 0, 20, 'SA'),
('CS', 'CLASSE S', 'E', 'N', 130, 0, 3, 3, 110, 'SA'),
('C1T', 'CLASS1', 'H', 'R', 2, 0, 0, 0, 1, 'S1'),
('C2T', 'CLASS2', 'H', 'R', 5, 0, 0, 0, 1, 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `cotis`
--

CREATE TABLE `cotis` (
  `id` int(5) DEFAULT NULL,
  `  nb_national` int(11) DEFAULT NULL,
  `nb_regional` int(11) NOT NULL,
  `ENTREPRISE` varchar(9) DEFAULT NULL,
  `banque` varchar(2) DEFAULT NULL,
  `montant` int(5) DEFAULT NULL,
  `lieu` varchar(5) DEFAULT NULL,
  `ANNEE` int(11) DEFAULT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cotisations`
--

CREATE TABLE `cotisations` (
  `Id` varchar(8) DEFAULT NULL,
  `registre` varchar(3) DEFAULT NULL,
  `ENTREPRISE` varchar(93) DEFAULT NULL,
  `Responsable` varchar(50) DEFAULT NULL,
  `Adress` varchar(127) DEFAULT NULL,
  `Téléphone` varchar(141) DEFAULT NULL,
  `Fax` varchar(66) DEFAULT NULL,
  `GSM` varchar(99) DEFAULT NULL,
  `VILLE` varchar(9) DEFAULT NULL,
  `E-MAIL` varchar(238) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `direction`
--

CREATE TABLE `direction` (
  `Code` varchar(1) NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `direction`
--

INSERT INTO `direction` (`Code`, `nom`) VALUES
('N', 'National'),
('R', 'Regional');

-- --------------------------------------------------------

--
-- Table structure for table `dossiersociete`
--

CREATE TABLE `dossiersociete` (
  `registre` int(5) NOT NULL,
  `numcertif` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dossiersociete`
--

INSERT INTO `dossiersociete` (`registre`, `numcertif`) VALUES
(4, 'R1/125'),
(4500, 'RF/1298'),
(6846, 'A/85df');

-- --------------------------------------------------------

--
-- Table structure for table `etat_demande`
--

CREATE TABLE `etat_demande` (
  `code` varchar(2) NOT NULL,
  `type_demande` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etat_demande`
--

INSERT INTO `etat_demande` (`code`, `type_demande`) VALUES
('EN', 'encore'),
('RF', 'refuse'),
('VD', 'valide');

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(11) NOT NULL,
  `fonction` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fonction`
--

INSERT INTO `fonction` (`id_fonction`, `fonction`) VALUES
(1, 'Gérant'),
(2, 'Co-Gérant'),
(3, 'Directeur Financier'),
(4, 'Bac+4'),
(5, 'Ingenieur'),
(6, 'PDG'),
(7, 'Neant'),
(8, 'Maitrise Sciences'),
(9, 'Directeur Technique'),
(10, 'Doctorat');

-- --------------------------------------------------------

--
-- Table structure for table `juridique`
--

CREATE TABLE `juridique` (
  `code` varchar(4) NOT NULL,
  `nom` varchar(31) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `juridique`
--

INSERT INTO `juridique` (`code`, `nom`) VALUES
('EI', 'ENTREPRISE INDIVIDUELLE'),
('PP', 'PERSONNE PHYSIQUE'),
('SA', 'SOCIETE ANONYME'),
('SARL', 'SOCIETE A RESPONSABILITE LIMITE'),
('SNC', 'SOCIETE AU NOM COLLECTIF');

-- --------------------------------------------------------

--
-- Table structure for table `ministere`
--

CREATE TABLE `ministere` (
  `code` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ministere`
--

INSERT INTO `ministere` (`code`, `nom`) VALUES
('A', 'Agriculture'),
('E', 'Equipement'),
('H', 'Habitat'),
('L', 'Reforme');

-- --------------------------------------------------------

--
-- Table structure for table `nature_dem`
--

CREATE TABLE `nature_dem` (
  `code` int(11) NOT NULL,
  `type_demande` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nature_dem`
--

INSERT INTO `nature_dem` (`code`, `type_demande`) VALUES
(1, 'EXAMEN'),
(2, 'REEXAMEN'),
(3, 'RENOUVELLEMENT A L IDENTIQUE'),
(4, 'RECLAMATION');

-- --------------------------------------------------------

--
-- Table structure for table `qualificationsec`
--

CREATE TABLE `qualificationsec` (
  `Code` varchar(4) NOT NULL,
  `nom` varchar(400) NOT NULL,
  `Codesec` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualificationsec`
--

INSERT INTO `qualificationsec` (`Code`, `nom`, `Codesec`) VALUES
('1-1', 'Travaux de terrassements generaux en masse', 'S1'),
('1-2', 'Travaux terrassements speciaux', 'S1'),
('1-3', 'Travaux de minage et deroctage', 'S1'),
('A1', 'Travaux de fouilles a l\'air libre', 'SA'),
('A2', 'Travaux courants en beton arme-maconnerie pou', 'SA'),
('A3', 'Travaux de Complexité moyenne en béton armé p', 'SA'),
('A4', 'Travaux exceptionnels en béton armé pour bati', 'SA'),
('A5', 'Travaux d\'aménagement et de réhabilitation de batiments', 'SA');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `code` int(2) NOT NULL,
  `nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`code`, `nom`) VALUES
(1, 'Tanger -Tetouan- Al Hocei'),
(2, 'Oriental'),
(3, 'Fes - Meknes\n'),
(4, 'Rabat - Sale-Kenitra'),
(5, 'Beni Mellal- Khenifra'),
(6, 'Grand Casablanca-Settat'),
(7, 'Marrakech- Safi'),
(8, 'Darea-Tafilalet'),
(9, 'Souss - Massa'),
(10, 'Guelmim eOued Noun'),
(11, 'Laeyoune - Sakia El Hamra'),
(12, 'Dakhla-Oued Eddahab');

-- --------------------------------------------------------

--
-- Table structure for table `secteur`
--

CREATE TABLE `secteur` (
  `code` varchar(4) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `type_minister` varchar(2) NOT NULL,
  `categorie` varchar(2) NOT NULL,
  `base_capital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secteur`
--

INSERT INTO `secteur` (`code`, `nom`, `type_minister`, `categorie`, `base_capital`) VALUES
('S1', 'terrassements', 'H', 'T', 0),
('SA', 'Construction', 'E', 'B', 1),
('SB', 'travaux routiers et voirie urbaine', 'E', 'T', 1),
('SC', 'EAU Postable - assainissement - con', 'E', 'T', 0);

-- --------------------------------------------------------

--
-- Table structure for table `societe`
--

CREATE TABLE `societe` (
  `Id` int(11) NOT NULL,
  `nb_national` int(11) NOT NULL,
  `nb_regional` int(11) NOT NULL,
  `ENTREPRISE` varchar(40) DEFAULT NULL,
  `secteur` varchar(2) NOT NULL,
  `adher` tinyint(1) NOT NULL,
  `MONTANT_COTISATION` int(11) NOT NULL,
  `Responsable` varchar(35) DEFAULT NULL,
  `Adress` varchar(200) DEFAULT NULL,
  `Téléphone` varchar(19) DEFAULT NULL,
  `Fax` varchar(19) DEFAULT NULL,
  `GSM` varchar(19) NOT NULL,
  `VILLE` varchar(10) DEFAULT NULL,
  `E-MAIL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `societe`
--

INSERT INTO `societe` (`Id`, `nb_national`, `nb_regional`, `ENTREPRISE`, `secteur`, `adher`, `MONTANT_COTISATION`, `Responsable`, `Adress`, `Téléphone`, `Fax`, `GSM`, `VILLE`, `E-MAIL`) VALUES
(1, 27, 1, 'EL MOKHA', '', 1, 3000, 'EL MOKHA', '46, avenue fal ould oumair n 8 agdal', '037 77 29 50/09 51', '05 37 77 39 58', '', 'RABAT', ''),
(2, 1, 2, 'ENCEC (ENTREPRISE CHERRARDA DE CONSTRUCT', '', 1, 6, 'M. Miloud EL AALEJ/', '51 BIS. RUE AGUELMAM SIDI ALI - AGDAL -', '037 77 83 04', '05 37 77 11 43', '7', 'RABAT', 'cherrardaste@menara.ma;encec2010@yahoo.fr; encec2010@gmail.com'),
(3, 1, 3, 'VALTECH', '', 1, 30, 'J.ROUSSILLES', 'Lot Mouline II, Rue Abdellah El Ayachi Souissi-Rabat', '05 37 66 36 36', '05 37 77 23 50:/5 3', 'IRAKI CHAKIB TEL GS', 'RABAT', 'ec@valmontmaroc,com/ fz@valtech.ma;chakib.eliraki@valtech.ma; ec@valtech.ma;aziza,kandil@valtech,ma;aziza@valtech.ma;ali.tonia@valtech.ma;rafik.eladaoui@valtech.mayounes.laasri@valtech.ma'),
(4, 40, 4, 'SBC', '', 1, 3, NULL, '287, avenue Med V rabat', '037 72 70 42', '05 37 72 70 55', '', 'RABAT', ''),
(5, 41, 5, 'RAJA BINAA', '', 1, 6, 'M. Toufik CHERRADI', 'IM 4 APP N° 3 2 ETAGE RUE AHFIR HASSAN RT', '05 37 70 67 24 / 05', '05 37 70 67 27', '061 07 72 51', 'SALE', 'rajabinaa@menara.ma// tcherradi@gmail,com'),
(6, 42, 6, 'SAD', '', 1, 3, NULL, NULL, '037 71 33 67', NULL, '', 'RABAT', ''),
(7, 48, 7, 'SELIBA (SOCIETE D’ELITE DE BATIMENT)', '', 1, 3, 'DINIA Redouane -', '12 RUE EL MOLLAKH APP 2 KEBIBAT RT BP 11029', '037 69 41 80/05 37 ', '05 37 69 40 97', '061 39 12 30', 'RABAT', 'secretaire_seliba@yahoo,fr ;d_seliba@yahoo,fr// (R C) bureau_seliba@yahoo,fr; rida_seliba@yahoo,fr RRU) ; dinia@seliba,ma (DG) redouane.dinia@gmail.com;rida_seliba@yahoo.fr'),
(8, 50, 8, 'CEETD/CONCEIL ETUDE EQUIPEMENT ET TRAVAU', '', 1, 3, 'Mostafa ELMOUNIRRI', 'AVENUE HASSAN II HAY MASROUR LOT 13 ET 17  RABAT', '037 77 26 11', '05 37 77 26 10', '', 'TEMARA', ''),
(9, 52, 9, 'STE DE BATIMENT DU PLATEAU-SBP', '', 1, 2, 'A. HASSOUNI', NULL, '037 80 33 44', '05 37 80 49 66', '061 39 55 43', 'SALE', ''),
(10, 1, 10, 'HYDRO CHALLENGE', '', 1, 30, 'Driss MRIOUEH', '50 rue jbel al ayachi app n°11 agdal', '037 77 88 32/ 037 7', '05 37 77 88 33', '061 19 84 76', 'RABAT', 'hydrochallenge@menara,ma/hydrochallenge@yahoo,fr;hydrochallenge2@yahoo.fr'),
(11, 78, 11, 'SECHO ( SOCIETE ECHCHERKI DES OUVRAGES )', '', 1, 6, 'ECHCHERKI ABDELLATIF', '78,avenue la resistance rabat', '037 72 25 66/77', '05 37 73 53 00', '061 17 00 02 / 06 6', 'RABAT', 'sechosarl@gmail,com / sechorabat@yahoo,fr'),
(12, 83, 12, 'ENTREPRISE BELGHERCH', '', 1, 3, NULL, 'khatima tabriket sale', '037 86 21 57', '05 37 94 98 03', '06 62 10 96 53', 'RABAT', ''),
(13, 85, 13, 'TILILT', '', 1, 2, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(14, 86, 14, 'GMCT', '', 1, 2, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(15, 1, 15, 'SEDEC- Société d’Exploitation des Etabli', '', 1, 20, 'Abdelkrim LABBI', 'AVENUE HASSAN 2 KM 13300 ROUTE DE RABAT CASA TEMARA code 12000', '037-74-10-22//11 19', '05 37 74 12 39', '061 19 99 04', 'TEMARA', 'sedec@iam.net.ma ;labbi@sedec.ma ; nabil@sedec.ma; i.taibi2@gmail.com;;; c.chahdi@yahoo.fr'),
(16, 99, 16, 'SMATRA (SOCIETE MAROCAINE DE REALISATION', '', 1, 6, 'A.SOLO', '12 zankat beht agdal rabat', '037 77 17 74/76/79', '05 37 77 17 56', '061 40 86 87', 'RABAT', 'smatra@menara,ma;smatra.trav@gmail.com;smatra1@hotmail.fr;smatras@hotmail.fr;smatratrav@gmail.com'),
(17, 103, 17, 'ENTENTE TRAVAUX', '', 1, 2, 'M. Tarik RONDA', '31 RUE OUELD BOUZIRI AVIATION  RABAT', NULL, NULL, '070 14 36 77', 'RABAT', ''),
(18, 104, 18, 'MARIAMA', '', 1, 3, 'BEL BARRAKA', 'KM 11 LOT N°4 ROUTE DE KENITRA SALE  RABAT', '037 82 20 98', NULL, '', 'RABAT', ''),
(19, 111, 19, 'SAG', '', 1, 3, NULL, NULL, '037 80 58 40', '05 37 80 58 40', '', 'RABAT', ''),
(20, 113, 20, 'MACOD', '', 1, 2, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(21, 114, 21, 'SACOD', '', 1, 2, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(22, 1, 22, 'SMETEG sarl (Société Marocaine d’Etudes ', '', 1, 4, 'M. Ahmed BENSOUDA', '50. RUE AL GHARB. AVIATION', '037 65 75 06', '05 37 65 75 07', '061 18 02 64', 'RABAT', 'smeteg@menara.ma; Hanan.smeteg@gmail.com/ Karibel,smeteg@gmail,com (resp RU) Khallouqi_smeteg@hotmail.co.uk ( resp com)'),
(23, 116, 23, 'LES OUVRAGES MODERNES', '', 1, 20, 'JILALI MALKI', '26 immeuble ibn yassin rue oqba n°10 agdal rabat', '037 68 14 74/75', '05 37 68 15 57', '061 20 35 93', 'RABAT', 'ouvrages95@gmail.com / ouvrages@menara.ma'),
(24, 118, 24, 'LAHCEN FAHIM', '', 1, 2, 'Abderrahmane FAHIM', NULL, NULL, NULL, '061 13 14 48', 'RABAT', ''),
(25, 123, 25, 'ETPE', '', 1, 6, 'OUKHITI BENAISSA /Khalid OUKHITI', '2, rue BIR kacem App 2 Agdal RT', '037 68 24 33/06 61 ', '05 37 68 34 39', '063 80 35 10/061 47', 'RABAT', 'etpe,sarl@gmail,com/ etpe@menara.ma// kenzaoukhiti@yahoo,fr'),
(26, 127, 26, 'EDI MAROC- LES EDIFICES MAROCAINS-', '', 1, 3, 'Bouslhame NEFKHAOUI', '24 RUE TAZA HASSAN RT', '037 72 62 41', '05 37 70 25 50', '', 'RABAT', 'hajbousselham@gmail.com/ edimaroc@menara.ma/edimaroc@yahoo.fr'),
(27, 129, 27, 'DELTA HOLDING', '', 1, 30, 'Haj FAHIM', '10 zone industrielle vita rabat', '037 79 96 40/41/42/', '05 37 79 96 43 / 48', '', 'RABAT', 'dg@deltaholding,com;mfahim@gcr.ma;prd@deltaholding.ma;infra@deltaholding.ma;'),
(28, 145, 28, 'CCC MOROCCO', '', 1, 1, 'Chafiq KHOURI', NULL, '037 75 74 95', NULL, '', 'RABAT', ''),
(29, 152, 29, 'FINE WORK', '', 1, 1, 'M . Abdelghani KAMIL', '13 HAY RACHAD RUE 49  RABAT', NULL, NULL, '067 80 94 55', 'RABAT', ''),
(30, 174, 30, 'RED SEA COE', '', 1, 2, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(31, 175, 31, 'SOTRADEL', '', 1, 1, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(32, 176, 32, 'SNEE/SOCIETE NATIONALE D\'ETUDES', '', 1, 3, NULL, '39, Avenue Ibn Sinaa-Agdal  RABAT', '037 77 70 94 /037 7', NULL, '', 'RABAT', ''),
(33, 179, 33, 'SELATRAC resiliation', '', 1, 3, 'SMOUNI', 'LOT n° 136 Zone industrielle BP 669 Khemisset', '037 55 18 10', '05 37 55 18 10', '061 17 16 56', 'KHEMISSET', ''),
(34, 180, 34, 'SOGRAMA', '', 1, 1, 'HAJ BENAMAR', NULL, '037 77 96 67', '05 37 77 96 67', '06 19 90 39 95', 'RABAT', ''),
(35, 181, 35, 'SETRAT (SOCIETE D’ETUDES ET TRAVAUX D’AM', '', 1, 30, 'BERRADA ALLAM ( Mme GUEDRA COMPTABI', '4. RUE LARACHE, Rabat', '037 76 58 62', '05 37 76 64 12/', '061 21 24 23/ jaoua', 'RABAT', 'contact@seta,ma// t,berrada@setrat,com // youssef,boudali@setrat,com //setrat2@gmail,com. Sara,imejjat@setrat,com;contact@seta.ma;hanane.zeddoug@setrat.com;'),
(36, 182, 36, 'SNCE (SOCIETE NOUVELLE DES CONDUITES D’E', '', 1, 50, 'Abdeljebbar LAHBABI', 'Residence Kays, Sahat Rabia El Adaouya Agdal RT', '037 77 67 14// 05 3', '05 37 77 66 74', '061 18 50 98', 'RABAT', 'contact@snce,ma // snce@iam.net.ma// a,lahbabi@snce,ma// f,akrim@snce,ma// h,lamzourhi@snce,ma;w.bouassel@snce.ma; a.ghazaoui@snce.ma;'),
(37, 183, 37, 'GROUPEMENT AUXITEC KADMIRI', '', 1, 10, 'Mr KADMIRI/ MmeDarfoufi', '8 rue souira hassan rabat', '037-76-89-95', '05 37 76 93 92', '', 'RABAT', 'auxikdmaroc@yahoo.fr'),
(38, 184, 38, 'EQUELEC (EQUIPEMENTS ELECTRONIQUES)', '', 1, 3, 'Mr HIMMI', 'angle Av omar ben khattab et Avenu Abtal agdal Rabat', '037-77-59-11', '05 37 77 26 14', '061 16 36 56', 'RABAT', 'equelec@equelec.ma'),
(39, 185, 39, 'ENTPE/ENTREPRISE NOUVELLE DE TRAVAUX PUB', '', 1, 3, '20 RUE JABAL AL AYACHI N°4 AGDAL  R', NULL, NULL, NULL, '', 'RABAT', ''),
(40, 186, 40, 'SRGM (SOCIETE DE REALISATIONS GENERALES ', '', 1, 6, 'OUHLISS', '18 AVENUE DE France N° 3 AGDAL RT', '037 68 06 55 / 037 ', '05 37 68 06 59', '061.15.12.03', 'RABAT', 'srgm@menara.ma/ste.srgm@gmail,com'),
(41, 187, 41, 'SATECO', '', 1, 1, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(42, 188, 42, 'BUILDER (ENTRPRISE DES TRAVAUX PUBLICS E', '', 1, 5, 'Zouhir HOUSSAIN/EL ALAOUI comptable', '153 BLOC AOC AV EL KIFAH CYM   RABAT', '05 37 69 12 57', '05 37-69-47-49', '06 79 10 15 84', 'RABAT', 'builder_rt@yahoo.fr'),
(43, 190, 43, 'COGEC', '', 1, 1, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(44, 191, 44, 'GTP/ STE GHANDOUR DE CONSRUCTION', '', 1, 3, 'M. Abdeljaouad .ALAMI', '24, lotissement smara tabrekt salé', '037 86 23 17', '05 37 85 68 35', '063-65-01-21(Assist', 'SALE', 'ghandour.travaux@yahoo.fr ; gtp@menara.ma'),
(45, 192, 45, 'EMACI', '', 1, 3, 'M. Khalid OULHAJ', 'App 13 im 254 hay el fath CYM Rt', '037-79-25-00', '05 37 79 25 00', '061 18 23 92', 'RABAT', 'khalidajana1@yahoo,fr'),
(46, 193, 46, 'ETDB ARRET D ACTIVITE', '', 1, 1, 'Brahim BACHGGOUR', '11 RUE OUIHRANE RABAT', '037-72-30-79', '05 37 72 30 79', '061 19 35 83', 'RABAT', ''),
(47, 194, 47, 'C2EM', '', 1, 1, 'Fouad JAAFAR', NULL, '037-70-93-56', '05 37 72 92 47', '', 'RABAT', ''),
(48, 195, 48, 'SETUMA (SOCIETE D’ETUDE ET DE TRAVAUX PO', '', 1, 10, 'MERROUN', '3. RUE ALEXANDRIE IMM. SACAR APPT. N°6', '037.814.972', '05 37 81 49 74', '061 30 88 44 ( EL F', 'RABAT', 'setuma@menara.ma;setuma2017@gmail.com'),
(49, 1, 49, 'SOGEA MAROC', '', 1, 250, 'DRISSS EL RHAZI', '81, Quartier Industriel de Ain Atiq\nOued Ikem – Temara – Maroc', '\nSTANDARD 05 37 61 ', '05 37 61 52 96 SECR', '06 66 34 01 70 rqui', 'RABAT', 'driss.elrhazi@sogea-maroc.com .mouna.zaki@sogea-maroc.com ; salima.louafa@sogea-maroc.com;rkia.aitouarab@sogea-maroc.com;\nyamina.haddou@sogea-maroc.com\n'),
(50, 197, 50, 'GTGC/Ste des GRANDS Travaux de GENI CIVI', '', 1, 10, 'claude RAYMOND', NULL, '037 70 07 12 70 14 ', NULL, '', 'RABAT', ''),
(51, 1, 51, 'ASSKHOR', '', 1, 30, 'KHORSA ( sect RAHMA)', 'lot n° 13 Zone ind ATASNIA massira 1 temara', '037 60 16 26/13 71/', '05 37 60 15 58', '', 'RABAT', 'asskhor@yahoo.fr'),
(52, 1, 52, 'ASSABBANE ET KHORSSA', '', 1, 6, 'ASSABANE OMAR', 'lot n° 13 Zone ind ATASNIA massira 1 temara', '037 60 16 26/13 71/', '05 37 60 15 58', '', 'TEMARA', 'asskhor@yahoo.fr'),
(53, 200, 53, 'BOUYA', '', 1, 1, 'BOUYA', NULL, NULL, NULL, '063-87-61-08', 'RABAT', ''),
(54, 1, 54, 'ABHAT', '', 1, 10, 'AMRANI Rachid', '10, rue al kahira rabat,', '037-70-79-50', '05 37 70 00 32', '061 15 30 84', 'RABAT', 'abhatsarl@gmail.com'),
(55, 202, 55, 'KHOUADER DE BATIMENT', '', 1, 1, 'AHMED KHOUADER', 'Bloc 3, N°29 Youssoufia Est  RABAT', '037 60 13 32', NULL, '061 44 15 85', 'RABAT', ''),
(56, 203, 56, 'SARRA FORAGES', '', 1, 3, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(57, 1, 57, 'TRAMCO', '', 1, 10, 'ABDELAH EL MIR ( directeur) /ERRAJI', '29.AV. AL ABTAL –AGDAL-', '037 77 60 90/ 22 68', '05 37 77 67 83', '61474719/ KHALID 06', 'RABAT', 'contact@tramco.ma;tramcorabat@gmail.com siham.ettabii@tramco.ma;rajae.fakhri@tramco.ma;assmae.bourras@tramco.ma;sara.bekraoui@tramco.ma;khalid.elamraoui@tramco.ma;abdallah.elmir@tramco.ma'),
(58, 221, 58, 'EMIBA', '', 1, 3, NULL, NULL, NULL, NULL, '', 'SALE', ''),
(59, 222, 59, 'SOFIBOUC', '', 1, 3, NULL, '15 Avenue Hassane 1 Khemisset BP 97', NULL, '05 37 55 67 73', '', 'KHEMISSET', ''),
(60, 227, 60, 'EMB', '', 1, 50, 'MOUSSADAK BOUCHTA', 'Siège : 6, Rue Al Fostoq, Hay Ryad - Rabat\nAnnexe : 8, Avenue Mimosa Villa Dalila, Hay Ryad - Rabat', '037 71 67 56/57/58', '05 37 71 67 65/0537', '061 18 37 96', 'RABAT', 'contact@emb-maroc,com / moussadak@iam.net.ma ; emb@menara.com/fatima.a@emb-maroc.com;meriam.m@emb-maroc.com;service.qualite@emb-maroc.com;fatima.a@emb-maroc.com'),
(61, 1, 61, 'JET ALU MAROC', '', 1, 250, 'Adil RTABI', '455 Nahda 1 raba// 75 BIS BOULEVERAD LA RESISTANCE OCEAN RABT', 'Direct LEILA : 05 3', '05 37 65 92 76/ FAX', 'TADLAOUI 06 61 14 5', 'RABAT', 'jetalu@jetalu.ma// doha,grana@crestcom,com//adilr@jetalu,com// / /tadlaoui@jetalu,com // semmar@jetalu,com;o.tadlaoui@jet-contractors.com;;f.ettahir@jet-contractors.com'),
(62, 292, 62, 'SDET', '', 1, 10, NULL, 'ain howala route de', '037-80-72-17/87-02-', '05 37 80 72 17', '', 'SALE', ''),
(63, 368, 63, 'LBM -COMPAGNIE DE BATIMENT', '', 1, 4, 'BENTALEB', '75, avenue fal ould oumair app 8 agdal', '037-77-75-17', '05 37 77 74 22', '06 61 15 16 79', 'RABAT', 'lbm.btr@iam.net.ma ;el.moukasse@gmail.com // lbm,btr@gmail,com'),
(64, 377, 64, 'SIGNAL MAROC', '', 1, 3, NULL, '20 rue al ganzra agdal rabat', NULL, NULL, '', 'RABAT', ''),
(65, 385, 65, 'CHOUROUK', '', 1, 2, 'Abderrahim CHOUBA', NULL, NULL, NULL, '', 'KHEMISSET', ''),
(66, 386, 66, 'SBTP', '', 1, 1, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(67, 399, 67, 'GTP/ Khemisset', '', 1, 6, NULL, NULL, NULL, NULL, '', 'KHEMISSET', ''),
(68, 403, 68, 'SABIMA', '', 1, 2, 'Said TOUBALI', 'RESIDENCE ANAJD IM AD APP 9 BETTANA SALE', '037 78 03 87', '05 37 78 03 87', '', 'SALE', 'sabima@mail.sis.net.ma'),
(69, 404, 69, 'SMIRRI BTP', '', 1, 4, NULL, NULL, '037-75-94-16', '05 37 63 05 12', '', 'RABAT', ''),
(70, 406, 70, 'FARIDI ALANBARI', '', 1, 2, 'FARIDI ANBARI', NULL, '037-79-57-66 037-79', '05 37 28 07 27', '', 'RABAT', ''),
(71, 407, 71, 'EBKC', '', 1, 2, 'FARIDI ANBARI', NULL, '037-79-57-66 037-79', '05 37 28 07 27', '', 'RABAT', ''),
(72, 408, 72, 'AL ANBARI', '', 1, 2, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(73, 1, 73, 'SOCA', '', 1, 4, 'EL RHAZI ,D', '165.Avenue Allal Ben Abdellah', '037 70 07 12/ 70 14', '05 37 70 34 69', '061-16-36-75', 'RABAT', ''),
(74, 417, 74, 'SANI PLOMB', '', 1, 3, 'M. Abdelouahed PIRO', '07,rue Mohamadia, Appt 3   RABAT', '037-73-12-41', '05 37 20 38 04', '061-14-61-22', 'RABAT', 'contact@saniplomb,com //saniplomb@wanadoo.net.ma'),
(75, 424, 75, 'GERAB (GROUPEMENT D’ETUDE ET DE REALISAT', '', 1, 10, 'RACHIDI Moha', 'RESIDENCE AL AHAD N° 1 RUE AL KHARROUB SECT 16 AVENU ANNAKHIL HAY RIAD', '05 37 57 07 44', '05 37 57 07 45', '061 22 48 55', 'RABAT', 'gerab@gerab,net ;gerab_sarl@hotmail.com'),
(76, 1, 76, 'GRENSON & PERFETINI- EXPLOITATION DES ET', '', 1, 10, 'LAZREK MOHAMED', 'Lotissement indu doukala lot mostfa n°7 ain atik temara/km 5,5 route de casa rabat', '05 37 740539/053774', '0537 74 05 02', '061 13 55 86/066105', 'RABAT', 'gtalus@menara.ma ; gpalus@menara.ma;rachid.elojoub.gp@gmail.com;gpalus2@gmail.com'),
(77, 432, 77, 'COMASITCONSTRUCTION', '', 1, 1, 'MESRARI El ouazzani', NULL, '037 77 99 22', '05 37 77 99 22', '', 'RABAT', ''),
(78, 435, 78, 'HBLM', '', 1, 1, NULL, '8 RUE SIAM N°1 –DIOUR JAMAA -', '037.725.379', '05 37 72 53 79', '', 'RABAT', ''),
(79, 440, 79, 'AIN JOHRA DE CONSTRUCTION', '', 1, 2, 'Lahcen BOUALI', '11 AVENUE LALLA MERIEM RESIDENCE ANNAKHIL APP 4 TABRIQUET SALE', '037 86 42 66', NULL, '', 'SALE', ''),
(80, 444, 80, 'FIRCO', '', 1, 2, 'ALAOUI HACHIMI', '28 AV AL ABTAL AGDAL RT', '037-77-82 31', '05 37 77 38 57', '', 'RABAT', ''),
(81, 446, 81, 'TCBM/TUYAUX ET CANNAUX EN BETON du Maroc', '', 1, 6, 'Président.Y.TAZI', '34 RUE OUM ERRABIA AGDAL  RABAT', '037 67 16 17', '05 37 49 26 07/26 0', '', NULL, ''),
(82, 458, 82, 'ECAV', '', 1, 1, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(83, 494, 83, 'SDAGET (SOCIETE DHABA DE GENIE CIVIL ET ', '', 1, 6, 'dahbi abdelkader', '037 72 01 46/037 87 02 07', '05 37 20 28 03/037.', NULL, '061 07 41 56', 'SALE', 'sdaget,sarl@gmail,com /a-dehbi1@menara.ma'),
(84, 501, 84, 'AMACONS', '', 1, 2, 'M.Said AMRHAR', 'Massira V bloc 9 imm 9 mag 3', '037 79 77 35', '05 37 79 77 35', '061 14 46 13/ SON C', 'RABAT', 'amacons@hotmail.com'),
(85, 506, 85, 'MRIMEE', '', 1, 10, 'SEHTANI SOUFIAN //TARAF', '570, hay el manzeh CY Rabat', '037.798.318', '05 37 28 17 71', '061 29 78 24/COMP N', 'RABAT', 'rrh@mrimee,ma /contact@mrimee,ma // mrimeesarl@yahoo.fr'),
(86, 1, 86, 'ABEC EL BARAKA BATIMENT', '', 1, 6, 'M. Ahmed MRABTI// M RABTI', '23, route oued akrach,', '037.63.19.33', '05 37 63 19 33', '061 29 63 34// 06 6', 'RABAT', 'abecsarl@gmail,com// autocadiste@hotmail.com'),
(87, 509, 87, 'RAQAQ', '', 1, 1, NULL, '18 BLOC M AMAL 3 CYM  RABAT', ' 037 794596', NULL, '', 'RABAT', ''),
(88, 535, 88, 'FERRAOUI', '', 1, 3, 'FERRAOUI L HOUCINE', 'GROUPE BOUITATE N° 73 KOUASS N° 18 CYM RT', '05 37 70 33 38', '05 37 70 33 38', '061 29 21 07', 'RABAT', ''),
(89, 536, 89, 'VIA MAROC', '', 1, 3, 'AMEZAOURO ALI', '72 AVENUE FAL OULD OUMEIR APP 03 RDC AGDAL  1 0000RABAT', NULL, NULL, '061 15 80 37/ 070 4', 'RABAT', 'viamaroc@yahoo.fr'),
(90, 590, 90, 'CERS', '', 1, 6, NULL, NULL, NULL, NULL, '', 'SALE', ''),
(91, 597, 91, 'CATER (COMPAGNIE D’AMENAGEMENT', '', 1, 6, 'TIJANI', '10. RUE HOUSSAIN 1er . N°2', '037 72 23 70', '05 37 72 23 61', '061 20 96 62', 'RABAT', 'cater-sa@hotmail.com'),
(92, 598, 92, 'SOCOTRD', '', 1, 1, 'SADEKKI', '312. RUE ALAOUINE HAY YASMINE', '037 55 27 70', '05 37 55 24 27', '061 78 31 64', 'KHEMISSET', ''),
(93, 605, 93, 'PROVAC', '', 1, 1, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(94, 608, 94, 'BAHAOUI M\'HAMED', '', 1, 2, 'BAHAOUI M\'HAMED', NULL, NULL, NULL, '', 'TEMARA', ''),
(95, 625, 95, 'HADJ OMAR BENSAID', '', 1, 1, 'HADJ OMAR BENSAID', 'place canolonna ( Ancien port salé)', '037 78 13 49', '05 37 78 13 49', '', 'SALE', ''),
(96, 646, 96, 'SOHATECO (SOCIETE HACHIMI DE TRAVAUX D’E', '', 1, 3, 'Larbi HACHIMI', '365 HAY ANDALOUSS BP 284 TIFLET', '037.70 0.518', '05 37 70 05 18/19', '061 13 94 31', 'TIFELT', 'sohateco@hotmail.fr'),
(97, 1, 97, 'MAGHREB PLANTES', '', 1, 2, 'Aabbad abdellah /Driss MOUTAFKIR/', 'KM 14 DOUAR LAMNASSER LOULALDA TEMARA', '060 74 59 99', '05 37 74 11 13/ 37 ', '065185057/ 064 49 2', 'TEMARA', 'maghrebplantes@menara.ma'),
(98, 675, 98, 'WETRA', '', 1, 1, NULL, NULL, '037-64-91-24', '05 37-64-91-24', '', 'BOUZNIKA', ''),
(99, 715, 99, 'S.O.I.T', '', 1, 1, 'K.OUKHITY', NULL, '037-79-46-61', '05 37-79--02--14', '', 'RABAT', ''),
(100, 716, 100, 'THERMO DARIAS', '', 1, 30, 'RIGH / Chakib', '5, Rue My Rachid Hassane  RABAT', '037 80 65 44/36/51', '05 37 80 65 50', '', 'RABAT', 'thermodarias.t@gmail.com; k.moksit@gmail.com; thd@thermo-darias.com'),
(101, 729, 101, 'COMET -COMPAGNIE MAROCAINE D ENTREPRISE', '', 1, 20, 'Haj SLIMANE/Mr ERRAMI', 'av hassan 2 Q I km 5,5 10050 rabat', '037 79 48 41', '05 37 79 48 49', 'HAJ SLIMANI 06 61 4', 'RABAT', 'ometsama2@menara.ma ;comet_2011@hotmail.fr'),
(102, 733, 102, 'ESPACE BETON', '', 1, 2, 'BACHIRI', 'Imm 77 App.8 Avenue Oqba agdal   RABAT', '037 77 71 59', '05 37 77 71 59', '', 'RABAT', ''),
(103, 742, 103, 'LAHYANI', '', 1, 2, 'LAHYANI', '187 avenue al majd amal 5 compl cym rabat', NULL, NULL, '', 'RABAT', ''),
(104, 1, 104, 'SUMC', '', 1, 10, 'M.Nabil RTABI', '17, quartier industrielle Takadoum estention 10 000 youssoufia Rt', '05 37-63-18-95', '05 37 75 42 64/05 3', '061 21 84 94 / cont', 'RABAT', '/ zitouni@menasteel,ma'),
(105, 746, 105, 'STRACOBA', '', 1, 3, 'BENSAID KHALID', '429 AV HASSAN II IMM DAHIR N° 35  RABAT', '037 70 37 47', '05 37 70 37 47', '061 29 31 78', 'RABAT', 'bensaidcompta2@gmail,com'),
(106, 1, 106, 'DINO/OUAZZANI TAIBI( DEVELOPPEMENT INGEN', '', 1, 20, 'Abdeljalil TAIBI OUAZZANI/ EL HADI', '27 Rue youssef IBN TACHFINE   RABAT', '037 76 38 19', '05 37-76-76-61/037 ', '061 16 56 60/ 061 2', 'RABAT', 'entreprise_dino@hotmail.fr'),
(107, 748, 107, 'AZZI- ENTREPRISE DE TRAVAUX', '', 1, 3, 'M .Mohamed AZZI/M. ZARDA', 'SHKIRAT- CENTRE- SHKIRAT   RABAT', '037-74-21-69', '537742183', '061 47 03 47 / 061 ', 'RABAT', ''),
(108, 749, 108, 'SOCOTRAD', '', 1, 2, NULL, '19 RUE MY RACHID  RABAT', '037 79 86 84', '05 37 70 37 78', '061 24 95 72', 'RABAT', ''),
(109, 750, 109, 'SARAH SOCIETE - AFRICAINE DE REALISATION', '', 1, 5, 'Adnane CHEHABI', 'CITE AL MAMOUNIA IMM 3 APP 20 TABRIQUET SALE', '037 68 14 53', '05 37 68 14 54', '061 15 77 47', 'SALE', 'sarah_btp@hotmail.com'),
(110, 751, 110, 'BELKASTALI', '', 1, 2, 'BELKASTALI Abdelhaq', 'bloc A n 14 takaddoum rabat', '037-77-24-90', '05 37-77-24-62', '061-37-29-51', 'RABAT', ''),
(111, 758, 111, 'SMTD', '', 1, 3, 'DINIA', '7 RUE AL GENZRA APPT. N°2 –AGDAL-', '037-77-85-77', '05 37-77-26-38', '', 'RABAT', ''),
(112, 760, 112, 'ABEINO', '', 1, 1, 'Lahcen ABID', 'BLOC D N° 4 KOUASS CYM RT', '037-79-14-47', '05 37-29-48-72', '061 09 29 64', 'RABAT', 'abeino@menara.ma;hassaneabid12@gmail.com'),
(113, 761, 113, 'TAGANTE', '', 1, 4, 'Abderrahmane SAKHI', 'Groupe I N°47 Youssoufia Ouest  RABAT', '037 65 21 62/037 65', '05 37 65 88 62', '061 37 29 90', 'RABAT', ''),
(114, 762, 114, 'STE FILS AL HABIB', '', 1, 4, 'Ahmed LOUSTANI', NULL, '037 81 15 70', '05 37 80 21 67/05 3', '061 15 80 10', 'SALE', ''),
(115, 763, 115, 'VAMEPE (VITRERIE AGENCEMENT MENUISERIE E', '', 1, 1, 'KHOUADER ABDENBI', 'Bloc 3,N° 29 Youssoufia Est   RABAT', '037 65 93 73', '05 37 65 93 73', '065 40 67 59- 064 9', 'RABAT', ''),
(116, 764, 116, 'SBT', '', 1, 4, 'M Sâad .ALAOUI', NULL, '037-68-11-47', '05 37 77 16 85', '061-17-24-00', 'RABAT', ''),
(117, 765, 117, 'OPALINE DECOR', '', 1, 3, 'Abdelmoujib EDDIOURI', 'CITE RAOUED EL ANDALOUS IMM KHIRALDA APP N° 3 RABAT YOUSSOUFIA (domicile)', '037-72-06-60', '037 72 09 19/05 73 ', '061-78-43-58', 'RABAT', ''),
(118, 766, 118, 'MACOBATE (DOMEBOIS)', '', 1, 6, 'RACHIDA .TOUNSSI', '48, zone industrielle takadoum rabat', '037-75-24-39/42/', '05 37 65 96 51', '061 14 38 59', 'RABAT', 'contact@macobate,com;rachida.tounsi@macobate.com;sofia.tounsi@macobate.com'),
(119, 767, 119, 'AZ CONSTRUCTIONS ARRET DE TRAVAIL', '', 1, 1, 'M. Rachid MEDKOURI', 'CENTRE DE SKHIRAT STATION ZIZ', '037 74 21 69', '05 37 74 21 83', '061-15-43-80/ 061 0', 'RABAT', ''),
(120, 768, 120, 'COTREX', '', 1, 3, 'M.OUGARRA/ NOUREDINE COMPTABLE', '19 rue Moulay Rachib, 3eme étage rabat', '037 73 04 80', '05 37 70 37 78', '/064 34 38 69', 'RABAT', 'batissa@menara,ma/ cotrex-10@yahoo.fr'),
(121, 769, 121, 'UBAC UNION ( BATIMENT ET CONDUITE )', '', 1, 6, 'Abdelhamid BENYAKHLEF', 'LOT 17/3 AV ALFADILA QI 10130 CYM   RABAT', '037-79-11-31', '05 37 79 10 92', '061-22-31-71', 'RABAT', 'ubac@menara.ma'),
(122, 770, 122, 'CHIBAR', '', 1, 6, 'Mohammed CHIBAR', 'BP 3004 CYM RABAT', '037.37.32.77', '05 37 37 32 78', '061 15 75 95', 'RABAT', 'ets_chibar@yahoo.fr'),
(123, 771, 123, 'MAJIHAR', '', 1, 3, 'Abdellah LKBIRI', '417 BLOC 1 HAY ERRAHMA SALE  RABAT', '037-85-12-60', '05 37 85 15 16', '061 21 95 38/065 89', 'SALE', ''),
(124, 1, 124, 'SOLSIF MAROC', '', 1, 4, 'Abdelmoughit BENNANI', 'charia al fadila cartier industruel rabat', '0537 631 564/ 0537 ', '0537 631 559', '06 61 20 37 16', 'RABAT', '(DIR )a.bennani@solsif-maroc.com (solsif@solsif-maroc.com// j.boronat@solsif-maroc.com ( RRU) solsif@menara,ma;mohamed.el-kmamlichi@solsif.com;hassan.el-aoudi@solsif-maroc.com'),
(125, 778, 125, 'BATISOM', '', 1, 2, 'CHENNOUR', '27 RUE MOULAYA AGDAL  RABAT', '037 69 16 81 037 69', '05 37 69 16 81', '', 'RABAT', ''),
(126, 779, 126, 'CODETEC', '', 1, 4, 'Abderrahim EL ORAIBY', '5 AVENUE TRABLESS. APPT. N°6', NULL, NULL, '', 'RABAT', ''),
(127, 783, 127, 'CONTRANSIMEX SUD DAKHLA', '', 1, 10, NULL, NULL, NULL, NULL, '', 'RABAT', ''),
(128, 1, 128, 'THERMO ENERGIE', '', 1, 10, 'Chakib BENYAGOUB', '6 ,Avenue madagaskar rabat', '037 73 66 53 /54', '05 37 70 07 90', '061 13 55 06', 'RABAT', 'thermoenergie@yahoo.fr'),
(129, 787, 129, 'GEOPRA', '', 1, 1, 'Brahim BALIGH', '7, Rue Oued Zem Appt 7  RABAT', '037 76 36 09', '05 37 76 36 09', '', 'RABAT', ''),
(130, 790, 130, 'EBET', '', 1, 3, NULL, '18 RUE TANGER HASSAN RT', '037 66 06 82', '05 37 66 06 83', '', 'RABAT', ''),
(131, 791, 131, 'NOMATRAB', '', 1, 3, NULL, '38 RUE LOUKIEMEDN APP 4 AGDAL RABAT', '037.670.617/19', '05 37 67 06 42', '065 10 57 85', 'RABAT', ''),
(132, 798, 132, 'RIMS', '', 1, 3, 'Nabil EL MALTI & Adil RTABI', '68 QUArtier industriel TAKADOUM', '037-75-13-89', '05 37 63 91 04', '061 20 92 97/061 20', 'RABAT', 'n_rims@yahoo.fr //ghizlane08@gmail,com'),
(133, 1, 133, 'GTR', '', 1, 250, 'LECHEHAB ANOUAR', '1 RUE INTIHA BP 15 CYM RT/\n', '022 54 49 59/022 67', '05 22 78 65 00 //05', '', 'RABAT', 'sec_rabat@gtr.co.ma;'),
(134, 1, 134, 'LRM (LA ROUTE MAROCAINE)', '', 1, 60, 'M. Abderrahim Ziali Président Conse', '14 RUE DES TREUES AIN SEBBA CASA / rue ben ghazi rabat', '05 22 67 85 67 / 05', '22 34 21 51/ 05 22 ', '', NULL, 'guetbach@lrm.ma/ lrm@lrm.co.ma'),
(135, 801, 135, 'CNBTP', '', 1, 2, 'Lahcen AKANOU', NULL, '037-75-69-15', '05 37 75 86 28', '', 'RABAT', ''),
(136, 1, 136, 'SOGEBAC', '', 1, 20, 'chrif mustapha', '35, Rue Oued Ziz Agdal  RABAT', '037 67 00 11', '05 37 67 42 33 /36', '061 05 35 77', 'RABAT', 'goupe_fahman@yahoo.fr// fatimazohra-23@hotmail,com'),
(137, 803, 137, 'LAMSETRI', '', 1, 2, 'Ahmed EL GHAFOURI', 'Residence Zouhour N°25 Route Mehdia SALE  RABAT', NULL, '05 37 81 44 78', '061 17 15 84', 'SALE', 'lamestri@construction.com'),
(138, 804, 138, 'ZOUAYAT CONSTRUCTION', '', 1, 1, 'EL Mekki YAHYAOUI', 'LOT HOURIA IMM 36 APP 8 TABRIQUET SALE', '537367856', '05 37 36 78 56', '06 41 28 20 71 061 ', 'SALE', 'ajialconstruction@menara.ma'),
(139, 805, 139, 'ELECLAR?BATLARIM', '', 1, 1, 'LARAICHI ,A', '53, rue tensift, app 5 agdal rabat', '037-77-02-90', '05 37 75 84 79', '061 21 97 68', 'RABAT', 'laraichi_promoteur@menara.ma'),
(140, 806, 140, 'YOUR BTP', '', 1, 2, 'Ali LEMHEOUER', 'AVENUE MY ABDELLAH RESIDENCE MOUNIK IM D APP 2 HARHOURA', '037-64-19-94', '05 37 64 19 94', '061 40 55 67', 'TEMARA', ''),
(141, 807, 141, 'TAGHI', '', 1, 2, 'M.DOUIRI', '9. RUE LENINGRADE –OCEAN-', '037 72 91 15', '05 37 72 91 15', '', 'RABAT', 'douiri.med@gmail.com'),
(142, 808, 142, 'ACHOUAK', '', 1, 1, 'CHAOUKI OMAR', '102 AVENUE TAOUFIK EL HAKIM', '037 55 56 26', '05 37 55 56 26', '060 31 58 32', 'KHEMISSET', ''),
(143, 809, 143, 'ECOBA - ENTREPRISE DE CONSTRUCTION BENDO', '', 1, 4, 'BENDOURO ABDELOUAHEB', 'Rue Zahla N° 10  RABAT', '037.760.982', '05 37 20 70 69', '061 22 08 99', 'RABAT', 'contact@ecoba.ma// fatimazahra-23@hotmail,com'),
(144, 810, 144, 'AJIAL CONSTRUCTION', '', 1, 1, 'Abderrahmane KBIRI', 'APP 08 IM 36 LOT AL HOURIA TABRIQUET SALE', '037 36 78 56', '05 37 37 51 75', '061 37 82 79', 'RABAT', 'ajialconstruction@gmail,com'),
(145, 811, 145, 'EL FILALI HAMID', '', 1, 2, 'Hamid EL FILALI', 'N°14 Lotissement Champ de la course Roumani  KHEMISSET', '037-51-66-48', '05 37 51 78 29', '061 37 96 68', 'RABAT', ''),
(146, 812, 146, 'GENERALE DE PROJETS', '', 1, 6, 'Abdelhay BENOMAR', 'IMM kamilia n 37 hay ennahda 2 rabat', '037 71 25 77', '05 37 71 21 47', '06 63 44 82 00 / 06', 'RABAT', 'generaledeprojets@menara.ma'),
(147, 813, 147, 'AUGUST', '', 1, 2, 'Halim BOUNOU', '2rue gages app 6 hassan rabat', '037-72-78-40', '05 037 72 97 73', '0661 19 70 38', 'RABAT', 'steaugust@menara.ma;ste.august.sarl@gmail.com;augustafric@gmail.com'),
(148, 819, 148, 'AIR INDUSTRIE', '', 1, 6, 'KENZI Mhamed', '44, rue abidjan ocean rabat', '037 72 31 38 037 70', '05 37 70 32 89', '', 'RABAT', 'air.industrie@airindustrie,net'),
(149, 839, 149, 'SOLROC', '', 1, 6, 'Youssef AARID', 'Rue Damas Imm. 2 Appt. 5 Témara  RABAT', '037 61 14 02', '05 37 61 13 24', 'M, AARID YOUSSEF 06', 'RABAT', 'solroc50@hotmail.com'),
(150, 840, 150, 'MAGHREB NET RTABI', '', 1, 20, 'imane RTABI / EL Mekki BENAMAR', '6 rue ibn yasmine avene de la victoire rabat', '/ 29', '05 37 68 22 77', '061 38 01 30 / 06 6', 'RABAT', 'rimane@maghrebnet.com; info@maghrebnet.com;zineb.benkhraba@maghrebnet.com;houda.maanaoui@maghrebnet.com;nezha.essaadaoui@maghrebnet.com;bahae.ray@maghrebnet.com;zineb.rtabi@maghrebnet.com;najat.arib@m'),
(151, 841, 151, 'DAE', '', 1, 3, 'Abdelkbir EL BANI', '6. RUE TENSIFT N°3 –AGDAL -', '037 77 37 57', '05 37 77 37 57', '', 'RABAT', ''),
(152, 842, 152, 'SECOMAV', '', 1, 3, 'Toufik FARSSI', 'imm 5 appt 4 lot el fath temara', '037 61 17 14', '05 37 61 17 14', '063 05 73 43/ 06 61', 'RABAT', 'secomav_ma@yahoo.fr'),
(153, 877, 153, 'SITRATEC', '', 1, 4, 'Youssef DAHMI', '5. RUE DAKAR N°13 –OCEAN-', '037 70 18 78', '05 37 70 23 49', '061 40 05 63', 'RABAT', 'sitratec@yahoo.fr'),
(154, 895, 154, 'SOTAJID', '', 1, 2, 'BOUTHER Messaoud', 'Av Mohamed V 41 D N° 2 Sala el jadida', '037-82-97-86', '05 37 82 97 86', '061 21 00 23', 'SALE', ''),
(155, 907, 155, 'BTP OPTIMUM', '', 1, 2, 'Saad SEKKATTE', 'imm27 app n°2 Avenue ENNAKHIL hay riad rabat', '037 56 34 85', '05 37 71 72 60', '06 61 28 09 30', 'RABAT', 'btpoptimum@menara.ma'),
(156, 909, 156, 'AFRICAXION', '', 1, 2, 'Khalid LAHBABI', NULL, '037 79 50 28 / 68 3', '05 37 70 70 45', '061-13-55-22', NULL, ''),
(157, 910, 157, 'ENNAJMAOUI RACHID', '', 1, 1, 'ENNAJMAOUI RACHID', NULL, '037 87 86 65/037-84', '05 37 87 8805/05 37', '061-07-71-37', NULL, ''),
(158, 911, 158, 'ENNAJMAOUI DRISS', '', 1, 1, 'ENNAJMAOUI DRISS', '59 RUE MIDELT HAY MY ABDELLAH TABRIQUET SALE', '037 87 86 65', '05 37 87 86 65', '061-37-53-79', NULL, ''),
(159, 912, 159, 'HYDEMA - HYDRO DEVELOPPEMENT MAROC-', '', 1, 3, 'Giovanni ALBERTINI', NULL, NULL, '05 37 62 62 17', '064-90-79-84', NULL, ''),
(160, 913, 160, 'SOMADAS SPORTS', '', 1, 3, 'Mohamed ISMAILI', '6 RUE JADAH   RABAT', '037-72-11-14', '05 37 72 17 01', '', NULL, ''),
(161, 914, 161, 'EL RHALLAMI', '', 1, 1, 'Mohamed RHALAMI', NULL, '037-29-13-67', '05 37 29 13 67', '061 39 05 18', NULL, ''),
(162, 915, 162, 'SOREVAMLIL (SOCIETE DE REVETEMENT AMLIL)', '', 1, 4, 'Ali RABIAI', 'SECTEUR 2 N° 1455 HAY MY ISMAIL', '037.801.121', '05 37 80 78 05', '05 37 77 64 56/0662', 'RABAT', 'sorevamlil@gmail.com'),
(163, 916, 163, 'SOCACED', '', 1, 1, NULL, NULL, NULL, NULL, '', NULL, ''),
(164, 917, 164, 'ANOUAR', '', 1, 3, 'EDDAKHCH Abderrahmane', '26 AVENUE TAUMART, LES ORANGERS, RABAT', '037 70 30 94', '05 37 26 34 15', '061 10 03 58', 'RABAT', ''),
(165, 918, 165, 'AMINZOU', '', 1, 2, 'Messoud AMINZOU', 'Hay Essalam Secteur 7, N°96  SALE', '037-86-17-49', '05 37 85 68 19', '067 44 29 51', NULL, 'aminzou1@menara.ma // aminzoulatifa@gmail,com;amalusarl@gmail.com'),
(166, 919, 166, 'ALU FACADE', '', 1, 2, 'Abdenafie BERRADA', '34 SECT 1, LOT 24 Hect TEMARA  RABAT', '037-60-97-39', '05 37 60 97 39', '061-20-29-68', NULL, ''),
(167, 1, 167, 'ATELIER TEULI', '', 1, 10, 'ANEDDAM MOHAMED/ ANEDDAM ABDELLAH', 'WARDA K1 BIS QUARTIER INDUSTRIEL RABAT', '037 65 17 07/ 05-37', '05 37 65 96 14', '061 44 03 38/061 37', 'RABAT', 'teuli@menara.ma ; teuli.aicha@menara.ma'),
(168, 921, 168, 'DARHMANE ET FILS', '', 1, 2, 'TBATOU/ Mohamed DARHMANE', '36 AVENUE LOUBNAN   RABAT', '037-20-18-20', '05 37 26 18 68', '066 35 12 93', 'RABAT', ''),
(169, 922, 169, 'ECOGEC', '', 1, 2, 'My Mehdi AFIFI', NULL, '037-71 -52 -54', '05 37 71 55 54', '061-30-92-28', 'RABAT', ''),
(170, 923, 170, 'EL HAIDAOUI', '', 1, 1, 'EL HAIDAOUI Ahmed', 'BLOC J 3 N°17 C.Y.M  RABAT', '037 61 19 45', '05 37 61 19 45', '061 39 23 82', 'RABAT', ''),
(171, 925, 171, 'ELECTRATEC', '', 1, 1, 'Mohammed BOUALLAGA', '13 RUE ALAOUIYNE APP 18 RABAT', '037-73 -60-25', '05 37 73 60 25', '061-15-72-73', 'RABAT', ''),
(172, 926, 172, 'ENTIB JABA MUSTAPHA', '', 1, 2, 'JABA Mustapha', '18 rue baht agdal rabat', '05 37 77 95 65 / 03', '05 37 77 95 67: 05 ', '061 30 38 43', 'RABAT', 'entib@yahoo,fr'),
(173, 927, 173, 'GECAF', '', 1, 4, 'ISMAILI Abdelhaq/ ISMAILI MED', '6 Bis Rue Kairaouane Hassan  RABAT', '037 70 82 02/ 06', '05 37 70 95 73', '', NULL, 'delta10@menara.ma'),
(174, 928, 174, 'MEDIA LUNA', '', 1, 1, 'AMOUR CHAOUKI', 'HAY AL ANDALOUS RUE KORTOBAH N° 116 BIS TEMARA', NULL, '05 37 61 62 70', '/06 78 33 01 65 / 0', 'RABAT', ''),
(175, 929, 175, 'MOUMNI LARBI', '', 1, 1, 'MOUMNI Larbi', 'HAY NAHDA 2 N° 105 TIFELT', '037-51-41-70', '05 37 51 41 70', '061-13-82-43', 'RABAT', 'moumnirabie@hotmail.com'),
(176, 930, 176, 'ORNOS', '', 1, 1, 'Hicham LAKHDAR', '4 rue mediouna aviation rt', '037 75 67 18- 037 6', '05 37 65 07 75', '065-14-63-30// BRAH', 'RABAT', 'salarina@hotmail.fr'),
(177, 931, 177, 'PLAFONDS RESO MAROC', '', 1, 3, 'Réda SLAOUI', '4, Avenue Challa rabat, prés Jour et nuit', '037 26 42 14/ 037 7', '05 37 70 52 18', 'SLAOUI 065 18 34 38', 'RABAT', 'meryemslaoui@reso.fr'),
(178, 932, 178, 'POLY RESO', '', 1, 2, 'Abdelaziz FAKOUDI', NULL, '037-61-14-25', NULL, '064-90-20-05', 'RABAT', ''),
(179, 933, 179, 'SOSOTRAD- SOULAIMANI DES TRAVAUX DIVERS-', '', 1, 1, 'SOULAIMANI Mbarek', 'HAY ELMASSIRA N° 1586', '037.601.309/037.604', '05 37 60 48 78', '/061 29 82 75', 'RABAT', ''),
(180, 934, 180, 'SRTHYG BTP- SOCIETE DE REALISATION DES T', '', 1, 3, 'BERRADA Mohamed', '30, Rue Oujda, Apt. 11 Hassan  RABAT', '037 77 36 38', '05 37 68 39 61', '0661 25 56 71', 'RABAT', 'srthyg.btp@gmail.com'),
(181, 935, 181, 'TAJEDIC', '', 1, 2, 'BENYOUNESS TAJ', '35 rue nijeria app 6 l\'océan, prés ayt baha', '05 37 72 77 36', '05 37 72 77 36', '064 16 19 91', 'RABAT', 'tajedic@menara.ma'),
(182, 936, 182, 'TAMC', '', 1, 1, 'Abdellah NACIRI', 'DOUAR LAMAOUAZZA HAY OUED DAHAB ROUTE SIDI BRAHIM SALE  RABAT', '037 82 78 01', '05 37 83 23 28', '061-22-02-93', 'RABAT', ''),
(183, 937, 183, 'VORTEX', '', 1, 2, 'Oumaima SABOR', 'RUE TENSIFT IMM N°18 APPT N°9 AGDAL  RABAT', NULL, '05 37 77 16 55', '', 'RABAT', 'oumaimasabor@hotmail.com'),
(184, 938, 184, 'SOCOFAF', '', 1, 3, 'DHIBI Khalid/ KOUCHAM BRAHIM', 'N° 10 IMM. 40 LOT. KHALFIA BETTANA', '037 60 21 01', NULL, 'FKRI ALI061 17 14 5', 'SALE', 'stesokofaf1@menara.ma'),
(185, 1, 185, 'TCN TRAVAUX DU CENTRE ET DU NIVELLEMENT', '', 1, 10, 'Anis AGUIZOUL', 'Avenue sakia LHAMRA RUE TAFRAOUT N° 10 BETTANA', '037-78 39-90', '05 37 78 39 90', '061-29-81-35/061 08', 'SALE', 'tcn.tcn@menara.ma'),
(186, 941, 186, 'PRO-BUILDER', '', 1, 1, 'Youssef BENSAID', 'A', '06 61 98 24 07/05 3', '05 37 70 63 29/0537', 'BENSAID 06 61 09 18', 'RABAT', 'youssefbensaid@gmail.com'),
(187, 942, 187, 'RAZIKI', '', 1, 2, 'Ali RAZIKI', '37 LOTISSEMENT EL KORA CYM  RABAT', '037 29 07 41 037 20', '05 37-29-07-41', '061 20 96 17', NULL, ''),
(188, 943, 188, 'SOTRACOBA', '', 1, 2, 'BENSAID KHALID', NULL, '037 70 37 47', '05 37 70 06 17', '061 29 31 78', NULL, 'bensaidcompta@yahoo.fr'),
(189, 944, 189, 'SOZATRAD', '', 1, 2, 'AANAOU Mustapha', '32,anglee rue dakar avenue hassan 2 rabat', '037 72 88 02', '05 37 72 88 03', '061 14 91 26', NULL, 'sozatrad@menara.ma'),
(190, 1, 190, 'URBAGEC', '', 1, 6, 'Jamal NCIRI', '38 AVENUE AL ABTAL AGDAL', '05 23 31 50 34 /037', '05 23 31 57 54', '061-17-24-83/066130', NULL, 'urbagec@menara.ma; urbagec@gmail.com;benmoussaif@gmail.com'),
(191, 979, 191, 'COVATRAP', '', 1, 3, 'CHAARA Nizar/ RACHID M HAOUER', '32 AVENUE OMAR IBN KHATAB APP N° 10 AGDAL RABAT', '037 77 03 66', '05 37 77 06 16', '061 17 95 22(RACHID', NULL, 'covatrap@menara.ma'),
(192, 980, 192, 'IBRAHIMI M\'BAREK', '', 1, 1, 'Fatima BRAHIMI', '182 LOT FRAHGHY SGHIR TABRIQUET', '037-80-12-77', '05 37 80 12 77', '065 10 73 15', NULL, ''),
(193, 981, 193, 'INGENIERIE ET TRAVAUX', '', 1, 1, NULL, NULL, NULL, NULL, '', NULL, ''),
(194, 982, 194, 'RADI', '', 1, 3, 'RADI HOUSSINE', '121 BLOC N°2 GOUPE AL WARD HAY TAKADDOUM 1ER ETAGE N° 1 RT', '0537654416037-75-58', '05 37 63 12 26', '061 29 11 65', NULL, ''),
(195, 983, 195, 'SOTRACOPA', '', 1, 2, NULL, NULL, NULL, NULL, '', NULL, ''),
(196, 984, 196, 'GETHERM- resiliation', '', 1, 1, 'Fouad BLAIDI', '45 MAGAZIN N°1 AV ALLAL BEN ABDELLAH HAY NAHDA TEMARA', '037-60-36-41', '05 37 60 36 42', '061-19-03-51', NULL, 'covatrap@menara.ma'),
(197, 985, 197, 'AAMAL CHLIEH', '', 1, 3, 'Abdesselam CHLIEH', 'Avenue abd rahim bouabid P2 274 SALA AL JADIDA', '037 20 50 56/37 53 ', '05 37 72 94 12', '061 30 52 06', NULL, 'ab.chlieh@yahoo.fr'),
(198, 986, 198, 'MEGATEL AIR TELECOM', '', 1, 6, 'MANAA Karim', '70bis,avenue des nations uniees agdal', '037 67 57 55 / 94', '05 37 67 58 44', '061 16 12 64 (AMAL ', NULL, 'kmenaa@megatelgroup,com// amkarima@megatelgroup.com // s,megatel@megatelgroup,com a.skalante@rair-telecoms.com (AMAL)'),
(199, 987, 199, 'ELPRO TRAVAUX', '', 1, 5, 'BERRADA Fatima', '7,rue bahi app2 agdal', '037 77 82 73', '05 37 77 82 75', '066 94 94 13/BERRAD', NULL, 'elprosarl@yahoo.fr ;elpro@iam.net.ma\nbtissam@elproing.ma'),
(200, 988, 200, 'AMRAOUI DE TRAVAUX', '', 1, 2, 'Mr AMRAOUI', 'secteur , n 1142 hay essalam salé', NULL, '05 37 81 17 13', '061 20 93 78 / 066 ', NULL, ''),
(201, 989, 201, 'BLOUTANE', '', 1, 1, 'AIT ELKAID SMAIL', '46 rue londre appt 2 rabat', '037 29 40 98/044-34', '05 24 42 18 37', '061 10 45 34', NULL, 'BLOUTANE@MENARA,MA'),
(202, 990, 202, 'FEMOTRA', '', 1, 2, 'EL FEKKAK Hassan', '56 Z I, takadoum rabat', '037-75-98-14', '05 37 75 93 15', '061-21-84-93', NULL, ''),
(203, 991, 203, 'WORLD HYDROLIC', '', 1, 1, 'SAID CHEKKORI', 'rue jabal toubkal immb 11 appt 8 agdal', NULL, NULL, '061 06 20 28', NULL, ''),
(204, 992, 204, 'AHMINA RADOUANE ( ENTRACON)', '', 1, 1, 'AHMINA Redouane', '266,hay rahma,secteur A Salé', '037-80-52-84/34', NULL, '061-41-94-79', NULL, ''),
(205, 993, 205, 'ATEMA', '', 1, 6, 'Fouzia HADAJ', '27 rue oued ziz n2 agdal', '05 37 66 11 60', '05 37 70 44 53', 'HADAJ 06 61 15 88 1', NULL, 'atema,btp@gmail,com;     atema.financier@gmail.com'),
(206, 994, 206, 'SCPS', '', 1, 1, NULL, NULL, NULL, NULL, '', NULL, ''),
(207, 995, 207, 'SETRAB', '', 1, 2, 'Badr Eddine NEJJAR', '17 rue al achaari apt 1 agdal', '037 68 60 99', '05 37 68 60 99', '061 30 04 40', NULL, ''),
(208, 996, 208, 'AGEBAC', '', 1, 4, 'BENYEKHLEF Chakib', 'HAY RIAD SECTEUR 16 BLOC E RUE AL ANDALOUSSIA N°4  RABAT', '037 71 13 34', '05 37 71 51 49', '061-16-13-84', NULL, 'agebacsarl@yahoo.fr'),
(209, 997, 209, 'MEROUANI EL GHEZOUANI- ART METIER DE PLA', '', 1, 2, 'MEROUANI EL REZOUANI', 'groupe enarjisse n 11 takadoum rabat', '/037 63 65 44', '05 37 65 36 97', '061 19 20 98//MED F', NULL, ''),
(210, 998, 210, 'TRADIO', '', 1, 1, 'AMINI ABDALLAOUI', 'n 7, avenue omar ibn al khattab et avenue al abtal agdal', NULL, '05 37 77 26 14', '064-04-41-06', NULL, 'tradio@hotmail.com'),
(211, 999, 211, 'NEW LABEL OF CONSTRUCTION', '', 1, 3, 'MOHAMED BOURAZZA', 'imm ariha b1 n13 resid errabia nahda 1 rabat', '037 63 23 23', '05 37 63 24 24', '061 2294 08', NULL, 'newlabel@menara.ma'),
(212, 1018, 212, 'GCR- Les Grands Chantiers Routiers', '', 1, 30, '(SABONI RACHID DG) TMUSTAPHA FAHIM', 'Complexe de Skhirat angle Av Hassan II et Route de la Plage, Skhirat', '\n0537-74-22-11/36\n0', '0537-74-23-71/0537-', '063 43 55 00/01/02/', NULL, 'contact@gcr.ma; KHADIJA BOUCETTAdat@gcr.ma; sec@gcr.ma ;/\nrh@gcr.ma;rsaboni@gcr.ma;\n'),
(213, 1, 213, 'BITUMA', '', 1, 30, 'Abdelhziz DAHBI', 'zone industrielle complexe de skhirat angle avenue hassan 2 et route de la plage SKHIRAT', '037 74 95 22/66', '05 37 74 95 65', '065 16 68 49', NULL, 'secretariat@bituma.ma; adahbi@menara.ma'),
(214, 1, 214, 'OMCE ( OMNIUM MAGHREBIN DES CONDUITES D ', '', 1, 60, 'BENLMAALEM MOHAMED (DG)', 'Résidence KAISS IMM D n° D n° 1 AGDAL RT', '05 37 74 28 63// 03', '0537 74 28 58// 05 ', '063 43 56 31', NULL, 'omce@omce.ma,; ahlam@omce,ma/bouziane@omce,ma'),
(215, 1025, 215, 'ASSALIHINE', '', 1, 1, 'EL Hassan SAOUDI', NULL, '037-86-41-25', '05 37 86 41 87', '061-59-27-95', NULL, ''),
(216, 1026, 216, 'BAKR EXTINCTEURS', '', 1, 2, 'HAFIDI HASSAN', 'secteur 8, n 836, hay essalam sale', '037 85 04 04', '05 37 85 64 07', '061 17 16 32', NULL, 'bakrexta@iam.net.ma'),
(217, 1027, 217, 'EL YAZALI', '', 1, 1, 'EL YAZALI LARBI', 'HAY EL ANDALOUS N° 57 TIFELT', '037 85 04 04 / 037 ', '061 17 16 32', '', NULL, ''),
(218, 1028, 218, 'SALE ELECTRICITE', '', 1, 1, 'BOUZID Abdelali', 'IM 2 APP 2 AAV SAKIA EL HAMMERA BETTANA SALE', NULL, NULL, '', NULL, ''),
(219, 1033, 219, 'BOUGHABA de Travaux Divers', '', 1, 10, 'BOUGHABA Mehamed', '63,Avenue Madacascar apt 9 rabat', '037 70 02 74/ 05 22', '05 37 73 06 50', '061 10 56 42', NULL, 'entrepriseboughaba@yahoo.fr'),
(220, 1075, 220, 'CEB ( construction equipement bouregreg)', '', 1, 3, 'MOUMNI Mohamed/ MOUMNI RABIE FILS/ ', 'lot hanaa villa 61 hay nahda 2 rabat', '037 75 76 18/037 75', '05 37 75 76 18', 'MOUMNI RABIE 06 61 ', NULL, 'moumnirabie@hotmail.com'),
(221, 1076, 221, 'EL KOURDI', '', 1, 1, 'KOURDI ABDELKEBIR', 'GROUPE 38 N° 120 BOUITATE C.Y.M', '037 77 87 65', NULL, '061.102.054', NULL, 'marin133@caramail.com'),
(222, 1077, 222, 'SOTRAPI', '', 1, 1, 'ANECHOUM FAHD', '2 rue ouled fares lot abbasi bir kasem rabat', NULL, '05 37 68 18 37', '', NULL, ''),
(223, 1, 223, 'CCGT- CONSORTIUM POUR LES CANALISATIONS ', '', 1, 20, 'Said BELAITER// YOUSSEF TAZI', 'hot 261zone industrielle sidi ghanem marakech', '024 33 59 60/ 037 7', '05 24 33 59 59// 05', '', NULL, 'ccgt consort@hotmail.com / ccgtcanal@gmail,com/ccgtcanal1@menara,ma\nccgtsiege@gmail.com'),
(224, 1, 224, 'SIDEN (Societé industrielle d’exploitati', '', 1, 4, 'CHAPEAU PHILIPPE', '17, route casa -rabat RP 1 temara', '037 74 03 50 /037 7', '05 37 74 14 90', '06 61 37 57 97 naji', NULL, 'siden@menara,ma//siden@maghrebnet,net,ma'),
(225, 1080, 225, 'GUIROUAN', '', 1, 1, 'Hassan GUIROUAN', 'N° 385 Rue Ourika Nahda 1 Rabat', '05 37 63 69 48/028 ', '05 37 63 69 48', '061 46 97 20', NULL, 'guirouane@hotmail,fr'),
(226, 1081, 226, 'ELOMARI FRERES', '', 1, 1, 'ELOMARI Ilyas', '16 rue oued fes appt 8 agdal rabat', '037 68 29 77', '05 37 68 16 87', '060-96-26-93 061 29', NULL, 'elomari80@yahoo.fr'),
(227, 1083, 227, 'SODESTRAS', '', 1, 1, 'NOUR EL HOUDA/ABDELAZOZ FAKOUDI (D ', '37 BIS RISENCE SALSBILE ANGLE RUE FAL OULED OUMEIR ET RUE OUKAIMEDEN AGDAL RT', '037-67-32-80 / 22 6', '05 37 67 16 90/68 2', '', NULL, 'lageneraledesresaux@menara.ma'),
(228, 1084, 228, 'INTEGRANET', '', 1, 1, 'EL BACHIR TAGHZOUT', '25, rue oued ziz n°5agdal rabat', '037 68 23 07 037 77', '05 37 77 75 89', '061 22 88 38', NULL, 'message@integranet.ma'),
(229, 1087, 229, 'EXTRA BATISSE', '', 1, 1, 'Abderrazak OUKCHACH', '101 RUE PATRICE LUMUMBA APPT 9  RABAT', '035 39 93 82/ 037 6', '05 37 66 03 53', '061 18 25 92', NULL, 'mr,ouqchach@hotmail,com'),
(230, 1088, 230, 'MATRAGEC', '', 1, 10, 'TAZI Noureddin', '49, avenue atlas n14 agdal', '05 37 77 11 90', '05 37 57 15 86 //05', '061 19 87 88', NULL, 'matragec@gmail.com'),
(231, 1, 231, 'SMADIRE- Société Marocaine d’Installatio', '', 1, 6, 'Michel ROUSSEAU Gerant', '10 rue mehdia hassan rabat', '037 72 03 15', '05 37 20 70 95', '061 17 95 73/ 061 2', NULL, 'directeur : smadire@menara.ma/ bouchra.najah@smadire.ma(secretariat)/ helene.masseboeuf@smadire.mamoha.aitlhoussain@smadire.mahelene.masseboeuf@smadire.ma;yvan.rousseau@smadire.ma;hassan.taghzouti@sma'),
(232, 1, 232, 'AVANZIT MAROC', '', 1, 3, 'NAOUI Ali', '16 RUE JABAL AL AIACHI APP N°1 RESIDENCE SONIA AGDAL', '037 77 60 87/88', '05 37 77 51 42', '', NULL, 'avanzit@menara.ma ; a-naoui@menara.ma'),
(233, 1097, 233, 'AMTRA- AHMAMOUCH DE TRAVAUX', '', 1, 1, 'AHMAMOUCH Abdelouahed', 'Hay Abiregreg, Rue 56 N°8 Rabat', '037 75 57 60', NULL, '061 77 95 38', NULL, ''),
(234, 1098, 234, 'NEW GARDEN', '', 1, 3, 'EL FAHDI Abdellatif', '13 rue al alawiyin rabat', '64 39 50 75', '05 37 70 53 03', '64 39 50 75', NULL, ''),
(235, 1102, 235, 'RIMINES', '', 1, 1, 'BENOMAR Abdelmounim', '15 avenue Med zerktouni rabat', '037 72 05 99', '05 37 62 02 32', '061 08 95 16//061 2', NULL, 'rimines@menara.ma'),
(236, 1103, 236, 'ROSSELL', '', 1, 3, 'GUEDON JACQUES', 'BP 518 TABRIQUET', '037 86 24 88 037 85', '05 37 86 23 36', '061 13 70 15', NULL, 'rossellma@yahoo.fr'),
(237, 1106, 237, 'LABIAD TRAVAUX', '', 1, 2, 'LABIAD Said', '343, groupe el ahd hay ennahda', '037 75 67 46', '05 37 70 50 66', '061 14 51 12', NULL, ''),
(238, 1107, 238, 'CINREX', '', 1, 2, 'KHOUADER Youssef', 'Bloc 3 N°29 Youssoufia Est  RABAT', '037 78 12 69', NULL, '065 12 26 54', NULL, ''),
(239, 1115, 239, 'MAISON MODELE', '', 1, 1, 'ABOUSAID El Housain', '64 rue melouiya appt 20 agdal rabat', '037 79 39 24', '05 37 79 39 24', '061 29 23 02 064 47', NULL, ''),
(240, 1116, 240, 'JIBAL AL ALPI- ALPIDECO-', '', 1, 1, 'LAGUNAZ Erminio', 'IMM 4 rue oued ziz appt 3 agdal rabat', '037 77 52 02', '05 37 77 52 02', '067 07 83 20// 066 ', NULL, 'jibalalalpi@menara,ma; alpideco_menara@menara.ma'),
(241, 1082, 241, 'SERAVE/SOCIETE D\'ETUDE ET DE LA REALISAT', '', 1, 5, 'EL MKADMI ABDELHAFID', '2 AV LALLA AMINA SALE  RABAT', '037 86 49 20', '05 37 86 29 46', '061 07 71 27', NULL, 'serave1@yahoo.fr;serave2016@yahoo.com'),
(242, 1099, 242, 'SOBETRA', '', 1, 1, 'BENNIS Med/ AHFIDI MOULAY HASSAN', 'secteur8 imm 36 appt 1 salé hay essalam', '037 81 26 44', '05 37 81 33 14', 'AHFIDI 064 17 87 23', NULL, 'bennistravaux@menara.ma ; amine77@menara.ma'),
(243, 0, 243, 'SACT/SOCIETE AFRICAINE DES CONCEPTIONS T', '', 1, 1, 'Mr ahmed GOUIEZ', '5 Bed lalla asmaa Rce doukali appt 6 tabrekt sale', '037 85 10 31', '05 37 86 29 63', '061 37 48 86', NULL, ''),
(244, 0, 244, 'ALEQ -ALAM EQUIPEMENT', '', 1, 10, 'GUERI MOHAMED', '10 RUE AL YAMAME ESE 13 APP 10 RT', '05 37 20 25 33', '05 37 73 29 79', '06 65 15 48 35 ASSI', NULL, 'alam.equipe@menara.ma // aleqbtp@gmail,com; contact@aleq.ma;'),
(245, 0, 245, 'ADDIAR ARRIBATIA', '', 1, 1, 'ANASSE BOUHMOUCHE', '26 AVENUE OQBA IMM IBN YASSINE APP 4 AGDAL', 'tel / FAX :037 68 0', '05 37 68 04 07/05 3', '061 13 10 81', NULL, 'anassz.bouhmouche@hotmail.com'),
(246, 0, 246, 'SOCIETE DE CONSTRUCTION ABIDAR', '', 1, 1, NULL, '104 AVENUE FAL OULD OUMEIR APPRT N° 2 AGDAL  RABAT', NULL, NULL, '', NULL, ''),
(247, 0, 247, 'ECTAV', '', 1, 1, 'LECHGUER MOHAMED', '18 RUE TENSIFT, APP 2 AGDAL RABAT', '05 37 68 33 19/37 7', '05 37 68 29 47/37 7', 'LACHGAR ALI 064 77 ', NULL, 'lachgarsarl@hotamil,com'),
(248, 0, 248, 'EL HADDAD', '', 1, 1, 'EL HADDAD AL HOUSSINE', '93 RUE NABLES CITE AL QOTS TABRIQUET SALE', NULL, '05 37 80 89 39', '070 30 47 61', NULL, ''),
(249, 0, 249, 'JETRAMO ( JERRY TRAVAUX MOURAD)', '', 1, 1, 'MOURAD GHITANE', 'AIN JOHARA CR AIN JOHARA TIFLET', NULL, NULL, '063.42.98.06', NULL, ''),
(250, 0, 250, 'SBC/Ste BOUHMOUCHE DE CONSTRUCTION ET DE', '', 1, 1, NULL, '287, avenue Med V rabat', '037.72.70.42', '05 37 72 70 55', '', NULL, ''),
(251, 0, 251, 'SOMEXET', '', 1, 1, 'MESSAOUDI HAMID', 'Rue Al Achaouak N°1 Roustal Tabriquet SALE  RABAT', '037 82 97 86/037856', '05 37 82 97 86', '061 53 51 14', NULL, 'somexet@yahoo.fr'),
(252, 0, 252, 'ZGHIYO SERVICE', '', 1, 1, 'SNABI AZZOUZ', '40,AV. EL JAZIRA EL ARABIA TABRIQUET SALE  SALE', '037 85 06 57', '05 37 85 06 57', '061 30 90 99', NULL, ''),
(253, 0, 253, 'DECOMAV', '', 1, 1, 'Saïd LAKHIAL', NULL, NULL, NULL, '066-86-14-07', NULL, ''),
(254, 0, 254, 'IDH MAROC', '', 1, 1, 'IBICHCHANE Abdellah', 'Im 5, app 18, résidence al manar Témara', '037 64 39 45', '05 37 64 39 45', '060 54 03 49// 063 ', NULL, 'anasabdou@hotmail.com'),
(255, 0, 255, 'L\'EXPERT DES OUVRAGES TECHNIQUES', '', 1, 1, 'NEJJAR Abdelfattah', 'RUE AZZEGZA L IMEUBLE 27 APP 10 AGDAL', '037 77 99 98', '05 37 77 99 98', '061 34 47 04', NULL, 'expert.at@menara.ma'),
(256, 0, 256, 'SOGEBEM', '', 1, 1, 'MAHBOUBI Med', '321 Hay ennasr Sidi allal el bahraoui tifelt', '037 52 04 49/037 52', '05 37 52 04 49/ 05 ', '061 21 82 06', NULL, ''),
(257, 0, 257, 'MEGAFOR', '', 1, 6, 'Mme STEFANI STAYKOV', 'casa, 7 rue d\'agadir / RESIDENCE IBN KHALDOUN AGDAL RT', '022-20-94-14', '05 22 20 94 14', '061 10 32 18 STEFAN', NULL, 'megafordrilling@yahoo.fr ;megafor@abv.bg,\n'),
(258, 0, 258, 'ASDEC', '', 1, 3, 'EL ASRI Med', '7 Rue oued baht n°-agdal', '037 67 18 76', '05 37 67 27 20', '061 13 51 55', NULL, 'asdec@menara.ma'),
(259, 0, 259, 'ACAMELEC', '', 1, 1, 'HADRANI CHERKAOUI', 'n 3 lot bouchentouf ennamsia temara', '037-61-18-70', '05 37-61-18-71', '068-88-83-94', NULL, 'cherkaoui.hadrani@caramail.com'),
(260, 0, 260, 'SCEPSI', '', 1, 1, 'BACHIRI MOHAMED', '19, rue BRAHIM Rodani n 7 Océan RT', '05 37 20 51 64', '05 37 20 51 64', '066 14 17 94/ 061 0', NULL, ''),
(261, 0, 261, 'CIMELECT', '', 1, 2, 'BELKBIR', 'AV ABD EL MOUMEN HASSAN RT', '37 20 32 13', '05 37 20 31 18', '061 18 93 38/06140 ', NULL, 'CIMEL@MENARA,MA'),
(262, 0, 262, 'ACOPT ( maazaz lahcen)', '', 1, 3, 'MAAZAZ Lahcen', 'rue hassan 1 n 23 hay elwahda bp 69 khemisset', NULL, '05 37 55 42 96', '061 95 52 63', NULL, ''),
(263, 0, 263, 'MENUISERIE AL WAFA', '', 1, 1, 'AGOURRAME MOHAMED', '29 ZI Massira-Temara', '037 60 85 30', '05 37 60 85 31', '061 13 60 13', NULL, ''),
(264, 0, 264, 'Ete LAMKADAM', '', 1, 3, 'LAMKADEM DRISS', 'cite el andalouss A 938 tiflet', '037 51 32 66', '05 37 51 32 66', '061 37 96 22', NULL, 'lamkadamtd@hotmail.fr'),
(265, 0, 265, 'SABER', '', 1, 3, 'TOUNARTI ABDELHAKIM', '64. AVENUE DE LA RESISTANCE – OCEAN -', '037 70 24 20 037 70', '05 37.70 24 20', '/070 98 41 40/0 615', NULL, 'ste_saber@yahoo.fr'),
(266, 0, 266, 'RABAT GRAVURE PUB', '', 1, 1, 'LAHMIDI Abdelouahed DG', '15, rue baghdad rabat', '037 70 34 58//05 22', '05 37 70 97 32//05 ', '061 15 01 25//06 13', NULL, 'rgpub2006rabat@gmail.com ;rgpub@menara.ma'),
(267, 0, 267, 'ALOUSS', '', 1, 1, 'IBN DAOUD Zouheir', 'Hay ennahda1 complément n 150 rabat', '05 37 75 59 11/037 ', '05 37 75 95 78', '061 39 33 51', NULL, 'alouss@menara,ma;alouss1@hotmail.com'),
(268, 0, 268, 'SCOTIM', '', 1, 1, 'Mr EL WAKI Abdelhakim ELOMARI', 'IMM 135 SECT MASSIRA 1 N ° 3 TEMARA', '037 60 24 98', '05 37 60 24 98', '070-27-93-53/061 19', NULL, 'scotim2007@gmail,com/ ZAINABBOULHANNA@YAHOO,FR'),
(269, 0, 269, 'ELFILALI MOHAMED ABDELLAH', '', 1, 2, 'ELFILALI MOHAMED ABDELLAH', 'Ezzhiliga-centre B.P34 Rommani', NULL, '05 37 51 78 29', '061 39 96 47', NULL, ''),
(270, 0, 270, 'LA GENERALE DES RESEAUX', '', 1, 2, 'Abdelhaziz FAKOUDI', 'Im 37 bis app 4 angle avenue fal ouled oumeir angle rue oukaimiden agdal Rt', '037-67-32-80', '05 37-67-28-14', '064-90-20-05', NULL, 'lageneraledesreseaux@menara.ma; ;polyreseaux@menara.ma ; lageneraledesreseaux@gmail.ma'),
(271, 0, 271, 'TER Travaux Electriques et Realisation', '', 1, 4, 'MRABET MUSTAPHA/ EL OUFIR', '8 Rue de Beyrouth Appt N° 10 Rabat', '05 37 81 17 00', '05 37 81 25 00', '061 15 59 56/ 071 8', NULL, 'ter_sa@hotmail.com;nouha.ter@gmail.com;ter.administration@gmail.com;amrabet@ter.co.ma'),
(272, 0, 272, 'RPSN', '', 1, 2, 'BOUTAHRI Abdelaziz', 'Lot 24 HA Secteur 4 N° 52 Temara', '023 28 38 43', '05 23 28 73 47', '063 64 39 33//61 21', NULL, 'tiec_sarl@hotmail.com; rpsn@menara.ma'),
(273, 0, 273, 'LARAICHI Abdelhaq', '', 1, 2, 'LARAICHI Abdelhaq', 'rue ouled Boutabet km 5,5 Souissi rabat, agdal', '05 37 75 33 94 domi', '05 37 75 84 79', '061 21 97 68', NULL, 'alaraïchi_promoteur@yahoo.fr'),
(274, 0, 274, 'MESRAR INETRIEUR', '', 1, 1, 'MESRARR HICHAM / MESRAR Abdellatif', 'Hay Nahda 4 lot beau sité n°5 Rabat', '037 65 21 15', '05 37 65 20 43', '061 17 98 06', NULL, 'mesrarinterieur@menara,ma'),
(275, 0, 275, 'TRAMADA', '', 1, 1, 'BEN MADA Mohamed', 'complex professionnel route Kénitra N° 33 Salé', '05 37 74 82 17', '05 37 74 82 17', '061 21 44 59', NULL, 'tramadasarl@yahoo,fr'),
(276, 0, 276, 'ZITOUNI', '', 1, 1, 'ZITOUNI YASSINE', '53 RUE GAÂDA AV MED V TABRIQUET SALE', '037 86 28 86', '05 37 86 15 47', '060 19 19 60', NULL, 'Y,1972@HOTMAIL,FR'),
(277, 0, 277, 'ITTRI.EP.', '', 1, 1, 'LAMHAOUAR Ali', 'Lot Samir Imm 2 Appt 3 Temara centre', '037 64 19 94', '05 37 64 19 94', '061 40 55 67', NULL, ''),
(278, 0, 278, 'IDAANI', '', 1, 1, 'IDAANI Mbarek', '1434 hay el massira 1 temara', '037 60 09 68', '05 37 60 09 68', '061 54 18 97', NULL, 'idaani.sarl@menara.ma'),
(279, 0, 279, 'SAHARATEL', '', 1, 2, 'HALIMI mohamed', '7 rue mohamadia Rabat', '037 72 54 50', '05 37 70 54 74', '067 66 25 10 /0661 ', NULL, 'saharatel@menara,ma');
INSERT INTO `societe` (`Id`, `nb_national`, `nb_regional`, `ENTREPRISE`, `secteur`, `adher`, `MONTANT_COTISATION`, `Responsable`, `Adress`, `Téléphone`, `Fax`, `GSM`, `VILLE`, `E-MAIL`) VALUES
(280, 0, 280, 'RADIOCOM', '', 1, 4, 'EL MEDIOURI Med', '16 rue zerhoune souissi Rabat', '037 63 18 35/36', '05 37 63 18 39', 'ABDELILAH COMPTABLE', NULL, 'radiocom@radiocom.ma'),
(281, 0, 281, 'MYFAK', '', 1, 4, 'Khalil ABABOU', 'rue brhim roudanie océan Rabat', '037 61 62 97', '05 37 61 62 97', '061 47 77 11/ ICHRA', NULL, 'myfak ,sarl@gmail,com// ababou,khalil@menara,ma; ichrak@sewt-solar.ma'),
(282, 0, 282, 'COTRAVET', '', 1, 2, 'El Houssein BOURAM', '55 LOT MARIE IDDA RT', '05 37 74 08 12/ 037', '05 37 74 19 00', '061 30 65 36 CESSIO', 'temara', ''),
(283, 0, 283, 'SOTRATEP', '', 1, 3, 'BEL KASTALI Abdelhaq', '98 place rabiaa el adaouia agdal rabat', '037 77 24 90/05 37 ', '05 37 77 24 90', '061 37 69 20/ 062 3', 'rabat', 'good-,girlls-882@hotmaol,com'),
(284, 0, 284, 'Etablissement Zemmouri TAHAR', '', 1, 1, 'Zemmouri Med Tahar', '11 impasse balafrej Rabat', '037 72 68 19/037 20', '05 37 72 68 19/037 ', '061 54 51 37', 'rabat', ''),
(285, 0, 285, 'ATR ( ASSMENT TRAVAUX ROUTIER)', '', 1, 2, 'EL MOUNIRI SAID', 'RESIDENCE ASSABBAH IM AOULOUZ ILLOT 2 N° 1 CyM RT', '037 79 79 28', '05 37 79 79 29', '061 24 01 25', 'RABAT', 'atrbtp@yahoo.fr'),
(286, 2, 286, 'SEAGRIME', '', 1, 3, 'BAGHLI ABDELLAH', 'SKIKINA N° 17 AV HASSAN II TEMARA', '037 74 15 35', '05 37 74 77 07', '061 13 74 60', 'TEMARA', 'seagrime@yahoo,fr'),
(287, 1, 287, 'SYSTHERM', '', 1, 10, 'Nabil RTABI', '17 quartier industriel takadoum extention', '037 63 18 95 /05 37', '05 37 64 90 55 / 05', '', 'rabat', 'systherm@maghrebnet.net.ma ; systhermelkhaorassani@yahoo.fr . Y,yassine@menasteel,ma( ZINEB)'),
(288, 0, 288, 'EAACT- AIT LAHCEN ABDERRAHIME entreprise', '', 1, 1, 'AIT LAHCEN abderrahim', 'RUE OUED EL MALEH N°19 HAY SAFAA KARIA SALE', NULL, '05 37 66 16 02//05 ', '061 20 91 04', NULL, 'viatrassarl@gmail,com // eaact212@hotmail.com'),
(289, 0, 289, 'HARISKOU TRAVAUX', '', 1, 1, 'ECHARKI BRAHIM', '32 résidence essanoubar secteur 10 hay riad', '037 71 38 30', '05 37 71 38 30', '065 99 88 96//064 7', 'rabat', 'hariskou@menara.ma'),
(290, 0, 290, 'TECATLAN', '', 1, 1, 'FENJERO abdelaziz', '25 bis rue patrice lamamba hassan APP N° 4 HASSAN', '037 70 44 23', '05 37 70 44 24', '068 68 11 11', 'rabat', 'tecatlan@hotmail.com;'),
(291, 0, 291, 'OUBAMI DE BATIMENT', '', 1, 4, 'MEZZAOUI MOHAMED', 'SEC 8 Rue LOUkOUS N0 1177HAY SALAM SALE', '05 37 81 44 16', '05 37 81 43 29', '061 23 62 08', 'SALE', 'oubami@hotmail,fr'),
(292, 0, 292, 'KATRAV SERVICE', '', 1, 1, 'KAWEN Ahmed', 'secteur 17 résidence al yousr hay riad', '037 56 39 07/037 71', '05 37 56 39 07', '06 61 40 01 39', 'rabat', 'katravservice@menara.ma'),
(293, 0, 293, 'BENAAMMOUCH OMAR', '', 1, 1, 'EL ORF Youssef', '29 Avenue my youssef TABRIQUET Salé', '037 86 39 25', '05 37 86 39 25 .', '061 39 50 84/061 37', 'SALE', ''),
(294, 0, 294, 'EL OUFIR FAYCAL -en veilleuse-', '', 1, 1, 'EL OUFIR FAYCAL', '618, Rue ASSILA hay salam', '037 80 79 75', '05 37 80 77 78', '061 37 12 15', 'SALE', 'eloufir_f@yahoo,fr'),
(295, 1, 295, 'GENERATION MAROC TECHNOLOGIE - GMT-', '', 1, 3, 'Abderrahmane LARAICHI', '36 AV ALABTAL RUE SEBOU 1ER ETAGE N° 4 AGDAL RT', '05 37 62 92 54', '05 37 60 47 21', '061 37 09 57', 'Témara', 'gmt1ma@yahoo.fr'),
(296, 0, 296, 'FER PLATRE', '', 1, 1, 'OUMLIL Mohammed', 'Sect 37 Lot 24 24 HA N° 15 Témara', NULL, NULL, '062 72 31 83', NULL, ''),
(297, 0, 297, 'PEDECOR', '', 1, 4, 'MAKHOU Mohamed', '549 nahda 1 Rabat', '037 65 16 08/ 05 37', '05 37 73 46 65', '061 22 93 43/', 'rabat', 'pedecor@live.fr'),
(298, 2, 298, 'TROVAC', '', 1, 1, 'BIBAS Reda', '25 rue ouad ziz Agdal', NULL, '05 37 71 64 4205 37', '061 21 11 75061 21 ', 'Rabat', 'trovac26@yahoo.com'),
(299, 3, 299, 'ECG Entretien et construction général', '', 1, 20, 'FAZOUAN', 'RESIDENCE LAKHDAR IMM E APP 2 RUE JAAFAR ESSADIK AGDAL RT', '037 67 00 73/75/76', '05 37 67 00 52', '/ HAHJI 0661401500/', NULL, 'ecg88fa@gmail,com// tbennani@ecg,ma'),
(300, 0, 300, 'ARITRAVO', '', 1, 2, 'REMMAL Abderahmane', '15 rue Bruxelle, n°13 Océan, rabat', '037 26 39 20', '05 37 26 39 20', '061 49 49 07', 'rabat', 'aritravo@yahoo.fr'),
(301, 0, 301, 'LARCO', '', 1, 2, 'RHOUZLANE MOUNIR', '1221 bd omar ibn khattab massira 2 temara', '022445476/061389071', '05 22 44 54 76/05 2', '061 17 92 95 / 061 ', 'Temara', 'contact.larco@gmail.com'),
(302, 0, 302, 'EL ABDERRAHMANI OMARI Med', '', 1, 2, 'OMARI Mouhamed', 'Hay Errahsma Sect A n° 530 SALE', NULL, '05 37 87 09 62', '066 69 31 11/066 95', 'SALE', ''),
(303, 0, 303, 'STADE', '', 1, 3, 'Mounir MILOUDI', 'AV Med V Lot Yasmine Imm 43 n°01 SALE', '037 86 21 16', '05 37 85 17 83', '061 07 92 34', 'SALE', 'stade@menara.ma ( LEILA )'),
(304, 0, 304, 'TPCR', '', 1, 2, 'AL SOUIDI/ RAYEN SOUIDI', '14 Rue EL KOUFA CY', '037 20 11 66', '05 37 20 11 77', '061 33 82 77/061 44', 'Rabat', 'zineb,lakhal22@gmail,com /tpcr.travaux@menara.ma/ fouad_m@live,fr'),
(305, 1, 305, 'BRAIN AND WORKS ENGINEERING (BWE)', '', 1, 2, 'M\'hamed ABBAS', 'Bilaya 1 Imm B App n° 11cité des oudayas guich Rt', '037 56 07 13', '05 37 56 07 13', '061 39 59 65', 'Rabat', 'shaw12@gmail.com'),
(306, 1, 306, 'HTECH', '', 1, 20, 'Honsali Mounir', '14, rue Chellal ouzoud Ap n° 5 Agdal Rabat', '037 77 25 13', '05 37 68 67 39', '061 40 25 00/06 61 ', 'Rabat', 'htech@menara.ma'),
(307, 0, 307, 'TARCO MAROC', '', 1, 1, 'HADER HAMID', 'APP 16 AV Abdelkhalek Torres Hay SALAM SALE', '05 37', '05 37 86 57 19', '061 22 88 66', 'SALE', ''),
(308, 0, 308, 'AFRILAB', '', 1, 1, 'TIJANI ABDELLATIF /', 'AV SANAOUBAR SECT 21 GROUPE A VILLA 6 HAY RAYD RT', '037 71 74 92', '05 37 56 37 11', '061 08 95 10', 'RABAT', 'afrilablaob@yahoo.fr'),
(309, 0, 309, 'STPG', '', 1, 1, 'EL MASSAOUDI KARIM', 'Résidence AL Boustane im C2 app 16 Nahda 1 Rabat', '036 35 03 09', '05 36 35 03 09', '061 09 54 73', 'RABAT', ''),
(310, 0, 310, 'ETP (ENTREPRISE DE TOUTES PRESTATIONS)', '', 1, 2, 'OUTOOGGANE OMAR', 'N°26 hay el mohit BP 4184 TEMARA', '037 61 30 36', '05 37 64 46 71', '061 24 76 64', 'TEMARA', 'etpalu2007@yahoo.fr'),
(311, 0, 311, 'LES JARDINS DE VERSAILLES', '', 1, 2, 'CHIADMI AZIZ', '21 rue al gharb avivation Rabat', '037 65 72 85 / 037 ', '05 37 65 53 11', '061 37 25 52', 'RABAT', 'azizchiadmi@yahoo.fr; jardinsdevesailles@gmailc.om'),
(312, 0, 312, 'MAZZA ET BELHADJ', '', 1, 2, 'BENAAMOUCH MOHAMED', 'RUE OULJA N° 4 HASSAN RABAT', '05 37 61 64 48', NULL, '061 21 14 37', 'RABAT', ''),
(313, 0, 313, 'SARA ( entreprise d\'electricité général ', '', 1, 2, 'EL IBRAHIMI MOHAMED', 'HAY EL MENZEH N° 853 CYM RT', '037 79 51 49', '05 37 79 51 49', '061 22 27 87', 'RABAT', ''),
(314, 0, 314, 'TIZTA', '', 1, 4, 'ARDOUZ LAHCEN', 'VILLA R16 SECT 17 RUE NAPOLEON HAY RIAD', '037 85 05 93', '05 37 85 05 93', '060 59 91 56', 'RABAT', 'tizta@hotmail,fr / tizta,sarl@gmail,com'),
(315, 0, 315, 'AMANOR', '', 1, 10, 'ABDELALI KHALIL', '19 AVENUE IBN SINA RABAT AGDAL', '037 68 48 79', '05 37 29 49 19/05 3', '', 'RABAT', ''),
(316, 0, 316, 'MODULAR SYSTEM MAROC', '', 1, 1, 'NAOUI ALI', '49, Jbel ayachi Agdal Rabat', '037 67 38 17', '05 37 67 36 61', '061 43 71 56', 'RABAT', 'modularsm@menara.ma'),
(317, 0, 317, 'LE ROMANIA', '', 1, 20, 'MOHAMED BOUAMAR/ MME KHADIJA', '5, avenue Tadla App n° 1 Aviation -Rabat', '037 75 83 92/65 94 ', '05 37 75 25 41', '061 15 80 40', 'RABAT', 'bouamed@leromania.ma/ khadija@leromania,ma'),
(318, 0, 318, 'KHARBOUCH LARBI', '', 1, 3, 'KHARBOUCH LARBI', 'RUE ATOUTE SCT 10 LOT 13 RES ASSAFAE IM 4 APP HAY RIAD RT', '037 71 02 95', '05 37 71 34 60', '061 21 23 99', NULL, ''),
(319, 0, 319, 'HALCODEC', '', 1, 1, 'EL HALFI MOHAMED', '2 RUE ISTANBOULE APP 31 OCEAN RT', '037 73 20 68', '05 37 73 20 68', '066 18 52 30//061 1', 'RABAT', 'halcodec@hotmail.com'),
(320, 0, 320, 'SOBAY', '', 1, 4, 'ELIMACHE ALI', 'AV AL KAHIRA LOT EL FOUTOUH IMM 119 3 EME ETAGE TEMARA', '05 37 64 48 63', '05 37 64 48 63', '061 32 65 04/ 061 2', 'TEMARA', 'sobay@menara.ma ;sobay1998@gmail.com'),
(321, 2, 321, 'REVOLUS VOIR CA', '', 1, 4, 'BACHIRI AMINA', 'n° 20 rue oued draa agdal rabat', '037 77 09 11/037 77', '05 37 77 09 11', '061 07 88 87/ 061 1', 'RABAT', 'ab.amina@menara.ma'),
(322, 0, 322, 'SAR INGENIERIE', '', 1, 2, 'ARDOUZ LAHCEN/ MRABET MED', '22, rue my rachid app 10 Hassan RT', '37 72 33 72', '05 37 73 57 73', '060 59 91 56/ 060 2', 'RABAT', ''),
(323, 1, 323, 'SOUTHYDRAULIC', '', 1, 6, 'RIFAAI MROINE', '6, IMM 12 rue PEKIN Ocean rabat,', '05 37 26 39 68/ /05', '05 24 34 79 96/05 3', '061 48 00 63/ rifaa', 'RABAT', 't.rifaai@southydraulic.ma;contact@southydraulic.ma'),
(324, 1, 324, 'INGEBAK', '', 1, 4, 'HADDIOUI Khalid', '1456 hay Al maghreb Al Arabi 1 er étage Témara', '037 60 50 90', '05 37 60 50 90', '061 18 29 90', 'Témara', 'ingebak@menara.ma ; ingebaksarl@gmail.com'),
(325, 0, 325, 'BILTER CONSEIL', '', 1, 2, 'BATALI', 'Rue laymoune Imm D n° 2 , secteur 5 hay Riad - Rabat', '037 71 47 64', '05 37 71 47 64', '61212638', 'Témara', 'waterfen@menara.ma'),
(326, 0, 326, 'HASSANE', '', 1, 1, 'BRAHIM MOUEDDEN', '37, rue KABLYINE AVIATION RABAT', '037 65 73 60', '05 37 65 73 60', '061 14 43 05', 'RABAT', ''),
(327, 0, 327, 'RECOVA', '', 1, 3, 'RTABI NABIL /LAGHRARI ALI', 'RUE BENHAJER APP N° 9 IM 12 AGDAL ( a coté ibn yassin)', '037 77 56 54', '05 37 77 56 54', '061251694/061218494', 'RABAT', 'recova@menara.ma'),
(328, 1, 328, 'TRAVAUX DE CONSTRUCTION ET DE MENUISERIE', '', 1, 10, 'ALLAOUI M\'BAREK', 'AVENUE D\'ALGER IM 13 APP4 HASSAN RABAT', '037 20 63 40 / 05 3', '05 37 74 91 85 05 3', '06 61 39 21 70 (med', 'RABAT', 'allaoui.nb@menara.ma;bouchra.idrissi@tracom.ma'),
(329, 1, 329, 'COMEFAL', '', 1, 4, 'ALLAOUI M\'BAREK', 'LOT 20 QI TAKADOUM RABAT', '037 65 31 48', '05 37 65 20 18', '061 14 71 23', 'RABAT', 'comefal@yahoo,fr'),
(330, 0, 330, 'SEITE VRD', '', 1, 2, 'OUADIE YOUSSEF', '88, AVENUE FALL OULD OUMEIR APP 6 AGDAL RABAT', '037 67 35 20', '05 37 67 35 24', '61108034', 'RABAT', ''),
(331, 0, 331, 'CHRONOBAT', '', 1, 4, 'MOULINE EL ABBES', '66, App 2, AV OQBA, agdal, Rabat', '05 37 68 33 79// 03', NULL, '', NULL, 'chronobat3@gmail.com'),
(332, 0, 332, 'SUNLIGHT POWER', '', 1, 3, 'AHMED JAHIT', '6, Rue Tanist, Angle rue d\'agadir, hassan, Rabat', '037 66 10 32/34/35', '05 37 66 10 37', '061 47 00 36', 'RABAT', 'spm@menara.ma'),
(333, 0, 333, 'SONASCOTRAP', '', 1, 1, 'BOURAMMANE MOHAMMED', 'RUE ABOU FARIS AL MARINI IMM,26 2ème ETAGE APP n° 7 RABAT', '037 74 26 42/45', '05 37 74 23 53', '068 29 02 01', 'RABAT', ''),
(334, 0, 334, 'RIMO CONSTRUCTION', '', 1, 2, 'BOUHMOUCH CHAOUKI', '29 LOTISSEMENT EL KHAIR BETTANA SALE', '037 80 12 07', '05 37 80 12 07', '061 15 81 29/06 61 ', 'SALE', ''),
(335, 0, 335, 'AMANDIC', '', 1, 1, 'EL HABIB ABDESLAM', 'AVENUE TARIK IBNOU ZIAD TEMARA', '037 64 08 95', NULL, '061 22 48 95', 'TEMARA', ''),
(336, 0, 336, 'GHAZZA', '', 1, 1, 'ABBI M\'BAREK', 'AV HASSAN 11 ET RUETIFARIT N°1 APP N° 3 1 er ETAGE BP 5277 SALA AL JADIDA SALE', '037 83 58 96', '05 37 83 53 38', '061 19 36 31', 'SALE', 'ghazzatravaux@yahoo.fr //ghazzatravaux@hotmail,fr'),
(337, 0, 337, 'ASSAKA NIGROU', '', 1, 1, 'EL HOUCINE NIGROU', '56, AVENUE MARI IDA (CENTRE SKHIRATE TEMARA', '037 74 77 66/', '05 37 74 77 66/037 ', '061 15 77 19 / 061 ', 'TEMEARA', 'nigrou@hotmail,fr'),
(338, 0, 338, 'OUHOUD DE CONSTRUCTION', '', 1, 4, 'BOUHMOUCH MOHAMED', '4 AVENUE MOHAMED YASSIDI RABAT', '05 37 74 03 56 /037', '05 37 74 03 5/ 05 3', '061 57 08 08', NULL, ''),
(339, 0, 339, 'OSRIM COMPROCLIM', '', 1, 1, 'AZE LARAB HALIMI', '2 APP 2 RUE AINE LATI AV ENNASSER HAY OUE EDDAHB SALE', '05 37 87 50 40 /037', '05 37 87 05 10', '061 28 10 79', 'SALE', 'suftsuft@yahoo.fr'),
(340, 0, 340, 'YASSINE OUAKKA', '', 1, 1, 'OUKKA MOHAMMED', '159, Abdellah chafchaouni hay salam khemisset', '073 83 58 20-077 68', '05 37 55 17 96', '069 58 71 44', 'KHMISSET', 'syo-khemisset@hotmail.com'),
(341, 0, 341, 'DRISSAT DRISS', '', 1, 1, NULL, NULL, NULL, NULL, '', NULL, ''),
(342, 0, 342, 'ALPHA BUREAU', '', 1, 5, 'RHARMILI MOHAMED', '35 AVENUE HASSAN II ROUTE DE CASA LOT VITA', '037 79 82 00', '05 37 79 82 85', '661 29 68 37', 'RABAT', 'rharmili@menara.ma ; alpha.bureau@menara.ma'),
(343, 0, 343, 'KHARBOUCH ABDELFATTAH', '', 1, 1, 'KHARBOUCH ABDELFATTAH', '20 RUE QOBROS APT 1 RABAT', '037 20 20 94', '05 37 20 20 94', '061 22 20 12', 'RABAT', 'kfettah_1961@hotmail.com'),
(344, 0, 344, 'EDIFICA', '', 1, 1, 'ABDELLAH BOUISSA', 'IMM 56 APP 6 RESIDENCE AL BOUSTANE CYM RABAT', '0377 9 35 89', '05 37 79 35 89', '061 63 78 12', 'RABAT', ''),
(345, 0, 345, 'ABOUTALEB TAYFOUR', '', 1, 2, 'ABOUTALEB TAYFOUR', '15 AVENUE EL MAJD Q I CYM RABAT', '037 79 95 56', '05 37 79 95 56', '061 39 08 39', 'RABAT', ''),
(346, 0, 346, 'ENOBATAL', '', 1, 4, 'YOUSSEF KHTOU', 'N° 511 AVENUE EL BASATINE SECTEUR 2 HAY SALAM', '037 80 38 32', '05 37 80 38 39', 'YOUSSEF 061 23 70 5', 'RABAT', 'enobatal1@hotmail.fr'),
(347, 0, 347, 'TIZOUDA', '', 1, 1, 'AHMIOUCHE BRAHIM', 'RUE OUJDA HAY BEN YOYSSEF N° 13 TEMARA', NULL, '05 37 61 11 03/ 05 ', '/06 69 58 32 62/ 07', 'TEMARA', ''),
(348, 0, 348, 'CURNET', '', 1, 2, 'JANNAH ILHAM', '19 RESIDENCE BISM\'ALLAH CITE AL MAGHREB AL ARABI BP 5729 TEMARA', NULL, NULL, '068 45 77 91', 'TEMARA', 'curnet2@yahoo.fr'),
(349, 0, 349, 'BELATEL', '', 1, 1, 'LAMARI', '12, RUE CAMELIA SECTEUR 9 HAY RYAD RABAT', '037 71 27 00', '05 37 71 27 00', '061 29 12 89', 'RABAT', ''),
(350, 0, 350, 'COTER CONSTRUCTION TERHZAZ', '', 1, 10, 'THERHZAZ MOHAMMED', '32,AV OMAR IBN KHATTAB APPT N°15 AGDAL', '05 37 74 96 39/23/', '05 37 74 96 33', '061 18 52 34/', 'RABAT', 'cotercontact@menara,ma/Coter@menara,ma;amr.terhzaz@coter.ma/cotercontact@gmail.com'),
(351, 0, 351, 'EQUIMARO', '', 1, 1, 'BENANI ZAYER AHMED', 'RUE ABOUDABY N°57 BIS TABRIQUET SALE', '037 71 33 76', '05 37 71 53 89', 'LUIS 06 52 55 45 59', NULL, 'luis,sousa@fcdiegues,com/ bananizayer@hotmail.com\n'),
(352, 0, 352, 'SOMT (Société maghrébine de travaux)', '', 1, 10, 'OMAR BELLIL ET SALAH KHALADI/RAMZI', 'N° 1 IMM 12 PLACE DE SEFROU HASSAN RABAT', '037 70 35 33', '05 37 70 35 38', '061 35 37 78/061 09', 'RABAT', 'contact@somt.ma ;contactsomt@gmail.com'),
(353, 0, 353, 'OTRAD', '', 1, 1, 'OUBAH MOHAMMED ET OUZDOU AHMED', '25 , RUE DE KEBIBAT RT', '037 72 13 05', '05 37 73 30 30', '061 19 86 91', 'RABAT', 'otrad@menara.ma'),
(354, 0, 354, 'MEGA PISCINE', '', 1, 1, 'JABIR M\'HAMED', 'RUE 76 HAY ERRACHAD N°112 TAKADOUM RABAT', '037 65 55 68', '05 37 63 61 12', '061 34 46 46/061 37', 'RABAT', 'megapiscine@menara.ma'),
(355, 0, 355, 'TP LAND', '', 1, 2, 'EL GHAZOUANI DRISS', '1 RUE ARROMANE APP 1 SECTEUR 9 HAY RIAD RABAT', '037 67 29 72/78', '05 37 67 27 52', '061 15 15 81', 'RABAT', 'rand@menara.ma'),
(356, 0, 356, 'SODEVA', '', 1, 1, 'OUTIFA MOHAMED', '152 RUE BANI YAZID HAY NAHDA 1 IDAFI RABAT', '037 63 00 60', '05 37 63 00 61', '061 25 9858', 'RABAT', 'sodeva@hotmail.com;outifapcpf@ hotmail.com; 06r@hotmail.com'),
(357, 0, 357, 'FIDEL CONSTRUCTION EL BAHI', '', 1, 5, 'EL BAHI LAHCEN', 'N° 22 LOT EL FATH TABRIQUET SALE', '05 37 29 09 08 /037', '05 37 86 33 77// 05', '061 39 50 29', 'SALE', 'fidelconstructio@yahoo.fr ; aarac200@yahoo.fr// touria_79@yahoo,fr'),
(358, 0, 358, 'PROJEXET', '', 1, 1, 'NACIRI MOHA', 'N° 11 IM 12 SECT 10 HAY RYAD RABAT', '037 71 45 71', '05 37 71 07 12', '072 91 69 91', 'RABAT', ''),
(359, 1, 359, 'CIRGEC', '', 1, 6, 'BOUCHIHA MOHAMED', '22 RUE MOULAY RACHID APP N° 8 3EME ETAGE HASSAN RABAT', '037 20 65 61', '05 37 26 39 47', '061 20 56 91 (Khadi', 'RABAT', 'cirgecmaroc@yahoo.fr'),
(360, 0, 360, 'AL ASSEMA TRAVAUX', '', 1, 3, 'AISSI MOHAMED ET OUKNIDER ABDERRAHM', 'IMM 7 APP N° 5 RUE OUDE BAHT AGDAL RABAT', '037 77 48 88', '05 37 77 48 84', '063 56 94 90 / 060 ', 'RABAT', 'alassematravaux@gmail,com'),
(361, 0, 361, 'SOCIETE DE GESTION ZNIBER ( SGZ)', '', 1, 1, 'ZNIBER MOHAMED', 'CITE AL WAHDA IMM N° 28 APP N° 09 HAY SALAM SALE', '037 80 36 16', '05 37 75 30 31', '063 01 11 07', 'SALE', 'znibermohamed@yahoo.com'),
(362, 0, 362, 'TG TOP', '', 1, 1, 'SAID OUHAMOU', 'LOT EL KOUTOUBIA N° 6 RDC TEMATRA', '05 37 64 31 01', '05 37 64 30 44', '067 68 49 09', 'TEMARA', 'tgtop@menara,ma'),
(363, 0, 363, 'EBER', '', 1, 3, 'BRAHIM BOUALI', 'IM 71 APP N° 2 RUE PATRICE LUMUBA HASSAN RABAT', '037 66 13 60', '05 37 66 13 61', '061 19 55 56', 'RABAT', 'eber.epse@live.fr'),
(364, 0, 364, 'SME CLIM', '', 1, 2, 'IDMBIRIK HASSAN', 'AV MADAGASCAR 12 RUE SIAM RABAT', '037 70 98 80/037 73', '05 37 70 98 16', '061 16 94 97', 'RABAT', 'smeclim@iam.net.ma; wam01@hotl+mail.com'),
(365, 0, 365, 'CHTOUKI', '', 1, 1, 'NACER HASSAN', '15 AVENUE LALLA AMINA RUE KENITRA TANRIQUET SALE 11000 MAROC', '037 82 21 96', '05 37 86 31 45', '061 13 17 99/064 43', 'SALE', 'hassancht@menara.ma'),
(366, 0, 366, 'MENUISERIE AGOUZOUL', '', 1, 2, 'AGOUZOUL ABDELLATIF', 'MERS EL KHEIR LOULADA ROUTE EL MEDOUEZ TEMARA', '037 64 03 87 HAFIDA', '05 37 64 03 87', '061 54 17 98// HAFI', 'TEMARA', 'arts_@hotmail.fr ; arts_agouzoul@hotmail.fr'),
(367, 0, 367, 'JASOTRAV', '', 1, 3, 'EL HASSANI JAMAL EDDINE', 'N° 245 HAY NAHDA 1 YOUSSOUFIA RABAT', '037 75 86 21', '05 37 65 10 01', '061 13 01 52', 'RABAT', 'jasotrav@yahoo.fr'),
(368, 0, 368, 'SOTRIBEL', '', 1, 2, 'N\'HARI LAHBIB', 'HAY EL MASSIRA V IMM 5 MAMGAZIN 7 CYM RABAT', '039 91 87 41', '05 39 90 26 32', '061 40 87 01/ 061 3', 'RABAT', 'rnhari@emploi.gov.ma; rachid120@hotmail.com'),
(369, 0, 369, 'EGCA ( ENTREPRISE DE GENIE CIVIL ET D\'AM', '', 1, 3, 'CHEBAK HICHAM/ CHEBAK MOHAMED', 'IMM 3 APP 2 RUE LONDRES OCEAN RABAT', '037 70 93 40', '05 37 70 93 40', '061 32 40 22/061 36', 'RABAT', 'chebak_med@yahoo.fr'),
(370, 0, 370, 'SOMATEV', '', 1, 3, 'HAMID MANSOURI', 'RUE SEBOU IMM 40 APP N° 9 AGDAL RABAT', '037 77 71 55', '05 37 77 17 06', '061 16 52 08', 'RABAT', ''),
(371, 0, 371, 'POLE DE CONSTRUCTION ET D\'INGENIERIE', '', 1, 2, 'IBRAHIM TOUI', 'HAY EAL MAGHRIB AL ARABI IMM NOUHAILA 2 MAG N° 2 TEMARA', '05 37 60 96 26', NULL, '06 61 08 50 44', 'TEMARA', 'pc07@menara.ma'),
(372, 0, 372, 'TEMA', '', 1, 1, 'LAGRAYEI KACEM', '45 HAY LAMKITAA TEMARA', '037 74 03 03', '05 37 74 03 03/64 0', '061 43 10 82', 'TEMARA', ''),
(373, 3, 373, 'ENTRASOL', '', 1, 10, 'QADOURI MOHAMED', 'RUE EL ACHAARI APP N° 14 AGDAL RT', '05 37 79 95 86', '05 37 79 98 07', '061 35 36 15', 'RABAT', 'entrasolb@menara.ma'),
(374, 0, 374, 'TRAGEC', '', 1, 1, 'BALAFREJ NABIL', '3 ABOU BAKR ESSDDICK APP 12 AGDAL', '037 77 37 27', '05 37 68 05 98', '061 47 37 17', 'RABAT', 'balafrej@menara.ma'),
(375, 0, 375, 'EVERY CONTRACTRO\'S', '', 1, 1, 'FAHMANE MOHAMED', '18 RUE TENSIFT APP N° 18 AGDAL RT', '037 77 65 96', '05 37 77 65 96', '061 29 66 83', 'RABAT', ''),
(376, 0, 376, 'SOGATRAF SOCIETE GARDMIT DE TRAVAUX DIVE', '', 1, 1, 'DERROUICH HASSANE', 'SEHB SEKKA AIT TALHA COMMUNE RURALE SIDI ALLAL LEMSEDDER BP N° 640 KHEMISSET 15000', '05 37 55 31 02', '05 37 61 10 91', '061 39 92 48', 'KHEMISSET', 'sogatrav.sarl@gmail.com'),
(377, 0, 377, 'MODELOMC', '', 1, 1, 'JAMAL EDDINE KHALIFA', 'QUARTIER EL OULJA CU EL YOUSSOUFIA RT', '06 61 15 29 07/', '05 37 61 34 33', '061 15 29 07', NULL, 'modelomc@gmail,com/omcsarl@gmai,com'),
(378, 0, 378, 'JAMAL EDDINE KHALIFA', '', 1, 1, 'JAMAL EDDINE KHALIFA', 'RUE 3 N° 18 HAY ABI REGREG YOUSSOUFIA RT', '05 37 63 23 90', '05 37 63 23 90', '06 61 15 29 07', NULL, ''),
(379, 0, 379, 'TRANS IFTIKHAR', '', 1, 10, 'FAHMANE RACHID', '105 AVENUE FAL OULED OUMEIR AGDAL RABAT', '037 67 00 11', '05 37 67 42 33/36', '', 'RABAT', 'groupe_fahmane@yahoo.fr'),
(380, 0, 380, 'SI EL MOKHTAR DE TRAVAUX', '', 1, 1, 'OUIDERNE ALI', 'HAY NAHDA 2 N° 64 AIN AOUDA TEMARA', '037 74 84 32', '05 37 64 33 03', '061 39 59 31', 'TEMARA', ''),
(381, 0, 381, 'CEMATEC(societé centrale marocaine des t', '', 1, 1, 'MAACHI MOHAMED', '429 AVENUE HASSAN 2 1ER ETAGE RT', '037 72 26 52', '05 37 73 71 70', '063 47 56 83/06 75 ', NULL, 'cematec.cons@menara.ma'),
(382, 0, 382, 'CONFORAMA ( CONFORT AMEUBLEMENT AFRICAIN', '', 1, 3, 'ABBAD ABDELLAH', 'KM 15 AUTOROUTE RABAT CASA BP 4247 TEMARA', '037 74 13 53/64 34 ', '05 37 74 11 13', '', NULL, 'steconforma@yahoo,fr conforama@menara.ma'),
(383, 0, 383, 'ACF SYSTEME', '', 1, 4, 'Said BUIBHIRENER', '31 LOT BEAUFRUIT 2 ZONE INDUSTRIELLE AIN ATIQ TEMARA', '05 37 74 90 80/05 3', '05 37 74 96 14', '061 44 54 14', 'RABAT', 'b.said@acfsysteme.com ; contact@acfsysteme.com ; h.ilham@acfsyseme.com elhichami-acf@menara.ma ; acf@menara.ma'),
(384, 0, 384, 'REDA', '', 1, 4, 'RIDA AL MOKHTAR', 'N° 721 AMAL 5 HAY EL FATH MASSIRA', '037 79 80 23', '05 37 79 80 23', '061 09 92 96', 'RABAT', 'entreprise-reda@yahoo.fr'),
(385, 0, 385, 'AGHRIS KHALID BENSALAH', '', 1, 1, 'AGHRIS KHALID BENSALEH', '429 AVENUE HASSAN 2 N° 51 BP 4254 HASSAN RABAT', '037 85 35 93', '05 37 85 35 93', '061 62 12 01', 'RABAT', ''),
(386, 0, 386, 'ARKEVA', '', 1, 1, 'TOUNSI EL AZZOIANI IMAD', '21 AVENUE IBN SINA APP 3 AGDAL RABAT', '05 37 65 23 10', '05 37 63 96 94', '063 57 16 35', 'RABAT', 'esai_architecture@menara.ma'),
(387, 0, 387, 'TAHA CORPORATION', '', 1, 2, 'ZEROUAOUI RACHID', '1152 SECT 6 RUE FES HAY SALAM SALE', '037 80 93 87', '05 37 80 84 46', '061 40 66 97', 'SALE', 'rachid-corporation@hotmail,fr'),
(388, 0, 388, 'HAJJINE ET CIE', '', 1, 1, 'HAJJINE LAABI', '42 PAM OULMES BP 136', '037 53 21 55', '05 37 53 21 55', '061 40 36 01', 'KHEMISSET', ''),
(389, 0, 389, 'NOBLE SERVICE', '', 1, 1, 'SNABI AZZOUZ', 'LOT 1199 WIFAK ERAK TEMARA', '037 85 06 57', '05 37 86 34 13', '061 30 99 49', 'TEMARA', 'noble.service2005@gmail.com'),
(390, 0, 390, 'HITRAF CONSTRUCTION ET DIVERS (HTCD)', '', 1, 10, 'AQUIL HASSAN', 'N° 39 LOTISSEMENT SKIKINA TEMARA', '037 74 73 77', '05 37 64 42 54', '061 17 87 19/ NISSE', 'RABAT', 'htcd_1@hotmail.com; hitrav7@menara.ma ;htcd.zouhair@gmail.com'),
(391, 0, 391, 'SOGETRA', '', 1, 1, 'FARAHI ABDELKHALEK/ LEVY ELI', '3 AVENUE D ALGER HASSAN', '037 70 45 22/72 77 ', '037 73 29 36', '', NULL, ''),
(392, 0, 392, 'MSK', '', 1, 1, 'OUBIDAR MUSTAPHA', 'HAY ENNAHDA 1 GROUP EL MAJD N° 438 RABAT', '05 37 63 28 65/05 3', '05 37 75 11 72', '061 33 83 42: amina', 'RABAT', 'SECRETAIRE /amina_shou@hotmail.com'),
(393, 0, 393, 'VISIOLINK', '', 1, 1, 'GUESSOUS ADIL', '6 RUE BIN EL OUIDANE AGDAL', '037 68 68 20', '05 37 77 46 04', '068 09 98 63', 'RABAT', 'visiolink@visiolink.net'),
(394, 0, 394, '2 IR', '', 1, 1, 'BENAMARE HASSANE', '2 RESIDENCDE AL MAMOUNE HASSAN RT', '037 73 72 74', '05 37 691925/05 37 ', '061 14 65 66 / moha', 'RABAT', 'mohammedfaradi@gmail.com;2ir.travaux@gmail.com;isbtp.fathllah.moussaoui@gmail.com;abdelmajidhadrak@gmail.com'),
(395, 0, 395, 'COMPAGNIE DE COMMERCIALISATION DE COMPOS', '', 1, 1, 'BENMEWONEH BENAISSA', '5 SECT 20 RESIDENCE AL WIFAQ HAY RIAD RT', '037 71 77 19', '05 37 71 77 19', '061 67 87 65', 'RABAT', 'ste3ci.maroc@hotmail.com'),
(396, 0, 396, '911 SERVICE NDD', '', 1, 1, 'GUEMERA OMAR', '16 RUE EL BROUJ APP N° 2 HASSAN', '037 86 65 06', '05 37 20 64 11', '', NULL, ''),
(397, 0, 397, 'GTCI GENIE DE TRAVAUX CIVILS', '', 1, 2, 'AZIZ GUARTETE', 'MASSIRA 1 SECTEUR 4 LOT 24 HA CHEIKH DAOUDI N° 46 TEMARA', NULL, '05 37 72 97 73', '061 22 55 87', 'TEMARA', 'sobretsarl@menara,ma'),
(398, 0, 398, 'HT TRAVAUX', '', 1, 1, 'TIREGUIT SAID', '22 RUE EL JORF HSSAINE (SECTEUR 4) K,O,M SALE', '037 82 81 41', '05 37 82 81 41', '076 98 58 47/061 83', 'SALE', 'tireguitsaid@yahoo.fr'),
(399, 0, 399, 'L\'ART DE CONSTRUIRE', '', 1, 3, 'BADDI MOHA', 'BP 4271RABAT TOUR HASSAN 10005 RT', '05 37 76 00 72', '05 37 76 00 73', '061 39 46 24', NULL, 'art,construire@yahoo,fr//artconstruire@ymail,com'),
(400, 0, 400, 'ARHYM', '', 1, 2, 'REDOUANE AKIMAKH', 'HAY NAHDA 2 EXTENSION 3 N° 31N RABAT', '037 75 38 02', '05 37 75 40 71', '076 66 43 28', 'RABAT', 'aryhmtv@hotmail.com;arhym@gmail.com'),
(401, 0, 401, 'ENRG', '', 1, 2, 'EL HAKMAOUY SALAH', 'BD ATLAS KEBIR HAY SALAM SECT 9 IMM 24 KAMILIA APP 8 SALE', '05 37 80 10 08', '05 37 80 75 69', '06 61 26 21 80/06 6', 'SALE', 'enrg_sarl@menara.ma'),
(402, 0, 402, 'CLEMESSY', '', 1, 4, 'BERNARD FONTAINE', 'bd Abderrahim Bouabid, sect. 15 n°13 bloc A hay Riad', '05 37 57 00 02', '05 37 57 00 06', '', 'RABAT', 'cymaroc@clemessy.fr'),
(403, 0, 403, 'STBO', '', 1, 3, 'OMARI OMAR', 'SECSTEUR C 959 HAY ERRAHMA SALE', '037 86 28 90', '05 37 86 57 40', '061 30 30 72//061 2', 'SALE', 'stb_omari@yahoo.fr'),
(404, 0, 404, 'POLYVATECH', '', 1, 3, 'CONTIE PHILIPPE', '12 RUE OUED FES RABAT', '037 68 08 81', '05 37 68 08 91', '061 16 42 79- AZIZ ', 'RABAT', 'contie2001@yahoo.fr'),
(405, 0, 405, 'EGTHM ( entreprise générale des travaux ', '', 1, 1, 'EL GOSS CHAFIK', '9 RUE DAYT AOUA I 112 RABAT AGDAL', '037 68 60 43', '05 37 68 60 42', '061 40 06 69', 'Rabat', 'c_elgoss@yahoo.fr'),
(406, 0, 406, 'LAKHLIFI', '', 1, 1, 'LAKHLIFI HAIRCHI', '220 AVENUE HASSAN 2 APP N° 08 RABAT', '066 16 34 18', '05 37 26 02 19', '', 'RABAT', ''),
(407, 0, 407, 'MAN SERVICE', '', 1, 1, 'SABBAH SERVICES', 'SECT 8 RESIDENCE NASSIM RYAD IM 2 APP 9 HAY RYAD RABAT', '061 29 04 39', '05 37 56 42 66', '037 56 42 66', 'RABAT', 'maabzy@gmail.com'),
(408, 0, 408, 'G3P', '', 1, 3, 'SADIK HJIYEJ', 'ZONE INDUSTRIELLE AIN ATIQ N° 13 TEMARA', '05 37 74 94 90/93 0', '05 37 74 94 99', '037 74 94 99', 'TEMARA', 'g3p@g3p,ma/sadik,hjiyej@g3p,ma// hatim,hjiyej@g3p,ma'),
(409, 0, 409, 'AFRICA DEVELOPPEMENT', '', 1, 6, 'BOUAKHRI YOUSSEF', '49 AV FAL OULED OUMEIR APP N° 5 AGDAL RT', '037 77 93 08', '05 37 77 93 09', '061 34 22 24', 'RABAT', 'africadeveloppement,sarl@gmail,com'),
(410, 0, 410, 'LES CHANTIERS MAROCAINS MODERNES', '', 1, 10, 'ZAHRAOUI ABDELLAH', '10 SECTEUR 3 LOT 24 HECT TEMARA', '05 37 61 43 11', '05 37 60 39 47', '0661 10 99 13 ISSAM', 'TEMARA', 'chantier_modernes@yahoo,fr'),
(411, 0, 411, 'IDEAL CLIMA', '', 1, 1, 'TAHAR EL HAMINE', '41 RUE FATIMA FIHRIA APP N° 4 1 ER ETAGE', '037 70 91 49', '05 37 70 91 31', '061 39 16 25', 'RABAT', 'ideal clima@menara,ma'),
(412, 0, 412, 'CODEMTHEP', '', 1, 1, 'BAGUI YOUSSEF', 'AMAL 4 COMPLEMENT 176 BIS CYM RT', '037 79 42 41', '05 37 79 42 41', '061 17 14 98', 'RABAT', 'codemthep@yahoo.fr'),
(413, 0, 413, 'AL ORZE', '', 1, 1, 'AHMED BADIOUI', '172 SECT E HAY RAHMA SALE', NULL, NULL, '06 63 77 73 02', 'SALE', ''),
(414, 0, 414, 'AYOTRA', '', 1, 7, 'KHALID AYOUCH', '20 BD MOHAMED V VILLE NOUVELLE MEKNES', '035 51 76 41', '05 35 51 76 41', '061 25 30 58', NULL, ''),
(415, 0, 415, 'AMRHAR TRAITEMENT PAYSAGER', '', 1, 1, 'AMRHAR ABDELATIF', '7 LOTISSEMENT ALBAHJA MAG 2 ET 3 CYM', '05 37 77 11 86', '05 37 77 11 86', '061 08 34 38', 'RABAT', 'atpsarl@gmail,com'),
(416, 0, 416, 'ITCANAT', '', 1, 1, 'CHIBAN DRISS', '7 LOTISSEMENT ALBAHJA MAG 2 ET 3 CYM', '037 26 02 19', '05 37 26 02 19', '061 94 71 37', 'RABAT', ''),
(417, 0, 417, 'SROC( A VERIFIER ADNAN)', '', 1, 3, 'MOHAMED CHOUKRI LAOUD', '36 avenue al abtal angle rue oum errabie app n) 9 agdal RT', '0537 68 10 22', '05 37 77 65 95', '066 51 879 56', 'RABAT', 'srocrabat@gmail,com / sroc-sarl@menara,ma'),
(418, 0, 418, 'LES CHANTIERS MODERNES DE TEMARA', '', 1, 1, 'FARAJI AHL LAMARA', '( siège) 1 RUE MOULINE AKKARI RABA- bureau 50 av omar ibn khattab app n° 4 agdal RT', '037 77 62 64', '05 37 60 30 15/05 3', '061 39 60 49', 'RABAT', 'leschantiersmodernes@yahoo,fr'),
(419, 0, 419, 'TECHNO EXPERTISES ET TRAVAUX', '', 1, 2, 'M HAMEED EL KAZAL', 'MASSIRA 5 IMMEUBLE 7 APP N° 2 CYM RT', '037 79 02 80', '05 37 79 02 80', '061 30 51 23', 'RABAT', 'elkazal@yahoo,fr'),
(420, 0, 420, 'SOJADECOR', '', 1, 1, 'JAMALEDDINE LAHBABI', '2 RUE AHMED LOUKILI EX RUE ASSAFI APP 10 RT', '037 76 78 56', '05 37 76 78 56', '061 07 92 39', NULL, ''),
(421, 0, 421, 'PETRADIS', '', 1, 2, 'DRABLI AHMED', 'AV 6 NOVMENRE RESIDENCE JARDIN DE LA GARE IMM E4 APP N°1 TABRIQUE SALE', '037 85 14 01', '05 37 85 06 89\n05 3', '061 14 87 36', 'RABAT', 'contact@petradis.com;ahmed@petradis.com;zineb@petradis.com'),
(422, 0, 422, 'LE PARAPLUIE', '', 1, 1, 'MOUSSA BENSAOUD', 'BD FOUARAT MERS AL KAHIR IM 10APP 27 TEMARA', NULL, '05 37 64 38 99', '061 35 95 72', 'TEMARA', 'leparapluie@menara,com'),
(423, 0, 423, 'SOTACBAT', '', 1, 1, 'HAMMOU ABDELAZIZ', '1437 BIS HAY EL FATH MASSIRA CYM RABAT', '037 79 87 94', '05 37 79 87 94', '061 16 47 92/061 40', 'RABAT', 'sotacbat@gmail.com'),
(424, 0, 424, 'ETIMAS', '', 1, 1, 'TIMASLI KAMAL', 'HAY SALAM SECTEUR 8 N° 1143 SALE', '037 80 01 35', '05 37 80 01 35', '06 61 14 54 76 /078', 'SALE', ''),
(425, 0, 425, 'ASSOUINIA', '', 1, 1, 'MOUSTAKIM MOSTAFA', 'RESIDENCE 3 MARS AVENUE PRINCE HERITIER SALE', '037 84 30 34', '05 37 84 30 34', '061 49 15 01', 'SALE', 'contact@assouinia,ma'),
(426, 0, 426, 'SOTCOB', '', 1, 1, 'BELAKBIR MONSIF', 'RESIDENCE BOUREGREG AV DE FES IM 2 APP 2 SALE', '037 76 93 17', '05 37 76 96 58', '061 31 19 63', 'SALE', 'sotcob@hotmail,fr'),
(427, 0, 427, 'MACHARIA AL MAMLAKA', '', 1, 1, 'MOUNIRI EL MOSTAFA', 'RUE AL IJASS IM 13 N° 1 HAY RIAD RT', 'SECRETARIAT 0677 69', '0537 79 91 45/ 05 3', '06 61 10 17 18 / 06', 'RABAT', 'macharimamlaka@gmail.com mambtp@gmail.com'),
(428, 0, 428, 'SONOGEC', '', 1, 2, 'EL GHOUMAJ ABDELHAKIM DG', '753 secteur 2 hay moulay ismail,salé', NULL, NULL, '06 61 33 68 58', 'RABAT', 'abdelhakim_e@yahoo,fr. sonogec@gmail,com'),
(429, 0, 429, 'RAPIBAT', '', 1, 10, 'DARDAFAA ABDELOUHED ET GOUSALI OMAR', '227 HAY NAHDA 2 EXTENSION 3 RT', '037 75 42 47/037 75', '05 37 65 94 17', '061 15 76 59/061 21', 'rabat', 'sterapibat@yahoo.fr;orchidee-13@hotmail.com;rapibat@rapibat.ma'),
(430, 0, 430, 'ARCON', '', 1, 2, 'KASSAOUI MOSTAPHA', 'HAY OUED EDDAHAB RUE AL ORABITAINE N° 186 HAY ESSALAM SALE', NULL, '05 37 75 27 32', '061 38 54 08', 'SALE', 'kassaoui@mostaha07mail,com'),
(431, 0, 431, 'SOSIMAT', '', 1, 1, 'CHERKAOUI ABDELAZIZ', 'IMM I APP 11 MABELLA RABAT', '037 63 83 14 /037 6', '05 37 63 83 14/037 ', '061 30 03 25', NULL, ''),
(432, 0, 432, 'TACHMAMOT TRAD', '', 1, 1, 'MARGHI LHOUSSINE', '66 LOT AL MOSTAKBAL TATH EL KHER TEMARA', '037 74 17 06', '05 37 74 17 06', '061 79 60 25', 'TEMARA', 'tachmamat@yahoo,fr'),
(433, 0, 433, 'HAMASS DE TRAVAUX DIVERS', '', 1, 1, 'AGNAOU', '706 HAY NAHDA 1 RT', '05 37 75 27 32', '05 37 75 27 32', '061 40 50 99', NULL, ''),
(434, 0, 434, 'ERREGGUI', '', 1, 2, 'ERREGGUI MOHAMED', 'HAY PAM OULMES CENTRE', 'tel/ FAX 05 37 52 3', '06 11 21 86 28(rach', 'erregali@hotmail,co', NULL, ''),
(435, 0, 435, 'GESER', '', 1, 4, 'BENANI MOHAMED', 'RESIDENCE ASSABAH ILOT 11 , IMM AZILAL APP N° 4CYM RABAT', '037 29 18 44', '05 37 29 18 44', '061 39 14 76', NULL, 'gesersarl@yahoo.fr;gesersarl@gmail.com'),
(436, 0, 436, 'ELECTRIBA - Entreprise d\'installation él', '', 1, 10, 'MOJAB MOHAMED', 'RUE KOWEIT N° 8 RABAT', '05 37 73 22 23', '05 37 72 22 98', '061 29 32 50', NULL, 'electriba@gmail,com'),
(437, 0, 437, 'COSMATRAV', '', 1, 2, 'BELGHITI LAACHACH', 'LOT HAJJI N° 35 ROUTE KENITTRA SALE', '037 86 16 16', '05 37 86 16 16', '061 46 68 81', NULL, ''),
(438, 0, 438, 'BENJEBBOUR', '', 1, 2, 'BENJEBBOUR HMAD', '157 RUE SIDI YAHYIA HAY INBIAT SALE', '037 80 38 32', '05 37 80 38 39', '061 39 47 16', NULL, ''),
(439, 0, 439, 'HYDRO PRO- TANMIA OMRANIA', '', 1, 3, 'BENCHRIFA KHALID', 'IMM 36 APP 3 HAY AL ALAOUIYINE AV MED V TEMARA', '05 37 7477 40', '05 37 64 20 11', '06 12 03 03 10', NULL, ''),
(440, 0, 440, 'TETRALEC', '', 1, 1, 'EL QORCHY MOHAMED// KHAMA BOUGHABA', 'RUE EL HANCHAT N° 45 HAY KARIMA 2 SALE', '037 86 33 98', '05 37 86 33 98', '', NULL, ''),
(441, 0, 441, 'L ART DE GENIE CIVIL(ARDEGEC)', '', 1, 4, 'ALLACH OUIARIACH', '37 RUE SENEGAL APP N° 2 OCEAN RT', '037 70 71 27', '05 37 70 71 27', '061 50 83 05/061 21', 'RABAT', 'cofiduciaire@yahoo,fr'),
(442, 0, 442, 'POINT BLEU', '', 1, 1, 'MHAJIR YOUSSEF', 'CITE IBN SINA IMM 9 APP N° 1 AGDAL RT', '037 65 00 44', '05 37 65 00 44/45', '061 30 37 32', 'RABAT', ''),
(443, 0, 443, 'UNIVERS PLOMBERIE CHAUFFAGE', '', 1, 1, 'ESSABBARI ABDELILLAH', 'BLOC T8 N° 88 CYM KAMRA RABAT', '05 37 89 84 57// 03', '05 37 29 70 87// 05', '06 61 23 86 66', 'RABAT', 'abdelillah26@hotmail,com'),
(444, 0, 444, 'BENMOUSSA', '', 1, 2, 'BENMOUSSA ABBES', '03 RUE SIDI ABDELLAH BEN HSAIN KARIA SALE', '037 82 92 16', '05 24 23 55 19', '', NULL, ''),
(445, 0, 445, 'AWRACH', '', 1, 2, 'HDI ALI', '81 LOT WARDA TIFELT', '037 51 34 17', '05 37 51 34 17', '061 39 99 13/061 20', NULL, 'awrach,sec@gmail,com/ awrachzemmour@hotmail,com'),
(446, 0, 446, 'RAMUZA', '', 1, 2, 'MUSTAPHA ZAHIR', 'IM 237 APP 3 HAY KARIMA SALE', '037 87 82 63', '05 37 87 82 63', '061 13 98 45', NULL, 'zahimus@hotmail.com'),
(447, 0, 447, 'SJS MAROC', '', 1, 6, 'CARLOS JACINIO FERNANDES', 'AV HASSAN II IM SAADA N° 5 APP 566 RT', '037 72 40 00', '05 37 20 34 40', '061 39 12 29', 'RABAT', 'sjsmaroc@sjs-maroc,ma'),
(448, 0, 448, 'GECOMAR- LA GENERALE DES CONDUITES DU MA', '', 1, 4, 'GAHOUZ MED', '263 NAHDA 1 COMPLEMENT RT', '037 75 49 98', '05 37 75 39 94', '066 14 01 025', NULL, 'gahouz@yahoo,fr;gecomar.sarl1@gmail.com'),
(449, 0, 449, 'AZIZ BOUKHLIQ ET FRERES', '', 1, 2, 'AZIZ BOUKHLIQ', 'RUE CHELLAOUI BP 4155 TEMARA CENTRE', NULL, '05 37 61 66 66', 'ABD EL ALI 06 30 10', NULL, 'boukhliqaziz@yahoo,fr samounehamza@hotmail,com'),
(450, 0, 450, 'FORMULE 02 Chèque impayé (3000)', '', 1, 0, 'AMINE ABDALLAOUI', 'APP N° 03 LOTISSEMENT JENANE HASSAN SALE', '05 34 01 81 44', '05 37 65 96 68', '06 61 47 96 44', NULL, 'formule,2@live,fr'),
(451, 0, 451, 'CAP TP', '', 1, 20, 'NAAMANE YOUSSEF', 'Résidence Al Mansour, Immeuble n°1, Plateau n°1, CYM,\nRabat\n/ Avenue moulay ali cherif secteur 02 hectare 24 imm 4 app 3 temara', '05 37 29 71 45', '05 37 29 71 31', '06 61 04 20 80/ JIB', NULL, 'captp@live.fr;captp.talib@gmail.com;'),
(452, 0, 452, 'SQUARE CONTACT AND HYDRAULIC ENGIEERING ', '', 1, 30, 'ABDELLAH ALLOUCHE', '75 AVENUE HASSAN 02 RESIDENCE YASSMINE TEMARA', '05 37 64 34 14', '05 37 64 34 30', '06 61 052 992', NULL, 'contact@sche,co,ma /aalouche2003@yahoo,fr//sche2009@yahoo,fr'),
(453, 0, 453, 'BENMOUNA', '', 1, 4, 'BOUCHRA SEFIAT', 'RESIDENCE YASMIN ROUTE DE KENITRA MAGAZIN 04 SALE', '05 37 87 99 86 /', '05 37 87 99 86', '06 61 28 78 69', NULL, 'brilcoldeco@gmail,com // wwww,benmouna@menara,com/ sacre-pierre@htomail,com'),
(454, 0, 454, 'BMG TRAVAUX', '', 1, 3, 'MOHAMED GHANNAM/BENBRAHIM MOHAMED', '66 RUE TENSIFT APPT N° 01 AGDAL RT', '05 37 77 58 04', '05 37 68 28 26', '06 61 17 77 48/ 066', NULL, 'mohamed,ghannam@gmail,com'),
(455, 0, 455, 'TECH ELEC', '', 1, 3, 'OUALLAL LHOUSSAINE', '9 RUE JBEL TOUBKAL APP 7 AGDAL RABAT', '05 37 68 06 26', '05 37 77 63 73', '06 61 22 93 93', NULL, 'tech-elec@hotmail,com'),
(456, 0, 456, 'A2TP', '', 1, 3, 'MOHAMED ARBANI', 'AV HASSAN 2 MARIAM APP 82 AGDAL RT', '05 37 29 54 01/0537', '05 37 29 54 02/0537', '06 61 19 55 91', NULL, 'MEDARBANI@BCV,MA'),
(457, 1, 457, 'SODRET', '', 1, 2, 'AZIZ QUARTETE', 'HAY NAHDA N° 374 RUE OURIKA RABAT', '05 37 75 76 64', '05 37 75 76 74/', '06 61 22 55 87', NULL, 'sodret,sarl@menara,ma;sodret.sarl@gmail.com'),
(458, 0, 458, 'RITEL', '', 1, 2, 'BARGACH MOHAMED', '88 AV FAL OULED OUMEIR AGDAL RT', '05 37 67 44 14', '05 37 67 44 15', '06 61 24 35 24', NULL, 'mi,bargach@gmail,com'),
(459, 0, 459, 'BELYOU', '', 1, 2, 'AHMED BELHASSAN', '14 BIS RUE AIT YADINE HAY ZEMERMANE KHEMISSET', '06 62 85 35 47 06 6', '05 37 55 02 39', '06 61 60 55 45', NULL, 'ste-belyou@hotmail,fr'),
(460, 0, 460, 'BELECTRABAT', '', 1, 6, 'BEN ALI OULAHCEN MOHAMED', '74 AV AL MAGHRIB AL ARABI LA RESISTANCE RABAT', '05 37 70 42 07', '05 37 70 42 07', '06 61 19 33 17/ 06 ', NULL, 'info@belectrabat,com'),
(461, 0, 461, 'INDRASS SISTEMAS MAGREB', '', 1, 2, 'ABDELGHANI BENDIAR', 'ESPACE SAADA KM 3,4 AVENUE MOHAMED VI 10000 RABAT', '05 38 01 42 00/05 3', '05 38 01 42 02 / 05', '06 61 42 98 61', NULL, 'abendiar@indracompany,com// srouaji@indracompany.com'),
(462, 0, 462, 'SOMMANE FATHI', '', 1, 2, 'SOMMANE FATHI', '63 RUE CHANA OMAR HAY SALAM KHEMISSET', '05 37 55 41 32', '05 37 55 61 00/ 05 ', '06 18 50 18 91', NULL, 'mahdisommane@gmail.com'),
(463, 0, 463, 'NCIRI', '', 1, 4, 'NCIRI KHALID', '10 RUE LAGHOURT APP 10 HASSAN', '05 37 70 63 34', '05 37 70 63 39', '06 61 19 85 24', NULL, 'entreprisenciri@yahoo,fr'),
(464, 0, 464, 'SARFOUTRAV', '', 1, 2, 'BOUSHABA ABDESSELAM', 'RUE 3 N° 8 CITE EL MOUNA KHEMISSET', '05 37 55 44 46', '05 37 55 59 14', '06 61 49 92 52', NULL, 'pas d email'),
(465, 0, 465, 'AL JIHAOUIA CONSTRUCTION', '', 1, 2, 'EL HANOUNI ILHAM', '22 RUE DAKAR N° 1 OCEAN RT', '05 37 73 46 32', '05 37 70 78 62', '0661379942/06616440', NULL, 'pas d email'),
(466, 0, 466, 'RIEGONOR', '', 1, 6, 'GONSALER FRNCISCO', '1609 MAGHRIB AL JADID', '05 37 36 02 22/05 3', '5 37 36 02 08', '06 61 16 46 48', NULL, 'riegonor@riegonor,com'),
(467, 0, 467, 'AL RYANE', '', 1, 2, 'AYAD ET M ABDELILAH', '766 GR AL AHDE HAY NAHDA 1 RT', '05 37 63 43 20', '05 37 36 02 08 //05', '06 61 76 84 42', NULL, 'alryane86@gmail,com'),
(468, 0, 468, 'TIPE HOLDING', '', 1, 4, 'SAID KHOUKHOU', 'IMM F APP 25 IKHLIL 2 BETHOVEN HARHOURA TEMARA', '5 37 62 67 63', '0 5 37 62 67 64', '0661158033/06601580', NULL, 'tipeholding@gmail.com ; tipeholding_said@hotmail.com'),
(469, 0, 469, 'GECITRAM', '', 1, 2, 'ADARDOUR LHOUSSINE', '6 RUE AL KHALIL N° 30 BP 1722 RT', '537262196', '05 37 26 21 96', '668271010', NULL, 'gecitram@live.fr  '),
(470, 0, 470, 'MAZATRASO', '', 1, 1, 'ELMOUSADIANI ABDELAZIZ', 'N° 116 GOURPE EL AORAAR TAKADOUM RT', '05 37 63 14 75', '05 37 63 14 75', '06 61 39 66 70', NULL, 'mazatraso@wanamail,ma'),
(471, 0, 471, 'LABINATE', '', 1, 3, 'RAFI MOHAMMED AMINE', 'AVENUE LALLA ASMAE LOT HAJJIA 6 TABRIQUET SALE', '5 37 86 32 03', '05 37 77 11 86', '06 61 36 79 00', NULL, 'labinate@gmail.com'),
(472, 0, 472, 'ETRIBEN', '', 1, 3, 'RADI LAHCEN', '1052 LOTISSEMENT DES VILLAS SALE AL JADIDA', '05 37 53 42 44', '05 37 53 42 43', '06 61 25 20 14', NULL, 'etriben@hotmail.fr'),
(473, 0, 473, 'RABAT CHANTIER', '', 1, 2, 'BOUBKER ENNANI', 'N° 7 APP N° 1 BOULEVARD IV HAY KARIMA', NULL, '05 37 81 21 96', '0 66 1 48 90 51', NULL, 'rabat-chantier@hotmail.fr'),
(474, 0, 474, 'SANI SHOP', '', 1, 3, 'EL BOUHALI JAMAL', 'AVENUE LALLA ASMAE LOT HAJJIA 6 TABRIQUET SALE', '5 37 86 32 03', '05 37 86 42 76', '06 61 16 82 75', NULL, '  sanishop1@gmail.com'),
(475, 0, 475, 'TRINGET', '', 1, 2, 'BENOMAR NOUREDDINE', '248 BIS AMAL 4 CYM RABAT', '05 37 79 61 04', '05 37 79 61 04', '06 61 46 29 46', NULL, 'n.benomar@menara.ma'),
(476, 0, 476, 'AZ NET', '', 1, 4, 'MOHAMED ADIL ZELLOU', '11 RUE DAYET EROUMI APP 9 AGDAL RABAT', '537776460', '05 37 77 64 56', '', NULL, 'aznet@aznet.co.ma; ilham@aznet.co.ma'),
(477, 0, 477, 'OUVRAGE DE SUD', '', 1, 6, 'ABDERRAHMANE AZEROUAL', 'SOCOMA 1 N° 2005 MARRAKECH', '5 24 34 64 19', '05 24 39 43 87', '06 61 44 53 60', NULL, 'ouvragedesud@yahoo.fr'),
(478, 1, 478, 'MZOUDA', '', 1, 2, 'BELKASSI M HAME \'D', '18 AVENUE MED 5 TABRIQUEET SALE', '537853046', '05 37 85 30 46', '06 61 20 92 47', NULL, ''),
(479, 0, 479, 'ETTOLBA', '', 1, 50, 'LAHCEN ETTOLBA', 'LOT 27-28 ZONE INDUSTRIELLE AIN ATIQ TEMARA', '05 37 74 92 0713/43', '05 37 74 92 09/', '06 61 35 55 06/ 06 ', NULL, 'chadia : c,diane@ettolba,com// ettalmy@yahoo.r ;a_dahbi66@hotmail.com // meriem@ettolba,ma;youssef@univers-plancher.ma'),
(480, 0, 480, 'TIMIDER', '', 1, 3, 'TIMIDER ABDERRAHMANE', 'N° 191 HAY RIAD KHEMISSET BP 752', NULL, '05 37 55 47 17', '06 77 68 47 36', NULL, ''),
(481, 0, 481, 'PUR SANG', '', 1, 2, 'OUZAKAL ZAID', 'BLOC L N° 6 DOUAR AL GARAA CYM RT', '05 37 29 80 08', '05 37 29 80 08', '06 61 65 42 20', NULL, 'zaid_oz@yahoo.fr;zaid.ouzaqel@gmail.com'),
(482, 0, 482, 'L\'INVENTEUR', '', 1, 2, 'EL MASSIJALLA EDDINE', 'IMB24 N° 20 RESIDENCE RYAD II TEMARA', '06 61 18 96 64/06 6', '06 61 13 45 51', '', NULL, ''),
(483, 0, 483, 'SUFT', '', 1, 3, 'AZELARAB HAMIDI', '7 MY IDRISS AVENUE MY MED V SALE', '05 37 87 11 89', '05 37 87 00 02', '06 61 28 10 79', NULL, 'suftsuft@yahoo.f;r azelarabh@hotmail.com'),
(484, 0, 484, 'ENNASR ASCENSEUR', '', 1, 6, 'BENTALEB AZZEDDINE', '6 RUE AIN ASERDOUNE APP 4 AGDAL RT', '05 37 68 05 37', '05 37 68 19 26', '', NULL, 'ennasrascenseurs1@gmail.com'),
(485, 0, 485, 'HUB DE GENIE CIVIL', '', 1, 4, 'ABDELLAH HAMZAOUI', '145 NAHDA 1 COMPLEMENT RT', '05 37 75 45 35', '05 37 75 45 35', '06 74 28 72 87', NULL, 'habdellah2@gmail.com'),
(486, 0, 486, 'BATI VERT', '', 1, 4, 'MED KARIM ET MED HAJJI', 'ANGLE RUE BRUXELLE AUTAWA RESIDENCE SAADA IM 14 N° 4 OCEAN RT', '05 37 20 43 46/47', '05 37 20 43 47', '06 61 17 13 60/06 6', NULL, 'bativert2007@'),
(487, 0, 487, 'OCTATRAV', '', 1, 2, 'EL MAKOUDI BADREDDINE', '17 CENTRE ERRABIE ENNAHDA RT', '05 37 63 19 48', '08 08 39 45 00', '06 61 39 62 01', NULL, 'octatrav@menara.ma'),
(488, 0, 488, 'GENSAV TRAV', '', 1, 2, 'ECHCHAFI MUSTAPHA', 'HAY NADHDA 1 N° 419 RABAT', NULL, NULL, '06 61 60 09 59', NULL, 'gensavtrav@hotmail,fr'),
(489, 0, 489, 'ADCO', '', 1, 2, 'ABDELMAJID BIHI', '1 JENANE HASSAR IM 49 HAY CHEMAOU SALE', '05 37 88 02 21', '05 37 88 02 21', '06 61 19 18 43', NULL, ''),
(490, 0, 490, 'STBR', '', 1, 6, 'MOHAMED HICHAM BICHARA', '1 BIS RUE MAARIF AVIATION RT', '05 37 64 53 05', '05 37 64 52 62', '06 61 24 63 20', NULL, 'info@stbrmaroc.com; h.bichara@stbrmaroc.com; m.idmbark@stbr.com'),
(491, 0, 491, 'WORK ET AM', '', 1, 4, 'AL MAZOUARI LAHCEN', '12 RUE DU SENEGAL', '05 37 26 47 85', '05 37 26 05 03', '06 61 20 01 91', NULL, 'mork-am@hotmail,com'),
(492, 0, 492, 'LES CHANTIERS DU CAPITAL', '', 1, 2, 'LAHBABI TAIBI', 'RESIDENCE YAZAMANE 1 BLOC 3 N° 6 SIDI MOUSSA SALE', NULL, NULL, '06 70 94 96 25', NULL, ''),
(493, 0, 493, 'SEVEN TECHNIQUE', '', 1, 3, 'RAOUI RACHID', 'N° 58 TALAA 10 HAY OUED EDDAHAB TEMARA', '05 37 74 73 82', '05 37 61 14 69/0537', '06 62 14 54 52', NULL, 'seventechnique@gmail.com'),
(494, 0, 494, 'TRAVES', '', 1, 2, 'ERRIAH EL MOSTAFA', 'RUE AIN ASSERDOUN MAG 2 IM 3 HAY GHAZALI TEMARA', '05 37 64 47 74', '05 37 64 47 74', '', NULL, ''),
(495, 0, 495, 'ALTATRAV', '', 1, 4, 'BA MOHAMED TARIK', 'N° 2 PRES DE MOSQUEE MED VI CYM EL MENZEH RABAT', NULL, '05 37 79 87 35', '06 61 10 07 43/06 6', NULL, 'tarik_go@hotmail.com'),
(496, 0, 496, 'EL MOUSSAOUI MED', '', 1, 2, 'EL MOUSSAOUI MED', '527 SECT D HAY ERRAHMA SALE', NULL, NULL, '06 61 37 53 50', NULL, ''),
(497, 0, 497, 'DOUSSOU- SODOCO-', '', 1, 2, 'SOUSSI JAMAL', 'BLOC 21 N° 599 HAY SALAM SALE', '05 37 80 73 61', '05 37 80 73 61', '06 42 61 69 57', NULL, 'doussou.sarl2010@gmail.com'),
(498, 0, 498, 'ERE MAROC', '', 1, 3, 'BAOUZA', 'AVENUE LALLA AMINA N° 53 APP 8 TABRIQUET SALE', NULL, NULL, '', NULL, 'eremaroc@gmail,com'),
(499, 0, 499, 'TECHLAND', '', 1, 6, 'MOSTAFA EL MELHAOUI', '180 CITE OLM RUE EZZOUBIR IBN AL AOUAM', '05 37 75 52 53', '05 37 75 26 27', '06 61 39 93 56', NULL, 'techland@menara.ma'),
(500, 0, 500, 'SOCLIMAT', '', 1, 2, 'KHORSSA ALLAL', 'IMM 20 APP 5 AV MADAGASCAR OCEAN RT', NULL, '05 37 74 00 09', '06 61 18 49 02', NULL, 'soclimat@menara.ma'),
(501, 0, 501, 'LOUKILI BOUCHTA', '', 1, 3, 'LOUKILI BOUCHTA', 'HAY AL OMYINE IMM 5 APPT N° 6 TEMARA', NULL, NULL, '06 58 93 84 98', NULL, '   tireguitsaid@yahoo.fr'),
(502, 0, 502, 'AHMED SAAD TRAVAUX', '', 1, 2, 'MOURAD BENNANI', 'MARJANA 3 BLOC 35 IMM 41 APP 8 SALE', '05 37 74 45 47', '05 37 74 45 47', '06 61 37 19 66', NULL, 'mouradsaleh66@yahoo.fr'),
(503, 1, 503, 'AMANCOM ( AMAN CONDUITES MODERNES)', '', 1, 2, 'NOUARA MED (NIHAL LMRABTI D FINANCI', 'RES ZAITOUNA B APP 33 HAY NAHDA 2 RT', NULL, '05 37 65 92 03', '06 61 18 54 43', NULL, 'amancom.sarl@gmail.com'),
(504, 0, 504, 'FREYSSIMA', '', 1, 20, 'GUY SEVOZ - DG-', '7 RUE JANAE RESIDENCE AL IDRISSIA APP N° 1 SECT 8 HAY RIAD RT', '05 37 56 44 35/ 05 ', '05 37 56 39 48', '06 61 20 94 24', NULL, 'gsevoz@freyssinet.com; sara;rouijel@freyssinet.com soumia.adili@freyssinet.com'),
(505, 0, 505, 'LOGISOFT', '', 1, 6, 'MOURAD MED GHANNA/ MME BENOMAR', '19 RUE DAYET IFRAH AGDAL RABAT', '05 37 26 28 71', '05 37 26 29 22', '061 14 43 61/ Mme B', NULL, ''),
(506, 0, 506, 'SEEA', '', 1, 2, 'AMRANI HANCHI ABDELHAI', '8 RUE IBN HAYTAM AGDAL', '05 37 77 21 00', '05 37 77 21 00', '06 61 30 84 42', NULL, 's.e.e.a@htomail.com'),
(507, 1, 507, 'GRIMM', '', 1, 3, 'ABDEMLHAQ LAFHAILI', 'ZI TAKADOUM PARTIE HAUTE LOT 51 RT', '05 37 65 56 92', '05 37 65 19 50', '06 61 18 94 87/ MER', NULL, 'gr.i.m.m@hotmail.com'),
(508, 0, 508, 'DIMAH MACHINERY', '', 1, 2, 'RACHID ASSAIDI', 'N° 19 IMM27 LOT YASMINE TABRIQUET SALE', NULL, NULL, '06 62 19 30 53', NULL, 'larosedestables@hotmail.fr'),
(509, 0, 509, 'AFKIR -IBRAHIMI BOUCHTA-', '', 1, 3, 'IBRAHIMI BOUCHTA', 'APPT 1 IM E RESIDENCE BELLEVUE SALA AL JADIDA', NULL, NULL, '06 61 23 38 94', NULL, ''),
(510, 0, 510, 'TIMZRAY', '', 1, 2, 'HAMYOUY MOHAMED ET HADAFI FATIHA', 'BLOC 23 N° 1057 HAY SALAM SALE', '05 37 82 82 42/ 05 ', '05 37 82 82 42/05 3', 'tim 06 68 35 61 93-', 'sale', 'timzray@gmail,com'),
(511, 0, 511, 'DOKA', '', 1, 2, 'Harry BEUTEL', '18 RUE AL AKHILYA QUARTIER DES MARGUERITES RYAD RT', '05 38 00 40 90', NULL, '06 61 47 47 02/ SAN', NULL, 'sanae,talouni@doka,com haraldbeutel@doka,com/ mounia.mouhoub@doka.com // laila,el_idrissi@doka,com'),
(512, 1, 512, 'OULAD ZERRAD', '', 1, 10, 'CHRIQI RAHHAL', 'LOT JEANMARIE N° 24 TEMARA', '05 37 64 49 57', '05 37 61 21 68', 'LAAROUSSI ALAHMADI ', NULL, 'entreprise.oulad.zarrad@menara.ma;rahhal65@gmail.com;ouladzerrad@gmail.com;ouladzerrad@gmail.com;ouladzerrad@gmail.com;'),
(513, 0, 513, 'SASMA CONSULTING', '', 1, 6, 'FAHMI MOHAMED ET ANTRI MOHAMED', 'RUE TOUDGHA RESIDENCE AL ANDALOUS N° 4 AAPP 10 AGDAL RT', '05 37 77 66 19', '05 37 77 28 19', '06 61 17 94 99/06 6', 'RABAT', 'sasmaconsulting@gmail.com'),
(514, 0, 514, 'TANSIFT CONTRACTOR', '', 1, 4, 'SAID GRIOUITTE', 'LOT JNANE JBILOU IMM 1VAPP 9 ROUTE DE KENITRA SALE', '05 37 88 23 12', '05 37 88 23 12', '', NULL, 'stetansift@gmail.com ;tansiftsarl@gmail.com'),
(515, 0, 515, 'SECOMATUBE', '', 1, 2, 'ACHELACHOUNE ABDESSELAM', 'GROUPE 4 C21 HAY AL MAGHREB ALARABI MASSIRA 2 TEMARA', '05 37 60 33 34', '05 37 60 33 34', '06 61 49 56 60/06 6', 'TEMARA', 'secomatube@menara,ma'),
(516, 0, 516, 'LANNET', '', 1, 4, 'BOUDI MOHAMMED', '23 AV SAKIAT HAMRA BETTANA SALE', '05 37 88 04 69/05 3', '05 37 77 98 90/ 05 ', '06 61 20 92 27', 'SALE', 'boudi@lannet.ma ;lannet@lannet.ma'),
(517, 0, 517, 'RR HOLDING /BGI CONSTRUCTION', '', 1, 20, 'ANOUAR BENBRAHIM', 'KM 15 ROUTE PRINCIPALE N° 1 AVENUE HASSAN 2 TEMARA', '05 37 61 07 84', '05 37 61 07 86', '06 61 19 46 05/06 6', 'TEMARA', 's.bezzaa@bsinvestment.ma;anouarbenbrahim@hotmail.com'),
(518, 0, 518, 'GHAIT DEVELOPPEMENT', '', 1, 2, 'LOURIDI TAREK', 'SECT 1 LOT 209 RUE SAHL MELYOUIYA HAY LOUDAYA TEMARA', NULL, NULL, '06 61 15 52 20', 'TEMARA', 'tlouridi@gmail,com'),
(519, 0, 519, 'MPIM', '', 1, 10, 'AKALLAZ KARIM', '52 AV PATRICE LUMUMBA APP 15 RT', '05 37 70 52 42', '05 37 70 51 94', '06 61 15 59 90', 'RABAT', 'mpimaroc@gmail.com'),
(520, 0, 520, 'CABBSA OBRAS Y SERVICIOS MAROC', '', 1, 0, 'JORGE ROIG GARCIA', 'AVENUE BOUABIDE LOT N° 7 SECTEUR 18 HAY RIAD RT', '05 37 57 11 56', '05 37 71 11 38', '06 61 36 86 73', 'RABAT', ''),
(521, 0, 521, 'NADHIS', '', 1, 6, 'SMAILI HASSAN', '51 RUE JBAL AYACHI N° 11 AGDAL RABAT', '05 37 67 06 70', '05 37 67 24 29', '06 61 30 37 02 (06 ', 'RABAT', 'nadhis@menara.ma'),
(522, 0, 522, 'MOBATRAV', '', 1, 2, 'SABBAH MOHAMED', 'AMAL 5 N° 1329 HAY MASSIRA RABAT', NULL, '05 37 56 42 66', '06 61 29 04 39', 'RABAT', 'mobatrav@gmail.com'),
(523, 0, 523, 'RAKKAZ TRVAUX DIVERS', '', 1, 2, NULL, 'N° 179 RUE LABRACHOUA HAY LINBIAT PAR LA ROUTE DU 1ER (BAFRA)', NULL, '05 37 37 37 46', '06 18 94 44 10/ 06 ', NULL, 'rakkaz@hotmail.it'),
(524, 0, 524, 'DIMENSION DATA MAROC', '', 1, 20, 'REDA MEZIANE ET CHRISTIAN JONNIAUX', 'LOT 30 ZONE INDUSTRIELE ASSINAIA', '05 37 60 68 68', '05 37 60 69 69', '', NULL, 'reda.meziane@dimensiondata.com ;kawtarmouzdahir@dimensiondata.com'),
(525, 0, 525, 'AGC GESTION GENIE ET CONSTRUCTION', '', 1, 2, 'IAZHARI DIREXT Mme IDALINA ALEXANDR', '12 RUE JEBEL EL AYACHI APT 2 AGDAL 10080', '05 30 300 370/05 30', '05 37 68 15 36', '06 14 000 371', NULL, 'asibel.maroc@asibel.net;idalina.jorge@asibel.net'),
(526, 0, 526, 'RIDAMINE TRAVAUX', '', 1, 3, 'ABOURI MY LAHOUSSINE', '632 SECT C HAY RAHMA SALE', NULL, '05 37 86 31 91', '06 67 35 51 41', NULL, 'ridamine2@yahoo.fr'),
(527, 0, 527, 'MEGA CHANTIER', '', 1, 3, 'ADIL BAKHIR', 'N° 175 SECT 5 LOT 24 HA BP 4722 MASSIRA TEMARA', NULL, '05 37 60 65 21', '06 74 02 30 46', NULL, 'megachantier@gmail.com'),
(528, 0, 528, 'BEN AHMED', '', 1, 4, 'OUJAA OMAR ET OUJAA MONCEF', '20 RUE MOULAY RACHID RABAT', '05 37 73 18 27', '05 37 73 51 15', '06 61 22 35 56', NULL, 'ent.benhmed@gmail.com'),
(529, 0, 529, 'DOSSOUR', '', 1, 2, 'ZAAFRANI RABIA', 'AV HASSAN 2 IM D RES AHSAN DAR MAG 6 AGDAL', '05 37 69 29 73', '05 37 69 29 73', '06 61 39 07 44', NULL, 'dossour_travaux@yahoo.com;dossourtravaux@gmail.com'),
(530, 0, 530, 'AMCM TRAD', '', 1, 2, 'MOUSSEYIR ABDERRAHIM', 'DOUAR LBRAHMA BOUKNADEL', '06 18 53 58 51', '05 37 53 41 53', '06 18 53 58 51', NULL, 'amcm.contact@gmail.com'),
(531, 0, 531, 'MABEF MARBRE', '', 1, 3, 'MOURAD BELHOUCINE', 'HAY AL MAGHRIB AL ARABI N° 13 SECT 4 TEMARA', '05 37 60 43 44', '05 37 60 43 56', 'MOURAD 06 61 45 61 ', NULL, 'mabef@hotmail,fr'),
(532, 0, 532, 'SUD AFRICAIN D ELECTRICITE GENERALE ET T', '', 1, 3, 'OUZIDANE BOUMEHDI', '1 BIS AV MOHEMED VI RUE BOUSKOURA RT', '05 37 75 85 07', '05 37 75 85 08', '06 61 15 30 43', NULL, 'sudalec@gmail,com'),
(533, 0, 533, 'ING TRAVAUX', '', 1, 2, 'SAID BOUAZZA', 'HAY NACR SECT 2 N° 122 AIN AOUDA TEMARA', '06 45 80 29 41 /06 ', NULL, '06 67 81 29 70', NULL, 'ing-travaux@hotmail,fr'),
(534, 0, 534, 'LABERAGA (en 3 traites)', '', 1, 6, 'FAKHREDDINE HICHAM', '54 AVENUE MOHAMED V TAAA 06 TEMARA', '05 37 64 33 87/ 05 ', '05 37 61 16 90', '06 61 37 39 08', NULL, 'laberaga@hotmail.fr'),
(535, 0, 535, 'DREAM VIEW', '', 1, 2, 'BENZAKI MED ET MOUNTASSIR', 'RESIDENCE YASMINA RDC RUE ANGLE HACHIMI KOSTALI ET RAIS ACHOUR KBIBAT RT', '05 37 70 88 00', '05 37 70 88 88', '06 61 33 01 12', NULL, 'halaba.habib@gmail.com; dreamview8@yahoo.com'),
(536, 1, 536, 'BOULMACO', '', 1, 2, 'FAOUZI BOULMAROUF 06 61 20 17 18', 'IMM 1 AV MED V RESIDENCE ELKOUMIR APPT 4/8 TABRIQUET', '05 37 86 63 76', '05 37 86 63 76', '0661 201718 MOHAMED', NULL, 'faouzi@boulmaco.com ; abdelghani@boulmaco.com'),
(537, 0, 537, 'AHAME ALACHGHAL', '', 1, 2, 'MOHMAMED EL HAROUNI', 'HAY ERRAHMA N° 363 SECT E SALE', NULL, NULL, '06 15 67 52 31/06 6', NULL, '   ahamme.alachghal@gmail.com'),
(538, 0, 538, 'MAROCAINE DE CONSTRUCTION ET EQUIPEMENT ', '', 1, 2, 'ESSADIK BOUCHAIB', 'LOT YASSMINE IMM 43 APP 1 AV MED V TABRIQUET SALE', '05 37 86 21 16 /', '05 37 85 17 83/', '06 62 16 48 57', NULL, 'stade.essadik@gmail,com/'),
(539, 0, 539, 'AIT LKHEIR', '', 1, 4, 'BOURIALE SAID', 'AMAL 2B 511 CYM', '05 28 83 47 13', '05 28 83 22 07', '06 61 23 04 07/ 06 ', NULL, 'aitlkeir@gmail,com dahdah,abdellah@gmail,com');
INSERT INTO `societe` (`Id`, `nb_national`, `nb_regional`, `ENTREPRISE`, `secteur`, `adher`, `MONTANT_COTISATION`, `Responsable`, `Adress`, `Téléphone`, `Fax`, `GSM`, `VILLE`, `E-MAIL`) VALUES
(540, 1, 540, 'INNOVATIVE BUILDER', '', 1, 10, 'OMAR EL MOUJAREB', '35 RUE LOUBNANE BUREAU 26 OCEAN', '05 24 42 04 94', '05 24 42 09 55', '06 69 77 84 88', NULL, 'elmoujareb@gmail,com'),
(541, 1, 541, 'GCB', '', 1, 2, 'MESSAOUDI YAHYA', 'RUE PIERRE PARENT IMM 3 APP N° 2 HASSAN', '05 37 66 11 85', '05 37 66 11 85', '06 62 61 64 79', NULL, 'gcbtravaux@gmail,fr'),
(542, 1, 542, 'MENASTEEL INDUSTRY', '', 1, 20, 'RTABI', NULL, NULL, NULL, '', NULL, ''),
(543, 139654, 543, 'NIGROU LARBI', '', 1, 2, 'LARBI NIGROU', '13 SECT 2 LOT 24 HA TEMARA', NULL, NULL, '06 57 22 15 06', NULL, 'nigrou.l@hotmail.fr;Inbatiment-In@hotmail.fr'),
(544, 0, 544, 'CAPITAL', '', 1, 2, 'CHEBIHI YOUSSEF ET LAMZIBRI YASSINE', '8 RUE MOULAY RACHID RT', '05 37 64 54 67', '05 37 64 54 67', '06 59 51 31 88/37', NULL, 'capitalalu@gmail ,com'),
(545, 0, 545, 'BELECTROTEC', '', 1, 4, 'BOUZGHUAR SALAH', '50 RUE ZANJIBAR MAGAZIN N° 1 OCEAN RT', '05 37 72 34 38', '05 37 73 11 56', '06 61 98 92 41', NULL, 'belectrotec@yahoo,fr'),
(546, 0, 546, 'SONOTAC', '', 1, 3, 'NASSIM AJJAGHD', '16, Résidence Jenane Nahda, Appt N°3, 1ér étage, Hay Nahda 1 EXT, Rabat', '06 52 27 45 28', '05 37 65 19 11', '06 62 27 45 25/', NULL, 'sonotac.sarl@gmail.com'),
(547, 0, 547, 'FOMELEPE', '', 1, 2, 'HANI MUSTAPHA', '959 HAY NAHDA 2 GROUPE AL MAJD RABAT', '06 66 17 65 67', '05 37 65 16 05', '06 66 17 65 67', NULL, 'fomelepe,hani@gmail,com'),
(548, 0, 548, 'BUILTRAD', '', 1, 2, 'ETTOLBA YOUSSEF', NULL, NULL, NULL, '', NULL, ''),
(549, 0, 549, 'TOLBA VERRE SARL', '', 1, 10, 'ETTOLBA MERIEM', 'LOT 27 ZONE INDUSTRIELLE AIN ATIG TEMARA', '0537 74 92 07/ 43/1', '0537 7492 09', '0661 44 42 42 MERIE', NULL, 'ahmedelgharbaoui@yahoo.fr;meriem@ettolba.ma;b.elmahi@ettolba.com;contact@ettolbainvest.com;'),
(550, 0, 550, 'FINITION DESIGN', '', 1, 4, 'MME.NORA ATTAS', '16 BIS RUE IBN ABDOUNE LES ORANGERS AGDAL RABAT', '0537 73 12 80 /87', '0537 73 12 89', '0629 17 00 28', NULL, 'finition@finitiondesign.com; contacts@finitiondesign.com'),
(551, 0, 551, 'ASSABBANE HELEC', '', 1, 3, 'MR ASSABBANE HFID', 'GROUPE 18 IMM 5 APPT 05 N°131 AIN ATIQ TEMARA', '0661 46 48 46', NULL, '0671 41 68 59', NULL, 'driouiche.kaoutar@gmail.com;assabanehelec44@gmail.com'),
(552, 0, 552, 'CONTRADIS SARL', '', 1, 4, 'MR KHALID EL IDRISSI', '1ER ETAGE 11 AV AL MAJD ZONE INDUSTRIEL CYM RABAT', '05 37 79 09 99\n05 3', '05 37 79 09 57', '06 65 10 34 34', NULL, 'contradis,ma@gmail,com'),
(553, 0, 553, 'ALL PROJECTS', '', 1, 2, 'MR KHALID AIT BELHOUSSEIN', 'BP 26706 HAY EL MENZEH RABAT', '0537 79 00 82', '0537 79 00 82', '0652 39 56 25', NULL, 'all.projects1@gmail.com'),
(554, 0, 554, 'VALUSTRAD', '', 1, 500, 'MR GUEDIRA SIFEDDINE', '2 PLACE ABOU BAKER ESSADIQ APT 6 AGDAL RABAT', '0537 60 64 54', NULL, '0661 40 68 11', NULL, 'sf.guedira@gmail.com'),
(555, 0, 555, 'SODICOTRA', '', 1, 500, 'MR SOURY ABDALLAH', 'AV ABDELKRIM AL KHATTABI KISSARIAT L\'OCEAN N° 25 OCEAN RABAT', '0537 72 69 98', '0537 72 63 26', '0661 30 10 23', NULL, 'sodracotra,sarl@gmail.com'),
(556, 0, 556, 'NAROUZE TRAVAUX SARL', '', 1, 2, 'NAROUZE ABDERRAHMAN', '13, RUE D\'ORAN, APT N° 6 .HASSAN.RABAT', '0537 73 28 26', '0537 73 28 41', '0661429591 noura', NULL, 'narouzetravaux@gmail.com;narouze.noura@gmail.com'),
(557, 0, 557, 'INAJA BAT CO NEGOCE SARL AU', '', 1, 500, 'DRISS EL BAZ', 'N° 15 AVENUE ALABTAL APP N° 4 AGDAL RABAT', '0612 13 12 53', NULL, '0610 23 80 15', NULL, 'drisselbaz909@yahoo.fr'),
(558, 0, 558, 'LES TRAVAUX', '', 1, 500, 'ABDALLAOUI AMINE', '15 AV AL ABTAL N° 4', NULL, NULL, '0673 99 11 52', NULL, 'lestravaux2@gmail.com'),
(559, 0, 559, 'PAVO COLOR', '', 1, 500, 'AHMED EL FAKIHI', 'AGENCE ABD SIDI ABDAD BP N° 7308 MARRAKECH', '0661 96 98 03', NULL, '', NULL, 'ahmedelfakihi78@gmail.com'),
(560, 0, 560, 'MAROUF BTP', '', 1, 500, 'ABDERRAHIM BOULMAROUF', 'IMM 30 APPT 8 RUE MOULAY AHMED LOUKILI HASSAN RABAT', '0679 26 27 59', NULL, '', NULL, 'abderrahim.boulmarouf@gmail.com'),
(561, 0, 561, 'COBATIP', '', 1, 2, 'M.Hicham BOUSSAYRI', 'Sect 8 Res Nassim Ryad Imm\n5 Apt 6 H R Rabat', NULL, NULL, '0661 07 48 84', NULL, 'boussayrihi@hotmail.fr'),
(562, 0, 562, 'COPREF', '', 1, 10, 'M.ADIL KADIRI YAMANI HASSNI', 'Lottissment Jaouhaar NR 37\nBir Rami Est Kenitra', NULL, NULL, '0661 18 64 92', NULL, 'copref@gmail.com ;adilkadiriyamani@gmail.com'),
(563, 0, 563, 'HTTC', '', 1, 2, 'M.BOUNJOUA Ayman', '12 AVENUE MICHLIFEN 4 EME ETAGE APT N 9 AGDAL , Rabat', NULL, '0537 67 51 44', '0663 62 08 02', NULL, 'contact@httc.ma'),
(564, 0, 564, 'EAM SERVICES', '', 1, 10, NULL, NULL, NULL, NULL, '', NULL, ''),
(565, 0, 565, 'ETABLISSEMENT AHOUZI MOHAMED TRAVAUX', '', 1, 1, 'AHOUZI AHMED', 'IMM 43 N° 2 AV HASSAN KENITRA', NULL, '0537 67 01 15', '0661 15 83 91', NULL, ''),
(566, 0, 566, 'PECARE ESPACES VERTS', '', 1, 1, 'HADDANE HAMID', NULL, NULL, NULL, '0661 22 62 06', NULL, ''),
(567, 0, 567, 'SONAFIA', '', 1, 6, 'boughroud abderrahmane', NULL, NULL, NULL, '0667 08 24 15', NULL, 'boughroud@hotmail.com'),
(568, 0, 568, 'SOCOMBUS SARL', '', 1, 1, 'KHAIREDINE OMAR', 'KM 16 ZONE INDUSTRIELLE TEMARA', '0537 74 79 86', NULL, '0661 91 02 46', NULL, ''),
(569, 0, 569, 'SAVOIR VERT SARL', '', 1, 1, 'NOUBAIHI MOUNIR', 'AV AHMED CHAWKI IMPASSE VALTHOM RES ROSARIO-MARRIE APPT N° 6 KENITRA', NULL, NULL, '0661 80 05 06', NULL, ''),
(570, 0, 570, 'ECO VERT', '', 1, 1, 'FDILI CHERIF', '148 RUE MY ABDELLAH RESIDENCE AL FATH 1ER ETAGE BUREAU N°1 KENITRA', NULL, NULL, '0661 43 72 17', NULL, 'm.fadou@hotmail.com'),
(571, 0, 571, 'AHOUZI TRAVAUX', '', 1, 10, NULL, NULL, NULL, NULL, '', NULL, ''),
(575, 0, 572, 'mohamed amine belfencha', 'BT', 1, 15000, 'khalid', '3 rue sidi mchich', '0682899898', '0555669988', '0889596456', 'SALE', 'aminhamma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `titre`
--

CREATE TABLE `titre` (
  `Code` int(11) NOT NULL,
  `nom` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `titre`
--

INSERT INTO `titre` (`Code`, `nom`) VALUES
(1, 'Provisoire'),
(2, 'Définitive');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `rule` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `rule`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `Code_Cin` varchar(20) NOT NULL,
  `Nom` varchar(35) NOT NULL,
  `Prenom` varchar(35) NOT NULL,
  `Mail` varchar(40) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `telephone` varchar(35) NOT NULL,
  `type_user` int(11) NOT NULL,
  `Log` varchar(35) NOT NULL,
  `Remarque` varchar(40) NOT NULL,
  `status` int(11) NOT NULL,
  `id_region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `Code_Cin`, `Nom`, `Prenom`, `Mail`, `Password`, `telephone`, `type_user`, `Log`, `Remarque`, `status`, `id_region`) VALUES
(3, 'ae1234', 'belfencha', 'amine', 'aminhamma@gmail.com', '1234', '0655555555', 1, '18-03-23 04:45:47', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `code` varchar(2) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `region` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`code`, `nom`, `region`) VALUES
('BE', 'Benslimane', 6),
('BR', 'Berrechid', 6),
('C1', 'CASABLANCA', 6),
('EJ', 'El Jadida', 6),
('FE', 'FES', 3),
('FN', 'Fnideq', 1),
('KN', 'KENITRA', 4),
('R4', 'KHEMISSET', 4),
('MD', 'Médiouna', 6),
('M1', 'Mohammedia', 6),
('NO', 'Nouaceur', 6),
('OU', 'Oualidia', 6),
('R1', 'RABAT', 4),
('F2', 'SAFROU', 3),
('R2', 'SALE', 4),
('ST', 'Settat', 6),
('SB', 'Sidi Benno', 6),
('TA', 'Tanger', 1),
('R3', 'TEMARA', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adhesion`
--
ALTER TABLE `adhesion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_code_socie` (`id_entre`);

--
-- Indexes for table `banque`
--
ALTER TABLE `banque`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `categ`
--
ALTER TABLE `categ`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD KEY `fk_secteur` (`secteur`),
  ADD KEY `fk_direction` (`type_direction`);

--
-- Indexes for table `cotis`
--
ALTER TABLE `cotis`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `dossiersociete`
--
ALTER TABLE `dossiersociete`
  ADD PRIMARY KEY (`numcertif`),
  ADD UNIQUE KEY `registre` (`registre`);

--
-- Indexes for table `etat_demande`
--
ALTER TABLE `etat_demande`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id_fonction`);

--
-- Indexes for table `juridique`
--
ALTER TABLE `juridique`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `ministere`
--
ALTER TABLE `ministere`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `nature_dem`
--
ALTER TABLE `nature_dem`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `qualificationsec`
--
ALTER TABLE `qualificationsec`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `fk_secQ` (`Codesec`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `secteur`
--
ALTER TABLE `secteur`
  ADD PRIMARY KEY (`code`),
  ADD KEY `fk_catego` (`categorie`),
  ADD KEY `fk_ministe` (`type_minister`);

--
-- Indexes for table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `titre`
--
ALTER TABLE `titre`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_type` (`type_user`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`nom`),
  ADD KEY `fk_region` (`region`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adhesion`
--
ALTER TABLE `adhesion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=573;

--
-- AUTO_INCREMENT for table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nature_dem`
--
ALTER TABLE `nature_dem`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `societe`
--
ALTER TABLE `societe`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=577;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adhesion`
--
ALTER TABLE `adhesion`
  ADD CONSTRAINT `fk_code_socie` FOREIGN KEY (`id_entre`) REFERENCES `societe` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `fk_direction` FOREIGN KEY (`type_direction`) REFERENCES `direction` (`Code`),
  ADD CONSTRAINT `fk_secteur` FOREIGN KEY (`secteur`) REFERENCES `secteur` (`code`);

--
-- Constraints for table `qualificationsec`
--
ALTER TABLE `qualificationsec`
  ADD CONSTRAINT `fk_secQ` FOREIGN KEY (`Codesec`) REFERENCES `secteur` (`code`);

--
-- Constraints for table `secteur`
--
ALTER TABLE `secteur`
  ADD CONSTRAINT `fk_catego` FOREIGN KEY (`categorie`) REFERENCES `categ` (`code`),
  ADD CONSTRAINT `fk_ministe` FOREIGN KEY (`type_minister`) REFERENCES `ministere` (`code`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`type_user`) REFERENCES `type` (`id`);

--
-- Constraints for table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `fk_region` FOREIGN KEY (`region`) REFERENCES `region` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
