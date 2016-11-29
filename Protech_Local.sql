-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2016 at 02:12 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `protech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`, `email`) VALUES
(9, 'root', '827ccb0eea8a706c4c34a16891f84e7b', 'lara2010@icemagic.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adress` varchar(200) NOT NULL,
  `telephone` varchar(32) DEFAULT NULL,
  `mobile` varchar(32) DEFAULT NULL,
  `whatsapp` varchar(32) DEFAULT NULL,
  `skybe` varchar(32) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `Email_Password` varchar(32) NOT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `linkedin` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `adress`, `telephone`, `mobile`, `whatsapp`, `skybe`, `youtube`, `email`, `Email_Password`, `facebook`, `twitter`, `linkedin`) VALUES
(1, 'egy', '035366301', '0122222222', '01276060620', 'Iking', 'https://www.youtube.com/', 'pro.tech2008@yahoo.com', '696d29e0940a4957748fe3fc9efd22a3', 'https://www.facebook.com/', 'https://www.google.com', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `name` varchar(32) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Seen` varchar(32) NOT NULL DEFAULT 'new',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE IF NOT EXISTS `evaluations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `evaluation_date` date DEFAULT NULL,
  `general_care` enum('Excellent','verygood','good','accepted','bad') NOT NULL,
  `general_elasticity` enum('Excellent','verygood','good','accepted','bad') NOT NULL,
  `general_contact` enum('Excellent','verygood','good','accepted','bad') NOT NULL,
  `engineer_behavior` enum('Excellent','verygood','good','accepted','bad') NOT NULL,
  `engineer_look` enum('Excellent','verygood','good','accepted','bad') NOT NULL,
  `service_parts` enum('Excellent','verygood','good','accepted','bad') NOT NULL,
  `service_quality` enum('Excellent','verygood','good','accepted','bad') NOT NULL,
  `service_speed` enum('Excellent','verygood','good','accepted','bad') NOT NULL,
  `commenter_name` varchar(255) DEFAULT NULL,
  `commenter_phone` varchar(32) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `evaluations`
--

INSERT INTO `evaluations` (`id`, `client_name`, `evaluation_date`, `general_care`, `general_elasticity`, `general_contact`, `engineer_behavior`, `engineer_look`, `service_parts`, `service_quality`, `service_speed`, `commenter_name`, `commenter_phone`, `comment`) VALUES
(3, 'sada', '1998-02-28', 'accepted', 'good', 'accepted', 'verygood', 'accepted', 'accepted', 'verygood', 'accepted', 'samar', '213123', 'aw'),
(4, 'test', '2016-10-05', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'test2', '8888', 'tttttt');

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE IF NOT EXISTS `families` (
  `family_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `family_name` varchar(32) NOT NULL,
  PRIMARY KEY (`family_id`),
  UNIQUE KEY `family_name` (`family_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`family_id`, `family_name`) VALUES
(18, '118'),
(9, '32'),
(10, '3635MFP'),
(14, '52'),
(8, '53'),
(11, '56'),
(12, '57'),
(15, '71'),
(13, '72'),
(16, '76'),
(17, 'eeeeee'),
(7, 'M20'),
(19, 'PE!20');

-- --------------------------------------------------------

--
-- Table structure for table `guarantee`
--

CREATE TABLE IF NOT EXISTS `guarantee` (
  `guarantee_id` int(11) NOT NULL AUTO_INCREMENT,
  `printer_id` int(11) NOT NULL,
  `guarantee_text` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`guarantee_id`),
  KEY `printer_id` (`printer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `other_drivers`
--

CREATE TABLE IF NOT EXISTS `other_drivers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Driver_Title` varchar(32) NOT NULL,
  `Driver_URL` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `other_drivers`
--

INSERT INTO `other_drivers` (`id`, `Driver_Title`, `Driver_URL`) VALUES
(1, 'Driver', 'Driver.rar'),
(3, 'DriverAwd', 'Awd.rar'),
(4, 'finaltest', 'https://www.google.com.eg/?gfe_rd=cr&ei=ZQQnWKGMOvGO6ATdx67YDQ');

-- --------------------------------------------------------

--
-- Table structure for table `other_pdf`
--

CREATE TABLE IF NOT EXISTS `other_pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PDF_Title` varchar(32) NOT NULL,
  `PDF_URL` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `other_pdf`
--

INSERT INTO `other_pdf` (`id`, `PDF_Title`, `PDF_URL`) VALUES
(4, 'tes', 'https://www.google.com.eg/?gfe_rd=cr&ei=ZQQnWKGMOvGO6ATdx67YDQ'),
(5, 'test', 'https://www.google.com.eg/?gfe_rd=cr&ei=ZQQnWKGMOvGO6ATdx67YDQ');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `partner_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_name` varchar(200) NOT NULL,
  `partner_image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`partner_id`),
  UNIQUE KEY `partner_name` (`partner_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `part_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_id` int(11) unsigned DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `warranty` varchar(200) DEFAULT NULL,
  `general_description` varchar(200) DEFAULT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `driver` varchar(200) DEFAULT NULL,
  `offer` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`part_id`),
  KEY `family_id` (`family_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`part_id`, `family_id`, `name`, `description`, `warranty`, `general_description`, `pdf`, `driver`, `offer`) VALUES
(5, 18, 'ADF ROLLER ', '', NULL, 'ADF ROLLER ', NULL, '', 0),
(6, 18, 'charge roller', '', NULL, 'charge roller', 'imgs/image_2016-11-22-16-03-14_58345e32ed15a.jpg', '', 0),
(7, 14, 'blade', '', NULL, '', NULL, '', 0),
(8, 4, 'clutch', '', NULL, '', NULL, '', 0),
(10, 8, 'control panel', '', NULL, '', NULL, '', 0),
(11, NULL, 'Copier-MFD-For-Rent_Aegis-300x247 ', '', NULL, 'Copier-MFD-For-Rent_Aegis-300x247 -.png', NULL, '', 0),
(12, 14, 'crum drum', '', NULL, 'crum drum.jpg', NULL, '', 0),
(13, NULL, 'CRUM ', NULL, NULL, '', NULL, '', 0),
(14, NULL, 'crum drum', NULL, NULL, '', NULL, '', 0),
(15, NULL, 'crum drum ', '', NULL, 'crum drum - .jpg', NULL, '', 0),
(16, NULL, 'crum drum', '', NULL, 'crum drum3 .jpg', NULL, '', 0),
(17, 5, 'crum drum', '', NULL, '', NULL, '', 0),
(18, NULL, 'crum drum', '', NULL, '', NULL, '', 0),
(19, NULL, 'crum drum', '', NULL, 'crum drum3.jpg', NULL, '', 0),
(20, 13, 'crum drum', '', NULL, 'crum drum8 - jpg', NULL, '', 0),
(21, NULL, 'crum toner', '', NULL, '', NULL, '', 0),
(22, NULL, 'crum toner', '', NULL, 'crum toner7 - jpg', NULL, '', 0),
(23, NULL, 'crum toner ', NULL, NULL, '', NULL, '', 0),
(24, 13, 'developer black', '', NULL, 'developer black', NULL, '', 0),
(25, 4, 'Drum', '', NULL, '', 'imgs/image_2016-11-22-15-44-13_583459bd514e5.jpg', '', 0),
(26, 13, 'developer magenta', '', NULL, 'developer magenta.jpg', NULL, '', 0),
(27, 13, 'developer cyan', '', NULL, '', NULL, '', 0),
(28, NULL, 'developer yellow', NULL, NULL, '', NULL, '', 0),
(29, NULL, 'digital-printing1.jpg', NULL, NULL, 'digital-printing1.jpg', NULL, '', 0),
(30, 14, 'drum', '', NULL, 'drum.jpg', NULL, '', 0),
(31, NULL, 'dispenser unit', NULL, NULL, '', NULL, '', 0),
(32, NULL, 'printer11.jpg', NULL, NULL, 'printer11.jpg', NULL, '', 0),
(33, 4, 'drum', '', NULL, '', NULL, '', 0),
(34, 18, 'ROLLER', '', NULL, 'ROLLER.jpg', NULL, '', 0),
(35, NULL, 'RIGHT SIDE', NULL, NULL, '', NULL, '', 0),
(36, 14, 'sip battery', '', NULL, 'sip battery.jpg', 'imgs/image_2016-11-22-14-56-26_58344e8a66a17.jpg', '', 0),
(37, 8, 'toner', '', NULL, 'tone6r.jpg', NULL, '', 0),
(38, 4, 'side cover assembly', '', NULL, '', NULL, '', 0),
(39, NULL, 'toner cyan.jpg', NULL, NULL, 'toner cyan.jpg', NULL, '', 0),
(40, 14, 'slender drum', '', NULL, '', 'imgs/image_2016-11-22-14-57-28_58344ec8c3602.jpg', '', 0),
(41, NULL, 'toner black8', NULL, NULL, '', NULL, '', 0),
(42, NULL, 'toner yellow.jpg', NULL, NULL, 'toner yellow.jpg', NULL, '', 0),
(43, NULL, 'toner magenta', NULL, NULL, '', NULL, '', 0),
(44, 4, 'toner', '', NULL, 'toner_m20.jpg', NULL, '', 0),
(45, 14, 'toner', '', NULL, '', 'imgs/image_2016-11-22-14-58-25_58344f0117be6.jpg', '', 0),
(46, NULL, 'toner', '', NULL, '', NULL, '', 0),
(47, 18, 'toner', '', NULL, 'toner.jpg', 'imgs/image_2016-11-22-16-04-17_58345e717a33b.jpg', '', 0),
(48, 14, 'toner', '', NULL, '', NULL, '', 0),
(49, NULL, 'TRANSFER ROLLER.jpg', NULL, NULL, 'TRANSFER ROLLER.jpg', NULL, '', 0),
(50, 4, 'transfer roller', '', NULL, '', NULL, '', 0),
(51, 4, 'tray', '', NULL, 'tray jpg', NULL, '', 0),
(52, 14, 'Tray feed head', '', NULL, '', 'imgs/image_2016-11-22-14-59-43_58344f4f44584.jpg', '', 0),
(53, 21, 'Tray', '', NULL, 'tray jpg', 'imgs/image_2016-11-22-14-59-03_58344f277d1dc.jpg', '', 0),
(54, 8, 'tray', '', NULL, '', NULL, '', 0),
(55, 14, 'Waste bottle', '', NULL, 'waste bottle.jpg', NULL, '', 0),
(56, 14, 'Dispenser Unit', NULL, NULL, '', 'imgs/image_2016-11-22-14-43-30_58344b8225a93.jpg', '', 0),
(57, 14, 'Exposure lamp', '', NULL, '', 'imgs/image_2016-11-22-14-44-44_58344bccca36a.jpg', '', 0),
(58, 14, 'Fax Card', '', NULL, '', 'imgs/image_2016-11-22-14-45-18_58344beef1c73.jpg', '', 0),
(59, 14, 'Feed Head', '', NULL, '', 'imgs/image_2016-11-22-14-46-23_58344c2f79937.jpg', '', 0),
(60, 14, 'Finisher', '', NULL, '', 'imgs/image_2016-11-22-14-47-13_58344c61509ea.jpg', '', 0),
(61, 14, 'Fuser', '', NULL, '', 'imgs/image_2016-11-22-14-48-43_58344cbb9a4a8.jpg', '', 0),
(63, 14, 'Heat Roll', '', NULL, '', 'imgs/image_2016-11-22-15-53-38_58345bf22a458.jpg', '', 0),
(64, 14, 'Iot control board', '', NULL, '', 'imgs/image_2016-11-22-14-50-48_58344d38882a4.jpg', '', 0),
(65, 14, 'laser ros scanner assembly', '', NULL, '', 'imgs/image_2016-11-22-14-51-29_58344d618f460.jpg', '', 0),
(66, 14, 'Main Board', NULL, NULL, '', 'imgs/image_2016-11-22-14-52-38_58344da6737ce.jpg', '', 0),
(67, 14, 'Main Formatter Board', '', NULL, '', 'imgs/image_2016-11-22-14-53-15_58344dcb0d816.jpg', '', 0),
(70, NULL, 'Left Door Assembly', '', NULL, '', 'imgs/image_2016-11-22-15-54-46_58345c36e586a.jpg', '', 0),
(71, 8, 'low voltage power supply', '', NULL, '', 'imgs/image_2016-11-22-15-55-24_58345c5cd849f.jpg', '', 0),
(72, 4, 'Crum', '', NULL, '', 'imgs/image_2016-11-23-09-32-22_583554161d4d9.jpg', '', 0),
(74, 8, 'Fuser', '', NULL, '', 'imgs/image_2016-11-22-16-10-09_58345fd1d0593.jpg', '', 0),
(75, 5, 'Crum Drum', NULL, NULL, '', 'imgs/image_2016-11-22-16-12-06_583460465a5e8.jpg', '', 0),
(76, 5, 'Crum Toner', NULL, NULL, '', 'imgs/image_2016-11-22-16-13-02_5834607e3dcf7.jpg', '', 0),
(77, 21, 'Crum', '', NULL, '', 'imgs/image_2016-11-23-09-25-47_5835528bd0162.jpg', '', 0),
(78, 21, 'Fax Board', '', NULL, '', 'imgs/image_2016-11-23-09-40-18_583555f203745.jpg', '', 0),
(79, 21, 'Feed Roller', '', NULL, '', 'imgs/image_2016-11-23-09-26-27_583552b31f835.jpg', '', 0),
(80, 21, 'Fuser', '', NULL, '', 'imgs/image_2016-11-23-09-26-47_583552c78b0b2.jpg', '', 0),
(81, 21, 'Gear RDCN', '', NULL, '', 'imgs/image_2016-11-23-09-27-08_583552dc3e72e.jpg', '', 0),
(82, 21, 'Left Side', '', NULL, '', 'imgs/image_2016-11-23-09-27-27_583552efc283d.jpg', '', 0),
(83, 21, 'Motor', '', NULL, '', 'imgs/image_2016-11-23-09-27-45_5835530194025.jpg', '', 0),
(84, 21, 'Pick Up Roller', '', NULL, '', 'imgs/image_2016-11-23-09-28-21_58355325cdbf3.jpg', '', 0),
(85, 21, 'Right Side', '', NULL, '', 'imgs/image_2016-11-23-09-28-43_5835533b1983c.jpg', '', 0),
(86, 21, 'Solenoid Feed Registration', '', NULL, '', 'imgs/image_2016-11-23-09-29-04_5835535055fb1.jpg', '', 0),
(87, 4, 'Fax Board', '', NULL, '', 'imgs/image_2016-11-23-09-29-34_5835536e47cc1.jpg', '', 0),
(88, 21, 'Tray', '', NULL, '', 'imgs/image_2016-11-23-09-30-02_5835538ae33b7.jpg', '', 0),
(89, 4, 'feeder', '', NULL, '', 'imgs/image_2016-11-23-09-35-32_583554d468ac5.jpg', '', 0),
(90, 4, 'Fuser', '', NULL, '', 'imgs/image_2016-11-23-09-36-35_58355513844fd.jpg', '', 0),
(91, 4, 'drum', NULL, NULL, '', NULL, '', 0),
(92, 4, 'fuze', NULL, NULL, '', NULL, '', 0),
(93, 4, 'hinge', NULL, NULL, '', NULL, '', 0),
(94, 14, 'Main board', '', NULL, '', NULL, '', 0),
(95, 4, 'roller', NULL, NULL, '', NULL, '', 0),
(96, 4, 'scanner control panel', NULL, NULL, '', NULL, '', 0),
(97, 4, 'حبر', NULL, NULL, '', NULL, '', 0),
(98, 8, 'Crum', NULL, NULL, '', NULL, '', 0),
(99, 8, 'feeder', NULL, NULL, '', NULL, '', 0),
(100, 8, 'high voltage power supply', NULL, NULL, '', NULL, '', 0),
(101, 8, 'hinge', NULL, NULL, '', NULL, '', 0),
(102, 8, 'Main board', NULL, NULL, '', NULL, '', 0),
(103, 8, 'Main driver', NULL, NULL, '', NULL, '', 0),
(104, 8, 'Scanner', NULL, NULL, '', NULL, '', 0),
(105, NULL, 'Fuser', NULL, NULL, '', 'imgs/image_2016-11-23-10-55-34_583575a688e37.jpg', '', 0),
(106, NULL, 'Low Voltage power supply', '', NULL, '', NULL, '', 0),
(107, NULL, 'Low  Voltage power Supply', NULL, NULL, '', NULL, '', 0),
(108, NULL, 'Fuser', NULL, NULL, '', NULL, '', 0),
(109, NULL, 'Heat roll', NULL, NULL, '', NULL, '', 0),
(110, NULL, 'toner', NULL, NULL, '', NULL, '', 0),
(111, 14, 'toner', NULL, NULL, '', NULL, '', 0),
(112, 18, 'toner crum', NULL, NULL, '', NULL, '', 0),
(113, 18, 'toner', NULL, NULL, '', NULL, '', 0),
(114, 9, 'charge roller', NULL, NULL, '', NULL, '', 0),
(115, 9, 'toner', NULL, NULL, '', NULL, '', 0),
(116, 5, 'crum drum', NULL, NULL, '', NULL, '', 0),
(117, 5, 'Crum Toner', NULL, NULL, '', NULL, '', 0),
(118, 5, 'drum', NULL, NULL, '', NULL, '', 0),
(119, 5, 'Fuser', NULL, NULL, '', NULL, '', 0),
(120, 5, 'toner', NULL, NULL, '', NULL, '', 0),
(121, 13, 'toner black', NULL, NULL, '', NULL, '', 0),
(122, 13, 'toner chip', NULL, NULL, '', NULL, '', 0),
(123, 13, 'toner cyan', NULL, NULL, '', NULL, '', 0),
(124, 13, 'toner magenta', NULL, NULL, '', NULL, '', 0),
(125, 13, 'toner yellow', NULL, NULL, '', NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parts_general_specification`
--

CREATE TABLE IF NOT EXISTS `parts_general_specification` (
  `general_id` int(11) NOT NULL AUTO_INCREMENT,
  `part_id` int(11) NOT NULL,
  `general_text` mediumtext,
  PRIMARY KEY (`general_id`),
  KEY `part_id` (`part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_guarantee`
--

CREATE TABLE IF NOT EXISTS `parts_guarantee` (
  `guarantee_id` int(11) NOT NULL AUTO_INCREMENT,
  `part_id` int(11) NOT NULL,
  `guarantee_text` mediumtext NOT NULL,
  PRIMARY KEY (`guarantee_id`),
  KEY `part_id` (`part_id`),
  KEY `part_id_2` (`part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_typing_specification`
--

CREATE TABLE IF NOT EXISTS `parts_typing_specification` (
  `typing_id` int(11) NOT NULL AUTO_INCREMENT,
  `part_id` int(11) NOT NULL,
  `typing_text` mediumtext,
  PRIMARY KEY (`typing_id`),
  KEY `part_id` (`part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `part_image`
--

CREATE TABLE IF NOT EXISTS `part_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `part_id` int(11) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`image_id`),
  KEY `part_id` (`part_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `part_image`
--

INSERT INTO `part_image` (`image_id`, `part_id`, `image_path`) VALUES
(1, 5, 'imgs/image_2016-11-13-09-46-22_5828366eead50.jpg'),
(2, 6, 'imgs/image_2016-11-13-09-56-46_582838de3bc8d.jpg'),
(3, 7, 'imgs/image_2016-11-13-09-57-10_582838f6e8450.jpg'),
(4, 8, 'imgs/image_2016-11-13-09-58-01_58283929bf7f3.jpg'),
(6, 10, 'imgs/image_2016-11-13-09-58-52_5828395cb36d7.jpg'),
(7, 11, 'imgs/image_2016-11-13-09-58-59_5828396316bfa.png'),
(8, 12, 'imgs/image_2016-11-13-10-00-45_582839cdd8d0f.jpg'),
(9, 13, 'imgs/image_2016-11-13-10-00-46_582839ce2d2cd.jpg'),
(10, 14, 'imgs/image_2016-11-13-10-01-39_58283a03c3798.jpg'),
(11, 15, 'imgs/image_2016-11-13-10-01-41_58283a0580cc8.jpg'),
(12, 16, 'imgs/image_2016-11-13-10-02-37_58283a3d95652.jpg'),
(13, 17, 'imgs/image_2016-11-13-10-04-13_58283a9db91ea.jpg'),
(14, 18, 'imgs/image_2016-11-13-10-05-01_58283acd59fb2.jpg'),
(15, 19, 'imgs/image_2016-11-13-10-05-15_58283adba398d.jpg'),
(16, 20, 'imgs/image_2016-11-13-10-06-11_58283b13eb436.jpg'),
(17, 21, 'imgs/image_2016-11-13-10-06-19_58283b1baeb9b.jpg'),
(18, 22, 'imgs/image_2016-11-13-10-06-59_58283b43854bc.jpg'),
(19, 23, 'imgs/image_2016-11-13-10-07-12_58283b50f2d46.jpg'),
(20, 24, 'imgs/image_2016-11-13-10-07-48_58283b74a48b8.jpg'),
(21, 25, 'imgs/image_2016-11-13-10-08-01_58283b8132a17.jpg'),
(22, 26, 'imgs/image_2016-11-13-10-08-27_58283b9baa961.jpg'),
(23, 27, 'imgs/image_2016-11-13-10-08-42_58283baa2a3f1.jpg'),
(24, 28, 'imgs/image_2016-11-13-10-09-23_58283bd3c9d20.jpg'),
(25, 30, 'imgs/image_2016-11-13-10-10-05_58283bfd57296.jpg'),
(26, 31, 'imgs/image_2016-11-13-10-10-07_58283bffca0f9.jpg'),
(27, 32, 'imgs/image_2016-11-13-10-10-55_58283c2f1323d.jpg'),
(28, 33, 'imgs/image_2016-11-13-10-11-06_58283c3a4094c.jpg'),
(29, 34, 'imgs/image_2016-11-13-10-11-37_58283c599b9b1.jpg'),
(30, 35, 'imgs/image_2016-11-13-10-11-57_58283c6dc9679.jpg'),
(31, 36, 'imgs/image_2016-11-13-10-12-11_58283c7b6a6aa.jpg'),
(32, 37, 'imgs/image_2016-11-13-10-12-50_58283ca2d578a.jpg'),
(33, 38, 'imgs/image_2016-11-13-10-12-58_58283caa653a6.jpg'),
(34, 39, 'imgs/image_2016-11-13-10-13-47_58283cdbf04e7.jpg'),
(35, 40, 'imgs/image_2016-11-13-10-13-53_58283ce1474d0.jpg'),
(36, 41, 'imgs/image_2016-11-13-10-14-55_58283d1fd0cf1.jpg'),
(37, 42, 'imgs/image_2016-11-13-10-14-56_58283d2037b74.jpg'),
(38, 43, 'imgs/image_2016-11-13-10-15-33_58283d458da8f.jpg'),
(39, 44, 'imgs/image_2016-11-13-10-16-01_58283d6127ae9.jpg'),
(40, 45, 'imgs/image_2016-11-13-10-16-19_58283d7355f39.jpg'),
(41, 46, 'imgs/image_2016-11-13-10-17-02_58283d9ea996d.jpg'),
(42, 47, 'imgs/image_2016-11-13-10-17-51_58283dcf582a3.jpg'),
(43, 48, 'imgs/image_2016-11-13-10-18-10_58283de26e6fc.jpg'),
(44, 49, 'imgs/image_2016-11-13-10-18-24_58283df0933c8.jpg'),
(45, 50, 'imgs/image_2016-11-13-10-18-44_58283e04d707e.jpg'),
(46, 51, 'imgs/image_2016-11-13-10-19-11_58283e1f8c64d.jpg'),
(47, 52, 'imgs/image_2016-11-13-10-19-23_58283e2ba300f.jpg'),
(48, 53, 'imgs/image_2016-11-13-10-19-49_58283e45a0ec0.jpg'),
(49, 54, 'imgs/image_2016-11-13-10-19-59_58283e4f9957e.jpg'),
(50, 55, 'imgs/image_2016-11-13-10-20-15_58283e5f0cdc0.jpg'),
(53, 77, 'imgs/image_2016-11-23-10-41-03_5835642fa3b7e.jpg'),
(54, 78, 'imgs/image_2016-11-23-10-41-24_5835644475e90.jpg'),
(55, 79, 'imgs/image_2016-11-23-10-41-47_5835645bb12c1.jpg'),
(56, 80, 'imgs/image_2016-11-23-10-42-20_5835647c9f948.jpg'),
(57, 81, 'imgs/image_2016-11-23-10-42-43_58356493c3a69.jpg'),
(58, 82, 'imgs/image_2016-11-23-10-43-02_583564a66468d.jpg'),
(59, 83, 'imgs/image_2016-11-23-10-43-20_583564b83a780.jpg'),
(60, 84, 'imgs/image_2016-11-23-10-43-42_583564ceb6d14.jpg'),
(61, 85, 'imgs/image_2016-11-23-10-44-05_583564e58da65.jpg'),
(62, 86, 'imgs/image_2016-11-23-10-44-26_583564fa22088.jpg'),
(65, 53, 'imgs/image_2016-11-23-10-46-57_583565910c53c.jpg'),
(66, 8, 'imgs/image_2016-11-23-10-48-09_583565d930de3.jpg'),
(67, 72, 'imgs/image_2016-11-23-10-48-30_583565eea59e9.jpg'),
(68, 91, 'imgs/image_2016-11-23-10-49-00_5835660cd4b6f.jpg'),
(70, 87, 'imgs/image_2016-11-23-10-50-05_5835664d9ee00.jpg'),
(71, 89, 'imgs/image_2016-11-23-10-50-35_5835666b33d0d.jpg'),
(72, 90, 'imgs/image_2016-11-23-10-51-07_5835668bd3678.jpg'),
(73, 92, 'imgs/image_2016-11-23-10-51-30_583566a21d749.jpg'),
(74, 93, 'imgs/image_2016-11-23-10-51-57_583566bde3eb4.jpg'),
(75, 94, 'imgs/image_2016-11-23-10-52-32_583566e0d186b.jpg'),
(76, 95, 'imgs/image_2016-11-23-10-52-59_583566fbbf6ac.jpg'),
(77, 96, 'imgs/image_2016-11-23-10-53-30_5835671a6feb5.jpg'),
(78, 38, 'imgs/image_2016-11-23-10-53-52_58356730d69e8.jpg'),
(79, 44, 'imgs/image_2016-11-23-10-54-20_5835674c7027e.jpg'),
(80, 50, 'imgs/image_2016-11-23-10-54-42_58356762e7225.jpg'),
(81, 51, 'imgs/image_2016-11-23-10-55-29_58356791c56a7.jpg'),
(82, 97, 'imgs/image_2016-11-23-10-55-46_583567a2ea853.jpg'),
(83, 98, 'imgs/image_2016-11-23-10-44-33_58357311abc66.jpg'),
(84, 99, 'imgs/image_2016-11-23-10-45-32_5835734c599a6.jpg'),
(85, 74, 'imgs/image_2016-11-23-10-46-15_58357377995d7.jpg'),
(86, 74, 'imgs/image_2016-11-23-10-47-35_583573c774888.jpg'),
(87, 100, 'imgs/image_2016-11-23-10-48-11_583573eb55f49.jpg'),
(88, 101, 'imgs/image_2016-11-23-10-48-40_583574082e7b3.jpg'),
(89, 71, 'imgs/image_2016-11-23-10-50-17_5835746982061.jpg'),
(90, 102, 'imgs/image_2016-11-23-10-51-06_5835749a5842a.jpg'),
(91, 103, 'imgs/image_2016-11-23-10-51-35_583574b753d1b.jpg'),
(92, 104, 'imgs/image_2016-11-23-10-52-13_583574ddf285f.jpg'),
(93, 37, 'imgs/image_2016-11-23-10-52-45_583574fd41f92.jpg'),
(94, 105, 'imgs/image_2016-11-23-10-55-34_583575a689154.jpg'),
(95, 63, 'imgs/image_2016-11-23-10-56-00_583575c09a0ba.jpg'),
(96, 70, 'imgs/image_2016-11-23-10-56-22_583575d6df6d8.jpg'),
(97, 107, 'imgs/image_2016-11-23-10-57-05_5835760133a7d.jpg'),
(98, 106, 'imgs/image_2016-11-23-11-00-43_583576db6231b.jpg'),
(99, 108, 'imgs/image_2016-11-23-11-02-58_583577625dae7.jpg'),
(100, 109, 'imgs/image_2016-11-23-11-03-45_58357791d9dd1.jpg'),
(101, 110, 'imgs/image_2016-11-23-11-20-26_58357b7a2965d.jpg'),
(102, 57, 'imgs/image_2016-11-23-11-26-04_58357ccc35cda.jpg'),
(103, 58, 'imgs/image_2016-11-23-11-33-38_58357e9234fe9.jpg'),
(104, 59, 'imgs/image_2016-11-23-11-34-01_58357ea95dd9b.jpg'),
(105, 60, 'imgs/image_2016-11-23-11-34-22_58357ebe29e49.jpg'),
(106, 61, 'imgs/image_2016-11-23-11-34-59_58357ee3d532a.jpg'),
(107, 64, 'imgs/image_2016-11-23-11-37-01_58357f5d43894.jpg'),
(108, 65, 'imgs/image_2016-11-23-11-37-18_58357f6ef0439.jpg'),
(109, 67, 'imgs/image_2016-11-23-11-38-22_58357fae94248.jpg'),
(110, 111, 'imgs/image_2016-11-23-11-39-22_58357feac3baf.jpg'),
(111, 88, 'imgs/image_2016-11-23-11-40-10_5835801a7f015.jpg'),
(112, 112, 'imgs/image_2016-11-23-11-43-46_583580f219094.jpg'),
(113, 113, 'imgs/image_2016-11-23-11-44-15_5835810fc1b3f.jpg'),
(114, 114, 'imgs/image_2016-11-23-11-46-22_5835818e2db47.jpg'),
(115, 115, 'imgs/image_2016-11-23-11-46-59_583581b37e2e9.jpg'),
(116, 116, 'imgs/image_2016-11-23-11-48-53_5835822543aa9.jpg'),
(117, 117, 'imgs/image_2016-11-23-11-49-42_5835825692865.jpg'),
(118, 118, 'imgs/image_2016-11-23-11-50-06_5835826ee2ef9.jpg'),
(119, 119, 'imgs/image_2016-11-23-11-50-46_58358296cd1a1.jpg'),
(120, 120, 'imgs/image_2016-11-23-11-51-13_583582b1968a8.jpg'),
(121, 121, 'imgs/image_2016-11-23-11-54-29_583583750961e.jpg'),
(122, 122, 'imgs/image_2016-11-23-11-55-12_583583a0b2289.jpg'),
(123, 123, 'imgs/image_2016-11-23-11-55-50_583583c6a726c.jpg'),
(124, 124, 'imgs/image_2016-11-23-11-56-31_583583eff0de2.jpg'),
(125, 125, 'imgs/image_2016-11-23-11-57-00_5835840c54148.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `part_tag`
--

CREATE TABLE IF NOT EXISTS `part_tag` (
  `part_id` int(11) NOT NULL,
  `tag_name` varchar(32) NOT NULL,
  PRIMARY KEY (`part_id`,`tag_name`),
  KEY `tag_name` (`tag_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE IF NOT EXISTS `plans` (
  `plane_id` int(11) NOT NULL AUTO_INCREMENT,
  `plane_name` varchar(200) NOT NULL,
  `type` enum('1','2','3') NOT NULL,
  PRIMARY KEY (`plane_id`),
  UNIQUE KEY `plane_name` (`plane_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plane_id`, `plane_name`, `type`) VALUES
(25, 'بيع و إستبدال', '2'),
(26, 'الدعم الفني', '1');

-- --------------------------------------------------------

--
-- Table structure for table `plan_item`
--

CREATE TABLE IF NOT EXISTS `plan_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `plane_id` int(11) NOT NULL,
  `plane_text` mediumtext,
  PRIMARY KEY (`item_id`),
  KEY `plane_id` (`plane_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `plan_item`
--

INSERT INTO `plan_item` (`item_id`, `plane_id`, `plane_text`) VALUES
(57, 25, 'سسسسس'),
(58, 25, 'ثثثث'),
(59, 26, 'الدعم الفني');

-- --------------------------------------------------------

--
-- Table structure for table `printers`
--

CREATE TABLE IF NOT EXISTS `printers` (
  `printer_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_id` int(11) unsigned DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `general_description` text,
  `pdf` varchar(200) DEFAULT NULL,
  `driver` varchar(200) DEFAULT NULL,
  `offer` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`printer_id`),
  KEY `family_id` (`family_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `printers`
--

INSERT INTO `printers` (`printer_id`, `family_id`, `name`, `general_description`, `pdf`, `driver`, `offer`) VALUES
(4, 7, 'WorkCentre M20', '', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-m20-m20i/spec-enus.html', 0),
(5, 8, 'WorkCentre 5325/5330/5335', '', 'imgs/image_2016-11-12-15-39-16_582737a41f2c5.PDF', 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-5300-series/enus.html', 0),
(8, 10, 'Phaser 3635MFP', '', 'imgs/image_2016-11-13-07-42-38_5828196e076c6.png', '', 0),
(9, 9, 'WorkCentre 3215', '', 'imgs/image_2016-11-13-07-57-57_58281d050ade2.PDF', '', 0),
(10, 11, 'WorkCentre 5645/5655', '', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5645-5655/spec-enus.html', 0),
(11, 11, '5665 Copier', '', NULL, 'https://www.xerox.com/digital-printing/printers/copiers/5665-copier/spec-enus.html', 0),
(12, 12, 'WorkCentre 5765/5775/5790', '', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5765-5775-5790/enus.html', 0),
(13, 11, 'WorkCentre 7232/7242', '', NULL, 'http://www.office.xerox.com/multifunction-printer/color-multifunction/workcentre-7232-7242/spec-enus.html', 0),
(14, 12, 'WorkCentre 5735', '', 'imgs/image_2016-11-13-08-37-29_58282649cb40c.PDF', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5735-5740-5745-5755/enus.html', 0),
(15, 14, 'WorkCentre 5225/5230', '', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-5225/spec-enza.html', 0),
(16, 15, 'WorkCentre 7120/7125', '', 'imgs/image_2016-11-13-08-45-16_5828281c84f3f.pdf', 'http://www.office.xerox.com/multifunction-printer/color-multifunction/workcentre-7120/spec-enza.html', 0),
(17, 12, 'WorkCentre 5745', '', 'imgs/image_2016-11-13-08-50-10_58282942e6b87.PDF', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5735-5740-5745-5755/enus.html', 0),
(18, 9, 'WorkCentre 3210/3220', '', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-3210-3220/spec-enza.html', 0),
(19, 12, 'WorkCentre 5755', '', 'imgs/image_2016-11-13-08-56-08_58282aa8c2fb5.PDF', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5735-5740-5745-5755/spec-enus.html', 0),
(20, 16, 'WorkCentre 7655/7665/7675', '', 'imgs/image_2016-11-13-09-31-20_582832e85edc6.PDF', 'http://www.office.xerox.com/multifunction-printer/color-multifunction/workcentre-7655-7665-7675/spec-enza.html', 0),
(21, 19, 'PE120', '', 'imgs/image_2016-11-23-09-24-01_5835522184148.png', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `printer_general_specification`
--

CREATE TABLE IF NOT EXISTS `printer_general_specification` (
  `general_id` int(11) NOT NULL AUTO_INCREMENT,
  `printer_id` int(11) NOT NULL,
  `general_text` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`general_id`),
  KEY `printer_id` (`printer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=286 ;

--
-- Dumping data for table `printer_general_specification`
--

INSERT INTO `printer_general_specification` (`general_id`, `printer_id`, `general_text`) VALUES
(185, 4, 'سرعة النسخ : ما يصل إلى 22 صفحة في الدقيقة'),
(186, 4, 'وضوح الصورة : 600 × 600 نقطة في البوصة'),
(187, 4, 'سرعة خروج أول ورقة : 8 ثوان'),
(188, 4, 'الازدواج لاول مرة : خصائص الصورة(وجه واحد/ وجهان لوجه واحد / تصوير دوبلكس/تصوير وجهين)'),
(189, 4, 'نسخ متعددة : ما يصل إلى 999 نسخة من النسخ الأصلية متعددة الصفحات'),
(190, 5, 'سرعة النسخ : ما يصل إلى 22 صفحة في الدقيقة'),
(191, 5, 'وضوح الصورة : 600 × 600 نقطة في البوصة'),
(192, 5, 'سرعة خروج أول ورقة : &lt;8 ثوان'),
(193, 5, 'الازدواج لاول مرة : خصائص الصورة(وجه واحد/ وجهان لوجه واحد / تصوير دوبلكس/تصوير وجهين)'),
(194, 5, 'تكبير / تصغير :تصغير حتي 25% تكبير حتي 100% من الدرج اليدوي'),
(195, 5, 'نسخ متعددة : ما يصل إلى 999 نسخة من النسخ الأصلية متعددة الصفحات'),
(196, 8, 'وضوح الصورة 600 × 600 نقطة في البوصة'),
(197, 8, 'سرعة خروج أول ورقة بأسرع 8.5 ثانية'),
(198, 8, 'نسخ متعددة 1-999'),
(199, 8, 'القرص الصلب معيار 80 GB'),
(200, 9, 'وضوح الصورة تصل إلى 1200 x 1200 نقطة في البوصة تحسين جودة الصور'),
(201, 9, 'سرعة خروج أول ورقة &lt;10 ثوان'),
(202, 9, 'ميزات المسح الضوئي 8-بت رمادي، أبيض وأسود، اللون، PDF / JPEG / TIFF، المسح الضوئي إلى الكمبيوتر الشخصي، والمسح الضوئي إلى WSD، المسح الضوئي إلى البريد الإلكتروني، والمسح الضوئي عن طريق TWAIN / WIA'),
(203, 9, 'إستيعاب الدرج الدرج الاساسي (250 ورقة) درج التغذية اليدوي ورقة'),
(204, 9, 'سعة درج الإخراج 120 ورقة'),
(205, 10, 'وضوح الصورة : 60 × 4800 نقطة في البوصة'),
(206, 10, 'سرعة خروج أول ورقة : بأسرع 3,4 ثانية'),
(207, 10, 'نسخ متعددة : 1-9.999'),
(208, 10, 'Reduce/Enlarge increments : 1 %'),
(209, 10, 'ميزات النسخ : Auto reduction/enlargement, Booklet creation, Edge erase, ID Card Copy, Image shift, Invert image, Margin shift, Mirrored image, N-up, Negative image, Reduce / Enlarge, Scan once - print'),
(210, 10, 'الإستيعاب الورقي : Duplex Automatic Document Feeder Size: 5.5 x 8.5 in. to 11 x 17 in.'),
(211, 10, 'ENERGY STAR : ENERGY STAR® qualified'),
(212, 10, 'Warm-up time (from power off) : 28 seconds (approx)'),
(213, 10, 'Warm-up time (from sleep mode) : 9 seconds (approx)'),
(214, 10, 'ميزات فاكس : شبكة التمكين خادم الفاكس'),
(215, 11, 'السعة القصوي 50'),
(216, 11, 'تحرير الشاشة و القلم إختياري'),
(217, 11, 'Electronic Auditron Included'),
(218, 11, 'الإستيعاب الورقي 4,600'),
(219, 11, 'Auto Duplex Included'),
(220, 11, 'Warm-up time 240'),
(221, 11, 'Highest B/W Print Speed (ppm) 64'),
(222, 13, 'وضوح الصورة 600 x 600 dpi'),
(223, 13, 'سرعة خروج أول ورقة As fast as 15 seconds color / 6 seconds black and white'),
(224, 13, 'ميزات النسخ Auto reduction/enlargement, Booklet creation, Booklet creation (requires two-sided output), Color touch screen interface, Edge erase, ID Card Copy, Image shift, Margin shift, N-up, Scan on'),
(225, 13, 'نسخ متعددة 1-999'),
(226, 13, 'إتجاه الناسخ Network scanning, Scan to TWAIN application, Scan to desktop, Scan to email, Scan to home, Scan to mailbox'),
(227, 13, 'وضوح الناسخ الضزئي 600 x 600 dpi'),
(228, 13, 'بروتوكول الناسخ MIME-encoded, SMTP'),
(229, 13, 'سعة درج الاخراج 600 ورقة'),
(230, 13, 'إستيعاب الدرج الاساسي 600 ورقة'),
(231, 12, 'الوظائف الاساسية نسخ و طباعة'),
(232, 12, 'الوظائف القياسية ايميل و فاكس و ناسخ ضوئي'),
(233, 12, 'الاستهلاك شهريا اسرع من 2,7 ثانية'),
(234, 12, 'دقة الطباعة 600 x 600 x 8 dpi'),
(235, 12, 'ميزات الطباعة Annotation, Auto reduction/enlargement, Auto tray select, Auto tray switching, Automatic 2-sided, Bates Stamping, Booklet creation, Build Job, Collation, Covers, ID Card Copy, Image qual'),
(236, 14, 'Model :WC5735'),
(237, 14, 'إمكانية الوصول اليه : غير متوفر'),
(238, 14, 'سرعة النسخ و الطباعة :up to 35 ppm'),
(239, 14, 'الوظائف الاساسية :  النسخ'),
(240, 14, 'الوظائف الفرعية : فاكس'),
(241, 14, 'الاستهلاك شهريا  : يصل إلي 125,000 صورة / شهر'),
(242, 14, 'سرعة خروج أول ورقة : 4.7 ثانية '),
(243, 14, 'المعالج : Freescale 1.2 GHz'),
(244, 14, 'القرص الصلب :  160 GB'),
(245, 16, 'سرعة خروج أول ورقة As fast as 8.1 seconds colour / 6.5 seconds black and white'),
(246, 16, 'أقصي دقة للنسخ 600 x 600 dpi'),
(247, 16, 'ميزات النسخ Annotation, Area designation, Auto colour selection, Auto reduction/enlargement, Auto tray select, Automatic 2-sided, Book copying, Booklet creation, Build Job, Collation, Covers, ID Card '),
(248, 16, 'الابعاد Network scan, Scan to email, Scan to folder'),
(249, 16, 'Scan destinations (optional) Scan to USB'),
(250, 16, 'الميزات الاساسية للامن Audit log, Data encryption, Email over SSL, HTTPS (secure scan and network server), IP filtering, Image overwrite security, Lock keyboard, Lock number keypad, Network authentica'),
(251, 16, 'ميزات فاكس Fax build job, Fax forwarding, LAN fax, Two-sided Send and Receive'),
(252, 17, 'Model : WC5745'),
(253, 17, 'إمكانية الوصول اليه : غير متوفر'),
(254, 17, 'الوظائف الاساسية :  النسخ'),
(255, 17, 'الوظائف الفرعية :فاكس'),
(256, 17, 'الاستهلاك شهريا : يصل إلي 200,000 صورة/شهر'),
(257, 17, 'المعالج  : Freescale 1.2 GHz'),
(258, 17, 'القرص الصلب : 160 GB'),
(259, 15, 'الوظائف الاساسية نسخ و طباعة'),
(260, 15, 'الوظائف القياسية Email, Internet fax, LAN fax, Network fax server enablement, Network scan, Walkup fax'),
(261, 15, 'التوصيل 10/100BaseTX Ethernet, USB 2.0'),
(262, 15, 'ذاكرة الطباعة 512 MB / 512 MB'),
(263, 15, 'القرص الصلب Standard 40 GB'),
(264, 15, 'الاستيعاب الورقي Duplex Automatic Document Feeder Capacity: 75 sheets'),
(265, 15, 'سعة الدرج الاساسية 1500 ورقة'),
(266, 15, 'أقصي سعة للورق 5100 ورقة'),
(267, 15, 'دقة النسخ 600 x 600 dpi'),
(268, 15, 'Fax compression JBIG, MMR/MR/MH'),
(269, 19, 'Model : WC5755'),
(270, 19, 'الوظائف الاساسية :  النسخ'),
(271, 19, 'الوظائف الفرعية :  فاكس'),
(272, 19, 'الاستهلاك شهريا : يصل إلي 225,000 صورة /الشهر'),
(273, 19, 'سرعة خروج أول ورقة :  3.4 ثانية'),
(274, 19, 'المعالج : Freescale 1.2 GHz'),
(275, 19, 'القرص الصلب :  160 GB'),
(276, 20, 'ModelWC7655'),
(277, 20, 'الوظائف الاساسية  : نسخ'),
(278, 20, 'الوظائف القياسية Email, Internet fax, LAN fax, Network fax server enablement, Network scan, Walkup fax'),
(279, 18, 'سرعة خروج أول ورقة As fast as 8.1 seconds colour / 6.5 seconds black and white'),
(280, 18, 'أقصي دقة للنسخ 600 x 600 dpi'),
(281, 18, 'ميزات النسخ Annotation, Area designation, Auto colour selection, Auto reduction/enlargement, Auto tray select, Automatic 2-sided, Book copying, Booklet creation, Build Job, Collation, Covers, ID Card '),
(282, 18, 'الابعاد Network scan, Scan to email, Scan to folder'),
(283, 18, 'Scan destinations (optional) Scan to USB'),
(284, 18, 'الميزات الثانوية Fax security, Lock printing of received faxes, Xerox Secure Access Unified ID System'),
(285, 18, 'ميزات فاكس Fax build job, Fax forwarding, LAN fax, Two-sided Send and Receive');

-- --------------------------------------------------------

--
-- Table structure for table `printer_image`
--

CREATE TABLE IF NOT EXISTS `printer_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `printer_id` int(11) NOT NULL,
  `image_path` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`image_id`),
  KEY `printer_id` (`printer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `printer_image`
--

INSERT INTO `printer_image` (`image_id`, `printer_id`, `image_path`) VALUES
(2, 4, 'imgs/image_2016-11-12-14-49-17_58272bed86faa.png'),
(3, 5, 'imgs/image_2016-11-12-15-39-16_582737a44881d.png'),
(4, 4, 'imgs/image_2016-11-12-16-20-37_5827415550a79.png'),
(5, 4, 'imgs/image_2016-11-12-16-20-37_5827415550d05.png'),
(6, 4, 'imgs/image_2016-11-12-16-20-37_5827415550ecc.png'),
(7, 4, 'imgs/image_2016-11-12-16-20-37_5827415551043.png'),
(8, 8, 'imgs/image_2016-11-13-07-42-38_5828196e07cf3.png'),
(9, 9, 'imgs/image_2016-11-13-07-57-57_58281d050ba55.png'),
(10, 10, 'imgs/image_2016-11-13-08-01-17_58281dcd9dfa1.jpg'),
(11, 11, 'imgs/image_2016-11-13-08-07-11_58281f2ff246a.gif'),
(12, 12, 'imgs/image_2016-11-13-08-18-03_582821bb8a565.png'),
(13, 13, 'imgs/image_2016-11-13-08-29-29_582824696fc3e.jpg'),
(14, 14, 'imgs/image_2016-11-13-08-37-29_58282649cbc0d.png'),
(15, 15, 'imgs/image_2016-11-13-08-38-11_582826736e0e6.png'),
(16, 16, 'imgs/image_2016-11-13-08-45-16_5828281c85614.png'),
(17, 17, 'imgs/image_2016-11-13-08-50-10_58282942e7432.png'),
(18, 18, 'imgs/image_2016-11-13-08-51-37_582829996631d.png'),
(19, 19, 'imgs/image_2016-11-13-08-56-08_58282aa8c36b5.png'),
(20, 20, 'imgs/image_2016-11-13-09-31-20_582832e85f3af.png'),
(21, 21, 'imgs/image_2016-11-23-09-24-01_58355221a05bc.png');

-- --------------------------------------------------------

--
-- Table structure for table `printer_tags`
--

CREATE TABLE IF NOT EXISTS `printer_tags` (
  `printer_id` int(11) NOT NULL,
  `tag_name` varchar(32) NOT NULL,
  PRIMARY KEY (`printer_id`,`tag_name`),
  KEY `tag_name` (`tag_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `printer_typing_specification`
--

CREATE TABLE IF NOT EXISTS `printer_typing_specification` (
  `typing_id` int(11) NOT NULL AUTO_INCREMENT,
  `printer_id` int(11) NOT NULL,
  `typing_text` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`typing_id`),
  KEY `printer_id` (`printer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=234 ;

--
-- Dumping data for table `printer_typing_specification`
--

INSERT INTO `printer_typing_specification` (`typing_id`, `printer_id`, `typing_text`) VALUES
(153, 4, 'تكنولوجيا : ليزر أحادية اللون'),
(154, 4, 'سرعة الطباعة : ما يصل إلى 22 صفحة في الدقيقة'),
(155, 4, 'دقة الطباعة : 600 × 600 نقطة في البوصة. 1200 x 1200 نقطة في البوصة محرف'),
(156, 4, 'طباعة الورقة الأولي : &lt;9 ثواني'),
(157, 4, 'الوجهين :نعم'),
(158, 5, 'سرعة الطباعة : > 25'),
(159, 5, 'سرعة خروج أول ورقة : &lt;8 ثوان'),
(160, 5, 'مساحة التخزين : 1 جيجا'),
(161, 5, 'أعلى دقة للطباعة : الوجهين'),
(162, 8, 'دقة الطباعة 600 × 600 نقطة في البوصة (تصل إلى1200 ×1200 تحسين جودة الصور)'),
(163, 8, 'الإستهلاك شهريا يصل الي 75,000 صورة / شهر'),
(164, 8, 'القرص الصلب معيار 80 GB'),
(165, 8, 'ذاكرة الطباعة الاساسية 256 MB / 512 MB'),
(166, 9, 'سرعة الطباعة ما يصل إلى 27 صفحة في الدقيقة'),
(167, 9, 'دقة الطباعة 600 × 600 نقطة في البوصة (تصل إلى 4800 × 600 تحسين جودة الصور)'),
(168, 9, 'الإستهلاك شهريا يصل الي 30,000 صورة /شهر'),
(169, 9, 'ذاكرة الطباعة الاساسية 256 MB standard'),
(170, 9, 'السرعة بأسرع 8.5 ثانية'),
(171, 10, 'أقصي دقة للطباعة :4800 x 600 dpi '),
(172, 10, 'دقة الطباعة : 600 x 600 x 8 dpi'),
(173, 10, 'الإستهلاك شهريا : يصل الي 175,000 صورة /الشهر'),
(174, 10, 'تكبير / تصغير : From platen: 25 - 400 %  From document handler: 25 - 400 %'),
(175, 10, 'ذاكرة الطباعة الاساسية : 512 MB max'),
(176, 11, 'أقصي خروج فالشهر 50,000'),
(177, 11, 'أدراج الورق الاساسية 4'),
(178, 11, 'Collator Included'),
(179, 11, 'نوع الترتيب فرز صناديق'),
(180, 11, 'دباسة إختياري'),
(181, 11, 'سرعة خروج أول ورقة 3 s'),
(182, 11, 'Highest B/W Copy Speed (ppm) 64'),
(183, 13, 'دقة الطباعة 600 x 600 x 4 نقطة/بوصة'),
(184, 13, 'التوصيل 10/100BaseTX Ethernet, USB 2.0 (via third party: Wireless (IEEE802.11a/b/g))'),
(185, 13, 'القرص الصلب Standard 40 GB'),
(186, 13, 'ذاكرة الطباعة الاساسية 1.17 GB standard'),
(187, 13, 'المعالج PowerPC® 667 MHz'),
(188, 13, 'ميزات الطباعة Banner sheets, Booklet printing, Delay print, Extended font/form storage, Image rotation, Image smoothing, Mirror image, N-up, Negative image, Poster printing, Print from USB'),
(189, 13, 'وسائط جودة الطباعة Standard, Toner saver mode'),
(190, 13, 'الإستيعاب الورقي Duplex Automatic Document Feeder السعة :75 ورقة Size: 4.9 x 4.5 in. to 11.7 x 17 in.'),
(191, 13, 'أقصي استيعاب للدرج 4270 ورقة'),
(192, 12, 'دقة الطباعة 600 x 600 x 8 dpi'),
(193, 12, 'أقصي دقة للطباعة 1200 x 1200 dpi'),
(194, 12, 'المعالج Freescale 1.2 GHz'),
(195, 12, 'القرص الصلب 160 GB'),
(196, 12, 'ميزات الطباعة Delay print, Exception page programming, Job queue, Program Ahead, RIP-while-print multitasking, Sample Print, Secure Print, Store Print, Tab printing'),
(197, 12, 'التوصيل 10/100/1000BaseTX Ethernet, USB print (via third party: Token Ring (IEEE802.5), Wireless (IEEE802.11a/b/g))'),
(198, 14, 'ميزات الطباعة WC 5735 : Annotation, Auto reduction/enlargement, Auto tray select, Auto tray switching, Automatic 2-sided, Bates Stamping, Booklet creation, Build Job, Collation, Covers, ID Card Copy, '),
(199, 14, 'دقة الطباعة : 600 x 600 x 8 بوصة'),
(200, 16, 'First-page-out time, printing As fast as 13 seconds colour / 11 seconds black and white'),
(201, 16, 'الدقة 600 x 600 x 4 bits dpi'),
(202, 16, 'Print memory (standard) 2 GB standard'),
(203, 16, 'القرص الصلب 80 GB'),
(204, 16, 'التوصيل 10/100BaseTX Ethernet, USB 2.0'),
(205, 16, 'ميزات الطباعة Auto fit, Auto tray select, Banner sheets, Booklet printing, Covers, Delay print, N-up, Sample set, Secure Print, Watermarks (optional: Print from USB)'),
(206, 16, 'الميزات الثانوية Fax security, Lock printing of received faxes, Xerox Secure Access Unified ID System'),
(207, 17, 'سرعة النسخ و الطباعة :up to 45 ppm'),
(208, 17, 'دقة الطباعة : 600 x 600 x 8 بوصة'),
(209, 17, 'ميزات الطباعة : Annotation, Auto reduction/enlargement, Auto tray select, Auto tray switching, Automatic 2-sided, Bates Stamping, Booklet creation, Build Job, Collation, Covers, ID Card Copy, Image qu'),
(210, 15, 'سعة الاخراج 500 sheets'),
(211, 15, 'Finishing options Integrated Office Finisher (Optional): Single-position stapling, 500-sheet tray Office Finisher LX (Optional): Multi-position stapling (optional: 3-hole punch, 4-hole punch, Booklet '),
(212, 15, 'سرعة خروج اول ورقة As fast as 4.3 seconds'),
(213, 15, 'أقصي دقة للطباعة 600 x 600 dpi'),
(214, 15, 'ميزات الطباعة 2in1 Copying, Auto reduction/enlargement, Booklet creation, ID Card Copy, Image shift, Margin shift, Mirrored image, N-up, Negative image, Poster mode, Reduce / Enlarge, Scan once - prin'),
(215, 15, 'Speed dials (one line) Up to 500'),
(216, 15, 'دقة الفاكس Fine (200 x 200 dpi), Normal (100 x 200 dpi), Superfine (200 x 400 dpi), Superfine (400 x 400 dpi), Superfine (600 x 600 dpi)'),
(217, 15, 'QuickScan resolution 200 x 200 dpi'),
(218, 15, 'QuickScan speed 44.8 pps'),
(219, 15, 'ITU compatibility Super Group 3'),
(220, 19, 'سرعة النسخ و الطباعة : up to 55 ppm'),
(221, 19, 'دقة الطباعة :  600 x 600 x 8 بوصة'),
(222, 19, 'ميزات الطباعة : Annotation, Auto reduction/enlargement, Auto tray select, Auto tray switching, Automatic 2-sided, Bates Stamping, Booklet creation, Build Job, Collation, Covers, ID Card Copy, Image qu'),
(223, 20, 'سرعة النسخ والطباعة : Colour: up to 40 ppm Black: up to 55 ppm '),
(224, 20, 'سرعة خروج اول ورقة : As fast as 5.5 seconds black and white / 8.9 seconds colour'),
(225, 20, 'الاستيعاب الورقي Duplex Automatic Document Feeder Capacity: 250 sheets'),
(226, 20, 'Device memory (standard/max)1 GB / 1 GB'),
(227, 18, 'First-page-out time, printing As fast as 13 seconds colour / 11 seconds black and white'),
(228, 18, 'الدقة 600 x 600 x 4 bits dpi'),
(229, 18, 'Print memory (standard) 2 GB standard'),
(230, 18, 'القرص الصلب 80 GB'),
(231, 18, 'التوصيل 10/100BaseTX Ethernet, USB 2.0'),
(232, 18, 'ميزات الطباعة Auto fit, Auto tray select, Banner sheets, Booklet printing, Covers, Delay print, N-up, Sample set, Secure Print, Watermarks (optional: Print from USB)'),
(233, 18, 'الميزات الاساسية للامن Audit log, Data encryption, Email over SSL, HTTPS (secure scan and network server), IP filtering, Image overwrite security, Lock keyboard, Lock number keypad, Network authentica');

-- --------------------------------------------------------

--
-- Table structure for table `slide_show`
--

CREATE TABLE IF NOT EXISTS `slide_show` (
  `Slide_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Slide_Title` varchar(200) NOT NULL,
  `Slide_image` varchar(200) NOT NULL,
  PRIMARY KEY (`Slide_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `slide_show`
--

INSERT INTO `slide_show` (`Slide_ID`, `Slide_Title`, `Slide_image`) VALUES
(12, 'test2', 'imgs/image_2016-10-13-10-11-38_57ff41ba1c02e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `Email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`email`) VALUES
('yassmin.monsif@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tag_name` varchar(32) NOT NULL,
  PRIMARY KEY (`tag_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_name`) VALUES
('#lana'),
('#mada'),
('awd');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guarantee`
--
ALTER TABLE `guarantee`
  ADD CONSTRAINT `guarantee_ibfk_1` FOREIGN KEY (`printer_id`) REFERENCES `printers` (`printer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parts_general_specification`
--
ALTER TABLE `parts_general_specification`
  ADD CONSTRAINT `parts_general_specification_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parts_guarantee`
--
ALTER TABLE `parts_guarantee`
  ADD CONSTRAINT `parts_guarantee_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parts_typing_specification`
--
ALTER TABLE `parts_typing_specification`
  ADD CONSTRAINT `parts_typing_specification_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `part_image`
--
ALTER TABLE `part_image`
  ADD CONSTRAINT `part_image_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `part_tag`
--
ALTER TABLE `part_tag`
  ADD CONSTRAINT `part_tag_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `part_tag_ibfk_2` FOREIGN KEY (`tag_name`) REFERENCES `tags` (`tag_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_item`
--
ALTER TABLE `plan_item`
  ADD CONSTRAINT `plan_item_ibfk_1` FOREIGN KEY (`plane_id`) REFERENCES `plans` (`plane_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `printers`
--
ALTER TABLE `printers`
  ADD CONSTRAINT `printers_ibfk_1` FOREIGN KEY (`family_id`) REFERENCES `families` (`family_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `printer_general_specification`
--
ALTER TABLE `printer_general_specification`
  ADD CONSTRAINT `printer_general_specification_ibfk_1` FOREIGN KEY (`printer_id`) REFERENCES `printers` (`printer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `printer_image`
--
ALTER TABLE `printer_image`
  ADD CONSTRAINT `printer_image_ibfk_1` FOREIGN KEY (`printer_id`) REFERENCES `printers` (`printer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `printer_tags`
--
ALTER TABLE `printer_tags`
  ADD CONSTRAINT `printer_tags_ibfk_1` FOREIGN KEY (`printer_id`) REFERENCES `printers` (`printer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `printer_tags_ibfk_2` FOREIGN KEY (`tag_name`) REFERENCES `tags` (`tag_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `printer_typing_specification`
--
ALTER TABLE `printer_typing_specification`
  ADD CONSTRAINT `printer_typing_specification_ibfk_1` FOREIGN KEY (`printer_id`) REFERENCES `printers` (`printer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
