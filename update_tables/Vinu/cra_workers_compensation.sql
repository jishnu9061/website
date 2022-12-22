-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 12:32 PM
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
-- Table structure for table `cra_workers_compensation`
--

CREATE TABLE `cra_workers_compensation` (
  `id` int(11) NOT NULL,
  `matter_info` varchar(255) DEFAULT NULL,
  `petitioner` varchar(255) DEFAULT NULL,
  `matter_type` varchar(255) DEFAULT NULL,
  `respondent` varchar(255) DEFAULT NULL,
  `attroney` varchar(255) DEFAULT NULL,
  `insurer` varchar(255) DEFAULT NULL,
  `adjuster` varchar(255) DEFAULT NULL,
  `case_detail` varchar(255) DEFAULT NULL,
  `employee_doctor` varchar(255) DEFAULT NULL,
  `benefit_detail` varchar(255) DEFAULT NULL,
  `supporting_details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_workers_compensation`
--
ALTER TABLE `cra_workers_compensation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_workers_compensation`
--
ALTER TABLE `cra_workers_compensation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
