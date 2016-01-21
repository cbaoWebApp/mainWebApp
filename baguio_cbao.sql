CREATE DATABASE  IF NOT EXISTS `baguio_cbao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `baguio_cbao`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: baguio_cbao
-- ------------------------------------------------------
-- Server version	5.6.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `costs`
--

DROP TABLE IF EXISTS `costs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `costs` (
  `idcosts` int(11) NOT NULL AUTO_INCREMENT,
  `building` decimal(9,2) DEFAULT NULL,
  `electrical` decimal(9,2) DEFAULT NULL,
  `mechanical` decimal(9,2) DEFAULT NULL,
  `plumbing` decimal(9,2) DEFAULT NULL,
  `others` decimal(9,2) DEFAULT NULL,
  `total_cost` decimal(9,2) DEFAULT NULL,
  `number_of_storeys` int(10) DEFAULT NULL,
  `floor_area` decimal(6,2) DEFAULT NULL,
  `proposed_construction_date` date DEFAULT NULL,
  `construction_materials` text,
  PRIMARY KEY (`idcosts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `costs`
--

LOCK TABLES `costs` WRITE;
/*!40000 ALTER TABLE `costs` DISABLE KEYS */;
/*!40000 ALTER TABLE `costs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_info`
--

DROP TABLE IF EXISTS `general_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_info` (
  `idgeneral_info` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `middle_initial` varchar(1) DEFAULT NULL,
  `tax_no` varchar(45) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `enterprise_name` varchar(45) DEFAULT NULL,
  `ownership_form` varchar(45) DEFAULT NULL,
  `business` varchar(45) DEFAULT NULL,
  `contact_number` int(12) DEFAULT NULL,
  PRIMARY KEY (`idgeneral_info`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_info`
--

LOCK TABLES `general_info` WRITE;
/*!40000 ALTER TABLE `general_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `in_charge_of_construction`
--

DROP TABLE IF EXISTS `in_charge_of_construction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `in_charge_of_construction` (
  `idin_charge_of_construction` int(11) NOT NULL AUTO_INCREMENT,
  `prc_registration_number` int(11) DEFAULT NULL,
  `engineer_last_name` varchar(45) DEFAULT NULL,
  `engineer_first_name` varchar(45) DEFAULT NULL,
  `engineer_middle_initial` varchar(1) DEFAULT NULL,
  `engineer_address` varchar(100) DEFAULT NULL,
  `ptr_number` int(11) DEFAULT NULL,
  `date_issued` date DEFAULT NULL,
  `place_issued` varchar(45) DEFAULT NULL,
  `tin` int(11) DEFAULT NULL,
  PRIMARY KEY (`idin_charge_of_construction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `in_charge_of_construction`
--

LOCK TABLES `in_charge_of_construction` WRITE;
/*!40000 ALTER TABLE `in_charge_of_construction` DISABLE KEYS */;
/*!40000 ALTER TABLE `in_charge_of_construction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lot_owner`
--

DROP TABLE IF EXISTS `lot_owner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lot_owner` (
  `idlot_owner` int(11) NOT NULL AUTO_INCREMENT,
  `tct_oct_number` int(11) DEFAULT NULL,
  `owner_last_name` varchar(45) DEFAULT NULL,
  `owner_first_name` varchar(45) DEFAULT NULL,
  `owner_middle_initial` varchar(1) DEFAULT NULL,
  `owner_address` varchar(100) DEFAULT NULL,
  `community_tax_certificate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idlot_owner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lot_owner`
--

LOCK TABLES `lot_owner` WRITE;
/*!40000 ALTER TABLE `lot_owner` DISABLE KEYS */;
/*!40000 ALTER TABLE `lot_owner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plans_and_specifications`
--

DROP TABLE IF EXISTS `plans_and_specifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plans_and_specifications` (
  `idplans_and_specifications` int(11) NOT NULL AUTO_INCREMENT,
  `prc_registration_number` int(11) DEFAULT NULL,
  `engineer_last_name` varchar(45) DEFAULT NULL,
  `engineer_first_name` varchar(45) DEFAULT NULL,
  `engineer_middle_initial` varchar(1) DEFAULT NULL,
  `engineer_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idplans_and_specifications`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans_and_specifications`
--

LOCK TABLES `plans_and_specifications` WRITE;
/*!40000 ALTER TABLE `plans_and_specifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `plans_and_specifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracking_accounts`
--

DROP TABLE IF EXISTS `tracking_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracking_accounts` (
  `idtracking_accounts` int(11) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(60) DEFAULT NULL,
  `password` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`idtracking_accounts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracking_accounts`
--

LOCK TABLES `tracking_accounts` WRITE;
/*!40000 ALTER TABLE `tracking_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `tracking_accounts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-21 17:50:29
