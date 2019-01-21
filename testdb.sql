CREATE DATABASE IF NOT EXISTS testdb;
USE testdb;
-- Table structure for table `TestTable`
DROP TABLE IF EXISTS `TestTable`;
CREATE TABLE `TestTable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `column` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
-- Dumping data for table `TestTable`
INSERT INTO `TestTable` VALUES (1,'first'),(2,'second'),(3,'third');
