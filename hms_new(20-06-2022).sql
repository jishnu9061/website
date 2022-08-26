-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 07:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `alllabtests`
--

CREATE TABLE `alllabtests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_phoneno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alllabtests`
--

INSERT INTO `alllabtests` (`id`, `patient_id`, `appointment_id`, `patient_name`, `patient_phoneno`, `patient_address`, `created_at`, `updated_at`, `hospital`) VALUES
(1, '1', NULL, '1', '1', '1', '2022-01-31 06:18:07', '2022-01-31 06:18:07', 'kims intetrnational'),
(2, '9', NULL, '9', '9', '9', '2022-01-31 06:24:31', '2022-01-31 06:24:31', 'kims intetrnational'),
(3, '74', NULL, 'po', '47', 'o', '2022-02-01 00:11:48', '2022-02-01 00:11:48', 'kims intetrnational'),
(4, '47', NULL, 'puiopupuip', '90', 'objo7', '2022-02-01 00:13:07', '2022-02-01 00:13:07', 'kims intetrnational'),
(5, '5', NULL, '5', '5', '5', '2022-02-01 01:21:11', '2022-02-01 01:21:11', 'kims intetrnational'),
(6, '2', NULL, 'SSS', '3131415', 'vzvzgh', '2022-02-01 04:19:19', '2022-02-01 04:19:19', 'kims intetrnational'),
(7, '1', NULL, 'r', '4', 'y', '2022-02-19 05:51:07', '2022-02-19 05:51:07', 'kims intetrnational'),
(8, '78768', NULL, 'ghgfhu', '7687587', '7uytuyu', '2022-06-09 05:57:48', '2022-06-09 05:57:48', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE `allowance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `allowancename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sum` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allowance`
--

INSERT INTO `allowance` (`id`, `allowancename`, `price`, `percent`, `hospital`, `status`, `sum`, `created_at`, `updated_at`) VALUES
(9, 'typ4', '1', NULL, 'D-clinic', 'nonfixedallowance', NULL, '2021-12-22 12:45:58', '2021-12-22 12:45:58'),
(10, 'st', '3', NULL, 'D-clinic', 'allowance', NULL, '2021-12-22 12:46:05', '2021-12-22 12:46:05'),
(11, 'ty', NULL, NULL, 'D-clinic', 'nonfixedallowance', NULL, '2021-12-22 12:46:15', '2021-12-22 12:46:15'),
(15, 'pp', NULL, NULL, 'D-clinic', 'nonfixedallowance', NULL, '2021-12-22 12:52:03', '2021-12-22 12:52:03'),
(17, 'piY', NULL, NULL, 'kims intetrnational', 'nonfixedallowance', NULL, '2021-12-24 06:02:16', '2021-12-24 06:02:16'),
(18, 'oy', NULL, NULL, 'kims intetrnational', 'nonfixedallowance', NULL, '2021-12-24 06:02:19', '2021-12-24 06:02:19'),
(22, 'TRAVEL ALLOWANCE', '1503', NULL, 'kims intetrnational', 'allowance', NULL, '2021-12-24 06:30:54', '2021-12-24 06:30:54'),
(25, 'gst', NULL, '6', 'kims intetrnational', 'reduction', NULL, '2021-12-24 06:31:43', '2021-12-24 06:31:43'),
(28, 'aa', NULL, NULL, 'kims intetrnational', 'nonfixedallowance', NULL, '2021-12-24 10:20:14', '2021-12-24 10:20:14'),
(33, 'k', '7', NULL, 'D-clinic', 'allowance', NULL, '2021-12-31 05:27:55', '2021-12-31 05:27:55'),
(34, 'd', '10', NULL, 'D-clinic', 'reduction', NULL, '2021-12-31 05:30:26', '2021-12-31 05:30:26'),
(37, 'Loan', NULL, NULL, 'kims intetrnational', 'reduction', NULL, '2022-02-01 10:51:46', '2022-02-01 10:51:46'),
(42, 'HRA', '1000', NULL, 'kims intetrnational', 'allowance', NULL, '2022-02-28 08:12:11', '2022-02-28 08:12:11'),
(43, 'DUTY ALLOWANCE', '300', NULL, 'kims intetrnational', 'allowance', NULL, '2022-02-28 08:13:06', '2022-02-28 08:13:06'),
(44, 'EMPLOYEE TAX', '1500', NULL, 'kims intetrnational', 'reduction', NULL, '2022-02-28 08:14:41', '2022-02-28 08:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `amb_driver`
--

CREATE TABLE `amb_driver` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licence_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_made` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `amb_ulance`
--

CREATE TABLE `amb_ulance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_made` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `patient` bigint(200) DEFAULT NULL,
  `patient_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amb_ulance`
--

INSERT INTO `amb_ulance` (`id`, `vehicle_name`, `vehicle_model`, `year_made`, `driver_name`, `driver_license`, `driver_contact`, `vehicle_type`, `status`, `created_at`, `updated_at`, `patient`, `patient_name`) VALUES
(2, '1', '2', '3', '1', '5', '4', '9', '1', NULL, NULL, NULL, NULL),
(3, 'name', 'model', 'yrmade', 'drivername', 'driver_license', '8365454532', 'veh_type', 'Inactive', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor` int(11) DEFAULT NULL,
  `appointmentdate` datetime DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cons_fee` int(11) DEFAULT NULL,
  `reg_fee` int(11) DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` bigint(250) DEFAULT NULL,
  `prescription` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docs` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `files` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surgery` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surgerydate` date DEFAULT NULL,
  `nextappointment` date DEFAULT NULL,
  `created_at` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bystander_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bystander_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultant` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patientid`, `Department`, `doctor`, `appointmentdate`, `hospital`, `cons_fee`, `reg_fee`, `status`, `token`, `prescription`, `lab`, `medicine`, `docs`, `files`, `surgery`, `surgerydate`, `nextappointment`, `created_at`, `updated_at`, `visiting_type`, `bystander_name`, `bystander_address`, `contact_no`, `consultant`) VALUES
(1, '987', 'Urology', NULL, '2021-12-04 00:00:00', 'kims intetrnational', 0, NULL, 'medicinated', 1, 'qwer', 'er', 'qewr', NULL, NULL, NULL, NULL, NULL, '2021-12-04 11:11:18', '2021-12-04 11:11:18', '', '', '', '', NULL),
(2, '1243', 'Urology', NULL, '2021-12-04 00:00:00', 'kims intetrnational', 0, NULL, 'appointedddd', 2, 'dfgh', 'fdh', 'fdh', NULL, NULL, NULL, NULL, NULL, '2021-12-04 12:03:37', '2021-12-04 12:03:37', '', '', '', '', NULL),
(3, '123', 'Urology', NULL, '2021-12-04 00:00:00', 'kims intetrnational', 0, NULL, 'appointed', 3, '111111', '33333333', '22222', NULL, NULL, NULL, NULL, NULL, '2021-12-04 12:11:13', '2021-12-04 12:11:13', '', '', '', '', NULL),
(4, '789', 'Urology', NULL, '2021-12-06 00:00:00', 'kims intetrnational', 0, NULL, 'medicinated', 1, 'ghj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 04:42:11', '2021-12-06 04:42:11', '', '', '', '', NULL),
(5, '789', 'Gastroenterology', NULL, '2021-12-06 00:00:00', 'kims intetrnational', 0, NULL, 'queue', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 04:42:32', '2021-12-06 04:42:32', '', '', '', '', NULL),
(6, '987', 'Urology', NULL, '2021-12-09 00:00:00', 'kims intetrnational', 0, NULL, 'called', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 04:42:46', '2021-12-06 04:42:46', '', '', '', '', NULL),
(7, '88', 'Urology', NULL, '2021-12-09 00:00:00', 'kims intetrnational', 0, NULL, 'medicinated', 4, 'phramatest\r\ndgh\r\ndh\r\nfh\r\nd\r\nfhh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 04:45:46', '2021-12-06 04:45:46', '', '', '', '', NULL),
(8, '87', 'Urology', NULL, '2021-12-06 00:00:00', 'kims intetrnational', 0, NULL, 'called', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 05:22:08', '2021-12-06 05:22:08', '', '', '', '', NULL),
(9, '34', 'Urology', NULL, '2021-12-06 00:00:00', 'kims intetrnational', 0, NULL, 'medicinated', 6, 'qqqqq11111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 07:07:02', '2021-12-06 07:07:02', '', '', '', '', NULL),
(10, '87', 'Urology', NULL, '2021-12-06 00:00:00', 'kims intetrnational', 0, NULL, 'medicinated', 7, 'zx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 08:49:28', '2021-12-06 08:49:28', '', '', '', '', NULL),
(11, '3232', 'Urology', NULL, '2021-12-06 00:00:00', 'kims intetrnational', 0, NULL, 'medicinated', 8, 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 08:54:10', '2021-12-06 08:54:10', '', '', '', '', NULL),
(12, '3322', 'Urology', NULL, '2021-12-06 00:00:00', 'kims intetrnational', 0, NULL, 'medicinated', 9, 'kk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 08:55:12', '2021-12-06 08:55:12', '', '', '', '', NULL),
(13, '987987', 'Urology', NULL, '2021-12-06 00:00:00', 'kims intetrnational', 0, NULL, 'medicinated', 10, 'qqqqqqqqqqwwwwwww', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 10:35:49', '2021-12-06 10:35:49', '', '', '', '', NULL),
(14, '987987', 'Urology', NULL, '2021-12-06 00:00:00', 'kims intetrnational', 0, NULL, 'appointed', 11, 'sdfsdfsfs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 11:36:15', '2021-12-06 11:36:15', '', '', '', '', NULL),
(15, '12', 'Urology', NULL, '2021-12-24 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-24 05:50:36', '2021-12-24 05:50:36', '', '', '', '', NULL),
(16, '11', 'Urology', NULL, '2021-12-24 00:00:00', 'kims intetrnational', 0, NULL, 'medicinated', 2, 'afasfafasfa', 'asf\r\nas\r\nf\r\ns\r\nf\r\na\r\nsfsaf', 'safasf\r\n\r\n\r\nafs\r\n\r\nasf\r\nsaf', NULL, NULL, NULL, '2021-12-30', NULL, '2021-12-24 05:51:07', '2021-12-24 05:51:07', '', '', '', '', NULL),
(17, '9', 'Urology', NULL, '2021-12-24 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-24 05:51:19', '2021-12-24 05:51:19', '', '', '', '', NULL),
(18, '8', 'Urology', NULL, '2021-12-24 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-24 05:51:39', '2021-12-24 05:51:39', '', '', '', '', NULL),
(19, '8', 'Urology', NULL, '2021-12-24 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 5, 'rew', 'bvbv\r\nyff', 'yuf', NULL, NULL, 'hg', '2021-12-24', NULL, '2021-12-24 07:04:09', '2021-12-24 07:04:09', '', '', '', '', NULL),
(20, '5', 'Urology', NULL, '2021-12-24 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-24 07:04:34', '2021-12-24 07:04:34', '', '', '', '', NULL),
(21, '6', 'Urology', NULL, '2021-12-24 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 7, 'ytry', 'jh\r\nigig\r\ng', 'klj', NULL, NULL, NULL, NULL, '2021-12-30', '2021-12-24 07:04:46', '2021-12-24 07:04:46', '', '', '', '', NULL),
(22, '2', 'Urology', NULL, '2021-12-25 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-25 09:55:33', '2021-12-25 09:55:33', '', '', '', '', NULL),
(23, '4', 'Urology', NULL, '2021-12-25 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-25 09:56:04', '2021-12-25 09:56:04', '', '', '', '', NULL),
(24, '5', 'Urology', NULL, '2021-12-25 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-25 09:56:18', '2021-12-25 09:56:18', '', '', '', '', NULL),
(25, '9', 'Urology', NULL, '2021-12-25 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-25 09:56:29', '2021-12-25 09:56:29', '', '', '', '', NULL),
(26, '1', 'Urology', NULL, '2022-01-07 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 1, 'token 1 today prescription', 'token 1 today Lab', 'token 1 today Medicine', NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:16', '2022-01-07 05:04:16', '', '', '', '', NULL),
(27, '2', 'Urology', NULL, '2022-01-07 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 2, 'qwe', 'ewq', 'qwe', NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:26', '2022-01-07 05:04:26', '', '', '', '', NULL),
(28, '3', 'Urology', NULL, '2022-01-07 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 3, 'dfg', 'fgd', 'fgd', NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34', '', '', '', '', NULL),
(29, '4', 'Urology', NULL, '2022-01-07 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 4, 'fdg', 'fg', 'gf', NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42', '', '', '', '', NULL),
(30, '5', 'Urology', NULL, '2022-01-07 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:52', '2022-01-07 05:04:52', '', '', '', '', NULL),
(31, '6', 'Urology', NULL, '2022-01-07 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:05:00', '2022-01-07 05:05:00', '', '', '', '', NULL),
(32, '7', 'Urology', NULL, '2022-01-07 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:05:08', '2022-01-07 05:05:08', '', '', '', '', NULL),
(33, '2', 'Physiotherapy', NULL, '2022-01-10 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-10 12:22:59', '2022-01-10 12:22:59', '', '', '', '', NULL),
(34, '6', 'General Surgery', NULL, '2022-01-10 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-10 12:23:07', '2022-01-10 12:23:07', '', '', '', '', NULL),
(35, '1', 'Urology', NULL, '2022-01-11 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 1, 'dgh', 'tu', 'h', NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:05:54', '2022-01-11 13:05:54', '', '', '', '', NULL),
(36, '2', 'Urology', NULL, '2022-01-11 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:06:06', '2022-01-11 13:06:06', '', '', '', '', NULL),
(37, '3', 'Urology', NULL, '2022-01-11 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:06:15', '2022-01-11 13:06:15', '', '', '', '', NULL),
(38, '5', 'Urology', NULL, '2022-01-11 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:06:28', '2022-01-11 13:06:28', '', '', '', '', NULL),
(39, '9', 'Urology', NULL, '2022-01-11 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:09', '2022-01-11 13:13:09', '', '', '', '', NULL),
(40, '10', 'Urology', NULL, '2022-01-11 00:00:00', 'kims intetrnational', 0, NULL, 'queue', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:19', '2022-01-11 13:13:19', '', '', '', '', NULL),
(41, '12', 'Urology', NULL, '2022-01-11 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:29', '2022-01-11 13:13:29', '', '', '', '', NULL),
(42, '13', 'Urology', NULL, '2022-01-11 00:00:00', 'kims intetrnational', 0, NULL, 'queue', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:40', '2022-01-11 13:13:40', '', '', '', '', NULL),
(43, '14', 'Urology', NULL, '2022-01-11 00:00:00', 'kims intetrnational', 0, NULL, 'queue', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:50', '2022-01-11 13:13:50', '', '', '', '', NULL),
(44, '2', 'casuality', NULL, '2022-01-14 00:00:00', '', 0, NULL, 'discharged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'normal', 'b', 'b', '1', NULL),
(45, '1', 'casuality', NULL, '2022-01-14 00:00:00', '', 0, NULL, 'discharged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'mercedes', 'e', 'w', '3', NULL),
(46, '3', 'casuality', NULL, '2022-01-15 00:00:00', '', 0, NULL, 'discharged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'normal', 'r`r', 't', '54', NULL),
(47, '6', 'Urology', NULL, '2022-01-14 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 1, 'e', 'r', 'e', NULL, NULL, NULL, '2022-01-14', NULL, '2022-01-14 09:01:27', '2022-01-14 09:01:27', NULL, '', '', '', NULL),
(48, '7', 'Urology', NULL, '2022-01-14 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-14 09:01:40', '2022-01-14 09:01:40', NULL, '', '', '', NULL),
(49, '8', 'Urology', NULL, '2022-01-14 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-14 09:02:21', '2022-01-14 09:02:21', NULL, '', '', '', NULL),
(50, '1', 'casuality', NULL, '2022-01-14 00:00:00', '', 0, NULL, 'discharged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'mercedes', 'p', 'o', '7', NULL),
(51, '2', 'ENT', NULL, '2022-01-18 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-18 04:58:54', '2022-01-18 04:58:54', NULL, '', '', '', NULL),
(52, '1', 'Urology', NULL, '2022-01-18 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 2, 'test details on prescription', 'test details on lab', 'test details on medicine', NULL, NULL, NULL, NULL, NULL, '2022-01-18 07:51:22', '2022-01-18 07:51:22', NULL, '', '', '', NULL),
(53, '2', 'Urology', NULL, '2022-02-02 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 1, 'prescription today2.2.2022', 'lab today2.2.2022', 'medicine today2.2.2022', NULL, NULL, NULL, NULL, NULL, '2022-02-02 11:14:43', '2022-02-02 11:14:43', NULL, '', '', '', NULL),
(54, '3', 'Urology', NULL, '2022-02-02 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-02 11:14:54', '2022-02-02 11:14:54', NULL, '', '', '', NULL),
(55, '5', 'Urology', NULL, '2022-02-02 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-02 11:15:19', '2022-02-02 11:15:19', NULL, '', '', '', NULL),
(56, '5', 'Urology', NULL, '2022-02-07 00:00:00', 'kims intetrnational', 0, NULL, 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-07 09:49:48', '2022-02-07 09:49:48', NULL, '', '', '', NULL),
(57, '16', 'Medical Departments', 112, '2022-05-13 00:00:00', 'kims intetrnational', 500, 100, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-13 06:19:11', '2022-05-13 06:19:11', NULL, '', '', '', NULL),
(58, '17', 'cardiology', 76, '2022-05-16 00:00:00', 'kims intetrnational', 400, 100, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 06:16:18', '2022-05-16 06:16:18', NULL, '', '', '', NULL),
(59, '18', 'Medical Departments', 88, '2022-05-21 00:00:00', 'kims intetrnational', 500, 200, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-21 11:34:51', '2022-05-21 11:34:51', NULL, '', '', '', NULL),
(60, '17', 'Medical Departments', 88, '2022-05-23 00:00:00', 'kims intetrnational', 500, 200, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-23 03:44:04', '2022-05-23 03:44:04', NULL, '', '', '', NULL),
(61, '17', 'Medical Departments', 88, '2022-05-25 00:00:00', 'kims intetrnational', 500, 200, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 05:54:34', '2022-05-25 05:54:34', NULL, '', '', '', NULL),
(62, '18', 'Cardiology', 76, '2022-05-25 00:00:00', 'kims intetrnational', 400, 200, 'appointed', 1, 'calpol 1-mg 1-1-1', 'fsh', 'may be different in next day', NULL, NULL, NULL, NULL, NULL, '2022-05-25 06:03:16', '2022-05-25 06:03:16', NULL, '', '', '', NULL),
(63, '16', 'Medical Departments', 88, '2022-05-25 00:00:00', 'kims intetrnational', 500, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 06:22:10', '2022-05-25 06:22:10', NULL, '', '', '', NULL),
(64, '13', 'Cardiology', 76, '2022-05-25 00:00:00', 'kims intetrnational', 400, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 06:22:53', '2022-05-25 06:22:53', NULL, '', '', '', NULL),
(65, '18', 'Medical Departments', 88, '2022-05-26 00:00:00', 'kims intetrnational', 500, 200, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 04:30:29', '2022-05-26 04:30:29', NULL, '', '', '', NULL),
(66, '17', 'Cardiology', 76, '2022-05-26 00:00:00', 'kims intetrnational', 400, 100, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 04:31:15', '2022-05-26 04:31:15', NULL, '', '', '', NULL),
(67, '16', 'Medical Departments', 88, '2022-05-26 00:00:00', 'kims intetrnational', 500, 100, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 04:31:47', '2022-05-26 04:31:47', NULL, '', '', '', NULL),
(68, '18', 'Medical Departments', 88, '2022-05-26 00:00:00', 'kims intetrnational', 500, NULL, 'called', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 06:11:09', '2022-05-26 06:11:09', NULL, '', '', '', NULL),
(69, '15', 'Medical Departments', 88, '2022-05-26 00:00:00', 'kims intetrnational', 500, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 09:54:02', '2022-05-26 09:54:02', NULL, '', '', '', NULL),
(70, '9', 'Cardiology', 76, '2022-05-26 00:00:00', 'kims intetrnational', 400, NULL, 'called', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 10:20:13', '2022-05-26 10:20:13', NULL, '', '', '', NULL),
(71, '18', 'Medical Departments', 88, '2022-05-27 00:00:00', 'kims intetrnational', 500, 100, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 04:31:25', '2022-05-27 04:31:25', NULL, '', '', '', NULL),
(72, '17', 'Medical Departments', 88, '2022-05-27 00:00:00', 'kims intetrnational', 500, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 04:32:26', '2022-05-27 04:32:26', NULL, '', '', '', NULL),
(73, '16', 'Cardiology', 76, '2022-05-27 00:00:00', 'kims intetrnational', 400, 100, 'appointed', 1, 'fdgff', 'fgfg', 'gfgfg', NULL, NULL, NULL, NULL, NULL, '2022-05-27 04:32:48', '2022-05-27 04:32:48', NULL, '', '', '', NULL),
(74, '9', 'Cardiology', 76, '2022-05-27 00:00:00', 'kims intetrnational', 400, 100, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 04:33:14', '2022-05-27 04:33:14', NULL, '', '', '', NULL),
(75, '1', 'Medical Departments', 88, '2022-05-27 00:00:00', 'kims intetrnational', 500, NULL, 'called', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 11:44:03', '2022-05-27 11:44:03', NULL, '', '', '', NULL),
(76, '11', 'Medical Departments', 88, '2022-05-27 17:17:00', 'kims intetrnational', 500, NULL, 'called', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 11:47:57', '2022-05-27 11:47:57', NULL, '', '', '', NULL),
(77, '3', 'Cardiology', 76, '2022-05-27 17:41:00', 'kims intetrnational', 400, NULL, 'called', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 12:11:19', '2022-05-27 12:11:19', NULL, '', '', '', NULL),
(78, '18', 'Medical Departments', 88, '2022-05-30 09:01:00', 'kims intetrnational', 500, 200, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-30 03:32:05', '2022-05-30 03:32:05', NULL, '', '', '', NULL),
(79, '17', 'Cardiology', 76, '2022-05-30 03:47:00', 'kims intetrnational', 400, 100, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-30 03:53:12', '2022-05-30 03:53:12', NULL, '', '', '', NULL),
(80, '16', 'Cardiology', 76, '2022-05-30 10:08:00', 'kims intetrnational', 400, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-30 04:38:35', '2022-05-30 04:38:35', NULL, '', '', '', NULL),
(81, '18', 'Medical Departments', 88, '2022-05-31 09:41:00', 'kims intetrnational', 500, 100, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-31 04:11:35', '2022-05-31 04:11:35', NULL, '', '', '', NULL),
(82, '17', 'Medical Departments', 88, '2022-05-31 16:39:00', 'kims intetrnational', 500, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-31 11:09:39', '2022-05-31 11:09:39', NULL, '', '', '', NULL),
(83, '18', 'Medical Departments', 88, '2022-06-01 10:47:00', 'kims intetrnational', 500, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 05:18:00', '2022-06-01 05:18:00', NULL, '', '', '', NULL),
(84, '17', 'Medical Departments', 88, '2022-06-01 10:48:00', 'kims intetrnational', 500, 100, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 05:18:27', '2022-06-01 05:18:27', NULL, '', '', '', NULL),
(85, '16', 'Medical Departments', 88, '2022-06-01 10:48:00', 'kims intetrnational', 500, NULL, 'called', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 05:18:50', '2022-06-01 05:18:50', NULL, '', '', '', NULL),
(86, '15', 'Cardiology', 76, '2022-06-01 11:00:00', 'kims intetrnational', 400, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 05:19:17', '2022-06-01 05:19:17', NULL, '', '', '', NULL),
(87, '13', 'Cardiology', 76, '2022-06-01 11:30:00', 'kims intetrnational', 400, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 05:19:41', '2022-06-01 05:19:41', NULL, '', '', '', NULL),
(88, '11', 'Cardiology', 76, '2022-06-01 12:00:00', 'kims intetrnational', 400, 100, 'called', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 05:20:06', '2022-06-01 05:20:06', NULL, '', '', '', NULL),
(89, '9', 'Medical Departments', 88, '2022-06-01 11:33:00', 'kims intetrnational', 500, NULL, 'called', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 06:04:00', '2022-06-01 06:04:00', NULL, '', '', '', NULL),
(90, '18', 'Medical Departments', 88, '2022-06-02 09:45:00', 'kims intetrnational', 500, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-02 04:15:33', '2022-06-02 04:15:33', NULL, '', '', '', NULL),
(91, '17', 'Medical Departments', 88, '2022-06-02 09:54:00', 'kims intetrnational', 500, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-02 04:24:55', '2022-06-02 04:24:55', NULL, '', '', '', NULL),
(92, '18', 'Medical Departments', 88, '2022-06-06 09:03:00', 'kims intetrnational', 500, 100, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-06 03:33:16', '2022-06-06 03:33:16', NULL, '', '', '', NULL),
(93, '17', 'Cardiology', 76, '2022-06-06 09:03:00', 'kims intetrnational', 400, 100, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-06 03:34:08', '2022-06-06 03:34:08', NULL, '', '', '', NULL),
(94, '18', 'Cardiology', 76, '2022-06-07 13:07:00', 'kims intetrnational', 400, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-07 07:37:30', '2022-06-07 07:37:30', NULL, '', '', '', NULL),
(95, '17', 'Cardiology', 76, '2022-06-07 14:15:00', 'kims intetrnational', 400, 100, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-07 08:46:08', '2022-06-07 08:46:08', NULL, '', '', '', NULL),
(96, '16', 'Medical Departments', 88, '2022-06-07 14:16:00', 'kims intetrnational', 500, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-07 08:46:53', '2022-06-07 08:46:53', NULL, '', '', '', NULL),
(97, '18', 'Medical Departments', 88, '2022-06-09 09:35:00', 'kims intetrnational', 500, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-09 04:05:35', '2022-06-09 04:05:35', NULL, '', '', '', NULL),
(98, '17', 'Medical Departments', 88, '2022-06-09 09:36:00', 'kims intetrnational', 500, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-09 04:06:13', '2022-06-09 04:06:13', NULL, '', '', '', NULL),
(99, '18', 'Medical Departments', 88, '2022-06-10 09:34:00', 'kims intetrnational', 500, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-10 04:05:26', '2022-06-10 04:05:26', NULL, '', '', '', NULL),
(100, '17', 'Medical Departments', 88, '2022-06-10 09:35:00', 'kims intetrnational', 500, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-10 04:05:51', '2022-06-10 04:05:51', NULL, '', '', '', NULL),
(101, '16', 'Cardiology', 76, '2022-06-10 09:55:00', 'kims intetrnational', 400, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-10 04:25:49', '2022-06-10 04:25:49', NULL, '', '', '', NULL),
(102, '18', 'Cardiology', 76, '2022-06-15 09:58:00', 'kims intetrnational', 400, 100, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-15 04:29:10', '2022-06-15 04:29:10', NULL, '', '', '', NULL),
(103, '18', 'Medical Departments', 88, '2022-06-20 09:16:00', 'kims intetrnational', 500, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 03:46:55', '2022-06-20 03:46:55', NULL, '', '', '', NULL),
(104, '17', 'Cardiology', 76, '2022-06-20 09:17:00', 'kims intetrnational', 400, NULL, 'called', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 03:47:20', '2022-06-20 03:47:20', NULL, '', '', '', NULL),
(105, '16', 'Medical Departments', 88, '2022-06-20 09:17:00', 'kims intetrnational', 500, NULL, 'queue', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 03:47:37', '2022-06-20 03:47:37', NULL, '', '', '', NULL),
(106, '15', 'Cardiology', 76, '2022-06-20 09:18:00', 'kims intetrnational', 400, NULL, 'called', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 03:48:06', '2022-06-20 03:48:06', NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `atttendance`
--

CREATE TABLE `atttendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Employee Code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PresentDays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Absent Days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Normal Working Hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OT Hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total Leave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Late Coming Days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Late Coming Hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Early Going Days` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Early Going Hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weekly Off` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weekly Off Present` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Holiday Present` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atttendance`
--

INSERT INTO `atttendance` (`id`, `Employee Code`, `PresentDays`, `Absent Days`, `Normal Working Hours`, `OT Hours`, `CL`, `PL`, `SL`, `Total Leave`, `Late Coming Days`, `Late Coming Hours`, `Early Going Days`, `Early Going Hours`, `Weekly Off`, `Weekly Off Present`, `Holiday`, `Holiday Present`, `a`, `created_at`, `updated_at`) VALUES
(1, '900038', '15', '12', '18', '10:49:00', '00:00:00', '0', '0', '0', '0', '4', '01:30:00', '2', '00:15:00', '5', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(2, '900039', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(3, '900040', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(4, '900041', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(5, '900042', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(6, '900043', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(7, '900044', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(8, '900045', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(9, '900046', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(10, '900047', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(11, '900048', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(12, '900049', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(13, '900050', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(14, '900051', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(15, '900052', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(16, '900053', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(17, '900054', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(18, '900055', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(19, '900056', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(20, '900057', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(21, '900058', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26'),
(22, '0900065', '15', '14', '16', '01:26:00', '00:00:00', '0', '0', '0', '0', '0', '00:00:00', '0', '00:00:00', '4', '0.5', '0', NULL, '2021-12-24 00:56:26', '2021-12-24 00:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bedname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allocateduser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `js` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` bigint(100) DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinicalnotes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opd_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipd_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Batch_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avilable_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand_names`
--

CREATE TABLE `brand_names` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_names`
--

INSERT INTO `brand_names` (`id`, `brand_name`) VALUES
(1, 'demo brand');

-- --------------------------------------------------------

--
-- Table structure for table `callambulance`
--

CREATE TABLE `callambulance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ambulance_id` int(11) NOT NULL,
  `Patient_id` int(11) NOT NULL,
  `distance` double(8,2) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `paid_status` int(11) NOT NULL,
  `trip_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `from` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'cat1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dailyattendances`
--

CREATE TABLE `dailyattendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `staffname` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `depname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `depname`, `updated_at`, `created_at`, `hospital`) VALUES
(36, 'Medical Departments', '2022-02-15 06:31:43', '2022-02-15 06:31:43', 'kims intetrnational'),
(37, 'Nursing Department', '2022-02-15 06:35:16', '2022-02-15 06:35:16', 'kims intetrnational'),
(38, 'Paramedical Department', '2022-02-15 06:35:23', '2022-02-15 06:35:23', 'kims intetrnational'),
(39, 'Rehabilitation Department', '2022-02-15 06:35:35', '2022-02-15 06:35:35', 'kims intetrnational'),
(40, 'Cardiology', '2022-02-16 07:54:13', '2022-02-16 07:54:13', 'kims intetrnational'),
(41, 'Outpatient department (OPD)', '2022-02-26 06:47:00', '2022-02-26 06:47:00', 'kims intetrnational'),
(42, 'ENT', '2022-02-26 06:47:07', '2022-02-26 06:47:07', 'kims intetrnational'),
(43, 'Peadiatric', '2022-05-23 04:24:23', '2022-05-23 04:24:23', 'kims intetrnational'),
(44, 'Gynacology', '2022-05-23 07:47:09', '2022-05-23 07:47:09', 'kims intetrnational'),
(45, 'Ortho', '2022-05-23 09:46:48', '2022-05-23 09:46:48', 'kims intetrnational'),
(51, 'Pharmacy', '2022-06-10 10:07:18', '2022-06-10 10:07:18', 'kims intetrnational'),
(52, 'Lab', '2022-06-10 11:18:47', '2022-06-10 11:18:47', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `dutyschedule`
--

CREATE TABLE `dutyschedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staffid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fromdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `todate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fromtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dutyschedule`
--

INSERT INTO `dutyschedule` (`id`, `staffid`, `fromdate`, `todate`, `fromtime`, `totime`, `created_at`, `updated_at`, `department`) VALUES
(10, '0900090', '2022-02-16', '2022-02-18', '7:00 AM', '4:00 PM', '2022-02-16 02:03:27', '2022-02-16 02:03:27', NULL),
(11, '0900099', '2022-02-18', '2022-02-19', '6:00 AM', '4:00 PM', '2022-02-17 22:45:43', '2022-02-17 22:45:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fifo_table_acc`
--

CREATE TABLE `fifo_table_acc` (
  `id` int(11) NOT NULL,
  `tranaction_date` date NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `transaction_type` int(11) NOT NULL COMMENT '1 receipt 2 for issue',
  `item` int(11) NOT NULL,
  `receipt_qty` int(11) NOT NULL,
  `receipt_rate` double NOT NULL,
  `receipt_amount` double NOT NULL,
  `issue_qty` int(11) NOT NULL,
  `issue_rate` double NOT NULL,
  `issue_amount` double NOT NULL,
  `balance_qty` int(11) NOT NULL,
  `balance_rate` double NOT NULL,
  `balance_amount` double NOT NULL,
  `transaction_company` varchar(150) NOT NULL,
  `issue_recpt_id` int(11) DEFAULT NULL,
  `transaction_addedby` int(11) NOT NULL,
  `transaction_addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_bal_qty` int(11) DEFAULT NULL,
  `added_bal_rate` double DEFAULT NULL,
  `added_bal_amnt` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fifo_table_acc`
--

INSERT INTO `fifo_table_acc` (`id`, `tranaction_date`, `transaction_id`, `transaction_type`, `item`, `receipt_qty`, `receipt_rate`, `receipt_amount`, `issue_qty`, `issue_rate`, `issue_amount`, `balance_qty`, `balance_rate`, `balance_amount`, `transaction_company`, `issue_recpt_id`, `transaction_addedby`, `transaction_addedon`, `added_bal_qty`, `added_bal_rate`, `added_bal_amnt`) VALUES
(5, '2022-03-10', 5, 1, 6, 10, 120, 1200, 0, 0, 0, 0, 120, 0, 'kims intetrnational', NULL, 47, '2022-04-01 04:37:30', 10, 120, 1200),
(6, '2022-03-13', 6, 1, 6, 15, 150, 2250, 0, 0, 0, 0, 150, 0, 'kims intetrnational', NULL, 47, '2022-06-01 07:11:45', 15, 150, 2250),
(7, '2022-03-18', 7, 1, 6, 8, 130, 1040, 0, 0, 0, 8, 130, 1040, 'kims intetrnational', NULL, 47, '2022-03-31 12:43:20', 8, 130, 1040),
(8, '2022-03-19', 8, 2, 6, 0, 0, 0, 10, 120, 1200, 10, 120, 1200, 'kims intetrnational', 5, 47, '2022-04-01 04:37:30', NULL, NULL, NULL),
(9, '2022-03-19', 8, 2, 6, 0, 0, 0, 3, 150, 450, 3, 150, 450, 'kims intetrnational', 6, 47, '2022-04-01 04:37:30', NULL, NULL, NULL),
(10, '2022-03-15', 9, 2, 6, 0, 0, 0, 10, 150, 1500, 10, 150, 1500, 'kims intetrnational', 6, 47, '2022-04-01 05:41:55', NULL, NULL, NULL),
(11, '2022-06-01', 10, 2, 6, 0, 0, 0, 2, 150, 300, 2, 150, 300, 'kims intetrnational', 6, 40, '2022-06-01 07:11:45', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointmentid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itsname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `appointmentid`, `itsname`, `created_at`, `updated_at`) VALUES
(1, 'myfiles/gxfhSL6KmM3tA6VCSo7jD6qXxbsztjeSRaOnyoVS.html', '11', NULL, '2021-12-06 03:24:25', '2021-12-06 03:24:25'),
(2, 'myfiles/yqwr0iaPbdS8cUyFYHAoIKzKzlUMYCamSMIlmcF6.jpg', '11', NULL, '2021-12-06 03:24:25', '2021-12-06 03:24:25'),
(3, 'myfiles/YtHzi0QWb2pxapwUZLVLCulAWvwmBusSozTdE29p.txt', '12', NULL, '2021-12-06 03:25:25', '2021-12-06 03:25:25'),
(4, 'myfiles/nJJyfZ0LAsliLAiG6yAs2nj1vuRY0SXDsqgqAAHC.txt', '12', NULL, '2021-12-06 03:25:25', '2021-12-06 03:25:25'),
(5, 'myfiles/TjHIhydbhw9ngRoDGYJqPiz7mVDEk6LMJT8kCChJ.pdf', '16', NULL, '2021-12-24 00:25:45', '2021-12-24 00:25:45'),
(6, 'myfiles/0CZpETfr0e2h3AC6hfGmeDcsIzE8mKdyhx8XH2vK.txt', '19', NULL, '2021-12-24 01:35:43', '2021-12-24 01:35:43'),
(7, 'myfiles/sQ1nfWhYXoi967DnPw8Gn6bciBBdJLyBiUyg03fd.txt', '21', NULL, '2021-12-24 01:36:31', '2021-12-24 01:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `generic_medicines`
--

CREATE TABLE `generic_medicines` (
  `id` int(11) NOT NULL,
  `generic_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `generic_names`
--

CREATE TABLE `generic_names` (
  `id` int(11) NOT NULL,
  `generic_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generic_names`
--

INSERT INTO `generic_names` (`id`, `generic_name`) VALUES
(1, 'gen name');

-- --------------------------------------------------------

--
-- Table structure for table `giveallowance`
--

CREATE TABLE `giveallowance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staffid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowanceid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checked` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giveallowance`
--

INSERT INTO `giveallowance` (`id`, `staffid`, `allowanceid`, `type`, `updated_at`, `created_at`, `checked`) VALUES
(1, '1100070', '69', 'reduction', '2021-12-20 12:38:32', '2021-12-20 12:38:32', NULL),
(2, '1100070', '78', 'reduction', '2021-12-20 12:38:32', '2021-12-20 12:38:32', NULL),
(3, '1100070', '72', 'allowance', '2021-12-20 12:38:32', '2021-12-20 12:38:32', NULL),
(4, '1100070', '73', 'allowance', '2021-12-20 12:38:32', '2021-12-20 12:38:32', NULL),
(5, '1100070', '74', 'allowance', '2021-12-20 12:38:32', '2021-12-20 12:38:32', NULL),
(6, '1100070', '80', 'allowance', '2021-12-21 08:27:34', '2021-12-21 08:27:34', 'checked=\"\"'),
(7, '1100070', '86', 'allowance', '2021-12-21 11:54:54', '2021-12-21 11:54:54', 'checked=\"\"'),
(8, '1100070', '88', 'allowance', '2021-12-21 11:54:54', '2021-12-21 11:54:54', 'checked=\"\"'),
(9, '1100070', '89', 'allowance', '2021-12-21 11:54:54', '2021-12-21 11:54:54', 'checked=\"\"'),
(10, '0900060', '45', 'allowance', '2021-12-22 05:07:21', '2021-12-22 05:07:21', 'checked=\"\"'),
(11, '0900060', '59', 'allowance', '2021-12-22 05:07:21', '2021-12-22 05:07:21', 'checked=\"\"'),
(12, '0900060', '75', 'allowance', '2021-12-22 05:07:22', '2021-12-22 05:07:22', 'checked=\"\"'),
(13, '0900060', '45', 'reduction', '2021-12-22 05:07:29', '2021-12-22 05:07:29', 'checked=\"\"'),
(14, '0900060', '59', 'reduction', '2021-12-22 05:07:29', '2021-12-22 05:07:29', 'checked=\"\"'),
(15, '0900060', '75', 'reduction', '2021-12-22 05:07:30', '2021-12-22 05:07:30', 'checked=\"\"'),
(16, '0900060', '41', 'reduction', '2021-12-22 05:07:30', '2021-12-22 05:07:30', 'checked=\"\"'),
(17, '0900060', '57', 'reduction', '2021-12-22 05:07:30', '2021-12-22 05:07:30', 'checked=\"\"'),
(18, '1100071', '86', 'allowance', '2021-12-22 07:18:26', '2021-12-22 07:18:26', 'checked=\"\"'),
(19, '1100071', '86', 'reduction', '2021-12-22 07:18:28', '2021-12-22 07:18:28', 'checked=\"\"'),
(20, '1100071', '78', 'reduction', '2021-12-22 07:18:29', '2021-12-22 07:18:29', 'checked=\"\"'),
(21, '0900065', '20', 'reduction', '2021-12-24 06:32:59', '2021-12-24 06:32:59', 'checked=\"\"'),
(22, '0900065', '23', 'reduction', '2021-12-24 06:32:59', '2021-12-24 06:32:59', 'checked=\"\"'),
(23, '0900065', '25', 'reduction', '2021-12-24 06:32:59', '2021-12-24 06:32:59', 'checked=\"\"'),
(24, '0900065', '19', 'allowance', '2021-12-24 06:33:03', '2021-12-24 06:33:03', 'checked=\"\"'),
(25, '0900065', '21', 'allowance', '2021-12-24 06:33:03', '2021-12-24 06:33:03', 'checked=\"\"'),
(26, '0900065', '22', 'allowance', '2021-12-24 06:33:03', '2021-12-24 06:33:03', 'checked=\"\"'),
(27, '0900065', '20', 'allowance', '2021-12-24 06:33:03', '2021-12-24 06:33:03', 'checked=\"\"'),
(28, '0900065', '23', 'allowance', '2021-12-24 06:33:03', '2021-12-24 06:33:03', 'checked=\"\"'),
(29, '0900065', '25', 'allowance', '2021-12-24 06:33:03', '2021-12-24 06:33:03', 'checked=\"\"'),
(30, '1100071', '10', 'allowance', '2021-12-31 05:28:48', '2021-12-31 05:28:48', 'checked=\"\"'),
(31, '1100058', '34', 'reduction', '2021-12-31 05:31:41', '2021-12-31 05:31:41', 'checked=\"\"'),
(32, '1100058', '10', 'allowance', '2021-12-31 05:31:44', '2021-12-31 05:31:44', 'checked=\"\"'),
(33, '1100058', '33', 'allowance', '2021-12-31 05:31:44', '2021-12-31 05:31:44', 'checked=\"\"'),
(34, '1100058', '34', 'allowance', '2021-12-31 05:31:44', '2021-12-31 05:31:44', 'checked=\"\"'),
(35, '0900074', '25', 'reduction', '2022-01-03 08:14:35', '2022-01-03 08:14:35', NULL),
(36, '0900074', '32', 'reduction', '2022-01-03 08:14:35', '2022-01-03 08:14:35', NULL),
(37, '0900074', '22', 'allowance', '2022-01-03 08:14:35', '2022-01-03 08:14:35', NULL),
(38, '0900074', '30', 'allowance', '2022-01-03 08:14:35', '2022-01-03 08:14:35', NULL),
(39, '0900046', '22', 'allowance', '2022-01-10 12:43:05', '2022-01-10 12:43:05', 'checked=\"\"'),
(40, '0900046', '30', 'allowance', '2022-01-10 12:43:05', '2022-01-10 12:43:05', 'checked=\"\"'),
(41, '0900050', '22', 'allowance', '2022-02-26 09:58:57', '2022-02-26 09:58:57', 'checked=\"\"'),
(42, '0900050', '36', 'allowance', '2022-02-26 09:58:57', '2022-02-26 09:58:57', 'checked=\"\"'),
(43, '0900050', '22', 'reduction', '2022-02-26 09:59:07', '2022-02-26 09:59:07', 'checked=\"\"'),
(44, '0900050', '36', 'reduction', '2022-02-26 09:59:07', '2022-02-26 09:59:07', 'checked=\"\"'),
(45, '0900050', '25', 'reduction', '2022-02-26 09:59:07', '2022-02-26 09:59:07', 'checked=\"\"'),
(46, '0900041', '22', 'allowance', '2022-02-26 10:12:18', '2022-02-26 10:12:18', 'checked=\"\"'),
(47, '0900041', '36', 'allowance', '2022-02-26 10:12:19', '2022-02-26 10:12:19', 'checked=\"\"'),
(48, '0900041', '39', 'allowance', '2022-02-26 10:12:19', '2022-02-26 10:12:19', 'checked=\"\"'),
(49, '0900041', '40', 'allowance', '2022-02-26 10:12:19', '2022-02-26 10:12:19', 'checked=\"\"'),
(50, '0900041', '22', 'reduction', '2022-02-26 10:12:28', '2022-02-26 10:12:28', 'checked=\"\"'),
(51, '0900041', '36', 'reduction', '2022-02-26 10:12:28', '2022-02-26 10:12:28', 'checked=\"\"'),
(52, '0900041', '39', 'reduction', '2022-02-26 10:12:28', '2022-02-26 10:12:28', 'checked=\"\"'),
(53, '0900041', '40', 'reduction', '2022-02-26 10:12:28', '2022-02-26 10:12:28', 'checked=\"\"'),
(54, '0900041', '38', 'reduction', '2022-02-26 10:12:28', '2022-02-26 10:12:28', 'checked=\"\"'),
(55, '0900041', '41', 'reduction', '2022-02-26 10:12:29', '2022-02-26 10:12:29', 'checked=\"\"'),
(56, '0900042', '25', 'reduction', '2022-02-26 10:29:35', '2022-02-26 10:29:35', 'checked=\"\"'),
(57, '0900042', '37', 'reduction', '2022-02-26 10:29:35', '2022-02-26 10:29:35', 'checked=\"\"'),
(58, '0900042', '38', 'reduction', '2022-02-26 10:29:36', '2022-02-26 10:29:36', 'checked=\"\"'),
(59, '0900042', '41', 'reduction', '2022-02-26 10:29:36', '2022-02-26 10:29:36', 'checked=\"\"'),
(60, '0900052', '22', 'allowance', '2022-02-26 10:31:29', '2022-02-26 10:31:29', 'checked=\"\"'),
(61, '0900052', '36', 'allowance', '2022-02-26 10:31:29', '2022-02-26 10:31:29', 'checked=\"\"'),
(62, '0900052', '39', 'allowance', '2022-02-26 10:31:29', '2022-02-26 10:31:29', 'checked=\"\"'),
(63, '0900052', '40', 'allowance', '2022-02-26 10:31:30', '2022-02-26 10:31:30', 'checked=\"\"');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `history_appid` int(11) DEFAULT NULL,
  `history_date` date DEFAULT NULL,
  `history_detailes` text DEFAULT NULL,
  `history_doc` varchar(200) DEFAULT NULL,
  `history_addedby` int(11) DEFAULT NULL,
  `history_createdat` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `history_appid`, `history_date`, `history_detailes`, `history_doc`, `history_addedby`, `history_createdat`) VALUES
(1, 92, '2022-06-06', 'fdsddgfg', 'C:\\Users\\user9\\AppData\\Local\\Temp\\php6287.tmp', 88, NULL),
(2, 94, '2022-06-07', 'diabetics', 'C:\\Users\\user9\\AppData\\Local\\Temp\\php6538.tmp', 76, NULL),
(3, 94, '2022-06-07', 'thyroid started', 'C:\\Users\\user9\\AppData\\Local\\Temp\\php615C.tmp', 76, NULL),
(4, 94, '2022-06-07', 'dfsdfsd', NULL, 76, NULL),
(5, 94, '2022-06-07', 'dffdf', 'C:\\Users\\user9\\AppData\\Local\\Temp\\phpF098.tmp', 76, NULL),
(6, 94, '2022-06-07', 'xcxcxc', 'C:\\Users\\user9\\AppData\\Local\\Temp\\php65EA.tmp', 76, NULL),
(7, 97, '2022-06-09', 'thyroid', '20220609042942.png', 88, NULL),
(8, 97, '2022-06-09', 'dsfdf', 'C:\\Users\\user9\\AppData\\Local\\Temp\\php8271.tmp', 88, NULL),
(9, 97, '2022-06-09', 'zfsfdf', 'C:\\Users\\user9\\AppData\\Local\\Temp\\php9441.tmp', 88, NULL),
(10, 98, '2022-06-09', 'svgdgdvgdvg', 'C:\\Users\\user9\\AppData\\Local\\Temp\\php5562.tmp', 88, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accounting_method` int(11) NOT NULL,
  `profit_margin` float NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acrooms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryrooms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wardbeds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acroomcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roomcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryroomcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wardbedcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `location`, `departments`, `category`, `accounting_method`, `profit_margin`, `time`, `acrooms`, `rooms`, `categoryrooms`, `wardbeds`, `acroomcharge`, `roomcharge`, `categoryroomcharge`, `wardbedcharge`, `created_at`, `updated_at`) VALUES
(1, 'Holycross', 'kottiyam', NULL, 'gyno', 0, 0, NULL, '10', '10', '15', '15', '150', '100', '1560', '15', '2021-10-05 01:05:03', '2021-10-05 01:05:03'),
(2, 'GSM', 'trivandrum', NULL, 'anything', 0, 0, NULL, '7', '52', '9', '14', '10', '50', '120', '300', '2021-10-05 01:05:19', '2021-10-05 01:05:19'),
(3, 'testinghospital', 'here', NULL, 'anything', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-05 01:05:44', '2021-10-05 01:05:44'),
(4, 'Oppollo', 'chennai', NULL, 'everything', 0, 0, NULL, '20', '10', '12', '20', '1000', '500', '321', '123', '2021-10-06 22:23:28', '2021-10-06 22:23:28'),
(5, 'SSNM', 'here', NULL, 'anything', 0, 0, NULL, '14', '5', '17', '15', '500', '100', '500', '20', '2021-10-08 05:04:18', '2021-10-08 05:04:18'),
(6, 'abc', 'here', NULL, 'a', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-08 07:02:25', '2021-10-08 07:02:25'),
(7, 'test', 'hg', NULL, 'hg', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-09 01:23:12', '2021-10-09 01:23:12'),
(8, 'hollo', 'hkl', NULL, 'kh', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-09 01:23:21', '2021-10-09 01:23:21'),
(9, 'kims intetrnational', 'fg', NULL, 'gd', 1, 20, NULL, '6', '{\"Roomno\":6,\"Hospital\":\"kims intetrnational\",\"category\":\"ac\",\"updated_at\":\"2022-02-02T10:58:43.000000Z\",\"created_at\":\"2022-02-02T10:58:43.000000Z\",\"id\":814}', '5', '5', '50', '50', '60', '10', '2021-10-09 01:23:38', '2021-10-09 01:23:38'),
(10, 'KIms local', 'sd', NULL, 'gf', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-09 01:23:48', '2021-10-09 01:23:48'),
(11, 'D-clinic', 'TVM', NULL, 'all', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-30 02:17:56', '2021-10-30 02:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `issue_registers`
--

CREATE TABLE `issue_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alert` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issue_registers`
--

INSERT INTO `issue_registers` (`id`, `date`, `department`, `status`, `medicine_name`, `medicine_category`, `quantity`, `price`, `amount`, `alert`, `created_at`, `updated_at`) VALUES
(1, '2022-01-14', 'Nursing Department', 'Pending', 'KG Nitros 009', 'general', '20', '10', '20', '10', NULL, NULL),
(2, '2022-01-20', 'Physical Medicine', 'Cleared', 'med 200', 'general', '10', '20', '20', '20', NULL, NULL),
(3, '2022-01-14', 'Paramedical Department', 'Status', 'Reeril', 'general', '6', '60', '60', '60', NULL, NULL);

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
(1, 1, '2022-03-09 10:50:53', 1, 27, 0, 27, 5000000),
(2, 1, '2022-03-09 10:50:53', 2, 0, 2, 2, 5000000),
(3, 2, '2022-03-09 10:51:20', 1, 2, 0, 2, 3000000),
(4, 2, '2022-03-09 10:51:20', 2, 0, 1, 1, 3000000),
(5, 3, '2022-03-09 10:51:54', 1, 2, 0, 2, 600000),
(6, 3, '2022-03-09 10:51:54', 2, 0, 16, 16, 600000),
(7, 4, '2022-03-09 10:52:21', 1, 2, 0, 2, 600000),
(8, 4, '2022-03-09 10:52:21', 2, 0, 28, 28, 600000),
(9, 5, '2022-03-09 10:54:21', 1, 1, 0, 1, 50000),
(10, 5, '2022-03-09 10:54:21', 2, 0, 29, 29, 50000),
(11, 6, '2022-03-09 10:55:11', 1, 30, 0, 30, 700000),
(12, 6, '2022-03-09 10:55:11', 2, 0, 2, 2, 700000),
(13, 7, '2022-03-09 10:57:20', 1, 2, 0, 2, 18000),
(14, 7, '2022-03-09 10:57:20', 2, 0, 41, 41, 18000),
(15, 8, '2022-03-09 10:58:02', 1, 31, 0, 31, 1000000),
(16, 8, '2022-03-09 10:58:02', 2, 0, 16, 16, 1000000),
(17, 9, '2022-03-09 10:58:37', 1, 30, 0, 30, 1200000),
(18, 9, '2022-03-09 10:58:37', 2, 0, 33, 33, 1200000),
(19, 10, '2022-03-09 11:03:16', 1, 1, 0, 1, 200000),
(20, 10, '2022-03-09 11:03:16', 2, 0, 42, 42, 200000),
(21, 11, '2022-03-09 11:03:43', 1, 1, 0, 1, 150000),
(22, 11, '2022-03-09 11:03:43', 2, 0, 34, 34, 150000),
(23, 12, '2022-03-09 11:04:10', 1, 2, 0, 2, 40000),
(24, 12, '2022-03-09 11:04:10', 2, 0, 37, 37, 40000),
(25, 13, '2022-03-09 11:04:36', 1, 33, 0, 33, 800000),
(26, 13, '2022-03-09 11:04:36', 2, 0, 1, 1, 800000),
(27, 14, '2022-03-09 11:04:59', 1, 31, 0, 31, 800000),
(28, 14, '2022-03-09 11:04:59', 2, 0, 16, 16, 800000),
(29, 15, '2022-03-09 11:05:28', 1, 30, 0, 30, 500000),
(30, 15, '2022-03-09 11:05:28', 2, 0, 2, 2, 500000),
(31, 16, '2022-03-09 11:05:53', 1, 30, 0, 30, 800000),
(32, 16, '2022-03-09 11:05:53', 2, 0, 33, 33, 800000),
(33, 17, '2022-03-09 11:06:16', 1, 1, 0, 1, 100000),
(34, 17, '2022-03-09 11:06:16', 2, 0, 2, 2, 100000),
(35, 18, '2022-03-09 11:07:31', 1, 1, 0, 1, 120000),
(36, 18, '2022-03-09 11:07:31', 2, 0, 43, 43, 120000),
(37, 19, '2022-03-09 11:07:55', 1, 1, 0, 1, 20000),
(38, 19, '2022-03-09 11:07:55', 2, 0, 35, 35, 20000),
(39, 20, '2022-03-09 11:08:17', 1, 33, 0, 33, 200000),
(40, 20, '2022-03-09 11:08:17', 2, 0, 2, 2, 200000),
(41, 21, '2022-03-09 11:08:44', 1, 2, 0, 2, 150000),
(42, 21, '2022-03-09 11:08:44', 2, 0, 31, 31, 150000),
(43, 22, '2022-03-09 11:09:10', 1, 36, 0, 36, 20000),
(44, 22, '2022-03-09 11:09:10', 2, 0, 2, 2, 20000),
(45, 23, '2022-03-09 11:09:40', 1, 2, 0, 2, 15000),
(46, 23, '2022-03-09 11:09:40', 2, 0, 13, 13, 15000),
(47, 24, '2022-03-09 11:10:07', 1, 2, 0, 2, 40000),
(48, 24, '2022-03-09 11:10:07', 2, 0, 37, 37, 40000),
(49, 25, '2022-03-09 11:10:49', 1, 1, 0, 1, 41000),
(50, 25, '2022-03-09 11:10:49', 2, 0, 38, 38, 25000),
(51, 25, '2022-03-09 11:10:49', 2, 0, 39, 39, 16000),
(52, 26, '2022-03-09 11:12:30', 1, 28, 0, 28, 5000),
(53, 26, '2022-03-09 11:12:30', 1, 29, 0, 29, 2500),
(54, 26, '2022-03-09 11:12:31', 2, 0, 44, 44, 7500),
(55, 27, '2022-03-09 11:14:03', 1, 1, 0, 1, 5000),
(56, 27, '2022-03-09 11:14:03', 2, 0, 45, 45, 5000),
(57, 28, '2022-03-09 11:15:14', 1, 46, 0, 46, 4000),
(58, 28, '2022-03-09 11:15:14', 2, 0, 2, 2, 4000),
(59, 29, '2022-03-09 11:24:15', 1, 1, 0, 1, 400000),
(60, 29, '2022-03-09 11:24:15', 2, 0, 31, 31, 400000),
(82, 43, '2022-03-12 08:33:54', 1, 50, 0, 50, 1000),
(83, 43, '2022-03-12 08:33:54', 2, 0, 52, 52, 1000),
(84, 44, '2022-03-12 08:48:29', 1, 33, 0, 33, 10000),
(85, 44, '2022-03-12 08:48:29', 1, 27, 0, 27, 5550),
(86, 44, '2022-03-12 08:48:29', 2, 0, 34, 34, 5000),
(87, 44, '2022-03-12 08:48:29', 2, 0, 28, 28, 10000),
(88, 44, '2022-03-12 08:48:29', 2, 0, 2, 2, 550);

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
(1, '2022-03-01 00:00:00', '2022-03-09 10:50:53', 'sdsds', 37, '', 'kims intetrnational'),
(2, '2022-03-02 00:00:00', '2022-03-09 10:51:20', 'csfdsds', 37, '', 'kims intetrnational'),
(3, '2022-03-02 00:00:00', '2022-03-09 10:51:54', 'sfsfd', 37, '', 'kims intetrnational'),
(4, '2022-03-03 00:00:00', '2022-03-09 10:52:21', 'demo', 37, '', 'kims intetrnational'),
(5, '2022-03-03 00:00:00', '2022-03-09 10:54:21', 'dsds', 37, '', 'kims intetrnational'),
(6, '2022-03-04 00:00:00', '2022-03-09 10:55:11', 'demo', 37, '', 'kims intetrnational'),
(7, '2022-03-03 00:00:00', '2022-03-09 10:57:20', 'dsds', 37, '', 'kims intetrnational'),
(8, '2022-03-05 00:00:00', '2022-03-09 10:58:02', 'fdfdf', 37, '', 'kims intetrnational'),
(9, '2022-03-06 00:00:00', '2022-03-09 10:58:37', 'xvxvx', 37, '', 'kims intetrnational'),
(10, '2022-03-09 00:00:00', '2022-03-09 11:03:16', 'fdfd', 37, '', 'kims intetrnational'),
(11, '2022-03-08 00:00:00', '2022-03-09 11:03:43', 'dsds', 37, '', 'kims intetrnational'),
(12, '2022-03-05 00:00:00', '2022-03-09 11:04:10', 'dsds', 37, '', 'kims intetrnational'),
(13, '2022-03-08 00:00:00', '2022-03-09 11:04:36', 'fsfs', 37, '', 'kims intetrnational'),
(14, '2022-03-03 00:00:00', '2022-03-09 11:04:59', 'dss', 37, '', 'kims intetrnational'),
(15, '2022-03-12 00:00:00', '2022-03-09 11:05:28', 'dss', 37, '', 'kims intetrnational'),
(16, '2022-03-15 00:00:00', '2022-03-09 11:05:53', 'dssd', 37, '', 'kims intetrnational'),
(17, '2022-03-10 00:00:00', '2022-03-09 11:06:16', 'dsds', 37, '', 'kims intetrnational'),
(18, '2022-03-04 00:00:00', '2022-03-09 11:07:31', 'dsasd', 37, '', 'kims intetrnational'),
(19, '2022-03-11 00:00:00', '2022-03-09 11:07:55', 'dsds', 37, '', 'kims intetrnational'),
(20, '2022-03-13 00:00:00', '2022-03-09 11:08:17', 'dasd', 37, '', 'kims intetrnational'),
(21, '2022-03-13 00:00:00', '2022-03-09 11:08:44', 'scsds', 37, '', 'kims intetrnational'),
(22, '2022-03-10 00:00:00', '2022-03-09 11:09:10', 'dasda', 37, '', 'kims intetrnational'),
(23, '2022-03-10 00:00:00', '2022-03-09 11:09:40', 'sdsd', 37, '', 'kims intetrnational'),
(24, '2022-03-19 00:00:00', '2022-03-09 11:10:07', 'fsdfd', 37, '', 'kims intetrnational'),
(25, '2022-03-11 00:00:00', '2022-03-09 11:10:49', 'dsds', 37, '', 'kims intetrnational'),
(26, '2022-03-23 00:00:00', '2022-03-09 11:12:30', 'dsd', 37, '', 'kims intetrnational'),
(27, '2022-03-10 00:00:00', '2022-03-09 11:14:03', 'dasds', 37, '', 'kims intetrnational'),
(28, '2022-03-15 00:00:00', '2022-03-09 11:15:14', 'sds', 37, '', 'kims intetrnational'),
(29, '2022-03-19 00:00:00', '2022-03-09 11:24:15', 'ghgh', 37, '', 'kims intetrnational'),
(43, '2022-03-12 00:00:00', '2022-03-12 08:33:54', 'sasa', 37, '', 'kims intetrnational'),
(44, '2022-03-12 00:00:00', '2022-03-12 08:48:29', 'dsdsd', 37, '', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `labcategory`
--

CREATE TABLE `labcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labcategory`
--

INSERT INTO `labcategory` (`id`, `name`, `created_at`, `updated_at`, `hospital`) VALUES
(8, 'microbiolgy', '2022-01-22 02:12:49', '2022-01-22 02:12:49', ''),
(9, 'seriology', '2022-01-22 02:12:56', '2022-01-22 02:12:56', ''),
(10, 'medico', '2022-01-22 02:13:02', '2022-01-22 02:13:02', '');

-- --------------------------------------------------------

--
-- Table structure for table `labprofile`
--

CREATE TABLE `labprofile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tests` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labprofile`
--

INSERT INTO `labprofile` (`id`, `name`, `price`, `created_at`, `updated_at`, `tests`, `hospital`) VALUES
(1, 'q', '5', '2022-01-29 03:03:04', '2022-01-29 03:03:04', '11', 'kims intetrnational'),
(2, 'q', '5', '2022-01-29 03:03:04', '2022-01-29 03:03:04', 'TRIGLYCERIDES', 'kims intetrnational'),
(3, 'q', '5', '2022-01-29 03:03:04', '2022-01-29 03:03:04', 'Sugarwq1', 'kims intetrnational'),
(4, 'doc-profile', '5', '2022-01-29 03:51:03', '2022-01-29 03:51:03', '15', 'kims intetrnational'),
(5, 'doc-profile', '5', '2022-01-29 03:51:03', '2022-01-29 03:51:03', 'bloodpressure', 'kims intetrnational'),
(6, 'b', '5', '2022-01-29 03:51:39', '2022-01-29 03:51:39', '14', 'kims intetrnational'),
(7, 'b', '5', '2022-01-29 03:52:50', '2022-01-29 03:52:50', '14', 'kims intetrnational'),
(8, 'p', '5', '2022-01-29 03:52:56', '2022-01-29 03:52:56', 'bloodpressure', 'kims intetrnational'),
(9, 'poi', '5', '2022-01-29 03:53:17', '2022-01-29 03:53:17', 'bloodpressure', 'kims intetrnational'),
(10, 'poi', '5', '2022-01-29 03:53:17', '2022-01-29 03:53:17', 'doc-test', 'kims intetrnational'),
(11, 'heartdisease', '5', '2022-01-29 05:54:42', '2022-01-29 05:54:42', 'TRIGLYCERIDES', 'kims intetrnational'),
(12, 'heartdisease', '5', '2022-01-29 05:54:42', '2022-01-29 05:54:42', 'doc-test', 'kims intetrnational'),
(13, 'heartdisease', '5', '2022-01-29 05:54:42', '2022-01-29 05:54:42', 'bloodpressure', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `labprofiles`
--

CREATE TABLE `labprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labprofiles`
--

INSERT INTO `labprofiles` (`id`, `name`, `created_at`, `updated_at`, `hospital`) VALUES
(13, 'q', '2022-01-29 03:03:04', '2022-01-29 03:03:04', 'kims intetrnational'),
(14, 'doc-profile', '2022-01-29 03:51:03', '2022-01-29 03:51:03', 'kims intetrnational'),
(17, 'p', '2022-01-29 03:52:56', '2022-01-29 03:52:56', 'kims intetrnational'),
(18, 'poi', '2022-01-29 03:53:17', '2022-01-29 03:53:17', 'kims intetrnational'),
(19, 'heartdisease', '2022-01-29 05:54:42', '2022-01-29 05:54:42', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `labtests`
--

CREATE TABLE `labtests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labtests`
--

INSERT INTO `labtests` (`id`, `name`, `category`, `price`, `reference_range`, `unit`, `method`, `created_at`, `updated_at`, `hospital`) VALUES
(12, 'TRIGLYCERIDES', 'seriology', '45', '54', 'f', 'h', '2022-01-22 06:37:18', '2022-01-22 06:37:18', NULL),
(13, 'Sugarwq1', 'medicoq1', '2311', '41', '51', 'g1', '2022-01-22 06:37:34', '2022-01-22 06:37:34', NULL),
(14, 'bloodpressure', 'medico', '500', '50', '5', '4', '2022-01-29 03:50:15', '2022-01-29 03:50:15', 'kims intetrnational'),
(15, 'doc-test', 'microbiolgy', '6', '9', '1', '1', '2022-01-29 03:50:33', '2022-01-29 03:50:33', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `lab_department`
--

CREATE TABLE `lab_department` (
  `lab_deptid` int(11) NOT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `lab_deptname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `application` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicantname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicantid` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `department` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `from`, `to`, `application`, `applicantname`, `leave_type`, `applicantid`, `created_at`, `updated_at`, `department`, `status`) VALUES
(1, '2022-02-16', '2022-02-17', 'qwe', 'nursetestdep', NULL, '0900090', '2022-02-15', '2022-02-15', 'Nursing Department', 'Declined'),
(2, '2022-02-18', '2022-02-18', 'fdsf', 'kimsdoctor', NULL, '0900038', '2022-02-15', '2022-02-15', 'Urology', NULL),
(3, '2022-02-15', '2022-02-17', 'ertrtret trttret tretetreyre yertyerty rey  yeyreyrey yrey ery yreyreyre yreyreyeryeryreyer y rey hfdghdfghfghfdghdfghfgdhdfgh ghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'nursetestdep', NULL, '0900090', '2022-02-15', '2022-02-15', 'Nursing Department', 'Approved'),
(4, '2022-03-01', '2022-03-03', 'e', 'nursetestdep', NULL, '0900090', '2022-02-15', '2022-02-15', 'Nursing Department', 'Declined'),
(5, '2022-02-18', '2022-02-18', 'r', 'cardiologydoctor', NULL, '0900098', '2022-02-18', '2022-02-18', 'cardiology', NULL),
(6, '2022-02-20', '2022-02-20', 'qweewqqweewq', 'cardiologydoctor', NULL, '0900098', '2022-02-18', '2022-02-18', 'cardiology', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbreviation` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `leave_type`, `no_of_days`, `abbreviation`, `created_at`, `updated_at`) VALUES
(1, '8', '', '', NULL, NULL),
(2, 'g', '', '', NULL, NULL),
(3, 'j', '', '', NULL, NULL);

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
  `accounts_company` varchar(150) DEFAULT NULL,
  `accounts_update_privilage` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledgeraccounts`
--

INSERT INTO `ledgeraccounts` (`id`, `accounts_name`, `accounts_desc`, `accounts_category`, `accounts_subcategory`, `accounts_company`, `accounts_update_privilage`, `added_on`) VALUES
(1, 'Bank Account', NULL, 3, 5, 'kims intetrnational', 1, '2022-03-08 12:40:17'),
(2, 'Cash Account', NULL, 3, 5, 'kims intetrnational', 1, '2022-03-09 04:55:48'),
(3, 'Deposits(Asset)', NULL, 3, 5, 'kims intetrnational', 1, '2022-03-09 04:56:15'),
(4, 'Loans & Advances(Asset)', NULL, 3, 5, 'kims intetrnational', 1, '2022-03-09 04:56:40'),
(5, 'Sundry Debtors', NULL, 3, 5, 'kims intetrnational', 1, '2022-03-09 04:57:27'),
(6, 'Reserves & Surplus', NULL, 8, 6, 'kims intetrnational', 1, '2022-03-09 05:07:53'),
(7, 'Duties & Taxes', NULL, 6, 6, 'kims intetrnational', 1, '2022-03-09 05:05:20'),
(8, 'Provisions', NULL, 6, 6, 'kims intetrnational', 1, '2022-03-09 05:08:25'),
(9, 'Sundry Creditors', NULL, 6, 6, 'kims intetrnational', 1, '2022-03-09 04:58:20'),
(10, 'Bank OD A/c', NULL, 7, 6, 'kims intetrnational', 1, '2022-03-09 05:06:31'),
(11, 'Secured Loans', NULL, 7, 6, 'kims intetrnational', 1, '2022-03-09 04:58:45'),
(12, 'Unsecured Loans', NULL, 7, 6, 'kims intetrnational', 1, '2022-03-09 04:58:58'),
(13, 'Wages', NULL, 11, 2, 'kims intetrnational', 1, '2022-03-09 11:40:48'),
(16, 'Purchase Account', NULL, 21, 2, 'kims intetrnational', 1, '2022-03-08 12:14:24'),
(27, 'Capital Account', NULL, 8, 6, 'kims intetrnational', 0, '2022-03-09 05:09:31'),
(28, 'Machinery Account', NULL, 2, 5, 'kims intetrnational', 0, '2022-03-09 05:09:20'),
(29, 'Computer a/c', NULL, 2, 5, 'kims intetrnational', 0, '2022-03-09 10:53:42'),
(30, 'Sales a/c', NULL, 14, 3, 'kims intetrnational', 0, '2022-03-08 12:41:30'),
(31, 'Dinesh and Co. a/c', 'Sundry creditor', 32, 6, 'kims intetrnational', 0, '2022-03-09 05:12:58'),
(33, 'Mohith & brother a/c', 'sundry debtor', 33, 5, 'kims intetrnational', 0, '2022-03-09 05:13:12'),
(34, 'Furniture account', NULL, 2, 5, 'kims intetrnational', 0, '2022-03-09 05:13:28'),
(35, 'Insurance Premium', NULL, 12, 4, 'kims intetrnational', 0, '2022-03-09 05:14:09'),
(36, 'Commission received', NULL, 16, 3, 'kims intetrnational', 0, '2022-03-08 12:44:57'),
(37, 'Drawings a/c', NULL, 8, 6, 'kims intetrnational', 0, '2022-03-09 05:14:56'),
(38, 'Salary a/c', NULL, 12, 4, 'kims intetrnational', 0, '2022-03-09 05:15:14'),
(39, 'Rent a/c', NULL, 12, 4, 'kims intetrnational', 0, '2022-03-09 05:15:35'),
(40, 'Purchase Account', NULL, 31, 1, 'kims intetrnational', 0, '2022-03-08 12:14:54'),
(41, 'Carriage Account', NULL, 11, 2, 'kims intetrnational', 0, '2022-03-09 11:41:30'),
(42, 'Investment Account', NULL, 34, 5, 'kims intetrnational', 0, '2022-03-09 11:02:45'),
(43, 'Advertisement Account', NULL, 12, 4, 'kims intetrnational', 0, '2022-03-09 11:07:03'),
(44, 'Depreciation Account', NULL, 11, 4, 'kims intetrnational', 0, '2022-03-09 11:11:32'),
(45, 'Bank Charges Account', NULL, 12, 4, 'kims intetrnational', 0, '2022-03-09 11:13:34'),
(46, 'Interest  Received Account', NULL, 16, 3, 'kims intetrnational', 0, '2022-03-09 11:14:48'),
(48, 'Closing Stock', NULL, 15, 3, 'kims intetrnational', 0, '2022-03-10 06:32:43'),
(50, 'Opening Stock', NULL, 19, 1, 'kims intetrnational', 0, '2022-03-10 06:10:48'),
(51, 'Opening Stock(Finished Goods)', NULL, 21, 2, 'kims intetrnational', 0, '2022-03-10 11:25:37'),
(52, 'Trading Account', NULL, 32, 2, 'kims intetrnational', 0, '2022-03-12 08:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `ledgeraccount_categories`
--

CREATE TABLE `ledgeraccount_categories` (
  `id` int(11) NOT NULL,
  `ledgeraccount_categories` varchar(150) NOT NULL,
  `categories_update_privilage` int(11) NOT NULL,
  `ledgeraccount_categories_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledgeraccount_categories`
--

INSERT INTO `ledgeraccount_categories` (`id`, `ledgeraccount_categories`, `categories_update_privilage`, `ledgeraccount_categories_desc`) VALUES
(1, 'Stock', 1, NULL),
(2, 'Fixed Asset', 1, NULL),
(3, 'Current Asset', 1, NULL),
(4, 'Investments', 1, NULL),
(5, 'Miscellaneous Expenses(Asset)', 1, NULL),
(6, 'Current Lability', 1, NULL),
(7, 'Long-term Lability', 1, NULL),
(8, 'Capital', 1, NULL),
(9, 'Loan', 1, NULL),
(10, 'Suspense Account', 1, NULL),
(11, 'Direct Expense', 1, NULL),
(12, 'Indirect Expense', 1, NULL),
(13, 'Purchase', 1, NULL),
(14, 'Sales', 1, NULL),
(15, 'Direct Income', 1, NULL),
(16, 'Indirect Income', 1, NULL),
(17, 'Purchase Return', 1, NULL),
(18, 'Sales Return', 1, NULL),
(19, 'Raw-Materials', 1, NULL),
(20, 'Work-in-Progress', 1, NULL),
(21, 'Finished Goods', 1, NULL),
(33, 'Sundry Debtors', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ledgeraccount_subcategories`
--

CREATE TABLE `ledgeraccount_subcategories` (
  `id` int(11) NOT NULL,
  `ledgeraccount_categories` int(11) DEFAULT NULL,
  `ledgeraccount_subcategories` varchar(150) NOT NULL,
  `ledgeraccount_subcategories_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledgeraccount_subcategories`
--

INSERT INTO `ledgeraccount_subcategories` (`id`, `ledgeraccount_categories`, `ledgeraccount_subcategories`, `ledgeraccount_subcategories_desc`) VALUES
(1, NULL, 'Manufacturing', NULL),
(2, NULL, 'Trading', NULL),
(3, NULL, 'Income', NULL),
(4, NULL, 'Expense', NULL),
(5, NULL, 'Asset', NULL),
(6, NULL, 'Liability', NULL),
(7, NULL, 'Stock In hand', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lifo_table_acc`
--

CREATE TABLE `lifo_table_acc` (
  `id` int(11) NOT NULL,
  `tranaction_date` date NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `receipt_qty` int(11) NOT NULL,
  `receipt_rate` double NOT NULL,
  `receipt_amount` double NOT NULL,
  `issue_qty` int(11) NOT NULL,
  `issue_rate` double NOT NULL,
  `issue_amount` double NOT NULL,
  `balance_qty` int(11) NOT NULL,
  `balance_rate` double NOT NULL,
  `balance_amount` double NOT NULL,
  `transaction_company` varchar(150) NOT NULL,
  `transaction_addedby` int(11) NOT NULL,
  `transaction_addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `totalamount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountpaid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balanceleft` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loanreoson` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uniqueid` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `totalamount`, `amountpaid`, `balanceleft`, `duration`, `deduct`, `loanreoson`, `status`, `created_at`, `updated_at`, `uniqueid`, `hospital`) VALUES
(1, '100', NULL, NULL, '10', '10', NULL, NULL, '2021-12-21 06:09:26', '2021-12-21 06:09:26', '1100070', 'D-clinic'),
(2, '1000', NULL, NULL, '10', '100', NULL, NULL, '2021-12-21 06:09:31', '2021-12-21 06:09:31', '1100070', 'D-clinic'),
(3, '200', NULL, NULL, '2', '100', NULL, NULL, '2021-12-21 06:09:38', '2021-12-21 06:09:38', '1100070', 'D-clinic'),
(4, '2000', NULL, NULL, '2', '1000', NULL, NULL, '2021-12-21 06:09:56', '2021-12-21 06:09:56', '1100070', 'D-clinic'),
(5, '200', NULL, NULL, '2', '100', NULL, NULL, '2021-12-21 06:10:20', '2021-12-21 06:10:20', '1100070', 'D-clinic'),
(6, '1000', NULL, NULL, '2', '500', NULL, NULL, '2021-12-21 23:36:46', '2021-12-21 23:36:46', '0900060', 'kims intetrnational'),
(7, '1000', NULL, NULL, '2', '500', NULL, NULL, '2021-12-21 23:38:13', '2021-12-21 23:38:13', '0900064', 'kims intetrnational'),
(8, '10', NULL, NULL, '1', '10', NULL, NULL, '2021-12-22 02:41:02', '2021-12-22 02:41:02', '1100071', 'D-clinic'),
(9, '100', NULL, NULL, '1', '100', NULL, NULL, '2021-12-22 02:43:13', '2021-12-22 02:43:13', '1100071', 'D-clinic'),
(10, '10000', NULL, NULL, '10', '1000', NULL, NULL, '2021-12-22 02:43:22', '2021-12-22 02:43:22', '1100071', 'D-clinic'),
(11, '10000', NULL, NULL, '10', '1000', NULL, NULL, '2021-12-22 02:43:24', '2021-12-22 02:43:24', '1100071', 'D-clinic'),
(12, '100', NULL, NULL, '1', '100', NULL, NULL, '2021-12-22 02:43:29', '2021-12-22 02:43:29', '1100071', 'D-clinic'),
(13, '1001', NULL, NULL, '1', '1001', NULL, NULL, '2021-12-22 02:43:31', '2021-12-22 02:43:31', '1100071', 'D-clinic'),
(14, '5000', NULL, NULL, '5', '1000', NULL, NULL, '2021-12-24 00:35:33', '2021-12-24 00:35:33', '0900064', 'kims intetrnational'),
(15, '1000', NULL, NULL, '10', '100', NULL, NULL, '2021-12-24 01:15:33', '2021-12-24 01:15:33', '0900065', 'kims intetrnational'),
(16, '5000', NULL, NULL, '5', '1000', NULL, NULL, '2021-12-24 01:15:54', '2021-12-24 01:15:54', '0900065', 'kims intetrnational'),
(17, '6000', NULL, NULL, '10', '600', NULL, NULL, '2021-12-24 01:16:20', '2021-12-24 01:16:20', '0900065', 'kims intetrnational'),
(18, '2000', NULL, NULL, '2', '1000', NULL, NULL, '2021-12-25 02:26:53', '2021-12-25 02:26:53', '0900046', 'kims intetrnational'),
(19, '4000', NULL, NULL, '3', '1333.33', NULL, NULL, '2021-12-25 02:27:11', '2021-12-25 02:27:11', '0900046', 'kims intetrnational'),
(20, '4000', NULL, NULL, '3', '1333.33', NULL, NULL, '2021-12-25 02:27:14', '2021-12-25 02:27:14', '0900046', 'kims intetrnational'),
(21, '30', NULL, NULL, '1', '30', NULL, NULL, '2021-12-25 02:27:24', '2021-12-25 02:27:24', '0900046', 'kims intetrnational'),
(22, '301', NULL, NULL, '12', '25.08', NULL, NULL, '2021-12-25 02:27:28', '2021-12-25 02:27:28', '0900046', 'kims intetrnational'),
(23, '301', NULL, NULL, '122', '2.47', NULL, NULL, '2021-12-25 02:27:33', '2021-12-25 02:27:33', '0900046', 'kims intetrnational'),
(24, '10', NULL, NULL, '1', '10', NULL, NULL, '2021-12-31 00:01:29', '2021-12-31 00:01:29', '1100058', 'D-clinic'),
(25, '800', NULL, NULL, '1', '800', NULL, NULL, '2022-02-15 23:42:51', '2022-02-15 23:42:51', '0900090', ''),
(26, '800', NULL, NULL, '1', '800', NULL, NULL, '2022-02-15 23:42:56', '2022-02-15 23:42:56', '0900090', ''),
(27, '800', NULL, NULL, '1', '800', NULL, NULL, '2022-02-15 23:42:56', '2022-02-15 23:42:56', '0900090', ''),
(28, '800', NULL, NULL, '1', '800', NULL, NULL, '2022-02-15 23:42:57', '2022-02-15 23:42:57', '0900090', ''),
(29, '8000', NULL, NULL, '1', '8000', NULL, NULL, '2022-02-15 23:43:03', '2022-02-15 23:43:03', '0900090', ''),
(30, '8000', NULL, NULL, '1', '8000', NULL, NULL, '2022-02-15 23:43:14', '2022-02-15 23:43:14', '0900090', ''),
(31, '8000', NULL, NULL, '1', '8000', NULL, NULL, '2022-02-15 23:43:15', '2022-02-15 23:43:15', '0900090', ''),
(32, '8000', NULL, NULL, '1', '8000', NULL, NULL, '2022-02-15 23:43:16', '2022-02-15 23:43:16', '0900090', '');

-- --------------------------------------------------------

--
-- Table structure for table `manualattendances`
--

CREATE TABLE `manualattendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staffname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_leave` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_reoson` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_per_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hospital` varchar(2505) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufactuers`
--

CREATE TABLE `manufactuers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manufactuers_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactuers`
--

INSERT INTO `manufactuers` (`id`, `manufactuers_name`, `email`, `contact_no`, `mobile`, `fax`, `address`, `city`, `state`, `country`, `zipcode`, `details`, `created_at`, `updated_at`) VALUES
(1, 'demo manufacturer', 'demo@gmail.com', '08330066755', '08330066755', '12121212', 'trivandrum\r\ntvm', 'attingal', 'Kerala', 'India', '695101', 'zxzxz', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicaldepartments`
--

CREATE TABLE `medicaldepartments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `depname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicaldepartments`
--

INSERT INTO `medicaldepartments` (`id`, `depname`, `updated_at`, `created_at`) VALUES
(1, 'Anesthetics', '2021-10-01 05:08:00', '2021-10-01 05:08:00'),
(2, 'Breast Screening', '2021-10-01 05:08:14', '2021-10-01 05:08:14'),
(3, 'Cardiology', '2021-10-01 05:08:28', '2021-10-01 05:08:28'),
(4, 'ENT', '2021-10-01 05:08:35', '2021-10-01 05:08:35'),
(5, 'Elderly services department', '2021-10-01 05:09:09', '2021-10-01 05:09:09'),
(6, 'Gastroenterology', '2021-10-01 05:09:29', '2021-10-01 05:09:29'),
(7, 'General Surgery', '2021-10-01 05:09:40', '2021-10-01 05:09:40'),
(8, 'Gynecology', '2021-10-01 05:10:08', '2021-10-01 05:10:08'),
(9, 'Hematology', '2021-10-01 05:10:19', '2021-10-01 05:10:19'),
(10, 'Neonatal unit', '2021-10-01 05:10:38', '2021-10-01 05:10:38'),
(11, 'Neurology', '2021-10-01 05:10:50', '2021-10-01 05:10:50'),
(12, 'Nutrition and dietetics', '2021-10-01 05:11:17', '2021-10-01 05:11:17'),
(13, 'Obstetrics and gynecology units', '2021-10-01 05:11:55', '2021-10-01 05:11:55'),
(14, 'Oncology', '2021-10-01 05:12:06', '2021-10-01 05:12:06'),
(15, 'Ophthalmology', '2021-10-01 05:12:26', '2021-10-01 05:12:26'),
(16, 'Orthopedics', '2021-10-01 05:12:36', '2021-10-01 05:12:36'),
(17, 'Physiotherapy', '2021-10-01 05:12:49', '2021-10-01 05:12:49'),
(18, 'Renal unit', '2021-10-01 05:12:59', '2021-10-01 05:12:59'),
(19, 'Sexual Health', '2021-10-01 05:13:13', '2021-10-01 05:13:13'),
(20, 'Urology', '2021-10-01 05:13:20', '2021-10-01 05:13:20'),
(21, 'General', '2021-10-06 07:08:01', '2021-10-06 07:08:01'),
(23, 'Outpatient department (OPD)', '2021-10-12 06:26:24', '2021-10-12 06:26:24'),
(24, 'Inpatient Service (IP)', '2021-10-12 06:26:33', '2021-10-12 06:26:33'),
(25, 'Medical Department', '2021-10-12 06:26:42', '2021-10-12 06:26:42'),
(26, 'Nursing Department', '2021-10-12 06:26:50', '2021-10-12 06:26:50'),
(27, 'Paramedical Department', '2021-10-12 06:27:00', '2021-10-12 06:27:00'),
(28, 'Physical Medicine and Rehabilitation Department', '2021-10-12 06:27:10', '2021-10-12 06:27:10'),
(29, 'Operation Theatre Complex (OT)', '2021-10-12 06:27:18', '2021-10-12 06:27:18'),
(30, 'Pharmacy Department', '2021-10-12 06:27:23', '2021-10-12 06:27:23'),
(31, 'Radiology Department (X-ray)', '2021-10-12 06:27:29', '2021-10-12 06:27:29'),
(32, 'Dietary Department', '2021-10-12 06:27:35', '2021-10-12 06:27:35'),
(33, 'Non-professional Services (Business Management)', '2021-10-12 06:27:44', '2021-10-12 06:27:44'),
(34, 'Medical Record Department (MRD)', '2021-10-12 06:27:53', '2021-10-12 06:27:53'),
(35, 'Personnel Department', '2021-10-12 06:27:59', '2021-10-12 06:27:59'),
(36, 'ssss', '2022-01-29 05:16:05', '2022-01-29 05:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generic_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_level` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reorder_level` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_composition` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit_percentage` int(25) NOT NULL,
  `hospital` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_stock` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `brand_name`, `Item_name`, `item_group`, `category_name`, `generic_name`, `minimum_level`, `reorder_level`, `upload_image`, `medicine_composition`, `notes`, `profit_percentage`, `hospital`, `total_stock`, `created_at`, `updated_at`) VALUES
(1, '', 'test789', 'demo group', 'cat1', 'gen name', 'test minimum level', '15', '20220325103609.jpg', 'medicine composition', 'notes', 25, 'kims international', 15, '2022-06-01 03:36:05', ''),
(2, '', 'Cotton', '', '', NULL, NULL, '20', NULL, NULL, NULL, 5, NULL, 20, '2022-06-01 03:36:33', ''),
(3, '', 'Crosin', '', '', NULL, NULL, '15', NULL, NULL, NULL, 0, NULL, 15, '2022-06-01 03:36:39', ''),
(4, '', 'Needle', '', '', NULL, NULL, '36', NULL, NULL, NULL, 0, NULL, 25, '2022-06-01 03:16:52', ''),
(16, 'Select', 'test 1', 'Select', 'Select', 'Select', NULL, '30', NULL, NULL, 'kims intetrnational', 0, '', 30, '2022-06-01 03:37:47', ''),
(17, 'Select', 'test 2', 'Select', 'Select', 'Select', NULL, '20', NULL, NULL, 'kims intetrnational', 0, '', 15, '2022-06-01 03:38:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicines_details`
--

CREATE TABLE `medicines_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `added_date` date DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `order_no` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Item_name` int(11) DEFAULT NULL,
  `batch_no` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit_percentage` int(11) DEFAULT NULL,
  `sales_price` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `hospital` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overhead_charge` int(50) DEFAULT NULL,
  `total_sales_price` int(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines_details`
--

INSERT INTO `medicines_details` (`id`, `added_date`, `purchase_date`, `order_no`, `payment_type`, `supplier`, `manufacturer`, `Item_name`, `batch_no`, `quantity`, `purchase_rate`, `profit_percentage`, `sales_price`, `expiry_date`, `purchase_id`, `hospital`, `overhead_charge`, `total_sales_price`, `created_at`, `updated_at`) VALUES
(1, '2022-05-11', '2022-05-12', '627C93B038FBE', 'By Cheque', 'demo supplier', NULL, 2, '1001', '100', '250', 0, '25000', '2022-05-12', 1, 'kims intetrnational', NULL, NULL, '2022-05-12 03:59:59', '2022-05-11 23:28:59'),
(2, '2022-05-11', '2022-05-12', '627CA60369B23', 'By Cheque', 'demo supplier', NULL, 2, '1002', '25', '100', 5, '2625', '2022-05-12', 2, 'kims intetrnational', NULL, NULL, '2022-05-12 04:11:43', '2022-05-12 00:47:49'),
(3, '2022-05-12', '2022-05-12', '627CB524A1E65', 'By Cheque', NULL, NULL, 1, '1003', '250', '25', 0, '6250', '2022-05-12', 3, 'kims intetrnational', NULL, NULL, '2022-05-12 04:15:08', '2022-05-12 01:51:44'),
(4, '2022-05-13', '2022-05-12', '627CB524A1E65', 'By Cheque', NULL, NULL, 1, '1004', '250', '25', 0, '6250', '2022-05-13', 3, 'kims intetrnational', NULL, NULL, '2022-05-12 04:15:14', '2022-05-12 02:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_groups`
--

CREATE TABLE `medicine_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_groups`
--

INSERT INTO `medicine_groups` (`id`, `group_name`) VALUES
(1, 'demo group');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_types`
--

CREATE TABLE `medicine_types` (
  `id` int(11) NOT NULL,
  `medicine_type_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_types`
--

INSERT INTO `medicine_types` (`id`, `medicine_type_name`) VALUES
(1, 'demo'),
(2, 'name');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_units`
--

CREATE TABLE `medicine_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_units`
--

INSERT INTO `medicine_units` (`id`, `unit_name`, `created_at`, `updated_at`) VALUES
(1, 'unit', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_09_28_091132_patient', 1),
(4, '2021_09_29_073612_beds', 1),
(5, '2021_09_30_041932_superadmin', 2),
(6, '2021_09_30_042003_main', 2),
(7, '2014_10_12_000000_create_users_table', 3),
(8, '2020_08_09_073424_create_messages_table', 3),
(10, '2021_09_30_101124_roles', 5),
(11, '2021_09_30_121928_departments', 6),
(12, '2021_09_30_122306_departments', 7),
(13, '2021_10_01_050149_medicaldepartments', 8),
(14, '2021_10_01_111549_patientinsurance', 9),
(15, '2021_10_04_112943_appointments', 10),
(16, '2021_10_05_051800_rooms', 11),
(17, '2021_09_30_062419_hospitals', 12),
(18, '2021_10_05_063203_hospitals', 13),
(19, '2021_10_13_082043_salary', 14),
(20, '2021_10_14_065939_allowance', 15),
(21, '2021_10_28_093611_medicines', 16),
(22, '2021_11_01_094504_leaves', 17),
(23, '2021_11_03_055849_giveallowance', 18),
(25, '2021_11_04_093154_dutyschedule', 19),
(26, '2021_12_03_060651_files', 20),
(27, '2021_12_04_085258_servedmedicines', 21),
(28, '2021_12_13_110738_create_loans_table', 22),
(29, '2021_12_14_061718_project', 23),
(30, '2021_12_17_060921_project', 24),
(31, '2021_12_18_090954_leave_types', 25),
(32, '2021_12_13_060741_create_suppliers_table', 26),
(33, '2022_01_04_043542_amb_driver', 27),
(34, '2022_01_04_043633_amb_ulance', 27),
(35, '2022_01_03_124359_create_issue_registers_table', 28),
(36, '2022_01_04_041442_amb_ulance', 28),
(37, '2022_01_05_045515_create_issue_registers_table', 29),
(38, '2022_01_06_052124_create_visitersmodels_table', 29),
(39, '2022_01_06_080546_create_store_requests_table', 29),
(40, '2022_01_06_090545_create_pharma_requests_table', 29),
(41, '2022_01_15_055919_create_usermanagements_table', 30),
(42, '2022_01_15_064429_userroles', 31),
(43, '2022_01_18_060207_manufactuers', 32),
(44, '2022_01_22_063904_labcategory', 32),
(45, '2022_01_22_063919_labtests', 32),
(46, '2022_01_22_063936_labprofile', 32),
(47, '2022_01_24_042917_labprofiles', 33),
(48, '2022_01_25_060906_create_alllabtests_table', 34),
(49, '2022_01_29_113414_create_patientprofiles_table', 35),
(50, '2022_01_29_113430_create_patienttests_table', 36),
(51, '2022_02_02_051716_create_roomtypes_table', 37),
(52, '2022_02_04_083554_create_roomcategories_table', 38),
(53, '2022_02_01_060137_create_bill_details_table', 39),
(54, '2022_02_05_063115_create_suppliers_table', 40),
(55, '2022_02_05_093231_create_manufactuers_table', 41),
(56, '2022_02_07_101340_create_categories_table', 41),
(57, '2022_02_08_073923_requests_tems', 42),
(58, '2022_02_08_091453_create_medicine_units_table', 43),
(59, '2022_02_09_120029_create_medicines_details_table', 43),
(60, '2022_02_11_102838_create_manualattendances_table', 43),
(61, '2022_02_10_092615_callambulance', 44),
(62, '2022_02_15_061430_create_medicines_details_table', 45);

-- --------------------------------------------------------

--
-- Table structure for table `new_medicines`
--

CREATE TABLE `new_medicines` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `phoneno` blob DEFAULT NULL,
  `firstname` blob DEFAULT NULL,
  `address` blob DEFAULT NULL,
  `gender` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` bigint(100) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `height` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temparature` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` blob DEFAULT NULL,
  `place` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctornotes` blob DEFAULT NULL,
  `prescription` blob DEFAULT NULL,
  `lab` blob DEFAULT NULL,
  `medicine` blob DEFAULT NULL,
  `files` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anotherfiles` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `phoneno`, `firstname`, `address`, `gender`, `age`, `dateofbirth`, `height`, `weight`, `temparature`, `email`, `place`, `disease`, `doctornotes`, `prescription`, `lab`, `medicine`, `files`, `anotherfiles`, `updated_at`, `created_at`, `visiting_type`) VALUES
(1, 0x3534343536363534, 0x7465737431, 0x6c626a6867686c6a676a6867, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'somethingsss', NULL, '', NULL, NULL, NULL, NULL, '2021-09-29 09:01:49', '2021-09-29 09:01:49', NULL),
(2, 0x343536363534343536, 0x616761696e6e6e6e6e6e6e6e, 0x61736a68676a68676a6b68676b6867, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nothing', NULL, '', NULL, NULL, NULL, NULL, '2021-09-29 09:02:11', '2021-09-29 09:02:11', NULL),
(3, 0x36353434353636353435, 0x746573742073657373696f6e, 0x6c61736864626c6861676c686167, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'some heavy problems', NULL, '', NULL, NULL, NULL, NULL, '2021-09-29 09:02:41', '2021-09-29 09:02:41', NULL),
(4, 0x3939393939, 0x616e616c697a65206d65, 0x3b6a6861666a68613b6b6a6867, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sfgs', NULL, '', NULL, NULL, NULL, NULL, '2021-09-29 09:02:57', '2021-09-29 09:02:57', NULL),
(5, 0x343536363534343535, 0x6e657770617469656e74, 0x3b616a6b68666a616b6c666b6a68666c6b616a6866, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jhksldjhljk', NULL, '', NULL, NULL, NULL, NULL, '2021-10-01 06:33:37', '2021-10-01 06:33:37', NULL),
(6, 0x34353635343534343536, 0x6c6a, 0x66646773666771717171717171717171717171717171717171717171, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dgg', NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:16:12', '2021-10-06 05:16:12', NULL),
(7, 0x37373737373838383838, 0x7465737470617469656e74, 0x64666a67626f6a68626f6862, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wty', NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:21:01', '2021-10-06 05:21:01', NULL),
(8, 0x35343534, 0x616767, 0x6b6a6b, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfggf', NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:21:16', '2021-10-06 05:21:16', NULL),
(9, 0x39393939393939393939393939, 0x746573746572, 0x736466686b6a68, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jh', NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:29:48', '2021-10-06 05:29:48', NULL),
(10, 0x3231333231353631353631, 0x79687868, 0x3168756968697568, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'du', NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:30:11', '2021-10-06 05:30:11', NULL),
(11, 0x3738393436353438, 0x7465737470617469656e743135, 0x6873646a66686f6968, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfhh', NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 06:51:53', '2021-10-06 06:51:53', NULL),
(12, 0x34353439383734, 0x7465737470617469656e74, 0x616472657373, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nothing', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-29 07:36:38', '2021-10-29 07:36:38', NULL),
(13, 0x34353439383734, 0x7465737470617469656e74, 0x616472657373, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nothing', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-29 07:36:49', '2021-10-29 07:36:49', NULL),
(14, 0x373838, 0x6c6a, 0x4744474444444444, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ALL SCENE', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-30 05:34:50', '2021-10-30 05:34:50', NULL),
(15, 0x33, 0x746573746f72646572, 0x65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '435', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-19 11:20:23', '2022-02-19 11:20:23', NULL),
(16, 0x393836393735373335, 0x7372757468692073, 0x64656d6f313233, 'female', 30, '1990-10-18', '170', '70', '96', 0x73727574686940676d61696c2e636f6d, 'thiruvanathapuram', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-13 05:59:02', '2022-05-13 05:59:02', NULL),
(17, 0x39383735363334353231, 0x616268696e617961, 0x64656d6f2074657374, 'female', 28, '1991-03-06', '180', '75', '97', 0x616268696e61796131323340676d61696c2e636f6d, 'attingal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 06:13:55', '2022-05-16 06:13:55', NULL),
(18, 0x3736363638343332, 0x6e616e646869746861, 0x64656d6f206e616e646869746861, 'female', 30, '1990-06-13', '170', '69', '92', 0x6e616e64686974686140676d61696c2e636f6d, 'efrrwr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-21 10:06:22', '2022-05-21 10:06:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patientinsurance`
--

CREATE TABLE `patientinsurance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empphoneno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groupno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `policyno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copayment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patienthere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientinsurance`
--

INSERT INTO `patientinsurance` (`id`, `name`, `address`, `phone`, `occupation`, `employer`, `empphoneno`, `empaddress`, `bday`, `groupno`, `policyno`, `copayment`, `patienthere`, `created_at`, `updated_at`) VALUES
(1, 'jhg', 'hg', '456', 'hjg', 'jhg', '789', 'hgkf', '2021-10-13', '78', '78', '78', 'on', '2021-10-01 06:24:25', '2021-10-01 06:24:25'),
(2, 'jhg', 'hg', '456444', 'hjg', 'jhg', '789', 'hgkf', '2021-10-13', '78', '78', '78', 'on', '2021-10-01 06:27:07', '2021-10-01 06:27:07'),
(3, 'hiu', 'uigug', '7897', 'uvuhv', 'jib', '7987', 'kgv', '2021-10-07', '78', '102', '201', 'on', '2021-10-29 02:07:48', '2021-10-29 02:07:48'),
(4, 'bh', 'hbhb', '45465', '8787', 'gv', 'hgv', 'vgh', '2021-10-06', '45', '45', '64', 'on', '2021-10-29 02:12:07', '2021-10-29 02:12:07'),
(5, 'dfgfdg', 'gdfg', '345', 'er', 'ert', '4535', 'g355', '2021-12-21', '435', '45', '54', 'on', '2021-12-24 00:27:22', '2021-12-24 00:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `patientprofiles`
--

CREATE TABLE `patientprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `patientid` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointmentid` bigint(100) DEFAULT NULL,
  `profiles` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patientprofiles`
--

INSERT INTO `patientprofiles` (`id`, `created_at`, `updated_at`, `patientid`, `appointmentid`, `profiles`) VALUES
(1, '2022-01-31 04:18:43', '2022-01-31 04:18:43', '7', 7, '19'),
(2, '2022-01-31 04:18:43', '2022-01-31 04:18:43', '7', 7, 'poi'),
(3, '2022-01-31 05:22:57', '2022-01-31 05:22:57', '7', 7, '19'),
(4, '2022-01-31 05:22:57', '2022-01-31 05:22:57', '7', 7, 'poi'),
(5, '2022-01-31 05:33:58', '2022-01-31 05:33:58', '5', 5, '13'),
(6, '2022-01-31 06:18:07', '2022-01-31 06:18:07', '1', 1, '14'),
(7, '2022-01-31 06:24:31', '2022-01-31 06:24:31', '9', 9, '13'),
(8, '2022-01-31 06:24:31', '2022-01-31 06:24:31', '9', 9, 'p'),
(9, '2022-02-01 00:11:48', '2022-02-01 00:11:48', '74', 74, '13'),
(10, '2022-02-01 00:11:48', '2022-02-01 00:11:48', '74', 74, 'heartdisease'),
(11, '2022-02-01 00:13:07', '2022-02-01 00:13:07', '47', 47, 'Select'),
(12, '2022-02-01 01:21:11', '2022-02-01 01:21:11', '5', 5, '14'),
(13, '2022-02-01 04:19:19', '2022-02-01 04:19:19', '2', 2, '19'),
(14, '2022-02-01 04:19:20', '2022-02-01 04:19:20', '2', 2, 'p'),
(15, '2022-02-19 05:51:07', '2022-02-19 05:51:07', '1', 1, '14'),
(16, '2022-06-09 05:57:48', '2022-06-09 05:57:48', '78768', 78768, 'Select');

-- --------------------------------------------------------

--
-- Table structure for table `patienttests`
--

CREATE TABLE `patienttests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `patientid` bigint(20) DEFAULT NULL,
  `appointmentid` bigint(20) DEFAULT NULL,
  `tests` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patienttests`
--

INSERT INTO `patienttests` (`id`, `created_at`, `updated_at`, `patientid`, `appointmentid`, `tests`, `value`, `hospital`) VALUES
(1, '2022-01-31 06:18:07', '2022-01-31 06:18:07', 1, 1, 'bloodpressure', NULL, NULL),
(2, '2022-01-31 06:24:31', '2022-01-31 06:24:31', 9, 9, 'TRIGLYCERIDES', '50', NULL),
(3, '2022-01-31 06:24:31', '2022-01-31 06:24:31', 9, 9, 'bloodpressure', NULL, NULL),
(4, '2022-01-31 06:24:31', '2022-01-31 06:24:31', 9, 9, 'doc-test', '10', NULL),
(5, '2022-02-01 00:11:48', '2022-02-01 00:11:48', 74, 74, 'TRIGLYCERIDES', '34', NULL),
(6, '2022-02-01 00:11:48', '2022-02-01 00:11:48', 74, 74, 'bloodpressure', '52', NULL),
(7, '2022-02-01 00:13:08', '2022-02-01 00:13:08', 47, 47, 'Select', NULL, NULL),
(8, '2022-02-01 00:13:08', '2022-02-01 00:13:08', 47, 47, 'Sugarwq1', '30', NULL),
(9, '2022-02-01 00:13:08', '2022-02-01 00:13:08', 47, 47, 'doc-test', '15', NULL),
(10, '2022-02-01 00:13:08', '2022-02-01 00:13:08', 47, 47, 'bloodpressure', '20', NULL),
(11, '2022-02-01 01:21:11', '2022-02-01 01:21:11', 5, 5, 'TRIGLYCERIDES', '50', NULL),
(12, '2022-02-01 01:21:11', '2022-02-01 01:21:11', 5, 5, 'bloodpressure', '64', NULL),
(13, '2022-02-01 01:21:11', '2022-02-01 01:21:11', 5, 5, 'doc-test', '10', NULL),
(14, '2022-02-01 04:19:20', '2022-02-01 04:19:20', 2, 2, 'doc-test', '10', NULL),
(15, '2022-02-01 04:19:20', '2022-02-01 04:19:20', 2, 2, 'TRIGLYCERIDES', '20', NULL),
(16, '2022-02-19 05:51:07', '2022-02-19 05:51:07', 1, 1, 'Sugarwq1', NULL, NULL),
(17, '2022-06-09 05:57:48', '2022-06-09 05:57:48', 78768, 78768, 'TRIGLYCERIDES', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_labtest`
--

CREATE TABLE `patient_labtest` (
  `patientlab_id` int(255) NOT NULL,
  `patient_id` int(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `lab_name` int(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_labtest`
--

INSERT INTO `patient_labtest` (`patientlab_id`, `patient_id`, `date`, `lab_name`, `added_by`, `department`) VALUES
(1, 98, '2022-06-09 00:00:00', NULL, '76', '0'),
(2, 98, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(3, 18, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(4, 18, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(5, 18, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(6, 18, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(7, 18, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(8, 18, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(9, 18, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(10, 18, '2022-06-09 00:00:00', NULL, '76', '76'),
(11, 18, '2022-06-09 00:00:00', NULL, '76', '76'),
(12, 18, '2022-06-09 00:00:00', NULL, '76', NULL),
(13, 18, '2022-06-09 00:00:00', NULL, '76', '89'),
(14, 18, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(15, 16, '2022-06-09 00:00:00', NULL, '76', 'cardiology'),
(16, 17, '2022-06-10 00:00:00', NULL, '76', 'cardiology'),
(17, 17, '2022-06-10 00:00:00', NULL, '76', 'cardiology');

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `payment_id` int(11) NOT NULL,
  `payment_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_type`
--

INSERT INTO `payment_type` (`payment_id`, `payment_name`) VALUES
(1, 'cash'),
(2, 'bnk transfer');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_dept`
--

CREATE TABLE `pharmacy_dept` (
  `phar_deptid` int(11) NOT NULL,
  `dept_id` varchar(100) DEFAULT NULL,
  `phar_deptname` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `hospital` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_dept`
--

INSERT INTO `pharmacy_dept` (`phar_deptid`, `dept_id`, `phar_deptname`, `updated_at`, `created_at`, `hospital`) VALUES
(17, NULL, 'pharmacy2', NULL, '2022-06-20 04:51:38', 'kims intetrnational'),
(18, '37', 'dsdsd', NULL, '2022-06-20 05:29:27', 'kims intetrnational'),
(19, '0', 'ssASas', NULL, '2022-06-20 05:30:10', 'kims intetrnational'),
(20, 'Pharmacy', 'pharmacy1', NULL, '2022-06-20 05:48:39', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `pharma_requests`
--

CREATE TABLE `pharma_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request_intend` int(11) NOT NULL,
  `medicine` int(11) NOT NULL,
  `requested_quantity` double NOT NULL,
  `issued_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharma_requests`
--

INSERT INTO `pharma_requests` (`id`, `request_intend`, `medicine`, `requested_quantity`, `issued_quantity`, `created_at`, `updated_at`) VALUES
(7, 3, 4, 50, 0, NULL, NULL),
(8, 3, 1, 40, 0, NULL, NULL),
(9, 4, 7, 40, 0, NULL, NULL),
(10, 4, 1, 100, 0, NULL, NULL),
(11, 5, 8, 20, 0, NULL, NULL),
(12, 5, 1, 15, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescribed_labtest`
--

CREATE TABLE `prescribed_labtest` (
  `id` int(255) NOT NULL,
  `patient_labtest_id` int(255) DEFAULT NULL,
  `test` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescribed_labtest`
--

INSERT INTO `prescribed_labtest` (`id`, `patient_labtest_id`, `test`, `profile`) VALUES
(1, 6, 'Sugarwq1', '14'),
(2, 7, 'Sugarwq1', '14'),
(3, 8, 'TRIGLYCERIDES', '13'),
(4, 9, '12', '13'),
(5, 10, '12', '13'),
(6, 11, '15', '14'),
(7, 11, 'TRIGLYCERIDES', 'poi'),
(8, 11, 'Sugarwq1', 'p'),
(9, 12, 'Select', 'Select'),
(10, 13, 'Select', 'Select'),
(11, 14, '14', '14'),
(12, 15, '12', '14'),
(13, 16, 'Select', 'Select'),
(14, 16, 'TRIGLYCERIDES', 'q'),
(15, 16, 'bloodpressure', 'doc-profile'),
(16, 17, '12', '13'),
(17, 17, 'Sugarwq1', 'doc-profile'),
(18, 17, 'bloodpressure', 'p'),
(19, 17, 'doc-test', 'heartdisease');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `presc_id` int(11) NOT NULL,
  `presc_appid` int(11) DEFAULT NULL,
  `presc_date` date DEFAULT NULL,
  `presc_addedby` int(11) DEFAULT NULL,
  `presc_department` varchar(200) DEFAULT NULL,
  `presc_createdat` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`presc_id`, `presc_appid`, `presc_date`, `presc_addedby`, `presc_department`, `presc_createdat`) VALUES
(17, 94, '2022-06-07', 76, 'cardiology', NULL),
(18, 97, '2022-06-09', 88, 'Medical Departments', NULL),
(19, 98, '2022-06-09', 88, 'Medical Departments', NULL),
(20, 104, '0000-00-00', 76, 'cardiology', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescription_medicine`
--

CREATE TABLE `prescription_medicine` (
  `presc_medid` int(11) NOT NULL,
  `presc_id` int(11) DEFAULT NULL,
  `presc_medicine` int(11) DEFAULT NULL,
  `presc_dosage` text DEFAULT NULL,
  `presc_instruction` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription_medicine`
--

INSERT INTO `prescription_medicine` (`presc_medid`, `presc_id`, `presc_medicine`, `presc_dosage`, `presc_instruction`) VALUES
(1, 2, 1, '2.5ml', '1-0-0'),
(2, 3, 1, '5ml', '0-0-1'),
(3, 4, 1, '5ml', NULL),
(4, 5, 1, '2ml', '1-0-0'),
(5, 5, 1, '5ml', '1-1-1'),
(6, 6, 1, '2ml', '0-0-1'),
(7, 7, 1, '1', '1-1-1'),
(8, 7, 1, '2ml', '1-0-0'),
(9, 8, 1, '1', '1-0-0'),
(10, 10, 1, '1', '1-0-0'),
(11, 11, 1, '2', '0-1-0'),
(12, 12, 1, '1', '1-0-0'),
(13, 14, 1, '1', '1-0-0'),
(14, 16, 1, '2', '1-0-0'),
(15, 17, 1, '1', '1-1-1'),
(16, 17, 1, '2ml', '1-0-0'),
(17, 18, 1, '1ml', '1-0-0'),
(18, 19, 2, '2ml', '1-0-0'),
(19, 20, 1, '2ml', '0-0-1'),
(20, 20, 1, '5ml', '1-0-1');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `manufacturer` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_orderno` varchar(200) DEFAULT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `grand_total` double DEFAULT NULL,
  `advance_amount` double DEFAULT NULL,
  `pending_amount` double DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `purchase_added_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `supplier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `manufacturer`, `purchase_date`, `purchase_orderno`, `payment_type`, `grand_total`, `advance_amount`, `pending_amount`, `status`, `purchase_added_date`, `supplier`) VALUES
(1, NULL, '2022-04-27', '6268D2CB04944', 2, 1250, 500, 0, 'Ordere Placed', '2022-04-27 02:23:51', 1),
(2, 1, '2022-05-13', '627DFEEBF145A', 1, 10000, 5000, NULL, 'Order-Placed', '2022-05-13 06:47:54', NULL),
(3, NULL, '2022-05-13', '627E00A491348', 2, 5500, 500, NULL, 'Order-Placed', '2022-05-13 06:55:16', 1),
(4, NULL, '2022-05-05', '627E024D7EA20', 1, 6336, 100, NULL, 'Order-Placed', '2022-05-13 07:03:00', 1),
(5, 1, '2022-05-03', '627E080509F5B', 1, 10500, 500, NULL, 'Order-Placed', '2022-05-13 07:26:35', NULL),
(6, 1, '2022-05-02', '627E0C360D073', 2, 15900, NULL, NULL, 'Order-Placed', '2022-05-13 07:44:29', NULL),
(7, 1, '2022-05-02', '627E0C360D073', 2, 15900, 500, NULL, 'Order-Placed', '2022-05-13 07:44:36', NULL),
(8, NULL, '2022-05-09', '627E100B6AE9E', 1, 16500, 500, NULL, 'Order-Placed', '2022-05-13 08:00:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `item_name` int(11) NOT NULL,
  `batch_no` varchar(200) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_items`
--

INSERT INTO `purchase_items` (`id`, `purchase_id`, `item_name`, `batch_no`, `quantity`, `price`, `total`) VALUES
(1, NULL, 4, '577', '20', 450, 9000),
(2, NULL, 1, '566', '10', 100, 1000),
(3, NULL, 4, '4545', '50', 50, 2500),
(4, NULL, 1, '444', '20', 150, 3000),
(5, NULL, 4, '5454', '44', 44, 1936),
(6, NULL, 1, '46546', '44', 100, 4400),
(7, 0, 1, '234', '50', 200, 10000),
(8, 0, 4, '335', '20', 25, 500),
(9, 7, 4, '4355', '30', 30, 900),
(10, 7, 1, '5454', '50', 300, 15000),
(11, 8, 1, '4545', '30', 50, 1500),
(12, 8, 4, '5533', '50', 300, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL,
  `manufacturer` int(11) DEFAULT NULL,
  `purchase_date` date NOT NULL,
  `payment_type` int(11) NOT NULL,
  `grand_total` double NOT NULL,
  `advance_amount` double NOT NULL,
  `pending_amount` double DEFAULT NULL,
  `supplier` int(11) DEFAULT NULL,
  `purchase_orderno` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `manufacturer`, `purchase_date`, `payment_type`, `grand_total`, `advance_amount`, `pending_amount`, `supplier`, `purchase_orderno`, `status`, `hospital`, `order_date`) VALUES
(1, NULL, '2022-04-27', 2, 2500, 500, NULL, 1, '6268D2CB04944', 'Order-Placed', '', '2022-04-27 02:02:56'),
(2, 1, '2022-05-13', 1, 10000, 5000, NULL, NULL, '627DFEEBF145A', 'Order-Placed', '', '2022-05-13 06:47:54'),
(3, NULL, '2022-05-13', 2, 5500, 500, NULL, 1, '627E00A491348', 'Order-Placed', '', '2022-05-13 06:55:16'),
(4, NULL, '2022-05-05', 1, 6336, 100, NULL, 1, '627E024D7EA20', 'Order-Placed', '', '2022-05-13 07:03:01'),
(5, 1, '2022-05-03', 1, 10500, 500, NULL, NULL, '627E080509F5B', 'Order-Placed', '', '2022-05-13 07:26:35'),
(6, 1, '2022-05-02', 2, 15900, 500, NULL, NULL, '627E0C360D073', 'Order-Placed', '', '2022-05-13 07:44:36'),
(7, NULL, '2022-05-09', 1, 16500, 500, NULL, 1, '627E100B6AE9E', 'Order-Placed', '', '2022-05-13 08:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_items`
--

CREATE TABLE `purchase_order_items` (
  `id` int(11) NOT NULL,
  `purchase_order_id` int(11) NOT NULL,
  `item_name` int(11) NOT NULL,
  `batch_no` varchar(150) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order_items`
--

INSERT INTO `purchase_order_items` (`id`, `purchase_order_id`, `item_name`, `batch_no`, `quantity`, `price`, `total`) VALUES
(1, 1, 1, '1001', 25, 100, 2500),
(2, 0, 4, '577', 20, 450, 9000),
(3, 0, 1, '566', 10, 100, 1000),
(4, 0, 4, '4545', 50, 50, 2500),
(5, 0, 1, '444', 20, 150, 3000),
(6, 0, 4, '5454', 44, 44, 1936),
(7, 0, 1, '46546', 44, 100, 4400),
(8, 0, 1, '234', 50, 200, 10000),
(9, 0, 4, '335', 20, 25, 500),
(10, 0, 4, '4355', 30, 30, 900),
(11, 0, 1, '5454', 50, 300, 15000),
(12, 7, 1, '4545', 30, 50, 1500),
(13, 7, 4, '5533', 50, 300, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return`
--

CREATE TABLE `purchase_return` (
  `purchase_return_id` int(11) NOT NULL,
  `purchase_return_pur_id` int(11) NOT NULL,
  `purchase_return_pur_items_id` int(11) NOT NULL,
  `purchase_return_batch` int(11) NOT NULL,
  `purchase_return_quantity` varchar(250) NOT NULL,
  `purchase_return_remarks` varchar(200) NOT NULL,
  `purchase_return_added_by` int(11) NOT NULL,
  `purchase_return_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `purchase_return_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_intend`
--

CREATE TABLE `request_intend` (
  `request_intendid` int(11) NOT NULL,
  `request_intenddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `request_intendadded_by` int(11) DEFAULT NULL,
  `request_intendstatus` varchar(11) NOT NULL,
  `department` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_intend`
--

INSERT INTO `request_intend` (`request_intendid`, `request_intenddate`, `request_intendadded_by`, `request_intendstatus`, `department`) VALUES
(1, '2022-05-03 18:30:00', 44, '1', 'Pharmacy'),
(2, '2022-05-18 18:30:00', 47, '1', 'Pharmacy'),
(3, '2022-05-19 18:30:00', 47, '1', 'Pharmacy'),
(4, '2022-05-17 18:30:00', 47, '1', 'Pharmacy Department'),
(5, '2022-04-30 18:30:00', 44, '1', 'Pharmacy Department'),
(6, '2022-05-05 18:30:00', 44, '1', 'pharma1'),
(7, '2022-05-17 18:30:00', 44, '1', 'pharma1'),
(8, '2022-05-25 18:30:00', 44, '1', 'pharma1'),
(9, '2022-05-18 18:30:00', 47, '1', 'Pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `request_items`
--

CREATE TABLE `request_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicines_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suppliers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_status`
--

CREATE TABLE `request_status` (
  `request_statusid` int(11) NOT NULL,
  `request_statusname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_status`
--

INSERT INTO `request_status` (`request_statusid`, `request_statusname`) VALUES
(1, 'Requested'),
(2, 'Processing'),
(5, 'Pending'),
(6, 'Supplied');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rolename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previlage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `rolename`, `hospital`, `departments`, `category`, `extra`, `previlage`) VALUES
(1, 'labtechnician', '', '', '', '', ''),
(2, 'storemanager', '', '', '', '', ''),
(3, 'billingstaff', '', '', '', '', ''),
(4, 'hospitaladmin', '', '', '', '', ''),
(7, 'Doctor', '', '', '', '', ''),
(8, 'pharmacy', '', '', '', '', ''),
(10, 'lab', '', '', '', '', ''),
(12, 'counter', '', '', '', '', ''),
(13, 'store', '', '', '', '', ''),
(14, 'casuality', '', '', '', '', ''),
(15, 'nurse', '', '', '', '', ''),
(16, 'Department Admin', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `roomcategories`
--

CREATE TABLE `roomcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hospital` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomcategories`
--

INSERT INTO `roomcategories` (`id`, `category`, `created_at`, `updated_at`, `hospital`) VALUES
(2, 'ac', '2022-02-04 04:58:45', '2022-02-04 04:58:45', 'kims intetrnational'),
(4, 'non-ac', '2022-02-05 05:08:43', '2022-02-05 05:08:43', 'kims intetrnational'),
(7, 'double bed', '2022-05-23 06:30:35', '2022-05-23 06:30:35', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Roomno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allocateduser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Roomcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `js` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinicalnotes` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `Roomno`, `allocateduser`, `Roomcharge`, `Hospital`, `Department`, `category`, `js`, `css`, `updated_at`, `created_at`, `username`, `clinicalnotes`) VALUES
(1, '1', '', NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, '', '2022-02-16 11:20:25', '2022-02-16 11:20:25', '', NULL),
(2, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, NULL, '2022-02-16 11:20:25', '2022-02-16 11:20:25', NULL, NULL),
(3, '3', '4', NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, 'black', '2022-02-16 11:20:25', '2022-02-16 11:20:25', 'analize me', NULL),
(4, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, NULL, '2022-02-16 11:20:25', '2022-02-16 11:20:25', NULL, NULL),
(5, '5', '4', NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, 'black', '2022-02-16 11:20:25', '2022-02-16 11:20:25', 'analize me', NULL),
(6, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, NULL, '2022-02-16 11:20:25', '2022-02-16 11:20:25', NULL, NULL),
(7, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, NULL, '2022-02-16 11:20:25', '2022-02-16 11:20:25', NULL, NULL),
(8, '8', '', NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, '', '2022-02-16 11:20:25', '2022-02-16 11:20:25', '', NULL),
(9, '9', '', NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, '', '2022-02-16 11:20:25', '2022-02-16 11:20:25', '', NULL),
(10, '10', '', NULL, 'kims intetrnational', 'cardiology', 'ac', NULL, '', '2022-02-16 11:20:25', '2022-02-16 11:20:25', '', NULL),
(11, '11', '9', NULL, 'kims intetrnational', 'Paramedical Department', 'ac', NULL, 'black', '2022-02-16 12:22:03', '2022-02-16 12:22:03', 'tester', NULL),
(12, '12', '1', NULL, 'kims intetrnational', 'Paramedical Department', 'ac', NULL, 'black', '2022-02-16 12:22:03', '2022-02-16 12:22:03', 'test1', NULL),
(13, NULL, NULL, NULL, 'kims intetrnational', 'Paramedical Department', 'ac', NULL, NULL, '2022-02-16 12:22:03', '2022-02-16 12:22:03', NULL, NULL),
(14, NULL, NULL, NULL, 'kims intetrnational', 'Paramedical Department', 'ac', NULL, NULL, '2022-02-16 12:22:04', '2022-02-16 12:22:04', NULL, NULL),
(15, NULL, NULL, NULL, 'kims intetrnational', 'Paramedical Department', 'ac', NULL, NULL, '2022-02-16 12:22:04', '2022-02-16 12:22:04', NULL, NULL),
(16, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:24', '2022-02-19 05:05:24', NULL, NULL),
(17, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:24', '2022-02-19 05:05:24', NULL, NULL),
(18, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:24', '2022-02-19 05:05:24', NULL, NULL),
(19, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:24', '2022-02-19 05:05:24', NULL, NULL),
(20, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:24', '2022-02-19 05:05:24', NULL, NULL),
(21, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:24', '2022-02-19 05:05:24', NULL, NULL),
(22, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:24', '2022-02-19 05:05:24', NULL, NULL),
(23, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:24', '2022-02-19 05:05:24', NULL, NULL),
(24, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:24', '2022-02-19 05:05:24', NULL, NULL),
(25, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(26, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(27, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(28, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(29, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(30, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(31, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(32, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(33, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(34, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(35, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL),
(36, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:04', '2022-05-24 05:12:04', NULL, NULL),
(37, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:04', '2022-05-24 05:12:04', NULL, NULL),
(38, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:04', '2022-05-24 05:12:04', NULL, NULL),
(39, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:04', '2022-05-24 05:12:04', NULL, NULL),
(40, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:04', '2022-05-24 05:12:04', NULL, NULL),
(41, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:04', '2022-05-24 05:12:04', NULL, NULL),
(42, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:05', '2022-05-24 05:12:05', NULL, NULL),
(43, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:05', '2022-05-24 05:12:05', NULL, NULL),
(44, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:05', '2022-05-24 05:12:05', NULL, NULL),
(45, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 05:12:05', '2022-05-24 05:12:05', NULL, NULL),
(46, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:50', '2022-05-24 09:55:50', NULL, NULL),
(47, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:50', '2022-05-24 09:55:50', NULL, NULL),
(48, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:51', '2022-05-24 09:55:51', NULL, NULL),
(49, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:51', '2022-05-24 09:55:51', NULL, NULL),
(50, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:51', '2022-05-24 09:55:51', NULL, NULL),
(51, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:51', '2022-05-24 09:55:51', NULL, NULL),
(52, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:51', '2022-05-24 09:55:51', NULL, NULL),
(53, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:51', '2022-05-24 09:55:51', NULL, NULL),
(54, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:51', '2022-05-24 09:55:51', NULL, NULL),
(55, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'ac', NULL, NULL, '2022-05-24 09:55:51', '2022-05-24 09:55:51', NULL, NULL),
(56, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:44', '2022-05-24 10:13:44', NULL, NULL),
(57, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:44', '2022-05-24 10:13:44', NULL, NULL),
(58, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:44', '2022-05-24 10:13:44', NULL, NULL),
(59, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(60, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(61, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(62, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(63, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(64, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(65, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(66, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(67, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(68, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(69, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(70, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(71, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(72, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(73, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(74, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(75, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:45', '2022-05-24 10:13:45', NULL, NULL),
(76, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(77, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(78, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(79, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(80, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(81, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(82, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(83, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(84, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(85, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(86, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(87, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(88, NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', 'non-ac', NULL, NULL, '2022-05-24 10:13:46', '2022-05-24 10:13:46', NULL, NULL),
(89, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:14', '2022-05-24 10:29:14', NULL, NULL),
(90, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:14', '2022-05-24 10:29:14', NULL, NULL),
(91, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(92, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(93, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(94, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(95, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(96, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(97, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(98, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(99, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(100, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(101, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(102, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(103, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(104, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(105, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(106, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:15', '2022-05-24 10:29:15', NULL, NULL),
(107, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:16', '2022-05-24 10:29:16', NULL, NULL),
(108, NULL, NULL, NULL, 'kims intetrnational', 'Cardiology', 'double bed', NULL, NULL, '2022-05-24 10:29:16', '2022-05-24 10:29:16', NULL, NULL),
(109, NULL, NULL, NULL, 'kims intetrnational', 'Ortho', 'double bed', NULL, NULL, '2022-05-24 11:03:32', '2022-05-24 11:03:32', NULL, NULL),
(110, NULL, NULL, NULL, 'kims intetrnational', 'Ortho', 'double bed', NULL, NULL, '2022-05-24 11:03:32', '2022-05-24 11:03:32', NULL, NULL),
(111, NULL, NULL, NULL, 'kims intetrnational', 'Ortho', 'double bed', NULL, NULL, '2022-05-24 11:03:32', '2022-05-24 11:03:32', NULL, NULL),
(112, NULL, NULL, NULL, 'kims intetrnational', 'Ortho', 'double bed', NULL, NULL, '2022-05-24 11:03:33', '2022-05-24 11:03:33', NULL, NULL),
(113, NULL, NULL, NULL, 'kims intetrnational', 'Ortho', 'double bed', NULL, NULL, '2022-05-24 11:03:33', '2022-05-24 11:03:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE `roomtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roomname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_of_rooms` bigint(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `roomname`, `location`, `charge`, `department`, `tax`, `hospital`, `created_at`, `updated_at`, `no_of_rooms`) VALUES
(20, 'non-ac', 'north-west', '500', 'Ortho', '5', 'kims intetrnational', '2022-02-18 23:35:23', '2022-02-18 23:35:23', 20),
(21, 'non-ac', 'ground', '300', 'Medical Departments', '4', 'kims intetrnational', '2022-05-23 23:42:04', '2022-05-23 23:42:04', 10),
(22, 'ac', '1 st', '500', 'ENT', '5', 'kims intetrnational', '2022-05-24 04:25:50', '2022-05-24 04:25:50', 10),
(23, 'non-ac', 'eree', '3', 'Medical Departments', '2', 'kims intetrnational', '2022-05-24 04:43:44', '2022-05-24 04:43:44', 33),
(24, 'double bed', '1 st', '500', 'Peadiatric', '5', 'kims intetrnational', '2022-05-24 04:59:14', '2022-05-24 04:59:14', 20);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeeid` int(250) DEFAULT NULL,
  `Basicpay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `travelallowance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicalallowance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contributionallowance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otherallowance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professionaltax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalpay` bigint(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `employeeid`, `Basicpay`, `travelallowance`, `insurance`, `medicalallowance`, `contributionallowance`, `otherallowance`, `pf`, `esi`, `professionaltax`, `totalpay`, `created_at`, `updated_at`) VALUES
(1, NULL, '10', '10', '10', '10', '10', '10', '10', '10', '10', 30, '2021-10-13 04:15:07', '2021-10-13 04:15:07'),
(2, NULL, '10', '10', '10', '10', '10', '10', '10', '10', '10', 30, '2021-10-13 04:15:13', '2021-10-13 04:15:13'),
(3, 900040, '10000', '10', '10', '10', '20', '20', '20', '20', '20', 10010, '2021-10-13 04:39:43', '2021-10-13 04:39:43'),
(4, 900039, '20', '20', '20', '20', '20', '20', '20', '20', '20', 60, '2021-10-13 04:41:33', '2021-10-13 04:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `servedmedicines`
--

CREATE TABLE `servedmedicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicinename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priceperitem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servedmedicines`
--

INSERT INTO `servedmedicines` (`id`, `medicinename`, `quantity`, `priceperitem`, `totalprice`, `appz`, `created_at`, `updated_at`) VALUES
(1, 'MEDcin', '10', '600', '6000', '--', '2022-01-11 02:46:56', '2022-01-11 02:46:56'),
(2, 'tyu', '2', '1000', '2000', '--', '2022-01-11 02:47:22', '2022-01-11 02:47:22'),
(3, 'KG Nitros 009', '50', '2209', '110450', '--', '2022-01-11 02:47:32', '2022-01-11 02:47:32'),
(4, 'Paracetamol', '10', '250', '2500', '--', '2022-01-18 02:14:39', '2022-01-18 02:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `staffstatus`
--

CREATE TABLE `staffstatus` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `ex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffstatus`
--

INSERT INTO `staffstatus` (`id`, `name`, `status`, `ex`) VALUES
(0, 'Active', '01', 0),
(0, 'Inactive', '02', 0),
(3, 'Resigned', '03', 0),
(5, 'Suspended', '05', 0),
(4, 'superannuated', '04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_leaves`
--

CREATE TABLE `staff_leaves` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `allotted_leaves` float NOT NULL,
  `leaves_left` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock_categories_acc`
--

CREATE TABLE `stock_categories_acc` (
  `id` int(11) NOT NULL,
  `stock_categories_name` varchar(150) NOT NULL,
  `stock_categories_company` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_categories_acc`
--

INSERT INTO `stock_categories_acc` (`id`, `stock_categories_name`, `stock_categories_company`, `created_at`) VALUES
(1, 'Medicines', '0', '2022-03-16 02:13:25'),
(3, 'Medicines', 'kims intetrnational', '2022-03-22 04:46:00'),
(4, 'Raw Leaves', 'kims intetrnational', '2022-03-29 07:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `id` bigint(150) NOT NULL,
  `date` date DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_order` varchar(150) DEFAULT NULL,
  `manufacturer` varchar(150) DEFAULT NULL,
  `supplier` varchar(150) DEFAULT NULL,
  `payment_type` varchar(150) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `item_name` varchar(150) DEFAULT NULL,
  `batch_no` varchar(25) DEFAULT NULL,
  `purchase_rate` varchar(125) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `overhead_charges` varchar(50) DEFAULT NULL,
  `profit_percentage` varchar(50) DEFAULT NULL,
  `sales_price` varchar(50) DEFAULT NULL,
  `hospital` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `date`, `purchase_date`, `purchase_order`, `manufacturer`, `supplier`, `payment_type`, `expiry_date`, `item_name`, `batch_no`, `purchase_rate`, `quantity`, `overhead_charges`, `profit_percentage`, `sales_price`, `hospital`) VALUES
(1, NULL, NULL, 'Select', 'Select', 'Select', 'Select', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '1001', '333', 10, '0', '0', '7.5', NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15', '1255', '333', 10, '250', '250', '7.5', NULL),
(4, '2022-03-08', NULL, '6230596D42D5E', 'demo manufacturer', 'Select', 'demo', '2024-10-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '32143', '600', 250, '2', '2', '2', NULL),
(6, NULL, NULL, 'Select', 'Select', 'Select', 'Select', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, '2022-03-18', '162382EC51B86A', 'demo manufacturer', 'demo supplier', '0000-00-00', NULL, NULL, '1', NULL, NULL, NULL, '0', NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stock_groups_acc`
--

CREATE TABLE `stock_groups_acc` (
  `id` int(11) NOT NULL,
  `stock_groups_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_groups_acc`
--

INSERT INTO `stock_groups_acc` (`id`, `stock_groups_name`) VALUES
(1, 'Raw Materials'),
(2, 'Work in Process'),
(3, 'Finished Goods');

-- --------------------------------------------------------

--
-- Table structure for table `stock_items_acc`
--

CREATE TABLE `stock_items_acc` (
  `id` int(11) NOT NULL,
  `stock_items_itemcode` varchar(150) NOT NULL,
  `stock_items_name` varchar(150) NOT NULL,
  `stock_items_cat` int(11) NOT NULL,
  `stock_items_subcat` int(11) NOT NULL,
  `stock_items_groups` int(11) NOT NULL,
  `stock_items_company` varchar(150) NOT NULL,
  `stock_items_desc` text DEFAULT NULL,
  `stock_items_addedby` int(11) NOT NULL,
  `stock_items_addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_items_acc`
--

INSERT INTO `stock_items_acc` (`id`, `stock_items_itemcode`, `stock_items_name`, `stock_items_cat`, `stock_items_subcat`, `stock_items_groups`, `stock_items_company`, `stock_items_desc`, `stock_items_addedby`, `stock_items_addedon`) VALUES
(1, 'PAR', 'Paracetamole', 3, 4, 2, 'kims intetrnational', 'test', 47, '2022-03-26 06:44:36'),
(2, 'CRO', 'Crossin', 3, 5, 1, 'kims intetrnational', 'demo', 47, '2022-03-26 09:41:09'),
(4, 'PAR', 'Paracetamole', 3, 4, 3, 'kims intetrnational', 'demo', 47, '2022-03-26 06:45:00'),
(5, 'LVP', 'Levitracetum', 3, 4, 3, 'kims intetrnational', 'demo', 47, '2022-03-29 07:31:59'),
(6, 'STV120', 'Stivia Leaves', 4, 6, 1, 'kims intetrnational', 'demo', 47, '2022-03-29 07:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `stock_methods`
--

CREATE TABLE `stock_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stock_method` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit_percentage` bigint(20) DEFAULT NULL,
  `status` int(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_methods`
--

INSERT INTO `stock_methods` (`id`, `stock_method`, `profit_percentage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'FIFO', NULL, NULL, NULL, NULL),
(2, 'LIFO', NULL, NULL, NULL, NULL),
(3, 'Weighted Average', NULL, NULL, NULL, NULL),
(4, 'Expiry Date', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stock_subcategories_acc`
--

CREATE TABLE `stock_subcategories_acc` (
  `id` int(11) NOT NULL,
  `stock_subcategories_name` varchar(150) NOT NULL,
  `stock_subcategories_category` int(11) NOT NULL,
  `stock_subcategories_addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stock_subcategories_company` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_subcategories_acc`
--

INSERT INTO `stock_subcategories_acc` (`id`, `stock_subcategories_name`, `stock_subcategories_category`, `stock_subcategories_addedon`, `stock_subcategories_company`) VALUES
(2, 'Tablets', 1, '2022-03-16 04:46:32', '0'),
(4, 'Tablets', 3, '2022-03-23 08:43:05', 'kims intetrnational'),
(5, 'Syrups', 3, '2022-03-24 04:40:58', 'kims intetrnational'),
(6, 'Medicinal Leaves', 4, '2022-03-29 07:34:24', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `stock_transaction_table_acc`
--

CREATE TABLE `stock_transaction_table_acc` (
  `id` int(11) NOT NULL,
  `stock_transaction_date` datetime NOT NULL,
  `stock_transaction_type` int(11) NOT NULL COMMENT '1 for reciept 2 for issue',
  `stock_transaction_subtype` int(11) DEFAULT NULL,
  `stock_transaction_by` int(11) NOT NULL,
  `stock_transaction_addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stock_transaction_remarks` text DEFAULT NULL,
  `stock_transaction_company` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_transaction_table_acc`
--

INSERT INTO `stock_transaction_table_acc` (`id`, `stock_transaction_date`, `stock_transaction_type`, `stock_transaction_subtype`, `stock_transaction_by`, `stock_transaction_addedon`, `stock_transaction_remarks`, `stock_transaction_company`) VALUES
(5, '2022-03-10 00:00:00', 1, 1, 47, '2022-03-31 12:41:03', NULL, 'kims intetrnational'),
(6, '2022-03-13 00:00:00', 1, 1, 47, '2022-03-31 12:41:32', NULL, 'kims intetrnational'),
(7, '2022-03-18 00:00:00', 1, 1, 47, '2022-03-31 12:43:20', NULL, 'kims intetrnational'),
(8, '2022-03-19 00:00:00', 2, 2, 47, '2022-04-01 04:37:30', 'demo', 'kims intetrnational'),
(9, '2022-03-15 00:00:00', 2, 2, 47, '2022-04-01 05:41:54', NULL, 'kims intetrnational'),
(10, '2022-06-01 00:00:00', 2, 2, 40, '2022-06-01 07:11:44', NULL, 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `store_issued_details`
--

CREATE TABLE `store_issued_details` (
  `id` int(11) NOT NULL,
  `issued_date` datetime NOT NULL,
  `department` int(11) NOT NULL,
  `issued_by` int(11) NOT NULL,
  `issued_status` int(11) NOT NULL,
  `issued_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_issued_details`
--

INSERT INTO `store_issued_details` (`id`, `issued_date`, `department`, `issued_by`, `issued_status`, `issued_quantity`) VALUES
(1, '2022-06-10 00:00:00', 43, 75, 6, 0),
(2, '2022-06-10 00:00:00', 43, 75, 6, 0),
(3, '2022-06-10 00:00:00', 43, 75, 6, 0),
(4, '2022-06-10 00:00:00', 43, 75, 6, 0),
(5, '2022-06-10 00:00:00', 43, 75, 6, 0),
(6, '2022-06-10 00:00:00', 43, 75, 6, 0),
(7, '2022-06-10 00:00:00', 43, 75, 6, 0),
(8, '2022-06-10 00:00:00', 43, 75, 6, 0),
(9, '2022-06-10 00:00:00', 43, 75, 6, 35);

-- --------------------------------------------------------

--
-- Table structure for table `store_issued_items`
--

CREATE TABLE `store_issued_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(25) NOT NULL,
  `batch_no` int(11) NOT NULL,
  `issued_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store_requests`
--

CREATE TABLE `store_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `department` int(11) NOT NULL,
  `medicine` int(11) NOT NULL,
  `Quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `request_addedby` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_requests`
--

INSERT INTO `store_requests` (`id`, `date`, `department`, `medicine`, `Quantity`, `requested_status`, `created_at`, `updated_at`, `request_addedby`) VALUES
(1, '2022-05-12', 36, 1, '25', 1, NULL, NULL, ''),
(2, '2022-05-12', 37, 2, '50', 1, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `hospital`, `supplier_name`, `email`, `contact_no`, `mobile`, `fax`, `address`, `city`, `state`, `country`, `zipcode`, `details`, `created_at`, `updated_at`) VALUES
(1, '', 'demo supplier', 'supplier@gmail.com', '08330066755', '08330066755', '232323232', 'trivandrum\r\ntvm', 'Trivandrum North', 'Kerala', 'India', '695101', 'sdsdsd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usermanagements`
--

CREATE TABLE `usermanagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previlages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `text` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usermanagements`
--

INSERT INTO `usermanagements` (`id`, `name`, `previlages`, `hospital`, `created_at`, `updated_at`, `text`) VALUES
(3, 'ewr', 'addstaffs', '', '2022-01-16 23:08:04', '2022-01-16 23:08:04', NULL),
(4, 'ewr', 'staffs', '', '2022-01-16 23:08:04', '2022-01-16 23:08:04', NULL),
(5, 'ewr', 'attendance', '', '2022-01-16 23:08:04', '2022-01-16 23:08:04', NULL),
(6, 'ewr', 'payslip', '', '2022-01-16 23:08:04', '2022-01-16 23:08:04', NULL),
(7, 'ewr', 'leaves', '', '2022-01-16 23:08:05', '2022-01-16 23:08:05', NULL),
(8, 'ewr', 'loans', '', '2022-01-16 23:08:05', '2022-01-16 23:08:05', NULL),
(14, 'Medicines', 'Medicines|allmedicinez', '', '2022-01-17 04:52:08', '2022-01-17 04:52:08', 'allmedicinez'),
(17, 'nurse', 'allpatients', 'kims intetrnational', '2022-01-17 05:28:03', '2022-01-17 05:28:03', 'Patients'),
(18, 'nurse', 'depqueue', 'kims intetrnational', '2022-01-17 05:28:03', '2022-01-17 05:28:03', 'Queue'),
(19, 'nurse', 'dutyshedule', 'kims intetrnational', '2022-01-17 05:28:03', '2022-01-17 05:28:03', 'Duty Schedule'),
(20, 's', 'attendance', 'kims intetrnational', '2022-01-28 22:31:41', '2022-01-28 22:31:41', 'Attendance'),
(25, 'p', 'addstaffs', 'kims intetrnational', '2022-02-02 05:23:02', '2022-02-02 05:23:02', 'Add Staffs'),
(26, 'p', 'staffs', 'kims intetrnational', '2022-02-02 05:23:02', '2022-02-02 05:23:02', 'Manage Staffs'),
(32, 'd', 'addstaffs', 'kims intetrnational', '2022-02-19 05:25:52', '2022-02-19 05:25:52', 'Add Staffs'),
(33, 'uffff', 'Consultation', 'kims intetrnational', '2022-02-19 05:26:05', '2022-02-19 05:26:05', 'Consultation'),
(34, 'doctor', 'Consultation', 'kims intetrnational', '2022-02-19 05:31:20', '2022-02-19 05:31:20', 'Consultation'),
(35, 'doctor', 'appointments', 'kims intetrnational', '2022-02-19 05:31:20', '2022-02-19 05:31:20', 'Appointments'),
(36, 'doctor', 'allpatients', 'kims intetrnational', '2022-02-19 05:31:20', '2022-02-19 05:31:20', 'Patients'),
(37, 'doctor', 'depqueue', 'kims intetrnational', '2022-02-19 05:31:21', '2022-02-19 05:31:21', 'Queue'),
(38, 'doctor', 'dutyshedule', 'kims intetrnational', '2022-02-19 05:31:21', '2022-02-19 05:31:21', 'Duty Schedule'),
(39, 'doctor', 'applyleave', 'kims intetrnational', '2022-02-19 05:31:21', '2022-02-19 05:31:21', 'Leave Application'),
(40, 'Display', 'appointments', 'kims intetrnational', '2022-02-19 05:32:03', '2022-02-19 05:32:03', 'Appointments'),
(41, 'nutrition', 'Consultation', 'kims intetrnational', '2022-02-19 05:32:28', '2022-02-19 05:32:28', 'Consultation'),
(102, 'HR', 'addstaffs', 'kims intetrnational', '2022-03-30 01:46:37', '2022-03-30 01:46:37', 'Add Staffs');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE `userroles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previlages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hospital` varchar(240) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`id`, `name`, `previlages`, `ex`, `created_at`, `updated_at`, `hospital`) VALUES
(1, 'doctor', '', '', '2022-02-19 05:31:20', '2022-02-19 05:31:20', 'kims intetrnational'),
(2, 'Display', '', '', '2022-02-19 05:32:03', '2022-02-19 05:32:03', 'kims intetrnational'),
(3, 'nutrition', '', '', '2022-02-19 05:32:28', '2022-02-19 05:32:28', 'kims intetrnational'),
(9, 'HR', '', '', '2022-03-30 01:46:37', '2022-03-30 01:46:37', 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uniqueid` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `account_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `Hospital` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `departments` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicaldepartments` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `serve` varchar(100) DEFAULT NULL,
  `releving_date` date DEFAULT NULL,
  `allowance` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `yearsexp` text DEFAULT NULL,
  `consultation_fee` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uniqueid`, `name`, `email`, `age`, `email_verified_at`, `password`, `role`, `address`, `date_of_joining`, `account_no`, `bank`, `ifsc`, `remember_token`, `created_at`, `updated_at`, `salary`, `sex`, `dob`, `Hospital`, `departments`, `medicaldepartments`, `phone`, `status`, `serve`, `releving_date`, `allowance`, `yearsexp`, `consultation_fee`) VALUES
(1, '0400001', 'superadmin', 'superadmin@gmail.com', 0, NULL, '$2y$10$JcGIgNtfRSmwCB2OF3Wcc.9DOOftKTznMHPlP4TVDGEnPF.ABCgqS', 'superadmin', '', '0000-00-00', '', '', '', NULL, '2021-09-29 12:16:23', '2021-09-29 12:16:23', 20000, NULL, NULL, '', '', '0', NULL, 0, NULL, '0000-00-00', NULL, NULL, 0),
(2, '0400002', 'admin', 'admin@gmail.com', 0, NULL, '$2y$10$JcGIgNtfRSmwCB2OF3Wcc.9DOOftKTznMHPlP4TVDGEnPF.ABCgqS', 'admin', '', '0000-00-00', '', '', '', NULL, '2021-09-29 12:30:03', '2021-09-29 12:30:03', NULL, NULL, NULL, '', '', '0', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(3, '0400004', 'newadmin', 'someone@someone.com', 0, NULL, '456987', 'labtechnician', '', '0000-00-00', '', '', '', NULL, '2021-09-29 19:33:37', '2021-09-29 19:33:37', NULL, NULL, NULL, 'dfg', '', '0', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(4, '0400005', 'newadming', 'someone@someodne.com', 0, NULL, 'dasa', 'storemanager', '', '0000-00-00', '', '', '', NULL, '2021-09-29 19:34:48', '2021-09-29 19:34:48', NULL, NULL, NULL, 'new hospital', '', '0', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(5, '0400007', 'newadming', 'labman@gmail.com', 0, NULL, '$2y$10$5bIy9/k7PBiYHZTtXB6dvOa5Lx0Xls0Uv9lqOY/fkd9vb49IBKTNC', 'labtechnician', '', '0000-00-00', '', '', '', NULL, '2021-09-29 19:36:55', '2021-09-29 19:36:55', NULL, NULL, NULL, 'new hospital', '', '0', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(6, '0400008', 'newone', 'lj@yahoo.com', 0, NULL, '$2y$10$EEtuWdR43X.0ClI85lo5fuErdlxOWEA27sLj4hoXZ3i94KnEaHj46', 'dfg', '', '0000-00-00', '', '', '', NULL, '2021-09-30 13:35:06', '2021-09-30 13:35:06', NULL, NULL, NULL, 'storemanager', 'Medical Departments', 'Dietary Department', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(7, '0400010', 'newone', 'jhg@dfgh.o', 0, NULL, '$2y$10$wHv4dzlz/yTpkHnoAWS9l.DCVa9L1WrURZtdB9OX9MbNhTpHsifgi', 'dfg', '', '0000-00-00', '', '', '', NULL, '2021-09-30 13:36:41', '2021-09-30 13:36:41', NULL, NULL, NULL, 'storemanager', 'Medical Departments', 'Pharmacy Department', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(8, '0400011', 'nursemansd', 'nurse@nursing.in', 0, NULL, '$2y$10$YKj1s86iz7ACaMRWZY.42uaQ120OUkj7yUK8f884bgX3nnESstKPO', 'holycross', '', '0000-00-00', '', '', '', NULL, '2021-09-30 14:10:20', '2021-09-30 14:10:20', NULL, NULL, NULL, 'labtechnician', 'ENT', 'Nursing Department', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(9, '0400012', 'biller', 'biller@gmail.com', 0, NULL, '$2y$10$MfmHbSWXFg.MCKrl6bTH2uc8xo/ZMEeLMBuxRCF7.ypDJr.mhUvOq', 'tvm hospital', '', '0000-00-00', '', '', '', NULL, '2021-09-30 19:43:28', '2021-09-30 19:43:28', NULL, NULL, NULL, 'billingstaff', 'ENT', 'Physical Medicine', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(10, '0400013', 'newadmin', 'newadmin@gmail.com', 0, NULL, '$2y$10$aaiTyYl0KEsGzx6XDgTdd.o3LH6G64FtlpaI9L.6ErYsGgWCZCNlu', 'XSM', '', '0000-00-00', '', '', '', NULL, '2021-10-04 12:10:04', '2021-10-04 12:10:04', NULL, NULL, NULL, 'Role', 'Gynecology', 'Physical Medicine', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(11, '0400014', 'abhi', 'abhi@gmail.com', 0, NULL, '$2y$10$L188mLeYXWhlZbzX1eG4z.vymb.PNSpIYRHmRSexmJwucX92PBoum', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2021-10-04 12:51:57', '2021-10-04 12:51:57', NULL, NULL, NULL, 'GSM', 'ENT', 'Physical Medicine', NULL, 0, NULL, '0000-00-00', NULL, '10000', 0),
(12, '0400015', 'joel', 'joel@gmail.com', 0, NULL, '$2y$10$ZRN3xoaegMNu7x6omrYPzuXs4InKHzYfzk04EoSgtQYf/gYqH4VZ.', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2021-10-04 13:52:48', '2021-10-04 13:52:48', NULL, NULL, NULL, 'Holycross', 'Ophthalmology', 'Medical Record Department (MRD)', NULL, 0, NULL, '0000-00-00', '10000', NULL, 0),
(13, '0400016', 'pharmaadmin', 'pharmaadmin@gmail.com', 0, NULL, '$2y$10$GZwLeq8UBcsTMncoz5j4SeQIaQnTRRQteacDjIoVDGtRXoCwjia2C', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2021-10-06 11:24:38', '2021-10-06 11:24:38', NULL, NULL, NULL, 'Oppollo', 'ENT', 'Pharmacy Department', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(14, '0400017', 'ssnm admin', 'ssnmadmin@gmail.com', 0, NULL, '$2y$10$8q0DtRwGytEFiv3VyM6LKuFum8Xp/4I6jV6dCG05UL09YYzVFxokG', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2021-10-07 18:04:58', '2021-10-07 18:04:58', NULL, NULL, NULL, 'SSNM', 'ENT', 'Pharmacy Department', NULL, 0, NULL, '0000-00-00', NULL, '10000', 0),
(15, '0400018', 'abcadmin', 'abcadmin@gmail.com', 0, NULL, '$2y$10$5C5ygL3N9K/ODDAcp/Cryeipod4S/k5jPco.W8O3ObuqtqocCfyIi', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2021-10-07 20:16:18', '2021-10-07 20:16:18', NULL, NULL, NULL, 'abc', 'ENT', 'Physical Medicine', NULL, 0, NULL, '0000-00-00', NULL, '10000', 0),
(16, '0400019', 'hrtest', 'hrtest@gmail.com', 0, NULL, '$2y$10$OxeFbnMD4i0z.me3iqW6bO.p2AAoXeh05x5UvvT6ioXiulfjj2tlu', 'HR', '', '0000-00-00', '', '', '', NULL, '2021-10-08 13:49:26', '2021-10-08 13:49:26', NULL, NULL, NULL, 'Oppollo', 'Medical Departments', 'Departments', NULL, 0, NULL, '0000-00-00', NULL, '10000', 0),
(17, '0400020', 'kjk', 'kj@gh.ok', 0, NULL, '$2y$10$n1qvcK8LzgXRquJ0pDCK9ukDfhehaaKTAX2Zi0aunmAIpVWM4XOMW', 'labtechnician', '', '0000-00-00', '', '', '', NULL, '2021-10-08 16:15:11', '2021-10-08 16:15:11', NULL, NULL, NULL, 'Oppollo', 'Medical Departments', 'Departments', NULL, 0, NULL, '0000-00-00', '{\"_token\":\"7l3z5JTzDSgs2BIiN5VrwSBNPhKw19lNYnL5sXaE\",\"staffid\":\"20\",\"allowancenamenewhralowanz\":\"newhralowanz\",\"allowancenameanotherallowance\":\"anotherallowance\",\"16\":\"on\",\"allowancenamene\":\"ne\",\"18\":\"on\"}', '10000', 0),
(18, '0400021', 'kjkj', 'kj@gh.okgs', 0, NULL, '$2y$10$Xz2qSrhmQgSx0GyN44oKHekNYETIAASJUOKnKkIVUHTY0a96nL9ym', 'labtechnician', '', '0000-00-00', '', '', '', NULL, '2021-10-08 16:19:07', '2021-10-08 16:19:07', NULL, NULL, NULL, 'Oppollo', 'Anesthetics', 'Dietary Department', NULL, 0, NULL, '0000-00-00', NULL, '10000', 0),
(19, '0400023', 'kjkj', 'kj@gh.okgsdfdsf', 0, NULL, '$2y$10$45UWUAFopOey54xBTHtwXuHyVr9GiWzv78ieEdW79ftC07tlUvIMm', 'labtechnician', '', '0000-00-00', '', '', '', NULL, '2021-10-08 16:56:00', '2021-10-08 16:56:00', NULL, NULL, NULL, 'Oppollo', 'Anesthetics', 'Dietary Department', NULL, 0, NULL, '0000-00-00', NULL, '10000', 0),
(20, '0400025', 'kjkj', 'jh@fggh.ojkojm', 0, NULL, '$2y$10$2nVWDJjnnDUxv7gUWLUVmOPYal3pdagUsnjAS4ofpQm.bcFgNBGOC', 'labtechnician', '', '0000-00-00', '', '', '', NULL, '2021-10-08 16:58:03', '2021-10-08 16:58:03', NULL, NULL, NULL, 'Oppollo', 'Anesthetics', 'Dietary Department', NULL, 0, NULL, '0000-00-00', NULL, '10000', 0),
(21, '0400028', 'tyh', 'tyh@fs.ph', 0, NULL, '$2y$10$3s.tI5DoxrqTuFcE6BDC1uC0OxH.Z.FPxlibpKrKMEg3R7G/KtEI.', 'billingstaff', '', '0000-00-00', '', '', '', NULL, '2021-10-08 17:52:48', '2021-10-08 17:52:48', NULL, NULL, NULL, 'Oppollo', 'Renal unit', 'Radiology Department (X-ray)', NULL, 0, NULL, '0000-00-00', NULL, '10000', 0),
(22, '0400029', 'newstaff', 'newstaff@gmail.com', 0, NULL, '$2y$10$OERnh23Tg0RaKY5LUgCW6eLm6vqDBoHY14pn/2ItV0QWFtaL5bFLi', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2021-10-08 17:57:50', '2021-10-08 17:57:50', NULL, NULL, NULL, 'Oppollo', 'Physiotherapy', 'Dietary Department', NULL, 0, NULL, '0000-00-00', NULL, '10000', 0),
(23, '0400030', 'zzzz', 'zzz@zz.zz', 0, NULL, '$2y$10$Q03/KQaYzM0cH2h.aYWLx.H2PRseU3l0JmwSXMOgR.ND0wd8.3PLa', 'billingstaff', '', '0000-00-00', '', '', '', NULL, '2021-10-08 18:20:57', '2021-10-08 18:20:57', NULL, NULL, NULL, 'Oppollo', 'Nutrition and dietetics', 'Operation Theatre Complex (OT)', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(24, '0400031', 'ppppppp', 'pp@pp.jh', 0, NULL, '$2y$10$HKdHSX3fj.EwB30uHh5CQOyzRzM5bfmGjJD1JdyzJPNnpErPijiLe', 'billingstaff', '', '0000-00-00', '', '', '', NULL, '2021-10-08 18:26:26', '2021-10-08 18:26:26', NULL, NULL, NULL, 'Oppollo', 'Orthopedics', 'Non-professional Services (Business Management)', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(25, '0400032', 'oooo', 'oo@rrgh.uu', 0, NULL, '$2y$10$60.U/2Iqo9Nu0mwhM0whWu8TAN.4FiGUbhmunHW5DsMEXxYd5m5Oe', 'billingstaff', '', '0000-00-00', '', '', '', NULL, '2021-10-08 18:43:32', '2021-10-08 18:43:32', NULL, NULL, NULL, 'Oppollo', 'Gynecology', 'Operation Theatre Complex (OT)', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(26, NULL, 'oppoloadmin', 'oppoloadmin@gmail.com', 0, NULL, '$2y$10$gKn3KK80KzPax4dmmonM..0gUMYa4y/.GFXFR0u1Ru86z6RKl5NCW', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2021-10-08 19:17:06', '2021-10-08 19:17:06', NULL, NULL, NULL, 'Oppollo', 'Oncology', 'Non-professional Services (Business Management)', NULL, NULL, NULL, '0000-00-00', NULL, '20000', 0),
(27, '0400034', 'testphone', 'testphone@gmail.com', 0, NULL, '$2y$10$8yiHPKEEHV3iy1vgr488Nua2ZP43BJvylAIIfV75gJ078.ed8DPTq', 'Role', '', '0000-00-00', '', '', '', NULL, '2021-10-08 19:39:48', '2021-10-08 19:39:48', NULL, NULL, NULL, 'Oppollo', 'Medical Departments', 'Departments', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(28, '0400035', 'testagain', 'rd@fd.ji', 0, NULL, '$2y$10$XmEg.54kPJ3nPUn6XJOrrenUaQ7cnhTyFsSCLSzsp/hdlVcLkpC3O', 'Role', '', '0000-00-00', '', '', '', NULL, '2021-10-08 19:43:12', '2021-10-08 19:43:12', NULL, NULL, NULL, 'Oppollo', 'Medical Departments', 'Departments', NULL, 0, NULL, '0000-00-00', NULL, '20000', 0),
(29, '0400036', 'wqe', 'sas@po.pl', 0, NULL, '$2y$10$H3f28JozWSor.7zMXBxeJeXv7AXkG8cHNl7lHY4PMbgMo30Pd4RLa', 'Role', '', '0000-00-00', '', '', '', NULL, '2021-10-08 19:44:58', '2021-10-08 19:44:58', NULL, NULL, NULL, 'Oppollo', 'Medical Departments', 'Departments', '12321123', 0, NULL, '0000-00-00', NULL, '20000', 0),
(30, '0400037', 'kimshr', 'kimshr@gmail.com', 0, NULL, '$2y$10$ZYxNv0w57OfilD7zB3SJceN.lYwL90L8ZjvlCIIC2lRd/AwQVGWmK', 'hr', '', '0000-00-00', '', '', '', NULL, '2021-10-11 12:40:07', '2021-10-11 12:40:07', NULL, NULL, NULL, 'kims intetrnational', 'Nutrition and dietetics', 'Departments', NULL, NULL, NULL, '0000-00-00', '{\"_token\":\"9nhVUoR2CKlhMyxUzjFZU77UOBuKYYGfizlR39Jg\",\"staffid\":\"37\",\"allowancenamenewallowance\":\"newallowance\",\"allowancenametestallowance\":\"testallowance\",\"8\":\"on\",\"allowancenametravel_allowance\":\"travel allowance\"}', '20000', 0),
(31, '0900038', 'kimsdoctor', 'kimsdoctor@gmail.com', 0, NULL, '$2y$10$r1Rk7qO4lWFr71djJmQnWe4ITG2DQbZWsxYdrCS1BBzlMwgbccC6i', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2021-10-11 12:41:21', '2021-10-11 12:41:21', 0, NULL, NULL, 'kims intetrnational', 'Urology', 'Departments', '7777788888', 0, NULL, '0000-00-00', NULL, '20000', 0),
(32, '0900039', 'teststaff', 'teststaff@gmail.com', 0, NULL, '$2y$10$GRFxUnI0XS9xPZHNZYU.aOCLnYodbhQZo7JMSDJ/stgUbItHTcauy', 'HR', '', '0000-00-00', '', '', '', NULL, '2021-10-11 15:00:45', '2021-10-11 15:00:45', NULL, NULL, NULL, 'kims intetrnational', 'Urology', 'Urology', '7778889988', 0, NULL, '0000-00-00', '{\"_token\":\"tD6IDDjb7OtlpORCLsyBjbVUeMduaXKExx8nWkOx\",\"staffid\":\"39\",\"allowancenamenewallowance\":\"newallowance\",\"allowancenametestallowance\":\"testallowance\",\"8\":\"on\",\"allowancenametravel_allowance\":\"travel allowance\",\"11\":\"on\",\"allowancenamert\":\"rt\"}', '20000', 0),
(33, '0900040', 'kimsdoctor1', 'kimsdoctor1@gmail.com', 0, NULL, '$2y$10$zK/WX0uoq4aUnBKtdL1ffO3yp3Juv2wsGGyskjZxT.HdMwWlBwESm', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2021-10-12 14:02:40', '2021-10-12 14:02:40', NULL, NULL, NULL, 'kims intetrnational', 'General Surgery', NULL, '8778987', 0, NULL, '0000-00-00', '{\"_token\":\"8JqiZqhQxHvYxIxBrugN2BJ8A39SECS2bFby9tJM\",\"staffid\":\"40\",\"allowancenamenewallowance\":\"newallowance\",\"allowancenametestallowance\":\"testallowance\",\"8\":\"on\",\"allowancenametravel_allowance\":\"travel allowance\",\"11\":\"on\"}', '20000', 0),
(34, '0900041', 'entdoctor', 'entdoctor@gmail.com', 0, NULL, '$2y$10$4mQMjCJYxqsNSi6nsxbKV.gbWt7h/HUQEAypX/S5c/UFFc0VHX0Iy', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2021-10-12 19:59:12', '2021-10-12 19:59:12', 4, NULL, NULL, 'kims intetrnational', 'ENT', NULL, '7899878987', 0, NULL, '0000-00-00', NULL, '20000', 0),
(35, '0900042', 'ent2doctor', 'ent2doctor@gmail.com', 0, NULL, '$2y$10$UoieSCmWynstpzSRMmWBI.h6p7gYtkctwi1yy3qbuNnjNRkivVWd.', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2021-10-12 20:00:19', '2021-10-12 20:00:19', NULL, NULL, NULL, 'kims intetrnational', 'ENT', NULL, '7777788888', 0, NULL, '0000-00-00', NULL, '30000', 0),
(36, '0900043', 'radha', 'radha@gmail.com', 0, NULL, '$2y$10$0GMJhzdy7txIwhV4LiDwWui5YzZOnHGMNiHEwPb1Ki3QinGQylS7S', 'billingstaff', '', '0000-00-00', '', '', '', NULL, '2021-10-12 20:07:18', '2021-10-12 20:07:18', NULL, NULL, NULL, 'kims intetrnational', 'Outpatient department (OPD)', NULL, '7777888888', 0, NULL, '0000-00-00', NULL, '30000', 0),
(37, '0900044', 'kimspharma', 'kimspharma@gmail.com', 0, NULL, '$2y$10$GpIUjv6fVqo2u6PX008eXue49MNYu0PTkndXMVl1Iywevri7gSAFu', 'pharmacy', '', '0000-00-00', '', '', '', NULL, '2021-10-27 13:58:59', '2021-10-27 13:58:59', NULL, NULL, NULL, 'kims intetrnational', 'Pharmacy', NULL, '9879879879', 0, NULL, '0000-00-00', NULL, '30000', 0),
(38, '0900045', 'kimsurodoctor', 'kimsurodoctor@gmail.com', 0, NULL, '$2y$10$XxlirQ1D1X8DYiQqw4fyU.1stdyf7.5UVlXtUYGcllEYU3hoFPWbO', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2021-10-31 13:24:00', '2021-10-31 13:24:00', NULL, NULL, NULL, 'kims intetrnational', 'Urology', NULL, '789456', 0, NULL, '0000-00-00', '{\"_token\":\"9nhVUoR2CKlhMyxUzjFZU77UOBuKYYGfizlR39Jg\",\"staffid\":\"45\",\"allowancenamenewallowance\":\"newallowance\",\"allowancenametestallowance\":\"testallowance\",\"8\":\"on\",\"allowancenametravel_allowance\":\"travel allowance\",\"11\":\"on\"}', '30000', 0),
(39, '0900046', 'kimsudoctor', 'kimsudoctor@gmail.com', 0, NULL, '$2y$10$k1ecXxKblO.AdtvYLvOQUe/WS9XDAx23kEi60XCU1NzUz2bhvALrG', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2021-10-31 13:24:53', '2021-10-31 13:24:53', 2, NULL, NULL, 'kims intetrnational', 'Urology', NULL, '78987', 0, NULL, '0000-00-00', NULL, '30000', 0),
(40, '0900047', 'kimsadmin', 'kimsadmin@gmail.com', 0, NULL, '$2y$10$LJAbGCLx1uDpnCJHoYdGFORN4Jk9ArjK2cd8oKO4vP1avcnbdiwc2', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2021-10-31 15:18:49', '2021-10-31 15:18:49', 0, NULL, NULL, 'kims intetrnational', 'Medical Departments', NULL, '7894', 0, '1', '0000-00-00', NULL, '30000', 0),
(41, '0900048', '123', 'asd@jkn.df321', 0, NULL, '$2y$10$vsvH97V4nYSxCMpVznZzROMD8va4cXAryxFHweJKrBD5CXdX5Txa2', 'Role', '', '0000-00-00', '', '', '', NULL, '2021-11-01 11:53:22', '2021-11-01 11:53:22', NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', NULL, '554', 0, NULL, '0000-00-00', NULL, '30000', 0),
(42, '0900049', 'qwe', 'qwe@qwe.qwe', 0, NULL, '$2y$10$EsCL0YQEhKQ.2c.8hlJ23.iytHzaMVU3sPlJmC6b/tmaGjyKw8ye.', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2021-11-01 12:37:21', '2021-11-01 12:37:21', NULL, NULL, NULL, 'kims intetrnational', 'Ophthalmology', NULL, '123', 0, NULL, '0000-00-00', NULL, '30000', 0),
(43, '0900050', 'kimsentdoctor', 'kimsentdoctor@gmail.com', 0, NULL, '$2y$10$jOPSO3FsAcntChJcZ52nuedmUm7jqRAk1QCaELDokbEqfLFNfLiQK', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2021-11-02 11:36:17', '2021-11-02 11:36:17', 1, NULL, NULL, 'kims intetrnational', 'ENT', NULL, '465465', 0, NULL, '0000-00-00', NULL, '30000', 0),
(44, '0900051', 'kimsent1doctor', 'kimsent1doctor@gmail.com', 0, NULL, '$2y$10$q8NjWls3FzMV9OB0vTHOxeaI.yhOP4Z0kBzKlJU3MpyI4XSWuUnAq', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2021-11-02 11:37:18', '2021-11-02 11:37:18', NULL, NULL, NULL, 'kims intetrnational', 'ENT', NULL, '4564', 0, NULL, '0000-00-00', NULL, '30000', 0),
(45, '0900052', 'kimscounter', 'kimscounter@gmail.com', 0, NULL, '$2y$10$oICneu4u.uhKRacTwZBfje2gslKarw5eFcb8JmOigbFE48Gu0Izky', 'counter', '', '0000-00-00', '', '', '', NULL, '2021-11-02 11:49:26', '2021-11-02 11:49:26', 0, NULL, NULL, 'kims intetrnational', 'Medical Departments', NULL, '78987', 0, '1', '0000-00-00', NULL, '30000', 0),
(46, '0900053', 'salarytest', 'sta@gv.hv', 0, NULL, '$2y$10$v9wvYWgjpR7M728DwxtIi.G2o0qUR85IUzCP0AG4VLKP119Vqw7Ia', 'HR', '', '0000-00-00', '', '', '', NULL, '2021-11-03 13:08:15', '2021-11-03 13:08:15', NULL, NULL, '0000-00-00', 'kims intetrnational', 'Neonatal unit', NULL, '7894', 0, NULL, '0000-00-00', NULL, '11000', 0),
(47, '0900054', 'example', 'example@gmail.com', 0, NULL, '$2y$10$j7GSGfPpL9VHunci1lY1Mu7JxfBlftWsUFU.nuZwnYYixD4h/b3ca', 'pharma', '', '0000-00-00', '', '', '', NULL, '2021-12-12 17:08:34', '2021-12-12 17:08:34', NULL, NULL, '0000-00-00', 'kims intetrnational', 'ENT', NULL, '987987', 0, NULL, '0000-00-00', NULL, '15000', 0),
(48, NULL, 'dclinicadmin', 'dclinicadmin@gmail.com', 0, NULL, '$2y$10$gSm/ZGaIdem2eOb2wMVYp.KQ2uyVrIVOvPf3S2QAabXJ3GT2nSVza', 'admin', '', '0000-00-00', '', '', '', NULL, '2021-12-13 12:52:34', '2021-12-13 12:52:34', NULL, NULL, NULL, 'D-clinic', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '30000', 0),
(49, NULL, 'dclinichr', 'dclinichr@gmail.com', 0, NULL, '$2y$10$dgPvKV9QXWo5XI0H5hCGA.NTUsKAORZJqXTrUAgtnRYn24pI3PQGi', 'HR', '', '0000-00-00', '', '', '', NULL, '2021-12-13 13:04:34', '2021-12-13 13:04:34', NULL, NULL, NULL, 'D-clinic', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '30000', 0),
(50, '1100057', 'dclinicpharma', 'dclinicpharma@gmail.com', 0, NULL, '$2y$10$y3N8UI1.vVGt9RE.HRVvgODoMR.uvEv1pXh8Lz/z0yP2yUMp0fnk2', 'pharma', '', '0000-00-00', '', '', '', NULL, '2021-12-13 13:17:50', '2021-12-13 13:17:50', NULL, NULL, '0000-00-00', 'D-clinic', 'Oncology', NULL, '123456789', 0, NULL, '0000-00-00', NULL, '25000', 0),
(51, '1100058', 'test-d-clinic-staff', 'test-d-clinic-staff@gmail.com', 0, NULL, '$2y$10$e0eVcQVjn9YfkY2LvQ/57e5sbHyOaGQSA4h32mjd/M2eBnh03w/AK', 'lab', '', '0000-00-00', '', '', '', NULL, '2021-12-17 14:29:39', '2021-12-17 14:29:39', NULL, NULL, '0000-00-00', 'D-clinic', 'Oncology', NULL, '987', 0, NULL, '0000-00-00', NULL, '35000', 0),
(52, '1100072', 'wer', 'wer@gfg.hjj', 0, NULL, '$2y$10$T7TLOSqyhjFbrRtqsfyguO9CwsnQ1SYFx.ezd7n4oIL9iAK7QPXB6', 'Role', '', '0000-00-00', '', '', '', NULL, '2021-12-21 15:45:17', '2021-12-21 15:45:17', NULL, NULL, NULL, 'D-clinic', 'Medical Departments', NULL, '435', 0, NULL, '0000-00-00', NULL, '35000', 0),
(53, '0900074', 'kimsstore', 'kimsstore@gmail.com', 0, NULL, '$2y$10$Kim4TEicyWP46RX8cgi87uARtdJNBaHBkKXhaxAeaQi6vf5sM8r/G', 'store', '', '0000-00-00', '', '', '', NULL, '2022-01-02 15:44:35', '2022-01-02 15:44:35', NULL, '2022-01-12', '0000-00-00', 'kims intetrnational', 'ENT', NULL, '4', 0, NULL, '0000-00-00', NULL, '234', 0),
(54, '0900076', 'casuality', 'casuality@gmail.com', 0, NULL, '$2y$10$5bIy9/k7PBiYHZTtXB6dvOa5Lx0Xls0Uv9lqOY/fkd9vb49IBKTNC', 'casuality', '', '0000-00-00', '', '', '', NULL, '2022-01-03 18:57:52', '2022-01-03 18:57:52', NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', NULL, '36', 0, NULL, '0000-00-00', NULL, '35000', 0),
(55, '0900077', 'nurse', 'nurse@gmail.com', 0, NULL, '$2y$10$U1qk1MtKqOtk02OxaDDGE.CTsqHLnHbkmMXYpJWVgEfa0iKoioC4a', 'nurse', '', '0000-00-00', '', '', '', NULL, '2022-01-03 19:37:33', '2022-01-03 19:37:33', NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', NULL, '123', 0, NULL, '0000-00-00', NULL, '35000', 0),
(56, '0900078', 'hospitaladmin', 'hospitaladmin@gmail.com', 0, NULL, '$2y$10$9v9uLzRsReCXbFvVgB0SR.NJj1K5TQi.C9H7y442e.7fywpa490rW', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2022-01-09 11:57:04', '2022-01-09 11:57:04', 0, NULL, NULL, 'kims intetrnational', 'Medical Departments', NULL, '987', 0, NULL, '0000-00-00', NULL, '35000', 0),
(57, '0900079', 'Dep Admin', 'departmentadmin@gmail.com', 0, NULL, '$2y$10$OU7nsSW2KqdUONHyR8I7IugxyVti.8BxHyudVd84NE5zanscnAgbC', 'Department Admin', '', '0000-00-00', '', '', '', NULL, '2022-01-10 12:59:57', '2022-01-10 12:59:57', NULL, NULL, NULL, 'kims intetrnational', 'Orthopedics', NULL, '74', 0, NULL, '0000-00-00', NULL, '35000', 0),
(58, '0900081', 'entadmin', 'entadmin@gmail.com', 0, NULL, '$2y$10$itd3FYq1pmrnKVA2/IC40eZ/ks9FkDAtbIubWiRdPyEiOo.fJcKXu', 'Department Admin', '', '0000-00-00', '', '', '', NULL, '2022-01-10 14:06:59', '2022-01-10 14:06:59', NULL, NULL, NULL, 'kims intetrnational', 'ENT', NULL, '12', 0, NULL, '0000-00-00', NULL, '35000', 0),
(59, '0900082', 'entnurse', 'entnurse@gmail.com', 0, NULL, '$2y$10$NW9Guz7KPCDwJnuJif5uBOe8XVbAIHJbjZ6jNXK0JAnzRKiCkkJ1i', 'nurse', '', '0000-00-00', '', '', '', NULL, '2022-01-10 15:00:19', '2022-01-10 15:00:19', NULL, NULL, NULL, 'kims intetrnational', 'ENT', NULL, '9876876554', 0, NULL, '0000-00-00', NULL, '35000', 0),
(60, '0900083', 'ent lab', 'entlab@gmail.com', 0, NULL, '$2y$10$Cw9puNXzcl/37c1syqDJpehWORcXH7n/k8JMUMDlxUoYen3HeJ/aW', 'lab', '', '0000-00-00', '', '', '', NULL, '2022-01-10 15:01:11', '2022-01-10 15:01:11', NULL, NULL, NULL, 'kims intetrnational', 'ENT', NULL, '9058688758', 0, NULL, '0000-00-00', NULL, '35000', 0),
(61, '0900084', 'anpham', 'anpham@gmail.com', 0, NULL, '$2y$10$iTBKp2FUltLfyWIhiIZIde7Ou01xQ2fDKIQBxVmg5xYTR2zGCG5SO', 'pharma', '', '0000-00-00', '', '', '', NULL, '2022-01-10 17:33:16', '2022-01-10 17:33:16', NULL, '2022-01-11', '0000-00-00', 'kims intetrnational', 'ENT', NULL, '21', 0, NULL, '0000-00-00', NULL, '30000', 0),
(62, '0900085', 'testprevilage', 'testprevilage@gmail.com', 0, NULL, '$2y$10$6PdkT5h1bkRs18wZDiVj6ORw1r6NZ07b495cgQZovL84faeoHW3XS', 'test', '', '0000-00-00', '', '', '', NULL, '2022-01-16 15:07:13', '2022-01-16 15:07:13', NULL, NULL, NULL, 'kims intetrnational', 'Physical Medicine', NULL, '21', 0, NULL, '0000-00-00', NULL, '35000', 0),
(63, '0900086', 'dutnurse', 'dutnurse@gmail.com', 0, NULL, '$2y$10$ZbkgoSHkfAD8z/0I/vC60OTD1Z3biAsq0nau/dGAlrE7wzYGrh0Ny', 'nurse', '', '0000-00-00', '', '', '', NULL, '2022-01-16 18:28:34', '2022-01-16 18:28:34', NULL, NULL, NULL, 'kims intetrnational', 'Paramedical Department', NULL, '321', 0, NULL, '0000-00-00', NULL, '35000', 0),
(64, '0900087', 'SSS', 'aa@gmail.com', 0, NULL, '$2y$10$FyuoJOA9S2JZjlHVdpcRDe5kWW6tJP0KL05qwnKmqYx6igG5yhgNy', 'nurse', '', '0000-00-00', '', '', '', NULL, '2022-01-31 17:23:15', '2022-01-31 17:23:15', NULL, '0003-12-12', '0000-00-00', 'kims intetrnational', 'Paramedical Department', NULL, '21313214', 0, NULL, '0000-00-00', NULL, '10000', 0),
(65, '0900088', '5', '123@fff.in', 0, NULL, '$2y$10$UdQE0dzAFih09uL3uyR6/OpFYLCbqeC2NdtQXGeuJPVBgTu3i0hte', 'doc', '', '0000-00-00', '', '', '', NULL, '2022-01-31 17:31:07', '2022-01-31 17:31:07', NULL, '2421-03-22', '0000-00-00', 'kims intetrnational', 'Pharmacy Department', NULL, 'QWEQQE', 0, NULL, '0000-00-00', NULL, '13131', 0),
(66, '0900089', 'aaa', 'q@qwe.co.in', 0, NULL, '$2y$10$.uzngz7LKcqYHSsuuM1hIuOQ4dF54qAaS2fQk323g9eQah..wa51a', 'Department Head', '', '0000-00-00', '', '', '', NULL, '2022-01-31 18:32:17', '2022-01-31 18:32:17', NULL, NULL, NULL, 'kims intetrnational', 'Medical Departments', NULL, '4142', 0, NULL, '0000-00-00', NULL, '35000', 0),
(67, NULL, 'testinghospitaladmin', 'testinghospitaladmin@gmail.com', 0, NULL, '$2y$10$zE2SVENNNyiSXNpJqxi7LO9FsT5raRn/2Wb6SEK/2mYsFhfcevFcm', 'admin', '', '0000-00-00', '', '', '', NULL, '2022-02-14 12:11:41', '2022-02-14 12:11:41', NULL, NULL, NULL, 'testinghospital', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '35000', 0),
(68, NULL, 'hosadmin2', 'hosadmin2@gmail.com', 0, NULL, '$2y$10$oTSwbuACbi9WSBcw1BTwiePmYzUyEhtxu4OPGnILCt/CXTfre.0gO', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2022-02-14 12:24:35', '2022-02-14 12:24:35', NULL, NULL, NULL, 'GSM', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '35000', 0),
(69, NULL, 't', 'r@g.yt', 0, NULL, '$2y$10$DLnKLB5J7ZH04xOLwjM1COVsqPRmDrVpm3Y2cYeBadELrxGIhisKu', 'departmentadmin', '', '0000-00-00', '', '', '', NULL, '2022-02-14 14:25:47', '2022-02-14 14:25:47', NULL, NULL, NULL, 'Paramedical Department', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '35000', 0),
(70, NULL, 'e', 'r@g.g', 0, NULL, '$2y$10$2JjxdCxRQ0fKEdKEOzdTF.5tIEC0a7XCv5/TaFE2eaHnKdmC11Aku', 'departmentadmin', '', '0000-00-00', '', '', '', NULL, '2022-02-14 14:26:22', '2022-02-14 14:26:22', NULL, NULL, NULL, 'Rehabilitation Department', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '35000', 0),
(71, NULL, 'testdepadmin', 'testdepadmin@gmail.com', 0, NULL, '$2y$10$m3Ps7h5rQ9CNGnwhu38xb.0OqRc5am.pmlgDAK9AejJdVeCNrpor6', 'Department Admin', '', '0000-00-00', '', '', '', NULL, '2022-02-14 15:30:40', '2022-02-14 15:30:40', NULL, NULL, NULL, 'Nursing Department', 'Nursing Department', NULL, NULL, NULL, NULL, '0000-00-00', NULL, '35000', 0),
(72, NULL, 'testagdepadmin', 'testagdepadmin@gmail.com', 0, NULL, '$2y$10$77cxDn/YaDJqGaKO6kV3MeUVnNxGpzF1hHqnSZCXYx.autry/cUwe', 'Department Admin', '', '0000-00-00', '', '', '', NULL, '2022-02-14 15:32:31', '2022-02-14 15:32:31', NULL, NULL, NULL, '', 'Nursing Department', 'Nursing Department', NULL, NULL, NULL, '0000-00-00', NULL, '30000', 0),
(73, '0900090', 'nursetestdep', 'nursetestdep@gmail.com', 0, NULL, '$2y$10$gZHPvyhGvPVBIryOJhAfOupzRHeL/TTEirZL4gWiMNYTgMc8nOBZW', 'nurse', '', '0000-00-00', '', '', '', NULL, '2022-02-14 15:33:23', '2022-02-14 15:33:23', NULL, NULL, NULL, 'kims intetrnational', 'Nursing Department', 'Nursing Department', '54', 0, NULL, '0000-00-00', NULL, '30000', 0),
(74, NULL, 'cardiologyadmin', 'cardiologyadmin@gmail.com', 0, NULL, '$2y$10$ramk/ZAqPwjx71i4kiWdfOSqa2H5Mf4soL/CnXEbH.dJe/aMYgYsC', 'Department Admin', '', '0000-00-00', '', '', '', NULL, '2022-02-15 15:24:49', '2022-02-15 15:24:49', NULL, NULL, NULL, 'kims intetrnational', 'cardiology', NULL, NULL, NULL, NULL, '0000-00-00', NULL, '30000', 0),
(75, '0900098', 'cardiologydoctor', 'cardiologydoctor@gmail.com', 0, NULL, '$2y$10$6/y0TDrj2l6fH.7I9qa18eEEjsN0RKgUMoH3LdSVxa/MtZQzSPIxe', 'doctor', '', '0000-00-00', '', '', '', NULL, '2022-02-15 15:31:36', '2022-02-15 15:31:36', NULL, NULL, NULL, 'kims intetrnational', 'cardiology', NULL, '21', 0, NULL, '0000-00-00', NULL, '30000', 0),
(76, '0900099', 'card', 'card@gmail.com', 0, NULL, '$2y$10$5bIy9/k7PBiYHZTtXB6dvOa5Lx0Xls0Uv9lqOY/fkd9vb49IBKTNC', 'Doctor', '', '0000-00-00', '', '', '', NULL, '2022-02-15 15:33:37', '2022-02-15 15:33:37', NULL, NULL, NULL, 'kims intetrnational', 'cardiology', NULL, '4', 0, '--', '0000-00-00', NULL, '20000', 400),
(77, NULL, 'depadmintest', 'depadmintest@gmail.com', 0, NULL, '$2y$10$re2tfnyQViSTfZIVopsTWeWTEMgtnyWQW0n6B7kPfp7ZT4/Tzpnze', 'Department Admin', '', '0000-00-00', '', '', '', NULL, '2022-02-15 15:38:29', '2022-02-15 15:38:29', NULL, NULL, NULL, 'kims intetrnational', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '30000', 0),
(78, NULL, 'cardftest', 'cardftest@gmail.com', 0, NULL, '$2y$10$qIme/tbnHWo.O1JgIIs.uew.YbWw7IB46FybCfxRV6xdZEh7qHhkC', 'Department Admin', '', '0000-00-00', '', '', '', NULL, '2022-02-15 16:01:38', '2022-02-15 16:01:38', NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'cardiology', NULL, 0, NULL, '0000-00-00', NULL, '30000', 0),
(79, '0900102', 'testorder', 'testorder@gmail.com', 0, NULL, '$2y$10$prz1YXbu0/XxugQdmyDT.efYdQkiO5F8D1TlnYJr2iZjki22GGR2e', 'doctor', '', '0000-00-00', '', '', '', NULL, '2022-02-18 18:47:03', '2022-02-18 18:47:03', NULL, NULL, NULL, 'kims intetrnational', 'cardiology', NULL, '654', 0, NULL, '0000-00-00', NULL, '100000', 0),
(80, NULL, 't', 't@g.y', 0, NULL, '$2y$10$1vtr3xV56JMq3j3.6GjL5OpFkwO45j7P2hqC.JTyX74WdvE57HU7.', 'Department Admin', '', '0000-00-00', '', '', '', NULL, '2022-02-18 19:10:36', '2022-02-18 19:10:36', NULL, NULL, NULL, 'kims intetrnational', 'Paramedical Department', 'Paramedical Department', NULL, 0, NULL, '0000-00-00', NULL, '30000', 0),
(81, '0900100', 'admin321', 'admin321@gmail.com', 0, NULL, '$2y$10$I1TleRs/f4rBqUQgxVTmh.kbRLHRofT8x/kfVV33rd7nqyxGaWCZ6', 'hospitaladmin', '', '0000-00-00', '', '', '', NULL, '2022-04-09 11:30:51', '2022-04-09 11:30:51', NULL, NULL, NULL, 'kims intetrnational', NULL, NULL, NULL, 0, '1', '0000-00-00', NULL, NULL, NULL),
(82, '0904000010105', 'rerer', 'eee@gmail.com', 33, NULL, '$2y$10$32qN/CHH/f5WpIoiTH50fOCKv2d6iVb1nK5F0ifnqQGrMqMIpLAmG', 'Doctor', 'gfgfdgf', '0000-00-00', '435435', 'eferew', '54657', NULL, '2022-04-09 14:48:06', '2022-04-09 14:48:06', 4, 'female', NULL, 'kims intetrnational', 'Medical Departments', 'Medical Departments', '5456656', 1, '1', '0000-00-00', '40000', '1982-09-16', 400),
(83, '0904000010107', 'ggg', 'ggg@gmail.com', 30, NULL, '$2y$10$mjjG/6NA2aeEUT1u2/i8feK2dQtygSQwtGW5aIWr4O8CeR8UnTEIW', 'Doctor', 'demo', '2020-02-17', '45435512', 'dfgsdfg', '5445', NULL, '2022-04-09 18:28:42', '2022-04-09 18:28:42', 2, 'female', NULL, 'kims intetrnational', 'Medical Departments', 'Medical Departments', '67657567', 1, '1', NULL, '15000', '1995-03-08', 400),
(84, '0904000010108', 'dgfgfg', 'fff@gmail.com', 33, NULL, '$2y$10$w2G5itxGGlil4uIP0JuHF.CHz27HXUEY5yHN4aBHnp06m39dtP8Ue', 'Doctor', 'sdsd', '2009-01-20', '2343', 'fdfer', '4344', NULL, '2022-04-11 11:43:21', '2022-04-11 11:43:21', 5, 'female', NULL, 'kims intetrnational', 'Medical Departments', 'Medical Departments', '3454354', 1, NULL, NULL, '50000', '2008-01-07', 400),
(85, '0900109', 'KRKADMIN', 'krkadmin@gmail.com', 0, NULL, '$2y$10$JcGIgNtfRSmwCB2OF3Wcc.9DOOftKTznMHPlP4TVDGEnPF.ABCgqS', 'hospitaladmin', '', NULL, '', '', '', NULL, '2022-04-15 11:31:41', '2022-04-15 11:31:41', 0, NULL, NULL, 'K R K HOSPITAL', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL),
(86, NULL, 'admin123', 'admin123@gmail.com', 0, NULL, '$2y$10$nRk7KJCk.JcwUqxrY08AP.7YtHYZYShATeE/.XePewKaXzzLwkdMm', 'Department Admin', '', NULL, '', '', '', NULL, '2022-04-15 12:41:00', '2022-04-15 12:41:00', NULL, NULL, NULL, 'K R K HOSPITAL', 'cardiology', 'cardiology', NULL, NULL, '1', NULL, NULL, NULL, NULL),
(87, '0904000010109', 'anu', 'anu@gmail.com', 30, NULL, '$2y$10$eKymAE72cFdBtyMVEtwF3.JSV6AKERgjIQk4pehW6UCz5frhK5KhC', 'labtechnician', 'demo', '2021-01-08', '545466536', 'fdtrt', '545466653', NULL, '2022-04-26 14:01:32', '2022-04-26 14:01:32', 2, 'female', NULL, 'kims intetrnational', 'Medical Departments', 'Medical Departments', '78786356', 1, '1', NULL, '20000', '1993-06-04', 500),
(88, '0904000010112', 'demo1234', 'demo1234@gmail.com', 33, NULL, '$2y$10$5bIy9/k7PBiYHZTtXB6dvOa5Lx0Xls0Uv9lqOY/fkd9vb49IBKTNC', 'Doctor', 'dsaff', '2021-06-08', '6665', 'fgdgfg', '545435', NULL, '2022-04-26 14:38:09', '2022-04-26 14:38:09', 2, 'female', NULL, 'kims intetrnational', 'Medical Departments', 'Medical Departments', '78785746', 0, '1', NULL, '150000', '1995-02-09', 500),
(89, NULL, 'admin123', 'admin123@gmail.com', NULL, NULL, '$2y$10$egI3GqF0h9pB068LeRXBCO.Bbmwk1OnnOO.lcKydRWxH4k2s5k2Jq', 'Department Admin', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 04:56:05', '2022-05-20 04:56:05', NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'cardiology', NULL, NULL, '1', NULL, NULL, NULL, NULL),
(90, NULL, 'cxfdf', 'ddd@GMAIL.COM', NULL, NULL, '$2y$10$yLn48Dx8WcuwkfINfk7SzO5jMrtjhX4cqlqTZx4op3HOBWblVVxwi', 'Department Admin', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-22 22:06:05', '2022-05-22 22:06:05', NULL, NULL, NULL, 'kims intetrnational', 'Nursing Department', 'Nursing Department', NULL, NULL, '1', NULL, NULL, NULL, NULL),
(91, NULL, 'sasd', 'saaa@gmail.com', NULL, NULL, '$2y$10$cWtC1tN7OiMPw.enuCly7.GbQS13qwuAZ1WzqWBIf5lomokWNuNP.', 'Department Admin', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-23 05:44:14', '2022-05-23 05:44:14', NULL, NULL, NULL, 'kims intetrnational', 'ENT', 'ENT', NULL, NULL, '1', NULL, NULL, NULL, NULL),
(92, NULL, 'dsfr', 'waw@gmail.com', NULL, NULL, '$2y$10$wJxcvBHYsQ38xMcJQfO2qOsPc9ryCC0LiBo3mC5i8DC.gXAqfeDaW', 'Department Admin', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-23 06:03:52', '2022-05-23 06:03:52', NULL, NULL, NULL, 'kims intetrnational', 'Paramedical Department', 'Paramedical Department', NULL, NULL, '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visiters`
--

CREATE TABLE `visiters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bystander_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bystander_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weighted_avg_table_acc`
--

CREATE TABLE `weighted_avg_table_acc` (
  `id` int(11) NOT NULL,
  `tranaction_date` date NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `receipt_qty` int(11) NOT NULL,
  `receipt_rate` double NOT NULL,
  `receipt_amount` double NOT NULL,
  `issue_qty` int(11) NOT NULL,
  `issue_rate` double NOT NULL,
  `issue_amount` double NOT NULL,
  `balance_qty` int(11) NOT NULL,
  `balance_rate` double NOT NULL,
  `balance_amount` double NOT NULL,
  `transaction_company` varchar(150) NOT NULL,
  `transaction_addedby` int(11) NOT NULL,
  `transaction_addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alllabtests`
--
ALTER TABLE `alllabtests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amb_driver`
--
ALTER TABLE `amb_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amb_ulance`
--
ALTER TABLE `amb_ulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atttendance`
--
ALTER TABLE `atttendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_names`
--
ALTER TABLE `brand_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callambulance`
--
ALTER TABLE `callambulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailyattendances`
--
ALTER TABLE `dailyattendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dutyschedule`
--
ALTER TABLE `dutyschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fifo_table_acc`
--
ALTER TABLE `fifo_table_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generic_medicines`
--
ALTER TABLE `generic_medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generic_names`
--
ALTER TABLE `generic_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giveallowance`
--
ALTER TABLE `giveallowance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_registers`
--
ALTER TABLE `issue_registers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `labcategory`
--
ALTER TABLE `labcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labprofile`
--
ALTER TABLE `labprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labprofiles`
--
ALTER TABLE `labprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labtests`
--
ALTER TABLE `labtests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_department`
--
ALTER TABLE `lab_department`
  ADD PRIMARY KEY (`lab_deptid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
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
-- Indexes for table `lifo_table_acc`
--
ALTER TABLE `lifo_table_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manualattendances`
--
ALTER TABLE `manualattendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufactuers`
--
ALTER TABLE `manufactuers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicaldepartments`
--
ALTER TABLE `medicaldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_groups`
--
ALTER TABLE `medicine_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_types`
--
ALTER TABLE `medicine_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_units`
--
ALTER TABLE `medicine_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_medicines`
--
ALTER TABLE `new_medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientinsurance`
--
ALTER TABLE `patientinsurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientprofiles`
--
ALTER TABLE `patientprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patienttests`
--
ALTER TABLE `patienttests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_labtest`
--
ALTER TABLE `patient_labtest`
  ADD PRIMARY KEY (`patientlab_id`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pharmacy_dept`
--
ALTER TABLE `pharmacy_dept`
  ADD PRIMARY KEY (`phar_deptid`);

--
-- Indexes for table `pharma_requests`
--
ALTER TABLE `pharma_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescribed_labtest`
--
ALTER TABLE `prescribed_labtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`presc_id`);

--
-- Indexes for table `prescription_medicine`
--
ALTER TABLE `prescription_medicine`
  ADD PRIMARY KEY (`presc_medid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD PRIMARY KEY (`purchase_return_id`);

--
-- Indexes for table `request_intend`
--
ALTER TABLE `request_intend`
  ADD PRIMARY KEY (`request_intendid`);

--
-- Indexes for table `request_items`
--
ALTER TABLE `request_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_status`
--
ALTER TABLE `request_status`
  ADD PRIMARY KEY (`request_statusid`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomcategories`
--
ALTER TABLE `roomcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servedmedicines`
--
ALTER TABLE `servedmedicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_leaves`
--
ALTER TABLE `staff_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_categories_acc`
--
ALTER TABLE `stock_categories_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_groups_acc`
--
ALTER TABLE `stock_groups_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_items_acc`
--
ALTER TABLE `stock_items_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_methods`
--
ALTER TABLE `stock_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_subcategories_acc`
--
ALTER TABLE `stock_subcategories_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_transaction_table_acc`
--
ALTER TABLE `stock_transaction_table_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_issued_details`
--
ALTER TABLE `store_issued_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermanagements`
--
ALTER TABLE `usermanagements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visiters`
--
ALTER TABLE `visiters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weighted_avg_table_acc`
--
ALTER TABLE `weighted_avg_table_acc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alllabtests`
--
ALTER TABLE `alllabtests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `allowance`
--
ALTER TABLE `allowance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `amb_driver`
--
ALTER TABLE `amb_driver`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amb_ulance`
--
ALTER TABLE `amb_ulance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `atttendance`
--
ALTER TABLE `atttendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand_names`
--
ALTER TABLE `brand_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `callambulance`
--
ALTER TABLE `callambulance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dailyattendances`
--
ALTER TABLE `dailyattendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `dutyschedule`
--
ALTER TABLE `dutyschedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fifo_table_acc`
--
ALTER TABLE `fifo_table_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `generic_medicines`
--
ALTER TABLE `generic_medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generic_names`
--
ALTER TABLE `generic_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `giveallowance`
--
ALTER TABLE `giveallowance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `issue_registers`
--
ALTER TABLE `issue_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `journal_items`
--
ALTER TABLE `journal_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `journal_transactions`
--
ALTER TABLE `journal_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `labcategory`
--
ALTER TABLE `labcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `labprofile`
--
ALTER TABLE `labprofile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `labprofiles`
--
ALTER TABLE `labprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `labtests`
--
ALTER TABLE `labtests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lab_department`
--
ALTER TABLE `lab_department`
  MODIFY `lab_deptid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ledgeraccounts`
--
ALTER TABLE `ledgeraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `ledgeraccount_categories`
--
ALTER TABLE `ledgeraccount_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ledgeraccount_subcategories`
--
ALTER TABLE `ledgeraccount_subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lifo_table_acc`
--
ALTER TABLE `lifo_table_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `manualattendances`
--
ALTER TABLE `manualattendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufactuers`
--
ALTER TABLE `manufactuers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicaldepartments`
--
ALTER TABLE `medicaldepartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `medicine_groups`
--
ALTER TABLE `medicine_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine_types`
--
ALTER TABLE `medicine_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine_units`
--
ALTER TABLE `medicine_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `new_medicines`
--
ALTER TABLE `new_medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `patientinsurance`
--
ALTER TABLE `patientinsurance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patientprofiles`
--
ALTER TABLE `patientprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patienttests`
--
ALTER TABLE `patienttests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patient_labtest`
--
ALTER TABLE `patient_labtest`
  MODIFY `patientlab_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharmacy_dept`
--
ALTER TABLE `pharmacy_dept`
  MODIFY `phar_deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pharma_requests`
--
ALTER TABLE `pharma_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prescribed_labtest`
--
ALTER TABLE `prescribed_labtest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `presc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `prescription_medicine`
--
ALTER TABLE `prescription_medicine`
  MODIFY `presc_medid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchase_return`
--
ALTER TABLE `purchase_return`
  MODIFY `purchase_return_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_intend`
--
ALTER TABLE `request_intend`
  MODIFY `request_intendid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request_items`
--
ALTER TABLE `request_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_status`
--
ALTER TABLE `request_status`
  MODIFY `request_statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roomcategories`
--
ALTER TABLE `roomcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `servedmedicines`
--
ALTER TABLE `servedmedicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_leaves`
--
ALTER TABLE `staff_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_categories_acc`
--
ALTER TABLE `stock_categories_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `id` bigint(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `stock_groups_acc`
--
ALTER TABLE `stock_groups_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock_items_acc`
--
ALTER TABLE `stock_items_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock_methods`
--
ALTER TABLE `stock_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_subcategories_acc`
--
ALTER TABLE `stock_subcategories_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock_transaction_table_acc`
--
ALTER TABLE `stock_transaction_table_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `store_issued_details`
--
ALTER TABLE `store_issued_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usermanagements`
--
ALTER TABLE `usermanagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `visiters`
--
ALTER TABLE `visiters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weighted_avg_table_acc`
--
ALTER TABLE `weighted_avg_table_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
