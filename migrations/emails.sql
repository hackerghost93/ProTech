
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `name` varchar(32) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `emails` ADD `Seen` VARCHAR(32) NOT NULL DEFAULT 'new' AFTER `created_at`;
