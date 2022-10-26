-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 11:25 AM
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
-- Table structure for table `cra_book_a_court`
--

CREATE TABLE `cra_book_a_court` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `court_name` varchar(255) NOT NULL,
  `court_event_type` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `user_assigned` varchar(255) NOT NULL,
  `send_notification` varchar(255) NOT NULL,
  `set_reminder` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_book_a_court`
--

INSERT INTO `cra_book_a_court` (`id`, `client_name`, `file_name`, `court_name`, `court_event_type`, `start_date`, `start_time`, `end_date`, `end_time`, `user_assigned`, `send_notification`, `set_reminder`, `notes`) VALUES
(0, 'client 1', 'file 1', 'court 1', 'event 1', '2022-10-03', '16:02:00', '2022-10-10', '16:03:00', 'user 1', 'notification 1', 'reminder 1', 'complete');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
