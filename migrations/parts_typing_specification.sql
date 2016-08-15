
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Database: `protech`


CREATE TABLE `parts_typing_specification` (
  `typing_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `typing_text` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
ALTER TABLE `parts_typing_specification`
  ADD PRIMARY KEY (`typing_id`),
  ADD KEY `part_id` (`part_id`);


ALTER TABLE `parts_typing_specification`
  MODIFY `typing_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `parts_typing_specification`
  ADD CONSTRAINT `parts_typing_specification_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE;


