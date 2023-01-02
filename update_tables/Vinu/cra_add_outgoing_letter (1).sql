-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 12:01 PM
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
-- Table structure for table `cra_add_outgoing_letter`
--

CREATE TABLE `cra_add_outgoing_letter` (
  `id` int(11) NOT NULL,
  `letter_date` date NOT NULL,
  `client` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `delivered_to` varchar(255) NOT NULL,
  `Document_category` varchar(255) NOT NULL,
  `letter_name` varchar(255) NOT NULL,
  `originator` varchar(255) NOT NULL,
  `viewers` varchar(255) NOT NULL,
  `upload_copy` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_outgoing_letter`
--

INSERT INTO `cra_add_outgoing_letter` (`id`, `letter_date`, `client`, `file`, `delivered_to`, `Document_category`, `letter_name`, `originator`, `viewers`, `upload_copy`) VALUES
(1, '2022-11-12', 'demo 3', 'demo 2', 'da', 'demo 3', 'aaaa', 'demo 2', 'demo 2', 'C:\\xampp\\tmp\\phpA90B.tmp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_add_outgoing_letter`
--
ALTER TABLE `cra_add_outgoing_letter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_add_outgoing_letter`
--
ALTER TABLE `cra_add_outgoing_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
