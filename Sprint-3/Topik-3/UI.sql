-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: PondokIT
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Divisi`
--

DROP TABLE IF EXISTS `Divisi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Divisi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `namaDivisi` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Divisi`
--

LOCK TABLES `Divisi` WRITE;
/*!40000 ALTER TABLE `Divisi` DISABLE KEYS */;
INSERT INTO `Divisi` VALUES (1,'Marketer'),(2,'BackEnd'),(3,'FrontEnd'),(4,'Mobile');
/*!40000 ALTER TABLE `Divisi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Mentor`
--

DROP TABLE IF EXISTS `Mentor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Mentor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `namaMentor` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Mentor`
--

LOCK TABLES `Mentor` WRITE;
/*!40000 ALTER TABLE `Mentor` DISABLE KEYS */;
INSERT INTO `Mentor` VALUES (1,'Zstyle'),(2,'Funohan'),(3,'Lucky'),(4,'Laynx');
/*!40000 ALTER TABLE `Mentor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Santri_baru`
--

DROP TABLE IF EXISTS `Santri_baru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Santri_baru` (
  `Santri_baruId` int NOT NULL AUTO_INCREMENT,
  `namaSantri_baru` varchar(55) NOT NULL,
  `MentorId` int DEFAULT NULL,
  `DivisiId` int DEFAULT NULL,
  PRIMARY KEY (`Santri_baruId`),
  KEY `MentorId` (`MentorId`),
  KEY `DivisiId` (`DivisiId`),
  CONSTRAINT `Santri_baru_ibfk_1` FOREIGN KEY (`MentorId`) REFERENCES `Mentor` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `Santri_baru_ibfk_2` FOREIGN KEY (`DivisiId`) REFERENCES `Divisi` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Santri_baru`
--

LOCK TABLES `Santri_baru` WRITE;
/*!40000 ALTER TABLE `Santri_baru` DISABLE KEYS */;
INSERT INTO `Santri_baru` VALUES (1,'Rere',3,2),(2,'Xinnn',1,4),(3,'Wannn',4,1),(4,'Luo Yun',2,3),(5,'Yang Kai',1,4),(6,'Yang Yan',3,1),(7,'Alucard',4,2);
/*!40000 ALTER TABLE `Santri_baru` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-05 20:36:02
