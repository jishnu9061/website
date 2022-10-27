-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 07:48 AM
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
-- Table structure for table `cra_add_new_instructions`
--

CREATE TABLE `cra_add_new_instructions` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `client` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `instruction` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `exchange` int(11) NOT NULL,
  `turn_around` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `send_notification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_add_new_instructions`
--
ALTER TABLE `cra_add_new_instructions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_add_new_instructions`
--
ALTER TABLE `cra_add_new_instructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
