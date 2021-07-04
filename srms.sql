-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2021 at 08:09 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

DROP TABLE IF EXISTS `tblclasses`;
CREATE TABLE IF NOT EXISTS `tblclasses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(1, 'First', 1, 'C', '2017-06-06 16:52:33', '2017-06-07 05:53:47'),
(2, 'Second', 2, 'A', '2017-06-06 17:21:20', '2017-06-06 17:21:38'),
(4, 'Fourth', 4, 'C', '2017-06-07 09:20:23', '0000-00-00 00:00:00'),
(5, 'Sixth', 6, 'A', '2017-06-07 09:35:08', '0000-00-00 00:00:00'),
(6, 'Sixth', 6, 'B', '2017-08-28 18:42:41', '2017-08-28 18:43:02'),
(7, 'Seventh', 7, 'B', '2017-08-28 18:52:00', '2017-08-28 18:52:15'),
(8, 'Eight', 8, 'A', '2017-08-28 19:21:05', '2017-08-28 19:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblcode`
--

DROP TABLE IF EXISTS `tblcode`;
CREATE TABLE IF NOT EXISTS `tblcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `credit_base` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcode`
--

INSERT INTO `tblcode` (`id`, `name`, `code`, `credit_base`) VALUES
(7, 'Animal Science ', 'ANS 123', 3),
(6, 'information Technology', 'CST132', 1),
(8, 'Mineral Resources', 'MRT123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbllectures`
--

DROP TABLE IF EXISTS `tbllectures`;
CREATE TABLE IF NOT EXISTS `tbllectures` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `lecture_Id` varchar(50) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `roll_id` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllectures`
--

INSERT INTO `tbllectures` (`Id`, `lecture_Id`, `first_name`, `last_name`, `roll_id`, `email`, `password`, `subject`, `faculty`, `department`, `dob`, `reg_date`, `updation_date`) VALUES
(38, 'L001', 'Amanda', 'Gamage', '3', 'ga@gmail.com', '1234', '6', 'Faculty of Applied Sciences', 'Department of Computer Science and Informatic', '2021-07-26', '2021-07-04 04:10:00', '2021-07-04 04:10:00'),
(39, 'L031', 'dasith', 'perera', '3', 'perera@gmail.com', 'sssssss', '7', 'Faculty Of Animal Science & Export Agriculture', '', '2021-07-10', '2021-07-04 04:13:41', '2021-07-04 04:13:41'),
(40, 'L031', 'Eranga', 'awitha', '3', 'eranga@gmail.com', '122345', '8', 'Faculty of Applied Sciences', 'Department of Applied Earth Sciences', '2021-07-26', '2021-07-04 04:16:09', '2021-07-04 04:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

DROP TABLE IF EXISTS `tblresult`;
CREATE TABLE IF NOT EXISTS `tblresult` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(2, 1, 1, 2, 100, '2017-08-24 17:54:09', '2017-08-28 18:34:32'),
(3, 1, 1, 1, 80, '2017-08-24 17:54:09', '2017-08-28 18:34:25'),
(4, 1, 1, 5, 78, '2017-08-24 17:54:09', '2017-08-28 18:34:26'),
(5, 1, 1, 4, 60, '2017-08-24 17:54:09', '2017-08-28 18:34:26'),
(6, 2, 4, 2, 90, '2017-08-28 18:38:18', NULL),
(7, 2, 4, 1, 75, '2017-08-28 18:38:18', NULL),
(8, 2, 4, 5, 56, '2017-08-28 18:38:18', '2017-08-28 19:26:42'),
(9, 2, 4, 4, 80, '2017-08-28 18:38:18', '2017-08-28 19:26:42'),
(10, 4, 7, 2, 54, '2017-08-28 18:56:21', '2017-08-28 19:03:10'),
(11, 4, 7, 1, 85, '2017-08-28 18:56:21', NULL),
(12, 4, 7, 5, 55, '2017-08-28 18:56:21', '2017-08-28 19:03:10'),
(13, 4, 7, 7, 65, '2017-08-28 18:56:21', '2017-08-28 19:03:10'),
(14, 5, 8, 2, 75, '2017-08-28 19:25:07', NULL),
(15, 5, 8, 1, 56, '2017-08-28 19:25:07', NULL),
(16, 5, 8, 5, 52, '2017-08-28 19:25:07', NULL),
(17, 5, 8, 4, 80, '2017-08-28 19:25:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

DROP TABLE IF EXISTS `tblstudents`;
CREATE TABLE IF NOT EXISTS `tblstudents` (
  `StudentId` int(11) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  PRIMARY KEY (`StudentId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'kuma', '46456', 'info@phpgurukul.com', 'Female', '1995-03-03', 1, '2017-06-12 10:30:57', '2017-08-26 04:36:37', 1),
(2, 'Anuj kumar', '10861', 'anuj@gmail.co', 'Male', '1995-02-02', 4, '2017-08-19 19:18:28', '2017-08-26 04:59:17', 0),
(3, 'amit kumar', '2626', 'amit@gmail.com', 'Male', '2014-08-06', 6, '2017-08-28 18:45:31', '2017-08-28 18:46:02', 1),
(4, 'rahul kumar', '990', 'rahul01@gmail.com', 'Male', '2001-02-03', 7, '2017-08-28 18:54:58', '2017-08-28 18:55:20', 1),
(5, 'sanjeev singh', '128', 'sanjeev01@gmail.com', 'Male', '2002-02-03', 8, '2017-08-28 19:23:53', '2017-08-28 19:24:15', 1),
(6, 'amal', '004', 'amal@gmail.com', 'Male', '', 1, '2021-07-01 13:56:15', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

DROP TABLE IF EXISTS `tblsubjectcombination`;
CREATE TABLE IF NOT EXISTS `tblsubjectcombination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(3, 2, 5, 0, '2017-06-07 11:16:56', '2021-07-04 03:52:26'),
(4, 1, 2, 1, '2017-06-12 06:46:32', '2017-06-12 06:46:32'),
(5, 1, 4, 1, '2017-06-12 06:46:35', '2017-06-12 06:46:35'),
(6, 1, 5, 1, '2017-06-12 06:46:40', '2017-06-12 06:46:40'),
(8, 4, 4, 1, '2017-08-26 03:21:27', '2017-08-26 03:21:27'),
(10, 4, 1, 1, '2017-08-26 03:22:05', '2017-08-26 03:22:05'),
(12, 4, 2, 1, '2017-08-26 03:22:15', '2017-08-26 03:22:15'),
(13, 4, 5, 1, '2017-08-26 03:22:20', '2017-08-26 03:22:20'),
(14, 6, 1, 1, '2017-08-28 18:44:06', '2017-08-28 18:44:06'),
(15, 6, 2, 1, '2017-08-28 18:44:12', '2017-08-28 18:44:12'),
(16, 6, 4, 1, '2017-08-28 18:44:18', '2017-08-28 18:44:18'),
(17, 6, 6, 1, '2017-08-28 18:44:23', '2017-08-28 18:44:23'),
(18, 7, 1, 1, '2017-08-28 18:53:12', '2017-08-28 18:53:12'),
(19, 7, 7, 1, '2017-08-28 18:53:19', '2017-08-28 18:53:19'),
(20, 7, 2, 1, '2017-08-28 18:53:38', '2017-08-28 18:53:38'),
(21, 7, 6, 1, '2017-08-28 18:53:44', '2017-08-28 18:53:44'),
(22, 7, 5, 0, '2017-08-28 18:53:50', '2017-08-28 18:53:50'),
(23, 8, 1, 1, '2017-08-28 19:22:25', '2017-08-28 19:22:25'),
(24, 8, 2, 1, '2017-08-28 19:22:31', '2017-08-28 19:22:31'),
(25, 8, 4, 1, '2017-08-28 19:22:36', '2017-08-28 19:22:36'),
(26, 8, 6, 1, '2017-08-28 19:22:42', '2017-08-28 19:22:42'),
(27, 8, 5, 0, '2017-08-28 19:22:47', '2017-08-28 19:22:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
