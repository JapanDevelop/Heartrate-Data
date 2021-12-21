-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 01:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `hrdata`
--

CREATE TABLE `hrdata` (
  `id` int(100) NOT NULL,
  `hr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hrdata`
--

INSERT INTO `hrdata` (`id`, `hr`, `time`) VALUES
(1, '', '2020-11-27 02:20:19'),
(2, '60', '2020-11-27 02:22:21'),
(3, '', '2020-11-27 02:34:02'),
(4, '0.00', '2020-11-27 04:15:14'),
(5, '0.00', '2020-11-27 04:15:24'),
(6, '0.00', '2020-11-27 04:15:34'),
(7, '0.00', '2020-11-27 04:15:44'),
(8, '0.00', '2020-11-27 04:15:54'),
(9, '0.00', '2020-11-27 04:16:04'),
(10, '0.00', '2020-11-27 04:16:14'),
(11, '0.00', '2020-11-27 04:16:24'),
(12, '0.00', '2020-11-27 04:16:34'),
(13, '0.00', '2020-11-27 04:16:45'),
(14, '0.00', '2020-11-27 04:16:55'),
(15, '0.00', '2020-11-27 04:17:05'),
(16, '0.00', '2020-11-27 04:17:15'),
(17, '0.00', '2020-11-27 04:17:25'),
(18, '0.00', '2020-11-27 04:17:35'),
(19, '0.00', '2020-11-27 04:17:45'),
(20, '0.00', '2020-11-27 04:17:55'),
(21, '0.00', '2020-11-27 04:18:05'),
(22, '0.00', '2020-11-27 04:18:15'),
(23, '0.00', '2020-11-27 04:18:25'),
(24, '0.00', '2020-11-27 04:18:35'),
(25, '0.00', '2020-11-27 04:18:45'),
(26, '0.00', '2020-11-27 04:18:55'),
(27, '0.00', '2020-11-27 04:19:05'),
(28, '0.00', '2020-11-27 04:19:15'),
(29, '0.00', '2020-11-27 04:19:25'),
(30, '0.00', '2020-11-27 04:19:35'),
(31, '0.00', '2020-11-27 04:19:45'),
(32, '0.00', '2020-11-27 04:19:55'),
(33, '0.00', '2020-11-27 04:20:05'),
(34, '0.00', '2020-11-27 04:20:15'),
(35, '0.00', '2020-11-27 04:20:26'),
(36, '0.00', '2020-11-27 04:20:36'),
(37, '0.00', '2020-11-27 04:20:46'),
(38, '0.00', '2020-11-27 04:20:56'),
(39, '0.00', '2020-11-27 04:21:06'),
(40, '0.00', '2020-11-27 04:21:16'),
(41, '0.00', '2020-11-27 04:21:26'),
(42, '0.00', '2020-11-27 04:21:36'),
(43, '0.00', '2020-11-27 04:21:46'),
(44, '0.00', '2020-11-27 04:21:56'),
(45, '0.00', '2020-11-27 04:22:06'),
(46, '0.00', '2020-11-27 04:22:16'),
(47, '0.00', '2020-11-27 04:22:26'),
(48, '0.00', '2020-11-27 04:22:36'),
(49, '0.00', '2020-11-27 04:22:46'),
(50, '0.00', '2020-11-27 04:22:56'),
(51, '0.00', '2020-11-27 04:23:06'),
(52, '0.00', '2020-11-27 04:32:31'),
(53, '0.00', '2020-11-27 04:32:36'),
(54, '0.00', '2020-11-27 04:32:42'),
(55, '0.00', '2020-11-27 04:32:48'),
(56, '0.00', '2020-11-27 04:32:54'),
(57, '0.00', '2020-11-27 04:33:02'),
(58, '0.00', '2020-11-27 04:33:09'),
(59, '0.00', '2020-11-27 04:33:14'),
(60, '0.00', '2020-11-27 04:33:20'),
(61, '0.00', '2020-11-27 04:33:25'),
(62, '0.00', '2020-11-27 04:33:31'),
(63, '0.00', '2020-11-27 04:33:37'),
(64, '0.00', '2020-11-27 04:33:42'),
(65, '0.00', '2020-11-27 04:33:48'),
(66, '0.00', '2020-11-27 04:33:53'),
(67, '0.00', '2020-11-27 04:33:59'),
(68, '0.00', '2020-11-27 04:34:05'),
(69, '0.00', '2020-11-27 04:34:10'),
(70, '0.00', '2020-11-27 04:34:16'),
(71, '0.00', '2020-11-27 04:34:21'),
(72, '0.00', '2020-11-27 04:34:27'),
(73, '0.00', '2020-11-27 04:34:33'),
(74, '0.00', '2020-11-27 04:34:38'),
(75, '0.00', '2020-11-27 04:34:44'),
(76, '0.00', '2020-11-27 04:34:49'),
(77, '0.00', '2020-11-27 04:34:55'),
(78, '0.00', '2020-11-27 04:35:00'),
(79, '0.00', '2020-11-27 04:35:06'),
(80, '0.00', '2020-11-27 04:35:11'),
(81, '0.00', '2020-11-27 04:35:17'),
(82, '0.00', '2020-11-27 04:35:22'),
(83, '0.00', '2020-11-27 04:35:28'),
(84, '0.00', '2020-11-27 04:35:34'),
(85, '0.00', '2020-11-27 04:35:39'),
(86, '0.00', '2020-11-27 04:35:45'),
(87, '0.00', '2020-11-27 04:35:50'),
(88, '0.00', '2020-11-27 04:35:56'),
(89, '0.00', '2020-11-27 04:36:01'),
(90, '0.00', '2020-11-27 04:36:07'),
(91, '0.00', '2020-11-27 04:36:12'),
(92, '0.00', '2020-11-27 04:36:18'),
(93, '0.00', '2020-11-27 04:36:24'),
(94, '0.00', '2020-11-27 04:36:29'),
(95, '0.00', '2020-11-27 04:36:35'),
(96, '0.00', '2020-11-27 04:36:40'),
(97, '0.00', '2020-11-27 04:36:46'),
(98, '0.00', '2020-11-27 04:36:51'),
(99, '0.00', '2020-11-27 04:36:57'),
(100, '0.00', '2020-11-27 04:37:02'),
(101, '0.00', '2020-11-27 04:37:08'),
(102, '0.00', '2020-11-27 04:37:14'),
(103, '0.00', '2020-11-27 04:37:44'),
(104, '0.00', '2020-11-27 04:37:49'),
(105, '0.00', '2020-11-27 04:37:54'),
(106, '0.00', '2020-11-27 04:37:59'),
(107, '0.00', '2020-11-27 04:38:04'),
(108, '0.00', '2020-11-27 04:38:09'),
(109, '0.00', '2020-11-27 04:38:14'),
(110, '0.00', '2020-11-27 04:38:20'),
(111, '0.00', '2020-11-27 04:38:25'),
(112, '0.00', '2020-11-27 04:38:30'),
(113, '0.00', '2020-11-27 04:38:35'),
(114, '0.00', '2020-11-27 04:38:40'),
(115, '0.00', '2020-11-27 04:38:45'),
(116, '0.00', '2020-11-27 04:38:50'),
(117, '0.00', '2020-11-27 04:38:55'),
(118, '0.00', '2020-11-27 04:39:00'),
(119, '0.00', '2020-11-27 04:39:05'),
(120, '0.00', '2020-11-27 04:39:10'),
(121, '0.00', '2020-11-27 04:39:15'),
(122, '0.00', '2020-11-27 04:39:20'),
(123, '0.00', '2020-11-27 04:39:25'),
(124, '0.00', '2020-11-27 04:39:30'),
(125, '0.00', '2020-11-27 04:39:35'),
(126, '0.00', '2020-11-27 04:39:40'),
(127, '0.00', '2020-11-27 04:39:45'),
(128, '0.00', '2020-11-27 04:39:50'),
(129, '0.00', '2020-11-27 04:39:56'),
(130, '0.00', '2020-11-27 04:40:01'),
(131, '0.00', '2020-11-27 04:40:06'),
(132, '0.00', '2020-11-27 04:40:11'),
(133, '0.00', '2020-11-27 04:40:16'),
(134, '0.00', '2020-11-27 05:00:38'),
(135, '0.00', '2020-11-27 05:00:43'),
(136, '0.00', '2020-11-27 05:00:48'),
(137, '0.00', '2020-11-27 05:00:53'),
(138, '0.00', '2020-11-27 05:00:59'),
(139, '0.00', '2020-11-27 05:01:04'),
(140, '0.00', '2020-11-27 05:01:09'),
(141, '0.00', '2020-11-27 05:01:14'),
(142, '0.00', '2020-11-27 05:01:19'),
(143, '0.00', '2020-11-27 05:01:24'),
(144, '0.00', '2020-11-27 05:01:29'),
(145, '0.00', '2020-11-27 05:01:34'),
(146, '0.00', '2020-11-27 05:01:39'),
(147, '0.00', '2020-11-27 05:01:44'),
(148, '0.00', '2020-11-27 05:01:49'),
(149, '0.00', '2020-11-27 05:01:54'),
(150, '0.00', '2020-11-27 05:01:59'),
(151, '0.00', '2020-11-27 05:02:04'),
(152, '0.00', '2020-11-27 05:02:09'),
(153, '0.00', '2020-11-27 05:02:14'),
(154, '0.00', '2020-11-27 05:02:19'),
(155, '0.00', '2020-11-27 05:02:24'),
(156, '0.00', '2020-11-27 05:02:29'),
(157, '0.00', '2020-11-27 05:02:34'),
(158, '0.00', '2020-11-27 05:02:40'),
(159, '0.00', '2020-11-27 05:02:45'),
(160, '0.00', '2020-11-27 05:02:50'),
(161, '0.00', '2020-11-27 05:02:55'),
(162, '0.00', '2020-11-27 05:03:00'),
(163, '0.00', '2020-11-27 05:10:11'),
(164, '0.00', '2020-11-27 05:10:19'),
(165, '0.00', '2020-11-27 05:10:25'),
(166, '0.00', '2020-11-27 05:10:30'),
(167, '0.00', '2020-11-27 05:10:35'),
(168, '0.00', '2020-11-27 05:10:40'),
(169, '0.00', '2020-11-27 05:10:45'),
(170, '0.00', '2020-11-27 05:10:50'),
(171, '0.00', '2020-11-27 05:10:55'),
(172, '0.00', '2020-11-27 05:11:00'),
(173, '0.00', '2020-11-27 05:11:05'),
(174, '0.00', '2020-11-27 05:11:10'),
(175, '0.00', '2020-11-27 05:11:15'),
(176, '0.00', '2020-11-27 05:11:20'),
(177, '0.00', '2020-11-27 05:11:25'),
(178, '0.00', '2020-11-27 05:11:31'),
(179, '0.00', '2020-11-27 05:11:36'),
(180, '0.00', '2020-11-27 05:11:41'),
(181, '0.00', '2020-11-27 05:11:46'),
(182, '0.00', '2020-11-27 05:11:51'),
(183, '0.00', '2020-11-27 05:11:56'),
(184, '0.00', '2020-11-27 05:12:01'),
(185, '0.00', '2020-11-27 05:12:06'),
(186, '0.00', '2020-11-27 05:12:11'),
(187, '0.00', '2020-11-27 05:12:16'),
(188, '0.00', '2020-11-27 05:12:22'),
(189, '0.00', '2020-11-27 05:12:57'),
(190, '0.00', '2020-11-27 05:13:07'),
(191, '0.00', '2020-11-27 05:13:17'),
(192, '0.00', '2020-11-27 05:13:27'),
(193, '0.00', '2020-11-27 05:13:37'),
(194, '0.00', '2020-11-27 05:13:47'),
(195, '0.00', '2020-11-27 05:13:57'),
(196, '0.00', '2020-11-27 05:14:07'),
(197, '0.00', '2020-11-27 05:14:17'),
(198, '0.00', '2020-11-27 05:14:59'),
(199, '0.00', '2020-11-27 05:15:14'),
(200, '0.00', '2020-11-27 05:15:29'),
(201, '0.00', '2020-11-27 05:15:44'),
(202, '0.00', '2020-11-27 05:15:59'),
(203, '0.00', '2020-11-27 05:16:14'),
(204, '0.00', '2020-11-27 05:16:29'),
(205, '2.53', '2020-11-27 05:17:22'),
(206, '2.53', '2020-11-27 05:17:27'),
(207, '2.53', '2020-11-27 05:17:32'),
(208, '2.53', '2020-11-27 05:17:37'),
(209, '2.53', '2020-11-27 05:17:42'),
(210, '2.53', '2020-11-27 05:17:47'),
(211, '2.53', '2020-11-27 05:17:52'),
(212, '2.53', '2020-11-27 05:17:57'),
(213, '2.53', '2020-11-27 05:18:02'),
(214, '2.53', '2020-11-27 05:18:07'),
(215, '2.53', '2020-11-27 05:18:13'),
(216, '2.53', '2020-11-27 05:18:18'),
(217, '2.53', '2020-11-27 05:18:23'),
(218, '2.53', '2020-11-27 05:18:28'),
(219, '2.53', '2020-11-27 05:18:33'),
(220, '2.53', '2020-11-27 05:18:38'),
(221, '2.53', '2020-11-27 05:18:43'),
(222, '2.53', '2020-11-27 05:18:48'),
(223, '2.53', '2020-11-27 05:18:53'),
(224, '2.53', '2020-11-27 05:18:58'),
(225, '2.53', '2020-11-27 05:19:03'),
(226, '2.53', '2020-11-27 05:19:08'),
(227, '2.53', '2020-11-27 05:19:13'),
(228, '2.53', '2020-11-27 05:19:18'),
(229, '2.53', '2020-11-27 05:19:23'),
(230, '2.53', '2020-11-27 05:19:28'),
(231, '2.53', '2020-11-27 05:19:33'),
(232, '2.53', '2020-11-27 05:19:38'),
(233, '2.53', '2020-11-27 05:19:43'),
(234, '2.53', '2020-11-27 05:19:48'),
(235, '2.53', '2020-11-27 05:19:54'),
(236, '2.53', '2020-11-27 05:19:59'),
(237, '2.53', '2020-11-27 05:20:04'),
(238, '2.53', '2020-11-27 05:20:09'),
(239, '2.53', '2020-11-27 05:20:14'),
(240, '2.53', '2020-11-27 05:20:19'),
(241, '2.53', '2020-11-27 05:20:24'),
(242, '2.53', '2020-11-27 05:20:29'),
(243, '2.53', '2020-11-27 05:20:34'),
(244, '2.53', '2020-11-27 05:20:39'),
(245, '2.53', '2020-11-27 05:20:44'),
(246, '2.53', '2020-11-27 05:20:49'),
(247, '2.53', '2020-11-27 05:20:54'),
(248, '2.53', '2020-11-27 05:20:59'),
(249, '2.53', '2020-11-27 05:21:04'),
(250, '2.53', '2020-11-27 05:21:09'),
(251, '2.53', '2020-11-27 05:21:14'),
(252, '2.53', '2020-11-27 05:21:19'),
(253, '2.53', '2020-11-27 05:21:24'),
(254, '2.53', '2020-11-27 05:21:29'),
(255, '2.53', '2020-11-27 05:21:35'),
(256, '2.53', '2020-11-27 05:21:40'),
(257, '2.53', '2020-11-27 05:21:45'),
(258, '2.53', '2020-11-27 05:21:50'),
(259, '2.53', '2020-11-27 05:21:55'),
(260, '10.66', '2020-11-27 06:10:51'),
(261, '18.63', '2020-11-27 06:10:56'),
(262, '18.63', '2020-11-27 06:11:01'),
(263, '18.63', '2020-11-27 06:11:06'),
(264, '18.63', '2020-11-27 06:11:11'),
(265, '18.63', '2020-11-27 06:11:16'),
(266, '18.63', '2020-11-27 06:11:21'),
(267, '18.63', '2020-11-27 06:11:26'),
(268, '18.63', '2020-11-27 06:11:31'),
(269, '18.63', '2020-11-27 06:11:36'),
(270, '18.63', '2020-11-27 06:11:41'),
(271, '18.63', '2020-11-27 06:11:46'),
(272, '18.63', '2020-11-27 06:11:51'),
(273, '18.63', '2020-11-27 06:11:56'),
(274, '18.63', '2020-11-27 06:12:01'),
(275, '18.63', '2020-11-27 06:12:06'),
(276, '18.63', '2020-11-27 06:12:11'),
(277, '18.63', '2020-11-27 06:12:16'),
(278, '18.63', '2020-11-27 06:12:22'),
(279, '18.63', '2020-11-27 06:12:27'),
(280, '18.63', '2020-11-27 06:12:32'),
(281, '18.63', '2020-11-27 06:12:37'),
(282, '18.63', '2020-11-27 06:12:42'),
(283, '18.63', '2020-11-27 06:12:47'),
(284, '18.63', '2020-11-27 06:12:52'),
(285, '18.63', '2020-11-27 06:12:57'),
(286, '18.63', '2020-11-27 06:13:02'),
(287, '18.63', '2020-11-27 06:13:07'),
(288, '18.63', '2020-11-27 06:13:12'),
(289, '18.63', '2020-11-27 06:13:17'),
(290, '0.41', '2020-11-27 06:13:22'),
(291, '0.41', '2020-11-27 06:13:27'),
(292, '0.41', '2020-11-27 06:13:32'),
(293, '0.41', '2020-11-27 06:13:37'),
(294, '0.41', '2020-11-27 06:13:42'),
(295, '0.41', '2020-11-27 06:13:47'),
(296, '0.41', '2020-11-27 06:13:52'),
(297, '0.41', '2020-11-27 06:13:57'),
(298, '0.41', '2020-11-27 06:14:02'),
(299, '0.41', '2020-11-27 06:14:08'),
(300, '0.41', '2020-11-27 06:14:13'),
(301, '0.41', '2020-11-27 06:14:18'),
(302, '0.41', '2020-11-27 06:14:23'),
(303, '0.41', '2020-11-27 06:14:28'),
(304, '0.41', '2020-11-27 06:14:33'),
(305, '0.41', '2020-11-27 06:14:38'),
(306, '0.41', '2020-11-27 06:14:43'),
(307, '0.41', '2020-11-27 06:14:48'),
(308, '0.41', '2020-11-27 06:14:53'),
(309, '0.41', '2020-11-27 06:14:58'),
(310, '0.41', '2020-11-27 06:15:03'),
(311, '0.41', '2020-11-27 06:15:08'),
(312, '0.41', '2020-11-27 06:15:13'),
(313, '0.41', '2020-11-27 06:15:18'),
(314, '0.41', '2020-11-27 06:15:23'),
(315, '0.41', '2020-11-27 06:15:28'),
(316, '0.41', '2020-11-27 06:15:33'),
(317, '0.41', '2020-11-27 06:15:38'),
(318, '0.41', '2020-11-27 06:15:43'),
(319, '0.41', '2020-11-27 06:15:48'),
(320, '0.40', '2020-11-27 06:15:53'),
(321, '0.40', '2020-11-27 06:15:59'),
(322, '0.40', '2020-11-27 06:16:04'),
(323, '0.40', '2020-11-27 06:16:09'),
(324, '0.40', '2020-11-27 06:16:14'),
(325, '0.40', '2020-11-27 06:16:19'),
(326, '0.40', '2020-11-27 06:16:24'),
(327, '0.40', '2020-11-27 06:16:29'),
(328, '0.40', '2020-11-27 06:16:34'),
(329, '0.40', '2020-11-27 06:16:39'),
(330, '0.40', '2020-11-27 06:16:44'),
(331, '0.40', '2020-11-27 06:16:49'),
(332, '0.40', '2020-11-27 06:16:54'),
(333, '0.40', '2020-11-27 06:16:59'),
(334, '0.40', '2020-11-27 06:17:04'),
(335, '0.40', '2020-11-27 06:17:09'),
(336, '0.40', '2020-11-27 06:17:14'),
(337, '0.40', '2020-11-27 06:17:19'),
(338, '0.40', '2020-11-27 06:17:24'),
(339, '0.40', '2020-11-27 06:17:29'),
(340, '0.40', '2020-11-27 06:17:34'),
(341, '0.40', '2020-11-27 06:17:39'),
(342, '0.40', '2020-11-27 06:17:44'),
(343, '0.40', '2020-11-27 06:17:50'),
(344, '0.40', '2020-11-27 06:17:55'),
(345, '0.40', '2020-11-27 06:18:00'),
(346, '0.40', '2020-11-27 06:18:05'),
(347, '0.40', '2020-11-27 06:18:10'),
(348, '0.40', '2020-11-27 06:18:15'),
(349, '0.40', '2020-11-27 06:18:20'),
(350, '0.40', '2020-11-27 06:18:25'),
(351, '0.40', '2020-11-27 06:18:30'),
(352, '0.37', '2020-11-27 06:18:35'),
(353, '0.37', '2020-11-27 06:18:40'),
(354, '0.37', '2020-11-27 06:18:45'),
(355, '123', '2020-11-27 06:19:28'),
(356, '333', '2020-11-27 06:21:04'),
(357, '333', '2020-11-27 06:22:59'),
(358, '444', '2020-11-27 06:22:59'),
(359, '555', '2020-11-27 06:22:59'),
(360, '2.42', '2020-11-27 06:39:30'),
(361, '2.42', '2020-11-27 06:39:35'),
(362, '2.42', '2020-11-27 06:39:41'),
(363, '2.42', '2020-11-27 06:39:46'),
(364, '2.42', '2020-11-27 06:39:51'),
(365, '2.42', '2020-11-27 06:39:56'),
(366, '2.42', '2020-11-27 06:40:01'),
(367, '2.42', '2020-11-27 06:40:06'),
(368, '2.42', '2020-11-27 06:40:11'),
(369, '2.42', '2020-11-27 06:40:16'),
(370, '2.42', '2020-11-27 06:40:21'),
(371, '2.42', '2020-11-27 06:40:26'),
(372, '2.42', '2020-11-27 06:40:31'),
(373, '2.42', '2020-11-27 06:40:36'),
(374, '2.42', '2020-11-27 06:40:41'),
(375, '2.42', '2020-11-27 06:40:46'),
(376, '2.42', '2020-11-27 06:40:51'),
(377, '2.42', '2020-11-27 06:40:56'),
(378, '2.42', '2020-11-27 06:41:01'),
(379, '2.42', '2020-11-27 06:41:06'),
(380, '2.42', '2020-11-27 06:41:11'),
(381, '0.57', '2020-11-27 06:41:16'),
(382, '0.57', '2020-11-27 06:41:21'),
(383, '0.57', '2020-11-27 06:41:26'),
(384, '0.57', '2020-11-27 06:41:31'),
(385, '0.57', '2020-11-27 06:41:36'),
(386, '0.57', '2020-11-27 06:41:42'),
(387, '0.57', '2020-11-27 06:41:47'),
(388, '0.57', '2020-11-27 06:41:52'),
(389, '0.57', '2020-11-27 06:41:57'),
(390, '0.57', '2020-11-27 06:42:02'),
(391, '0.57', '2020-11-27 06:42:07'),
(392, '0.57', '2020-11-27 06:42:12'),
(393, '0.57', '2020-11-27 06:42:17'),
(394, '0.57', '2020-11-27 06:42:22'),
(395, '0.57', '2020-11-27 06:42:27'),
(396, '0.57', '2020-11-27 06:42:32'),
(397, '0.57', '2020-11-27 06:42:37'),
(398, '0.57', '2020-11-27 06:42:42'),
(399, '0.57', '2020-11-27 06:42:47'),
(400, '0.57', '2020-11-27 06:42:52'),
(401, '0.57', '2020-11-27 06:42:57'),
(402, '0.57', '2020-11-27 06:43:02'),
(403, '0.57', '2020-11-27 06:43:07'),
(404, '0.57', '2020-11-27 06:43:12'),
(405, '0.57', '2020-11-27 06:43:18'),
(406, '0.57', '2020-11-27 06:43:23'),
(407, '0.57', '2020-11-27 06:43:28'),
(408, '0.57', '2020-11-27 06:43:33'),
(409, '0.57', '2020-11-27 06:43:38'),
(410, '0.57', '2020-11-27 06:43:43'),
(411, '0.57', '2020-11-27 06:43:48'),
(412, '0.57', '2020-11-27 06:43:53'),
(413, '0.57', '2020-11-27 06:43:58'),
(414, '0.57', '2020-11-27 06:44:03'),
(415, '0.57', '2020-11-27 06:44:08'),
(416, '0.57', '2020-11-27 06:44:13'),
(417, '0.57', '2020-11-27 06:44:18'),
(418, '0.57', '2020-11-27 06:44:23'),
(419, '0.57', '2020-11-27 06:44:28'),
(420, '0.57', '2020-11-27 06:44:33'),
(421, '0.57', '2020-11-27 06:44:38'),
(422, '0.57', '2020-11-27 06:44:43'),
(423, '0.57', '2020-11-27 06:44:48'),
(424, '0.57', '2020-11-27 06:44:53'),
(425, '0.57', '2020-11-27 06:44:58'),
(426, '0.57', '2020-11-27 06:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `jprookie`
--

CREATE TABLE `jprookie` (
  `time` int(255) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bdate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(50) NOT NULL,
  `bpm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timebpm` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jprookie`
--

INSERT INTO `jprookie` (`time`, `username`, `password`, `fname`, `lname`, `bdate`, `age`, `bpm`, `timebpm`) VALUES
(1, 'jprookie', '', 'Nattasit', 'sukparsert', '2021-01-05', 40, '', '2021-01-01 14:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `jprookie2`
--

CREATE TABLE `jprookie2` (
  `time` int(255) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bdate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(50) NOT NULL,
  `bpm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timebpm` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jprookie2`
--

INSERT INTO `jprookie2` (`time`, `username`, `password`, `fname`, `lname`, `bdate`, `age`, `bpm`, `timebpm`) VALUES
(1, 'jprookie2', '', 'Nattasit', 'sukparsert', '2021-01-05', 40, '', '2021-01-01 14:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `jprookie3`
--

CREATE TABLE `jprookie3` (
  `time` int(255) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bdate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(50) NOT NULL,
  `bpm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timebpm` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jprookie3`
--

INSERT INTO `jprookie3` (`time`, `username`, `password`, `fname`, `lname`, `bdate`, `age`, `bpm`, `timebpm`) VALUES
(1, 'jprookie3', '', 'Nattasit', 'sukparsert', '2021-01-05', 40, '', '2021-01-01 14:11:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hrdata`
--
ALTER TABLE `hrdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jprookie`
--
ALTER TABLE `jprookie`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `jprookie2`
--
ALTER TABLE `jprookie2`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `jprookie3`
--
ALTER TABLE `jprookie3`
  ADD PRIMARY KEY (`time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hrdata`
--
ALTER TABLE `hrdata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `jprookie`
--
ALTER TABLE `jprookie`
  MODIFY `time` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jprookie2`
--
ALTER TABLE `jprookie2`
  MODIFY `time` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jprookie3`
--
ALTER TABLE `jprookie3`
  MODIFY `time` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;