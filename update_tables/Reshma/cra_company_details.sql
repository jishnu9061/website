-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 12:15 PM
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
-- Table structure for table `cra_company_details`
--

CREATE TABLE `cra_company_details` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `town_city` varchar(255) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `pin_no` varchar(255) DEFAULT NULL,
  `vat_no` varchar(255) DEFAULT NULL,
  `NHIF` varchar(255) DEFAULT NULL,
  `NSSF_no` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_company_details`
--

INSERT INTO `cra_company_details` (`id`, `company_name`, `address`, `town_city`, `company_website`, `email`, `company_type`, `pin_no`, `vat_no`, `NHIF`, `NSSF_no`, `logo`) VALUES
(30, 'CRA', 'Stima Investment Plaza 1,3rd Floor,Mushembi Rd, Parklands', 'Nairobi, Kenya', NULL, NULL, 'Sole partership', NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\php48E.tmp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_company_details`
--
ALTER TABLE `cra_company_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_company_details`
--
ALTER TABLE `cra_company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
