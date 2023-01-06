-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 05:01 AM
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
-- Table structure for table `cra_apply_tender`
--

CREATE TABLE `cra_apply_tender` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `item_name` varchar(200) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `supplier_name` varchar(200) DEFAULT NULL,
  `mobile_no` int(11) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `document` varchar(200) DEFAULT NULL,
  `period_of_contract` varchar(200) DEFAULT NULL,
  `cost_of_tender` varchar(200) DEFAULT NULL,
  `payment_type` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_apply_tender`
--

INSERT INTO `cra_apply_tender` (`id`, `date`, `item_name`, `quantity`, `supplier_name`, `mobile_no`, `address`, `description`, `document`, `period_of_contract`, `cost_of_tender`, `payment_type`) VALUES
(1, '2022-12-17', 'jvjcf', 45, 'fdfdfdfdg', 2147483647, 'jhfgsjfgbsk', 'wregtewrtwrt', 'C:\\xampp\\tmp\\phpB94A.tmp', '23', '3456778', 'card'),
(2, NULL, 'jkbk', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_apply_tender`
--
ALTER TABLE `cra_apply_tender`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_apply_tender`
--
ALTER TABLE `cra_apply_tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
