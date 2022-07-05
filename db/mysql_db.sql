-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: mydb
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home','<h1 style=\"text-align:center; padding: 3rem\">Home Page</h1>\r\n<p style=\"color: green; text-align:center\"> Some paragraph<p>\r\n<br>\r\n<p style=\"color: red; text-align:center\">Red paragraph </p>'),(2,'About','<h2 style=\"color: red\">About page</h2>'),(3,'Other Page','<h1 style=\"text-align:center; padding: 1rem\">Some other page</h1>\r\n<p style=\"color: blue; text-align:center; margin: 1rem 0\">Blue paragraph<p>\r\n<p style=\"color: blue; text-align:left; margin: 2rem 0\">Blue paragraph<p>\r\n<p style=\"color: blue; text-align:right; margin: 1rem\">Blue paragraph<p>\r\n<br>\r\n<p style=\"color: red; text-align:center\">Red paragraph </p>'),(4,'Alberto Einšteino biografija','<div style=\"text-align:center\">\r\n<img class=\"main-photo\" src=\"https://place-hold.it/300x200\" alt=\"Photo\">\r\n<p>Albertas Einšteinas (vok. Albert Einstein. Gimė 1879 m. kovo 14 d. Ulme. Mirė būdamas 76 metų, Vokietijoje - 1955 m. balandžio 18 d. Prinstone, JAV) - \r\n  Vokietijos ir Jungtinių Valstijų fizikas, suformulavęs specialiąją reliatyvumo teoriją, \r\n  o vėliau ir bendrąją reliatyvumo teoriją. <br> <br> Jis taip pat nemažai nuveikė kvantinės mechanikos, \r\n  statistinės mechanikos ir kosmologijos srityse. 1921 metais gavo Nobelio premiją \r\n  fizikos srityje už fotoelektrinio efekto išaiškinimą.</p>\r\n</div>\r\n</div>\r\n\r\n<footer>\r\n  <p>© 2022 Ž.K.</p>\r\n</footer>');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-05 11:09:24
