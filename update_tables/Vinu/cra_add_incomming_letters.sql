-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 06:33 AM
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
  `letter_date` date NOT NULL,
  `client` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `received_form` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `letter_name` varchar(255) NOT NULL,
  `delivered_by` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `delivered_to` varchar(255) NOT NULL,
  `viewer` varchar(255) NOT NULL,
  `upload_copy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_incomming_letters`
--

INSERT INTO `cra_add_incomming_letters` (`id`, `letter_date`, `client`, `file`, `received_form`, `category`, `letter_name`, `delivered_by`, `other`, `delivered_to`, `viewer`, `upload_copy`) VALUES
(1, '2022-10-02', 'demo 2', 'demo 2', 'cra', 'demo 2', 'case letter', 'demo 2', 'no', 'demo 3', 'select', 'C:\\xampp\\tmp\\phpA1E9.tmp'),
(2, '2022-10-02', 'demo 2', 'demo 2', 'cra', 'demo 2', 'case letter', 'demo 2', 'no', 'demo 3', 'select', 'C:\\xampp\\tmp\\phpFB32.tmp');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
