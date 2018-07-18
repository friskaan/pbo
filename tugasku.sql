-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 06:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `selesai_pada` datetime DEFAULT NULL,
  `dibuat_pada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `nama`, `selesai_pada`, `dibuat_pada`) VALUES
(1, 'BAJU', NULL, '2018-07-18 23:07:39'),
(2, 'KEMEJA', NULL, '2018-07-18 23:07:44'),
(3, 'JAKET', NULL, '2018-07-18 23:07:49'),
(4, 'CELANA JEANS', NULL, '2018-07-18 23:07:57'),
(5, 'DRESS', NULL, '2018-07-18 23:08:12'),
(6, 'SEPATU', NULL, '2018-07-18 23:08:17'),
(7, 'KAOS KAKI', NULL, '2018-07-18 23:08:30'),
(8, 'SENDAL', NULL, '2018-07-18 23:08:44'),
(9, 'TOPI', NULL, '2018-07-18 23:08:49'),
(10, 'PIYAMA', NULL, '2018-07-18 23:09:00'),
(11, 'HOODIE', NULL, '2018-07-18 23:09:12'),
(12, 'SWEATER', NULL, '2018-07-18 23:09:34'),
(13, 'JOGGER', NULL, '2018-07-18 23:09:46'),
(14, 'JAKET JEANS', NULL, '2018-07-18 23:10:06'),
(15, 'TAS', NULL, '2018-07-18 23:10:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
