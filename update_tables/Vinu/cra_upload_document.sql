-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 09:49 AM
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
-- Table structure for table `cra_upload_document`
--

CREATE TABLE `cra_upload_document` (
  `id` int(11) NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `other_file` varchar(255) DEFAULT NULL,
  `document_category` varchar(255) DEFAULT NULL,
  `document_title` varchar(255) DEFAULT NULL,
  `nature_document` varchar(255) DEFAULT NULL,
  `search` varchar(255) DEFAULT NULL,
  `document_owner` varchar(255) DEFAULT NULL,
  `final_aggrement` varchar(255) DEFAULT NULL,
  `document_upload` varchar(255) DEFAULT NULL,
  `folder_upload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_upload_document`
--

INSERT INTO `cra_upload_document` (`id`, `client`, `file`, `other_file`, `document_category`, `document_title`, `nature_document`, `search`, `document_owner`, `final_aggrement`, `document_upload`, `folder_upload`) VALUES
(1, 'client 1', 'file 1', 'df', 'category_1', 'ffgf', 'fggfgf', 'fggsg', 'doc_owner_2', 'qqq', '1668750010.png', 'C:\\xampp\\tmp\\phpCEEB.tmp'),
(2, 'client 2', 'file 1', 'asd', 'category_2', 'dsfd', 'jh', 'fgj', 'doc_owner_1', 'qqq', '1668768481.jpg', '1668768481.jpg'),
(3, 'client 1', 'file 1', 'asd', 'category_1', 'sdsdg', 'awdad', 'adsasdsda', 'doc_owner_1', 'sasa', '1669184297.png', '1669184297.png'),
(4, 'client 3', 'file 3', 'df', 'category_3', 'dsfd', 'rg', 'fgfgg', 'doc_owner_3', 'sdsd', '1669184543.jpg', '1669184543.jpg'),
(5, 'client 1', 'file 2', 'test', 'category_1', 'test title', 'test', 'test', 'doc_owner_1', 'test agreement', '1672375347.png', '1672375347.png'),
(6, '---select---', '---select---', 'test', '---select---', 'test', NULL, NULL, '---select---', 'test', '1672375529.pdf', '1672375529.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_upload_document`
--
ALTER TABLE `cra_upload_document`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_upload_document`
--
ALTER TABLE `cra_upload_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
