-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 10:19 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotelmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `bachelor`
--

CREATE TABLE IF NOT EXISTS `bachelor` (
`SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bachelor`
--

INSERT INTO `bachelor` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `classic`
--

CREATE TABLE IF NOT EXISTS `classic` (
`SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classic`
--

INSERT INTO `classic` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
`SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `delux`
--

CREATE TABLE IF NOT EXISTS `delux` (
`SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delux`
--

INSERT INTO `delux` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`SNo` int(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Type` text NOT NULL,
  `NoGuest` varchar(100) NOT NULL,
  `Checkin` date NOT NULL,
  `InTime` time(6) NOT NULL,
  `OutTime` time NOT NULL,
  `username` text NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `City` text NOT NULL,
  `Total` varchar(25) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`SNo`, `ID`, `Type`, `NoGuest`, `Checkin`, `InTime`, `OutTime`, `username`, `Name`, `Phone`, `City`, `Total`, `Status`) VALUES
(1, '4', 'Event', '300', '2020-10-04', '12:54:00.000000', '15:53:00', 'Vengadesh', 'vengadesh', '8680962338', 'chennai', 'Rs 5000/-', 'Pending'),
(2, '4', 'Conference-Hall', '300', '2020-10-04', '14:00:00.000000', '17:00:00', 'Vengadesh', 'Kumaran', '8680962338', 'madurai', 'Rs 7000/-', 'Pending'),
(3, '4', 'Conference-Hall', '400', '2020-10-23', '14:00:00.000000', '17:00:00', 'Vengadesh', 'Kumaran', '8680962338', 'madurai', 'Rs 3000/-', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
`SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `luxury`
--

CREATE TABLE IF NOT EXISTS `luxury` (
`SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luxury`
--

INSERT INTO `luxury` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `presidential`
--

CREATE TABLE IF NOT EXISTS `presidential` (
`SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presidential`
--

INSERT INTO `presidential` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`SNo` int(30) NOT NULL,
  `ID` int(30) NOT NULL,
  `NoGuest` varchar(30) NOT NULL,
  `Checkin` date NOT NULL,
  `Checkout` date NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Total` int(30) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `PhoneNo` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`SNo`, `ID`, `NoGuest`, `Checkin`, `Checkout`, `Type`, `Total`, `Name`, `Username`, `PhoneNo`, `City`, `Status`) VALUES
(1, 4, '1', '2020-10-04', '2020-10-08', 'club', 30400, 'selwin', 'Vengadesh', '8680962338', 'bangalore', 'cancel'),
(2, 4, '1', '2020-10-04', '2020-10-15', 'club', 83600, 'kuamaran', 'Vengadesh', '8680962338', 'bangalore', '1'),
(3, 4, '1', '2020-10-04', '2020-10-22', 'club', 136800, 'gana', 'Vengadesh', '8680962338', 'bangalore', '0'),
(4, 4, '1', '2020-10-04', '2020-10-06', 'superior', 10000, 'vengadesh', 'Vengadesh', '98948488484', 'adsas', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
`ID` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `username`, `password`, `email`, `phoneno`) VALUES
(1, 'Nish', '123', 'nishanth123@gmail.com', 2147483647),
(2, 'Ganaphathy', '123', 'ganaphathy@gmail.com', 2147483647),
(3, 'kamesh', '123', 'kamesh@gmail.com', 2147483647),
(4, 'Vengadesh', '123', 'vengadesh@gmmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `superdelux`
--

CREATE TABLE IF NOT EXISTS `superdelux` (
`SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superdelux`
--

INSERT INTO `superdelux` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `superior`
--

CREATE TABLE IF NOT EXISTS `superior` (
`SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superior`
--

INSERT INTO `superior` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '0', 4, 'vengadesh'),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bachelor`
--
ALTER TABLE `bachelor`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `classic`
--
ALTER TABLE `classic`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `delux`
--
ALTER TABLE `delux`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `luxury`
--
ALTER TABLE `luxury`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `presidential`
--
ALTER TABLE `presidential`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `superdelux`
--
ALTER TABLE `superdelux`
 ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `superior`
--
ALTER TABLE `superior`
 ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bachelor`
--
ALTER TABLE `bachelor`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `classic`
--
ALTER TABLE `classic`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `delux`
--
ALTER TABLE `delux`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `luxury`
--
ALTER TABLE `luxury`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `presidential`
--
ALTER TABLE `presidential`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `SNo` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `superdelux`
--
ALTER TABLE `superdelux`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `superior`
--
ALTER TABLE `superior`
MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
