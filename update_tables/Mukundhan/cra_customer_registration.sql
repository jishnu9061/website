-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 06:15 AM
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
-- Table structure for table `cra_customer_registration`
--

CREATE TABLE `cra_customer_registration` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `telephone_no` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile_no` int(11) DEFAULT NULL,
  `web_site` varchar(200) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `customer_address` longtext DEFAULT NULL,
  `physical_address` longtext DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_customer_registration`
--

INSERT INTO `cra_customer_registration` (`id`, `customer_name`, `postal_code`, `town`, `country`, `telephone_no`, `email`, `mobile_no`, `web_site`, `registration_date`, `customer_address`, `physical_address`, `company_id`, `branch_id`) VALUES
(1, 'anish 123', 987791232, 'Nairobi', 'volvo', 456123789, 'test@gmail.com', 789456123, 'ww.test.com', '2022-10-27', NULL, NULL, NULL, NULL),
(2, 'arun', 5555, 'tvm', 'kenya', 98765, 'mmmmm@gmail.com', 987654321, 'ww.india.com', '2022-09-28', '55gggg', 'gggg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_customer_registration`
--
ALTER TABLE `cra_customer_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_customer_registration`
--
ALTER TABLE `cra_customer_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
