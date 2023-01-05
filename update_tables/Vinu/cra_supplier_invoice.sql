-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 07:32 AM
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
-- Table structure for table `cra_supplier_invoice`
--

CREATE TABLE `cra_supplier_invoice` (
  `id` int(11) NOT NULL,
  `invoice_date` date DEFAULT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ipo_number` varchar(255) DEFAULT NULL,
  `due_date` varchar(255) DEFAULT NULL,
  `approver` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `exchange_rate` varchar(255) DEFAULT NULL,
  `holding_tax` varchar(255) DEFAULT NULL,
  `holding_vat` varchar(255) DEFAULT NULL,
  `voucher_date` varchar(255) DEFAULT NULL,
  `voucher_number` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `drawings` varchar(255) DEFAULT NULL,
  `drawings_item` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `vat_tax` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_supplier_invoice`
--
ALTER TABLE `cra_supplier_invoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_supplier_invoice`
--
ALTER TABLE `cra_supplier_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
