-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 12:24 PM
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
-- Table structure for table `cra_civil_litigation`
--

CREATE TABLE `cra_civil_litigation` (
  `id` int(11) NOT NULL,
  `matter_info` varchar(255) NOT NULL,
  `plaintiff` varchar(255) NOT NULL,
  `matter_type` varchar(255) NOT NULL,
  `defendent` varchar(255) NOT NULL,
  `attroney` varchar(255) NOT NULL,
  `case_detail` varchar(255) DEFAULT NULL,
  `insurer` varchar(255) NOT NULL,
  `witness` varchar(255) NOT NULL,
  `expert` varchar(255) NOT NULL,
  `def_insurer` varchar(255) NOT NULL,
  `def_witness` varchar(255) NOT NULL,
  `def_expert` varchar(255) NOT NULL,
  `support_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_civil_litigation`
--
ALTER TABLE `cra_civil_litigation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_civil_litigation`
--
ALTER TABLE `cra_civil_litigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
