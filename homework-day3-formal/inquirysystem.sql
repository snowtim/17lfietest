-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: inquirysystem
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `inquiry_record`
--

DROP TABLE IF EXISTS `inquiry_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inquiry_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inquiry_item` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quesioner_id` int(11) NOT NULL,
  `answerer_id` int(11) DEFAULT NULL,
  `reply_status` int(11) DEFAULT NULL,
  `reply_time` varchar(255) DEFAULT NULL,
  `ask_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquiry_record`
--

LOCK TABLES `inquiry_record` WRITE;
/*!40000 ALTER TABLE `inquiry_record` DISABLE KEYS */;
INSERT INTO `inquiry_record` VALUES (1,'Babybear',1,50,2,3,1,'2020-02-22 05:58:15','2020-02-21 17:31:51'),(2,'Babybear',1,100,2,3,1,'2020-02-22 05:58:19','2020-02-21 17:43:28'),(3,'Magazine',7,85,2,3,1,'2020-02-22 11:23:55','2020-02-22 03:22:01'),(4,'DVD',4,2500,2,3,1,'2020-02-22 11:32:44','2020-02-22 03:32:14'),(5,'Photobook',9,30000,2,6,1,'2020-02-22 11:34:58','2020-02-22 03:34:07'),(6,'Photocard',7,4444,2,6,1,'2020-02-22 11:42:12','2020-02-22 03:41:30'),(7,'Babybear',99,45000,2,6,1,'2020-02-22 11:54:28','2020-02-22 03:53:56'),(8,'Bag',37,733,9,6,1,'2020-02-22 13:02:54','2020-02-22 04:08:48'),(9,'Photobook',2,980,9,3,1,'2020-02-22 12:23:24','2020-02-22 04:09:25'),(10,'Bag',4,230,2,3,1,'2020-02-22 12:24:34','2020-02-22 04:21:55'),(11,'Babybear',500,7000,9,3,1,'2020-02-22 13:06:53','2020-02-22 04:22:45'),(12,'Hand Lamp',22,NULL,2,NULL,0,NULL,'2020-02-22 04:54:04'),(13,'Babybear',14,555,9,3,1,'2020-02-22 13:06:08','2020-02-22 05:01:55'),(14,'Babybear',3,NULL,9,NULL,0,NULL,'2020-02-22 05:07:36');
/*!40000 ALTER TABLE `inquiry_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchandise`
--

DROP TABLE IF EXISTS `merchandise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merchandise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchandise`
--

LOCK TABLES `merchandise` WRITE;
/*!40000 ALTER TABLE `merchandise` DISABLE KEYS */;
INSERT INTO `merchandise` VALUES (1,'Babybear'),(2,'Doll'),(3,'Photobook'),(4,'Magazine'),(5,'Photocard'),(6,'Bag'),(7,'DVD'),(8,'Stick paper'),(9,'Photocard Book'),(10,'Hand Lamp');
/*!40000 ALTER TABLE `merchandise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `identity` varchar(70) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Andy','andy@ptt.com','guest','asdfg'),(2,'Ann','ann@ptt.com','guest','asasas'),(3,'Bob','bob@ptt.com','business','mnmnmn'),(4,'Wendy','wendy@ptt.com','guest','a1s2d3'),(5,'Jenny','jenny@ptt.com','guest','tr546'),(6,'Irene','irene@ptt.com','business','lkh987'),(7,'Sana','sana@ptt.com','guest','jife47'),(8,'Mina','mina@ptt.com','guest','5tgb6yhn'),(9,'Jeff','jeff@ptt.com','guest','ttttt'),(10,'Momoko','momoko@ptt.com','guest','opqrst');
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

-- Dump completed on 2020-02-22 14:06:20
