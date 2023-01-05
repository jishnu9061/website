-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 12:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
-- Table structure for table `cra_corporate_customers`
--

CREATE TABLE `cra_corporate_customers` (
  `Id` int(11) NOT NULL,
  `Name` varchar(222) DEFAULT NULL,
  `GST_Office` int(11) DEFAULT NULL,
  `GST_Number` int(11) DEFAULT NULL,
  `Social_Security_Number` int(11) DEFAULT NULL,
  `Customer_Authority` varchar(222) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `FAX` int(11) DEFAULT NULL,
  `Email` varchar(222) DEFAULT NULL,
  `Web` varchar(222) DEFAULT NULL,
  `Country` varchar(222) DEFAULT NULL,
  `State` varchar(222) DEFAULT NULL,
  `City` varchar(222) DEFAULT NULL,
  `Town` varchar(222) DEFAULT NULL,
  `Post_Code` int(11) DEFAULT NULL,
  `Address` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_corporate_customers`
--

INSERT INTO `cra_corporate_customers` (`Id`, `Name`, `GST_Office`, `GST_Number`, `Social_Security_Number`, `Customer_Authority`, `Phone`, `FAX`, `Email`, `Web`, `Country`, `State`, `City`, `Town`, `Post_Code`, `Address`) VALUES
(1, 'gnbc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL),
(2, 'gn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL),
(3, 'qqqq', 3554, 345345, 0, 'fd gfdg', 1111, 968796, 'globaleyetanandhu@gmail.com', 'fgdfhrt', '1', '2', '3', '54556', 54556, NULL),
(4, 'gnbch', 3554, 345345, 353453, 'fd gfdg', 2147483647, 33423, 'globaleyetanandhu@gmail.com', 'fgdfhrt', '2', '2', '2', 'gncvn', 0, NULL),
(5, 'gnbch', 3554, 345345, 353453, 'fd gfdg', 2147483647, 33423, 'a@gmail.com', 'fgdfhrt', '1', '1', '4', 'dfhbh', 0, NULL),
(6, 'CRAdg', 3554, 0, 353453, 'fd gfdg', 2147483647, 968796, 'globaleyetanandhu@gmail.com', 'fgdfhrt', '1', '---select---', '---select---', 'cbxf', 0, 'gggggggddddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_corporate_customers`
--
ALTER TABLE `cra_corporate_customers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_corporate_customers`
--
ALTER TABLE `cra_corporate_customers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
