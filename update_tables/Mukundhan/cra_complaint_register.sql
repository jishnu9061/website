-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 10:41 AM
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
-- Table structure for table `cra_complaint_register`
--

CREATE TABLE `cra_complaint_register` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `client_type` varchar(255) DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `staff_handling` varchar(100) DEFAULT NULL,
  `complaint_about` varchar(200) DEFAULT NULL,
  `telephone_no` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `others` varchar(200) DEFAULT NULL,
  `action_plan` varchar(200) DEFAULT NULL,
  `complaint_description` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_complaint_register`
--

INSERT INTO `cra_complaint_register` (`id`, `date`, `client_type`, `files`, `customer_name`, `staff_handling`, `complaint_about`, `telephone_no`, `email`, `others`, `action_plan`, `complaint_description`, `company_id`, `branch_id`) VALUES
(3, '2022-10-26', 'Corporate', 'File 2', 'Allan', 'Staff 1', 'Person', 789456123, 'test@gmail.com', 'test other', 'test plan', 'test complaint', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_complaint_register`
--
ALTER TABLE `cra_complaint_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_complaint_register`
--
ALTER TABLE `cra_complaint_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
