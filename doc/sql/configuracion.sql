/*
MySQL Backup
Source Server Version: 5.5.27
Source Database: vinoteca
Date: 30/03/2015 02:44:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `configuracion`
-- ----------------------------
DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descuento_global` decimal(10,0) DEFAULT NULL,
  `productos_por_pagina` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `configuracion` VALUES ('18','10','2,3,4');
