-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 08:39 AM
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
(1, 'Example 1', 'gfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgc'),
(2, 'Example 2', 'gfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgcgfdfgdfgcgfcgfcgfcfgc');

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
(1, 'What does PHP stand for?', 'Preprocessed Hypertext Page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'Hypertext Preprocessor', NULL),
(2, 'What will be the value of $var? ', '0', '1', '2', 'NULL', '0', NULL),
(3, ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', 'header', 'headers_list', 'header_sent', 'header_send', 'headers_list', NULL),
(4, 'Which of the following is the Server Side Scripting Language?', 'HTML', 'CSS', 'JS', 'PHP', 'PHP', NULL),
(5, 'From which website you download this source code?', 'Softglobe.net', 'w3school.com', 'technopoints.co.in', 'php.net', 'technopoints.co.in', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(255) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `course_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `password`) VALUES
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
-- Indexes for dumped tables
--

--
-- Indexes for table `attempt`
--
ALTER TABLE `attempt`
  ADD PRIMARY KEY (`att_id`),
  ADD KEY `test_id` (`test_id`);

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
  MODIFY `att_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `que_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useranswer`
--
ALTER TABLE `useranswer`
  MODIFY `ans_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=497;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attempt`
--
ALTER TABLE `attempt`
  ADD CONSTRAINT `attempt_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`);

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
  ADD CONSTRAINT `useranswer_ibfk_1` FOREIGN KEY (`que_id`) REFERENCES `question` (`que_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
