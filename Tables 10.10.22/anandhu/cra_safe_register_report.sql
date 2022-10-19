-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 01:59 PM
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
-- Table structure for table `cra_safe_register_report`
--

CREATE TABLE `cra_safe_register_report` (
  `id` int(11) NOT NULL,
  `Client` text DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Document_Type` varchar(255) DEFAULT NULL,
  `Safe_Name` varchar(255) DEFAULT NULL,
  `Approver` text DEFAULT NULL,
  `Given_To` text DEFAULT NULL,
  `Requested_By` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `and` varchar(255) DEFAULT NULL,
  `Document_Condition` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_safe_register_report`
--

INSERT INTO `cra_safe_register_report` (`id`, `Client`, `File`, `Document_Type`, `Safe_Name`, `Approver`, `Given_To`, `Requested_By`, `Date`, `and`, `Document_Condition`, `Status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'demo 1', 'demo 1', 'demo 1', 'demo 1', 'demo 1', 'demo 1', 'demo 1', '2022-10-12', 'sdsdgd', 'demo 1', 'demo 1'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_safe_register_report`
--
ALTER TABLE `cra_safe_register_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_safe_register_report`
--
ALTER TABLE `cra_safe_register_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
