-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: db_pendaftaran_kharisma
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `calon_siswa`
--

DROP TABLE IF EXISTS `calon_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(64) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `jenis_kelamin` varchar(16) DEFAULT NULL,
  `agama` varchar(16) DEFAULT NULL,
  `sekolah_asal` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calon_siswa`
--

LOCK TABLES `calon_siswa` WRITE;
/*!40000 ALTER TABLE `calon_siswa` DISABLE KEYS */;
INSERT INTO `calon_siswa` VALUES (8,'Basri','Jakarta','Laki-laki','Islam','Kharisma'),(9,'Aga','Sapiria','Perempuan','Atheis','Maccini Baru'),(10,'Lenovo','Jakarta','Laki-laki','Hindu','Sony Ericsson'),(11,'Tablet','Jakarta','Perempuan','Budha','Toro'),(12,'Shikamaru','Konoha','Laki-laki','Atheis','Jounin'),(14,'Waode','Kuda','Perempuan','Hindu','Maccini'),(16,'Hinata','Konoha','Perempuan','Atheis','Chunin'),(19,'Halimun','Hasihi','Laki-laki','Atheis','BOtoto'),(21,'Basri','Jakarta','Laki-laki','Islam','Kharisma'),(22,'Basri','Jakarta','Laki-laki','Islam',' x Kharisma'),(24,'Basri Yasin','Jakarta','Laki-laki','Islam','Kharisma'),(25,'Waode Makani Daga','Sapiria','Perempuan','Islam','SMA SATRIA MAKASSAR'),(26,'Botol','Kulkas','Laki-laki','Budha','Listrik'),(27,'Basri','Jakarta','Laki-laki','Islam','Kharisma');
/*!40000 ALTER TABLE `calon_siswa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-27 13:08:07
