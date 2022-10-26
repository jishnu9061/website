-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 01:28 PM
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
-- Table structure for table `cra_add_event`
--

CREATE TABLE `cra_add_event` (
  `id` int(11) NOT NULL,
  `Event_Type` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Meeting_Room` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `Time_End` time DEFAULT NULL,
  `Event_Booked_For` varchar(255) DEFAULT NULL,
  `User_Invited` varchar(255) DEFAULT NULL,
  `Other_Invites` varchar(255) DEFAULT NULL,
  `Client` varchar(255) DEFAULT NULL,
  `File` varchar(225) DEFAULT NULL,
  `Notes` varchar(225) DEFAULT NULL,
  `Set_Repetition` varchar(225) DEFAULT NULL,
  `Repetition_End` varchar(225) DEFAULT NULL,
  `Set_Reminder` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_event`
--

INSERT INTO `cra_add_event` (`id`, `Event_Type`, `Title`, `Meeting_Room`, `Location`, `Start_Date`, `Time`, `End_Date`, `Time_End`, `Event_Booked_For`, `User_Invited`, `Other_Invites`, `Client`, `File`, `Notes`, `Set_Repetition`, `Repetition_End`, `Set_Reminder`) VALUES
(4, 'demo 2', 'sdfsdf', 'demo 2', 'ghjkghk', '2022-10-05', '14:01:00', '2022-10-28', '12:04:00', 'demo 2', 'sfdf', 'sdfdf', 'demo 2', 'demo 2', 'sdfsd', 'demo 2', '2022-10-20', 'demo 2'),
(5, 'demo 2', 'sdgdg', 'demo 3', 'sdfsdf', '2022-09-28', '15:27:00', '2022-10-28', '16:28:00', 'demo 2', 'sdfsd', 'test', 'demo 3', 'demo 2', 'dfgdfgdg', 'demo 2', '2022-10-28', 'demo 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cra_add_event`
--
ALTER TABLE `cra_add_event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cra_add_event`
--
ALTER TABLE `cra_add_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
