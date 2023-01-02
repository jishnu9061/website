-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 07:00 AM
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
-- Table structure for table `cra_add_new_purchase`
--

CREATE TABLE `cra_add_new_purchase` (
  `purchase_id` int(11) NOT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_order_number` int(11) DEFAULT NULL,
  `payment_type` varchar(150) DEFAULT NULL,
  `supplier_name` varchar(150) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `advance_amount` int(11) DEFAULT NULL,
  `pending_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_new_purchase`
--

INSERT INTO `cra_add_new_purchase` (`purchase_id`, `purchase_date`, `purchase_order_number`, `payment_type`, `supplier_name`, `status`, `grand_total`, `advance_amount`, `pending_amount`) VALUES
(1, '2023-01-22', 34, 'cheque', NULL, 'Order-Placed', 726, 567, 159),
(2, '2023-01-14', 23, 'cheque', NULL, 'Order-Placed', 1088, 567, 521);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_add_new_purchase`
--
ALTER TABLE `cra_add_new_purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_add_new_purchase`
--
ALTER TABLE `cra_add_new_purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
