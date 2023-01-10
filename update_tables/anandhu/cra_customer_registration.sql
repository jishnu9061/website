-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 10:25 AM
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
  `branch_id` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_customer_registration`
--

INSERT INTO `cra_customer_registration` (`id`, `customer_name`, `postal_code`, `town`, `country`, `telephone_no`, `email`, `mobile_no`, `web_site`, `registration_date`, `customer_address`, `physical_address`, `company_id`, `branch_id`, `status`) VALUES
(1, 'client 1', 0, 'Nairobi', 'kenya', 2147483647, 'globaleyetanandhu@gmail.com', 2434234, 'www.j.com', '2023-01-21', 'hfdjhjhfdjhfdj', 'fffdhfhjffd', NULL, NULL, 'Pending'),
(2, 'client 1', 12212, 'Nairobi', 'kenya', 2147483647, 'globaleye@gmail.com', 2434234, 'www.j.com', '2023-01-10', 'test 12', 'test 22', NULL, NULL, 'Accepted');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
