-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 09:50 AM
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
-- Database: `testapi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `code` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `confirmpassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`code`, `email`, `password`, `picture`, `confirmpassword`) VALUES
(3, 'scot@riverbanksmedia.conm', 'PnY98$$hBm45#', 'images/IMG-20200530-WA0002.jpg', '123'),
(4, 'adc@gmail.com', '123456', 'images/assign 1.jpg', ''),
(5, 'ali@gmail.com', 'abc123', 'images/Screenshot_8.jpg', ''),
(6, 'tami@gmail.com', '123456', 'images/11.JPG', ''),
(7, 'tami@gmail.com', '123456', 'images/masters-removebg-preview.png', ''),
(8, 'umerakbar@gmail.com', 'hello123', 'images/', ''),
(9, 'tami@gmail.com', '123456', 'images/', ''),
(10, 'aliansari@gmail.com', 'taimoor', 'images/', ''),
(11, 'hello@gmail.com', 'tami123', '', ''),
(12, 'hello@gmail.com', '123456', '', ''),
(13, 'tami@gmail.com', '123456', '', ''),
(14, 'john@gmail.com', '123456', '', ''),
(15, 'sam45@gmail.com', '123456', '', ''),
(16, 'abc@gmail.com', '123456', 'images/', ''),
(17, 'abc@gmail.com', '12345a', 'images/', ''),
(18, 'xyz@gmail.com', '1235', 'images/', ''),
(19, 'xyz@gmail.com', '1235', 'images/', ''),
(20, 'xyz@gmail.com', '1234', 'images/', ''),
(21, 'xyz@gmail.com', '1235', 'images/', ''),
(22, 'abc@gmail.com', '1236', 'images/', ''),
(23, 'xyz@gmail.com', '1235', 'images/', ''),
(24, 'zya@gmail.com', '122', 'images/', ''),
(25, 'zya@gmail.com', '122', 'images/', ''),
(26, 'asd@gmail.com', '111', 'images/', ''),
(27, 'asd@gmail.com', '111', 'images/', ''),
(28, 'abc@gmail.com', '123', 'images/', '123'),
(29, 'abc@gmail.com', '123', 'images/', '121'),
(30, 'abc@gmail.com', '123', 'images/', '123'),
(31, 'abc@gmail.com', '123', 'images/', '123'),
(32, 'umer@gmail.com', '123456', 'images/', '12345a'),
(33, 'umer@gmail.com', '123456', 'images/', '1123456'),
(34, 'umer@gmail.com', '123456', 'images/', '123456'),
(35, 'shortfilm1@gmail.com', '123', 'images/', '123'),
(90909, 'haris1234@gmail.com', '123', NULL, '123');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(5) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `vehCategory` varchar(255) NOT NULL,
  `dailyRate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90910;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
