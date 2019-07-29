-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: maderosuit
-- ------------------------------------------------------
-- Server version	5.7.14-log

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
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Cliente 1','2019-04-27 22:14:56','0000-00-00 00:00:00',24,NULL,1);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `clientedireccion`
--

LOCK TABLES `clientedireccion` WRITE;
/*!40000 ALTER TABLE `clientedireccion` DISABLE KEYS */;
INSERT INTO `clientedireccion` VALUES (1,1,'Cliente','2019-04-27 22:14:56','0000-00-00 00:00:00',24,NULL,1,1);
/*!40000 ALTER TABLE `clientedireccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `clientetelefono`
--

LOCK TABLES `clientetelefono` WRITE;
/*!40000 ALTER TABLE `clientetelefono` DISABLE KEYS */;
INSERT INTO `clientetelefono` VALUES (1,1,'1','2019-04-27 22:14:56','0000-00-00 00:00:00',24,NULL,1,1);
/*!40000 ALTER TABLE `clientetelefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `horarios`
--

LOCK TABLES `horarios` WRITE;
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `servicio`
--

LOCK TABLES `servicio` WRITE;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `taxista`
--

LOCK TABLES `taxista` WRITE;
/*!40000 ALTER TABLE `taxista` DISABLE KEYS */;
INSERT INTO `taxista` VALUES (43,'e','e','e','234','2016-10-30',23,23,'2016-10-08 08:27:59','0000-00-00 00:00:00',24,NULL,1,'e',123,NULL);
/*!40000 ALTER TABLE `taxista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `taxistadirección`
--

LOCK TABLES `taxistadirección` WRITE;
/*!40000 ALTER TABLE `taxistadirección` DISABLE KEYS */;
/*!40000 ALTER TABLE `taxistadirección` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `taxistatelefono`
--

LOCK TABLES `taxistatelefono` WRITE;
/*!40000 ALTER TABLE `taxistatelefono` DISABLE KEYS */;
INSERT INTO `taxistatelefono` VALUES (4,43,'13616837','Celular','2016-10-08 08:27:59','0000-00-00 00:00:00',24,NULL,1,1);
/*!40000 ALTER TABLE `taxistatelefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tiposervicio`
--

LOCK TABLES `tiposervicio` WRITE;
/*!40000 ALTER TABLE `tiposervicio` DISABLE KEYS */;
INSERT INTO `tiposervicio` VALUES (9,'Normal',150,'2016-10-08 08:15:54','2016-10-08 08:15:54',24,24,0),(10,'Ejecutivo',350,'2016-10-08 08:16:17','2016-10-08 08:16:17',24,24,0),(11,'Normal',89,'2016-10-08 08:17:09','2016-10-08 08:17:09',24,24,0);
/*!40000 ALTER TABLE `tiposervicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (24,'Brandon','Espinosa','Ramirez','administrador','2016-10-08 07:53:51','0000-00-00 00:00:00',1,'123','admin'),(25,'as','as','as','administrador','2016-10-08 08:31:00','0000-00-00 00:00:00',1,'df211ccdd94a63e0bcb9e6ae427a249484a49d60','as');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'maderosuit'
--
/*!50003 DROP PROCEDURE IF EXISTS `insert_cliente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_cliente`(
	IN nombreCliente varchar(200),
    IN usuarioAlta int)
Begin
Insert into cliente (nombre, usuarioAlta, activo)
Values (nombreCliente, usuarioAlta, true);
End ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-18 22:15:30
