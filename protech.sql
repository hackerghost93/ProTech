-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2016 at 10:19 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`, `email`) VALUES
(1, 'main', '81dc9bdb52d04dc20036dbd8313ed055', 'TheImaginaryKing@gmail.com'),
(5, 'hackerghost', '6a104614793068ae4d8faa82311be629', 'aws');

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
(1, 'a', NULL, NULL, NULL, NULL, NULL, 'hackerghost@hotmail.com', '6a104614793068ae4d8faa82311be629', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE IF NOT EXISTS `families` (
  `family_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `family_name` varchar(32) NOT NULL,
  `family_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`family_id`),
  UNIQUE KEY `family_name` (`family_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`family_id`, `family_name`, `family_description`) VALUES
(3, 'WorkCentre M20/M20i', NULL),
(4, 'Phaser 3635MFP', NULL),
(5, 'WorkCentre 5645/5655', NULL),
(6, 'WorkCentre 5765/5775/5790', NULL),
(7, 'WorkCentre 7232/7242', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `guarantee`
--

INSERT INTO `guarantee` (`guarantee_id`, `printer_id`, `guarantee_text`) VALUES
(2, 22, ''),
(3, 23, ''),
(4, 24, ''),
(6, 26, ''),
(7, 27, ''),
(8, 28, '');

-- --------------------------------------------------------

--
-- Table structure for table `other_drivers`
--

CREATE TABLE IF NOT EXISTS `other_drivers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `other_drivers`
--

INSERT INTO `other_drivers` (`id`, `title`, `url`) VALUES
(1, 'new', 'driver');

-- --------------------------------------------------------

--
-- Table structure for table `other_pdf`
--

CREATE TABLE IF NOT EXISTS `other_pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `other_pdf`
--

INSERT INTO `other_pdf` (`id`, `title`, `url`) VALUES
(4, 'new', 'pdf');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partner_id`, `partner_name`, `partner_image`) VALUES
(1, 'XEROX', 'imgs/image_2016-08-27-18-28-30_57c1dbce57d07.jpg'),
(2, 'mahmoud', 'imgs/image_2016-08-27-18-28-48_57c1dbe02468e.jpg');

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
  PRIMARY KEY (`part_id`),
  KEY `family_id` (`family_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`part_id`, `family_id`, `name`, `description`, `warranty`, `general_description`, `pdf`, `driver`) VALUES
(2, NULL, 'crum', NULL, NULL, '', 'imgs/image_2016-08-28-14-58-08_57c2fc00dcd00.jpg', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parts_general_specification`
--

INSERT INTO `parts_general_specification` (`general_id`, `part_id`, `general_text`) VALUES
(1, 2, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parts_guarantee`
--

INSERT INTO `parts_guarantee` (`guarantee_id`, `part_id`, `guarantee_text`) VALUES
(1, 2, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parts_typing_specification`
--

INSERT INTO `parts_typing_specification` (`typing_id`, `part_id`, `typing_text`) VALUES
(1, 2, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `part_image`
--

INSERT INTO `part_image` (`image_id`, `part_id`, `image_path`) VALUES
(2, 2, 'imgs/image_2016-08-28-14-58-09_57c2fc01030f0.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plane_id`, `plane_name`, `type`) VALUES
(1, 'da3m', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `plan_item`
--

INSERT INTO `plan_item` (`item_id`, `plane_id`, `plane_text`) VALUES
(1, 1, '1'),
(2, 1, '2'),
(3, 1, '3');

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
  PRIMARY KEY (`printer_id`),
  KEY `family_id` (`family_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `printers`
--

INSERT INTO `printers` (`printer_id`, `family_id`, `name`, `general_description`, `pdf`, `driver`) VALUES
(21, 3, 'WorkCentre M20/M20i', '', 'imgs/image_2016-08-28-10-51-59_57c2c24f78e04.png', 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-m20-m20i/spec-enus.html'),
(22, NULL, 'WorkCentre 3215', '', 'imgs/image_2016-08-28-11-30-40_57c2cb60eba3f.png', 'http://www.office.xerox.com/multifunction-printer/multifunction-under-30ppm/workcentre-3215/spec-enus.html'),
(23, 4, 'Phaser 3635MFP', 'Phaser 3635MFP', 'imgs/image_2016-08-28-11-40-12_57c2cd9ca4f65.png', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/phaser-3635mfp/spec-enus.html'),
(24, 5, 'WorkCentre 5645/5655', '', 'imgs/image_2016-08-28-11-56-16_57c2d16073200.png', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5645-5655/spec-enus.html'),
(25, NULL, 'WorkCentre 5735/5740', 'Monochrome copier, copier/printer or MFP  For small workgroups of less then 10 users to large departments of more than 50 people Xerox no longer sells the WorkCentre 5735/5740/5745. Please see PDF Downloads for specifics on the WorkCentre 5755.', 'imgs/image_2016-08-28-12-15-05_57c2d5c943312.png', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5735-5740-5745-5755/spec-enus.html'),
(26, 6, 'WorkCentre 5765/5775/5790', '', 'imgs/image_2016-08-28-13-04-37_57c2e1651ee12.png', 'http://www.office.xerox.com/multifunction-printer/multifunction-over-30ppm/workcentre-5765-5775-5790/spec-enus.html'),
(27, 7, 'WorkCentre 7232/7242', '', 'imgs/image_2016-08-28-13-08-10_57c2e23a20d5f.png', ''),
(28, NULL, 'WorkCentre 7120/7125', 'WorkCentre 7120/7125', 'imgs/image_2016-08-28-13-11-12_57c2e2f06aad9.png', 'http://www.office.xerox.com/multifunction-printer/color-multifunction/workcentre-7120/spec-enza.html');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `printer_general_specification`
--

INSERT INTO `printer_general_specification` (`general_id`, `printer_id`, `general_text`) VALUES
(28, 21, 'Copying'),
(29, 21, 'Printing'),
(30, 21, 'Scan'),
(31, 21, 'Media Handling'),
(32, 21, 'Physical Dimensions (WxDxH)'),
(33, 21, 'Electrical'),
(34, 21, 'Operating Environment'),
(35, 21, 'Supplies'),
(36, 21, 'Agency Approvals'),
(37, 22, 'Model:3215/NI'),
(38, 22, 'Starting at:$259'),
(39, 22, 'Print speed:up to 27 ppm'),
(40, 22, 'Duty cycle:Up to 30,000 images/month1'),
(41, 22, 'Processor speed:600 MHz'),
(42, 22, 'Print memory (standard):256 MB standard'),
(43, 22, 'Connectivity:10/100BaseT Ethernet, High-Speed USB 2.0, Wi-Fi b/g/n'),
(44, 23, 'Model:3635MFP/SM'),
(45, 23, 'Standard functions:Copy, Email, Print, Scan'),
(46, 23, 'Optional functions:Network fax server enablement'),
(47, 23, 'Print speed:up to 35 ppm'),
(48, 23, 'First-page-out time, printing:As fast as 8.5 seconds'),
(49, 23, 'Connectivity:10/100BaseTX Ethernet, USB 2.0 (optional: Wireless (IEEE802.11a/b/g))'),
(50, 24, 'Model:WC5645'),
(51, 24, 'Standard functions:Copy'),
(52, 24, 'Optional functions:Fax (One/Two line)'),
(53, 24, 'Print speed:up to 45 ppm'),
(54, 24, 'First-page-out time, copying:As fast as 3.4 seconds'),
(64, 25, 'Model:WC5735/CSA / WC5740/CSA / WC5745/CSA / WC5755/CSA'),
(65, 25, 'Standard functions:Color scan, Copy, Email, Print'),
(66, 25, 'Optional functions:Fax'),
(67, 25, 'Print speed:up to 35 ppm/up to 40 ppm/up to 45 ppm/up to 55 ppm'),
(68, 26, 'Model:WC5765/C / WC5775/C / WC5790/C'),
(69, 26, 'Standard functions:Copy'),
(70, 26, 'Optional functions:Fax'),
(71, 26, 'Print speed:up to 65 ppm/up to 75 ppm/up to 90 ppm'),
(72, 26, 'Hard drive:160 GB'),
(73, 27, 'Model:WC7232'),
(74, 27, 'Standard functions:Copy, Print'),
(75, 27, 'Optional functionsEmail, Fax (One/Three line), Internet fax, LAN fax, Network fax server, Scan'),
(76, 27, 'duty cycleUp to 100,000 images/month'),
(77, 28, 'ModelWorkCentre 7120S'),
(78, 28, 'Copy/print speedColour: up to 20 ppm'),
(79, 28, 'Standard functionsCopy, Network scan, Print, Scan-to-Email/Folder'),
(80, 28, 'Optional functionsFax, Scan to/Print from USB'),
(81, 28, 'Duty cycleUp to 50,000 images/month');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `printer_image`
--

INSERT INTO `printer_image` (`image_id`, `printer_id`, `image_path`) VALUES
(8, 21, 'imgs/image_2016-08-28-10-51-59_57c2c24f90483.png'),
(9, 22, 'imgs/image_2016-08-28-11-30-41_57c2cb6111be6.png'),
(10, 23, 'imgs/image_2016-08-28-11-40-12_57c2cd9cafd75.png'),
(11, 24, 'imgs/image_2016-08-28-11-56-16_57c2d1607d170.png'),
(12, 25, 'imgs/image_2016-08-28-12-10-02_57c2d49a6d7fe.png'),
(13, 26, 'imgs/image_2016-08-28-13-04-37_57c2e1652ce1c.png'),
(14, 27, 'imgs/image_2016-08-28-13-08-10_57c2e23a2e967.png'),
(15, 28, 'imgs/image_2016-08-28-13-11-12_57c2e2f07d43b.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `printer_typing_specification`
--

INSERT INTO `printer_typing_specification` (`typing_id`, `printer_id`, `typing_text`) VALUES
(16, 21, 'Copy speed:up to 22 ppm'),
(17, 21, 'Copy resolution:600 x 600 dpi'),
(18, 21, 'First copy out:&lt; 8 seconds'),
(19, 21, 'Full duplex:Yes (1-2, 2-2, 2-1)'),
(20, 21, 'Reduce/Enlarge:Platen: 25 – 400% in 1% increments DADF: 25 – 100% in 1% increments'),
(21, 21, 'Productivity:Scan Once Print Many, Electronic Pre-Collation standard'),
(22, 21, 'Multiple copies:Up to 999 copies of multiple page originals'),
(23, 22, 'Maximum print resolution:600 x 600 dpi (up to 4800 x 600 enhanced image quality)'),
(24, 22, 'First-page-out time, printing:As fast as 8.5 seconds'),
(25, 22, 'Page Description Languages (PDL):PCL® 5e emulation, PCL® 6 emulation, PostScript 3 emulation'),
(26, 22, 'Print features:Bi-directional driver, Booklet printing, Custom page size'),
(27, 22, 'Mobile printing:Apple® AirPrint™'),
(28, 23, 'Maximum print resolution:600 x 600 dpi (up to 1200 x 1200 enhanced image quality)'),
(29, 23, 'Hard drive:Standard 80 GB'),
(30, 23, 'Processor:360 MHz'),
(31, 23, 'PCL® fonts:45'),
(32, 23, 'PostScript® fonts:136'),
(33, 23, 'Print features:Banner sheets, Booklet printing, Delay print, Image rotation, N-up, Overlays, Print from USB'),
(34, 24, 'Maximum copy resolution:4800 x 600 dpi'),
(35, 24, 'Copy resolution:600 x 600 x 8 dpi'),
(36, 24, 'Reduce/Enlarge:From platen: 25 - 400 %'),
(37, 24, 'Reduce/Enlarge increments:1 %'),
(38, 24, 'Multiple copies:1 to 9,999'),
(49, 25, 'Availability:This model is no longer available.'),
(50, 25, 'Copy/print speed:up to 35 ppm'),
(51, 25, 'Standard functions:Copy'),
(52, 25, 'Optional functions:Fax'),
(53, 25, 'Duty cycle:Up to 125,000 images/month'),
(54, 26, 'Model:WC5765'),
(55, 26, 'Copy/print :speedup to 65 ppm'),
(56, 26, 'Duty cycle:Up to 300,000 images/month'),
(57, 26, 'First-page-out time, copying:As fast as 2.7 seconds'),
(58, 27, 'Resolution :600 x 600 x 4 bits dpi'),
(59, 27, 'Connectivity :10/100BaseTX Ethernet, USB 2.0 (via third party: Wireless (IEEE802.11a/b/g))'),
(60, 27, 'Processor PowerPC® 667 MHz'),
(61, 27, 'Print memory (standard) 1.17 GB standard'),
(62, 27, 'Hard drive Standard 40 GB'),
(63, 28, 'First-page-out time, printing As fast as 13 seconds colour / 11 seconds black and white'),
(64, 28, 'Resolution 600 x 600 x 4 bits dpi'),
(65, 28, 'Print memory (standard) 2 GB standard'),
(66, 28, 'Hard drive 80 GB'),
(67, 28, 'Connectivity 10/100BaseTX Ethernet, USB 2.0');

-- --------------------------------------------------------

--
-- Table structure for table `slide_show`
--

CREATE TABLE IF NOT EXISTS `slide_show` (
  `Slide_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Slide_Title` varchar(200) NOT NULL,
  `Slide_image` varchar(200) NOT NULL,
  PRIMARY KEY (`Slide_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `slide_show`
--

INSERT INTO `slide_show` (`Slide_ID`, `Slide_Title`, `Slide_image`) VALUES
(4, '7232', 'imgs/image_2016-08-28-13-14-50_57c2e3cac50aa.png'),
(5, 'WorkCentre 7232/7242', 'imgs/image_2016-08-28-13-15-34_57c2e3f601577.png');

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
('hackerghost@hot.com'),
('yassmyhgtfr@dfhj');

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
('taaaaaaaaaag1'),
('wa2ooool'),
('wa2ooool1'),
('WorkCentre M20/M20i');

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
