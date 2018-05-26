-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 06:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventnotifier`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffeshops`
--

CREATE TABLE `coffeshops` (
  `id` int(6) UNSIGNED NOT NULL,
  `coffe_shop_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `coffe_shop_address` varchar(30) COLLATE utf8_bin NOT NULL,
  `coffe_shop_phone` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `coffe_shop_email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `coffe_shop_reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `coffeshops`
--

INSERT INTO `coffeshops` (`id`, `coffe_shop_name`, `coffe_shop_address`, `coffe_shop_phone`, `coffe_shop_email`, `coffe_shop_reg_date`) VALUES
(64, '1', ' 1 ', ' 1 ', ' 1 ', '2018-05-26 16:24:32'),
(65, '2', ' 2 ', ' 2 ', ' 2 ', '2018-05-26 16:25:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffeshops`
--
ALTER TABLE `coffeshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffeshops`
--
ALTER TABLE `coffeshops`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
