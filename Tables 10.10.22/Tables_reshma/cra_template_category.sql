-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 06:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cra_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cra_template_category`
--

CREATE TABLE `cra_template_category` (
  `id` int(11) NOT NULL,
  `Template_Category` varchar(255) DEFAULT NULL,
  `Category_Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_template_category`
--

INSERT INTO `cra_template_category` (`id`, `Template_Category`, `Category_Type`) VALUES
(157, 'Employment', 'zcZXC'),
(163, 'Business Property', 'dfsfsf'),
(164, 'Business Property', 'dfsfsf'),
(167, NULL, NULL),
(187, NULL, NULL),
(188, 'Business Property', 'bjbjb'),
(189, NULL, NULL),
(190, NULL, NULL),
(191, 'Employment', '2222'),
(192, NULL, NULL),
(193, NULL, NULL),
(194, NULL, NULL),
(195, NULL, NULL),
(196, NULL, NULL),
(197, NULL, NULL),
(198, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_template_category`
--
ALTER TABLE `cra_template_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_template_category`
--
ALTER TABLE `cra_template_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
