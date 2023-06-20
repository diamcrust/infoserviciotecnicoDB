-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: taller_mecanico
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `accidente`
--

DROP TABLE IF EXISTS `accidente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accidente` (
  `num_accidente` int NOT NULL,
  `cve_cliente` int NOT NULL,
  `placa` varchar(9) NOT NULL,
  `rfc_taller` varchar(15) NOT NULL,
  `fecha` date DEFAULT NULL,
  `costo` float NOT NULL,
  PRIMARY KEY (`num_accidente`),
  KEY `cve_cliente` (`cve_cliente`),
  KEY `placa` (`placa`),
  CONSTRAINT `accidente_ibfk_1` FOREIGN KEY (`cve_cliente`) REFERENCES `cliente_auto` (`cve_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `accidente_ibfk_2` FOREIGN KEY (`placa`) REFERENCES `cliente_auto` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accidente`
--

LOCK TABLES `accidente` WRITE;
/*!40000 ALTER TABLE `accidente` DISABLE KEYS */;
/*!40000 ALTER TABLE `accidente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auto`
--

DROP TABLE IF EXISTS `auto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auto` (
  `placa` varchar(7) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `anio_fab` int NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  PRIMARY KEY (`placa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auto`
--

LOCK TABLES `auto` WRITE;
/*!40000 ALTER TABLE `auto` DISABLE KEYS */;
/*!40000 ALTER TABLE `auto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `cve_cliente` int NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `calle` varchar(35) NOT NULL,
  `num_dom` int DEFAULT NULL,
  `colonia` varchar(35) NOT NULL,
  `localidad` varchar(35) NOT NULL,
  `municipio` varchar(35) NOT NULL,
  `estado` varchar(35) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `tarifa` float DEFAULT NULL,
  PRIMARY KEY (`cve_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente_auto`
--

DROP TABLE IF EXISTS `cliente_auto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente_auto` (
  `cve_cliente` int NOT NULL,
  `placa` varchar(9) NOT NULL,
  KEY `cve_cliente` (`cve_cliente`),
  KEY `placa` (`placa`),
  CONSTRAINT `cliente_auto_ibfk_1` FOREIGN KEY (`cve_cliente`) REFERENCES `cliente` (`cve_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cliente_auto_ibfk_2` FOREIGN KEY (`placa`) REFERENCES `auto` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente_auto`
--

LOCK TABLES `cliente_auto` WRITE;
/*!40000 ALTER TABLE `cliente_auto` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente_auto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mecanico`
--

DROP TABLE IF EXISTS `mecanico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mecanico` (
  `RFC` varchar(13) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `cve_puesto` int NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`RFC`),
  KEY `cve_puesto` (`cve_puesto`),
  CONSTRAINT `mecanico_ibfk_1` FOREIGN KEY (`cve_puesto`) REFERENCES `puesto` (`cve_puesto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mecanico`
--

LOCK TABLES `mecanico` WRITE;
/*!40000 ALTER TABLE `mecanico` DISABLE KEYS */;
/*!40000 ALTER TABLE `mecanico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puesto`
--

DROP TABLE IF EXISTS `puesto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `puesto` (
  `cve_puesto` int NOT NULL,
  `nombre` varchar(35) NOT NULL,
  PRIMARY KEY (`cve_puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puesto`
--

LOCK TABLES `puesto` WRITE;
/*!40000 ALTER TABLE `puesto` DISABLE KEYS */;
/*!40000 ALTER TABLE `puesto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taller`
--

DROP TABLE IF EXISTS `taller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taller` (
  `rfc_taller` varchar(15) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `calle` varchar(35) NOT NULL,
  `num_dom` int DEFAULT NULL,
  `colonia` varchar(35) NOT NULL,
  `localidad` varchar(35) NOT NULL,
  `municipio` varchar(35) NOT NULL,
  `estado` varchar(35) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `tarifa` float DEFAULT NULL,
  PRIMARY KEY (`rfc_taller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taller`
--

LOCK TABLES `taller` WRITE;
/*!40000 ALTER TABLE `taller` DISABLE KEYS */;
/*!40000 ALTER TABLE `taller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajos`
--

DROP TABLE IF EXISTS `trabajos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trabajos` (
  `ID` varchar(10) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `horas_rep` float DEFAULT NULL,
  `fecha_rep` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `placa` (`placa`),
  KEY `RFC` (`RFC`),
  CONSTRAINT `trabajos_ibfk_1` FOREIGN KEY (`placa`) REFERENCES `auto` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trabajos_ibfk_2` FOREIGN KEY (`RFC`) REFERENCES `mecanico` (`RFC`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajos`
--

LOCK TABLES `trabajos` WRITE;
/*!40000 ALTER TABLE `trabajos` DISABLE KEYS */;
/*!40000 ALTER TABLE `trabajos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'taller_mecanico'
--

--
-- Dumping routines for database 'taller_mecanico'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-20 20:18:10
