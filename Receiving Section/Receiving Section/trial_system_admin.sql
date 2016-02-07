-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2016 at 03:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trial_system_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `tinNo` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `section` text NOT NULL,
  `position` text NOT NULL,
  `password` varchar(4) NOT NULL,
  PRIMARY KEY (`tinNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`tinNo`, `name`, `section`, `position`, `password`) VALUES
(2, '2', '2', '2', '2'),
(1234, 'Karla Dampilag', 'Receiving', 'Missionary', 'mehe');

-- --------------------------------------------------------

--
-- Table structure for table `fetches`
--

CREATE TABLE IF NOT EXISTS `fetches` (
  `controlNum` int(11) NOT NULL,
  `permitNum` varchar(45) DEFAULT NULL,
  `dateOfApp` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `appNum` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`controlNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fetches`
--

INSERT INTO `fetches` (`controlNum`, `permitNum`, `dateOfApp`, `status`, `appNum`) VALUES
(1, '1', '1111-11-11', '1', '1'),
(2, '2', '2221-12-22', '2', '2'),
(3, '3', '0000-00-00', '3', '3'),
(4, '4', '0000-00-00', '4', '4'),
(5, '5', '0000-00-00', '5', '5'),
(6, '6', '0000-00-00', '6', '6'),
(7, '7', '0000-00-00', '7', NULL),
(8, '8', '0000-00-00', '8', '8'),
(9, '9', '0000-00-00', '9', '9'),
(10, '10', '0000-00-00', '10', '10'),
(11, '11', '0000-00-00', '11', '11'),
(12, '12', '0000-00-00', '12', '12'),
(13, '12', '0000-00-00', '12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE IF NOT EXISTS `requirement` (
  `idRequirement` int(11) NOT NULL AUTO_INCREMENT,
  `trueTitle` varchar(45) DEFAULT NULL,
  `surveyPlan` varchar(45) DEFAULT NULL,
  `contractLease` varchar(45) DEFAULT NULL,
  `deedSale` varchar(45) DEFAULT NULL,
  `conDeedSale` varchar(45) DEFAULT NULL,
  `taxDec` varchar(45) DEFAULT NULL,
  `realPropTax` varchar(45) DEFAULT NULL,
  `bpForm` varchar(45) DEFAULT NULL,
  `BuilPlan` varchar(45) DEFAULT NULL,
  `StrucDesign` varchar(45) DEFAULT NULL,
  `BuildSpec` varchar(45) DEFAULT NULL,
  `billMat` varchar(45) DEFAULT NULL,
  `picSite` varchar(45) DEFAULT NULL,
  `soilAnal` varchar(45) DEFAULT NULL,
  `ecc` varchar(45) DEFAULT NULL,
  `3stor` varchar(45) DEFAULT NULL,
  `4stor` varchar(45) DEFAULT NULL,
  `taxReceipt` varchar(45) DEFAULT NULL,
  `zoningCert` varchar(45) DEFAULT NULL,
  `FireCert` varchar(45) DEFAULT NULL,
  `wmsCert` varchar(45) DEFAULT NULL,
  `logbook` varchar(45) DEFAULT NULL,
  `clearance` varchar(45) DEFAULT NULL,
  `dpwh` varchar(45) DEFAULT NULL,
  `aviation` varchar(45) DEFAULT NULL,
  `psg` varchar(45) DEFAULT NULL,
  `notarized` varchar(45) DEFAULT NULL,
  `constAuth` varchar(45) DEFAULT NULL,
  `tarpaulin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idRequirement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`idRequirement`, `trueTitle`, `surveyPlan`, `contractLease`, `deedSale`, `conDeedSale`, `taxDec`, `realPropTax`, `bpForm`, `BuilPlan`, `StrucDesign`, `BuildSpec`, `billMat`, `picSite`, `soilAnal`, `ecc`, `3stor`, `4stor`, `taxReceipt`, `zoningCert`, `FireCert`, `wmsCert`, `logbook`, `clearance`, `dpwh`, `aviation`, `psg`, `notarized`, `constAuth`, `tarpaulin`) VALUES
(1, 'true', 'true', ' false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false'),
(2, 'true', 'true', ' false', 'false', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'false'),
(3, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
