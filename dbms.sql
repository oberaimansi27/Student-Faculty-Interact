-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 07:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ada_answers`
--

CREATE TABLE `ada_answers` (
  `Qno` int(11) NOT NULL,
  `answer` text NOT NULL,
  `Asch_no` int(10) DEFAULT NULL,
  `Afac_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ada_answers`
--

INSERT INTO `ada_answers` (`Qno`, `answer`, `Asch_no`, `Afac_id`) VALUES
(1, 'n*log n', 161112105, NULL),
(2, 'max:n^2, min: n*log n', 161112105, NULL),
(1, 'Irrespective of the case, time complexity remains n*log n.', NULL, 'NK');

-- --------------------------------------------------------

--
-- Table structure for table `ada_questions`
--

CREATE TABLE `ada_questions` (
  `question` varchar(1000) NOT NULL,
  `Qsch_no` int(10) DEFAULT NULL,
  `Qfac_id` varchar(10) DEFAULT NULL,
  `Qno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ada_questions`
--

INSERT INTO `ada_questions` (`question`, `Qsch_no`, `Qfac_id`, `Qno`) VALUES
('What is the worst case time complexity of merge sort?', 161112103, NULL, 1),
('How to find the time complexity of 0/1 Knapsack problem?', 161112014, NULL, 2),
('What is the principle of optimality in 0/1 knapsack problem?', 161112029, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('mansij', 'mansi'),
('mansio', 'mansi'),
('yashi', 'yashi');

-- --------------------------------------------------------

--
-- Table structure for table `ca_answers`
--

CREATE TABLE `ca_answers` (
  `Qno` int(11) NOT NULL,
  `answer` text NOT NULL,
  `Asch_no` int(10) DEFAULT NULL,
  `Afac_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ca_answers`
--

INSERT INTO `ca_answers` (`Qno`, `answer`, `Asch_no`, `Afac_id`) VALUES
(1, 'Horizontal expansion is used when address bits of chips are less than that of memory and vertical when input line bits of chips are less than that of memory map.', 161112014, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ca_questions`
--

CREATE TABLE `ca_questions` (
  `question` varchar(1000) NOT NULL,
  `Qsch_no` int(10) DEFAULT NULL,
  `Qfac_id` varchar(10) DEFAULT NULL,
  `Qno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ca_questions`
--

INSERT INTO `ca_questions` (`question`, `Qsch_no`, `Qfac_id`, `Qno`) VALUES
('When to use horizontal expansion and vertical expansion in memory mapping?', 161112103, NULL, 1),
('When the dirty bits are used?', 161112014, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dbms_answers`
--

CREATE TABLE `dbms_answers` (
  `Qno` int(11) NOT NULL,
  `answer` text NOT NULL,
  `Asch_no` int(10) DEFAULT NULL,
  `Afac_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbms_answers`
--

INSERT INTO `dbms_answers` (`Qno`, `answer`, `Asch_no`, `Afac_id`) VALUES
(3, 'ALTER TABLE <table_name>  ADD <column_name> INT NOT NULL AUTO_INCREMENT PRIMARY KEY;', 161112105, NULL),
(1, 'Refer To Classnotes or Navathe.', NULL, 'SWJ'),
(4, 'All the FDs must be fully functional and non transitive.', NULL, 'SWJ');

-- --------------------------------------------------------

--
-- Table structure for table `dbms_questions`
--

CREATE TABLE `dbms_questions` (
  `question` varchar(1000) NOT NULL,
  `Qsch_no` int(10) DEFAULT NULL,
  `Qfac_id` varchar(10) DEFAULT NULL,
  `Qno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbms_questions`
--

INSERT INTO `dbms_questions` (`question`, `Qsch_no`, `Qfac_id`, `Qno`) VALUES
('How to manage relationships between entities while converting ER to relational model?', 161112014, NULL, 1),
('What is the syntax for adding an auto increment column in a table in mysql?', 161112103, NULL, 3),
('What all we have to check in a relation to be in 3NF?', 161112105, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `facultydetails`
--

CREATE TABLE `facultydetails` (
  `Fac_name` varchar(50) NOT NULL,
  `Fac_ID` varchar(10) NOT NULL,
  `Email_ID` text NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `Dept_code` text NOT NULL,
  `Username` text NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultydetails`
--

INSERT INTO `facultydetails` (`Fac_name`, `Fac_ID`, `Email_ID`, `Phone_no`, `Dept_code`, `Username`, `Password`) VALUES
('Akhtar Rasool', 'AR', 'abcd@gmail.com', 1234567890, 'CSE', 'manit', 'cse'),
('Nilay Khare', 'NK', 'abc@gmail.com', 1122334455, 'CSE', 'nilaykhare', 'cse'),
('Shweta Jain', 'SWJ', 'xyz@gmail.com', 1234567891, 'CSE', 'shwetajain', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `msg` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `M_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`msg`, `username`, `M_no`) VALUES
('Extend to all the branches.', 'mansijain', 1),
('Il ike this platform a lot. It helped me solve my doubts.', 'mansijain', 2),
('It is very helpful.', 'mansioberai', 3),
('nice work', 'yashi07', 4),
('Try to add more features.', 'nilaykhare', 5);

-- --------------------------------------------------------

--
-- Table structure for table `open_answers`
--

CREATE TABLE `open_answers` (
  `Qno` int(11) NOT NULL,
  `answer` text NOT NULL,
  `Asch_no` int(10) DEFAULT NULL,
  `Afac_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `open_answers`
--

INSERT INTO `open_answers` (`Qno`, `answer`, `Asch_no`, `Afac_id`) VALUES
(1, 'It is used to convert the given CFL to its corresponding PDA.', 161112105, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `open_questions`
--

CREATE TABLE `open_questions` (
  `question` varchar(1000) NOT NULL,
  `Qsch_no` int(10) DEFAULT NULL,
  `Qfac_id` varchar(10) DEFAULT NULL,
  `Qno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `open_questions`
--

INSERT INTO `open_questions` (`question`, `Qsch_no`, `Qfac_id`, `Qno`) VALUES
('What is the use of GNF ?', 161112103, NULL, 1),
('Why it is necessary to minimize the CFL in specified order i.e. first remove null, then unit and at last useless?', 161112105, NULL, 5),
('What additional power PDA has as compared to FA?', 161112105, NULL, 6),
('why we study toc?', 161112014, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `pqt_answers`
--

CREATE TABLE `pqt_answers` (
  `Qno` int(11) NOT NULL,
  `answer` text NOT NULL,
  `Asch_no` int(10) DEFAULT NULL,
  `Afac_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pqt_answers`
--

INSERT INTO `pqt_answers` (`Qno`, `answer`, `Asch_no`, `Afac_id`) VALUES
(1, 'It contains the values of areas under gaussian curve from -infinity to the given Z-value.', 161112103, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pqt_questions`
--

CREATE TABLE `pqt_questions` (
  `question` varchar(1000) NOT NULL,
  `Qsch_no` int(10) DEFAULT NULL,
  `Qfac_id` varchar(10) DEFAULT NULL,
  `Qno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pqt_questions`
--

INSERT INTO `pqt_questions` (`question`, `Qsch_no`, `Qfac_id`, `Qno`) VALUES
('What is Z-table?', 161112105, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `se_answers`
--

CREATE TABLE `se_answers` (
  `Qno` int(11) NOT NULL,
  `answer` text NOT NULL,
  `Asch_no` int(10) DEFAULT NULL,
  `Afac_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `se_answers`
--

INSERT INTO `se_answers` (`Qno`, `answer`, `Asch_no`, `Afac_id`) VALUES
(1, 'Agile Model', 161112103, NULL),
(1, 'incremental model can also be used.', 161112014, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `se_questions`
--

CREATE TABLE `se_questions` (
  `question` varchar(1000) NOT NULL,
  `Qsch_no` int(10) DEFAULT NULL,
  `Qfac_id` varchar(10) DEFAULT NULL,
  `Qno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `se_questions`
--

INSERT INTO `se_questions` (`question`, `Qsch_no`, `Qfac_id`, `Qno`) VALUES
('Which model is best suited for small scale projects with changing requirements?', 161112105, NULL, 1),
('What are the responsibilities of a Project manager?', 161112014, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `Sch_no` int(10) NOT NULL,
  `Student_name` varchar(45) NOT NULL,
  `Semester` varchar(4) NOT NULL,
  `DOB` date NOT NULL,
  `Address` text NOT NULL,
  `Phone_no` varchar(10) NOT NULL,
  `Email_ID` text NOT NULL,
  `Dept_code` text NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`Sch_no`, `Student_name`, `Semester`, `DOB`, `Address`, `Phone_no`, `Email_ID`, `Dept_code`, `Username`, `Password`) VALUES
(161112014, 'Yashasvini Rathore', 'IV', '1998-03-07', 'H-7, Kalpana Chawla Bhawan, MANIT, Bhopal\r\n462003', '7748010236', 'yashasvini07@gmail.com', 'CSE', 'yashi07', 'dolphin07'),
(161112029, 'Siddhi', 'IV', '1999-05-11', 'Dewas, MP', '1234567891', 'siddhijain@gmail.com', 'CSE', 'siddhi', 'siddhi'),
(161112103, 'Mansi Jain', 'IV', '1999-03-24', 'Manit Bhopal', '8871929177', 'mansijain2404@gmail.com', 'CSE', 'mansijain', 'mansi'),
(161112105, 'Mansi Oberai', 'IV', '1997-10-27', '53/47 D-1 Kishan Garh Idgah, Agra', '9752231539', 'oberaimansi27@gmail.com', 'CSE', 'mansioberai', 'mansi27');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_courses`
--

CREATE TABLE `teacher_courses` (
  `Fac_ID` varchar(10) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_courses`
--

INSERT INTO `teacher_courses` (`Fac_ID`, `course_name`) VALUES
('SWJ', 'dbms'),
('NK', 'ada'),
('AR', 'se');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ada_answers`
--
ALTER TABLE `ada_answers`
  ADD KEY `Asch_no` (`Asch_no`),
  ADD KEY `Afac_id` (`Afac_id`),
  ADD KEY `Qno` (`Qno`);

--
-- Indexes for table `ada_questions`
--
ALTER TABLE `ada_questions`
  ADD PRIMARY KEY (`Qno`),
  ADD KEY `Qsch_no` (`Qsch_no`),
  ADD KEY `Qfac_id` (`Qfac_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ca_answers`
--
ALTER TABLE `ca_answers`
  ADD KEY `Qno` (`Qno`),
  ADD KEY `Asch_no` (`Asch_no`),
  ADD KEY `Afac_id` (`Afac_id`);

--
-- Indexes for table `ca_questions`
--
ALTER TABLE `ca_questions`
  ADD PRIMARY KEY (`Qno`),
  ADD KEY `Qsch_no` (`Qsch_no`),
  ADD KEY `Qfac_id` (`Qfac_id`);

--
-- Indexes for table `dbms_answers`
--
ALTER TABLE `dbms_answers`
  ADD KEY `Asch_no` (`Asch_no`),
  ADD KEY `Afac_id` (`Afac_id`),
  ADD KEY `Qno` (`Qno`);

--
-- Indexes for table `dbms_questions`
--
ALTER TABLE `dbms_questions`
  ADD PRIMARY KEY (`Qno`),
  ADD KEY `Qsch_no` (`Qsch_no`),
  ADD KEY `Qfac_id` (`Qfac_id`);

--
-- Indexes for table `facultydetails`
--
ALTER TABLE `facultydetails`
  ADD PRIMARY KEY (`Fac_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`M_no`),
  ADD UNIQUE KEY `msg` (`msg`);

--
-- Indexes for table `open_answers`
--
ALTER TABLE `open_answers`
  ADD KEY `Asch_no` (`Asch_no`),
  ADD KEY `Afac_id` (`Afac_id`),
  ADD KEY `Qno` (`Qno`);

--
-- Indexes for table `open_questions`
--
ALTER TABLE `open_questions`
  ADD PRIMARY KEY (`Qno`),
  ADD KEY `Qsch_no` (`Qsch_no`),
  ADD KEY `Qfac_id` (`Qfac_id`);

--
-- Indexes for table `pqt_answers`
--
ALTER TABLE `pqt_answers`
  ADD KEY `Qno` (`Qno`),
  ADD KEY `Asch_no` (`Asch_no`),
  ADD KEY `Afac_id` (`Afac_id`);

--
-- Indexes for table `pqt_questions`
--
ALTER TABLE `pqt_questions`
  ADD PRIMARY KEY (`Qno`),
  ADD KEY `Qfac_id` (`Qfac_id`),
  ADD KEY `Qsch_no` (`Qsch_no`);

--
-- Indexes for table `se_answers`
--
ALTER TABLE `se_answers`
  ADD KEY `Qno` (`Qno`),
  ADD KEY `Asch_no` (`Asch_no`),
  ADD KEY `Afac_id` (`Afac_id`);

--
-- Indexes for table `se_questions`
--
ALTER TABLE `se_questions`
  ADD PRIMARY KEY (`Qno`),
  ADD KEY `Qsch_no` (`Qsch_no`),
  ADD KEY `Qfac_id` (`Qfac_id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`Sch_no`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD KEY `Fac_ID` (`Fac_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ada_questions`
--
ALTER TABLE `ada_questions`
  MODIFY `Qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ca_questions`
--
ALTER TABLE `ca_questions`
  MODIFY `Qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dbms_questions`
--
ALTER TABLE `dbms_questions`
  MODIFY `Qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `M_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `open_questions`
--
ALTER TABLE `open_questions`
  MODIFY `Qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pqt_questions`
--
ALTER TABLE `pqt_questions`
  MODIFY `Qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `se_questions`
--
ALTER TABLE `se_questions`
  MODIFY `Qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ada_answers`
--
ALTER TABLE `ada_answers`
  ADD CONSTRAINT `ada_answers_ibfk_1` FOREIGN KEY (`Asch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `ada_answers_ibfk_2` FOREIGN KEY (`Afac_id`) REFERENCES `facultydetails` (`Fac_ID`),
  ADD CONSTRAINT `ada_answers_ibfk_3` FOREIGN KEY (`Qno`) REFERENCES `ada_questions` (`Qno`);

--
-- Constraints for table `ada_questions`
--
ALTER TABLE `ada_questions`
  ADD CONSTRAINT `ada_questions_ibfk_1` FOREIGN KEY (`Qsch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `ada_questions_ibfk_2` FOREIGN KEY (`Qfac_id`) REFERENCES `facultydetails` (`Fac_ID`);

--
-- Constraints for table `ca_answers`
--
ALTER TABLE `ca_answers`
  ADD CONSTRAINT `ca_answers_ibfk_1` FOREIGN KEY (`Qno`) REFERENCES `ca_questions` (`Qno`),
  ADD CONSTRAINT `ca_answers_ibfk_2` FOREIGN KEY (`Asch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `ca_answers_ibfk_3` FOREIGN KEY (`Afac_id`) REFERENCES `facultydetails` (`Fac_ID`);

--
-- Constraints for table `ca_questions`
--
ALTER TABLE `ca_questions`
  ADD CONSTRAINT `ca_questions_ibfk_1` FOREIGN KEY (`Qsch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `ca_questions_ibfk_2` FOREIGN KEY (`Qfac_id`) REFERENCES `facultydetails` (`Fac_ID`);

--
-- Constraints for table `dbms_answers`
--
ALTER TABLE `dbms_answers`
  ADD CONSTRAINT `dbms_answers_ibfk_1` FOREIGN KEY (`Asch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `dbms_answers_ibfk_2` FOREIGN KEY (`Afac_id`) REFERENCES `facultydetails` (`Fac_ID`),
  ADD CONSTRAINT `dbms_answers_ibfk_3` FOREIGN KEY (`Qno`) REFERENCES `dbms_questions` (`Qno`);

--
-- Constraints for table `dbms_questions`
--
ALTER TABLE `dbms_questions`
  ADD CONSTRAINT `dbms_questions_ibfk_1` FOREIGN KEY (`Qsch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `dbms_questions_ibfk_2` FOREIGN KEY (`Qfac_id`) REFERENCES `facultydetails` (`Fac_ID`);

--
-- Constraints for table `open_answers`
--
ALTER TABLE `open_answers`
  ADD CONSTRAINT `open_answers_ibfk_1` FOREIGN KEY (`Asch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `open_answers_ibfk_2` FOREIGN KEY (`Afac_id`) REFERENCES `facultydetails` (`Fac_ID`),
  ADD CONSTRAINT `open_answers_ibfk_3` FOREIGN KEY (`Qno`) REFERENCES `open_questions` (`Qno`);

--
-- Constraints for table `pqt_answers`
--
ALTER TABLE `pqt_answers`
  ADD CONSTRAINT `pqt_answers_ibfk_1` FOREIGN KEY (`Qno`) REFERENCES `pqt_questions` (`Qno`),
  ADD CONSTRAINT `pqt_answers_ibfk_2` FOREIGN KEY (`Asch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `pqt_answers_ibfk_3` FOREIGN KEY (`Afac_id`) REFERENCES `facultydetails` (`Fac_ID`);

--
-- Constraints for table `pqt_questions`
--
ALTER TABLE `pqt_questions`
  ADD CONSTRAINT `pqt_questions_ibfk_1` FOREIGN KEY (`Qfac_id`) REFERENCES `facultydetails` (`Fac_ID`),
  ADD CONSTRAINT `pqt_questions_ibfk_2` FOREIGN KEY (`Qsch_no`) REFERENCES `studentdetails` (`Sch_no`);

--
-- Constraints for table `se_answers`
--
ALTER TABLE `se_answers`
  ADD CONSTRAINT `se_answers_ibfk_1` FOREIGN KEY (`Qno`) REFERENCES `se_questions` (`Qno`),
  ADD CONSTRAINT `se_answers_ibfk_2` FOREIGN KEY (`Asch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `se_answers_ibfk_3` FOREIGN KEY (`Afac_id`) REFERENCES `facultydetails` (`Fac_ID`);

--
-- Constraints for table `se_questions`
--
ALTER TABLE `se_questions`
  ADD CONSTRAINT `se_questions_ibfk_1` FOREIGN KEY (`Qsch_no`) REFERENCES `studentdetails` (`Sch_no`),
  ADD CONSTRAINT `se_questions_ibfk_2` FOREIGN KEY (`Qfac_id`) REFERENCES `facultydetails` (`Fac_ID`);

--
-- Constraints for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD CONSTRAINT `teacher_courses_ibfk_1` FOREIGN KEY (`Fac_ID`) REFERENCES `facultydetails` (`Fac_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
