
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- Database: `protech`
CREATE TABLE `parts_guarantee` (
  `guarantee_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `guarantee_text` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `parts_guarantee`
  ADD PRIMARY KEY (`guarantee_id`),
  ADD KEY `part_id` (`part_id`),
  ADD KEY `part_id_2` (`part_id`);

ALTER TABLE `parts_guarantee`
  MODIFY `guarantee_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `parts_guarantee`
  ADD CONSTRAINT `parts_guarantee_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE;


