-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 03:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE IF NOT EXISTS `stud` (
  `name` varchar(50) NOT NULL,
  `admission` varchar(10) NOT NULL,
  `rollno` bigint(12) NOT NULL,
  `year` int(1) DEFAULT NULL,
  `advisor` varchar(15) NOT NULL,
  `dept` varchar(5) DEFAULT NULL,
  `mark1` int(3) unsigned DEFAULT NULL,
  `mark2` int(3) unsigned DEFAULT NULL,
  `mark3` int(3) unsigned DEFAULT NULL,
  `mark4` int(3) unsigned DEFAULT NULL,
  `mark5` int(3) unsigned DEFAULT NULL,
  `mark6` int(3) unsigned DEFAULT NULL,
  `total` int(3) unsigned DEFAULT NULL,
  `percentage` int(6) unsigned DEFAULT NULL,
  PRIMARY KEY (`rollno`),
  UNIQUE KEY `Regno` (`rollno`),
  UNIQUE KEY `admission` (`admission`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`name`, `admission`, `rollno`, `year`, `advisor`, `dept`, `mark1`, `mark2`, `mark3`, `mark4`, `mark5`, `mark6`, `total`, `percentage`) VALUES
('anand', '14vec689', 113214104017, 3, 'sridevi', 'cse', 90, 90, 90, 90, 90, 90, 540, 90),
('harikshore', '14vec690', 113214104018, 3, 'sangeetha', 'cse', 67, 56, 77, 45, 88, 66, 399, 66),
('vignesh', '14vec691', 113214104019, 3, 'sangeetha', 'mech', 95, 95, 95, 95, 95, 95, 570, 95),
('deepak', '14vec692', 113214104020, 3, 'abin', 'ece', 50, 50, 50, 50, 50, 50, 300, 50),
('jebin', '14vec694', 113214104022, 3, 'abin', 'cse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Aswinos', '14vec688', 113214104016, 3, 'sridevi', 'cse', 99, 99, 65, 77, 99, 99, 538, 90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
