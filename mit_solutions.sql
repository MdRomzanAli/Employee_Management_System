-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 10:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mit_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `employee_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Shift` varchar(128) NOT NULL,
  `entry_time` varchar(128) NOT NULL,
  `exit_time` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `Comment` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily_convence`
--

CREATE TABLE `daily_convence` (
  `C_ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `item` varchar(128) NOT NULL,
  `amount` varchar(128) NOT NULL,
  `paidby` varchar(128) NOT NULL,
  `invoice` varchar(128) DEFAULT NULL,
  `comment` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daily_convence`
--

INSERT INTO `daily_convence` (`C_ID`, `date`, `item`, `amount`, `paidby`, `invoice`, `comment`) VALUES
(1, '0000-00-00', '2023-04-04', '10', 'ss', '', '                    \r\n                       '),
(2, '2023-04-05', 'water', '20', 'rakib', '', '                    \r\n                       '),
(3, '2023-04-05', 'water', '20', 'rakib', '', '                    \r\n                       '),
(4, '0000-00-00', '', '', '', '', '                    \r\n                       ');

-- --------------------------------------------------------

--
-- Table structure for table `employee_profile`
--

CREATE TABLE `employee_profile` (
  `ID` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `department` varchar(128) NOT NULL,
  `employee_level` varchar(128) NOT NULL,
  `employee_ID` int(11) NOT NULL,
  `designation` varchar(128) NOT NULL,
  `Join_date` date NOT NULL,
  `salary` varchar(128) NOT NULL,
  `target` varchar(128) NOT NULL,
  `percentage` varchar(128) NOT NULL,
  `NIDpdf` varchar(128) DEFAULT NULL,
  `Phone` varchar(128) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_profile`
--

INSERT INTO `employee_profile` (`ID`, `name`, `gender`, `email`, `password`, `department`, `employee_level`, `employee_ID`, `designation`, `Join_date`, `salary`, `target`, `percentage`, `NIDpdf`, `Phone`, `photo`) VALUES
(14, 'romzan', 'male', 'romzan@gmail.com', '52415415', 'Sales', 'parmanent', 1, 'manager', '2023-04-11', '2121202', '1212', '21212', '', '411521541', ''),
(15, 'jakir', 'male', 'romzan@gmail.com', '12132112', 'Training', 'intern', 2, 'manager', '2023-04-05', '1212212', '10', '10', '', '10111525', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`employee_ID`);

--
-- Indexes for table `daily_convence`
--
ALTER TABLE `daily_convence`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `employee_profile`
--
ALTER TABLE `employee_profile`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `employee_ID` (`employee_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_convence`
--
ALTER TABLE `daily_convence`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_profile`
--
ALTER TABLE `employee_profile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`employee_ID`) REFERENCES `employee_profile` (`employee_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
