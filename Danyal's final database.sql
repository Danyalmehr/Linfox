-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 06:15 PM
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
  `att_id` int(255) NOT NULL,
  `final_score` varchar(255) DEFAULT NULL,
  `test_id` int(255) DEFAULT NULL,
  `email_FK` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attempt`
--

INSERT INTO `attempt` (`att_id`, `final_score`, `test_id`, `email_FK`) VALUES
(161, '1', 2, 'dan@dan'),
(162, '1', 2, 's@s.s'),
(163, '2', 2, 'dan@dan'),
(164, '1', 2, 'dan@dan'),
(165, '1', 1, 'dan@dan'),
(166, '2', 1, 'ang@ang'),
(167, '3', 1, 'ang@ang'),
(168, '2', 2, 'dan@dan'),
(169, '3', 1, 'dan@dan'),
(170, '4', 1, 'dan@dan'),
(171, '1', 2, 'ang@ang'),
(172, '4', 1, 'ang@ang'),
(173, '4', 1, 'ang@ang'),
(174, '4', 1, 'ang@ang'),
(175, '4', 1, 'ang@ang'),
(176, '4', 1, 'ang@ang'),
(177, '4', 1, 'ang@ang');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(255) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`) VALUES
(1, 'course1', ''),
(2, 'course2', ''),
(3, 'Finalcheck', 'Nothing much');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `que_id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `test_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `test_id`) VALUES
(1, 'What does PHP stand for?', 'Preprocessed Hypertext Page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'Hypertext Preprocessor', 1),
(2, 'What will be the value of $var? ', '0', '1', '2', 'NULL', '0', 1),
(3, ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', 'header', 'headers_list', 'header_sent', 'header_send', 'headers_list', 1),
(4, 'Which of the following is the Server Side Scripting Language?', 'HTML', 'CSS', 'JS', 'PHP', 'PHP', 1),
(5, 'What is your name?', 'dan', 'shesh', 'amir', 'murnal', 'dan', 1),
(6, 'What is the best helmet brand?', 'aqua', 'red', 'mountain', 'glips', 'mountain', 2),
(7, 'What\'s your fav fruit?', 'apple', 'cherry', 'orange', 'banana', 'cherry', 2);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(255) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `course_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `course_id`) VALUES
(1, 'Coding Language', 1),
(2, 'Something else', 2),
(3, 'coding challenge', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `password`) VALUES
('angie', 'ang', 'ang@ang', 'angang'),
('dan', 'dan', 'dan@dan', 'dan'),
('Shesh', 'Sonar', 's@s.s', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE `useranswer` (
  `ans_id` int(255) NOT NULL,
  `userans` varchar(255) NOT NULL,
  `que_id` int(255) DEFAULT NULL,
  `email_FK` varchar(100) DEFAULT NULL,
  `test_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`ans_id`, `userans`, `que_id`, `email_FK`, `test_id`) VALUES
(996, 'Hypertext Transfer Protocol', 1, 'dan@dan', 1),
(997, '0', 2, 'dan@dan', 1),
(998, 'headers_list', 3, 'dan@dan', 1),
(999, 'PHP', 4, 'dan@dan', 1),
(1000, 'dan', 5, 'dan@dan', 1),
(1001, 'red', 1, 'ang@ang', 2),
(1002, 'cherry', 2, 'ang@ang', 2),
(1003, 'Hypertext Preprocessor', 1, 'ang@ang', 1),
(1004, '1', 2, 'ang@ang', 1),
(1005, 'headers_list', 3, 'ang@ang', 1),
(1006, 'PHP', 4, 'ang@ang', 1),
(1007, 'dan', 5, 'ang@ang', 1),
(1008, 'Hypertext Preprocessor', 1, 'ang@ang', 1),
(1009, '1', 2, 'ang@ang', 1),
(1010, 'headers_list', 3, 'ang@ang', 1),
(1011, 'PHP', 4, 'ang@ang', 1),
(1012, 'dan', 5, 'ang@ang', 1),
(1013, 'Hypertext Preprocessor', 1, 'ang@ang', 1),
(1014, '1', 2, 'ang@ang', 1),
(1015, 'headers_list', 3, 'ang@ang', 1),
(1016, 'PHP', 4, 'ang@ang', 1),
(1017, 'dan', 5, 'ang@ang', 1),
(1018, 'Hypertext Preprocessor', 1, 'ang@ang', 1),
(1019, '1', 2, 'ang@ang', 1),
(1020, 'headers_list', 3, 'ang@ang', 1),
(1021, 'PHP', 4, 'ang@ang', 1),
(1022, 'dan', 5, 'ang@ang', 1),
(1023, 'Hypertext Preprocessor', 1, 'ang@ang', 1),
(1024, '1', 2, 'ang@ang', 1),
(1025, 'headers_list', 3, 'ang@ang', 1),
(1026, 'PHP', 4, 'ang@ang', 1),
(1027, 'dan', 5, 'ang@ang', 1),
(1028, 'Hypertext Preprocessor', 1, 'ang@ang', 1),
(1029, '1', 2, 'ang@ang', 1),
(1030, 'headers_list', 3, 'ang@ang', 1),
(1031, 'PHP', 4, 'ang@ang', 1),
(1032, 'dan', 5, 'ang@ang', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempt`
--
ALTER TABLE `attempt`
  ADD PRIMARY KEY (`att_id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `email_FK` (`email_FK`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `useranswer`
--
ALTER TABLE `useranswer`
  ADD PRIMARY KEY (`ans_id`),
  ADD KEY `que_id` (`que_id`),
  ADD KEY `email_FK` (`email_FK`) USING BTREE,
  ADD KEY `test_id` (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt`
--
ALTER TABLE `attempt`
  MODIFY `att_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `que_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useranswer`
--
ALTER TABLE `useranswer`
  MODIFY `ans_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1033;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attempt`
--
ALTER TABLE `attempt`
  ADD CONSTRAINT `attempt_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`),
  ADD CONSTRAINT `attempt_ibfk_2` FOREIGN KEY (`email_FK`) REFERENCES `user` (`email`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `useranswer`
--
ALTER TABLE `useranswer`
  ADD CONSTRAINT `useranswer_ibfk_1` FOREIGN KEY (`que_id`) REFERENCES `question` (`que_id`),
  ADD CONSTRAINT `useranswer_ibfk_2` FOREIGN KEY (`email_FK`) REFERENCES `user` (`email`),
  ADD CONSTRAINT `useranswer_ibfk_3` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`);
COMMIT;



--
-- Adding an attribute to Course table
--
ALTER TABLE `courses`
ADD `course_video` varchar(255);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
