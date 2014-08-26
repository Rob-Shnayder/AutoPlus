-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2014 at 07:42 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autoplus`
--
CREATE DATABASE IF NOT EXISTS `autoplus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `autoplus`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegisterUser`(IN `_username` VARCHAR(30), IN `_password` VARCHAR(30), IN `_firstname` VARCHAR(25), IN `_lastname` VARCHAR(30), IN `_email` VARCHAR(35))
BEGIN
INSERT INTO users
(
username,
password,
firstname,
lastname,
email
)
VALUES
(
_username,
_password,
_firstname,
_lastname,
_email
);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `boughtcar`
--

CREATE TABLE IF NOT EXISTS `boughtcar` (
  `CarID` int(11) NOT NULL,
  `Bought_Price` float NOT NULL,
  `Bought_Date` date NOT NULL,
  KEY `CarID` (`CarID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `CarID` int(11) NOT NULL AUTO_INCREMENT,
  `VIN` int(17) NOT NULL,
  `Make` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Year` int(4) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Details` varchar(250) NOT NULL,
  PRIMARY KEY (`CarID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Zip` varchar(5) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `SaleID` int(11) NOT NULL AUTO_INCREMENT,
  `CarID` int(11) NOT NULL,
  `Sold_Price` float NOT NULL,
  `Sold_Date` date NOT NULL,
  `CustomerID` int(11) NOT NULL,
  PRIMARY KEY (`SaleID`),
  KEY `CarID` (`CarID`),
  KEY `CustomerID` (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'ff', 'ff', 'ff', 'ff', 'ff'),
(3, 'a', 'a', 'f', '', 'b'),
(4, 'a', 'a', 'd', 'vb', 'e'),
(5, 'a', 'f', 'be', 'f', 'wwfre'),
(6, 'bob', 'bob', 'bob', 'bob', 'bob');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boughtcar`
--
ALTER TABLE `boughtcar`
  ADD CONSTRAINT `boughtcar_ibfk_1` FOREIGN KEY (`CarID`) REFERENCES `car` (`CarID`);

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`CarID`) REFERENCES `car` (`CarID`),
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
