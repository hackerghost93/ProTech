
--
-- Database: `protech`
--
drop database protech ;
create database protech ;
use protech ;
-- --------------------------------------------------------

--
-- Table structure for table `partners`
--
CREATE TABLE families (
  family_id int(11) unsigned not null AUTO_INCREMENT primary key,
  family_name varchar(32) not null UNIQUE,
  family_description varchar(255) 
);
CREATE TABLE `partners` (
  `partner_id` int(11) NOT NULL,
  `partner_name` varchar(200) NOT NULL,
  `partner_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `part_id` int(11) NOT NULL,
  `family_id` int(11) unsigned ,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `warranty` varchar(200) DEFAULT NULL,
  `general_description` varchar(200) DEFAULT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `driver` varchar(200) DEFAULT NULL,
  FOREIGN KEY (family_id) REFERENCES families(family_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE= utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `part_image`
--

CREATE TABLE `part_image` (
  `image_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `image_url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `part_tag`
--

CREATE TABLE `part_tag` (
  `part_id` int(11) NOT NULL,
  `tag_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `printers`
--

CREATE TABLE `printers` (
  `printer_id` int(11) NOT NULL,
  `family_id` int(11) unsigned ,
  `name` varchar(200) NOT NULL,
  `description` text,
  `warranty` varchar(200) DEFAULT NULL,
  `general_description` text,
  `pdf` varchar(200) DEFAULT NULL,
  `driver` varchar(200) DEFAULT NULL ,
  FOREIGN KEY (family_id) REFERENCES families(family_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE= utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `printer_image`
--

CREATE TABLE `printer_image` (
  `image_id` int(11) NOT NULL,
  `printer_id` int(11) NOT NULL,
  `image_path` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `printer_tags`
--

CREATE TABLE `printer_tags` (
  `printer_id` int(11) NOT NULL,
  `tag_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribers` (
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE= utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partner_id`),
  ADD UNIQUE KEY `partner_name` (`partner_name`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `family_id` (`family_id`);

--
-- Indexes for table `part_image`
--
ALTER TABLE `part_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `part_id` (`part_id`);

--
-- Indexes for table `part_tag`
--
ALTER TABLE `part_tag`
  ADD PRIMARY KEY (`part_id`,`tag_name`),
  ADD KEY `tag_name` (`tag_name`);

--
-- Indexes for table `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`printer_id`),
  ADD KEY `family_id` (`family_id`);

--
-- Indexes for table `printer_image`
--
ALTER TABLE `printer_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `printer_id` (`printer_id`);

--
-- Indexes for table `printer_tags`
--
ALTER TABLE `printer_tags`
  ADD PRIMARY KEY (`printer_id`,`tag_name`),
  ADD KEY `tag_name` (`tag_name`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_image`
--
ALTER TABLE `part_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `printers`
--
ALTER TABLE `printers`
  MODIFY `printer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `printer_image`
--
ALTER TABLE `printer_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `parts`
--
-- ALTER TABLE `parts`
--   ADD CONSTRAINT `parts_ibfk_1` FOREIGN KEY (`family_id`) REFERENCES `family` (`family_id`) ON DELETE SET NULL ON UPDATE CASCADE;

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
-- Constraints for table `printers`
--
-- ALTER TABLE `printers`
--   ADD CONSTRAINT `printers_ibfk_1` FOREIGN KEY (`family_id`) REFERENCES `family` (`family_id`) ON DELETE SET NULL ON UPDATE CASCADE;

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

