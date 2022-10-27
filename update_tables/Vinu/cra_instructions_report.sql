-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 07:24 AM
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
-- Table structure for table `cra_instructions_report`
--

CREATE TABLE `cra_instructions_report` (
  `id` int(11) NOT NULL,
  `Report_Category` varchar(255) DEFAULT NULL,
  `Instruction_Type` varchar(255) DEFAULT NULL,
  `Expense_Category` int(50) DEFAULT NULL,
  `Report_Type` varchar(255) DEFAULT NULL,
  `Date_From` date DEFAULT NULL,
  `Date_To` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_instructions_report`
--

INSERT INTO `cra_instructions_report` (`id`, `Report_Category`, `Instruction_Type`, `Expense_Category`, `Report_Type`, `Date_From`, `Date_To`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'demo 1', 0, 'demo 1', '2022-10-27', '2022-10-30'),
(3, NULL, 'demo 1', 0, 'select', '2022-10-27', '2022-10-30'),
(4, 'demo 1', 'demo 1', 0, 'select', '2022-10-28', '2022-10-30'),
(5, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_instructions_report`
--
ALTER TABLE `cra_instructions_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_instructions_report`
--
ALTER TABLE `cra_instructions_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
