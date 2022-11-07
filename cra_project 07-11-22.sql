-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 06:26 AM
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
(7, '1', NULL, 'r', '4', 'y', '2022-02-19 05:51:07', '2022-02-19 05:51:07', 'kims intetrnational');

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
(22, 'TRAVEL ALLOWANCE', '1503', NULL, 'kims intetrnational', 'allowance', NULL, '2021-12-24 06:30:54', '2021-12-24 06:30:54'),
(25, 'gst', NULL, '6', 'kims intetrnational', 'reduction', NULL, '2021-12-24 06:31:43', '2021-12-24 06:31:43'),
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
  `appointmentdate` date DEFAULT NULL,
  `hospital` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `appointments` (`id`, `patientid`, `Department`, `appointmentdate`, `hospital`, `status`, `token`, `prescription`, `lab`, `medicine`, `docs`, `files`, `surgery`, `surgerydate`, `nextappointment`, `created_at`, `updated_at`, `visiting_type`, `bystander_name`, `bystander_address`, `contact_no`, `consultant`) VALUES
(1, '987', 'Urology', '2021-12-04', 'kims intetrnational', 'medicinated', 1, 'qwer', 'er', 'qewr', NULL, NULL, NULL, NULL, NULL, '2021-12-04 11:11:18', '2021-12-04 11:11:18', '', '', '', '', NULL),
(2, '1243', 'Urology', '2021-12-04', 'kims intetrnational', 'appointedddd', 2, 'dfgh', 'fdh', 'fdh', NULL, NULL, NULL, NULL, NULL, '2021-12-04 12:03:37', '2021-12-04 12:03:37', '', '', '', '', NULL),
(3, '123', 'Urology', '2021-12-04', 'kims intetrnational', 'appointed', 3, '111111', '33333333', '22222', NULL, NULL, NULL, NULL, NULL, '2021-12-04 12:11:13', '2021-12-04 12:11:13', '', '', '', '', NULL),
(4, '789', 'Urology', '2021-12-06', 'kims intetrnational', 'medicinated', 1, 'ghj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 04:42:11', '2021-12-06 04:42:11', '', '', '', '', NULL),
(5, '789', 'Gastroenterology', '2021-12-06', 'kims intetrnational', 'queue', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 04:42:32', '2021-12-06 04:42:32', '', '', '', '', NULL),
(6, '987', 'Urology', '2021-12-09', 'kims intetrnational', 'called', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 04:42:46', '2021-12-06 04:42:46', '', '', '', '', NULL),
(7, '88', 'Urology', '2021-12-09', 'kims intetrnational', 'medicinated', 4, 'phramatest\r\ndgh\r\ndh\r\nfh\r\nd\r\nfhh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 04:45:46', '2021-12-06 04:45:46', '', '', '', '', NULL),
(8, '87', 'Urology', '2021-12-06', 'kims intetrnational', 'called', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 05:22:08', '2021-12-06 05:22:08', '', '', '', '', NULL),
(9, '34', 'Urology', '2021-12-06', 'kims intetrnational', 'medicinated', 6, 'qqqqq11111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 07:07:02', '2021-12-06 07:07:02', '', '', '', '', NULL),
(10, '87', 'Urology', '2021-12-06', 'kims intetrnational', 'medicinated', 7, 'zx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 08:49:28', '2021-12-06 08:49:28', '', '', '', '', NULL),
(11, '3232', 'Urology', '2021-12-06', 'kims intetrnational', 'medicinated', 8, 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 08:54:10', '2021-12-06 08:54:10', '', '', '', '', NULL),
(12, '3322', 'Urology', '2021-12-06', 'kims intetrnational', 'medicinated', 9, 'kk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 08:55:12', '2021-12-06 08:55:12', '', '', '', '', NULL),
(13, '987987', 'Urology', '2021-12-06', 'kims intetrnational', 'medicinated', 10, 'qqqqqqqqqqwwwwwww', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 10:35:49', '2021-12-06 10:35:49', '', '', '', '', NULL),
(14, '987987', 'Urology', '2021-12-06', 'kims intetrnational', 'appointed', 11, 'sdfsdfsfs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 11:36:15', '2021-12-06 11:36:15', '', '', '', '', NULL),
(15, '12', 'Urology', '2021-12-24', 'kims intetrnational', 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-24 05:50:36', '2021-12-24 05:50:36', '', '', '', '', NULL),
(16, '11', 'Urology', '2021-12-24', 'kims intetrnational', 'medicinated', 2, 'afasfafasfa', 'asf\r\nas\r\nf\r\ns\r\nf\r\na\r\nsfsaf', 'safasf\r\n\r\n\r\nafs\r\n\r\nasf\r\nsaf', NULL, NULL, NULL, '2021-12-30', NULL, '2021-12-24 05:51:07', '2021-12-24 05:51:07', '', '', '', '', NULL),
(17, '9', 'Urology', '2021-12-24', 'kims intetrnational', 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-24 05:51:19', '2021-12-24 05:51:19', '', '', '', '', NULL),
(18, '8', 'Urology', '2021-12-24', 'kims intetrnational', 'discharged', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-24 05:51:39', '2021-12-24 05:51:39', '', '', '', '', NULL),
(19, '8', 'Urology', '2021-12-24', 'kims intetrnational', 'discharged', 5, 'rew', 'bvbv\r\nyff', 'yuf', NULL, NULL, 'hg', '2021-12-24', NULL, '2021-12-24 07:04:09', '2021-12-24 07:04:09', '', '', '', '', NULL),
(20, '5', 'Urology', '2021-12-24', 'kims intetrnational', 'discharged', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-24 07:04:34', '2021-12-24 07:04:34', '', '', '', '', NULL),
(21, '6', 'Urology', '2021-12-24', 'kims intetrnational', 'discharged', 7, 'ytry', 'jh\r\nigig\r\ng', 'klj', NULL, NULL, NULL, NULL, '2021-12-30', '2021-12-24 07:04:46', '2021-12-24 07:04:46', '', '', '', '', NULL),
(22, '2', 'Urology', '2021-12-25', 'kims intetrnational', 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-25 09:55:33', '2021-12-25 09:55:33', '', '', '', '', NULL),
(23, '4', 'Urology', '2021-12-25', 'kims intetrnational', 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-25 09:56:04', '2021-12-25 09:56:04', '', '', '', '', NULL),
(24, '5', 'Urology', '2021-12-25', 'kims intetrnational', 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-25 09:56:18', '2021-12-25 09:56:18', '', '', '', '', NULL),
(25, '9', 'Urology', '2021-12-25', 'kims intetrnational', 'discharged', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-25 09:56:29', '2021-12-25 09:56:29', '', '', '', '', NULL),
(26, '1', 'Urology', '2022-01-07', 'kims intetrnational', 'discharged', 1, 'token 1 today prescription', 'token 1 today Lab', 'token 1 today Medicine', NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:16', '2022-01-07 05:04:16', '', '', '', '', NULL),
(27, '2', 'Urology', '2022-01-07', 'kims intetrnational', 'discharged', 2, 'qwe', 'ewq', 'qwe', NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:26', '2022-01-07 05:04:26', '', '', '', '', NULL),
(28, '3', 'Urology', '2022-01-07', 'kims intetrnational', 'discharged', 3, 'dfg', 'fgd', 'fgd', NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34', '', '', '', '', NULL),
(29, '4', 'Urology', '2022-01-07', 'kims intetrnational', 'discharged', 4, 'fdg', 'fg', 'gf', NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42', '', '', '', '', NULL),
(30, '5', 'Urology', '2022-01-07', 'kims intetrnational', 'discharged', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:04:52', '2022-01-07 05:04:52', '', '', '', '', NULL),
(31, '6', 'Urology', '2022-01-07', 'kims intetrnational', 'discharged', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:05:00', '2022-01-07 05:05:00', '', '', '', '', NULL),
(32, '7', 'Urology', '2022-01-07', 'kims intetrnational', 'discharged', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 05:05:08', '2022-01-07 05:05:08', '', '', '', '', NULL),
(33, '2', 'Physiotherapy', '2022-01-10', 'kims intetrnational', 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-10 12:22:59', '2022-01-10 12:22:59', '', '', '', '', NULL),
(34, '6', 'General Surgery', '2022-01-10', 'kims intetrnational', 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-10 12:23:07', '2022-01-10 12:23:07', '', '', '', '', NULL),
(35, '1', 'Urology', '2022-01-11', 'kims intetrnational', 'discharged', 1, 'dgh', 'tu', 'h', NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:05:54', '2022-01-11 13:05:54', '', '', '', '', NULL),
(36, '2', 'Urology', '2022-01-11', 'kims intetrnational', 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:06:06', '2022-01-11 13:06:06', '', '', '', '', NULL),
(37, '3', 'Urology', '2022-01-11', 'kims intetrnational', 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:06:15', '2022-01-11 13:06:15', '', '', '', '', NULL),
(38, '5', 'Urology', '2022-01-11', 'kims intetrnational', 'discharged', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:06:28', '2022-01-11 13:06:28', '', '', '', '', NULL),
(39, '9', 'Urology', '2022-01-11', 'kims intetrnational', 'discharged', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:09', '2022-01-11 13:13:09', '', '', '', '', NULL),
(40, '10', 'Urology', '2022-01-11', 'kims intetrnational', 'queue', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:19', '2022-01-11 13:13:19', '', '', '', '', NULL),
(41, '12', 'Urology', '2022-01-11', 'kims intetrnational', 'discharged', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:29', '2022-01-11 13:13:29', '', '', '', '', NULL),
(42, '13', 'Urology', '2022-01-11', 'kims intetrnational', 'queue', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:40', '2022-01-11 13:13:40', '', '', '', '', NULL),
(43, '14', 'Urology', '2022-01-11', 'kims intetrnational', 'queue', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 13:13:50', '2022-01-11 13:13:50', '', '', '', '', NULL),
(44, '2', 'casuality', '2022-01-14', '', 'discharged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'normal', 'b', 'b', '1', NULL),
(45, '1', 'casuality', '2022-01-14', '', 'discharged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'mercedes', 'e', 'w', '3', NULL),
(46, '3', 'casuality', '2022-01-15', '', 'discharged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'normal', 'r`r', 't', '54', NULL),
(47, '6', 'Urology', '2022-01-14', 'kims intetrnational', 'discharged', 1, 'e', 'r', 'e', NULL, NULL, NULL, '2022-01-14', NULL, '2022-01-14 09:01:27', '2022-01-14 09:01:27', NULL, '', '', '', NULL),
(48, '7', 'Urology', '2022-01-14', 'kims intetrnational', 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-14 09:01:40', '2022-01-14 09:01:40', NULL, '', '', '', NULL),
(49, '8', 'Urology', '2022-01-14', 'kims intetrnational', 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-14 09:02:21', '2022-01-14 09:02:21', NULL, '', '', '', NULL),
(50, '1', 'casuality', '2022-01-14', '', 'discharged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'mercedes', 'p', 'o', '7', NULL),
(51, '2', 'ENT', '2022-01-18', 'kims intetrnational', 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-18 04:58:54', '2022-01-18 04:58:54', NULL, '', '', '', NULL),
(52, '1', 'Urology', '2022-01-18', 'kims intetrnational', 'discharged', 2, 'test details on prescription', 'test details on lab', 'test details on medicine', NULL, NULL, NULL, NULL, NULL, '2022-01-18 07:51:22', '2022-01-18 07:51:22', NULL, '', '', '', NULL),
(53, '2', 'Urology', '2022-02-02', 'kims intetrnational', 'discharged', 1, 'prescription today2.2.2022', 'lab today2.2.2022', 'medicine today2.2.2022', NULL, NULL, NULL, NULL, NULL, '2022-02-02 11:14:43', '2022-02-02 11:14:43', NULL, '', '', '', NULL),
(54, '3', 'Urology', '2022-02-02', 'kims intetrnational', 'discharged', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-02 11:14:54', '2022-02-02 11:14:54', NULL, '', '', '', NULL),
(55, '5', 'Urology', '2022-02-02', 'kims intetrnational', 'discharged', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-02 11:15:19', '2022-02-02 11:15:19', NULL, '', '', '', NULL),
(56, '5', 'Urology', '2022-02-07', 'kims intetrnational', 'discharged', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-07 09:49:48', '2022-02-07 09:49:48', NULL, '', '', '', NULL);

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
-- Table structure for table `budget_types`
--

CREATE TABLE `budget_types` (
  `id` int(11) NOT NULL,
  `budget_name` varchar(255) DEFAULT NULL,
  `budget_desc` varchar(255) DEFAULT NULL,
  `budget_update_privilage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `budget_types`
--

INSERT INTO `budget_types` (`id`, `budget_name`, `budget_desc`, `budget_update_privilage`) VALUES
(5, 'Receipts', NULL, 1),
(6, 'Staff Salaries and bonus', NULL, 1),
(7, 'Insurances', NULL, 1),
(8, 'Partners Benifits', NULL, 1),
(9, 'Assets', NULL, 1),
(10, 'Office administration Expenses', NULL, 1),
(11, 'Marketing and Branding Budget', NULL, 1),
(12, 'Travel & Entertainment', NULL, 1),
(13, 'Office Rent & Service Charge', NULL, 1),
(14, 'Information & Technology Costs', NULL, 1),
(15, 'Other Administrative Costs', NULL, 1),
(16, 'Audit,Accountancy & Strategic Plan Consultancy Fees', NULL, 1),
(17, 'Projected Taxes', NULL, 1),
(18, 'Telecommunication Costs', NULL, 1);

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
-- Table structure for table `cra_add_box`
--

CREATE TABLE `cra_add_box` (
  `id` int(225) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `number` int(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_box`
--

INSERT INTO `cra_add_box` (`id`, `type`, `number`, `company_id`, `branch_id`) VALUES
(146, 'demo 2', 666666, NULL, NULL),
(147, NULL, NULL, NULL, NULL),
(148, NULL, NULL, NULL, NULL),
(149, NULL, NULL, NULL, NULL);

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
  `Set_Reminder` varchar(225) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_event`
--

INSERT INTO `cra_add_event` (`id`, `Event_Type`, `Title`, `Meeting_Room`, `Location`, `Start_Date`, `Time`, `End_Date`, `Time_End`, `Event_Booked_For`, `User_Invited`, `Other_Invites`, `Client`, `File`, `Notes`, `Set_Repetition`, `Repetition_End`, `Set_Reminder`, `company_id`, `branch_id`) VALUES
(5, 'demo 2', 'sdgdg', 'demo 3', 'sdfsdf', '2022-09-28', '15:27:00', '2022-10-28', '16:28:00', 'demo 2', 'sdfsd', 'test', 'demo 3', 'demo 2', 'dfgdfgdg', 'demo 2', '2022-10-28', 'demo 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_add_file_bringup_reminder`
--

CREATE TABLE `cra_add_file_bringup_reminder` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `progress_date` date NOT NULL,
  `next_bringup_days` date NOT NULL,
  `remind_period_days` date NOT NULL,
  `send_notification` varchar(255) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_file_bringup_reminder`
--

INSERT INTO `cra_add_file_bringup_reminder` (`id`, `client_name`, `file_name`, `progress_date`, `next_bringup_days`, `remind_period_days`, `send_notification`, `reason`, `company_id`, `branch_id`) VALUES
(1, 'client 1', 'cra project', '2022-10-16', '0000-00-00', '2022-10-30', 'notification 1', 'complete', NULL, NULL),
(2, 'client 1', 'test', '2022-10-27', '0000-00-00', '2022-10-22', 'notification 1', 'test', NULL, NULL),
(3, 'client 1', 'test', '2022-10-28', '0000-00-00', '2022-10-23', 'select....', 'test', NULL, NULL),
(4, 'client 3', 'onetwo', '2022-10-29', '0000-00-00', '2022-10-27', 'notification 3', 'test 12345', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_add_file_progress`
--

CREATE TABLE `cra_add_file_progress` (
  `id` int(11) NOT NULL,
  `progress_date` date DEFAULT NULL,
  `next_action` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `bringup_date` date DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `reminder_period` int(11) DEFAULT NULL,
  `action_type` varchar(255) DEFAULT NULL,
  `action_description` varchar(255) DEFAULT NULL,
  `time_taken_hours` time DEFAULT NULL,
  `time_taken_minutes` time DEFAULT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `activity_type` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_file_progress`
--

INSERT INTO `cra_add_file_progress` (`id`, `progress_date`, `next_action`, `client_name`, `bringup_date`, `file_name`, `reminder_period`, `action_type`, `action_description`, `time_taken_hours`, `time_taken_minutes`, `item_type`, `currency`, `amount`, `start_time`, `activity_type`, `activity`, `company_id`, `branch_id`) VALUES
(3, '2022-10-08', 'khgjkhkljvdx', 'volvo', '2022-10-21', 'volvo', 52, 'volvo', 'sdfg', '00:00:10', '00:00:44', 'volvo', 'volvo', 4444, '0000-00-00 00:00:00', 'volvo', '4444', NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2022-10-26', 'egsgsghdf', NULL, '2022-10-28', NULL, 444, NULL, 'fgxcb', '00:00:04', '00:00:52', NULL, NULL, 741, NULL, NULL, 'gfjgjf', NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2022-10-25', 'fgjjasgdsdfh', NULL, '2022-10-08', NULL, 41, NULL, 'dfhshdhh', '20:47:00', '00:41:00', NULL, NULL, 789, '0000-00-00 00:00:00', NULL, '75358', NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2022-10-26', 'test action', 'demo1', '2022-11-02', NULL, 10, 'demo1', 'test', '03:04:00', '17:03:00', 'demo1', 'demo1', 3000, '0000-00-00 00:00:00', 'demo1', 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_add_incomming_letters`
--

CREATE TABLE `cra_add_incomming_letters` (
  `id` int(11) NOT NULL,
  `letter_date` date DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `received_form` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `letter_name` varchar(255) DEFAULT NULL,
  `delivered_by` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `delivered_to` varchar(255) DEFAULT NULL,
  `viewer` varchar(255) DEFAULT NULL,
  `upload_copy` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_incomming_letters`
--

INSERT INTO `cra_add_incomming_letters` (`id`, `letter_date`, `client`, `file`, `received_form`, `category`, `letter_name`, `delivered_by`, `other`, `delivered_to`, `viewer`, `upload_copy`, `company_id`, `branch_id`) VALUES
(1, '2022-10-02', 'demo 2', 'demo 2', 'cra', 'demo 2', 'case letter', 'demo 2', 'no', 'demo 3', 'select', 'C:\\xampp\\tmp\\phpA1E9.tmp', NULL, NULL),
(2, '2022-10-02', 'demo 2', 'demo 2', 'cra', 'demo 2', 'case letter', 'demo 2', 'no', 'demo 3', 'select', 'C:\\xampp\\tmp\\phpFB32.tmp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_add_new_instructions`
--

CREATE TABLE `cra_add_new_instructions` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `instruction` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `exchange` int(11) DEFAULT NULL,
  `turn_around` varchar(255) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `send_notification` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_add_office_instructions`
--

CREATE TABLE `cra_add_office_instructions` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `instruction_type` varchar(255) DEFAULT NULL,
  `instruction_category` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `exchange_rate` varchar(255) DEFAULT NULL,
  `expence_category` varchar(255) NOT NULL,
  `turn_around` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `send_notification` varchar(255) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_add_user_department`
--

CREATE TABLE `cra_add_user_department` (
  `id` int(11) NOT NULL,
  `department_code` varchar(255) DEFAULT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `h_o_d` varchar(255) DEFAULT NULL,
  `perfomance_report` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_user_department`
--

INSERT INTO `cra_add_user_department` (`id`, `department_code`, `department_name`, `h_o_d`, `perfomance_report`, `company_id`, `branch_id`) VALUES
(6, '1234', 'HR Department', 'George Njoroge', 'Yes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_add_user_group`
--

CREATE TABLE `cra_add_user_group` (
  `id` int(11) NOT NULL,
  `group_code` varchar(255) DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `default_menu` varchar(255) DEFAULT NULL,
  `group_role` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_user_group`
--

INSERT INTO `cra_add_user_group` (`id`, `group_code`, `group_name`, `default_menu`, `group_role`, `company_id`, `branch_id`) VALUES
(1, '123456', 'cra', 'Dashboard', '--select group roles--', NULL, NULL),
(2, '12356', 'test112', 'Office Administration', '--select group roles--', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_add_user_roles`
--

CREATE TABLE `cra_add_user_roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_add_user_roles`
--

INSERT INTO `cra_add_user_roles` (`id`, `role_name`, `company_id`, `branch_id`) VALUES
(8, 'Account', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_bank_details`
--

CREATE TABLE `cra_bank_details` (
  `id` int(11) NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `bank_code` varchar(255) DEFAULT NULL,
  `branch_code` varchar(255) DEFAULT NULL,
  `swift_code` varchar(255) DEFAULT NULL,
  `mpesa_code` varchar(255) DEFAULT NULL,
  `bank_gl_ac` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_bank_details`
--

INSERT INTO `cra_bank_details` (`id`, `bank`, `branch`, `account_name`, `account_number`, `bank_code`, `branch_code`, `swift_code`, `mpesa_code`, `bank_gl_ac`, `company_id`, `branch_id`) VALUES
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_billable_activities`
--

CREATE TABLE `cra_billable_activities` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `activity_name` varchar(255) DEFAULT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_book_a_court`
--

CREATE TABLE `cra_book_a_court` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `court_name` varchar(255) DEFAULT NULL,
  `court_event_type` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `user_assigned` varchar(255) DEFAULT NULL,
  `send_notification` varchar(255) DEFAULT NULL,
  `set_reminder` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_book_a_court`
--

INSERT INTO `cra_book_a_court` (`id`, `client_name`, `file_name`, `court_name`, `court_event_type`, `start_date`, `start_time`, `end_date`, `end_time`, `user_assigned`, `send_notification`, `set_reminder`, `notes`, `company_id`, `branch_id`) VALUES
(1, 'client 1', 'file 1', 'court 1', 'event 1', '2022-10-03', '16:02:00', '2022-10-10', '16:03:00', 'user 1', 'notification 1', 'reminder 1', 'complete', NULL, NULL),
(2, 'client 1', 'file 3', 'court 1', 'event 2', '2022-10-26', '19:49:00', '2022-10-30', '20:49:00', 'user 3', 'notification 3', 'reminder 3', 'test one', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_bringup`
--

CREATE TABLE `cra_bringup` (
  `id` int(225) NOT NULL,
  `Client` varchar(255) DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Registered_By` varchar(255) DEFAULT NULL,
  `Responsible_Advocate` text DEFAULT NULL,
  `Date_From` date DEFAULT NULL,
  `Date_To` date DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_bringup`
--

INSERT INTO `cra_bringup` (`id`, `Client`, `File`, `Registered_By`, `Responsible_Advocate`, `Date_From`, `Date_To`, `company_id`, `branch_id`) VALUES
(1, 'demo 1', 'demo 1', 'demo 1', 'demo 1', '2022-10-20', '2022-10-26', NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'demo 1', 'demo 1', 'demo 1', 'demo 1', '2022-10-20', '2022-10-20', NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, 'demo 1', '2022-10-20', '2022-10-29', NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'demo 1', 'demo 1', 'demo 1', 'demo 1', '2022-10-27', '2022-10-28', NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_client_monthly_file_status_report`
--

CREATE TABLE `cra_client_monthly_file_status_report` (
  `id` int(11) NOT NULL,
  `Report_Type` varchar(255) DEFAULT NULL,
  `Client` varchar(255) DEFAULT NULL,
  `Month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_client_monthly_file_status_report`
--

INSERT INTO `cra_client_monthly_file_status_report` (`id`, `Report_Type`, `Client`, `Month`, `year`, `company_id`, `branch_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'demo 1', 'demo 1', 'September', '2500', NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_client_pickup_reception`
--

CREATE TABLE `cra_client_pickup_reception` (
  `id` int(11) NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `persion_handling` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `persion_picking_handling` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `visitors` varchar(255) DEFAULT NULL,
  `time_in` timestamp NULL DEFAULT NULL,
  `time_out` timestamp NULL DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_client_service_at_reception`
--

CREATE TABLE `cra_client_service_at_reception` (
  `id` int(11) NOT NULL,
  `receipt_no` varchar(11) DEFAULT NULL,
  `client_name` varchar(200) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `amount_paid` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `code` varchar(200) DEFAULT NULL,
  `payment_method` varchar(200) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_client_service_at_reception`
--

INSERT INTO `cra_client_service_at_reception` (`id`, `receipt_no`, `client_name`, `mobile`, `amount_paid`, `date`, `email`, `code`, `payment_method`, `company_id`, `branch_id`) VALUES
(1, '0', 'man', 987654321, '345', '2022-10-20', 'mk@gmail.com', 'Code1', 'Checks', NULL, NULL),
(2, '0', 'man', 0, '345', '2022-10-15', 'mk@gmail.com', 'Code1', 'Cash', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_company_branch_details`
--

CREATE TABLE `cra_company_branch_details` (
  `id` int(11) NOT NULL,
  `branch_no` int(11) DEFAULT NULL,
  `branch_code` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(11) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `physical_address` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_company_branch_details`
--

INSERT INTO `cra_company_branch_details` (`id`, `branch_no`, `branch_code`, `branch_name`, `address`, `telephone`, `mobile`, `fax`, `town`, `email`, `website`, `physical_address`, `company_id`, `branch_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '---select---', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_company_details`
--

CREATE TABLE `cra_company_details` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `pin_no` varchar(255) DEFAULT NULL,
  `vat_no` varchar(255) DEFAULT NULL,
  `NHIF` varchar(255) DEFAULT NULL,
  `NSSF_no` varchar(255) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_company_details`
--

INSERT INTO `cra_company_details` (`id`, `company_name`, `address`, `town`, `email`, `company_type`, `pin_no`, `vat_no`, `NHIF`, `NSSF_no`, `company_website`, `company_id`, `branch_id`) VALUES
(1, 'test', 'fghf', 'ghfgh', 'fghf@gmail.com', 'LLP', '133555', '1456987', '2755', '75252', 'hg fh', NULL, NULL),
(2, 'test', 'wrrewr', 'were', 'test@gmail.com', '---Select---', '133555', '1456987', '2755', '4644518', 'wer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_complaint_register`
--

CREATE TABLE `cra_complaint_register` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `client_type` varchar(255) DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `staff_handling` varchar(100) DEFAULT NULL,
  `complaint_about` varchar(200) DEFAULT NULL,
  `telephone_no` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `others` varchar(200) DEFAULT NULL,
  `action_plan` varchar(200) DEFAULT NULL,
  `complaint_description` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_complaint_register`
--

INSERT INTO `cra_complaint_register` (`id`, `date`, `client_type`, `files`, `customer_name`, `staff_handling`, `complaint_about`, `telephone_no`, `email`, `others`, `action_plan`, `complaint_description`, `company_id`, `branch_id`) VALUES
(3, '2022-10-26', 'Corporate', 'File 2', 'Allan', 'Staff 1', 'Person', 789456123, 'test@gmail.com', 'test other', 'test plan', 'test complaint', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_conversations`
--

CREATE TABLE `cra_conversations` (
  `id` int(11) NOT NULL,
  `communication_date` date DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `telephone_no` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `communication_source` varchar(255) DEFAULT NULL,
  `mode_of_communication` varchar(255) DEFAULT NULL,
  `communicated` varchar(255) DEFAULT NULL,
  `duration` varchar(200) DEFAULT NULL,
  `person_handling` varchar(255) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `communicated_description` varchar(255) DEFAULT NULL,
  `action_plan` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_conversations`
--

INSERT INTO `cra_conversations` (`id`, `communication_date`, `client`, `file`, `customer`, `telephone_no`, `email`, `communication_source`, `mode_of_communication`, `communicated`, `duration`, `person_handling`, `time`, `others`, `communicated_description`, `action_plan`, `company_id`) VALUES
(1, '2022-11-26', 'Corporate', 'Type 1', 'test customer', 456789123, 'test@gmail.com', 'Vedio Conference', 'Mode 1', 'Clerical Staff', 'Half Hour', 'Person 2', '16:23:00', 'gg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_corporate_client_details`
--

CREATE TABLE `cra_corporate_client_details` (
  `id` int(11) NOT NULL,
  `Client_no` varchar(255) DEFAULT NULL,
  `Client_type` varchar(255) DEFAULT NULL,
  `Cityzen_status` varchar(255) DEFAULT NULL,
  `Certificate_of_incorporation` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Telephone_No` varchar(255) DEFAULT NULL,
  `Fax_no` varchar(255) DEFAULT NULL,
  `Email_address` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `Brought_in_By` varchar(255) DEFAULT NULL,
  `Status_reporting_day` varchar(255) DEFAULT NULL,
  `Client_source` varchar(255) DEFAULT NULL,
  `Client_source_naration` varchar(255) DEFAULT NULL,
  `Client_name` varchar(255) DEFAULT NULL,
  `Client_industry` varchar(255) DEFAULT NULL,
  `Pin_no` varchar(255) DEFAULT NULL,
  `postal_address` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `physical_address` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `Mobile_no` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_corporate_client_details`
--

INSERT INTO `cra_corporate_client_details` (`id`, `Client_no`, `Client_type`, `Cityzen_status`, `Certificate_of_incorporation`, `Country`, `Telephone_No`, `Fax_no`, `Email_address`, `Website`, `Brought_in_By`, `Status_reporting_day`, `Client_source`, `Client_source_naration`, `Client_name`, `Client_industry`, `Pin_no`, `postal_address`, `postal_code`, `town`, `physical_address`, `notes`, `contact_person`, `designation`, `Mobile_no`, `email`, `company_id`, `branch_id`) VALUES
(1, '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_courts`
--

CREATE TABLE `cra_courts` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `court_category` varchar(255) DEFAULT NULL,
  `court_name` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_currency_list`
--

CREATE TABLE `cra_currency_list` (
  `id` int(11) NOT NULL,
  `currency_name` varchar(255) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `exchange_rate` varchar(255) DEFAULT NULL,
  `default_action` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_customer_followup`
--

CREATE TABLE `cra_customer_followup` (
  `id` int(11) NOT NULL,
  `followup_date` date DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `followup_type` varchar(200) DEFAULT NULL,
  `staff_responsible` varchar(200) DEFAULT NULL,
  `send_remainder_to` varchar(200) DEFAULT NULL,
  `next_bringup_date` date DEFAULT NULL,
  `alert_period` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `registered_by` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_customer_followup`
--

INSERT INTO `cra_customer_followup` (`id`, `followup_date`, `customer`, `followup_type`, `staff_responsible`, `send_remainder_to`, `next_bringup_date`, `alert_period`, `email`, `registered_by`, `description`, `company_id`, `branch_id`) VALUES
(3, '2022-10-08', 'Aggriculture Development Corporation', 'Email', 'Corine Auma', 'hi', '2022-10-13', '1 year', 'mugu@gmail.com', 'hlo', 'hgmgh', NULL, NULL),
(4, '2022-10-21', 'Aggriculture Development Corporation', 'Email', 'Corine Auma', 'hi', '2022-10-13', '1 year', 'mmmmm@gmail.com', 'hlo', 'jjj', NULL, NULL),
(5, '2022-11-30', 'demo1', 'demo', 'demo11', NULL, NULL, '1 month', 'test@gmail.com', 'Clerk', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_customer_quotation`
--

CREATE TABLE `cra_customer_quotation` (
  `id` int(11) NOT NULL,
  `document_type` varchar(200) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `customer` varchar(200) DEFAULT NULL,
  `client_ref_no` int(11) DEFAULT NULL,
  `currency` int(11) DEFAULT NULL,
  `exchange_rate` int(11) DEFAULT NULL,
  `approver` varchar(200) DEFAULT NULL,
  `bank_account` varchar(200) DEFAULT NULL,
  `billing_information` longtext DEFAULT NULL,
  `attender` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `particulers_of_service_rendered` varchar(200) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `vat` varchar(200) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_customer_quotation`
--

INSERT INTO `cra_customer_quotation` (`id`, `document_type`, `issue_date`, `customer`, `client_ref_no`, `currency`, `exchange_rate`, `approver`, `bank_account`, `billing_information`, `attender`, `subject`, `type`, `particulers_of_service_rendered`, `amount`, `vat`, `comments`, `company_id`, `branch_id`) VALUES
(3, 'free notes', '2022-10-21', 'demo1', 45, 0, 56, 'volvo', 'volvo', NULL, 'hlo', 'tamil', 'volvo', NULL, 34, 'demo1', NULL, NULL, NULL),
(4, 'demo11', '2022-10-26', 'demo22', 123, 0, NULL, 'demo33', 'select', NULL, 'test', NULL, 'select', NULL, NULL, 'select', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_customer_registration`
--

CREATE TABLE `cra_customer_registration` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `telephone_no` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile_no` int(11) DEFAULT NULL,
  `web_site` varchar(200) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `customer_address` longtext DEFAULT NULL,
  `physical_address` longtext DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_customer_registration`
--

INSERT INTO `cra_customer_registration` (`id`, `customer_name`, `postal_code`, `town`, `country`, `telephone_no`, `email`, `mobile_no`, `web_site`, `registration_date`, `customer_address`, `physical_address`, `company_id`, `branch_id`) VALUES
(1, 'anish 123', 987791232, 'Nairobi', 'volvo', 456123789, 'test@gmail.com', 789456123, 'ww.test.com', '2022-10-27', NULL, NULL, NULL, NULL),
(2, 'arun', 5555, 'tvm', 'kenya', 98765, 'mmmmm@gmail.com', 987654321, 'ww.india.com', '2022-09-28', '55gggg', 'gggg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_description_selection`
--

CREATE TABLE `cra_description_selection` (
  `id` int(11) NOT NULL,
  `Description_Selection_Name` varchar(255) DEFAULT NULL,
  `Selection_Description` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_description_selection`
--

INSERT INTO `cra_description_selection` (`id`, `Description_Selection_Name`, `Selection_Description`, `company_id`, `branch_id`) VALUES
(42, 'reshma', 'reshu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_document_detials`
--

CREATE TABLE `cra_document_detials` (
  `id` int(11) NOT NULL,
  `document_type` varchar(200) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_document_detials`
--

INSERT INTO `cra_document_detials` (`id`, `document_type`, `file`, `company_id`, `branch_id`) VALUES
(17, 'type1', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_file_progress_report`
--

CREATE TABLE `cra_file_progress_report` (
  `id` int(11) NOT NULL,
  `Client` varchar(255) DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Progress_Date_From` date DEFAULT NULL,
  `Progress_Date_To` varchar(225) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_file_progress_report`
--

INSERT INTO `cra_file_progress_report` (`id`, `Client`, `File`, `Progress_Date_From`, `Progress_Date_To`, `company_id`, `branch_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'demo 1', 'demo 1', '2022-10-12', '0000-00-00', NULL, NULL),
(3, 'demo 1', 'demo 1', '2022-10-01', '1asfsdf', NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'demo 1', 'demo 1', '2022-10-20', 'dfhfg', NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'demo 1', 'select', NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_file_report`
--

CREATE TABLE `cra_file_report` (
  `id` int(11) NOT NULL,
  `Responsible_Advocate` text DEFAULT NULL,
  `Date_From` date DEFAULT NULL,
  `Date_To` date DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_file_report`
--

INSERT INTO `cra_file_report` (`id`, `Responsible_Advocate`, `Date_From`, `Date_To`, `company_id`, `branch_id`) VALUES
(1, 'demo 1', '2022-10-20', '2022-10-29', NULL, NULL),
(2, 'demo 1', '2022-10-12', '2022-11-04', NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_file_status_summary`
--

CREATE TABLE `cra_file_status_summary` (
  `id` int(225) NOT NULL,
  `Date_to` date DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Instruction_Category` varchar(255) DEFAULT NULL,
  `Receiver` varchar(255) DEFAULT NULL,
  `Currency` text DEFAULT NULL,
  `Exchange_Rate` int(255) DEFAULT NULL,
  `Turn_Around_Time` time DEFAULT NULL,
  `Priority` varchar(255) DEFAULT NULL,
  `Details` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_file_status_summary`
--

INSERT INTO `cra_file_status_summary` (`id`, `Date_to`, `File`, `Instruction_Category`, `Receiver`, `Currency`, `Exchange_Rate`, `Turn_Around_Time`, `Priority`, `Details`, `company_id`, `branch_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2022-10-13', 'demo 1', 'demo 1', 'demo 1', 'demo 1', 45345, '16:05:00', 'demo 1', 'fhxfh', NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_file_types`
--

CREATE TABLE `cra_file_types` (
  `id` int(11) NOT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `short_name` varchar(255) DEFAULT NULL,
  `retainer_period` varchar(255) DEFAULT NULL,
  `approvers` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_file_types`
--

INSERT INTO `cra_file_types` (`id`, `file_type`, `short_name`, `retainer_period`, `approvers`, `company_id`, `branch_id`) VALUES
(3, NULL, NULL, NULL, 'Choose Approver...', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_hourly_rate`
--

CREATE TABLE `cra_hourly_rate` (
  `id` int(11) NOT NULL,
  `user_staff` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `hourly_rates` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_individual_client_details`
--

CREATE TABLE `cra_individual_client_details` (
  `id` int(11) NOT NULL,
  `client_number` varchar(255) DEFAULT NULL,
  `client_type` varchar(255) DEFAULT NULL,
  `citizen_status` varchar(255) DEFAULT NULL,
  `certificate_of_incorporation` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `telephone_no` int(11) DEFAULT NULL,
  `fax_no` int(11) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `brought_in_by` varchar(255) DEFAULT NULL,
  `reporting_day` varchar(255) DEFAULT NULL,
  `client_source` varchar(255) DEFAULT NULL,
  `client_source_narration` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `client_industry` varchar(255) DEFAULT NULL,
  `pin_no` int(11) DEFAULT NULL,
  `postal_address` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `physical_address` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_instructions_report`
--

CREATE TABLE `cra_instructions_report` (
  `id` int(11) NOT NULL,
  `Report_Category` varchar(255) DEFAULT NULL,
  `Instruction_Type` varchar(255) DEFAULT NULL,
  `Expense_Category` int(50) DEFAULT NULL,
  `Report_Type` varchar(255) DEFAULT NULL,
  `Date_From` date DEFAULT NULL,
  `Date_To` date DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_instructions_report`
--

INSERT INTO `cra_instructions_report` (`id`, `Report_Category`, `Instruction_Type`, `Expense_Category`, `Report_Type`, `Date_From`, `Date_To`, `company_id`, `branch_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'demo 1', 0, 'demo 1', '2022-10-27', '2022-10-30', NULL, NULL),
(3, NULL, 'demo 1', 0, 'select', '2022-10-27', '2022-10-30', NULL, NULL),
(4, 'demo 1', 'demo 1', 0, 'select', '2022-10-28', '2022-10-30', NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_invoice_items`
--

CREATE TABLE `cra_invoice_items` (
  `id` int(11) NOT NULL,
  `item_code` varchar(255) DEFAULT NULL,
  `item_category` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `sales_tax_code` varchar(255) DEFAULT NULL,
  `income_account` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_leave_days`
--

CREATE TABLE `cra_leave_days` (
  `id` int(11) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `annual_leave_day` varchar(255) DEFAULT NULL,
  `satuday_working_days` varchar(255) DEFAULT NULL,
  `perfomance_duration` varchar(255) DEFAULT NULL,
  `pay_relief` varchar(255) DEFAULT NULL,
  `pl_closed` varchar(255) DEFAULT NULL,
  `account_closed` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_letter_types`
--

CREATE TABLE `cra_letter_types` (
  `id` int(11) NOT NULL,
  `letter_category` varchar(255) DEFAULT NULL,
  `letter_type` varchar(255) DEFAULT NULL,
  `letter_type_name` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_manage_user_department`
--

CREATE TABLE `cra_manage_user_department` (
  `id` int(11) NOT NULL,
  `department_code` varchar(255) DEFAULT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `hod` varchar(255) NOT NULL,
  `performance_report` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_new_safe_management`
--

CREATE TABLE `cra_new_safe_management` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `safe_name` varchar(255) DEFAULT NULL,
  `ref_no` varchar(255) DEFAULT NULL,
  `approver` varchar(255) DEFAULT NULL,
  `doc_no` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_new_safe_management`
--

INSERT INTO `cra_new_safe_management` (`id`, `date`, `client`, `file`, `safe_name`, `ref_no`, `approver`, `doc_no`, `category`, `document`, `company_id`, `branch_id`) VALUES
(1, '2022-10-02', 'select', 'File 2', 'Safe 1', 'afssdf', 'Person 1', NULL, 'select', NULL, NULL, NULL),
(2, '2022-10-14', 'Client 1', 'File 2', 'Safe 1', '4144', 'Person 1', '44444', 'select', '4mn41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_open_new_file_details`
--

CREATE TABLE `cra_open_new_file_details` (
  `id` int(11) NOT NULL,
  `Associate_handling` varchar(255) DEFAULT NULL,
  `Client_type` varchar(255) DEFAULT NULL,
  `opening_date` date DEFAULT NULL,
  `Client_ref_no` varchar(255) DEFAULT NULL,
  `our_file_reference_no` varchar(255) DEFAULT NULL,
  `File_name` varchar(255) DEFAULT NULL,
  `Approval_partner` varchar(255) DEFAULT NULL,
  `Customer_name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Telephone` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `workflow` varchar(255) DEFAULT NULL,
  `responsible_advocate` varchar(255) DEFAULT NULL,
  `recent_progress` varchar(255) DEFAULT NULL,
  `closing_date` date DEFAULT NULL,
  `file_balance` double DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `balance_fee` double DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_open_new_file_details`
--

INSERT INTO `cra_open_new_file_details` (`id`, `Associate_handling`, `Client_type`, `opening_date`, `Client_ref_no`, `our_file_reference_no`, `File_name`, `Approval_partner`, `Customer_name`, `Address`, `Telephone`, `email`, `amount`, `workflow`, `responsible_advocate`, `recent_progress`, `closing_date`, `file_balance`, `paid_amount`, `balance_fee`, `status`, `company_id`, `branch_id`) VALUES
(35, NULL, 'University', '2022-10-29', '123/cra/1244', '123/cra12/44', 'vinu', 'Residensial', 'cra2', 'cr advocayes', 2147483647, 'asd@gmail.com', 45698, 'Residensial', 'asdd', 'sgsg', '2022-10-02', 45236, 1000, 1020, 'Active', NULL, NULL),
(44, NULL, 'Accord University', '2022-10-28', '123/qwe/15', '147/qwe/123', 'cra project', 'Residensial', 'cra2', 'RGGDFHDH', 2147483647, 'awse@gmail.com', 45557, 'Residensial', 'sdggsdsgd', 'efgsgs', '2022-10-26', 54436, 45454, 6333, 'In Active', NULL, NULL),
(63, NULL, 'Accord University', '2022-10-13', 'f258555', 'DFHF', 'DFHDFHFD', 'Residensial', 'FDHDHFD', 'RGGDFHDH', 2147483647, 'asd@gmail.com', 45557, 'Residensial', 'efsdgsdg', 'ffdvxs', '2022-10-25', 0, 0, 0, 'Active', NULL, NULL),
(136, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_paired_account`
--

CREATE TABLE `cra_paired_account` (
  `id` int(11) NOT NULL,
  `account_no1` varchar(255) DEFAULT NULL,
  `account_no2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_paired_account`
--

INSERT INTO `cra_paired_account` (`id`, `account_no1`, `account_no2`) VALUES
(24, 'Other Income(1100)', 'Income from Legal Fees(1000)');

-- --------------------------------------------------------

--
-- Table structure for table `cra_partner_revenue_share`
--

CREATE TABLE `cra_partner_revenue_share` (
  `id` int(11) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `partner` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_partner_revenue_share`
--

INSERT INTO `cra_partner_revenue_share` (`id`, `year`, `partner`, `total`, `percentage`, `company_id`, `branch_id`) VALUES
(1, '2025', 'Princess Caroline', NULL, '34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_payment_item`
--

CREATE TABLE `cra_payment_item` (
  `id` int(11) NOT NULL,
  `item_code` varchar(255) DEFAULT NULL,
  `item_group` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_comment` varchar(255) DEFAULT NULL,
  `item_shortname` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_reg_new_user`
--

CREATE TABLE `cra_reg_new_user` (
  `id` int(11) NOT NULL,
  `user_code` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `initial` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `re_type_password` varchar(255) DEFAULT NULL,
  `post_address` varchar(255) DEFAULT NULL,
  `town_name` varchar(255) DEFAULT NULL,
  `telephone_no` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `departments` varchar(255) DEFAULT NULL,
  `upload_signature` varchar(255) DEFAULT NULL,
  `user_group` varchar(255) DEFAULT NULL,
  `user_role` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_reg_new_user`
--

INSERT INTO `cra_reg_new_user` (`id`, `user_code`, `first_name`, `last_name`, `initial`, `user_name`, `password`, `re_type_password`, `post_address`, `town_name`, `telephone_no`, `mobile_no`, `email_address`, `departments`, `upload_signature`, `user_group`, `user_role`, `company_id`, `branch_id`) VALUES
(7, '1234', 'Allams', NULL, 'sss', 'allan1234', '123456', NULL, 'Allan Villaa', 'Nairobii', NULL, '7894561241', 'allan123@gmail.com', 'HRM & Admin', 'cra_add_user_roles.sql', 'Support', 'Department Head', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_request_safe_item`
--

CREATE TABLE `cra_request_safe_item` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `client` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `send_instruction` varchar(255) NOT NULL,
  `approver` varchar(255) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_request_safe_item`
--

INSERT INTO `cra_request_safe_item` (`id`, `date`, `client`, `file`, `send_instruction`, `approver`, `company_id`, `branch_id`) VALUES
(1, '2022-10-13', 'select', 'select', 'select', 'select', NULL, NULL),
(2, '2022-10-22', 'Client 1', 'File 1', 'Person 1', 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_safe_item_request`
--

CREATE TABLE `cra_safe_item_request` (
  `id` int(11) NOT NULL,
  `Client` varchar(255) DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Document_Type` varchar(255) DEFAULT NULL,
  `Safe_Name` text DEFAULT NULL,
  `Approver` text DEFAULT NULL,
  `Requested_By` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `And_next` varchar(255) DEFAULT NULL,
  `Distributed_By` text DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_safe_item_request`
--

INSERT INTO `cra_safe_item_request` (`id`, `Client`, `File`, `Document_Type`, `Safe_Name`, `Approver`, `Requested_By`, `Date`, `And_next`, `Distributed_By`, `Status`, `company_id`, `branch_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_safe_register_report`
--

CREATE TABLE `cra_safe_register_report` (
  `id` int(11) NOT NULL,
  `Client` text DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Document_Type` varchar(255) DEFAULT NULL,
  `Safe_Name` varchar(255) DEFAULT NULL,
  `Approver` text DEFAULT NULL,
  `Given_To` text DEFAULT NULL,
  `Requested_By` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `and` varchar(255) DEFAULT NULL,
  `Document_Condition` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_safe_register_report`
--

INSERT INTO `cra_safe_register_report` (`id`, `Client`, `File`, `Document_Type`, `Safe_Name`, `Approver`, `Given_To`, `Requested_By`, `Date`, `and`, `Document_Condition`, `Status`, `company_id`, `branch_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'demo 1', 'demo 1', 'demo 1', 'demo 1', 'demo 1', 'demo 1', 'demo 1', '2022-10-12', 'sdsdgd', 'demo 1', 'demo 1', NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_staff_monthly_status_report`
--

CREATE TABLE `cra_staff_monthly_status_report` (
  `id` int(225) NOT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Month` text DEFAULT NULL,
  `Year` int(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_staff_monthly_status_report`
--

INSERT INTO `cra_staff_monthly_status_report` (`id`, `Department`, `Month`, `Year`, `company_id`, `branch_id`) VALUES
(9, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_tax_chart`
--

CREATE TABLE `cra_tax_chart` (
  `id` int(11) NOT NULL,
  `tax_brand` varchar(255) DEFAULT NULL,
  `lower_limit` varchar(255) DEFAULT NULL,
  `upper_limit` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `factor_with_housing` varchar(255) DEFAULT NULL,
  `factor_without_housing` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_tax_chart`
--

INSERT INTO `cra_tax_chart` (`id`, `tax_brand`, `lower_limit`, `upper_limit`, `rate`, `status`, `factor_with_housing`, `factor_without_housing`, `company_id`, `branch_id`) VALUES
(17, 'eeeee', '111', '111', '11', NULL, 'Yes', 'Yes', NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'kkk', 'kkkkk', 'kkkk', 'kkkk', NULL, 'No', 'No', NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_tax_excise`
--

CREATE TABLE `cra_tax_excise` (
  `id` int(11) NOT NULL,
  `Tax_name` varchar(255) DEFAULT NULL,
  `Tax_value` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_tax_excise`
--

INSERT INTO `cra_tax_excise` (`id`, `Tax_name`, `Tax_value`, `Status`, `company_id`, `branch_id`) VALUES
(95, 'rrrrr', 'eeeeeeeeee', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_tax_vat`
--

CREATE TABLE `cra_tax_vat` (
  `id` int(11) NOT NULL,
  `Tax_name` varchar(255) DEFAULT NULL,
  `Tax_value` varchar(255) DEFAULT NULL,
  `Tax_ordering` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cra_tax_wht`
--

CREATE TABLE `cra_tax_wht` (
  `id` int(11) NOT NULL,
  `Tax_name` varchar(255) DEFAULT NULL,
  `Tax_value` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_tax_wht`
--

INSERT INTO `cra_tax_wht` (`id`, `Tax_name`, `Tax_value`, `Status`, `company_id`, `branch_id`) VALUES
(10, 'kkkkkkk', 'uu', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_tax_wht-vat`
--

CREATE TABLE `cra_tax_wht-vat` (
  `id` int(11) NOT NULL,
  `Tax_name` varchar(255) DEFAULT NULL,
  `Tax_value` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_tax_wht-vat`
--

INSERT INTO `cra_tax_wht-vat` (`id`, `Tax_name`, `Tax_value`, `Status`, `company_id`, `branch_id`) VALUES
(13, '5555555', '23424', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_template_category`
--

CREATE TABLE `cra_template_category` (
  `id` int(11) NOT NULL,
  `Template_Category` varchar(255) DEFAULT NULL,
  `Category_Type` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_template_category`
--

INSERT INTO `cra_template_category` (`id`, `Template_Category`, `Category_Type`, `company_id`, `branch_id`) VALUES
(157, 'Employment', 'zcZXC', NULL, NULL),
(163, 'Business Property', 'dfsfsf', NULL, NULL),
(164, 'Business Property', 'dfsfsf', NULL, NULL),
(167, NULL, NULL, NULL, NULL),
(187, NULL, NULL, NULL, NULL),
(188, 'Business Property', 'bjbjb', NULL, NULL),
(189, NULL, NULL, NULL, NULL),
(190, NULL, NULL, NULL, NULL),
(191, 'Employment', '2222', NULL, NULL),
(192, NULL, NULL, NULL, NULL),
(193, NULL, NULL, NULL, NULL),
(194, NULL, NULL, NULL, NULL),
(195, NULL, NULL, NULL, NULL),
(196, NULL, NULL, NULL, NULL),
(197, NULL, NULL, NULL, NULL),
(198, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_town_city`
--

CREATE TABLE `cra_town_city` (
  `id` int(11) NOT NULL,
  `Town_City` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_town_city`
--

INSERT INTO `cra_town_city` (`id`, `Town_City`, `company_id`, `branch_id`) VALUES
(4, 'nairobi', NULL, NULL),
(5, 'text', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_transport_zone`
--

CREATE TABLE `cra_transport_zone` (
  `id` int(11) NOT NULL,
  `zone_name` varchar(225) DEFAULT NULL,
  `zone_areas` varchar(225) DEFAULT NULL,
  `cost` varchar(225) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_transport_zone`
--

INSERT INTO `cra_transport_zone` (`id`, `zone_name`, `zone_areas`, `cost`, `company_id`, `branch_id`) VALUES
(23, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL, NULL),
(39, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_weekend_and_holiday`
--

CREATE TABLE `cra_weekend_and_holiday` (
  `id` int(255) NOT NULL,
  `Date` date NOT NULL,
  `Day` varchar(255) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_weekend_and_holiday`
--

INSERT INTO `cra_weekend_and_holiday` (`id`, `Date`, `Day`, `company_id`, `branch_id`) VALUES
(1, '2022-10-27', '15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cra_work_flow`
--

CREATE TABLE `cra_work_flow` (
  `id` int(11) NOT NULL,
  `Date_Created` date NOT NULL,
  `Workflow_Name` varchar(255) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `Duration` varchar(255) DEFAULT NULL,
  `Workflow_Comments` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cra_work_flow`
--

INSERT INTO `cra_work_flow` (`id`, `Date_Created`, `Workflow_Name`, `Start_Date`, `Duration`, `Workflow_Comments`, `company_id`, `branch_id`) VALUES
(4, '2022-10-11', 'aaaa', '2022-10-18', 'cccc', NULL, NULL, NULL),
(5, '2022-10-12', 'aaaaaaa', '2022-10-12', 'aaaaaaaaaa', 'aaaaaaaaa', NULL, NULL),
(6, '2022-10-27', 'text', '2022-10-27', '15', 'dggfg', NULL, NULL);

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

--
-- Dumping data for table `dailyattendances`
--

INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(1, '2022', '08', '1-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:10', '2022-08-17 06:26:10', 'kimshr'),
(2, '2022', '08', '2-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:10', '2022-08-17 06:26:10', 'kimshr'),
(3, '2022', '08', '3-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:10', '2022-08-17 06:26:10', 'kimshr'),
(4, '2022', '08', '4-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:10', '2022-08-17 06:26:10', 'kimshr'),
(5, '2022', '08', '5-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:10', '2022-08-17 06:26:10', 'kimshr'),
(6, '2022', '08', '6-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:10', '2022-08-17 06:26:10', 'kimshr'),
(7, '2022', '08', '7-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(8, '2022', '08', '8-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(9, '2022', '08', '9-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(10, '2022', '08', '10-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(11, '2022', '08', '11-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(12, '2022', '08', '12-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(13, '2022', '08', '13-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(14, '2022', '08', '14-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(15, '2022', '08', '15-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(16, '2022', '08', '16-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(17, '2022', '08', '17-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(18, '2022', '08', '18-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(19, '2022', '08', '19-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(20, '2022', '08', '20-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(21, '2022', '08', '21-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(22, '2022', '08', '22-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(23, '2022', '08', '23-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(24, '2022', '08', '24-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(25, '2022', '08', '25-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(26, '2022', '08', '26-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(27, '2022', '08', '27-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(28, '2022', '08', '28-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:11', '2022-08-17 06:26:11', 'kimshr'),
(29, '2022', '08', '29-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimshr'),
(30, '2022', '08', '30-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimshr'),
(31, '2022', '08', '31-08-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimshr'),
(32, '2022', '08', '1-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(33, '2022', '08', '2-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(34, '2022', '08', '3-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(35, '2022', '08', '4-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(36, '2022', '08', '5-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(37, '2022', '08', '6-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(38, '2022', '08', '7-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(39, '2022', '08', '8-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(40, '2022', '08', '9-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(41, '2022', '08', '10-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(42, '2022', '08', '11-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(43, '2022', '08', '12-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(44, '2022', '08', '13-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(45, '2022', '08', '14-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(46, '2022', '08', '15-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(47, '2022', '08', '16-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(48, '2022', '08', '17-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(49, '2022', '08', '18-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(50, '2022', '08', '19-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:12', '2022-08-17 06:26:12', 'kimsdoctor'),
(51, '2022', '08', '20-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(52, '2022', '08', '21-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(53, '2022', '08', '22-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(54, '2022', '08', '23-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(55, '2022', '08', '24-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(56, '2022', '08', '25-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(57, '2022', '08', '26-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(58, '2022', '08', '27-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(59, '2022', '08', '28-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(60, '2022', '08', '29-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(61, '2022', '08', '30-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(62, '2022', '08', '31-08-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'kimsdoctor'),
(63, '2022', '08', '1-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(64, '2022', '08', '2-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(65, '2022', '08', '3-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(66, '2022', '08', '4-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(67, '2022', '08', '5-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(68, '2022', '08', '6-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(69, '2022', '08', '7-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(70, '2022', '08', '8-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(71, '2022', '08', '9-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(72, '2022', '08', '10-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:13', '2022-08-17 06:26:13', 'teststaff'),
(73, '2022', '08', '11-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(74, '2022', '08', '12-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(75, '2022', '08', '13-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(76, '2022', '08', '14-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(77, '2022', '08', '15-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(78, '2022', '08', '16-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(79, '2022', '08', '17-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(80, '2022', '08', '18-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(81, '2022', '08', '19-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(82, '2022', '08', '20-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(83, '2022', '08', '21-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(84, '2022', '08', '22-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(85, '2022', '08', '23-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(86, '2022', '08', '24-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(87, '2022', '08', '25-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(88, '2022', '08', '26-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(89, '2022', '08', '27-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(90, '2022', '08', '28-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(91, '2022', '08', '29-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(92, '2022', '08', '30-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(93, '2022', '08', '31-08-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:14', '2022-08-17 06:26:14', 'teststaff'),
(94, '2022', '08', '1-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(95, '2022', '08', '2-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(96, '2022', '08', '3-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(97, '2022', '08', '4-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(98, '2022', '08', '5-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(99, '2022', '08', '6-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(100, '2022', '08', '7-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(101, '2022', '08', '8-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(102, '2022', '08', '9-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(103, '2022', '08', '10-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(104, '2022', '08', '11-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(105, '2022', '08', '12-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(106, '2022', '08', '13-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(107, '2022', '08', '14-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(108, '2022', '08', '15-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(109, '2022', '08', '16-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(110, '2022', '08', '17-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(111, '2022', '08', '18-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(112, '2022', '08', '19-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(113, '2022', '08', '20-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(114, '2022', '08', '21-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(115, '2022', '08', '22-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:15', '2022-08-17 06:26:15', 'kimsdoctor1'),
(116, '2022', '08', '23-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'kimsdoctor1'),
(117, '2022', '08', '24-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'kimsdoctor1'),
(118, '2022', '08', '25-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'kimsdoctor1'),
(119, '2022', '08', '26-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'kimsdoctor1'),
(120, '2022', '08', '27-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'kimsdoctor1'),
(121, '2022', '08', '28-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'kimsdoctor1'),
(122, '2022', '08', '29-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'kimsdoctor1'),
(123, '2022', '08', '30-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'kimsdoctor1'),
(124, '2022', '08', '31-08-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'kimsdoctor1'),
(125, '2022', '08', '1-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:16', '2022-08-17 06:26:16', 'entdoctor'),
(126, '2022', '08', '2-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(127, '2022', '08', '3-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(128, '2022', '08', '4-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(129, '2022', '08', '5-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(130, '2022', '08', '6-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(131, '2022', '08', '7-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(132, '2022', '08', '8-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(133, '2022', '08', '9-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(134, '2022', '08', '10-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(135, '2022', '08', '11-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(136, '2022', '08', '12-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(137, '2022', '08', '13-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(138, '2022', '08', '14-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:17', '2022-08-17 06:26:17', 'entdoctor'),
(139, '2022', '08', '15-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(140, '2022', '08', '16-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(141, '2022', '08', '17-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(142, '2022', '08', '18-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(143, '2022', '08', '19-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(144, '2022', '08', '20-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(145, '2022', '08', '21-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(146, '2022', '08', '22-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(147, '2022', '08', '23-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(148, '2022', '08', '24-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(149, '2022', '08', '25-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(150, '2022', '08', '26-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(151, '2022', '08', '27-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(152, '2022', '08', '28-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(153, '2022', '08', '29-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(154, '2022', '08', '30-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(155, '2022', '08', '31-08-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:18', '2022-08-17 06:26:18', 'entdoctor'),
(156, '2022', '08', '1-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(157, '2022', '08', '2-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(158, '2022', '08', '3-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(159, '2022', '08', '4-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(160, '2022', '08', '5-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(161, '2022', '08', '6-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(162, '2022', '08', '7-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(163, '2022', '08', '8-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(164, '2022', '08', '9-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(165, '2022', '08', '10-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(166, '2022', '08', '11-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:19', '2022-08-17 06:26:19', 'ent2doctor'),
(167, '2022', '08', '12-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(168, '2022', '08', '13-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(169, '2022', '08', '14-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(170, '2022', '08', '15-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(171, '2022', '08', '16-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(172, '2022', '08', '17-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(173, '2022', '08', '18-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(174, '2022', '08', '19-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(175, '2022', '08', '20-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(176, '2022', '08', '21-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(177, '2022', '08', '22-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(178, '2022', '08', '23-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(179, '2022', '08', '24-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(180, '2022', '08', '25-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(181, '2022', '08', '26-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(182, '2022', '08', '27-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(183, '2022', '08', '28-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(184, '2022', '08', '29-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(185, '2022', '08', '30-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(186, '2022', '08', '31-08-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'ent2doctor'),
(187, '2022', '08', '1-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'radha'),
(188, '2022', '08', '2-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:20', '2022-08-17 06:26:20', 'radha'),
(189, '2022', '08', '3-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(190, '2022', '08', '4-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(191, '2022', '08', '5-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(192, '2022', '08', '6-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(193, '2022', '08', '7-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(194, '2022', '08', '8-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(195, '2022', '08', '9-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(196, '2022', '08', '10-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(197, '2022', '08', '11-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(198, '2022', '08', '12-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:21', '2022-08-17 06:26:21', 'radha'),
(199, '2022', '08', '13-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(200, '2022', '08', '14-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(201, '2022', '08', '15-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(202, '2022', '08', '16-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(203, '2022', '08', '17-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(204, '2022', '08', '18-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(205, '2022', '08', '19-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(206, '2022', '08', '20-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(207, '2022', '08', '21-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(208, '2022', '08', '22-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(209, '2022', '08', '23-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(210, '2022', '08', '24-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(211, '2022', '08', '25-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(212, '2022', '08', '26-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(213, '2022', '08', '27-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(214, '2022', '08', '28-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(215, '2022', '08', '29-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(216, '2022', '08', '30-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(217, '2022', '08', '31-08-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'radha'),
(218, '2022', '08', '1-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'kimspharma'),
(219, '2022', '08', '2-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'kimspharma'),
(220, '2022', '08', '3-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'kimspharma'),
(221, '2022', '08', '4-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:22', '2022-08-17 06:26:22', 'kimspharma'),
(222, '2022', '08', '5-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(223, '2022', '08', '6-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(224, '2022', '08', '7-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(225, '2022', '08', '8-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(226, '2022', '08', '9-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(227, '2022', '08', '10-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(228, '2022', '08', '11-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(229, '2022', '08', '12-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(230, '2022', '08', '13-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(231, '2022', '08', '14-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(232, '2022', '08', '15-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(233, '2022', '08', '16-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(234, '2022', '08', '17-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(235, '2022', '08', '18-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(236, '2022', '08', '19-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(237, '2022', '08', '20-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(238, '2022', '08', '21-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(239, '2022', '08', '22-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(240, '2022', '08', '23-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(241, '2022', '08', '24-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(242, '2022', '08', '25-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(243, '2022', '08', '26-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(244, '2022', '08', '27-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(245, '2022', '08', '28-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(246, '2022', '08', '29-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(247, '2022', '08', '30-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(248, '2022', '08', '31-08-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimspharma'),
(249, '2022', '08', '1-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimsurodoctor'),
(250, '2022', '08', '2-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimsurodoctor'),
(251, '2022', '08', '3-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimsurodoctor'),
(252, '2022', '08', '4-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimsurodoctor'),
(253, '2022', '08', '5-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:23', '2022-08-17 06:26:23', 'kimsurodoctor'),
(254, '2022', '08', '6-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(255, '2022', '08', '7-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(256, '2022', '08', '8-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(257, '2022', '08', '9-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(258, '2022', '08', '10-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(259, '2022', '08', '11-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(260, '2022', '08', '12-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(261, '2022', '08', '13-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(262, '2022', '08', '14-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(263, '2022', '08', '15-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(264, '2022', '08', '16-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(265, '2022', '08', '17-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(266, '2022', '08', '18-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(267, '2022', '08', '19-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(268, '2022', '08', '20-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(269, '2022', '08', '21-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(270, '2022', '08', '22-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(271, '2022', '08', '23-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(272, '2022', '08', '24-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:24', '2022-08-17 06:26:24', 'kimsurodoctor'),
(273, '2022', '08', '25-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsurodoctor'),
(274, '2022', '08', '26-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsurodoctor'),
(275, '2022', '08', '27-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsurodoctor'),
(276, '2022', '08', '28-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsurodoctor'),
(277, '2022', '08', '29-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsurodoctor'),
(278, '2022', '08', '30-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsurodoctor'),
(279, '2022', '08', '31-08-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsurodoctor'),
(280, '2022', '08', '1-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(281, '2022', '08', '2-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(282, '2022', '08', '3-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(283, '2022', '08', '4-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(284, '2022', '08', '5-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(285, '2022', '08', '6-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(286, '2022', '08', '7-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(287, '2022', '08', '8-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(288, '2022', '08', '9-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(289, '2022', '08', '10-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(290, '2022', '08', '11-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(291, '2022', '08', '12-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(292, '2022', '08', '13-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(293, '2022', '08', '14-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(294, '2022', '08', '15-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(295, '2022', '08', '16-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(296, '2022', '08', '17-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(297, '2022', '08', '18-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(298, '2022', '08', '19-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(299, '2022', '08', '20-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(300, '2022', '08', '21-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(301, '2022', '08', '22-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(302, '2022', '08', '23-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(303, '2022', '08', '24-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(304, '2022', '08', '25-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(305, '2022', '08', '26-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:25', '2022-08-17 06:26:25', 'kimsudoctor'),
(306, '2022', '08', '27-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsudoctor'),
(307, '2022', '08', '28-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsudoctor'),
(308, '2022', '08', '29-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsudoctor'),
(309, '2022', '08', '30-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsudoctor'),
(310, '2022', '08', '31-08-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsudoctor'),
(311, '2022', '08', '1-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(312, '2022', '08', '2-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(313, '2022', '08', '3-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(314, '2022', '08', '4-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(315, '2022', '08', '5-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(316, '2022', '08', '6-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(317, '2022', '08', '7-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(318, '2022', '08', '8-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(319, '2022', '08', '9-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(320, '2022', '08', '10-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(321, '2022', '08', '11-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(322, '2022', '08', '12-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(323, '2022', '08', '13-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(324, '2022', '08', '14-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(325, '2022', '08', '15-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(326, '2022', '08', '16-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(327, '2022', '08', '17-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(328, '2022', '08', '18-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:26', '2022-08-17 06:26:26', 'kimsadmin'),
(329, '2022', '08', '19-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(330, '2022', '08', '20-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(331, '2022', '08', '21-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(332, '2022', '08', '22-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(333, '2022', '08', '23-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(334, '2022', '08', '24-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(335, '2022', '08', '25-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(336, '2022', '08', '26-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(337, '2022', '08', '27-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(338, '2022', '08', '28-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(339, '2022', '08', '29-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(340, '2022', '08', '30-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(341, '2022', '08', '31-08-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', 'kimsadmin'),
(342, '2022', '08', '1-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(343, '2022', '08', '2-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(344, '2022', '08', '3-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(345, '2022', '08', '4-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(346, '2022', '08', '5-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(347, '2022', '08', '6-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(348, '2022', '08', '7-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(349, '2022', '08', '8-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(350, '2022', '08', '9-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(351, '2022', '08', '10-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(352, '2022', '08', '11-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(353, '2022', '08', '12-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:27', '2022-08-17 06:26:27', '123'),
(354, '2022', '08', '13-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(355, '2022', '08', '14-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(356, '2022', '08', '15-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(357, '2022', '08', '16-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(358, '2022', '08', '17-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(359, '2022', '08', '18-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(360, '2022', '08', '19-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(361, '2022', '08', '20-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(362, '2022', '08', '21-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(363, '2022', '08', '22-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(364, '2022', '08', '23-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(365, '2022', '08', '24-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:28', '2022-08-17 06:26:28', '123'),
(366, '2022', '08', '25-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', '123'),
(367, '2022', '08', '26-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', '123'),
(368, '2022', '08', '27-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', '123'),
(369, '2022', '08', '28-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', '123'),
(370, '2022', '08', '29-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', '123'),
(371, '2022', '08', '30-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', '123'),
(372, '2022', '08', '31-08-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', '123'),
(373, '2022', '08', '1-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(374, '2022', '08', '2-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(375, '2022', '08', '3-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(376, '2022', '08', '4-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(377, '2022', '08', '5-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(378, '2022', '08', '6-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(379, '2022', '08', '7-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(380, '2022', '08', '8-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(381, '2022', '08', '9-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(382, '2022', '08', '10-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(383, '2022', '08', '11-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(384, '2022', '08', '12-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:29', '2022-08-17 06:26:29', 'qwe'),
(385, '2022', '08', '13-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(386, '2022', '08', '14-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(387, '2022', '08', '15-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(388, '2022', '08', '16-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(389, '2022', '08', '17-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(390, '2022', '08', '18-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(391, '2022', '08', '19-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(392, '2022', '08', '20-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(393, '2022', '08', '21-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(394, '2022', '08', '22-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(395, '2022', '08', '23-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(396, '2022', '08', '24-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(397, '2022', '08', '25-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(398, '2022', '08', '26-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(399, '2022', '08', '27-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(400, '2022', '08', '28-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(401, '2022', '08', '29-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:30', '2022-08-17 06:26:30', 'qwe'),
(402, '2022', '08', '30-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'qwe'),
(403, '2022', '08', '31-08-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'qwe'),
(404, '2022', '08', '1-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(405, '2022', '08', '2-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(406, '2022', '08', '3-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(407, '2022', '08', '4-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(408, '2022', '08', '5-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(409, '2022', '08', '6-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(410, '2022', '08', '7-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(411, '2022', '08', '8-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(412, '2022', '08', '9-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(413, '2022', '08', '10-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(414, '2022', '08', '11-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(415, '2022', '08', '12-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(416, '2022', '08', '13-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(417, '2022', '08', '14-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(418, '2022', '08', '15-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(419, '2022', '08', '16-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(420, '2022', '08', '17-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(421, '2022', '08', '18-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:31', '2022-08-17 06:26:31', 'kimsentdoctor'),
(422, '2022', '08', '19-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(423, '2022', '08', '20-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(424, '2022', '08', '21-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(425, '2022', '08', '22-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(426, '2022', '08', '23-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(427, '2022', '08', '24-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(428, '2022', '08', '25-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(429, '2022', '08', '26-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(430, '2022', '08', '27-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(431, '2022', '08', '28-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(432, '2022', '08', '29-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(433, '2022', '08', '30-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(434, '2022', '08', '31-08-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsentdoctor'),
(435, '2022', '08', '1-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsent1doctor'),
(436, '2022', '08', '2-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:32', '2022-08-17 06:26:32', 'kimsent1doctor'),
(437, '2022', '08', '3-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(438, '2022', '08', '4-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(439, '2022', '08', '5-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(440, '2022', '08', '6-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(441, '2022', '08', '7-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(442, '2022', '08', '8-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(443, '2022', '08', '9-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(444, '2022', '08', '10-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(445, '2022', '08', '11-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(446, '2022', '08', '12-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(447, '2022', '08', '13-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(448, '2022', '08', '14-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(449, '2022', '08', '15-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(450, '2022', '08', '16-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(451, '2022', '08', '17-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(452, '2022', '08', '18-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(453, '2022', '08', '19-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(454, '2022', '08', '20-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(455, '2022', '08', '21-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(456, '2022', '08', '22-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(457, '2022', '08', '23-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(458, '2022', '08', '24-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(459, '2022', '08', '25-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(460, '2022', '08', '26-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(461, '2022', '08', '27-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(462, '2022', '08', '28-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(463, '2022', '08', '29-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(464, '2022', '08', '30-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(465, '2022', '08', '31-08-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimsent1doctor'),
(466, '2022', '08', '1-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:33', '2022-08-17 06:26:33', 'kimscounter'),
(467, '2022', '08', '2-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(468, '2022', '08', '3-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(469, '2022', '08', '4-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(470, '2022', '08', '5-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(471, '2022', '08', '6-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(472, '2022', '08', '7-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(473, '2022', '08', '8-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(474, '2022', '08', '9-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(475, '2022', '08', '10-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(476, '2022', '08', '11-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(477, '2022', '08', '12-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(478, '2022', '08', '13-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(479, '2022', '08', '14-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(480, '2022', '08', '15-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(481, '2022', '08', '16-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(482, '2022', '08', '17-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(483, '2022', '08', '18-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(484, '2022', '08', '19-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(485, '2022', '08', '20-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(486, '2022', '08', '21-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(487, '2022', '08', '22-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(488, '2022', '08', '23-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(489, '2022', '08', '24-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(490, '2022', '08', '25-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(491, '2022', '08', '26-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(492, '2022', '08', '27-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(493, '2022', '08', '28-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(494, '2022', '08', '29-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(495, '2022', '08', '30-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(496, '2022', '08', '31-08-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:34', '2022-08-17 06:26:34', 'kimscounter'),
(497, '2022', '08', '1-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(498, '2022', '08', '2-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(499, '2022', '08', '3-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(500, '2022', '08', '4-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(501, '2022', '08', '5-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(502, '2022', '08', '6-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(503, '2022', '08', '7-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(504, '2022', '08', '8-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(505, '2022', '08', '9-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(506, '2022', '08', '10-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(507, '2022', '08', '11-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(508, '2022', '08', '12-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(509, '2022', '08', '13-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(510, '2022', '08', '14-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(511, '2022', '08', '15-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(512, '2022', '08', '16-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:35', '2022-08-17 06:26:35', 'salarytest'),
(513, '2022', '08', '17-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(514, '2022', '08', '18-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(515, '2022', '08', '19-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(516, '2022', '08', '20-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(517, '2022', '08', '21-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(518, '2022', '08', '22-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(519, '2022', '08', '23-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(520, '2022', '08', '24-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(521, '2022', '08', '25-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(522, '2022', '08', '26-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(523, '2022', '08', '27-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(524, '2022', '08', '28-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(525, '2022', '08', '29-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(526, '2022', '08', '30-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(527, '2022', '08', '31-08-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'salarytest'),
(528, '2022', '08', '1-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'example'),
(529, '2022', '08', '2-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'example'),
(530, '2022', '08', '3-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'example'),
(531, '2022', '08', '4-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'example'),
(532, '2022', '08', '5-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:36', '2022-08-17 06:26:36', 'example'),
(533, '2022', '08', '6-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(534, '2022', '08', '7-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(535, '2022', '08', '8-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(536, '2022', '08', '9-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(537, '2022', '08', '10-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(538, '2022', '08', '11-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(539, '2022', '08', '12-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(540, '2022', '08', '13-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(541, '2022', '08', '14-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(542, '2022', '08', '15-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(543, '2022', '08', '16-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(544, '2022', '08', '17-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(545, '2022', '08', '18-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(546, '2022', '08', '19-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(547, '2022', '08', '20-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(548, '2022', '08', '21-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(549, '2022', '08', '22-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(550, '2022', '08', '23-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(551, '2022', '08', '24-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(552, '2022', '08', '25-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(553, '2022', '08', '26-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(554, '2022', '08', '27-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(555, '2022', '08', '28-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:37', '2022-08-17 06:26:37', 'example'),
(556, '2022', '08', '29-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'example'),
(557, '2022', '08', '30-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'example'),
(558, '2022', '08', '31-08-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'example'),
(559, '2022', '08', '1-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(560, '2022', '08', '2-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(561, '2022', '08', '3-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(562, '2022', '08', '4-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(563, '2022', '08', '5-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(564, '2022', '08', '6-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(565, '2022', '08', '7-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(566, '2022', '08', '8-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(567, '2022', '08', '9-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(568, '2022', '08', '10-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(569, '2022', '08', '11-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(570, '2022', '08', '12-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(571, '2022', '08', '13-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(572, '2022', '08', '14-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(573, '2022', '08', '15-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(574, '2022', '08', '16-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(575, '2022', '08', '17-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(576, '2022', '08', '18-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:38', '2022-08-17 06:26:38', 'kimsstore'),
(577, '2022', '08', '19-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(578, '2022', '08', '20-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(579, '2022', '08', '21-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(580, '2022', '08', '22-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(581, '2022', '08', '23-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(582, '2022', '08', '24-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(583, '2022', '08', '25-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(584, '2022', '08', '26-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(585, '2022', '08', '27-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(586, '2022', '08', '28-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(587, '2022', '08', '29-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:39', '2022-08-17 06:26:39', 'kimsstore'),
(588, '2022', '08', '30-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'kimsstore'),
(589, '2022', '08', '31-08-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'kimsstore'),
(590, '2022', '08', '1-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(591, '2022', '08', '2-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(592, '2022', '08', '3-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(593, '2022', '08', '4-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(594, '2022', '08', '5-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(595, '2022', '08', '6-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(596, '2022', '08', '7-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(597, '2022', '08', '8-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(598, '2022', '08', '9-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(599, '2022', '08', '10-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(600, '2022', '08', '11-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(601, '2022', '08', '12-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(602, '2022', '08', '13-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(603, '2022', '08', '14-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(604, '2022', '08', '15-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(605, '2022', '08', '16-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(606, '2022', '08', '17-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(607, '2022', '08', '18-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(608, '2022', '08', '19-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:40', '2022-08-17 06:26:40', 'casuality'),
(609, '2022', '08', '20-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(610, '2022', '08', '21-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(611, '2022', '08', '22-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(612, '2022', '08', '23-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(613, '2022', '08', '24-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(614, '2022', '08', '25-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(615, '2022', '08', '26-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(616, '2022', '08', '27-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(617, '2022', '08', '28-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(618, '2022', '08', '29-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(619, '2022', '08', '30-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(620, '2022', '08', '31-08-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'casuality'),
(621, '2022', '08', '1-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(622, '2022', '08', '2-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(623, '2022', '08', '3-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(624, '2022', '08', '4-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(625, '2022', '08', '5-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(626, '2022', '08', '6-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(627, '2022', '08', '7-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(628, '2022', '08', '8-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(629, '2022', '08', '9-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(630, '2022', '08', '10-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(631, '2022', '08', '11-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(632, '2022', '08', '12-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(633, '2022', '08', '13-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:41', '2022-08-17 06:26:41', 'nurse'),
(634, '2022', '08', '14-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(635, '2022', '08', '15-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(636, '2022', '08', '16-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(637, '2022', '08', '17-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(638, '2022', '08', '18-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(639, '2022', '08', '19-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(640, '2022', '08', '20-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(641, '2022', '08', '21-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(642, '2022', '08', '22-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(643, '2022', '08', '23-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(644, '2022', '08', '24-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(645, '2022', '08', '25-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(646, '2022', '08', '26-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(647, '2022', '08', '27-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(648, '2022', '08', '28-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(649, '2022', '08', '29-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(650, '2022', '08', '30-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(651, '2022', '08', '31-08-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'nurse'),
(652, '2022', '08', '1-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(653, '2022', '08', '2-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin'),
(654, '2022', '08', '3-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin'),
(655, '2022', '08', '4-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin'),
(656, '2022', '08', '5-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin'),
(657, '2022', '08', '6-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin'),
(658, '2022', '08', '7-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin'),
(659, '2022', '08', '8-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin'),
(660, '2022', '08', '9-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin'),
(661, '2022', '08', '10-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:42', '2022-08-17 06:26:42', 'hospitaladmin'),
(662, '2022', '08', '11-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(663, '2022', '08', '12-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(664, '2022', '08', '13-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(665, '2022', '08', '14-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(666, '2022', '08', '15-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(667, '2022', '08', '16-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(668, '2022', '08', '17-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(669, '2022', '08', '18-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(670, '2022', '08', '19-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(671, '2022', '08', '20-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(672, '2022', '08', '21-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(673, '2022', '08', '22-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(674, '2022', '08', '23-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(675, '2022', '08', '24-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(676, '2022', '08', '25-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(677, '2022', '08', '26-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(678, '2022', '08', '27-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(679, '2022', '08', '28-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(680, '2022', '08', '29-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(681, '2022', '08', '30-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(682, '2022', '08', '31-08-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'hospitaladmin'),
(683, '2022', '08', '1-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(684, '2022', '08', '2-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(685, '2022', '08', '3-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(686, '2022', '08', '4-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(687, '2022', '08', '5-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(688, '2022', '08', '6-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(689, '2022', '08', '7-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(690, '2022', '08', '8-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(691, '2022', '08', '9-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(692, '2022', '08', '10-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:43', '2022-08-17 06:26:43', 'Dep Admin'),
(693, '2022', '08', '11-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(694, '2022', '08', '12-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(695, '2022', '08', '13-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(696, '2022', '08', '14-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(697, '2022', '08', '15-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(698, '2022', '08', '16-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(699, '2022', '08', '17-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(700, '2022', '08', '18-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(701, '2022', '08', '19-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(702, '2022', '08', '20-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(703, '2022', '08', '21-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(704, '2022', '08', '22-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(705, '2022', '08', '23-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:44', '2022-08-17 06:26:44', 'Dep Admin'),
(706, '2022', '08', '24-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'Dep Admin'),
(707, '2022', '08', '25-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'Dep Admin'),
(708, '2022', '08', '26-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'Dep Admin'),
(709, '2022', '08', '27-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'Dep Admin'),
(710, '2022', '08', '28-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'Dep Admin'),
(711, '2022', '08', '29-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'Dep Admin'),
(712, '2022', '08', '30-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'Dep Admin'),
(713, '2022', '08', '31-08-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'Dep Admin'),
(714, '2022', '08', '1-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(715, '2022', '08', '2-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(716, '2022', '08', '3-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(717, '2022', '08', '4-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(718, '2022', '08', '5-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(719, '2022', '08', '6-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(720, '2022', '08', '7-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(721, '2022', '08', '8-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(722, '2022', '08', '9-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(723, '2022', '08', '10-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:45', '2022-08-17 06:26:45', 'entadmin'),
(724, '2022', '08', '11-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(725, '2022', '08', '12-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(726, '2022', '08', '13-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(727, '2022', '08', '14-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(728, '2022', '08', '15-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(729, '2022', '08', '16-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(730, '2022', '08', '17-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(731, '2022', '08', '18-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(732, '2022', '08', '19-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(733, '2022', '08', '20-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(734, '2022', '08', '21-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(735, '2022', '08', '22-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(736, '2022', '08', '23-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(737, '2022', '08', '24-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(738, '2022', '08', '25-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(739, '2022', '08', '26-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(740, '2022', '08', '27-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(741, '2022', '08', '28-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(742, '2022', '08', '29-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(743, '2022', '08', '30-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(744, '2022', '08', '31-08-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entadmin'),
(745, '2022', '08', '1-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entnurse'),
(746, '2022', '08', '2-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entnurse'),
(747, '2022', '08', '3-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entnurse'),
(748, '2022', '08', '4-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:46', '2022-08-17 06:26:46', 'entnurse'),
(749, '2022', '08', '5-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(750, '2022', '08', '6-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(751, '2022', '08', '7-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(752, '2022', '08', '8-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(753, '2022', '08', '9-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(754, '2022', '08', '10-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(755, '2022', '08', '11-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(756, '2022', '08', '12-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(757, '2022', '08', '13-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(758, '2022', '08', '14-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(759, '2022', '08', '15-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(760, '2022', '08', '16-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(761, '2022', '08', '17-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(762, '2022', '08', '18-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:47', '2022-08-17 06:26:47', 'entnurse'),
(763, '2022', '08', '19-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(764, '2022', '08', '20-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(765, '2022', '08', '21-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(766, '2022', '08', '22-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(767, '2022', '08', '23-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(768, '2022', '08', '24-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(769, '2022', '08', '25-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(770, '2022', '08', '26-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(771, '2022', '08', '27-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(772, '2022', '08', '28-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(773, '2022', '08', '29-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(774, '2022', '08', '30-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(775, '2022', '08', '31-08-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'entnurse'),
(776, '2022', '08', '1-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'ent lab'),
(777, '2022', '08', '2-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:48', '2022-08-17 06:26:48', 'ent lab'),
(778, '2022', '08', '3-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:49', '2022-08-17 06:26:49', 'ent lab'),
(779, '2022', '08', '4-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:49', '2022-08-17 06:26:49', 'ent lab'),
(780, '2022', '08', '5-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:49', '2022-08-17 06:26:49', 'ent lab'),
(781, '2022', '08', '6-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:49', '2022-08-17 06:26:49', 'ent lab'),
(782, '2022', '08', '7-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:49', '2022-08-17 06:26:49', 'ent lab'),
(783, '2022', '08', '8-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:49', '2022-08-17 06:26:49', 'ent lab'),
(784, '2022', '08', '9-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:49', '2022-08-17 06:26:49', 'ent lab'),
(785, '2022', '08', '10-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:49', '2022-08-17 06:26:49', 'ent lab'),
(786, '2022', '08', '11-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:49', '2022-08-17 06:26:49', 'ent lab'),
(787, '2022', '08', '12-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(788, '2022', '08', '13-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(789, '2022', '08', '14-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(790, '2022', '08', '15-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(791, '2022', '08', '16-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(792, '2022', '08', '17-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(793, '2022', '08', '18-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(794, '2022', '08', '19-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(795, '2022', '08', '20-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(796, '2022', '08', '21-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(797, '2022', '08', '22-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(798, '2022', '08', '23-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(799, '2022', '08', '24-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(800, '2022', '08', '25-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(801, '2022', '08', '26-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(802, '2022', '08', '27-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(803, '2022', '08', '28-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(804, '2022', '08', '29-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(805, '2022', '08', '30-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(806, '2022', '08', '31-08-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'ent lab'),
(807, '2022', '08', '1-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(808, '2022', '08', '2-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(809, '2022', '08', '3-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(810, '2022', '08', '4-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(811, '2022', '08', '5-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(812, '2022', '08', '6-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(813, '2022', '08', '7-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(814, '2022', '08', '8-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(815, '2022', '08', '9-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(816, '2022', '08', '10-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:50', '2022-08-17 06:26:50', 'anpham'),
(817, '2022', '08', '11-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(818, '2022', '08', '12-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(819, '2022', '08', '13-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(820, '2022', '08', '14-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(821, '2022', '08', '15-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(822, '2022', '08', '16-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(823, '2022', '08', '17-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(824, '2022', '08', '18-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(825, '2022', '08', '19-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(826, '2022', '08', '20-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(827, '2022', '08', '21-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(828, '2022', '08', '22-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(829, '2022', '08', '23-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(830, '2022', '08', '24-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(831, '2022', '08', '25-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(832, '2022', '08', '26-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(833, '2022', '08', '27-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(834, '2022', '08', '28-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(835, '2022', '08', '29-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(836, '2022', '08', '30-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(837, '2022', '08', '31-08-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'anpham'),
(838, '2022', '08', '1-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'testprevilage'),
(839, '2022', '08', '2-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'testprevilage'),
(840, '2022', '08', '3-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'testprevilage'),
(841, '2022', '08', '4-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'testprevilage'),
(842, '2022', '08', '5-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'testprevilage'),
(843, '2022', '08', '6-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'testprevilage'),
(844, '2022', '08', '7-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'testprevilage'),
(845, '2022', '08', '8-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'testprevilage'),
(846, '2022', '08', '9-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:51', '2022-08-17 06:26:51', 'testprevilage'),
(847, '2022', '08', '10-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(848, '2022', '08', '11-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(849, '2022', '08', '12-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(850, '2022', '08', '13-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(851, '2022', '08', '14-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(852, '2022', '08', '15-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(853, '2022', '08', '16-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(854, '2022', '08', '17-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(855, '2022', '08', '18-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(856, '2022', '08', '19-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(857, '2022', '08', '20-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(858, '2022', '08', '21-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(859, '2022', '08', '22-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(860, '2022', '08', '23-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(861, '2022', '08', '24-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(862, '2022', '08', '25-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(863, '2022', '08', '26-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(864, '2022', '08', '27-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(865, '2022', '08', '28-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(866, '2022', '08', '29-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(867, '2022', '08', '30-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(868, '2022', '08', '31-08-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'testprevilage'),
(869, '2022', '08', '1-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:52', '2022-08-17 06:26:52', 'dutnurse'),
(870, '2022', '08', '2-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(871, '2022', '08', '3-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(872, '2022', '08', '4-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(873, '2022', '08', '5-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(874, '2022', '08', '6-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(875, '2022', '08', '7-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(876, '2022', '08', '8-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(877, '2022', '08', '9-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(878, '2022', '08', '10-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(879, '2022', '08', '11-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(880, '2022', '08', '12-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(881, '2022', '08', '13-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(882, '2022', '08', '14-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(883, '2022', '08', '15-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(884, '2022', '08', '16-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(885, '2022', '08', '17-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:53', '2022-08-17 06:26:53', 'dutnurse'),
(886, '2022', '08', '18-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:54', '2022-08-17 06:26:54', 'dutnurse'),
(887, '2022', '08', '19-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:54', '2022-08-17 06:26:54', 'dutnurse'),
(888, '2022', '08', '20-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:54', '2022-08-17 06:26:54', 'dutnurse'),
(889, '2022', '08', '21-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:54', '2022-08-17 06:26:54', 'dutnurse'),
(890, '2022', '08', '22-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:54', '2022-08-17 06:26:54', 'dutnurse'),
(891, '2022', '08', '23-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:54', '2022-08-17 06:26:54', 'dutnurse'),
(892, '2022', '08', '24-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:54', '2022-08-17 06:26:54', 'dutnurse'),
(893, '2022', '08', '25-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'dutnurse'),
(894, '2022', '08', '26-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'dutnurse'),
(895, '2022', '08', '27-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'dutnurse'),
(896, '2022', '08', '28-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'dutnurse'),
(897, '2022', '08', '29-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'dutnurse'),
(898, '2022', '08', '30-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'dutnurse'),
(899, '2022', '08', '31-08-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'dutnurse'),
(900, '2022', '08', '1-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(901, '2022', '08', '2-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(902, '2022', '08', '3-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(903, '2022', '08', '4-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(904, '2022', '08', '5-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(905, '2022', '08', '6-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(906, '2022', '08', '7-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(907, '2022', '08', '8-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(908, '2022', '08', '9-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(909, '2022', '08', '10-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(910, '2022', '08', '11-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:55', '2022-08-17 06:26:55', 'SSS'),
(911, '2022', '08', '12-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(912, '2022', '08', '13-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(913, '2022', '08', '14-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(914, '2022', '08', '15-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(915, '2022', '08', '16-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(916, '2022', '08', '17-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(917, '2022', '08', '18-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(918, '2022', '08', '19-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(919, '2022', '08', '20-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(920, '2022', '08', '21-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(921, '2022', '08', '22-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(922, '2022', '08', '23-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(923, '2022', '08', '24-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(924, '2022', '08', '25-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(925, '2022', '08', '26-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:56', '2022-08-17 06:26:56', 'SSS'),
(926, '2022', '08', '27-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', 'SSS'),
(927, '2022', '08', '28-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', 'SSS'),
(928, '2022', '08', '29-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', 'SSS'),
(929, '2022', '08', '30-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', 'SSS'),
(930, '2022', '08', '31-08-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', 'SSS'),
(931, '2022', '08', '1-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', '5'),
(932, '2022', '08', '2-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', '5'),
(933, '2022', '08', '3-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', '5'),
(934, '2022', '08', '4-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', '5'),
(935, '2022', '08', '5-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', '5'),
(936, '2022', '08', '6-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:57', '2022-08-17 06:26:57', '5'),
(937, '2022', '08', '7-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:58', '2022-08-17 06:26:58', '5'),
(938, '2022', '08', '8-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:58', '2022-08-17 06:26:58', '5'),
(939, '2022', '08', '9-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:58', '2022-08-17 06:26:58', '5'),
(940, '2022', '08', '10-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:58', '2022-08-17 06:26:58', '5'),
(941, '2022', '08', '11-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:58', '2022-08-17 06:26:58', '5'),
(942, '2022', '08', '12-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:58', '2022-08-17 06:26:58', '5'),
(943, '2022', '08', '13-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:58', '2022-08-17 06:26:58', '5'),
(944, '2022', '08', '14-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:58', '2022-08-17 06:26:58', '5'),
(945, '2022', '08', '15-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:58', '2022-08-17 06:26:58', '5'),
(946, '2022', '08', '16-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(947, '2022', '08', '17-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(948, '2022', '08', '18-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(949, '2022', '08', '19-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(950, '2022', '08', '20-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(951, '2022', '08', '21-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(952, '2022', '08', '22-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(953, '2022', '08', '23-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(954, '2022', '08', '24-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(955, '2022', '08', '25-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(956, '2022', '08', '26-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(957, '2022', '08', '27-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(958, '2022', '08', '28-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(959, '2022', '08', '29-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(960, '2022', '08', '30-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(961, '2022', '08', '31-08-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', '5'),
(962, '2022', '08', '1-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', 'aaa'),
(963, '2022', '08', '2-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', 'aaa'),
(964, '2022', '08', '3-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', 'aaa'),
(965, '2022', '08', '4-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:26:59', '2022-08-17 06:26:59', 'aaa'),
(966, '2022', '08', '5-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(967, '2022', '08', '6-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(968, '2022', '08', '7-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(969, '2022', '08', '8-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(970, '2022', '08', '9-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(971, '2022', '08', '10-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(972, '2022', '08', '11-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(973, '2022', '08', '12-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(974, '2022', '08', '13-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(975, '2022', '08', '14-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(976, '2022', '08', '15-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:00', '2022-08-17 06:27:00', 'aaa'),
(977, '2022', '08', '16-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(978, '2022', '08', '17-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(979, '2022', '08', '18-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(980, '2022', '08', '19-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(981, '2022', '08', '20-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(982, '2022', '08', '21-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(983, '2022', '08', '22-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(984, '2022', '08', '23-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(985, '2022', '08', '24-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(986, '2022', '08', '25-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(987, '2022', '08', '26-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(988, '2022', '08', '27-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(989, '2022', '08', '28-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(990, '2022', '08', '29-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(991, '2022', '08', '30-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(992, '2022', '08', '31-08-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'aaa'),
(993, '2022', '08', '1-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'nursetestdep'),
(994, '2022', '08', '2-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'nursetestdep'),
(995, '2022', '08', '3-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'nursetestdep'),
(996, '2022', '08', '4-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:01', '2022-08-17 06:27:01', 'nursetestdep'),
(997, '2022', '08', '5-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(998, '2022', '08', '6-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(999, '2022', '08', '7-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1000, '2022', '08', '8-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1001, '2022', '08', '9-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1002, '2022', '08', '10-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1003, '2022', '08', '11-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1004, '2022', '08', '12-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1005, '2022', '08', '13-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1006, '2022', '08', '14-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1007, '2022', '08', '15-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1008, '2022', '08', '16-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1009, '2022', '08', '17-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1010, '2022', '08', '18-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1011, '2022', '08', '19-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1012, '2022', '08', '20-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1013, '2022', '08', '21-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1014, '2022', '08', '22-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1015, '2022', '08', '23-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1016, '2022', '08', '24-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1017, '2022', '08', '25-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:02', '2022-08-17 06:27:02', 'nursetestdep'),
(1018, '2022', '08', '26-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'nursetestdep'),
(1019, '2022', '08', '27-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'nursetestdep'),
(1020, '2022', '08', '28-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'nursetestdep'),
(1021, '2022', '08', '29-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'nursetestdep'),
(1022, '2022', '08', '30-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'nursetestdep'),
(1023, '2022', '08', '31-08-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'nursetestdep'),
(1024, '2022', '08', '1-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1025, '2022', '08', '2-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1026, '2022', '08', '3-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1027, '2022', '08', '4-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1028, '2022', '08', '5-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1029, '2022', '08', '6-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1030, '2022', '08', '7-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1031, '2022', '08', '8-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1032, '2022', '08', '9-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1033, '2022', '08', '10-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1034, '2022', '08', '11-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1035, '2022', '08', '12-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1036, '2022', '08', '13-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1037, '2022', '08', '14-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1038, '2022', '08', '15-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1039, '2022', '08', '16-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1040, '2022', '08', '17-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1041, '2022', '08', '18-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1042, '2022', '08', '19-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1043, '2022', '08', '20-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:03', '2022-08-17 06:27:03', 'cardiologyadmin'),
(1044, '2022', '08', '21-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1045, '2022', '08', '22-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1046, '2022', '08', '23-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1047, '2022', '08', '24-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1048, '2022', '08', '25-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1049, '2022', '08', '26-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1050, '2022', '08', '27-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1051, '2022', '08', '28-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1052, '2022', '08', '29-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1053, '2022', '08', '30-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1054, '2022', '08', '31-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologyadmin'),
(1055, '2022', '08', '1-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1056, '2022', '08', '2-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1057, '2022', '08', '3-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1058, '2022', '08', '4-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1059, '2022', '08', '5-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1060, '2022', '08', '6-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1061, '2022', '08', '7-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1062, '2022', '08', '8-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1063, '2022', '08', '9-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1064, '2022', '08', '10-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1065, '2022', '08', '11-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1066, '2022', '08', '12-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1067, '2022', '08', '13-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1068, '2022', '08', '14-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1069, '2022', '08', '15-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1070, '2022', '08', '16-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:04', '2022-08-17 06:27:04', 'cardiologydoctor'),
(1071, '2022', '08', '17-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1072, '2022', '08', '18-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1073, '2022', '08', '19-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1074, '2022', '08', '20-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1075, '2022', '08', '21-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1076, '2022', '08', '22-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1077, '2022', '08', '23-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1078, '2022', '08', '24-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1079, '2022', '08', '25-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1080, '2022', '08', '26-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:05', '2022-08-17 06:27:05', 'cardiologydoctor'),
(1081, '2022', '08', '27-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'cardiologydoctor'),
(1082, '2022', '08', '28-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'cardiologydoctor'),
(1083, '2022', '08', '29-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'cardiologydoctor'),
(1084, '2022', '08', '30-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'cardiologydoctor'),
(1085, '2022', '08', '31-08-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'cardiologydoctor'),
(1086, '2022', '08', '1-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1087, '2022', '08', '2-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1088, '2022', '08', '3-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1089, '2022', '08', '4-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1090, '2022', '08', '5-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1091, '2022', '08', '6-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1092, '2022', '08', '7-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1093, '2022', '08', '8-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1094, '2022', '08', '9-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1095, '2022', '08', '10-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1096, '2022', '08', '11-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1097, '2022', '08', '12-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1098, '2022', '08', '13-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1099, '2022', '08', '14-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1100, '2022', '08', '15-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:06', '2022-08-17 06:27:06', 'card'),
(1101, '2022', '08', '16-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1102, '2022', '08', '17-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1103, '2022', '08', '18-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1104, '2022', '08', '19-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1105, '2022', '08', '20-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1106, '2022', '08', '21-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1107, '2022', '08', '22-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1108, '2022', '08', '23-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1109, '2022', '08', '24-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1110, '2022', '08', '25-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1111, '2022', '08', '26-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1112, '2022', '08', '27-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1113, '2022', '08', '28-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1114, '2022', '08', '29-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1115, '2022', '08', '30-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1116, '2022', '08', '31-08-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'card'),
(1117, '2022', '08', '1-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'depadmintest'),
(1118, '2022', '08', '2-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:07', '2022-08-17 06:27:07', 'depadmintest'),
(1119, '2022', '08', '3-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1120, '2022', '08', '4-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1121, '2022', '08', '5-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1122, '2022', '08', '6-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1123, '2022', '08', '7-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1124, '2022', '08', '8-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1125, '2022', '08', '9-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1126, '2022', '08', '10-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1127, '2022', '08', '11-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1128, '2022', '08', '12-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1129, '2022', '08', '13-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1130, '2022', '08', '14-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1131, '2022', '08', '15-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1132, '2022', '08', '16-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1133, '2022', '08', '17-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1134, '2022', '08', '18-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1135, '2022', '08', '19-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1136, '2022', '08', '20-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1137, '2022', '08', '21-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1138, '2022', '08', '22-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1139, '2022', '08', '23-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1140, '2022', '08', '24-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:08', '2022-08-17 06:27:08', 'depadmintest'),
(1141, '2022', '08', '25-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'depadmintest'),
(1142, '2022', '08', '26-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'depadmintest'),
(1143, '2022', '08', '27-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'depadmintest'),
(1144, '2022', '08', '28-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'depadmintest'),
(1145, '2022', '08', '29-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'depadmintest'),
(1146, '2022', '08', '30-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'depadmintest'),
(1147, '2022', '08', '31-08-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'depadmintest'),
(1148, '2022', '08', '1-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'cardftest'),
(1149, '2022', '08', '2-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'cardftest'),
(1150, '2022', '08', '3-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'cardftest'),
(1151, '2022', '08', '4-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'cardftest'),
(1152, '2022', '08', '5-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'cardftest'),
(1153, '2022', '08', '6-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'cardftest'),
(1154, '2022', '08', '7-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'cardftest'),
(1155, '2022', '08', '8-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'cardftest'),
(1156, '2022', '08', '9-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:09', '2022-08-17 06:27:09', 'cardftest'),
(1157, '2022', '08', '10-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1158, '2022', '08', '11-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1159, '2022', '08', '12-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1160, '2022', '08', '13-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1161, '2022', '08', '14-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1162, '2022', '08', '15-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1163, '2022', '08', '16-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1164, '2022', '08', '17-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1165, '2022', '08', '18-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1166, '2022', '08', '19-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1167, '2022', '08', '20-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:10', '2022-08-17 06:27:10', 'cardftest'),
(1168, '2022', '08', '21-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1169, '2022', '08', '22-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1170, '2022', '08', '23-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1171, '2022', '08', '24-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1172, '2022', '08', '25-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1173, '2022', '08', '26-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1174, '2022', '08', '27-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1175, '2022', '08', '28-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1176, '2022', '08', '29-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1177, '2022', '08', '30-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1178, '2022', '08', '31-08-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'cardftest'),
(1179, '2022', '08', '1-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'testorder'),
(1180, '2022', '08', '2-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:11', '2022-08-17 06:27:11', 'testorder'),
(1181, '2022', '08', '3-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1182, '2022', '08', '4-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1183, '2022', '08', '5-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1184, '2022', '08', '6-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1185, '2022', '08', '7-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1186, '2022', '08', '8-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1187, '2022', '08', '9-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1188, '2022', '08', '10-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1189, '2022', '08', '11-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1190, '2022', '08', '12-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1191, '2022', '08', '13-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1192, '2022', '08', '14-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1193, '2022', '08', '15-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1194, '2022', '08', '16-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1195, '2022', '08', '17-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1196, '2022', '08', '18-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1197, '2022', '08', '19-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1198, '2022', '08', '20-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1199, '2022', '08', '21-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1200, '2022', '08', '22-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:12', '2022-08-17 06:27:12', 'testorder'),
(1201, '2022', '08', '23-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 'testorder'),
(1202, '2022', '08', '24-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 'testorder'),
(1203, '2022', '08', '25-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 'testorder'),
(1204, '2022', '08', '26-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 'testorder'),
(1205, '2022', '08', '27-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 'testorder'),
(1206, '2022', '08', '28-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 'testorder'),
(1207, '2022', '08', '29-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 'testorder'),
(1208, '2022', '08', '30-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 'testorder'),
(1209, '2022', '08', '31-08-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 'testorder'),
(1210, '2022', '08', '1-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1211, '2022', '08', '2-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1212, '2022', '08', '3-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1213, '2022', '08', '4-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1214, '2022', '08', '5-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1215, '2022', '08', '6-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1216, '2022', '08', '7-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1217, '2022', '08', '8-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1218, '2022', '08', '9-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1219, '2022', '08', '10-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1220, '2022', '08', '11-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1221, '2022', '08', '12-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1222, '2022', '08', '13-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:13', '2022-08-17 06:27:13', 't'),
(1223, '2022', '08', '14-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1224, '2022', '08', '15-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1225, '2022', '08', '16-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1226, '2022', '08', '17-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1227, '2022', '08', '18-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1228, '2022', '08', '19-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1229, '2022', '08', '20-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1230, '2022', '08', '21-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1231, '2022', '08', '22-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1232, '2022', '08', '23-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1233, '2022', '08', '24-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1234, '2022', '08', '25-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1235, '2022', '08', '26-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1236, '2022', '08', '27-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1237, '2022', '08', '28-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1238, '2022', '08', '29-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1239, '2022', '08', '30-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1240, '2022', '08', '31-08-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 't'),
(1241, '2022', '08', '1-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 'vipin'),
(1242, '2022', '08', '2-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:14', '2022-08-17 06:27:14', 'vipin'),
(1243, '2022', '08', '3-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1244, '2022', '08', '4-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1245, '2022', '08', '5-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1246, '2022', '08', '6-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1247, '2022', '08', '7-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1248, '2022', '08', '8-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1249, '2022', '08', '9-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1250, '2022', '08', '10-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1251, '2022', '08', '11-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1252, '2022', '08', '12-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:15', '2022-08-17 06:27:15', 'vipin'),
(1253, '2022', '08', '13-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:16', '2022-08-17 06:27:16', 'vipin'),
(1254, '2022', '08', '14-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:16', '2022-08-17 06:27:16', 'vipin'),
(1255, '2022', '08', '15-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:16', '2022-08-17 06:27:16', 'vipin'),
(1256, '2022', '08', '16-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:16', '2022-08-17 06:27:16', 'vipin'),
(1257, '2022', '08', '17-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:16', '2022-08-17 06:27:16', 'vipin'),
(1258, '2022', '08', '18-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:16', '2022-08-17 06:27:16', 'vipin'),
(1259, '2022', '08', '19-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:16', '2022-08-17 06:27:16', 'vipin'),
(1260, '2022', '08', '20-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:16', '2022-08-17 06:27:16', 'vipin'),
(1261, '2022', '08', '21-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:16', '2022-08-17 06:27:16', 'vipin'),
(1262, '2022', '08', '22-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:17', '2022-08-17 06:27:17', 'vipin'),
(1263, '2022', '08', '23-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:17', '2022-08-17 06:27:17', 'vipin'),
(1264, '2022', '08', '24-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:17', '2022-08-17 06:27:17', 'vipin'),
(1265, '2022', '08', '25-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:17', '2022-08-17 06:27:17', 'vipin'),
(1266, '2022', '08', '26-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:17', '2022-08-17 06:27:17', 'vipin'),
(1267, '2022', '08', '27-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:17', '2022-08-17 06:27:17', 'vipin'),
(1268, '2022', '08', '28-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:17', '2022-08-17 06:27:17', 'vipin'),
(1269, '2022', '08', '29-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:17', '2022-08-17 06:27:17', 'vipin'),
(1270, '2022', '08', '30-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:18', '2022-08-17 06:27:18', 'vipin'),
(1271, '2022', '08', '31-08-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 06:27:18', '2022-08-17 06:27:18', 'vipin'),
(1272, '2022', '01', '1-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:17', '2022-08-17 07:20:17', 'kimshr'),
(1273, '2022', '01', '2-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:17', '2022-08-17 07:20:17', 'kimshr'),
(1274, '2022', '01', '3-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:17', '2022-08-17 07:20:17', 'kimshr'),
(1275, '2022', '01', '4-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1276, '2022', '01', '5-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1277, '2022', '01', '6-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1278, '2022', '01', '7-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1279, '2022', '01', '8-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1280, '2022', '01', '9-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1281, '2022', '01', '10-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1282, '2022', '01', '11-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1283, '2022', '01', '12-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1284, '2022', '01', '13-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1285, '2022', '01', '14-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1286, '2022', '01', '15-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1287, '2022', '01', '16-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1288, '2022', '01', '17-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1289, '2022', '01', '18-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1290, '2022', '01', '19-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1291, '2022', '01', '20-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1292, '2022', '01', '21-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1293, '2022', '01', '22-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1294, '2022', '01', '23-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1295, '2022', '01', '24-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1296, '2022', '01', '25-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:18', '2022-08-17 07:20:18', 'kimshr'),
(1297, '2022', '01', '26-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimshr'),
(1298, '2022', '01', '27-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimshr'),
(1299, '2022', '01', '28-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimshr'),
(1300, '2022', '01', '29-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimshr'),
(1301, '2022', '01', '30-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimshr'),
(1302, '2022', '01', '31-01-2022', '0400037', 'P', 'kims intetrnational', 'Nutrition and dietetics', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimshr'),
(1303, '2022', '01', '1-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1304, '2022', '01', '2-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(1305, '2022', '01', '3-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1306, '2022', '01', '4-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1307, '2022', '01', '5-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1308, '2022', '01', '6-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1309, '2022', '01', '7-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1310, '2022', '01', '8-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1311, '2022', '01', '9-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1312, '2022', '01', '10-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1313, '2022', '01', '11-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1314, '2022', '01', '12-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1315, '2022', '01', '13-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1316, '2022', '01', '14-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:19', '2022-08-17 07:20:19', 'kimsdoctor'),
(1317, '2022', '01', '15-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1318, '2022', '01', '16-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1319, '2022', '01', '17-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1320, '2022', '01', '18-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1321, '2022', '01', '19-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1322, '2022', '01', '20-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1323, '2022', '01', '21-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1324, '2022', '01', '22-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1325, '2022', '01', '23-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1326, '2022', '01', '24-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1327, '2022', '01', '25-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1328, '2022', '01', '26-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1329, '2022', '01', '27-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1330, '2022', '01', '28-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1331, '2022', '01', '29-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1332, '2022', '01', '30-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1333, '2022', '01', '31-01-2022', '0900038', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'kimsdoctor'),
(1334, '2022', '01', '1-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'teststaff'),
(1335, '2022', '01', '2-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'teststaff'),
(1336, '2022', '01', '3-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'teststaff'),
(1337, '2022', '01', '4-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'teststaff'),
(1338, '2022', '01', '5-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'teststaff'),
(1339, '2022', '01', '6-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:20', '2022-08-17 07:20:20', 'teststaff'),
(1340, '2022', '01', '7-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1341, '2022', '01', '8-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1342, '2022', '01', '9-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1343, '2022', '01', '10-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1344, '2022', '01', '11-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1345, '2022', '01', '12-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1346, '2022', '01', '13-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1347, '2022', '01', '14-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1348, '2022', '01', '15-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1349, '2022', '01', '16-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1350, '2022', '01', '17-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1351, '2022', '01', '18-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1352, '2022', '01', '19-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1353, '2022', '01', '20-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1354, '2022', '01', '21-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1355, '2022', '01', '22-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1356, '2022', '01', '23-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1357, '2022', '01', '24-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1358, '2022', '01', '25-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1359, '2022', '01', '26-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1360, '2022', '01', '27-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1361, '2022', '01', '28-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1362, '2022', '01', '29-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1363, '2022', '01', '30-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:21', '2022-08-17 07:20:21', 'teststaff'),
(1364, '2022', '01', '31-01-2022', '0900039', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'teststaff'),
(1365, '2022', '01', '1-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1366, '2022', '01', '2-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1367, '2022', '01', '3-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1368, '2022', '01', '4-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1369, '2022', '01', '5-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1370, '2022', '01', '6-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1371, '2022', '01', '7-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1372, '2022', '01', '8-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1373, '2022', '01', '9-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1374, '2022', '01', '10-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1375, '2022', '01', '11-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1376, '2022', '01', '12-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1377, '2022', '01', '13-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1378, '2022', '01', '14-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1379, '2022', '01', '15-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1380, '2022', '01', '16-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1381, '2022', '01', '17-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1382, '2022', '01', '18-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1383, '2022', '01', '19-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1384, '2022', '01', '20-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1385, '2022', '01', '21-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1386, '2022', '01', '22-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:22', '2022-08-17 07:20:22', 'kimsdoctor1'),
(1387, '2022', '01', '23-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'kimsdoctor1'),
(1388, '2022', '01', '24-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'kimsdoctor1'),
(1389, '2022', '01', '25-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'kimsdoctor1'),
(1390, '2022', '01', '26-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'kimsdoctor1'),
(1391, '2022', '01', '27-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'kimsdoctor1'),
(1392, '2022', '01', '28-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'kimsdoctor1'),
(1393, '2022', '01', '29-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'kimsdoctor1'),
(1394, '2022', '01', '30-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'kimsdoctor1'),
(1395, '2022', '01', '31-01-2022', '0900040', 'P', 'kims intetrnational', 'General Surgery', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'kimsdoctor1'),
(1396, '2022', '01', '1-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1397, '2022', '01', '2-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1398, '2022', '01', '3-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1399, '2022', '01', '4-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1400, '2022', '01', '5-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1401, '2022', '01', '6-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1402, '2022', '01', '7-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1403, '2022', '01', '8-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1404, '2022', '01', '9-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1405, '2022', '01', '10-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1406, '2022', '01', '11-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1407, '2022', '01', '12-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1408, '2022', '01', '13-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:23', '2022-08-17 07:20:23', 'entdoctor'),
(1409, '2022', '01', '14-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1410, '2022', '01', '15-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1411, '2022', '01', '16-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1412, '2022', '01', '17-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1413, '2022', '01', '18-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1414, '2022', '01', '19-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1415, '2022', '01', '20-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1416, '2022', '01', '21-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1417, '2022', '01', '22-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1418, '2022', '01', '23-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1419, '2022', '01', '24-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1420, '2022', '01', '25-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1421, '2022', '01', '26-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1422, '2022', '01', '27-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1423, '2022', '01', '28-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1424, '2022', '01', '29-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1425, '2022', '01', '30-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1426, '2022', '01', '31-01-2022', '0900041', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'entdoctor'),
(1427, '2022', '01', '1-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'ent2doctor'),
(1428, '2022', '01', '2-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:24', '2022-08-17 07:20:24', 'ent2doctor'),
(1429, '2022', '01', '3-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1430, '2022', '01', '4-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1431, '2022', '01', '5-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1432, '2022', '01', '6-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1433, '2022', '01', '7-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1434, '2022', '01', '8-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1435, '2022', '01', '9-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1436, '2022', '01', '10-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1437, '2022', '01', '11-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1438, '2022', '01', '12-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1439, '2022', '01', '13-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1440, '2022', '01', '14-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1441, '2022', '01', '15-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1442, '2022', '01', '16-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1443, '2022', '01', '17-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1444, '2022', '01', '18-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1445, '2022', '01', '19-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1446, '2022', '01', '20-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1447, '2022', '01', '21-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1448, '2022', '01', '22-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1449, '2022', '01', '23-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1450, '2022', '01', '24-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1451, '2022', '01', '25-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1452, '2022', '01', '26-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1453, '2022', '01', '27-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1454, '2022', '01', '28-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1455, '2022', '01', '29-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1456, '2022', '01', '30-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1457, '2022', '01', '31-01-2022', '0900042', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'ent2doctor'),
(1458, '2022', '01', '1-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:25', '2022-08-17 07:20:25', 'radha'),
(1459, '2022', '01', '2-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1460, '2022', '01', '3-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1461, '2022', '01', '4-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1462, '2022', '01', '5-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1463, '2022', '01', '6-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1464, '2022', '01', '7-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1465, '2022', '01', '8-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1466, '2022', '01', '9-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1467, '2022', '01', '10-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1468, '2022', '01', '11-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1469, '2022', '01', '12-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1470, '2022', '01', '13-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1471, '2022', '01', '14-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1472, '2022', '01', '15-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1473, '2022', '01', '16-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1474, '2022', '01', '17-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1475, '2022', '01', '18-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1476, '2022', '01', '19-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1477, '2022', '01', '20-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1478, '2022', '01', '21-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1479, '2022', '01', '22-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:26', '2022-08-17 07:20:26', 'radha'),
(1480, '2022', '01', '23-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'radha'),
(1481, '2022', '01', '24-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'radha'),
(1482, '2022', '01', '25-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'radha'),
(1483, '2022', '01', '26-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'radha'),
(1484, '2022', '01', '27-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'radha'),
(1485, '2022', '01', '28-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'radha'),
(1486, '2022', '01', '29-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'radha'),
(1487, '2022', '01', '30-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'radha'),
(1488, '2022', '01', '31-01-2022', '0900043', 'P', 'kims intetrnational', 'Outpatient department (OPD)', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'radha'),
(1489, '2022', '01', '1-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1490, '2022', '01', '2-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1491, '2022', '01', '3-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1492, '2022', '01', '4-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1493, '2022', '01', '5-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1494, '2022', '01', '6-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1495, '2022', '01', '7-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1496, '2022', '01', '8-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1497, '2022', '01', '9-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1498, '2022', '01', '10-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1499, '2022', '01', '11-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1500, '2022', '01', '12-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1501, '2022', '01', '13-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1502, '2022', '01', '14-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1503, '2022', '01', '15-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1504, '2022', '01', '16-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1505, '2022', '01', '17-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:27', '2022-08-17 07:20:27', 'kimspharma'),
(1506, '2022', '01', '18-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1507, '2022', '01', '19-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1508, '2022', '01', '20-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1509, '2022', '01', '21-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1510, '2022', '01', '22-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1511, '2022', '01', '23-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1512, '2022', '01', '24-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1513, '2022', '01', '25-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1514, '2022', '01', '26-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1515, '2022', '01', '27-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1516, '2022', '01', '28-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1517, '2022', '01', '29-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1518, '2022', '01', '30-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1519, '2022', '01', '31-01-2022', '0900044', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimspharma'),
(1520, '2022', '01', '1-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimsurodoctor'),
(1521, '2022', '01', '2-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimsurodoctor'),
(1522, '2022', '01', '3-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimsurodoctor'),
(1523, '2022', '01', '4-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimsurodoctor'),
(1524, '2022', '01', '5-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:28', '2022-08-17 07:20:28', 'kimsurodoctor'),
(1525, '2022', '01', '6-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1526, '2022', '01', '7-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1527, '2022', '01', '8-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1528, '2022', '01', '9-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1529, '2022', '01', '10-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1530, '2022', '01', '11-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1531, '2022', '01', '12-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1532, '2022', '01', '13-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1533, '2022', '01', '14-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1534, '2022', '01', '15-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1535, '2022', '01', '16-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1536, '2022', '01', '17-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1537, '2022', '01', '18-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1538, '2022', '01', '19-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1539, '2022', '01', '20-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1540, '2022', '01', '21-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1541, '2022', '01', '22-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1542, '2022', '01', '23-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1543, '2022', '01', '24-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1544, '2022', '01', '25-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1545, '2022', '01', '26-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1546, '2022', '01', '27-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1547, '2022', '01', '28-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1548, '2022', '01', '29-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1549, '2022', '01', '30-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1550, '2022', '01', '31-01-2022', '0900045', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsurodoctor'),
(1551, '2022', '01', '1-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsudoctor'),
(1552, '2022', '01', '2-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:29', '2022-08-17 07:20:29', 'kimsudoctor'),
(1553, '2022', '01', '3-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1554, '2022', '01', '4-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1555, '2022', '01', '5-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1556, '2022', '01', '6-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1557, '2022', '01', '7-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1558, '2022', '01', '8-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1559, '2022', '01', '9-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1560, '2022', '01', '10-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1561, '2022', '01', '11-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1562, '2022', '01', '12-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1563, '2022', '01', '13-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1564, '2022', '01', '14-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1565, '2022', '01', '15-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1566, '2022', '01', '16-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1567, '2022', '01', '17-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:30', '2022-08-17 07:20:30', 'kimsudoctor'),
(1568, '2022', '01', '18-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1569, '2022', '01', '19-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1570, '2022', '01', '20-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1571, '2022', '01', '21-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1572, '2022', '01', '22-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1573, '2022', '01', '23-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1574, '2022', '01', '24-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1575, '2022', '01', '25-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1576, '2022', '01', '26-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1577, '2022', '01', '27-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1578, '2022', '01', '28-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1579, '2022', '01', '29-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1580, '2022', '01', '30-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1581, '2022', '01', '31-01-2022', '0900046', 'P', 'kims intetrnational', 'Urology', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsudoctor'),
(1582, '2022', '01', '1-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsadmin'),
(1583, '2022', '01', '2-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsadmin'),
(1584, '2022', '01', '3-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:31', '2022-08-17 07:20:31', 'kimsadmin'),
(1585, '2022', '01', '4-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1586, '2022', '01', '5-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1587, '2022', '01', '6-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1588, '2022', '01', '7-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1589, '2022', '01', '8-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1590, '2022', '01', '9-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1591, '2022', '01', '10-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1592, '2022', '01', '11-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1593, '2022', '01', '12-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1594, '2022', '01', '13-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1595, '2022', '01', '14-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1596, '2022', '01', '15-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1597, '2022', '01', '16-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1598, '2022', '01', '17-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1599, '2022', '01', '18-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1600, '2022', '01', '19-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1601, '2022', '01', '20-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1602, '2022', '01', '21-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:32', '2022-08-17 07:20:32', 'kimsadmin'),
(1603, '2022', '01', '22-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1604, '2022', '01', '23-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1605, '2022', '01', '24-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1606, '2022', '01', '25-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1607, '2022', '01', '26-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1608, '2022', '01', '27-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1609, '2022', '01', '28-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1610, '2022', '01', '29-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1611, '2022', '01', '30-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1612, '2022', '01', '31-01-2022', '0900047', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', 'kimsadmin'),
(1613, '2022', '01', '1-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1614, '2022', '01', '2-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1615, '2022', '01', '3-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1616, '2022', '01', '4-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1617, '2022', '01', '5-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1618, '2022', '01', '6-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1619, '2022', '01', '7-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1620, '2022', '01', '8-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1621, '2022', '01', '9-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1622, '2022', '01', '10-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1623, '2022', '01', '11-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1624, '2022', '01', '12-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1625, '2022', '01', '13-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1626, '2022', '01', '14-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1627, '2022', '01', '15-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(1628, '2022', '01', '16-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1629, '2022', '01', '17-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1630, '2022', '01', '18-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1631, '2022', '01', '19-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1632, '2022', '01', '20-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:33', '2022-08-17 07:20:33', '123'),
(1633, '2022', '01', '21-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1634, '2022', '01', '22-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1635, '2022', '01', '23-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1636, '2022', '01', '24-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1637, '2022', '01', '25-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1638, '2022', '01', '26-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1639, '2022', '01', '27-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1640, '2022', '01', '28-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1641, '2022', '01', '29-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1642, '2022', '01', '30-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1643, '2022', '01', '31-01-2022', '0900048', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', '123'),
(1644, '2022', '01', '1-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1645, '2022', '01', '2-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1646, '2022', '01', '3-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1647, '2022', '01', '4-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1648, '2022', '01', '5-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1649, '2022', '01', '6-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1650, '2022', '01', '7-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1651, '2022', '01', '8-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1652, '2022', '01', '9-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1653, '2022', '01', '10-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1654, '2022', '01', '11-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1655, '2022', '01', '12-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1656, '2022', '01', '13-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1657, '2022', '01', '14-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:34', '2022-08-17 07:20:34', 'qwe'),
(1658, '2022', '01', '15-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1659, '2022', '01', '16-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1660, '2022', '01', '17-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1661, '2022', '01', '18-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1662, '2022', '01', '19-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1663, '2022', '01', '20-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1664, '2022', '01', '21-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1665, '2022', '01', '22-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1666, '2022', '01', '23-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1667, '2022', '01', '24-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1668, '2022', '01', '25-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1669, '2022', '01', '26-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1670, '2022', '01', '27-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1671, '2022', '01', '28-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1672, '2022', '01', '29-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1673, '2022', '01', '30-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1674, '2022', '01', '31-01-2022', '0900049', 'P', 'kims intetrnational', 'Ophthalmology', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'qwe'),
(1675, '2022', '01', '1-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1676, '2022', '01', '2-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1677, '2022', '01', '3-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1678, '2022', '01', '4-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1679, '2022', '01', '5-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1680, '2022', '01', '6-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1681, '2022', '01', '7-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1682, '2022', '01', '8-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1683, '2022', '01', '9-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1684, '2022', '01', '10-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1685, '2022', '01', '11-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:35', '2022-08-17 07:20:35', 'kimsentdoctor'),
(1686, '2022', '01', '12-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1687, '2022', '01', '13-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1688, '2022', '01', '14-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1689, '2022', '01', '15-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1690, '2022', '01', '16-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1691, '2022', '01', '17-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1692, '2022', '01', '18-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1693, '2022', '01', '19-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1694, '2022', '01', '20-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1695, '2022', '01', '21-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1696, '2022', '01', '22-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1697, '2022', '01', '23-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1698, '2022', '01', '24-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1699, '2022', '01', '25-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1700, '2022', '01', '26-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1701, '2022', '01', '27-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:36', '2022-08-17 07:20:36', 'kimsentdoctor'),
(1702, '2022', '01', '28-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsentdoctor'),
(1703, '2022', '01', '29-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsentdoctor'),
(1704, '2022', '01', '30-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsentdoctor'),
(1705, '2022', '01', '31-01-2022', '0900050', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsentdoctor'),
(1706, '2022', '01', '1-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1707, '2022', '01', '2-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1708, '2022', '01', '3-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1709, '2022', '01', '4-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1710, '2022', '01', '5-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1711, '2022', '01', '6-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1712, '2022', '01', '7-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1713, '2022', '01', '8-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1714, '2022', '01', '9-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1715, '2022', '01', '10-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1716, '2022', '01', '11-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1717, '2022', '01', '12-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1718, '2022', '01', '13-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:37', '2022-08-17 07:20:37', 'kimsent1doctor'),
(1719, '2022', '01', '14-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:38', '2022-08-17 07:20:38', 'kimsent1doctor'),
(1720, '2022', '01', '15-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:38', '2022-08-17 07:20:38', 'kimsent1doctor'),
(1721, '2022', '01', '16-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:38', '2022-08-17 07:20:38', 'kimsent1doctor'),
(1722, '2022', '01', '17-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:38', '2022-08-17 07:20:38', 'kimsent1doctor'),
(1723, '2022', '01', '18-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:38', '2022-08-17 07:20:38', 'kimsent1doctor'),
(1724, '2022', '01', '19-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:38', '2022-08-17 07:20:38', 'kimsent1doctor'),
(1725, '2022', '01', '20-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:38', '2022-08-17 07:20:38', 'kimsent1doctor'),
(1726, '2022', '01', '21-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:38', '2022-08-17 07:20:38', 'kimsent1doctor'),
(1727, '2022', '01', '22-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:38', '2022-08-17 07:20:38', 'kimsent1doctor'),
(1728, '2022', '01', '23-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimsent1doctor'),
(1729, '2022', '01', '24-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimsent1doctor'),
(1730, '2022', '01', '25-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimsent1doctor'),
(1731, '2022', '01', '26-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimsent1doctor'),
(1732, '2022', '01', '27-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimsent1doctor'),
(1733, '2022', '01', '28-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimsent1doctor'),
(1734, '2022', '01', '29-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimsent1doctor'),
(1735, '2022', '01', '30-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimsent1doctor'),
(1736, '2022', '01', '31-01-2022', '0900051', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimsent1doctor'),
(1737, '2022', '01', '1-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimscounter'),
(1738, '2022', '01', '2-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimscounter'),
(1739, '2022', '01', '3-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimscounter'),
(1740, '2022', '01', '4-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimscounter'),
(1741, '2022', '01', '5-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimscounter'),
(1742, '2022', '01', '6-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimscounter'),
(1743, '2022', '01', '7-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:39', '2022-08-17 07:20:39', 'kimscounter'),
(1744, '2022', '01', '8-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1745, '2022', '01', '9-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1746, '2022', '01', '10-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1747, '2022', '01', '11-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1748, '2022', '01', '12-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1749, '2022', '01', '13-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1750, '2022', '01', '14-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1751, '2022', '01', '15-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1752, '2022', '01', '16-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1753, '2022', '01', '17-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1754, '2022', '01', '18-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1755, '2022', '01', '19-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1756, '2022', '01', '20-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1757, '2022', '01', '21-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1758, '2022', '01', '22-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1759, '2022', '01', '23-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1760, '2022', '01', '24-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1761, '2022', '01', '25-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1762, '2022', '01', '26-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:40', '2022-08-17 07:20:40', 'kimscounter'),
(1763, '2022', '01', '27-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'kimscounter'),
(1764, '2022', '01', '28-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'kimscounter'),
(1765, '2022', '01', '29-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'kimscounter'),
(1766, '2022', '01', '30-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'kimscounter'),
(1767, '2022', '01', '31-01-2022', '0900052', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'kimscounter'),
(1768, '2022', '01', '1-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1769, '2022', '01', '2-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1770, '2022', '01', '3-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1771, '2022', '01', '4-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1772, '2022', '01', '5-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1773, '2022', '01', '6-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1774, '2022', '01', '7-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1775, '2022', '01', '8-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1776, '2022', '01', '9-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1777, '2022', '01', '10-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1778, '2022', '01', '11-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:41', '2022-08-17 07:20:41', 'salarytest'),
(1779, '2022', '01', '12-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1780, '2022', '01', '13-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1781, '2022', '01', '14-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1782, '2022', '01', '15-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1783, '2022', '01', '16-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1784, '2022', '01', '17-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1785, '2022', '01', '18-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1786, '2022', '01', '19-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1787, '2022', '01', '20-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1788, '2022', '01', '21-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1789, '2022', '01', '22-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1790, '2022', '01', '23-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1791, '2022', '01', '24-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:42', '2022-08-17 07:20:42', 'salarytest'),
(1792, '2022', '01', '25-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'salarytest'),
(1793, '2022', '01', '26-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'salarytest'),
(1794, '2022', '01', '27-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'salarytest'),
(1795, '2022', '01', '28-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'salarytest'),
(1796, '2022', '01', '29-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'salarytest'),
(1797, '2022', '01', '30-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'salarytest'),
(1798, '2022', '01', '31-01-2022', '0900053', 'P', 'kims intetrnational', 'Neonatal unit', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'salarytest'),
(1799, '2022', '01', '1-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1800, '2022', '01', '2-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1801, '2022', '01', '3-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1802, '2022', '01', '4-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1803, '2022', '01', '5-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1804, '2022', '01', '6-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1805, '2022', '01', '7-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1806, '2022', '01', '8-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1807, '2022', '01', '9-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1808, '2022', '01', '10-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1809, '2022', '01', '11-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1810, '2022', '01', '12-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1811, '2022', '01', '13-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1812, '2022', '01', '14-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:43', '2022-08-17 07:20:43', 'example'),
(1813, '2022', '01', '15-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1814, '2022', '01', '16-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1815, '2022', '01', '17-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1816, '2022', '01', '18-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1817, '2022', '01', '19-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1818, '2022', '01', '20-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1819, '2022', '01', '21-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1820, '2022', '01', '22-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1821, '2022', '01', '23-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1822, '2022', '01', '24-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1823, '2022', '01', '25-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1824, '2022', '01', '26-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1825, '2022', '01', '27-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1826, '2022', '01', '28-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1827, '2022', '01', '29-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1828, '2022', '01', '30-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1829, '2022', '01', '31-01-2022', '0900054', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'example'),
(1830, '2022', '01', '1-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'kimsstore'),
(1831, '2022', '01', '2-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'kimsstore'),
(1832, '2022', '01', '3-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'kimsstore'),
(1833, '2022', '01', '4-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'kimsstore'),
(1834, '2022', '01', '5-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'kimsstore'),
(1835, '2022', '01', '6-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'kimsstore'),
(1836, '2022', '01', '7-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'kimsstore'),
(1837, '2022', '01', '8-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'kimsstore'),
(1838, '2022', '01', '9-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:44', '2022-08-17 07:20:44', 'kimsstore'),
(1839, '2022', '01', '10-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1840, '2022', '01', '11-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1841, '2022', '01', '12-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1842, '2022', '01', '13-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1843, '2022', '01', '14-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1844, '2022', '01', '15-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1845, '2022', '01', '16-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1846, '2022', '01', '17-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1847, '2022', '01', '18-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1848, '2022', '01', '19-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1849, '2022', '01', '20-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1850, '2022', '01', '21-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1851, '2022', '01', '22-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1852, '2022', '01', '23-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1853, '2022', '01', '24-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1854, '2022', '01', '25-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1855, '2022', '01', '26-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1856, '2022', '01', '27-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1857, '2022', '01', '28-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1858, '2022', '01', '29-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1859, '2022', '01', '30-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:45', '2022-08-17 07:20:45', 'kimsstore'),
(1860, '2022', '01', '31-01-2022', '0900074', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'kimsstore'),
(1861, '2022', '01', '1-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1862, '2022', '01', '2-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1863, '2022', '01', '3-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1864, '2022', '01', '4-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1865, '2022', '01', '5-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1866, '2022', '01', '6-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1867, '2022', '01', '7-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1868, '2022', '01', '8-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1869, '2022', '01', '9-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1870, '2022', '01', '10-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1871, '2022', '01', '11-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1872, '2022', '01', '12-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1873, '2022', '01', '13-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1874, '2022', '01', '14-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1875, '2022', '01', '15-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1876, '2022', '01', '16-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1877, '2022', '01', '17-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1878, '2022', '01', '18-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1879, '2022', '01', '19-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1880, '2022', '01', '20-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1881, '2022', '01', '21-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1882, '2022', '01', '22-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:46', '2022-08-17 07:20:46', 'casuality'),
(1883, '2022', '01', '23-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'casuality'),
(1884, '2022', '01', '24-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'casuality'),
(1885, '2022', '01', '25-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'casuality'),
(1886, '2022', '01', '26-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'casuality'),
(1887, '2022', '01', '27-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'casuality'),
(1888, '2022', '01', '28-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'casuality'),
(1889, '2022', '01', '29-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'casuality'),
(1890, '2022', '01', '30-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'casuality'),
(1891, '2022', '01', '31-01-2022', '0900076', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'casuality'),
(1892, '2022', '01', '1-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'nurse'),
(1893, '2022', '01', '2-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'nurse'),
(1894, '2022', '01', '3-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'nurse'),
(1895, '2022', '01', '4-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'nurse'),
(1896, '2022', '01', '5-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'nurse'),
(1897, '2022', '01', '6-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'nurse'),
(1898, '2022', '01', '7-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'nurse'),
(1899, '2022', '01', '8-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:47', '2022-08-17 07:20:47', 'nurse'),
(1900, '2022', '01', '9-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1901, '2022', '01', '10-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1902, '2022', '01', '11-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1903, '2022', '01', '12-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1904, '2022', '01', '13-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1905, '2022', '01', '14-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1906, '2022', '01', '15-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1907, '2022', '01', '16-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1908, '2022', '01', '17-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1909, '2022', '01', '18-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1910, '2022', '01', '19-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1911, '2022', '01', '20-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1912, '2022', '01', '21-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1913, '2022', '01', '22-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:48', '2022-08-17 07:20:48', 'nurse'),
(1914, '2022', '01', '23-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'nurse'),
(1915, '2022', '01', '24-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'nurse'),
(1916, '2022', '01', '25-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'nurse'),
(1917, '2022', '01', '26-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'nurse'),
(1918, '2022', '01', '27-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'nurse'),
(1919, '2022', '01', '28-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'nurse'),
(1920, '2022', '01', '29-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'nurse'),
(1921, '2022', '01', '30-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'nurse'),
(1922, '2022', '01', '31-01-2022', '0900077', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'nurse'),
(1923, '2022', '01', '1-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1924, '2022', '01', '2-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1925, '2022', '01', '3-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1926, '2022', '01', '4-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1927, '2022', '01', '5-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1928, '2022', '01', '6-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1929, '2022', '01', '7-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1930, '2022', '01', '8-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1931, '2022', '01', '9-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1932, '2022', '01', '10-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1933, '2022', '01', '11-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1934, '2022', '01', '12-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1935, '2022', '01', '13-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:49', '2022-08-17 07:20:49', 'hospitaladmin'),
(1936, '2022', '01', '14-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1937, '2022', '01', '15-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1938, '2022', '01', '16-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1939, '2022', '01', '17-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1940, '2022', '01', '18-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1941, '2022', '01', '19-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1942, '2022', '01', '20-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1943, '2022', '01', '21-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1944, '2022', '01', '22-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1945, '2022', '01', '23-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1946, '2022', '01', '24-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1947, '2022', '01', '25-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1948, '2022', '01', '26-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1949, '2022', '01', '27-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:50', '2022-08-17 07:20:50', 'hospitaladmin'),
(1950, '2022', '01', '28-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'hospitaladmin'),
(1951, '2022', '01', '29-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'hospitaladmin');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(1952, '2022', '01', '30-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'hospitaladmin'),
(1953, '2022', '01', '31-01-2022', '0900078', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'hospitaladmin'),
(1954, '2022', '01', '1-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1955, '2022', '01', '2-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1956, '2022', '01', '3-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1957, '2022', '01', '4-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1958, '2022', '01', '5-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1959, '2022', '01', '6-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1960, '2022', '01', '7-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1961, '2022', '01', '8-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1962, '2022', '01', '9-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1963, '2022', '01', '10-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1964, '2022', '01', '11-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:51', '2022-08-17 07:20:51', 'Dep Admin'),
(1965, '2022', '01', '12-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1966, '2022', '01', '13-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1967, '2022', '01', '14-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1968, '2022', '01', '15-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1969, '2022', '01', '16-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1970, '2022', '01', '17-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1971, '2022', '01', '18-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1972, '2022', '01', '19-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1973, '2022', '01', '20-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1974, '2022', '01', '21-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1975, '2022', '01', '22-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1976, '2022', '01', '23-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1977, '2022', '01', '24-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1978, '2022', '01', '25-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1979, '2022', '01', '26-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1980, '2022', '01', '27-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1981, '2022', '01', '28-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:52', '2022-08-17 07:20:52', 'Dep Admin'),
(1982, '2022', '01', '29-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'Dep Admin'),
(1983, '2022', '01', '30-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'Dep Admin'),
(1984, '2022', '01', '31-01-2022', '0900079', 'P', 'kims intetrnational', 'Orthopedics', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'Dep Admin'),
(1985, '2022', '01', '1-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1986, '2022', '01', '2-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1987, '2022', '01', '3-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1988, '2022', '01', '4-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1989, '2022', '01', '5-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1990, '2022', '01', '6-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1991, '2022', '01', '7-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1992, '2022', '01', '8-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1993, '2022', '01', '9-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1994, '2022', '01', '10-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1995, '2022', '01', '11-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1996, '2022', '01', '12-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1997, '2022', '01', '13-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1998, '2022', '01', '14-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(1999, '2022', '01', '15-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2000, '2022', '01', '16-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2001, '2022', '01', '17-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2002, '2022', '01', '18-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2003, '2022', '01', '19-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2004, '2022', '01', '20-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2005, '2022', '01', '21-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2006, '2022', '01', '22-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2007, '2022', '01', '23-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2008, '2022', '01', '24-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2009, '2022', '01', '25-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2010, '2022', '01', '26-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2011, '2022', '01', '27-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:53', '2022-08-17 07:20:53', 'entadmin'),
(2012, '2022', '01', '28-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entadmin'),
(2013, '2022', '01', '29-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entadmin'),
(2014, '2022', '01', '30-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entadmin'),
(2015, '2022', '01', '31-01-2022', '0900081', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entadmin'),
(2016, '2022', '01', '1-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entnurse'),
(2017, '2022', '01', '2-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entnurse'),
(2018, '2022', '01', '3-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entnurse'),
(2019, '2022', '01', '4-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entnurse'),
(2020, '2022', '01', '5-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entnurse'),
(2021, '2022', '01', '6-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entnurse'),
(2022, '2022', '01', '7-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entnurse'),
(2023, '2022', '01', '8-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entnurse'),
(2024, '2022', '01', '9-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:54', '2022-08-17 07:20:54', 'entnurse'),
(2025, '2022', '01', '10-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2026, '2022', '01', '11-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2027, '2022', '01', '12-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2028, '2022', '01', '13-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2029, '2022', '01', '14-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2030, '2022', '01', '15-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2031, '2022', '01', '16-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2032, '2022', '01', '17-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2033, '2022', '01', '18-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2034, '2022', '01', '19-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2035, '2022', '01', '20-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2036, '2022', '01', '21-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2037, '2022', '01', '22-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2038, '2022', '01', '23-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2039, '2022', '01', '24-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:55', '2022-08-17 07:20:55', 'entnurse'),
(2040, '2022', '01', '25-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'entnurse'),
(2041, '2022', '01', '26-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'entnurse'),
(2042, '2022', '01', '27-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'entnurse'),
(2043, '2022', '01', '28-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'entnurse'),
(2044, '2022', '01', '29-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'entnurse'),
(2045, '2022', '01', '30-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'entnurse'),
(2046, '2022', '01', '31-01-2022', '0900082', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'entnurse'),
(2047, '2022', '01', '1-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2048, '2022', '01', '2-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2049, '2022', '01', '3-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2050, '2022', '01', '4-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2051, '2022', '01', '5-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2052, '2022', '01', '6-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2053, '2022', '01', '7-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2054, '2022', '01', '8-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2055, '2022', '01', '9-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2056, '2022', '01', '10-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2057, '2022', '01', '11-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2058, '2022', '01', '12-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2059, '2022', '01', '13-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:56', '2022-08-17 07:20:56', 'ent lab'),
(2060, '2022', '01', '14-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2061, '2022', '01', '15-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2062, '2022', '01', '16-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2063, '2022', '01', '17-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2064, '2022', '01', '18-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2065, '2022', '01', '19-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2066, '2022', '01', '20-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2067, '2022', '01', '21-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2068, '2022', '01', '22-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2069, '2022', '01', '23-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2070, '2022', '01', '24-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2071, '2022', '01', '25-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2072, '2022', '01', '26-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2073, '2022', '01', '27-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2074, '2022', '01', '28-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:57', '2022-08-17 07:20:57', 'ent lab'),
(2075, '2022', '01', '29-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:58', '2022-08-17 07:20:58', 'ent lab'),
(2076, '2022', '01', '30-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:58', '2022-08-17 07:20:58', 'ent lab'),
(2077, '2022', '01', '31-01-2022', '0900083', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:58', '2022-08-17 07:20:58', 'ent lab'),
(2078, '2022', '01', '1-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:58', '2022-08-17 07:20:58', 'anpham'),
(2079, '2022', '01', '2-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:58', '2022-08-17 07:20:58', 'anpham'),
(2080, '2022', '01', '3-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:58', '2022-08-17 07:20:58', 'anpham'),
(2081, '2022', '01', '4-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:58', '2022-08-17 07:20:58', 'anpham'),
(2082, '2022', '01', '5-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:58', '2022-08-17 07:20:58', 'anpham'),
(2083, '2022', '01', '6-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:58', '2022-08-17 07:20:58', 'anpham'),
(2084, '2022', '01', '7-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:59', '2022-08-17 07:20:59', 'anpham'),
(2085, '2022', '01', '8-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:59', '2022-08-17 07:20:59', 'anpham'),
(2086, '2022', '01', '9-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:59', '2022-08-17 07:20:59', 'anpham'),
(2087, '2022', '01', '10-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:59', '2022-08-17 07:20:59', 'anpham'),
(2088, '2022', '01', '11-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:59', '2022-08-17 07:20:59', 'anpham'),
(2089, '2022', '01', '12-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:59', '2022-08-17 07:20:59', 'anpham'),
(2090, '2022', '01', '13-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:59', '2022-08-17 07:20:59', 'anpham'),
(2091, '2022', '01', '14-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:20:59', '2022-08-17 07:20:59', 'anpham'),
(2092, '2022', '01', '15-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2093, '2022', '01', '16-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2094, '2022', '01', '17-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2095, '2022', '01', '18-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2096, '2022', '01', '19-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2097, '2022', '01', '20-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2098, '2022', '01', '21-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2099, '2022', '01', '22-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2100, '2022', '01', '23-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2101, '2022', '01', '24-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2102, '2022', '01', '25-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2103, '2022', '01', '26-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:00', '2022-08-17 07:21:00', 'anpham'),
(2104, '2022', '01', '27-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'anpham'),
(2105, '2022', '01', '28-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'anpham'),
(2106, '2022', '01', '29-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'anpham'),
(2107, '2022', '01', '30-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'anpham'),
(2108, '2022', '01', '31-01-2022', '0900084', 'P', 'kims intetrnational', 'ENT', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'anpham'),
(2109, '2022', '01', '1-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2110, '2022', '01', '2-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2111, '2022', '01', '3-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2112, '2022', '01', '4-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2113, '2022', '01', '5-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2114, '2022', '01', '6-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2115, '2022', '01', '7-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2116, '2022', '01', '8-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2117, '2022', '01', '9-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2118, '2022', '01', '10-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2119, '2022', '01', '11-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2120, '2022', '01', '12-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2121, '2022', '01', '13-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2122, '2022', '01', '14-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2123, '2022', '01', '15-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:01', '2022-08-17 07:21:01', 'testprevilage'),
(2124, '2022', '01', '16-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2125, '2022', '01', '17-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2126, '2022', '01', '18-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2127, '2022', '01', '19-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2128, '2022', '01', '20-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2129, '2022', '01', '21-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2130, '2022', '01', '22-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2131, '2022', '01', '23-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2132, '2022', '01', '24-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2133, '2022', '01', '25-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2134, '2022', '01', '26-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2135, '2022', '01', '27-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2136, '2022', '01', '28-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2137, '2022', '01', '29-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2138, '2022', '01', '30-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2139, '2022', '01', '31-01-2022', '0900085', 'P', 'kims intetrnational', 'Physical Medicine', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'testprevilage'),
(2140, '2022', '01', '1-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'dutnurse'),
(2141, '2022', '01', '2-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'dutnurse'),
(2142, '2022', '01', '3-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'dutnurse'),
(2143, '2022', '01', '4-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'dutnurse'),
(2144, '2022', '01', '5-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'dutnurse'),
(2145, '2022', '01', '6-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'dutnurse'),
(2146, '2022', '01', '7-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:02', '2022-08-17 07:21:02', 'dutnurse'),
(2147, '2022', '01', '8-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2148, '2022', '01', '9-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2149, '2022', '01', '10-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2150, '2022', '01', '11-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2151, '2022', '01', '12-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2152, '2022', '01', '13-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2153, '2022', '01', '14-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2154, '2022', '01', '15-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2155, '2022', '01', '16-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2156, '2022', '01', '17-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2157, '2022', '01', '18-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2158, '2022', '01', '19-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2159, '2022', '01', '20-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2160, '2022', '01', '21-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2161, '2022', '01', '22-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2162, '2022', '01', '23-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2163, '2022', '01', '24-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2164, '2022', '01', '25-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2165, '2022', '01', '26-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2166, '2022', '01', '27-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:03', '2022-08-17 07:21:03', 'dutnurse'),
(2167, '2022', '01', '28-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'dutnurse'),
(2168, '2022', '01', '29-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'dutnurse'),
(2169, '2022', '01', '30-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'dutnurse'),
(2170, '2022', '01', '31-01-2022', '0900086', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'dutnurse'),
(2171, '2022', '01', '1-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2172, '2022', '01', '2-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2173, '2022', '01', '3-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2174, '2022', '01', '4-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2175, '2022', '01', '5-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2176, '2022', '01', '6-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2177, '2022', '01', '7-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2178, '2022', '01', '8-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2179, '2022', '01', '9-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2180, '2022', '01', '10-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2181, '2022', '01', '11-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2182, '2022', '01', '12-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2183, '2022', '01', '13-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2184, '2022', '01', '14-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:04', '2022-08-17 07:21:04', 'SSS'),
(2185, '2022', '01', '15-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2186, '2022', '01', '16-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2187, '2022', '01', '17-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2188, '2022', '01', '18-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2189, '2022', '01', '19-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2190, '2022', '01', '20-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2191, '2022', '01', '21-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2192, '2022', '01', '22-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2193, '2022', '01', '23-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2194, '2022', '01', '24-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2195, '2022', '01', '25-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2196, '2022', '01', '26-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2197, '2022', '01', '27-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2198, '2022', '01', '28-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2199, '2022', '01', '29-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2200, '2022', '01', '30-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:05', '2022-08-17 07:21:05', 'SSS'),
(2201, '2022', '01', '31-01-2022', '0900087', 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', 'SSS'),
(2202, '2022', '01', '1-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2203, '2022', '01', '2-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2204, '2022', '01', '3-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2205, '2022', '01', '4-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2206, '2022', '01', '5-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2207, '2022', '01', '6-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2208, '2022', '01', '7-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2209, '2022', '01', '8-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2210, '2022', '01', '9-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2211, '2022', '01', '10-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2212, '2022', '01', '11-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2213, '2022', '01', '12-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2214, '2022', '01', '13-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2215, '2022', '01', '14-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2216, '2022', '01', '15-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:06', '2022-08-17 07:21:06', '5'),
(2217, '2022', '01', '16-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2218, '2022', '01', '17-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2219, '2022', '01', '18-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2220, '2022', '01', '19-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2221, '2022', '01', '20-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2222, '2022', '01', '21-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2223, '2022', '01', '22-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2224, '2022', '01', '23-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2225, '2022', '01', '24-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2226, '2022', '01', '25-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2227, '2022', '01', '26-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2228, '2022', '01', '27-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2229, '2022', '01', '28-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2230, '2022', '01', '29-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2231, '2022', '01', '30-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2232, '2022', '01', '31-01-2022', '0900088', 'P', 'kims intetrnational', 'Pharmacy Department', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', '5'),
(2233, '2022', '01', '1-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', 'aaa'),
(2234, '2022', '01', '2-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:07', '2022-08-17 07:21:07', 'aaa'),
(2235, '2022', '01', '3-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2236, '2022', '01', '4-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2237, '2022', '01', '5-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2238, '2022', '01', '6-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2239, '2022', '01', '7-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2240, '2022', '01', '8-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2241, '2022', '01', '9-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2242, '2022', '01', '10-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2243, '2022', '01', '11-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2244, '2022', '01', '12-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2245, '2022', '01', '13-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2246, '2022', '01', '14-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2247, '2022', '01', '15-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2248, '2022', '01', '16-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2249, '2022', '01', '17-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2250, '2022', '01', '18-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2251, '2022', '01', '19-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2252, '2022', '01', '20-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2253, '2022', '01', '21-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2254, '2022', '01', '22-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2255, '2022', '01', '23-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:08', '2022-08-17 07:21:08', 'aaa'),
(2256, '2022', '01', '24-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'aaa'),
(2257, '2022', '01', '25-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'aaa'),
(2258, '2022', '01', '26-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'aaa'),
(2259, '2022', '01', '27-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'aaa'),
(2260, '2022', '01', '28-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'aaa'),
(2261, '2022', '01', '29-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'aaa'),
(2262, '2022', '01', '30-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'aaa'),
(2263, '2022', '01', '31-01-2022', '0900089', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'aaa'),
(2264, '2022', '01', '1-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2265, '2022', '01', '2-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2266, '2022', '01', '3-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2267, '2022', '01', '4-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2268, '2022', '01', '5-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2269, '2022', '01', '6-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2270, '2022', '01', '7-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2271, '2022', '01', '8-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2272, '2022', '01', '9-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2273, '2022', '01', '10-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2274, '2022', '01', '11-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2275, '2022', '01', '12-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2276, '2022', '01', '13-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2277, '2022', '01', '14-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep'),
(2278, '2022', '01', '15-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:09', '2022-08-17 07:21:09', 'nursetestdep');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(2279, '2022', '01', '16-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:10', '2022-08-17 07:21:10', 'nursetestdep'),
(2280, '2022', '01', '17-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:10', '2022-08-17 07:21:10', 'nursetestdep'),
(2281, '2022', '01', '18-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:10', '2022-08-17 07:21:10', 'nursetestdep'),
(2282, '2022', '01', '19-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:11', '2022-08-17 07:21:11', 'nursetestdep'),
(2283, '2022', '01', '20-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:11', '2022-08-17 07:21:11', 'nursetestdep'),
(2284, '2022', '01', '21-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:11', '2022-08-17 07:21:11', 'nursetestdep'),
(2285, '2022', '01', '22-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:11', '2022-08-17 07:21:11', 'nursetestdep'),
(2286, '2022', '01', '23-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:11', '2022-08-17 07:21:11', 'nursetestdep'),
(2287, '2022', '01', '24-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'nursetestdep'),
(2288, '2022', '01', '25-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'nursetestdep'),
(2289, '2022', '01', '26-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'nursetestdep'),
(2290, '2022', '01', '27-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'nursetestdep'),
(2291, '2022', '01', '28-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'nursetestdep'),
(2292, '2022', '01', '29-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'nursetestdep'),
(2293, '2022', '01', '30-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'nursetestdep'),
(2294, '2022', '01', '31-01-2022', '0900090', 'P', 'kims intetrnational', 'Nursing Department', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'nursetestdep'),
(2295, '2022', '01', '1-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2296, '2022', '01', '2-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2297, '2022', '01', '3-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2298, '2022', '01', '4-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2299, '2022', '01', '5-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2300, '2022', '01', '6-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2301, '2022', '01', '7-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2302, '2022', '01', '8-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2303, '2022', '01', '9-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2304, '2022', '01', '10-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2305, '2022', '01', '11-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2306, '2022', '01', '12-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2307, '2022', '01', '13-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2308, '2022', '01', '14-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:12', '2022-08-17 07:21:12', 'cardiologyadmin'),
(2309, '2022', '01', '15-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2310, '2022', '01', '16-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2311, '2022', '01', '17-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2312, '2022', '01', '18-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2313, '2022', '01', '19-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2314, '2022', '01', '20-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2315, '2022', '01', '21-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2316, '2022', '01', '22-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2317, '2022', '01', '23-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2318, '2022', '01', '24-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2319, '2022', '01', '25-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2320, '2022', '01', '26-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2321, '2022', '01', '27-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2322, '2022', '01', '28-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2323, '2022', '01', '29-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2324, '2022', '01', '30-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2325, '2022', '01', '31-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologyadmin'),
(2326, '2022', '01', '1-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologydoctor'),
(2327, '2022', '01', '2-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologydoctor'),
(2328, '2022', '01', '3-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:13', '2022-08-17 07:21:13', 'cardiologydoctor'),
(2329, '2022', '01', '4-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2330, '2022', '01', '5-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2331, '2022', '01', '6-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2332, '2022', '01', '7-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2333, '2022', '01', '8-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2334, '2022', '01', '9-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2335, '2022', '01', '10-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2336, '2022', '01', '11-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2337, '2022', '01', '12-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2338, '2022', '01', '13-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2339, '2022', '01', '14-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2340, '2022', '01', '15-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2341, '2022', '01', '16-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2342, '2022', '01', '17-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2343, '2022', '01', '18-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2344, '2022', '01', '19-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2345, '2022', '01', '20-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2346, '2022', '01', '21-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2347, '2022', '01', '22-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2348, '2022', '01', '23-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:14', '2022-08-17 07:21:14', 'cardiologydoctor'),
(2349, '2022', '01', '24-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:15', '2022-08-17 07:21:15', 'cardiologydoctor'),
(2350, '2022', '01', '25-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:15', '2022-08-17 07:21:15', 'cardiologydoctor'),
(2351, '2022', '01', '26-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:15', '2022-08-17 07:21:15', 'cardiologydoctor'),
(2352, '2022', '01', '27-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:15', '2022-08-17 07:21:15', 'cardiologydoctor'),
(2353, '2022', '01', '28-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:15', '2022-08-17 07:21:15', 'cardiologydoctor'),
(2354, '2022', '01', '29-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:15', '2022-08-17 07:21:15', 'cardiologydoctor'),
(2355, '2022', '01', '30-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:15', '2022-08-17 07:21:15', 'cardiologydoctor'),
(2356, '2022', '01', '31-01-2022', '0900098', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:16', '2022-08-17 07:21:16', 'cardiologydoctor'),
(2357, '2022', '01', '1-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:16', '2022-08-17 07:21:16', 'card'),
(2358, '2022', '01', '2-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:16', '2022-08-17 07:21:16', 'card'),
(2359, '2022', '01', '3-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:16', '2022-08-17 07:21:16', 'card'),
(2360, '2022', '01', '4-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:16', '2022-08-17 07:21:16', 'card'),
(2361, '2022', '01', '5-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:16', '2022-08-17 07:21:16', 'card'),
(2362, '2022', '01', '6-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:16', '2022-08-17 07:21:16', 'card'),
(2363, '2022', '01', '7-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:16', '2022-08-17 07:21:16', 'card'),
(2364, '2022', '01', '8-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:17', '2022-08-17 07:21:17', 'card'),
(2365, '2022', '01', '9-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:17', '2022-08-17 07:21:17', 'card'),
(2366, '2022', '01', '10-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:17', '2022-08-17 07:21:17', 'card'),
(2367, '2022', '01', '11-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:17', '2022-08-17 07:21:17', 'card'),
(2368, '2022', '01', '12-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:17', '2022-08-17 07:21:17', 'card'),
(2369, '2022', '01', '13-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:17', '2022-08-17 07:21:17', 'card'),
(2370, '2022', '01', '14-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:17', '2022-08-17 07:21:17', 'card'),
(2371, '2022', '01', '15-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:18', '2022-08-17 07:21:18', 'card'),
(2372, '2022', '01', '16-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:18', '2022-08-17 07:21:18', 'card'),
(2373, '2022', '01', '17-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:18', '2022-08-17 07:21:18', 'card'),
(2374, '2022', '01', '18-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:18', '2022-08-17 07:21:18', 'card'),
(2375, '2022', '01', '19-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:18', '2022-08-17 07:21:18', 'card'),
(2376, '2022', '01', '20-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:18', '2022-08-17 07:21:18', 'card'),
(2377, '2022', '01', '21-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:18', '2022-08-17 07:21:18', 'card'),
(2378, '2022', '01', '22-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:18', '2022-08-17 07:21:18', 'card'),
(2379, '2022', '01', '23-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:19', '2022-08-17 07:21:19', 'card'),
(2380, '2022', '01', '24-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:19', '2022-08-17 07:21:19', 'card'),
(2381, '2022', '01', '25-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:19', '2022-08-17 07:21:19', 'card'),
(2382, '2022', '01', '26-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:19', '2022-08-17 07:21:19', 'card'),
(2383, '2022', '01', '27-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:19', '2022-08-17 07:21:19', 'card'),
(2384, '2022', '01', '28-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:19', '2022-08-17 07:21:19', 'card'),
(2385, '2022', '01', '29-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:20', '2022-08-17 07:21:20', 'card'),
(2386, '2022', '01', '30-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:20', '2022-08-17 07:21:20', 'card'),
(2387, '2022', '01', '31-01-2022', '0900099', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:20', '2022-08-17 07:21:20', 'card'),
(2388, '2022', '01', '1-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:20', '2022-08-17 07:21:20', 'depadmintest'),
(2389, '2022', '01', '2-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:20', '2022-08-17 07:21:20', 'depadmintest'),
(2390, '2022', '01', '3-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:21', '2022-08-17 07:21:21', 'depadmintest'),
(2391, '2022', '01', '4-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:21', '2022-08-17 07:21:21', 'depadmintest'),
(2392, '2022', '01', '5-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:21', '2022-08-17 07:21:21', 'depadmintest'),
(2393, '2022', '01', '6-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:21', '2022-08-17 07:21:21', 'depadmintest'),
(2394, '2022', '01', '7-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:21', '2022-08-17 07:21:21', 'depadmintest'),
(2395, '2022', '01', '8-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:22', '2022-08-17 07:21:22', 'depadmintest'),
(2396, '2022', '01', '9-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:22', '2022-08-17 07:21:22', 'depadmintest'),
(2397, '2022', '01', '10-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:22', '2022-08-17 07:21:22', 'depadmintest'),
(2398, '2022', '01', '11-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:22', '2022-08-17 07:21:22', 'depadmintest'),
(2399, '2022', '01', '12-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:22', '2022-08-17 07:21:22', 'depadmintest'),
(2400, '2022', '01', '13-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:23', '2022-08-17 07:21:23', 'depadmintest'),
(2401, '2022', '01', '14-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:23', '2022-08-17 07:21:23', 'depadmintest'),
(2402, '2022', '01', '15-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:23', '2022-08-17 07:21:23', 'depadmintest'),
(2403, '2022', '01', '16-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:23', '2022-08-17 07:21:23', 'depadmintest'),
(2404, '2022', '01', '17-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:23', '2022-08-17 07:21:23', 'depadmintest'),
(2405, '2022', '01', '18-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:23', '2022-08-17 07:21:23', 'depadmintest'),
(2406, '2022', '01', '19-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2407, '2022', '01', '20-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2408, '2022', '01', '21-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2409, '2022', '01', '22-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2410, '2022', '01', '23-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2411, '2022', '01', '24-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2412, '2022', '01', '25-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2413, '2022', '01', '26-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2414, '2022', '01', '27-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2415, '2022', '01', '28-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2416, '2022', '01', '29-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:24', '2022-08-17 07:21:24', 'depadmintest'),
(2417, '2022', '01', '30-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'depadmintest'),
(2418, '2022', '01', '31-01-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'depadmintest'),
(2419, '2022', '01', '1-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2420, '2022', '01', '2-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2421, '2022', '01', '3-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2422, '2022', '01', '4-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2423, '2022', '01', '5-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2424, '2022', '01', '6-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2425, '2022', '01', '7-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2426, '2022', '01', '8-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2427, '2022', '01', '9-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2428, '2022', '01', '10-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2429, '2022', '01', '11-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2430, '2022', '01', '12-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2431, '2022', '01', '13-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:25', '2022-08-17 07:21:25', 'cardftest'),
(2432, '2022', '01', '14-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2433, '2022', '01', '15-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2434, '2022', '01', '16-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2435, '2022', '01', '17-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2436, '2022', '01', '18-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2437, '2022', '01', '19-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2438, '2022', '01', '20-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2439, '2022', '01', '21-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2440, '2022', '01', '22-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2441, '2022', '01', '23-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2442, '2022', '01', '24-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2443, '2022', '01', '25-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2444, '2022', '01', '26-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:26', '2022-08-17 07:21:26', 'cardftest'),
(2445, '2022', '01', '27-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'cardftest'),
(2446, '2022', '01', '28-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'cardftest'),
(2447, '2022', '01', '29-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'cardftest'),
(2448, '2022', '01', '30-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'cardftest'),
(2449, '2022', '01', '31-01-2022', NULL, 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'cardftest'),
(2450, '2022', '01', '1-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2451, '2022', '01', '2-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2452, '2022', '01', '3-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2453, '2022', '01', '4-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2454, '2022', '01', '5-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2455, '2022', '01', '6-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2456, '2022', '01', '7-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2457, '2022', '01', '8-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2458, '2022', '01', '9-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2459, '2022', '01', '10-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2460, '2022', '01', '11-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:27', '2022-08-17 07:21:27', 'testorder'),
(2461, '2022', '01', '12-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2462, '2022', '01', '13-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2463, '2022', '01', '14-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2464, '2022', '01', '15-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2465, '2022', '01', '16-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2466, '2022', '01', '17-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2467, '2022', '01', '18-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2468, '2022', '01', '19-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2469, '2022', '01', '20-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2470, '2022', '01', '21-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2471, '2022', '01', '22-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2472, '2022', '01', '23-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2473, '2022', '01', '24-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2474, '2022', '01', '25-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2475, '2022', '01', '26-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2476, '2022', '01', '27-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2477, '2022', '01', '28-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2478, '2022', '01', '29-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:28', '2022-08-17 07:21:28', 'testorder'),
(2479, '2022', '01', '30-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 'testorder'),
(2480, '2022', '01', '31-01-2022', '0900102', 'P', 'kims intetrnational', 'cardiology', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 'testorder'),
(2481, '2022', '01', '1-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2482, '2022', '01', '2-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2483, '2022', '01', '3-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2484, '2022', '01', '4-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2485, '2022', '01', '5-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2486, '2022', '01', '6-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2487, '2022', '01', '7-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2488, '2022', '01', '8-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2489, '2022', '01', '9-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2490, '2022', '01', '10-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2491, '2022', '01', '11-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2492, '2022', '01', '12-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2493, '2022', '01', '13-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2494, '2022', '01', '14-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2495, '2022', '01', '15-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:29', '2022-08-17 07:21:29', 't'),
(2496, '2022', '01', '16-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2497, '2022', '01', '17-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2498, '2022', '01', '18-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2499, '2022', '01', '19-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2500, '2022', '01', '20-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2501, '2022', '01', '21-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2502, '2022', '01', '22-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2503, '2022', '01', '23-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2504, '2022', '01', '24-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2505, '2022', '01', '25-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2506, '2022', '01', '26-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2507, '2022', '01', '27-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2508, '2022', '01', '28-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:30', '2022-08-17 07:21:30', 't'),
(2509, '2022', '01', '29-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 't'),
(2510, '2022', '01', '30-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 't'),
(2511, '2022', '01', '31-01-2022', NULL, 'P', 'kims intetrnational', 'Paramedical Department', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 't'),
(2512, '2022', '01', '1-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 'vipin'),
(2513, '2022', '01', '2-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 'vipin'),
(2514, '2022', '01', '3-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 'vipin'),
(2515, '2022', '01', '4-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 'vipin'),
(2516, '2022', '01', '5-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 'vipin'),
(2517, '2022', '01', '6-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 'vipin'),
(2518, '2022', '01', '7-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 'vipin'),
(2519, '2022', '01', '8-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 'vipin'),
(2520, '2022', '01', '9-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:31', '2022-08-17 07:21:31', 'vipin'),
(2521, '2022', '01', '10-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2522, '2022', '01', '11-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2523, '2022', '01', '12-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2524, '2022', '01', '13-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2525, '2022', '01', '14-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2526, '2022', '01', '15-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2527, '2022', '01', '16-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2528, '2022', '01', '17-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2529, '2022', '01', '18-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2530, '2022', '01', '19-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2531, '2022', '01', '20-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2532, '2022', '01', '21-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2533, '2022', '01', '22-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2534, '2022', '01', '23-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2535, '2022', '01', '24-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2536, '2022', '01', '25-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:32', '2022-08-17 07:21:32', 'vipin'),
(2537, '2022', '01', '26-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:33', '2022-08-17 07:21:33', 'vipin'),
(2538, '2022', '01', '27-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:33', '2022-08-17 07:21:33', 'vipin'),
(2539, '2022', '01', '28-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:33', '2022-08-17 07:21:33', 'vipin'),
(2540, '2022', '01', '29-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:33', '2022-08-17 07:21:33', 'vipin'),
(2541, '2022', '01', '30-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:33', '2022-08-17 07:21:33', 'vipin'),
(2542, '2022', '01', '31-01-2022', '0904000010104', 'P', 'kims intetrnational', 'Medical Departments', NULL, '2022-08-17 07:21:33', '2022-08-17 07:21:33', 'vipin'),
(2543, '2022', '10', '1-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2544, '2022', '10', '2-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2545, '2022', '10', '3-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2546, '2022', '10', '4-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2547, '2022', '10', '5-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2548, '2022', '10', '6-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2549, '2022', '10', '7-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2550, '2022', '10', '8-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2551, '2022', '10', '9-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2552, '2022', '10', '10-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2553, '2022', '10', '11-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2554, '2022', '10', '12-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2555, '2022', '10', '13-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2556, '2022', '10', '14-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2557, '2022', '10', '15-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2558, '2022', '10', '16-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2559, '2022', '10', '17-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2560, '2022', '10', '18-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2561, '2022', '10', '19-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2562, '2022', '10', '20-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2563, '2022', '10', '21-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2564, '2022', '10', '22-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2565, '2022', '10', '23-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2566, '2022', '10', '24-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2567, '2022', '10', '25-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2568, '2022', '10', '26-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2569, '2022', '10', '27-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2570, '2022', '10', '28-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2571, '2022', '10', '29-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2572, '2022', '10', '30-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2573, '2022', '10', '31-10-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimshr'),
(2574, '2022', '10', '1-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2575, '2022', '10', '2-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2576, '2022', '10', '3-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2577, '2022', '10', '4-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2578, '2022', '10', '5-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2579, '2022', '10', '6-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2580, '2022', '10', '7-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2581, '2022', '10', '8-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2582, '2022', '10', '9-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2583, '2022', '10', '10-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2584, '2022', '10', '11-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2585, '2022', '10', '12-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2586, '2022', '10', '13-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2587, '2022', '10', '14-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2588, '2022', '10', '15-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2589, '2022', '10', '16-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2590, '2022', '10', '17-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2591, '2022', '10', '18-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2592, '2022', '10', '19-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2593, '2022', '10', '20-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2594, '2022', '10', '21-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2595, '2022', '10', '22-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2596, '2022', '10', '23-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2597, '2022', '10', '24-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2598, '2022', '10', '25-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2599, '2022', '10', '26-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2600, '2022', '10', '27-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:16', '2022-10-27 03:18:16', 'kimsdoctor'),
(2601, '2022', '10', '28-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor'),
(2602, '2022', '10', '29-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor'),
(2603, '2022', '10', '30-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor'),
(2604, '2022', '10', '31-10-2022', '0900038', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor'),
(2605, '2022', '10', '1-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2606, '2022', '10', '2-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2607, '2022', '10', '3-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2608, '2022', '10', '4-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2609, '2022', '10', '5-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2610, '2022', '10', '6-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(2611, '2022', '10', '7-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2612, '2022', '10', '8-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2613, '2022', '10', '9-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2614, '2022', '10', '10-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2615, '2022', '10', '11-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2616, '2022', '10', '12-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2617, '2022', '10', '13-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2618, '2022', '10', '14-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2619, '2022', '10', '15-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2620, '2022', '10', '16-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2621, '2022', '10', '17-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2622, '2022', '10', '18-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2623, '2022', '10', '19-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2624, '2022', '10', '20-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2625, '2022', '10', '21-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2626, '2022', '10', '22-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2627, '2022', '10', '23-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2628, '2022', '10', '24-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2629, '2022', '10', '25-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2630, '2022', '10', '26-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2631, '2022', '10', '27-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2632, '2022', '10', '28-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2633, '2022', '10', '29-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2634, '2022', '10', '30-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2635, '2022', '10', '31-10-2022', '0900039', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'teststaff'),
(2636, '2022', '10', '1-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2637, '2022', '10', '2-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2638, '2022', '10', '3-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2639, '2022', '10', '4-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2640, '2022', '10', '5-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2641, '2022', '10', '6-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2642, '2022', '10', '7-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2643, '2022', '10', '8-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2644, '2022', '10', '9-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2645, '2022', '10', '10-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2646, '2022', '10', '11-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2647, '2022', '10', '12-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2648, '2022', '10', '13-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2649, '2022', '10', '14-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2650, '2022', '10', '15-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2651, '2022', '10', '16-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2652, '2022', '10', '17-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2653, '2022', '10', '18-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2654, '2022', '10', '19-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2655, '2022', '10', '20-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2656, '2022', '10', '21-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2657, '2022', '10', '22-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2658, '2022', '10', '23-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2659, '2022', '10', '24-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2660, '2022', '10', '25-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2661, '2022', '10', '26-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2662, '2022', '10', '27-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2663, '2022', '10', '28-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2664, '2022', '10', '29-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2665, '2022', '10', '30-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2666, '2022', '10', '31-10-2022', '0900040', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsdoctor1'),
(2667, '2022', '10', '1-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2668, '2022', '10', '2-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2669, '2022', '10', '3-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2670, '2022', '10', '4-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2671, '2022', '10', '5-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2672, '2022', '10', '6-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2673, '2022', '10', '7-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2674, '2022', '10', '8-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2675, '2022', '10', '9-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2676, '2022', '10', '10-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2677, '2022', '10', '11-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2678, '2022', '10', '12-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2679, '2022', '10', '13-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2680, '2022', '10', '14-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2681, '2022', '10', '15-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2682, '2022', '10', '16-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2683, '2022', '10', '17-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2684, '2022', '10', '18-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2685, '2022', '10', '19-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2686, '2022', '10', '20-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2687, '2022', '10', '21-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2688, '2022', '10', '22-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2689, '2022', '10', '23-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2690, '2022', '10', '24-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2691, '2022', '10', '25-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2692, '2022', '10', '26-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2693, '2022', '10', '27-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2694, '2022', '10', '28-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2695, '2022', '10', '29-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2696, '2022', '10', '30-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2697, '2022', '10', '31-10-2022', '0900041', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'entdoctor'),
(2698, '2022', '10', '1-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2699, '2022', '10', '2-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2700, '2022', '10', '3-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2701, '2022', '10', '4-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2702, '2022', '10', '5-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2703, '2022', '10', '6-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2704, '2022', '10', '7-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2705, '2022', '10', '8-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2706, '2022', '10', '9-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2707, '2022', '10', '10-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2708, '2022', '10', '11-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2709, '2022', '10', '12-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2710, '2022', '10', '13-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2711, '2022', '10', '14-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2712, '2022', '10', '15-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2713, '2022', '10', '16-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2714, '2022', '10', '17-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2715, '2022', '10', '18-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2716, '2022', '10', '19-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2717, '2022', '10', '20-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2718, '2022', '10', '21-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2719, '2022', '10', '22-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2720, '2022', '10', '23-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2721, '2022', '10', '24-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2722, '2022', '10', '25-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2723, '2022', '10', '26-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2724, '2022', '10', '27-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2725, '2022', '10', '28-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2726, '2022', '10', '29-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2727, '2022', '10', '30-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2728, '2022', '10', '31-10-2022', '0900042', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'ent2doctor'),
(2729, '2022', '10', '1-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2730, '2022', '10', '2-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2731, '2022', '10', '3-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2732, '2022', '10', '4-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2733, '2022', '10', '5-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2734, '2022', '10', '6-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2735, '2022', '10', '7-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2736, '2022', '10', '8-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2737, '2022', '10', '9-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2738, '2022', '10', '10-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2739, '2022', '10', '11-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2740, '2022', '10', '12-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2741, '2022', '10', '13-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2742, '2022', '10', '14-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2743, '2022', '10', '15-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2744, '2022', '10', '16-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2745, '2022', '10', '17-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2746, '2022', '10', '18-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2747, '2022', '10', '19-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2748, '2022', '10', '20-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2749, '2022', '10', '21-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2750, '2022', '10', '22-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2751, '2022', '10', '23-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2752, '2022', '10', '24-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2753, '2022', '10', '25-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2754, '2022', '10', '26-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2755, '2022', '10', '27-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2756, '2022', '10', '28-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2757, '2022', '10', '29-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2758, '2022', '10', '30-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2759, '2022', '10', '31-10-2022', '0900043', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'radha'),
(2760, '2022', '10', '1-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2761, '2022', '10', '2-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2762, '2022', '10', '3-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2763, '2022', '10', '4-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2764, '2022', '10', '5-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2765, '2022', '10', '6-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2766, '2022', '10', '7-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2767, '2022', '10', '8-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2768, '2022', '10', '9-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2769, '2022', '10', '10-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2770, '2022', '10', '11-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2771, '2022', '10', '12-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2772, '2022', '10', '13-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2773, '2022', '10', '14-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2774, '2022', '10', '15-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2775, '2022', '10', '16-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2776, '2022', '10', '17-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2777, '2022', '10', '18-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2778, '2022', '10', '19-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2779, '2022', '10', '20-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2780, '2022', '10', '21-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2781, '2022', '10', '22-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2782, '2022', '10', '23-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2783, '2022', '10', '24-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2784, '2022', '10', '25-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2785, '2022', '10', '26-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2786, '2022', '10', '27-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2787, '2022', '10', '28-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2788, '2022', '10', '29-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2789, '2022', '10', '30-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2790, '2022', '10', '31-10-2022', '0900044', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimspharma'),
(2791, '2022', '10', '1-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2792, '2022', '10', '2-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2793, '2022', '10', '3-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2794, '2022', '10', '4-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2795, '2022', '10', '5-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2796, '2022', '10', '6-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2797, '2022', '10', '7-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2798, '2022', '10', '8-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2799, '2022', '10', '9-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2800, '2022', '10', '10-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2801, '2022', '10', '11-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2802, '2022', '10', '12-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2803, '2022', '10', '13-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2804, '2022', '10', '14-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2805, '2022', '10', '15-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2806, '2022', '10', '16-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2807, '2022', '10', '17-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2808, '2022', '10', '18-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2809, '2022', '10', '19-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2810, '2022', '10', '20-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2811, '2022', '10', '21-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2812, '2022', '10', '22-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2813, '2022', '10', '23-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2814, '2022', '10', '24-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2815, '2022', '10', '25-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2816, '2022', '10', '26-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2817, '2022', '10', '27-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2818, '2022', '10', '28-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2819, '2022', '10', '29-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2820, '2022', '10', '30-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2821, '2022', '10', '31-10-2022', '0900045', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsurodoctor'),
(2822, '2022', '10', '1-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2823, '2022', '10', '2-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2824, '2022', '10', '3-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2825, '2022', '10', '4-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2826, '2022', '10', '5-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2827, '2022', '10', '6-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2828, '2022', '10', '7-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2829, '2022', '10', '8-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2830, '2022', '10', '9-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2831, '2022', '10', '10-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2832, '2022', '10', '11-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2833, '2022', '10', '12-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2834, '2022', '10', '13-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2835, '2022', '10', '14-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2836, '2022', '10', '15-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2837, '2022', '10', '16-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2838, '2022', '10', '17-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2839, '2022', '10', '18-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2840, '2022', '10', '19-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2841, '2022', '10', '20-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2842, '2022', '10', '21-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2843, '2022', '10', '22-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2844, '2022', '10', '23-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2845, '2022', '10', '24-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2846, '2022', '10', '25-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2847, '2022', '10', '26-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2848, '2022', '10', '27-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2849, '2022', '10', '28-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2850, '2022', '10', '29-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2851, '2022', '10', '30-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2852, '2022', '10', '31-10-2022', '0900046', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsudoctor'),
(2853, '2022', '10', '1-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2854, '2022', '10', '2-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2855, '2022', '10', '3-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2856, '2022', '10', '4-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2857, '2022', '10', '5-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2858, '2022', '10', '6-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2859, '2022', '10', '7-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2860, '2022', '10', '8-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2861, '2022', '10', '9-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2862, '2022', '10', '10-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2863, '2022', '10', '11-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2864, '2022', '10', '12-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2865, '2022', '10', '13-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2866, '2022', '10', '14-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2867, '2022', '10', '15-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2868, '2022', '10', '16-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2869, '2022', '10', '17-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2870, '2022', '10', '18-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2871, '2022', '10', '19-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2872, '2022', '10', '20-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2873, '2022', '10', '21-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2874, '2022', '10', '22-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2875, '2022', '10', '23-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2876, '2022', '10', '24-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2877, '2022', '10', '25-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2878, '2022', '10', '26-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2879, '2022', '10', '27-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2880, '2022', '10', '28-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2881, '2022', '10', '29-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2882, '2022', '10', '30-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2883, '2022', '10', '31-10-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsadmin'),
(2884, '2022', '10', '1-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2885, '2022', '10', '2-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2886, '2022', '10', '3-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2887, '2022', '10', '4-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2888, '2022', '10', '5-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2889, '2022', '10', '6-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2890, '2022', '10', '7-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2891, '2022', '10', '8-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2892, '2022', '10', '9-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2893, '2022', '10', '10-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2894, '2022', '10', '11-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2895, '2022', '10', '12-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2896, '2022', '10', '13-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2897, '2022', '10', '14-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2898, '2022', '10', '15-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2899, '2022', '10', '16-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2900, '2022', '10', '17-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2901, '2022', '10', '18-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2902, '2022', '10', '19-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2903, '2022', '10', '20-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2904, '2022', '10', '21-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2905, '2022', '10', '22-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2906, '2022', '10', '23-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2907, '2022', '10', '24-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2908, '2022', '10', '25-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2909, '2022', '10', '26-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2910, '2022', '10', '27-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2911, '2022', '10', '28-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2912, '2022', '10', '29-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2913, '2022', '10', '30-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2914, '2022', '10', '31-10-2022', '0900048', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', '123'),
(2915, '2022', '10', '1-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2916, '2022', '10', '2-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2917, '2022', '10', '3-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2918, '2022', '10', '4-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2919, '2022', '10', '5-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2920, '2022', '10', '6-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2921, '2022', '10', '7-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2922, '2022', '10', '8-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2923, '2022', '10', '9-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2924, '2022', '10', '10-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2925, '2022', '10', '11-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2926, '2022', '10', '12-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2927, '2022', '10', '13-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2928, '2022', '10', '14-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2929, '2022', '10', '15-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2930, '2022', '10', '16-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2931, '2022', '10', '17-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2932, '2022', '10', '18-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2933, '2022', '10', '19-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2934, '2022', '10', '20-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2935, '2022', '10', '21-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2936, '2022', '10', '22-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2937, '2022', '10', '23-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2938, '2022', '10', '24-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2939, '2022', '10', '25-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2940, '2022', '10', '26-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2941, '2022', '10', '27-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2942, '2022', '10', '28-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2943, '2022', '10', '29-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2944, '2022', '10', '30-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2945, '2022', '10', '31-10-2022', '0900049', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'qwe'),
(2946, '2022', '10', '1-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2947, '2022', '10', '2-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2948, '2022', '10', '3-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2949, '2022', '10', '4-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2950, '2022', '10', '5-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2951, '2022', '10', '6-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2952, '2022', '10', '7-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2953, '2022', '10', '8-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2954, '2022', '10', '9-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2955, '2022', '10', '10-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2956, '2022', '10', '11-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2957, '2022', '10', '12-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2958, '2022', '10', '13-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2959, '2022', '10', '14-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2960, '2022', '10', '15-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(2961, '2022', '10', '16-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2962, '2022', '10', '17-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2963, '2022', '10', '18-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2964, '2022', '10', '19-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2965, '2022', '10', '20-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2966, '2022', '10', '21-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2967, '2022', '10', '22-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2968, '2022', '10', '23-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2969, '2022', '10', '24-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2970, '2022', '10', '25-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2971, '2022', '10', '26-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2972, '2022', '10', '27-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2973, '2022', '10', '28-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2974, '2022', '10', '29-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2975, '2022', '10', '30-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2976, '2022', '10', '31-10-2022', '0900050', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsentdoctor'),
(2977, '2022', '10', '1-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2978, '2022', '10', '2-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2979, '2022', '10', '3-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2980, '2022', '10', '4-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2981, '2022', '10', '5-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2982, '2022', '10', '6-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2983, '2022', '10', '7-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2984, '2022', '10', '8-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2985, '2022', '10', '9-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2986, '2022', '10', '10-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2987, '2022', '10', '11-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2988, '2022', '10', '12-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2989, '2022', '10', '13-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2990, '2022', '10', '14-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2991, '2022', '10', '15-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2992, '2022', '10', '16-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2993, '2022', '10', '17-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2994, '2022', '10', '18-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2995, '2022', '10', '19-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2996, '2022', '10', '20-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2997, '2022', '10', '21-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2998, '2022', '10', '22-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(2999, '2022', '10', '23-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(3000, '2022', '10', '24-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(3001, '2022', '10', '25-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(3002, '2022', '10', '26-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(3003, '2022', '10', '27-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(3004, '2022', '10', '28-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(3005, '2022', '10', '29-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(3006, '2022', '10', '30-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(3007, '2022', '10', '31-10-2022', '0900051', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsent1doctor'),
(3008, '2022', '10', '1-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3009, '2022', '10', '2-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3010, '2022', '10', '3-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3011, '2022', '10', '4-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3012, '2022', '10', '5-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3013, '2022', '10', '6-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3014, '2022', '10', '7-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3015, '2022', '10', '8-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3016, '2022', '10', '9-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3017, '2022', '10', '10-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3018, '2022', '10', '11-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3019, '2022', '10', '12-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3020, '2022', '10', '13-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3021, '2022', '10', '14-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3022, '2022', '10', '15-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3023, '2022', '10', '16-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3024, '2022', '10', '17-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3025, '2022', '10', '18-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3026, '2022', '10', '19-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3027, '2022', '10', '20-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3028, '2022', '10', '21-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3029, '2022', '10', '22-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3030, '2022', '10', '23-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3031, '2022', '10', '24-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3032, '2022', '10', '25-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3033, '2022', '10', '26-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3034, '2022', '10', '27-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3035, '2022', '10', '28-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3036, '2022', '10', '29-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3037, '2022', '10', '30-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3038, '2022', '10', '31-10-2022', '0900052', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimscounter'),
(3039, '2022', '10', '1-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3040, '2022', '10', '2-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3041, '2022', '10', '3-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3042, '2022', '10', '4-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3043, '2022', '10', '5-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3044, '2022', '10', '6-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3045, '2022', '10', '7-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3046, '2022', '10', '8-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3047, '2022', '10', '9-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3048, '2022', '10', '10-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3049, '2022', '10', '11-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3050, '2022', '10', '12-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3051, '2022', '10', '13-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3052, '2022', '10', '14-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3053, '2022', '10', '15-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3054, '2022', '10', '16-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3055, '2022', '10', '17-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3056, '2022', '10', '18-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3057, '2022', '10', '19-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3058, '2022', '10', '20-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3059, '2022', '10', '21-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3060, '2022', '10', '22-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3061, '2022', '10', '23-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3062, '2022', '10', '24-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3063, '2022', '10', '25-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3064, '2022', '10', '26-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3065, '2022', '10', '27-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3066, '2022', '10', '28-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3067, '2022', '10', '29-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3068, '2022', '10', '30-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3069, '2022', '10', '31-10-2022', '0900053', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'salarytest'),
(3070, '2022', '10', '1-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3071, '2022', '10', '2-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3072, '2022', '10', '3-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3073, '2022', '10', '4-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3074, '2022', '10', '5-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3075, '2022', '10', '6-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3076, '2022', '10', '7-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3077, '2022', '10', '8-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3078, '2022', '10', '9-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3079, '2022', '10', '10-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3080, '2022', '10', '11-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3081, '2022', '10', '12-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3082, '2022', '10', '13-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3083, '2022', '10', '14-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3084, '2022', '10', '15-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3085, '2022', '10', '16-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3086, '2022', '10', '17-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3087, '2022', '10', '18-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3088, '2022', '10', '19-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3089, '2022', '10', '20-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3090, '2022', '10', '21-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3091, '2022', '10', '22-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3092, '2022', '10', '23-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3093, '2022', '10', '24-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3094, '2022', '10', '25-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3095, '2022', '10', '26-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3096, '2022', '10', '27-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3097, '2022', '10', '28-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3098, '2022', '10', '29-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3099, '2022', '10', '30-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3100, '2022', '10', '31-10-2022', '0900054', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'example'),
(3101, '2022', '10', '1-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3102, '2022', '10', '2-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3103, '2022', '10', '3-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3104, '2022', '10', '4-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3105, '2022', '10', '5-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3106, '2022', '10', '6-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3107, '2022', '10', '7-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3108, '2022', '10', '8-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3109, '2022', '10', '9-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3110, '2022', '10', '10-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3111, '2022', '10', '11-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3112, '2022', '10', '12-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3113, '2022', '10', '13-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3114, '2022', '10', '14-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3115, '2022', '10', '15-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3116, '2022', '10', '16-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3117, '2022', '10', '17-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3118, '2022', '10', '18-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3119, '2022', '10', '19-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3120, '2022', '10', '20-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3121, '2022', '10', '21-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3122, '2022', '10', '22-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3123, '2022', '10', '23-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3124, '2022', '10', '24-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3125, '2022', '10', '25-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3126, '2022', '10', '26-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3127, '2022', '10', '27-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3128, '2022', '10', '28-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3129, '2022', '10', '29-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3130, '2022', '10', '30-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3131, '2022', '10', '31-10-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'kimsstore'),
(3132, '2022', '10', '1-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3133, '2022', '10', '2-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3134, '2022', '10', '3-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3135, '2022', '10', '4-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3136, '2022', '10', '5-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3137, '2022', '10', '6-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3138, '2022', '10', '7-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3139, '2022', '10', '8-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3140, '2022', '10', '9-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3141, '2022', '10', '10-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3142, '2022', '10', '11-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3143, '2022', '10', '12-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3144, '2022', '10', '13-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3145, '2022', '10', '14-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3146, '2022', '10', '15-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3147, '2022', '10', '16-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3148, '2022', '10', '17-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3149, '2022', '10', '18-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3150, '2022', '10', '19-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3151, '2022', '10', '20-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3152, '2022', '10', '21-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3153, '2022', '10', '22-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:17', '2022-10-27 03:18:17', 'casuality'),
(3154, '2022', '10', '23-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'casuality'),
(3155, '2022', '10', '24-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'casuality'),
(3156, '2022', '10', '25-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'casuality'),
(3157, '2022', '10', '26-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'casuality'),
(3158, '2022', '10', '27-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'casuality'),
(3159, '2022', '10', '28-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'casuality'),
(3160, '2022', '10', '29-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'casuality'),
(3161, '2022', '10', '30-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'casuality'),
(3162, '2022', '10', '31-10-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'casuality'),
(3163, '2022', '10', '1-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3164, '2022', '10', '2-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3165, '2022', '10', '3-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3166, '2022', '10', '4-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3167, '2022', '10', '5-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3168, '2022', '10', '6-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3169, '2022', '10', '7-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3170, '2022', '10', '8-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3171, '2022', '10', '9-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3172, '2022', '10', '10-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3173, '2022', '10', '11-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3174, '2022', '10', '12-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3175, '2022', '10', '13-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3176, '2022', '10', '14-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3177, '2022', '10', '15-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3178, '2022', '10', '16-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3179, '2022', '10', '17-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3180, '2022', '10', '18-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3181, '2022', '10', '19-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3182, '2022', '10', '20-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3183, '2022', '10', '21-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3184, '2022', '10', '22-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3185, '2022', '10', '23-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3186, '2022', '10', '24-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3187, '2022', '10', '25-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3188, '2022', '10', '26-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3189, '2022', '10', '27-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3190, '2022', '10', '28-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3191, '2022', '10', '29-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3192, '2022', '10', '30-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3193, '2022', '10', '31-10-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nurse'),
(3194, '2022', '10', '1-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3195, '2022', '10', '2-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3196, '2022', '10', '3-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3197, '2022', '10', '4-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3198, '2022', '10', '5-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3199, '2022', '10', '6-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3200, '2022', '10', '7-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3201, '2022', '10', '8-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3202, '2022', '10', '9-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3203, '2022', '10', '10-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3204, '2022', '10', '11-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3205, '2022', '10', '12-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3206, '2022', '10', '13-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3207, '2022', '10', '14-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3208, '2022', '10', '15-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3209, '2022', '10', '16-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3210, '2022', '10', '17-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3211, '2022', '10', '18-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3212, '2022', '10', '19-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3213, '2022', '10', '20-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3214, '2022', '10', '21-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3215, '2022', '10', '22-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3216, '2022', '10', '23-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3217, '2022', '10', '24-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3218, '2022', '10', '25-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3219, '2022', '10', '26-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3220, '2022', '10', '27-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3221, '2022', '10', '28-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3222, '2022', '10', '29-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3223, '2022', '10', '30-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3224, '2022', '10', '31-10-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'hospitaladmin'),
(3225, '2022', '10', '1-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3226, '2022', '10', '2-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3227, '2022', '10', '3-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3228, '2022', '10', '4-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3229, '2022', '10', '5-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3230, '2022', '10', '6-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3231, '2022', '10', '7-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3232, '2022', '10', '8-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3233, '2022', '10', '9-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3234, '2022', '10', '10-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3235, '2022', '10', '11-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3236, '2022', '10', '12-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3237, '2022', '10', '13-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3238, '2022', '10', '14-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3239, '2022', '10', '15-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3240, '2022', '10', '16-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3241, '2022', '10', '17-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3242, '2022', '10', '18-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3243, '2022', '10', '19-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3244, '2022', '10', '20-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3245, '2022', '10', '21-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3246, '2022', '10', '22-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3247, '2022', '10', '23-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3248, '2022', '10', '24-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3249, '2022', '10', '25-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3250, '2022', '10', '26-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3251, '2022', '10', '27-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3252, '2022', '10', '28-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3253, '2022', '10', '29-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3254, '2022', '10', '30-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3255, '2022', '10', '31-10-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'Dep Admin'),
(3256, '2022', '10', '1-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3257, '2022', '10', '2-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3258, '2022', '10', '3-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3259, '2022', '10', '4-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3260, '2022', '10', '5-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3261, '2022', '10', '6-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3262, '2022', '10', '7-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3263, '2022', '10', '8-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3264, '2022', '10', '9-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3265, '2022', '10', '10-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3266, '2022', '10', '11-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3267, '2022', '10', '12-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3268, '2022', '10', '13-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3269, '2022', '10', '14-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3270, '2022', '10', '15-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3271, '2022', '10', '16-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3272, '2022', '10', '17-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3273, '2022', '10', '18-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3274, '2022', '10', '19-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3275, '2022', '10', '20-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3276, '2022', '10', '21-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3277, '2022', '10', '22-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3278, '2022', '10', '23-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3279, '2022', '10', '24-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3280, '2022', '10', '25-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3281, '2022', '10', '26-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3282, '2022', '10', '27-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3283, '2022', '10', '28-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3284, '2022', '10', '29-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3285, '2022', '10', '30-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3286, '2022', '10', '31-10-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entadmin'),
(3287, '2022', '10', '1-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3288, '2022', '10', '2-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3289, '2022', '10', '3-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3290, '2022', '10', '4-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3291, '2022', '10', '5-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3292, '2022', '10', '6-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3293, '2022', '10', '7-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3294, '2022', '10', '8-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3295, '2022', '10', '9-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3296, '2022', '10', '10-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3297, '2022', '10', '11-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3298, '2022', '10', '12-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3299, '2022', '10', '13-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3300, '2022', '10', '14-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3301, '2022', '10', '15-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3302, '2022', '10', '16-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3303, '2022', '10', '17-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3304, '2022', '10', '18-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3305, '2022', '10', '19-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3306, '2022', '10', '20-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3307, '2022', '10', '21-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(3308, '2022', '10', '22-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3309, '2022', '10', '23-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3310, '2022', '10', '24-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3311, '2022', '10', '25-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3312, '2022', '10', '26-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3313, '2022', '10', '27-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3314, '2022', '10', '28-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3315, '2022', '10', '29-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3316, '2022', '10', '30-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3317, '2022', '10', '31-10-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'entnurse'),
(3318, '2022', '10', '1-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3319, '2022', '10', '2-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3320, '2022', '10', '3-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3321, '2022', '10', '4-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3322, '2022', '10', '5-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3323, '2022', '10', '6-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3324, '2022', '10', '7-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3325, '2022', '10', '8-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3326, '2022', '10', '9-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3327, '2022', '10', '10-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3328, '2022', '10', '11-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3329, '2022', '10', '12-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3330, '2022', '10', '13-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3331, '2022', '10', '14-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3332, '2022', '10', '15-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3333, '2022', '10', '16-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3334, '2022', '10', '17-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3335, '2022', '10', '18-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3336, '2022', '10', '19-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3337, '2022', '10', '20-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3338, '2022', '10', '21-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3339, '2022', '10', '22-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3340, '2022', '10', '23-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3341, '2022', '10', '24-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3342, '2022', '10', '25-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3343, '2022', '10', '26-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3344, '2022', '10', '27-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3345, '2022', '10', '28-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3346, '2022', '10', '29-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3347, '2022', '10', '30-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3348, '2022', '10', '31-10-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'ent lab'),
(3349, '2022', '10', '1-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3350, '2022', '10', '2-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3351, '2022', '10', '3-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3352, '2022', '10', '4-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3353, '2022', '10', '5-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3354, '2022', '10', '6-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3355, '2022', '10', '7-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3356, '2022', '10', '8-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3357, '2022', '10', '9-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3358, '2022', '10', '10-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3359, '2022', '10', '11-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3360, '2022', '10', '12-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3361, '2022', '10', '13-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3362, '2022', '10', '14-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3363, '2022', '10', '15-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3364, '2022', '10', '16-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3365, '2022', '10', '17-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3366, '2022', '10', '18-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3367, '2022', '10', '19-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3368, '2022', '10', '20-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3369, '2022', '10', '21-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3370, '2022', '10', '22-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3371, '2022', '10', '23-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3372, '2022', '10', '24-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3373, '2022', '10', '25-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3374, '2022', '10', '26-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3375, '2022', '10', '27-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3376, '2022', '10', '28-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3377, '2022', '10', '29-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3378, '2022', '10', '30-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3379, '2022', '10', '31-10-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'anpham'),
(3380, '2022', '10', '1-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3381, '2022', '10', '2-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3382, '2022', '10', '3-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3383, '2022', '10', '4-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3384, '2022', '10', '5-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3385, '2022', '10', '6-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3386, '2022', '10', '7-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3387, '2022', '10', '8-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3388, '2022', '10', '9-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3389, '2022', '10', '10-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3390, '2022', '10', '11-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3391, '2022', '10', '12-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3392, '2022', '10', '13-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3393, '2022', '10', '14-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3394, '2022', '10', '15-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3395, '2022', '10', '16-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3396, '2022', '10', '17-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3397, '2022', '10', '18-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3398, '2022', '10', '19-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3399, '2022', '10', '20-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3400, '2022', '10', '21-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3401, '2022', '10', '22-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3402, '2022', '10', '23-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3403, '2022', '10', '24-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3404, '2022', '10', '25-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3405, '2022', '10', '26-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3406, '2022', '10', '27-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3407, '2022', '10', '28-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3408, '2022', '10', '29-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3409, '2022', '10', '30-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3410, '2022', '10', '31-10-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'testprevilage'),
(3411, '2022', '10', '1-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3412, '2022', '10', '2-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3413, '2022', '10', '3-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3414, '2022', '10', '4-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3415, '2022', '10', '5-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3416, '2022', '10', '6-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3417, '2022', '10', '7-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3418, '2022', '10', '8-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3419, '2022', '10', '9-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3420, '2022', '10', '10-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3421, '2022', '10', '11-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3422, '2022', '10', '12-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3423, '2022', '10', '13-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3424, '2022', '10', '14-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3425, '2022', '10', '15-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3426, '2022', '10', '16-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3427, '2022', '10', '17-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3428, '2022', '10', '18-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3429, '2022', '10', '19-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3430, '2022', '10', '20-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3431, '2022', '10', '21-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3432, '2022', '10', '22-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3433, '2022', '10', '23-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3434, '2022', '10', '24-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3435, '2022', '10', '25-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3436, '2022', '10', '26-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3437, '2022', '10', '27-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3438, '2022', '10', '28-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3439, '2022', '10', '29-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3440, '2022', '10', '30-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3441, '2022', '10', '31-10-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'dutnurse'),
(3442, '2022', '10', '1-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3443, '2022', '10', '2-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3444, '2022', '10', '3-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3445, '2022', '10', '4-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3446, '2022', '10', '5-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3447, '2022', '10', '6-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3448, '2022', '10', '7-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3449, '2022', '10', '8-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3450, '2022', '10', '9-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3451, '2022', '10', '10-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3452, '2022', '10', '11-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3453, '2022', '10', '12-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3454, '2022', '10', '13-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3455, '2022', '10', '14-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3456, '2022', '10', '15-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3457, '2022', '10', '16-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3458, '2022', '10', '17-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3459, '2022', '10', '18-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3460, '2022', '10', '19-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3461, '2022', '10', '20-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3462, '2022', '10', '21-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3463, '2022', '10', '22-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3464, '2022', '10', '23-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3465, '2022', '10', '24-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3466, '2022', '10', '25-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3467, '2022', '10', '26-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3468, '2022', '10', '27-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3469, '2022', '10', '28-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3470, '2022', '10', '29-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3471, '2022', '10', '30-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3472, '2022', '10', '31-10-2022', '0900087', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'SSS'),
(3473, '2022', '10', '1-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3474, '2022', '10', '2-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3475, '2022', '10', '3-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3476, '2022', '10', '4-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3477, '2022', '10', '5-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3478, '2022', '10', '6-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3479, '2022', '10', '7-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3480, '2022', '10', '8-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3481, '2022', '10', '9-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3482, '2022', '10', '10-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3483, '2022', '10', '11-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3484, '2022', '10', '12-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3485, '2022', '10', '13-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3486, '2022', '10', '14-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3487, '2022', '10', '15-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3488, '2022', '10', '16-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3489, '2022', '10', '17-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3490, '2022', '10', '18-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3491, '2022', '10', '19-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3492, '2022', '10', '20-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3493, '2022', '10', '21-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3494, '2022', '10', '22-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3495, '2022', '10', '23-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3496, '2022', '10', '24-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3497, '2022', '10', '25-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3498, '2022', '10', '26-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3499, '2022', '10', '27-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3500, '2022', '10', '28-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3501, '2022', '10', '29-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3502, '2022', '10', '30-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3503, '2022', '10', '31-10-2022', '0900088', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', '5'),
(3504, '2022', '10', '1-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3505, '2022', '10', '2-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3506, '2022', '10', '3-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3507, '2022', '10', '4-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3508, '2022', '10', '5-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3509, '2022', '10', '6-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3510, '2022', '10', '7-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3511, '2022', '10', '8-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3512, '2022', '10', '9-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3513, '2022', '10', '10-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3514, '2022', '10', '11-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3515, '2022', '10', '12-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3516, '2022', '10', '13-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3517, '2022', '10', '14-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3518, '2022', '10', '15-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3519, '2022', '10', '16-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3520, '2022', '10', '17-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3521, '2022', '10', '18-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3522, '2022', '10', '19-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3523, '2022', '10', '20-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3524, '2022', '10', '21-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3525, '2022', '10', '22-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3526, '2022', '10', '23-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3527, '2022', '10', '24-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3528, '2022', '10', '25-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3529, '2022', '10', '26-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3530, '2022', '10', '27-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3531, '2022', '10', '28-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3532, '2022', '10', '29-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3533, '2022', '10', '30-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3534, '2022', '10', '31-10-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'aaa'),
(3535, '2022', '10', '1-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3536, '2022', '10', '2-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3537, '2022', '10', '3-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3538, '2022', '10', '4-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3539, '2022', '10', '5-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3540, '2022', '10', '6-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3541, '2022', '10', '7-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3542, '2022', '10', '8-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3543, '2022', '10', '9-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3544, '2022', '10', '10-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3545, '2022', '10', '11-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3546, '2022', '10', '12-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3547, '2022', '10', '13-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3548, '2022', '10', '14-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3549, '2022', '10', '15-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3550, '2022', '10', '16-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3551, '2022', '10', '17-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3552, '2022', '10', '18-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3553, '2022', '10', '19-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3554, '2022', '10', '20-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3555, '2022', '10', '21-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3556, '2022', '10', '22-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3557, '2022', '10', '23-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3558, '2022', '10', '24-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3559, '2022', '10', '25-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3560, '2022', '10', '26-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3561, '2022', '10', '27-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3562, '2022', '10', '28-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3563, '2022', '10', '29-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3564, '2022', '10', '30-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3565, '2022', '10', '31-10-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'nursetestdep'),
(3566, '2022', '10', '1-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3567, '2022', '10', '2-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3568, '2022', '10', '3-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3569, '2022', '10', '4-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3570, '2022', '10', '5-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3571, '2022', '10', '6-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3572, '2022', '10', '7-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3573, '2022', '10', '8-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3574, '2022', '10', '9-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3575, '2022', '10', '10-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3576, '2022', '10', '11-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3577, '2022', '10', '12-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3578, '2022', '10', '13-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3579, '2022', '10', '14-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3580, '2022', '10', '15-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3581, '2022', '10', '16-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3582, '2022', '10', '17-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3583, '2022', '10', '18-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3584, '2022', '10', '19-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3585, '2022', '10', '20-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3586, '2022', '10', '21-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3587, '2022', '10', '22-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3588, '2022', '10', '23-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3589, '2022', '10', '24-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3590, '2022', '10', '25-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3591, '2022', '10', '26-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3592, '2022', '10', '27-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3593, '2022', '10', '28-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3594, '2022', '10', '29-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3595, '2022', '10', '30-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3596, '2022', '10', '31-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologyadmin'),
(3597, '2022', '10', '1-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3598, '2022', '10', '2-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3599, '2022', '10', '3-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3600, '2022', '10', '4-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3601, '2022', '10', '5-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3602, '2022', '10', '6-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3603, '2022', '10', '7-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3604, '2022', '10', '8-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3605, '2022', '10', '9-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3606, '2022', '10', '10-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3607, '2022', '10', '11-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3608, '2022', '10', '12-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3609, '2022', '10', '13-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3610, '2022', '10', '14-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3611, '2022', '10', '15-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3612, '2022', '10', '16-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3613, '2022', '10', '17-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3614, '2022', '10', '18-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3615, '2022', '10', '19-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3616, '2022', '10', '20-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3617, '2022', '10', '21-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3618, '2022', '10', '22-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3619, '2022', '10', '23-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3620, '2022', '10', '24-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3621, '2022', '10', '25-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3622, '2022', '10', '26-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3623, '2022', '10', '27-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3624, '2022', '10', '28-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3625, '2022', '10', '29-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3626, '2022', '10', '30-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3627, '2022', '10', '31-10-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardiologydoctor'),
(3628, '2022', '10', '1-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3629, '2022', '10', '2-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3630, '2022', '10', '3-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3631, '2022', '10', '4-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3632, '2022', '10', '5-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3633, '2022', '10', '6-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3634, '2022', '10', '7-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3635, '2022', '10', '8-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3636, '2022', '10', '9-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3637, '2022', '10', '10-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3638, '2022', '10', '11-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3639, '2022', '10', '12-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3640, '2022', '10', '13-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3641, '2022', '10', '14-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3642, '2022', '10', '15-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3643, '2022', '10', '16-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3644, '2022', '10', '17-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3645, '2022', '10', '18-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3646, '2022', '10', '19-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3647, '2022', '10', '20-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3648, '2022', '10', '21-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3649, '2022', '10', '22-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3650, '2022', '10', '23-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3651, '2022', '10', '24-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3652, '2022', '10', '25-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3653, '2022', '10', '26-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3654, '2022', '10', '27-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3655, '2022', '10', '28-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3656, '2022', '10', '29-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3657, '2022', '10', '30-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3658, '2022', '10', '31-10-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'card'),
(3659, '2022', '10', '1-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(3660, '2022', '10', '2-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3661, '2022', '10', '3-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3662, '2022', '10', '4-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3663, '2022', '10', '5-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3664, '2022', '10', '6-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3665, '2022', '10', '7-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3666, '2022', '10', '8-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3667, '2022', '10', '9-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3668, '2022', '10', '10-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3669, '2022', '10', '11-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3670, '2022', '10', '12-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3671, '2022', '10', '13-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3672, '2022', '10', '14-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3673, '2022', '10', '15-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3674, '2022', '10', '16-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3675, '2022', '10', '17-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3676, '2022', '10', '18-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3677, '2022', '10', '19-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3678, '2022', '10', '20-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3679, '2022', '10', '21-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3680, '2022', '10', '22-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3681, '2022', '10', '23-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3682, '2022', '10', '24-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3683, '2022', '10', '25-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3684, '2022', '10', '26-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3685, '2022', '10', '27-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3686, '2022', '10', '28-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3687, '2022', '10', '29-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3688, '2022', '10', '30-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3689, '2022', '10', '31-10-2022', NULL, 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'depadmintest'),
(3690, '2022', '10', '1-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3691, '2022', '10', '2-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3692, '2022', '10', '3-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3693, '2022', '10', '4-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3694, '2022', '10', '5-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3695, '2022', '10', '6-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3696, '2022', '10', '7-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3697, '2022', '10', '8-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3698, '2022', '10', '9-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3699, '2022', '10', '10-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3700, '2022', '10', '11-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3701, '2022', '10', '12-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3702, '2022', '10', '13-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3703, '2022', '10', '14-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3704, '2022', '10', '15-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3705, '2022', '10', '16-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3706, '2022', '10', '17-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:18', '2022-10-27 03:18:18', 'cardftest'),
(3707, '2022', '10', '18-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3708, '2022', '10', '19-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3709, '2022', '10', '20-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3710, '2022', '10', '21-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3711, '2022', '10', '22-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3712, '2022', '10', '23-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3713, '2022', '10', '24-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3714, '2022', '10', '25-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3715, '2022', '10', '26-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3716, '2022', '10', '27-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3717, '2022', '10', '28-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3718, '2022', '10', '29-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3719, '2022', '10', '30-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3720, '2022', '10', '31-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'cardftest'),
(3721, '2022', '10', '1-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3722, '2022', '10', '2-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3723, '2022', '10', '3-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3724, '2022', '10', '4-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3725, '2022', '10', '5-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3726, '2022', '10', '6-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3727, '2022', '10', '7-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3728, '2022', '10', '8-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3729, '2022', '10', '9-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3730, '2022', '10', '10-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3731, '2022', '10', '11-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3732, '2022', '10', '12-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3733, '2022', '10', '13-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3734, '2022', '10', '14-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3735, '2022', '10', '15-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3736, '2022', '10', '16-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3737, '2022', '10', '17-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3738, '2022', '10', '18-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3739, '2022', '10', '19-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3740, '2022', '10', '20-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3741, '2022', '10', '21-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3742, '2022', '10', '22-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3743, '2022', '10', '23-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3744, '2022', '10', '24-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3745, '2022', '10', '25-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3746, '2022', '10', '26-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3747, '2022', '10', '27-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3748, '2022', '10', '28-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3749, '2022', '10', '29-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3750, '2022', '10', '30-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3751, '2022', '10', '31-10-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'testorder'),
(3752, '2022', '10', '1-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3753, '2022', '10', '2-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3754, '2022', '10', '3-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3755, '2022', '10', '4-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3756, '2022', '10', '5-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3757, '2022', '10', '6-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3758, '2022', '10', '7-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3759, '2022', '10', '8-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3760, '2022', '10', '9-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3761, '2022', '10', '10-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3762, '2022', '10', '11-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3763, '2022', '10', '12-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3764, '2022', '10', '13-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3765, '2022', '10', '14-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3766, '2022', '10', '15-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3767, '2022', '10', '16-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3768, '2022', '10', '17-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3769, '2022', '10', '18-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3770, '2022', '10', '19-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3771, '2022', '10', '20-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3772, '2022', '10', '21-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3773, '2022', '10', '22-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3774, '2022', '10', '23-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3775, '2022', '10', '24-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3776, '2022', '10', '25-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3777, '2022', '10', '26-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3778, '2022', '10', '27-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3779, '2022', '10', '28-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3780, '2022', '10', '29-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3781, '2022', '10', '30-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3782, '2022', '10', '31-10-2022', NULL, 'P', 'kims intetrnational', '0', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 't'),
(3783, '2022', '10', '1-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3784, '2022', '10', '2-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3785, '2022', '10', '3-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3786, '2022', '10', '4-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3787, '2022', '10', '5-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3788, '2022', '10', '6-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3789, '2022', '10', '7-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3790, '2022', '10', '8-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3791, '2022', '10', '9-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3792, '2022', '10', '10-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3793, '2022', '10', '11-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3794, '2022', '10', '12-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3795, '2022', '10', '13-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3796, '2022', '10', '14-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3797, '2022', '10', '15-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3798, '2022', '10', '16-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3799, '2022', '10', '17-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3800, '2022', '10', '18-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3801, '2022', '10', '19-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3802, '2022', '10', '20-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3803, '2022', '10', '21-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3804, '2022', '10', '22-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3805, '2022', '10', '23-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3806, '2022', '10', '24-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3807, '2022', '10', '25-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3808, '2022', '10', '26-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3809, '2022', '10', '27-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3810, '2022', '10', '28-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3811, '2022', '10', '29-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3812, '2022', '10', '30-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3813, '2022', '10', '31-10-2022', '0904000010104', 'P', 'kims intetrnational', '36', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'vipin'),
(3814, '2022', '10', '1-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3815, '2022', '10', '2-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3816, '2022', '10', '3-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3817, '2022', '10', '4-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3818, '2022', '10', '5-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3819, '2022', '10', '6-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3820, '2022', '10', '7-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3821, '2022', '10', '8-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3822, '2022', '10', '9-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3823, '2022', '10', '10-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3824, '2022', '10', '11-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3825, '2022', '10', '12-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3826, '2022', '10', '13-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3827, '2022', '10', '14-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3828, '2022', '10', '15-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3829, '2022', '10', '16-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3830, '2022', '10', '17-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3831, '2022', '10', '18-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3832, '2022', '10', '19-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3833, '2022', '10', '20-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3834, '2022', '10', '21-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3835, '2022', '10', '22-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3836, '2022', '10', '23-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3837, '2022', '10', '24-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3838, '2022', '10', '25-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3839, '2022', '10', '26-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3840, '2022', '10', '27-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3841, '2022', '10', '28-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3842, '2022', '10', '29-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3843, '2022', '10', '30-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3844, '2022', '10', '31-10-2022', '0904000010106', 'P', 'kims intetrnational', '41', NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'manoj'),
(3845, '2022', '10', '1-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3846, '2022', '10', '2-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3847, '2022', '10', '3-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3848, '2022', '10', '4-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3849, '2022', '10', '5-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3850, '2022', '10', '6-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3851, '2022', '10', '7-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3852, '2022', '10', '8-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3853, '2022', '10', '9-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3854, '2022', '10', '10-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3855, '2022', '10', '11-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3856, '2022', '10', '12-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3857, '2022', '10', '13-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3858, '2022', '10', '14-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3859, '2022', '10', '15-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3860, '2022', '10', '16-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3861, '2022', '10', '17-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3862, '2022', '10', '18-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3863, '2022', '10', '19-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3864, '2022', '10', '20-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3865, '2022', '10', '21-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3866, '2022', '10', '22-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3867, '2022', '10', '23-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3868, '2022', '10', '24-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3869, '2022', '10', '25-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3870, '2022', '10', '26-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3871, '2022', '10', '27-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3872, '2022', '10', '28-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3873, '2022', '10', '29-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3874, '2022', '10', '30-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3875, '2022', '10', '31-10-2022', '0904000010107', 'P', 'kims intetrnational', NULL, NULL, '2022-10-27 03:18:19', '2022-10-27 03:18:19', 'gfgg'),
(3876, '2022', '11', '1-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3877, '2022', '11', '2-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3878, '2022', '11', '3-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3879, '2022', '11', '4-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3880, '2022', '11', '5-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3881, '2022', '11', '6-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3882, '2022', '11', '7-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3883, '2022', '11', '8-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3884, '2022', '11', '9-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3885, '2022', '11', '10-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3886, '2022', '11', '11-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3887, '2022', '11', '12-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3888, '2022', '11', '13-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3889, '2022', '11', '14-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3890, '2022', '11', '15-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3891, '2022', '11', '16-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3892, '2022', '11', '17-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3893, '2022', '11', '18-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3894, '2022', '11', '19-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3895, '2022', '11', '20-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3896, '2022', '11', '21-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3897, '2022', '11', '22-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3898, '2022', '11', '23-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3899, '2022', '11', '24-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3900, '2022', '11', '25-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3901, '2022', '11', '26-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3902, '2022', '11', '27-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3903, '2022', '11', '28-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3904, '2022', '11', '29-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3905, '2022', '11', '30-11-2022', '0400037', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimshr'),
(3906, '2022', '11', '1-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3907, '2022', '11', '2-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3908, '2022', '11', '3-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3909, '2022', '11', '4-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3910, '2022', '11', '5-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3911, '2022', '11', '6-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3912, '2022', '11', '7-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3913, '2022', '11', '8-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3914, '2022', '11', '9-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3915, '2022', '11', '10-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3916, '2022', '11', '11-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3917, '2022', '11', '12-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3918, '2022', '11', '13-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3919, '2022', '11', '14-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3920, '2022', '11', '15-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3921, '2022', '11', '16-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3922, '2022', '11', '17-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3923, '2022', '11', '18-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3924, '2022', '11', '19-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3925, '2022', '11', '20-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3926, '2022', '11', '21-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3927, '2022', '11', '22-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3928, '2022', '11', '23-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3929, '2022', '11', '24-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3930, '2022', '11', '25-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3931, '2022', '11', '26-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3932, '2022', '11', '27-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3933, '2022', '11', '28-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3934, '2022', '11', '29-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3935, '2022', '11', '30-11-2022', '0900047', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsadmin'),
(3936, '2022', '11', '1-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3937, '2022', '11', '2-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3938, '2022', '11', '3-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3939, '2022', '11', '4-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3940, '2022', '11', '5-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3941, '2022', '11', '6-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3942, '2022', '11', '7-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3943, '2022', '11', '8-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3944, '2022', '11', '9-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3945, '2022', '11', '10-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3946, '2022', '11', '11-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3947, '2022', '11', '12-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3948, '2022', '11', '13-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3949, '2022', '11', '14-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3950, '2022', '11', '15-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3951, '2022', '11', '16-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3952, '2022', '11', '17-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3953, '2022', '11', '18-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3954, '2022', '11', '19-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3955, '2022', '11', '20-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3956, '2022', '11', '21-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3957, '2022', '11', '22-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3958, '2022', '11', '23-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3959, '2022', '11', '24-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3960, '2022', '11', '25-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3961, '2022', '11', '26-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3962, '2022', '11', '27-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3963, '2022', '11', '28-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3964, '2022', '11', '29-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3965, '2022', '11', '30-11-2022', '0900074', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'kimsstore'),
(3966, '2022', '11', '1-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3967, '2022', '11', '2-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3968, '2022', '11', '3-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3969, '2022', '11', '4-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3970, '2022', '11', '5-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3971, '2022', '11', '6-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3972, '2022', '11', '7-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3973, '2022', '11', '8-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3974, '2022', '11', '9-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3975, '2022', '11', '10-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3976, '2022', '11', '11-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3977, '2022', '11', '12-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3978, '2022', '11', '13-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3979, '2022', '11', '14-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3980, '2022', '11', '15-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3981, '2022', '11', '16-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3982, '2022', '11', '17-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3983, '2022', '11', '18-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3984, '2022', '11', '19-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3985, '2022', '11', '20-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3986, '2022', '11', '21-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3987, '2022', '11', '22-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3988, '2022', '11', '23-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3989, '2022', '11', '24-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3990, '2022', '11', '25-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3991, '2022', '11', '26-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3992, '2022', '11', '27-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3993, '2022', '11', '28-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3994, '2022', '11', '29-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3995, '2022', '11', '30-11-2022', '0900076', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'casuality'),
(3996, '2022', '11', '1-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(3997, '2022', '11', '2-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(3998, '2022', '11', '3-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(3999, '2022', '11', '4-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4000, '2022', '11', '5-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4001, '2022', '11', '6-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4002, '2022', '11', '7-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4003, '2022', '11', '8-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4004, '2022', '11', '9-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4005, '2022', '11', '10-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4006, '2022', '11', '11-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4007, '2022', '11', '12-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4008, '2022', '11', '13-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4009, '2022', '11', '14-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4010, '2022', '11', '15-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4011, '2022', '11', '16-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(4012, '2022', '11', '17-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4013, '2022', '11', '18-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4014, '2022', '11', '19-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4015, '2022', '11', '20-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4016, '2022', '11', '21-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4017, '2022', '11', '22-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4018, '2022', '11', '23-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4019, '2022', '11', '24-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4020, '2022', '11', '25-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4021, '2022', '11', '26-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4022, '2022', '11', '27-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4023, '2022', '11', '28-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4024, '2022', '11', '29-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4025, '2022', '11', '30-11-2022', '0900077', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nurse'),
(4026, '2022', '11', '1-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4027, '2022', '11', '2-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4028, '2022', '11', '3-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4029, '2022', '11', '4-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4030, '2022', '11', '5-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4031, '2022', '11', '6-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4032, '2022', '11', '7-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4033, '2022', '11', '8-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4034, '2022', '11', '9-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4035, '2022', '11', '10-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4036, '2022', '11', '11-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4037, '2022', '11', '12-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4038, '2022', '11', '13-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4039, '2022', '11', '14-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4040, '2022', '11', '15-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4041, '2022', '11', '16-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4042, '2022', '11', '17-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4043, '2022', '11', '18-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4044, '2022', '11', '19-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4045, '2022', '11', '20-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4046, '2022', '11', '21-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4047, '2022', '11', '22-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4048, '2022', '11', '23-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4049, '2022', '11', '24-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4050, '2022', '11', '25-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4051, '2022', '11', '26-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4052, '2022', '11', '27-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4053, '2022', '11', '28-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4054, '2022', '11', '29-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4055, '2022', '11', '30-11-2022', '0900078', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'hospitaladmin'),
(4056, '2022', '11', '1-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4057, '2022', '11', '2-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4058, '2022', '11', '3-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4059, '2022', '11', '4-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4060, '2022', '11', '5-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4061, '2022', '11', '6-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4062, '2022', '11', '7-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4063, '2022', '11', '8-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4064, '2022', '11', '9-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4065, '2022', '11', '10-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4066, '2022', '11', '11-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4067, '2022', '11', '12-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4068, '2022', '11', '13-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4069, '2022', '11', '14-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4070, '2022', '11', '15-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4071, '2022', '11', '16-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4072, '2022', '11', '17-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4073, '2022', '11', '18-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4074, '2022', '11', '19-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4075, '2022', '11', '20-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4076, '2022', '11', '21-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4077, '2022', '11', '22-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4078, '2022', '11', '23-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4079, '2022', '11', '24-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4080, '2022', '11', '25-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4081, '2022', '11', '26-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4082, '2022', '11', '27-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4083, '2022', '11', '28-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4084, '2022', '11', '29-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4085, '2022', '11', '30-11-2022', '0900079', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'Dep Admin'),
(4086, '2022', '11', '1-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4087, '2022', '11', '2-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4088, '2022', '11', '3-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4089, '2022', '11', '4-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4090, '2022', '11', '5-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4091, '2022', '11', '6-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4092, '2022', '11', '7-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4093, '2022', '11', '8-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4094, '2022', '11', '9-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4095, '2022', '11', '10-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4096, '2022', '11', '11-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4097, '2022', '11', '12-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4098, '2022', '11', '13-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4099, '2022', '11', '14-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4100, '2022', '11', '15-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4101, '2022', '11', '16-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4102, '2022', '11', '17-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4103, '2022', '11', '18-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4104, '2022', '11', '19-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4105, '2022', '11', '20-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4106, '2022', '11', '21-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4107, '2022', '11', '22-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4108, '2022', '11', '23-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4109, '2022', '11', '24-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4110, '2022', '11', '25-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4111, '2022', '11', '26-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4112, '2022', '11', '27-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4113, '2022', '11', '28-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4114, '2022', '11', '29-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4115, '2022', '11', '30-11-2022', '0900081', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entadmin'),
(4116, '2022', '11', '1-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4117, '2022', '11', '2-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4118, '2022', '11', '3-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4119, '2022', '11', '4-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4120, '2022', '11', '5-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4121, '2022', '11', '6-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4122, '2022', '11', '7-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4123, '2022', '11', '8-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4124, '2022', '11', '9-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4125, '2022', '11', '10-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4126, '2022', '11', '11-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4127, '2022', '11', '12-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4128, '2022', '11', '13-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4129, '2022', '11', '14-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4130, '2022', '11', '15-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4131, '2022', '11', '16-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4132, '2022', '11', '17-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4133, '2022', '11', '18-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4134, '2022', '11', '19-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4135, '2022', '11', '20-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4136, '2022', '11', '21-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4137, '2022', '11', '22-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4138, '2022', '11', '23-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4139, '2022', '11', '24-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4140, '2022', '11', '25-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4141, '2022', '11', '26-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4142, '2022', '11', '27-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4143, '2022', '11', '28-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4144, '2022', '11', '29-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4145, '2022', '11', '30-11-2022', '0900082', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'entnurse'),
(4146, '2022', '11', '1-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4147, '2022', '11', '2-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4148, '2022', '11', '3-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4149, '2022', '11', '4-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4150, '2022', '11', '5-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4151, '2022', '11', '6-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4152, '2022', '11', '7-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4153, '2022', '11', '8-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4154, '2022', '11', '9-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4155, '2022', '11', '10-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4156, '2022', '11', '11-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4157, '2022', '11', '12-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4158, '2022', '11', '13-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4159, '2022', '11', '14-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4160, '2022', '11', '15-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4161, '2022', '11', '16-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4162, '2022', '11', '17-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4163, '2022', '11', '18-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4164, '2022', '11', '19-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4165, '2022', '11', '20-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4166, '2022', '11', '21-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4167, '2022', '11', '22-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4168, '2022', '11', '23-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4169, '2022', '11', '24-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4170, '2022', '11', '25-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4171, '2022', '11', '26-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4172, '2022', '11', '27-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4173, '2022', '11', '28-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4174, '2022', '11', '29-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4175, '2022', '11', '30-11-2022', '0900083', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'ent lab'),
(4176, '2022', '11', '1-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4177, '2022', '11', '2-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4178, '2022', '11', '3-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4179, '2022', '11', '4-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4180, '2022', '11', '5-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4181, '2022', '11', '6-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4182, '2022', '11', '7-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4183, '2022', '11', '8-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4184, '2022', '11', '9-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4185, '2022', '11', '10-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4186, '2022', '11', '11-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4187, '2022', '11', '12-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4188, '2022', '11', '13-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4189, '2022', '11', '14-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4190, '2022', '11', '15-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4191, '2022', '11', '16-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4192, '2022', '11', '17-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4193, '2022', '11', '18-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4194, '2022', '11', '19-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4195, '2022', '11', '20-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4196, '2022', '11', '21-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4197, '2022', '11', '22-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4198, '2022', '11', '23-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4199, '2022', '11', '24-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4200, '2022', '11', '25-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4201, '2022', '11', '26-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4202, '2022', '11', '27-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4203, '2022', '11', '28-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4204, '2022', '11', '29-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4205, '2022', '11', '30-11-2022', '0900084', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'anpham'),
(4206, '2022', '11', '1-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4207, '2022', '11', '2-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4208, '2022', '11', '3-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4209, '2022', '11', '4-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4210, '2022', '11', '5-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4211, '2022', '11', '6-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4212, '2022', '11', '7-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4213, '2022', '11', '8-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4214, '2022', '11', '9-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4215, '2022', '11', '10-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4216, '2022', '11', '11-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4217, '2022', '11', '12-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4218, '2022', '11', '13-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4219, '2022', '11', '14-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4220, '2022', '11', '15-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4221, '2022', '11', '16-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4222, '2022', '11', '17-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4223, '2022', '11', '18-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4224, '2022', '11', '19-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4225, '2022', '11', '20-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4226, '2022', '11', '21-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4227, '2022', '11', '22-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4228, '2022', '11', '23-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4229, '2022', '11', '24-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4230, '2022', '11', '25-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4231, '2022', '11', '26-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4232, '2022', '11', '27-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4233, '2022', '11', '28-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4234, '2022', '11', '29-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4235, '2022', '11', '30-11-2022', '0900085', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'testprevilage'),
(4236, '2022', '11', '1-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4237, '2022', '11', '2-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4238, '2022', '11', '3-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4239, '2022', '11', '4-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4240, '2022', '11', '5-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4241, '2022', '11', '6-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4242, '2022', '11', '7-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4243, '2022', '11', '8-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4244, '2022', '11', '9-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4245, '2022', '11', '10-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4246, '2022', '11', '11-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4247, '2022', '11', '12-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4248, '2022', '11', '13-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4249, '2022', '11', '14-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4250, '2022', '11', '15-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4251, '2022', '11', '16-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4252, '2022', '11', '17-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4253, '2022', '11', '18-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4254, '2022', '11', '19-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4255, '2022', '11', '20-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4256, '2022', '11', '21-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4257, '2022', '11', '22-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4258, '2022', '11', '23-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4259, '2022', '11', '24-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4260, '2022', '11', '25-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4261, '2022', '11', '26-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4262, '2022', '11', '27-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4263, '2022', '11', '28-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4264, '2022', '11', '29-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4265, '2022', '11', '30-11-2022', '0900086', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'dutnurse'),
(4266, '2022', '11', '1-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4267, '2022', '11', '2-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4268, '2022', '11', '3-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4269, '2022', '11', '4-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4270, '2022', '11', '5-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4271, '2022', '11', '6-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4272, '2022', '11', '7-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4273, '2022', '11', '8-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4274, '2022', '11', '9-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4275, '2022', '11', '10-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4276, '2022', '11', '11-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4277, '2022', '11', '12-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4278, '2022', '11', '13-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4279, '2022', '11', '14-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4280, '2022', '11', '15-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4281, '2022', '11', '16-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4282, '2022', '11', '17-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4283, '2022', '11', '18-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4284, '2022', '11', '19-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4285, '2022', '11', '20-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4286, '2022', '11', '21-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4287, '2022', '11', '22-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4288, '2022', '11', '23-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4289, '2022', '11', '24-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4290, '2022', '11', '25-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4291, '2022', '11', '26-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4292, '2022', '11', '27-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4293, '2022', '11', '28-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4294, '2022', '11', '29-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4295, '2022', '11', '30-11-2022', '0900089', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'aaa'),
(4296, '2022', '11', '1-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4297, '2022', '11', '2-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4298, '2022', '11', '3-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4299, '2022', '11', '4-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4300, '2022', '11', '5-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4301, '2022', '11', '6-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4302, '2022', '11', '7-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4303, '2022', '11', '8-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4304, '2022', '11', '9-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4305, '2022', '11', '10-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4306, '2022', '11', '11-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4307, '2022', '11', '12-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4308, '2022', '11', '13-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4309, '2022', '11', '14-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4310, '2022', '11', '15-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4311, '2022', '11', '16-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4312, '2022', '11', '17-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4313, '2022', '11', '18-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4314, '2022', '11', '19-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4315, '2022', '11', '20-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4316, '2022', '11', '21-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4317, '2022', '11', '22-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4318, '2022', '11', '23-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4319, '2022', '11', '24-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4320, '2022', '11', '25-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4321, '2022', '11', '26-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4322, '2022', '11', '27-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4323, '2022', '11', '28-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4324, '2022', '11', '29-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4325, '2022', '11', '30-11-2022', '0900090', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'nursetestdep'),
(4326, '2022', '11', '1-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4327, '2022', '11', '2-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4328, '2022', '11', '3-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4329, '2022', '11', '4-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4330, '2022', '11', '5-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4331, '2022', '11', '6-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4332, '2022', '11', '7-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4333, '2022', '11', '8-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4334, '2022', '11', '9-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4335, '2022', '11', '10-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4336, '2022', '11', '11-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4337, '2022', '11', '12-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4338, '2022', '11', '13-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4339, '2022', '11', '14-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4340, '2022', '11', '15-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4341, '2022', '11', '16-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4342, '2022', '11', '17-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4343, '2022', '11', '18-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4344, '2022', '11', '19-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4345, '2022', '11', '20-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4346, '2022', '11', '21-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4347, '2022', '11', '22-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:53', '2022-11-01 22:10:53', 'cardiologydoctor'),
(4348, '2022', '11', '23-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'cardiologydoctor'),
(4349, '2022', '11', '24-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'cardiologydoctor'),
(4350, '2022', '11', '25-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'cardiologydoctor'),
(4351, '2022', '11', '26-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'cardiologydoctor'),
(4352, '2022', '11', '27-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'cardiologydoctor'),
(4353, '2022', '11', '28-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'cardiologydoctor'),
(4354, '2022', '11', '29-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'cardiologydoctor'),
(4355, '2022', '11', '30-11-2022', '0900098', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'cardiologydoctor'),
(4356, '2022', '11', '1-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4357, '2022', '11', '2-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4358, '2022', '11', '3-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4359, '2022', '11', '4-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card');
INSERT INTO `dailyattendances` (`id`, `year`, `month`, `date`, `staffid`, `attendance`, `hospital`, `department`, `status`, `created_at`, `updated_at`, `staffname`) VALUES
(4360, '2022', '11', '5-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4361, '2022', '11', '6-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4362, '2022', '11', '7-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4363, '2022', '11', '8-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4364, '2022', '11', '9-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4365, '2022', '11', '10-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4366, '2022', '11', '11-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4367, '2022', '11', '12-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4368, '2022', '11', '13-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4369, '2022', '11', '14-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4370, '2022', '11', '15-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4371, '2022', '11', '16-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4372, '2022', '11', '17-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4373, '2022', '11', '18-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4374, '2022', '11', '19-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4375, '2022', '11', '20-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4376, '2022', '11', '21-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4377, '2022', '11', '22-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4378, '2022', '11', '23-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4379, '2022', '11', '24-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4380, '2022', '11', '25-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4381, '2022', '11', '26-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4382, '2022', '11', '27-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4383, '2022', '11', '28-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4384, '2022', '11', '29-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4385, '2022', '11', '30-11-2022', '0900099', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'card'),
(4386, '2022', '11', '1-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4387, '2022', '11', '2-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4388, '2022', '11', '3-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4389, '2022', '11', '4-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4390, '2022', '11', '5-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4391, '2022', '11', '6-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4392, '2022', '11', '7-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4393, '2022', '11', '8-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4394, '2022', '11', '9-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4395, '2022', '11', '10-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4396, '2022', '11', '11-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4397, '2022', '11', '12-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4398, '2022', '11', '13-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4399, '2022', '11', '14-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4400, '2022', '11', '15-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4401, '2022', '11', '16-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4402, '2022', '11', '17-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4403, '2022', '11', '18-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4404, '2022', '11', '19-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4405, '2022', '11', '20-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4406, '2022', '11', '21-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4407, '2022', '11', '22-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4408, '2022', '11', '23-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4409, '2022', '11', '24-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4410, '2022', '11', '25-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4411, '2022', '11', '26-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4412, '2022', '11', '27-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4413, '2022', '11', '28-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4414, '2022', '11', '29-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder'),
(4415, '2022', '11', '30-11-2022', '0900102', 'P', 'kims intetrnational', '0', NULL, '2022-11-01 22:10:54', '2022-11-01 22:10:54', 'testorder');

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
(40, 'cardiology', '2022-02-16 07:54:13', '2022-02-16 07:54:13', 'kims intetrnational'),
(41, 'Outpatient department (OPD)', '2022-02-26 06:47:00', '2022-02-26 06:47:00', 'kims intetrnational'),
(42, 'ENT', '2022-02-26 06:47:07', '2022-02-26 06:47:07', 'kims intetrnational');

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
(6, '2022-03-13', 6, 1, 6, 15, 150, 2250, 0, 0, 0, 2, 150, 300, 'kims intetrnational', NULL, 47, '2022-04-01 05:41:55', 15, 150, 2250),
(7, '2022-03-18', 7, 1, 6, 8, 130, 1040, 0, 0, 0, 8, 130, 1040, 'kims intetrnational', NULL, 47, '2022-03-31 12:43:20', 8, 130, 1040),
(8, '2022-03-19', 8, 2, 6, 0, 0, 0, 10, 120, 1200, 10, 120, 1200, 'kims intetrnational', 5, 47, '2022-04-01 04:37:30', NULL, NULL, NULL),
(9, '2022-03-19', 8, 2, 6, 0, 0, 0, 3, 150, 450, 3, 150, 450, 'kims intetrnational', 6, 47, '2022-04-01 04:37:30', NULL, NULL, NULL),
(10, '2022-03-15', 9, 2, 6, 0, 0, 0, 10, 150, 1500, 10, 150, 1500, 'kims intetrnational', 6, 47, '2022-04-01 05:41:55', NULL, NULL, NULL),
(11, '2022-04-16', 10, 1, 2, 2, 20, 40, 0, 0, 0, 1, 20, 20, 'kims intetrnational', NULL, 47, '2022-04-16 04:20:43', 2, 20, 40),
(12, '2022-04-17', 11, 2, 2, 0, 0, 0, 1, 20, 20, 1, 20, 20, 'kims intetrnational', 11, 47, '2022-04-16 04:20:43', NULL, NULL, NULL);

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
(11, 'D-clinic', 'TVM', NULL, 'all', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-30 02:17:56', '2021-10-30 02:17:56'),
(12, 'rk hospital', 'kollam', NULL, 'dental', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-16 00:10:56', '2022-04-16 00:10:56');

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
(88, 44, '2022-03-12 08:48:29', 2, 0, 2, 2, 550),
(89, 46, '2022-08-12 13:20:22', 1, 1, 0, 1, 100),
(90, 46, '2022-08-12 13:20:22', 2, 0, 29, 29, 100),
(94, 48, '2022-08-22 09:13:13', 1, 48, 0, 48, 500),
(95, 48, '2022-08-22 09:13:13', 2, 0, 37, 37, 100),
(96, 48, '2022-08-22 09:13:13', 2, 0, 3, 3, 300),
(97, 48, '2022-08-22 09:13:13', 2, 0, 44, 44, 100),
(98, 49, '2022-08-22 13:10:16', 1, 44, 0, 44, 1000),
(99, 49, '2022-08-22 13:10:16', 2, 0, 44, 44, 1000);

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
(44, '2022-03-12 00:00:00', '2022-03-12 08:48:29', 'dsdsd', 37, '', 'kims intetrnational'),
(46, '2022-08-12 00:00:00', '2022-08-12 13:20:22', 'demo', 47, '', 'kims intetrnational'),
(48, '2022-08-22 00:00:00', '2022-08-22 09:13:13', 'fdfffd', 47, '', 'kims intetrnational'),
(49, '2022-08-22 00:00:00', '2022-08-22 13:10:15', 'gg', 47, '', 'kims intetrnational');

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
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abbreviation` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `leave_type`, `no_of_days`, `abbreviation`, `created_at`, `updated_at`) VALUES
(1, 'Causal Leave(CL)', '', '', NULL, NULL),
(2, 'Medical Leave(ML)', '', '', NULL, NULL),
(3, 'Annual Leave(AL)', '', '', NULL, NULL);

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
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledgeraccounts`
--

INSERT INTO `ledgeraccounts` (`id`, `accounts_name`, `accounts_desc`, `accounts_category`, `accounts_subcategory`, `budget_cat`, `accounts_company`, `accounts_update_privilage`, `added_on`) VALUES
(55, 'sdkklsd', 'demo', 40, 24, 18, 'kims intetrnational', 1, '2022-08-27 05:50:05'),
(56, 'hjhhjh', NULL, 53, 25, NULL, 'kims intetrnational', 0, '2022-10-31 06:30:22'),
(57, 'uyuyuyu', NULL, 52, 25, NULL, 'kims intetrnational', 0, '2022-10-31 06:30:35'),
(58, 'test', 'y87oy8', 46, 24, NULL, 'kims intetrnational', 0, '2022-10-31 09:35:23'),
(59, 'test', 'test', 40, 25, NULL, 'kims intetrnational', 0, '2022-10-31 12:10:31');

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
(40, 'Accounts Payable', 1, NULL),
(41, 'Accounts Receivable', 1, NULL),
(42, 'Bank', 1, NULL),
(43, 'Cost of Goods Sold', 1, NULL),
(44, 'Drawings(Partner Expense)', 1, NULL),
(45, 'Equity', 1, NULL),
(46, 'Expense', 1, NULL),
(47, 'Fixed Assets', 1, NULL),
(48, 'Income', 1, NULL),
(49, 'Long Term Liability', 1, NULL),
(50, 'Other Assets', 1, NULL),
(51, 'Other Curebt Assets', 1, NULL),
(52, 'Other Current Liability', 1, NULL),
(53, 'Other Expense', 1, NULL),
(54, 'Other Income', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ledgeraccount_subcategories`
--

CREATE TABLE `ledgeraccount_subcategories` (
  `id` int(11) NOT NULL,
  `ledgeraccount_categories` int(11) DEFAULT NULL,
  `ledgeraccount_subcategories` varchar(150) NOT NULL,
  `ledgeraccount_subcategories_desc` text DEFAULT NULL,
  `accountssub_update_privilage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledgeraccount_subcategories`
--

INSERT INTO `ledgeraccount_subcategories` (`id`, `ledgeraccount_categories`, `ledgeraccount_subcategories`, `ledgeraccount_subcategories_desc`, `accountssub_update_privilage`) VALUES
(24, NULL, 'Client Bank Accounts', NULL, 1),
(25, NULL, 'Cash Accounts', NULL, 1),
(26, NULL, 'Office Bank Accounts', NULL, 1),
(27, NULL, 'Office Operations Accounts', NULL, 1),
(28, NULL, 'Partner Drawings', NULL, 1),
(29, NULL, 'Supplier Accounts', NULL, 1),
(30, NULL, 'Finacial Accounts', NULL, 1),
(31, NULL, 'Income Accounts', NULL, 1);

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
-- Table structure for table `manufacturer_ledger_details`
--

CREATE TABLE `manufacturer_ledger_details` (
  `id` int(11) NOT NULL,
  `paid_date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `purchase_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer_ledger_details`
--

INSERT INTO `manufacturer_ledger_details` (`id`, `paid_date`, `amount`, `purchase_id`) VALUES
(1, NULL, NULL, 4),
(2, '2022-07-31', 100, 4),
(3, '2022-07-31', 100, 4),
(4, '2022-07-31', 500, NULL),
(5, '2022-07-31', 500, NULL),
(6, NULL, NULL, 0),
(7, NULL, NULL, 0),
(8, '2022-07-15', 5000, 0),
(9, NULL, NULL, 3),
(10, NULL, NULL, 4),
(11, NULL, NULL, 3),
(12, NULL, NULL, 3),
(13, NULL, NULL, 4),
(14, NULL, NULL, 3),
(15, NULL, NULL, 3),
(16, NULL, NULL, 3),
(17, NULL, NULL, 3),
(18, NULL, NULL, 3),
(19, NULL, NULL, 3),
(20, NULL, NULL, 3),
(21, NULL, NULL, 3);

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
(1, 'demo brand', 'Crosin', 'demo group', 'cat1', 'gen name', '10', '20', '', 'test', NULL, 0, 'kims intetrnational', 15, '2022-06-25 12:14:51', '2022-06-25 12:11:25'),
(2, 'demo brand', 'Needle', 'demo group', 'cat1', 'gen name', '25', '50', '', NULL, NULL, 0, 'kims intetrnational', 0, '2022-06-30 10:07:45', ''),
(3, 'demo brand', 'Syrup', 'demo group', 'cat1', 'Select', '10', '20', '', NULL, NULL, 0, 'kims intetrnational', NULL, '2022-06-30 09:18:55', ''),
(4, '', 'tablet', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 20, NULL, NULL, '2022-08-19 12:25:50', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicines_details`
--

CREATE TABLE `medicines_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `added_date` date DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `order_no` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Item_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_no` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit_percentage` int(11) DEFAULT NULL,
  `sales_price` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overhead_charge` int(50) DEFAULT NULL,
  `total_sales_price` int(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines_details`
--

INSERT INTO `medicines_details` (`id`, `added_date`, `purchase_date`, `order_no`, `payment_type`, `supplier`, `manufacturer`, `Item_name`, `batch_no`, `quantity`, `purchase_rate`, `profit_percentage`, `sales_price`, `expiry_date`, `purchase_id`, `hospital`, `overhead_charge`, `total_sales_price`, `created_at`, `updated_at`) VALUES
(1, '2022-04-07', '2022-04-08', '624BFB36C1EC1', 'By Cheque', 'demo supplier', 'demo manufacturer', 'test789', '133', '500', '100', 25, '69375', '2022-04-25', 1, 'kims intetrnational', NULL, NULL, '2022-04-07 12:18:51', '2022-04-07 12:18:51'),
(2, '2022-04-18', '2022-04-08', '624BFB36C1EC1', 'By Cheque', 'demo supplier', 'demo manufacturer', 'test789', '133', '25', '100', 25, '19375', '2022-04-19', 1, 'kims intetrnational', NULL, NULL, '2022-04-08 10:00:21', '2022-04-08 10:00:21'),
(3, '2022-04-04', '2022-04-08', '624BFB36C1EC1', 'By Cheque', 'demo supplier', 'demo manufacturer', 'test789', '133', '100', '100', 25, '19375', '2022-04-18', 1, 'kims intetrnational', NULL, NULL, '2022-04-09 05:43:09', '2022-04-09 05:43:09');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `phoneno` longblob DEFAULT NULL,
  `firstname` longblob DEFAULT NULL,
  `address` longblob DEFAULT NULL,
  `age` bigint(100) DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temparature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prescription` longblob DEFAULT NULL,
  `lab` longblob DEFAULT NULL,
  `medicine` longblob DEFAULT NULL,
  `files` longblob DEFAULT NULL,
  `anotherfiles` longblob DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `visiting_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `phoneno`, `firstname`, `address`, `age`, `email`, `dateofbirth`, `gender`, `place`, `height`, `weight`, `temparature`, `prescription`, `lab`, `medicine`, `files`, `anotherfiles`, `updated_at`, `created_at`, `visiting_type`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-09-29 09:01:49', '2022-04-22 05:00:05', NULL),
(2, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-09-29 09:02:11', '2022-04-22 05:00:05', NULL),
(3, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-09-29 09:02:41', '2022-04-22 05:00:05', NULL),
(4, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-09-29 09:02:57', '2022-04-22 05:00:05', NULL),
(5, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-10-01 06:33:37', '2022-04-22 05:00:05', NULL),
(6, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:16:12', '2022-04-22 05:00:05', NULL),
(7, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:21:01', '2022-04-22 05:00:05', NULL),
(8, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:21:16', '2022-04-22 05:00:05', NULL),
(9, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:29:48', '2022-04-22 05:00:05', NULL),
(10, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 05:30:11', '2022-04-22 05:00:05', NULL),
(11, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-10-06 06:51:53', '2022-04-22 05:00:05', NULL),
(12, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-29 07:36:38', '2022-04-22 05:00:05', NULL),
(13, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-29 07:36:49', '2022-04-22 05:00:05', NULL),
(14, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-30 05:34:50', '2022-04-22 05:00:05', NULL),
(15, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-19 11:20:23', '2022-04-22 05:00:05', NULL),
(16, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-10 08:04:29', '2022-04-22 05:00:05', NULL),
(17, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-10 11:21:45', '2022-04-22 05:00:05', NULL),
(18, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-16 07:34:41', '2022-04-22 05:00:05', NULL),
(19, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-16 08:12:25', '2022-04-22 05:00:05', NULL),
(20, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-18 11:28:34', '2022-04-22 05:00:05', NULL),
(21, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 04:08:39', '2022-04-22 05:00:05', NULL),
(22, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 04:10:36', '2022-04-22 05:00:05', NULL),
(23, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 04:12:27', '2022-04-22 05:00:05', NULL),
(24, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 04:23:52', '2022-04-22 05:00:05', NULL),
(25, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 04:49:48', '2022-04-22 05:00:05', NULL),
(26, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 04:54:04', '2022-04-22 05:00:05', NULL),
(27, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 04:55:22', '2022-04-22 05:00:05', NULL),
(28, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 06:26:31', '2022-04-22 05:00:05', NULL),
(29, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 06:30:12', '2022-04-22 05:00:05', NULL),
(30, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 06:34:29', '2022-04-22 05:00:05', NULL),
(31, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 06:35:48', '2022-04-22 05:00:05', NULL),
(32, NULL, 0x7265726572, NULL, NULL, NULL, '0000-00-00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19 06:37:09', '2022-04-22 05:38:50', NULL);

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
(15, '2022-02-19 05:51:07', '2022-02-19 05:51:07', '1', 1, '14');

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
(16, '2022-02-19 05:51:07', '2022-02-19 05:51:07', 1, 1, 'Sugarwq1', NULL, NULL);

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
(2, 'bank transfer');

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
  `pending_amount` bigint(20) DEFAULT NULL,
  `installment` bigint(20) DEFAULT NULL,
  `paid_date` date DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `purchase_added_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `supplier` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `manufacturer`, `purchase_date`, `purchase_orderno`, `payment_type`, `grand_total`, `advance_amount`, `pending_amount`, `installment`, `paid_date`, `status`, `purchase_added_date`, `supplier`, `updated_at`) VALUES
(1, NULL, '2022-05-12', '62C67947652DC', 2, 9000, 1000, NULL, NULL, NULL, 'Verified', '2022-08-23 11:22:32', 1, '2022-07-20 00:16:55'),
(2, NULL, '2022-07-01', '62C7C8D9A555D', 1, 1000, 0, NULL, NULL, NULL, 'Verified', '2022-08-23 10:58:47', 1, NULL),
(3, 1, '2022-07-01', '62CBD16B36FD0', 1, 1000, 500, NULL, NULL, NULL, 'Order-Placed', '2022-08-23 09:59:44', NULL, NULL),
(4, 1, '2022-07-01', '62CBD74152A19', 1, 6000, 2000, NULL, NULL, NULL, 'Order-Placed', '2022-08-23 09:59:58', NULL, NULL),
(5, NULL, '2022-07-28', '62E1F9FE636D4', 2, 56.25, 30, NULL, NULL, NULL, 'Order-Placed', '2022-08-23 09:36:45', 1, NULL),
(6, 1, '2022-08-19', '62FF7F2C6FA13', 1, 850, 200, NULL, NULL, NULL, 'Order-Placed', '2022-08-20 07:05:19', 1, NULL),
(7, 1, '2022-08-19', '62FF7F2C6FA13', 1, 850, 200, 0, NULL, NULL, 'Order-Placed', '2022-08-19 12:20:54', 1, NULL),
(8, 1, '2022-08-19', '62FF7F2C6FA13', 1, 850, 200, NULL, NULL, NULL, 'Order-Placed', '2022-08-20 07:05:39', 1, NULL),
(9, 1, '2022-08-19', '62FF807656587', 2, 1650, 500, NULL, NULL, NULL, 'Order-Placed', '2022-08-20 07:05:34', 1, NULL),
(10, 1, '2022-08-22', '63036570B8721', 1, 500, 250, 0, NULL, NULL, 'Order-Placed', '2022-08-22 11:19:30', 1, NULL),
(11, 1, '2022-08-22', '630366439EBB5', 2, 200, 200, NULL, NULL, NULL, 'Order-Placed', '2022-08-23 12:59:54', 1, NULL),
(12, 1, '2022-08-22', '630368F3345A6', 1, 1750, 1000, 0, NULL, NULL, 'Order-Placed', '2022-08-22 11:33:20', 1, NULL),
(13, 1, '2022-08-23', '6303698126EA5', 1, 3480, 3000, 10, 10, '2022-08-24', 'Order-Placed', '2022-08-24 05:27:54', 1, NULL),
(14, 1, '2022-08-23', '6304C1F16A1B4', 1, 250, 100, 15, 5, '2022-08-26', 'Order-Placed', '2022-08-26 10:38:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
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
(1, 6, 1, '35435', '11', 100, 1100),
(2, 0, 2, '554', '5', 20, 100),
(3, 0, 1, 'wqwqw', '15', 50, 750),
(4, 6, 2, '554', '5', 20, 100),
(5, 6, 1, 'wqwqw', '15', 50, 750),
(6, 7, 3, '554', '30', 55, 1650),
(7, 8, 2, 'weqqdw', '10', 50, 500),
(8, 9, 1, '4rere', '10', 20, 200),
(9, 10, 4, 'ddrc', '50', 35, 1750),
(10, 11, 1, 'dd25', '30', 50, 1500),
(11, 11, 3, 'dd31', '20', 99, 1980),
(12, 12, 1, '54554', '10', 25, 250);

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
(1, 1, '2022-08-19', 1, 850, 200, 0, 1, '62FF7F2C6FA13', 'Order-Placed', '', '2022-08-19 12:18:24'),
(2, NULL, '2022-07-07', 2, 9000, 1000, 8000, 1, '62C67947652DC', 'Order-Placed', '', '2022-07-07 06:12:47'),
(3, 1, '2022-07-01', 1, 1000, 0, 0, NULL, '62C7C8D9A555D', 'Order-Placed', '', '2022-07-08 06:04:30'),
(4, 1, '2022-07-01', 1, 1000, 0, 0, NULL, '62CBD16B36FD0', 'Order-Placed', '', '2022-07-11 07:30:09'),
(5, 1, '2022-07-01', 1, 6000, 0, 0, NULL, '62CBD74152A19', 'Order-Placed', '', '2022-07-11 07:55:24'),
(6, 1, '2022-08-19', 1, 850, 200, 0, 1, '62FF7F2C6FA13', 'Order-Placed', '', '2022-08-19 12:22:13'),
(7, 1, '2022-08-19', 2, 1650, 500, 0, 1, '62FF807656587', 'Order-Placed', '', '2022-08-19 12:24:13'),
(8, 1, '2022-08-22', 1, 500, 250, 0, 1, '63036570B8721', 'Order-Placed', '', '2022-08-22 11:19:30'),
(9, 1, '2022-08-22', 2, 200, 200, 0, 1, '630366439EBB5', 'Order-Placed', '', '2022-08-22 11:30:58'),
(10, 1, '2022-08-22', 1, 1750, 1000, 0, 1, '630368F3345A6', 'Order-Placed', '', '2022-08-22 11:33:20'),
(11, 1, '2022-08-23', 1, 3480, 3000, 0, 1, '6303698126EA5', 'Order-Placed', '', '2022-08-22 11:36:07'),
(12, 1, '2022-08-23', 1, 250, 100, 150, NULL, '6304C1F16A1B4', 'Order-Placed', '', '2022-08-23 12:03:58');

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
(1, 0, 2, '554', 5, 20, 100),
(2, 1, 1, '1000', 30, 300, 9000),
(3, 2, 1, '7588', 10, 100, 1000),
(4, 3, 1, '545', 10, 100, 1000),
(5, 4, 2, '126', 20, 100, 2000),
(6, 4, 3, '225', 30, 100, 3000),
(7, 4, 1, '546', 10, 100, 1000),
(8, 6, 2, '554', 5, 20, 100),
(9, 6, 1, 'wqwqw', 15, 50, 750),
(10, 7, 3, '554', 30, 55, 1650),
(11, 8, 2, 'weqqdw', 10, 50, 500),
(12, 9, 1, '4rere', 10, 20, 200),
(13, 10, 4, 'ddrc', 50, 35, 1750),
(14, 11, 1, 'dd25', 30, 50, 1500),
(15, 11, 3, 'dd31', 20, 99, 1980),
(16, 12, 1, '54554', 10, 25, 250);

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
(8, 'pharma', '', '', '', '', ''),
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
(1, 'o', '2022-02-04 04:55:40', '2022-02-04 04:55:40', 'kims intetrnational'),
(2, 'ac', '2022-02-04 04:58:45', '2022-02-04 04:58:45', 'kims intetrnational'),
(3, 'f', '2022-02-04 04:59:22', '2022-02-04 04:59:22', 'kims intetrnational'),
(4, 'non-ac', '2022-02-05 05:08:43', '2022-02-05 05:08:43', 'kims intetrnational');

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
(35, NULL, NULL, NULL, 'kims intetrnational', 'cardiology', 'non-ac', NULL, NULL, '2022-02-19 05:05:25', '2022-02-19 05:05:25', NULL, NULL);

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
(19, 'ac', 'i', '7', 'Paramedical Department', '7', 'kims intetrnational', '2022-02-16 06:52:03', '2022-02-16 06:52:03', 5),
(20, 'non-ac', 'north-west', '500', 'cardiology', '5', 'kims intetrnational', '2022-02-18 23:35:23', '2022-02-18 23:35:23', 20);

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

--
-- Dumping data for table `staff_leaves`
--

INSERT INTO `staff_leaves` (`id`, `staff_id`, `leave_type_id`, `allotted_leaves`, `leaves_left`) VALUES
(1, 2147483647, 1, 0, '0'),
(2, 2147483647, 2, 0, '0'),
(3, 2147483647, 3, 0, '0'),
(4, 2147483647, 1, 5, '2'),
(5, 2147483647, 2, 1, '0'),
(6, 2147483647, 3, 0, '0'),
(7, 2147483647, 1, 0, '0'),
(8, 2147483647, 2, 0, '0'),
(9, 2147483647, 3, 0, '0');

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
(10, '2022-04-16 00:00:00', 1, 1, 47, '2022-04-16 04:18:29', NULL, 'kims intetrnational'),
(11, '2022-04-17 00:00:00', 2, 2, 47, '2022-04-16 04:20:43', NULL, 'kims intetrnational');

-- --------------------------------------------------------

--
-- Table structure for table `store_issued_details`
--

CREATE TABLE `store_issued_details` (
  `id` int(11) NOT NULL,
  `issued_date` date NOT NULL,
  `department` int(11) NOT NULL,
  `issued_by` int(11) NOT NULL,
  `issued_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_issued_details`
--

INSERT INTO `store_issued_details` (`id`, `issued_date`, `department`, `issued_by`, `issued_status`) VALUES
(1, '2022-06-29', 51, 40, 6),
(2, '2022-06-29', 38, 40, 6),
(3, '2022-06-29', 39, 40, 6),
(4, '2022-06-29', 41, 40, 6),
(5, '2022-06-29', 43, 40, 6),
(6, '2022-06-29', 43, 40, 6),
(7, '2022-06-29', 43, 40, 6),
(8, '2022-06-29', 41, 40, 6),
(9, '2022-06-29', 39, 40, 6),
(10, '2022-06-29', 40, 40, 6),
(11, '2022-06-29', 43, 40, 6),
(12, '2022-06-29', 52, 40, 6),
(13, '2022-06-29', 52, 40, 6),
(14, '2022-06-29', 52, 40, 6),
(15, '2022-06-29', 52, 40, 6),
(16, '2022-06-29', 52, 40, 6),
(17, '2022-06-29', 52, 40, 6),
(18, '2022-06-29', 52, 40, 6),
(19, '2022-06-29', 52, 40, 6),
(20, '2022-06-29', 52, 40, 6),
(21, '2022-06-29', 52, 40, 6),
(22, '2022-06-29', 52, 40, 6),
(23, '2022-06-29', 42, 40, 6),
(24, '2022-06-29', 40, 40, 6),
(25, '2022-06-29', 40, 40, 6),
(26, '2022-06-29', 40, 40, 6),
(27, '2022-06-29', 40, 40, 6),
(28, '2022-06-29', 40, 40, 6),
(29, '2022-06-29', 38, 40, 6),
(30, '2022-06-29', 42, 40, 6),
(31, '2022-06-29', 42, 40, 6),
(32, '2022-06-29', 42, 40, 6),
(33, '2022-06-29', 42, 40, 6),
(34, '2022-06-29', 51, 40, 6),
(35, '2022-06-29', 43, 40, 6),
(36, '2022-06-29', 45, 40, 6),
(37, '2022-06-29', 45, 40, 6),
(38, '2022-06-29', 45, 40, 6);

-- --------------------------------------------------------

--
-- Table structure for table `store_issued_items`
--

CREATE TABLE `store_issued_items` (
  `id` int(11) NOT NULL,
  `item_name` int(11) NOT NULL,
  `issued_id` int(11) DEFAULT NULL,
  `issued_quantity` int(11) DEFAULT NULL,
  `current_stock` int(11) DEFAULT NULL,
  `batch_no` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_issued_items`
--

INSERT INTO `store_issued_items` (`id`, `item_name`, `issued_id`, `issued_quantity`, `current_stock`, `batch_no`, `updated_at`) VALUES
(1, 3, 1, 20, 105, 3, '2022-06-29 04:11:18'),
(2, 3, 2, 30, 85, 3, '2022-06-29 04:13:23'),
(3, 3, 3, 2, 53, 3, '2022-06-28 23:03:43'),
(4, 3, 4, 5, -5, 3, '2022-06-28 23:12:31'),
(5, 3, 7, 2, 50, 3, '2022-06-29 04:34:43'),
(6, 4, 8, 25, 50, 4, '2022-06-29 04:36:14'),
(7, 4, 9, 10, 25, 4, '2022-06-29 04:37:28'),
(8, 4, 10, 10, 15, 4, '2022-06-29 04:40:33'),
(9, 4, 11, 5, 5, 4, '2022-06-29 04:42:31'),
(10, 2, 22, 2, NULL, 10, '2022-06-29 05:18:11'),
(11, 4, 23, 4, NULL, 25, '2022-06-29 05:21:31'),
(12, 4, 28, 4, 75, 10, '2022-06-29 05:25:46'),
(13, 4, 29, 4, 25, 10, '2022-06-29 05:27:09'),
(14, 4, 33, 4, 40, 10, '2022-06-29 05:33:46'),
(15, 3, 34, 3, 25, 5, '2022-06-29 05:34:09'),
(16, 3, 35, 3, 20, 5, '2022-06-29 05:34:53'),
(17, 3, 36, 5, 15, 3, '2022-06-29 05:37:26'),
(18, 3, 38, 1, 10, 3, '2022-06-29 05:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `store_requests`
--

CREATE TABLE `store_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` int(11) NOT NULL,
  `medicine` int(11) NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_requests`
--

INSERT INTO `store_requests` (`id`, `date`, `department`, `medicine`, `quantity`, `requested_status`, `created_at`, `updated_at`) VALUES
(1, '2022-01-11', 36, 11, '30', 1, NULL, NULL),
(2, '2022-01-11', 38, 20, '30', 1, NULL, NULL),
(3, '2022-01-12', 37, 18, '13', 0, NULL, NULL),
(4, '2022-01-19', 36, 15, '20', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_store`
--

CREATE TABLE `sub_store` (
  `id` int(11) NOT NULL,
  `sub_store_name` varchar(125) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `request_medicine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_store`
--

INSERT INTO `sub_store` (`id`, `sub_store_name`, `department_id`, `request_medicine`) VALUES
(5, 'Sub Store 2', 42, NULL),
(6, 'Store123', 42, NULL),
(7, 'test 123', 39, NULL),
(8, 'Store 1', 36, NULL),
(9, 'Store 2', 36, NULL),
(10, 'Store 1', 40, NULL),
(11, 'Store 2', 40, NULL),
(16, 'Store 1', 37, NULL),
(17, 'Store 1', 38, NULL),
(18, 'Store 1', 39, NULL),
(19, 'Store 3', 40, NULL),
(20, 'Store 3', 41, NULL),
(21, 'Store 1', 42, NULL),
(22, 'Store 1', 43, NULL),
(23, 'Store 1', 44, NULL),
(24, 'Store 1', 45, NULL),
(25, 'Store 1', 51, NULL),
(26, 'Store 1', 52, NULL),
(27, 'Sub store', 53, NULL),
(28, 'Sub store', 54, NULL),
(29, 'jkhkjhkds', 36, NULL);

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
-- Table structure for table `supplier_ledger_details`
--

CREATE TABLE `supplier_ledger_details` (
  `id` int(11) NOT NULL,
  `paid_date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `purchase_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_ledger_details`
--

INSERT INTO `supplier_ledger_details` (`id`, `paid_date`, `amount`, `purchase_id`) VALUES
(1, NULL, NULL, 1),
(2, NULL, NULL, 1),
(3, NULL, NULL, 1),
(4, NULL, NULL, 1),
(5, NULL, NULL, 1),
(6, NULL, NULL, 1),
(7, NULL, NULL, 1),
(8, NULL, NULL, 1),
(9, NULL, NULL, 1),
(10, NULL, NULL, 1),
(11, NULL, NULL, 1),
(12, NULL, NULL, 1),
(13, NULL, NULL, 1),
(14, NULL, NULL, 1),
(15, NULL, NULL, 1),
(16, NULL, NULL, 1),
(17, NULL, NULL, 1),
(18, NULL, NULL, 1),
(19, NULL, NULL, 1),
(20, NULL, NULL, 1),
(21, NULL, NULL, 1),
(22, NULL, NULL, 1),
(23, NULL, NULL, 1),
(24, NULL, NULL, 1),
(25, NULL, NULL, 1),
(26, NULL, NULL, 1),
(27, NULL, NULL, 1),
(28, NULL, NULL, 1),
(29, NULL, NULL, 1),
(30, NULL, NULL, 1),
(31, NULL, NULL, 1),
(32, NULL, NULL, 1),
(33, NULL, NULL, 1),
(34, NULL, NULL, 1),
(35, NULL, NULL, 1),
(36, NULL, NULL, 1),
(37, NULL, NULL, 1),
(38, NULL, NULL, 1),
(39, NULL, NULL, 1),
(40, NULL, NULL, 1),
(41, NULL, NULL, 1),
(42, NULL, NULL, 1),
(43, NULL, NULL, 1),
(44, NULL, NULL, 1),
(45, NULL, NULL, 1),
(46, NULL, NULL, 1),
(47, NULL, NULL, 1),
(48, NULL, NULL, 1),
(49, NULL, NULL, 1),
(50, NULL, NULL, 1),
(51, NULL, NULL, 1),
(52, NULL, NULL, 1),
(53, NULL, NULL, 1),
(54, NULL, NULL, 1),
(55, NULL, NULL, 1),
(56, NULL, NULL, 1),
(57, NULL, NULL, 1),
(58, NULL, NULL, 1),
(59, NULL, NULL, 1),
(60, NULL, NULL, 1),
(61, NULL, NULL, 1),
(62, NULL, NULL, 1),
(63, NULL, NULL, 1),
(64, NULL, NULL, 1),
(65, NULL, NULL, 1),
(66, NULL, NULL, 1),
(67, NULL, NULL, 1),
(68, NULL, NULL, 1),
(69, NULL, NULL, 1),
(70, NULL, NULL, 1),
(71, NULL, NULL, 1),
(72, NULL, NULL, 1),
(73, NULL, NULL, 1),
(74, NULL, NULL, 1),
(75, NULL, NULL, 1),
(76, NULL, NULL, 1),
(77, NULL, NULL, 1),
(78, NULL, NULL, 1),
(79, NULL, NULL, 1),
(80, NULL, NULL, 1),
(81, NULL, NULL, 1),
(82, NULL, NULL, 1),
(83, NULL, NULL, 1),
(84, NULL, NULL, 1),
(85, NULL, NULL, 1),
(86, NULL, NULL, 1),
(87, NULL, NULL, 1),
(88, NULL, NULL, 1),
(89, NULL, NULL, 1),
(90, NULL, NULL, 1),
(91, NULL, NULL, 1),
(92, NULL, NULL, 1),
(93, NULL, NULL, 1),
(94, NULL, NULL, 1),
(95, NULL, NULL, 1),
(96, NULL, NULL, 1),
(97, NULL, NULL, 1),
(98, NULL, NULL, 1),
(99, NULL, NULL, 1),
(100, NULL, NULL, 1),
(101, NULL, NULL, 1),
(102, NULL, NULL, 1),
(103, NULL, NULL, 1),
(104, NULL, NULL, 1),
(105, NULL, NULL, 1),
(106, NULL, NULL, 1),
(107, NULL, NULL, 1),
(108, NULL, NULL, 1),
(109, NULL, NULL, 1),
(110, NULL, NULL, 1),
(111, NULL, NULL, 1),
(112, NULL, NULL, 1),
(113, NULL, NULL, 1),
(114, NULL, NULL, 1),
(115, NULL, NULL, 1),
(116, NULL, NULL, 1),
(117, NULL, NULL, 1),
(118, NULL, NULL, 1),
(119, NULL, NULL, 1),
(120, NULL, NULL, 1),
(121, NULL, NULL, 1),
(122, NULL, NULL, 1),
(123, NULL, NULL, 1),
(124, NULL, NULL, 1),
(125, NULL, NULL, 1),
(126, NULL, NULL, 1),
(127, NULL, NULL, 1),
(128, NULL, NULL, 1),
(129, NULL, NULL, 1),
(130, NULL, NULL, 1),
(131, NULL, NULL, 1),
(132, NULL, NULL, 1),
(133, NULL, NULL, 1),
(134, NULL, NULL, 1),
(135, NULL, NULL, 1),
(136, NULL, NULL, 1),
(137, NULL, NULL, 1),
(138, NULL, NULL, 1),
(139, NULL, NULL, 1),
(140, NULL, NULL, 1),
(141, NULL, NULL, 1),
(142, NULL, NULL, 1),
(143, NULL, NULL, 1),
(144, NULL, NULL, 1),
(145, NULL, NULL, 1),
(146, NULL, NULL, 1),
(147, NULL, NULL, 1),
(148, NULL, NULL, 1),
(149, NULL, NULL, 1),
(150, NULL, NULL, 1),
(151, NULL, NULL, 1),
(152, NULL, NULL, 1),
(153, NULL, NULL, 1),
(154, NULL, NULL, 1),
(155, NULL, NULL, 1),
(156, NULL, NULL, 1),
(157, NULL, NULL, 1),
(158, NULL, NULL, 1),
(159, NULL, NULL, 1),
(160, NULL, NULL, 1),
(161, NULL, NULL, 1),
(162, NULL, NULL, 1),
(163, NULL, NULL, 1),
(164, NULL, NULL, 1),
(165, NULL, NULL, 1),
(166, NULL, NULL, 1),
(167, NULL, NULL, 1),
(168, NULL, NULL, 1),
(169, NULL, NULL, 1),
(170, NULL, NULL, 1),
(171, NULL, NULL, 1),
(172, NULL, NULL, 1),
(173, NULL, NULL, 1),
(174, NULL, NULL, 1),
(175, NULL, NULL, 1),
(176, NULL, NULL, 1),
(177, NULL, NULL, 1),
(178, NULL, NULL, 1),
(179, NULL, NULL, 1),
(180, NULL, NULL, 1),
(181, NULL, NULL, 1),
(182, NULL, NULL, 1),
(183, NULL, NULL, 1),
(184, NULL, NULL, 1),
(185, NULL, NULL, 1),
(186, NULL, NULL, 1),
(187, NULL, NULL, 1),
(188, NULL, NULL, 1),
(189, NULL, NULL, 1),
(190, NULL, NULL, 1),
(191, NULL, NULL, 1),
(192, NULL, NULL, 1),
(193, NULL, NULL, 1),
(194, NULL, NULL, 1),
(195, NULL, NULL, 1),
(196, NULL, NULL, 1),
(197, NULL, NULL, 1),
(198, NULL, NULL, 1),
(199, NULL, NULL, 1),
(200, NULL, NULL, 1),
(201, NULL, NULL, 1),
(202, NULL, NULL, 1),
(203, NULL, NULL, 1),
(204, NULL, NULL, 1),
(205, NULL, NULL, 1),
(206, NULL, NULL, 1),
(207, NULL, NULL, 1),
(208, NULL, NULL, 1),
(209, NULL, NULL, 1),
(210, NULL, NULL, 1),
(211, NULL, NULL, 1),
(212, NULL, NULL, 1),
(213, NULL, NULL, 1),
(214, NULL, NULL, 1),
(215, NULL, NULL, 1),
(216, NULL, NULL, 1),
(217, NULL, NULL, 1),
(218, NULL, NULL, 1),
(219, NULL, NULL, 1),
(220, NULL, NULL, 1),
(221, NULL, NULL, 1),
(222, NULL, NULL, 1),
(223, NULL, NULL, 1),
(224, NULL, NULL, 1),
(225, NULL, NULL, 1),
(226, NULL, NULL, 1),
(227, NULL, NULL, 1),
(228, NULL, NULL, 1),
(229, NULL, NULL, 1),
(230, NULL, NULL, 1),
(231, NULL, NULL, 1),
(232, NULL, NULL, 1),
(233, NULL, NULL, 1),
(234, NULL, NULL, 1),
(235, NULL, NULL, 1),
(236, NULL, NULL, 1),
(237, NULL, NULL, 1),
(238, NULL, NULL, 1),
(239, NULL, NULL, 1),
(240, NULL, NULL, 1),
(241, NULL, NULL, 1),
(242, NULL, NULL, 1),
(243, NULL, NULL, 1),
(244, NULL, NULL, 1),
(245, NULL, NULL, 1),
(246, NULL, NULL, 1),
(247, NULL, NULL, 1),
(248, NULL, NULL, 1),
(249, NULL, NULL, 1),
(250, NULL, NULL, 1),
(251, NULL, NULL, 1),
(252, NULL, NULL, 1),
(253, NULL, NULL, 1),
(254, NULL, NULL, 1),
(255, NULL, NULL, 1),
(256, NULL, NULL, 1),
(257, NULL, NULL, 1),
(258, NULL, NULL, 1),
(259, NULL, NULL, 1),
(260, NULL, NULL, 1),
(261, NULL, NULL, 1),
(262, NULL, NULL, 1),
(263, NULL, NULL, 1),
(264, NULL, NULL, 1),
(265, NULL, NULL, 1),
(266, NULL, NULL, 1),
(267, NULL, NULL, 1),
(268, NULL, NULL, 1),
(269, NULL, NULL, 1),
(270, NULL, NULL, 1),
(271, NULL, NULL, 1),
(272, NULL, NULL, 1),
(273, NULL, NULL, 1),
(274, NULL, NULL, 1),
(275, NULL, NULL, 1),
(276, NULL, NULL, 1),
(277, NULL, NULL, 1),
(278, NULL, NULL, 1),
(279, NULL, NULL, 1),
(280, NULL, NULL, 1),
(281, NULL, NULL, 1),
(282, NULL, NULL, 1),
(283, NULL, NULL, 1),
(284, NULL, NULL, 1),
(285, NULL, NULL, 1),
(286, NULL, NULL, 1),
(287, NULL, NULL, 1),
(288, NULL, NULL, 1),
(289, NULL, NULL, 1),
(290, NULL, NULL, 1),
(291, NULL, NULL, 1),
(292, NULL, NULL, 1),
(293, NULL, NULL, 1),
(294, NULL, NULL, 1),
(295, NULL, NULL, 1),
(296, NULL, NULL, 1),
(297, NULL, NULL, 1),
(298, NULL, NULL, 1),
(299, NULL, NULL, 1),
(300, NULL, NULL, 1),
(301, NULL, NULL, 1),
(302, NULL, NULL, 1),
(303, NULL, NULL, 1),
(304, NULL, NULL, 1),
(305, NULL, NULL, 1),
(306, NULL, NULL, 1),
(307, NULL, NULL, 1),
(308, NULL, NULL, 1),
(309, NULL, NULL, 1),
(310, NULL, NULL, 1),
(311, NULL, NULL, 1),
(312, NULL, NULL, 1),
(313, NULL, NULL, 1),
(314, NULL, NULL, 1),
(315, NULL, NULL, 1),
(316, NULL, NULL, 1),
(317, NULL, NULL, 1),
(318, NULL, NULL, 1),
(319, NULL, NULL, 1),
(320, NULL, NULL, 1),
(321, NULL, NULL, 1),
(322, NULL, NULL, 1),
(323, NULL, NULL, 1),
(324, NULL, NULL, 1),
(325, NULL, NULL, 1),
(326, NULL, NULL, 1),
(327, NULL, NULL, 1),
(328, NULL, NULL, 1),
(329, NULL, NULL, 1),
(330, NULL, NULL, 1),
(331, NULL, NULL, 1),
(332, NULL, NULL, 1),
(333, NULL, NULL, 1),
(334, NULL, NULL, 1),
(335, NULL, NULL, 1),
(336, NULL, NULL, 1),
(337, NULL, NULL, 1),
(338, NULL, NULL, 1),
(339, NULL, NULL, 1),
(340, NULL, NULL, 1),
(341, NULL, NULL, 1),
(342, NULL, NULL, 1),
(343, NULL, NULL, 1),
(344, NULL, NULL, 1),
(345, NULL, NULL, 1),
(346, NULL, NULL, 1),
(347, NULL, NULL, 1),
(348, NULL, NULL, 1),
(349, NULL, NULL, 1),
(350, NULL, NULL, 1),
(351, NULL, NULL, 1),
(352, NULL, NULL, 1),
(353, NULL, NULL, 1),
(354, NULL, NULL, 1),
(355, NULL, NULL, 1),
(356, NULL, NULL, 1),
(357, NULL, NULL, 1),
(358, NULL, NULL, 1),
(359, NULL, NULL, 1),
(360, NULL, NULL, 1),
(361, NULL, NULL, 1),
(362, NULL, NULL, 1),
(363, NULL, NULL, 1),
(364, NULL, NULL, 1),
(365, NULL, NULL, 1),
(366, NULL, NULL, 1),
(367, NULL, NULL, 1),
(368, NULL, NULL, 1),
(369, NULL, NULL, 1),
(370, NULL, NULL, 1),
(371, NULL, NULL, 1),
(372, NULL, NULL, 1),
(373, NULL, NULL, 1),
(374, NULL, NULL, 1),
(375, NULL, NULL, 1),
(376, NULL, NULL, 1),
(377, NULL, NULL, 1),
(378, NULL, NULL, 1),
(379, NULL, NULL, 1),
(380, NULL, NULL, 1),
(381, NULL, NULL, 1),
(382, NULL, NULL, 1),
(383, NULL, NULL, 1),
(384, NULL, NULL, 1),
(385, NULL, NULL, 1),
(386, NULL, NULL, 1),
(387, NULL, NULL, 1),
(388, NULL, NULL, 1),
(389, NULL, NULL, 1),
(390, NULL, NULL, 1),
(391, NULL, NULL, 1),
(392, NULL, NULL, 1),
(393, NULL, NULL, 1),
(394, NULL, NULL, 1),
(395, NULL, NULL, 1),
(396, NULL, NULL, 1),
(397, NULL, NULL, 1),
(398, NULL, NULL, 1),
(399, NULL, NULL, 1),
(400, NULL, NULL, 1),
(401, NULL, NULL, 1),
(402, NULL, NULL, 1),
(403, NULL, NULL, 1),
(404, NULL, NULL, 1),
(405, NULL, NULL, 1),
(406, NULL, NULL, 1),
(407, NULL, NULL, 1),
(408, NULL, NULL, 1),
(409, NULL, NULL, 1),
(410, NULL, NULL, 1),
(411, NULL, NULL, 1),
(412, NULL, NULL, 1),
(413, NULL, NULL, 1),
(414, NULL, NULL, 1),
(415, NULL, NULL, 1),
(416, NULL, NULL, 1),
(417, NULL, NULL, 1),
(418, NULL, NULL, 1),
(419, NULL, NULL, 1),
(420, NULL, NULL, 1),
(421, NULL, NULL, 1),
(422, NULL, NULL, 1),
(423, NULL, NULL, 1),
(424, NULL, NULL, 1),
(425, NULL, NULL, 1),
(426, NULL, NULL, 1),
(427, NULL, NULL, 1),
(428, NULL, NULL, 1),
(429, NULL, NULL, 1),
(430, NULL, NULL, 1),
(431, NULL, NULL, 1),
(432, NULL, NULL, 1),
(433, NULL, NULL, 1),
(434, NULL, NULL, 1),
(435, NULL, NULL, 1),
(436, NULL, NULL, 1),
(437, NULL, NULL, 1),
(438, NULL, NULL, 1),
(439, NULL, NULL, 1),
(440, NULL, NULL, 1),
(441, NULL, NULL, 1),
(442, NULL, NULL, 1),
(443, NULL, NULL, 1),
(444, NULL, NULL, 1),
(445, NULL, NULL, 1),
(446, NULL, NULL, 1),
(447, NULL, NULL, 1),
(448, NULL, NULL, 1),
(449, NULL, NULL, 1),
(450, NULL, NULL, 1),
(451, NULL, NULL, 1),
(452, NULL, NULL, 1),
(453, NULL, NULL, 1),
(454, NULL, NULL, 1),
(455, NULL, NULL, 1),
(456, NULL, NULL, 1),
(457, NULL, NULL, 1),
(458, NULL, NULL, 1),
(459, NULL, NULL, 1),
(460, NULL, NULL, 1),
(461, NULL, NULL, 1),
(462, NULL, NULL, 1),
(463, NULL, NULL, 1),
(464, NULL, NULL, 1),
(465, NULL, NULL, 1),
(466, NULL, NULL, 1),
(467, NULL, NULL, 1),
(468, NULL, NULL, 1),
(469, NULL, NULL, 1),
(470, NULL, NULL, 1),
(471, NULL, NULL, 1),
(472, NULL, NULL, 1),
(473, NULL, NULL, 1),
(474, NULL, NULL, 1),
(475, NULL, NULL, 1),
(476, NULL, NULL, 1),
(477, NULL, NULL, 1),
(478, NULL, NULL, 1),
(479, NULL, NULL, 1),
(480, NULL, NULL, 1),
(481, NULL, NULL, 1),
(482, NULL, NULL, 1),
(483, NULL, NULL, 1),
(484, NULL, NULL, 1),
(485, NULL, NULL, 1),
(486, NULL, NULL, 1),
(487, NULL, NULL, 1),
(488, NULL, NULL, 1),
(489, NULL, NULL, 1),
(490, NULL, NULL, 1),
(491, NULL, NULL, 1),
(492, NULL, NULL, 1),
(493, NULL, NULL, 1),
(494, NULL, NULL, 1),
(495, NULL, NULL, 1),
(496, NULL, NULL, 1),
(497, NULL, NULL, 1),
(498, NULL, NULL, 1),
(499, NULL, NULL, 1),
(500, NULL, NULL, 1),
(501, NULL, NULL, 1),
(502, NULL, NULL, 1),
(503, NULL, NULL, 1),
(504, NULL, NULL, 1),
(505, NULL, NULL, 1),
(506, NULL, NULL, 1),
(507, NULL, NULL, 1),
(508, NULL, NULL, 1),
(509, NULL, NULL, 1),
(510, NULL, NULL, 1),
(511, NULL, NULL, 1),
(512, NULL, NULL, 1),
(513, NULL, NULL, 1),
(514, NULL, NULL, 1),
(515, NULL, NULL, 1),
(516, NULL, NULL, 1),
(517, NULL, NULL, 1),
(518, NULL, NULL, 1),
(519, NULL, NULL, 1),
(520, NULL, NULL, 1),
(521, NULL, NULL, 1),
(522, NULL, NULL, 1),
(523, NULL, NULL, 1),
(524, NULL, NULL, 1),
(525, NULL, NULL, 1),
(526, NULL, NULL, 1),
(527, NULL, NULL, 1),
(528, NULL, NULL, 1),
(529, NULL, NULL, 1),
(530, NULL, NULL, 1),
(531, NULL, NULL, 1),
(532, NULL, NULL, 1),
(533, NULL, NULL, 1),
(534, NULL, NULL, 1),
(535, NULL, NULL, 1),
(536, NULL, NULL, 1),
(537, NULL, NULL, 1),
(538, NULL, NULL, 1),
(539, NULL, NULL, 1),
(540, NULL, NULL, 1),
(541, NULL, NULL, 1),
(542, NULL, NULL, 1),
(543, NULL, NULL, 1),
(544, NULL, NULL, 1),
(545, NULL, NULL, 1),
(546, NULL, NULL, 1),
(547, NULL, NULL, 1),
(548, NULL, NULL, 1),
(549, NULL, NULL, 1),
(550, NULL, NULL, 1),
(551, NULL, NULL, 1),
(552, NULL, NULL, 1),
(553, NULL, NULL, 1),
(554, NULL, NULL, 1),
(555, NULL, NULL, 1),
(556, NULL, NULL, 1),
(557, NULL, NULL, 1),
(558, NULL, NULL, 1),
(559, NULL, NULL, 1),
(560, NULL, NULL, 1),
(561, NULL, NULL, 1),
(562, NULL, NULL, 1),
(563, NULL, NULL, 1),
(564, NULL, NULL, 1),
(565, NULL, NULL, 1),
(566, NULL, NULL, 1),
(567, NULL, NULL, 1),
(568, NULL, NULL, 1),
(569, NULL, NULL, 1),
(570, NULL, NULL, 1),
(571, NULL, NULL, 1),
(572, NULL, NULL, 1),
(573, NULL, NULL, 1),
(574, NULL, NULL, 1),
(575, NULL, NULL, 1),
(576, NULL, NULL, 1),
(577, NULL, NULL, 1),
(578, NULL, NULL, 1),
(579, NULL, NULL, 1),
(580, NULL, NULL, 1),
(581, NULL, NULL, 1),
(582, NULL, NULL, 1),
(583, NULL, NULL, 1),
(584, NULL, NULL, 1),
(585, NULL, NULL, 1),
(586, NULL, NULL, 1),
(587, NULL, NULL, 1),
(588, NULL, NULL, 1),
(589, NULL, NULL, 1),
(590, NULL, NULL, 1),
(591, NULL, NULL, 1),
(592, NULL, NULL, 1),
(593, NULL, NULL, 1),
(594, NULL, NULL, 1),
(595, NULL, NULL, 1),
(596, NULL, NULL, 1),
(597, NULL, NULL, 1),
(598, NULL, NULL, 1),
(599, NULL, NULL, 1),
(600, NULL, NULL, 1),
(601, NULL, NULL, 1),
(602, NULL, NULL, 1),
(603, NULL, NULL, 1),
(604, NULL, NULL, 1),
(605, NULL, NULL, 1),
(606, NULL, NULL, 1),
(607, NULL, NULL, 1),
(608, NULL, NULL, 1),
(609, NULL, NULL, 1),
(610, NULL, NULL, 1),
(611, NULL, NULL, 1),
(612, NULL, NULL, 1),
(613, NULL, NULL, 1),
(614, NULL, NULL, 1),
(615, NULL, NULL, 1),
(616, NULL, NULL, 1),
(617, NULL, NULL, 1),
(618, NULL, NULL, 1),
(619, NULL, NULL, 1),
(620, NULL, NULL, 1),
(621, NULL, NULL, 1),
(622, NULL, NULL, 1),
(623, NULL, NULL, 1),
(624, NULL, NULL, 1),
(625, NULL, NULL, 1),
(626, NULL, NULL, 1),
(627, NULL, NULL, 1),
(628, NULL, NULL, 1),
(629, NULL, NULL, 1),
(630, NULL, NULL, 1),
(631, NULL, NULL, 1),
(632, NULL, NULL, 1),
(633, NULL, NULL, 1),
(634, NULL, NULL, 1),
(635, NULL, NULL, 1),
(636, NULL, NULL, 1),
(637, NULL, NULL, 1),
(638, NULL, NULL, 1),
(639, NULL, NULL, 1),
(640, NULL, NULL, 1),
(641, NULL, NULL, 1),
(642, NULL, NULL, 1),
(643, NULL, NULL, 1),
(644, NULL, NULL, 1),
(645, NULL, NULL, 1),
(646, NULL, NULL, 1),
(647, NULL, NULL, 1),
(648, NULL, NULL, 1),
(649, NULL, NULL, 1),
(650, NULL, NULL, 1),
(651, NULL, NULL, 1),
(652, NULL, NULL, 1),
(653, NULL, NULL, 1),
(654, NULL, NULL, 1),
(655, NULL, NULL, 1),
(656, NULL, NULL, 1),
(657, NULL, NULL, 1),
(658, NULL, NULL, 1),
(659, NULL, NULL, 1),
(660, NULL, NULL, 1),
(661, NULL, NULL, 1),
(662, NULL, NULL, 1),
(663, NULL, NULL, 1),
(664, NULL, NULL, 1),
(665, NULL, NULL, 1),
(666, NULL, NULL, 1),
(667, NULL, NULL, 1),
(668, NULL, NULL, 1),
(669, NULL, NULL, 1),
(670, NULL, NULL, 1),
(671, NULL, NULL, 1),
(672, NULL, NULL, 1),
(673, NULL, NULL, 1),
(674, NULL, NULL, 1),
(675, NULL, NULL, 1),
(676, NULL, NULL, 1),
(677, NULL, NULL, 1),
(678, NULL, NULL, 1),
(679, NULL, NULL, 1),
(680, NULL, NULL, 1),
(681, NULL, NULL, 1),
(682, NULL, NULL, 1),
(683, NULL, NULL, 1),
(684, NULL, NULL, 1),
(685, NULL, NULL, 1),
(686, NULL, NULL, 1),
(687, NULL, NULL, 1),
(688, NULL, NULL, 1),
(689, NULL, NULL, 1),
(690, NULL, NULL, 1),
(691, NULL, NULL, 1),
(692, NULL, NULL, 1),
(693, NULL, NULL, 1),
(694, NULL, NULL, 1),
(695, NULL, NULL, 1),
(696, NULL, NULL, 1),
(697, NULL, NULL, 1),
(698, NULL, NULL, 1),
(699, NULL, NULL, 1),
(700, NULL, NULL, 1),
(701, NULL, NULL, 1),
(702, NULL, NULL, 1),
(703, NULL, NULL, 1),
(704, NULL, NULL, 1),
(705, NULL, NULL, 1),
(706, NULL, NULL, 1),
(707, NULL, NULL, 1),
(708, NULL, NULL, 1),
(709, NULL, NULL, 1),
(710, NULL, NULL, 1),
(711, NULL, NULL, 1),
(712, NULL, NULL, 1),
(713, NULL, NULL, 1),
(714, NULL, NULL, 1),
(715, NULL, NULL, 1),
(716, NULL, NULL, 1),
(717, NULL, NULL, 1),
(718, NULL, NULL, 1),
(719, NULL, NULL, 1),
(720, NULL, NULL, 1),
(721, NULL, NULL, 1),
(722, NULL, NULL, 1),
(723, NULL, NULL, 1),
(724, NULL, NULL, 1),
(725, NULL, NULL, 1),
(726, NULL, NULL, 1),
(727, NULL, NULL, 1),
(728, NULL, NULL, 1),
(729, NULL, NULL, 1),
(730, NULL, NULL, 1),
(731, NULL, NULL, 1),
(732, NULL, NULL, 1),
(733, NULL, NULL, 1),
(734, NULL, NULL, 1),
(735, NULL, NULL, 1),
(736, NULL, NULL, 1),
(737, NULL, NULL, 1),
(738, NULL, NULL, 1),
(739, NULL, NULL, 1),
(740, NULL, NULL, 1),
(741, NULL, NULL, 1),
(742, NULL, NULL, 1),
(743, NULL, NULL, 1),
(744, NULL, NULL, 1),
(745, NULL, NULL, 1),
(746, NULL, NULL, 1),
(747, NULL, NULL, 1),
(748, NULL, NULL, 1),
(749, '2022-07-31', 3000, 1),
(750, '2022-07-31', 3000, 1),
(751, '2022-07-31', 3000, 1),
(752, '2022-07-24', 3000, 1),
(753, '2022-07-31', 3000, 1),
(754, '2022-07-24', 3000, 1),
(755, '2022-07-24', 3000, 1),
(756, '2022-07-31', 1000, 1),
(757, '2022-07-24', 3000, 1),
(758, '2022-07-31', 1000, 1),
(759, '2022-07-31', 1000, 1),
(760, '2022-07-31', 1000, 1),
(761, '2022-07-29', 500, 1),
(762, '2022-07-29', 500, 1),
(763, '2022-07-29', 500, 1),
(764, '2022-07-29', 500, 1),
(765, '2022-07-29', 500, 1),
(766, '2022-07-29', 100, 1),
(767, '2022-07-29', 100, 1),
(768, '2022-07-29', 500, 1),
(769, '2022-07-29', 500, 1),
(770, NULL, NULL, 1),
(771, NULL, NULL, 1),
(772, NULL, NULL, 1),
(773, NULL, NULL, 1),
(774, NULL, NULL, 1),
(775, NULL, NULL, 1),
(776, NULL, NULL, 1),
(777, NULL, NULL, 1),
(778, NULL, NULL, 1),
(779, '2022-07-31', 5000, 1),
(780, '2022-07-31', 5000, 1),
(781, '2022-07-31', 5000, 1),
(782, '2022-07-31', 5000, 1),
(783, '2022-07-31', 200, 1),
(784, '2022-07-31', 200, 1),
(785, '2022-07-24', 500, 1),
(786, '2022-07-30', 300, 1),
(787, '2022-07-24', 500, 1),
(788, '2022-07-29', 200, 1),
(789, '2022-07-29', 200, 1),
(790, '2022-07-31', 100, 1),
(791, '2022-07-31', 100, 1),
(792, '2022-07-31', 100, 1),
(793, '2022-07-31', 100, 1),
(794, '2022-07-31', 100, 1),
(795, '2022-07-31', 100, 1),
(796, '2022-07-31', 100, 1),
(797, '2022-07-31', 300, 1),
(798, '2022-07-31', 300, 1),
(799, '2022-07-31', 300, 1),
(800, '2022-07-03', 500, 1),
(801, '2022-07-10', 300, 1),
(802, '2022-07-31', 100, 1),
(803, '2022-07-31', 100, 1),
(804, '2022-07-31', 300, 1),
(805, '2022-07-31', 300, 1),
(806, '2022-07-31', 300, 1),
(807, NULL, NULL, 1),
(808, '2022-07-31', 300, 1),
(809, '2022-07-31', 300, 1),
(810, '2022-07-31', 300, 1),
(811, '2022-07-31', 300, 1),
(812, '2022-07-31', 300, 1),
(813, '2022-07-30', 200, 1),
(814, '2022-07-31', 300, 1),
(815, '2022-07-30', 200, 1),
(816, '2022-07-31', 100, 1),
(817, '2022-07-31', 100, 1),
(818, '2022-07-31', 100, 1),
(819, '2022-07-31', 100, 1),
(820, '2022-07-31', 100, 1),
(821, '2022-07-31', 100, 1),
(822, '2022-07-31', 1500, 1),
(823, '2022-07-31', 1500, 1),
(824, '2022-07-31', 1500, 1),
(825, '2022-07-31', 200, 1),
(826, '2022-07-31', 1500, 1),
(827, '2022-07-31', 400, 1),
(828, '2022-07-30', 400, 1),
(829, '2022-07-30', 400, 1),
(830, '2022-07-31', 200, 1),
(831, '2022-07-30', 400, 1),
(832, '2022-07-31', 200, 1),
(833, '2022-07-31', 200, 1),
(834, '2022-07-29', 500, 1),
(835, '2022-07-10', 500, 1),
(836, '2022-07-11', 300, 1),
(837, '2022-07-11', 300, 1),
(838, '2022-07-11', 300, 1),
(839, '2022-07-31', 300, 1),
(840, '2022-07-31', 300, 1),
(841, '2022-07-31', 300, 1),
(842, '2022-07-31', 100, 1),
(843, NULL, NULL, 1),
(844, '2022-07-10', 300, 1),
(845, '2022-07-10', 300, 1),
(846, '2022-07-31', 100, 1),
(847, '2022-07-10', 300, 1),
(848, '2022-07-31', 100, 1),
(849, '2022-07-31', 200, 1),
(850, '2022-07-31', 200, 1),
(851, '2022-07-24', 500, 1),
(852, '2022-07-24', 500, 1),
(853, '2022-07-24', 500, 1),
(854, '2022-07-10', 300, 1),
(855, '2022-07-10', 300, 1),
(856, '2022-07-31', 300, 1),
(857, '2022-07-31', 360, 1),
(858, '2022-07-31', 360, 1),
(859, '2022-07-31', 360, 1),
(860, '2022-07-31', 360, 1),
(861, '2022-07-31', 360, 1),
(862, '2022-07-31', 360, 1),
(863, '2022-07-31', 360, 1),
(864, '2022-07-31', 360, 1),
(865, '2022-07-31', 360, 1),
(866, '2022-07-31', 360, 1),
(867, '2022-07-31', 360, 1),
(868, '2022-07-31', 360, 1),
(869, '2022-07-31', 360, 1),
(870, '2022-07-31', 360, 1),
(871, '2022-07-31', 360, 1),
(872, '2022-07-31', 360, 1),
(873, '2022-07-31', 360, 1),
(874, '2022-07-31', 360, 1),
(875, '2022-07-31', 360, 1),
(876, '2022-07-31', 360, 1),
(877, '2022-07-31', 360, 1),
(878, '2022-07-31', 360, 1),
(879, '2022-07-31', 360, 1),
(880, '2022-07-31', 360, 1),
(881, '2022-07-31', 360, 1),
(882, '2022-07-31', 360, 1),
(883, '2022-07-31', 360, 1),
(884, '2022-07-31', 360, 1),
(885, '2022-07-31', 360, 1),
(886, '2022-07-31', 360, 1),
(887, '2022-07-31', 360, 1),
(888, '2022-07-31', 360, 1),
(889, '2022-07-31', 360, 1),
(890, '2022-07-31', 360, 1),
(891, '2022-07-31', 200, 1),
(892, '2022-07-31', 500, 1),
(893, '2022-07-31', 500, 1),
(894, '2022-07-31', 500, 1),
(895, '2022-07-31', 500, 1),
(896, '2022-07-29', 500, 1),
(897, '2022-07-31', 500, 1),
(898, '2022-07-31', 400, 1),
(899, '2022-07-31', 300, 1),
(900, '2022-07-31', 300, 1),
(901, '2022-07-31', 300, 1),
(902, NULL, NULL, 1),
(903, '2022-07-31', 500, 1),
(904, NULL, NULL, 1),
(905, '2022-07-31', 500, 1),
(906, '2022-07-31', 500, 1),
(907, '2022-07-31', 500, 1),
(908, '2022-07-31', 500, 1),
(909, '2022-07-31', 500, 1),
(910, '2022-07-31', 500, 1),
(911, '2022-07-31', 500, 1),
(912, '2022-07-31', 500, 1),
(913, '2022-07-31', 500, 1),
(914, '2022-07-31', 500, 1),
(915, '2022-07-31', 500, 1),
(916, '2022-07-31', 500, 1),
(917, '2022-07-31', 500, 1),
(918, '2022-07-31', 500, 1),
(919, '2022-07-31', 500, 1),
(920, '2022-07-31', 500, 1),
(921, '2022-07-31', 500, 1),
(922, '2022-07-31', 500, 1),
(923, '2022-07-31', 500, 1),
(924, '2022-07-31', 500, 1),
(925, '2022-07-31', 500, 1),
(926, '2022-07-31', 500, 1),
(927, '2022-07-31', 500, 1),
(928, '2022-07-31', 500, 1),
(929, '2022-07-10', 300, 1),
(930, '2022-07-31', 200, 1),
(931, NULL, NULL, 1),
(932, '2022-07-31', 50, 1),
(933, '2022-07-31', 50, 1),
(934, NULL, NULL, 1),
(935, NULL, NULL, 1),
(936, NULL, NULL, 2),
(937, NULL, NULL, 3),
(938, '2022-08-16', 300, 3),
(939, '2022-08-16', 300, 3),
(940, NULL, NULL, 3),
(941, NULL, NULL, 1),
(942, NULL, NULL, 1),
(943, NULL, NULL, 1),
(944, NULL, NULL, 1),
(945, NULL, NULL, 1),
(946, NULL, NULL, 6),
(947, NULL, NULL, 9),
(948, NULL, NULL, 8),
(949, NULL, NULL, 1),
(950, NULL, NULL, 1),
(951, NULL, NULL, 1),
(952, NULL, NULL, 1),
(953, '2022-08-23', 1000, 1),
(954, NULL, NULL, 1),
(955, '2022-08-23', 1000, 1),
(956, '2022-08-23', 1000, 1),
(957, NULL, NULL, 1),
(958, NULL, NULL, 1),
(959, NULL, NULL, 1),
(960, NULL, NULL, 1),
(961, NULL, NULL, 1),
(962, NULL, NULL, 1),
(963, NULL, NULL, 1),
(964, NULL, NULL, 1),
(965, NULL, NULL, 1),
(966, NULL, NULL, 2),
(967, NULL, NULL, 1),
(968, NULL, NULL, 1),
(969, NULL, NULL, 2),
(970, NULL, NULL, 1),
(971, NULL, NULL, 1),
(972, NULL, NULL, 1),
(973, NULL, NULL, 1),
(974, NULL, NULL, 2),
(975, NULL, NULL, 1),
(976, NULL, NULL, 3),
(977, NULL, NULL, 3),
(978, NULL, NULL, 4),
(979, NULL, NULL, 4),
(980, NULL, NULL, 4),
(981, NULL, NULL, 4),
(982, NULL, NULL, 1),
(983, NULL, NULL, 1),
(984, NULL, NULL, 3),
(985, NULL, NULL, 1),
(986, NULL, NULL, 1),
(987, NULL, NULL, 3),
(988, NULL, NULL, 1),
(989, NULL, NULL, 1),
(990, NULL, NULL, 5),
(991, NULL, NULL, 1),
(992, NULL, NULL, 1),
(993, NULL, NULL, 1),
(994, '2022-08-23', 1000, 1),
(995, '2022-08-23', 1000, 1),
(996, '2022-08-23', 1000, 1),
(997, '2022-08-23', 1000, 1),
(998, NULL, NULL, 1),
(999, NULL, NULL, 1),
(1000, NULL, NULL, 1),
(1001, NULL, NULL, 1),
(1002, NULL, NULL, 1),
(1003, NULL, NULL, 1),
(1004, NULL, NULL, 1),
(1005, NULL, NULL, 1),
(1006, NULL, NULL, 1),
(1007, NULL, NULL, 1),
(1008, NULL, NULL, 1),
(1009, '2022-08-23', 2000, 1),
(1010, '2022-08-23', 2000, 1),
(1011, NULL, NULL, 2),
(1012, NULL, NULL, 1),
(1013, NULL, NULL, 3),
(1014, NULL, NULL, 4),
(1015, NULL, NULL, 2),
(1016, NULL, NULL, 1),
(1017, NULL, NULL, 1),
(1018, NULL, NULL, 1),
(1019, NULL, NULL, 1),
(1020, '2022-08-23', 5000, 1),
(1021, '2022-08-23', 5000, 1),
(1022, '2022-08-23', 1000, 1),
(1023, NULL, NULL, 1),
(1024, '2022-08-23', 1000, 1),
(1025, NULL, NULL, 1),
(1026, NULL, NULL, 1),
(1027, NULL, NULL, 1),
(1028, NULL, NULL, 2),
(1029, NULL, NULL, 1),
(1030, '2022-08-23', 2000, 1),
(1031, NULL, NULL, 1),
(1032, NULL, NULL, 1),
(1033, NULL, NULL, 1),
(1034, NULL, NULL, 1),
(1035, NULL, NULL, 1),
(1036, NULL, NULL, 1),
(1037, NULL, NULL, 1),
(1038, NULL, NULL, 1),
(1039, NULL, NULL, 1),
(1040, '2022-08-23', 5000, 1),
(1041, '2022-08-23', 5000, 1),
(1042, NULL, NULL, 1),
(1043, NULL, NULL, 1),
(1044, '2022-08-23', 1000, 1),
(1045, '2022-08-23', 1000, 1),
(1046, NULL, NULL, 1),
(1047, NULL, NULL, 1),
(1048, NULL, NULL, 14),
(1049, '2022-08-23', 100, 14),
(1050, NULL, NULL, 14),
(1051, '2022-08-23', 100, 14),
(1052, NULL, NULL, 14),
(1053, NULL, NULL, 1),
(1054, NULL, NULL, 1),
(1055, NULL, NULL, 13),
(1056, NULL, NULL, 14),
(1057, NULL, NULL, 14),
(1058, '2022-08-23', 100, 14),
(1059, NULL, NULL, 14),
(1060, NULL, NULL, 14),
(1061, NULL, NULL, 14),
(1062, NULL, NULL, 14),
(1063, NULL, NULL, 14),
(1064, NULL, NULL, 14),
(1065, NULL, NULL, 14),
(1066, NULL, NULL, 14),
(1067, NULL, NULL, 11),
(1068, NULL, NULL, 14),
(1069, NULL, NULL, 14),
(1070, NULL, NULL, 14),
(1071, NULL, NULL, 14),
(1072, NULL, NULL, 14),
(1073, NULL, NULL, 14),
(1074, NULL, NULL, 14),
(1075, NULL, NULL, 14),
(1076, NULL, NULL, 14),
(1077, NULL, NULL, 14),
(1078, NULL, NULL, 14),
(1079, '2022-08-23', 100, 14),
(1080, NULL, NULL, 14),
(1081, NULL, NULL, 9),
(1082, NULL, NULL, 14),
(1083, '2022-08-23', 100, 14),
(1084, NULL, NULL, 14),
(1085, NULL, NULL, 14),
(1086, '2022-08-23', 100, 14),
(1087, '2022-08-24', 100, 13),
(1088, '2022-08-24', 100, 13),
(1089, '2022-08-24', 100, 13),
(1090, '2022-08-24', 200, 13),
(1091, '2022-08-24', 40, 13),
(1092, '2022-08-24', 20, 13),
(1093, '2022-08-24', 20, 13),
(1094, '2022-08-24', 20, 13),
(1095, '2022-08-24', 10, 13),
(1096, '2022-08-24', 30, 14),
(1097, '2022-08-26', 5, 14);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `uniqueid` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `account_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Hospital` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departments` int(11) DEFAULT NULL,
  `medicaldepartments` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `releving_date` date DEFAULT NULL,
  `allowance` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`allowance`)),
  `serve` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearsexp` bigint(100) DEFAULT NULL,
  `dob` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subrole` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consultation_fee` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uniqueid`, `name`, `email`, `age`, `email_verified_at`, `password`, `role`, `address`, `date_of_joining`, `account_no`, `bank`, `ifsc`, `remember_token`, `created_at`, `updated_at`, `Hospital`, `departments`, `medicaldepartments`, `phone`, `status`, `releving_date`, `allowance`, `serve`, `salary`, `yearsexp`, `dob`, `subrole`, `sex`, `consultation_fee`) VALUES
(37, '0400037', 'kimshr', 'kimshr@gmail.com', 0, NULL, '$2y$10$ZYxNv0w57OfilD7zB3SJceN.lYwL90L8ZjvlCIIC2lRd/AwQVGWmK', 'HR', '', NULL, NULL, '', NULL, NULL, '2021-10-11 23:40:07', '2021-10-11 23:40:07', 'kims intetrnational', 0, 'Departments', NULL, NULL, NULL, '{\"_token\":\"9nhVUoR2CKlhMyxUzjFZU77UOBuKYYGfizlR39Jg\",\"staffid\":\"37\",\"allowancenamenewallowance\":\"newallowance\",\"allowancenametestallowance\":\"testallowance\",\"8\":\"on\",\"allowancenametravel_allowance\":\"travel allowance\"}', NULL, '20000', NULL, NULL, NULL, NULL, 0),
(47, '0900047', 'kimsadmin', 'kimsadmin@gmail.com', 0, NULL, '$2y$10$LJAbGCLx1uDpnCJHoYdGFORN4Jk9ArjK2cd8oKO4vP1avcnbdiwc2', 'hospitaladmin', '', NULL, NULL, '', NULL, NULL, '2021-11-01 02:18:49', '2021-11-01 02:18:49', 'kims intetrnational', 0, NULL, '7894', 0, NULL, NULL, '--', '30000', NULL, NULL, NULL, NULL, 0),
(58, '1100058', 'test-d-clinic-staff', 'test-d-clinic-staff@gmail.com', 0, NULL, '$2y$10$e0eVcQVjn9YfkY2LvQ/57e5sbHyOaGQSA4h32mjd/M2eBnh03w/AK', 'lab', '', NULL, NULL, '', NULL, NULL, '2021-12-18 01:29:39', '2021-12-18 01:29:39', 'D-clinic', 0, NULL, '987', 0, NULL, NULL, NULL, '35000', 10, NULL, NULL, NULL, 0),
(72, '1100072', 'wer', 'wer@gfg.hjj', 0, NULL, '$2y$10$T7TLOSqyhjFbrRtqsfyguO9CwsnQ1SYFx.ezd7n4oIL9iAK7QPXB6', 'Role', '', NULL, NULL, '', NULL, NULL, '2021-12-22 02:45:17', '2021-12-22 02:45:17', 'D-clinic', 0, NULL, '435', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(75, '0900074', 'kimsstore', 'kimsstore@gmail.com', 0, NULL, '$2y$10$Kim4TEicyWP46RX8cgi87uARtdJNBaHBkKXhaxAeaQi6vf5sM8r/G', 'store', '', NULL, NULL, '', NULL, NULL, '2022-01-03 02:44:35', '2022-01-03 02:44:35', 'kims intetrnational', 0, NULL, '4', 0, NULL, NULL, NULL, '234', 34, '2022-01-12', NULL, NULL, 0),
(76, '0900076', 'casuality', 'casuality@gmail.com', 0, NULL, '$2y$10$5bIy9/k7PBiYHZTtXB6dvOa5Lx0Xls0Uv9lqOY/fkd9vb49IBKTNC', 'casuality', '', NULL, NULL, '', NULL, NULL, '2022-01-04 05:57:52', '2022-01-04 05:57:52', 'kims intetrnational', 0, NULL, '36', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(77, '0900077', 'nurse', 'nurse@gmail.com', 0, NULL, '$2y$10$U1qk1MtKqOtk02OxaDDGE.CTsqHLnHbkmMXYpJWVgEfa0iKoioC4a', 'nurse', '', NULL, NULL, '', NULL, NULL, '2022-01-04 06:37:33', '2022-01-04 06:37:33', 'kims intetrnational', 0, NULL, '123', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(78, '0900078', 'hospitaladmin', 'hospitaladmin@gmail.com', 0, NULL, '$2y$10$9v9uLzRsReCXbFvVgB0SR.NJj1K5TQi.C9H7y442e.7fywpa490rW', 'hospitaladmin', '', NULL, NULL, '', NULL, NULL, '2022-01-09 22:57:04', '2022-01-09 22:57:04', 'kims intetrnational', 0, NULL, '987', 0, NULL, NULL, '--', '35000', NULL, NULL, NULL, NULL, 0),
(80, '0900079', 'Dep Admin', 'departmentadmin@gmail.com', 0, NULL, '$2y$10$OU7nsSW2KqdUONHyR8I7IugxyVti.8BxHyudVd84NE5zanscnAgbC', 'Department Admin', '', NULL, NULL, '', NULL, NULL, '2022-01-10 23:59:57', '2022-01-10 23:59:57', 'kims intetrnational', 0, NULL, '74', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(81, '0900081', 'entadmin', 'entadmin@gmail.com', 0, NULL, '$2y$10$itd3FYq1pmrnKVA2/IC40eZ/ks9FkDAtbIubWiRdPyEiOo.fJcKXu', 'Department Admin', '', NULL, NULL, '', NULL, NULL, '2022-01-11 01:06:59', '2022-01-11 01:06:59', 'kims intetrnational', 0, NULL, '12', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(82, '0900082', 'entnurse', 'entnurse@gmail.com', 0, NULL, '$2y$10$NW9Guz7KPCDwJnuJif5uBOe8XVbAIHJbjZ6jNXK0JAnzRKiCkkJ1i', 'nurse', '', NULL, NULL, '', NULL, NULL, '2022-01-11 02:00:19', '2022-01-11 02:00:19', 'kims intetrnational', 0, NULL, '9876876554', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(83, '0900083', 'ent lab', 'entlab@gmail.com', 0, NULL, '$2y$10$Cw9puNXzcl/37c1syqDJpehWORcXH7n/k8JMUMDlxUoYen3HeJ/aW', 'lab', '', NULL, NULL, '', NULL, NULL, '2022-01-11 02:01:11', '2022-01-11 02:01:11', 'kims intetrnational', 0, NULL, '9058688758', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(84, '0900084', 'anpham', 'anpham@gmail.com', 0, NULL, '$2y$10$iTBKp2FUltLfyWIhiIZIde7Ou01xQ2fDKIQBxVmg5xYTR2zGCG5SO', 'pharma', '', NULL, NULL, '', NULL, NULL, '2022-01-11 04:33:16', '2022-01-11 04:33:16', 'kims intetrnational', 0, NULL, '21', 0, NULL, NULL, NULL, '30000', 5, '2022-01-11', NULL, NULL, 0),
(85, '0900085', 'testprevilage', 'testprevilage@gmail.com', 0, NULL, '$2y$10$6PdkT5h1bkRs18wZDiVj6ORw1r6NZ07b495cgQZovL84faeoHW3XS', 'test', '', NULL, NULL, '', NULL, NULL, '2022-01-17 02:07:13', '2022-01-17 02:07:13', 'kims intetrnational', 0, NULL, '21', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(86, '0900086', 'dutnurse', 'dutnurse@gmail.com', 0, NULL, '$2y$10$ZbkgoSHkfAD8z/0I/vC60OTD1Z3biAsq0nau/dGAlrE7wzYGrh0Ny', 'nurse', '', NULL, NULL, '', NULL, NULL, '2022-01-17 05:28:34', '2022-01-17 05:28:34', 'kims intetrnational', 0, NULL, '321', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(89, '0900089', 'aaa', 'q@qwe.co.in', 0, NULL, '$2y$10$.uzngz7LKcqYHSsuuM1hIuOQ4dF54qAaS2fQk323g9eQah..wa51a', 'Department Head', '', NULL, NULL, '', NULL, NULL, '2022-02-01 05:32:17', '2022-02-01 05:32:17', 'kims intetrnational', 0, NULL, '4142', 0, NULL, NULL, NULL, '35000', NULL, NULL, NULL, NULL, 0),
(96, '0900090', 'nursetestdep', 'nursetestdep@gmail.com', 0, NULL, '$2y$10$gZHPvyhGvPVBIryOJhAfOupzRHeL/TTEirZL4gWiMNYTgMc8nOBZW', 'nurse', '', NULL, NULL, '', NULL, NULL, '2022-02-15 02:33:23', '2022-02-15 02:33:23', 'kims intetrnational', 0, 'Nursing Department', '54', 0, NULL, NULL, NULL, '30000', NULL, NULL, NULL, NULL, 0),
(98, '0900098', 'cardiologydoctor', 'cardiologydoctor@gmail.com', 0, NULL, '$2y$10$6/y0TDrj2l6fH.7I9qa18eEEjsN0RKgUMoH3LdSVxa/MtZQzSPIxe', 'doctor', '', NULL, NULL, '', NULL, NULL, '2022-02-16 02:31:36', '2022-02-16 02:31:36', 'kims intetrnational', 0, NULL, '21', 0, NULL, NULL, NULL, '30000', NULL, NULL, NULL, NULL, 0),
(99, '0900099', 'card', 'card@gmail.com', 0, NULL, '$2y$10$pQbgMXAq9Ri8pJNexLTuXeUpnfsfK7xx73EDrHlcU0Rml8JYgk3xu', 'doctor', '', NULL, NULL, '', NULL, NULL, '2022-02-16 02:33:37', '2022-02-16 02:33:37', 'kims intetrnational', 0, NULL, '4', 0, NULL, NULL, NULL, '20000', NULL, NULL, NULL, NULL, 0),
(102, '0900102', 'Allan Joseph', 'allan@gmail.com', 28, NULL, '$2y$10$4p3dJvWHh6veejBtNNPv9OTfKCmMRUb.7X1PK/0.IvTPRKZivwlxi', NULL, 'Allan Villa', '0000-00-00', NULL, '', NULL, NULL, '2022-02-19 05:47:03', '2022-02-19 05:47:03', 'kims intetrnational', NULL, NULL, '9874561231', 1, '0000-00-00', NULL, NULL, '100000', NULL, NULL, NULL, NULL, NULL);

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
-- Indexes for table `budget_types`
--
ALTER TABLE `budget_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callambulance`
--
ALTER TABLE `callambulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_box`
--
ALTER TABLE `cra_add_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_event`
--
ALTER TABLE `cra_add_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_file_bringup_reminder`
--
ALTER TABLE `cra_add_file_bringup_reminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_file_progress`
--
ALTER TABLE `cra_add_file_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_incomming_letters`
--
ALTER TABLE `cra_add_incomming_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_new_instructions`
--
ALTER TABLE `cra_add_new_instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_office_instructions`
--
ALTER TABLE `cra_add_office_instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_user_department`
--
ALTER TABLE `cra_add_user_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_user_group`
--
ALTER TABLE `cra_add_user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_add_user_roles`
--
ALTER TABLE `cra_add_user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_bank_details`
--
ALTER TABLE `cra_bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_billable_activities`
--
ALTER TABLE `cra_billable_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_book_a_court`
--
ALTER TABLE `cra_book_a_court`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_bringup`
--
ALTER TABLE `cra_bringup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_client_monthly_file_status_report`
--
ALTER TABLE `cra_client_monthly_file_status_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_client_pickup_reception`
--
ALTER TABLE `cra_client_pickup_reception`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_client_service_at_reception`
--
ALTER TABLE `cra_client_service_at_reception`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_company_branch_details`
--
ALTER TABLE `cra_company_branch_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_company_details`
--
ALTER TABLE `cra_company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_complaint_register`
--
ALTER TABLE `cra_complaint_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_conversations`
--
ALTER TABLE `cra_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_corporate_client_details`
--
ALTER TABLE `cra_corporate_client_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_courts`
--
ALTER TABLE `cra_courts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_currency_list`
--
ALTER TABLE `cra_currency_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_customer_followup`
--
ALTER TABLE `cra_customer_followup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_customer_quotation`
--
ALTER TABLE `cra_customer_quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_customer_registration`
--
ALTER TABLE `cra_customer_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_description_selection`
--
ALTER TABLE `cra_description_selection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_document_detials`
--
ALTER TABLE `cra_document_detials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_file_progress_report`
--
ALTER TABLE `cra_file_progress_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_file_report`
--
ALTER TABLE `cra_file_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_file_status_summary`
--
ALTER TABLE `cra_file_status_summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_file_types`
--
ALTER TABLE `cra_file_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_hourly_rate`
--
ALTER TABLE `cra_hourly_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_individual_client_details`
--
ALTER TABLE `cra_individual_client_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_instructions_report`
--
ALTER TABLE `cra_instructions_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_invoice_items`
--
ALTER TABLE `cra_invoice_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_leave_days`
--
ALTER TABLE `cra_leave_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_letter_types`
--
ALTER TABLE `cra_letter_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_manage_user_department`
--
ALTER TABLE `cra_manage_user_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_new_safe_management`
--
ALTER TABLE `cra_new_safe_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_open_new_file_details`
--
ALTER TABLE `cra_open_new_file_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_paired_account`
--
ALTER TABLE `cra_paired_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_partner_revenue_share`
--
ALTER TABLE `cra_partner_revenue_share`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_payment_item`
--
ALTER TABLE `cra_payment_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_reg_new_user`
--
ALTER TABLE `cra_reg_new_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_request_safe_item`
--
ALTER TABLE `cra_request_safe_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_safe_item_request`
--
ALTER TABLE `cra_safe_item_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_safe_register_report`
--
ALTER TABLE `cra_safe_register_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_staff_monthly_status_report`
--
ALTER TABLE `cra_staff_monthly_status_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_tax_chart`
--
ALTER TABLE `cra_tax_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_tax_excise`
--
ALTER TABLE `cra_tax_excise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_tax_vat`
--
ALTER TABLE `cra_tax_vat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_tax_wht`
--
ALTER TABLE `cra_tax_wht`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_tax_wht-vat`
--
ALTER TABLE `cra_tax_wht-vat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_template_category`
--
ALTER TABLE `cra_template_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_town_city`
--
ALTER TABLE `cra_town_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_transport_zone`
--
ALTER TABLE `cra_transport_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_weekend_and_holiday`
--
ALTER TABLE `cra_weekend_and_holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cra_work_flow`
--
ALTER TABLE `cra_work_flow`
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
-- Indexes for table `manufacturer_ledger_details`
--
ALTER TABLE `manufacturer_ledger_details`
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
-- Indexes for table `medicines_details`
--
ALTER TABLE `medicines_details`
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
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pharma_requests`
--
ALTER TABLE `pharma_requests`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `store_issued_items`
--
ALTER TABLE `store_issued_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_requests`
--
ALTER TABLE `store_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_store`
--
ALTER TABLE `sub_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_ledger_details`
--
ALTER TABLE `supplier_ledger_details`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `allowance`
--
ALTER TABLE `allowance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
-- AUTO_INCREMENT for table `budget_types`
--
ALTER TABLE `budget_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `callambulance`
--
ALTER TABLE `callambulance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cra_add_box`
--
ALTER TABLE `cra_add_box`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `cra_add_event`
--
ALTER TABLE `cra_add_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cra_add_file_bringup_reminder`
--
ALTER TABLE `cra_add_file_bringup_reminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cra_add_file_progress`
--
ALTER TABLE `cra_add_file_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cra_add_incomming_letters`
--
ALTER TABLE `cra_add_incomming_letters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cra_add_new_instructions`
--
ALTER TABLE `cra_add_new_instructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cra_add_office_instructions`
--
ALTER TABLE `cra_add_office_instructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cra_add_user_department`
--
ALTER TABLE `cra_add_user_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cra_add_user_group`
--
ALTER TABLE `cra_add_user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cra_add_user_roles`
--
ALTER TABLE `cra_add_user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cra_bank_details`
--
ALTER TABLE `cra_bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cra_billable_activities`
--
ALTER TABLE `cra_billable_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cra_book_a_court`
--
ALTER TABLE `cra_book_a_court`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cra_bringup`
--
ALTER TABLE `cra_bringup`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cra_client_monthly_file_status_report`
--
ALTER TABLE `cra_client_monthly_file_status_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cra_client_pickup_reception`
--
ALTER TABLE `cra_client_pickup_reception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cra_client_service_at_reception`
--
ALTER TABLE `cra_client_service_at_reception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cra_company_branch_details`
--
ALTER TABLE `cra_company_branch_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cra_company_details`
--
ALTER TABLE `cra_company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cra_complaint_register`
--
ALTER TABLE `cra_complaint_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cra_conversations`
--
ALTER TABLE `cra_conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cra_corporate_client_details`
--
ALTER TABLE `cra_corporate_client_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cra_courts`
--
ALTER TABLE `cra_courts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cra_currency_list`
--
ALTER TABLE `cra_currency_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cra_customer_followup`
--
ALTER TABLE `cra_customer_followup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cra_customer_quotation`
--
ALTER TABLE `cra_customer_quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cra_customer_registration`
--
ALTER TABLE `cra_customer_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cra_description_selection`
--
ALTER TABLE `cra_description_selection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cra_document_detials`
--
ALTER TABLE `cra_document_detials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cra_file_progress_report`
--
ALTER TABLE `cra_file_progress_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cra_file_report`
--
ALTER TABLE `cra_file_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cra_file_status_summary`
--
ALTER TABLE `cra_file_status_summary`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cra_file_types`
--
ALTER TABLE `cra_file_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cra_hourly_rate`
--
ALTER TABLE `cra_hourly_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cra_individual_client_details`
--
ALTER TABLE `cra_individual_client_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cra_instructions_report`
--
ALTER TABLE `cra_instructions_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cra_invoice_items`
--
ALTER TABLE `cra_invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cra_leave_days`
--
ALTER TABLE `cra_leave_days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cra_letter_types`
--
ALTER TABLE `cra_letter_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cra_manage_user_department`
--
ALTER TABLE `cra_manage_user_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cra_new_safe_management`
--
ALTER TABLE `cra_new_safe_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cra_open_new_file_details`
--
ALTER TABLE `cra_open_new_file_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `cra_paired_account`
--
ALTER TABLE `cra_paired_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cra_partner_revenue_share`
--
ALTER TABLE `cra_partner_revenue_share`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cra_payment_item`
--
ALTER TABLE `cra_payment_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cra_reg_new_user`
--
ALTER TABLE `cra_reg_new_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cra_request_safe_item`
--
ALTER TABLE `cra_request_safe_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cra_safe_item_request`
--
ALTER TABLE `cra_safe_item_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cra_safe_register_report`
--
ALTER TABLE `cra_safe_register_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cra_staff_monthly_status_report`
--
ALTER TABLE `cra_staff_monthly_status_report`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cra_tax_chart`
--
ALTER TABLE `cra_tax_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cra_tax_excise`
--
ALTER TABLE `cra_tax_excise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `cra_tax_vat`
--
ALTER TABLE `cra_tax_vat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cra_tax_wht`
--
ALTER TABLE `cra_tax_wht`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cra_tax_wht-vat`
--
ALTER TABLE `cra_tax_wht-vat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cra_template_category`
--
ALTER TABLE `cra_template_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `cra_town_city`
--
ALTER TABLE `cra_town_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cra_transport_zone`
--
ALTER TABLE `cra_transport_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cra_weekend_and_holiday`
--
ALTER TABLE `cra_weekend_and_holiday`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cra_work_flow`
--
ALTER TABLE `cra_work_flow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dailyattendances`
--
ALTER TABLE `dailyattendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4416;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `journal_transactions`
--
ALTER TABLE `journal_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `ledgeraccount_categories`
--
ALTER TABLE `ledgeraccount_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `ledgeraccount_subcategories`
--
ALTER TABLE `ledgeraccount_subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
-- AUTO_INCREMENT for table `manufacturer_ledger_details`
--
ALTER TABLE `manufacturer_ledger_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `medicaldepartments`
--
ALTER TABLE `medicaldepartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicines_details`
--
ALTER TABLE `medicines_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `patientinsurance`
--
ALTER TABLE `patientinsurance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patientprofiles`
--
ALTER TABLE `patientprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patienttests`
--
ALTER TABLE `patienttests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharma_requests`
--
ALTER TABLE `pharma_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `purchase_return`
--
ALTER TABLE `purchase_return`
  MODIFY `purchase_return_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `store_requests`
--
ALTER TABLE `store_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_store`
--
ALTER TABLE `sub_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier_ledger_details`
--
ALTER TABLE `supplier_ledger_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1098;

--
-- AUTO_INCREMENT for table `usermanagements`
--
ALTER TABLE `usermanagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

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
