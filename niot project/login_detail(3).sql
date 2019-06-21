-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2018 at 12:28 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_apply`
--

DROP TABLE IF EXISTS `leave_apply`;
CREATE TABLE IF NOT EXISTS `leave_apply` (
  `leave_apply_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `total_days` int(11) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `applied_date` date NOT NULL,
  `approved_date` date DEFAULT NULL,
  `approv_id` int(11) NOT NULL,
  PRIMARY KEY (`leave_apply_id`),
  UNIQUE KEY `leave_apply_id` (`leave_apply_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_apply`
--

INSERT INTO `leave_apply` (`leave_apply_id`, `user_id`, `user_name`, `leave_type`, `from_date`, `to_date`, `total_days`, `reason`, `status`, `applied_date`, `approved_date`, `approv_id`) VALUES
(1, 1, '', '1', '2017-12-28', '2017-12-29', 1, 'personal', 'Accepted', '2017-12-28', '2017-12-28', 2),
(2, 1, '', '1', '2017-12-05', '2017-12-27', 22, 'adfaaz', 'Accepted', '2017-12-28', NULL, 2),
(3, 1, 'srinivas', '1', '2017-12-05', '2017-12-20', 22, 'saldkjsa', 'Accepted', '2017-12-28', NULL, 2),
(4, 1, 'KDLK', 'casual leave', '2017-12-04', '2017-12-28', 24, 'KDLK', 'Accepted', '2017-12-28', NULL, 2),
(5, 1, 'SRINIVAS MARRIAGE', 'casual leave', '2017-12-28', '2017-12-29', 1, 'SRINIVAS MARRIAGE', 'Accepted', '2017-12-28', NULL, 2),
(6, 1, '', 'restricted leave', '2017-12-28', '2017-12-30', 2, 'please accept my leave', 'Accepted', '2017-12-28', NULL, 2),
(7, 0, '', 'casual leave', '2017-12-05', '2017-12-28', 13, 'hello', 'Rejected', '2017-12-28', NULL, 2),
(8, 0, '', 'casual leave', '2017-12-05', '2017-12-28', 13, 'hello', 'Accepted', '2017-12-28', '2018-01-01', 2),
(9, 0, '', 'casual leave', '2017-12-05', '2017-12-28', 13, 'hello', 'Accepted', '2017-12-28', '2018-01-01', 2),
(10, 0, '', 'casual leave', '2017-12-05', '2017-12-28', 13, 'hello', 'Accepted', '2017-12-28', '2018-01-19', 2),
(11, 0, '', 'casual leave', '2017-12-05', '2017-12-28', 13, 'hello', 'Rejected', '2017-12-28', NULL, 2),
(12, 0, '', '', '2017-12-13', '2017-12-14', 2, 'personal', 'submitted', '2017-12-28', NULL, 2),
(13, 0, '', 'casual leave', '2017-12-05', '2017-12-12', 7, 'personal', 'submitted', '2017-12-28', NULL, 2),
(14, 4, 'sourav', 'casual leave', '2017-12-05', '2017-12-07', 2, 'test', 'Accepted', '2017-12-28', '2018-01-01', 2),
(15, 4, 'sourav', 'restricted leave', '2017-12-05', '2017-12-06', 1, 'hello', 'Accepted', '2017-12-28', '2018-01-01', 2),
(16, 4, 'sourav', 'restricted leave', '2017-12-05', '2017-12-06', 1, 'hello', 'Rejected', '2017-12-28', NULL, 2),
(17, 4, 'sourav', 'casual leave', '2017-12-05', '2017-12-06', 1, 'hello', 'Rejected', '2017-12-28', NULL, 2),
(18, 2, 'srinivas', 'casual leave', '2018-01-01', '2018-01-01', 1, 'personal', 'Rejected', '2017-12-28', NULL, 2),
(19, 1, 'Admin', 'restricted leave', '2017-12-12', '2017-12-27', 12, 'jaksdhj', 'submitted', '2017-12-28', NULL, 2),
(20, 1, 'Admin', 'earned leave', '2017-12-29', '2017-12-31', 2, 'vacation', 'Accepted', '2017-12-28', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `Emp_name` varchar(100) DEFAULT NULL,
  `designation` varchar(50) NOT NULL,
  `isgrp_head` int(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `user`, `pass`, `Emp_name`, `designation`, `isgrp_head`) VALUES
(1, 'admin', 'pass', 'Admin', '', 0),
(2, 'srinivas', 'bunnyssp98', 'srinivas', 'student', 1),
(3, 'sourav1', 'nandi', NULL, 'student', 0),
(4, 'sourav', 'nandi', 'sourav', 'student', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
