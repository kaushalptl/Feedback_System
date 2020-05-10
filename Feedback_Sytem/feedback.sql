-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 07:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `fusername` varchar(20) NOT NULL,
  `fpassword` varchar(20) NOT NULL,
  `teaching_skill` int(20) NOT NULL,
  `knowledge` int(10) NOT NULL,
  `communication_skill` int(10) NOT NULL,
  `integrate_with_other_courses` int(5) NOT NULL,
  `intrest_generate_by_teacher` int(5) NOT NULL,
  `other_activity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fname`, `lname`, `fusername`, `fpassword`, `teaching_skill`, `knowledge`, `communication_skill`, `integrate_with_other_courses`, `intrest_generate_by_teacher`, `other_activity`) VALUES
('Shailja', 'Mania', 'smm', 'smm123', 3, 4, 3, 3, 3, 3),
('Siddharth', 'Shah', 'sps', 'sps123', 4, 5, 4, 4, 3, 4),
('Vanraj', 'Dangar', 'vnd', 'vnd123', 4, 3, 4, 3, 3, 4),
('Vivek', 'Patel', 'vsp', 'vsp123', 4, 4, 3, 3, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `teaching_skill` int(5) NOT NULL,
  `knowledge` int(5) NOT NULL,
  `communication_skill` int(5) NOT NULL,
  `integrate_with_other_courses` int(5) NOT NULL,
  `intrest_generate_by_teacher` int(5) NOT NULL,
  `other_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `fname`, `lname`, `teaching_skill`, `knowledge`, `communication_skill`, `integrate_with_other_courses`, `intrest_generate_by_teacher`, `other_activity`) VALUES
('smm123', 'Shailja', 'Maniya', 3, 4, 3, 4, 2, 4),
('sps123', 'Siddharth', 'Shah', 3, 4, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `lname`, `username`, `password`) VALUES
('Dhara', 'Patel', 'dhara', 'ce100'),
('Dhruv', 'Parmar', 'dhruv', 'ce088'),
('Kaushal', 'Patel', 'kaushal', 'ce102'),
('Parth', 'Patel', 'parth', 'ce106');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fusername`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
