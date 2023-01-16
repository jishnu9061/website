-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 11:30 AM
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
-- Table structure for table `cra_open_new_file_details`
--

CREATE TABLE `cra_open_new_file_details` (
  `id` int(11) NOT NULL,
  `assoc_handling` varchar(255) DEFAULT NULL,
  `client` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `advocate` varchar(255) DEFAULT NULL,
  `recent_progress` varchar(255) DEFAULT NULL,
  `work_flow` varchar(255) DEFAULT NULL,
  `open_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `comments` varchar(255) NOT NULL,
  `notifi_email` varchar(255) NOT NULL,
  `con_phone` int(11) NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `task` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_open_new_file_details`
--

INSERT INTO `cra_open_new_file_details` (`id`, `assoc_handling`, `client`, `email`, `phone`, `address`, `file_name`, `advocate`, `recent_progress`, `work_flow`, `open_date`, `close_date`, `comments`, `notifi_email`, `con_phone`, `con_email`, `amount`, `task`, `status`) VALUES
(2, NULL, 'advocate', 'a@gmail.com', '5214514', 'dfhfdgh', NULL, NULL, NULL, NULL, NULL, NULL, 'fgsfg', 'a@gmail.com', 5214514, '', '6255', NULL, 'Opened'),
(3, NULL, 'advocate', '548498DAFF@GMAIL.COM', '65465465465', 'SDG', NULL, NULL, NULL, NULL, NULL, '2023-01-21', 'rea', '548498DAFF@GMAIL.COM', 2147483647, '', '6255', NULL, 'Closed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_open_new_file_details`
--
ALTER TABLE `cra_open_new_file_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_open_new_file_details`
--
ALTER TABLE `cra_open_new_file_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
