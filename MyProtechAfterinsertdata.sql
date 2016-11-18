-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2016 at 03:21 AM
-- Server version: 5.5.49-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `MyProtech`
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
(9, 'root', '827ccb0eea8a706c4c34a16891f84e7b', 'lara2010@icemagic.com'),
(10, 'ImaginaryKing', '7e2893e6dcf52e2e2e1f779ba4cc07f8', 'ImaginaryKing@gmail.com');

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
(1, 'egy', '033015685', '01115913202', '01115913202', 'Iking', 'https://www.youtube.com/', 'icemagic_lordhana2007@yahoo.com', 'password', 'https://www.facebook.com/', 'ImaginaryKing', 'yea');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `name`, `subject`, `message`, `created_at`, `Seen`) VALUES
(1, 'nermeen@gmail.com', 'nermeen', 'aaskndas', 'aidhjusadkusaukd', '2016-08-14 13:36:08', 'Seen'),
(2, 'nermeen2@hotmail.com', 'nermeen', '2', 'aidoisjdiasi', '2016-08-16 08:46:00', 'Seen'),
(3, 'nermeen3@hotmail.com', 'nermeen', '3', 'aidoisjdiasi', '2016-08-16 08:46:17', 'Seen'),
(4, 'nermeen3@hotmail.com', 'nermeen', '3', 'aidoisjdiasi', '2016-08-16 08:46:56', 'Seen'),
(5, 'nermeen4@hotmail.com', 'nermeen', '4', 'aidoisjdiasi', '2016-08-16 08:46:57', 'Seen'),
(6, 'nermeen5@hotmail.com', 'nermeen', '5', 'aidoisjdiasi', '2016-08-16 08:46:57', 'new'),
(7, 'nemeen78@yahoo.com', 'nermeen', 'alex', 'asdhiuasdhas', '2016-08-16 11:24:11', 'new'),
(8, 'nemeen78@yahoo.com', 'nermeen', 'alex', 'asdhiuasdhas', '2016-08-16 11:24:13', 'new'),
(9, 'nemeen897@yahoo.com', 'nermeen', 'aaskndas', 'ojlinlnczx', '2016-08-16 11:25:59', 'new'),
(20, 'nnnn', 'nnnnn', 'nnnnn', 'nnnnn', '2016-08-16 11:52:52', 'new');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`family_id`, `family_name`) VALUES
(9, '32'),
(10, '3635MFP'),
(14, '52'),
(8, '53'),
(11, '56'),
(12, '57'),
(15, '71'),
(13, '72'),
(16, '76'),
(7, 'M20');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partner_id`, `partner_name`, `partner_image`) VALUES
(4, 'awd', 'imgs/image_2016-08-22-20-56-07_57bb4ac764c73.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`part_id`, `family_id`, `name`, `description`, `warranty`, `general_description`, `pdf`, `driver`, `offer`) VALUES
(5, NULL, 'ADF ROLLER ', NULL, NULL, 'ADF ROLLER ', NULL, '', 0),
(6, NULL, 'charge roller', NULL, NULL, 'charge roller', NULL, '', 0),
(7, NULL, 'blade', NULL, NULL, '', NULL, '', 0),
(8, NULL, 'clutch_m20 ', NULL, NULL, '', NULL, '', 0),
(9, NULL, 'color_m20 .jpg', NULL, NULL, 'color_m20 .jpg', NULL, '', 0),
(10, NULL, 'control panel6 ', NULL, NULL, '', NULL, '', 0),
(11, NULL, 'Copier-MFD-For-Rent_Aegis-300x247 -.png', NULL, NULL, 'Copier-MFD-For-Rent_Aegis-300x247 -.png', NULL, '', 0),
(12, NULL, 'crum drum.jpg', NULL, NULL, 'crum drum.jpg', NULL, '', 0),
(13, NULL, 'CRUM ', NULL, NULL, '', NULL, '', 0),
(14, NULL, 'crum drum', NULL, NULL, '', NULL, '', 0),
(15, NULL, 'crum drum - .jpg', NULL, NULL, 'crum drum - .jpg', NULL, '', 0),
(16, NULL, 'crum drum3 .jpg', NULL, NULL, 'crum drum3 .jpg', NULL, '', 0),
(17, NULL, 'crum drum3 (8)', NULL, NULL, '', NULL, '', 0),
(18, NULL, 'crum drum3 (4)', NULL, NULL, '', NULL, '', 0),
(19, NULL, 'crum drum3.jpg', NULL, NULL, 'crum drum3.jpg', NULL, '', 0),
(20, NULL, 'crum drum8 -.jpg', NULL, NULL, 'crum drum8 - jpg', NULL, '', 0),
(21, NULL, 'crum drum3 (7)', NULL, NULL, '', NULL, '', 0),
(22, NULL, 'crum toner7 - jpg', NULL, NULL, 'crum toner7 - jpg', NULL, '', 0),
(23, NULL, 'crum toner ', NULL, NULL, '', NULL, '', 0),
(24, NULL, 'developer black', NULL, NULL, 'developer black', NULL, '', 0),
(25, NULL, 'crum_m20 ', NULL, NULL, '', NULL, '', 0),
(26, NULL, 'developer magenta.jpg', NULL, NULL, 'developer magenta.jpg', NULL, '', 0),
(27, NULL, 'developer cyan', NULL, NULL, '', NULL, '', 0),
(28, NULL, 'developer yellow', NULL, NULL, '', NULL, '', 0),
(29, NULL, 'digital-printing1.jpg', NULL, NULL, 'digital-printing1.jpg', NULL, '', 0),
(30, NULL, 'drum.jpg', NULL, NULL, 'drum.jpg', NULL, '', 0),
(31, NULL, 'dispenser unit', NULL, NULL, '', NULL, '', 0),
(32, NULL, 'printer11.jpg', NULL, NULL, 'printer11.jpg', NULL, '', 0),
(33, NULL, 'drum_m20', NULL, NULL, '', NULL, '', 0),
(34, NULL, 'ROLLER.jpg', NULL, NULL, 'ROLLER.jpg', NULL, '', 0),
(35, NULL, 'RIGHT SIDE', NULL, NULL, '', NULL, '', 0),
(36, NULL, 'sip battery.jpg', NULL, NULL, 'sip battery.jpg', NULL, '', 0),
(37, NULL, 'tone6r.jpg', NULL, NULL, 'tone6r.jpg', NULL, '', 0),
(38, NULL, 'side cover assembly', NULL, NULL, '', NULL, '', 0),
(39, NULL, 'toner cyan.jpg', NULL, NULL, 'toner cyan.jpg', NULL, '', 0),
(40, NULL, 'slender drum', NULL, NULL, '', NULL, '', 0),
(41, NULL, 'toner black8', NULL, NULL, '', NULL, '', 0),
(42, NULL, 'toner yellow.jpg', NULL, NULL, 'toner yellow.jpg', NULL, '', 0),
(43, NULL, 'toner magenta', NULL, NULL, '', NULL, '', 0),
(44, NULL, 'toner_m20.jpg', NULL, NULL, 'toner_m20.jpg', NULL, '', 0),
(45, NULL, 'toner', NULL, NULL, '', NULL, '', 0),
(46, NULL, 'toner3', NULL, NULL, '', NULL, '', 0),
(47, NULL, 'toner.jpg', NULL, NULL, 'toner.jpg', NULL, '', 0),
(48, NULL, 'toner7', NULL, NULL, '', NULL, '', 0),
(49, NULL, 'TRANSFER ROLLER.jpg', NULL, NULL, 'TRANSFER ROLLER.jpg', NULL, '', 0),
(50, NULL, 'transfer roller_m20', NULL, NULL, '', NULL, '', 0),
(51, NULL, 'tray jpg', NULL, NULL, 'tray jpg', NULL, '', 0),
(52, NULL, 'tray feed head', NULL, NULL, '', NULL, '', 0),
(53, NULL, 'tray jpg', NULL, NULL, 'tray jpg', NULL, '', 0),
(54, NULL, 'tray6', NULL, NULL, '', NULL, '', 0),
(55, NULL, 'waste bottle.jpg', NULL, NULL, 'waste bottle.jpg', NULL, '', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `part_image`
--

INSERT INTO `part_image` (`image_id`, `part_id`, `image_path`) VALUES
(1, 5, 'imgs/image_2016-11-13-09-46-22_5828366eead50.jpg'),
(2, 6, 'imgs/image_2016-11-13-09-56-46_582838de3bc8d.jpg'),
(3, 7, 'imgs/image_2016-11-13-09-57-10_582838f6e8450.jpg'),
(4, 8, 'imgs/image_2016-11-13-09-58-01_58283929bf7f3.jpg'),
(5, 9, 'imgs/image_2016-11-13-09-58-12_58283934531d0.jpg'),
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
(50, 55, 'imgs/image_2016-11-13-10-20-15_58283e5f0cdc0.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plane_id`, `plane_name`, `type`) VALUES
(17, 'lolo', '3'),
(23, 'awdel', '2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `plan_item`
--

INSERT INTO `plan_item` (`item_id`, `plane_id`, `plane_text`) VALUES
(41, 17, 'age:23'),
(42, 17, 'height:180'),
(43, 17, 'size:2312'),
(46, 23, 'sala');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `printers`
--

INSERT INTO `printers` (`printer_id`, `family_id`, `name`, `general_description`, `pdf`, `driver`, `offer`) VALUES
(4, 7, 'WorkCentre M20/M20i', 'النسخ, الطباعة, مسح ضوئي , الإستيعاب الورقي ,الابعاد , كهرباء', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-m20-m20i/spec-enus.html', 0),
(5, 8, 'WorkCentre 5325/5330/5335', 'Tabloid monochrome copier or MFP', 'imgs/image_2016-11-12-15-39-16_582737a41f2c5.PDF', 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-5300-series/enus.html', 0),
(8, 10, 'Phaser 3635MFP', 'هادئة و خفيفة الوزن  يتوفر منها اللون الاسود و الابيض', 'imgs/image_2016-11-13-07-42-38_5828196e076c6.png', '', 0),
(9, 9, 'WorkCentre 3215', 'هادئة و خفيفة الوزن -يتوفر منها اللون الاسود و الابيض - يحول الأوراق إلى الوثائق الإلكترونية', 'imgs/image_2016-11-13-07-57-57_58281d050ade2.PDF', '', 0),
(10, 11, 'WorkCentre 5645/5655', 'يحول الأوراق إلى الوثائق الإلكترونية', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5645-5655/spec-enus.html', 0),
(11, 11, '5665 Copier', 'طباعة بكفاءة -هادئة و خفيفة الوزن -يتوفر منها اللون الاسود و الابيض', NULL, 'https://www.xerox.com/digital-printing/printers/copiers/5665-copier/spec-enus.html', 0),
(12, 12, 'WorkCentre 5765/5775/5790', 'هادئة و خفيفة الوزن -يتوفر منها اللون الاسود و الابيض - يحول الأوراق إلى الوثائق الإلكترونية', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5765-5775-5790/enus.html', 0),
(13, NULL, 'WorkCentre 7232/7242', 'يحول الأوراق إلى الوثائق الإلكترونية - يتوفر منها اللون الاسود و الابيض -هادئة و خفيفة الوزن', NULL, 'http://www.office.xerox.com/multifunction-printer/color-multifunction/workcentre-7232-7242/spec-enus.html', 0),
(14, 12, 'WorkCentre 5735', 'طباعة بكفاءة', 'imgs/image_2016-11-13-08-37-29_58282649cb40c.PDF', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5735-5740-5745-5755/enus.html', 0),
(15, 14, 'WorkCentre 5225/5230', 'يحول الأوراق إلى الوثائق الإلكترونية - طباعة بكفاءة -هادئة و خفيفة الوزن -يتوفر منها اللون الاسود و الابيض', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-5225/spec-enza.html', 0),
(16, 15, 'WorkCentre 7120/7125', 'يتوفر منها اللون الاسود و الابيض - يحول الأوراق إلى الوثائق الإلكترونية - طباعة بكفاءة - تدعم خاصية الواي فاي', 'imgs/image_2016-11-13-08-45-16_5828281c84f3f.pdf', 'http://www.office.xerox.com/multifunction-printer/color-multifunction/workcentre-7120/spec-enza.html', 0),
(17, 12, 'WorkCentre 5745', 'نسخة | طباعة | مسح | فاكس | البريد الإلكتروني', 'imgs/image_2016-11-13-08-50-10_58282942e6b87.PDF', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5735-5740-5745-5755/enus.html', 0),
(18, 9, 'WorkCentre 3210/3220', 'تدعم خاصية الواي فاي - يتوفر منها اللون الاسود و الابيض - يحول الأوراق إلى الوثائق الإلكترونية - طباعة بكفاءة', NULL, 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-3210-3220/spec-enza.html', 0),
(19, 12, 'WorkCentre 5755', 'تدعم خاصية الواي فاي', 'imgs/image_2016-11-13-08-56-08_58282aa8c2fb5.PDF', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5735-5740-5745-5755/spec-enus.html', 0),
(20, 16, 'WorkCentre 7655/7665/7675', 'هادئة و خفيفة الوزن -يتوفر منها اللون الاسود و الابيض - يحول الأوراق إلى الوثائق الإلكترونية', 'imgs/image_2016-11-13-09-31-20_582832e85edc6.PDF', 'http://www.office.xerox.com/multifunction-printer/color-multifunction/workcentre-7655-7665-7675/spec-enza.html', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Dumping data for table `printer_general_specification`
--

INSERT INTO `printer_general_specification` (`general_id`, `printer_id`, `general_text`) VALUES
(33, 5, 'سرعة النسخ : ما يصل إلى 22 صفحة في الدقيقة'),
(34, 5, 'وضوح الصورة : 600 × 600 نقطة في البوصة'),
(35, 5, 'سرعة خروج أول ورقة : &lt;8 ثوان'),
(36, 5, 'الازدواج لاول مرة : خصائص الصورة(وجه واحد/ وجهان لوجه واحد / تصوير دوبلكس/تصوير وجهين)'),
(37, 5, 'تكبير / تصغير :تصغير حتي 25% تكبير حتي 100% من الدرج اليدوي'),
(38, 5, 'نسخ متعددة : ما يصل إلى 999 نسخة من النسخ الأصلية متعددة الصفحات'),
(59, 4, 'سرعة النسخ : ما يصل إلى 22 صفحة في الدقيقة'),
(60, 4, 'وضوح الصورة : 600 × 600 نقطة في البوصة'),
(61, 4, 'سرعة خروج أول ورقة : 8 ثوان'),
(62, 4, 'الازدواج لاول مرة : خصائص الصورة(وجه واحد/ وجهان لوجه واحد / تصوير دوبلكس/تصوير وجهين)'),
(63, 4, 'نسخ متعددة : ما يصل إلى 999 نسخة من النسخ الأصلية متعددة الصفحات'),
(68, 9, 'وضوح الصورة تصل إلى 1200 x 1200 نقطة في البوصة تحسين جودة الصور'),
(69, 9, 'سرعة خروج أول ورقة &lt;10 ثوان'),
(70, 9, 'ميزات المسح الضوئي 8-بت رمادي، أبيض وأسود، اللون، PDF / JPEG / TIFF، المسح الضوئي إلى الكمبيوتر الشخصي، والمسح الضوئي إلى WSD، المسح الضوئي إلى البريد الإلكتروني، والمسح الضوئي عن طريق TWAIN / WIA'),
(71, 9, 'إستيعاب الدرج الدرج الاساسي (250 ورقة) درج التغذية اليدوي ورقة'),
(72, 9, 'سعة درج الإخراج 120 ورقة'),
(83, 10, 'وضوح الصورة : 60 × 4800 نقطة في البوصة'),
(84, 10, 'سرعة خروج أول ورقة : بأسرع 3,4 ثانية'),
(85, 10, 'نسخ متعددة : 1-9.999'),
(86, 10, 'Reduce/Enlarge increments : 1 %'),
(87, 10, 'ميزات النسخ : Auto reduction/enlargement, Booklet creation, Edge erase, ID Card Copy, Image shift, Invert image, Margin shift, Mirrored image, N-up, Negative image, Reduce / Enlarge, Scan once - print'),
(88, 10, 'الإستيعاب الورقي : Duplex Automatic Document Feeder Size: 5.5 x 8.5 in. to 11 x 17 in.'),
(89, 10, 'ENERGY STAR : ENERGY STAR® qualified'),
(90, 10, 'Warm-up time (from power off) : 28 seconds (approx)'),
(91, 10, 'Warm-up time (from sleep mode) : 9 seconds (approx)'),
(92, 10, 'ميزات فاكس : شبكة التمكين خادم الفاكس'),
(93, 11, 'السعة القصوي 50'),
(94, 11, 'تحرير الشاشة و القلم إختياري'),
(95, 11, 'Electronic Auditron Included'),
(96, 11, 'الإستيعاب الورقي 4,600'),
(97, 11, 'Auto Duplex Included'),
(98, 11, 'Warm-up time 240'),
(99, 11, 'Highest B/W Print Speed (ppm) 64'),
(100, 12, 'الوظائف الاساسية نسخ و طباعة'),
(101, 12, 'الوظائف القياسية ايميل و فاكس و ناسخ ضوئي'),
(102, 12, 'الاستهلاك شهريا اسرع من 2,7 ثانية'),
(103, 12, 'دقة الطباعة 600 x 600 x 8 dpi'),
(104, 12, 'ميزات الطباعة Annotation, Auto reduction/enlargement, Auto tray select, Auto tray switching, Automatic 2-sided, Bates Stamping, Booklet creation, Build Job, Collation, Covers, ID Card Copy, Image qual'),
(105, 13, 'وضوح الصورة 600 x 600 dpi'),
(106, 13, 'سرعة خروج أول ورقة As fast as 15 seconds color / 6 seconds black and white'),
(107, 13, 'ميزات النسخ Auto reduction/enlargement, Booklet creation, Booklet creation (requires two-sided output), Color touch screen interface, Edge erase, ID Card Copy, Image shift, Margin shift, N-up, Scan on'),
(108, 13, 'نسخ متعددة 1-999'),
(109, 13, 'إتجاه الناسخ Network scanning, Scan to TWAIN application, Scan to desktop, Scan to email, Scan to home, Scan to mailbox'),
(110, 13, 'وضوح الناسخ الضزئي 600 x 600 dpi'),
(111, 13, 'بروتوكول الناسخ MIME-encoded, SMTP'),
(112, 13, 'سعة درج الاخراج 600 ورقة'),
(113, 13, 'إستيعاب الدرج الاساسي 600 ورقة'),
(114, 14, 'Model :WC5735'),
(115, 14, 'إمكانية الوصول اليه : غير متوفر'),
(116, 14, 'سرعة النسخ و الطباعة :up to 35 ppm'),
(117, 14, 'الوظائف الاساسية :  النسخ'),
(118, 14, 'الوظائف الفرعية : فاكس'),
(119, 14, 'الاستهلاك شهريا  : يصل إلي 125,000 صورة / شهر'),
(120, 14, 'سرعة خروج أول ورقة : 4.7 ثانية '),
(121, 14, 'المعالج : Freescale 1.2 GHz'),
(122, 14, 'القرص الصلب :  160 GB'),
(123, 15, 'الوظائف الاساسية نسخ و طباعة'),
(124, 15, 'الوظائف القياسية Email, Internet fax, LAN fax, Network fax server enablement, Network scan, Walkup fax'),
(125, 15, 'التوصيل 10/100BaseTX Ethernet, USB 2.0'),
(126, 15, 'ذاكرة الطباعة 512 MB / 512 MB'),
(127, 15, 'القرص الصلب Standard 40 GB'),
(128, 15, 'الاستيعاب الورقي Duplex Automatic Document Feeder Capacity: 75 sheets'),
(129, 15, 'سعة الدرج الاساسية 1500 ورقة'),
(130, 15, 'أقصي سعة للورق 5100 ورقة'),
(131, 15, 'دقة النسخ 600 x 600 dpi'),
(132, 15, 'Fax compression JBIG, MMR/MR/MH'),
(133, 16, 'سرعة خروج أول ورقة As fast as 8.1 seconds colour / 6.5 seconds black and white'),
(134, 16, 'أقصي دقة للنسخ 600 x 600 dpi'),
(135, 16, 'ميزات النسخ Annotation, Area designation, Auto colour selection, Auto reduction/enlargement, Auto tray select, Automatic 2-sided, Book copying, Booklet creation, Build Job, Collation, Covers, ID Card '),
(136, 16, 'الابعاد Network scan, Scan to email, Scan to folder'),
(137, 16, 'Scan destinations (optional) Scan to USB'),
(138, 16, 'الميزات الاساسية للامن Audit log, Data encryption, Email over SSL, HTTPS (secure scan and network server), IP filtering, Image overwrite security, Lock keyboard, Lock number keypad, Network authentica'),
(139, 16, 'ميزات فاكس Fax build job, Fax forwarding, LAN fax, Two-sided Send and Receive'),
(140, 17, 'Model : WC5745'),
(141, 17, 'إمكانية الوصول اليه : غير متوفر'),
(142, 17, 'الوظائف الاساسية :  النسخ'),
(143, 17, 'الوظائف الفرعية :فاكس'),
(144, 17, 'الاستهلاك شهريا : يصل إلي 200,000 صورة/شهر'),
(145, 17, 'المعالج  : Freescale 1.2 GHz'),
(146, 17, 'القرص الصلب : 160 GB'),
(147, 18, 'سرعة خروج أول ورقة As fast as 8.1 seconds colour / 6.5 seconds black and white'),
(148, 18, 'أقصي دقة للنسخ 600 x 600 dpi'),
(149, 18, 'ميزات النسخ Annotation, Area designation, Auto colour selection, Auto reduction/enlargement, Auto tray select, Automatic 2-sided, Book copying, Booklet creation, Build Job, Collation, Covers, ID Card '),
(150, 18, 'الابعاد Network scan, Scan to email, Scan to folder'),
(151, 18, 'Scan destinations (optional) Scan to USB'),
(152, 18, 'الميزات الثانوية Fax security, Lock printing of received faxes, Xerox Secure Access Unified ID System'),
(153, 18, 'ميزات فاكس Fax build job, Fax forwarding, LAN fax, Two-sided Send and Receive'),
(154, 19, 'Model : WC5755'),
(155, 19, 'الوظائف الاساسية :  النسخ'),
(156, 19, 'الوظائف الفرعية :  فاكس'),
(157, 19, 'الاستهلاك شهريا : يصل إلي 225,000 صورة /الشهر'),
(158, 19, 'سرعة خروج أول ورقة :  3.4 ثانية'),
(159, 19, 'المعالج : Freescale 1.2 GHz'),
(160, 19, 'القرص الصلب :  160 GB'),
(173, 8, 'وضوح الصورة 600 × 600 نقطة في البوصة'),
(174, 8, 'سرعة خروج أول ورقة بأسرع 8.5 ثانية'),
(175, 8, 'نسخ متعددة 1-999'),
(176, 8, 'القرص الصلب معيار 80 GB'),
(177, 20, 'ModelWC7655'),
(178, 20, 'الوظائف الاساسية  : نسخ'),
(179, 20, 'الوظائف القياسية Email, Internet fax, LAN fax, Network fax server enablement, Network scan, Walkup fax');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

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
(20, 20, 'imgs/image_2016-11-13-09-31-20_582832e85f3af.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=148 ;

--
-- Dumping data for table `printer_typing_specification`
--

INSERT INTO `printer_typing_specification` (`typing_id`, `printer_id`, `typing_text`) VALUES
(26, 5, 'سرعة الطباعة : > 25'),
(27, 5, 'سرعة خروج أول ورقة : &lt;8 ثوان'),
(28, 5, 'مساحة التخزين : 1 جيجا'),
(29, 5, 'أعلى دقة للطباعة : الوجهين'),
(50, 4, 'تكنولوجيا : ليزر أحادية اللون'),
(51, 4, 'سرعة الطباعة : ما يصل إلى 22 صفحة في الدقيقة'),
(52, 4, 'دقة الطباعة : 600 × 600 نقطة في البوصة. 1200 x 1200 نقطة في البوصة محرف'),
(53, 4, 'طباعة الورقة الأولي : &lt;9 ثواني'),
(54, 4, 'الوجهين :نعم'),
(59, 9, 'سرعة الطباعة ما يصل إلى 27 صفحة في الدقيقة'),
(60, 9, 'دقة الطباعة 600 × 600 نقطة في البوصة (تصل إلى 4800 × 600 تحسين جودة الصور)'),
(61, 9, 'الإستهلاك شهريا يصل الي 30,000 صورة /شهر'),
(62, 9, 'ذاكرة الطباعة الاساسية 256 MB standard'),
(63, 9, 'السرعة بأسرع 8.5 ثانية'),
(69, 10, 'أقصي دقة للطباعة :4800 x 600 dpi '),
(70, 10, 'دقة الطباعة : 600 x 600 x 8 dpi'),
(71, 10, 'الإستهلاك شهريا : يصل الي 175,000 صورة /الشهر'),
(72, 10, 'تكبير / تصغير : From platen: 25 - 400 %  From document handler: 25 - 400 %'),
(73, 10, 'ذاكرة الطباعة الاساسية : 512 MB max'),
(74, 11, 'أقصي خروج فالشهر 50,000'),
(75, 11, 'أدراج الورق الاساسية 4'),
(76, 11, 'Collator Included'),
(77, 11, 'نوع الترتيب فرز صناديق'),
(78, 11, 'دباسة إختياري'),
(79, 11, 'سرعة خروج أول ورقة 3 s'),
(80, 11, 'Highest B/W Copy Speed (ppm) 64'),
(81, 12, 'دقة الطباعة 600 x 600 x 8 dpi'),
(82, 12, 'أقصي دقة للطباعة 1200 x 1200 dpi'),
(83, 12, 'المعالج Freescale 1.2 GHz'),
(84, 12, 'القرص الصلب 160 GB'),
(85, 12, 'ميزات الطباعة Delay print, Exception page programming, Job queue, Program Ahead, RIP-while-print multitasking, Sample Print, Secure Print, Store Print, Tab printing'),
(86, 12, 'التوصيل 10/100/1000BaseTX Ethernet, USB print (via third party: Token Ring (IEEE802.5), Wireless (IEEE802.11a/b/g))'),
(87, 13, 'دقة الطباعة 600 x 600 x 4 نقطة/بوصة'),
(88, 13, 'التوصيل 10/100BaseTX Ethernet, USB 2.0 (via third party: Wireless (IEEE802.11a/b/g))'),
(89, 13, 'القرص الصلب Standard 40 GB'),
(90, 13, 'ذاكرة الطباعة الاساسية 1.17 GB standard'),
(91, 13, 'المعالج PowerPC® 667 MHz'),
(92, 13, 'ميزات الطباعة Banner sheets, Booklet printing, Delay print, Extended font/form storage, Image rotation, Image smoothing, Mirror image, N-up, Negative image, Poster printing, Print from USB'),
(93, 13, 'وسائط جودة الطباعة Standard, Toner saver mode'),
(94, 13, 'الإستيعاب الورقي Duplex Automatic Document Feeder السعة :75 ورقة Size: 4.9 x 4.5 in. to 11.7 x 17 in.'),
(95, 13, 'أقصي استيعاب للدرج 4270 ورقة'),
(96, 14, 'ميزات الطباعة WC 5735 : Annotation, Auto reduction/enlargement, Auto tray select, Auto tray switching, Automatic 2-sided, Bates Stamping, Booklet creation, Build Job, Collation, Covers, ID Card Copy, '),
(97, 14, 'دقة الطباعة : 600 x 600 x 8 بوصة'),
(98, 15, 'سعة الاخراج 500 sheets'),
(99, 15, 'Finishing options Integrated Office Finisher (Optional): Single-position stapling, 500-sheet tray Office Finisher LX (Optional): Multi-position stapling (optional: 3-hole punch, 4-hole punch, Booklet '),
(100, 15, 'سرعة خروج اول ورقة As fast as 4.3 seconds'),
(101, 15, 'أقصي دقة للطباعة 600 x 600 dpi'),
(102, 15, 'ميزات الطباعة 2in1 Copying, Auto reduction/enlargement, Booklet creation, ID Card Copy, Image shift, Margin shift, Mirrored image, N-up, Negative image, Poster mode, Reduce / Enlarge, Scan once - prin'),
(103, 15, 'Speed dials (one line) Up to 500'),
(104, 15, 'دقة الفاكس Fine (200 x 200 dpi), Normal (100 x 200 dpi), Superfine (200 x 400 dpi), Superfine (400 x 400 dpi), Superfine (600 x 600 dpi)'),
(105, 15, 'QuickScan resolution 200 x 200 dpi'),
(106, 15, 'QuickScan speed 44.8 pps'),
(107, 15, 'ITU compatibility Super Group 3'),
(108, 16, 'First-page-out time, printing As fast as 13 seconds colour / 11 seconds black and white'),
(109, 16, 'الدقة 600 x 600 x 4 bits dpi'),
(110, 16, 'Print memory (standard) 2 GB standard'),
(111, 16, 'القرص الصلب 80 GB'),
(112, 16, 'التوصيل 10/100BaseTX Ethernet, USB 2.0'),
(113, 16, 'ميزات الطباعة Auto fit, Auto tray select, Banner sheets, Booklet printing, Covers, Delay print, N-up, Sample set, Secure Print, Watermarks (optional: Print from USB)'),
(114, 16, 'الميزات الثانوية Fax security, Lock printing of received faxes, Xerox Secure Access Unified ID System'),
(115, 17, 'سرعة النسخ و الطباعة :up to 45 ppm'),
(116, 17, 'دقة الطباعة : 600 x 600 x 8 بوصة'),
(117, 17, 'ميزات الطباعة : Annotation, Auto reduction/enlargement, Auto tray select, Auto tray switching, Automatic 2-sided, Bates Stamping, Booklet creation, Build Job, Collation, Covers, ID Card Copy, Image qu'),
(118, 18, 'First-page-out time, printing As fast as 13 seconds colour / 11 seconds black and white'),
(119, 18, 'الدقة 600 x 600 x 4 bits dpi'),
(120, 18, 'Print memory (standard) 2 GB standard'),
(121, 18, 'القرص الصلب 80 GB'),
(122, 18, 'التوصيل 10/100BaseTX Ethernet, USB 2.0'),
(123, 18, 'ميزات الطباعة Auto fit, Auto tray select, Banner sheets, Booklet printing, Covers, Delay print, N-up, Sample set, Secure Print, Watermarks (optional: Print from USB)'),
(124, 18, 'الميزات الاساسية للامن Audit log, Data encryption, Email over SSL, HTTPS (secure scan and network server), IP filtering, Image overwrite security, Lock keyboard, Lock number keypad, Network authentica'),
(125, 19, 'سرعة النسخ و الطباعة : up to 55 ppm'),
(126, 19, 'دقة الطباعة :  600 x 600 x 8 بوصة'),
(127, 19, 'ميزات الطباعة : Annotation, Auto reduction/enlargement, Auto tray select, Auto tray switching, Automatic 2-sided, Bates Stamping, Booklet creation, Build Job, Collation, Covers, ID Card Copy, Image qu'),
(140, 8, 'دقة الطباعة 600 × 600 نقطة في البوصة (تصل إلى1200 ×1200 تحسين جودة الصور)'),
(141, 8, 'الإستهلاك شهريا يصل الي 75,000 صورة / شهر'),
(142, 8, 'القرص الصلب معيار 80 GB'),
(143, 8, 'ذاكرة الطباعة الاساسية 256 MB / 512 MB'),
(144, 20, 'سرعة النسخ والطباعة : Colour: up to 40 ppm Black: up to 55 ppm '),
(145, 20, 'سرعة خروج اول ورقة : As fast as 5.5 seconds black and white / 8.9 seconds colour'),
(146, 20, 'الاستيعاب الورقي Duplex Automatic Document Feeder Capacity: 250 sheets'),
(147, 20, 'Device memory (standard/max)1 GB / 1 GB');

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
(11, 'protech', '1_zpsd0ea62a7.jpg'),
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
-- Constraints for table `parts`
--
ALTER TABLE `parts`
  ADD CONSTRAINT `parts_ibfk_1` FOREIGN KEY (`family_id`) REFERENCES `families` (`family_id`) ON DELETE SET NULL ON UPDATE CASCADE;

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
