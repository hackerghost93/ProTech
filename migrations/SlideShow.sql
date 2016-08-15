drop table slide_show ;
--
-- Database: `protech`
--

CREATE TABLE `slide_show` (
  `Slide_ID` int(11) NOT NULL Auto_Increment PRIMARY key,
  `Slide_Title` varchar(200) NOT NULL,
  `Slide_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `slide_show` (`Slide_ID`, `Slide_Title`, `Slide_image`) VALUES
(1, 'first', 'first.png'),
(3, 'awd', '100.jpg');

