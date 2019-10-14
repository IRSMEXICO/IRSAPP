-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: localhost    Database: irs
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cat_actividades`
--

DROP TABLE IF EXISTS `cat_actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_actividades` (
  `id_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) DEFAULT NULL,
  `tipo_actividad` varchar(150) NOT NULL,
  PRIMARY KEY (`id_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_actividades`
--

LOCK TABLES `cat_actividades` WRITE;
/*!40000 ALTER TABLE `cat_actividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_captura`
--

DROP TABLE IF EXISTS `cat_captura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_captura` (
  `id_captura` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_captura` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_captura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_captura`
--

LOCK TABLES `cat_captura` WRITE;
/*!40000 ALTER TABLE `cat_captura` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_captura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_cliente`
--

DROP TABLE IF EXISTS `cat_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(25) DEFAULT '',
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_cliente`
--

LOCK TABLES `cat_cliente` WRITE;
/*!40000 ALTER TABLE `cat_cliente` DISABLE KEYS */;
INSERT INTO `cat_cliente` VALUES (1,'prueba','../../content/img/cliente/IMG_1.jpg'),(2,'poot',''),(3,'identi','../../content/img/piezas/IMG_Array.jpg');
/*!40000 ALTER TABLE `cat_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_cliente_area`
--

DROP TABLE IF EXISTS `cat_cliente_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_cliente_area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(25) DEFAULT '',
  `id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_cliente_area`
--

LOCK TABLES `cat_cliente_area` WRITE;
/*!40000 ALTER TABLE `cat_cliente_area` DISABLE KEYS */;
INSERT INTO `cat_cliente_area` VALUES (1,'abanicos',2);
/*!40000 ALTER TABLE `cat_cliente_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_cliente_pieza`
--

DROP TABLE IF EXISTS `cat_cliente_pieza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_cliente_pieza` (
  `id_pieza` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(25) DEFAULT NULL,
  `piezas` varchar(25) DEFAULT '',
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pieza`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_cliente_pieza`
--

LOCK TABLES `cat_cliente_pieza` WRITE;
/*!40000 ALTER TABLE `cat_cliente_pieza` DISABLE KEYS */;
INSERT INTO `cat_cliente_pieza` VALUES (3,2,'pruebaddddd','../../content/img/piezas/IMG_pruebaddddd.jpg');
/*!40000 ALTER TABLE `cat_cliente_pieza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_cliente_usuario`
--

DROP TABLE IF EXISTS `cat_cliente_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_cliente_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT '',
  `email` varchar(50) DEFAULT '',
  `cuenta` varchar(25) DEFAULT '',
  `contra` varchar(25) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_cliente_usuario`
--

LOCK TABLES `cat_cliente_usuario` WRITE;
/*!40000 ALTER TABLE `cat_cliente_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_cliente_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_colaboradores`
--

DROP TABLE IF EXISTS `cat_colaboradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_colaboradores` (
  `Id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(50) DEFAULT '',
  `email` varchar(50) DEFAULT '',
  `cuenta` varchar(30) DEFAULT '',
  `contra` varchar(25) DEFAULT '',
  `rol` varchar(30) DEFAULT '',
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_colaboradores`
--

LOCK TABLES `cat_colaboradores` WRITE;
/*!40000 ALTER TABLE `cat_colaboradores` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_colaboradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_contrato`
--

DROP TABLE IF EXISTS `cat_contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_contrato` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_contrato` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_contrato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_contrato`
--

LOCK TABLES `cat_contrato` WRITE;
/*!40000 ALTER TABLE `cat_contrato` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_contrato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_moneda`
--

DROP TABLE IF EXISTS `cat_moneda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_moneda` (
  `id_moneda` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_moneda` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_moneda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_moneda`
--

LOCK TABLES `cat_moneda` WRITE;
/*!40000 ALTER TABLE `cat_moneda` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_moneda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_motivo_tm`
--

DROP TABLE IF EXISTS `cat_motivo_tm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_motivo_tm` (
  `id_motivo_tm` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_motivo_tm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_motivo_tm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_motivo_tm`
--

LOCK TABLES `cat_motivo_tm` WRITE;
/*!40000 ALTER TABLE `cat_motivo_tm` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_motivo_tm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_rate`
--

DROP TABLE IF EXISTS `cat_rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_rate` (
  `id_rate` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_rate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_rate`
--

LOCK TABLES `cat_rate` WRITE;
/*!40000 ALTER TABLE `cat_rate` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_registro`
--

DROP TABLE IF EXISTS `cat_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_registro` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_registro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_registro`
--

LOCK TABLES `cat_registro` WRITE;
/*!40000 ALTER TABLE `cat_registro` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_turno`
--

DROP TABLE IF EXISTS `cat_turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_turno` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_turno` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_turno`
--

LOCK TABLES `cat_turno` WRITE;
/*!40000 ALTER TABLE `cat_turno` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_turno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `fecha_ingreso` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usuario` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `contrasena` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `rol` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'prueba','prueba@prueba.com.mx','prueba','prueba','1');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-05 23:18:07
