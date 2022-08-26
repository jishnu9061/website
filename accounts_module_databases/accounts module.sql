-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 05:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `journal_date` date NOT NULL,
  `journal_from_account` int(11) NOT NULL,
  `journal_to_account` int(11) NOT NULL,
  `debit_or_credit` varchar(100) NOT NULL,
  `journal_added_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `journal_amount` double NOT NULL,
  `journal_addedby` int(11) NOT NULL,
  `journal_remarks` text NOT NULL,
  `journal_LF` varchar(150) NOT NULL,
  `journal_hospital` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `journal_date`, `journal_from_account`, `journal_to_account`, `debit_or_credit`, `journal_added_date`, `journal_amount`, `journal_addedby`, `journal_remarks`, `journal_LF`, `journal_hospital`) VALUES
(2, '2022-02-15', 2, 2, 'CREDIT', '2022-02-15 01:47:06', 200, 0, 'demo', '', 'kims intetrnational'),
(3, '2022-02-16', 2, 3, 'DEBIT', '2022-02-15 01:46:27', 2000, 0, 'dfdfds', '', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `journal_items`
--

CREATE TABLE `journal_items` (
  `id` int(11) NOT NULL,
  `journal_items_transaction` int(11) NOT NULL,
  `journal_items_addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `journal_items_type` int(11) NOT NULL COMMENT '1 for debit 2 for credit ',
  `journal_items_from_account` int(11) NOT NULL,
  `journal_items_to_account` int(11) NOT NULL,
  `journal_transaction_account` int(11) NOT NULL,
  `journal_items_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal_items`
--

INSERT INTO `journal_items` (`id`, `journal_items_transaction`, `journal_items_addedon`, `journal_items_type`, `journal_items_from_account`, `journal_items_to_account`, `journal_transaction_account`, `journal_items_amount`) VALUES
(34, 22, '2022-02-21 11:42:49', 1, 2, 0, 2, 5000),
(35, 22, '2022-02-21 11:42:50', 2, 0, 6, 6, 5000),
(36, 23, '2022-02-21 12:02:54', 1, 5, 0, 5, 300),
(37, 23, '2022-02-21 12:02:54', 2, 0, 6, 6, 300),
(38, 24, '2022-02-21 12:13:33', 1, 2, 0, 2, 5000),
(39, 24, '2022-02-21 12:13:33', 2, 0, 6, 6, 2000),
(40, 24, '2022-02-21 12:13:33', 2, 0, 4, 4, 3000),
(41, 25, '2022-02-21 12:16:27', 1, 2, 0, 2, 3000),
(42, 25, '2022-02-21 12:16:27', 2, 0, 6, 6, 3000),
(43, 26, '2022-02-22 13:07:09', 1, 2, 0, 2, 45),
(44, 26, '2022-02-21 12:31:57', 2, 0, 6, 6, 30),
(46, 26, '2022-02-22 13:05:04', 0, 0, 2, 2, 12),
(47, 26, '2022-02-22 13:05:04', 0, 2, 0, 2, 10),
(48, 26, '2022-02-22 13:07:22', 0, 2, 0, 2, 11),
(49, 26, '2022-02-22 13:07:39', 0, 7, 0, 7, 30),
(50, 26, '2022-02-22 13:10:43', 0, 0, 2, 2, 10),
(53, 26, '2022-02-22 13:15:21', 2, 0, 2, 2, 12),
(54, 26, '2022-02-22 13:15:21', 1, 2, 0, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `journal_transactions`
--

CREATE TABLE `journal_transactions` (
  `id` int(11) NOT NULL,
  `journal_date` datetime NOT NULL,
  `journal_addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `journal_narration` text NOT NULL,
  `journal_addedby` int(11) NOT NULL,
  `journal_lf` varchar(150) NOT NULL,
  `journal_hospital` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal_transactions`
--

INSERT INTO `journal_transactions` (`id`, `journal_date`, `journal_addedon`, `journal_narration`, `journal_addedby`, `journal_lf`, `journal_hospital`) VALUES
(22, '2022-02-21 00:00:00', '2022-02-21 11:42:49', 'demo demo', 37, '', 'kims intetrnational'),
(23, '2022-02-03 00:00:00', '2022-02-21 12:02:54', 'FROM CASH ACCOUNT TO FURNITURE ACCOUNT', 37, '', 'kims intetrnational'),
(24, '2022-02-17 00:00:00', '2022-02-21 12:13:33', 'furniture purchase', 37, '', 'kims intetrnational'),
(25, '2022-02-15 00:00:00', '2022-02-21 12:16:27', 'furniture2', 37, '', 'kims intetrnational'),
(26, '2022-02-20 00:00:00', '2022-02-21 12:31:57', 'demo demo', 37, '', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `ledgeraccounts`
--

CREATE TABLE `ledgeraccounts` (
  `id` int(11) NOT NULL,
  `accounts_name` varchar(150) NOT NULL,
  `accounts_desc` text NOT NULL,
  `accounts_category` int(11) NOT NULL,
  `accounts_subcategory` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledgeraccounts`
--

INSERT INTO `ledgeraccounts` (`id`, `accounts_name`, `accounts_desc`, `accounts_category`, `accounts_subcategory`, `added_on`) VALUES
(2, 'cash account', 'hello', 4, 2, '2022-02-16 06:14:58'),
(4, 'demo account11', 'demo', 4, 1, '2022-02-16 06:15:16'),
(5, 'cash account', 'demo', 4, 2, '2022-02-16 04:36:03'),
(6, 'furniture account', 'demo', 4, 2, '2022-02-17 04:45:39'),
(7, 'x account', 'demo', 5, 5, '2022-02-17 07:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `ledgeraccount_categories`
--

CREATE TABLE `ledgeraccount_categories` (
  `id` int(11) NOT NULL,
  `ledgeraccount_categories` varchar(150) NOT NULL,
  `ledgeraccount_categories_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledgeraccount_categories`
--

INSERT INTO `ledgeraccount_categories` (`id`, `ledgeraccount_categories`, `ledgeraccount_categories_desc`) VALUES
(4, 'Asset', 'Asset'),
(5, 'Lability', 'laibility'),
(6, 'Income', 'income'),
(7, 'Expenses', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `ledgeraccount_subcategories`
--

CREATE TABLE `ledgeraccount_subcategories` (
  `id` int(11) NOT NULL,
  `ledgeraccount_categories` int(11) NOT NULL,
  `ledgeraccount_subcategories` varchar(150) NOT NULL,
  `ledgeraccount_subcategories_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledgeraccount_subcategories`
--

INSERT INTO `ledgeraccount_subcategories` (`id`, `ledgeraccount_categories`, `ledgeraccount_subcategories`, `ledgeraccount_subcategories_desc`) VALUES
(1, 4, '2nd demo', 'list'),
(2, 4, 'Fixed Asset', 'demo'),
(4, 7, 'Direct Expense', 'demo'),
(5, 5, 'Short Term Liability', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_items`
--
ALTER TABLE `journal_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_transactions`
--
ALTER TABLE `journal_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledgeraccounts`
--
ALTER TABLE `ledgeraccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledgeraccount_categories`
--
ALTER TABLE `ledgeraccount_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledgeraccount_subcategories`
--
ALTER TABLE `ledgeraccount_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `journal_items`
--
ALTER TABLE `journal_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `journal_transactions`
--
ALTER TABLE `journal_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ledgeraccounts`
--
ALTER TABLE `ledgeraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ledgeraccount_categories`
--
ALTER TABLE `ledgeraccount_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ledgeraccount_subcategories`
--
ALTER TABLE `ledgeraccount_subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
