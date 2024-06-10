-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2024 pada 03.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekspor`
--

CREATE TABLE `ekspor` (
  `id_ekspor` int(11) NOT NULL,
  `periode` date NOT NULL,
  `nilai_ekspor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ekspor`
--

INSERT INTO `ekspor` (`id_ekspor`, `periode`, `nilai_ekspor`) VALUES
(1, '1993-01-01', 864.3),
(2, '1993-02-01', 767.5),
(3, '1993-03-01', 892.2),
(4, '1993-04-01', 744),
(5, '1993-05-01', 888.3),
(6, '1993-06-01', 825.9),
(7, '1993-07-01', 847.3),
(8, '1993-08-01', 828.7),
(9, '1993-09-01', 775.3),
(10, '1993-10-01', 807.1),
(11, '1993-11-01', 747.9),
(12, '1993-12-01', 757.4),
(13, '1994-01-01', 763.3),
(14, '1994-02-01', 706.6),
(15, '1994-03-01', 751.8),
(16, '1994-04-01', 723),
(17, '1994-05-01', 756.5),
(18, '1994-06-01', 842.6),
(19, '1994-07-01', 822.8),
(20, '1994-08-01', 856.5),
(21, '1994-09-01', 754.6),
(22, '1994-10-01', 829),
(23, '1994-11-01', 878.6),
(24, '1994-12-01', 1008.3),
(25, '1995-01-01', 891.6),
(26, '1995-02-01', 817.2),
(27, '1995-03-01', 883.6),
(28, '1995-04-01', 881),
(29, '1995-05-01', 935.5),
(30, '1995-06-01', 858.4),
(31, '1995-07-01', 825.1),
(32, '1995-08-01', 862.9),
(33, '1995-09-01', 815.2),
(34, '1995-10-01', 791.8),
(35, '1995-11-01', 873.1),
(36, '1995-12-01', 1029.1),
(37, '1996-01-01', 933.1),
(38, '1996-02-01', 868),
(39, '1996-03-01', 977.5),
(40, '1996-04-01', 939.4),
(41, '1996-05-01', 871),
(42, '1996-06-01', 837.7),
(43, '1996-07-01', 911.1),
(44, '1996-08-01', 972.1),
(45, '1996-09-01', 947.8),
(46, '1996-10-01', 1135.5),
(47, '1996-11-01', 1099.1),
(48, '1996-12-01', 1229.7),
(49, '1997-01-01', 1222.8),
(50, '1997-02-01', 1060.2),
(51, '1997-03-01', 970.5),
(52, '1997-04-01', 973.6),
(53, '1997-05-01', 932),
(54, '1997-06-01', 838.7),
(55, '1997-07-01', 887),
(56, '1997-08-01', 876.6),
(57, '1997-09-01', 916.9),
(58, '1997-10-01', 993.5),
(59, '1997-11-01', 947.7),
(60, '1997-12-01', 1003.1),
(61, '1998-01-01', 804.5),
(62, '1998-02-01', 754.2),
(63, '1998-03-01', 715.1),
(64, '1998-04-01', 514),
(65, '1998-05-01', 647.9),
(66, '1998-06-01', 619.5),
(67, '1998-07-01', 642.6),
(68, '1998-08-01', 609.6),
(69, '1998-09-01', 623.8),
(70, '1998-10-01', 658.6),
(71, '1998-11-01', 614.8),
(72, '1998-12-01', 667.5),
(73, '1999-01-01', 644.3),
(74, '1999-02-01', 579.1),
(75, '1999-03-01', 645.9),
(76, '1999-04-01', 648),
(77, '1999-05-01', 683.1),
(78, '1999-06-01', 556.8),
(79, '1999-07-01', 866),
(80, '1999-08-01', 1014.2),
(81, '1999-09-01', 959.2),
(82, '1999-10-01', 1059.1),
(83, '1999-11-01', 988.6),
(84, '1999-12-01', 1148),
(85, '2000-01-01', 1144.6),
(86, '2000-02-01', 1100.4),
(87, '2000-03-01', 1104),
(88, '2000-04-01', 987.6),
(89, '2000-05-01', 1004.6),
(90, '2000-06-01', 1185.8),
(91, '2000-07-01', 1157.5),
(92, '2000-08-01', 1310.8),
(93, '2000-09-01', 1339.5),
(94, '2000-10-01', 1399.1),
(95, '2000-11-01', 1320.3),
(96, '2000-12-01', 1312.4),
(97, '2001-01-01', 1215.1),
(98, '2001-02-01', 1106.1),
(99, '2001-03-01', 1359.4),
(100, '2001-04-01', 1061),
(101, '2001-05-01', 1150.1),
(102, '2001-06-01', 1088.3),
(103, '2001-07-01', 1083.5),
(104, '2001-08-01', 1010.5),
(105, '2001-09-01', 967.6),
(106, '2001-10-01', 895.1),
(107, '2001-11-01', 818.8),
(108, '2001-12-01', 866.2),
(109, '2002-01-01', 865.3),
(110, '2002-02-01', 812.3),
(111, '2002-03-01', 1012.3),
(112, '2002-04-01', 1019.7),
(113, '2002-05-01', 989.9),
(114, '2002-06-01', 967.4),
(115, '2002-07-01', 959.8),
(116, '2002-08-01', 1016.5),
(117, '2002-09-01', 1072.8),
(118, '2002-10-01', 1145.5),
(119, '2002-11-01', 1097.2),
(120, '2002-12-01', 1177.2),
(121, '2003-01-01', 1197.5),
(122, '2003-02-01', 1259.6),
(123, '2003-03-01', 1296.3),
(124, '2003-04-01', 1125.9),
(125, '2003-05-01', 1004.4),
(126, '2003-06-01', 1093.3),
(127, '2003-07-01', 999.1),
(128, '2003-08-01', 1254.5),
(129, '2003-09-01', 1160.6),
(130, '2003-10-01', 1026),
(131, '2003-11-01', 1059.1),
(132, '2003-12-01', 1167.4),
(133, '2004-01-01', 1200.5),
(134, '2004-02-01', 1141.2),
(135, '2004-03-01', 1198.6),
(136, '2004-04-01', 1181.7),
(137, '2004-05-01', 1358.8),
(138, '2004-06-01', 1352.1),
(139, '2004-07-01', 1254.7),
(140, '2004-08-01', 1325.5),
(141, '2004-09-01', 1473.7),
(142, '2004-10-01', 1426.3),
(143, '2004-11-01', 1392),
(144, '2004-12-01', 1340.2),
(145, '2005-01-01', 1521.1),
(146, '2005-02-01', 1468.5),
(147, '2005-03-01', 1574.7),
(148, '2005-04-01', 1536.6),
(149, '2005-05-01', 1792),
(150, '2005-06-01', 1826.8),
(151, '2005-07-01', 1826.4),
(152, '2005-08-01', 1855.3),
(153, '2005-09-01', 2078.2),
(154, '2005-10-01', 1985),
(155, '2005-11-01', 2107),
(156, '2005-12-01', 2517),
(157, '2006-01-01', 1824.8),
(158, '2006-02-01', 1637.3),
(159, '2006-03-01', 1687.5),
(160, '2006-04-01', 1692),
(161, '2006-05-01', 1789.3),
(162, '2006-06-01', 1782.9),
(163, '2006-07-01', 2099),
(164, '2006-08-01', 1852.4),
(165, '2006-09-01', 1601.1),
(166, '2006-10-01', 1597.5),
(167, '2006-11-01', 1750.4),
(168, '2006-12-01', 1895.2),
(169, '2007-01-01', 1224.6),
(170, '2007-02-01', 1342),
(171, '2007-03-01', 1774.7),
(172, '2007-04-01', 1569.1),
(173, '2007-05-01', 1403.6),
(174, '2007-06-01', 1516.7),
(175, '2007-07-01', 1624.7),
(176, '2007-08-01', 1797.8),
(177, '2007-09-01', 1719.8),
(178, '2007-10-01', 1819.7),
(179, '2007-11-01', 1613.8),
(180, '2007-12-01', 1825),
(181, '2008-01-01', 2243.9),
(182, '2008-02-01', 2381.1),
(183, '2008-03-01', 2767.2),
(184, '2008-04-01', 2481.2),
(185, '2008-05-01', 3225.5),
(186, '2008-06-01', 2995),
(187, '2008-07-01', 2882.5),
(188, '2008-08-01', 2956.3),
(189, '2008-09-01', 2455.5),
(190, '2008-10-01', 1885.5),
(191, '2008-11-01', 1445.5),
(192, '2008-12-01', 1407),
(193, '2009-01-01', 1025.5),
(194, '2009-02-01', 1024.5),
(195, '2009-03-01', 1281.6),
(196, '2009-04-01', 1253.9),
(197, '2009-05-01', 1136.7),
(198, '2009-06-01', 1452.1),
(199, '2009-07-01', 1488.9),
(200, '2009-08-01', 1653.6),
(201, '2009-09-01', 1749.7),
(202, '2009-10-01', 2111.5),
(203, '2009-11-01', 2337.4),
(204, '2009-12-01', 2502.9),
(205, '2010-01-01', 2344.9),
(206, '2010-02-01', 2175.3),
(207, '2010-03-01', 2168.6),
(208, '2010-04-01', 2204.6),
(209, '2010-05-01', 2369.3),
(210, '2010-06-01', 1901.5),
(211, '2010-07-01', 1881.4),
(212, '2010-08-01', 1993.5),
(213, '2010-09-01', 2082.9),
(214, '2010-10-01', 2841.9),
(215, '2010-11-01', 2816.4),
(216, '2010-12-01', 3259.3),
(217, '2011-01-01', 2615),
(218, '2011-02-01', 2612.5),
(219, '2011-03-01', 3061.8),
(220, '2011-04-01', 3628.3),
(221, '2011-05-01', 4072.8),
(222, '2011-06-01', 3591),
(223, '2011-07-01', 3802.5),
(224, '2011-08-01', 4091.6),
(225, '2011-09-01', 3931),
(226, '2011-10-01', 3062.7),
(227, '2011-11-01', 3522.8),
(228, '2011-12-01', 3485),
(229, '2012-01-01', 3142.6),
(230, '2012-02-01', 3355.5),
(231, '2012-03-01', 3486.1),
(232, '2012-04-01', 3560.7),
(233, '2012-05-01', 3724.9),
(234, '2012-06-01', 2899.7),
(235, '2012-07-01', 2919.7),
(236, '2012-08-01', 2783),
(237, '2012-09-01', 2770.5),
(238, '2012-10-01', 2650.6),
(239, '2012-11-01', 2717.1),
(240, '2012-12-01', 2966.9),
(241, '2013-01-01', 2653.7),
(242, '2013-02-01', 2567.6),
(243, '2013-03-01', 2928.3),
(244, '2013-04-01', 2452.1),
(245, '2013-05-01', 2926.2),
(246, '2013-06-01', 2800.4),
(247, '2013-07-01', 2282.6),
(248, '2013-08-01', 2720.5),
(249, '2013-09-01', 2414.7),
(250, '2013-10-01', 2715.2),
(251, '2013-11-01', 2766.8),
(252, '2013-12-01', 3405.1),
(253, '2014-01-01', 2501.7),
(254, '2014-02-01', 2729.1),
(255, '2014-03-01', 2641.3),
(256, '2014-04-01', 2651.4),
(257, '2014-05-01', 2375.7),
(258, '2014-06-01', 2786),
(259, '2014-07-01', 2496.3),
(260, '2014-08-01', 2598.2),
(261, '2014-09-01', 2622.6),
(262, '2014-10-01', 2413.2),
(263, '2014-11-01', 2035.4),
(264, '2014-12-01', 2168),
(265, '2015-01-01', 1959),
(266, '2015-02-01', 1753.4),
(267, '2015-03-01', 1988.9),
(268, '2015-04-01', 1458.2),
(269, '2015-05-01', 1392.7),
(270, '2015-06-01', 1439.9),
(271, '2015-07-01', 1421.8),
(272, '2015-08-01', 1530.9),
(273, '2015-09-01', 1453.6),
(274, '2015-10-01', 1379.6),
(275, '2015-11-01', 1497),
(276, '2015-12-01', 1299.5),
(277, '2016-01-01', 1108),
(278, '2016-02-01', 1113.3),
(279, '2016-03-01', 1239.3),
(280, '2016-04-01', 891.7),
(281, '2016-05-01', 958),
(282, '2016-06-01', 1187.4),
(283, '2016-07-01', 998.6),
(284, '2016-08-01', 1138.6),
(285, '2016-09-01', 1061.5),
(286, '2016-10-01', 1055.9),
(287, '2016-11-01', 1103),
(288, '2016-12-01', 1250.2),
(289, '2017-01-01', 1278.6),
(290, '2017-02-01', 1208.6),
(291, '2017-03-01', 1516.2),
(292, '2017-04-01', 1036.2),
(293, '2017-05-01', 1294.4),
(294, '2017-06-01', 1276.3),
(295, '2017-07-01', 1165),
(296, '2017-08-01', 1233.6),
(297, '2017-09-01', 1455),
(298, '2017-10-01', 1488.2),
(299, '2017-11-01', 1295.8),
(300, '2017-12-01', 1496.5),
(301, '2018-01-01', 1342.7),
(302, '2018-02-01', 1388.8),
(303, '2018-03-01', 1256.1),
(304, '2018-04-01', 1178.8),
(305, '2018-05-01', 1633.1),
(306, '2018-06-01', 1646.7),
(307, '2018-07-01', 1416.5),
(308, '2018-08-01', 1423.7),
(309, '2018-09-01', 1320.2),
(310, '2018-10-01', 1545.3),
(311, '2018-11-01', 1312.9),
(312, '2018-12-01', 1706.8),
(313, '2019-01-01', 1131.3),
(314, '2019-02-01', 1050.8),
(315, '2019-03-01', 1077.4),
(316, '2019-04-01', 688.1),
(317, '2019-05-01', 1054.2),
(318, '2019-06-01', 714.1),
(319, '2019-07-01', 1400.5),
(320, '2019-08-01', 842.9),
(321, '2019-09-01', 803),
(322, '2019-10-01', 860),
(323, '2019-11-01', 1033.7),
(324, '2019-12-01', 1133.3),
(325, '2020-01-01', 815.3),
(326, '2020-02-01', 805.2),
(327, '2020-03-01', 617.4),
(328, '2020-04-01', 562.1),
(329, '2020-05-01', 560.9),
(330, '2020-06-01', 567.4),
(331, '2020-07-01', 660.4),
(332, '2020-08-01', 599.6),
(333, '2020-09-01', 667.3),
(334, '2020-10-01', 614.5),
(335, '2020-11-01', 762.2),
(336, '2020-12-01', 1018.8),
(337, '2021-01-01', 883.8),
(338, '2021-02-01', 860.6),
(339, '2021-03-01', 951.5),
(340, '2021-04-01', 941.7),
(341, '2021-05-01', 940.6),
(342, '2021-06-01', 1239.3),
(343, '2021-07-01', 978.8),
(344, '2021-08-01', 1044.6),
(345, '2021-09-01', 934.8),
(346, '2021-10-01', 1064.3),
(347, '2021-11-01', 1339.5),
(348, '2021-12-01', 1068),
(349, '2022-01-01', 903.5),
(350, '2022-02-01', 1029.6),
(351, '2022-03-01', 1493.3),
(352, '2022-04-01', 1466.6),
(353, '2022-05-01', 1498.1),
(354, '2022-06-01', 1551.8),
(355, '2022-07-01', 1287.6),
(356, '2022-08-01', 1662.9),
(357, '2022-09-01', 1259),
(358, '2022-10-01', 1286.3),
(359, '2022-11-01', 1101.9),
(360, '2022-12-01', 1457.8),
(361, '2023-01-01', 1487.9),
(362, '2023-02-01', 1186.5),
(363, '2023-03-01', 1338.2),
(364, '2023-04-01', 1258.7),
(365, '2023-05-01', 1308.6),
(366, '2023-06-01', 1259.7),
(367, '2023-07-01', 1226.8),
(396, '2023-08-01', 1318.8),
(397, '2023-09-01', 1405.1),
(398, '2023-10-01', 1370.4),
(399, '2023-11-01', 1282.9),
(401, '2023-12-01', 1478.9);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekspor`
--
ALTER TABLE `ekspor`
  ADD PRIMARY KEY (`id_ekspor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekspor`
--
ALTER TABLE `ekspor`
  MODIFY `id_ekspor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
