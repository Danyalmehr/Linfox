-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 02:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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

CREATE TABLE `attempt` (
  `att_id` int(255) UNSIGNED NOT NULL,
  `final_score` varchar(255) DEFAULT NULL,
  `att_number` int(10) NOT NULL,
  `test_id` int(255) UNSIGNED DEFAULT NULL,
  `user_id` int(255) UNSIGNED DEFAULT NULL,
  `att_date` varchar(30) NOT NULL,
  `att_status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attempt`
--

INSERT INTO `attempt` (`att_id`, `final_score`, `att_number`, `test_id`, `user_id`, `att_date`, `att_status`) VALUES
(34, '25', 1, 2, 2, '2019-08-12 07:36:03pm', 'FAIL'),
(35, '100', 2, 2, 2, '2019-08-12 07:36:23pm', 'PASS'),
(36, '100', 3, 2, 2, '2019-08-12 07:57:00pm', 'PASS'),
(37, '50', 4, 2, 2, '2019-08-12 07:59:12pm', 'PASS'),
(38, '0', 5, 2, 2, '2019-08-12 08:01:33pm', 'Fail'),
(39, '0', 6, 2, 2, '2019-08-12 08:04:11pm', 'FAIL'),
(40, '50', 7, 2, 2, '2019-08-12 08:05:52pm', 'PASS'),
(41, '0', 1, 11, 2, '2019-08-12 08:10:18pm', 'FAIL'),
(42, '33.333333333333', 8, 2, 2, '2019-08-12 08:12:14pm', 'FAIL'),
(43, '0', 9, 2, 2, '2019-08-12 08:12:27pm', 'FAIL'),
(44, '33.333333333333', 10, 2, 2, '2019-08-12 08:20:08pm', 'FAIL'),
(45, '0', 1, 3, 2, '2019-08-14 09:12:37pm', 'Fail'),
(46, '0', 1, 13, 2, '2019-08-14 09:17:41pm', 'Fail'),
(47, '0', 2, 13, 2, '2019-08-14 09:30:00pm', 'Fail'),
(48, '0', 3, 13, 2, '2019-08-14 09:43:26pm', 'Fail'),
(49, '0', 1, 2, 8, '2019-08-17 09:04:48pm', 'FAIL'),
(51, '0', 2, 2, 8, '2019-08-17 10:25:01pm', 'FAIL'),
(52, '0', 3, 2, 8, '2019-08-17 10:25:21pm', 'FAIL'),
(53, '0', 4, 2, 8, '2019-08-17 10:26:16pm', 'FAIL'),
(54, '33.333333333333', 5, 2, 8, '2019-08-17 10:34:10pm', 'FAIL'),
(55, '33.333333333333', 6, 2, 8, '2019-08-17 10:53:31pm', 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(255) UNSIGNED NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `question` (
  `que_id` int(255) UNSIGNED NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `test_id` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `test_id`) VALUES
(6, 'What is the best helmet brand?', 'aqua', 'red', 'mountain', 'glips', 'mountain', 2),
(917, 'd', ' asd asd ', 'asd', 'tyutyuert', 'ddds', 'ddds', 11),
(926, 'what\'s your name?', ' asd asd ', 'shesh', 'how\'r', 'dan', 'dan', 2),
(927, 'waht\'s', ' asd asd ', 'asd', 'tyutyuert', 'ddds', 'ddds', 2);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(255) UNSIGNED NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `course_id` int(255) UNSIGNED DEFAULT NULL,
  `test_video` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) UNSIGNED NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `useranswer` (
  `ans_id` int(255) UNSIGNED NOT NULL,
  `userans` varchar(255) NOT NULL,
  `que_id` int(255) UNSIGNED DEFAULT NULL,
  `user_id` int(255) UNSIGNED DEFAULT NULL,
  `test_id` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`ans_id`, `userans`, `que_id`, `user_id`, `test_id`) VALUES
(109, 'mountain', 6, 2, 2),
(110, 'orange', 6, 2, 2),
(111, 'dd', 6, 2, 2),
(112, 'glips', 6, 8, 2),
(113, ' asd asd ', 6, 8, 2),
(114, 'tyutyuert', 6, 8, 2),
(115, 'red', 6, 8, 2),
(116, ' asd asd ', 6, 8, 2),
(117, 'ddds', 6, 8, 2),
(118, 'red', 6, 8, 2),
(119, ' asd asd ', 6, 8, 2),
(120, 'ddds', 6, 8, 2),
(121, 'aqua', 6, 8, 2),
(122, 'dan', 6, 8, 2),
(123, 'tyutyuert', 6, 8, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempt`
--
ALTER TABLE `attempt`
  ADD PRIMARY KEY (`att_id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `email_FK` (`user_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`que_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `useranswer`
--
ALTER TABLE `useranswer`
  ADD PRIMARY KEY (`ans_id`),
  ADD KEY `que_id` (`que_id`),
  ADD KEY `email_FK` (`user_id`) USING BTREE,
  ADD KEY `test_id` (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt`
--
ALTER TABLE `attempt`
  MODIFY `att_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `que_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=928;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `useranswer`
--
ALTER TABLE `useranswer`
  MODIFY `ans_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

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
