-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2020 at 10:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outpassdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `outpass`
--

CREATE TABLE `outpass` (
  `created_at` datetime DEFAULT current_timestamp(),
  `outpass_number` bigint(20) NOT NULL,
  `register_number` varchar(30) DEFAULT NULL,
  `outpass_type` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `travel_type` varchar(30) NOT NULL,
  `in_time` time DEFAULT NULL,
  `in_date` date DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `out_date` date DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'created',
  `warden` varchar(30) DEFAULT NULL,
  `watch_man` varchar(30) DEFAULT NULL,
  `gate_in` datetime DEFAULT NULL,
  `gate_out` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outpass`
--

INSERT INTO `outpass` (`created_at`, `outpass_number`, `register_number`, `outpass_type`, `place`, `travel_type`, `in_time`, `in_date`, `out_time`, `out_date`, `reason`, `status`, `warden`, `watch_man`, `gate_in`, `gate_out`) VALUES
('2020-03-20 19:52:00', 4, '1U17CA111', 'Festival', 'sas', 'parent', '09:59:00', '2020-03-22', '20:59:00', '2020-03-21', 'assaf', 'closed', 'yes', 'yes', NULL, '2020-03-28 20:40:11'),
('2020-03-20 19:53:43', 5, '1U17CA111', 'Festival', 'sas', 'parent', '09:59:00', '2020-03-22', '20:59:00', '2020-03-21', 'assaf', 'reject', 'no', NULL, NULL, NULL),
('2020-03-29 02:25:58', 6, '1U17CA111', 'General', 'gfg', 'parent', '10:00:00', '2020-03-31', '12:00:00', '2020-03-30', 'asfmfn', 'closed', 'yes', 'yes', '2020-03-29 02:28:17', '2020-03-28 20:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `register_number` varchar(30) NOT NULL,
  `student_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `parent_name` varchar(30) DEFAULT NULL,
  `parent_number` varchar(10) DEFAULT NULL,
  `hostel_name` varchar(30) DEFAULT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `s_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`register_number`, `student_name`, `email`, `department`, `phone_number`, `parent_name`, `parent_number`, `hostel_name`, `room_number`, `s_image`) VALUES
('1U17CA111', 'JAI GABRIEL', 'jai122123@gmail.com', 'B.Sc Electronics & Communication', '1234567890', 'GANESAN', '1234567890', 'Boys hostel 4', '22', '1U17CA111.jpg'),
('1U17CA12015', 'JAYASANKAR G', 'jai@gmail.com', 'B.Sc Information Technology', '1234567890', 'JAI', '1234567890', 'Velavan', '44', '1U17CA12015.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `username` varchar(30) NOT NULL,
  `passwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`username`, `passwd`) VALUES
('WARDEN', '333');

-- --------------------------------------------------------

--
-- Table structure for table `watchman`
--

CREATE TABLE `watchman` (
  `username` varchar(30) NOT NULL,
  `passwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watchman`
--

INSERT INTO `watchman` (`username`, `passwd`) VALUES
('WATCHMAN', '222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outpass`
--
ALTER TABLE `outpass`
  ADD PRIMARY KEY (`outpass_number`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`register_number`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `watchman`
--
ALTER TABLE `watchman`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outpass`
--
ALTER TABLE `outpass`
  MODIFY `outpass_number` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
