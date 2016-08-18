-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 10:38 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protech`
--

-- --------------------------------------------------------

--
-- Table structure for table `other_drivers`
--

CREATE TABLE `other_drivers` (
  `Driver_ID` int(11) NOT NULL,
  `Driver_Title` varchar(32) NOT NULL,
  `Driver_URL` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other_drivers`
--

INSERT INTO `other_drivers` (`Driver_ID`, `Driver_Title`, `Driver_URL`) VALUES
(1, 'Driver', 'Driver.rar'),
(3, 'DriverAwd', 'Awd.rar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `other_drivers`
--
ALTER TABLE `other_drivers`
  ADD PRIMARY KEY (`Driver_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `other_drivers`
--
ALTER TABLE `other_drivers`
  MODIFY `Driver_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
