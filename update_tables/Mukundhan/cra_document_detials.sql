-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:25 PM
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
-- Table structure for table `cra_document_detials`
--

CREATE TABLE `cra_document_detials` (
  `id` int(11) NOT NULL,
  `document_type` varchar(200) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `client_types` varchar(200) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_document_detials`
--

INSERT INTO `cra_document_detials` (`id`, `document_type`, `file`, `client_types`, `company_id`, `branch_id`) VALUES
(2, 'type11', '1668678839.jpg', 'individual', NULL, NULL),
(3, 'type11', '1668678827.jpg', 'individual', NULL, NULL),
(5, 'type1', '1668678237.jpg', 'Corporate', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_document_detials`
--
ALTER TABLE `cra_document_detials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_document_detials`
--
ALTER TABLE `cra_document_detials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;