-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2019 at 04:42 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=288 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attempt`
--

INSERT INTO `attempt` (`att_id`, `final_score`, `att_number`, `test_id`, `user_id`, `att_date`, `att_status`, `time_taken`) VALUES
(255, '0', 2, 2, 8, '2019-08-31 04:23:08pm', 'Not completed', 0),
(261, '25', 8, 2, 8, '2019-09-02 02:13:36pm', 'Completed', 9),
(262, '0', 1, 13, 8, '2019-09-02 03:49:54pm', 'Not completed', 0),
(263, '25', 1, 2, 11, '2019-09-02 04:51:59pm', 'Completed', 11),
(264, '0', 1, 3, 8, '2019-09-02 11:01:15pm', 'Not completed', 0),
(265, '0', 1, 11, 8, '2019-09-02 11:01:23pm', 'Completed', 3),
(266, '0', 2, 3, 8, '2019-09-03 12:06:05am', 'Not completed', 0),
(267, '0', 2, 13, 8, '2019-09-03 12:06:17am', 'Not completed', 0),
(268, '0', 3, 13, 8, '2019-09-03 12:07:02am', 'Completed', 4),
(269, '0', 9, 2, 8, '2019-09-07 10:20:02pm', 'Not completed', 0),
(270, '50', 4, 13, 8, '2019-09-09 12:16:28am', 'Completed', 14),
(271, '0', 10, 2, 8, '2019-09-09 12:17:57am', 'Completed', 9),
(272, '50', 5, 13, 8, '2019-09-09 12:18:41am', 'Completed', 6),
(273, '50', 6, 13, 8, '2019-09-09 12:22:27am', 'Completed', 154),
(274, '50', 7, 13, 8, '2019-09-09 01:28:57am', 'Completed', 980),
(275, '0', 8, 13, 8, '2019-09-09 01:45:25am', 'Completed', 1881),
(276, '20', 1, 2, 2, '2019-09-09 01:19:59pm', 'Completed', 12),
(277, '40', 11, 2, 8, '2019-09-09 01:21:19pm', 'Completed', 14),
(278, '50', 9, 13, 8, '2019-09-09 03:59:06pm', 'Completed', 9),
(279, '50', 10, 13, 8, '2019-09-09 04:00:13pm', 'Completed', 10),
(280, '40', 2, 2, 2, '2019-09-10 10:57:12am', 'Completed', 30),
(281, '60', 3, 2, 2, '2019-09-10 10:57:53am', 'Completed', 25),
(282, '40', 12, 2, 8, '2019-09-10 10:59:39am', 'Completed', 22),
(283, '40', 13, 2, 8, '2019-09-10 11:00:06am', 'Completed', 18),
(284, '60', 2, 2, 11, '2019-09-10 02:15:24pm', 'Completed', 33),
(285, '0', 14, 2, 8, '2019-09-11 11:26:29pm', 'Not completed', 0),
(286, '20', 15, 2, 8, '2019-09-14 12:51:52pm', 'Completed', 11),
(287, '20', 16, 2, 8, '2019-09-14 02:39:01pm', 'Completed', 17);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`) VALUES
(2, 'Laser tag', ''),
(3, 'Parkour', 'Nothing much'),
(4, 'Finalcheck', 'Nothing much');

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
) ENGINE=InnoDB AUTO_INCREMENT=939 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `test_id`, `que_type`) VALUES
(6, 'What is the best helmet brand?', 'aqua', 'red', 'mountain', 'glips', 'mountain', 2, 'mcq'),
(917, 'd', ' asd asd ', 'asd', 'tyutyuert', 'ddds', 'ddds', 11, 'mcq'),
(926, 'what\'s your?', ' asd asd ', 'shesh', 'how\'r', 'dan', 'dan', 2, 'mcq'),
(927, 'waht\'s', ' asd asd ', 'asd', 'tyutyuert', 'ddds', 'ddds', 2, 'mcq'),
(934, 'what\'s your name?', '', '', '', '', '', 2, 'shortans'),
(935, 'rrrrrrrrrrrrr', 'ddddddd', 'wwww', 'ssssss', 'ww', 'ww', 3, 'mcq'),
(936, 'r u', 'ofcourse', 'yes', 'sure', 'no', 'no', 13, 'mcq'),
(937, 'Trying on starting the game?', '', '', '', '', '', 13, 'shortans'),
(938, 'How is life going?', '', '', '', '', '', 2, 'shortans');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `course_id`, `test_video`) VALUES
(2, 'Safety', 2, 'UFetGppb7Eg'),
(3, 'coding challenge', 3, NULL),
(11, 'as', 3, NULL),
(13, 'Starting the game', 2, NULL),
(14, 'QWEQWE', 3, ''),
(15, 'QWEQWE', 2, ''),
(16, 'wq', 2, 'sssssss');

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
  `image_name` varchar(255) NOT NULL DEFAULT 'no-image.jpg',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `password`, `email`, `user_type`, `image_name`) VALUES
(2, 's', 's', '12345678', 's@s.s', 'Admin', 'no-image.jpg'),
(3, 'shesh', 'sonar', 'sheshbhushan', 'shesh@s.s', 'Admin', 'no-image.jpg'),
(7, 'dan', 'wqe', '12345678', 'abc@sad', 'Employee', 'no-image.jpg'),
(8, 'dan', 'dan', '123456789', 'dan@dan', 'Employee', 'the-joker-joaquin-phoenix-art-new-sm-1920x1080.jpg'),
(11, 'f', 'f', '12345678', 'f@f', 'Employee', 'no-image.jpg');

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
  `ans_status` varchar(255) DEFAULT NULL,
  `userans_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ans_id`),
  KEY `que_id` (`que_id`),
  KEY `email_FK` (`user_id`) USING BTREE,
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`ans_id`, `userans`, `que_id`, `user_id`, `test_id`, `ans_status`, `userans_date`) VALUES
(98, 'no', 936, 8, 13, NULL, '2019-09-09 05:59:15'),
(99, 'qwertyuip[ljh', 937, 8, 13, NULL, '2019-09-09 05:59:15'),
(100, 'no', 936, 8, 13, NULL, '2019-09-09 06:00:23'),
(101, 'This is the last one', 937, 8, 13, NULL, '2019-09-09 06:00:24'),
(112, 'mountain', 6, 8, 2, NULL, '2019-09-10 01:00:01'),
(113, 'shesh', 926, 8, 2, NULL, '2019-09-10 01:00:01'),
(114, 'ddds', 927, 8, 2, NULL, '2019-09-10 01:00:01'),
(115, 'Danyal', 934, 8, 2, NULL, '2019-09-10 01:00:01'),
(116, 'Perfect', 938, 8, 2, NULL, '2019-09-10 01:00:01'),
(117, 'mountain', 6, 8, 2, NULL, '2019-09-10 01:00:24'),
(118, 'dan', 926, 8, 2, NULL, '2019-09-10 01:00:24'),
(119, 'tyutyuert', 927, 8, 2, NULL, '2019-09-10 01:00:24'),
(120, 'Dany', 934, 8, 2, 'Average', '2019-09-10 01:00:24'),
(121, 'Awesomeeeeeeeeeeeeeeeeeeeeeeeee', 938, 8, 2, NULL, '2019-09-10 01:00:24'),
(122, 'mountain', 6, 11, 2, NULL, '2019-09-10 04:15:57'),
(123, 'dan', 926, 11, 2, NULL, '2019-09-10 04:15:57'),
(124, 'ddds', 927, 11, 2, NULL, '2019-09-10 04:15:57'),
(125, 'Funny', 934, 11, 2, NULL, '2019-09-10 04:15:57'),
(126, 'Fabulous', 938, 11, 2, NULL, '2019-09-10 04:15:57'),
(127, 'glips', 6, 8, 2, NULL, '2019-09-14 02:52:03'),
(128, 'dan', 926, 8, 2, NULL, '2019-09-14 02:52:03'),
(129, 'tyutyuert', 927, 8, 2, NULL, '2019-09-14 02:52:03'),
(130, 'asd', 934, 8, 2, 'Excellent', '2019-09-14 02:52:03'),
(131, 'asd', 938, 8, 2, NULL, '2019-09-14 02:52:03'),
(132, 'mountain', 6, 8, 2, NULL, '2019-09-14 04:39:18'),
(133, 'shesh', 926, 8, 2, NULL, '2019-09-14 04:39:18'),
(134, 'tyutyuert', 927, 8, 2, NULL, '2019-09-14 04:39:18'),
(135, 'asd', 934, 8, 2, NULL, '2019-09-14 04:39:18'),
(136, 'asd', 938, 8, 2, NULL, '2019-09-14 04:39:18');

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
