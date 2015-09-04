-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.5.37-0+wheezy1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'dean office','admin','admin123'),(2,'jack','kamal','123');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(7) DEFAULT NULL,
  `course_name` varchar(50) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `instructor` varchar(15) DEFAULT NULL,
  `coursetype` varchar(9) DEFAULT NULL,
  `semester2` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `semestertype` varchar(5) DEFAULT NULL,
  `semesteryear` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'cs308','large application practicum',6,'varun','core',8,2,'even',2014),(2,'cs402','compiler',6,'sukumar','elective',NULL,3,'even',2014),(3,'cs303','information and database system',6,'arti','core',NULL,4,'even',2014),(4,'cs101','introduction to computer science',1,'tag','core',NULL,3,'even',2014),(5,'dp201p','design practicum',3,'varun','core',NULL,4,'even',2014);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cs101`
--

DROP TABLE IF EXISTS `cs101`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cs101` (
  `enrollment` varchar(15) DEFAULT NULL,
  `quiz1` decimal(6,2) DEFAULT NULL,
  `quiz2` decimal(6,2) DEFAULT NULL,
  `assignment` decimal(6,2) DEFAULT NULL,
  `project` decimal(6,2) DEFAULT NULL,
  `endsem` decimal(6,2) DEFAULT NULL,
  `totalmarks` decimal(6,2) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cs101`
--

LOCK TABLES `cs101` WRITE;
/*!40000 ALTER TABLE `cs101` DISABLE KEYS */;
INSERT INTO `cs101` VALUES ('b13012',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('b13072',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('b13031',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('b13131',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('b13451',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('b13011',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('b11025',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('b11137',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `cs101` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cs303`
--

DROP TABLE IF EXISTS `cs303`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cs303` (
  `enrollment` varchar(15) DEFAULT NULL,
  `quiz1` decimal(6,2) DEFAULT NULL,
  `quiz2` decimal(6,2) DEFAULT NULL,
  `assignment` decimal(6,2) DEFAULT NULL,
  `project` decimal(6,2) DEFAULT NULL,
  `endsem` decimal(6,2) DEFAULT NULL,
  `totalmarks` decimal(6,2) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cs303`
--

LOCK TABLES `cs303` WRITE;
/*!40000 ALTER TABLE `cs303` DISABLE KEYS */;
INSERT INTO `cs303` VALUES ('b11011',7.00,7.00,20.00,17.00,NULL,NULL,NULL),('b11025',6.00,8.00,16.00,16.00,NULL,NULL,NULL),('b10011',8.00,8.00,17.00,15.00,NULL,NULL,NULL),('b11001',9.00,6.00,10.00,16.00,40.00,81.00,'O'),('b11062',10.00,9.00,11.00,15.00,NULL,NULL,NULL);
/*!40000 ALTER TABLE `cs303` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cs308`
--

DROP TABLE IF EXISTS `cs308`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cs308` (
  `enrollment` varchar(15) DEFAULT NULL,
  `quiz1` decimal(6,2) DEFAULT NULL,
  `quiz2` decimal(6,2) DEFAULT NULL,
  `assignment` decimal(6,2) DEFAULT NULL,
  `project` decimal(6,2) DEFAULT NULL,
  `endsem` decimal(6,2) DEFAULT NULL,
  `totalmarks` decimal(6,2) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cs308`
--

LOCK TABLES `cs308` WRITE;
/*!40000 ALTER TABLE `cs308` DISABLE KEYS */;
INSERT INTO `cs308` VALUES ('b11062',9.00,7.00,13.00,14.00,8.00,51.00,'D'),('b11011',8.00,6.00,18.00,15.00,18.00,65.00,'C'),('b11025',9.00,9.00,16.00,12.00,39.00,85.00,'A'),('b10011',7.00,5.00,16.00,11.00,38.00,77.00,'B'),('b11001',8.00,1.00,14.00,9.00,32.00,64.00,'C');
/*!40000 ALTER TABLE `cs308` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cs402`
--

DROP TABLE IF EXISTS `cs402`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cs402` (
  `enrollment` varchar(15) DEFAULT NULL,
  `quiz1` decimal(6,2) DEFAULT NULL,
  `quiz2` decimal(6,2) DEFAULT NULL,
  `assignment` decimal(6,2) DEFAULT NULL,
  `project` decimal(6,2) DEFAULT NULL,
  `endsem` decimal(6,2) DEFAULT NULL,
  `totalmarks` decimal(6,2) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cs402`
--

LOCK TABLES `cs402` WRITE;
/*!40000 ALTER TABLE `cs402` DISABLE KEYS */;
INSERT INTO `cs402` VALUES ('b11062',9.00,7.00,17.00,12.00,1.00,46.00,'D'),('b11011',6.00,4.00,17.00,17.00,36.00,80.00,'A'),('b10011',5.00,7.00,19.00,15.00,28.00,74.00,'A'),('b11001',8.00,2.00,14.00,16.00,29.00,69.00,'B'),('b11025',1.00,10.00,13.00,13.00,31.00,68.00,'B'),('b11062',9.00,7.00,17.00,12.00,1.00,46.00,'D');
/*!40000 ALTER TABLE `cs402` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dp201p`
--

DROP TABLE IF EXISTS `dp201p`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dp201p` (
  `enrollment` varchar(15) DEFAULT NULL,
  `quiz1` decimal(6,2) DEFAULT NULL,
  `quiz2` decimal(6,2) DEFAULT NULL,
  `assignment` decimal(6,2) DEFAULT NULL,
  `project` decimal(6,2) DEFAULT NULL,
  `endsem` decimal(6,2) DEFAULT NULL,
  `totalmarks` decimal(6,2) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dp201p`
--

LOCK TABLES `dp201p` WRITE;
/*!40000 ALTER TABLE `dp201p` DISABLE KEYS */;
INSERT INTO `dp201p` VALUES ('b12011',6.50,1.00,9.00,14.40,20.00,50.90,'D'),('b12014',3.50,8.50,6.00,7.60,41.00,66.60,'C'),('b12034',8.00,6.00,5.00,16.00,50.00,85.00,'A'),('b12084',9.00,7.00,10.00,12.00,41.00,79.00,'B'),('b12075',6.00,9.50,8.00,10.00,50.00,83.50,'A'),('b12112',6.50,10.00,5.00,18.00,40.00,79.50,'B');
/*!40000 ALTER TABLE `dp201p` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ha101`
--

DROP TABLE IF EXISTS `ha101`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ha101` (
  `enrollment` varchar(15) DEFAULT NULL,
  `quiz1` decimal(6,2) DEFAULT NULL,
  `quiz2` decimal(6,2) DEFAULT NULL,
  `assignment` decimal(6,2) DEFAULT NULL,
  `project` decimal(6,2) DEFAULT NULL,
  `endsem` decimal(6,2) DEFAULT NULL,
  `totalmarks` decimal(6,2) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ha101`
--

LOCK TABLES `ha101` WRITE;
/*!40000 ALTER TABLE `ha101` DISABLE KEYS */;
/*!40000 ALTER TABLE `ha101` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `position` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'b11062','jack123','student'),(2,'b11025','pankaj123','student'),(3,'varun','varun123','teacher'),(4,'admin','admin123','admin'),(5,'b11011','chandan123','student'),(6,'arti','arti123','teacher'),(7,'sukumar','sukumar123','teacher'),(8,'b10011','suraj123','student'),(9,'b15015','kapil123','student'),(11,'tag','tag123','teacher'),(12,'kamal','123','admin'),(13,'b11137','shivam123','student');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(15) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
INSERT INTO `notification` VALUES (2,'varun','hi varun'),(3,'student','grades are not out yet!'),(4,'teacher','Submit the grades by 10th june!'),(5,'b11062','your request is not accepted contact dean office for reason'),(6,'','your request is not accepted contact dean office for reason'),(7,'b11062','your request is not accepted contact dean office for reason');
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preregistration`
--

DROP TABLE IF EXISTS `preregistration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preregistration` (
  `username` varchar(20) DEFAULT NULL,
  `course1` varchar(15) DEFAULT NULL,
  `course2` varchar(15) DEFAULT NULL,
  `course3` varchar(15) DEFAULT NULL,
  `course4` varchar(15) DEFAULT NULL,
  `course5` varchar(15) DEFAULT NULL,
  `course6` varchar(15) DEFAULT NULL,
  `course7` varchar(15) DEFAULT NULL,
  `course8` varchar(15) DEFAULT NULL,
  `course9` varchar(15) DEFAULT NULL,
  `course10` varchar(15) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preregistration`
--

LOCK TABLES `preregistration` WRITE;
/*!40000 ALTER TABLE `preregistration` DISABLE KEYS */;
INSERT INTO `preregistration` VALUES ('b11062',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'accepted',1),('b11062','cs402','cs402','cs303','cs303','cs308','cs308','cs308','cs308','cs402','cs402','accepted',2),('b11025','cs402','none','none','none','none','none','none','none','none','none','accepted',3),('b11025','none','none','none','none','none','none','none','none','none','none','accepted',4),('b11025','none','none','none','none','none','none','none','none','none','none','accepted',5),('b11025','none','none','none','none','none','none','none','none','none','none','accepted',6),('b11025','none','none','none','none','none','none','none','none','none','none','accepted',7),('b11025','none','none','none','none','none','none','none','none','none','none','accepted',8),('b11062','cs402','none','none','none','none','none','cs303','none','none','none','accepted',9),('b11062','cs402','none','none','none','none','none','none','none','none','none','deleted',10),('','','','','','','','','','','','deleted',11),('b11062','none','none','none','none','none','none','none','none','none','none','deleted',12);
/*!40000 ALTER TABLE `preregistration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `semester` int(11) NOT NULL,
  `department` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `current_year` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'jagmohan singh','b11062',6,'cse','jack123',2014),(2,'chandan satyarthi','b11011',6,'cse','chandan123',2014),(3,'pankaj verma','b11025',6,'cse','pankaj123',2014),(4,'suraj malode','b10011',8,'cse','suraj123',2014),(5,'shivam arora','b11137',6,'me','shivam123',NULL);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'arti kashyap','arti','arti123','professor'),(2,'sukumar bhattacharya','sukumar','sukumar123','professor'),(3,'varun dutt','varun','varun123','Professor');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-25 15:27:45
