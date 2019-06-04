-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 05:11 AM
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
(1, '0', NULL, NULL),
(2, '0', NULL, NULL),
(3, '', NULL, NULL),
(4, '3', NULL, NULL),
(5, '', NULL, NULL),
(6, '1', NULL, NULL),
(7, '', NULL, NULL),
(8, '1', NULL, NULL),
(9, '', NULL, NULL),
(10, '1', NULL, NULL),
(11, '', NULL, NULL),
(12, '1', NULL, NULL),
(13, '1', NULL, NULL),
(14, '', NULL, NULL),
(15, '', NULL, NULL),
(16, '', NULL, NULL),
(17, '', NULL, NULL),
(18, '', NULL, NULL),
(19, '', NULL, NULL),
(20, '', NULL, NULL),
(21, '', NULL, NULL),
(22, '', NULL, NULL),
(23, '', NULL, NULL),
(24, '2', NULL, NULL),
(25, '', NULL, NULL),
(26, '2', NULL, NULL),
(27, '', NULL, NULL),
(28, '0', NULL, NULL),
(29, '', NULL, NULL),
(30, '3', NULL, NULL),
(31, '', NULL, NULL),
(32, '3', NULL, NULL),
(33, '', NULL, NULL),
(34, '0', NULL, NULL),
(35, '0', NULL, NULL),
(36, '2', NULL, NULL),
(37, '2', NULL, NULL),
(38, '', NULL, NULL),
(39, '1', NULL, NULL),
(40, '2', NULL, NULL),
(41, '2', NULL, NULL),
(42, '', NULL, NULL),
(43, '', NULL, NULL),
(44, '0', NULL, NULL),
(45, '2', NULL, NULL),
(46, '', NULL, NULL),
(47, '0', NULL, NULL),
(48, '0', NULL, NULL),
(49, '1', NULL, NULL),
(50, '1', NULL, NULL),
(51, '3', NULL, NULL),
(52, '', NULL, NULL),
(53, '0', NULL, NULL),
(54, '2', NULL, NULL),
(55, '', NULL, NULL),
(56, '', NULL, NULL),
(57, '', NULL, NULL),
(58, '', NULL, NULL),
(59, '', NULL, NULL),
(60, '1', NULL, NULL),
(61, '', NULL, NULL),
(62, '1', NULL, NULL),
(63, '1', NULL, NULL),
(64, '', NULL, NULL),
(65, '0', NULL, NULL),
(66, '1', NULL, NULL),
(67, '0', NULL, NULL),
(68, '2', NULL, NULL),
(69, '1', NULL, NULL),
(70, '1', NULL, NULL),
(71, '1', NULL, NULL),
(72, '1', NULL, NULL),
(73, '1', NULL, NULL),
(74, '1', NULL, NULL),
(75, '1', NULL, NULL),
(76, '1', NULL, NULL),
(77, '2', NULL, NULL),
(78, '1', NULL, NULL),
(79, '1', NULL, NULL),
(80, '1', NULL, NULL),
(81, '1', NULL, NULL),
(82, '1', NULL, NULL),
(83, '1', NULL, NULL),
(84, '1', NULL, NULL),
(85, '1', NULL, NULL),
(86, '1', NULL, NULL),
(87, '3', NULL, NULL),
(88, '0', NULL, NULL),
(89, '0', NULL, NULL),
(90, '0', NULL, NULL),
(91, '0', NULL, NULL),
(92, '0', NULL, NULL),
(93, '0', NULL, NULL),
(94, '0', NULL, NULL),
(95, '0', NULL, NULL),
(96, '0', NULL, NULL),
(97, '0', NULL, NULL),
(98, '0', NULL, NULL),
(99, '0', NULL, NULL),
(100, '1', NULL, NULL),
(101, '0', NULL, NULL),
(102, '0', NULL, NULL),
(103, '0', NULL, NULL),
(104, '2', NULL, NULL),
(105, '1', NULL, NULL),
(106, '2', NULL, NULL),
(107, '0', NULL, NULL),
(108, '3', NULL, NULL);

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
(1, 'course1', ''),
(2, 'course2', '');

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
(6, 'What is the best helmet brand?', 'aqua', 'red', 'mountain', 'glips', 'mountain', 2);

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
(2, 'Something else', 2);

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
  `email_FK` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`ans_id`, `userans`, `que_id`, `email_FK`) VALUES
(851, 'Preprocessed Hypertext Page', 1, NULL),
(852, 'NULL', 2, NULL),
(853, 'header', 3, NULL),
(854, 'PHP', 4, NULL),
(855, 'murnal', 5, NULL),
(856, 'Hypertext Preprocessor', 1, NULL),
(857, '2', 2, NULL),
(858, 'header', 3, NULL),
(859, 'PHP', 4, NULL),
(860, 'murnal', 5, NULL),
(861, 'Preprocessed Hypertext Page', 1, NULL),
(862, '2', 2, NULL),
(863, 'header', 3, NULL),
(864, 'CSS', 4, NULL),
(865, 'murnal', 5, NULL),
(866, 'Hypertext Markup Language', 1, NULL),
(867, '0', 2, NULL),
(868, 'headers_list', 3, NULL),
(869, 'PHP', 4, NULL),
(870, 'shesh', 5, NULL);

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
  ADD KEY `email_FK` (`email_FK`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt`
--
ALTER TABLE `attempt`
  MODIFY `att_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `que_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useranswer`
--
ALTER TABLE `useranswer`
  MODIFY `ans_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=871;

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
  ADD CONSTRAINT `useranswer_ibfk_2` FOREIGN KEY (`email_FK`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
