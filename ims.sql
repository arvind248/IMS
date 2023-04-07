-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 09:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `name` varchar(50) NOT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `fees` varchar(50) DEFAULT NULL,
  `eligibility` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`name`, `duration`, `fees`, `eligibility`, `category`) VALUES
('', '', '', '', ''),
('Computer Science', '8 months', '1990', '12th pass', 'Diploma'),
('Math', '10 months', '10000', '10th pass', 'fullTime');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `fathername` varchar(30) DEFAULT NULL,
  `mobileno` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `qualification1` varchar(30) DEFAULT NULL,
  `college1` varchar(30) DEFAULT NULL,
  `passingyear1` varchar(30) DEFAULT NULL,
  `marks1` int(11) DEFAULT NULL,
  `qualification2` varchar(30) DEFAULT NULL,
  `college2` varchar(30) DEFAULT NULL,
  `passingyear2` varchar(30) DEFAULT NULL,
  `marks2` int(11) DEFAULT NULL,
  `qualification3` varchar(30) DEFAULT NULL,
  `college3` varchar(30) DEFAULT NULL,
  `passingyear3` varchar(30) DEFAULT NULL,
  `marks3` int(11) DEFAULT NULL,
  `qualification4` varchar(30) DEFAULT NULL,
  `college4` varchar(30) DEFAULT NULL,
  `passingyear4` varchar(30) DEFAULT NULL,
  `marks4` int(11) DEFAULT NULL,
  `experience1` varchar(30) DEFAULT NULL,
  `teachingplace1` varchar(30) DEFAULT NULL,
  `experience2` varchar(30) DEFAULT NULL,
  `teachingplace2` varchar(30) DEFAULT NULL,
  `experience3` varchar(30) DEFAULT NULL,
  `teachingplace3` varchar(30) DEFAULT NULL,
  `experience4` varchar(30) DEFAULT NULL,
  `teachingplace4` varchar(30) DEFAULT NULL,
  `holdername` varchar(30) DEFAULT NULL,
  `accountno` varchar(30) DEFAULT NULL,
  `ifsc` varchar(30) DEFAULT NULL,
  `pan` varchar(30) DEFAULT NULL,
  `basicpay` int(11) DEFAULT NULL,
  `workinghrs` varchar(10) DEFAULT NULL,
  `doj` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `name`, `dob`, `gender`, `address`, `state`, `city`, `pin`, `fathername`, `mobileno`, `email`, `nationality`, `qualification1`, `college1`, `passingyear1`, `marks1`, `qualification2`, `college2`, `passingyear2`, `marks2`, `qualification3`, `college3`, `passingyear3`, `marks3`, `qualification4`, `college4`, `passingyear4`, `marks4`, `experience1`, `teachingplace1`, `experience2`, `teachingplace2`, `experience3`, `teachingplace3`, `experience4`, `teachingplace4`, `holdername`, `accountno`, `ifsc`, `pan`, `basicpay`, `workinghrs`, `doj`) VALUES
(0, '', '0000-00-00', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00'),
(1, 'Ram', '2023-04-12', 'Male', 'Sangam', 'Kerala', 'Kottayam', 110040, 'Hariom', '9933833888', 'Arvnd@gmi.com', 'India', '2', 'Arvind', '2001', 90, '15', 'delhi', '2003', 80, '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `rollno` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `schoolorship` int(11) DEFAULT NULL,
  `admsnfees` int(11) DEFAULT NULL,
  `remaining` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `tenure` int(11) DEFAULT NULL,
  `emi` int(11) DEFAULT NULL,
  `firstemi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pin` varchar(30) DEFAULT NULL,
  `fathername` varchar(30) DEFAULT NULL,
  `mothername` varchar(30) DEFAULT NULL,
  `mobileno` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL,
  `passingyear` varchar(30) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `dob`, `gender`, `course`, `address`, `state`, `city`, `pin`, `fathername`, `mothername`, `mobileno`, `email`, `qualification`, `passingyear`, `nationality`) VALUES
(0, 'Hariom', '2023-04-04', 'Male', '', 'sangam', 'Delhi', 'Delhi', '110060', 'Helo', 'Hi', '998847747', 'Arvind@gmail.com', 'graduate', '2010', 'Indian'),
(1, 'arivnd singh', '1997-10-04', 'Male', '', 'sangam vihar', 'Delhi', 'Delhi', '110060', 'Babu', 'Sarvesh', '9667552372', 'arvnd@gmail.com', 'undergraduate', '2011', 'India'),
(2, 'Deepak', '2023-03-27', 'female', '', 'Sangam', 'Dadra and Nagar Haveli', 'Silvassa', '1102393', 'Lakhan', 'Laxmi', '998827736', 'Lakha@gmail.com', 'undergraduate', '2011', 'Indian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
