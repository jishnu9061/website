-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 01:58 PM
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
-- Table structure for table `cra_file_progress_report`
--

CREATE TABLE `cra_file_progress_report` (
  `id` int(11) NOT NULL,
  `Client` varchar(255) DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Progress_Date_From` date DEFAULT NULL,
  `Progress_Date_To` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_file_progress_report`
--

INSERT INTO `cra_file_progress_report` (`id`, `Client`, `File`, `Progress_Date_From`, `Progress_Date_To`) VALUES
(1, NULL, NULL, NULL, NULL),
(2, 'demo 1', 'demo 1', '2022-10-12', '0000-00-00'),
(3, 'demo 1', 'demo 1', '2022-10-01', '1asfsdf'),
(4, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL),
(6, 'demo 1', 'demo 1', '2022-10-20', 'dfhfg'),
(7, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL),
(9, 'demo 1', 'select', NULL, NULL),
(10, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_file_progress_report`
--
ALTER TABLE `cra_file_progress_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_file_progress_report`
--
ALTER TABLE `cra_file_progress_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
