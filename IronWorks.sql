-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: IronWorks
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1-log

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
-- Table structure for table `WORKDAMNYOU`
--

DROP TABLE IF EXISTS `WORKDAMNYOU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `WORKDAMNYOU` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `WORKDAMNYOU`
--

LOCK TABLES `WORKDAMNYOU` WRITE;
/*!40000 ALTER TABLE `WORKDAMNYOU` DISABLE KEYS */;
/*!40000 ALTER TABLE `WORKDAMNYOU` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment` (
  `equipment` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `machineID` int(11) NOT NULL AUTO_INCREMENT,
  `energySource` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `lockable` varchar(3) DEFAULT NULL,
  `typeOfLock` varchar(255) DEFAULT NULL,
  `nextMaintenance` date DEFAULT NULL,
  `lastMaintenance` date DEFAULT NULL,
  `schedule` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`machineID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
INSERT INTO `equipment` VALUES ('Band Saw',' Hyd-Mech M-20A',1,' Electrical / Hydraulic',' Bay B: South Wall',' Y',' Padlock/Tag','2017-05-19','2017-05-10','3 Months'),('Band Saw',' Peddinghaus Model 30/16',2,' Electrical / Hydraulic',' Bay D: South Wall',' Y',' Padlock/Tag','2017-06-11','2017-02-11','2 Months'),('Band Saw',' Peddinghaus DG 1100',3,' Electrical / Hydraulic',' Bay E: South Wall',' Y',' Padlock/Tag','2017-07-04','2017-03-07','3 Months'),('Drill Line',' Peddinghaus Model PCD 1100/C',4,' Electrical / Hydraulic',' Bay E: South Wall',' Y',' Padlock/Tag','2017-08-01','2017-02-14','6 Months'),('Drill Line',' Peddinghaus BDL-760',5,' Electrical / Hydraulic',' Bay D: South Wall',' Y',' Padlock/Tag','2017-05-19','2017-01-09','2 Months'),('Plate Processor',' Peddinghaus FPB 1800',6,' Electrical / Hydraulic',' Bay C: North Wall',' Y',' Padlock/Tag','2017-05-15','2017-01-09','3 Months'),('Angle Master',' Peddinghaus Model 623M',7,' Electrical / Hydraulic',' Bay B: South Wall',' Y',' Padlock/Tag','2017-05-10','2017-03-09','6 Months'),('220 Ton Ironworker Machine',' Geka Hydracrop 220/SD',8,' Electrical / Hydraulic',' Bay B: North Wall',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Plate Shear',' Baykal Fab-Line MGH 3100 x 20',9,' Electrical / Hydraulic',' Bay B: Northwest Wall',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Press Brake',' Baykal Primeline',10,' Electrical / Hydraulic',' Bay B: Northwest Wall',' Y',' Padlock/Tag','2017-09-01','2017-02-02','4 Months'),('Cambering Machine',' CambCo Model 1700',11,' Electrical / Hydraulic',' Bay B: North Wall',' Y',' Padlock/Tag','2017-05-11',NULL,'4 Months'),('Overhead Crane',' 15 Ton Crane: P&H Trav-Lift Serial #: 27112',13,' Electrical',' Bay E',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Overhead Crane',' 7.5 Ton Crane: R&M Serial #: A9901178',14,' Electrical',' Bay D',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Overhead Crane',' 10 Ton Crane: Yale Serial #: G35772WE',15,' Electrical',' Bay D',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Overhead Crane',' 5 Ton Crane: Electro-Lift Serial #: 64127R',16,' Electrical',' Bay C',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Overhead Crane',' 10 Ton Crane: P&H Serial #: 1-60441',17,' Electrical',' Bay C',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Overhead Crane',' 10 Ton Crane: P&H Serial #: 1-61363',18,' Electrical',' Bay B',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Overhead Crane',' 5 Ton Crane: Shaw Box Serial #: K1-73648',19,' Electrical',' Bay B',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Overhead Crane',' 5 Ton Crane: Yale Serial #: 12052170',20,' Electrical',' Bay A',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('Overhead Crane',' 5 Ton Crane: Shaw Box Serial #: K2-59300',21,' Electrical',' Bay A',' Y',' Padlock/Tag',NULL,NULL,'4 Months'),('BigMachine','999',23,'Electric','Bay Z','Y','PadLock',NULL,NULL,'4 Months'),('TestMachine2','Big Damn Model',24,'electric','Bay D','Y','Padlock',NULL,NULL,'4 Months'),('Testing-Machine','Testing-Model',25,'Fires of hell','Bay X','Y','Padlock',NULL,NULL,'4 Months'),('Last Test','Testing Model',26,'Students Hopes and Dreams','IT635','Y','Souls',NULL,NULL,'4 Months'),('Big Fn Machine','Enormous',27,'Celestial Wind','Bay Z','N','NULL',NULL,NULL,'4 Months'),('KehoeMachine','Sarcastic',28,'Childrens Souls','Kehoes Pub','N','NULL',NULL,NULL,'4 Months'),('ANGRY MACHINE','9989',29,'POWER','SOMEWHERE','N','NULL',NULL,NULL,'4 Months'),('PLEASEWORK','workingmachine',30,'something that works','Bay C','N','NULL',NULL,NULL,'4 Months'),('TestingAgain','10099',31,'Brotein','Bay G','Y','Padlock',NULL,NULL,'4 Months');
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipmentStatus`
--

DROP TABLE IF EXISTS `equipmentStatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipmentStatus` (
  `jobID` int(11) DEFAULT NULL,
  `machineID` int(11) NOT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  KEY `jobID` (`jobID`),
  KEY `machineID` (`machineID`),
  CONSTRAINT `equipmentStatus_ibfk_1` FOREIGN KEY (`jobID`) REFERENCES `jobSites` (`jobID`),
  CONSTRAINT `equipmentStatus_ibfk_2` FOREIGN KEY (`machineID`) REFERENCES `equipment` (`machineID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipmentStatus`
--

LOCK TABLES `equipmentStatus` WRITE;
/*!40000 ALTER TABLE `equipmentStatus` DISABLE KEYS */;
INSERT INTO `equipmentStatus` VALUES (NULL,24,'2017-01-01',NULL,'broken'),(1006,23,'2017-01-01','2017-02-19','complete'),(1007,20,'2017-01-01',NULL,'in use'),(1007,19,'2017-03-03',NULL,'in use'),(1007,21,'2017-04-01',NULL,'IN USE'),(1007,6,'2017-04-01',NULL,'IN USE'),(1007,7,'2017-04-01',NULL,'IN USE'),(1004,11,'2014-03-15','2016-03-30','complete'),(NULL,25,'2017-03-22','2017-03-23','FIXED'),(1003,1,'2011-01-01','2011-09-14','complete'),(1009,14,'2017-03-22',NULL,'IN USE'),(NULL,28,'2017-03-22',NULL,'broken');
/*!40000 ALTER TABLE `equipmentStatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `example`
--

DROP TABLE IF EXISTS `example`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `example` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `example`
--

LOCK TABLES `example` WRITE;
/*!40000 ALTER TABLE `example` DISABLE KEYS */;
/*!40000 ALTER TABLE `example` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobMaterials`
--

DROP TABLE IF EXISTS `jobMaterials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobMaterials` (
  `jobId` int(11) NOT NULL,
  `materialID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  KEY `jobId` (`jobId`),
  KEY `materialID` (`materialID`),
  CONSTRAINT `jobMaterials_ibfk_1` FOREIGN KEY (`jobId`) REFERENCES `jobSites` (`jobID`),
  CONSTRAINT `jobMaterials_ibfk_2` FOREIGN KEY (`materialID`) REFERENCES `materials` (`materialID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobMaterials`
--

LOCK TABLES `jobMaterials` WRITE;
/*!40000 ALTER TABLE `jobMaterials` DISABLE KEYS */;
INSERT INTO `jobMaterials` VALUES (1006,102,42),(1006,101,110),(1006,103,10),(1006,104,62),(1006,105,99),(1005,101,50),(1005,102,40),(1005,103,10),(1005,104,65),(1005,105,14),(1005,106,11),(1005,107,2),(1007,101,62),(1007,102,41),(1007,103,99),(1007,104,14),(1007,105,104),(1007,106,2),(1006,107,55),(1006,104,55),(1005,103,12),(1002,101,99),(1009,104,99),(1009,107,54),(1009,101,72),(1009,102,79);
/*!40000 ALTER TABLE `jobMaterials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobSites`
--

DROP TABLE IF EXISTS `jobSites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobSites` (
  `jobID` int(11) NOT NULL AUTO_INCREMENT,
  `jobName` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `tonnage` int(8) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  PRIMARY KEY (`jobID`)
) ENGINE=InnoDB AUTO_INCREMENT=1012 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobSites`
--

LOCK TABLES `jobSites` WRITE;
/*!40000 ALTER TABLE `jobSites` DISABLE KEYS */;
INSERT INTO `jobSites` VALUES (1001,' 254 Stratton St',' Newark',500,'2010-05-01','2013-03-13'),(1002,' 689 Ozark Rd',' Trenton',445,'2012-09-06','2014-07-14'),(1003,' 97 Meridian Way',' Imperial City',1020,'2014-08-01','2016-05-09'),(1004,' 77 Westeros Lane',' WinterFell',740,'2015-12-09',NULL),(1005,' 88 GreyMane St',' Gilneas',280,'2016-11-01',NULL),(1006,'117 Spartan Way','Halo',556,'2017-01-11',NULL),(1007,'1 Example Street','Haverstraw',1024,'2017-03-01',NULL),(1008,'Super Test Site','Superville',100000,'2017-03-21',NULL),(1009,'359 Mile Way','Bannister',359,'2017-03-22',NULL),(1010,'ReplicationTest','MyCity',9999,'2017-03-26',NULL),(1011,'WORKDAMNYOU','WOOOOORK',1999,'2017-04-22',NULL);
/*!40000 ALTER TABLE `jobSites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materials` (
  `material` varchar(255) NOT NULL,
  `materialID` int(11) NOT NULL AUTO_INCREMENT,
  `weight` int(8) DEFAULT NULL,
  `coating` varchar(255) DEFAULT NULL,
  `machineID` int(11) DEFAULT NULL,
  PRIMARY KEY (`materialID`),
  KEY `machineID` (`machineID`),
  CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`machineID`) REFERENCES `equipment` (`machineID`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materials`
--

LOCK TABLES `materials` WRITE;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` VALUES ('I Beam',101,10,' Fireproof',2),('W Beam',102,20,' Fireproof',3),('Angle',103,1,'',7),('Tube',104,5,' Fireproof',5),('Plate',105,50,' ',9),('Copper Piping',106,1,'',11),('Aluminum Siding',107,1,' Fireproof ',4);
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parts` (
  `partID` int(11) NOT NULL AUTO_INCREMENT,
  `partName` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `vendor` varchar(255) DEFAULT NULL,
  `price` decimal(19,2) DEFAULT NULL,
  `machineID` int(11) NOT NULL,
  PRIMARY KEY (`partID`),
  KEY `machineID` (`machineID`),
  CONSTRAINT `parts_ibfk_1` FOREIGN KEY (`machineID`) REFERENCES `equipment` (`machineID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parts`
--

LOCK TABLES `parts` WRITE;
/*!40000 ALTER TABLE `parts` DISABLE KEYS */;
INSERT INTO `parts` VALUES (1,'3/8 Saw Blade','Hyd-Mech','Borussia Dortmund',178.99,1),(2,'30/16 Saw Blade','Peddinghaus','Borussia Dortmund',192.99,2),(3,'11/3 Saw Blade','Peddinghaus','Borussia Dortmund',211.99,3),(4,'1 Ton Shear','Baykal','Inter Milan',445.99,9),(5,'Hydraulic Chamber','Baykal','Inter Milan',1099.99,9),(6,'3/8 Drill Head','Peddinghaus','Borussia  Dortmund',56.99,4),(7,'5/8Drill Head','Peddinghaus','Borussia Dortmund',59.99,5),(8,'3/8 Carbide Drill Head','Peddinghaus','Umbrella Corp.',49.99,6),(9,'MQL Lubrication','Peddinghaus','Umbrella Corp.',19.99,6),(10,'9/8 Carbide Drill Head','Peddinghaus','Umbrella Corp.',49.99,6),(11,'Hypertherm Plasma Cutting 260','Peddinghaus','Umbrella Corp.',299.99,6),(12,'Hypertherm Plasma Cutting 400','Peddinghaus','Umbrella Corp.',399.99,6);
/*!40000 ALTER TABLE `parts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `privilege` int(4) DEFAULT NULL,
  `displayName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918',1,'Overlord'),('guest','84983c60f7daadc1cb8698621f802c0d9f9a3c3c295c810748fb048115c186ec',0,'Big Noob'),('worker','87eba76e7f3164534045ba922e7770fb58bbd14ad732bbf5ba6f11cc56989e6e',0,'Workman'),('Testing Replication','9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08',0,'tester');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-10 17:17:14
