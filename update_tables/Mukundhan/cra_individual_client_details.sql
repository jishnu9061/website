-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 10:45 AM
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
-- Table structure for table `cra_individual_client_details`
--

CREATE TABLE `cra_individual_client_details` (
  `id` int(11) NOT NULL,
  `documents_id` int(11) NOT NULL,
  `client_number` varchar(255) DEFAULT NULL,
  `client_type` varchar(255) DEFAULT NULL,
  `citizen_status` varchar(255) DEFAULT NULL,
  `certificate_of_incorporation` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `telephone_no` int(11) DEFAULT NULL,
  `fax_no` int(11) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `brought_in_by` varchar(255) DEFAULT NULL,
  `reporting_day` varchar(255) DEFAULT NULL,
  `client_source` varchar(255) DEFAULT NULL,
  `client_source_narration` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `client_industry` varchar(255) DEFAULT NULL,
  `pin_no` int(11) DEFAULT NULL,
  `postal_address` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `physical_address` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_individual_client_details`
--

INSERT INTO `cra_individual_client_details` (`id`, `documents_id`, `client_number`, `client_type`, `citizen_status`, `certificate_of_incorporation`, `country`, `telephone_no`, `fax_no`, `email_address`, `website`, `brought_in_by`, `reporting_day`, `client_source`, `client_source_narration`, `client_name`, `client_industry`, `pin_no`, `postal_address`, `postal_code`, `town`, `physical_address`, `notes`, `company_id`, `branch_id`) VALUES
(2, 0, '567', 'Individual', 'Non Residensial', 'hi', 'South Africa', 987654321, 12, 'mk@gmail.com', 'ww.india.com', 'Staff', 'Wednesday', 'Online', '123', 'anu', 'Construction', 1234567, 'kazhakutam', 98765, 'tvm', 'ggh', 'ggh', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_individual_client_details`
--
ALTER TABLE `cra_individual_client_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_individual_client_details`
--
ALTER TABLE `cra_individual_client_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
