-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 06:32 AM
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
-- Table structure for table `cra_new_safe_management`
--

CREATE TABLE `cra_new_safe_management` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `safe_name` varchar(255) DEFAULT NULL,
  `ref_no` varchar(255) DEFAULT NULL,
  `approver` varchar(255) DEFAULT NULL,
  `doc_no` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_new_safe_management`
--

INSERT INTO `cra_new_safe_management` (`id`, `date`, `client`, `file`, `safe_name`, `ref_no`, `approver`, `doc_no`, `category`, `document`) VALUES
(1, '2022-10-02', 'select', 'File 2', 'Safe 1', 'afssdf', 'Person 1', NULL, 'select', NULL),
(2, '2022-10-14', 'Client 1', 'File 2', 'Safe 1', '4144', 'Person 1', '44444', 'select', '4mn41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_new_safe_management`
--
ALTER TABLE `cra_new_safe_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_new_safe_management`
--
ALTER TABLE `cra_new_safe_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
