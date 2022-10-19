-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 01:44 PM
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
-- Table structure for table `cra_customer_followup`
--

CREATE TABLE `cra_customer_followup` (
  `id` int(11) NOT NULL,
  `followup_date` date DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `followup_type` varchar(200) DEFAULT NULL,
  `staff_responsible` varchar(200) DEFAULT NULL,
  `send_remainder_to` varchar(200) DEFAULT NULL,
  `next_bringup_date` date DEFAULT NULL,
  `alert_period` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `registered_by` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_customer_followup`
--

INSERT INTO `cra_customer_followup` (`id`, `followup_date`, `customer`, `followup_type`, `staff_responsible`, `send_remainder_to`, `next_bringup_date`, `alert_period`, `email`, `registered_by`, `description`) VALUES
(2, '2022-10-14', 'Aggriculture Development Corporation', 'Email', 'Corine Auma', 'hi', '2022-10-12', '1 year', 'mk@gmail.com', 'hlo', 'gnbnbn'),
(3, '2022-10-08', 'Aggriculture Development Corporation', 'Email', 'Corine Auma', 'hi', '2022-10-13', '1 year', 'mugu@gmail.com', 'hlo', 'hgmgh'),
(4, '2022-10-21', 'Aggriculture Development Corporation', 'Email', 'Corine Auma', 'hi', '2022-10-13', '1 year', 'mmmmm@gmail.com', 'hlo', 'jjj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_customer_followup`
--
ALTER TABLE `cra_customer_followup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_customer_followup`
--
ALTER TABLE `cra_customer_followup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
