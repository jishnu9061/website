-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 01:58 PM
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
-- Table structure for table `cra_file_status_summary`
--

CREATE TABLE `cra_file_status_summary` (
  `id` int(225) NOT NULL,
  `Date_to` date DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Instruction_Category` varchar(255) DEFAULT NULL,
  `Receiver` varchar(255) DEFAULT NULL,
  `Currency` text DEFAULT NULL,
  `Exchange_Rate` int(255) DEFAULT NULL,
  `Turn_Around_Time` time DEFAULT NULL,
  `Priority` varchar(255) DEFAULT NULL,
  `Details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_file_status_summary`
--

INSERT INTO `cra_file_status_summary` (`id`, `Date_to`, `File`, `Instruction_Category`, `Receiver`, `Currency`, `Exchange_Rate`, `Turn_Around_Time`, `Priority`, `Details`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2022-10-13', 'demo 1', 'demo 1', 'demo 1', 'demo 1', 45345, '16:05:00', 'demo 1', 'fhxfh'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_file_status_summary`
--
ALTER TABLE `cra_file_status_summary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_file_status_summary`
--
ALTER TABLE `cra_file_status_summary`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
