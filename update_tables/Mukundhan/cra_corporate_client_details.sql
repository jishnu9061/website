-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 06:17 AM
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
-- Table structure for table `cra_corporate_client_details`
--

CREATE TABLE `cra_corporate_client_details` (
  `corporate_id` int(11) NOT NULL,
  `Client_no` varchar(255) DEFAULT NULL,
  `Client_type` varchar(255) DEFAULT NULL,
  `Cityzen_status` varchar(255) DEFAULT NULL,
  `Certificate_of_incorporation` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Telephone_No` varchar(255) DEFAULT NULL,
  `Fax_no` varchar(255) DEFAULT NULL,
  `Email_address` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `Brought_in_By` varchar(255) DEFAULT NULL,
  `Status_reporting_day` varchar(255) DEFAULT NULL,
  `Client_source` varchar(255) DEFAULT NULL,
  `Client_source_naration` varchar(255) DEFAULT NULL,
  `Client_name` varchar(255) DEFAULT NULL,
  `Client_industry` varchar(255) DEFAULT NULL,
  `Pin_no` varchar(255) DEFAULT NULL,
  `postal_address` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `physical_address` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `Mobile_no` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_corporate_client_details`
--

INSERT INTO `cra_corporate_client_details` (`corporate_id`, `Client_no`, `Client_type`, `Cityzen_status`, `Certificate_of_incorporation`, `Country`, `Telephone_No`, `Fax_no`, `Email_address`, `Website`, `Brought_in_By`, `Status_reporting_day`, `Client_source`, `Client_source_naration`, `Client_name`, `Client_industry`, `Pin_no`, `postal_address`, `postal_code`, `town`, `physical_address`, `notes`, `contact_person`, `designation`, `Mobile_no`, `email`, `company_id`, `branch_id`) VALUES
(5, '567', 'Corporate', 'Residensial', 'addd', 'South Africa', '0987654321', '12', 'mk@gmail.com', 'ww.india.com', 'Agent', 'Monday', 'Excisting Client', '123', 'dnj', 'Commerce', '1234567', 'kazhakutam', 98765, 'tvm', 'fghgf', 'h', 'arun', 'hio', 2147483647, 'mk@gmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_corporate_client_details`
--
ALTER TABLE `cra_corporate_client_details`
  ADD PRIMARY KEY (`corporate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_corporate_client_details`
--
ALTER TABLE `cra_corporate_client_details`
  MODIFY `corporate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
