-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 10:55 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
  `town` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `pin_no` varchar(255) DEFAULT NULL,
  `vat_no` varchar(255) DEFAULT NULL,
  `NHIF` varchar(255) DEFAULT NULL,
  `NSSF_no` varchar(255) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_company_details`
--

INSERT INTO `cra_company_details` (`id`, `company_name`, `address`, `town`, `email`, `company_type`, `pin_no`, `vat_no`, `NHIF`, `NSSF_no`, `company_website`) VALUES
(1, 'test', 'fghf', 'ghfgh', 'fghf@gmail.com', 'LLP', '133555', '1456987', '2755', '75252', 'hg fh'),
(2, 'test', 'wrrewr', 'were', 'test@gmail.com', '---Select---', '133555', '1456987', '2755', '4644518', 'wer');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
