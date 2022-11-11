-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 06:19 AM
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
-- Table structure for table `cra_conversations`
--

CREATE TABLE `cra_conversations` (
  `id` int(11) NOT NULL,
  `communication_date` date DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `telephone_no` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `communication_source` varchar(255) DEFAULT NULL,
  `mode_of_communication` varchar(255) DEFAULT NULL,
  `communicated` varchar(255) DEFAULT NULL,
  `duration` varchar(200) DEFAULT NULL,
  `person_handling` varchar(255) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `communicated_description` varchar(255) DEFAULT NULL,
  `action_plan` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_conversations`
--

INSERT INTO `cra_conversations` (`id`, `communication_date`, `client`, `file`, `customer`, `telephone_no`, `email`, `communication_source`, `mode_of_communication`, `communicated`, `duration`, `person_handling`, `time`, `others`, `communicated_description`, `action_plan`, `company_id`) VALUES
(1, '2022-11-26', 'Corporate', 'Type 1', 'test customer', 456789123, 'test@gmail.com', 'Vedio Conference', 'Mode 1', 'Clerical Staff', 'Half Hour', 'Person 2', '16:23:00', 'gg', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_conversations`
--
ALTER TABLE `cra_conversations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_conversations`
--
ALTER TABLE `cra_conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
