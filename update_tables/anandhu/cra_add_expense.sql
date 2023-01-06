-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 12:18 PM
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
-- Table structure for table `cra_add_expense`
--

CREATE TABLE `cra_add_expense` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `staff_name` varchar(222) DEFAULT NULL,
  `expense_reference` varchar(222) DEFAULT NULL,
  `customer_type` varchar(222) DEFAULT NULL,
  `task_assigned_by` text DEFAULT NULL,
  `billing` int(11) DEFAULT NULL,
  `description` varchar(222) DEFAULT NULL,
  `status` text NOT NULL,
  `supporting_details` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_expense`
--

INSERT INTO `cra_add_expense` (`id`, `date`, `staff_name`, `expense_reference`, `customer_type`, `task_assigned_by`, `billing`, `description`, `status`, `supporting_details`) VALUES
(1, '2023-01-06', 'test', 'test1', 'Individual', 'Marketing Department', 2222, 'adsdasd', 'In progress', 'C:\\xampp\\tmp\\phpC728.tmp'),
(2, '2023-01-12', 'test', 'test1', 'Individual', 'Marketing Department', 2222, 'sddaad', 'In progress', 'C:\\xampp\\tmp\\phpA42.tmp'),
(5, '2023-01-12', 'test', 'test1', 'Individual', 'Marketing Department', 2222, 'wedwedwe', 'In progress', 'C:\\xampp\\tmp\\php4AC2.tmp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_add_expense`
--
ALTER TABLE `cra_add_expense`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_add_expense`
--
ALTER TABLE `cra_add_expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
