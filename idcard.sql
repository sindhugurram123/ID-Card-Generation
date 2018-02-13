-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2018 at 02:07 PM
-- Server version: 5.5.48
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
-- Database: `idcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_master`
--

DROP TABLE IF EXISTS `bus_master`;
CREATE TABLE IF NOT EXISTS `bus_master` (
  `route_no` int(20) NOT NULL,
  `bus_no` int(20) NOT NULL,
  `driver_name` varchar(20) DEFAULT NULL,
  `seats` int(20) DEFAULT NULL,
  `Board_pts` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `bus_name` varchar(50) NOT NULL,
  KEY `route_no` (`route_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_master`
--

INSERT INTO `bus_master` (`route_no`, `bus_no`, `driver_name`, `seats`, `Board_pts`, `mobile`, `bus_name`) VALUES
(1, 1, 'abc', 30, 'LINGAMPALY', '9876543211', ''),
(1, 1, 'abc', 30, 'kukatpally', '9876543211', ''),
(2, 2, 'cde', 30, 'saroornagar', '9796865455', ''),
(2, 2, 'cde', 30, 'saibaba temple', '9876543211', ''),
(4, 3, 'ghi', 30, 'tarnaka', '9876543211', ''),
(4, 3, 'ghi', 30, 'tarnaka', '9876543211', '');

-- --------------------------------------------------------

--
-- Table structure for table `fee_master`
--

DROP TABLE IF EXISTS `fee_master`;
CREATE TABLE IF NOT EXISTS `fee_master` (
  `route_no` int(20) NOT NULL,
  `boadin_point` varchar(20) DEFAULT NULL,
  `total_fees` int(50) NOT NULL,
  `fees_paid` int(50) DEFAULT NULL,
  `due` int(50) DEFAULT NULL,
  `hall_ticket` varchar(20) NOT NULL,
  KEY `route_no` (`route_no`),
  KEY `hall_ticket` (`hall_ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `id_card`
--

DROP TABLE IF EXISTS `id_card`;
CREATE TABLE IF NOT EXISTS `id_card` (
  `card_no` int(20) DEFAULT NULL,
  `status_issus` tinyint(1) DEFAULT NULL,
  `duplicate` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_db`
--

DROP TABLE IF EXISTS `login_db`;
CREATE TABLE IF NOT EXISTS `login_db` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_db`
--

INSERT INTO `login_db` (`username`, `password`, `role`) VALUES
('admin@cvsr.ac.in', '12345', 'admin'),
('user101@cvsr.ac.in', '12345', 'user'),
('user10@cvsr.ac.in', '12345', 'user'),
('user1@cvsr.ac.in', '12345', 'user'),
('user2@cvsr.ac.in', '12345', 'user'),
('user3@cvsr.ac.in', '12345', 'user'),
('user4@cvsr.ac.in', '12345', 'user'),
('user9@cvsr.ac.in', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `route_master`
--

DROP TABLE IF EXISTS `route_master`;
CREATE TABLE IF NOT EXISTS `route_master` (
  `route_no` int(20) NOT NULL,
  `route_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`route_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_master`
--

INSERT INTO `route_master` (`route_no`, `route_name`) VALUES
(1, 'MIYAPUR'),
(2, 'DILSUKNAGAR'),
(3, 'UPPAL'),
(4, 'ECIL');

-- --------------------------------------------------------

--
-- Table structure for table `staff_master`
--

DROP TABLE IF EXISTS `staff_master`;
CREATE TABLE IF NOT EXISTS `staff_master` (
  `staff_name` varchar(20) DEFAULT NULL,
  `staff_ID` varchar(20) DEFAULT NULL,
  `mobile` int(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `boarding_point` int(20) DEFAULT NULL,
  `route_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_master`
--

DROP TABLE IF EXISTS `stud_master`;
CREATE TABLE IF NOT EXISTS `stud_master` (
  `hall_ticket` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `yeart` int(20) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `route_no` int(20) NOT NULL,
  `class` varchar(30) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `Phone_No` int(20) NOT NULL,
  `Board_pts` varchar(50) NOT NULL,
  PRIMARY KEY (`hall_ticket`),
  KEY `route_no` (`route_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_master`
--

INSERT INTO `stud_master` (`hall_ticket`, `name`, `branch`, `yeart`, `section`, `route_no`, `class`, `batch`, `Phone_No`, `Board_pts`) VALUES
('1', '1', '1', 1, '1', 1, '1', '1', 1, ''),
('12333', 'Sindhu Gurram', 'it', 2, 'a', 1, '1', '1', 98765443, ''),
('12345675', 'sadjhk', 'CSE', 1, 'a', 1, 'Btech', '2014-2018', 234567899, 'Uppal'),
('1234567890', 'sq', 'it', 2, 'a', 2, '1', '1', 98765433, ''),
('1246', 'anand', 'it', 1, 'a', 1, 'Btech', '2014-2018', 76787898, ''),
('14h61a1202', 'athira', 'it', 2, 'a', 2, '3', '2014-2015', 98765433, ''),
('14h61a1203', 'athiraji', 'it', 2, 'a', 2, '3', '2014-2015', 98765433, ''),
('14H61A1205', 'pavani', 'eee', 3, 'a', 2, 'btech', '2015-2019', 987656567, ''),
('14h61a1212', 'shinvani', 'it', 2, NULL, 1, '3', '2014-2018', 123456789, ''),
('14h61a1214', 'shusmitha', 'cse', 2, 'a', 2, '1', '1', 98768443, ''),
('14H61A1215', 'sindhu', 'it', 4, NULL, 2, 'btech', '2014-2018', 987654322, ''),
('14H61A1230', 'sandhya', 'cse', 3, 'c', 4, 'btech', '2015-2019', 924784351, ''),
('14H61A1234', 'Geetha', 'mech', 4, 'a', 3, 'btech', '2014-2018', 987654323, ''),
('14H61A1257', 'Thejasri', 'cse', 2, NULL, 4, 'Mtech', '2017-2019', 98985644, ''),
('14h61a1301', 'Sindhug', 'ece', 2, 'a', 1, '1', '1', 987676756, ''),
('15h61a1212', 'likitha', 'cse', 3, 'a', 1, 'btech', '2015-2019', 1234567899, 'kukatpally'),
('56', 'sdf', '1', 1, 'a', 1, 'Btech', '2014-2018', 878787878, ''),
('764', 'sda', 'CSE', 2, 'a', 1, 'Btech', '2014-2018', 234565655, 'Uppal'),
('767', 'anime', 'it', 2, 'a', 2, 'Mtech', '2014-2018', 989765565, ''),
('h201', 'athira', 'IT', 4, 'a', 1, 'Btech', '2014', 98787678, '2'),
('h2011', 'athira', 'IT', NULL, 'a', 1, 'Btech', '2014', 98787678, '2'),
('h202', 'venkat', 'IT', 4, 'a', 2, 'Btech', '2014', 98787678, '2'),
('h2022', 'venkat', 'IT', NULL, 'a', 2, 'Btech', '2014', 98787678, '2'),
('h203', 'vinay', 'IT', 4, 'a', 2, 'Btech', '2014', 98787678, '2'),
('h2033', 'vinay', 'IT', NULL, 'a', 2, 'Btech', '2014', 98787678, '2'),
('h2034', 'qwerty', 'IT', NULL, 'a', 1, 'Btech', '2014', 987676766, '2'),
('h204', 'ajay', 'IT', 4, 'a', 2, 'Btech', '2014', 98787678, '2'),
('h2044', 'ajay', 'IT', NULL, 'a', 2, 'Btech', '2014', 98787678, '2'),
('h205', 'pavani', 'IT', 4, 'a', 2, 'Btech', '2014', 98787678, '2'),
('h2054', 'pavani', 'IT', NULL, 'a', 2, 'Btech', '2014', 98787678, '2'),
('h206', 'shalini', 'IT', 4, 'a', 2, 'Btech', '2014', 98787678, '2'),
('h2067', 'shalini', 'IT', NULL, 'a', 2, 'Btech', '2014', 98787678, '2');

-- --------------------------------------------------------

--
-- Table structure for table `webcam`
--

DROP TABLE IF EXISTS `webcam`;
CREATE TABLE IF NOT EXISTS `webcam` (
  `Id` int(5) NOT NULL,
  `Image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus_master`
--
ALTER TABLE `bus_master`
  ADD CONSTRAINT `bus_master_ibfk_1` FOREIGN KEY (`route_no`) REFERENCES `route_master` (`route_no`);

--
-- Constraints for table `fee_master`
--
ALTER TABLE `fee_master`
  ADD CONSTRAINT `fee_master_ibfk_1` FOREIGN KEY (`route_no`) REFERENCES `route_master` (`route_no`),
  ADD CONSTRAINT `fee_master_ibfk_2` FOREIGN KEY (`hall_ticket`) REFERENCES `stud_master` (`hall_ticket`);

--
-- Constraints for table `stud_master`
--
ALTER TABLE `stud_master`
  ADD CONSTRAINT `stud_master_ibfk_1` FOREIGN KEY (`route_no`) REFERENCES `route_master` (`route_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
