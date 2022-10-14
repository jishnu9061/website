-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 06:18 AM
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
-- Table structure for table `cra_add_file_progress`
--

CREATE TABLE `cra_add_file_progress` (
  `id` int(11) NOT NULL,
  `progress_date` date DEFAULT NULL,
  `next_action` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `bringup_date` date DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `reminder_period` int(11) DEFAULT NULL,
  `action_type` varchar(255) DEFAULT NULL,
  `action_description` varchar(255) DEFAULT NULL,
  `time_taken_hours` time DEFAULT NULL,
  `time_taken_minutes` time DEFAULT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `activity_type` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_file_progress`
--

INSERT INTO `cra_add_file_progress` (`id`, `progress_date`, `next_action`, `client_name`, `bringup_date`, `file_name`, `reminder_period`, `action_type`, `action_description`, `time_taken_hours`, `time_taken_minutes`, `item_type`, `currency`, `amount`, `start_time`, `activity_type`, `activity`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2022-10-08', 'khgjkhkljvdx', 'volvo', '2022-10-21', 'volvo', 52, 'volvo', 'sdfg', '00:00:10', '00:00:44', 'volvo', 'volvo', 4444, '0000-00-00 00:00:00', 'volvo', '4444'),
(3, '2022-10-08', 'khgjkhkljvdx', 'volvo', '2022-10-21', 'volvo', 52, 'volvo', 'sdfg', '00:00:10', '00:00:44', 'volvo', 'volvo', 4444, '0000-00-00 00:00:00', 'volvo', '4444'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2022-10-26', 'egsgsghdf', NULL, '2022-10-28', NULL, 444, NULL, 'fgxcb', '00:00:04', '00:00:52', NULL, NULL, 741, NULL, NULL, 'gfjgjf'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2022-10-25', 'fgjjasgdsdfh', NULL, '2022-10-08', NULL, 41, NULL, 'dfhshdhh', '20:47:00', '00:41:00', NULL, NULL, 789, '0000-00-00 00:00:00', NULL, '75358'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_add_file_progress`
--
ALTER TABLE `cra_add_file_progress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_add_file_progress`
--
ALTER TABLE `cra_add_file_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
