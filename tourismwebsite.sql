-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2019 at 01:09 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourismwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

DROP TABLE IF EXISTS `bookingdetails`;
CREATE TABLE IF NOT EXISTS `bookingdetails` (
  `Bookingid` varchar(15) NOT NULL,
  `Name` char(15) NOT NULL,
  `Package` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Idproof` varchar(20) NOT NULL,
  `Persons` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Amtpaid` varchar(15) NOT NULL,
  KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`Bookingid`, `Name`, `Package`, `Date`, `Idproof`, `Persons`, `Username`, `Amtpaid`) VALUES
('AB123', 'Viggi', 'PRIDE', '2019-11-07', 'KA41EN', 3, 'pixzeal', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE IF NOT EXISTS `userdetails` (
  `Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` char(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  PRIMARY KEY (`Username`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`Name`, `Username`, `DateOfBirth`, `Gender`, `Email`, `Password`, `PhoneNumber`) VALUES
('Viggi', 'pixzeal', '2019-11-05', 'Male', 'viggi@gmail.com', 'PixZeal123', '9663439275');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD CONSTRAINT `bookingdetails_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `userdetails` (`Username`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
