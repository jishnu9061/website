-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 05:41 AM
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
-- Table structure for table `cra_client_service_at_reception`
--

CREATE TABLE `cra_client_service_at_reception` (
  `id` int(11) NOT NULL,
  `receipt_no` varchar(11) DEFAULT NULL,
  `client_name` varchar(200) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `amount_paid` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `code` varchar(200) DEFAULT NULL,
  `payment_method` varchar(200) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_client_service_at_reception`
--

INSERT INTO `cra_client_service_at_reception` (`id`, `receipt_no`, `client_name`, `mobile`, `amount_paid`, `date`, `email`, `code`, `payment_method`, `company_id`, `branch_id`) VALUES
(1, '0', 'man', 987654321, '345', '2022-10-20', 'mk@gmail.com', 'Code1', 'Checks', NULL, NULL),
(2, '0', 'man', 0, '345', '2022-10-15', 'mk@gmail.com', 'Code1', 'Cash', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_client_service_at_reception`
--
ALTER TABLE `cra_client_service_at_reception`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_client_service_at_reception`
--
ALTER TABLE `cra_client_service_at_reception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
