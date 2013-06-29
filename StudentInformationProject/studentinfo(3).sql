-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2012 at 10:37 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `adminid` bigint(4) NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL,
  `adminname` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `contactno` varchar(25) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminid`, `password`, `adminname`, `address`, `contactno`) VALUES
(123, '83ec45960b80c035a0068df1d9df5aa8', 'ADMIN', '123 password technology', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attid` bigint(4) NOT NULL AUTO_INCREMENT,
  `studid` varchar(20) NOT NULL,
  `subid` bigint(4) NOT NULL,
  `totalclasses` int(2) NOT NULL,
  `attendedclasses` int(2) NOT NULL,
  `percentage` double(4,2) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`attid`),
  KEY `studid` (`studid`),
  KEY `subid` (`subid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attid`, `studid`, `subid`, `totalclasses`, `attendedclasses`, `percentage`, `comment`) VALUES
(3, 'bsw1', 4, 54, 48, 88.89, 'No Shortage.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactid` bigint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `name`, `emailid`, `contactno`, `subject`, `message`) VALUES
(1, 'ayyappa', 'ayyappa@gmail.com', '9678954625', 'feedback', 'hdvfhjdv'),
(2, 'Harish', 'harish.ps@gmail.com', '9986699450', 'Feedback', 'Thank you for providing us this facility.');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseid` bigint(4) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(40) NOT NULL,
  `comment` text NOT NULL,
  `coursekey` varchar(15) NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `coursename`, `comment`, `coursekey`) VALUES
(1, 'Bachelor of Arts', 'This Course is related to Arts field.', 'BA'),
(2, 'Bachelor of Commerce', 'This course is related to commerce field.', 'BCom'),
(3, 'Bachelor of Bussiness Management', 'This course is related to Bussiness field.', 'BBM'),
(4, 'Bachelor of Science', 'This field is related to science field.', 'BSc'),
(5, 'Bachelor of Computer Application', 'This field is related to computer field.', 'BCA'),
(6, 'Bachelor of Social Work', 'This field is related to social welfare field.', 'BSW');

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE IF NOT EXISTS `examination` (
  `examid` bigint(4) NOT NULL AUTO_INCREMENT,
  `studid` varchar(20) NOT NULL,
  `subid` bigint(4) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `internaltype` varchar(20) NOT NULL,
  `maxmarks` int(2) NOT NULL,
  `scored` int(2) NOT NULL,
  `percentage` float NOT NULL,
  `result` text NOT NULL,
  PRIMARY KEY (`examid`),
  KEY `subid` (`subid`),
  KEY `studid` (`studid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`examid`, `studid`, `subid`, `courseid`, `internaltype`, `maxmarks`, `scored`, `percentage`, `result`) VALUES
(1, 'ba1', 1, 1, '1', 100, 50, 50, 'pass'),
(3, 'bbm1', 3, 3, '2', 100, 75, 75, ''),
(4, 'bbm1', 3, 3, '2', 100, 75, 75, ''),
(5, 'bbm1', 3, 3, '2', 100, 75, 75, ''),
(6, 'bsw1', 4, 6, '1', 100, 30, 30, ''),
(10, 'bsw1', 4, 6, '1', 100, 30, 30, '');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE IF NOT EXISTS `lectures` (
  `lecid` bigint(4) NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `lecname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  PRIMARY KEY (`lecid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`lecid`, `password`, `courseid`, `lecname`, `gender`, `address`, `contactno`) VALUES
(2, 'ed2bc2fb25d7ec77cc075b6e9cb3f7ad', 5, 'geetha', 'Female', 'puttur', '98454555456'),
(3, 'ed2bc2fb25d7ec77cc075b6e9cb3f7ad', 2, 'vinay', 'Female', 'jfbjbj', '985621347');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `semid` bigint(4) NOT NULL AUTO_INCREMENT,
  `semester` varchar(25) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`semid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE IF NOT EXISTS `studentdetails` (
  `studid` varchar(25) NOT NULL,
  `studfname` varchar(20) NOT NULL,
  `studlname` varchar(20) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`studid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`studid`, `studfname`, `studlname`, `fathername`, `gender`, `address`, `contactno`, `courseid`, `semester`, `dob`) VALUES
('ba1', 'rithi', 'salyan', 'harish', 'Female', 'jdkjf', '9658743210', 5, '6', '1995-08-18'),
('bbm1', 'Kavya', 'K', 'kiran', 'Female', 'Mangalore', '9448965237', 3, '1', '1990-03-17'),
('bca1', 'sana', 'h', 'hhdf', 'Female', 'jdjk', '9863147855', 3, '3', '1995-03-09'),
('bsw1', 'Vathsala', 'N', 'Babu Poojary', 'Female', 'Ninthikallu', '9611358796', 6, '1', '1992-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subid` bigint(4) NOT NULL AUTO_INCREMENT,
  `subname` varchar(20) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `lecid` bigint(4) NOT NULL,
  `subtype` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`subid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subname`, `courseid`, `lecid`, `subtype`, `semester`, `comment`) VALUES
(1, 'English', 1, 0, 'Language', '1', 'fhjfbg'),
(3, 'Accounting', 3, 0, 'Theory', '1', 'jsjk'),
(4, 'Field Work', 6, 0, 'Theory', '1', 'This is the practical subject.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`subid`) REFERENCES `subject` (`subid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`studid`) REFERENCES `studentdetails` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `examination`
--
ALTER TABLE `examination`
  ADD CONSTRAINT `examination_ibfk_1` FOREIGN KEY (`studid`) REFERENCES `studentdetails` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `examination_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `examination_ibfk_3` FOREIGN KEY (`subid`) REFERENCES `subject` (`subid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lectures_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD CONSTRAINT `studentdetails_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
