-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2023 at 09:03 PM
-- Server version: 10.3.37-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwfiedvq_meals`
--

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `totalmeals` int(11) DEFAULT NULL,
  `deposit` int(11) DEFAULT NULL,
  `userstotalmeals` int(11) DEFAULT NULL,
  `bazarcost` int(255) DEFAULT NULL,
  `manage_user` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `bazar_details` varchar(255) DEFAULT NULL,
  `deposit_date` date DEFAULT NULL,
  `bazar_date` date DEFAULT NULL,
  `meal_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `username`, `totalmeals`, `deposit`, `userstotalmeals`, `bazarcost`, `manage_user`, `role`, `bazar_details`, `deposit_date`, `bazar_date`, `meal_date`, `status`) VALUES
(160, 'ezazjnr', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 'fahim', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 'istiak', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 'Nahiun', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 'royprottoy', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 'shawon', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 'Nahiun', NULL, 200, NULL, NULL, NULL, NULL, NULL, '2023-03-23', NULL, NULL, NULL),
(174, 'shawon', NULL, 360, NULL, NULL, NULL, NULL, NULL, '2023-03-23', NULL, NULL, NULL),
(175, 'shawon', NULL, NULL, NULL, 450, NULL, NULL, 'Chira 70, khejur 200, sola 90, tormus 90', NULL, '2023-03-23', NULL, NULL),
(176, 'Nahiun', NULL, NULL, NULL, 240, NULL, NULL, 'Lebu 30 kola 30 iftar 50 muri 10 doi 120', NULL, '2023-03-24', NULL, NULL),
(177, 'shawon', NULL, 30, NULL, NULL, NULL, NULL, NULL, '2023-03-24', NULL, NULL, NULL),
(178, 'Nahiun', NULL, 100, NULL, NULL, NULL, NULL, NULL, '2023-03-24', NULL, NULL, NULL),
(179, 'Nahiun', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24', NULL),
(180, 'shawon', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24', NULL),
(181, 'istiak', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24', NULL),
(182, 'Nahiun', NULL, 60, NULL, NULL, NULL, NULL, NULL, '2023-03-24', NULL, NULL, NULL),
(183, 'istiak', NULL, NULL, NULL, 60, NULL, NULL, 'Chini 60 à§³ ', NULL, '2023-03-24', NULL, NULL),
(184, 'istiak', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-25', NULL),
(185, 'Nahiun', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-25', NULL),
(186, 'shawon', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-25', NULL),
(187, 'Nahiun', NULL, NULL, NULL, 80, NULL, NULL, 'Lebu 40 iftar 40', NULL, '2023-03-25', NULL, NULL),
(188, 'istiak', NULL, 250, NULL, NULL, NULL, NULL, NULL, '2023-03-25', NULL, NULL, NULL),
(189, 'shawon', NULL, NULL, NULL, 110, NULL, NULL, 'vaja pora = 40 , muri 10, kola 30 .cini 30', NULL, '2023-03-26', NULL, NULL),
(190, 'istiak', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-26', NULL),
(191, 'Nahiun', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-26', NULL),
(192, 'royprottoy', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-26', NULL),
(193, 'shawon', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-26', NULL),
(194, 'istiak', NULL, 200, NULL, NULL, NULL, NULL, NULL, '2023-03-26', NULL, NULL, NULL),
(195, 'shawon', NULL, NULL, NULL, 298, NULL, NULL, 'chola 100, cini 58, doi 130 ,deli 10', NULL, '2023-03-27', NULL, NULL),
(196, 'Nahiun', NULL, NULL, NULL, 40, NULL, NULL, 'vaja pora = 40 ', NULL, '2023-03-27', NULL, NULL),
(197, 'fahim', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-27', NULL),
(198, 'istiak', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-27', NULL),
(199, 'Nahiun', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-27', NULL),
(200, 'royprottoy', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-27', NULL),
(201, 'shawon', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-27', NULL),
(202, 'fahim', NULL, 100, NULL, NULL, NULL, NULL, NULL, '2023-03-27', NULL, NULL, NULL),
(203, 'royprottoy', NULL, 100, NULL, NULL, NULL, NULL, NULL, '2023-03-27', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
