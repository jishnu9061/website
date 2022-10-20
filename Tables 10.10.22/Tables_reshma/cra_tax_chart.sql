-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 05:46 AM
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
-- Table structure for table `cra_tax_chart`
--

CREATE TABLE `cra_tax_chart` (
  `id` int(11) NOT NULL,
  `tax_brand` varchar(255) DEFAULT NULL,
  `lower_limit` varchar(255) DEFAULT NULL,
  `upper_limit` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `factor_with_housing` varchar(255) DEFAULT NULL,
  `factor_without_housing` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_tax_chart`
--

INSERT INTO `cra_tax_chart` (`id`, `tax_brand`, `lower_limit`, `upper_limit`, `rate`, `status`, `factor_with_housing`, `factor_without_housing`) VALUES
(17, 'eeeee', '111', '111', '11', NULL, 'Yes', 'Yes'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'kkk', 'kkkkk', 'kkkk', 'kkkk', NULL, 'No', 'No'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_tax_chart`
--
ALTER TABLE `cra_tax_chart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_tax_chart`
--
ALTER TABLE `cra_tax_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
