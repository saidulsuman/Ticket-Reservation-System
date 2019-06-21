-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 08:12 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Username`, `Password`) VALUES
(3, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bid` varchar(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `type_ac` char(3) NOT NULL,
  `type_sl` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bid`, `bname`, `type_ac`, `type_sl`) VALUES
('BB001', 'Hanif', 'no', 'yes'),
('BB002', 'Hanif', 'no', 'yes'),
('BB003', 'Hanif', 'no', 'yes'),
('BB004', 'Hanif', 'yes', 'yes'),
('BB005', 'Hanif', 'no', 'yes'),
('BB006', 'Hanif', 'no', 'yes'),
('BB007', 'Hanif', 'yes', 'yes'),
('BB008', 'Hanif', 'no', 'yes'),
('BB009', 'Hanif', 'no', 'yes'),
('BB010', 'Hanif', 'no', 'yes'),
('BB011', 'Hanif', 'no', 'yes'),
('BB012', 'Hanif', 'yes', 'yes'),
('BB013', 'Hanif', 'no', 'yes'),
('BB014', 'Hanif', 'no', 'yes'),
('BB015', 'Hanif', 'yes', 'yes'),
('BB016', 'Hanif', 'no', 'yes'),
('BB017', 'Syamoli', 'no', 'yes'),
('BB018', 'Syamoli', 'no', 'yes'),
('BB019', 'Syamoli', 'no', 'yes'),
('BB020', 'Syamoli', 'yes', 'yes'),
('BB021', 'Syamoli', 'no', 'yes'),
('BB022', 'Syamoli', 'no', 'yes'),
('BB023', 'Syamoli', 'no', 'yes'),
('BB024', 'Syamoli', 'yes', 'yes'),
('BB025', 'Shahfateh ali', 'no', 'yes'),
('BB026', 'Shahfateh ali', 'no', 'yes'),
('BB027', 'Shahfateh ali', 'yes', 'yes'),
('BB028', 'Shahfateh ali', 'no', 'yes'),
('BB029', 'Shahfateh ali', 'no', 'yes'),
('BB030', 'Shahfateh ali', 'no', 'yes'),
('BB031', 'Shahfateh ali', 'yes', 'yes'),
('BB032', 'Shahfateh ali', 'no', 'yes'),
('BB033', 'Green line', 'no', 'yes'),
('BB034', 'Green line', 'yes', 'yes'),
('BB035', 'Green line', 'no', 'yes'),
('BB036', 'Green line', 'yes', 'yes'),
('BB037', 'Green line', 'no', 'yes'),
('BB038', 'Green line', 'yes', 'yes'),
('BB039', 'Green line', 'yes', 'yes'),
('BB040', 'Green line', 'no', 'yes'),
('BB041', 'Green line', 'yes', 'yes'),
('BB042', 'Green line', 'yes', 'yes'),
('BB043', 'Green line', 'no', 'yes'),
('BB044', 'Green line', 'yes', 'yes'),
('BB045', 'Green line', 'no', 'yes'),
('BB046', 'Green line', 'yes', 'yes'),
('BB047', 'Green line', 'yes', 'yes'),
('BB048', 'Ena', 'no', 'yes'),
('BB049', 'Ena', 'yes', 'yes'),
('BB050', 'Ena', 'no', 'yes'),
('BB051', 'Ena', 'yes', 'yes'),
('BB052', 'Ena', 'no', 'yes'),
('BB053', 'Ena', 'yes', 'yes'),
('BB054', 'Ena', 'no', 'yes'),
('BB055', 'Ena', 'yes', 'yes'),
('BB056', 'Ena', 'no', 'yes'),
('BB057', 'Ena', 'yes', 'yes'),
('BB058', 'Ena', 'no', 'yes'),
('BB059', 'Ena', 'yes', 'yes'),
('BB060', 'Ena', 'no', 'yes'),
('BB061', 'Ena', 'yes', 'yes'),
('BB062', 'Ena', 'no', 'yes'),
('BB063', 'Ena', 'yes', 'yes'),
('BB064', 'Ena', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `num` varchar(16) NOT NULL,
  `type` varchar(30) NOT NULL,
  `expdate` date NOT NULL,
  `cvv` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`num`, `type`, `expdate`, `cvv`, `bank`) VALUES
('121212', 'VISA', '2019-01-01', 333, 'SBI');

-- --------------------------------------------------------

--
-- Table structure for table `nb`
--

CREATE TABLE `nb` (
  `member_id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nb`
--

INSERT INTO `nb` (`member_id`, `uname`, `password`, `bank`) VALUES
(2, 'shuvo', '1234', 'DBBL');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `pid` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(102) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `payment` varchar(15) NOT NULL,
  `busCounter` varchar(18) NOT NULL,
  `chekbox` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`pid`, `name`, `email`, `phoneNumber`, `gender`, `payment`, `busCounter`, `chekbox`) VALUES
('1111116', 'Niket', '', '1234567890', '', '', '', ''),
('1111117', 'Niket', 'niketraj45@gmail.com', '8867159511', '', '', '', ''),
('1111118', 'Niket', 'admin@starbus.com', '1234567890', '', '', '', ''),
('1111119', 'Niket', 'niketraj45@gmail.com', '8867159511', '', '', '', ''),
('1111120', 'Niket', 'niketraj45@gmail.com', '8867159511', '', '', '', ''),
('1111121', 'Niket', 'niketraj45@gmail.com', '0886715951', '', '', '', ''),
('1111123', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175145459', '', '', '', ''),
('1111124', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175145459', '', '', '', ''),
('1111125', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175145459', '', '', '', ''),
('1111126', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175145459', '', '', '', ''),
('1111127', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175145459', '', '', '', ''),
('1111128', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175145459', '', '', '', ''),
('1111129', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175145459', '', '', '', ''),
('1111130', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175145459', '', '', '', ''),
('1111131', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '1751454597', '', '', '', ''),
('1111132', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '017665566', '', '', '', ''),
('1111133', 'Md.Arafat ', 'shuvo8226@gmail.com', '0175145459', '', '', '', ''),
('1111134', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175676955', '', '', '', ''),
('1111135', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175676955', '', '', '', ''),
('1111136', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0175676955', '', '', '', ''),
('1111137', 'Md.Arafat Hossain', 'shuvo8226@gmail.com', '0909', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `pnr` int(11) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `pid` varchar(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `DOT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`pnr`, `rid`, `pid`, `status`, `DOT`) VALUES
(22, 10001, '1111116', 'booked', '2015-05-19 09:29:09'),
(23, 10001, '1111116', 'booked', '2015-05-19 09:29:09'),
(24, 10000, '1111117', 'cancelled', '2015-05-19 09:37:25'),
(25, 10000, '1111117', 'cancelled', '2015-05-19 09:37:26'),
(26, 10001, '1111118', 'booked', '2015-05-25 06:07:19'),
(27, 10001, '1111118', 'booked', '2015-05-25 06:07:19'),
(28, 10001, '1111118', 'booked', '2015-05-25 06:07:19'),
(29, 10000, '1111120', 'cancelled', '2015-08-13 08:26:48'),
(30, 10000, '1111120', 'cancelled', '2015-08-13 08:26:48'),
(31, 10000, '1111120', 'cancelled', '2015-08-13 08:26:48'),
(32, 10000, '1111121', 'booked', '2015-09-30 12:40:21'),
(33, 10000, '1111121', 'booked', '2015-09-30 12:40:21'),
(34, 10000, '1111121', 'booked', '2015-09-30 12:40:21'),
(35, 10001, '1111125', 'cancelled', '2018-11-07 13:39:04'),
(36, 10001, '1111126', 'booked', '2018-10-28 11:36:49'),
(37, 10000, '1111131', 'booked', '2018-11-26 10:04:48'),
(38, 10000, '1111132', 'booked', '2018-11-26 10:19:40'),
(39, 10000, '1111133', 'booked', '2018-12-11 16:43:20'),
(40, 10000, '1111137', 'booked', '2018-12-11 17:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `rid` int(11) NOT NULL,
  `bid` varchar(11) DEFAULT NULL,
  `fromLoc` varchar(10) DEFAULT NULL,
  `toLoc` varchar(10) DEFAULT NULL,
  `fare` double DEFAULT NULL,
  `dep_date` date NOT NULL,
  `dep_time` time DEFAULT NULL,
  `arr_time` time DEFAULT NULL,
  `arr_date` date NOT NULL,
  `avalseats` varchar(10) NOT NULL DEFAULT '40',
  `maxseats` varchar(10) NOT NULL DEFAULT '40',
  `seats` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`rid`, `bid`, `fromLoc`, `toLoc`, `fare`, `dep_date`, `dep_time`, `arr_time`, `arr_date`, `avalseats`, `maxseats`, `seats`) VALUES
(10000, 'BB001', 'Uttara', 'Bogra', 350, '2019-01-05', '08:00:00', '14:00:00', '2019-01-06', '33', '40', ''),
(10001, 'BB002', 'Uttara', 'Bogra', 350, '2019-01-06', '12:00:00', '18:00:00', '2019-01-06', '34', '40', ''),
(10002, 'BB003', 'Uttara', 'Bogora', NULL, '2018-11-13', '20:00:00', '02:00:00', '0000-00-00', '40', '40', ''),
(10003, 'BB004', 'Uttara', 'Bogora', NULL, '0000-00-00', '20:00:00', '02:00:00', '0000-00-00', '40', '40', ''),
(10004, 'BB005', 'Uttara', 'Chittagong', NULL, '2019-01-05', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10005, 'BB006', 'Uttara', 'Chittagong', NULL, '2019-01-06', '20:00:00', '03:00:00', '0000-00-00', '40', '40', ''),
(10006, 'BB007', 'Uttara', 'Sylhet', NULL, '2019-01-05', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10007, 'BB008', 'Uttara', 'Sylhet', NULL, '2019-01-06', '16:00:00', '11:00:00', '0000-00-00', '40', '40', ''),
(10008, 'BB009', 'Gabtoli', 'Bogra', NULL, '2019-01-05', '08:00:00', '14:00:00', '0000-00-00', '40', '40', ''),
(10009, 'BB010', 'Gabtoli', 'Bogra', NULL, '2019-01-07', '12:00:00', '18:00:00', '0000-00-00', '40', '40', ''),
(10010, 'BB011', 'Gabtoli', 'Bogra', NULL, '2019-01-06', '20:00:00', '02:00:00', '0000-00-00', '40', '40', ''),
(10011, 'BB012', 'Gabtoli', 'Chittagong', NULL, '2019-01-05', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10012, 'BB013', 'Gabtoli', 'Chittagong', NULL, '2019-01-05', '20:00:00', '03:00:00', '0000-00-00', '40', '40', ''),
(10013, 'BB014', 'Gabtoli', 'Sylhet', NULL, '2019-01-05', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10014, 'BB015', 'Gabtoli', 'Sylhet', NULL, '2019-01-05', '16:00:00', '11:00:00', '0000-00-00', '40', '40', ''),
(10015, 'BB016', 'Gabtoli', 'Sylhet', 600, '2019-01-06', '18:00:00', '11:00:00', '2019-01-06', '40', '40', ''),
(10016, 'BB017', 'Uttara', 'Bogra', 600, '2019-01-08', '08:00:00', '14:00:00', '2019-01-09', '40', '40', ''),
(10017, 'BB018', 'Uttara', 'Bogra', 350, '2019-01-06', '12:00:00', '18:00:00', '2019-01-07', '40', '40', ''),
(10018, 'BB019', 'Uttara', 'Bogra', NULL, '2019-01-07', '20:00:00', '02:00:00', '0000-00-00', '40', '40', ''),
(10019, 'BB020', 'Uttara', 'Chittagong', NULL, '2019-01-05', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10020, 'BB021', 'Gabtoli', 'Bogra', NULL, '2019-01-06', '08:00:00', '14:00:00', '0000-00-00', '40', '40', ''),
(10021, 'BB022', 'Gabtoli', 'Bogra', NULL, '2019-01-05', '12:00:00', '18:00:00', '0000-00-00', '40', '40', ''),
(10022, 'BB023', 'Gabtoli', 'Bogra', NULL, '2019-01-06', '20:00:00', '02:00:00', '0000-00-00', '40', '40', ''),
(10023, 'BB024', 'Gabtoli', 'Chittagong', NULL, '2019-01-05', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10024, 'BB025', 'Uttara', 'Bogra', NULL, '2019-01-05', '08:00:00', '14:00:00', '0000-00-00', '40', '40', ''),
(10025, 'BB026', 'Uttara', 'Bogora', NULL, '0000-00-00', '12:00:00', '18:00:00', '0000-00-00', '40', '40', ''),
(10026, 'BB027', 'Uttara', 'Bogora', NULL, '0000-00-00', '12:00:00', '18:00:00', '0000-00-00', '40', '40', ''),
(10027, 'BB028', 'Uttara', 'Bogora', NULL, '0000-00-00', '20:00:00', '02:00:00', '0000-00-00', '40', '40', ''),
(10028, 'BB029', 'Gabtoli', 'Bogora', NULL, '0000-00-00', '08:00:00', '14:00:00', '0000-00-00', '40', '40', ''),
(10029, 'BB030', 'Gabtoli', 'Bogora', NULL, '0000-00-00', '12:00:00', '18:00:00', '0000-00-00', '40', '40', ''),
(10030, 'BB031', 'Gabtoli', 'Bogora', NULL, '0000-00-00', '12:00:00', '18:00:00', '0000-00-00', '40', '40', ''),
(10031, 'BB032', 'Gabtoli', 'Bogora', NULL, '0000-00-00', '20:00:00', '02:00:00', '0000-00-00', '40', '40', ''),
(10032, 'BB033', 'Uttara', 'Chittagong', NULL, '0000-00-00', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10033, 'BB034', 'Uttara', 'Chittagong', NULL, '0000-00-00', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10034, 'BB035', 'Uttara', 'Chittagong', NULL, '0000-00-00', '20:00:00', '03:00:00', '0000-00-00', '40', '40', ''),
(10035, 'BB036', 'Uttara', 'Chittagong', NULL, '0000-00-00', '20:00:00', '03:00:00', '0000-00-00', '40', '40', ''),
(10036, 'BB037', 'Uttara', 'Sylhet', NULL, '0000-00-00', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10037, 'BB038', 'Uttara', 'Sylhet', NULL, '0000-00-00', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10038, 'BB039', 'Uttara', 'Sylhet', NULL, '0000-00-00', '18:00:00', '11:00:00', '0000-00-00', '40', '40', ''),
(10039, 'BB040', 'Gabtoli', 'Sylhet', NULL, '0000-00-00', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10040, 'BB041', 'Gabtoli', 'Sylhet', NULL, '0000-00-00', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10041, 'BB042', 'Gabtoli', 'Sylhet', NULL, '0000-00-00', '18:00:00', '11:00:00', '0000-00-00', '40', '40', ''),
(10042, 'BB043', 'Gabtoli', 'Sylhet', NULL, '0000-00-00', '18:00:00', '11:00:00', '0000-00-00', '40', '40', ''),
(10043, 'BB044', 'Gabtoli', 'Chittagong', NULL, '0000-00-00', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10044, 'BB045', 'Gabtoli', 'Chittagong', NULL, '0000-00-00', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10045, 'BB046', 'Gabtoli', 'Chittagong', NULL, '0000-00-00', '16:00:00', '01:00:00', '0000-00-00', '40', '40', ''),
(10046, 'BB047', 'Gabtoli', 'Chittagong', NULL, '0000-00-00', '18:00:00', '01:00:00', '0000-00-00', '40', '40', ''),
(10047, 'BB048', 'Uttara', 'Sylhet', NULL, '0000-00-00', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10048, 'BB049', 'Uttara', 'Sylhet', NULL, '0000-00-00', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10049, 'BB050', 'Uttara', 'Sylhet', NULL, '0000-00-00', '18:00:00', '01:00:00', '0000-00-00', '40', '40', ''),
(10050, 'BB051', 'Uttara', 'Sylhet', NULL, '0000-00-00', '18:00:00', '01:00:00', '0000-00-00', '40', '40', ''),
(10051, 'BB052', 'Uttara', 'Chittagong', NULL, '0000-00-00', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10052, 'BB053', 'Uttara', 'Chittagong', NULL, '0000-00-00', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10053, 'BB054', 'Uttara', 'Chittagong', NULL, '0000-00-00', '18:00:00', '01:00:00', '0000-00-00', '40', '40', ''),
(10054, 'BB055', 'Uttara', 'Chittagong', NULL, '0000-00-00', '18:00:00', '01:00:00', '0000-00-00', '40', '40', ''),
(10055, 'BB056', 'Gabtoli', 'Sylhet', NULL, '2018-11-13', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10056, 'BB057', 'Gabtoli', 'Sylhet', NULL, '0000-00-00', '12:00:00', '17:00:00', '0000-00-00', '40', '40', ''),
(10057, 'BB058', 'Gabtoli', 'Sylhet', NULL, '0000-00-00', '18:00:00', '01:00:00', '0000-00-00', '40', '40', ''),
(10058, 'BB059', 'Gabtoli', 'Sylhet', NULL, '0000-00-00', '18:00:00', '01:00:00', '0000-00-00', '40', '40', ''),
(10059, 'BB060', 'Gabtoli', 'Chittagong', NULL, '0000-00-00', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10060, 'BB061', 'Gabtoli', 'Chittagong', NULL, '0000-00-00', '12:00:00', '19:00:00', '0000-00-00', '40', '40', ''),
(10062, 'BB063', 'Gabtoli', 'Chittagong', NULL, '0000-00-00', '18:00:00', '01:00:00', '0000-00-00', '40', '40', ''),
(10063, 'BB064', 'Gabtoli', 'Chittagong', NULL, '2019-01-06', '18:00:00', '01:00:00', '0000-00-00', '40', '40', '');

-- --------------------------------------------------------

--
-- Table structure for table `seat_info`
--

CREATE TABLE `seat_info` (
  `bid` varchar(10) NOT NULL,
  `seat_num` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_info`
--

INSERT INTO `seat_info` (`bid`, `seat_num`, `status`) VALUES
('BB001', 'a1', '');

-- --------------------------------------------------------

--
-- Table structure for table `today`
--

CREATE TABLE `today` (
  `tod_time` time NOT NULL,
  `tod_date` date NOT NULL,
  `one` date NOT NULL DEFAULT '0000-00-01'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `today`
--

INSERT INTO `today` (`tod_time`, `tod_date`, `one`) VALUES
('12:04:54', '2019-01-07', '0000-00-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `nb`
--
ALTER TABLE `nb`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`pnr`),
  ADD KEY `rid` (`rid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`rid`,`dep_date`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `seat_info`
--
ALTER TABLE `seat_info`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `today`
--
ALTER TABLE `today`
  ADD PRIMARY KEY (`tod_time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `pnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10064;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `route` (`rid`),
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `passenger` (`pid`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bus` (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
