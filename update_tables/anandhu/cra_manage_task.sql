-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 07:35 AM
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
-- Table structure for table `cra_manage_task`
--

CREATE TABLE `cra_manage_task` (
  `id` int(11) NOT NULL,
  `task_name` varchar(222) DEFAULT NULL,
  `milestone` varchar(222) DEFAULT NULL,
  `task_assigned_by` varchar(222) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `task_priority` varchar(222) DEFAULT NULL,
  `task_status` varchar(222) DEFAULT NULL,
  `task_description` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_manage_task`
--

INSERT INTO `cra_manage_task` (`id`, `task_name`, `milestone`, `task_assigned_by`, `start_date`, `end_date`, `task_priority`, `task_status`, `task_description`) VALUES
(6, 'test', 'test', 'HR', '2023-01-06', '2023-01-07', 'Low', 'Pending', 'sssss'),
(7, 'test', 'test', 'Advocate', '2023-01-06', '2023-01-13', 'Low', 'Complete', 'saaass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_manage_task`
--
ALTER TABLE `cra_manage_task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_manage_task`
--
ALTER TABLE `cra_manage_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
