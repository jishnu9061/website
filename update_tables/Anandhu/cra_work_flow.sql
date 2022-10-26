-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 01:27 PM
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
-- Table structure for table `cra_work_flow`
--

CREATE TABLE `cra_work_flow` (
  `id` int(11) NOT NULL,
  `Date_Created` date NOT NULL,
  `Workflow_Name` varchar(255) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `Duration` varchar(255) DEFAULT NULL,
  `Workflow_Comments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_work_flow`
--

INSERT INTO `cra_work_flow` (`id`, `Date_Created`, `Workflow_Name`, `Start_Date`, `Duration`, `Workflow_Comments`) VALUES
(4, '2022-10-11', 'aaaa', '2022-10-18', 'cccc', NULL),
(5, '2022-10-12', 'aaaaaaa', '2022-10-12', 'aaaaaaaaaa', 'aaaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_work_flow`
--
ALTER TABLE `cra_work_flow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_work_flow`
--
ALTER TABLE `cra_work_flow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
