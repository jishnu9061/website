-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 11:15 AM
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
-- Table structure for table `cra_client_pickup_reception`
--

CREATE TABLE `cra_client_pickup_reception` (
  `id` int(11) NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `persion_handling` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `persion_picking_handling` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `visitors` varchar(255) DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_client_pickup_reception`
--

INSERT INTO `cra_client_pickup_reception` (`id`, `client`, `file_name`, `mobile`, `persion_handling`, `email`, `client_name`, `persion_picking_handling`, `reason`, `visitors`, `time_in`, `time_out`, `company_id`, `branch_id`) VALUES
(2, 'sdsa', 'dgdfg', 2147483647, 'xxvx', 'globaleye@gmail.com', 'gnbch', 'xvxvcb', 'vbnv', 'fgjfgj', '00:00:00', '00:00:00', NULL, NULL),
(3, NULL, NULL, 2147483647, NULL, 'globaleyetanandhu@gmail.com', NULL, 'sdfhgj', NULL, 'fgjfgj', '18:42:00', '19:42:00', NULL, NULL),
(4, NULL, NULL, 2147483647, NULL, 'info@cradvocatesllp.com', NULL, 'sdfhgj', NULL, 'fgjfgj', '19:43:00', '19:43:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_client_pickup_reception`
--
ALTER TABLE `cra_client_pickup_reception`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_client_pickup_reception`
--
ALTER TABLE `cra_client_pickup_reception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
