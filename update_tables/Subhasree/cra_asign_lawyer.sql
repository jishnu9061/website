-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 05:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
-- Table structure for table `cra_asign_lawyer`
--

CREATE TABLE `cra_asign_lawyer` (
  `id` int(11) NOT NULL,
  `client_number` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `file_number` varchar(255) DEFAULT NULL,
  `lawyer_name` varchar(255) DEFAULT NULL,
  `court_name` varchar(255) DEFAULT NULL,
  `client_type` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_asign_lawyer`
--

INSERT INTO `cra_asign_lawyer` (`id`, `client_number`, `client_name`, `file_number`, `lawyer_name`, `court_name`, `client_type`, `company_id`, `branch_id`) VALUES
(1, NULL, NULL, NULL, 'Kenya', 'neirobi', NULL, NULL, NULL),
(2, NULL, NULL, NULL, 'Kenya', 'neirobi', NULL, NULL, NULL),
(3, NULL, NULL, NULL, 'Kenya', 'neirobi', NULL, NULL, NULL),
(4, NULL, NULL, NULL, 'Kenya', 'neirobi', NULL, NULL, NULL),
(5, NULL, NULL, NULL, 'Kenya', '2', NULL, NULL, NULL),
(6, NULL, NULL, NULL, 'Kenya', '9', NULL, NULL, NULL),
(8, '1254', NULL, '5555', 'Kenya', 'test', NULL, NULL, NULL),
(9, '1254', NULL, '6547', 'Kenya', 'neirobi', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_asign_lawyer`
--
ALTER TABLE `cra_asign_lawyer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_asign_lawyer`
--
ALTER TABLE `cra_asign_lawyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
