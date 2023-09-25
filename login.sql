-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 08:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `achieved`
--

CREATE TABLE `achieved` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achieved`
--

INSERT INTO `achieved` (`id`, `title`, `details`) VALUES
(1, 'Redington Skill Development Training', 'Our College students from various departments have completed skill development training provided by Redington Foundation'),
(2, 'Redington Quiz Competition', 'Our College students from various departments have participated in the Quiz competition conducted among various colleges by Redington Foundation and won the First Prize.');

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `management_type` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `name`, `education`, `management_type`, `position`) VALUES
(1, 'Thiru.S.Annamalai', 'B.Tech.,', 'COLLEGE MANAGEMENT COMMITTEE', 'Chairman'),
(2, 'Thiru.K.P.K.Sivaram', 'B.E., M.B.A.', 'COLLEGE MANAGEMENT COMMITTEE', 'Vice-Chairman Secretary'),
(3, 'Thiru.J.Ashok', 'B.A.', 'COLLEGE MANAGEMENT COMMITTEE', 'Correspondent'),
(4, 'Thiru.K. Chokkalingam', 'B.Sc., M.B.A.', 'COLLEGE MANAGEMENT COMMITTEE', 'Assistant Secretary'),
(5, 'Thiru R.Sivakumar', 'B.A ., R.B.V.PGDIMC', 'COLLEGE MANAGEMENT COMMITTEE', 'Director'),
(6, 'Thiru.J. Suriya Prakash', 'M.C.A.', 'COLLEGE MANAGEMENT COMMITTEE', 'Member'),
(7, 'Thiru.G.Arunkumar', 'B.E.,', 'COLLEGE MANAGEMENT COMMITTEE', 'Member'),
(8, 'Dr. R. Raja Rajeswari', 'M.Sc ., M.Phil., Ph.D.', 'COLLEGE COUNCIL', 'President'),
(9, 'Dr. R. Poongkuzhali', 'M.A., M.Phil., Ph.D.,', 'COLLEGE COUNCIL', 'Secretary'),
(10, 'Ms. C. Ramalakshmi', 'M.Sc., M.Phil.,PBDCSA', 'COLLEGE COUNCIL', 'Member'),
(11, 'Ms. K. Sudharani', 'M.Sc., M.Phil.,', 'COLLEGE COUNCIL', 'Member'),
(12, 'Dr. P. KarthigaiSelvi', 'M.A., M.Phil., Ph.D.', 'COLLEGE COUNCIL', 'Member'),
(13, 'Ms. K. Somadevi', 'M.Sc ., M.Phil.,', 'COLLEGE COUNCIL', 'Member'),
(14, 'Ms. K. Mahalakshmi', 'M.C.A.,  M.Phil.,', 'COLLEGE COUNCIL', 'Member'),
(15, 'Dr. S. Nithya', 'M.Com., M.Phil., Ph.D.', 'COLLEGE COUNCIL', 'Member'),
(16, 'Dr. N. Gomathi', 'M.Com., M.Phil., Ph.D.', 'COLLEGE COUNCIL', 'Member'),
(17, 'Ms. J. Kavitha', 'M.A., M.Phil., B.Ed.,', 'COLLEGE COUNCIL', 'Member'),
(18, 'Ms. K. Sivagami', 'B.Sc., M.Li.Sc..', 'COLLEGE COUNCIL', 'Member'),
(19, 'Dr. R. Raja Rajeswari', 'M.Sc., M.Phil., Ph.D.', 'COLLEGE COUNCIL', 'Principal');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `username`, `password`) VALUES
(1, 'Shivani', 'admin123@msnpioneercollege.edu.in', 'admin@pioneer');

-- --------------------------------------------------------

--
-- Table structure for table `aluminae`
--

CREATE TABLE `aluminae` (
  `id` int(11) NOT NULL,
  `aluminae_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph_no` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood_grp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aluminae`
--

INSERT INTO `aluminae` (`id`, `aluminae_name`, `email`, `ph_no`, `address`, `blood_grp`) VALUES
(1, 'K Shivanya', 'csaluminae012020@msnpioneercollege.edu.in', 1234567891, '711,vemapthur', 'O+'),
(2, 'R Shivani', 'csaluminae022020@msnpioneercollege.edu.in', 1344568791, '712,vemapthur', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `aluminae_login`
--

CREATE TABLE `aluminae_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aluminae_login`
--

INSERT INTO `aluminae_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'K Shivanya', 'csaluminae012020@msnpioneercollege.edu.in', 'aluminae@pioneer'),
(2, 'R Shivani', 'csaluminae022020@msnpioneercollege.edu.in', 'aluminae@pioneer');

-- --------------------------------------------------------

--
-- Table structure for table `aluminae_msg`
--

CREATE TABLE `aluminae_msg` (
  `id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `logs` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aluminae_msg`
--

INSERT INTO `aluminae_msg` (`id`, `a_id`, `msg`, `logs`) VALUES
(1, 1, 'In our Techmate company, an open Industrial Visit is planned for students of all colleges. Please let me know if our college students are interested in this IV.\r\nFor more information, Contact me @ 1234567995', '2023-03-22 12:16:13'),
(2, 2, 'In our techmax company, an open Industrial Visit is planned for students of all colleges. Please let me know if our college students are interested in this IV. For more information, Contact me @ 1234377995', '2023-03-31 14:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_master`
--

CREATE TABLE `calendar_event_master` (
  `event_id` int(100) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar_event_master`
--

INSERT INTO `calendar_event_master` (`event_id`, `event_name`, `event_start_date`, `event_end_date`) VALUES
(1, 'III rd Internal Exams', '2023-04-11', '2023-04-28'),
(2, 'Farewell Day', '2023-05-02', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `graduate_type` varchar(50) NOT NULL,
  `c_type` varchar(100) NOT NULL,
  `c_years` varchar(50) NOT NULL,
  `tuition_fees` varchar(50) NOT NULL,
  `special_fees` varchar(50) NOT NULL,
  `lab_fees` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `c_name`, `graduate_type`, `c_type`, `c_years`, `tuition_fees`, `special_fees`, `lab_fees`) VALUES
(1, 'B.A ., (Tamil)', 'UG', 'cos', '3', '675', '4500', '1075'),
(2, 'B.A ., (English)', 'UG', 'cos', '3', '675', '5500', '1825'),
(3, 'B.Sc ., (Mathematics)', 'UG', 'cos', '3', '1425', '5500', '3425'),
(4, 'B.Sc ., (Physics)', 'UG', 'cos', '3', '1425', '5500', '3425'),
(5, 'B.Sc ., (Computer Science)', 'UG', 'cos', '3', '2375', '6000', '4525'),
(6, 'B.Sc ., (Information Technology) ', 'UG', 'cos', '3', '2375', '6000', '4525'),
(7, 'B.Com ., (Computer Application)', 'UG', 'cos', '3', '2375', '4500', '2725'),
(8, 'B.Com .,', 'UG', 'cos', '3', '1425', '4500', '2225'),
(9, 'M.A ., (Tamil)', 'PG', 'cos', '2', '675', '4000', '1775'),
(10, 'M.A ., (English)', 'PG', 'cos', '2', '1350', '5500', '3850'),
(11, 'M.Sc ., (Mathematics)', 'PG', 'cos', '2', '1425', '5500', '2775'),
(12, 'M.Sc ., (C.Sc & IT)', 'PG', 'cos', '2', '2375', '7500', '6325'),
(13, 'M.Com ., (Computer Application)', 'PG', 'cos', '2', '2375', '5500', '2825'),
(14, 'Nattuppuravial', '', 'add-on', '', '', '', ''),
(15, 'ThiraipadaKalai', '', 'add-on', '', '', '', ''),
(16, 'Presentation Skills', '', 'add-on', '', '', '', ''),
(17, 'Communicative English ', '', 'add-on', '', '', '', ''),
(18, 'Competitive Mathematics', '', 'add-on', '', '', '', ''),
(19, 'Logical Reasoning', '', 'add-on', '', '', '', ''),
(20, 'Flash', '', 'add-on', '', '', '', ''),
(21, 'Interview Based Computer Skills', '', 'add-on', '', '', '', ''),
(22, 'PHP (Hypertext Preprocessor)', '', 'add-on', '', '', '', ''),
(23, 'DTP (Desktop Publishing)', '', 'add-on', '', '', '', ''),
(24, 'VB.Net', '', 'add-on', '', '', '', ''),
(25, 'J2EE', '', 'add-on', '', '', '', ''),
(26, 'Basic Accounting', '', 'add-on', '', '', '', ''),
(27, 'Be a Smart Entrepreneur', '', 'add-on', '', '', '', ''),
(28, 'Advertisement& Media Promotion', '', 'add-on', '', '', '', ''),
(29, 'Life Skill Training', '', 'add-on', '', '', '', ''),
(30, 'Online Certification for UG Final year students', '', 'add-on', '', '', '', ''),
(31, 'Skill development Courses through ICT Academy', '', 'add-on', '', '', '', ''),
(32, 'B.C.A.,', 'UG', 'cos', '3', '2375', '6000', '4525'),
(33, 'M.Phil', 'PG', 'cos', '1', '675', '3900', '');

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `id` int(11) NOT NULL,
  `event` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `logs` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitations`
--

INSERT INTO `invitations` (`id`, `event`, `msg`, `logs`) VALUES
(1, 'College Day of 2023', '26th College Day of our college will be celebrated on 31/03/2023. All of our Alumnae are asked to come to our college on the function day and enjoy the college day vibes. We are looking forward for you to join us on this cheerful. College gate will be open for parents and alumnae after 6:00pm.', '2023-03-23 17:18:32'),
(2, 'Convocation of 2023', 'Convocation for 2019-2022 Batch students will be conducted on 31/03/2023. All of our Alumnae are asked to come to our college on the convocation day and enjoy the outcome of your hardwork. We are looking forward for you to join us on this proud day. College gate will be open for parents and alumnae after 8:00pm. \r\nFunction will be over by 2:00 pm.\r\nLunch will be provided.', '2023-03-23 22:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `course`, `description`, `file`) VALUES
(1, 'CC - PHP', 'PHP CC lab programs list', 'upload/CC.jpg'),
(2, 'Software Engineering', 'System testing write one time', 'upload/Unit 1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `title`, `content`) VALUES
(1, 'Sports Day 2023', 'Sports Day of 2023 will be celebrated on 25th March.'),
(2, 'Lightning Day of 2023', 'Lightning Day of 2023 for the 3rd year students will be celebrated on 28/03/2023. All department students are asked to come to college on function day and light up the college.'),
(3, 'College Day of 2023', 'College Day of 2023 will be celebrated on 31/03/2023. All department students are asked to come to college on function day and light up the college whole day.'),
(5, 'Convocation of 2023', 'Convocation for 2019-2022 Batch students will be conducted on 31/03/2023. All of our Alumnae are asked to come to our college on the convocation day and enjoy the outcome of your hardwork. We are looking forward for you to join us on this proud day. College gate will be open for parents and alumnae after 8:00pm. Function will be over by 2:00 pm. Lunch will be provided.');

-- --------------------------------------------------------

--
-- Table structure for table `placement_notice`
--

CREATE TABLE `placement_notice` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `eligibility` varchar(10000) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placement_notice`
--

INSERT INTO `placement_notice` (`id`, `company_name`, `eligibility`, `link`) VALUES
(1, 'TCS', 'Vaccancy: 20\r\nAny Graduates can apply.\r\nSalary package: 20k per month\r\nDesignation: Web developer', 'http://tcs/jobs.com'),
(5, 'Wipro', 'Vaccancy: 15\r\nIT,CS,BCA Graduates can apply.\r\nSalary package: 25k per month\r\nDesignation: Software Engineering', 'www.applyforwipro.com');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `ph_no` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `department` varchar(50) NOT NULL,
  `blood_grp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `staff_name`, `designation`, `qualification`, `email`, `ph_no`, `address`, `department`, `blood_grp`) VALUES
(1, 'Ms. K. Sudharani', 'Head of the Department', 'M.Sc., M.Phil.,', 'csstaff01@msnpioneercollege.edu.in', '6014526960', '3953  Chenoweth Drive', 'CS', 'A+'),
(2, 'Ms. T. Ramaporkalai', 'Assistant Professor', 'M.C.A., M.Phil.,', 'csstaff02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'CS', 'AB+'),
(3, 'Ms. P. Priya', 'Assistant Professor', 'M.C.A., M.Phil.,', 'csstaff03@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'CS', 'B+'),
(4, 'Ms. B. Gomathi', 'Assistant Professor', 'M.C.A., M.Phil.,', 'csstaff04@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'CS', 'A+'),
(5, 'Ms. P. Geethanjali Natchiyar', 'Assistant Professor', 'M.Sc., M.Phil.,', 'csstaff05@msnpioneercollege.edu.in', '7410000025', '1467  Briarhill Lane', 'CS', 'A-'),
(6, 'Ms. N. Ilakiya', 'Assistant Professor', 'M.Sc., M.Phil.,', 'csstaff06@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'CS', 'AB+'),
(7, 'Ms. R. Sheeba', 'Assistant Professor', 'M.Sc., M.Phil.,', 'csstaff07@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'CS', 'B+'),
(8, 'Ms.  N Shanjika Nandhini', 'Assistant Professor', 'M.Sc., M.Phil.,', 'csstaff08@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'CS', 'A+'),
(9, 'Dr. R. Poongkuzhali', 'Head of the Department', '', 'tamstaff01@msnpioneercollege.edu.in', '6014526960', '3953  Chenoweth Drive', 'Tamil', 'A+'),
(10, 'Dr. P.KarthigaiSelvi', 'Assistant Professor', '', 'tamstaff02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'Tamil', 'AB+'),
(11, 'Dr. S. Kalaivani', 'Assistant Professor', '', 'tamstaff03@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'Tamil', 'B+'),
(12, 'Ms. P. Seethalakshmi', 'Assistant Professor', '', 'tamstaff04@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'Tamil', 'A+'),
(13, 'Dr. M. Manimekala', 'Assistant Professor', '', 'tamstaff05@msnpioneercollege.edu.in', '7410000025', '1467  Briarhill Lane', 'Tamil', 'A-'),
(14, 'Dr. G. Gomathy', 'Assistant Professor', '', 'tamstaff06@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'Tamil', 'AB+'),
(15, 'Ms. M.Anitha', 'Assistant Professor', '', 'tamstaff07@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'Tamil', 'B+'),
(16, 'Dr. P.Thanga Selvi', 'Assistant Professor', '', 'tamstaff08@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'Tamil', 'A+'),
(17, 'Ms. J. Kavitha', 'Head of the Department', '', 'engstaff01@msnpioneercollege.edu.in', '6014526960', '3953  Chenoweth Drive', 'English', 'A+'),
(18, 'Ms. P.K. Ranjani', 'Assistant Professor', '', 'engstaff02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'English', 'AB+'),
(19, 'Ms. R. Soniya Gandhi', 'Assistant Professor', '', 'engstaff03@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'English', 'B+'),
(20, 'Ms. P. Haripriya', 'Assistant Professor', '', 'engstaff04@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'English', 'A+'),
(21, 'Ms. S. Nivedita', 'Assistant Professor', '', 'csstaff05@msnpioneercollege.edu.in', '7410000025', '1467  Briarhill Lane', 'English', 'A-'),
(22, 'Ms. L. Megar Nisha', 'Assistant Professor', '', 'engstaff06@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'English', 'AB+'),
(23, 'Ms. M. Kanniya', 'Assistant Professor', '', 'engstaff07@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'English', 'B+'),
(24, 'Ms. K. Aishwarya', 'Assistant Professor', '', 'engstaff08@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'English', 'A+'),
(25, 'Ms. C. Ramalakshmi', 'Head of the Department', '', 'mathsstaff01@msnpioneercollege.edu.in', '6014526960', '3953  Chenoweth Drive', 'Maths', 'A+'),
(26, 'Ms. K. Elizabeth', 'Assistant Professor', '', 'mathsstaff02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'Maths', 'AB+'),
(27, 'Ms. S. Subha', 'Assistant Professor', '', 'mathsstaff03@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'Maths', 'B+'),
(28, 'Ms. R. Janani', 'Assistant Professor', '', 'mathsstaff04@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'Maths', 'A+'),
(29, 'Ms. N. Manjula', 'Assistant Professor', '', 'mathsstaff05@msnpioneercollege.edu.in', '7410000025', '1467  Briarhill Lane', 'Maths', 'A-'),
(30, 'Ms. M. Manibharathi', 'Assistant Professor', '', 'mathsstaff06@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'Maths', 'AB+'),
(31, 'Ms. P. Rajeswari', 'Assistant Professor', '', 'mathsstaff07@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'Maths', 'B+'),
(32, 'Ms. G. Ramalakshmi', 'Assistant Professor', '', 'mathsstaff08@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'Maths', 'A+'),
(33, 'Ms. K. Sornadevi', 'Head of the Department', '', 'phystaff02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'Physics', 'AB+'),
(34, 'Ms. M. Nithya', 'Assistant Professor', '', 'phystaff03@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'Physics', 'B+'),
(35, 'Ms. M.Gayathri', 'Assistant Professor', '', 'phystaff04@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'Physics', 'A+'),
(36, 'Ms. M. Kaviya', 'Assistant Professor', '', 'phystaff05@msnpioneercollege.edu.in', '7410000025', '1467  Briarhill Lane', 'Physics', 'A-'),
(37, 'Ms. K. Aishwarya', 'Assistant Professor', '', 'phystaff06@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'Physics', 'AB+'),
(38, 'Ms. A. Hemamalini', 'Assistant Professor', '', 'phystaff08@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'Physics', 'A+'),
(39, 'Ms.K.Mahalakshmi', 'Head of the Department', '', 'itstaff02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'IT', 'AB+'),
(40, 'Ms. R. Kalaivani', 'Assistant Professor', '', 'itstaff03@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'IT', 'B+'),
(41, 'Ms.S. Sharmila', 'Assistant Professor', '', 'itstaff04@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'IT', 'A+'),
(42, 'Ms.B. Nageswari', 'Assistant Professor', '', 'itstaff05@msnpioneercollege.edu.in', '7410000025', '1467  Briarhill Lane', 'IT', 'A-'),
(43, 'Ms. M. Saranya', 'Assistant Professor', '', 'itstaff06@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'IT', 'AB+'),
(44, 'Ms.M. Sneha Priya', 'Assistant Professor', '', 'itstaff07@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'IT', 'B+'),
(45, 'Ms.D. Nivetha', 'Assistant Professor', '', 'itstaff08@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'IT', 'A+'),
(46, 'Dr. N. Gomathi', 'Head of the Department', '', 'comstaff02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'B.Com(CA)', 'AB+'),
(47, 'Ms. G. Saranya', 'Assistant Professor', '', 'comstaff03@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'B.Com(CA)', 'B+'),
(48, 'Ms. M.Jemima Suganthi', 'Assistant Professor', '', 'comstaff04@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'B.Com(CA)', 'A+'),
(49, 'Ms. M.Ramalakshmi', 'Assistant Professor', '', 'comstaff05@msnpioneercollege.edu.in', '7410000025', '1467  Briarhill Lane', 'B.Com(CA)', 'A-'),
(50, 'Ms. M. Kanimozhi', 'Assistant Professor', '', 'comstaff06@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'B.Com(CA)', 'AB+'),
(51, 'Ms. M. Jeyabharathi', 'Assistant Professor', '', 'comstaff07@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'B.Com(CA)', 'B+'),
(52, 'Ms. D.Durgadevi', 'Assistant Professor', '', 'comstaff08@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'B.Com(CA)', 'A+'),
(53, 'Dr. S. Nithya', 'Head of the Department', '', 'castaff01@msnpioneercollege.edu.in', '6014526960', '3953  Chenoweth Drive', 'B.Com', 'A+'),
(54, 'Ms.S. Lakshmi', 'Assistant Professor', '', 'castaff02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'B.Com', 'AB+'),
(55, 'Ms. A. Kumudha', 'Assistant Professor', '', 'castaff03@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'B.Com', 'B+'),
(56, 'Ms. A. Rajalakshmi', 'Assistant Professor', '', 'castaff04@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', 'B.Com', 'A+'),
(57, 'Ms. P. Sakthipriyal', 'Assistant Professor', '', 'castaff05@msnpioneercollege.edu.in', '7410000025', '1467  Briarhill Lane', 'B.Com', 'A-'),
(58, 'Ms. M.Priyanka', 'Assistant Professor', '', 'castaff06@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', 'B.Com ', 'AB+'),
(59, 'Dr. V.Nalini', 'Assistant Professor', '', 'castaff07@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', 'B.Com', 'B+'),
(60, 'Ms. K.Sivagami', 'Librarian', 'B.Sc ., M.Li.Sc .,', 'librarystaff01@msnpioneercollege.edu.in', '6014526960', '3953  Chenoweth Drive', '', 'A+'),
(61, 'Ms. G. Rajathi', 'Physical Directress', 'B.A ., B.P.Ed .,', 'ptstaff02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', '', 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'K Sudharani', 'csstaff01@msnpioneercollege.edu.in', 'csstaff@pioneer'),
(2, 'T Ramaporkalai', 'csstaff02@msnpioneercollege.edu.in', 'csstaff@pioneer'),
(3, 'P Priya', 'csstaff03@msnpioneercollege.edu.in', 'csstaff@pioneer'),
(4, 'B Gomathi', 'csstaff04@msnpioneercollege.edu.in', 'csstaff@pioneer');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `ph_no` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `year` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `blood_grp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `s_name`, `roll_no`, `reg_no`, `email`, `ph_no`, `address`, `year`, `department`, `blood_grp`) VALUES
(1, 'A Kalaivani', '20ucs01', '132012801', '20ucs01@msnpioneercollege.edu.in', '6014526960', '3953  Chenoweth Drive', '3', 'CS', 'A+'),
(2, 'V Gayathri', '20ucs02', '132012802', '20ucs02@msnpioneercollege.edu.in', '3578520000', '159  Rose Street', '3', 'CS', 'AB+'),
(3, 'S Sivaranjani', '20ucs03', '132012803', '20ucs03@msnpioneercollege.edu.in', '3547854440', '3572  Gordon Street', '3', 'CS', 'B+'),
(4, 'P Prabhavathi', '20ucs04', '132012804', '20ucs04@msnpioneercollege.edu.in', '7954220000', '1402  Bassel Street', '3', 'CS', 'A+'),
(5, 'M Harsha varthini', '20ucs05', '132012805', '20ucs05@msnpioneercollege.edu.in', '7410000025', '1467  Briarhill Lane', '3', 'CS', 'A-'),
(101, 'M HEMA', '20ucs06', '132012806', 'hemadharshni@gmail.com', '1234509726', '071 vempathur', '3', 'IT', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `stu_login`
--

CREATE TABLE `stu_login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_login`
--

INSERT INTO `stu_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'A Kalaivani', '20ucs01@msnpioneercollege.edu.in', 'csmsn2020'),
(2, 'V Gayathri', '20ucs02@msnpioneercollege.edu.in', 'csmsn2020'),
(3, 'S Sivaranjani', '20ucs03@msnpioneercollege.edu.in', 'csmsn2020'),
(4, 'P Prabhavathi', '20ucs04@msnpioneercollege.edu.in', 'csmsn2020'),
(5, 'M Harsha varthini', '20ucs06@msnpioneercollege.edu.in', 'csmsn2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achieved`
--
ALTER TABLE `achieved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aluminae`
--
ALTER TABLE `aluminae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aluminae_login`
--
ALTER TABLE `aluminae_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aluminae_msg`
--
ALTER TABLE `aluminae_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placement_notice`
--
ALTER TABLE `placement_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_login`
--
ALTER TABLE `stu_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achieved`
--
ALTER TABLE `achieved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aluminae_login`
--
ALTER TABLE `aluminae_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aluminae_msg`
--
ALTER TABLE `aluminae_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `placement_notice`
--
ALTER TABLE `placement_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `stu_login`
--
ALTER TABLE `stu_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
