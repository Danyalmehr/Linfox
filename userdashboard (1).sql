-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2019 at 11:10 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `attempt`
--

DROP TABLE IF EXISTS `attempt`;
CREATE TABLE IF NOT EXISTS `attempt` (
  `att_id` int(255) NOT NULL AUTO_INCREMENT,
  `final_score` varchar(255) DEFAULT NULL,
  `test_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`att_id`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`) VALUES
(1, 'Example 1', 'gfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgc'),
(2, 'Example 2', 'gfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgc');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `que_id` int(255) NOT NULL AUTO_INCREMENT,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `test_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`que_id`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `test_id`) VALUES
(1, 'What does PHP stand for?', 'Preprocessed Hypertext Page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'Hypertext Preprocessor', NULL),
(2, 'What will be the value of $var? ', '0', '1', '2', 'NULL', '0', NULL),
(3, ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', 'header', 'headers_list', 'header_sent', 'header_send', 'headers_list', NULL),
(4, 'Which of the following is the Server Side Scripting Language?', 'HTML', 'CSS', 'JS', 'PHP', 'PHP', NULL),
(5, 'From which website you download this source code?', 'Softglobe.net', 'w3school.com', 'technopoints.co.in', 'php.net', 'technopoints.co.in', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `ans_id` int(255) NOT NULL AUTO_INCREMENT,
  `userans` varchar(255) NOT NULL,
  `que_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`ans_id`),
  KEY `que_id` (`que_id`)
) ENGINE=InnoDB AUTO_INCREMENT=497 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ans_id`, `userans`, `que_id`) VALUES
(472, 'Preprocessed Hypertext Page', 1),
(473, '2', 2),
(474, 'header', 3),
(475, 'CSS', 4),
(476, 'Softglobe.net', 5),
(477, 'Hypertext Preprocessor', 1),
(478, '0', 2),
(479, 'headers_list', 3),
(480, 'JS', 4),
(481, 'php.net', 5),
(482, 'Hypertext Preprocessor', 1),
(483, '1', 2),
(484, 'header_send', 3),
(485, 'JS', 4),
(486, 'technopoints.co.in', 5),
(487, 'Preprocessed Hypertext Page', 1),
(488, '0', 2),
(489, 'header_sent', 3),
(490, 'JS', 4),
(491, 'technopoints.co.in', 5),
(492, 'Preprocessed Hypertext Page', 1),
(493, '0', 2),
(494, 'header_sent', 3),
(495, 'JS', 4),
(496, 'technopoints.co.in', 5);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `final_score` int(11) NOT NULL,
  `email_FK` varchar(100) NOT NULL,
  `test_id_FK` int(255) NOT NULL,
  `course_id_FK` int(255) NOT NULL,
  UNIQUE KEY `final_score` (`final_score`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(255) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(255) NOT NULL,
  `course_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`test_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `password`) VALUES
('Shesh', 'Sonar', 's@s.s', 'ss');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`que_id`) REFERENCES `question` (`que_id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
