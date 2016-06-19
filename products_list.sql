-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: products_list
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

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
-- Table structure for table `products_list`
--

DROP TABLE IF EXISTS `products_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_price` decimal(10,2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_list`
--

LOCK TABLES `products_list` WRITE;
/*!40000 ALTER TABLE `products_list` DISABLE KEYS */;
INSERT INTO `products_list` VALUES (1,'Assassin\'s Creed Syndicate','Assassin\'s Creed Syndicate is a 2015 action-adventure video game developed by Ubisoft Quebec and published by Ubisoft. It was released on October 23, 2015, for the PlayStation 4 and Xbox One, and on November 19, 2015, for Microsoft Windows.','TCH1','acreed.jpg',23.65),(2,'Battlefield 4','Battlefield 4 is a 2013 first-person shooter video game developed by Swedish video game developer EA Digital Illusions CE and published by Electronic Arts. ','TCH2','battlefield4_pc.jpg',34.45),(3,'Call of Duty Black Ops 3','Call of Duty: Black Ops III is a military science fiction first-person shooter video game, developed by Treyarch and published by Activision.','TCH3','cob3_pc.jpg',27.55),(4,'Diablo 3 Reaper of Souls','Diablo III: Reaper of Souls is the first expansion pack for the action role-playing video game Diablo III. ','TCH4','diabloReaper_pc.jpg',45.30),(5,'Need for Speed','Need for Speed is an online open world racing video game developed by Ghost Games and published by Electronic Arts, released for PlayStation 4 and Xbox One in November 2015, and released on Origin for Microsoft Windows on March 15, 2016.','TCH5','nfs_pc.jpg',30.00),(6,'Grand Theft Auto V','Grand Theft Auto Online is a persistent, open world online multiplayer video game developed by Rockstar North and published by Rockstar Games.','TCH6','gta5_pc.jpg',42.80);
/*!40000 ALTER TABLE `products_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-19 18:32:47
