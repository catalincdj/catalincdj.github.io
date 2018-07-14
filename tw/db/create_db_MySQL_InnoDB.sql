-- SQL Script for MySQL with InnoDB

--
-- Table structure for table `curse`
--

DROP TABLE IF EXISTS `curse`;
CREATE TABLE `curse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(45) NOT NULL,
  `vreme` varchar(45) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `detalii_cursa`
--

DROP TABLE IF EXISTS `detalii_cursa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalii_cursa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cursa` int(11) NOT NULL,
  `nume_jocheu` varchar(45) NOT NULL,
  `nume_cal` varchar(45) NOT NULL,
  `cota` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nume` varchar(128) NOT NULL,
  `prenume` varchar(128) NOT NULL,
  `adresa` varchar(128) NOT NULL,
  `balanta` decimal(10,0) NOT NULL,
  `rol` varchar(10) NOT NULL,
  `data_nastere` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
