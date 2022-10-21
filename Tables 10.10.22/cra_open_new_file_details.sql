-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 11:22 AM
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
-- Table structure for table `cra_open_new_file_details`
--

CREATE TABLE `cra_open_new_file_details` (
  `id` int(11) NOT NULL,
  `Associate_handling` varchar(255) DEFAULT NULL,
  `Client_type` varchar(255) DEFAULT NULL,
  `opening_date` date DEFAULT NULL,
  `Client_ref_no` varchar(255) DEFAULT NULL,
  `our_file_reference_no` varchar(255) DEFAULT NULL,
  `File_name` varchar(255) DEFAULT NULL,
  `Approval_partner` varchar(255) DEFAULT NULL,
  `Customer_name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Telephone` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amount` float NOT NULL,
  `workflow` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_open_new_file_details`
--
ALTER TABLE `cra_open_new_file_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_open_new_file_details`
--
ALTER TABLE `cra_open_new_file_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
