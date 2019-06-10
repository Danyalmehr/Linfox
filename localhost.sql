-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2019 at 02:08 AM
-- Server version: 5.6.40-84.0-log
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictatjcu_quiz`
--
CREATE DATABASE IF NOT EXISTS `ictatjcu_quiz` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ictatjcu_quiz`;

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
(252, '16.666666666667', 1, 's@s.s'),
(253, '40', 2, 'sheshbhushansonar@gmail.com'),
(254, '50', 1, 'sheshbhushansonar@gmail.com'),
(255, '33.333333333333', 1, 'r@r'),
(256, '0.00', 1, 'r@r'),
(257, '20.00', 2, 'r@r'),
(258, '66.67', 1, 'abc@abc'),
(259, '40.00', 3, 'abc@abc'),
(260, '33.33', 1, 'dan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`) VALUES
(1, 'PHP', ''),
(2, 'JavaScript', ''),
(3, 'Safety', '');

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
(5, 'Which of the following function returns the number of characters in a string variable?', 'count($variable)', 'len($variable)', 'strcount($variable)', 'strlen($variable)', 'strlen($variable)', 1),
(6, 'Which of the following variables is not a predefined variable?', '$get', '$ask', '$request', '$post', '$ask', 1),
(7, 'Javascript is _________ language.', 'Scripting', 'Programming', 'None of Above', 'Application', 'Scripting', 2),
(8, 'What is the purpose of \'noscript\' tag in Java Script?', 'Prevents scripts on the page from executing.', 'Enclose text to be displayed by non –JavaScript browsers', 'Suppresses the result to be displayed on the web page.', 'None of the above', 'Enclose text to be displayed by non –JavaScript browsers', 2),
(9, 'Java Script entities start with ___________and end with _____________', 'Semicolon, colon', 'Semicolon, Ampersand', ' Ampersand, colon', 'Ampersand, semicolon.', 'Ampersand, semicolon.', 2),
(10, 'Which of the following is a server-side Java Script object?', 'Function', 'File', 'FileUpload', 'Date', 'File', 2),
(11, 'File is server-side JavaScript object', 'True', 'False', 'Both', 'None of above', 'False', 2),
(12, 'What are the signals that eye strain may be occuring?', 'Headache', 'Blurry vision', 'dry eyes', 'BOth b and C', 'BOth b and C', 3),
(13, 'What can you do to help avoid eye strain?', 'Spend 10-15 minutes every hour away from your computer screen', 'Check the brightness of your screen', 'Adjust the font or enlarge all pdf\'s to see more clearly', 'All of the above', 'All of the above', 3),
(14, 'Does your employer currently offer vision insurance for full time employees?', 'Yes', 'No', '\r\nI haven\'t read my employee handbook', 'None of above', 'Yes', 3),
(15, 'Can you rub you rub your eyes when your hands are dirty', 'Yes', 'No', 'Maybe', 'None of above', 'No', 3),
(16, 'What are the signals that eye strain may be occuring and what you should in that case?', 'Wash eye with cold water', 'Wash eye with hot water', 'Both A and B', 'None of above', 'Wash eye with cold water', 3);

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
(1, 'Basic PHP', 1),
(2, 'Front End design and JavaScript', 2),
(3, 'Safety-computers And Your Vision Quiz', 3);

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
('abc', 'abc', 'abc@abc', '12345678'),
('daniel', 'Mehr', 'dan@gmail.com', '12345678'),
('ramin', 'ramin', 'r@r', '12345678'),
('Shesh', 'Sonar', 's@s.s', 'ss'),
('shesh', 'shesh', 'shesh@s.s', '123456'),
('Shesh', 'Sonar', 'sheshbhushansonar@gmail.com', 'Ss9422011303');

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE `useranswer` (
  `ans_id` int(255) NOT NULL,
  `userans` varchar(255) NOT NULL,
  `que_id` int(255) DEFAULT NULL,
  `email_FK` varchar(100) DEFAULT NULL,
  `test_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`ans_id`, `userans`, `que_id`, `email_FK`, `test_id`) VALUES
(1403, 'Preprocessed Hypertext Page', 1, 'dan@gmail.com', 1),
(1404, 'NULL', 2, 'dan@gmail.com', 1),
(1405, 'headers_list', 3, 'dan@gmail.com', 1),
(1406, 'PHP', 4, 'dan@gmail.com', 1),
(1407, 'len($variable)', 5, 'dan@gmail.com', 1),
(1408, '$post', 6, 'dan@gmail.com', 1);

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
  ADD KEY `test_id_FK` (`test_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt`
--
ALTER TABLE `attempt`
  MODIFY `att_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `que_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useranswer`
--
ALTER TABLE `useranswer`
  MODIFY `ans_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1409;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
