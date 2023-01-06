-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 08:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
-- Table structure for table `cra_leave_request_details`
--

CREATE TABLE `cra_leave_request_details` (
  `id` int(11) NOT NULL,
  `leave_type` varchar(255) DEFAULT NULL,
  `leave_date` date DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `apply_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_leave_request_details`
--

INSERT INTO `cra_leave_request_details` (`id`, `leave_type`, `leave_date`, `days`, `apply_date`, `status`) VALUES
(8, 'Medical Leave', '2023-01-02', NULL, NULL, NULL),
(9, 'Half Day', '2023-01-24', NULL, NULL, NULL),
(10, 'Half Day', '2023-01-13', NULL, '2023-01-12', NULL),
(11, 'Medical Leave', '2023-01-08', NULL, '2023-01-07', NULL),
(12, 'Medical Leave', '2023-01-08', NULL, '2023-01-07', NULL),
(13, 'Medical Leave', '2023-01-08', NULL, '2023-01-07', NULL),
(14, 'Casual Leave', '2023-01-08', NULL, '2023-01-07', NULL),
(15, '---Select---', NULL, NULL, NULL, NULL),
(16, '---Select---', NULL, NULL, NULL, NULL),
(17, '---Select---', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_leave_request_details`
--
ALTER TABLE `cra_leave_request_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_leave_request_details`
--
ALTER TABLE `cra_leave_request_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
