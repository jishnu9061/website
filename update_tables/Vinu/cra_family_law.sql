-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 11:54 AM
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
-- Table structure for table `cra_family_law`
--

CREATE TABLE `cra_family_law` (
  `id` int(11) NOT NULL,
  `file_no` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `matter_type` varchar(255) DEFAULT NULL,
  `other_party` varchar(255) DEFAULT NULL,
  `attorney` varchar(255) DEFAULT NULL,
  `case_details` varchar(255) DEFAULT NULL,
  `marrige` varchar(255) DEFAULT NULL,
  `property` varchar(255) DEFAULT NULL,
  `child_details` varchar(255) DEFAULT NULL,
  `support_detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_family_law`
--

INSERT INTO `cra_family_law` (`id`, `file_no`, `client_name`, `matter_type`, `other_party`, `attorney`, `case_details`, `marrige`, `property`, `child_details`, `support_detail`) VALUES
(3, 'frgbsfd', 'fdgfd', 'fgfg', 'fggf', 'fggfg', 'ffgfg', 'fgsgf', 'fggfg', 'fggfg', 'C:\\xampp\\tmp\\php7415.tmp'),
(4, '445', 'fhgchf', '787878', 'fytrf', '45454', '777', 'afd', 'dafds', 'sddf', 'C:\\xampp\\tmp\\php5AD5.tmp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_family_law`
--
ALTER TABLE `cra_family_law`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_family_law`
--
ALTER TABLE `cra_family_law`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
