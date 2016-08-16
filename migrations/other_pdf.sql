-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 08:44 PM
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
-- Table structure for table `other_pdf`
--

CREATE TABLE `other_pdf` (
  `PDF_ID` int(11) NOT NULL,
  `PDF_Title` varchar(32) NOT NULL,
  `PDF_URL` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other_pdf`
--

INSERT INTO `other_pdf` (`PDF_ID`, `PDF_Title`, `PDF_URL`) VALUES
(1, 'awd', 'awd.pdf'),
(3, 'Sara', 'Computer System Architecture-morris mano Third Edition.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `other_pdf`
--
ALTER TABLE `other_pdf`
  ADD PRIMARY KEY (`PDF_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `other_pdf`
--
ALTER TABLE `other_pdf`
  MODIFY `PDF_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
