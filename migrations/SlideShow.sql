SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `protech`
--

CREATE TABLE `slide_show` (
  `Slide_ID` int(11) NOT NULL,
  `Slide_Title` varchar(200) NOT NULL,
  `Slide_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `slide_show` (`Slide_ID`, `Slide_Title`, `Slide_image`) VALUES
(1, 'first', 'first.png'),
(3, 'awd', '100.jpg');


ALTER TABLE `slide_show`
  ADD PRIMARY KEY (`Slide_ID`);

ALTER TABLE `slide_show`
  MODIFY `Slide_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
