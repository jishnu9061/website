-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 10:50 AM
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
-- Table structure for table `cra_add_file_bringup_reminder`
--

CREATE TABLE `cra_add_file_bringup_reminder` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `progress_date` date NOT NULL,
  `next_bringup_days` date NOT NULL,
  `remind_period_days` date NOT NULL,
  `send_notification` varchar(255) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_file_bringup_reminder`
--

INSERT INTO `cra_add_file_bringup_reminder` (`id`, `client_name`, `file_name`, `progress_date`, `next_bringup_days`, `remind_period_days`, `send_notification`, `reason`) VALUES
(1, 'client 1', 'cra project', '2022-10-16', '0000-00-00', '2022-10-30', 'notification 1', 'complete'),
(2, 'client 1', 'test', '2022-10-27', '0000-00-00', '2022-10-22', 'notification 1', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_add_file_bringup_reminder`
--
ALTER TABLE `cra_add_file_bringup_reminder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_add_file_bringup_reminder`
--
ALTER TABLE `cra_add_file_bringup_reminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
