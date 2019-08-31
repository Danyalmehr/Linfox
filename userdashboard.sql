-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2019 at 07:06 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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
  `att_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `final_score` varchar(255) DEFAULT NULL,
  `att_number` int(10) NOT NULL,
  `test_id` int(255) UNSIGNED DEFAULT NULL,
  `user_id` int(255) UNSIGNED DEFAULT NULL,
  `att_date` varchar(30) NOT NULL,
  `att_status` text,
  `time_taken` int(255) NOT NULL,
  PRIMARY KEY (`att_id`),
  KEY `test_id` (`test_id`),
  KEY `email_FK` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=261 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attempt`
--

INSERT INTO `attempt` (`att_id`, `final_score`, `att_number`, `test_id`, `user_id`, `att_date`, `att_status`, `time_taken`) VALUES
(255, '0', 2, 2, 8, '2019-08-31 04:23:08pm', 'Not completed', 0),
(256, '50', 3, 2, 8, '1567232655', 'Completed', 0),
(257, '25', 4, 2, 8, '1567232886', 'Completed', 0),
(258, '0', 5, 2, 8, '1567233322', 'Completed', 348),
(259, '0', 6, 2, 8, '1567235007', 'Completed', 120),
(260, '0', 7, 2, 8, '1567235046', 'Completed', 11);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`) VALUES
(2, 'Laser tag', ''),
(3, 'Parkour', 'Nothing much');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `que_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `test_id` int(255) UNSIGNED DEFAULT NULL,
  `que_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`que_id`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=935 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `test_id`, `que_type`) VALUES
(6, 'What is the best helmet brand?', 'aqua', 'red', 'mountain', 'glips', 'mountain', 2, '1'),
(917, 'd', ' asd asd ', 'asd', 'tyutyuert', 'ddds', 'ddds', 11, '1'),
(926, 'what\'s your?', ' asd asd ', 'shesh', 'how\'r', 'dan', 'dan', 2, '1'),
(927, 'waht\'s', ' asd asd ', 'asd', 'tyutyuert', 'ddds', 'ddds', 2, '1'),
(934, 'what\'s your name?', '', '', '', '', '', 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_name` varchar(255) NOT NULL,
  `course_id` int(255) UNSIGNED DEFAULT NULL,
  `test_video` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`test_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `course_id`, `test_video`) VALUES
(2, 'Safety', 2, 'UFetGppb7Eg'),
(3, 'coding challenge', 3, NULL),
(11, 'as', 3, NULL),
(13, 'Starting the game', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

DROP TABLE IF EXISTS `time`;
CREATE TABLE IF NOT EXISTS `time` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `hour` varchar(40) NOT NULL,
  `min` varchar(40) NOT NULL,
  `sec` varchar(40) NOT NULL,
  `day` int(30) NOT NULL,
  `month` int(13) NOT NULL,
  `year` int(2) NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `hour`, `min`, `sec`, `day`, `month`, `year`) VALUES
(1, '0', '0', '0', 0, 0, 0),
(2, '0', '0', '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `password`, `email`, `user_type`) VALUES
(2, 's', 's', '12345678', 's@s.s', 'Admin'),
(3, 'shesh', 'sonar', 'sheshbhushan', 'shesh@s.s', 'Admin'),
(7, 'dan', 'wqe', '12345678', 'abc@sad', 'Employee'),
(8, 'dan', 'dan', '123456789', 'dan@dan', 'Employee'),
(11, 'f', 'f', '12345678', 'f@f', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

DROP TABLE IF EXISTS `useranswer`;
CREATE TABLE IF NOT EXISTS `useranswer` (
  `ans_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userans` varchar(255) NOT NULL,
  `que_id` int(255) UNSIGNED DEFAULT NULL,
  `user_id` int(255) UNSIGNED DEFAULT NULL,
  `test_id` int(255) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`ans_id`),
  KEY `que_id` (`que_id`),
  KEY `email_FK` (`user_id`) USING BTREE,
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`ans_id`, `userans`, `que_id`, `user_id`, `test_id`) VALUES
(16, 'glips', 6, 8, 2),
(17, ' asd asd ', 926, 8, 2),
(18, 'ddds', 927, 8, 2),
(19, 'aqua', 6, 8, 2),
(20, 'dan', 926, 8, 2),
(21, 'tyutyuert', 927, 8, 2),
(22, 'asd', 934, 8, 2),
(23, 'mountain', 6, 8, 2),
(24, 'dan', 926, 8, 2),
(25, 'ddds', 927, 8, 2),
(26, 'dan', 934, 8, 2),
(27, 'mountain', 6, 8, 2),
(28, 'dan', 926, 8, 2),
(29, 'ddds', 927, 8, 2),
(30, 'aa', 934, 8, 2),
(31, 'glips', 6, 8, 2),
(32, 'asd', 927, 8, 2),
(33, 'qwqweqwe', 934, 8, 2),
(34, 'glips', 6, 8, 2),
(35, ' asd asd ', 926, 8, 2),
(36, 'tyutyuert', 927, 8, 2),
(37, '', 934, 8, 2),
(38, 'aqua', 6, 8, 2),
(39, 'dan', 926, 8, 2),
(40, ' asd asd ', 927, 8, 2),
(41, 'asd', 934, 8, 2),
(42, 'aqua', 6, 8, 2),
(43, 'dan', 926, 8, 2),
(44, ' asd asd ', 927, 8, 2),
(45, 'asd', 934, 8, 2),
(46, 'aqua', 6, 8, 2),
(47, 'dan', 926, 8, 2),
(48, ' asd asd ', 927, 8, 2),
(49, 'asd', 934, 8, 2),
(50, 'aqua', 6, 8, 2),
(51, 'dan', 926, 8, 2),
(52, ' asd asd ', 927, 8, 2),
(53, 'as', 934, 8, 2),
(54, 'aqua', 6, 8, 2),
(55, 'dan', 926, 8, 2),
(56, ' asd asd ', 927, 8, 2),
(57, 'as', 934, 8, 2),
(58, 'aqua', 6, 8, 2),
(59, 'dan', 926, 8, 2),
(60, ' asd asd ', 927, 8, 2),
(61, 'as', 934, 8, 2),
(62, 'aqua', 6, 8, 2),
(63, 'dan', 926, 8, 2),
(64, ' asd asd ', 927, 8, 2),
(65, 'as', 934, 8, 2),
(66, 'mountain', 6, 8, 2),
(67, 'dan', 926, 8, 2),
(68, 'asd', 927, 8, 2),
(69, 'a', 934, 8, 2),
(70, 'aqua', 6, 8, 2),
(71, 'shesh', 926, 8, 2),
(72, 'asd', 927, 8, 2),
(73, 'a', 934, 8, 2),
(74, 'glips', 6, 8, 2),
(75, 'dan', 926, 8, 2),
(76, 'tyutyuert', 927, 8, 2),
(77, 'a', 934, 8, 2),
(78, 'aqua', 6, 8, 2),
(79, 'asd', 927, 8, 2),
(80, 'a', 934, 8, 2),
(81, 'red', 6, 8, 2),
(82, 'dan', 926, 8, 2),
(83, 'asd', 927, 8, 2),
(84, 'jasdhjabdjhsabjhdbasjdbjhasbdjbajhdb', 934, 8, 2),
(85, 'red', 6, 8, 2),
(86, 'shesh', 926, 8, 2),
(87, 'ddds', 927, 8, 2),
(88, 'q', 934, 8, 2),
(89, 'glips', 6, 8, 2),
(90, ' asd asd ', 926, 8, 2),
(91, ' asd asd ', 927, 8, 2),
(92, 's', 934, 8, 2),
(93, 'glips', 6, 8, 2),
(94, ' asd asd ', 926, 8, 2),
(95, ' asd asd ', 927, 8, 2),
(96, 's', 934, 8, 2),
(97, 'mountain', 6, 8, 2),
(98, 'dan', 926, 8, 2),
(99, ' asd asd ', 927, 8, 2),
(100, 'a', 934, 8, 2),
(101, 'mountain', 6, 8, 2),
(102, ' asd asd ', 926, 8, 2),
(103, ' asd asd ', 927, 8, 2),
(104, 'd', 934, 8, 2),
(105, 'glips', 6, 8, 2),
(106, ' asd asd ', 926, 8, 2),
(107, 'asd', 927, 8, 2),
(108, 'a', 934, 8, 2),
(109, 'glips', 6, 8, 2),
(110, ' asd asd ', 926, 8, 2),
(111, 'asd', 927, 8, 2),
(112, 'a', 934, 8, 2),
(113, 'mountain', 6, 8, 2),
(114, ' asd asd ', 927, 8, 2),
(115, 'a', 934, 8, 2),
(116, 'mountain', 6, 8, 2),
(117, ' asd asd ', 927, 8, 2),
(118, 'a', 934, 8, 2),
(119, 'aqua', 6, 8, 2),
(120, 'dan', 926, 8, 2),
(121, ' asd asd ', 927, 8, 2),
(122, 'a', 934, 8, 2),
(123, 'glips', 6, 8, 2),
(124, ' asd asd ', 927, 8, 2),
(125, 'sss', 934, 8, 2),
(126, 'red', 6, 8, 2),
(127, 'shesh', 926, 8, 2),
(128, 'asd', 927, 8, 2),
(129, 's', 934, 8, 2),
(130, 'aqua', 6, 8, 2),
(131, 'dan', 926, 8, 2),
(132, 'ddds', 927, 8, 2),
(133, 'as', 934, 8, 2),
(134, 'glips', 6, 8, 2),
(135, ' asd asd ', 926, 8, 2),
(136, 'ddds', 927, 8, 2),
(137, 'a', 934, 8, 2),
(138, 'glips', 6, 8, 2),
(139, 'asd', 927, 8, 2),
(140, 'ad', 934, 8, 2),
(141, 'glips', 6, 8, 2),
(142, 'asd', 927, 8, 2),
(143, 'ad', 934, 8, 2),
(144, 'glips', 6, 8, 2),
(145, 'shesh', 926, 8, 2),
(146, 'tyutyuert', 927, 8, 2),
(147, 'shesh', 934, 8, 2),
(148, 'red', 6, 8, 2),
(149, ' asd asd ', 926, 8, 2),
(150, ' asd asd ', 927, 8, 2),
(151, 's', 934, 8, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attempt`
--
ALTER TABLE `attempt`
  ADD CONSTRAINT `attempt_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attempt_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE;

--
-- Constraints for table `useranswer`
--
ALTER TABLE `useranswer`
  ADD CONSTRAINT `useranswer_ibfk_1` FOREIGN KEY (`que_id`) REFERENCES `question` (`que_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `useranswer_ibfk_3` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `useranswer_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
