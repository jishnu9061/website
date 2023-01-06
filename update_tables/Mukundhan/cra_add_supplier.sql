-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 07:38 AM
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
-- Table structure for table `cra_add_supplier`
--

CREATE TABLE `cra_add_supplier` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(150) DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `provinces` varchar(150) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_supplier`
--

INSERT INTO `cra_add_supplier` (`id`, `supplier_name`, `tax_id`, `email`, `contact_no`, `address`, `city`, `provinces`, `pincode`) VALUES
(1, 'mugu', 45, 'nmugu1@gmail.com', 987654321, 'jnjkfdnjkgdjkdnjkdjkg', 'Nairobi', 'North Eastern', 629158);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_add_supplier`
--
ALTER TABLE `cra_add_supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_add_supplier`
--
ALTER TABLE `cra_add_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
