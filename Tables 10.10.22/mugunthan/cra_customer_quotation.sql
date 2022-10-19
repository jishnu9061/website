-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 01:39 PM
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
-- Table structure for table `cra_customer_quotation`
--

CREATE TABLE `cra_customer_quotation` (
  `id` int(11) NOT NULL,
  `document_type` varchar(200) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `customer` varchar(200) DEFAULT NULL,
  `client_ref_no` int(11) DEFAULT NULL,
  `currency` int(11) DEFAULT NULL,
  `exchange_rate` int(11) DEFAULT NULL,
  `approver` varchar(200) DEFAULT NULL,
  `bank_account` varchar(200) DEFAULT NULL,
  `billing_information` longtext DEFAULT NULL,
  `attender` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `particulers_of_service_rendered` varchar(200) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `vat` varchar(200) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_customer_quotation`
--

INSERT INTO `cra_customer_quotation` (`id`, `document_type`, `issue_date`, `customer`, `client_ref_no`, `currency`, `exchange_rate`, `approver`, `bank_account`, `billing_information`, `attender`, `subject`, `type`, `particulers_of_service_rendered`, `amount`, `vat`, `comments`) VALUES
(3, 'free notes', '2022-10-21', 'demo1', 45, 0, 56, 'volvo', 'volvo', NULL, 'hlo', 'tamil', 'volvo', NULL, 34, 'demo1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_customer_quotation`
--
ALTER TABLE `cra_customer_quotation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_customer_quotation`
--
ALTER TABLE `cra_customer_quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
