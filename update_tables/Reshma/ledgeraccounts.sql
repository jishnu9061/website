-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 11:37 AM
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
-- Table structure for table `ledgeraccounts`
--

CREATE TABLE `ledgeraccounts` (
  `id` int(11) NOT NULL,
  `accounts_name` varchar(150) NOT NULL,
  `accounts_desc` text DEFAULT NULL,
  `accounts_category` int(11) NOT NULL,
  `accounts_subcategory` int(11) NOT NULL,
  `budget_cat` int(11) DEFAULT NULL,
  `accounts_company` varchar(150) DEFAULT NULL,
  `accounts_update_privilage` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `default_currency` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledgeraccounts`
--

INSERT INTO `ledgeraccounts` (`id`, `accounts_name`, `accounts_desc`, `accounts_category`, `accounts_subcategory`, `budget_cat`, `accounts_company`, `accounts_update_privilage`, `added_on`, `default_currency`) VALUES
(55, 'sdkklsd', 'demo', 40, 24, 18, 'kims intetrnational', 1, '2022-08-27 05:50:05', NULL),
(56, 'hjhhjh', '66', 53, 25, 12, 'kims intetrnational', 0, '2022-11-09 05:46:39', 'SEK'),
(58, 'test', 'y87oy8', 46, 24, 11, 'kims intetrnational', 0, '2022-11-09 05:46:26', 'GBP'),
(60, 'tt', 'tt', 43, 25, 14, 'kims intetrnational', 0, '2022-11-09 05:35:57', 'AUD'),
(61, 'yy', 'yy', 43, 25, 15, 'kims intetrnational', 0, '2022-11-09 05:36:15', 'DKK'),
(62, 'ddd', 'ddddd', 45, 28, 10, 'kims intetrnational', 0, '2022-11-09 07:32:20', 'CAD'),
(63, 'ccccccccccccc', 'ccccccccccc', 42, 25, 9, 'kims intetrnational', 0, '2022-11-09 07:33:18', 'CAD'),
(64, 'qqqqq', 'qqqq', 49, 29, 13, 'kims intetrnational', 0, '2022-11-09 07:35:33', 'GBP'),
(65, 'ggggggggg', 'ggggg', 42, 26, 16, 'kims intetrnational', 0, '2022-11-09 07:36:18', 'DKK'),
(66, 'vvvvvvvv', 'vvvvvvv', 41, 25, 16, 'kims intetrnational', 0, '2022-11-09 07:37:01', 'SEK'),
(67, 'zzzzzz', 'zzzzzzzzzzzzzz', 46, 25, 7, 'kims intetrnational', 0, '2022-11-09 07:39:33', 'SEK'),
(68, 'ppp', 'ppp', 42, 24, 14, 'kims intetrnational', 0, '2022-11-09 07:40:04', 'JPY'),
(69, 'yftyfty', 'ffututu', 47, 29, 9, 'kims intetrnational', 0, '2022-11-09 07:42:59', 'GBP'),
(70, 'gjgjgj', 'gjhgjghj', 41, 27, 16, 'kims intetrnational', 0, '2022-11-09 07:43:10', 'AUD'),
(71, 'fghfjfgj', 'vjjgj', 43, 25, 15, 'kims intetrnational', 0, '2022-11-09 07:43:31', 'DKK'),
(72, 'savings', '949', 42, 30, 9, 'kims intetrnational', 0, '2022-11-09 08:42:41', 'CAD'),
(73, 'ttttttttttt', 'iiii', 42, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:13:40', 'SEK'),
(74, 'fffffffffffffffffff', 'ff', 42, 27, 8, 'kims intetrnational', 0, '2022-11-09 09:20:29', 'EUR'),
(75, 'fhgjgsfsdf', 'mjljkljljkljkl', 48, 28, 12, 'kims intetrnational', 0, '2022-11-09 09:24:42', 'SEK'),
(76, 'nmjmnjm', 'nmjm', 42, 25, 17, 'kims intetrnational', 0, '2022-11-09 09:25:16', 'GBP'),
(77, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:45', 'SEK'),
(78, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:46', 'SEK'),
(79, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:47', 'SEK'),
(80, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:47', 'SEK'),
(81, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:47', 'SEK'),
(82, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:48', 'SEK'),
(83, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:48', 'SEK'),
(84, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:49', 'SEK'),
(85, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:49', 'SEK'),
(86, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:50', 'SEK'),
(87, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:50', 'SEK'),
(88, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:50', 'SEK'),
(89, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:50', 'SEK'),
(90, 'ddddddddddddddd', 'dddddddddddddddd', 46, 26, 15, 'kims intetrnational', 0, '2022-11-09 09:28:51', 'SEK'),
(91, 'ddddddddddddd', 'ddddddddddddddddd', 45, 29, 11, 'kims intetrnational', 0, '2022-11-09 09:29:14', 'DKK'),
(92, 'zzzzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzz', 44, 29, 16, 'kims intetrnational', 0, '2022-11-09 09:29:51', 'DKK'),
(93, 'nnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnn', 40, 24, 5, 'kims intetrnational', 0, '2022-11-09 09:35:29', 'KES'),
(94, 'cccccccccccccccc', 'cccccccccccccc', 40, 24, 15, 'kims intetrnational', 0, '2022-11-09 09:39:11', 'CAD'),
(95, 'cccccccccccccccc', 'cccccccccccccc', 40, 24, 15, 'kims intetrnational', 0, '2022-11-09 09:39:16', 'CAD'),
(96, 'bbbbbbbbbbbbbbb', 'bbbbbbbbb', 43, 26, 17, 'kims intetrnational', 0, '2022-11-09 09:39:46', 'SEK'),
(97, 'bbbbbbbbbbbbbbb', 'bbbbbbbbb', 43, 26, 17, 'kims intetrnational', 0, '2022-11-09 09:40:06', 'SEK'),
(98, 'bbbbbbbbbbbbbbb', 'bbbbbbbbb', 43, 26, 17, 'kims intetrnational', 0, '2022-11-09 09:40:15', 'SEK'),
(99, 'bbbbbbbbbbbbbbb', 'bbbbbbbbb', 43, 26, 17, 'kims intetrnational', 0, '2022-11-09 09:40:19', 'SEK'),
(100, 'mmmmmmmmmmm', 'mmmm', 42, 25, 14, 'kims intetrnational', 0, '2022-11-09 09:41:02', 'DKK'),
(101, 'mmmmmmmmmmm', 'mmmm', 42, 25, 14, 'kims intetrnational', 0, '2022-11-09 09:41:11', 'DKK'),
(102, 'mmmmmmmmmmmmm', 'mmm', 40, 31, 16, 'kims intetrnational', 0, '2022-11-09 09:42:37', 'GBP'),
(103, 'kkkkkkk', 'kk', 43, 27, 13, 'kims intetrnational', 0, '2022-11-09 09:44:12', 'SEK'),
(104, 'lllll', 'll', 43, 26, 12, 'kims intetrnational', 0, '2022-11-09 09:44:52', 'USD'),
(105, 'jjjjjjjj', 'jj', 44, 25, 13, 'kims intetrnational', 0, '2022-11-09 09:46:27', 'DKK'),
(106, 'uuuuuuuuuuuuuuuuu', 'uuuuuuuuuu', 42, 28, 9, 'kims intetrnational', 0, '2022-11-09 10:03:49', 'CAD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ledgeraccounts`
--
ALTER TABLE `ledgeraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ledgeraccounts`
--
ALTER TABLE `ledgeraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
