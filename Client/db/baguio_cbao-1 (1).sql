-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 12:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baguio_cbao`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `middle_initial` varchar(1) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `contact_number` int(12) DEFAULT NULL,
  `tin` varchar(15) DEFAULT NULL,
  `form_ownership` varchar(45) DEFAULT NULL,
  `main_economic_activity` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `ctc_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`applicant_id`),
  KEY `ctc_id_idx` (`ctc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicant_id`, `last_name`, `first_name`, `middle_initial`, `address`, `contact_number`, `tin`, `form_ownership`, `main_economic_activity`, `email`, `password`, `ctc_id`) VALUES
(1, 'Alvarez', 'Neil Patrick', 'U', 'Bakakeng, Baguio City, Benguet, Philippines', 2147483647, '123-456-789-000', NULL, NULL, 'neilpatrick02@gmail.com', 'neil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assessed_costs`
--

CREATE TABLE IF NOT EXISTS `assessed_costs` (
  `ac_id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(50) DEFAULT NULL,
  `cost` decimal(9,2) DEFAULT NULL,
  `bpform_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ac_id`),
  KEY `bpform_id_idx` (`bpform_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `assessed_costs`
--

INSERT INTO `assessed_costs` (`ac_id`, `section`, `cost`, `bpform_id`) VALUES
(1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bpform`
--

CREATE TABLE IF NOT EXISTS `bpform` (
  `bpform_id` int(11) NOT NULL AUTO_INCREMENT,
  `application_no` int(9) DEFAULT NULL,
  `permit_no` int(9) DEFAULT NULL,
  `date_of_application` date DEFAULT NULL,
  `date_issued` date DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `scope_of_work_id` int(11) DEFAULT NULL,
  `type_of_occupancy_id` int(11) DEFAULT NULL,
  `costs_id` int(11) DEFAULT NULL,
  `equipment_id` int(11) DEFAULT NULL,
  `storey_id` int(11) DEFAULT NULL,
  `fees_id` int(11) DEFAULT NULL,
  `engr_plans_id` int(11) DEFAULT NULL,
  `engr_oic_id` int(11) DEFAULT NULL,
  `lot_owner_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`bpform_id`),
  KEY `applicant_id_idx` (`applicant_id`),
  KEY `scope_of_work_id_idx` (`scope_of_work_id`),
  KEY `type_of_occupancy_id_idx` (`type_of_occupancy_id`),
  KEY `costs_id_idx` (`costs_id`),
  KEY `equipment_id_idx` (`equipment_id`),
  KEY `storey_id_idx` (`storey_id`),
  KEY `fees_id_idx` (`fees_id`),
  KEY `engr_plans_id_idx` (`engr_plans_id`),
  KEY `engr_oic_id_idx` (`engr_oic_id`),
  KEY `lot_owner_id_idx` (`lot_owner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bpform`
--

INSERT INTO `bpform` (`bpform_id`, `application_no`, `permit_no`, `date_of_application`, `date_issued`, `location`, `applicant_id`, `scope_of_work_id`, `type_of_occupancy_id`, `costs_id`, `equipment_id`, `storey_id`, `fees_id`, `engr_plans_id`, `engr_oic_id`, `lot_owner_id`) VALUES
(1, 1, 1, '2016-02-08', '0000-00-00', 'Aurora Hill, Baguio City', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE IF NOT EXISTS `checklist` (
  `checklist_id` int(11) NOT NULL AUTO_INCREMENT,
  `documents_id` int(11) DEFAULT NULL,
  `bpform_id` int(11) DEFAULT NULL,
  `controlNum` varchar(45) DEFAULT NULL,
  `permitNum` varchar(45) DEFAULT NULL,
  `appNum` varchar(45) DEFAULT NULL,
  `dateOfApp` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`checklist_id`),
  KEY `documents_id_idx` (`documents_id`),
  KEY `bpform_id_fk_idx` (`bpform_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`checklist_id`, `documents_id`, `bpform_id`, `controlNum`, `permitNum`, `appNum`, `dateOfApp`, `status`) VALUES
(1, 1, 1, '1', '1', '1', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comments_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_received` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `time_in` datetime DEFAULT NULL,
  `time_out` datetime DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comments_id`),
  KEY `personnel_id_idx` (`personnel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `date_received`, `comment`, `time_in`, `time_out`, `personnel_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE IF NOT EXISTS `costs` (
  `costs_id` int(11) NOT NULL AUTO_INCREMENT,
  `building` decimal(9,2) DEFAULT NULL,
  `electrical` decimal(9,2) DEFAULT NULL,
  `mechanical` decimal(9,2) DEFAULT NULL,
  `plumbing` decimal(9,2) DEFAULT NULL,
  `others` decimal(9,2) DEFAULT NULL,
  `total_cost` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`costs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `costs`
--

INSERT INTO `costs` (`costs_id`, `building`, `electrical`, `mechanical`, `plumbing`, `others`, `total_cost`) VALUES
(1, '15000.00', '0.00', '0.00', '0.00', '0.00', '15000.00');

-- --------------------------------------------------------

--
-- Table structure for table `ctc`
--

CREATE TABLE IF NOT EXISTS `ctc` (
  `ctc_id` int(11) NOT NULL AUTO_INCREMENT,
  `ctc_no` varchar(45) DEFAULT NULL,
  `date_issued` date DEFAULT NULL,
  `place_issued` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ctc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ctc`
--

INSERT INTO `ctc` (`ctc_id`, `ctc_no`, `date_issued`, `place_issued`) VALUES
(1, '1234567890', '2016-02-07', 'Baguio City');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `documents_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` varchar(5) DEFAULT NULL,
  `notowner` varchar(5) DEFAULT NULL,
  `trueTitle` varchar(5) DEFAULT NULL,
  `surveyPlan` varchar(5) DEFAULT NULL,
  `contractLease` varchar(5) DEFAULT NULL,
  `deedSale` varchar(5) DEFAULT NULL,
  `conDeedSale` varchar(5) DEFAULT NULL,
  `taxDec` varchar(5) DEFAULT NULL,
  `realPropTax` varchar(5) DEFAULT NULL,
  `bpForm` varchar(5) DEFAULT NULL,
  `BuilPlan` varchar(5) DEFAULT NULL,
  `StrucDesign` varchar(5) DEFAULT NULL,
  `BuildSpec` varchar(5) DEFAULT NULL,
  `billMat` varchar(5) DEFAULT NULL,
  `picSite` varchar(5) DEFAULT NULL,
  `soilAnal` varchar(5) DEFAULT NULL,
  `ecc` varchar(5) DEFAULT NULL,
  `3stor` varchar(5) DEFAULT NULL,
  `4stor` varchar(5) DEFAULT NULL,
  `taxReceipt` varchar(5) DEFAULT NULL,
  `zoningCert` varchar(5) DEFAULT NULL,
  `FireCert` varchar(5) DEFAULT NULL,
  `wmsCert` varchar(5) DEFAULT NULL,
  `logbook` varchar(5) DEFAULT NULL,
  `tarpaulin` varchar(5) DEFAULT NULL,
  `clearance` varchar(5) DEFAULT NULL,
  `dpwh` varchar(5) DEFAULT NULL,
  `aviation` varchar(5) DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  `psg` varchar(45) DEFAULT NULL,
  `notarized` varchar(45) DEFAULT NULL,
  `constAuth` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`documents_id`),
  KEY `personnel_id_idx` (`personnel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`documents_id`, `owner`, `notowner`, `trueTitle`, `surveyPlan`, `contractLease`, `deedSale`, `conDeedSale`, `taxDec`, `realPropTax`, `bpForm`, `BuilPlan`, `StrucDesign`, `BuildSpec`, `billMat`, `picSite`, `soilAnal`, `ecc`, `3stor`, `4stor`, `taxReceipt`, `zoningCert`, `FireCert`, `wmsCert`, `logbook`, `tarpaulin`, `clearance`, `dpwh`, `aviation`, `personnel_id`, `psg`, `notarized`, `constAuth`) VALUES
(1, 'true', 'false', 'true', 'true', 'false', 'false', 'false', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'false', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 2, 'true', 'true', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `engr_oic`
--

CREATE TABLE IF NOT EXISTS `engr_oic` (
  `engr_oic_id` int(11) NOT NULL AUTO_INCREMENT,
  `prc_reg_no` int(11) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `middle_initial` varchar(1) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `ptr_no` int(11) DEFAULT NULL,
  `date_issued` date DEFAULT NULL,
  `place_issued` varchar(250) DEFAULT NULL,
  `tin` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`engr_oic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `engr_oic`
--

INSERT INTO `engr_oic` (`engr_oic_id`, `prc_reg_no`, `last_name`, `first_name`, `middle_initial`, `address`, `ptr_no`, `date_issued`, `place_issued`, `tin`) VALUES
(1, 2147483647, 'De Vera', 'Pedro', 'C', 'Mandaluyong City, Manila', 2147483647, '2010-09-13', 'Manila', '0909-9898-8787');

-- --------------------------------------------------------

--
-- Table structure for table `engr_plans`
--

CREATE TABLE IF NOT EXISTS `engr_plans` (
  `engr_plans_id` int(11) NOT NULL AUTO_INCREMENT,
  `prc_reg_no` int(11) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `middle_initial` varchar(1) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`engr_plans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `engr_plans`
--

INSERT INTO `engr_plans` (`engr_plans_id`, `prc_reg_no`, `last_name`, `first_name`, `middle_initial`, `address`) VALUES
(1, 2147483647, 'Dela Cruz', 'Juan', 'P', 'Tayug, Pangasinan');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_cost` decimal(9,2) DEFAULT NULL,
  `second_cost` decimal(9,2) DEFAULT NULL,
  `third_cost` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`equipment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `first_cost`, `second_cost`, `third_cost`) VALUES
(1, '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `lot_owner`
--

CREATE TABLE IF NOT EXISTS `lot_owner` (
  `lot_owner_id` int(11) NOT NULL,
  `tct_oct_no` varchar(14) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `middle_initial` varchar(1) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `community_tax_certificate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`lot_owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lot_owner`
--

INSERT INTO `lot_owner` (`lot_owner_id`, `tct_oct_no`, `last_name`, `first_name`, `middle_initial`, `address`, `community_tax_certificate`) VALUES
(1, '123456-7890987', 'Sy', 'Kenneth', 'U', 'Aurora Hill, Baguio City', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `personnel_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `middle_initial` varchar(1) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `access_level` varchar(20) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`personnel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`personnel_id`, `last_name`, `first_name`, `middle_initial`, `section`, `access_level`, `username`, `password`, `status`) VALUES
(1, 'Rafael', 'Emmanuel', 'R', 'Building', 'Head', 'Kim', '1234', 'FALSE'),
(2, 'dela Cruz', 'Juana', 'C', 'Receiving', 'Head', 'juana', 'j1234', NULL),
(3, 'THE HUMAN', 'FINN', 'P', 'RECEIVING', 'HEAD', '123-123-123', '123123123', 'FALSE'),
(4, 'DAMPILAG', 'KARLA', 'L', 'ADMIN', 'HEAD', '123-123-122', '123123123', NULL),
(5, 'SQUAREPANTS', 'SPONGEBOB', 'S', 'RECEIVING', 'SUBSTITUTE', '123-123-121', '123123123', NULL),
(6, 'FABULOUS', 'KARLA', 'L', 'ADMIN', 'HEAD', '123-123-111', '123QWEQWE', NULL),
(7, 'ASD', 'ASD', 'A', 'ADMIN', 'HEAD', '123-123-111', '123123123', NULL),
(8, 'THE DOG', 'JAKE', 'D', 'RECEIVING', 'HEAD', '123-123-120', '123123123', NULL),
(9, 'FABULOUS', 'KARLA', 'H', 'RECEIVING', 'SUBSTITUTE', '123-123-101', '123123123', NULL),
(10, 'DAMPILAG', 'KARLA', 'L', 'ADMIN', 'HEAD', '123-123-123', '123123123', 'FALSE'),
(11, 'FABULOUS', 'KARLA', 'A', 'RECEIVING', 'HEAD', '123-123-123', '123123123', 'FALSE'),
(12, 'DAMPILAG', 'KARLA', 'L', 'ADMIN', 'HEAD', '123-123-123', '123123123', 'FALSE'),
(13, 'FABULOUS', 'KARLA', 'H', 'RECEIVING', 'HEAD', '123-123-123', '123123123', 'FALSE'),
(14, 'FABULOUS', 'KARLA', 'L', 'ADMIN', 'HEAD', '123-123-123', '123123123', 'FALSE'),
(15, 'THE DOG', 'JAKE', 'G', 'RECEIVING', 'HEAD', '123-123-123', '123123123', 'FALSE'),
(16, 'DAMPILAG', 'KARLA', 'H', 'ADMIN', 'HEAD', '123-123-123', '123123123', 'FALSE'),
(17, 'THE DOG', 'JAKE', 'F', 'RECEIVING', 'HEAD', '123-123-123', '123123123', 'FALSE'),
(18, 'ASD', 'ASD', 'A', 'ADMIN', 'HEAD', '123-123-123', '123123123', 'TRUE');

-- --------------------------------------------------------

--
-- Table structure for table `routing_slip`
--

CREATE TABLE IF NOT EXISTS `routing_slip` (
  `routing_slip_id` int(11) NOT NULL AUTO_INCREMENT,
  `comments_id` int(11) DEFAULT NULL,
  `bpform_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`routing_slip_id`),
  KEY `comments_id_idx` (`comments_id`),
  KEY `bpform_id_idx` (`bpform_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `routing_slip`
--

INSERT INTO `routing_slip` (`routing_slip_id`, `comments_id`, `bpform_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_of_fees`
--

CREATE TABLE IF NOT EXISTS `schedule_of_fees` (
  `sof_id` int(11) NOT NULL AUTO_INCREMENT,
  `section` int(12) DEFAULT NULL,
  `category` varchar(1) DEFAULT NULL,
  `i` decimal(9,2) DEFAULT NULL,
  `ii` decimal(9,2) DEFAULT NULL,
  `iii` decimal(9,2) DEFAULT NULL,
  `iv` decimal(9,2) DEFAULT NULL,
  `v` decimal(9,2) DEFAULT NULL,
  `vi` decimal(9,2) DEFAULT NULL,
  `vii` decimal(9,2) DEFAULT NULL,
  `viii` decimal(9,2) DEFAULT NULL,
  `ix` decimal(9,2) DEFAULT NULL,
  `x` decimal(9,2) DEFAULT NULL,
  `xi` decimal(9,2) DEFAULT NULL,
  `xii` decimal(9,2) DEFAULT NULL,
  `xiii` decimal(9,2) DEFAULT NULL,
  `xiv` decimal(9,2) DEFAULT NULL,
  `xv` decimal(9,2) DEFAULT NULL,
  `xvi` decimal(9,2) DEFAULT NULL,
  `xvii` decimal(9,2) DEFAULT NULL,
  `xviii` decimal(9,2) DEFAULT NULL,
  `xix` decimal(9,2) DEFAULT NULL,
  `xx` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`sof_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `schedule_of_fees`
--

INSERT INTO `schedule_of_fees` (`sof_id`, `section`, `category`, `i`, `ii`, `iii`, `iv`, `v`, `vi`, `vii`, `viii`, `ix`, `x`, `xi`, `xii`, `xiii`, `xiv`, `xv`, `xvi`, `xvii`, `xviii`, `xix`, `xx`) VALUES
(1, 2, 'a', '10000.00', '8000.00', '6000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(2, 3, 'a', '2.00', '2.40', '3.40', '4.80', '6.00', '7.20', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(3, 3, 'b', '3.00', '3.40', '5.20', '8.00', '8.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(4, 3, 'c', '23.00', '22.00', '20.50', '19.50', '18.00', '17.00', '16.00', '15.00', '14.00', '12.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(5, 3, 'd', '12.00', '11.00', '10.20', '9.60', '9.00', '8.40', '7.20', '6.60', '6.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(6, 4, '2', '200.00', '20.00', '1100.00', '10.00', '3600.00', '5.00', '9600.00', '2.50', '20850.00', '1.25', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(7, 4, 'b', '40.00', '40.00', '4.00', '220.00', '2.00', '720.00', '1.00', '1920.00', '0.50', '4170.00', '0.25', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(8, 4, 'c', '30.00', '30.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(9, 4, 'd', '15.00', '60.00', '30.00', '15.00', '36.00', '12.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(10, 5, 'a', '40.00', '60.00', '90.00', '40.00', '60.00', '40.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(11, 5, 'b', '10.00', '20.00', '10.00', '200.00', '20.00', '40.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(12, 5, 'c', '600.00', '2000.00', '5000.00', '5000.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(13, 5, 'd', '500.00', '700.00', '900.00', '1200.00', '1400.00', '1600.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(14, 5, 'e', '200.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(15, 5, 'f', '60.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(16, 5, 'g', '4.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(17, 5, 'h', '25.00', '20.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(18, 5, 'i', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(19, 5, 'j', '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(20, 5, 'k', '4.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(21, 5, 'l', '10.00', '12.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(22, 5, 'm', '60.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(23, 5, 'n', '60.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(24, 5, 'o', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(25, 5, 'p', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(26, 6, 'b', '7.00', '3.00', '3.00', '7.00', '2.00', '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(27, 6, 'c', '7.00', '4.00', '7.00', '7.00', '7.00', '4.00', '4.00', '4.00', '2.00', '4.00', '4.00', '4.00', '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(28, 6, 'd', '2.00', '8.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(29, 6, 'e', '24.00', '7.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(30, 7, 'a', '2.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(31, 7, 'b', '1000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(32, 7, 'c', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(33, 7, 'd', '2.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(34, 7, 'e', '2.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(35, 7, 'f', '1000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(36, 7, 'g', '1000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(37, 7, 'h', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(38, 7, 'i', '20.00', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(39, 7, 'j', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(40, 8, 'b', '0.25', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(41, 8, 'c', '20.00', '8.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(42, 8, 'd', '3.00', '36.00', '24.00', '60.00', '6.00', '16.00', '18.00', '12.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(43, 8, 'e', '3.00', '48.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(44, 8, 'f', '500.00', '2400.00', '120.00', '1800.00', '120.00', '150.00', '240.00', '12.00', '120.00', '12.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(45, 8, 'g', '2400.00', '150.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(46, 8, 'h', '240.00', '12.00', '48.00', '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(47, 8, 'i', '48.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(48, 8, 'j', '12.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(49, 8, 'k', '12.00', '12.00', '480.00', '24.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(50, 8, 'l', '7.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(51, 8, 'm', '480.00', '480.00', '540.00', '24.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(52, 8, 'n', '3.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(53, 8, 'o', '10.00', '5.00', '24.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(54, 8, 'p', '5.00', '5.00', '12.00', '5.00', '18.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(55, 9, 'a', '24.00', '2.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(56, 9, 'b', '200.00', '3.00', '50.00', '4.00', '3.00', '250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(57, 9, 'c', '3.00', '4.00', '2.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(58, 9, 'd', '24.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(59, 9, 'e', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(60, 9, 'f', '240.00', '12.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(61, 9, 'g', '150.00', '12.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(62, 9, 'h', '120.00', '24.00', '36.00', '24.00', '15.00', '9.60', '52.00', '36.00', '24.00', '18.00', '36.00', '18.00', '12.00', '8.00', '46.00', '38.00', '20.00', '12.00', '0.00', '0.00'),
(63, 9, 'i', '5.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(64, 9, 'k', '3.00', '4.00', '800.00', '50.00', '50.00', '50.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(65, 10, 'a', '100.00', '200.00', '400.00', '800.00', '800.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(66, 10, 'b', '200.00', '400.00', '800.00', '1000.00', '1000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(67, 10, 'c', '150.00', '250.00', '600.00', '900.00', '900.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(68, 10, 'd', '50.00', '240.00', '360.00', '480.00', '200.00', '2400.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(69, 10, 'e', '800.00', '50.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(70, 11, 'a', '120.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(71, 11, 'b', '150.00', '120.00', '240.00', '80.00', '720.00', '960.00', '1200.00', '1200.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(72, 11, 'c', '1200.00', '720.00', '520.00', '720.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(73, 11, 'd', '60.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(74, 11, 'e', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(75, 11, 'f', '25.00', '20.00', '15.00', '10.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(76, 11, 'f', '40.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(77, 11, 'f', '25.00', '20.00', '8.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(78, 11, 'f', '10.00', '50.00', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(79, 11, 'f', '120.00', '50.00', '10.00', '25.00', '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(80, 11, 'f', '500.00', '400.00', '50.00', '400.00', '500.00', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(81, 11, 'f', '400.00', '550.00', '600.00', '650.00', '800.00', '900.00', '4.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(82, 11, 'f', '120.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(83, 11, 'f', '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(84, 11, 'f', '55.00', '90.00', '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(86, 11, 'f', '15.00', '10.00', '2.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(87, 11, 'f', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(88, 11, 'f', '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(89, 11, 'f', '100.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(90, 11, 'f', '8.00', '23.00', '39.00', '55.00', '80.00', '4.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(91, 11, 'f', '40.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(92, 11, 'f', '2.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(93, 11, 'f', '30.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(94, 11, 'f', '24.00', '30.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(95, 11, 'f', '30.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(96, 11, 'g', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(97, 12, 'a', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(98, 12, 'b', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(99, 12, 'c', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(100, 12, 'd', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(101, 12, 'e', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(102, 12, 'f', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(103, 12, 'g', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(104, 12, 'h', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `scope_of_work`
--

CREATE TABLE IF NOT EXISTS `scope_of_work` (
  `scope_of_work_id` int(11) NOT NULL AUTO_INCREMENT,
  `new_construction` varchar(250) DEFAULT NULL,
  `addition` varchar(250) DEFAULT NULL,
  `repair` varchar(250) DEFAULT NULL,
  `renovation` varchar(250) DEFAULT NULL,
  `demolition` varchar(250) DEFAULT NULL,
  `others1` varchar(250) DEFAULT NULL,
  `no_of_units` int(200) DEFAULT NULL,
  `others2` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`scope_of_work_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `scope_of_work`
--

INSERT INTO `scope_of_work` (`scope_of_work_id`, `new_construction`, `addition`, `repair`, `renovation`, `demolition`, `others1`, `no_of_units`, `others2`) VALUES
(1, '', 'Veranda', '', '', '', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `storey`
--

CREATE TABLE IF NOT EXISTS `storey` (
  `storey_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_of_storeys` int(11) DEFAULT NULL,
  `total_floor_area` decimal(9,2) DEFAULT NULL,
  `proposed_date_of_construction` date DEFAULT NULL,
  `material_of_construction` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`storey_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `storey`
--

INSERT INTO `storey` (`storey_id`, `no_of_storeys`, `total_floor_area`, `proposed_date_of_construction`, `material_of_construction`) VALUES
(1, 1, '10.00', '2016-02-09', 'Concrete');

-- --------------------------------------------------------

--
-- Table structure for table `total_fees`
--

CREATE TABLE IF NOT EXISTS `total_fees` (
  `fees_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(9,2) DEFAULT NULL,
  `or_number` varchar(45) DEFAULT NULL,
  `date_paid` date DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`fees_id`),
  KEY `personnel_id_idx` (`personnel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `total_fees`
--

INSERT INTO `total_fees` (`fees_id`, `amount`, `or_number`, `date_paid`, `personnel_id`) VALUES
(1, '0.00', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_occupancy`
--

CREATE TABLE IF NOT EXISTS `type_of_occupancy` (
  `type_of_occupancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `general_type` varchar(50) DEFAULT NULL,
  `specific_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`type_of_occupancy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `type_of_occupancy`
--

INSERT INTO `type_of_occupancy` (`type_of_occupancy_id`, `general_type`, `specific_type`) VALUES
(1, 'Residential', 'Single');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `ctc_id` FOREIGN KEY (`ctc_id`) REFERENCES `ctc` (`ctc_id`) ON UPDATE CASCADE;

--
-- Constraints for table `assessed_costs`
--
ALTER TABLE `assessed_costs`
  ADD CONSTRAINT `bpform_id_fk_2` FOREIGN KEY (`bpform_id`) REFERENCES `bpform` (`bpform_id`) ON UPDATE CASCADE;

--
-- Constraints for table `bpform`
--
ALTER TABLE `bpform`
  ADD CONSTRAINT `applicant_id` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`applicant_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `costs_id` FOREIGN KEY (`costs_id`) REFERENCES `costs` (`costs_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `engr_oic_id` FOREIGN KEY (`engr_oic_id`) REFERENCES `engr_oic` (`engr_oic_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `engr_plans_id` FOREIGN KEY (`engr_plans_id`) REFERENCES `engr_plans` (`engr_plans_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipment_id` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`equipment_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fees_id` FOREIGN KEY (`fees_id`) REFERENCES `total_fees` (`fees_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lot_owner_id` FOREIGN KEY (`lot_owner_id`) REFERENCES `lot_owner` (`lot_owner_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `scope_of_work_id` FOREIGN KEY (`scope_of_work_id`) REFERENCES `scope_of_work` (`scope_of_work_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `storey_id` FOREIGN KEY (`storey_id`) REFERENCES `storey` (`storey_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `type_of_occupancy_id` FOREIGN KEY (`type_of_occupancy_id`) REFERENCES `type_of_occupancy` (`type_of_occupancy_id`) ON UPDATE CASCADE;

--
-- Constraints for table `checklist`
--
ALTER TABLE `checklist`
  ADD CONSTRAINT `bpform_id_fk` FOREIGN KEY (`bpform_id`) REFERENCES `bpform` (`bpform_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `documents_id` FOREIGN KEY (`documents_id`) REFERENCES `documents` (`documents_id`) ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `personnel_id` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`personnel_id`) ON UPDATE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `personnel_id_fk` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`personnel_id`) ON UPDATE CASCADE;

--
-- Constraints for table `routing_slip`
--
ALTER TABLE `routing_slip`
  ADD CONSTRAINT `bpform_id` FOREIGN KEY (`bpform_id`) REFERENCES `bpform` (`bpform_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_id` FOREIGN KEY (`comments_id`) REFERENCES `comments` (`comments_id`) ON UPDATE CASCADE;

--
-- Constraints for table `total_fees`
--
ALTER TABLE `total_fees`
  ADD CONSTRAINT `personnel_id_fk_2` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`personnel_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
