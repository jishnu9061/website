-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 06:52 AM
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
-- Table structure for table `cra_upload_document`
--

CREATE TABLE `cra_upload_document` (
  `id` int(11) NOT NULL,
  `client` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `other_file` varchar(255) NOT NULL,
  `document_category` varchar(255) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `nature_document` varchar(255) NOT NULL,
  `search` varchar(255) NOT NULL,
  `document_owner` varchar(255) NOT NULL,
  `final_aggrement` varchar(255) NOT NULL,
  `document_upload` varchar(255) NOT NULL,
  `folder_upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_upload_document`
--

INSERT INTO `cra_upload_document` (`id`, `client`, `file`, `other_file`, `document_category`, `document_title`, `nature_document`, `search`, `document_owner`, `final_aggrement`, `document_upload`, `folder_upload`) VALUES
(0, 'client 1', 'file 1', 'df', 'category_1', 'ffgf', 'fggfgf', 'fggsg', 'doc_owner_2', 'qqq', '1668750010.png', 'C:\\xampp\\tmp\\phpCEEB.tmp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
