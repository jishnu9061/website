-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 12:00 PM
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
-- Table structure for table `cra_add_incomming_letters`
--

CREATE TABLE `cra_add_incomming_letters` (
  `id` int(11) NOT NULL,
  `letter_date` date DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `received_form` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `letter_name` varchar(255) DEFAULT NULL,
  `delivered_by` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `delivered_to` varchar(255) DEFAULT NULL,
  `viewer` varchar(255) DEFAULT NULL,
  `upload_copy` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_incomming_letters`
--

INSERT INTO `cra_add_incomming_letters` (`id`, `letter_date`, `client`, `file`, `received_form`, `category`, `letter_name`, `delivered_by`, `other`, `delivered_to`, `viewer`, `upload_copy`, `company_id`, `branch_id`) VALUES
(1, '2022-10-02', 'demo 2', 'demo 2', 'cra', 'demo 2', 'case letter', 'demo 2', 'no', 'demo 3', 'select', 'C:\\xampp\\tmp\\phpA1E9.tmp', NULL, NULL),
(2, '2022-10-02', 'demo 2', 'demo 2', 'cra', 'demo 2', 'case letter', 'demo 2', 'no', 'demo 3', 'select', 'C:\\xampp\\tmp\\phpFB32.tmp', NULL, NULL),
(3, '2022-11-11', 'demo 2', 'demo 2', 'cra', 'demo 2', 'case letter', 'demo 2', 'no', 'demo 2', 'demo 2', 'C:\\xampp\\tmp\\php5F75.tmp', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_add_incomming_letters`
--
ALTER TABLE `cra_add_incomming_letters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_add_incomming_letters`
--
ALTER TABLE `cra_add_incomming_letters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
