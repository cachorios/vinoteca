/*
Navicat MySQL Data Transfer

Source Server         : MySqlConneccion
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : vinoteca

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-10-29 06:46:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_AD8A54A9F85E0677` (`username`),
  UNIQUE KEY `UNIQ_AD8A54A9E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('1', 'admin', 'info@expresojet.com.ar', '$2y$13$XkKFUuMuLQz0HuOFG90H3.bcwevo9jQLTP1quUPLIVyx6kaaRlEc6', '[\"ROLE_ADMIN\"]');

-- ----------------------------
-- Table structure for `categoria`
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `nombre` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci,
  `orden` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `root` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4E10122D727ACA70` (`parent_id`),
  KEY `IDX_4E10122DDB38439E` (`usuario_id`),
  CONSTRAINT `FK_4E10122D727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4E10122DDB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('35', null, null, 'Vino', 'vino', 'El vino (del latín vinum) es una bebida obtenida de la uva (especie Vitis vinifera) mediante la fermentación alcohólica de su mosto o zumo.2 La fermentación se produce por la acción metabólica de levaduras que transforman los azúcares del fruto en alcohol etílico y gas en forma de dióxido de carbono. El azúcar y los ácidos que posee la fruta Vitis vinifera hace que sean suficientes para el desarrollo de la fermentación. No obstante, el vino es una suma de un conjunto de factores ambientales: clima, latitud, altitud, horas de luz y temperatura, entre varios otros.3 Aproximadamente un 66% de la recolección mundial de la uva se dedica a la producción vinícola; el resto es para su consumo como fruta.4 A pesar de ello el cultivo de la vid cubre tan sólo un 0,5% del suelo cultivable en el mundo.5 El cultivo de la vid se ha asociado a lugares con un clima mediterráneo.\r\n\r\nSe da el nombre de «vino» únicamente al líquido resultante de la fermentación alcohólica, total o parcial, del zumo de uvas, sin adición de ninguna sustancia. En muchas legislaciones se considera sólo como vino a la bebida fermentada obtenida de Vitis vinifera, pese a que se obtienen bebidas semejantes de otras especies como la Vitis labrusca, Vitis rupestris, etc. El conocimiento de la ciencia particular de la elaboración del vino se denomina enología (sin considerar los procesos de cultivo de la vid). La ciencia que trata tan sólo de la biología de la vid, así como de su cultivo, se denomina ampelología.2', '10', '0', '35', '1', '1', 'vino.png', '2015-02-13 20:12:49');
INSERT INTO `categoria` VALUES ('36', '35', '1', 'Tintos1', 'tintos1', 'El vino tinto es un tipo de vino procedente mayormente de mostos de uvas tintas, con la elaboración pertinente para conseguir la difusión de la materia colorante que contienen los hollejos de la uva. En función del tiempo de envejecimiento que se realice en la barrica y en la botella, pueden obtenerse vinos jóvenes, crianzas, reservas o grandes reservas.', '20', '1', '35', '1', '1', 'tintos1.jpg', '2015-05-23 04:14:49');
INSERT INTO `categoria` VALUES ('37', '35', null, 'Blancos', 'blancos', 'El vino blanco es un tipo de vino obtenido por la fermentación de mosto sin cascarillas ni semillas, elaborado a partir de variedades de uvas blancas (blanco de blancos) o de negros de pulpa blanca (blanco de negros).\r\n\r\nSi el mosto tiene más de 272 gramos de azúcar por litro, se obtendrá un vino dulce natural (con un mínimo de 8 grados). Si tiene menos de 5 y el dulce no se nota en el paladar, entonces se trata de un blanco seco.\r\n\r\nNo se debe utilizar nunca a menos de 8 grados, ya que si la temperatura fuera inferior, la copa se empaña fácilmente y no se pueden apreciar bien la transparencia y los matices del color.\r\n\r\nSe cultiva al menos desde los últimos 2500 años. Ha acompañado el desarrollo económico y colonizado todo el mundo cuyos habitantes son bebedores de vino: Europa, América, Oceanía, y en menor medida Asia y África por razones religiosas y climáticas', '30', '1', '35', '1', '1', 'blancos.png', '2015-02-13 20:26:28');
INSERT INTO `categoria` VALUES ('38', null, null, 'Champagne y Espumantes', 'champagne-y-espumantes', 'Los vinos espumosos, espumantes o de aguja son vinos con gas disuelto. El gas se consigue haciendo que haya una segunda fermentación dentro de la botella cerrada (o en algunos casos en depósitos cerrados de algunos hectolitros), el CO2 que se produce no puede escapar y se disuelve en el líquido. La segunda fermentación en botella se puede conseguir añadiendo azúcar, embotellando el vino antes de que haya terminado de fermentar o cerrando la cuba de fermentación antes de que termine esta.\r\n\r\nUn caso aparte son los vinos gasificados a los cuales se les añade artificialmente el gas a la manera de los refrescos gaseosos.\r\n\r\nSólo si siguen el método tradicional (también llamado método champenoise), se podría considerar champán o equivalente, y aun así sólo se permite el nombre de champán a los que tienen la denominación de origen en la región correspondiente de Francia. Los elaborados en España se llaman cavas, utilizando también el método tradicional para su elaboración. La primacía en vinos espumosos españoles corresponde a la localidad de San Sadurní de Noya, perteneciente a la comarca del Alto Penedés, en ella se iniciaron las elaboraciones y se las llevó a la más alta perfección de los métodos seguidos en la región francesa de la Champagne, y en ella se obtiene la mayor parte de la producción nacional. En proporciones menores (menos del 1%, en realidad) se preparan espumosos en Aragón, Castilla y León, Castilla-La Mancha, Extremadura, La Rioja, País Vasco, Región de Murcia, Navarra y recientemente en Andalucía', '40', '0', '38', '1', '1', 'champagne-y-espumantes.jpg', '2015-02-13 23:46:57');
INSERT INTO `categoria` VALUES ('39', null, null, 'Cervezas', 'cervezas', 'La cerveza (del celto-latín cerevisĭa1 ) es una bebida alcohólica, no destilada, de sabor amargo que se fabrica con granos de cebada germinados u otros cereales cuyo almidón es fermentado en agua con levadura (básicamente Saccharomyces cerevisiae o Saccharomyces pastorianus) y frecuentemente aromatizado con lúpulo, entre otras plantas.1 2\r\n\r\nDe ella se conocen múltiples variantes con una amplia gama de matices debidos a las diferentes formas de elaboración y a los ingredientes utilizados. Generalmente presenta un color ambarino con tonos que van del amarillo oro al negro pasando por los marrones rojizos. Se la considera «gaseosa» (contiene CO2 disuelto en saturación que se manifiesta en forma de burbujas a la presión ambiente) y suele estar coronada de una espuma más o menos persistente. Su aspecto puede ser cristalino o turbio. Su graduación alcohólica puede alcanzar hasta cerca de los 30 % vol., aunque principalmente se encuentra entre los 3 % y los 9 % vol.', '10', '0', '39', '1', '1', 'cervezas.jpg', '2015-02-13 23:56:32');

-- ----------------------------
-- Table structure for `cliente`
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `apellido` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `movil` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `del_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `del_dir1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `del_dir2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `del_ciudad` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `del_codPostal` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `del_pais` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `del_pcia` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F41C9B25DB38439E` (`usuario_id`),
  CONSTRAINT `FK_3BA1A2B9DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cliente
-- ----------------------------

-- ----------------------------
-- Table structure for `configuracion`
-- ----------------------------
DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descuento_global` decimal(10,0) DEFAULT NULL,
  `productos_por_pagina` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of configuracion
-- ----------------------------
INSERT INTO `configuracion` VALUES ('1', '0', '4');

-- ----------------------------
-- Table structure for `contenido`
-- ----------------------------
DROP TABLE IF EXISTS `contenido`;
CREATE TABLE `contenido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ubicacion` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contenido_name_idx` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contenido
-- ----------------------------
INSERT INTO `contenido` VALUES ('1', 'ultimos-productos', '0', '2', '4', '1');
INSERT INTO `contenido` VALUES ('2', 'Carrusel Principal1', '0', '1', '0', '1');
INSERT INTO `contenido` VALUES ('3', 'Imagen Oferta 1111', '0', '3', '0', '1');
INSERT INTO `contenido` VALUES ('4', 'Imagen xx', '0', '4', '1', '1');

-- ----------------------------
-- Table structure for `contenidodetalle`
-- ----------------------------
DROP TABLE IF EXISTS `contenidodetalle`;
CREATE TABLE `contenidodetalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenido_id` int(11) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_85BD32697FDA517C` (`contenido_id`),
  CONSTRAINT `FK_85BD32697FDA517C` FOREIGN KEY (`contenido_id`) REFERENCES `contenido` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contenidodetalle
-- ----------------------------

-- ----------------------------
-- Table structure for `contenido_detalle`
-- ----------------------------
DROP TABLE IF EXISTS `contenido_detalle`;
CREATE TABLE `contenido_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenido_id` int(11) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3116A0FF7FDA517C` (`contenido_id`),
  CONSTRAINT `FK_3116A0FF7FDA517C` FOREIGN KEY (`contenido_id`) REFERENCES `contenido` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contenido_detalle
-- ----------------------------
INSERT INTO `contenido_detalle` VALUES ('1', '2', '1', 'carrusel-principal-555dda1b6602c.jpg', '#1');
INSERT INTO `contenido_detalle` VALUES ('2', '2', '2', 'carrusel-principal-555dda1b66dfc.jpg', '#2');
INSERT INTO `contenido_detalle` VALUES ('5', '4', '1', 'imagen-xx-555ddace9e738.jpg', '1');

-- ----------------------------
-- Table structure for `factura`
-- ----------------------------
DROP TABLE IF EXISTS `factura`;
CREATE TABLE `factura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contenidoHtml` varchar(16000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of factura
-- ----------------------------

-- ----------------------------
-- Table structure for `fos_user`
-- ----------------------------
DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `nombre` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `movil` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fos_user
-- ----------------------------
INSERT INTO `fos_user` VALUES ('1', 'albertoe2003@gmail.com', 'albertoe2003@gmail.com', 'albertoe2003@gmail.com', 'albertoe2003@gmail.com', '1', 'ne90fb7lpdco0ok4k0so8ccgc8cg8wk', 'kaKYbqXBx6Jrm7y1z4on8sIsFjUn1bFYWikwBV6PACIpQaAfaew4IbLA/E7xGYKUaaAvjrf16v+uA3l7cjEDvQ==', '2015-10-19 17:18:33', '0', '0', null, null, null, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', '0', null, 'Alberto Voeffray', null, null, 'user554ceab7c2250.png');
INSERT INTO `fos_user` VALUES ('2', 'lmanfredini@expresojet.com.ar', 'lmanfredini@expresojet.com.ar', 'lmanfredini@expresojet.com.ar', 'lmanfredini@expresojet.com.ar', '1', 'to55dz2qyas0k8g84c8osww8scgc80c', 'Zf1PpPo9yJmtSfGyaJ1m2HVQtqIkd8/hQaVUWAMXO/iveAs8MfURsM/a8pNUvnGEL+k7y0B9X9nU9F+Ea/9ZVA==', '2015-05-07 12:29:34', '0', '0', null, null, null, 'a:2:{i:0;s:12:\"ROLE_USUARIO\";i:1;s:10:\"ROLE_ADMIN\";}', '0', null, 'Luis Manfredini', null, null, null);
INSERT INTO `fos_user` VALUES ('3', 'alfa@expresojet.com.ar', 'alfa@expresojet.com.ar', 'alfa@expresojet.com.ar', 'alfa@expresojet.com.ar', '1', 'bkxh9vzlczs4kcc0kgs08wgog4cckk0', '56DSOaxptzU/QIOVaHX1d4pn+vrvCuucNIWEFuKs7ol3tYWwnCOPbqfTJozGHGtKtXszSVA/AYcQEhWryHwIXQ==', '2015-05-07 12:28:54', '0', '0', null, null, null, 'a:2:{i:0;s:12:\"ROLE_USUARIO\";i:1;s:10:\"ROLE_ADMIN\";}', '0', null, '11', '3764-720204', null, null);
INSERT INTO `fos_user` VALUES ('4', 'roberto', 'roberto', 'roberto@gmail.com', 'roberto@gmail.com', '0', 'q4x3dys848gss8g00gwscgwo0csccg0', '+eOyYfITD3rn9TlHdvQUK8UmU1o5p7N0IeLu0vQVIj1ZRYdwyaECXt3az+bcw21I18EE7PxiiViPuMhCFdxJ9g==', null, '0', '0', null, '7-V3dmzSSOxQrwTxACF68fOOf6oH37pTR4pDsqdndRE', null, 'a:0:{}', '0', null, null, null, null, null);
INSERT INTO `fos_user` VALUES ('6', 'cachorios', 'cachorios', 'cachorios@gmail.com', 'cachorios@gmail.com', '1', '10dd23nynnk00cw8g0ks0w0k0c4cc4w', 'GN7HJezvWszTEDQLbqC7puY56pylY3mhh1NKW/wvk6O+OXiaYOZyGCykL3j6KDwhI/sraYz0uLHqdaOC4HYXmg==', '2015-10-19 17:41:05', '0', '0', null, null, null, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', '0', null, null, null, null, null);

-- ----------------------------
-- Table structure for `item`
-- ----------------------------
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orden_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `nroLinea` int(11) DEFAULT NULL,
  `producto` int(11) DEFAULT NULL,
  `precioSinIva` decimal(10,0) DEFAULT NULL,
  `precioConIva` decimal(10,0) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BF298A209750851F` (`orden_id`),
  CONSTRAINT `FK_BF298A209750851F` FOREIGN KEY (`orden_id`) REFERENCES `orden` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of item
-- ----------------------------

-- ----------------------------
-- Table structure for `metadato_producto`
-- ----------------------------
DROP TABLE IF EXISTS `metadato_producto`;
CREATE TABLE `metadato_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) DEFAULT NULL,
  `nombre` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `predeterminado` longtext COLLATE utf8_unicode_ci,
  `filtrable` int(11) DEFAULT NULL,
  `requerido` tinyint(1) DEFAULT NULL,
  `widget` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `lista_valores` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_A863D583397707A` (`categoria_id`),
  CONSTRAINT `FK_A863D583397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of metadato_producto
-- ----------------------------
INSERT INTO `metadato_producto` VALUES ('61', '36', 'varietal', null, '1', '1', '1', '10', null);
INSERT INTO `metadato_producto` VALUES ('62', '36', 'cosecha', null, '2', '1', '1', '20', null);
INSERT INTO `metadato_producto` VALUES ('63', '36', 'Bodega', null, '2', '1', '1', '30', null);
INSERT INTO `metadato_producto` VALUES ('64', '36', 'volumen', null, '2', '1', '1', '40', null);
INSERT INTO `metadato_producto` VALUES ('65', '36', 'Pais Origen', null, '0', '1', '1', '50', null);
INSERT INTO `metadato_producto` VALUES ('66', '36', 'Region Origen', null, '2', '1', '1', '60', null);
INSERT INTO `metadato_producto` VALUES ('67', '36', 'Armonizacion', null, '0', '0', '1', '70', 'alfa');
INSERT INTO `metadato_producto` VALUES ('68', '36', 'Añejamiento', null, '0', '1', '1', '25', null);

-- ----------------------------
-- Table structure for `orden`
-- ----------------------------
DROP TABLE IF EXISTS `orden`;
CREATE TABLE `orden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `factura_id` int(11) DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estadoFecha` datetime DEFAULT NULL,
  `importeSinIva` decimal(10,0) DEFAULT NULL,
  `importeConIva` decimal(10,0) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `upatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_20E9E0D3F04F795F` (`factura_id`),
  CONSTRAINT `FK_20E9E0D3F04F795F` FOREIGN KEY (`factura_id`) REFERENCES `factura` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of orden
-- ----------------------------

-- ----------------------------
-- Table structure for `parametro_localidad`
-- ----------------------------
DROP TABLE IF EXISTS `parametro_localidad`;
CREATE TABLE `parametro_localidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provincia_id` int(11) DEFAULT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ABDEC01D4E7121AF` (`provincia_id`),
  CONSTRAINT `FK_ABDEC01D4E7121AF` FOREIGN KEY (`provincia_id`) REFERENCES `parametro_provincia` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2383 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of parametro_localidad
-- ----------------------------
INSERT INTO `parametro_localidad` VALUES ('1', '1', '25 de Mayo');
INSERT INTO `parametro_localidad` VALUES ('2', '1', '3 de febrero');
INSERT INTO `parametro_localidad` VALUES ('3', '1', 'A. Alsina');
INSERT INTO `parametro_localidad` VALUES ('4', '1', 'A. Gonzáles Cháves');
INSERT INTO `parametro_localidad` VALUES ('5', '1', 'Aguas Verdes');
INSERT INTO `parametro_localidad` VALUES ('6', '1', 'Alberti');
INSERT INTO `parametro_localidad` VALUES ('7', '1', 'Arrecifes');
INSERT INTO `parametro_localidad` VALUES ('8', '1', 'Ayacucho');
INSERT INTO `parametro_localidad` VALUES ('9', '1', 'Azul');
INSERT INTO `parametro_localidad` VALUES ('10', '1', 'Bahía Blanca');
INSERT INTO `parametro_localidad` VALUES ('11', '1', 'Balcarce');
INSERT INTO `parametro_localidad` VALUES ('12', '1', 'Baradero');
INSERT INTO `parametro_localidad` VALUES ('13', '1', 'Benito Juárez');
INSERT INTO `parametro_localidad` VALUES ('14', '1', 'Berisso');
INSERT INTO `parametro_localidad` VALUES ('15', '1', 'Bolívar');
INSERT INTO `parametro_localidad` VALUES ('16', '1', 'Bragado');
INSERT INTO `parametro_localidad` VALUES ('17', '1', 'Brandsen');
INSERT INTO `parametro_localidad` VALUES ('18', '1', 'Campana');
INSERT INTO `parametro_localidad` VALUES ('19', '1', 'Cañuelas');
INSERT INTO `parametro_localidad` VALUES ('20', '1', 'Capilla del Señor');
INSERT INTO `parametro_localidad` VALUES ('21', '1', 'Capitán Sarmiento');
INSERT INTO `parametro_localidad` VALUES ('22', '1', 'Carapachay');
INSERT INTO `parametro_localidad` VALUES ('23', '1', 'Carhue');
INSERT INTO `parametro_localidad` VALUES ('24', '1', 'Cariló');
INSERT INTO `parametro_localidad` VALUES ('25', '1', 'Carlos Casares');
INSERT INTO `parametro_localidad` VALUES ('26', '1', 'Carlos Tejedor');
INSERT INTO `parametro_localidad` VALUES ('27', '1', 'Carmen de Areco');
INSERT INTO `parametro_localidad` VALUES ('28', '1', 'Carmen de Patagones');
INSERT INTO `parametro_localidad` VALUES ('29', '1', 'Castelli');
INSERT INTO `parametro_localidad` VALUES ('30', '1', 'Chacabuco');
INSERT INTO `parametro_localidad` VALUES ('31', '1', 'Chascomús');
INSERT INTO `parametro_localidad` VALUES ('32', '1', 'Chivilcoy');
INSERT INTO `parametro_localidad` VALUES ('33', '1', 'Colón');
INSERT INTO `parametro_localidad` VALUES ('34', '1', 'Coronel Dorrego');
INSERT INTO `parametro_localidad` VALUES ('35', '1', 'Coronel Pringles');
INSERT INTO `parametro_localidad` VALUES ('36', '1', 'Coronel Rosales');
INSERT INTO `parametro_localidad` VALUES ('37', '1', 'Coronel Suarez');
INSERT INTO `parametro_localidad` VALUES ('38', '1', 'Costa Azul');
INSERT INTO `parametro_localidad` VALUES ('39', '1', 'Costa Chica');
INSERT INTO `parametro_localidad` VALUES ('40', '1', 'Costa del Este');
INSERT INTO `parametro_localidad` VALUES ('41', '1', 'Costa Esmeralda');
INSERT INTO `parametro_localidad` VALUES ('42', '1', 'Daireaux');
INSERT INTO `parametro_localidad` VALUES ('43', '1', 'Darregueira');
INSERT INTO `parametro_localidad` VALUES ('44', '1', 'Del Viso');
INSERT INTO `parametro_localidad` VALUES ('45', '1', 'Dolores');
INSERT INTO `parametro_localidad` VALUES ('46', '1', 'Don Torcuato');
INSERT INTO `parametro_localidad` VALUES ('47', '1', 'Ensenada');
INSERT INTO `parametro_localidad` VALUES ('48', '1', 'Escobar');
INSERT INTO `parametro_localidad` VALUES ('49', '1', 'Exaltación de la Cruz');
INSERT INTO `parametro_localidad` VALUES ('50', '1', 'Florentino Ameghino');
INSERT INTO `parametro_localidad` VALUES ('51', '1', 'Garín');
INSERT INTO `parametro_localidad` VALUES ('52', '1', 'Gral. Alvarado');
INSERT INTO `parametro_localidad` VALUES ('53', '1', 'Gral. Alvear');
INSERT INTO `parametro_localidad` VALUES ('54', '1', 'Gral. Arenales');
INSERT INTO `parametro_localidad` VALUES ('55', '1', 'Gral. Belgrano');
INSERT INTO `parametro_localidad` VALUES ('56', '1', 'Gral. Guido');
INSERT INTO `parametro_localidad` VALUES ('57', '1', 'Gral. Lamadrid');
INSERT INTO `parametro_localidad` VALUES ('58', '1', 'Gral. Las Heras');
INSERT INTO `parametro_localidad` VALUES ('59', '1', 'Gral. Lavalle');
INSERT INTO `parametro_localidad` VALUES ('60', '1', 'Gral. Madariaga');
INSERT INTO `parametro_localidad` VALUES ('61', '1', 'Gral. Pacheco');
INSERT INTO `parametro_localidad` VALUES ('62', '1', 'Gral. Paz');
INSERT INTO `parametro_localidad` VALUES ('63', '1', 'Gral. Pinto');
INSERT INTO `parametro_localidad` VALUES ('64', '1', 'Gral. Pueyrredón');
INSERT INTO `parametro_localidad` VALUES ('65', '1', 'Gral. Rodríguez');
INSERT INTO `parametro_localidad` VALUES ('66', '1', 'Gral. Viamonte');
INSERT INTO `parametro_localidad` VALUES ('67', '1', 'Gral. Villegas');
INSERT INTO `parametro_localidad` VALUES ('68', '1', 'Guaminí');
INSERT INTO `parametro_localidad` VALUES ('69', '1', 'Guernica');
INSERT INTO `parametro_localidad` VALUES ('70', '1', 'Hipólito Yrigoyen');
INSERT INTO `parametro_localidad` VALUES ('71', '1', 'Ing. Maschwitz');
INSERT INTO `parametro_localidad` VALUES ('72', '1', 'Junín');
INSERT INTO `parametro_localidad` VALUES ('73', '1', 'La Plata');
INSERT INTO `parametro_localidad` VALUES ('74', '1', 'Laprida');
INSERT INTO `parametro_localidad` VALUES ('75', '1', 'Las Flores');
INSERT INTO `parametro_localidad` VALUES ('76', '1', 'Las Toninas');
INSERT INTO `parametro_localidad` VALUES ('77', '1', 'Leandro N. Alem');
INSERT INTO `parametro_localidad` VALUES ('78', '1', 'Lincoln');
INSERT INTO `parametro_localidad` VALUES ('79', '1', 'Loberia');
INSERT INTO `parametro_localidad` VALUES ('80', '1', 'Lobos');
INSERT INTO `parametro_localidad` VALUES ('81', '1', 'Los Cardales');
INSERT INTO `parametro_localidad` VALUES ('82', '1', 'Los Toldos');
INSERT INTO `parametro_localidad` VALUES ('83', '1', 'Lucila del Mar');
INSERT INTO `parametro_localidad` VALUES ('84', '1', 'Luján');
INSERT INTO `parametro_localidad` VALUES ('85', '1', 'Magdalena');
INSERT INTO `parametro_localidad` VALUES ('86', '1', 'Maipú');
INSERT INTO `parametro_localidad` VALUES ('87', '1', 'Mar Chiquita');
INSERT INTO `parametro_localidad` VALUES ('88', '1', 'Mar de Ajó');
INSERT INTO `parametro_localidad` VALUES ('89', '1', 'Mar de las Pampas');
INSERT INTO `parametro_localidad` VALUES ('90', '1', 'Mar del Plata');
INSERT INTO `parametro_localidad` VALUES ('91', '1', 'Mar del Tuyú');
INSERT INTO `parametro_localidad` VALUES ('92', '1', 'Marcos Paz');
INSERT INTO `parametro_localidad` VALUES ('93', '1', 'Mercedes');
INSERT INTO `parametro_localidad` VALUES ('94', '1', 'Miramar');
INSERT INTO `parametro_localidad` VALUES ('95', '1', 'Monte');
INSERT INTO `parametro_localidad` VALUES ('96', '1', 'Monte Hermoso');
INSERT INTO `parametro_localidad` VALUES ('97', '1', 'Munro');
INSERT INTO `parametro_localidad` VALUES ('98', '1', 'Navarro');
INSERT INTO `parametro_localidad` VALUES ('99', '1', 'Necochea');
INSERT INTO `parametro_localidad` VALUES ('100', '1', 'Olavarría');
INSERT INTO `parametro_localidad` VALUES ('101', '1', 'Partido de la Costa');
INSERT INTO `parametro_localidad` VALUES ('102', '1', 'Pehuajó');
INSERT INTO `parametro_localidad` VALUES ('103', '1', 'Pellegrini');
INSERT INTO `parametro_localidad` VALUES ('104', '1', 'Pergamino');
INSERT INTO `parametro_localidad` VALUES ('105', '1', 'Pigüé');
INSERT INTO `parametro_localidad` VALUES ('106', '1', 'Pila');
INSERT INTO `parametro_localidad` VALUES ('107', '1', 'Pilar');
INSERT INTO `parametro_localidad` VALUES ('108', '1', 'Pinamar');
INSERT INTO `parametro_localidad` VALUES ('109', '1', 'Pinar del Sol');
INSERT INTO `parametro_localidad` VALUES ('110', '1', 'Polvorines');
INSERT INTO `parametro_localidad` VALUES ('111', '1', 'Pte. Perón');
INSERT INTO `parametro_localidad` VALUES ('112', '1', 'Puán');
INSERT INTO `parametro_localidad` VALUES ('113', '1', 'Punta Indio');
INSERT INTO `parametro_localidad` VALUES ('114', '1', 'Ramallo');
INSERT INTO `parametro_localidad` VALUES ('115', '1', 'Rauch');
INSERT INTO `parametro_localidad` VALUES ('116', '1', 'Rivadavia');
INSERT INTO `parametro_localidad` VALUES ('117', '1', 'Rojas');
INSERT INTO `parametro_localidad` VALUES ('118', '1', 'Roque Pérez');
INSERT INTO `parametro_localidad` VALUES ('119', '1', 'Saavedra');
INSERT INTO `parametro_localidad` VALUES ('120', '1', 'Saladillo');
INSERT INTO `parametro_localidad` VALUES ('121', '1', 'Salliqueló');
INSERT INTO `parametro_localidad` VALUES ('122', '1', 'Salto');
INSERT INTO `parametro_localidad` VALUES ('123', '1', 'San Andrés de Giles');
INSERT INTO `parametro_localidad` VALUES ('124', '1', 'San Antonio de Areco');
INSERT INTO `parametro_localidad` VALUES ('125', '1', 'San Antonio de Padua');
INSERT INTO `parametro_localidad` VALUES ('126', '1', 'San Bernardo');
INSERT INTO `parametro_localidad` VALUES ('127', '1', 'San Cayetano');
INSERT INTO `parametro_localidad` VALUES ('128', '1', 'San Clemente del Tuyú');
INSERT INTO `parametro_localidad` VALUES ('129', '1', 'San Nicolás');
INSERT INTO `parametro_localidad` VALUES ('130', '1', 'San Pedro');
INSERT INTO `parametro_localidad` VALUES ('131', '1', 'San Vicente');
INSERT INTO `parametro_localidad` VALUES ('132', '1', 'Santa Teresita');
INSERT INTO `parametro_localidad` VALUES ('133', '1', 'Suipacha');
INSERT INTO `parametro_localidad` VALUES ('134', '1', 'Tandil');
INSERT INTO `parametro_localidad` VALUES ('135', '1', 'Tapalqué');
INSERT INTO `parametro_localidad` VALUES ('136', '1', 'Tordillo');
INSERT INTO `parametro_localidad` VALUES ('137', '1', 'Tornquist');
INSERT INTO `parametro_localidad` VALUES ('138', '1', 'Trenque Lauquen');
INSERT INTO `parametro_localidad` VALUES ('139', '1', 'Tres Lomas');
INSERT INTO `parametro_localidad` VALUES ('140', '1', 'Villa Gesell');
INSERT INTO `parametro_localidad` VALUES ('141', '1', 'Villarino');
INSERT INTO `parametro_localidad` VALUES ('142', '1', 'Zárate');
INSERT INTO `parametro_localidad` VALUES ('143', '2', '11 de Septiembre');
INSERT INTO `parametro_localidad` VALUES ('144', '2', '20 de Junio');
INSERT INTO `parametro_localidad` VALUES ('145', '2', '25 de Mayo');
INSERT INTO `parametro_localidad` VALUES ('146', '2', 'Acassuso');
INSERT INTO `parametro_localidad` VALUES ('147', '2', 'Adrogué');
INSERT INTO `parametro_localidad` VALUES ('148', '2', 'Aldo Bonzi');
INSERT INTO `parametro_localidad` VALUES ('149', '2', 'Área Reserva Cinturón Ecológico');
INSERT INTO `parametro_localidad` VALUES ('150', '2', 'Avellaneda');
INSERT INTO `parametro_localidad` VALUES ('151', '2', 'Banfield');
INSERT INTO `parametro_localidad` VALUES ('152', '2', 'Barrio Parque');
INSERT INTO `parametro_localidad` VALUES ('153', '2', 'Barrio Santa Teresita');
INSERT INTO `parametro_localidad` VALUES ('154', '2', 'Beccar');
INSERT INTO `parametro_localidad` VALUES ('155', '2', 'Bella Vista');
INSERT INTO `parametro_localidad` VALUES ('156', '2', 'Berazategui');
INSERT INTO `parametro_localidad` VALUES ('157', '2', 'Bernal Este');
INSERT INTO `parametro_localidad` VALUES ('158', '2', 'Bernal Oeste');
INSERT INTO `parametro_localidad` VALUES ('159', '2', 'Billinghurst');
INSERT INTO `parametro_localidad` VALUES ('160', '2', 'Boulogne');
INSERT INTO `parametro_localidad` VALUES ('161', '2', 'Burzaco');
INSERT INTO `parametro_localidad` VALUES ('162', '2', 'Carapachay');
INSERT INTO `parametro_localidad` VALUES ('163', '2', 'Caseros');
INSERT INTO `parametro_localidad` VALUES ('164', '2', 'Castelar');
INSERT INTO `parametro_localidad` VALUES ('165', '2', 'Churruca');
INSERT INTO `parametro_localidad` VALUES ('166', '2', 'Ciudad Evita');
INSERT INTO `parametro_localidad` VALUES ('167', '2', 'Ciudad Madero');
INSERT INTO `parametro_localidad` VALUES ('168', '2', 'Ciudadela');
INSERT INTO `parametro_localidad` VALUES ('169', '2', 'Claypole');
INSERT INTO `parametro_localidad` VALUES ('170', '2', 'Crucecita');
INSERT INTO `parametro_localidad` VALUES ('171', '2', 'Dock Sud');
INSERT INTO `parametro_localidad` VALUES ('172', '2', 'Don Bosco');
INSERT INTO `parametro_localidad` VALUES ('173', '2', 'Don Orione');
INSERT INTO `parametro_localidad` VALUES ('174', '2', 'El Jagüel');
INSERT INTO `parametro_localidad` VALUES ('175', '2', 'El Libertador');
INSERT INTO `parametro_localidad` VALUES ('176', '2', 'El Palomar');
INSERT INTO `parametro_localidad` VALUES ('177', '2', 'El Tala');
INSERT INTO `parametro_localidad` VALUES ('178', '2', 'El Trébol');
INSERT INTO `parametro_localidad` VALUES ('179', '2', 'Ezeiza');
INSERT INTO `parametro_localidad` VALUES ('180', '2', 'Ezpeleta');
INSERT INTO `parametro_localidad` VALUES ('181', '2', 'Florencio Varela');
INSERT INTO `parametro_localidad` VALUES ('182', '2', 'Florida');
INSERT INTO `parametro_localidad` VALUES ('183', '2', 'Francisco Álvarez');
INSERT INTO `parametro_localidad` VALUES ('184', '2', 'Gerli');
INSERT INTO `parametro_localidad` VALUES ('185', '2', 'Glew');
INSERT INTO `parametro_localidad` VALUES ('186', '2', 'González Catán');
INSERT INTO `parametro_localidad` VALUES ('187', '2', 'Gral. Lamadrid');
INSERT INTO `parametro_localidad` VALUES ('188', '2', 'Grand Bourg');
INSERT INTO `parametro_localidad` VALUES ('189', '2', 'Gregorio de Laferrere');
INSERT INTO `parametro_localidad` VALUES ('190', '2', 'Guillermo Enrique Hudson');
INSERT INTO `parametro_localidad` VALUES ('191', '2', 'Haedo');
INSERT INTO `parametro_localidad` VALUES ('192', '2', 'Hurlingham');
INSERT INTO `parametro_localidad` VALUES ('193', '2', 'Ing. Sourdeaux');
INSERT INTO `parametro_localidad` VALUES ('194', '2', 'Isidro Casanova');
INSERT INTO `parametro_localidad` VALUES ('195', '2', 'Ituzaingó');
INSERT INTO `parametro_localidad` VALUES ('196', '2', 'José C. Paz');
INSERT INTO `parametro_localidad` VALUES ('197', '2', 'José Ingenieros');
INSERT INTO `parametro_localidad` VALUES ('198', '2', 'José Marmol');
INSERT INTO `parametro_localidad` VALUES ('199', '2', 'La Lucila');
INSERT INTO `parametro_localidad` VALUES ('200', '2', 'La Reja');
INSERT INTO `parametro_localidad` VALUES ('201', '2', 'La Tablada');
INSERT INTO `parametro_localidad` VALUES ('202', '2', 'Lanús');
INSERT INTO `parametro_localidad` VALUES ('203', '2', 'Llavallol');
INSERT INTO `parametro_localidad` VALUES ('204', '2', 'Loma Hermosa');
INSERT INTO `parametro_localidad` VALUES ('205', '2', 'Lomas de Zamora');
INSERT INTO `parametro_localidad` VALUES ('206', '2', 'Lomas del Millón');
INSERT INTO `parametro_localidad` VALUES ('207', '2', 'Lomas del Mirador');
INSERT INTO `parametro_localidad` VALUES ('208', '2', 'Longchamps');
INSERT INTO `parametro_localidad` VALUES ('209', '2', 'Los Polvorines');
INSERT INTO `parametro_localidad` VALUES ('210', '2', 'Luis Guillón');
INSERT INTO `parametro_localidad` VALUES ('211', '2', 'Malvinas Argentinas');
INSERT INTO `parametro_localidad` VALUES ('212', '2', 'Martín Coronado');
INSERT INTO `parametro_localidad` VALUES ('213', '2', 'Martínez');
INSERT INTO `parametro_localidad` VALUES ('214', '2', 'Merlo');
INSERT INTO `parametro_localidad` VALUES ('215', '2', 'Ministro Rivadavia');
INSERT INTO `parametro_localidad` VALUES ('216', '2', 'Monte Chingolo');
INSERT INTO `parametro_localidad` VALUES ('217', '2', 'Monte Grande');
INSERT INTO `parametro_localidad` VALUES ('218', '2', 'Moreno');
INSERT INTO `parametro_localidad` VALUES ('219', '2', 'Morón');
INSERT INTO `parametro_localidad` VALUES ('220', '2', 'Muñiz');
INSERT INTO `parametro_localidad` VALUES ('221', '2', 'Olivos');
INSERT INTO `parametro_localidad` VALUES ('222', '2', 'Pablo Nogués');
INSERT INTO `parametro_localidad` VALUES ('223', '2', 'Pablo Podestá');
INSERT INTO `parametro_localidad` VALUES ('224', '2', 'Paso del Rey');
INSERT INTO `parametro_localidad` VALUES ('225', '2', 'Pereyra');
INSERT INTO `parametro_localidad` VALUES ('226', '2', 'Piñeiro');
INSERT INTO `parametro_localidad` VALUES ('227', '2', 'Plátanos');
INSERT INTO `parametro_localidad` VALUES ('228', '2', 'Pontevedra');
INSERT INTO `parametro_localidad` VALUES ('229', '2', 'Quilmes');
INSERT INTO `parametro_localidad` VALUES ('230', '2', 'Rafael Calzada');
INSERT INTO `parametro_localidad` VALUES ('231', '2', 'Rafael Castillo');
INSERT INTO `parametro_localidad` VALUES ('232', '2', 'Ramos Mejía');
INSERT INTO `parametro_localidad` VALUES ('233', '2', 'Ranelagh');
INSERT INTO `parametro_localidad` VALUES ('234', '2', 'Remedios de Escalada');
INSERT INTO `parametro_localidad` VALUES ('235', '2', 'Sáenz Peña');
INSERT INTO `parametro_localidad` VALUES ('236', '2', 'San Antonio de Padua');
INSERT INTO `parametro_localidad` VALUES ('237', '2', 'San Fernando');
INSERT INTO `parametro_localidad` VALUES ('238', '2', 'San Francisco Solano');
INSERT INTO `parametro_localidad` VALUES ('239', '2', 'San Isidro');
INSERT INTO `parametro_localidad` VALUES ('240', '2', 'San José');
INSERT INTO `parametro_localidad` VALUES ('241', '2', 'San Justo');
INSERT INTO `parametro_localidad` VALUES ('242', '2', 'San Martín');
INSERT INTO `parametro_localidad` VALUES ('243', '2', 'San Miguel');
INSERT INTO `parametro_localidad` VALUES ('244', '2', 'Santos Lugares');
INSERT INTO `parametro_localidad` VALUES ('245', '2', 'Sarandí');
INSERT INTO `parametro_localidad` VALUES ('246', '2', 'Sourigues');
INSERT INTO `parametro_localidad` VALUES ('247', '2', 'Tapiales');
INSERT INTO `parametro_localidad` VALUES ('248', '2', 'Temperley');
INSERT INTO `parametro_localidad` VALUES ('249', '2', 'Tigre');
INSERT INTO `parametro_localidad` VALUES ('250', '2', 'Tortuguitas');
INSERT INTO `parametro_localidad` VALUES ('251', '2', 'Tristán Suárez');
INSERT INTO `parametro_localidad` VALUES ('252', '2', 'Trujui');
INSERT INTO `parametro_localidad` VALUES ('253', '2', 'Turdera');
INSERT INTO `parametro_localidad` VALUES ('254', '2', 'Valentín Alsina');
INSERT INTO `parametro_localidad` VALUES ('255', '2', 'Vicente López');
INSERT INTO `parametro_localidad` VALUES ('256', '2', 'Villa Adelina');
INSERT INTO `parametro_localidad` VALUES ('257', '2', 'Villa Ballester');
INSERT INTO `parametro_localidad` VALUES ('258', '2', 'Villa Bosch');
INSERT INTO `parametro_localidad` VALUES ('259', '2', 'Villa Caraza');
INSERT INTO `parametro_localidad` VALUES ('260', '2', 'Villa Celina');
INSERT INTO `parametro_localidad` VALUES ('261', '2', 'Villa Centenario');
INSERT INTO `parametro_localidad` VALUES ('262', '2', 'Villa de Mayo');
INSERT INTO `parametro_localidad` VALUES ('263', '2', 'Villa Diamante');
INSERT INTO `parametro_localidad` VALUES ('264', '2', 'Villa Domínico');
INSERT INTO `parametro_localidad` VALUES ('265', '2', 'Villa España');
INSERT INTO `parametro_localidad` VALUES ('266', '2', 'Villa Fiorito');
INSERT INTO `parametro_localidad` VALUES ('267', '2', 'Villa Guillermina');
INSERT INTO `parametro_localidad` VALUES ('268', '2', 'Villa Insuperable');
INSERT INTO `parametro_localidad` VALUES ('269', '2', 'Villa José León Suárez');
INSERT INTO `parametro_localidad` VALUES ('270', '2', 'Villa La Florida');
INSERT INTO `parametro_localidad` VALUES ('271', '2', 'Villa Luzuriaga');
INSERT INTO `parametro_localidad` VALUES ('272', '2', 'Villa Martelli');
INSERT INTO `parametro_localidad` VALUES ('273', '2', 'Villa Obrera');
INSERT INTO `parametro_localidad` VALUES ('274', '2', 'Villa Progreso');
INSERT INTO `parametro_localidad` VALUES ('275', '2', 'Villa Raffo');
INSERT INTO `parametro_localidad` VALUES ('276', '2', 'Villa Sarmiento');
INSERT INTO `parametro_localidad` VALUES ('277', '2', 'Villa Tesei');
INSERT INTO `parametro_localidad` VALUES ('278', '2', 'Villa Udaondo');
INSERT INTO `parametro_localidad` VALUES ('279', '2', 'Virrey del Pino');
INSERT INTO `parametro_localidad` VALUES ('280', '2', 'Wilde');
INSERT INTO `parametro_localidad` VALUES ('281', '2', 'William Morris');
INSERT INTO `parametro_localidad` VALUES ('282', '3', 'Agronomía');
INSERT INTO `parametro_localidad` VALUES ('283', '3', 'Almagro');
INSERT INTO `parametro_localidad` VALUES ('284', '3', 'Balvanera');
INSERT INTO `parametro_localidad` VALUES ('285', '3', 'Barracas');
INSERT INTO `parametro_localidad` VALUES ('286', '3', 'Belgrano');
INSERT INTO `parametro_localidad` VALUES ('287', '3', 'Boca');
INSERT INTO `parametro_localidad` VALUES ('288', '3', 'Boedo');
INSERT INTO `parametro_localidad` VALUES ('289', '3', 'Caballito');
INSERT INTO `parametro_localidad` VALUES ('290', '3', 'Chacarita');
INSERT INTO `parametro_localidad` VALUES ('291', '3', 'Coghlan');
INSERT INTO `parametro_localidad` VALUES ('292', '3', 'Colegiales');
INSERT INTO `parametro_localidad` VALUES ('293', '3', 'Constitución');
INSERT INTO `parametro_localidad` VALUES ('294', '3', 'Flores');
INSERT INTO `parametro_localidad` VALUES ('295', '3', 'Floresta');
INSERT INTO `parametro_localidad` VALUES ('296', '3', 'La Paternal');
INSERT INTO `parametro_localidad` VALUES ('297', '3', 'Liniers');
INSERT INTO `parametro_localidad` VALUES ('298', '3', 'Mataderos');
INSERT INTO `parametro_localidad` VALUES ('299', '3', 'Monserrat');
INSERT INTO `parametro_localidad` VALUES ('300', '3', 'Monte Castro');
INSERT INTO `parametro_localidad` VALUES ('301', '3', 'Nueva Pompeya');
INSERT INTO `parametro_localidad` VALUES ('302', '3', 'Núñez');
INSERT INTO `parametro_localidad` VALUES ('303', '3', 'Palermo');
INSERT INTO `parametro_localidad` VALUES ('304', '3', 'Parque Avellaneda');
INSERT INTO `parametro_localidad` VALUES ('305', '3', 'Parque Chacabuco');
INSERT INTO `parametro_localidad` VALUES ('306', '3', 'Parque Chas');
INSERT INTO `parametro_localidad` VALUES ('307', '3', 'Parque Patricios');
INSERT INTO `parametro_localidad` VALUES ('308', '3', 'Puerto Madero');
INSERT INTO `parametro_localidad` VALUES ('309', '3', 'Recoleta');
INSERT INTO `parametro_localidad` VALUES ('310', '3', 'Retiro');
INSERT INTO `parametro_localidad` VALUES ('311', '3', 'Saavedra');
INSERT INTO `parametro_localidad` VALUES ('312', '3', 'San Cristóbal');
INSERT INTO `parametro_localidad` VALUES ('313', '3', 'San Nicolás');
INSERT INTO `parametro_localidad` VALUES ('314', '3', 'San Telmo');
INSERT INTO `parametro_localidad` VALUES ('315', '3', 'Vélez Sársfield');
INSERT INTO `parametro_localidad` VALUES ('316', '3', 'Versalles');
INSERT INTO `parametro_localidad` VALUES ('317', '3', 'Villa Crespo');
INSERT INTO `parametro_localidad` VALUES ('318', '3', 'Villa del Parque');
INSERT INTO `parametro_localidad` VALUES ('319', '3', 'Villa Devoto');
INSERT INTO `parametro_localidad` VALUES ('320', '3', 'Villa Gral. Mitre');
INSERT INTO `parametro_localidad` VALUES ('321', '3', 'Villa Lugano');
INSERT INTO `parametro_localidad` VALUES ('322', '3', 'Villa Luro');
INSERT INTO `parametro_localidad` VALUES ('323', '3', 'Villa Ortúzar');
INSERT INTO `parametro_localidad` VALUES ('324', '3', 'Villa Pueyrredón');
INSERT INTO `parametro_localidad` VALUES ('325', '3', 'Villa Real');
INSERT INTO `parametro_localidad` VALUES ('326', '3', 'Villa Riachuelo');
INSERT INTO `parametro_localidad` VALUES ('327', '3', 'Villa Santa Rita');
INSERT INTO `parametro_localidad` VALUES ('328', '3', 'Villa Soldati');
INSERT INTO `parametro_localidad` VALUES ('329', '3', 'Villa Urquiza');
INSERT INTO `parametro_localidad` VALUES ('330', '4', 'Aconquija');
INSERT INTO `parametro_localidad` VALUES ('331', '4', 'Ancasti');
INSERT INTO `parametro_localidad` VALUES ('332', '4', 'Andalgalá');
INSERT INTO `parametro_localidad` VALUES ('333', '4', 'Antofagasta');
INSERT INTO `parametro_localidad` VALUES ('334', '4', 'Belén');
INSERT INTO `parametro_localidad` VALUES ('335', '4', 'Capayán');
INSERT INTO `parametro_localidad` VALUES ('336', '4', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('337', '4', '4');
INSERT INTO `parametro_localidad` VALUES ('338', '4', 'Corral Quemado');
INSERT INTO `parametro_localidad` VALUES ('339', '4', 'El Alto');
INSERT INTO `parametro_localidad` VALUES ('340', '4', 'El Rodeo');
INSERT INTO `parametro_localidad` VALUES ('341', '4', 'F.Mamerto Esquiú');
INSERT INTO `parametro_localidad` VALUES ('342', '4', 'Fiambalá');
INSERT INTO `parametro_localidad` VALUES ('343', '4', 'Hualfín');
INSERT INTO `parametro_localidad` VALUES ('344', '4', 'Huillapima');
INSERT INTO `parametro_localidad` VALUES ('345', '4', 'Icaño');
INSERT INTO `parametro_localidad` VALUES ('346', '4', 'La Puerta');
INSERT INTO `parametro_localidad` VALUES ('347', '4', 'Las Juntas');
INSERT INTO `parametro_localidad` VALUES ('348', '4', 'Londres');
INSERT INTO `parametro_localidad` VALUES ('349', '4', 'Los Altos');
INSERT INTO `parametro_localidad` VALUES ('350', '4', 'Los Varela');
INSERT INTO `parametro_localidad` VALUES ('351', '4', 'Mutquín');
INSERT INTO `parametro_localidad` VALUES ('352', '4', 'Paclín');
INSERT INTO `parametro_localidad` VALUES ('353', '4', 'Poman');
INSERT INTO `parametro_localidad` VALUES ('354', '4', 'Pozo de La Piedra');
INSERT INTO `parametro_localidad` VALUES ('355', '4', 'Puerta de Corral');
INSERT INTO `parametro_localidad` VALUES ('356', '4', 'Puerta San José');
INSERT INTO `parametro_localidad` VALUES ('357', '4', 'Recreo');
INSERT INTO `parametro_localidad` VALUES ('358', '4', 'S.F.V de 4');
INSERT INTO `parametro_localidad` VALUES ('359', '4', 'San Fernando');
INSERT INTO `parametro_localidad` VALUES ('360', '4', 'San Fernando del Valle');
INSERT INTO `parametro_localidad` VALUES ('361', '4', 'San José');
INSERT INTO `parametro_localidad` VALUES ('362', '4', 'Santa María');
INSERT INTO `parametro_localidad` VALUES ('363', '4', 'Santa Rosa');
INSERT INTO `parametro_localidad` VALUES ('364', '4', 'Saujil');
INSERT INTO `parametro_localidad` VALUES ('365', '4', 'Tapso');
INSERT INTO `parametro_localidad` VALUES ('366', '4', 'Tinogasta');
INSERT INTO `parametro_localidad` VALUES ('367', '4', 'Valle Viejo');
INSERT INTO `parametro_localidad` VALUES ('368', '4', 'Villa Vil');
INSERT INTO `parametro_localidad` VALUES ('369', '5', 'Aviá Teraí');
INSERT INTO `parametro_localidad` VALUES ('370', '5', 'Barranqueras');
INSERT INTO `parametro_localidad` VALUES ('371', '5', 'Basail');
INSERT INTO `parametro_localidad` VALUES ('372', '5', 'Campo Largo');
INSERT INTO `parametro_localidad` VALUES ('373', '5', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('374', '5', 'Capitán Solari');
INSERT INTO `parametro_localidad` VALUES ('375', '5', 'Charadai');
INSERT INTO `parametro_localidad` VALUES ('376', '5', 'Charata');
INSERT INTO `parametro_localidad` VALUES ('377', '5', 'Chorotis');
INSERT INTO `parametro_localidad` VALUES ('378', '5', 'Ciervo Petiso');
INSERT INTO `parametro_localidad` VALUES ('379', '5', 'Cnel. Du Graty');
INSERT INTO `parametro_localidad` VALUES ('380', '5', 'Col. Benítez');
INSERT INTO `parametro_localidad` VALUES ('381', '5', 'Col. Elisa');
INSERT INTO `parametro_localidad` VALUES ('382', '5', 'Col. Popular');
INSERT INTO `parametro_localidad` VALUES ('383', '5', 'Colonias Unidas');
INSERT INTO `parametro_localidad` VALUES ('384', '5', 'Concepción');
INSERT INTO `parametro_localidad` VALUES ('385', '5', 'Corzuela');
INSERT INTO `parametro_localidad` VALUES ('386', '5', 'Cote Lai');
INSERT INTO `parametro_localidad` VALUES ('387', '5', 'El Sauzalito');
INSERT INTO `parametro_localidad` VALUES ('388', '5', 'Enrique Urien');
INSERT INTO `parametro_localidad` VALUES ('389', '5', 'Fontana');
INSERT INTO `parametro_localidad` VALUES ('390', '5', 'Fte. Esperanza');
INSERT INTO `parametro_localidad` VALUES ('391', '5', 'Gancedo');
INSERT INTO `parametro_localidad` VALUES ('392', '5', 'Gral. Capdevila');
INSERT INTO `parametro_localidad` VALUES ('393', '5', 'Gral. Pinero');
INSERT INTO `parametro_localidad` VALUES ('394', '5', 'Gral. San Martín');
INSERT INTO `parametro_localidad` VALUES ('395', '5', 'Gral. Vedia');
INSERT INTO `parametro_localidad` VALUES ('396', '5', 'Hermoso Campo');
INSERT INTO `parametro_localidad` VALUES ('397', '5', 'I. del Cerrito');
INSERT INTO `parametro_localidad` VALUES ('398', '5', 'J.J. Castelli');
INSERT INTO `parametro_localidad` VALUES ('399', '5', 'La Clotilde');
INSERT INTO `parametro_localidad` VALUES ('400', '5', 'La Eduvigis');
INSERT INTO `parametro_localidad` VALUES ('401', '5', 'La Escondida');
INSERT INTO `parametro_localidad` VALUES ('402', '5', 'La Leonesa');
INSERT INTO `parametro_localidad` VALUES ('403', '5', 'La Tigra');
INSERT INTO `parametro_localidad` VALUES ('404', '5', 'La Verde');
INSERT INTO `parametro_localidad` VALUES ('405', '5', 'Laguna Blanca');
INSERT INTO `parametro_localidad` VALUES ('406', '5', 'Laguna Limpia');
INSERT INTO `parametro_localidad` VALUES ('407', '5', 'Lapachito');
INSERT INTO `parametro_localidad` VALUES ('408', '5', 'Las Breñas');
INSERT INTO `parametro_localidad` VALUES ('409', '5', 'Las Garcitas');
INSERT INTO `parametro_localidad` VALUES ('410', '5', 'Las Palmas');
INSERT INTO `parametro_localidad` VALUES ('411', '5', 'Los Frentones');
INSERT INTO `parametro_localidad` VALUES ('412', '5', 'Machagai');
INSERT INTO `parametro_localidad` VALUES ('413', '5', 'Makallé');
INSERT INTO `parametro_localidad` VALUES ('414', '5', 'Margarita Belén');
INSERT INTO `parametro_localidad` VALUES ('415', '5', 'Miraflores');
INSERT INTO `parametro_localidad` VALUES ('416', '5', 'Misión N. Pompeya');
INSERT INTO `parametro_localidad` VALUES ('417', '5', 'Napenay');
INSERT INTO `parametro_localidad` VALUES ('418', '5', 'Pampa Almirón');
INSERT INTO `parametro_localidad` VALUES ('419', '5', 'Pampa del Indio');
INSERT INTO `parametro_localidad` VALUES ('420', '5', 'Pampa del Infierno');
INSERT INTO `parametro_localidad` VALUES ('421', '5', 'Pdcia. de La Plaza');
INSERT INTO `parametro_localidad` VALUES ('422', '5', 'Pdcia. Roca');
INSERT INTO `parametro_localidad` VALUES ('423', '5', 'Pdcia. Roque Sáenz Peña');
INSERT INTO `parametro_localidad` VALUES ('424', '5', 'Pto. Bermejo');
INSERT INTO `parametro_localidad` VALUES ('425', '5', 'Pto. Eva Perón');
INSERT INTO `parametro_localidad` VALUES ('426', '5', 'Puero Tirol');
INSERT INTO `parametro_localidad` VALUES ('427', '5', 'Puerto Vilelas');
INSERT INTO `parametro_localidad` VALUES ('428', '5', 'Quitilipi');
INSERT INTO `parametro_localidad` VALUES ('429', '5', 'Resistencia');
INSERT INTO `parametro_localidad` VALUES ('430', '5', 'Sáenz Peña');
INSERT INTO `parametro_localidad` VALUES ('431', '5', 'Samuhú');
INSERT INTO `parametro_localidad` VALUES ('432', '5', 'San Bernardo');
INSERT INTO `parametro_localidad` VALUES ('433', '5', 'Santa Sylvina');
INSERT INTO `parametro_localidad` VALUES ('434', '5', 'Taco Pozo');
INSERT INTO `parametro_localidad` VALUES ('435', '5', 'Tres Isletas');
INSERT INTO `parametro_localidad` VALUES ('436', '5', 'Villa Ángela');
INSERT INTO `parametro_localidad` VALUES ('437', '5', 'Villa Berthet');
INSERT INTO `parametro_localidad` VALUES ('438', '5', 'Villa R. Bermejito');
INSERT INTO `parametro_localidad` VALUES ('439', '6', 'Aldea Apeleg');
INSERT INTO `parametro_localidad` VALUES ('440', '6', 'Aldea Beleiro');
INSERT INTO `parametro_localidad` VALUES ('441', '6', 'Aldea Epulef');
INSERT INTO `parametro_localidad` VALUES ('442', '6', 'Alto Río Sengerr');
INSERT INTO `parametro_localidad` VALUES ('443', '6', 'Buen Pasto');
INSERT INTO `parametro_localidad` VALUES ('444', '6', 'Camarones');
INSERT INTO `parametro_localidad` VALUES ('445', '6', 'Carrenleufú');
INSERT INTO `parametro_localidad` VALUES ('446', '6', 'Cholila');
INSERT INTO `parametro_localidad` VALUES ('447', '6', 'Co. Centinela');
INSERT INTO `parametro_localidad` VALUES ('448', '6', 'Colan Conhué');
INSERT INTO `parametro_localidad` VALUES ('449', '6', 'Comodoro Rivadavia');
INSERT INTO `parametro_localidad` VALUES ('450', '6', 'Corcovado');
INSERT INTO `parametro_localidad` VALUES ('451', '6', 'Cushamen');
INSERT INTO `parametro_localidad` VALUES ('452', '6', 'Dique F. Ameghino');
INSERT INTO `parametro_localidad` VALUES ('453', '6', 'Dolavón');
INSERT INTO `parametro_localidad` VALUES ('454', '6', 'Dr. R. Rojas');
INSERT INTO `parametro_localidad` VALUES ('455', '6', 'El Hoyo');
INSERT INTO `parametro_localidad` VALUES ('456', '6', 'El Maitén');
INSERT INTO `parametro_localidad` VALUES ('457', '6', 'Epuyén');
INSERT INTO `parametro_localidad` VALUES ('458', '6', 'Esquel');
INSERT INTO `parametro_localidad` VALUES ('459', '6', 'Facundo');
INSERT INTO `parametro_localidad` VALUES ('460', '6', 'Gaimán');
INSERT INTO `parametro_localidad` VALUES ('461', '6', 'Gan Gan');
INSERT INTO `parametro_localidad` VALUES ('462', '6', 'Gastre');
INSERT INTO `parametro_localidad` VALUES ('463', '6', 'Gdor. Costa');
INSERT INTO `parametro_localidad` VALUES ('464', '6', 'Gualjaina');
INSERT INTO `parametro_localidad` VALUES ('465', '6', 'J. de San Martín');
INSERT INTO `parametro_localidad` VALUES ('466', '6', 'Lago Blanco');
INSERT INTO `parametro_localidad` VALUES ('467', '6', 'Lago Puelo');
INSERT INTO `parametro_localidad` VALUES ('468', '6', 'Lagunita Salada');
INSERT INTO `parametro_localidad` VALUES ('469', '6', 'Las Plumas');
INSERT INTO `parametro_localidad` VALUES ('470', '6', 'Los Altares');
INSERT INTO `parametro_localidad` VALUES ('471', '6', 'Paso de los Indios');
INSERT INTO `parametro_localidad` VALUES ('472', '6', 'Paso del Sapo');
INSERT INTO `parametro_localidad` VALUES ('473', '6', 'Pto. Madryn');
INSERT INTO `parametro_localidad` VALUES ('474', '6', 'Pto. Pirámides');
INSERT INTO `parametro_localidad` VALUES ('475', '6', 'Rada Tilly');
INSERT INTO `parametro_localidad` VALUES ('476', '6', 'Rawson');
INSERT INTO `parametro_localidad` VALUES ('477', '6', 'Río Mayo');
INSERT INTO `parametro_localidad` VALUES ('478', '6', 'Río Pico');
INSERT INTO `parametro_localidad` VALUES ('479', '6', 'Sarmiento');
INSERT INTO `parametro_localidad` VALUES ('480', '6', 'Tecka');
INSERT INTO `parametro_localidad` VALUES ('481', '6', 'Telsen');
INSERT INTO `parametro_localidad` VALUES ('482', '6', 'Trelew');
INSERT INTO `parametro_localidad` VALUES ('483', '6', 'Trevelin');
INSERT INTO `parametro_localidad` VALUES ('484', '6', 'Veintiocho de Julio');
INSERT INTO `parametro_localidad` VALUES ('485', '7', 'Achiras');
INSERT INTO `parametro_localidad` VALUES ('486', '7', 'Adelia Maria');
INSERT INTO `parametro_localidad` VALUES ('487', '7', 'Agua de Oro');
INSERT INTO `parametro_localidad` VALUES ('488', '7', 'Alcira Gigena');
INSERT INTO `parametro_localidad` VALUES ('489', '7', 'Aldea Santa Maria');
INSERT INTO `parametro_localidad` VALUES ('490', '7', 'Alejandro Roca');
INSERT INTO `parametro_localidad` VALUES ('491', '7', 'Alejo Ledesma');
INSERT INTO `parametro_localidad` VALUES ('492', '7', 'Alicia');
INSERT INTO `parametro_localidad` VALUES ('493', '7', 'Almafuerte');
INSERT INTO `parametro_localidad` VALUES ('494', '7', 'Alpa Corral');
INSERT INTO `parametro_localidad` VALUES ('495', '7', 'Alta Gracia');
INSERT INTO `parametro_localidad` VALUES ('496', '7', 'Alto Alegre');
INSERT INTO `parametro_localidad` VALUES ('497', '7', 'Alto de Los Quebrachos');
INSERT INTO `parametro_localidad` VALUES ('498', '7', 'Altos de Chipion');
INSERT INTO `parametro_localidad` VALUES ('499', '7', 'Amboy');
INSERT INTO `parametro_localidad` VALUES ('500', '7', 'Ambul');
INSERT INTO `parametro_localidad` VALUES ('501', '7', 'Ana Zumaran');
INSERT INTO `parametro_localidad` VALUES ('502', '7', 'Anisacate');
INSERT INTO `parametro_localidad` VALUES ('503', '7', 'Arguello');
INSERT INTO `parametro_localidad` VALUES ('504', '7', 'Arias');
INSERT INTO `parametro_localidad` VALUES ('505', '7', 'Arroyito');
INSERT INTO `parametro_localidad` VALUES ('506', '7', 'Arroyo Algodon');
INSERT INTO `parametro_localidad` VALUES ('507', '7', 'Arroyo Cabral');
INSERT INTO `parametro_localidad` VALUES ('508', '7', 'Arroyo Los Patos');
INSERT INTO `parametro_localidad` VALUES ('509', '7', 'Assunta');
INSERT INTO `parametro_localidad` VALUES ('510', '7', 'Atahona');
INSERT INTO `parametro_localidad` VALUES ('511', '7', 'Ausonia');
INSERT INTO `parametro_localidad` VALUES ('512', '7', 'Avellaneda');
INSERT INTO `parametro_localidad` VALUES ('513', '7', 'Ballesteros');
INSERT INTO `parametro_localidad` VALUES ('514', '7', 'Ballesteros Sud');
INSERT INTO `parametro_localidad` VALUES ('515', '7', 'Balnearia');
INSERT INTO `parametro_localidad` VALUES ('516', '7', 'Bañado de Soto');
INSERT INTO `parametro_localidad` VALUES ('517', '7', 'Bell Ville');
INSERT INTO `parametro_localidad` VALUES ('518', '7', 'Bengolea');
INSERT INTO `parametro_localidad` VALUES ('519', '7', 'Benjamin Gould');
INSERT INTO `parametro_localidad` VALUES ('520', '7', 'Berrotaran');
INSERT INTO `parametro_localidad` VALUES ('521', '7', 'Bialet Masse');
INSERT INTO `parametro_localidad` VALUES ('522', '7', 'Bouwer');
INSERT INTO `parametro_localidad` VALUES ('523', '7', 'Brinkmann');
INSERT INTO `parametro_localidad` VALUES ('524', '7', 'Buchardo');
INSERT INTO `parametro_localidad` VALUES ('525', '7', 'Bulnes');
INSERT INTO `parametro_localidad` VALUES ('526', '7', 'Cabalango');
INSERT INTO `parametro_localidad` VALUES ('527', '7', 'Calamuchita');
INSERT INTO `parametro_localidad` VALUES ('528', '7', 'Calchin');
INSERT INTO `parametro_localidad` VALUES ('529', '7', 'Calchin Oeste');
INSERT INTO `parametro_localidad` VALUES ('530', '7', 'Calmayo');
INSERT INTO `parametro_localidad` VALUES ('531', '7', 'Camilo Aldao');
INSERT INTO `parametro_localidad` VALUES ('532', '7', 'Caminiaga');
INSERT INTO `parametro_localidad` VALUES ('533', '7', 'Cañada de Luque');
INSERT INTO `parametro_localidad` VALUES ('534', '7', 'Cañada de Machado');
INSERT INTO `parametro_localidad` VALUES ('535', '7', 'Cañada de Rio Pinto');
INSERT INTO `parametro_localidad` VALUES ('536', '7', 'Cañada del Sauce');
INSERT INTO `parametro_localidad` VALUES ('537', '7', 'Canals');
INSERT INTO `parametro_localidad` VALUES ('538', '7', 'Candelaria Sud');
INSERT INTO `parametro_localidad` VALUES ('539', '7', 'Capilla de Remedios');
INSERT INTO `parametro_localidad` VALUES ('540', '7', 'Capilla de Siton');
INSERT INTO `parametro_localidad` VALUES ('541', '7', 'Capilla del Carmen');
INSERT INTO `parametro_localidad` VALUES ('542', '7', 'Capilla del Monte');
INSERT INTO `parametro_localidad` VALUES ('543', '7', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('544', '7', 'Capitan Gral B. O´Higgins');
INSERT INTO `parametro_localidad` VALUES ('545', '7', 'Carnerillo');
INSERT INTO `parametro_localidad` VALUES ('546', '7', 'Carrilobo');
INSERT INTO `parametro_localidad` VALUES ('547', '7', 'Casa Grande');
INSERT INTO `parametro_localidad` VALUES ('548', '7', 'Cavanagh');
INSERT INTO `parametro_localidad` VALUES ('549', '7', 'Cerro Colorado');
INSERT INTO `parametro_localidad` VALUES ('550', '7', 'Chaján');
INSERT INTO `parametro_localidad` VALUES ('551', '7', 'Chalacea');
INSERT INTO `parametro_localidad` VALUES ('552', '7', 'Chañar Viejo');
INSERT INTO `parametro_localidad` VALUES ('553', '7', 'Chancaní');
INSERT INTO `parametro_localidad` VALUES ('554', '7', 'Charbonier');
INSERT INTO `parametro_localidad` VALUES ('555', '7', 'Charras');
INSERT INTO `parametro_localidad` VALUES ('556', '7', 'Chazón');
INSERT INTO `parametro_localidad` VALUES ('557', '7', 'Chilibroste');
INSERT INTO `parametro_localidad` VALUES ('558', '7', 'Chucul');
INSERT INTO `parametro_localidad` VALUES ('559', '7', 'Chuña');
INSERT INTO `parametro_localidad` VALUES ('560', '7', 'Chuña Huasi');
INSERT INTO `parametro_localidad` VALUES ('561', '7', 'Churqui Cañada');
INSERT INTO `parametro_localidad` VALUES ('562', '7', 'Cienaga Del Coro');
INSERT INTO `parametro_localidad` VALUES ('563', '7', 'Cintra');
INSERT INTO `parametro_localidad` VALUES ('564', '7', 'Col. Almada');
INSERT INTO `parametro_localidad` VALUES ('565', '7', 'Col. Anita');
INSERT INTO `parametro_localidad` VALUES ('566', '7', 'Col. Barge');
INSERT INTO `parametro_localidad` VALUES ('567', '7', 'Col. Bismark');
INSERT INTO `parametro_localidad` VALUES ('568', '7', 'Col. Bremen');
INSERT INTO `parametro_localidad` VALUES ('569', '7', 'Col. Caroya');
INSERT INTO `parametro_localidad` VALUES ('570', '7', 'Col. Italiana');
INSERT INTO `parametro_localidad` VALUES ('571', '7', 'Col. Iturraspe');
INSERT INTO `parametro_localidad` VALUES ('572', '7', 'Col. Las Cuatro Esquinas');
INSERT INTO `parametro_localidad` VALUES ('573', '7', 'Col. Las Pichanas');
INSERT INTO `parametro_localidad` VALUES ('574', '7', 'Col. Marina');
INSERT INTO `parametro_localidad` VALUES ('575', '7', 'Col. Prosperidad');
INSERT INTO `parametro_localidad` VALUES ('576', '7', 'Col. San Bartolome');
INSERT INTO `parametro_localidad` VALUES ('577', '7', 'Col. San Pedro');
INSERT INTO `parametro_localidad` VALUES ('578', '7', 'Col. Tirolesa');
INSERT INTO `parametro_localidad` VALUES ('579', '7', 'Col. Vicente Aguero');
INSERT INTO `parametro_localidad` VALUES ('580', '7', 'Col. Videla');
INSERT INTO `parametro_localidad` VALUES ('581', '7', 'Col. Vignaud');
INSERT INTO `parametro_localidad` VALUES ('582', '7', 'Col. Waltelina');
INSERT INTO `parametro_localidad` VALUES ('583', '7', 'Colazo');
INSERT INTO `parametro_localidad` VALUES ('584', '7', 'Comechingones');
INSERT INTO `parametro_localidad` VALUES ('585', '7', 'Conlara');
INSERT INTO `parametro_localidad` VALUES ('586', '7', 'Copacabana');
INSERT INTO `parametro_localidad` VALUES ('587', '7', '7');
INSERT INTO `parametro_localidad` VALUES ('588', '7', 'Coronel Baigorria');
INSERT INTO `parametro_localidad` VALUES ('589', '7', 'Coronel Moldes');
INSERT INTO `parametro_localidad` VALUES ('590', '7', 'Corral de Bustos');
INSERT INTO `parametro_localidad` VALUES ('591', '7', 'Corralito');
INSERT INTO `parametro_localidad` VALUES ('592', '7', 'Cosquín');
INSERT INTO `parametro_localidad` VALUES ('593', '7', 'Costa Sacate');
INSERT INTO `parametro_localidad` VALUES ('594', '7', 'Cruz Alta');
INSERT INTO `parametro_localidad` VALUES ('595', '7', 'Cruz de Caña');
INSERT INTO `parametro_localidad` VALUES ('596', '7', 'Cruz del Eje');
INSERT INTO `parametro_localidad` VALUES ('597', '7', 'Cuesta Blanca');
INSERT INTO `parametro_localidad` VALUES ('598', '7', 'Dean Funes');
INSERT INTO `parametro_localidad` VALUES ('599', '7', 'Del Campillo');
INSERT INTO `parametro_localidad` VALUES ('600', '7', 'Despeñaderos');
INSERT INTO `parametro_localidad` VALUES ('601', '7', 'Devoto');
INSERT INTO `parametro_localidad` VALUES ('602', '7', 'Diego de Rojas');
INSERT INTO `parametro_localidad` VALUES ('603', '7', 'Dique Chico');
INSERT INTO `parametro_localidad` VALUES ('604', '7', 'El Arañado');
INSERT INTO `parametro_localidad` VALUES ('605', '7', 'El Brete');
INSERT INTO `parametro_localidad` VALUES ('606', '7', 'El Chacho');
INSERT INTO `parametro_localidad` VALUES ('607', '7', 'El Crispín');
INSERT INTO `parametro_localidad` VALUES ('608', '7', 'El Fortín');
INSERT INTO `parametro_localidad` VALUES ('609', '7', 'El Manzano');
INSERT INTO `parametro_localidad` VALUES ('610', '7', 'El Rastreador');
INSERT INTO `parametro_localidad` VALUES ('611', '7', 'El Rodeo');
INSERT INTO `parametro_localidad` VALUES ('612', '7', 'El Tío');
INSERT INTO `parametro_localidad` VALUES ('613', '7', 'Elena');
INSERT INTO `parametro_localidad` VALUES ('614', '7', 'Embalse');
INSERT INTO `parametro_localidad` VALUES ('615', '7', 'Esquina');
INSERT INTO `parametro_localidad` VALUES ('616', '7', 'Estación Gral. Paz');
INSERT INTO `parametro_localidad` VALUES ('617', '7', 'Estación Juárez Celman');
INSERT INTO `parametro_localidad` VALUES ('618', '7', 'Estancia de Guadalupe');
INSERT INTO `parametro_localidad` VALUES ('619', '7', 'Estancia Vieja');
INSERT INTO `parametro_localidad` VALUES ('620', '7', 'Etruria');
INSERT INTO `parametro_localidad` VALUES ('621', '7', 'Eufrasio Loza');
INSERT INTO `parametro_localidad` VALUES ('622', '7', 'Falda del Carmen');
INSERT INTO `parametro_localidad` VALUES ('623', '7', 'Freyre');
INSERT INTO `parametro_localidad` VALUES ('624', '7', 'Gral. Baldissera');
INSERT INTO `parametro_localidad` VALUES ('625', '7', 'Gral. Cabrera');
INSERT INTO `parametro_localidad` VALUES ('626', '7', 'Gral. Deheza');
INSERT INTO `parametro_localidad` VALUES ('627', '7', 'Gral. Fotheringham');
INSERT INTO `parametro_localidad` VALUES ('628', '7', 'Gral. Levalle');
INSERT INTO `parametro_localidad` VALUES ('629', '7', 'Gral. Roca');
INSERT INTO `parametro_localidad` VALUES ('630', '7', 'Guanaco Muerto');
INSERT INTO `parametro_localidad` VALUES ('631', '7', 'Guasapampa');
INSERT INTO `parametro_localidad` VALUES ('632', '7', 'Guatimozin');
INSERT INTO `parametro_localidad` VALUES ('633', '7', 'Gutenberg');
INSERT INTO `parametro_localidad` VALUES ('634', '7', 'Hernando');
INSERT INTO `parametro_localidad` VALUES ('635', '7', 'Huanchillas');
INSERT INTO `parametro_localidad` VALUES ('636', '7', 'Huerta Grande');
INSERT INTO `parametro_localidad` VALUES ('637', '7', 'Huinca Renanco');
INSERT INTO `parametro_localidad` VALUES ('638', '7', 'Idiazabal');
INSERT INTO `parametro_localidad` VALUES ('639', '7', 'Impira');
INSERT INTO `parametro_localidad` VALUES ('640', '7', 'Inriville');
INSERT INTO `parametro_localidad` VALUES ('641', '7', 'Isla Verde');
INSERT INTO `parametro_localidad` VALUES ('642', '7', 'Italó');
INSERT INTO `parametro_localidad` VALUES ('643', '7', 'James Craik');
INSERT INTO `parametro_localidad` VALUES ('644', '7', 'Jesús María');
INSERT INTO `parametro_localidad` VALUES ('645', '7', 'Jovita');
INSERT INTO `parametro_localidad` VALUES ('646', '7', 'Justiniano Posse');
INSERT INTO `parametro_localidad` VALUES ('647', '7', 'Km 658');
INSERT INTO `parametro_localidad` VALUES ('648', '7', 'L. V. Mansilla');
INSERT INTO `parametro_localidad` VALUES ('649', '7', 'La Batea');
INSERT INTO `parametro_localidad` VALUES ('650', '7', 'La Calera');
INSERT INTO `parametro_localidad` VALUES ('651', '7', 'La Carlota');
INSERT INTO `parametro_localidad` VALUES ('652', '7', 'La Carolina');
INSERT INTO `parametro_localidad` VALUES ('653', '7', 'La Cautiva');
INSERT INTO `parametro_localidad` VALUES ('654', '7', 'La Cesira');
INSERT INTO `parametro_localidad` VALUES ('655', '7', 'La Cruz');
INSERT INTO `parametro_localidad` VALUES ('656', '7', 'La Cumbre');
INSERT INTO `parametro_localidad` VALUES ('657', '7', 'La Cumbrecita');
INSERT INTO `parametro_localidad` VALUES ('658', '7', 'La Falda');
INSERT INTO `parametro_localidad` VALUES ('659', '7', 'La Francia');
INSERT INTO `parametro_localidad` VALUES ('660', '7', 'La Granja');
INSERT INTO `parametro_localidad` VALUES ('661', '7', 'La Higuera');
INSERT INTO `parametro_localidad` VALUES ('662', '7', 'La Laguna');
INSERT INTO `parametro_localidad` VALUES ('663', '7', 'La Paisanita');
INSERT INTO `parametro_localidad` VALUES ('664', '7', 'La Palestina');
INSERT INTO `parametro_localidad` VALUES ('665', '7', '12');
INSERT INTO `parametro_localidad` VALUES ('666', '7', 'La Paquita');
INSERT INTO `parametro_localidad` VALUES ('667', '7', 'La Para');
INSERT INTO `parametro_localidad` VALUES ('668', '7', 'La Paz');
INSERT INTO `parametro_localidad` VALUES ('669', '7', 'La Playa');
INSERT INTO `parametro_localidad` VALUES ('670', '7', 'La Playosa');
INSERT INTO `parametro_localidad` VALUES ('671', '7', 'La Población');
INSERT INTO `parametro_localidad` VALUES ('672', '7', 'La Posta');
INSERT INTO `parametro_localidad` VALUES ('673', '7', 'La Puerta');
INSERT INTO `parametro_localidad` VALUES ('674', '7', 'La Quinta');
INSERT INTO `parametro_localidad` VALUES ('675', '7', 'La Rancherita');
INSERT INTO `parametro_localidad` VALUES ('676', '7', 'La Rinconada');
INSERT INTO `parametro_localidad` VALUES ('677', '7', 'La Serranita');
INSERT INTO `parametro_localidad` VALUES ('678', '7', 'La Tordilla');
INSERT INTO `parametro_localidad` VALUES ('679', '7', 'Laborde');
INSERT INTO `parametro_localidad` VALUES ('680', '7', 'Laboulaye');
INSERT INTO `parametro_localidad` VALUES ('681', '7', 'Laguna Larga');
INSERT INTO `parametro_localidad` VALUES ('682', '7', 'Las Acequias');
INSERT INTO `parametro_localidad` VALUES ('683', '7', 'Las Albahacas');
INSERT INTO `parametro_localidad` VALUES ('684', '7', 'Las Arrias');
INSERT INTO `parametro_localidad` VALUES ('685', '7', 'Las Bajadas');
INSERT INTO `parametro_localidad` VALUES ('686', '7', 'Las Caleras');
INSERT INTO `parametro_localidad` VALUES ('687', '7', 'Las Calles');
INSERT INTO `parametro_localidad` VALUES ('688', '7', 'Las Cañadas');
INSERT INTO `parametro_localidad` VALUES ('689', '7', 'Las Gramillas');
INSERT INTO `parametro_localidad` VALUES ('690', '7', 'Las Higueras');
INSERT INTO `parametro_localidad` VALUES ('691', '7', 'Las Isletillas');
INSERT INTO `parametro_localidad` VALUES ('692', '7', 'Las Junturas');
INSERT INTO `parametro_localidad` VALUES ('693', '7', 'Las Palmas');
INSERT INTO `parametro_localidad` VALUES ('694', '7', 'Las Peñas');
INSERT INTO `parametro_localidad` VALUES ('695', '7', 'Las Peñas Sud');
INSERT INTO `parametro_localidad` VALUES ('696', '7', 'Las Perdices');
INSERT INTO `parametro_localidad` VALUES ('697', '7', 'Las Playas');
INSERT INTO `parametro_localidad` VALUES ('698', '7', 'Las Rabonas');
INSERT INTO `parametro_localidad` VALUES ('699', '7', 'Las Saladas');
INSERT INTO `parametro_localidad` VALUES ('700', '7', 'Las Tapias');
INSERT INTO `parametro_localidad` VALUES ('701', '7', 'Las Varas');
INSERT INTO `parametro_localidad` VALUES ('702', '7', 'Las Varillas');
INSERT INTO `parametro_localidad` VALUES ('703', '7', 'Las Vertientes');
INSERT INTO `parametro_localidad` VALUES ('704', '7', 'Leguizamón');
INSERT INTO `parametro_localidad` VALUES ('705', '7', 'Leones');
INSERT INTO `parametro_localidad` VALUES ('706', '7', 'Los Cedros');
INSERT INTO `parametro_localidad` VALUES ('707', '7', 'Los Cerrillos');
INSERT INTO `parametro_localidad` VALUES ('708', '7', 'Los Chañaritos (C.E)');
INSERT INTO `parametro_localidad` VALUES ('709', '7', 'Los Chanaritos (R.S)');
INSERT INTO `parametro_localidad` VALUES ('710', '7', 'Los Cisnes');
INSERT INTO `parametro_localidad` VALUES ('711', '7', 'Los Cocos');
INSERT INTO `parametro_localidad` VALUES ('712', '7', 'Los Cóndores');
INSERT INTO `parametro_localidad` VALUES ('713', '7', 'Los Hornillos');
INSERT INTO `parametro_localidad` VALUES ('714', '7', 'Los Hoyos');
INSERT INTO `parametro_localidad` VALUES ('715', '7', 'Los Mistoles');
INSERT INTO `parametro_localidad` VALUES ('716', '7', 'Los Molinos');
INSERT INTO `parametro_localidad` VALUES ('717', '7', 'Los Pozos');
INSERT INTO `parametro_localidad` VALUES ('718', '7', 'Los Reartes');
INSERT INTO `parametro_localidad` VALUES ('719', '7', 'Los Surgentes');
INSERT INTO `parametro_localidad` VALUES ('720', '7', 'Los Talares');
INSERT INTO `parametro_localidad` VALUES ('721', '7', 'Los Zorros');
INSERT INTO `parametro_localidad` VALUES ('722', '7', 'Lozada');
INSERT INTO `parametro_localidad` VALUES ('723', '7', 'Luca');
INSERT INTO `parametro_localidad` VALUES ('724', '7', 'Luque');
INSERT INTO `parametro_localidad` VALUES ('725', '7', 'Luyaba');
INSERT INTO `parametro_localidad` VALUES ('726', '7', 'Malagueño');
INSERT INTO `parametro_localidad` VALUES ('727', '7', 'Malena');
INSERT INTO `parametro_localidad` VALUES ('728', '7', 'Malvinas Argentinas');
INSERT INTO `parametro_localidad` VALUES ('729', '7', 'Manfredi');
INSERT INTO `parametro_localidad` VALUES ('730', '7', 'Maquinista Gallini');
INSERT INTO `parametro_localidad` VALUES ('731', '7', 'Marcos Juárez');
INSERT INTO `parametro_localidad` VALUES ('732', '7', 'Marull');
INSERT INTO `parametro_localidad` VALUES ('733', '7', 'Matorrales');
INSERT INTO `parametro_localidad` VALUES ('734', '7', 'Mattaldi');
INSERT INTO `parametro_localidad` VALUES ('735', '7', 'Mayu Sumaj');
INSERT INTO `parametro_localidad` VALUES ('736', '7', 'Media Naranja');
INSERT INTO `parametro_localidad` VALUES ('737', '7', 'Melo');
INSERT INTO `parametro_localidad` VALUES ('738', '7', 'Mendiolaza');
INSERT INTO `parametro_localidad` VALUES ('739', '7', 'Mi Granja');
INSERT INTO `parametro_localidad` VALUES ('740', '7', 'Mina Clavero');
INSERT INTO `parametro_localidad` VALUES ('741', '7', 'Miramar');
INSERT INTO `parametro_localidad` VALUES ('742', '7', 'Morrison');
INSERT INTO `parametro_localidad` VALUES ('743', '7', 'Morteros');
INSERT INTO `parametro_localidad` VALUES ('744', '7', 'Mte. Buey');
INSERT INTO `parametro_localidad` VALUES ('745', '7', 'Mte. Cristo');
INSERT INTO `parametro_localidad` VALUES ('746', '7', 'Mte. De Los Gauchos');
INSERT INTO `parametro_localidad` VALUES ('747', '7', 'Mte. Leña');
INSERT INTO `parametro_localidad` VALUES ('748', '7', 'Mte. Maíz');
INSERT INTO `parametro_localidad` VALUES ('749', '7', 'Mte. Ralo');
INSERT INTO `parametro_localidad` VALUES ('750', '7', 'Nicolás Bruzone');
INSERT INTO `parametro_localidad` VALUES ('751', '7', 'Noetinger');
INSERT INTO `parametro_localidad` VALUES ('752', '7', 'Nono');
INSERT INTO `parametro_localidad` VALUES ('753', '7', 'Nueva 7');
INSERT INTO `parametro_localidad` VALUES ('754', '7', 'Obispo Trejo');
INSERT INTO `parametro_localidad` VALUES ('755', '7', 'Olaeta');
INSERT INTO `parametro_localidad` VALUES ('756', '7', 'Oliva');
INSERT INTO `parametro_localidad` VALUES ('757', '7', 'Olivares San Nicolás');
INSERT INTO `parametro_localidad` VALUES ('758', '7', 'Onagolty');
INSERT INTO `parametro_localidad` VALUES ('759', '7', 'Oncativo');
INSERT INTO `parametro_localidad` VALUES ('760', '7', 'Ordoñez');
INSERT INTO `parametro_localidad` VALUES ('761', '7', 'Pacheco De Melo');
INSERT INTO `parametro_localidad` VALUES ('762', '7', 'Pampayasta N.');
INSERT INTO `parametro_localidad` VALUES ('763', '7', 'Pampayasta S.');
INSERT INTO `parametro_localidad` VALUES ('764', '7', 'Panaholma');
INSERT INTO `parametro_localidad` VALUES ('765', '7', 'Pascanas');
INSERT INTO `parametro_localidad` VALUES ('766', '7', 'Pasco');
INSERT INTO `parametro_localidad` VALUES ('767', '7', 'Paso del Durazno');
INSERT INTO `parametro_localidad` VALUES ('768', '7', 'Paso Viejo');
INSERT INTO `parametro_localidad` VALUES ('769', '7', 'Pilar');
INSERT INTO `parametro_localidad` VALUES ('770', '7', 'Pincén');
INSERT INTO `parametro_localidad` VALUES ('771', '7', 'Piquillín');
INSERT INTO `parametro_localidad` VALUES ('772', '7', 'Plaza de Mercedes');
INSERT INTO `parametro_localidad` VALUES ('773', '7', 'Plaza Luxardo');
INSERT INTO `parametro_localidad` VALUES ('774', '7', 'Porteña');
INSERT INTO `parametro_localidad` VALUES ('775', '7', 'Potrero de Garay');
INSERT INTO `parametro_localidad` VALUES ('776', '7', 'Pozo del Molle');
INSERT INTO `parametro_localidad` VALUES ('777', '7', 'Pozo Nuevo');
INSERT INTO `parametro_localidad` VALUES ('778', '7', 'Pueblo Italiano');
INSERT INTO `parametro_localidad` VALUES ('779', '7', 'Puesto de Castro');
INSERT INTO `parametro_localidad` VALUES ('780', '7', 'Punta del Agua');
INSERT INTO `parametro_localidad` VALUES ('781', '7', 'Quebracho Herrado');
INSERT INTO `parametro_localidad` VALUES ('782', '7', 'Quilino');
INSERT INTO `parametro_localidad` VALUES ('783', '7', 'Rafael García');
INSERT INTO `parametro_localidad` VALUES ('784', '7', 'Ranqueles');
INSERT INTO `parametro_localidad` VALUES ('785', '7', 'Rayo Cortado');
INSERT INTO `parametro_localidad` VALUES ('786', '7', 'Reducción');
INSERT INTO `parametro_localidad` VALUES ('787', '7', 'Rincón');
INSERT INTO `parametro_localidad` VALUES ('788', '7', 'Río Bamba');
INSERT INTO `parametro_localidad` VALUES ('789', '7', 'Río Ceballos');
INSERT INTO `parametro_localidad` VALUES ('790', '7', 'Río Cuarto');
INSERT INTO `parametro_localidad` VALUES ('791', '7', 'Río de Los Sauces');
INSERT INTO `parametro_localidad` VALUES ('792', '7', 'Río Primero');
INSERT INTO `parametro_localidad` VALUES ('793', '7', 'Río Segundo');
INSERT INTO `parametro_localidad` VALUES ('794', '7', 'Río Tercero');
INSERT INTO `parametro_localidad` VALUES ('795', '7', 'Rosales');
INSERT INTO `parametro_localidad` VALUES ('796', '7', 'Rosario del Saladillo');
INSERT INTO `parametro_localidad` VALUES ('797', '7', 'Sacanta');
INSERT INTO `parametro_localidad` VALUES ('798', '7', 'Sagrada Familia');
INSERT INTO `parametro_localidad` VALUES ('799', '7', 'Saira');
INSERT INTO `parametro_localidad` VALUES ('800', '7', 'Saladillo');
INSERT INTO `parametro_localidad` VALUES ('801', '7', 'Saldán');
INSERT INTO `parametro_localidad` VALUES ('802', '7', 'Salsacate');
INSERT INTO `parametro_localidad` VALUES ('803', '7', 'Salsipuedes');
INSERT INTO `parametro_localidad` VALUES ('804', '7', 'Sampacho');
INSERT INTO `parametro_localidad` VALUES ('805', '7', 'San Agustín');
INSERT INTO `parametro_localidad` VALUES ('806', '7', 'San Antonio de Arredondo');
INSERT INTO `parametro_localidad` VALUES ('807', '7', 'San Antonio de Litín');
INSERT INTO `parametro_localidad` VALUES ('808', '7', 'San Basilio');
INSERT INTO `parametro_localidad` VALUES ('809', '7', 'San Carlos Minas');
INSERT INTO `parametro_localidad` VALUES ('810', '7', 'San Clemente');
INSERT INTO `parametro_localidad` VALUES ('811', '7', 'San Esteban');
INSERT INTO `parametro_localidad` VALUES ('812', '7', 'San Francisco');
INSERT INTO `parametro_localidad` VALUES ('813', '7', 'San Ignacio');
INSERT INTO `parametro_localidad` VALUES ('814', '7', 'San Javier');
INSERT INTO `parametro_localidad` VALUES ('815', '7', 'San Jerónimo');
INSERT INTO `parametro_localidad` VALUES ('816', '7', 'San Joaquín');
INSERT INTO `parametro_localidad` VALUES ('817', '7', 'San José de La Dormida');
INSERT INTO `parametro_localidad` VALUES ('818', '7', 'San José de Las Salinas');
INSERT INTO `parametro_localidad` VALUES ('819', '7', 'San Lorenzo');
INSERT INTO `parametro_localidad` VALUES ('820', '7', 'San Marcos Sierras');
INSERT INTO `parametro_localidad` VALUES ('821', '7', 'San Marcos Sud');
INSERT INTO `parametro_localidad` VALUES ('822', '7', 'San Pedro');
INSERT INTO `parametro_localidad` VALUES ('823', '7', 'San Pedro N.');
INSERT INTO `parametro_localidad` VALUES ('824', '7', 'San Roque');
INSERT INTO `parametro_localidad` VALUES ('825', '7', 'San Vicente');
INSERT INTO `parametro_localidad` VALUES ('826', '7', 'Santa Catalina');
INSERT INTO `parametro_localidad` VALUES ('827', '7', 'Santa Elena');
INSERT INTO `parametro_localidad` VALUES ('828', '7', 'Santa Eufemia');
INSERT INTO `parametro_localidad` VALUES ('829', '7', 'Santa Maria');
INSERT INTO `parametro_localidad` VALUES ('830', '7', 'Sarmiento');
INSERT INTO `parametro_localidad` VALUES ('831', '7', 'Saturnino M.Laspiur');
INSERT INTO `parametro_localidad` VALUES ('832', '7', 'Sauce Arriba');
INSERT INTO `parametro_localidad` VALUES ('833', '7', 'Sebastián Elcano');
INSERT INTO `parametro_localidad` VALUES ('834', '7', 'Seeber');
INSERT INTO `parametro_localidad` VALUES ('835', '7', 'Segunda Usina');
INSERT INTO `parametro_localidad` VALUES ('836', '7', 'Serrano');
INSERT INTO `parametro_localidad` VALUES ('837', '7', 'Serrezuela');
INSERT INTO `parametro_localidad` VALUES ('838', '7', 'Sgo. Temple');
INSERT INTO `parametro_localidad` VALUES ('839', '7', 'Silvio Pellico');
INSERT INTO `parametro_localidad` VALUES ('840', '7', 'Simbolar');
INSERT INTO `parametro_localidad` VALUES ('841', '7', 'Sinsacate');
INSERT INTO `parametro_localidad` VALUES ('842', '7', 'Sta. Rosa de Calamuchita');
INSERT INTO `parametro_localidad` VALUES ('843', '7', 'Sta. Rosa de Río Primero');
INSERT INTO `parametro_localidad` VALUES ('844', '7', 'Suco');
INSERT INTO `parametro_localidad` VALUES ('845', '7', 'Tala Cañada');
INSERT INTO `parametro_localidad` VALUES ('846', '7', 'Tala Huasi');
INSERT INTO `parametro_localidad` VALUES ('847', '7', 'Talaini');
INSERT INTO `parametro_localidad` VALUES ('848', '7', 'Tancacha');
INSERT INTO `parametro_localidad` VALUES ('849', '7', 'Tanti');
INSERT INTO `parametro_localidad` VALUES ('850', '7', 'Ticino');
INSERT INTO `parametro_localidad` VALUES ('851', '7', 'Tinoco');
INSERT INTO `parametro_localidad` VALUES ('852', '7', 'Tío Pujio');
INSERT INTO `parametro_localidad` VALUES ('853', '7', 'Toledo');
INSERT INTO `parametro_localidad` VALUES ('854', '7', 'Toro Pujio');
INSERT INTO `parametro_localidad` VALUES ('855', '7', 'Tosno');
INSERT INTO `parametro_localidad` VALUES ('856', '7', 'Tosquita');
INSERT INTO `parametro_localidad` VALUES ('857', '7', 'Tránsito');
INSERT INTO `parametro_localidad` VALUES ('858', '7', 'Tuclame');
INSERT INTO `parametro_localidad` VALUES ('859', '7', 'Tutti');
INSERT INTO `parametro_localidad` VALUES ('860', '7', 'Ucacha');
INSERT INTO `parametro_localidad` VALUES ('861', '7', 'Unquillo');
INSERT INTO `parametro_localidad` VALUES ('862', '7', 'Valle de Anisacate');
INSERT INTO `parametro_localidad` VALUES ('863', '7', 'Valle Hermoso');
INSERT INTO `parametro_localidad` VALUES ('864', '7', 'Vélez Sarfield');
INSERT INTO `parametro_localidad` VALUES ('865', '7', 'Viamonte');
INSERT INTO `parametro_localidad` VALUES ('866', '7', 'Vicuña Mackenna');
INSERT INTO `parametro_localidad` VALUES ('867', '7', 'Villa Allende');
INSERT INTO `parametro_localidad` VALUES ('868', '7', 'Villa Amancay');
INSERT INTO `parametro_localidad` VALUES ('869', '7', 'Villa Ascasubi');
INSERT INTO `parametro_localidad` VALUES ('870', '7', 'Villa Candelaria N.');
INSERT INTO `parametro_localidad` VALUES ('871', '7', 'Villa Carlos Paz');
INSERT INTO `parametro_localidad` VALUES ('872', '7', 'Villa Cerro Azul');
INSERT INTO `parametro_localidad` VALUES ('873', '7', 'Villa Ciudad de América');
INSERT INTO `parametro_localidad` VALUES ('874', '7', 'Villa Ciudad Pque Los Reartes');
INSERT INTO `parametro_localidad` VALUES ('875', '7', 'Villa Concepción del Tío');
INSERT INTO `parametro_localidad` VALUES ('876', '7', 'Villa Cura Brochero');
INSERT INTO `parametro_localidad` VALUES ('877', '7', 'Villa de Las Rosas');
INSERT INTO `parametro_localidad` VALUES ('878', '7', 'Villa de María');
INSERT INTO `parametro_localidad` VALUES ('879', '7', 'Villa de Pocho');
INSERT INTO `parametro_localidad` VALUES ('880', '7', 'Villa de Soto');
INSERT INTO `parametro_localidad` VALUES ('881', '7', 'Villa del Dique');
INSERT INTO `parametro_localidad` VALUES ('882', '7', 'Villa del Prado');
INSERT INTO `parametro_localidad` VALUES ('883', '7', 'Villa del Rosario');
INSERT INTO `parametro_localidad` VALUES ('884', '7', 'Villa del Totoral');
INSERT INTO `parametro_localidad` VALUES ('885', '7', 'Villa Dolores');
INSERT INTO `parametro_localidad` VALUES ('886', '7', 'Villa El Chancay');
INSERT INTO `parametro_localidad` VALUES ('887', '7', 'Villa Elisa');
INSERT INTO `parametro_localidad` VALUES ('888', '7', 'Villa Flor Serrana');
INSERT INTO `parametro_localidad` VALUES ('889', '7', 'Villa Fontana');
INSERT INTO `parametro_localidad` VALUES ('890', '7', 'Villa Giardino');
INSERT INTO `parametro_localidad` VALUES ('891', '7', 'Villa Gral. Belgrano');
INSERT INTO `parametro_localidad` VALUES ('892', '7', 'Villa Gutierrez');
INSERT INTO `parametro_localidad` VALUES ('893', '7', 'Villa Huidobro');
INSERT INTO `parametro_localidad` VALUES ('894', '7', 'Villa La Bolsa');
INSERT INTO `parametro_localidad` VALUES ('895', '7', 'Villa Los Aromos');
INSERT INTO `parametro_localidad` VALUES ('896', '7', 'Villa Los Patos');
INSERT INTO `parametro_localidad` VALUES ('897', '7', 'Villa María');
INSERT INTO `parametro_localidad` VALUES ('898', '7', 'Villa Nueva');
INSERT INTO `parametro_localidad` VALUES ('899', '7', 'Villa Pque. Santa Ana');
INSERT INTO `parametro_localidad` VALUES ('900', '7', 'Villa Pque. Siquiman');
INSERT INTO `parametro_localidad` VALUES ('901', '7', 'Villa Quillinzo');
INSERT INTO `parametro_localidad` VALUES ('902', '7', 'Villa Rossi');
INSERT INTO `parametro_localidad` VALUES ('903', '7', 'Villa Rumipal');
INSERT INTO `parametro_localidad` VALUES ('904', '7', 'Villa San Esteban');
INSERT INTO `parametro_localidad` VALUES ('905', '7', 'Villa San Isidro');
INSERT INTO `parametro_localidad` VALUES ('906', '7', 'Villa 21');
INSERT INTO `parametro_localidad` VALUES ('907', '7', 'Villa Sarmiento (G.R)');
INSERT INTO `parametro_localidad` VALUES ('908', '7', 'Villa Sarmiento (S.A)');
INSERT INTO `parametro_localidad` VALUES ('909', '7', 'Villa Tulumba');
INSERT INTO `parametro_localidad` VALUES ('910', '7', 'Villa Valeria');
INSERT INTO `parametro_localidad` VALUES ('911', '7', 'Villa Yacanto');
INSERT INTO `parametro_localidad` VALUES ('912', '7', 'Washington');
INSERT INTO `parametro_localidad` VALUES ('913', '7', 'Wenceslao Escalante');
INSERT INTO `parametro_localidad` VALUES ('914', '7', 'Ycho Cruz Sierras');
INSERT INTO `parametro_localidad` VALUES ('915', '8', 'Alvear');
INSERT INTO `parametro_localidad` VALUES ('916', '8', 'Bella Vista');
INSERT INTO `parametro_localidad` VALUES ('917', '8', 'Berón de Astrada');
INSERT INTO `parametro_localidad` VALUES ('918', '8', 'Bonpland');
INSERT INTO `parametro_localidad` VALUES ('919', '8', 'Caá Cati');
INSERT INTO `parametro_localidad` VALUES ('920', '8', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('921', '8', 'Chavarría');
INSERT INTO `parametro_localidad` VALUES ('922', '8', 'Col. C. Pellegrini');
INSERT INTO `parametro_localidad` VALUES ('923', '8', 'Col. Libertad');
INSERT INTO `parametro_localidad` VALUES ('924', '8', 'Col. Liebig');
INSERT INTO `parametro_localidad` VALUES ('925', '8', 'Col. Sta Rosa');
INSERT INTO `parametro_localidad` VALUES ('926', '8', 'Concepción');
INSERT INTO `parametro_localidad` VALUES ('927', '8', 'Cruz de Los Milagros');
INSERT INTO `parametro_localidad` VALUES ('928', '8', 'Curuzú-Cuatiá');
INSERT INTO `parametro_localidad` VALUES ('929', '8', 'Empedrado');
INSERT INTO `parametro_localidad` VALUES ('930', '8', 'Esquina');
INSERT INTO `parametro_localidad` VALUES ('931', '8', 'Estación Torrent');
INSERT INTO `parametro_localidad` VALUES ('932', '8', 'Felipe Yofré');
INSERT INTO `parametro_localidad` VALUES ('933', '8', 'Garruchos');
INSERT INTO `parametro_localidad` VALUES ('934', '8', 'Gdor. Agrónomo');
INSERT INTO `parametro_localidad` VALUES ('935', '8', 'Gdor. Martínez');
INSERT INTO `parametro_localidad` VALUES ('936', '8', 'Goya');
INSERT INTO `parametro_localidad` VALUES ('937', '8', 'Guaviravi');
INSERT INTO `parametro_localidad` VALUES ('938', '8', 'Herlitzka');
INSERT INTO `parametro_localidad` VALUES ('939', '8', 'Ita-Ibate');
INSERT INTO `parametro_localidad` VALUES ('940', '8', 'Itatí');
INSERT INTO `parametro_localidad` VALUES ('941', '8', 'Ituzaingó');
INSERT INTO `parametro_localidad` VALUES ('942', '8', 'José Rafael Gómez');
INSERT INTO `parametro_localidad` VALUES ('943', '8', 'Juan Pujol');
INSERT INTO `parametro_localidad` VALUES ('944', '8', 'La Cruz');
INSERT INTO `parametro_localidad` VALUES ('945', '8', 'Lavalle');
INSERT INTO `parametro_localidad` VALUES ('946', '8', 'Lomas de Vallejos');
INSERT INTO `parametro_localidad` VALUES ('947', '8', 'Loreto');
INSERT INTO `parametro_localidad` VALUES ('948', '8', 'Mariano I. Loza');
INSERT INTO `parametro_localidad` VALUES ('949', '8', 'Mburucuyá');
INSERT INTO `parametro_localidad` VALUES ('950', '8', 'Mercedes');
INSERT INTO `parametro_localidad` VALUES ('951', '8', 'Mocoretá');
INSERT INTO `parametro_localidad` VALUES ('952', '8', 'Mte. Caseros');
INSERT INTO `parametro_localidad` VALUES ('953', '8', 'Nueve de Julio');
INSERT INTO `parametro_localidad` VALUES ('954', '8', 'Palmar Grande');
INSERT INTO `parametro_localidad` VALUES ('955', '8', 'Parada Pucheta');
INSERT INTO `parametro_localidad` VALUES ('956', '8', 'Paso de La Patria');
INSERT INTO `parametro_localidad` VALUES ('957', '8', 'Paso de Los Libres');
INSERT INTO `parametro_localidad` VALUES ('958', '8', 'Pedro R. Fernandez');
INSERT INTO `parametro_localidad` VALUES ('959', '8', 'Perugorría');
INSERT INTO `parametro_localidad` VALUES ('960', '8', 'Pueblo Libertador');
INSERT INTO `parametro_localidad` VALUES ('961', '8', 'Ramada Paso');
INSERT INTO `parametro_localidad` VALUES ('962', '8', 'Riachuelo');
INSERT INTO `parametro_localidad` VALUES ('963', '8', 'Saladas');
INSERT INTO `parametro_localidad` VALUES ('964', '8', 'San Antonio');
INSERT INTO `parametro_localidad` VALUES ('965', '8', 'San Carlos');
INSERT INTO `parametro_localidad` VALUES ('966', '8', 'San Cosme');
INSERT INTO `parametro_localidad` VALUES ('967', '8', 'San Lorenzo');
INSERT INTO `parametro_localidad` VALUES ('968', '8', '20 del Palmar');
INSERT INTO `parametro_localidad` VALUES ('969', '8', 'San Miguel');
INSERT INTO `parametro_localidad` VALUES ('970', '8', 'San Roque');
INSERT INTO `parametro_localidad` VALUES ('971', '8', 'Santa Ana');
INSERT INTO `parametro_localidad` VALUES ('972', '8', 'Santa Lucía');
INSERT INTO `parametro_localidad` VALUES ('973', '8', 'Santo Tomé');
INSERT INTO `parametro_localidad` VALUES ('974', '8', 'Sauce');
INSERT INTO `parametro_localidad` VALUES ('975', '8', 'Tabay');
INSERT INTO `parametro_localidad` VALUES ('976', '8', 'Tapebicuá');
INSERT INTO `parametro_localidad` VALUES ('977', '8', 'Tatacua');
INSERT INTO `parametro_localidad` VALUES ('978', '8', 'Virasoro');
INSERT INTO `parametro_localidad` VALUES ('979', '8', 'Yapeyú');
INSERT INTO `parametro_localidad` VALUES ('980', '8', 'Yataití Calle');
INSERT INTO `parametro_localidad` VALUES ('981', '9', 'Alarcón');
INSERT INTO `parametro_localidad` VALUES ('982', '9', 'Alcaraz');
INSERT INTO `parametro_localidad` VALUES ('983', '9', 'Alcaraz N.');
INSERT INTO `parametro_localidad` VALUES ('984', '9', 'Alcaraz S.');
INSERT INTO `parametro_localidad` VALUES ('985', '9', 'Aldea Asunción');
INSERT INTO `parametro_localidad` VALUES ('986', '9', 'Aldea Brasilera');
INSERT INTO `parametro_localidad` VALUES ('987', '9', 'Aldea Elgenfeld');
INSERT INTO `parametro_localidad` VALUES ('988', '9', 'Aldea Grapschental');
INSERT INTO `parametro_localidad` VALUES ('989', '9', 'Aldea Ma. Luisa');
INSERT INTO `parametro_localidad` VALUES ('990', '9', 'Aldea Protestante');
INSERT INTO `parametro_localidad` VALUES ('991', '9', 'Aldea Salto');
INSERT INTO `parametro_localidad` VALUES ('992', '9', 'Aldea San Antonio (G)');
INSERT INTO `parametro_localidad` VALUES ('993', '9', 'Aldea San Antonio (P)');
INSERT INTO `parametro_localidad` VALUES ('994', '9', 'Aldea 19');
INSERT INTO `parametro_localidad` VALUES ('995', '9', 'Aldea San Miguel');
INSERT INTO `parametro_localidad` VALUES ('996', '9', 'Aldea San Rafael');
INSERT INTO `parametro_localidad` VALUES ('997', '9', 'Aldea Spatzenkutter');
INSERT INTO `parametro_localidad` VALUES ('998', '9', 'Aldea Sta. María');
INSERT INTO `parametro_localidad` VALUES ('999', '9', 'Aldea Sta. Rosa');
INSERT INTO `parametro_localidad` VALUES ('1000', '9', 'Aldea Valle María');
INSERT INTO `parametro_localidad` VALUES ('1001', '9', 'Altamirano Sur');
INSERT INTO `parametro_localidad` VALUES ('1002', '9', 'Antelo');
INSERT INTO `parametro_localidad` VALUES ('1003', '9', 'Antonio Tomás');
INSERT INTO `parametro_localidad` VALUES ('1004', '9', 'Aranguren');
INSERT INTO `parametro_localidad` VALUES ('1005', '9', 'Arroyo Barú');
INSERT INTO `parametro_localidad` VALUES ('1006', '9', 'Arroyo Burgos');
INSERT INTO `parametro_localidad` VALUES ('1007', '9', 'Arroyo Clé');
INSERT INTO `parametro_localidad` VALUES ('1008', '9', 'Arroyo Corralito');
INSERT INTO `parametro_localidad` VALUES ('1009', '9', 'Arroyo del Medio');
INSERT INTO `parametro_localidad` VALUES ('1010', '9', 'Arroyo Maturrango');
INSERT INTO `parametro_localidad` VALUES ('1011', '9', 'Arroyo Palo Seco');
INSERT INTO `parametro_localidad` VALUES ('1012', '9', 'Banderas');
INSERT INTO `parametro_localidad` VALUES ('1013', '9', 'Basavilbaso');
INSERT INTO `parametro_localidad` VALUES ('1014', '9', 'Betbeder');
INSERT INTO `parametro_localidad` VALUES ('1015', '9', 'Bovril');
INSERT INTO `parametro_localidad` VALUES ('1016', '9', 'Caseros');
INSERT INTO `parametro_localidad` VALUES ('1017', '9', 'Ceibas');
INSERT INTO `parametro_localidad` VALUES ('1018', '9', 'Cerrito');
INSERT INTO `parametro_localidad` VALUES ('1019', '9', 'Chajarí');
INSERT INTO `parametro_localidad` VALUES ('1020', '9', 'Chilcas');
INSERT INTO `parametro_localidad` VALUES ('1021', '9', 'Clodomiro Ledesma');
INSERT INTO `parametro_localidad` VALUES ('1022', '9', 'Col. Alemana');
INSERT INTO `parametro_localidad` VALUES ('1023', '9', 'Col. Avellaneda');
INSERT INTO `parametro_localidad` VALUES ('1024', '9', 'Col. Avigdor');
INSERT INTO `parametro_localidad` VALUES ('1025', '9', 'Col. Ayuí');
INSERT INTO `parametro_localidad` VALUES ('1026', '9', 'Col. Baylina');
INSERT INTO `parametro_localidad` VALUES ('1027', '9', 'Col. Carrasco');
INSERT INTO `parametro_localidad` VALUES ('1028', '9', 'Col. Celina');
INSERT INTO `parametro_localidad` VALUES ('1029', '9', 'Col. Cerrito');
INSERT INTO `parametro_localidad` VALUES ('1030', '9', 'Col. Crespo');
INSERT INTO `parametro_localidad` VALUES ('1031', '9', 'Col. Elia');
INSERT INTO `parametro_localidad` VALUES ('1032', '9', 'Col. Ensayo');
INSERT INTO `parametro_localidad` VALUES ('1033', '9', 'Col. Gral. Roca');
INSERT INTO `parametro_localidad` VALUES ('1034', '9', 'Col. La Argentina');
INSERT INTO `parametro_localidad` VALUES ('1035', '9', 'Col. Merou');
INSERT INTO `parametro_localidad` VALUES ('1036', '9', 'Col. Oficial Nª3');
INSERT INTO `parametro_localidad` VALUES ('1037', '9', 'Col. Oficial Nº13');
INSERT INTO `parametro_localidad` VALUES ('1038', '9', 'Col. Oficial Nº14');
INSERT INTO `parametro_localidad` VALUES ('1039', '9', 'Col. Oficial Nº5');
INSERT INTO `parametro_localidad` VALUES ('1040', '9', 'Col. Reffino');
INSERT INTO `parametro_localidad` VALUES ('1041', '9', 'Col. Tunas');
INSERT INTO `parametro_localidad` VALUES ('1042', '9', 'Col. Viraró');
INSERT INTO `parametro_localidad` VALUES ('1043', '9', 'Colón');
INSERT INTO `parametro_localidad` VALUES ('1044', '9', 'Concepción del Uruguay');
INSERT INTO `parametro_localidad` VALUES ('1045', '9', 'Concordia');
INSERT INTO `parametro_localidad` VALUES ('1046', '9', 'Conscripto Bernardi');
INSERT INTO `parametro_localidad` VALUES ('1047', '9', 'Costa Grande');
INSERT INTO `parametro_localidad` VALUES ('1048', '9', 'Costa San Antonio');
INSERT INTO `parametro_localidad` VALUES ('1049', '9', 'Costa Uruguay N.');
INSERT INTO `parametro_localidad` VALUES ('1050', '9', 'Costa Uruguay S.');
INSERT INTO `parametro_localidad` VALUES ('1051', '9', 'Crespo');
INSERT INTO `parametro_localidad` VALUES ('1052', '9', 'Crucecitas 3ª');
INSERT INTO `parametro_localidad` VALUES ('1053', '9', 'Crucecitas 7ª');
INSERT INTO `parametro_localidad` VALUES ('1054', '9', 'Crucecitas 8ª');
INSERT INTO `parametro_localidad` VALUES ('1055', '9', 'Cuchilla Redonda');
INSERT INTO `parametro_localidad` VALUES ('1056', '9', 'Curtiembre');
INSERT INTO `parametro_localidad` VALUES ('1057', '9', 'Diamante');
INSERT INTO `parametro_localidad` VALUES ('1058', '9', 'Distrito 6º');
INSERT INTO `parametro_localidad` VALUES ('1059', '9', 'Distrito Chañar');
INSERT INTO `parametro_localidad` VALUES ('1060', '9', 'Distrito Chiqueros');
INSERT INTO `parametro_localidad` VALUES ('1061', '9', 'Distrito Cuarto');
INSERT INTO `parametro_localidad` VALUES ('1062', '9', 'Distrito Diego López');
INSERT INTO `parametro_localidad` VALUES ('1063', '9', 'Distrito Pajonal');
INSERT INTO `parametro_localidad` VALUES ('1064', '9', 'Distrito Sauce');
INSERT INTO `parametro_localidad` VALUES ('1065', '9', 'Distrito Tala');
INSERT INTO `parametro_localidad` VALUES ('1066', '9', 'Distrito Talitas');
INSERT INTO `parametro_localidad` VALUES ('1067', '9', 'Don Cristóbal 1ª Sección');
INSERT INTO `parametro_localidad` VALUES ('1068', '9', 'Don Cristóbal 2ª Sección');
INSERT INTO `parametro_localidad` VALUES ('1069', '9', 'Durazno');
INSERT INTO `parametro_localidad` VALUES ('1070', '9', 'El Cimarrón');
INSERT INTO `parametro_localidad` VALUES ('1071', '9', 'El Gramillal');
INSERT INTO `parametro_localidad` VALUES ('1072', '9', 'El Palenque');
INSERT INTO `parametro_localidad` VALUES ('1073', '9', 'El Pingo');
INSERT INTO `parametro_localidad` VALUES ('1074', '9', 'El Quebracho');
INSERT INTO `parametro_localidad` VALUES ('1075', '9', 'El Redomón');
INSERT INTO `parametro_localidad` VALUES ('1076', '9', 'El Solar');
INSERT INTO `parametro_localidad` VALUES ('1077', '9', 'Enrique Carbo');
INSERT INTO `parametro_localidad` VALUES ('1078', '9', '9');
INSERT INTO `parametro_localidad` VALUES ('1079', '9', 'Espinillo N.');
INSERT INTO `parametro_localidad` VALUES ('1080', '9', 'Estación Campos');
INSERT INTO `parametro_localidad` VALUES ('1081', '9', 'Estación Escriña');
INSERT INTO `parametro_localidad` VALUES ('1082', '9', 'Estación Lazo');
INSERT INTO `parametro_localidad` VALUES ('1083', '9', 'Estación Raíces');
INSERT INTO `parametro_localidad` VALUES ('1084', '9', 'Estación Yerúa');
INSERT INTO `parametro_localidad` VALUES ('1085', '9', 'Estancia Grande');
INSERT INTO `parametro_localidad` VALUES ('1086', '9', 'Estancia Líbaros');
INSERT INTO `parametro_localidad` VALUES ('1087', '9', 'Estancia Racedo');
INSERT INTO `parametro_localidad` VALUES ('1088', '9', 'Estancia Solá');
INSERT INTO `parametro_localidad` VALUES ('1089', '9', 'Estancia Yuquerí');
INSERT INTO `parametro_localidad` VALUES ('1090', '9', 'Estaquitas');
INSERT INTO `parametro_localidad` VALUES ('1091', '9', 'Faustino M. Parera');
INSERT INTO `parametro_localidad` VALUES ('1092', '9', 'Febre');
INSERT INTO `parametro_localidad` VALUES ('1093', '9', 'Federación');
INSERT INTO `parametro_localidad` VALUES ('1094', '9', 'Federal');
INSERT INTO `parametro_localidad` VALUES ('1095', '9', 'Gdor. Echagüe');
INSERT INTO `parametro_localidad` VALUES ('1096', '9', 'Gdor. Mansilla');
INSERT INTO `parametro_localidad` VALUES ('1097', '9', 'Gilbert');
INSERT INTO `parametro_localidad` VALUES ('1098', '9', 'González Calderón');
INSERT INTO `parametro_localidad` VALUES ('1099', '9', 'Gral. Almada');
INSERT INTO `parametro_localidad` VALUES ('1100', '9', 'Gral. Alvear');
INSERT INTO `parametro_localidad` VALUES ('1101', '9', 'Gral. Campos');
INSERT INTO `parametro_localidad` VALUES ('1102', '9', 'Gral. Galarza');
INSERT INTO `parametro_localidad` VALUES ('1103', '9', 'Gral. Ramírez');
INSERT INTO `parametro_localidad` VALUES ('1104', '9', 'Gualeguay');
INSERT INTO `parametro_localidad` VALUES ('1105', '9', 'Gualeguaychú');
INSERT INTO `parametro_localidad` VALUES ('1106', '9', 'Gualeguaycito');
INSERT INTO `parametro_localidad` VALUES ('1107', '9', 'Guardamonte');
INSERT INTO `parametro_localidad` VALUES ('1108', '9', 'Hambis');
INSERT INTO `parametro_localidad` VALUES ('1109', '9', 'Hasenkamp');
INSERT INTO `parametro_localidad` VALUES ('1110', '9', 'Hernandarias');
INSERT INTO `parametro_localidad` VALUES ('1111', '9', 'Hernández');
INSERT INTO `parametro_localidad` VALUES ('1112', '9', 'Herrera');
INSERT INTO `parametro_localidad` VALUES ('1113', '9', 'Hinojal');
INSERT INTO `parametro_localidad` VALUES ('1114', '9', 'Hocker');
INSERT INTO `parametro_localidad` VALUES ('1115', '9', 'Ing. Sajaroff');
INSERT INTO `parametro_localidad` VALUES ('1116', '9', 'Irazusta');
INSERT INTO `parametro_localidad` VALUES ('1117', '9', 'Isletas');
INSERT INTO `parametro_localidad` VALUES ('1118', '9', 'J.J De Urquiza');
INSERT INTO `parametro_localidad` VALUES ('1119', '9', 'Jubileo');
INSERT INTO `parametro_localidad` VALUES ('1120', '9', 'La Clarita');
INSERT INTO `parametro_localidad` VALUES ('1121', '9', 'La Criolla');
INSERT INTO `parametro_localidad` VALUES ('1122', '9', 'La Esmeralda');
INSERT INTO `parametro_localidad` VALUES ('1123', '9', 'La Florida');
INSERT INTO `parametro_localidad` VALUES ('1124', '9', 'La Fraternidad');
INSERT INTO `parametro_localidad` VALUES ('1125', '9', 'La Hierra');
INSERT INTO `parametro_localidad` VALUES ('1126', '9', 'La Ollita');
INSERT INTO `parametro_localidad` VALUES ('1127', '9', 'La Paz');
INSERT INTO `parametro_localidad` VALUES ('1128', '9', 'La Picada');
INSERT INTO `parametro_localidad` VALUES ('1129', '9', 'La Providencia');
INSERT INTO `parametro_localidad` VALUES ('1130', '9', 'La Verbena');
INSERT INTO `parametro_localidad` VALUES ('1131', '9', 'Laguna Benítez');
INSERT INTO `parametro_localidad` VALUES ('1132', '9', 'Larroque');
INSERT INTO `parametro_localidad` VALUES ('1133', '9', 'Las Cuevas');
INSERT INTO `parametro_localidad` VALUES ('1134', '9', 'Las Garzas');
INSERT INTO `parametro_localidad` VALUES ('1135', '9', 'Las Guachas');
INSERT INTO `parametro_localidad` VALUES ('1136', '9', 'Las Mercedes');
INSERT INTO `parametro_localidad` VALUES ('1137', '9', 'Las Moscas');
INSERT INTO `parametro_localidad` VALUES ('1138', '9', 'Las Mulitas');
INSERT INTO `parametro_localidad` VALUES ('1139', '9', 'Las Toscas');
INSERT INTO `parametro_localidad` VALUES ('1140', '9', 'Laurencena');
INSERT INTO `parametro_localidad` VALUES ('1141', '9', 'Libertador San Martín');
INSERT INTO `parametro_localidad` VALUES ('1142', '9', 'Loma Limpia');
INSERT INTO `parametro_localidad` VALUES ('1143', '9', 'Los Ceibos');
INSERT INTO `parametro_localidad` VALUES ('1144', '9', 'Los Charruas');
INSERT INTO `parametro_localidad` VALUES ('1145', '9', 'Los Conquistadores');
INSERT INTO `parametro_localidad` VALUES ('1146', '9', 'Lucas González');
INSERT INTO `parametro_localidad` VALUES ('1147', '9', 'Lucas N.');
INSERT INTO `parametro_localidad` VALUES ('1148', '9', 'Lucas S. 1ª');
INSERT INTO `parametro_localidad` VALUES ('1149', '9', 'Lucas S. 2ª');
INSERT INTO `parametro_localidad` VALUES ('1150', '9', 'Maciá');
INSERT INTO `parametro_localidad` VALUES ('1151', '9', 'María Grande');
INSERT INTO `parametro_localidad` VALUES ('1152', '9', 'María Grande 2ª');
INSERT INTO `parametro_localidad` VALUES ('1153', '9', 'Médanos');
INSERT INTO `parametro_localidad` VALUES ('1154', '9', 'Mojones N.');
INSERT INTO `parametro_localidad` VALUES ('1155', '9', 'Mojones S.');
INSERT INTO `parametro_localidad` VALUES ('1156', '9', 'Molino Doll');
INSERT INTO `parametro_localidad` VALUES ('1157', '9', 'Monte Redondo');
INSERT INTO `parametro_localidad` VALUES ('1158', '9', 'Montoya');
INSERT INTO `parametro_localidad` VALUES ('1159', '9', 'Mulas Grandes');
INSERT INTO `parametro_localidad` VALUES ('1160', '9', 'Ñancay');
INSERT INTO `parametro_localidad` VALUES ('1161', '9', 'Nogoyá');
INSERT INTO `parametro_localidad` VALUES ('1162', '9', 'Nueva Escocia');
INSERT INTO `parametro_localidad` VALUES ('1163', '9', 'Nueva Vizcaya');
INSERT INTO `parametro_localidad` VALUES ('1164', '9', 'Ombú');
INSERT INTO `parametro_localidad` VALUES ('1165', '9', 'Oro Verde');
INSERT INTO `parametro_localidad` VALUES ('1166', '9', 'Paraná');
INSERT INTO `parametro_localidad` VALUES ('1167', '9', 'Pasaje Guayaquil');
INSERT INTO `parametro_localidad` VALUES ('1168', '9', 'Pasaje Las Tunas');
INSERT INTO `parametro_localidad` VALUES ('1169', '9', 'Paso de La Arena');
INSERT INTO `parametro_localidad` VALUES ('1170', '9', 'Paso de La Laguna');
INSERT INTO `parametro_localidad` VALUES ('1171', '9', 'Paso de Las Piedras');
INSERT INTO `parametro_localidad` VALUES ('1172', '9', 'Paso Duarte');
INSERT INTO `parametro_localidad` VALUES ('1173', '9', 'Pastor Britos');
INSERT INTO `parametro_localidad` VALUES ('1174', '9', 'Pedernal');
INSERT INTO `parametro_localidad` VALUES ('1175', '9', 'Perdices');
INSERT INTO `parametro_localidad` VALUES ('1176', '9', 'Picada Berón');
INSERT INTO `parametro_localidad` VALUES ('1177', '9', 'Piedras Blancas');
INSERT INTO `parametro_localidad` VALUES ('1178', '9', 'Primer Distrito Cuchilla');
INSERT INTO `parametro_localidad` VALUES ('1179', '9', 'Primero de Mayo');
INSERT INTO `parametro_localidad` VALUES ('1180', '9', 'Pronunciamiento');
INSERT INTO `parametro_localidad` VALUES ('1181', '9', 'Pto. Algarrobo');
INSERT INTO `parametro_localidad` VALUES ('1182', '9', 'Pto. Ibicuy');
INSERT INTO `parametro_localidad` VALUES ('1183', '9', 'Pueblo Brugo');
INSERT INTO `parametro_localidad` VALUES ('1184', '9', 'Pueblo Cazes');
INSERT INTO `parametro_localidad` VALUES ('1185', '9', 'Pueblo Gral. Belgrano');
INSERT INTO `parametro_localidad` VALUES ('1186', '9', 'Pueblo Liebig');
INSERT INTO `parametro_localidad` VALUES ('1187', '9', 'Puerto Yeruá');
INSERT INTO `parametro_localidad` VALUES ('1188', '9', 'Punta del Monte');
INSERT INTO `parametro_localidad` VALUES ('1189', '9', 'Quebracho');
INSERT INTO `parametro_localidad` VALUES ('1190', '9', 'Quinto Distrito');
INSERT INTO `parametro_localidad` VALUES ('1191', '9', 'Raices Oeste');
INSERT INTO `parametro_localidad` VALUES ('1192', '9', 'Rincón de Nogoyá');
INSERT INTO `parametro_localidad` VALUES ('1193', '9', 'Rincón del Cinto');
INSERT INTO `parametro_localidad` VALUES ('1194', '9', 'Rincón del Doll');
INSERT INTO `parametro_localidad` VALUES ('1195', '9', 'Rincón del Gato');
INSERT INTO `parametro_localidad` VALUES ('1196', '9', 'Rocamora');
INSERT INTO `parametro_localidad` VALUES ('1197', '9', 'Rosario del Tala');
INSERT INTO `parametro_localidad` VALUES ('1198', '9', 'San Benito');
INSERT INTO `parametro_localidad` VALUES ('1199', '9', 'San Cipriano');
INSERT INTO `parametro_localidad` VALUES ('1200', '9', 'San Ernesto');
INSERT INTO `parametro_localidad` VALUES ('1201', '9', 'San Gustavo');
INSERT INTO `parametro_localidad` VALUES ('1202', '9', 'San Jaime');
INSERT INTO `parametro_localidad` VALUES ('1203', '9', 'San José');
INSERT INTO `parametro_localidad` VALUES ('1204', '9', 'San José de Feliciano');
INSERT INTO `parametro_localidad` VALUES ('1205', '9', 'San Justo');
INSERT INTO `parametro_localidad` VALUES ('1206', '9', 'San Marcial');
INSERT INTO `parametro_localidad` VALUES ('1207', '9', 'San Pedro');
INSERT INTO `parametro_localidad` VALUES ('1208', '9', 'San Ramírez');
INSERT INTO `parametro_localidad` VALUES ('1209', '9', 'San Ramón');
INSERT INTO `parametro_localidad` VALUES ('1210', '9', 'San Roque');
INSERT INTO `parametro_localidad` VALUES ('1211', '9', 'San Salvador');
INSERT INTO `parametro_localidad` VALUES ('1212', '9', 'San Víctor');
INSERT INTO `parametro_localidad` VALUES ('1213', '9', 'Santa Ana');
INSERT INTO `parametro_localidad` VALUES ('1214', '9', 'Santa Anita');
INSERT INTO `parametro_localidad` VALUES ('1215', '9', 'Santa Elena');
INSERT INTO `parametro_localidad` VALUES ('1216', '9', 'Santa Lucía');
INSERT INTO `parametro_localidad` VALUES ('1217', '9', 'Santa Luisa');
INSERT INTO `parametro_localidad` VALUES ('1218', '9', 'Sauce de Luna');
INSERT INTO `parametro_localidad` VALUES ('1219', '9', 'Sauce Montrull');
INSERT INTO `parametro_localidad` VALUES ('1220', '9', 'Sauce Pinto');
INSERT INTO `parametro_localidad` VALUES ('1221', '9', 'Sauce Sur');
INSERT INTO `parametro_localidad` VALUES ('1222', '9', 'Seguí');
INSERT INTO `parametro_localidad` VALUES ('1223', '9', 'Sir Leonard');
INSERT INTO `parametro_localidad` VALUES ('1224', '9', 'Sosa');
INSERT INTO `parametro_localidad` VALUES ('1225', '9', 'Tabossi');
INSERT INTO `parametro_localidad` VALUES ('1226', '9', 'Tezanos Pinto');
INSERT INTO `parametro_localidad` VALUES ('1227', '9', 'Ubajay');
INSERT INTO `parametro_localidad` VALUES ('1228', '9', 'Urdinarrain');
INSERT INTO `parametro_localidad` VALUES ('1229', '9', 'Veinte de Septiembre');
INSERT INTO `parametro_localidad` VALUES ('1230', '9', 'Viale');
INSERT INTO `parametro_localidad` VALUES ('1231', '9', 'Victoria');
INSERT INTO `parametro_localidad` VALUES ('1232', '9', 'Villa Clara');
INSERT INTO `parametro_localidad` VALUES ('1233', '9', 'Villa del Rosario');
INSERT INTO `parametro_localidad` VALUES ('1234', '9', 'Villa Domínguez');
INSERT INTO `parametro_localidad` VALUES ('1235', '9', 'Villa Elisa');
INSERT INTO `parametro_localidad` VALUES ('1236', '9', 'Villa Fontana');
INSERT INTO `parametro_localidad` VALUES ('1237', '9', 'Villa Gdor. Etchevehere');
INSERT INTO `parametro_localidad` VALUES ('1238', '9', 'Villa Mantero');
INSERT INTO `parametro_localidad` VALUES ('1239', '9', 'Villa Paranacito');
INSERT INTO `parametro_localidad` VALUES ('1240', '9', 'Villa Urquiza');
INSERT INTO `parametro_localidad` VALUES ('1241', '9', 'Villaguay');
INSERT INTO `parametro_localidad` VALUES ('1242', '9', 'Walter Moss');
INSERT INTO `parametro_localidad` VALUES ('1243', '9', 'Yacaré');
INSERT INTO `parametro_localidad` VALUES ('1244', '9', 'Yeso Oeste');
INSERT INTO `parametro_localidad` VALUES ('1245', '10', 'Buena Vista');
INSERT INTO `parametro_localidad` VALUES ('1246', '10', 'Clorinda');
INSERT INTO `parametro_localidad` VALUES ('1247', '10', 'Col. Pastoril');
INSERT INTO `parametro_localidad` VALUES ('1248', '10', 'Cte. Fontana');
INSERT INTO `parametro_localidad` VALUES ('1249', '10', 'El Colorado');
INSERT INTO `parametro_localidad` VALUES ('1250', '10', 'El Espinillo');
INSERT INTO `parametro_localidad` VALUES ('1251', '10', 'Estanislao Del Campo');
INSERT INTO `parametro_localidad` VALUES ('1252', '10', '10');
INSERT INTO `parametro_localidad` VALUES ('1253', '10', 'Fortín Lugones');
INSERT INTO `parametro_localidad` VALUES ('1254', '10', 'Gral. Lucio V. Mansilla');
INSERT INTO `parametro_localidad` VALUES ('1255', '10', 'Gral. Manuel Belgrano');
INSERT INTO `parametro_localidad` VALUES ('1256', '10', 'Gral. Mosconi');
INSERT INTO `parametro_localidad` VALUES ('1257', '10', 'Gran Guardia');
INSERT INTO `parametro_localidad` VALUES ('1258', '10', 'Herradura');
INSERT INTO `parametro_localidad` VALUES ('1259', '10', 'Ibarreta');
INSERT INTO `parametro_localidad` VALUES ('1260', '10', 'Ing. Juárez');
INSERT INTO `parametro_localidad` VALUES ('1261', '10', 'Laguna Blanca');
INSERT INTO `parametro_localidad` VALUES ('1262', '10', 'Laguna Naick Neck');
INSERT INTO `parametro_localidad` VALUES ('1263', '10', 'Laguna Yema');
INSERT INTO `parametro_localidad` VALUES ('1264', '10', 'Las Lomitas');
INSERT INTO `parametro_localidad` VALUES ('1265', '10', 'Los Chiriguanos');
INSERT INTO `parametro_localidad` VALUES ('1266', '10', 'Mayor V. Villafañe');
INSERT INTO `parametro_localidad` VALUES ('1267', '10', 'Misión San Fco.');
INSERT INTO `parametro_localidad` VALUES ('1268', '10', 'Palo Santo');
INSERT INTO `parametro_localidad` VALUES ('1269', '10', 'Pirané');
INSERT INTO `parametro_localidad` VALUES ('1270', '10', 'Pozo del Maza');
INSERT INTO `parametro_localidad` VALUES ('1271', '10', 'Riacho He-He');
INSERT INTO `parametro_localidad` VALUES ('1272', '10', 'San Hilario');
INSERT INTO `parametro_localidad` VALUES ('1273', '10', 'San Martín II');
INSERT INTO `parametro_localidad` VALUES ('1274', '10', 'Siete Palmas');
INSERT INTO `parametro_localidad` VALUES ('1275', '10', 'Subteniente Perín');
INSERT INTO `parametro_localidad` VALUES ('1276', '10', 'Tres Lagunas');
INSERT INTO `parametro_localidad` VALUES ('1277', '10', 'Villa Dos Trece');
INSERT INTO `parametro_localidad` VALUES ('1278', '10', 'Villa Escolar');
INSERT INTO `parametro_localidad` VALUES ('1279', '10', 'Villa Gral. Güemes');
INSERT INTO `parametro_localidad` VALUES ('1280', '11', 'Abdon Castro Tolay');
INSERT INTO `parametro_localidad` VALUES ('1281', '11', 'Abra Pampa');
INSERT INTO `parametro_localidad` VALUES ('1282', '11', 'Abralaite');
INSERT INTO `parametro_localidad` VALUES ('1283', '11', 'Aguas Calientes');
INSERT INTO `parametro_localidad` VALUES ('1284', '11', 'Arrayanal');
INSERT INTO `parametro_localidad` VALUES ('1285', '11', 'Barrios');
INSERT INTO `parametro_localidad` VALUES ('1286', '11', 'Caimancito');
INSERT INTO `parametro_localidad` VALUES ('1287', '11', 'Calilegua');
INSERT INTO `parametro_localidad` VALUES ('1288', '11', 'Cangrejillos');
INSERT INTO `parametro_localidad` VALUES ('1289', '11', 'Caspala');
INSERT INTO `parametro_localidad` VALUES ('1290', '11', 'Catuá');
INSERT INTO `parametro_localidad` VALUES ('1291', '11', 'Cieneguillas');
INSERT INTO `parametro_localidad` VALUES ('1292', '11', 'Coranzulli');
INSERT INTO `parametro_localidad` VALUES ('1293', '11', 'Cusi-Cusi');
INSERT INTO `parametro_localidad` VALUES ('1294', '11', 'El Aguilar');
INSERT INTO `parametro_localidad` VALUES ('1295', '11', 'El Carmen');
INSERT INTO `parametro_localidad` VALUES ('1296', '11', 'El Cóndor');
INSERT INTO `parametro_localidad` VALUES ('1297', '11', 'El Fuerte');
INSERT INTO `parametro_localidad` VALUES ('1298', '11', 'El Piquete');
INSERT INTO `parametro_localidad` VALUES ('1299', '11', 'El Talar');
INSERT INTO `parametro_localidad` VALUES ('1300', '11', 'Fraile Pintado');
INSERT INTO `parametro_localidad` VALUES ('1301', '11', 'Hipólito Yrigoyen');
INSERT INTO `parametro_localidad` VALUES ('1302', '11', 'Huacalera');
INSERT INTO `parametro_localidad` VALUES ('1303', '11', 'Humahuaca');
INSERT INTO `parametro_localidad` VALUES ('1304', '11', 'La Esperanza');
INSERT INTO `parametro_localidad` VALUES ('1305', '11', 'La Mendieta');
INSERT INTO `parametro_localidad` VALUES ('1306', '11', 'La Quiaca');
INSERT INTO `parametro_localidad` VALUES ('1307', '11', 'Ledesma');
INSERT INTO `parametro_localidad` VALUES ('1308', '11', 'Libertador Gral. San Martin');
INSERT INTO `parametro_localidad` VALUES ('1309', '11', 'Maimara');
INSERT INTO `parametro_localidad` VALUES ('1310', '11', 'Mina Pirquitas');
INSERT INTO `parametro_localidad` VALUES ('1311', '11', 'Monterrico');
INSERT INTO `parametro_localidad` VALUES ('1312', '11', 'Palma Sola');
INSERT INTO `parametro_localidad` VALUES ('1313', '11', 'Palpalá');
INSERT INTO `parametro_localidad` VALUES ('1314', '11', 'Pampa Blanca');
INSERT INTO `parametro_localidad` VALUES ('1315', '11', 'Pampichuela');
INSERT INTO `parametro_localidad` VALUES ('1316', '11', 'Perico');
INSERT INTO `parametro_localidad` VALUES ('1317', '11', 'Puesto del Marqués');
INSERT INTO `parametro_localidad` VALUES ('1318', '11', 'Puesto Viejo');
INSERT INTO `parametro_localidad` VALUES ('1319', '11', 'Pumahuasi');
INSERT INTO `parametro_localidad` VALUES ('1320', '11', 'Purmamarca');
INSERT INTO `parametro_localidad` VALUES ('1321', '11', 'Rinconada');
INSERT INTO `parametro_localidad` VALUES ('1322', '11', 'Rodeitos');
INSERT INTO `parametro_localidad` VALUES ('1323', '11', 'Rosario de Río Grande');
INSERT INTO `parametro_localidad` VALUES ('1324', '11', 'San Antonio');
INSERT INTO `parametro_localidad` VALUES ('1325', '11', 'San Francisco');
INSERT INTO `parametro_localidad` VALUES ('1326', '11', 'San Pedro');
INSERT INTO `parametro_localidad` VALUES ('1327', '11', 'San Rafael');
INSERT INTO `parametro_localidad` VALUES ('1328', '11', 'San Salvador');
INSERT INTO `parametro_localidad` VALUES ('1329', '11', 'Santa Ana');
INSERT INTO `parametro_localidad` VALUES ('1330', '11', 'Santa Catalina');
INSERT INTO `parametro_localidad` VALUES ('1331', '11', 'Santa Clara');
INSERT INTO `parametro_localidad` VALUES ('1332', '11', 'Susques');
INSERT INTO `parametro_localidad` VALUES ('1333', '11', 'Tilcara');
INSERT INTO `parametro_localidad` VALUES ('1334', '11', 'Tres Cruces');
INSERT INTO `parametro_localidad` VALUES ('1335', '11', 'Tumbaya');
INSERT INTO `parametro_localidad` VALUES ('1336', '11', 'Valle Grande');
INSERT INTO `parametro_localidad` VALUES ('1337', '11', 'Vinalito');
INSERT INTO `parametro_localidad` VALUES ('1338', '11', 'Volcán');
INSERT INTO `parametro_localidad` VALUES ('1339', '11', 'Yala');
INSERT INTO `parametro_localidad` VALUES ('1340', '11', 'Yaví');
INSERT INTO `parametro_localidad` VALUES ('1341', '11', 'Yuto');
INSERT INTO `parametro_localidad` VALUES ('1342', '12', 'Abramo');
INSERT INTO `parametro_localidad` VALUES ('1343', '12', 'Adolfo Van Praet');
INSERT INTO `parametro_localidad` VALUES ('1344', '12', 'Agustoni');
INSERT INTO `parametro_localidad` VALUES ('1345', '12', 'Algarrobo del Aguila');
INSERT INTO `parametro_localidad` VALUES ('1346', '12', 'Alpachiri');
INSERT INTO `parametro_localidad` VALUES ('1347', '12', 'Alta Italia');
INSERT INTO `parametro_localidad` VALUES ('1348', '12', 'Anguil');
INSERT INTO `parametro_localidad` VALUES ('1349', '12', 'Arata');
INSERT INTO `parametro_localidad` VALUES ('1350', '12', 'Ataliva Roca');
INSERT INTO `parametro_localidad` VALUES ('1351', '12', 'Bernardo Larroude');
INSERT INTO `parametro_localidad` VALUES ('1352', '12', 'Bernasconi');
INSERT INTO `parametro_localidad` VALUES ('1353', '12', 'Caleufú');
INSERT INTO `parametro_localidad` VALUES ('1354', '12', 'Carro Quemado');
INSERT INTO `parametro_localidad` VALUES ('1355', '12', 'Catriló');
INSERT INTO `parametro_localidad` VALUES ('1356', '12', 'Ceballos');
INSERT INTO `parametro_localidad` VALUES ('1357', '12', 'Chacharramendi');
INSERT INTO `parametro_localidad` VALUES ('1358', '12', 'Col. Barón');
INSERT INTO `parametro_localidad` VALUES ('1359', '12', 'Col. Santa María');
INSERT INTO `parametro_localidad` VALUES ('1360', '12', 'Conhelo');
INSERT INTO `parametro_localidad` VALUES ('1361', '12', 'Coronel Hilario Lagos');
INSERT INTO `parametro_localidad` VALUES ('1362', '12', 'Cuchillo-Có');
INSERT INTO `parametro_localidad` VALUES ('1363', '12', 'Doblas');
INSERT INTO `parametro_localidad` VALUES ('1364', '12', 'Dorila');
INSERT INTO `parametro_localidad` VALUES ('1365', '12', 'Eduardo Castex');
INSERT INTO `parametro_localidad` VALUES ('1366', '12', 'Embajador Martini');
INSERT INTO `parametro_localidad` VALUES ('1367', '12', 'Falucho');
INSERT INTO `parametro_localidad` VALUES ('1368', '12', 'Gral. Acha');
INSERT INTO `parametro_localidad` VALUES ('1369', '12', 'Gral. Manuel Campos');
INSERT INTO `parametro_localidad` VALUES ('1370', '12', 'Gral. Pico');
INSERT INTO `parametro_localidad` VALUES ('1371', '12', 'Guatraché');
INSERT INTO `parametro_localidad` VALUES ('1372', '12', 'Ing. Luiggi');
INSERT INTO `parametro_localidad` VALUES ('1373', '12', 'Intendente Alvear');
INSERT INTO `parametro_localidad` VALUES ('1374', '12', 'Jacinto Arauz');
INSERT INTO `parametro_localidad` VALUES ('1375', '12', 'La Adela');
INSERT INTO `parametro_localidad` VALUES ('1376', '12', 'La Humada');
INSERT INTO `parametro_localidad` VALUES ('1377', '12', 'La Maruja');
INSERT INTO `parametro_localidad` VALUES ('1378', '12', '12');
INSERT INTO `parametro_localidad` VALUES ('1379', '12', 'La Reforma');
INSERT INTO `parametro_localidad` VALUES ('1380', '12', 'Limay Mahuida');
INSERT INTO `parametro_localidad` VALUES ('1381', '12', 'Lonquimay');
INSERT INTO `parametro_localidad` VALUES ('1382', '12', 'Loventuel');
INSERT INTO `parametro_localidad` VALUES ('1383', '12', 'Luan Toro');
INSERT INTO `parametro_localidad` VALUES ('1384', '12', 'Macachín');
INSERT INTO `parametro_localidad` VALUES ('1385', '12', 'Maisonnave');
INSERT INTO `parametro_localidad` VALUES ('1386', '12', 'Mauricio Mayer');
INSERT INTO `parametro_localidad` VALUES ('1387', '12', 'Metileo');
INSERT INTO `parametro_localidad` VALUES ('1388', '12', 'Miguel Cané');
INSERT INTO `parametro_localidad` VALUES ('1389', '12', 'Miguel Riglos');
INSERT INTO `parametro_localidad` VALUES ('1390', '12', 'Monte Nievas');
INSERT INTO `parametro_localidad` VALUES ('1391', '12', 'Parera');
INSERT INTO `parametro_localidad` VALUES ('1392', '12', 'Perú');
INSERT INTO `parametro_localidad` VALUES ('1393', '12', 'Pichi-Huinca');
INSERT INTO `parametro_localidad` VALUES ('1394', '12', 'Puelches');
INSERT INTO `parametro_localidad` VALUES ('1395', '12', 'Puelén');
INSERT INTO `parametro_localidad` VALUES ('1396', '12', 'Quehue');
INSERT INTO `parametro_localidad` VALUES ('1397', '12', 'Quemú Quemú');
INSERT INTO `parametro_localidad` VALUES ('1398', '12', 'Quetrequén');
INSERT INTO `parametro_localidad` VALUES ('1399', '12', 'Rancul');
INSERT INTO `parametro_localidad` VALUES ('1400', '12', 'Realicó');
INSERT INTO `parametro_localidad` VALUES ('1401', '12', 'Relmo');
INSERT INTO `parametro_localidad` VALUES ('1402', '12', 'Rolón');
INSERT INTO `parametro_localidad` VALUES ('1403', '12', 'Rucanelo');
INSERT INTO `parametro_localidad` VALUES ('1404', '12', 'Sarah');
INSERT INTO `parametro_localidad` VALUES ('1405', '12', 'Speluzzi');
INSERT INTO `parametro_localidad` VALUES ('1406', '12', 'Sta. Isabel');
INSERT INTO `parametro_localidad` VALUES ('1407', '12', 'Sta. Rosa');
INSERT INTO `parametro_localidad` VALUES ('1408', '12', 'Sta. Teresa');
INSERT INTO `parametro_localidad` VALUES ('1409', '12', 'Telén');
INSERT INTO `parametro_localidad` VALUES ('1410', '12', 'Toay');
INSERT INTO `parametro_localidad` VALUES ('1411', '12', 'Tomas M. de Anchorena');
INSERT INTO `parametro_localidad` VALUES ('1412', '12', 'Trenel');
INSERT INTO `parametro_localidad` VALUES ('1413', '12', 'Unanue');
INSERT INTO `parametro_localidad` VALUES ('1414', '12', 'Uriburu');
INSERT INTO `parametro_localidad` VALUES ('1415', '12', 'Veinticinco de Mayo');
INSERT INTO `parametro_localidad` VALUES ('1416', '12', 'Vertiz');
INSERT INTO `parametro_localidad` VALUES ('1417', '12', 'Victorica');
INSERT INTO `parametro_localidad` VALUES ('1418', '12', 'Villa Mirasol');
INSERT INTO `parametro_localidad` VALUES ('1419', '12', 'Winifreda');
INSERT INTO `parametro_localidad` VALUES ('1420', '13', 'Arauco');
INSERT INTO `parametro_localidad` VALUES ('1421', '13', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('1422', '13', 'Castro Barros');
INSERT INTO `parametro_localidad` VALUES ('1423', '13', 'Chamical');
INSERT INTO `parametro_localidad` VALUES ('1424', '13', 'Chilecito');
INSERT INTO `parametro_localidad` VALUES ('1425', '13', 'Coronel F. Varela');
INSERT INTO `parametro_localidad` VALUES ('1426', '13', 'Famatina');
INSERT INTO `parametro_localidad` VALUES ('1427', '13', 'Gral. A.V.Peñaloza');
INSERT INTO `parametro_localidad` VALUES ('1428', '13', 'Gral. Belgrano');
INSERT INTO `parametro_localidad` VALUES ('1429', '13', 'Gral. J.F. Quiroga');
INSERT INTO `parametro_localidad` VALUES ('1430', '13', 'Gral. Lamadrid');
INSERT INTO `parametro_localidad` VALUES ('1431', '13', 'Gral. Ocampo');
INSERT INTO `parametro_localidad` VALUES ('1432', '13', 'Gral. San Martín');
INSERT INTO `parametro_localidad` VALUES ('1433', '13', 'Independencia');
INSERT INTO `parametro_localidad` VALUES ('1434', '13', 'Rosario Penaloza');
INSERT INTO `parametro_localidad` VALUES ('1435', '13', 'San Blas de Los Sauces');
INSERT INTO `parametro_localidad` VALUES ('1436', '13', 'Sanagasta');
INSERT INTO `parametro_localidad` VALUES ('1437', '13', 'Vinchina');
INSERT INTO `parametro_localidad` VALUES ('1438', '14', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('1439', '14', 'Chacras de Coria');
INSERT INTO `parametro_localidad` VALUES ('1440', '14', 'Dorrego');
INSERT INTO `parametro_localidad` VALUES ('1441', '14', 'Gllen');
INSERT INTO `parametro_localidad` VALUES ('1442', '14', 'Godoy Cruz');
INSERT INTO `parametro_localidad` VALUES ('1443', '14', 'Gral. Alvear');
INSERT INTO `parametro_localidad` VALUES ('1444', '14', 'Guaymallén');
INSERT INTO `parametro_localidad` VALUES ('1445', '14', 'Junín');
INSERT INTO `parametro_localidad` VALUES ('1446', '14', 'La Paz');
INSERT INTO `parametro_localidad` VALUES ('1447', '14', 'Las Heras');
INSERT INTO `parametro_localidad` VALUES ('1448', '14', 'Lavalle');
INSERT INTO `parametro_localidad` VALUES ('1449', '14', 'Luján');
INSERT INTO `parametro_localidad` VALUES ('1450', '14', 'Luján De Cuyo');
INSERT INTO `parametro_localidad` VALUES ('1451', '14', 'Maipú');
INSERT INTO `parametro_localidad` VALUES ('1452', '14', 'Malargüe');
INSERT INTO `parametro_localidad` VALUES ('1453', '14', 'Rivadavia');
INSERT INTO `parametro_localidad` VALUES ('1454', '14', 'San Carlos');
INSERT INTO `parametro_localidad` VALUES ('1455', '14', 'San Martín');
INSERT INTO `parametro_localidad` VALUES ('1456', '14', 'San Rafael');
INSERT INTO `parametro_localidad` VALUES ('1457', '14', 'Sta. Rosa');
INSERT INTO `parametro_localidad` VALUES ('1458', '14', 'Tunuyán');
INSERT INTO `parametro_localidad` VALUES ('1459', '14', 'Tupungato');
INSERT INTO `parametro_localidad` VALUES ('1460', '14', 'Villa Nueva');
INSERT INTO `parametro_localidad` VALUES ('1461', '15', 'Alba Posse');
INSERT INTO `parametro_localidad` VALUES ('1462', '15', 'Almafuerte');
INSERT INTO `parametro_localidad` VALUES ('1463', '15', 'Apóstoles');
INSERT INTO `parametro_localidad` VALUES ('1464', '15', 'Aristóbulo Del Valle');
INSERT INTO `parametro_localidad` VALUES ('1465', '15', 'Arroyo Del Medio');
INSERT INTO `parametro_localidad` VALUES ('1466', '15', 'Azara');
INSERT INTO `parametro_localidad` VALUES ('1467', '15', 'Bdo. De Irigoyen');
INSERT INTO `parametro_localidad` VALUES ('1468', '15', 'Bonpland');
INSERT INTO `parametro_localidad` VALUES ('1469', '15', 'Caá Yari');
INSERT INTO `parametro_localidad` VALUES ('1470', '15', 'Campo Grande');
INSERT INTO `parametro_localidad` VALUES ('1471', '15', 'Campo Ramón');
INSERT INTO `parametro_localidad` VALUES ('1472', '15', 'Campo Viera');
INSERT INTO `parametro_localidad` VALUES ('1473', '15', 'Candelaria');
INSERT INTO `parametro_localidad` VALUES ('1474', '15', 'Capioví');
INSERT INTO `parametro_localidad` VALUES ('1475', '15', 'Caraguatay');
INSERT INTO `parametro_localidad` VALUES ('1476', '15', 'Cdte. Guacurarí');
INSERT INTO `parametro_localidad` VALUES ('1477', '15', 'Cerro Azul');
INSERT INTO `parametro_localidad` VALUES ('1478', '15', 'Cerro Corá');
INSERT INTO `parametro_localidad` VALUES ('1479', '15', 'Col. Alberdi');
INSERT INTO `parametro_localidad` VALUES ('1480', '15', 'Col. Aurora');
INSERT INTO `parametro_localidad` VALUES ('1481', '15', 'Col. Delicia');
INSERT INTO `parametro_localidad` VALUES ('1482', '15', 'Col. Polana');
INSERT INTO `parametro_localidad` VALUES ('1483', '15', 'Col. Victoria');
INSERT INTO `parametro_localidad` VALUES ('1484', '15', 'Col. Wanda');
INSERT INTO `parametro_localidad` VALUES ('1485', '15', 'Concepción De La Sierra');
INSERT INTO `parametro_localidad` VALUES ('1486', '15', 'Corpus');
INSERT INTO `parametro_localidad` VALUES ('1487', '15', 'Dos Arroyos');
INSERT INTO `parametro_localidad` VALUES ('1488', '15', 'Dos de Mayo');
INSERT INTO `parametro_localidad` VALUES ('1489', '15', 'El Alcázar');
INSERT INTO `parametro_localidad` VALUES ('1490', '15', 'El Dorado');
INSERT INTO `parametro_localidad` VALUES ('1491', '15', 'El Soberbio');
INSERT INTO `parametro_localidad` VALUES ('1492', '15', 'Esperanza');
INSERT INTO `parametro_localidad` VALUES ('1493', '15', 'F. Ameghino');
INSERT INTO `parametro_localidad` VALUES ('1494', '15', 'Fachinal');
INSERT INTO `parametro_localidad` VALUES ('1495', '15', 'Garuhapé');
INSERT INTO `parametro_localidad` VALUES ('1496', '15', 'Garupá');
INSERT INTO `parametro_localidad` VALUES ('1497', '15', 'Gdor. López');
INSERT INTO `parametro_localidad` VALUES ('1498', '15', 'Gdor. Roca');
INSERT INTO `parametro_localidad` VALUES ('1499', '15', 'Gral. Alvear');
INSERT INTO `parametro_localidad` VALUES ('1500', '15', 'Gral. Urquiza');
INSERT INTO `parametro_localidad` VALUES ('1501', '15', 'Guaraní');
INSERT INTO `parametro_localidad` VALUES ('1502', '15', 'H. Yrigoyen');
INSERT INTO `parametro_localidad` VALUES ('1503', '15', 'Iguazú');
INSERT INTO `parametro_localidad` VALUES ('1504', '15', 'Itacaruaré');
INSERT INTO `parametro_localidad` VALUES ('1505', '15', 'Jardín América');
INSERT INTO `parametro_localidad` VALUES ('1506', '15', 'Leandro N. Alem');
INSERT INTO `parametro_localidad` VALUES ('1507', '15', 'Libertad');
INSERT INTO `parametro_localidad` VALUES ('1508', '15', 'Loreto');
INSERT INTO `parametro_localidad` VALUES ('1509', '15', 'Los Helechos');
INSERT INTO `parametro_localidad` VALUES ('1510', '15', 'Mártires');
INSERT INTO `parametro_localidad` VALUES ('1511', '15', '15');
INSERT INTO `parametro_localidad` VALUES ('1512', '15', 'Mojón Grande');
INSERT INTO `parametro_localidad` VALUES ('1513', '15', 'Montecarlo');
INSERT INTO `parametro_localidad` VALUES ('1514', '15', 'Nueve de Julio');
INSERT INTO `parametro_localidad` VALUES ('1515', '15', 'Oberá');
INSERT INTO `parametro_localidad` VALUES ('1516', '15', 'Olegario V. Andrade');
INSERT INTO `parametro_localidad` VALUES ('1517', '15', 'Panambí');
INSERT INTO `parametro_localidad` VALUES ('1518', '15', 'Posadas');
INSERT INTO `parametro_localidad` VALUES ('1519', '15', 'Profundidad');
INSERT INTO `parametro_localidad` VALUES ('1520', '15', 'Pto. Iguazú');
INSERT INTO `parametro_localidad` VALUES ('1521', '15', 'Pto. Leoni');
INSERT INTO `parametro_localidad` VALUES ('1522', '15', 'Pto. Piray');
INSERT INTO `parametro_localidad` VALUES ('1523', '15', 'Pto. Rico');
INSERT INTO `parametro_localidad` VALUES ('1524', '15', 'Ruiz de Montoya');
INSERT INTO `parametro_localidad` VALUES ('1525', '15', 'San Antonio');
INSERT INTO `parametro_localidad` VALUES ('1526', '15', 'San Ignacio');
INSERT INTO `parametro_localidad` VALUES ('1527', '15', 'San Javier');
INSERT INTO `parametro_localidad` VALUES ('1528', '15', 'San José');
INSERT INTO `parametro_localidad` VALUES ('1529', '15', 'San Martín');
INSERT INTO `parametro_localidad` VALUES ('1530', '15', 'San Pedro');
INSERT INTO `parametro_localidad` VALUES ('1531', '15', 'San Vicente');
INSERT INTO `parametro_localidad` VALUES ('1532', '15', 'Santiago De Liniers');
INSERT INTO `parametro_localidad` VALUES ('1533', '15', 'Santo Pipo');
INSERT INTO `parametro_localidad` VALUES ('1534', '15', 'Sta. Ana');
INSERT INTO `parametro_localidad` VALUES ('1535', '15', 'Sta. María');
INSERT INTO `parametro_localidad` VALUES ('1536', '15', 'Tres Capones');
INSERT INTO `parametro_localidad` VALUES ('1537', '15', 'Veinticinco de Mayo');
INSERT INTO `parametro_localidad` VALUES ('1538', '15', 'Wanda');
INSERT INTO `parametro_localidad` VALUES ('1539', '16', 'Aguada San Roque');
INSERT INTO `parametro_localidad` VALUES ('1540', '16', 'Aluminé');
INSERT INTO `parametro_localidad` VALUES ('1541', '16', 'Andacollo');
INSERT INTO `parametro_localidad` VALUES ('1542', '16', 'Añelo');
INSERT INTO `parametro_localidad` VALUES ('1543', '16', 'Bajada del Agrio');
INSERT INTO `parametro_localidad` VALUES ('1544', '16', 'Barrancas');
INSERT INTO `parametro_localidad` VALUES ('1545', '16', 'Buta Ranquil');
INSERT INTO `parametro_localidad` VALUES ('1546', '16', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('1547', '16', 'Caviahué');
INSERT INTO `parametro_localidad` VALUES ('1548', '16', 'Centenario');
INSERT INTO `parametro_localidad` VALUES ('1549', '16', 'Chorriaca');
INSERT INTO `parametro_localidad` VALUES ('1550', '16', 'Chos Malal');
INSERT INTO `parametro_localidad` VALUES ('1551', '16', 'Cipolletti');
INSERT INTO `parametro_localidad` VALUES ('1552', '16', 'Covunco Abajo');
INSERT INTO `parametro_localidad` VALUES ('1553', '16', 'Coyuco Cochico');
INSERT INTO `parametro_localidad` VALUES ('1554', '16', 'Cutral Có');
INSERT INTO `parametro_localidad` VALUES ('1555', '16', 'El Cholar');
INSERT INTO `parametro_localidad` VALUES ('1556', '16', 'El Huecú');
INSERT INTO `parametro_localidad` VALUES ('1557', '16', 'El Sauce');
INSERT INTO `parametro_localidad` VALUES ('1558', '16', 'Guañacos');
INSERT INTO `parametro_localidad` VALUES ('1559', '16', 'Huinganco');
INSERT INTO `parametro_localidad` VALUES ('1560', '16', 'Las Coloradas');
INSERT INTO `parametro_localidad` VALUES ('1561', '16', 'Las Lajas');
INSERT INTO `parametro_localidad` VALUES ('1562', '16', 'Las Ovejas');
INSERT INTO `parametro_localidad` VALUES ('1563', '16', 'Loncopué');
INSERT INTO `parametro_localidad` VALUES ('1564', '16', 'Los Catutos');
INSERT INTO `parametro_localidad` VALUES ('1565', '16', 'Los Chihuidos');
INSERT INTO `parametro_localidad` VALUES ('1566', '16', 'Los Miches');
INSERT INTO `parametro_localidad` VALUES ('1567', '16', 'Manzano Amargo');
INSERT INTO `parametro_localidad` VALUES ('1568', '16', '16');
INSERT INTO `parametro_localidad` VALUES ('1569', '16', 'Octavio Pico');
INSERT INTO `parametro_localidad` VALUES ('1570', '16', 'Paso Aguerre');
INSERT INTO `parametro_localidad` VALUES ('1571', '16', 'Picún Leufú');
INSERT INTO `parametro_localidad` VALUES ('1572', '16', 'Piedra del Aguila');
INSERT INTO `parametro_localidad` VALUES ('1573', '16', 'Pilo Lil');
INSERT INTO `parametro_localidad` VALUES ('1574', '16', 'Plaza Huincul');
INSERT INTO `parametro_localidad` VALUES ('1575', '16', 'Plottier');
INSERT INTO `parametro_localidad` VALUES ('1576', '16', 'Quili Malal');
INSERT INTO `parametro_localidad` VALUES ('1577', '16', 'Ramón Castro');
INSERT INTO `parametro_localidad` VALUES ('1578', '16', 'Rincón de Los Sauces');
INSERT INTO `parametro_localidad` VALUES ('1579', '16', 'San Martín de Los Andes');
INSERT INTO `parametro_localidad` VALUES ('1580', '16', 'San Patricio del Chañar');
INSERT INTO `parametro_localidad` VALUES ('1581', '16', 'Santo Tomás');
INSERT INTO `parametro_localidad` VALUES ('1582', '16', 'Sauzal Bonito');
INSERT INTO `parametro_localidad` VALUES ('1583', '16', 'Senillosa');
INSERT INTO `parametro_localidad` VALUES ('1584', '16', 'Taquimilán');
INSERT INTO `parametro_localidad` VALUES ('1585', '16', 'Tricao Malal');
INSERT INTO `parametro_localidad` VALUES ('1586', '16', 'Varvarco');
INSERT INTO `parametro_localidad` VALUES ('1587', '16', 'Villa Curí Leuvu');
INSERT INTO `parametro_localidad` VALUES ('1588', '16', 'Villa del Nahueve');
INSERT INTO `parametro_localidad` VALUES ('1589', '16', 'Villa del Puente Picún Leuvú');
INSERT INTO `parametro_localidad` VALUES ('1590', '16', 'Villa El Chocón');
INSERT INTO `parametro_localidad` VALUES ('1591', '16', 'Villa La Angostura');
INSERT INTO `parametro_localidad` VALUES ('1592', '16', 'Villa Pehuenia');
INSERT INTO `parametro_localidad` VALUES ('1593', '16', 'Villa Traful');
INSERT INTO `parametro_localidad` VALUES ('1594', '16', 'Vista Alegre');
INSERT INTO `parametro_localidad` VALUES ('1595', '16', 'Zapala');
INSERT INTO `parametro_localidad` VALUES ('1596', '17', 'Aguada Cecilio');
INSERT INTO `parametro_localidad` VALUES ('1597', '17', 'Aguada de Guerra');
INSERT INTO `parametro_localidad` VALUES ('1598', '17', 'Allén');
INSERT INTO `parametro_localidad` VALUES ('1599', '17', 'Arroyo de La Ventana');
INSERT INTO `parametro_localidad` VALUES ('1600', '17', 'Arroyo Los Berros');
INSERT INTO `parametro_localidad` VALUES ('1601', '17', 'Bariloche');
INSERT INTO `parametro_localidad` VALUES ('1602', '17', 'Calte. Cordero');
INSERT INTO `parametro_localidad` VALUES ('1603', '17', 'Campo Grande');
INSERT INTO `parametro_localidad` VALUES ('1604', '17', 'Catriel');
INSERT INTO `parametro_localidad` VALUES ('1605', '17', 'Cerro Policía');
INSERT INTO `parametro_localidad` VALUES ('1606', '17', 'Cervantes');
INSERT INTO `parametro_localidad` VALUES ('1607', '17', 'Chelforo');
INSERT INTO `parametro_localidad` VALUES ('1608', '17', 'Chimpay');
INSERT INTO `parametro_localidad` VALUES ('1609', '17', 'Chinchinales');
INSERT INTO `parametro_localidad` VALUES ('1610', '17', 'Chipauquil');
INSERT INTO `parametro_localidad` VALUES ('1611', '17', 'Choele Choel');
INSERT INTO `parametro_localidad` VALUES ('1612', '17', 'Cinco Saltos');
INSERT INTO `parametro_localidad` VALUES ('1613', '17', 'Cipolletti');
INSERT INTO `parametro_localidad` VALUES ('1614', '17', 'Clemente Onelli');
INSERT INTO `parametro_localidad` VALUES ('1615', '17', 'Colán Conhue');
INSERT INTO `parametro_localidad` VALUES ('1616', '17', 'Comallo');
INSERT INTO `parametro_localidad` VALUES ('1617', '17', 'Comicó');
INSERT INTO `parametro_localidad` VALUES ('1618', '17', 'Cona Niyeu');
INSERT INTO `parametro_localidad` VALUES ('1619', '17', 'Coronel Belisle');
INSERT INTO `parametro_localidad` VALUES ('1620', '17', 'Cubanea');
INSERT INTO `parametro_localidad` VALUES ('1621', '17', 'Darwin');
INSERT INTO `parametro_localidad` VALUES ('1622', '17', 'Dina Huapi');
INSERT INTO `parametro_localidad` VALUES ('1623', '17', 'El Bolsón');
INSERT INTO `parametro_localidad` VALUES ('1624', '17', 'El Caín');
INSERT INTO `parametro_localidad` VALUES ('1625', '17', 'El Manso');
INSERT INTO `parametro_localidad` VALUES ('1626', '17', 'Gral. Conesa');
INSERT INTO `parametro_localidad` VALUES ('1627', '17', 'Gral. Enrique Godoy');
INSERT INTO `parametro_localidad` VALUES ('1628', '17', 'Gral. Fernandez Oro');
INSERT INTO `parametro_localidad` VALUES ('1629', '17', 'Gral. Roca');
INSERT INTO `parametro_localidad` VALUES ('1630', '17', 'Guardia Mitre');
INSERT INTO `parametro_localidad` VALUES ('1631', '17', 'Ing. Huergo');
INSERT INTO `parametro_localidad` VALUES ('1632', '17', 'Ing. Jacobacci');
INSERT INTO `parametro_localidad` VALUES ('1633', '17', 'Laguna Blanca');
INSERT INTO `parametro_localidad` VALUES ('1634', '17', 'Lamarque');
INSERT INTO `parametro_localidad` VALUES ('1635', '17', 'Las Grutas');
INSERT INTO `parametro_localidad` VALUES ('1636', '17', 'Los Menucos');
INSERT INTO `parametro_localidad` VALUES ('1637', '17', 'Luis Beltrán');
INSERT INTO `parametro_localidad` VALUES ('1638', '17', 'Mainqué');
INSERT INTO `parametro_localidad` VALUES ('1639', '17', 'Mamuel Choique');
INSERT INTO `parametro_localidad` VALUES ('1640', '17', 'Maquinchao');
INSERT INTO `parametro_localidad` VALUES ('1641', '17', 'Mencué');
INSERT INTO `parametro_localidad` VALUES ('1642', '17', 'Mtro. Ramos Mexia');
INSERT INTO `parametro_localidad` VALUES ('1643', '17', 'Nahuel Niyeu');
INSERT INTO `parametro_localidad` VALUES ('1644', '17', 'Naupa Huen');
INSERT INTO `parametro_localidad` VALUES ('1645', '17', 'Ñorquinco');
INSERT INTO `parametro_localidad` VALUES ('1646', '17', 'Ojos de Agua');
INSERT INTO `parametro_localidad` VALUES ('1647', '17', 'Paso de Agua');
INSERT INTO `parametro_localidad` VALUES ('1648', '17', 'Paso Flores');
INSERT INTO `parametro_localidad` VALUES ('1649', '17', 'Peñas Blancas');
INSERT INTO `parametro_localidad` VALUES ('1650', '17', 'Pichi Mahuida');
INSERT INTO `parametro_localidad` VALUES ('1651', '17', 'Pilcaniyeu');
INSERT INTO `parametro_localidad` VALUES ('1652', '17', 'Pomona');
INSERT INTO `parametro_localidad` VALUES ('1653', '17', 'Prahuaniyeu');
INSERT INTO `parametro_localidad` VALUES ('1654', '17', 'Rincón Treneta');
INSERT INTO `parametro_localidad` VALUES ('1655', '17', 'Río Chico');
INSERT INTO `parametro_localidad` VALUES ('1656', '17', 'Río Colorado');
INSERT INTO `parametro_localidad` VALUES ('1657', '17', 'Roca');
INSERT INTO `parametro_localidad` VALUES ('1658', '17', 'San Antonio Oeste');
INSERT INTO `parametro_localidad` VALUES ('1659', '17', 'San Javier');
INSERT INTO `parametro_localidad` VALUES ('1660', '17', 'Sierra Colorada');
INSERT INTO `parametro_localidad` VALUES ('1661', '17', 'Sierra Grande');
INSERT INTO `parametro_localidad` VALUES ('1662', '17', 'Sierra Pailemán');
INSERT INTO `parametro_localidad` VALUES ('1663', '17', 'Valcheta');
INSERT INTO `parametro_localidad` VALUES ('1664', '17', 'Valle Azul');
INSERT INTO `parametro_localidad` VALUES ('1665', '17', 'Viedma');
INSERT INTO `parametro_localidad` VALUES ('1666', '17', 'Villa Llanquín');
INSERT INTO `parametro_localidad` VALUES ('1667', '17', 'Villa Mascardi');
INSERT INTO `parametro_localidad` VALUES ('1668', '17', 'Villa Regina');
INSERT INTO `parametro_localidad` VALUES ('1669', '17', 'Yaminué');
INSERT INTO `parametro_localidad` VALUES ('1670', '18', 'A. Saravia');
INSERT INTO `parametro_localidad` VALUES ('1671', '18', 'Aguaray');
INSERT INTO `parametro_localidad` VALUES ('1672', '18', 'Angastaco');
INSERT INTO `parametro_localidad` VALUES ('1673', '18', 'Animaná');
INSERT INTO `parametro_localidad` VALUES ('1674', '18', 'Cachi');
INSERT INTO `parametro_localidad` VALUES ('1675', '18', 'Cafayate');
INSERT INTO `parametro_localidad` VALUES ('1676', '18', 'Campo Quijano');
INSERT INTO `parametro_localidad` VALUES ('1677', '18', 'Campo Santo');
INSERT INTO `parametro_localidad` VALUES ('1678', '18', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('1679', '18', 'Cerrillos');
INSERT INTO `parametro_localidad` VALUES ('1680', '18', 'Chicoana');
INSERT INTO `parametro_localidad` VALUES ('1681', '18', 'Col. Sta. Rosa');
INSERT INTO `parametro_localidad` VALUES ('1682', '18', 'Coronel Moldes');
INSERT INTO `parametro_localidad` VALUES ('1683', '18', 'El Bordo');
INSERT INTO `parametro_localidad` VALUES ('1684', '18', 'El Carril');
INSERT INTO `parametro_localidad` VALUES ('1685', '18', 'El Galpón');
INSERT INTO `parametro_localidad` VALUES ('1686', '18', 'El Jardín');
INSERT INTO `parametro_localidad` VALUES ('1687', '18', 'El Potrero');
INSERT INTO `parametro_localidad` VALUES ('1688', '18', 'El Quebrachal');
INSERT INTO `parametro_localidad` VALUES ('1689', '18', 'El Tala');
INSERT INTO `parametro_localidad` VALUES ('1690', '18', 'Embarcación');
INSERT INTO `parametro_localidad` VALUES ('1691', '18', 'Gral. Ballivian');
INSERT INTO `parametro_localidad` VALUES ('1692', '18', 'Gral. Güemes');
INSERT INTO `parametro_localidad` VALUES ('1693', '18', 'Gral. Mosconi');
INSERT INTO `parametro_localidad` VALUES ('1694', '18', 'Gral. Pizarro');
INSERT INTO `parametro_localidad` VALUES ('1695', '18', 'Guachipas');
INSERT INTO `parametro_localidad` VALUES ('1696', '18', 'Hipólito Yrigoyen');
INSERT INTO `parametro_localidad` VALUES ('1697', '18', 'Iruyá');
INSERT INTO `parametro_localidad` VALUES ('1698', '18', 'Isla De Cañas');
INSERT INTO `parametro_localidad` VALUES ('1699', '18', 'J. V. Gonzalez');
INSERT INTO `parametro_localidad` VALUES ('1700', '18', 'La Caldera');
INSERT INTO `parametro_localidad` VALUES ('1701', '18', 'La Candelaria');
INSERT INTO `parametro_localidad` VALUES ('1702', '18', 'La Merced');
INSERT INTO `parametro_localidad` VALUES ('1703', '18', 'La Poma');
INSERT INTO `parametro_localidad` VALUES ('1704', '18', 'La Viña');
INSERT INTO `parametro_localidad` VALUES ('1705', '18', 'Las Lajitas');
INSERT INTO `parametro_localidad` VALUES ('1706', '18', 'Los Toldos');
INSERT INTO `parametro_localidad` VALUES ('1707', '18', 'Metán');
INSERT INTO `parametro_localidad` VALUES ('1708', '18', 'Molinos');
INSERT INTO `parametro_localidad` VALUES ('1709', '18', 'Nazareno');
INSERT INTO `parametro_localidad` VALUES ('1710', '18', 'Orán');
INSERT INTO `parametro_localidad` VALUES ('1711', '18', 'Payogasta');
INSERT INTO `parametro_localidad` VALUES ('1712', '18', 'Pichanal');
INSERT INTO `parametro_localidad` VALUES ('1713', '18', 'Prof. S. Mazza');
INSERT INTO `parametro_localidad` VALUES ('1714', '18', 'Río Piedras');
INSERT INTO `parametro_localidad` VALUES ('1715', '18', 'Rivadavia Banda Norte');
INSERT INTO `parametro_localidad` VALUES ('1716', '18', 'Rivadavia Banda Sur');
INSERT INTO `parametro_localidad` VALUES ('1717', '18', 'Rosario de La Frontera');
INSERT INTO `parametro_localidad` VALUES ('1718', '18', 'Rosario de Lerma');
INSERT INTO `parametro_localidad` VALUES ('1719', '18', 'Saclantás');
INSERT INTO `parametro_localidad` VALUES ('1720', '18', '18');
INSERT INTO `parametro_localidad` VALUES ('1721', '18', 'San Antonio');
INSERT INTO `parametro_localidad` VALUES ('1722', '18', 'San Carlos');
INSERT INTO `parametro_localidad` VALUES ('1723', '18', 'San José De Metán');
INSERT INTO `parametro_localidad` VALUES ('1724', '18', 'San Ramón');
INSERT INTO `parametro_localidad` VALUES ('1725', '18', 'Santa Victoria E.');
INSERT INTO `parametro_localidad` VALUES ('1726', '18', 'Santa Victoria O.');
INSERT INTO `parametro_localidad` VALUES ('1727', '18', 'Tartagal');
INSERT INTO `parametro_localidad` VALUES ('1728', '18', 'Tolar Grande');
INSERT INTO `parametro_localidad` VALUES ('1729', '18', 'Urundel');
INSERT INTO `parametro_localidad` VALUES ('1730', '18', 'Vaqueros');
INSERT INTO `parametro_localidad` VALUES ('1731', '18', 'Villa San Lorenzo');
INSERT INTO `parametro_localidad` VALUES ('1732', '19', 'Albardón');
INSERT INTO `parametro_localidad` VALUES ('1733', '19', 'Angaco');
INSERT INTO `parametro_localidad` VALUES ('1734', '19', 'Calingasta');
INSERT INTO `parametro_localidad` VALUES ('1735', '19', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('1736', '19', 'Caucete');
INSERT INTO `parametro_localidad` VALUES ('1737', '19', 'Chimbas');
INSERT INTO `parametro_localidad` VALUES ('1738', '19', 'Iglesia');
INSERT INTO `parametro_localidad` VALUES ('1739', '19', 'Jachal');
INSERT INTO `parametro_localidad` VALUES ('1740', '19', 'Nueve de Julio');
INSERT INTO `parametro_localidad` VALUES ('1741', '19', 'Pocito');
INSERT INTO `parametro_localidad` VALUES ('1742', '19', 'Rawson');
INSERT INTO `parametro_localidad` VALUES ('1743', '19', 'Rivadavia');
INSERT INTO `parametro_localidad` VALUES ('1744', '19', '19');
INSERT INTO `parametro_localidad` VALUES ('1745', '19', 'San Martín');
INSERT INTO `parametro_localidad` VALUES ('1746', '19', 'Santa Lucía');
INSERT INTO `parametro_localidad` VALUES ('1747', '19', 'Sarmiento');
INSERT INTO `parametro_localidad` VALUES ('1748', '19', 'Ullum');
INSERT INTO `parametro_localidad` VALUES ('1749', '19', 'Valle Fértil');
INSERT INTO `parametro_localidad` VALUES ('1750', '19', 'Veinticinco de Mayo');
INSERT INTO `parametro_localidad` VALUES ('1751', '19', 'Zonda');
INSERT INTO `parametro_localidad` VALUES ('1752', '20', 'Alto Pelado');
INSERT INTO `parametro_localidad` VALUES ('1753', '20', 'Alto Pencoso');
INSERT INTO `parametro_localidad` VALUES ('1754', '20', 'Anchorena');
INSERT INTO `parametro_localidad` VALUES ('1755', '20', 'Arizona');
INSERT INTO `parametro_localidad` VALUES ('1756', '20', 'Bagual');
INSERT INTO `parametro_localidad` VALUES ('1757', '20', 'Balde');
INSERT INTO `parametro_localidad` VALUES ('1758', '20', 'Batavia');
INSERT INTO `parametro_localidad` VALUES ('1759', '20', 'Beazley');
INSERT INTO `parametro_localidad` VALUES ('1760', '20', 'Buena Esperanza');
INSERT INTO `parametro_localidad` VALUES ('1761', '20', 'Candelaria');
INSERT INTO `parametro_localidad` VALUES ('1762', '20', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('1763', '20', 'Carolina');
INSERT INTO `parametro_localidad` VALUES ('1764', '20', 'Carpintería');
INSERT INTO `parametro_localidad` VALUES ('1765', '20', 'Concarán');
INSERT INTO `parametro_localidad` VALUES ('1766', '20', 'Cortaderas');
INSERT INTO `parametro_localidad` VALUES ('1767', '20', 'El Morro');
INSERT INTO `parametro_localidad` VALUES ('1768', '20', 'El Trapiche');
INSERT INTO `parametro_localidad` VALUES ('1769', '20', 'El Volcán');
INSERT INTO `parametro_localidad` VALUES ('1770', '20', 'Fortín El Patria');
INSERT INTO `parametro_localidad` VALUES ('1771', '20', 'Fortuna');
INSERT INTO `parametro_localidad` VALUES ('1772', '20', 'Fraga');
INSERT INTO `parametro_localidad` VALUES ('1773', '20', 'Juan Jorba');
INSERT INTO `parametro_localidad` VALUES ('1774', '20', 'Juan Llerena');
INSERT INTO `parametro_localidad` VALUES ('1775', '20', 'Juana Koslay');
INSERT INTO `parametro_localidad` VALUES ('1776', '20', 'Justo Daract');
INSERT INTO `parametro_localidad` VALUES ('1777', '20', 'La Calera');
INSERT INTO `parametro_localidad` VALUES ('1778', '20', 'La Florida');
INSERT INTO `parametro_localidad` VALUES ('1779', '20', 'La Punilla');
INSERT INTO `parametro_localidad` VALUES ('1780', '20', 'La Toma');
INSERT INTO `parametro_localidad` VALUES ('1781', '20', 'Lafinur');
INSERT INTO `parametro_localidad` VALUES ('1782', '20', 'Las Aguadas');
INSERT INTO `parametro_localidad` VALUES ('1783', '20', 'Las Chacras');
INSERT INTO `parametro_localidad` VALUES ('1784', '20', 'Las Lagunas');
INSERT INTO `parametro_localidad` VALUES ('1785', '20', 'Las Vertientes');
INSERT INTO `parametro_localidad` VALUES ('1786', '20', 'Lavaisse');
INSERT INTO `parametro_localidad` VALUES ('1787', '20', 'Leandro N. Alem');
INSERT INTO `parametro_localidad` VALUES ('1788', '20', 'Los Molles');
INSERT INTO `parametro_localidad` VALUES ('1789', '20', 'Luján');
INSERT INTO `parametro_localidad` VALUES ('1790', '20', 'Mercedes');
INSERT INTO `parametro_localidad` VALUES ('1791', '20', 'Merlo');
INSERT INTO `parametro_localidad` VALUES ('1792', '20', 'Naschel');
INSERT INTO `parametro_localidad` VALUES ('1793', '20', 'Navia');
INSERT INTO `parametro_localidad` VALUES ('1794', '20', 'Nogolí');
INSERT INTO `parametro_localidad` VALUES ('1795', '20', 'Nueva Galia');
INSERT INTO `parametro_localidad` VALUES ('1796', '20', 'Papagayos');
INSERT INTO `parametro_localidad` VALUES ('1797', '20', 'Paso Grande');
INSERT INTO `parametro_localidad` VALUES ('1798', '20', 'Potrero de Los Funes');
INSERT INTO `parametro_localidad` VALUES ('1799', '20', 'Quines');
INSERT INTO `parametro_localidad` VALUES ('1800', '20', 'Renca');
INSERT INTO `parametro_localidad` VALUES ('1801', '20', 'Saladillo');
INSERT INTO `parametro_localidad` VALUES ('1802', '20', 'San Francisco');
INSERT INTO `parametro_localidad` VALUES ('1803', '20', 'San Gerónimo');
INSERT INTO `parametro_localidad` VALUES ('1804', '20', 'San Martín');
INSERT INTO `parametro_localidad` VALUES ('1805', '20', 'San Pablo');
INSERT INTO `parametro_localidad` VALUES ('1806', '20', 'Santa Rosa de Conlara');
INSERT INTO `parametro_localidad` VALUES ('1807', '20', 'Talita');
INSERT INTO `parametro_localidad` VALUES ('1808', '20', 'Tilisarao');
INSERT INTO `parametro_localidad` VALUES ('1809', '20', 'Unión');
INSERT INTO `parametro_localidad` VALUES ('1810', '20', 'Villa de La Quebrada');
INSERT INTO `parametro_localidad` VALUES ('1811', '20', 'Villa de Praga');
INSERT INTO `parametro_localidad` VALUES ('1812', '20', 'Villa del Carmen');
INSERT INTO `parametro_localidad` VALUES ('1813', '20', 'Villa Gral. Roca');
INSERT INTO `parametro_localidad` VALUES ('1814', '20', 'Villa Larca');
INSERT INTO `parametro_localidad` VALUES ('1815', '20', 'Villa Mercedes');
INSERT INTO `parametro_localidad` VALUES ('1816', '20', 'Zanjitas');
INSERT INTO `parametro_localidad` VALUES ('1817', '21', 'Calafate');
INSERT INTO `parametro_localidad` VALUES ('1818', '21', 'Caleta Olivia');
INSERT INTO `parametro_localidad` VALUES ('1819', '21', 'Cañadón Seco');
INSERT INTO `parametro_localidad` VALUES ('1820', '21', 'Comandante Piedrabuena');
INSERT INTO `parametro_localidad` VALUES ('1821', '21', 'El Calafate');
INSERT INTO `parametro_localidad` VALUES ('1822', '21', 'El Chaltén');
INSERT INTO `parametro_localidad` VALUES ('1823', '21', 'Gdor. Gregores');
INSERT INTO `parametro_localidad` VALUES ('1824', '21', 'Hipólito Yrigoyen');
INSERT INTO `parametro_localidad` VALUES ('1825', '21', 'Jaramillo');
INSERT INTO `parametro_localidad` VALUES ('1826', '21', 'Koluel Kaike');
INSERT INTO `parametro_localidad` VALUES ('1827', '21', 'Las Heras');
INSERT INTO `parametro_localidad` VALUES ('1828', '21', 'Los Antiguos');
INSERT INTO `parametro_localidad` VALUES ('1829', '21', 'Perito Moreno');
INSERT INTO `parametro_localidad` VALUES ('1830', '21', 'Pico Truncado');
INSERT INTO `parametro_localidad` VALUES ('1831', '21', 'Pto. Deseado');
INSERT INTO `parametro_localidad` VALUES ('1832', '21', 'Pto. San Julián');
INSERT INTO `parametro_localidad` VALUES ('1833', '21', 'Pto. 21');
INSERT INTO `parametro_localidad` VALUES ('1834', '21', 'Río Cuarto');
INSERT INTO `parametro_localidad` VALUES ('1835', '21', 'Río Gallegos');
INSERT INTO `parametro_localidad` VALUES ('1836', '21', 'Río Turbio');
INSERT INTO `parametro_localidad` VALUES ('1837', '21', 'Tres Lagos');
INSERT INTO `parametro_localidad` VALUES ('1838', '21', 'Veintiocho De Noviembre');
INSERT INTO `parametro_localidad` VALUES ('1839', '22', 'Aarón Castellanos');
INSERT INTO `parametro_localidad` VALUES ('1840', '22', 'Acebal');
INSERT INTO `parametro_localidad` VALUES ('1841', '22', 'Aguará Grande');
INSERT INTO `parametro_localidad` VALUES ('1842', '22', 'Albarellos');
INSERT INTO `parametro_localidad` VALUES ('1843', '22', 'Alcorta');
INSERT INTO `parametro_localidad` VALUES ('1844', '22', 'Aldao');
INSERT INTO `parametro_localidad` VALUES ('1845', '22', 'Alejandra');
INSERT INTO `parametro_localidad` VALUES ('1846', '22', 'Álvarez');
INSERT INTO `parametro_localidad` VALUES ('1847', '22', 'Ambrosetti');
INSERT INTO `parametro_localidad` VALUES ('1848', '22', 'Amenábar');
INSERT INTO `parametro_localidad` VALUES ('1849', '22', 'Angélica');
INSERT INTO `parametro_localidad` VALUES ('1850', '22', 'Angeloni');
INSERT INTO `parametro_localidad` VALUES ('1851', '22', 'Arequito');
INSERT INTO `parametro_localidad` VALUES ('1852', '22', 'Arminda');
INSERT INTO `parametro_localidad` VALUES ('1853', '22', 'Armstrong');
INSERT INTO `parametro_localidad` VALUES ('1854', '22', 'Arocena');
INSERT INTO `parametro_localidad` VALUES ('1855', '22', 'Arroyo Aguiar');
INSERT INTO `parametro_localidad` VALUES ('1856', '22', 'Arroyo Ceibal');
INSERT INTO `parametro_localidad` VALUES ('1857', '22', 'Arroyo Leyes');
INSERT INTO `parametro_localidad` VALUES ('1858', '22', 'Arroyo Seco');
INSERT INTO `parametro_localidad` VALUES ('1859', '22', 'Arrufó');
INSERT INTO `parametro_localidad` VALUES ('1860', '22', 'Arteaga');
INSERT INTO `parametro_localidad` VALUES ('1861', '22', 'Ataliva');
INSERT INTO `parametro_localidad` VALUES ('1862', '22', 'Aurelia');
INSERT INTO `parametro_localidad` VALUES ('1863', '22', 'Avellaneda');
INSERT INTO `parametro_localidad` VALUES ('1864', '22', 'Barrancas');
INSERT INTO `parametro_localidad` VALUES ('1865', '22', 'Bauer Y Sigel');
INSERT INTO `parametro_localidad` VALUES ('1866', '22', 'Bella Italia');
INSERT INTO `parametro_localidad` VALUES ('1867', '22', 'Berabevú');
INSERT INTO `parametro_localidad` VALUES ('1868', '22', 'Berna');
INSERT INTO `parametro_localidad` VALUES ('1869', '22', 'Bernardo de Irigoyen');
INSERT INTO `parametro_localidad` VALUES ('1870', '22', 'Bigand');
INSERT INTO `parametro_localidad` VALUES ('1871', '22', 'Bombal');
INSERT INTO `parametro_localidad` VALUES ('1872', '22', 'Bouquet');
INSERT INTO `parametro_localidad` VALUES ('1873', '22', 'Bustinza');
INSERT INTO `parametro_localidad` VALUES ('1874', '22', 'Cabal');
INSERT INTO `parametro_localidad` VALUES ('1875', '22', 'Cacique Ariacaiquin');
INSERT INTO `parametro_localidad` VALUES ('1876', '22', 'Cafferata');
INSERT INTO `parametro_localidad` VALUES ('1877', '22', 'Calchaquí');
INSERT INTO `parametro_localidad` VALUES ('1878', '22', 'Campo Andino');
INSERT INTO `parametro_localidad` VALUES ('1879', '22', 'Campo Piaggio');
INSERT INTO `parametro_localidad` VALUES ('1880', '22', 'Cañada de Gómez');
INSERT INTO `parametro_localidad` VALUES ('1881', '22', 'Cañada del Ucle');
INSERT INTO `parametro_localidad` VALUES ('1882', '22', 'Cañada Rica');
INSERT INTO `parametro_localidad` VALUES ('1883', '22', 'Cañada Rosquín');
INSERT INTO `parametro_localidad` VALUES ('1884', '22', 'Candioti');
INSERT INTO `parametro_localidad` VALUES ('1885', '22', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('1886', '22', 'Capitán Bermúdez');
INSERT INTO `parametro_localidad` VALUES ('1887', '22', 'Capivara');
INSERT INTO `parametro_localidad` VALUES ('1888', '22', 'Carcarañá');
INSERT INTO `parametro_localidad` VALUES ('1889', '22', 'Carlos Pellegrini');
INSERT INTO `parametro_localidad` VALUES ('1890', '22', 'Carmen');
INSERT INTO `parametro_localidad` VALUES ('1891', '22', 'Carmen Del Sauce');
INSERT INTO `parametro_localidad` VALUES ('1892', '22', 'Carreras');
INSERT INTO `parametro_localidad` VALUES ('1893', '22', 'Carrizales');
INSERT INTO `parametro_localidad` VALUES ('1894', '22', 'Casalegno');
INSERT INTO `parametro_localidad` VALUES ('1895', '22', 'Casas');
INSERT INTO `parametro_localidad` VALUES ('1896', '22', 'Casilda');
INSERT INTO `parametro_localidad` VALUES ('1897', '22', 'Castelar');
INSERT INTO `parametro_localidad` VALUES ('1898', '22', 'Castellanos');
INSERT INTO `parametro_localidad` VALUES ('1899', '22', 'Cayastá');
INSERT INTO `parametro_localidad` VALUES ('1900', '22', 'Cayastacito');
INSERT INTO `parametro_localidad` VALUES ('1901', '22', 'Centeno');
INSERT INTO `parametro_localidad` VALUES ('1902', '22', 'Cepeda');
INSERT INTO `parametro_localidad` VALUES ('1903', '22', 'Ceres');
INSERT INTO `parametro_localidad` VALUES ('1904', '22', 'Chabás');
INSERT INTO `parametro_localidad` VALUES ('1905', '22', 'Chañar Ladeado');
INSERT INTO `parametro_localidad` VALUES ('1906', '22', 'Chapuy');
INSERT INTO `parametro_localidad` VALUES ('1907', '22', 'Chovet');
INSERT INTO `parametro_localidad` VALUES ('1908', '22', 'Christophersen');
INSERT INTO `parametro_localidad` VALUES ('1909', '22', 'Classon');
INSERT INTO `parametro_localidad` VALUES ('1910', '22', 'Cnel. Arnold');
INSERT INTO `parametro_localidad` VALUES ('1911', '22', 'Cnel. Bogado');
INSERT INTO `parametro_localidad` VALUES ('1912', '22', 'Cnel. Dominguez');
INSERT INTO `parametro_localidad` VALUES ('1913', '22', 'Cnel. Fraga');
INSERT INTO `parametro_localidad` VALUES ('1914', '22', 'Col. Aldao');
INSERT INTO `parametro_localidad` VALUES ('1915', '22', 'Col. Ana');
INSERT INTO `parametro_localidad` VALUES ('1916', '22', 'Col. Belgrano');
INSERT INTO `parametro_localidad` VALUES ('1917', '22', 'Col. Bicha');
INSERT INTO `parametro_localidad` VALUES ('1918', '22', 'Col. Bigand');
INSERT INTO `parametro_localidad` VALUES ('1919', '22', 'Col. Bossi');
INSERT INTO `parametro_localidad` VALUES ('1920', '22', 'Col. Cavour');
INSERT INTO `parametro_localidad` VALUES ('1921', '22', 'Col. Cello');
INSERT INTO `parametro_localidad` VALUES ('1922', '22', 'Col. Dolores');
INSERT INTO `parametro_localidad` VALUES ('1923', '22', 'Col. Dos Rosas');
INSERT INTO `parametro_localidad` VALUES ('1924', '22', 'Col. Durán');
INSERT INTO `parametro_localidad` VALUES ('1925', '22', 'Col. Iturraspe');
INSERT INTO `parametro_localidad` VALUES ('1926', '22', 'Col. Margarita');
INSERT INTO `parametro_localidad` VALUES ('1927', '22', 'Col. Mascias');
INSERT INTO `parametro_localidad` VALUES ('1928', '22', 'Col. Raquel');
INSERT INTO `parametro_localidad` VALUES ('1929', '22', 'Col. Rosa');
INSERT INTO `parametro_localidad` VALUES ('1930', '22', 'Col. San José');
INSERT INTO `parametro_localidad` VALUES ('1931', '22', 'Constanza');
INSERT INTO `parametro_localidad` VALUES ('1932', '22', 'Coronda');
INSERT INTO `parametro_localidad` VALUES ('1933', '22', 'Correa');
INSERT INTO `parametro_localidad` VALUES ('1934', '22', 'Crispi');
INSERT INTO `parametro_localidad` VALUES ('1935', '22', 'Cululú');
INSERT INTO `parametro_localidad` VALUES ('1936', '22', 'Curupayti');
INSERT INTO `parametro_localidad` VALUES ('1937', '22', 'Desvio Arijón');
INSERT INTO `parametro_localidad` VALUES ('1938', '22', 'Diaz');
INSERT INTO `parametro_localidad` VALUES ('1939', '22', 'Diego de Alvear');
INSERT INTO `parametro_localidad` VALUES ('1940', '22', 'Egusquiza');
INSERT INTO `parametro_localidad` VALUES ('1941', '22', 'El Arazá');
INSERT INTO `parametro_localidad` VALUES ('1942', '22', 'El Rabón');
INSERT INTO `parametro_localidad` VALUES ('1943', '22', 'El Sombrerito');
INSERT INTO `parametro_localidad` VALUES ('1944', '22', 'El Trébol');
INSERT INTO `parametro_localidad` VALUES ('1945', '22', 'Elisa');
INSERT INTO `parametro_localidad` VALUES ('1946', '22', 'Elortondo');
INSERT INTO `parametro_localidad` VALUES ('1947', '22', 'Emilia');
INSERT INTO `parametro_localidad` VALUES ('1948', '22', 'Empalme San Carlos');
INSERT INTO `parametro_localidad` VALUES ('1949', '22', 'Empalme Villa Constitucion');
INSERT INTO `parametro_localidad` VALUES ('1950', '22', 'Esmeralda');
INSERT INTO `parametro_localidad` VALUES ('1951', '22', 'Esperanza');
INSERT INTO `parametro_localidad` VALUES ('1952', '22', 'Estación Alvear');
INSERT INTO `parametro_localidad` VALUES ('1953', '22', 'Estacion Clucellas');
INSERT INTO `parametro_localidad` VALUES ('1954', '22', 'Esteban Rams');
INSERT INTO `parametro_localidad` VALUES ('1955', '22', 'Esther');
INSERT INTO `parametro_localidad` VALUES ('1956', '22', 'Esustolia');
INSERT INTO `parametro_localidad` VALUES ('1957', '22', 'Eusebia');
INSERT INTO `parametro_localidad` VALUES ('1958', '22', 'Felicia');
INSERT INTO `parametro_localidad` VALUES ('1959', '22', 'Fidela');
INSERT INTO `parametro_localidad` VALUES ('1960', '22', 'Fighiera');
INSERT INTO `parametro_localidad` VALUES ('1961', '22', 'Firmat');
INSERT INTO `parametro_localidad` VALUES ('1962', '22', 'Florencia');
INSERT INTO `parametro_localidad` VALUES ('1963', '22', 'Fortín Olmos');
INSERT INTO `parametro_localidad` VALUES ('1964', '22', 'Franck');
INSERT INTO `parametro_localidad` VALUES ('1965', '22', 'Fray Luis Beltrán');
INSERT INTO `parametro_localidad` VALUES ('1966', '22', 'Frontera');
INSERT INTO `parametro_localidad` VALUES ('1967', '22', 'Fuentes');
INSERT INTO `parametro_localidad` VALUES ('1968', '22', 'Funes');
INSERT INTO `parametro_localidad` VALUES ('1969', '22', 'Gaboto');
INSERT INTO `parametro_localidad` VALUES ('1970', '22', 'Galisteo');
INSERT INTO `parametro_localidad` VALUES ('1971', '22', 'Gálvez');
INSERT INTO `parametro_localidad` VALUES ('1972', '22', 'Garabalto');
INSERT INTO `parametro_localidad` VALUES ('1973', '22', 'Garibaldi');
INSERT INTO `parametro_localidad` VALUES ('1974', '22', 'Gato Colorado');
INSERT INTO `parametro_localidad` VALUES ('1975', '22', 'Gdor. Crespo');
INSERT INTO `parametro_localidad` VALUES ('1976', '22', 'Gessler');
INSERT INTO `parametro_localidad` VALUES ('1977', '22', 'Godoy');
INSERT INTO `parametro_localidad` VALUES ('1978', '22', 'Golondrina');
INSERT INTO `parametro_localidad` VALUES ('1979', '22', 'Gral. Gelly');
INSERT INTO `parametro_localidad` VALUES ('1980', '22', 'Gral. Lagos');
INSERT INTO `parametro_localidad` VALUES ('1981', '22', 'Granadero Baigorria');
INSERT INTO `parametro_localidad` VALUES ('1982', '22', 'Gregoria Perez De Denis');
INSERT INTO `parametro_localidad` VALUES ('1983', '22', 'Grutly');
INSERT INTO `parametro_localidad` VALUES ('1984', '22', 'Guadalupe N.');
INSERT INTO `parametro_localidad` VALUES ('1985', '22', 'Gödeken');
INSERT INTO `parametro_localidad` VALUES ('1986', '22', 'Helvecia');
INSERT INTO `parametro_localidad` VALUES ('1987', '22', 'Hersilia');
INSERT INTO `parametro_localidad` VALUES ('1988', '22', 'Hipatía');
INSERT INTO `parametro_localidad` VALUES ('1989', '22', 'Huanqueros');
INSERT INTO `parametro_localidad` VALUES ('1990', '22', 'Hugentobler');
INSERT INTO `parametro_localidad` VALUES ('1991', '22', 'Hughes');
INSERT INTO `parametro_localidad` VALUES ('1992', '22', 'Humberto 1º');
INSERT INTO `parametro_localidad` VALUES ('1993', '22', 'Humboldt');
INSERT INTO `parametro_localidad` VALUES ('1994', '22', 'Ibarlucea');
INSERT INTO `parametro_localidad` VALUES ('1995', '22', 'Ing. Chanourdie');
INSERT INTO `parametro_localidad` VALUES ('1996', '22', 'Intiyaco');
INSERT INTO `parametro_localidad` VALUES ('1997', '22', 'Ituzaingó');
INSERT INTO `parametro_localidad` VALUES ('1998', '22', 'Jacinto L. Aráuz');
INSERT INTO `parametro_localidad` VALUES ('1999', '22', 'Josefina');
INSERT INTO `parametro_localidad` VALUES ('2000', '22', 'Juan B. Molina');
INSERT INTO `parametro_localidad` VALUES ('2001', '22', 'Juan de Garay');
INSERT INTO `parametro_localidad` VALUES ('2002', '22', 'Juncal');
INSERT INTO `parametro_localidad` VALUES ('2003', '22', 'La Brava');
INSERT INTO `parametro_localidad` VALUES ('2004', '22', 'La Cabral');
INSERT INTO `parametro_localidad` VALUES ('2005', '22', 'La Camila');
INSERT INTO `parametro_localidad` VALUES ('2006', '22', 'La Chispa');
INSERT INTO `parametro_localidad` VALUES ('2007', '22', 'La Clara');
INSERT INTO `parametro_localidad` VALUES ('2008', '22', 'La Criolla');
INSERT INTO `parametro_localidad` VALUES ('2009', '22', 'La Gallareta');
INSERT INTO `parametro_localidad` VALUES ('2010', '22', 'La Lucila');
INSERT INTO `parametro_localidad` VALUES ('2011', '22', 'La Pelada');
INSERT INTO `parametro_localidad` VALUES ('2012', '22', 'La Penca');
INSERT INTO `parametro_localidad` VALUES ('2013', '22', 'La Rubia');
INSERT INTO `parametro_localidad` VALUES ('2014', '22', 'La Sarita');
INSERT INTO `parametro_localidad` VALUES ('2015', '22', 'La Vanguardia');
INSERT INTO `parametro_localidad` VALUES ('2016', '22', 'Labordeboy');
INSERT INTO `parametro_localidad` VALUES ('2017', '22', 'Laguna Paiva');
INSERT INTO `parametro_localidad` VALUES ('2018', '22', 'Landeta');
INSERT INTO `parametro_localidad` VALUES ('2019', '22', 'Lanteri');
INSERT INTO `parametro_localidad` VALUES ('2020', '22', 'Larrechea');
INSERT INTO `parametro_localidad` VALUES ('2021', '22', 'Las Avispas');
INSERT INTO `parametro_localidad` VALUES ('2022', '22', 'Las Bandurrias');
INSERT INTO `parametro_localidad` VALUES ('2023', '22', 'Las Garzas');
INSERT INTO `parametro_localidad` VALUES ('2024', '22', 'Las Palmeras');
INSERT INTO `parametro_localidad` VALUES ('2025', '22', 'Las Parejas');
INSERT INTO `parametro_localidad` VALUES ('2026', '22', 'Las Petacas');
INSERT INTO `parametro_localidad` VALUES ('2027', '22', 'Las Rosas');
INSERT INTO `parametro_localidad` VALUES ('2028', '22', 'Las Toscas');
INSERT INTO `parametro_localidad` VALUES ('2029', '22', 'Las Tunas');
INSERT INTO `parametro_localidad` VALUES ('2030', '22', 'Lazzarino');
INSERT INTO `parametro_localidad` VALUES ('2031', '22', 'Lehmann');
INSERT INTO `parametro_localidad` VALUES ('2032', '22', 'Llambi Campbell');
INSERT INTO `parametro_localidad` VALUES ('2033', '22', 'Logroño');
INSERT INTO `parametro_localidad` VALUES ('2034', '22', 'Loma Alta');
INSERT INTO `parametro_localidad` VALUES ('2035', '22', 'López');
INSERT INTO `parametro_localidad` VALUES ('2036', '22', 'Los Amores');
INSERT INTO `parametro_localidad` VALUES ('2037', '22', 'Los Cardos');
INSERT INTO `parametro_localidad` VALUES ('2038', '22', 'Los Laureles');
INSERT INTO `parametro_localidad` VALUES ('2039', '22', 'Los Molinos');
INSERT INTO `parametro_localidad` VALUES ('2040', '22', 'Los Quirquinchos');
INSERT INTO `parametro_localidad` VALUES ('2041', '22', 'Lucio V. Lopez');
INSERT INTO `parametro_localidad` VALUES ('2042', '22', 'Luis Palacios');
INSERT INTO `parametro_localidad` VALUES ('2043', '22', 'Ma. Juana');
INSERT INTO `parametro_localidad` VALUES ('2044', '22', 'Ma. Luisa');
INSERT INTO `parametro_localidad` VALUES ('2045', '22', 'Ma. Susana');
INSERT INTO `parametro_localidad` VALUES ('2046', '22', 'Ma. Teresa');
INSERT INTO `parametro_localidad` VALUES ('2047', '22', 'Maciel');
INSERT INTO `parametro_localidad` VALUES ('2048', '22', 'Maggiolo');
INSERT INTO `parametro_localidad` VALUES ('2049', '22', 'Malabrigo');
INSERT INTO `parametro_localidad` VALUES ('2050', '22', 'Marcelino Escalada');
INSERT INTO `parametro_localidad` VALUES ('2051', '22', 'Margarita');
INSERT INTO `parametro_localidad` VALUES ('2052', '22', 'Matilde');
INSERT INTO `parametro_localidad` VALUES ('2053', '22', 'Mauá');
INSERT INTO `parametro_localidad` VALUES ('2054', '22', 'Máximo Paz');
INSERT INTO `parametro_localidad` VALUES ('2055', '22', 'Melincué');
INSERT INTO `parametro_localidad` VALUES ('2056', '22', 'Miguel Torres');
INSERT INTO `parametro_localidad` VALUES ('2057', '22', 'Moisés Ville');
INSERT INTO `parametro_localidad` VALUES ('2058', '22', 'Monigotes');
INSERT INTO `parametro_localidad` VALUES ('2059', '22', 'Monje');
INSERT INTO `parametro_localidad` VALUES ('2060', '22', 'Monte Obscuridad');
INSERT INTO `parametro_localidad` VALUES ('2061', '22', 'Monte Vera');
INSERT INTO `parametro_localidad` VALUES ('2062', '22', 'Montefiore');
INSERT INTO `parametro_localidad` VALUES ('2063', '22', 'Montes de Oca');
INSERT INTO `parametro_localidad` VALUES ('2064', '22', 'Murphy');
INSERT INTO `parametro_localidad` VALUES ('2065', '22', 'Ñanducita');
INSERT INTO `parametro_localidad` VALUES ('2066', '22', 'Naré');
INSERT INTO `parametro_localidad` VALUES ('2067', '22', 'Nelson');
INSERT INTO `parametro_localidad` VALUES ('2068', '22', 'Nicanor E. Molinas');
INSERT INTO `parametro_localidad` VALUES ('2069', '22', 'Nuevo Torino');
INSERT INTO `parametro_localidad` VALUES ('2070', '22', 'Oliveros');
INSERT INTO `parametro_localidad` VALUES ('2071', '22', 'Palacios');
INSERT INTO `parametro_localidad` VALUES ('2072', '22', 'Pavón');
INSERT INTO `parametro_localidad` VALUES ('2073', '22', 'Pavón Arriba');
INSERT INTO `parametro_localidad` VALUES ('2074', '22', 'Pedro Gómez Cello');
INSERT INTO `parametro_localidad` VALUES ('2075', '22', 'Pérez');
INSERT INTO `parametro_localidad` VALUES ('2076', '22', 'Peyrano');
INSERT INTO `parametro_localidad` VALUES ('2077', '22', 'Piamonte');
INSERT INTO `parametro_localidad` VALUES ('2078', '22', 'Pilar');
INSERT INTO `parametro_localidad` VALUES ('2079', '22', 'Piñero');
INSERT INTO `parametro_localidad` VALUES ('2080', '22', 'Plaza Clucellas');
INSERT INTO `parametro_localidad` VALUES ('2081', '22', 'Portugalete');
INSERT INTO `parametro_localidad` VALUES ('2082', '22', 'Pozo Borrado');
INSERT INTO `parametro_localidad` VALUES ('2083', '22', 'Progreso');
INSERT INTO `parametro_localidad` VALUES ('2084', '22', 'Providencia');
INSERT INTO `parametro_localidad` VALUES ('2085', '22', 'Pte. Roca');
INSERT INTO `parametro_localidad` VALUES ('2086', '22', 'Pueblo Andino');
INSERT INTO `parametro_localidad` VALUES ('2087', '22', 'Pueblo Esther');
INSERT INTO `parametro_localidad` VALUES ('2088', '22', 'Pueblo Gral. San Martín');
INSERT INTO `parametro_localidad` VALUES ('2089', '22', 'Pueblo Irigoyen');
INSERT INTO `parametro_localidad` VALUES ('2090', '22', 'Pueblo Marini');
INSERT INTO `parametro_localidad` VALUES ('2091', '22', 'Pueblo Muñoz');
INSERT INTO `parametro_localidad` VALUES ('2092', '22', 'Pueblo Uranga');
INSERT INTO `parametro_localidad` VALUES ('2093', '22', 'Pujato');
INSERT INTO `parametro_localidad` VALUES ('2094', '22', 'Pujato N.');
INSERT INTO `parametro_localidad` VALUES ('2095', '22', 'Rafaela');
INSERT INTO `parametro_localidad` VALUES ('2096', '22', 'Ramayón');
INSERT INTO `parametro_localidad` VALUES ('2097', '22', 'Ramona');
INSERT INTO `parametro_localidad` VALUES ('2098', '22', 'Reconquista');
INSERT INTO `parametro_localidad` VALUES ('2099', '22', 'Recreo');
INSERT INTO `parametro_localidad` VALUES ('2100', '22', 'Ricardone');
INSERT INTO `parametro_localidad` VALUES ('2101', '22', 'Rivadavia');
INSERT INTO `parametro_localidad` VALUES ('2102', '22', 'Roldán');
INSERT INTO `parametro_localidad` VALUES ('2103', '22', 'Romang');
INSERT INTO `parametro_localidad` VALUES ('2104', '22', 'Rosario');
INSERT INTO `parametro_localidad` VALUES ('2105', '22', 'Rueda');
INSERT INTO `parametro_localidad` VALUES ('2106', '22', 'Rufino');
INSERT INTO `parametro_localidad` VALUES ('2107', '22', 'Sa Pereira');
INSERT INTO `parametro_localidad` VALUES ('2108', '22', 'Saguier');
INSERT INTO `parametro_localidad` VALUES ('2109', '22', 'Saladero M. Cabal');
INSERT INTO `parametro_localidad` VALUES ('2110', '22', 'Salto Grande');
INSERT INTO `parametro_localidad` VALUES ('2111', '22', 'San Agustín');
INSERT INTO `parametro_localidad` VALUES ('2112', '22', 'San Antonio de Obligado');
INSERT INTO `parametro_localidad` VALUES ('2113', '22', 'San Bernardo (N.J.)');
INSERT INTO `parametro_localidad` VALUES ('2114', '22', 'San Bernardo (S.J.)');
INSERT INTO `parametro_localidad` VALUES ('2115', '22', 'San Carlos Centro');
INSERT INTO `parametro_localidad` VALUES ('2116', '22', 'San Carlos N.');
INSERT INTO `parametro_localidad` VALUES ('2117', '22', 'San Carlos S.');
INSERT INTO `parametro_localidad` VALUES ('2118', '22', 'San Cristóbal');
INSERT INTO `parametro_localidad` VALUES ('2119', '22', 'San Eduardo');
INSERT INTO `parametro_localidad` VALUES ('2120', '22', 'San Eugenio');
INSERT INTO `parametro_localidad` VALUES ('2121', '22', 'San Fabián');
INSERT INTO `parametro_localidad` VALUES ('2122', '22', 'San Fco. de Santa Fé');
INSERT INTO `parametro_localidad` VALUES ('2123', '22', 'San Genaro');
INSERT INTO `parametro_localidad` VALUES ('2124', '22', 'San Genaro N.');
INSERT INTO `parametro_localidad` VALUES ('2125', '22', 'San Gregorio');
INSERT INTO `parametro_localidad` VALUES ('2126', '22', 'San Guillermo');
INSERT INTO `parametro_localidad` VALUES ('2127', '22', 'San Javier');
INSERT INTO `parametro_localidad` VALUES ('2128', '22', 'San Jerónimo del Sauce');
INSERT INTO `parametro_localidad` VALUES ('2129', '22', 'San Jerónimo N.');
INSERT INTO `parametro_localidad` VALUES ('2130', '22', 'San Jerónimo S.');
INSERT INTO `parametro_localidad` VALUES ('2131', '22', 'San Jorge');
INSERT INTO `parametro_localidad` VALUES ('2132', '22', 'San José de La Esquina');
INSERT INTO `parametro_localidad` VALUES ('2133', '22', 'San José del Rincón');
INSERT INTO `parametro_localidad` VALUES ('2134', '22', 'San Justo');
INSERT INTO `parametro_localidad` VALUES ('2135', '22', 'San Lorenzo');
INSERT INTO `parametro_localidad` VALUES ('2136', '22', 'San Mariano');
INSERT INTO `parametro_localidad` VALUES ('2137', '22', 'San Martín de Las Escobas');
INSERT INTO `parametro_localidad` VALUES ('2138', '22', 'San Martín N.');
INSERT INTO `parametro_localidad` VALUES ('2139', '22', 'San Vicente');
INSERT INTO `parametro_localidad` VALUES ('2140', '22', 'Sancti Spititu');
INSERT INTO `parametro_localidad` VALUES ('2141', '22', 'Sanford');
INSERT INTO `parametro_localidad` VALUES ('2142', '22', 'Santo Domingo');
INSERT INTO `parametro_localidad` VALUES ('2143', '22', 'Santo Tomé');
INSERT INTO `parametro_localidad` VALUES ('2144', '22', 'Santurce');
INSERT INTO `parametro_localidad` VALUES ('2145', '22', 'Sargento Cabral');
INSERT INTO `parametro_localidad` VALUES ('2146', '22', 'Sarmiento');
INSERT INTO `parametro_localidad` VALUES ('2147', '22', 'Sastre');
INSERT INTO `parametro_localidad` VALUES ('2148', '22', 'Sauce Viejo');
INSERT INTO `parametro_localidad` VALUES ('2149', '22', 'Serodino');
INSERT INTO `parametro_localidad` VALUES ('2150', '22', 'Silva');
INSERT INTO `parametro_localidad` VALUES ('2151', '22', 'Soldini');
INSERT INTO `parametro_localidad` VALUES ('2152', '22', 'Soledad');
INSERT INTO `parametro_localidad` VALUES ('2153', '22', 'Soutomayor');
INSERT INTO `parametro_localidad` VALUES ('2154', '22', 'Sta. Clara de Buena Vista');
INSERT INTO `parametro_localidad` VALUES ('2155', '22', 'Sta. Clara de Saguier');
INSERT INTO `parametro_localidad` VALUES ('2156', '22', 'Sta. Isabel');
INSERT INTO `parametro_localidad` VALUES ('2157', '22', 'Sta. Margarita');
INSERT INTO `parametro_localidad` VALUES ('2158', '22', 'Sta. Maria Centro');
INSERT INTO `parametro_localidad` VALUES ('2159', '22', 'Sta. María N.');
INSERT INTO `parametro_localidad` VALUES ('2160', '22', 'Sta. Rosa');
INSERT INTO `parametro_localidad` VALUES ('2161', '22', 'Sta. Teresa');
INSERT INTO `parametro_localidad` VALUES ('2162', '22', 'Suardi');
INSERT INTO `parametro_localidad` VALUES ('2163', '22', 'Sunchales');
INSERT INTO `parametro_localidad` VALUES ('2164', '22', 'Susana');
INSERT INTO `parametro_localidad` VALUES ('2165', '22', 'Tacuarendí');
INSERT INTO `parametro_localidad` VALUES ('2166', '22', 'Tacural');
INSERT INTO `parametro_localidad` VALUES ('2167', '22', 'Tartagal');
INSERT INTO `parametro_localidad` VALUES ('2168', '22', 'Teodelina');
INSERT INTO `parametro_localidad` VALUES ('2169', '22', 'Theobald');
INSERT INTO `parametro_localidad` VALUES ('2170', '22', 'Timbúes');
INSERT INTO `parametro_localidad` VALUES ('2171', '22', 'Toba');
INSERT INTO `parametro_localidad` VALUES ('2172', '22', 'Tortugas');
INSERT INTO `parametro_localidad` VALUES ('2173', '22', 'Tostado');
INSERT INTO `parametro_localidad` VALUES ('2174', '22', 'Totoras');
INSERT INTO `parametro_localidad` VALUES ('2175', '22', 'Traill');
INSERT INTO `parametro_localidad` VALUES ('2176', '22', 'Venado Tuerto');
INSERT INTO `parametro_localidad` VALUES ('2177', '22', 'Vera');
INSERT INTO `parametro_localidad` VALUES ('2178', '22', 'Vera y Pintado');
INSERT INTO `parametro_localidad` VALUES ('2179', '22', 'Videla');
INSERT INTO `parametro_localidad` VALUES ('2180', '22', 'Vila');
INSERT INTO `parametro_localidad` VALUES ('2181', '22', 'Villa Amelia');
INSERT INTO `parametro_localidad` VALUES ('2182', '22', 'Villa Ana');
INSERT INTO `parametro_localidad` VALUES ('2183', '22', 'Villa Cañas');
INSERT INTO `parametro_localidad` VALUES ('2184', '22', 'Villa Constitución');
INSERT INTO `parametro_localidad` VALUES ('2185', '22', 'Villa Eloísa');
INSERT INTO `parametro_localidad` VALUES ('2186', '22', 'Villa Gdor. Gálvez');
INSERT INTO `parametro_localidad` VALUES ('2187', '22', 'Villa Guillermina');
INSERT INTO `parametro_localidad` VALUES ('2188', '22', 'Villa Minetti');
INSERT INTO `parametro_localidad` VALUES ('2189', '22', 'Villa Mugueta');
INSERT INTO `parametro_localidad` VALUES ('2190', '22', 'Villa Ocampo');
INSERT INTO `parametro_localidad` VALUES ('2191', '22', 'Villa San José');
INSERT INTO `parametro_localidad` VALUES ('2192', '22', 'Villa Saralegui');
INSERT INTO `parametro_localidad` VALUES ('2193', '22', 'Villa Trinidad');
INSERT INTO `parametro_localidad` VALUES ('2194', '22', 'Villada');
INSERT INTO `parametro_localidad` VALUES ('2195', '22', 'Virginia');
INSERT INTO `parametro_localidad` VALUES ('2196', '22', 'Wheelwright');
INSERT INTO `parametro_localidad` VALUES ('2197', '22', 'Zavalla');
INSERT INTO `parametro_localidad` VALUES ('2198', '22', 'Zenón Pereira');
INSERT INTO `parametro_localidad` VALUES ('2199', '23', 'Añatuya');
INSERT INTO `parametro_localidad` VALUES ('2200', '23', 'Árraga');
INSERT INTO `parametro_localidad` VALUES ('2201', '23', 'Bandera');
INSERT INTO `parametro_localidad` VALUES ('2202', '23', 'Bandera Bajada');
INSERT INTO `parametro_localidad` VALUES ('2203', '23', 'Beltrán');
INSERT INTO `parametro_localidad` VALUES ('2204', '23', 'Brea Pozo');
INSERT INTO `parametro_localidad` VALUES ('2205', '23', 'Campo Gallo');
INSERT INTO `parametro_localidad` VALUES ('2206', '23', 'Capital');
INSERT INTO `parametro_localidad` VALUES ('2207', '23', 'Chilca Juliana');
INSERT INTO `parametro_localidad` VALUES ('2208', '23', 'Choya');
INSERT INTO `parametro_localidad` VALUES ('2209', '23', 'Clodomira');
INSERT INTO `parametro_localidad` VALUES ('2210', '23', 'Col. Alpina');
INSERT INTO `parametro_localidad` VALUES ('2211', '23', 'Col. Dora');
INSERT INTO `parametro_localidad` VALUES ('2212', '23', 'Col. El Simbolar Robles');
INSERT INTO `parametro_localidad` VALUES ('2213', '23', 'El Bobadal');
INSERT INTO `parametro_localidad` VALUES ('2214', '23', 'El Charco');
INSERT INTO `parametro_localidad` VALUES ('2215', '23', 'El Mojón');
INSERT INTO `parametro_localidad` VALUES ('2216', '23', 'Estación Atamisqui');
INSERT INTO `parametro_localidad` VALUES ('2217', '23', 'Estación Simbolar');
INSERT INTO `parametro_localidad` VALUES ('2218', '23', 'Fernández');
INSERT INTO `parametro_localidad` VALUES ('2219', '23', 'Fortín Inca');
INSERT INTO `parametro_localidad` VALUES ('2220', '23', 'Frías');
INSERT INTO `parametro_localidad` VALUES ('2221', '23', 'Garza');
INSERT INTO `parametro_localidad` VALUES ('2222', '23', 'Gramilla');
INSERT INTO `parametro_localidad` VALUES ('2223', '23', 'Guardia Escolta');
INSERT INTO `parametro_localidad` VALUES ('2224', '23', 'Herrera');
INSERT INTO `parametro_localidad` VALUES ('2225', '23', 'Icaño');
INSERT INTO `parametro_localidad` VALUES ('2226', '23', 'Ing. Forres');
INSERT INTO `parametro_localidad` VALUES ('2227', '23', 'La Banda');
INSERT INTO `parametro_localidad` VALUES ('2228', '23', 'La Cañada');
INSERT INTO `parametro_localidad` VALUES ('2229', '23', 'Laprida');
INSERT INTO `parametro_localidad` VALUES ('2230', '23', 'Lavalle');
INSERT INTO `parametro_localidad` VALUES ('2231', '23', 'Loreto');
INSERT INTO `parametro_localidad` VALUES ('2232', '23', 'Los Juríes');
INSERT INTO `parametro_localidad` VALUES ('2233', '23', 'Los Núñez');
INSERT INTO `parametro_localidad` VALUES ('2234', '23', 'Los Pirpintos');
INSERT INTO `parametro_localidad` VALUES ('2235', '23', 'Los Quiroga');
INSERT INTO `parametro_localidad` VALUES ('2236', '23', 'Los Telares');
INSERT INTO `parametro_localidad` VALUES ('2237', '23', 'Lugones');
INSERT INTO `parametro_localidad` VALUES ('2238', '23', 'Malbrán');
INSERT INTO `parametro_localidad` VALUES ('2239', '23', 'Matara');
INSERT INTO `parametro_localidad` VALUES ('2240', '23', 'Medellín');
INSERT INTO `parametro_localidad` VALUES ('2241', '23', 'Monte Quemado');
INSERT INTO `parametro_localidad` VALUES ('2242', '23', 'Nueva Esperanza');
INSERT INTO `parametro_localidad` VALUES ('2243', '23', 'Nueva Francia');
INSERT INTO `parametro_localidad` VALUES ('2244', '23', 'Palo Negro');
INSERT INTO `parametro_localidad` VALUES ('2245', '23', 'Pampa de Los Guanacos');
INSERT INTO `parametro_localidad` VALUES ('2246', '23', 'Pinto');
INSERT INTO `parametro_localidad` VALUES ('2247', '23', 'Pozo Hondo');
INSERT INTO `parametro_localidad` VALUES ('2248', '23', 'Quimilí');
INSERT INTO `parametro_localidad` VALUES ('2249', '23', 'Real Sayana');
INSERT INTO `parametro_localidad` VALUES ('2250', '23', 'Sachayoj');
INSERT INTO `parametro_localidad` VALUES ('2251', '23', 'San Pedro de Guasayán');
INSERT INTO `parametro_localidad` VALUES ('2252', '23', 'Selva');
INSERT INTO `parametro_localidad` VALUES ('2253', '23', 'Sol de Julio');
INSERT INTO `parametro_localidad` VALUES ('2254', '23', 'Sumampa');
INSERT INTO `parametro_localidad` VALUES ('2255', '23', 'Suncho Corral');
INSERT INTO `parametro_localidad` VALUES ('2256', '23', 'Taboada');
INSERT INTO `parametro_localidad` VALUES ('2257', '23', 'Tapso');
INSERT INTO `parametro_localidad` VALUES ('2258', '23', 'Termas de Rio Hondo');
INSERT INTO `parametro_localidad` VALUES ('2259', '23', 'Tintina');
INSERT INTO `parametro_localidad` VALUES ('2260', '23', 'Tomas Young');
INSERT INTO `parametro_localidad` VALUES ('2261', '23', 'Vilelas');
INSERT INTO `parametro_localidad` VALUES ('2262', '23', 'Villa Atamisqui');
INSERT INTO `parametro_localidad` VALUES ('2263', '23', 'Villa La Punta');
INSERT INTO `parametro_localidad` VALUES ('2264', '23', 'Villa Ojo de Agua');
INSERT INTO `parametro_localidad` VALUES ('2265', '23', 'Villa Río Hondo');
INSERT INTO `parametro_localidad` VALUES ('2266', '23', 'Villa Salavina');
INSERT INTO `parametro_localidad` VALUES ('2267', '23', 'Villa Unión');
INSERT INTO `parametro_localidad` VALUES ('2268', '23', 'Vilmer');
INSERT INTO `parametro_localidad` VALUES ('2269', '23', 'Weisburd');
INSERT INTO `parametro_localidad` VALUES ('2270', '24', 'Río Grande');
INSERT INTO `parametro_localidad` VALUES ('2271', '24', 'Tolhuin');
INSERT INTO `parametro_localidad` VALUES ('2272', '24', 'Ushuaia');
INSERT INTO `parametro_localidad` VALUES ('2273', '25', 'Acheral');
INSERT INTO `parametro_localidad` VALUES ('2274', '25', 'Agua Dulce');
INSERT INTO `parametro_localidad` VALUES ('2275', '25', 'Aguilares');
INSERT INTO `parametro_localidad` VALUES ('2276', '25', 'Alderetes');
INSERT INTO `parametro_localidad` VALUES ('2277', '25', 'Alpachiri');
INSERT INTO `parametro_localidad` VALUES ('2278', '25', 'Alto Verde');
INSERT INTO `parametro_localidad` VALUES ('2279', '25', 'Amaicha del Valle');
INSERT INTO `parametro_localidad` VALUES ('2280', '25', 'Amberes');
INSERT INTO `parametro_localidad` VALUES ('2281', '25', 'Ancajuli');
INSERT INTO `parametro_localidad` VALUES ('2282', '25', 'Arcadia');
INSERT INTO `parametro_localidad` VALUES ('2283', '25', 'Atahona');
INSERT INTO `parametro_localidad` VALUES ('2284', '25', 'Banda del Río Sali');
INSERT INTO `parametro_localidad` VALUES ('2285', '25', 'Bella Vista');
INSERT INTO `parametro_localidad` VALUES ('2286', '25', 'Buena Vista');
INSERT INTO `parametro_localidad` VALUES ('2287', '25', 'Burruyacú');
INSERT INTO `parametro_localidad` VALUES ('2288', '25', 'Capitán Cáceres');
INSERT INTO `parametro_localidad` VALUES ('2289', '25', 'Cevil Redondo');
INSERT INTO `parametro_localidad` VALUES ('2290', '25', 'Choromoro');
INSERT INTO `parametro_localidad` VALUES ('2291', '25', 'Ciudacita');
INSERT INTO `parametro_localidad` VALUES ('2292', '25', 'Colalao del Valle');
INSERT INTO `parametro_localidad` VALUES ('2293', '25', 'Colombres');
INSERT INTO `parametro_localidad` VALUES ('2294', '25', 'Concepción');
INSERT INTO `parametro_localidad` VALUES ('2295', '25', 'Delfín Gallo');
INSERT INTO `parametro_localidad` VALUES ('2296', '25', 'El Bracho');
INSERT INTO `parametro_localidad` VALUES ('2297', '25', 'El Cadillal');
INSERT INTO `parametro_localidad` VALUES ('2298', '25', 'El Cercado');
INSERT INTO `parametro_localidad` VALUES ('2299', '25', 'El Chañar');
INSERT INTO `parametro_localidad` VALUES ('2300', '25', 'El Manantial');
INSERT INTO `parametro_localidad` VALUES ('2301', '25', 'El Mojón');
INSERT INTO `parametro_localidad` VALUES ('2302', '25', 'El Mollar');
INSERT INTO `parametro_localidad` VALUES ('2303', '25', 'El Naranjito');
INSERT INTO `parametro_localidad` VALUES ('2304', '25', 'El Naranjo');
INSERT INTO `parametro_localidad` VALUES ('2305', '25', 'El Polear');
INSERT INTO `parametro_localidad` VALUES ('2306', '25', 'El Puestito');
INSERT INTO `parametro_localidad` VALUES ('2307', '25', 'El Sacrificio');
INSERT INTO `parametro_localidad` VALUES ('2308', '25', 'El Timbó');
INSERT INTO `parametro_localidad` VALUES ('2309', '25', 'Escaba');
INSERT INTO `parametro_localidad` VALUES ('2310', '25', 'Esquina');
INSERT INTO `parametro_localidad` VALUES ('2311', '25', 'Estación Aráoz');
INSERT INTO `parametro_localidad` VALUES ('2312', '25', 'Famaillá');
INSERT INTO `parametro_localidad` VALUES ('2313', '25', 'Gastone');
INSERT INTO `parametro_localidad` VALUES ('2314', '25', 'Gdor. Garmendia');
INSERT INTO `parametro_localidad` VALUES ('2315', '25', 'Gdor. Piedrabuena');
INSERT INTO `parametro_localidad` VALUES ('2316', '25', 'Graneros');
INSERT INTO `parametro_localidad` VALUES ('2317', '25', 'Huasa Pampa');
INSERT INTO `parametro_localidad` VALUES ('2318', '25', 'J. B. Alberdi');
INSERT INTO `parametro_localidad` VALUES ('2319', '25', 'La Cocha');
INSERT INTO `parametro_localidad` VALUES ('2320', '25', 'La Esperanza');
INSERT INTO `parametro_localidad` VALUES ('2321', '25', 'La Florida');
INSERT INTO `parametro_localidad` VALUES ('2322', '25', 'La Ramada');
INSERT INTO `parametro_localidad` VALUES ('2323', '25', 'La Trinidad');
INSERT INTO `parametro_localidad` VALUES ('2324', '25', 'Lamadrid');
INSERT INTO `parametro_localidad` VALUES ('2325', '25', 'Las Cejas');
INSERT INTO `parametro_localidad` VALUES ('2326', '25', 'Las Talas');
INSERT INTO `parametro_localidad` VALUES ('2327', '25', 'Las Talitas');
INSERT INTO `parametro_localidad` VALUES ('2328', '25', 'Los Bulacio');
INSERT INTO `parametro_localidad` VALUES ('2329', '25', 'Los Gómez');
INSERT INTO `parametro_localidad` VALUES ('2330', '25', 'Los Nogales');
INSERT INTO `parametro_localidad` VALUES ('2331', '25', 'Los Pereyra');
INSERT INTO `parametro_localidad` VALUES ('2332', '25', 'Los Pérez');
INSERT INTO `parametro_localidad` VALUES ('2333', '25', 'Los Puestos');
INSERT INTO `parametro_localidad` VALUES ('2334', '25', 'Los Ralos');
INSERT INTO `parametro_localidad` VALUES ('2335', '25', 'Los Sarmientos');
INSERT INTO `parametro_localidad` VALUES ('2336', '25', 'Los Sosa');
INSERT INTO `parametro_localidad` VALUES ('2337', '25', 'Lules');
INSERT INTO `parametro_localidad` VALUES ('2338', '25', 'M. García Fernández');
INSERT INTO `parametro_localidad` VALUES ('2339', '25', 'Manuela Pedraza');
INSERT INTO `parametro_localidad` VALUES ('2340', '25', 'Medinas');
INSERT INTO `parametro_localidad` VALUES ('2341', '25', 'Monte Bello');
INSERT INTO `parametro_localidad` VALUES ('2342', '25', 'Monteagudo');
INSERT INTO `parametro_localidad` VALUES ('2343', '25', 'Monteros');
INSERT INTO `parametro_localidad` VALUES ('2344', '25', 'Padre Monti');
INSERT INTO `parametro_localidad` VALUES ('2345', '25', 'Pampa Mayo');
INSERT INTO `parametro_localidad` VALUES ('2346', '25', 'Quilmes');
INSERT INTO `parametro_localidad` VALUES ('2347', '25', 'Raco');
INSERT INTO `parametro_localidad` VALUES ('2348', '25', 'Ranchillos');
INSERT INTO `parametro_localidad` VALUES ('2349', '25', 'Río Chico');
INSERT INTO `parametro_localidad` VALUES ('2350', '25', 'Río Colorado');
INSERT INTO `parametro_localidad` VALUES ('2351', '25', 'Río Seco');
INSERT INTO `parametro_localidad` VALUES ('2352', '25', 'Rumi Punco');
INSERT INTO `parametro_localidad` VALUES ('2353', '25', 'San Andrés');
INSERT INTO `parametro_localidad` VALUES ('2354', '25', 'San Felipe');
INSERT INTO `parametro_localidad` VALUES ('2355', '25', 'San Ignacio');
INSERT INTO `parametro_localidad` VALUES ('2356', '25', 'San Javier');
INSERT INTO `parametro_localidad` VALUES ('2357', '25', 'San José');
INSERT INTO `parametro_localidad` VALUES ('2358', '25', 'San Miguel de 25');
INSERT INTO `parametro_localidad` VALUES ('2359', '25', 'San Pedro');
INSERT INTO `parametro_localidad` VALUES ('2360', '25', 'San Pedro de Colalao');
INSERT INTO `parametro_localidad` VALUES ('2361', '25', 'Santa Rosa de Leales');
INSERT INTO `parametro_localidad` VALUES ('2362', '25', 'Sgto. Moya');
INSERT INTO `parametro_localidad` VALUES ('2363', '25', 'Siete de Abril');
INSERT INTO `parametro_localidad` VALUES ('2364', '25', 'Simoca');
INSERT INTO `parametro_localidad` VALUES ('2365', '25', 'Soldado Maldonado');
INSERT INTO `parametro_localidad` VALUES ('2366', '25', 'Sta. Ana');
INSERT INTO `parametro_localidad` VALUES ('2367', '25', 'Sta. Cruz');
INSERT INTO `parametro_localidad` VALUES ('2368', '25', 'Sta. Lucía');
INSERT INTO `parametro_localidad` VALUES ('2369', '25', 'Taco Ralo');
INSERT INTO `parametro_localidad` VALUES ('2370', '25', 'Tafí del Valle');
INSERT INTO `parametro_localidad` VALUES ('2371', '25', 'Tafí Viejo');
INSERT INTO `parametro_localidad` VALUES ('2372', '25', 'Tapia');
INSERT INTO `parametro_localidad` VALUES ('2373', '25', 'Teniente Berdina');
INSERT INTO `parametro_localidad` VALUES ('2374', '25', 'Trancas');
INSERT INTO `parametro_localidad` VALUES ('2375', '25', 'Villa Belgrano');
INSERT INTO `parametro_localidad` VALUES ('2376', '25', 'Villa Benjamín Araoz');
INSERT INTO `parametro_localidad` VALUES ('2377', '25', 'Villa Chiligasta');
INSERT INTO `parametro_localidad` VALUES ('2378', '25', 'Villa de Leales');
INSERT INTO `parametro_localidad` VALUES ('2379', '25', 'Villa Quinteros');
INSERT INTO `parametro_localidad` VALUES ('2380', '25', 'Yánima');
INSERT INTO `parametro_localidad` VALUES ('2381', '25', 'Yerba Buena');
INSERT INTO `parametro_localidad` VALUES ('2382', '25', 'Yerba Buena (S)');

-- ----------------------------
-- Table structure for `parametro_pais`
-- ----------------------------
DROP TABLE IF EXISTS `parametro_pais`;
CREATE TABLE `parametro_pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of parametro_pais
-- ----------------------------
INSERT INTO `parametro_pais` VALUES ('1', 'Argentina');

-- ----------------------------
-- Table structure for `parametro_provincia`
-- ----------------------------
DROP TABLE IF EXISTS `parametro_provincia`;
CREATE TABLE `parametro_provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais_id` int(11) DEFAULT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_372CD21EC604D5C6` (`pais_id`),
  CONSTRAINT `FK_372CD21EC604D5C6` FOREIGN KEY (`pais_id`) REFERENCES `parametro_pais` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of parametro_provincia
-- ----------------------------
INSERT INTO `parametro_provincia` VALUES ('1', '1', 'Buenos Aires');
INSERT INTO `parametro_provincia` VALUES ('2', '1', 'Buenos Aires-GBA');
INSERT INTO `parametro_provincia` VALUES ('3', '1', 'Capital Federal');
INSERT INTO `parametro_provincia` VALUES ('4', '1', 'Catamarca');
INSERT INTO `parametro_provincia` VALUES ('5', '1', 'Chaco');
INSERT INTO `parametro_provincia` VALUES ('6', '1', 'Chubut');
INSERT INTO `parametro_provincia` VALUES ('7', '1', 'Córdoba');
INSERT INTO `parametro_provincia` VALUES ('8', '1', 'Corrientes');
INSERT INTO `parametro_provincia` VALUES ('9', '1', 'Entre Ríos');
INSERT INTO `parametro_provincia` VALUES ('10', '1', 'Formosa');
INSERT INTO `parametro_provincia` VALUES ('11', '1', 'Jujuy');
INSERT INTO `parametro_provincia` VALUES ('12', '1', 'La Pampa');
INSERT INTO `parametro_provincia` VALUES ('13', '1', 'La Rioja');
INSERT INTO `parametro_provincia` VALUES ('14', '1', 'Mendoza');
INSERT INTO `parametro_provincia` VALUES ('15', '1', 'Misiones');
INSERT INTO `parametro_provincia` VALUES ('16', '1', 'Neuquén');
INSERT INTO `parametro_provincia` VALUES ('17', '1', 'Río Negro');
INSERT INTO `parametro_provincia` VALUES ('18', '1', 'Salta');
INSERT INTO `parametro_provincia` VALUES ('19', '1', 'San Juan');
INSERT INTO `parametro_provincia` VALUES ('20', '1', 'San Luis');
INSERT INTO `parametro_provincia` VALUES ('21', '1', 'Santa Cruz');
INSERT INTO `parametro_provincia` VALUES ('22', '1', 'Santa Fe');
INSERT INTO `parametro_provincia` VALUES ('23', '1', 'Santiago del Estero');
INSERT INTO `parametro_provincia` VALUES ('24', '1', 'Tierra del Fuego');
INSERT INTO `parametro_provincia` VALUES ('25', '1', 'Tucumán');

-- ----------------------------
-- Table structure for `producto`
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci,
  `precio` decimal(10,2) DEFAULT NULL,
  `costo` decimal(10,2) DEFAULT NULL,
  `iva` decimal(10,2) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `limite_stock` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A7BB0615DB38439E` (`usuario_id`),
  KEY `IDX_A7BB06153397707A` (`categoria_id`),
  CONSTRAINT `FK_5ECD64433397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  CONSTRAINT `FK_5ECD6443DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('2', '2', '36', 'DV Catena Malbec - Malbec', '112233', 'Domingo Vicente Catena Malbec 2006 es un blend proveniente de uvas Malbec de dos diferentes viñedos. El viñedo Angelica aporta aromas de mermeladas de ciruelas maduras y moras negras, suavidad y volumen al paladar. La Pirámide entrega aromas de frutos negros de carozo y notas de especias como pimienta negra y clavo de olor. Se conjugan de manera excepcional para dar origen a este vino, intenso y concentrado, de final largo y muy persistente.\r\n \r\nAlejandro Vigil, Enólogo Jefe', '230.00', '100.00', '0.21', '1', '2015-02-17 00:38:17', '2015-05-21 23:11:21', '4', '0');
INSERT INTO `producto` VALUES ('3', '1', '36', 'DV Catena Malbec - Cabernet1', '112244', 'DV Catena Cabernet Sauvignon-Malbec 2008 es un vino elegante y complejo, de color rojo rubi con reflejos violetas. A la nariz, intenso y concentrado, presenta notas de especias aportadas por el Cabernet Sauvignon del viñedo La Pirámide, y notas de moras maduras y ciruelas, características del Malbec del viñedo Angélica, acompañadas por vainilla, tabaco y licor aportadas por la crianza en roble. En boca, de impacto dulce y gran complejidad, con taninos integrados y redondos, de final largo y persistente. Ideal para acompañar carnes de caza, como el ciervo y el jabalí.\r\n \r\nAlejandro Vigil, Enólogo Jefe', '330.00', '90.00', '0.21', '1', '2015-02-17 01:34:42', '2015-05-05 17:09:41', '5', '0');
INSERT INTO `producto` VALUES ('4', '1', '36', 'DV Catena Syrah - Syrah', '112255', 'DV Catena Syrah-Syrah 2006, es un vino elegante y complejo, de gran concentración, color violeta oscuro con matices negros. A la nariz, intenso y complejo, presenta aromas de moras maduras, ciruelas y cuero, con notas ligeras de vainilla, tabaco y licor. En boca, de impacto dulce en un comienzo y gran complejidad, es amplio, con taninos suaves y redondos que le otorgan una gran armonía final. Un vino ideal para acompañar pastas y carnes rojas como el cordero, o simplemente para beberlo y disfrutarlo con frutas secas y chocolate.\r\n \r\nAlejandro Vigil, Enólogo Jefe', '270.00', '85.00', '0.21', '1', '2015-02-17 01:58:31', '2015-05-05 21:12:27', '6', '0');
INSERT INTO `producto` VALUES ('5', '1', '37', 'callia amable', '112255', 'Callia Amable, es un producto fácil de beber, para varias ocasiones de consumo. Contiene bajo contenido alcohólico 10%, ideal para tomarse como aperitivo o acompañar sushi, pescados, dulces o postres.\r\n\r\n \r\n\r\nA la vista se manifiesta de color amarillo con reflejos dorados y verdosos. Su aroma es a manzanas y membrillos con toques de miel y flores blancas. Mientras que en boca es redondo, aterciopelado, de acidez equilibrada y destacada persistencia.', '50.00', '50.00', '0.21', '1', '2015-02-17 02:01:48', '2015-05-05 21:29:33', '7', '0');
INSERT INTO `producto` VALUES ('7', '1', '36', 'El GRAN ENEMIGO', '112266', 'Corte de Cabernet Franc, Petit Verdot y Malbec (no tenemos los porcentajes). En vista un púrpura profundo con reflejos rubí. En nariz dulce, fruta en compota y notas de chocolate y vainilla.  En boca ataca dulce, algo astringente, de gran cuerpo y marcada acidez\r\n\r\nElaborado con Cabernet Franc, Malbec y otras uvas que el enólogo no develó. Sólo se elaboran 3.200 botellas. “Lleva mucho trabajo de cosecha, las uvas se levantan en 7 momentos diferentes de la temporada”, dijo Vigil.', '700.00', '500.00', '0.21', '1', '2015-02-18 13:30:37', '2015-05-05 21:40:24', '8', '0');
INSERT INTO `producto` VALUES ('8', '1', '36', 'SIESTA  - CAVERNET FRANC', '112277', 'Rojo Carmín muy intenso. Aroma: muy frutado, con notas de frutos rojos, zarzamora, cassis y guindas negras. Especiado.', '260.00', '0.00', '0.21', '1', '2015-02-18 14:07:49', '2015-05-05 21:49:10', '14', '0');
INSERT INTO `producto` VALUES ('9', '1', '36', 'SAINT FELICIEN - CABENET SAUVIGNON', '242-11', 'Saint Felicien Cabernet Sauvignon 2008 es un vino elegante y complejo, de color rojo rubí profundo. Se perciben en este vino aromas a frutas rojas, como cerezas y ciruelas maduras, junto a fragancias especiadas, tal como pimienta negra, y notas suaves de eucaliptus. En la boca resulta un vino complejo, de buen cuerpo y estructura, taninos suaves, maduros y excelente longitud e intensidad. En el final de boca aparecen delicados sabores tostados y a vainilla.\r\n\r\nAlejandro Vigil, Enólogo Jefe', '155.00', '0.00', '0.21', '1', '2015-02-19 14:00:38', '2015-05-05 22:12:07', '3', '0');
INSERT INTO `producto` VALUES ('11', '1', '36', 'DV Catena Syrah-Syrah.', '2301-10', 'Es un vino elegante y complejo, de gran concentración, color violeta oscuro con matices negros. A la nariz, intenso y complejo, presenta aromas de moras maduras, ciruelas y cuero, con ligeras notas de vainilla, tabaco y licor. En boca, de impacto dulce en un comienzo y gran complejidad, es amplio con taninos suaves y redondos que le otorgan una gran armonía final.', '265.00', '0.00', '0.21', '1', '2015-02-25 18:55:55', '2015-05-05 22:55:15', '0', '0');
INSERT INTO `producto` VALUES ('12', '1', '38', 'DV Catena Nature.', '2350-NV.', 'El vino base de este espumante natural se elaboró con uvas Chardonnay y Pinot Noir provenientes de nuestros viñedos en Tupungato. Tanto el Chardonnay como el Pinot Noir son clones seleccionados típicos para la elaboración de espumantes naturales.\r\nEl Chardonnay es muy intenso aromáticamente, elegante y de gran longitud, aportando al vino base la expresión aromática.\r\nEl Pinot Noir de racimos pequeños y de gran equilibrio ácido aporta al corte la estructura y complejidad.\r\nEl agregado del licor de Tiraje para la toma de espuma se realizó en el mes de Mayo de 2006, operación netamente artesanal destinada a lograr la refermentación en botella.', '460.00', '0.00', '0.21', '1', '2015-02-25 20:45:55', '2015-05-05 23:39:11', '0', '0');
INSERT INTO `producto` VALUES ('13', '1', '36', 'angelica zapata-cabernet sauvignion', '297-10', 'Angélica Zapata Malbec 2008 es un blend proveniente de uvas Malbec de diferentes viñedos. El resultado es un vino de gran concentración y elegancia.\r\nEl viñedo Angélica aporta aromas de ciruelas maduras, mermelada de frutos rojos, suavidad y volumen al paladar.\r\nLa Pirámide entrega aromas de frutos negros de carozo y notas especiadas de pimienta negra y clavo de olor.\r\nNicasia cuartel 2, aporta frutos rojos del bosque , frescura y elegancia. El cuartel 3 de Adrianna presenta aromas florales intensos que recuerdan a violeta y lavanda, mientras que el cuartel 9 de este viñedo aporta un color violeta oscuro y profundo, aroma de frutos negros maduros, notas minerales y un largo final en boca .\r\nEstos cinco elementos se conjugan de manera excepcional otorgando una gran complejidad al blend final. Ideal para acompañar un gran asado argentino.\r\n\r\n\r\nAlejandro Vigil, Enólogo Jefe', '320.00', '0.00', '0.21', '1', '2015-02-26 14:58:25', '2015-05-06 00:04:13', '0', '0');
INSERT INTO `producto` VALUES ('14', '1', '36', 'angelica zapata-cabernet sauvignion alta', '297-10', 'Angélica Zapata Cabernet Sauvignon 2007 es un vino elegante y complejo, de color rojo rubí profundo. Se perciben en este vino aromas a frutas rojas, como cassis, cerezas y ciruelas maduras, junto a fragancias especiadas, tal como pimienta negra , clavo de olor, y notas suaves de orégano y tomillo. En la boca resulta un vino complejo, de buen cuerpo y estructura, taninos bien integrados, maduros, de excelente longitud e intensidad. El paso por roble aporta sabores especiados y vainilla.', '320.00', '0.00', '0.21', '1', '2015-02-26 15:23:24', '2015-05-06 04:17:16', '2', '0');
INSERT INTO `producto` VALUES ('17', '1', '36', 'Angelica Zapata-merlot alta', '298-10', 'Angélica Zapata Merlot 2007, es un vino elegante y complejo de color rojo violáceo con destellos rubíes, de nariz delicada, donde sobresalen aromas que recuerdan a de frutos rojos del bosque y notas suaves de especias como pimienta negra y clavo de olor, aportados por las uvas del viñedo La Pirámide , y aromas a frutos rojos y negros maduros como cassis y grosellas aportados por las uvas de Nicasia y Adrianna. El paso por roble aporta notas suaves de especias y vainilla. En boca de impacto dulce y cuerpo medio, muy equilibrado con la acidez, se perciben taninos muy suaves y redondos que ofrecen un final longevo y agradable', '330.00', '0.00', '0.21', '1', '2015-02-26 16:13:17', '2015-05-06 04:20:40', '2', '0');
INSERT INTO `producto` VALUES ('18', '1', '36', 'Angelica Zapata-cabernet franc alta', '2700-10', 'El Angélica Zapata Cabernet Franc Alta, cosecha 2006 presenta un color rojo rubí con suaves tonalidades violáceas.\r\nPosee aroma intenso y concentrado con notas de cassis, grosellas maduras, y toques de vainilla y especias dulces como pimienta negra y clavo de olor.\r\nDe impacto dulce y excelente estructura en boca, muestra frutos rojos maduros con marcados dejos a eucalipto y pimienta negra.\r\nEste vino, de excelente balance y elegancia, posee ahora un final bien estructurado y persistente y se prevé que evolucionará favorablemente en botella hasta por lo menos el año 2021', '350.00', '0.00', '0.21', '1', '2015-02-26 16:27:56', '2015-05-06 12:23:57', '2', '0');
INSERT INTO `producto` VALUES ('19', '1', '37', 'Angelica Zapata- chardonnay alta', '296-11', 'Angélica Chardonnay 2007 es un “single vineyard” que refleja características propias de la zona de gran altitud en donde se origina. Con días soleados y cálidos, y noches frescas al pie del Cordón del Plata, las uvas de Chardonnay adquieren una madurez plena y bien balanceada. Su color es amarillo intenso con reflejos verdosos claros. En nariz se presenta concentrado e intenso, con aromas de frutas cítricas y un toque mineral. En boca, de impacto dulce, untuoso, es brillante y fresco con sabores a frutas maduras, notas de vainilla y una excelente acidez natural que le otorga un final largo y persistente.', '320.00', '0.00', '0.21', '1', '2015-02-26 16:32:19', '2015-05-06 06:21:27', '0', '0');
INSERT INTO `producto` VALUES ('20', '1', '36', 'CABERNET FRANC - VIÑEDO ADRIANNA - GUALTALLARY', '2705-10', 'Angelica Zapata Adrianna Vineyard Cabernet Franc, proviene de una selección de plantas ubicadas en diferentes lugares del mismo viñedo.\r\n\r\nSe seleccionan los mejores racimos de todo el viñedo y  se asegura la obtención de un vino que expresa toda la complejidad, potencia y características de esa zona.  Es el resultado de cerca de 40 vinificaciones diferentes que se combinan para formar el vino final. El viñedo se sitúa a 1470 metros de altura y posee plantas de 22 años de edad.', '1140.00', '0.00', '0.21', '1', '2015-02-26 17:37:42', '2015-05-06 16:55:05', '2', '0');
INSERT INTO `producto` VALUES ('21', '1', '36', 'Landon Cabernet-Malbec', '430-08', 'En vista aparece con un color rojo violáceo intenso de centro casi negro.\r\nEn nariz mucha fruta roja madura y aportes de vainilla muy intenso.\r\nEn Boca ataca dulce, con taninos activos que se van a ir domando y un final medio a medio largo.\r\nA pesar de los taninos, ( que no molestan en absoluto) tiene una buena estructura y está para tomar ahora', '150.00', '0.00', '0.21', '1', '2015-02-26 18:18:33', '2015-05-06 19:27:58', '2', '0');
INSERT INTO `producto` VALUES ('22', '1', '36', 'DV Catena-Cabernet-Cabernet', '2201-10', 'El Cabernet Sauvignon, proviene del Lote 3 del Viñedo La Pirámide. Estas viñas fueron plantadas en 1983 y otorgan un nivel excepcional de balance y homogeneidad, desde la producción y distribución total de racimos al tamaño y densidad de la canopia en la planta. Las uvas de Cabernet Sauvignon de este lote poseen un sabor intenso a cassis y una excelente estructura. El segundo componente del Cabernet Sauvignon fue obtenido del lote 2 del viñedo Domingo. Esta mayor altitud y viñedos con climas más frescos otorgan aromas a cerezas negras maduras, con un leve toque mineral y notas de orègano y tomillo.\r\n\r\nDomingo Vicente Catena Cabernet Sauvignon 2006, presenta un color rojo rubí intenso con reflejos violáceos oscuros.\r\nEn nariz ofrece aromas complejos, que recuerdan a cassis, frambuesas, entretejidos con especias dulces como pimienta negra y clavo de olor, cedro y cuero, con notas minerales de grafito . Intenso y de buen cuerpo, este vino de destacable elegancia, presenta textura suave y excelente equilibrio. Su acidez y taninos suaves le otorgan una estructura bien definida, coronada en un final largo y persistente.', '410.00', '0.00', '0.21', '1', '2015-02-26 19:05:12', '2015-05-06 19:31:38', '0', '0');
INSERT INTO `producto` VALUES ('23', '1', '36', 'EL GRAN ENEMIGO CORTE (Cabernet Franc - Malbec)', '487-09MI', 'Este Blend a base de Cabernet Franc fue elaborado a partir de uvas plantadas en Gualtallary, una de las regiones más prometedoras del Valle de Uco, Mendoza. Aquí, Alejandro Vigil y Adrianna Catena decidieron plantar algunos pocos varietales en un terroir de pocas hectáreas, buscando aprovechar al máximo las características de un microclima fantástico e ideal para la elaboración de vinos genuinos y con gran personalidad.\r\nDe introspectivo bouquet, despierta aromas licorosos, de regaliz, laurel y olivos negros. En boca se muestra de cuerpo completo, con presencia de fruta negra, sobre un exquisito equilibrio y aplomo. Se trata de un vino diseñado para el largo plazo, y para serles sincero, pienso que es uno de los mejores cortes a base de Cabernet Franc que he encontrado. Se expande en la boca y, sin embargo, nunca llega a ser dominante en el final, percibiéndose el viejo cliché un puño de hierro en un guante de terciopelo. Este intuitivo Cabernet Franc fue maravillosamente mezclado con sus damas de honor, Petit Verdot y Malbec', '610.00', '0.00', '0.21', '1', '2015-02-27 04:04:13', '2015-05-06 23:38:54', '0', '0');
INSERT INTO `producto` VALUES ('24', '1', '36', 'EL GRAN ENEMIGO AGRELO SINGLE VINEYARD CABERNET FRANC', '496-10', 'Al igual que su hermano de Gualtallary, este ejemplar de Agrelo sorprende por su extrema delicadeza y personalidad. De color rojizo oscuro, despliega aromas frutados, de ciruelas negras maduras, y algunas sutiles notas minerales y especiadas. En boca es sumamente elegante y expresivo, con taninos sedosos, mucha complejidad y notas memorables de frutos negros y especias tenues. Su final expresa notables rasgos propios, y es claro el mensaje en relación al terroir. Una creación superlativa.', '795.00', '0.00', '0.21', '1', '2015-02-27 04:18:11', '2015-05-06 23:47:26', '0', '0');
INSERT INTO `producto` VALUES ('25', null, '36', 'EL ENEMIGO BONARDA', '485-11MI', 'De intenso color violeta con destellos azulados. Sobresale el aroma a compota de frambuesas, cerezas negras, chocolate y licor con notas especiadas. En boca sus taninos son aterciopelados, sedosos, con matices de anis y vainilla.', '380.00', '0.00', '0.21', '1', '2015-02-27 04:33:37', '2015-02-27 04:36:07', '0', '0');
INSERT INTO `producto` VALUES ('26', null, '36', 'EL ENEMIGO MALBEC', '480-10', 'Color púrpura denso y brillante, lágrimas lentas y gruesas que tiñen y un residuo al final que muestra no ser un vino filtrado. Los aromas son plenos típicos des buenos malbecs argentinos con fresas maduras, cedro, café tostado, chocolate... En boca tiene buen cuerpo, buena acidéz, taninos firmes de buena calidad y mucha fruta. Buena persistencia y nada de amargo.', '335.00', '0.00', '0.21', '1', '2015-02-27 04:46:22', '2015-02-27 04:47:21', '0', '0');
INSERT INTO `producto` VALUES ('27', null, '37', 'EL ENEMIGO CHARDONNAY', '488-11MI', 'De color dorado verdoso opaco. En nariz ofrece notas florales y vegetales, que afirman su costado silvestre, aunque con delicadeza. También se observan algunos aromas que recuerdan el marcado paso por roble, que para esta etiqueta se extendió durante 12 meses. En boca revela nuevamente su perfil algo indomable, con frescura y elegancia, pero a la vez con mucha personalidad, como buscando romper el molde, aunque no demasiado. Su final es armonioso, delicado y dotado de mucha impronta.', '245.00', '0.00', '0.21', '1', '2015-02-27 04:52:24', '2015-02-27 04:53:20', '0', '0');
INSERT INTO `producto` VALUES ('28', '1', '36', 'EL ENEMIGO CABERNET FRANC', '493-10', 'Este vino se presenta de un color con tonalidades que recuerdan a la cereza, de capa media alta, con ribetes púrpura, En nariz es un abanico de de aromas, principalmente los de fruta roja y alguna notas que nos recuerda a la fruta negra (ciruela, grosellas, moras), notas florales y sutiles notas vegetales. En boca es algo goloso, pero sin perder su frescura amable sin toboganes, con un paso firme y no demasiado rápido, dejando el paladar bastante impregnado. Tanínos finos bien integrados, la fruta siempre aparece por encima de la madera, final largo y con recuerdos muy agradables', '280.00', '0.00', '0.21', '1', '2015-02-27 05:14:46', '2015-10-15 13:59:27', '0', '0');
INSERT INTO `producto` VALUES ('30', null, '36', 'Alamos-Malbec', '330-13', 'Su color presenta un profundo color púrpura con reflejos violeta. Su aroma remite a intensos frutos negros con ligeras notas florales y de tostado. En boca es un vino de gran concentración, con pronunciados sabores a casis y frambuesas y un leve dejo a chocolate y especias dulces provenientes del añejamiento en roble. El final es largo con taninos maduros y sedosos.', '113.00', '0.00', '0.21', '1', '2015-02-27 14:36:18', '2015-02-27 14:36:18', '0', '0');
INSERT INTO `producto` VALUES ('31', null, '36', 'Alamos-Cabernet', '335-13', 'Ofrece a la vista un profundo color púrpura, acompañado por reflejos rubíes. En nariz despliega aromas que recuerdan a frutos rojos maduros, especias dulces y tabaco. En boca se distinguen notas delicadas de grosellas y casis, y un leve toque de cedro y café. El final es dulce, suave, con taninos firmemente integrados, que aportan buena estructura y longitud.', '110.00', '0.00', '0.21', '1', '2015-02-27 14:48:51', '2015-02-27 14:50:27', '0', '0');
INSERT INTO `producto` VALUES ('32', null, '36', 'Alamos-Pinot Noir', '3160-13', 'El color era de un rojo de buen brillo con algunas notas evolucionadas, delgadas y largas lágrimas. Nada de colores extremos, sino pura sutileza cromática. Aromas a frutillas y madera, algo de café. En boca fue ameno, bien Pinot Noir, con un largo final de fruta roja.\r\nConcluyendo, los Pinot Noir patagónicos se imponen sin dudas, pero en Mendoza hay algunos grandes exponentes como éste. Un vino suave, no muy complejo, ideal para tomar cuando quieras algo fácil y bueno.', '110.00', '0.00', '0.21', '1', '2015-02-27 14:55:20', '2015-02-27 14:55:20', '0', '0');
INSERT INTO `producto` VALUES ('33', null, '36', 'Alamos Malbec', '3230-13', 'De profundo color púrpura, con reflejos violáceos. Su aroma remite a intensos frutos negros, acompañados por notas florales y tostadas. En boca se muestra concentrado y frutal, con sabores que recuerdan a casis, frambuesas, chocolate y especias dulces. Su final es prolongado, con taninos dulces y sedosos', '67.00', '0.00', '0.21', '1', '2015-02-27 14:56:30', '2015-02-27 14:56:30', '0', '0');
INSERT INTO `producto` VALUES ('34', null, '37', 'Alamos-Suavignon Blanc', '3130-13sc', 'A la vista el vino Sauvignon Blanc presenta un color amarillo verdoso, llegando a presentarse levemente verdoso con reflejos dorados. Los aromas primarios que emanan del Sauvignon Blanc son herbáceos, recuerdan a pasto recién cortado, la miel, el bizcocho, ananá, mango, espárragos, pomelo rosado, miel. A la boca el Sauvignon Blanc presenta un cantidad de ácidos notables, de gran personalidad y con sabores a pasto, pomelos rosados y en ciertos casos a yesca-pedernal.', '110.00', '0.00', '0.21', '1', '2015-02-27 15:11:57', '2015-02-27 15:11:57', '0', '0');
INSERT INTO `producto` VALUES ('35', null, '36', 'MALBEC MACERACIÓN ATENUADA', '3190-13SC', 'VISTA: Rojo cereza de baja intensidad, producto de su corta maceración.\r\n\r\nNARIZ: Presenta aromas a frutos rojos frescos como frambuesa y frutilla con algunas notas cítricas que recuerdan al pomelo rosado.\r\n\r\nBOCA: En boca, al principio de impacto dulce e inmediatamente equilibrado por la frescura de su acidez natural, se presenta amable, sutil y longevo.', '110.00', '0.00', '0.21', '0', '2015-02-27 15:23:08', '2015-03-21 00:13:42', '0', '0');
INSERT INTO `producto` VALUES ('37', null, '36', 'Alamos- Malbec Maceración Atenuada. (media)', '3190-13SC', 'Rojo cereza de baja intensidad, producto de su corta maceración.\r\nPresenta aromas a frutos rojos frescos como frambuesa y frutilla con algunas notas cítricas que recuerdan al pomelo rosado.\r\nEn boca, al principio de impacto dulce e inmediatamente equilibrado por la frescura de su acidez natural, se presenta amable, sutil y longevo.', '65.00', '0.00', '0.21', '1', '2015-02-27 16:13:28', '2015-02-27 19:26:50', '0', '0');
INSERT INTO `producto` VALUES ('38', null, '37', 'Alamos-Chardonnay', '341-13sc', 'De color amarillo oro con reflejos verdosos, ofrece intensos aromas a fruta tropical, cítricos y atractivas notas florales.\r\n\r\nEn boca es un vino de gran concentración, con pronunciados sabores a peras e higos, suavemente entrelazados con notas de vainilla y especias dulces provenientes del añejamiento en roble. El final es limpio y fresco, con una acidez vivaz y refrescante.', '110.00', '0.00', '0.21', '1', '2015-02-27 16:17:30', '2015-02-27 16:17:30', '0', '0');
INSERT INTO `producto` VALUES ('39', null, '37', 'Alamos-Chardonnay (de media)', '3390-13', 'De color amarillo oro con reflejos verdosos, ofrece intensos aromas a fruta tropical, cítricos y atractivas notas florales. En boca es un vino de gran concentración, con pronunciados sabores a peras e higos, suavemente entrelazados con notas de vainilla y especias dulces provenientes del añejamiento en roble. El final es limpio y fresco, con una acidez vivaz y refrescante.', '65.00', '0.00', '0.21', '1', '2015-02-27 16:30:46', '2015-02-27 17:07:34', '0', '0');
INSERT INTO `producto` VALUES ('40', null, '38', 'Alamos-Extra Brut', '325-NV', 'El vino base de este espumante natural se elaboró con uvas Chardonnay y Pinot Noir provenientes de nuestros viñedos en Tupungato. Tanto el Chardonnay como el Pinot Noir son clones seleccionados típicos para la elaboración de espumantes naturales.\r\nEl Chardonnay es muy intenso aromáticamente, elegante y de gran longitud, aportando al vino base la expresión aromática. El Pinot Noir de racimos pequeños y de gran equilibrio ácido aporta al corte la estructura y complejidad.', '155.00', '0.00', '0.21', '1', '2015-02-27 16:49:44', '2015-02-27 16:49:44', '0', '0');
INSERT INTO `producto` VALUES ('41', null, '37', 'Alamos Moscatel De Alejendria.', '428', 'De color amarillo pálido con reflejos verdosos, es muy fresco, de equilibrada acidez y dulzor natural. Un vino muy fragante, con aromas a duraznos, kiwis y dejos de jazmines.', '110.00', '0.00', '0.21', '1', '2015-02-27 16:55:30', '2015-02-27 19:08:10', '0', '0');
INSERT INTO `producto` VALUES ('42', null, '38', 'Alamos-Extra Brut (de media)', '3250-NV', 'El vino base de este espumante natural se elaboró con uvas Chardonnay y Pinot Noir provenientes de nuestros viñedos en Tupungato. Tanto el Chardonnay como el Pinot Noir son clones seleccionados típicos para la elaboración de espumantes naturales.\r\nEl Chardonnay es muy intenso aromáticamente, elegante y de gran longitud, aportando al vino base la expresión aromática. El Pinot Noir de racimos pequeños y de gran equilibrio ácido aporta al corte la estructura y complejidad.', '82.00', '0.00', '0.21', '1', '2015-02-27 16:56:55', '2015-02-27 16:56:55', '0', '0');
INSERT INTO `producto` VALUES ('43', null, '38', 'Alamos Brut Rosé. Alamos', '409-NV-MI.', 'De suave color salmón y delicada espuma.', '155.00', '0.00', '0.21', '1', '2015-02-27 17:07:57', '2015-02-27 19:05:59', '0', '0');
INSERT INTO `producto` VALUES ('44', null, '36', 'Alamos-Malbec (estuche x 2)', '3170-13', 'De profundo color púrpura, con reflejos violáceos. Su aroma remite a intensos frutos negros, acompañados por notas florales y tostadas. En boca se muestra concentrado y frutal, con sabores que recuerdan a casis, frambuesas, chocolate y especias dulces. Su final es prolongado, con taninos dulces y sedosos', '280.00', '0.00', '0.21', '1', '2015-02-27 18:49:39', '2015-03-08 18:47:53', '0', '0');
INSERT INTO `producto` VALUES ('45', null, '36', 'Alamos-Cabernet (estuche x2)', '3820-10', 'Ofrece a la vista un profundo color púrpura, acompañado por reflejos rubíes. En nariz despliega aromas que recuerdan a frutos rojos maduros, especias dulces y tabaco. En boca se distinguen notas delicadas de grosellas y casis, y un leve toque de cedro y café. El final es dulce, suave, con taninos firmemente integrados, que aportan buena estructura y longitud.', '270.00', '0.00', '0.21', '1', '2015-02-27 18:51:38', '2015-03-08 18:50:49', '0', '0');
INSERT INTO `producto` VALUES ('46', null, '38', 'Alamos Extra Brut', '368-NV', 'El vino base de este espumante natural se elaboró con uvas Chardonnay y Pinot Noir provenientes de nuestros viñedos en Tupungato. Tanto el Chardonnay como el Pinot Noir son clones seleccionados típicos para la elaboración de espumantes naturales.\r\nEl Chardonnay es muy intenso aromáticamente, elegante y de gran longitud, aportando al vino base la expresión aromática.\r\nEl Pinot Noir de racimos pequeños y de gran equilibrio ácido aporta al corte la estructura y complejidad.\r\nLuego de la Toma de Espuma y el agregado del licor de expedición, el resultado es este espléndido Espumante Natural, que presenta excelente calidad y persistencia en la burbuja. Sus aromas recuerdan a flores blancas y frutos cítricos con notas de pan fresco. En boca resulta de gran estructura y medio paladar, con un final fresco y muy longevo.', '215.00', '0.00', '0.21', '1', '2015-02-27 18:55:54', '2015-02-27 18:55:54', '0', '0');
INSERT INTO `producto` VALUES ('47', null, '37', 'Nicasia Vineyards-Blanc de Blancs', '422-12-ML', 'Se perciben en este vino deliciosos sabores a frutos blancos y de durazno  aportados por el Viognier, junto a delicadas notas florales típicas de la variedad Gewürztraminer y frescos dejos cítricos  propios del Sauvignon Blanc. El paso por roble incrementa aún más la complejidad de este vino, otorgando sutiles notas de miel.', '130.00', '0.00', '0.21', '1', '2015-02-27 19:07:48', '2015-02-27 19:07:48', '0', '0');
INSERT INTO `producto` VALUES ('48', null, '36', 'Nicasia Vineyards-Red Blend Malbec', '420-12ML', 'Se perciben en este vino intensos y dulces sabores a ciruelas y moras maduras aportados por el Malbec, junto a sutiles notas especiadas conferidos por el Cabernet Sauvignon y el Petit Verdot. El paso por roble incrementa aún más la complejidad de este vino, otorgando ligeras notas de vanilla y café.', '138.00', '0.00', '0.21', '1', '2015-02-27 19:31:02', '2015-02-27 19:31:02', '0', '0');
INSERT INTO `producto` VALUES ('49', null, '36', 'Alamos-Malbec Maceración Atenuada', '3190-13SC', 'Rojo cereza de baja intensidad, producto de su corta maceración. Presenta aromas a frutos rojos frescos como frambuesa y frutilla con algunas notas cítricas que recuerdan al pomelo rosado. En boca, al principio de impacto dulce e inmediatamente equilibrado por la frescura de su acidez natural, se presenta amable, sutil y longevo.', '110.00', '0.00', '0.21', '1', '2015-02-27 19:45:28', '2015-02-27 19:45:28', '0', '0');
INSERT INTO `producto` VALUES ('50', null, '36', 'Nicasia Vineyards-Red Blend Cabernet Franc', '421-12ML', 'Se perciben en este vino elegantes notas herbáceas y de anís aportadas por el Cabernet Franc, junto a vivaces frutos negros y especias conferidos por el Merlot y el Petit Verdot. El paso por roble incrementa aún más la complejidad de este vino, otorgando delicados toques ahumados y de tostado.', '130.00', '0.00', '0.21', '1', '2015-02-27 21:04:44', '2015-02-27 21:04:44', '0', '0');
INSERT INTO `producto` VALUES ('51', null, '36', 'SAINT FELICIEN - CABENET MERLOT', '247-10', 'Saint Felicien Cabernet-Merlot 2007, es un vino elegante y complejo, de color rojo rubí intenso. A la nariz, presenta aromas de especias y frutos negros maduros como el cassis con notas de menta y eucaliptus aportadas por el Cabernet, combinadas con fragancias de mermeladas y frutos confitados aportados por el Merlot. El roble hace su aporte con notas ligeras de vainilla y tabaco. En boca, de impacto dulce y gran complejidad, es untuoso, de buen cuerpo, con taninos suaves y redondos, de final largo y persistente.', '155.00', '0.00', '0.21', '1', '2015-02-27 21:18:58', '2015-02-27 21:18:58', '0', '0');
INSERT INTO `producto` VALUES ('52', null, '36', 'Saint Felicien-Malbec', '265-12', 'Saint Felicien Malbec es un vino elegante y complejo, de color violeta oscuro y profundo, típico de los malbecs argentinos. A la nariz, intenso y concentrado, presenta aromas de moras maduras con notas ligeras de vainilla, tabaco y licor. En boca, de impacto dulce y gran complejidad, es untuoso, con taninos suaves y redondos característicos del viñedo Angélica.', '155.00', '0.00', '0.21', '1', '2015-02-27 21:24:38', '2015-02-27 21:24:38', '0', '0');
INSERT INTO `producto` VALUES ('53', null, '36', 'SAINT FELICIEN - CABENET MERLOT (De media).', '2470-11', 'Saint Felicien Cabernet-Merlot 2007, es un vino elegante y complejo, de color rojo rubí intenso. A la nariz, presenta aromas de especias y frutos negros maduros como el cassis con notas de menta y eucaliptus aportadas por el Cabernet, combinadas con fragancias de mermeladas y frutos confitados aportados por el Merlot. El roble hace su aporte con notas ligeras de vainilla y tabaco. En boca, de impacto dulce y gran complejidad, es untuoso, de buen cuerpo, con taninos suaves y redondos, de final largo y persistente.', '100.00', '0.00', '0.21', '1', '2015-02-27 21:27:36', '2015-02-27 21:27:36', '0', '0');
INSERT INTO `producto` VALUES ('54', null, '36', 'Saint Felicien-Malbec (de media)', '2652-12', 'Saint Felicien Malbec es un vino elegante y complejo, de color violeta oscuro y profundo, típico de los malbecs argentinos. A la nariz, intenso y concentrado, presenta aromas de moras maduras con notas ligeras de vainilla, tabaco y licor. En boca, de impacto dulce y gran complejidad, es untuoso, con taninos suaves y redondos característicos del viñedo Angélica.', '100.00', '0.00', '0.21', '1', '2015-02-27 21:33:24', '2015-02-27 21:33:24', '0', '0');
INSERT INTO `producto` VALUES ('55', null, '36', 'Saint Felicien-Malbec (1500cc)', '2654-11', 'Saint Felicien Malbec es un vino elegante y complejo, de color violeta oscuro y profundo, típico de los malbecs argentinos. A la nariz, intenso y concentrado, presenta aromas de moras maduras con notas ligeras de vainilla, tabaco y licor. En boca, de impacto dulce y gran complejidad, es untuoso, con taninos suaves y redondos característicos del viñedo Angélica.', '290.00', '0.00', '0.21', '1', '2015-02-27 21:43:01', '2015-02-27 21:43:01', '0', '0');
INSERT INTO `producto` VALUES ('56', null, '36', 'SAINT FELICIEN -SYRAH', '270-10', 'Saint Felicien Syrah 2008, es un vino elegante y complejo, de color violeta, oscuro y profundo. A la nariz, intenso y concentrado, presenta aromas de moras maduras, ciruelas y cuero, con notas ligeras de vainilla, tabaco y licor. En boca, de impacto dulce y gran complejidad, es untuoso, con taninos suaves y redondos que le otorgan una gran armonía final. Un vino ideal para acompañar pastas y carnes rojas como el cordero, o simplemente para beberlo y disfrutarlo con frutas secas y chocolate.', '155.00', '0.00', '0.21', '1', '2015-02-27 21:48:14', '2015-02-27 21:48:14', '0', '0');
INSERT INTO `producto` VALUES ('57', null, '37', 'SAINT FELICIEN- CHARDONNAY (ELAB. EN ROBLE)', '245-13', 'Saint Felicien 2009 refleja características propias de la zona que le da origen. Con días soleados y cálidos, y noches frescas, las uvas de Chardonnay adquieren una madurez plena y bien balanceada. Su color es amarillo intenso con reflejos verdosos claros. De gran complejidad y elegancia, en nariz se presenta concentrado e intenso, con aromas de frutas tropicales maduras, peras, durazno blanco y vainilla. En boca, de impacto dulce y untuoso , muy bien balanceado por la acidez, con sabores a frutas maduras y notas ligeras de vainilla y tostado, que le brindan un excelente y prolongado final.', '155.00', '0.00', '0.21', '1', '2015-02-27 21:54:22', '2015-03-08 17:41:50', '0', '0');
INSERT INTO `producto` VALUES ('58', null, '37', 'SAINT FELICIEN- CHARDONNAY (ELAB. EN ROBLE) (De Media)', '2440-13', 'Saint Felicien 2009 refleja características propias de la zona que le da origen. Con días soleados y cálidos, y noches frescas, las uvas de Chardonnay adquieren una madurez plena y bien balanceada. Su color es amarillo intenso con reflejos verdosos claros. De gran complejidad y elegancia, en nariz se presenta concentrado e intenso, con aromas de frutas tropicales maduras, peras, durazno blanco y vainilla. En boca, de impacto dulce y untuoso , muy bien balanceado por la acidez, con sabores a frutas maduras y notas ligeras de vainilla y tostado, que le brindan un excelente y prolongado final', '110.00', '0.00', '0.21', '1', '2015-02-27 21:59:20', '2015-03-08 17:37:11', '0', '0');
INSERT INTO `producto` VALUES ('59', null, '37', 'SAINT FELICIEN SAUVIGNON BLANC', '266-13', 'Saint Felicien – Sauvignon Blanc 2010 a la vista presenta color amarillo pálido con reflejos verdosos. Intenso en nariz y de gran frescura, recuerda a flores de ruda y frutos cítricos. En boca, fresco y mineral, con acidez marcada que lo hace largo y persistente.\r\nExcelente para acompañar pescados y frutos de mar.', '155.00', '0.00', '0.21', '1', '2015-02-27 22:02:39', '2015-03-08 17:33:28', '0', '0');
INSERT INTO `producto` VALUES ('60', null, '37', 'SAINT FELICIEN-SEMILLÓN DOUX', '1800-08', 'De color amarillo intenso y destellos dorados, en nariz es complejo, con reminiscencias a miel y frutas cítricos , con suaves notas de anís y vainilla. En boca, de impacto dulce y gran permanencia, con notas almibaradas y cítricas, muy bien equilibrado por la acidez. Recomendado para tablas de quesos y postres criollos.', '205.00', '0.00', '0.21', '1', '2015-02-27 22:06:19', '2015-03-08 17:29:01', '0', '0');
INSERT INTO `producto` VALUES ('61', null, '36', 'Saint Felicien-Cabernet Franc', '2540-10', 'Saint Felicien Cabernet Franc es un vino elegante y complejo, de color rojo rubí profundo. \r\nSus aromas recuerdan a frutas rojas, como cassis y grosellas, suavemente entrelazadas con pimienta negra y clavo de olor. En boca es un vino complejo, de excelente estructura, con taninos suaves y aterciopelados.', '165.00', '0.00', '0.21', '1', '2015-02-27 22:08:39', '2015-03-08 17:47:28', '0', '0');
INSERT INTO `producto` VALUES ('62', null, '38', 'SAINT FELICIEN-NATURE (Espumante)', '267-NV', 'El vino base de este espumante natural se elaboró con uvas Chardonnay y Pinot Noir provenientes de nuestros viñedos en Tupungato. Tanto el Chardonnay como el Pinot Noir son clones seleccionados típicos para la elaboración de espumantes naturales.\r\nEl Chardonnay es muy intenso aromáticamente, elegante y de gran longitud, aportando al vino base la expresión aromática.\r\nEl Pinot Noir de racimos pequeños y de gran equilibrio ácido aporta al corte la estructura y complejidad.\r\nEl agregado del licor de Tiraje para la toma de espuma se realizó en el mes de Mayo de 2006, operación netamente artesanal destinada a lograr la refermentación en botella.\r\nDespués del período de reposo sobre lías, se realizó el golpe de puño y el removido de borras sobre pupitres durante un mes.\r\nLuego del Degüello, operación destinada a eliminar las lías y a dar la terminación, el resultado es este espléndido Espumante Natural, que presenta excelente calidad y persistencia en la burbuja. Sus aromas recuerdan a flores blancas y frutos cítricos con notas de pan fresco y levadura.\r\nEn boca resulta de gran estructura y agradable sensación cremosa, con un final fresco y muy longevo', '240.00', '0.00', '0.21', '1', '2015-02-27 22:09:08', '2015-03-08 17:25:21', '0', '0');
INSERT INTO `producto` VALUES ('63', null, '36', 'Saint Felicien-Cabernet Franc (de media)', '2541-11', 'Saint Felicien Cabernet Franc es un vino elegante y complejo, de color rojo rubí profundo. Sus aromas recuerdan a frutas rojas, como cassis y grosellas, suavemente entrelazadas con pimienta negra y clavo de olor. En boca es un vino complejo, de excelente estructura, con taninos suaves y aterciopelados.', '100.00', '0.00', '0.21', '1', '2015-02-27 22:24:15', '2015-03-08 18:46:51', '0', '0');
INSERT INTO `producto` VALUES ('64', null, '36', 'Saint Felicien-Tributo a Clorindo Testa (malbec)', '442-08', 'Saint Felicien Clorindo Testa Malbec 2008, es un vino creado en honor a dicho artista, un tributo al arte de la pintura combinado con el arte de hacer un gran vino. Es una Edición Limitada de 80 barricas de Malbec, elaborado con uvas provenientes de viñedos ubicados a diferentes alturas. Se caracteriza por su complejidad, elegancia y su largo y persistente final de boca.', '330.00', '0.00', '0.21', '1', '2015-03-03 19:14:41', '2015-03-08 17:44:57', '0', '0');
INSERT INTO `producto` VALUES ('65', null, '36', 'Saint Felicien-Tributo a Miguel Brasco (corte)', '2656-12', 'El homenaje al célebre escritor, dibujante y crítico gastronómico Miguel Brascó es un gran vino; más precisamente, un vino de corte -cabernet sauvignon, cabernet franc y merlot.', '310.00', '0.00', '0.21', '1', '2015-03-10 18:55:38', '2015-03-10 18:55:38', '0', '0');
INSERT INTO `producto` VALUES ('66', null, '36', 'Saint Felicien-Cabernet Sauvignon (estuche)', '268-10', 'Saint Felicien Cabernet Sauvignon es un vino elegante y complejo, de color rojo rubí profundo. Se perciben en este vino aromas a frutas rojas, como cerezas y ciruelas maduras, junto a fragancias especiadas, tal como pimienta negra, y notas suaves de eucaliptus. En la boca resulta un vino complejo, de buen cuerpo y estructura, taninos suaves, maduros y excelente longitud e intensidad. En el final de boca aparecen delicados sabores tostados y a vainilla', '230.00', '0.00', '0.21', '1', '2015-03-10 19:25:22', '2015-03-10 19:25:22', '0', '0');
INSERT INTO `producto` VALUES ('67', null, '36', 'Saint Felicien-Cabernet Franc (estuche)', '2542-10', 'Saint Felicien Cabernet Franc es un vino elegante y complejo, de color rojo rubí profundo. \r\nSus aromas recuerdan a frutas rojas, como cassis y grosellas, suavemente entrelazadas con pimienta negra y clavo de olor. En boca es un vino complejo, de excelente estructura, con taninos suaves y aterciopelados.', '245.00', '0.00', '0.21', '1', '2015-03-10 19:48:14', '2015-03-10 19:48:14', '0', '0');
INSERT INTO `producto` VALUES ('68', null, '36', 'Saint Felicien-Cabernet Sauvignon (estuche x2)', '1801-11', 'Saint Felicien Cabernet Sauvignon es un vino elegante y complejo, de color rojo rubí profundo. Se perciben en este vino aromas a frutas rojas, como cerezas y ciruelas maduras, junto a fragancias especiadas, tal como pimienta negra, y notas suaves de eucaliptus. En la boca resulta un vino complejo, de buen cuerpo y estructura, taninos suaves, maduros y excelente longitud e intensidad. En el final de boca aparecen delicados sabores tostados y a vainilla', '445.00', '0.00', '0.21', '1', '2015-03-12 11:54:07', '2015-03-12 11:54:07', '0', '0');
INSERT INTO `producto` VALUES ('69', null, '36', 'Saint Felicien-Cabernet Merlot (estuche)', '1802-10', 'Saint Felicien Cabernet-Merlot, es un vino elegante y complejo, de color rojo rubí intenso. A la nariz, presenta aromas de especias y frutos negros maduros como el cassis con notas de menta y eucaliptus aportadas por el Cabernet, combinadas con fragancias de mermeladas y frutos confitados aportados por el Merlot. El roble hace su aporte con notas ligeras de vainilla y tabaco. En boca, de impacto dulce y gran complejidad, es untuoso, de buen cuerpo, con taninos suaves y redondos, de final largo y persistente.', '230.00', '0.00', '0.21', '1', '2015-03-12 12:09:39', '2015-03-12 12:09:39', '0', '0');
INSERT INTO `producto` VALUES ('70', null, '36', 'Saint Felicien-Malbec (estuche)', '269-11', 'Saint Felicien Malbec es un vino elegante y complejo, de color violeta oscuro y profundo, típico de los malbecs argentinos. A la nariz, intenso y concentrado, presenta aromas de moras maduras con notas ligeras de vainilla, tabaco y licor. En boca, de impacto dulce y gran complejidad, es untuoso, con taninos suaves y redondos característicos del viñedo Angélica.', '245.00', '0.00', '0.21', '1', '2015-03-12 12:35:47', '2015-03-12 12:35:47', '0', '0');
INSERT INTO `producto` VALUES ('71', null, '36', 'Saint Felicien-Malbec (estuche x2)', '1803-11', 'Saint Felicien Malbec es un vino elegante y complejo, de color violeta oscuro y profundo, típico de los malbecs argentinos. A la nariz, intenso y concentrado, presenta aromas de moras maduras con notas ligeras de vainilla, tabaco y licor. En boca, de impacto dulce y gran complejidad, es untuoso, con taninos suaves y redondos característicos del viñedo Angélica.', '480.00', '0.00', '0.21', '1', '2015-03-12 12:50:49', '2015-03-12 12:50:49', '0', '0');
INSERT INTO `producto` VALUES ('72', null, '36', 'Saint Felicien-Tributo a Clorindo Testa (malbec) (estuche)', '441-08', 'Saint Felicien Clorindo Testa Malbec 2008, es un vino creado en honor a dicho artista, un tributo al arte de la pintura combinado con el arte de hacer un gran vino. Es una Edición Limitada de 80 barricas de Malbec, elaborado con uvas provenientes de viñedos ubicados a diferentes alturas. Se caracteriza por su complejidad, elegancia y su largo y persistente final de boca.', '415.00', '0.00', '0.21', '1', '2015-03-12 19:33:46', '2015-03-12 19:33:46', '0', '0');
INSERT INTO `producto` VALUES ('73', null, '38', 'Saint Felicien-Nature (estuche x2)', '239-NV', 'El vino base de este espumante natural se elaboró con uvas Chardonnay y Pinot Noir provenientes de nuestros viñedos en Tupungato. Tanto el Chardonnay como el Pinot Noir son clones seleccionados típicos para la elaboración de espumantes naturales. El Chardonnay es muy intenso aromáticamente, elegante y de gran longitud, aportando al vino base la expresión aromática. El Pinot Noir de racimos pequeños y de gran equilibrio ácido aporta al corte la estructura y complejidad.  Sus aromas recuerdan a flores blancas y frutos cítricos con notas de pan fresco y levadura. En boca resulta de gran estructura y agradable sensación cremosa, con un final fresco y muy longevo.', '545.00', '0.00', '0.21', '1', '2015-03-12 19:43:15', '2015-03-12 19:43:15', '0', '0');
INSERT INTO `producto` VALUES ('74', null, '38', 'Saint Felicien-Nature (estuche)', '267-NV-EST', 'El vino base de este espumante natural se elaboró con uvas Chardonnay y Pinot Noir provenientes de nuestros viñedos en Tupungato. Tanto el Chardonnay como el Pinot Noir son clones seleccionados típicos para la elaboración de espumantes naturales. El Chardonnay es muy intenso aromáticamente, elegante y de gran longitud, aportando al vino base la expresión aromática. El Pinot Noir de racimos pequeños y de gran equilibrio ácido aporta al corte la estructura y complejidad.  Sus aromas recuerdan a flores blancas y frutos cítricos con notas de pan fresco y levadura. En boca resulta de gran estructura y agradable sensación cremosa, con un final fresco y muy longevo.', '295.00', '0.00', '0.21', '1', '2015-03-12 19:46:23', '2015-03-12 19:46:23', '0', '0');
INSERT INTO `producto` VALUES ('75', null, '38', 'prueba', '13', 'prueba', '13.00', '0.00', '0.21', '0', '2015-03-20 23:58:59', '2015-03-21 00:12:49', '0', '0');
INSERT INTO `producto` VALUES ('76', null, '37', 'prueba1', '14', 'prueba1', '13.00', '0.00', '0.12', '1', '2015-03-21 00:05:02', '2015-03-21 00:05:02', '0', '0');
INSERT INTO `producto` VALUES ('77', null, '36', 'Salentein Gran VU Blend', '7798074866129', 'De un intenso color rojo bordo, profundo. La nariz es delicada, de una expresión aromática intensa y compleja con aromas que recuerdan a frutos negros, regaliz y mentolados. En boca es redondo, presenta taninos maduros y estructurados. De muy buen volumen con final largo y persistente.', '1.10', '0.00', '0.21', '1', '2015-04-01 04:01:05', '2015-04-01 04:01:05', '0', '0');
INSERT INTO `producto` VALUES ('78', null, '36', 'Grand Callia', '7798108836012', 'Grand Callia es un vino de corte de partida limitada que expresa lo mejor de los vinos de San Juan, su identidad como terruño. Se trata de un blend obtenido con uvas de las parcelas más cuidadas de distintos valles sanjuaninos.\r\nPresenta aromas especiados, y equilibrados ,con sutiles notas de vainilla y coco, logrados a partir de su paso por barricas. En boca se presenta untuoso, con taninos dulces, amables y redondos, es un vino largo y concentrado, con una adecuada estructura para la guarda.', '275.00', '0.00', '0.21', '1', '2015-04-01 04:04:05', '2015-04-01 04:04:05', '0', '0');
INSERT INTO `producto` VALUES ('79', null, '36', 'Salentein Primus Malbec', '7798074860141', 'El color en esta cosecha marca un punto de inflexión por la altísima intensidad lograda. Su matiz negro y violeta, y acompañado por el vivo brillo, entregan un vino altamente atractivo. Con aromas intensos de frutos rojos y negros, complejos; este año con buena participación de especiados como el clavo de olor y apenas pimienta. En la boca presenta una entrada amplia, con taninos firmes, presentes que le dan la gran estructura para una larga guarda. La acidez está equilibrada con la dulzura del alcohol; frescura con prolongado final', '570.00', '0.00', '0.21', '1', '2015-04-01 04:08:09', '2015-04-01 04:08:09', '0', '0');
INSERT INTO `producto` VALUES ('80', null, '36', 'Grand Callia (Estuche)', '7798108830072', 'Grand Callia es un vino de corte de partida limitada que expresa lo mejor de los vinos de San Juan, su identidad como terruño. Se trata de un blend obtenido con uvas de las parcelas más cuidadas de distintos valles sanjuaninos. Presenta aromas especiados, y equilibrados ,con sutiles notas de vainilla y coco, logrados a partir de su paso por barricas. En boca se presenta untuoso, con taninos dulces, amables y redondos, es un vino largo y concentrado, con una adecuada estructura para la guarda.', '275.00', '0.00', '0.21', '1', '2015-04-01 04:09:26', '2015-04-01 04:09:26', '0', '0');
INSERT INTO `producto` VALUES ('81', null, '36', 'Salentein Primus Pinot Noir', '7798074860110', 'Vino de color rojo de intensidad media, brillante y de delicada fragancia, notas frescas de rosas, hojas secas y especiado, todo sostenido por una crujiente cereza madura y dulce. Untuoso, de acidez media y suficiente para el delicado balance del alcohol y la frescura. De entrada muy dulce y complejo; el pinot de mas carácter en los últimos años; estructura media a alta, taninos que se perciben maduros y amables; es ágil en boca con largo final.', '570.00', '0.00', '0.21', '1', '2015-04-01 04:13:35', '2015-04-01 04:13:35', '0', '0');
INSERT INTO `producto` VALUES ('82', null, '36', 'Callia Magna Malbec', '7798108830157', 'A la vista se presenta de color rojo muy intenso, profundo y vivaz con destellos violáceos brillantes. En nariz encontramos marcados aromas frutales en los que predominan sensaciones de cerezas y frambuesas con algún recuerdo de violetas que le da una gran distinción, todo esto se integra con sutiles notas de vainilla y chocolate, propias de la madera.En boca aparece una gran persistencia, los taninos son dulces y agradables, dejando luego de su paso una sensación de frescura que invita a beber nuevamente', '73.00', '0.00', '0.21', '1', '2015-04-01 04:21:31', '2015-04-01 04:21:31', '0', '0');
INSERT INTO `producto` VALUES ('83', null, '36', 'Salentein Primus Merlot', '7798074860134', 'Varietal de gran expresión e impactante potencial aromático. Vino de gran concentración, de taninos dulces y maduros que lo muestran muy estructurado; y definen su carácter típico y varietal de una manera única en la región. Se muestra complejo, con gran cuerpo, de prolongado y dulce final. Luego de criado 20 meses en barricas de roble francés de primer uso y 12 meses de guarda en botella el vino ha logrado un complejo y prolongado “bouquet” sobresaliendo las frutas negras muy maduras llegando a mermelada o jalea pero ya con una sutil mezcla de tabaco y especias. El maridaje de comidas elaboradas, condimentadas, quesos estacionados y buenas carnes rojas o de caza son buenos ejemplos de combinación', '570.00', '0.00', '0.21', '1', '2015-04-01 04:22:07', '2015-04-01 04:22:07', '0', '0');
INSERT INTO `producto` VALUES ('84', null, '36', 'Salentein Primus Pinot Noir Estuche', '7798074869731', 'Vino de color rojo de intensidad media, brillante y de delicada fragancia, notas frescas de rosas, hojas secas y especiado, todo sostenido por una crujiente cereza madura y dulce. Untuoso, de acidez media y suficiente para el delicado balance del alcohol y la frescura. De entrada muy dulce y complejo; el pinot de mas carácter en los últimos años; estructura media a alta, taninos que se perciben maduros y amables; es ágil en boca con largo final', '570.00', '0.00', '0.21', '1', '2015-04-01 12:06:27', '2015-04-01 12:06:27', '0', '0');
INSERT INTO `producto` VALUES ('85', null, '36', 'Salentein Primus Malbec Estuche', '7798074869694', 'El color en esta cosecha marca un punto de inflexión por la altísima intensidad lograda. Su matiz negro y violeta, y acompañado por el vivo brillo, entregan un vino altamente atractivo. Con aromas intensos de frutos rojos y negros, complejos; este año con buena participación de especiados como el clavo de olor y apenas pimienta. En la boca presenta una entrada amplia, con taninos firmes, presentes que le dan la gran estructura para una larga guarda. La acidez está equilibrada con la dulzura del alcohol; frescura con prolongado final.\r\nVino sin ningún tipo de clarificación, estabilización; puesto en botella sin filtrar por lo que puede mostrar algún depósito prueba de su poco despojo y natural elaboración.', '570.00', '0.00', '0.21', '1', '2015-04-01 12:10:49', '2015-04-01 12:10:49', '0', '0');
INSERT INTO `producto` VALUES ('86', null, '36', 'Callia Magna Syrah', '7798108830140', 'A la vista se presenta de color rojo profundo, con tonalidades violetas y negruzcas, muy intenso. \r\nPresenta aromas que recuerdan especias, con notas de regaliz, vainilla y coco. \r\nEn boca se presenta untuoso, con taninos amables y redondos, de larga caudalía y fuerte presencia de especias aportadas por la madera y frutos como ciruelas e higos aportados por la uva. Es un vino con una adecuada estructura para la guarda.', '73.00', '0.00', '0.21', '1', '2015-04-01 12:20:14', '2015-04-01 12:20:14', '0', '0');
INSERT INTO `producto` VALUES ('87', null, '36', 'Salentein Primus Merlot Estuche', '7798074869717', 'Varietal de gran expresión e impactante potencial aromático. Vino de gran concentración, de taninos dulces y maduros que lo muestran muy estructurado; y definen su carácter típico y varietal de una manera única en la región. Se muestra complejo, con gran cuerpo, de prolongado y dulce final. Luego de criado 20 meses en barricas de roble francés de primer uso y 12 meses de guarda en botella el vino ha logrado un complejo y prolongado “bouquet” sobresaliendo las frutas negras muy maduras llegando a mermelada o jalea pero ya con una sutil mezcla de tabaco y especias', '570.00', '0.00', '0.21', '1', '2015-04-01 12:25:58', '2015-04-01 12:25:58', '0', '0');
INSERT INTO `producto` VALUES ('88', null, '36', 'Callia Magna Cabernet Sauvignon', '7798108836067', 'A la vista se presenta de color intenso predominando el matiz rojo, manifestando una muy buena concentración.En nariz presenta una gran tipicidad, donde se pueden percibir aromas especiados. En boca se repiten sensaciones especiadas, es dulce, profundo y complejo.', '73.00', '0.00', '0.21', '1', '2015-04-01 12:48:28', '2015-04-01 12:48:28', '0', '0');
INSERT INTO `producto` VALUES ('89', null, '36', 'Callia Magna Syrah (Estuche)', '7798108830027', 'A la vista se presenta de color rojo profundo, con tonalidades violetas y negruzcas, muy intenso. Presenta aromas que recuerdan especias, con notas de regaliz, vainilla y coco. En boca se presenta untuoso, con taninos amables y redondos, de larga caudalía y fuerte presencia de especias aportadas por la madera y frutos como ciruelas e higos aportados por la uva. Es un vino con una adecuada estructura para la guarda.', '80.00', '0.00', '0.21', '1', '2015-04-01 12:56:00', '2015-04-01 12:56:00', '0', '0');
INSERT INTO `producto` VALUES ('90', null, '36', 'Salentein Single Vineyard Malbec', '7798074862343', 'Se destaca por su intensidad y complejidad de sus aromas a bayas negras con notas orales típicos del Malbec cultivado en altura, su amplitud y concentración en boca, la sedosidad de sus taninos, la acidez natural y el prolongado -nal que lo hacen un vino único como el terruño que le dio origen.', '440.00', '0.00', '0.21', '1', '2015-04-01 13:08:15', '2015-04-01 13:08:15', '0', '0');
INSERT INTO `producto` VALUES ('91', null, '36', 'Salentein Single Vineyard Pinot Noir', '7798074862336', 'Se destaca por la intensidad y complejidad de sus aromas, amplitud, delicadeza en boca y acidez natural, y por su prolongado y refrescante nal que lo hacen un vino único como el terruño que le dio origen', '440.00', '0.00', '0.21', '1', '2015-04-01 13:19:07', '2015-04-01 13:19:07', '0', '0');
INSERT INTO `producto` VALUES ('92', null, '36', 'Callia Blend Cabernet Sauvignon', '7798108836876', 'De color rojo profundo con reflejos violáceos.En este vino se mezclan distintas sensaciones aportadas por uvas provenientes de distintos valles, toda la expresión frutal del valle de Zonda, con las sensaciones más complejas y especiadas del Valle de Tulum. En boca se presenta largo y persistente, con taninos muy dulces y maduros de gran calidad, perfectamente complementados por la madera.', '54.00', '0.00', '0.21', '1', '2015-04-01 13:21:10', '2015-04-01 13:21:10', '0', '0');
INSERT INTO `producto` VALUES ('93', null, '36', 'Salentein Numina', '7798074869656', 'Su color es rojo violáceo, vivo, intenso y profundo.\r\nSu aroma es complejo y elegante, revelando notas a tabaco, casis, arándanos, especias y notas a vainilla y dulce de leche.\r\nEn la boca es amplio, intenso, de buen cuerpo y estructura tánica, con un final largo y persistente', '340.00', '0.00', '0.21', '1', '2015-04-01 13:38:45', '2015-04-01 13:38:45', '0', '0');
INSERT INTO `producto` VALUES ('94', '1', '39', 'aaaa', '111', '2222', '15.00', '0.00', '0.10', '1', '2015-05-05 15:39:14', '2015-05-05 15:39:14', '0', '15');
INSERT INTO `producto` VALUES ('95', '1', '39', 'aaaa', '1', 'fdfdf', '12.00', '0.00', '0.10', '1', '2015-05-05 16:19:23', '2015-05-05 16:19:23', '0', '100');
INSERT INTO `producto` VALUES ('96', '1', '39', 'aaaa1', '1', 'fdfdf', '12.00', '0.00', '0.10', '1', '2015-05-05 16:30:32', '2015-05-05 17:00:27', '0', '100');
INSERT INTO `producto` VALUES ('97', '1', '39', 'sdfsdf', '234234', 'sdfsdf', '168.00', '0.00', '0.10', '1', '2015-05-05 17:18:28', '2015-05-05 17:18:28', '0', '0');
INSERT INTO `producto` VALUES ('98', '1', '39', 'cxvvzcxz', '142', 'zcvzvx', '168.00', '0.00', '0.21', '1', '2015-05-05 17:19:07', '2015-05-05 17:19:07', '0', '1');
INSERT INTO `producto` VALUES ('99', '1', '39', 'aaaa', '1324', 'wwww', '12.00', '0.00', '0.21', '1', '2015-05-05 17:26:47', '2015-05-05 17:26:47', '0', '11');
INSERT INTO `producto` VALUES ('100', '1', '39', 'ugttu', 'ughugh', 'tuyu', '12.00', '0.00', '0.21', '1', '2015-05-05 17:36:36', '2015-05-05 17:36:36', '0', '0');
INSERT INTO `producto` VALUES ('101', '1', '39', 'ugttu1', 'ughugh', 'tuyu', '12.00', '0.00', '0.21', '1', '2015-05-05 21:11:35', '2015-05-05 21:11:35', '0', '0');
INSERT INTO `producto` VALUES ('102', '1', '39', 'ugttu1', '4578', '8888', '13.00', '0.00', '0.10', '1', '2015-05-05 22:02:24', '2015-05-05 22:02:24', '0', '9');
INSERT INTO `producto` VALUES ('103', '1', '39', 'ugttu333', '456987', 'sdssd', '12.00', '0.00', '0.21', '1', '2015-05-06 05:37:04', '2015-05-06 05:37:04', '0', '0');
INSERT INTO `producto` VALUES ('104', '1', '39', 'asasas1', '78963', 'sdsdsd', '168.00', '0.00', '0.21', '1', '2015-05-06 05:40:16', '2015-05-06 05:40:16', '0', '0');
INSERT INTO `producto` VALUES ('105', '1', '39', 'aaaa11', '654', 'uuiyuiu', '168.00', '0.00', '0.21', '1', '2015-05-06 12:25:42', '2015-05-06 18:57:48', '0', '12');
INSERT INTO `producto` VALUES ('106', '1', '39', 'ugttu1', '142', 'eerwer', '12.00', '0.00', '0.10', '1', '2015-05-06 19:03:31', '2015-05-06 19:03:31', '0', '15');
INSERT INTO `producto` VALUES ('107', '1', '39', 'gfdgdsf', '5425345', 'fdgsdfg', '168.00', '0.00', '0.10', '1', '2015-05-06 19:05:32', '2015-05-06 19:05:32', '0', '0');
INSERT INTO `producto` VALUES ('108', '1', '37', 'ugttu1', '131', 'fxfsdf', '111.00', '0.00', '0.21', '1', '2015-05-06 19:16:43', '2015-05-06 19:16:43', '0', '0');
INSERT INTO `producto` VALUES ('109', '1', '39', 'fsdfsd', 'fsdfs', 'sdfsdf', '12.00', '0.00', '0.21', '1', '2015-05-06 19:19:33', '2015-05-06 19:19:33', '0', '0');
INSERT INTO `producto` VALUES ('110', '1', '39', 'asasas11', '1311', 'ssss', '12.00', '0.00', '0.10', '1', '2015-05-06 19:26:00', '2015-05-08 14:41:26', '0', '0');
INSERT INTO `producto` VALUES ('111', null, '39', 'ugttu11', '1212', 'sadsad', '168.00', '0.00', '0.21', '1', '2015-05-23 04:21:18', '2015-05-23 04:21:18', '0', '45');
INSERT INTO `producto` VALUES ('112', null, '39', 'ugttu17', '78', 'kjhkjhh', '32.00', '0.00', '0.21', '1', '2015-05-23 04:23:49', '2015-05-23 04:23:49', '0', '45');

-- ----------------------------
-- Table structure for `producto_bonificacion`
-- ----------------------------
DROP TABLE IF EXISTS `producto_bonificacion`;
CREATE TABLE `producto_bonificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `unidad` int(11) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6C7C7FA34584665A` (`product_id`),
  CONSTRAINT `FK_6C7C7FA34584665A` FOREIGN KEY (`product_id`) REFERENCES `producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of producto_bonificacion
-- ----------------------------

-- ----------------------------
-- Table structure for `producto_extension`
-- ----------------------------
DROP TABLE IF EXISTS `producto_extension`;
CREATE TABLE `producto_extension` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) DEFAULT NULL,
  `valor` longtext COLLATE utf8_unicode_ci,
  `metadatoProducto_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6926885D7645698E` (`producto_id`),
  KEY `IDX_6926885D674E6370` (`metadatoProducto_id`),
  CONSTRAINT `FK_6926885D674E6370` FOREIGN KEY (`metadatoProducto_id`) REFERENCES `metadato_producto` (`id`),
  CONSTRAINT `FK_6926885D7645698E` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=558 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of producto_extension
-- ----------------------------
INSERT INTO `producto_extension` VALUES ('8', '2', 'MAlbec', '61');
INSERT INTO `producto_extension` VALUES ('9', '2', '2006', '62');
INSERT INTO `producto_extension` VALUES ('10', '2', 'CATENA ZAPATA', '63');
INSERT INTO `producto_extension` VALUES ('11', '2', '750 cm3', '64');
INSERT INTO `producto_extension` VALUES ('12', '2', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('13', '2', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('14', '2', null, '67');
INSERT INTO `producto_extension` VALUES ('15', '2', '18 meses en Roble Francés 50% Nuevo', '68');
INSERT INTO `producto_extension` VALUES ('16', '3', 'Cabernet 50% - Malbec 50%', '61');
INSERT INTO `producto_extension` VALUES ('17', '3', '2008', '62');
INSERT INTO `producto_extension` VALUES ('18', '3', '16 meses en 90% Roble francés (30% nuevo), y 10% roble americano nuevo', '68');
INSERT INTO `producto_extension` VALUES ('19', '3', 'CATENA ZAPATA', '63');
INSERT INTO `producto_extension` VALUES ('20', '3', '750 cm3', '64');
INSERT INTO `producto_extension` VALUES ('21', '3', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('22', '3', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('23', '3', null, '67');
INSERT INTO `producto_extension` VALUES ('24', '4', 'Syrah 50% - Syrah 50%', '61');
INSERT INTO `producto_extension` VALUES ('25', '4', '2006', '62');
INSERT INTO `producto_extension` VALUES ('26', '4', '16 meses en 85% roble francés (30% nuevo), y 15% roble americano nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('27', '4', 'CATENA ZAPATA', '63');
INSERT INTO `producto_extension` VALUES ('28', '4', '750 cm3', '64');
INSERT INTO `producto_extension` VALUES ('29', '4', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('30', '4', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('31', '4', null, '67');
INSERT INTO `producto_extension` VALUES ('32', '7', 'Cabernet Franc  Malbec y Petit Verdot', '61');
INSERT INTO `producto_extension` VALUES ('33', '7', '2008', '62');
INSERT INTO `producto_extension` VALUES ('34', '7', '24 meses en barricas de roble frances de primer uso.-', '68');
INSERT INTO `producto_extension` VALUES ('35', '7', 'CATENA ZAPATA', '63');
INSERT INTO `producto_extension` VALUES ('36', '7', '750 cm3', '64');
INSERT INTO `producto_extension` VALUES ('37', '7', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('38', '7', 'Valle del Uco', '66');
INSERT INTO `producto_extension` VALUES ('39', '7', null, '67');
INSERT INTO `producto_extension` VALUES ('40', '8', 'Cabernet Franc', '61');
INSERT INTO `producto_extension` VALUES ('41', '8', '2012', '62');
INSERT INTO `producto_extension` VALUES ('42', '8', '8 meses en Roble Frances.-                     ..', '68');
INSERT INTO `producto_extension` VALUES ('43', '8', 'ERNESTO ZAPATA', '63');
INSERT INTO `producto_extension` VALUES ('44', '8', '750 cm3', '64');
INSERT INTO `producto_extension` VALUES ('45', '8', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('46', '8', 'San Rafael', '66');
INSERT INTO `producto_extension` VALUES ('47', '8', null, '67');
INSERT INTO `producto_extension` VALUES ('48', '9', 'Cabernet Sauvignon', '61');
INSERT INTO `producto_extension` VALUES ('49', '9', '2011', '62');
INSERT INTO `producto_extension` VALUES ('50', '9', '16 meses en 90% roble francés (30% nuevo) y 10% roble americano nuevo', '68');
INSERT INTO `producto_extension` VALUES ('51', '9', 'SAINT FELICIEN', '63');
INSERT INTO `producto_extension` VALUES ('52', '9', '750cc', '64');
INSERT INTO `producto_extension` VALUES ('53', '9', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('54', '9', 'Valle del Uco', '66');
INSERT INTO `producto_extension` VALUES ('55', '9', null, '67');
INSERT INTO `producto_extension` VALUES ('64', '11', '100% Syrah de Agrelo y Vistaflores.', '61');
INSERT INTO `producto_extension` VALUES ('65', '11', '2010.', '62');
INSERT INTO `producto_extension` VALUES ('66', '11', '12 meses 85% en roble francés y 15% en roble americano.', '68');
INSERT INTO `producto_extension` VALUES ('67', '11', 'DV Catena.', '63');
INSERT INTO `producto_extension` VALUES ('68', '11', '13,5.', '64');
INSERT INTO `producto_extension` VALUES ('69', '11', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('70', '11', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('71', '11', null, '67');
INSERT INTO `producto_extension` VALUES ('72', '13', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('73', '13', '2008', '62');
INSERT INTO `producto_extension` VALUES ('74', '13', '18 meses en Roble Francés, 50% Nuevo', '68');
INSERT INTO `producto_extension` VALUES ('75', '13', 'angelica zapata', '63');
INSERT INTO `producto_extension` VALUES ('76', '13', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('77', '13', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('78', '13', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('79', '13', null, '67');
INSERT INTO `producto_extension` VALUES ('80', '14', '100% Cabernet Sauvignon', '61');
INSERT INTO `producto_extension` VALUES ('81', '14', '2007', '62');
INSERT INTO `producto_extension` VALUES ('82', '14', '18 meses en 85% Roble Francés , 30% nuevo y 15 % Roble Americano nuevo', '68');
INSERT INTO `producto_extension` VALUES ('83', '14', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('84', '14', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('85', '14', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('86', '14', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('87', '14', null, '67');
INSERT INTO `producto_extension` VALUES ('102', '17', '100% Merlot', '61');
INSERT INTO `producto_extension` VALUES ('103', '17', 'La Pirámide, 2 de marzo 2007 Altamira, 25 de marzo de 2007 Adrianna, 9 de abril de 2007', '62');
INSERT INTO `producto_extension` VALUES ('104', '17', '16 meses en roble Francés, 40 % nuevo. Con 3 trasiegos', '68');
INSERT INTO `producto_extension` VALUES ('105', '17', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('106', '17', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('107', '17', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('108', '17', 'La Pirámide, Agrrelo, Luján de Cuyo 950 msnm Altamira, San Carlos, 1095 msnm Adrianna, Gualtallary, Tupungato, 1450 msnm', '66');
INSERT INTO `producto_extension` VALUES ('109', '17', null, '67');
INSERT INTO `producto_extension` VALUES ('110', '18', '100% Cabernet Franc', '61');
INSERT INTO `producto_extension` VALUES ('111', '18', 'Manual, en Agrelo, entre el 25 y el 28 de Marzo, en Nicasia, entre el 10 y el 17 de Abril', '62');
INSERT INTO `producto_extension` VALUES ('112', '18', '18 meses en Roble Francés 100% - 50 % nuevo', '68');
INSERT INTO `producto_extension` VALUES ('113', '18', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('114', '18', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('115', '18', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('116', '18', 'Mendoza. Nicasia, altitud 1095 msnm La Pirámide, altitud 950 msnm', '66');
INSERT INTO `producto_extension` VALUES ('117', '18', null, '67');
INSERT INTO `producto_extension` VALUES ('118', '20', '100% Cabernet Franc', '61');
INSERT INTO `producto_extension` VALUES ('119', '20', '2010.', '62');
INSERT INTO `producto_extension` VALUES ('120', '20', '22 meses en barricas de roble frances', '68');
INSERT INTO `producto_extension` VALUES ('121', '20', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('122', '20', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('123', '20', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('124', '20', 'Viñedo Adrianna, Gualtallary, Tupungato, Mendoza (1470 m.s.n.m.)', '66');
INSERT INTO `producto_extension` VALUES ('125', '20', null, '67');
INSERT INTO `producto_extension` VALUES ('126', '21', '60 % Malbec y 40 % Cabernet Sauvignon', '61');
INSERT INTO `producto_extension` VALUES ('127', '21', '2008', '62');
INSERT INTO `producto_extension` VALUES ('128', '21', '10 meses en barricas de roble francés de primer y segundo uso.', '68');
INSERT INTO `producto_extension` VALUES ('129', '21', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('130', '21', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('131', '21', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('132', '21', 'Agrelo, Gualtallary, Tupungato y Las Compuertas, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('133', '21', null, '67');
INSERT INTO `producto_extension` VALUES ('134', '22', '100% Cabernet Sauvignon', '61');
INSERT INTO `producto_extension` VALUES ('135', '22', '2006', '62');
INSERT INTO `producto_extension` VALUES ('136', '22', '18 meses en Roble francés 80 % nuevo', '68');
INSERT INTO `producto_extension` VALUES ('137', '22', 'DV Catena.', '63');
INSERT INTO `producto_extension` VALUES ('138', '22', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('139', '22', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('140', '22', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('141', '22', null, '67');
INSERT INTO `producto_extension` VALUES ('142', '23', '80% Cabernet Franc, 10% Malbec, 10% Petit Verdot', '61');
INSERT INTO `producto_extension` VALUES ('143', '23', '2009', '62');
INSERT INTO `producto_extension` VALUES ('144', '23', 'crianza para este ejemplar se extendió a lo largo de 18 meses, en barricas de roble francés y americano (35% nuevas).', '68');
INSERT INTO `producto_extension` VALUES ('145', '23', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('146', '23', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('147', '23', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('148', '23', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('149', '23', null, '67');
INSERT INTO `producto_extension` VALUES ('150', '24', '85% Cabernet Franc, 15% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('151', '24', '2010', '62');
INSERT INTO `producto_extension` VALUES ('152', '24', '7 meses en foudres.', '68');
INSERT INTO `producto_extension` VALUES ('153', '24', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('154', '24', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('155', '24', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('156', '24', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('157', '24', null, '67');
INSERT INTO `producto_extension` VALUES ('158', '25', '90% Bonarda, 10% Cabernet Franc', '61');
INSERT INTO `producto_extension` VALUES ('159', '25', '2009', '62');
INSERT INTO `producto_extension` VALUES ('160', '25', '14 meses en barricas de roble frances, 50% nuevas', '68');
INSERT INTO `producto_extension` VALUES ('161', '25', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('162', '25', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('163', '25', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('164', '25', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('165', '25', 'Pastas y quesos.', '67');
INSERT INTO `producto_extension` VALUES ('166', '26', '89% Malbec | 11% Petit Verdot', '61');
INSERT INTO `producto_extension` VALUES ('167', '26', '2008', '62');
INSERT INTO `producto_extension` VALUES ('168', '26', '14 meses de crianza en barricas de roble francés', '68');
INSERT INTO `producto_extension` VALUES ('169', '26', 'Aleanna', '63');
INSERT INTO `producto_extension` VALUES ('170', '26', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('171', '26', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('172', '26', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('173', '26', ',', '67');
INSERT INTO `producto_extension` VALUES ('174', '28', 'Cabernet Franc 100%', '61');
INSERT INTO `producto_extension` VALUES ('175', '28', '2010', '62');
INSERT INTO `producto_extension` VALUES ('176', '28', 'Crianza de 14 meses de barrica', '68');
INSERT INTO `producto_extension` VALUES ('177', '28', 'Aleanna', '63');
INSERT INTO `producto_extension` VALUES ('178', '28', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('179', '28', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('180', '28', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('181', '28', ',', '67');
INSERT INTO `producto_extension` VALUES ('190', '30', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('191', '30', '2013', '62');
INSERT INTO `producto_extension` VALUES ('192', '30', 'De 6 a 9 meses, en barricas de roble francés y americano', '68');
INSERT INTO `producto_extension` VALUES ('193', '30', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('194', '30', '13,5', '64');
INSERT INTO `producto_extension` VALUES ('195', '30', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('196', '30', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('197', '30', 'Álamos Malbec es ideal para acompañar pastas bañadas con salsas intensas a moderadas, empanadas criollas, picadas abundantes, tablas de quesos y diferentes variedades de carnes.', '67');
INSERT INTO `producto_extension` VALUES ('198', '31', '100% Cabernet Sauvignon', '61');
INSERT INTO `producto_extension` VALUES ('199', '31', '2013', '62');
INSERT INTO `producto_extension` VALUES ('200', '31', 'Recibió un leve proceso de añejamiento, de 5 a 7 meses, en barricas de roble francés y americano', '68');
INSERT INTO `producto_extension` VALUES ('201', '31', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('202', '31', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('203', '31', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('204', '31', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('205', '31', 'Álamos Cabernet Sauvignon 2013 es ideal para acompañar pastas bañadas con salsas intensas a moderadas, empanadas criollas, picadas abundantes, tablas de quesos y diferentes variedades de carnes. Temperatura de Servicio: 16°C - 18°C.', '67');
INSERT INTO `producto_extension` VALUES ('206', '32', '100% Pinot Noir', '61');
INSERT INTO `producto_extension` VALUES ('207', '32', '2013', '62');
INSERT INTO `producto_extension` VALUES ('208', '32', 'Cuenta con unos 8 meses de crianza en roble francés', '68');
INSERT INTO `producto_extension` VALUES ('209', '32', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('210', '32', '750', '64');
INSERT INTO `producto_extension` VALUES ('211', '32', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('212', '32', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('213', '32', 'Álamos Pinot Noir 2013 es ideal para acompañar pastas bañadas con salsas moderadas, carnes no muy condimentadas, pescados con salsas y tablas de quesos blandos', '67');
INSERT INTO `producto_extension` VALUES ('214', '33', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('215', '33', '2013', '62');
INSERT INTO `producto_extension` VALUES ('216', '33', 'Recibió un leve proceso de añejamiento, de 6 a 9 meses, en barricas de roble francés y americano', '68');
INSERT INTO `producto_extension` VALUES ('217', '33', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('218', '33', '375cc', '64');
INSERT INTO `producto_extension` VALUES ('219', '33', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('220', '33', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('221', '33', 'Álamos Malbec es ideal para acompañar pastas bañadas con salsas intensas a moderadas, empanadas criollas, picadas abundantes, tablas de quesos y diferentes variedades de carnes. Temperatura de Servicio: 16°C - 18°C.', '67');
INSERT INTO `producto_extension` VALUES ('222', '35', '100% Malbec.', '61');
INSERT INTO `producto_extension` VALUES ('223', '35', '2010', '62');
INSERT INTO `producto_extension` VALUES ('224', '35', 'Sin roble, para conservar intacto todo su potencial aromático', '68');
INSERT INTO `producto_extension` VALUES ('225', '35', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('226', '35', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('227', '35', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('228', '35', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('229', '35', 'Un vino de carácter sensual y elegante que bien puede acompañar frutos de mar, quesos y ensaladas de hoja verdes.', '67');
INSERT INTO `producto_extension` VALUES ('238', '37', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('239', '37', '2010', '62');
INSERT INTO `producto_extension` VALUES ('240', '37', 'Sin roble, para conservar intacto todo su potencial aromático', '68');
INSERT INTO `producto_extension` VALUES ('241', '37', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('242', '37', '375cc.', '64');
INSERT INTO `producto_extension` VALUES ('243', '37', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('244', '37', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('245', '37', 'Un vino de carácter sensual y elegante que bien puede acompañar frutos de mar, quesos y ensaladas de hoja verdes.', '67');
INSERT INTO `producto_extension` VALUES ('246', '44', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('247', '44', '2013', '62');
INSERT INTO `producto_extension` VALUES ('248', '44', '6 a 9 meses, en barricas de roble francés y americano.', '68');
INSERT INTO `producto_extension` VALUES ('249', '44', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('250', '44', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('251', '44', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('252', '44', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('253', '44', 'Álamos Malbec es ideal para acompañar pastas bañadas con salsas intensas a moderadas, empanadas criollas, picadas abundantes, tablas de quesos y diferentes variedades de carnes. Temperatura de Servicio: 16°C - 18°C', '67');
INSERT INTO `producto_extension` VALUES ('254', '45', '100% Cabernet Suavignon', '61');
INSERT INTO `producto_extension` VALUES ('255', '45', '2013', '62');
INSERT INTO `producto_extension` VALUES ('256', '45', 'Álamos Cabernet Sauvignon 2013 es ideal para acompañar pastas bañadas con salsas intensas a moderadas, empanadas criollas, picadas abundantes, tablas de quesos y diferentes variedades de carnes. Temperatura de Servicio: 16°C - 18°C.', '68');
INSERT INTO `producto_extension` VALUES ('257', '45', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('258', '45', '750', '64');
INSERT INTO `producto_extension` VALUES ('259', '45', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('260', '45', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('261', '45', 'Álamos Cabernet Sauvignon 2013 es ideal para acompañar pastas bañadas con salsas intensas a moderadas, empanadas criollas, picadas abundantes, tablas de quesos y diferentes variedades de carnes. Temperatura de Servicio: 16°C - 18°C.', '67');
INSERT INTO `producto_extension` VALUES ('262', '48', '90% Malbec 6% Cabernet Sauvignon 4% Petit Verdot', '61');
INSERT INTO `producto_extension` VALUES ('263', '48', '2012', '62');
INSERT INTO `producto_extension` VALUES ('264', '48', '12 meses en roble francés, 30% nuevo', '68');
INSERT INTO `producto_extension` VALUES ('265', '48', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('266', '48', '750', '64');
INSERT INTO `producto_extension` VALUES ('267', '48', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('268', '48', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('269', '48', 'La particular voluptuosidad y dulzor de este vino permiten acompañarlo con carré de cerdo a la miel, tagine de cordero y ciruelas o lomo a la naranja.', '67');
INSERT INTO `producto_extension` VALUES ('270', '49', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('271', '49', '2010', '62');
INSERT INTO `producto_extension` VALUES ('272', '49', 'Sin roble, para conservar intacto todo su potencial aromático.', '68');
INSERT INTO `producto_extension` VALUES ('273', '49', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('274', '49', '750', '64');
INSERT INTO `producto_extension` VALUES ('275', '49', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('276', '49', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('277', '49', 'Un vino de carácter sensual y elegante que bien puede acompañar frutos de mar, quesos y ensaladas de hoja verdes.', '67');
INSERT INTO `producto_extension` VALUES ('278', '50', '90% Cabernet Franc 7% Merlot 3% Petit Verdot', '61');
INSERT INTO `producto_extension` VALUES ('279', '50', '2012', '62');
INSERT INTO `producto_extension` VALUES ('280', '50', '12 meses en roble francés, 30% nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('281', '50', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('282', '50', '750', '64');
INSERT INTO `producto_extension` VALUES ('283', '50', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('284', '50', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('285', '50', 'La sólida estructura de este vino permite acompañarlo con carnes rojas, rissotos y platos elaborados.', '67');
INSERT INTO `producto_extension` VALUES ('286', '51', '70% Cabernet Sauvignon 30% Merlot', '61');
INSERT INTO `producto_extension` VALUES ('287', '51', '2010', '62');
INSERT INTO `producto_extension` VALUES ('288', '51', '6 meses en 90% roble francés (30% nuevo) y 10% roble americano nuevo', '68');
INSERT INTO `producto_extension` VALUES ('289', '51', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('290', '51', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('291', '51', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('292', '51', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('293', '51', 'Carnes azadas.', '67');
INSERT INTO `producto_extension` VALUES ('294', '52', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('295', '52', '2012', '62');
INSERT INTO `producto_extension` VALUES ('296', '52', '16 meses en 90% Roble francés (30% nuevo), y 10% roble americano nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('297', '52', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('298', '52', '750', '64');
INSERT INTO `producto_extension` VALUES ('299', '52', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('300', '52', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('301', '52', 'Exelente para acompañar con brochettes de pollo (panceta ahumada, morrón rojo, verde, cebolla y champignon)', '67');
INSERT INTO `producto_extension` VALUES ('302', '53', '70% Cabernet Sauvignon 30% Merlot', '61');
INSERT INTO `producto_extension` VALUES ('303', '53', '2007', '62');
INSERT INTO `producto_extension` VALUES ('304', '53', '6 meses en 90% roble francés (30% nuevo) y 10% roble americano nuevo', '68');
INSERT INTO `producto_extension` VALUES ('305', '53', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('306', '53', '375cc.', '64');
INSERT INTO `producto_extension` VALUES ('307', '53', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('308', '53', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('309', '53', 'Carnes azadas.', '67');
INSERT INTO `producto_extension` VALUES ('310', '54', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('311', '54', '2012', '62');
INSERT INTO `producto_extension` VALUES ('312', '54', '16 meses en 90% Roble francés (30% nuevo), y 10% roble americano nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('313', '54', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('314', '54', '375', '64');
INSERT INTO `producto_extension` VALUES ('315', '54', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('316', '54', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('317', '54', 'Exelente para acompañar brochettes de pollo (panceta ahumada, morrón rojo, verde, cebolla y champignon).', '67');
INSERT INTO `producto_extension` VALUES ('318', '55', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('319', '55', '2011', '62');
INSERT INTO `producto_extension` VALUES ('320', '55', '16 meses en 90% Roble francés (30% nuevo), y 10% roble americano nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('321', '55', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('322', '55', '1500', '64');
INSERT INTO `producto_extension` VALUES ('323', '55', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('324', '55', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('325', '55', 'Exelente para acompañar brochettes de pollo (panceta ahumada, morrón rojo, verde, cebolla y champignon).', '67');
INSERT INTO `producto_extension` VALUES ('326', '56', '100% Syrah', '61');
INSERT INTO `producto_extension` VALUES ('327', '56', '2008', '62');
INSERT INTO `producto_extension` VALUES ('328', '56', '12 meses en 90% roble francés (30% nuevo), y 10% roble americano nuevo', '68');
INSERT INTO `producto_extension` VALUES ('329', '56', 'Catana Zapata', '63');
INSERT INTO `producto_extension` VALUES ('330', '56', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('331', '56', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('332', '56', 'Mendoza.', '66');
INSERT INTO `producto_extension` VALUES ('333', '56', 'Pastas y quesos.', '67');
INSERT INTO `producto_extension` VALUES ('334', '61', '100% Cabernet Franc', '61');
INSERT INTO `producto_extension` VALUES ('335', '61', '2010', '62');
INSERT INTO `producto_extension` VALUES ('336', '61', '16 meses en 90% roble francés y 10% roble americano.', '68');
INSERT INTO `producto_extension` VALUES ('337', '61', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('338', '61', '750', '64');
INSERT INTO `producto_extension` VALUES ('339', '61', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('340', '61', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('341', '61', 'Un vino excelente para degustar con carne asada, combinado con diversos vegetales.', '67');
INSERT INTO `producto_extension` VALUES ('342', '63', '100% Cabernet Franc', '61');
INSERT INTO `producto_extension` VALUES ('343', '63', '2011', '62');
INSERT INTO `producto_extension` VALUES ('344', '63', '16 meses en 90% roble francés y 10% roble americano.', '68');
INSERT INTO `producto_extension` VALUES ('345', '63', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('346', '63', '375', '64');
INSERT INTO `producto_extension` VALUES ('347', '63', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('348', '63', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('349', '63', 'Un vino excelente para degustar con carne asada, combinado con diversos vegetales.', '67');
INSERT INTO `producto_extension` VALUES ('350', '64', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('351', '64', '2008', '62');
INSERT INTO `producto_extension` VALUES ('352', '64', 'En barricas de roble Francés.', '68');
INSERT INTO `producto_extension` VALUES ('353', '64', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('354', '64', '750', '64');
INSERT INTO `producto_extension` VALUES ('355', '64', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('356', '64', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('357', '64', 'Es un vino especial para acompañar pastas o verduras salteadas.', '67');
INSERT INTO `producto_extension` VALUES ('358', '65', 'cabernet sauvignon (55%), cabernet franc (35%), merlot (10%)', '61');
INSERT INTO `producto_extension` VALUES ('359', '65', '2012', '62');
INSERT INTO `producto_extension` VALUES ('360', '65', '18 meses en toneles de roble.', '68');
INSERT INTO `producto_extension` VALUES ('361', '65', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('362', '65', '750', '64');
INSERT INTO `producto_extension` VALUES ('363', '65', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('364', '65', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('365', '65', 'Es una gran vino, que homenajea al celebre Miguel Brasco, y tiene en cuenta las exigencias de su paladar. Perfecto para acompañar carnes vacuna, así también como cordero', '67');
INSERT INTO `producto_extension` VALUES ('366', '66', '100% Cabernet Suavignon', '61');
INSERT INTO `producto_extension` VALUES ('367', '66', '2010', '62');
INSERT INTO `producto_extension` VALUES ('368', '66', '12 meses en 90% roble francés (30% nuevo) y 10% roble americano nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('369', '66', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('370', '66', '750', '64');
INSERT INTO `producto_extension` VALUES ('371', '66', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('372', '66', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('373', '66', 'Exquisito vino para acompañar con carnes de caza.', '67');
INSERT INTO `producto_extension` VALUES ('374', '67', '100% Cabernet Franc', '61');
INSERT INTO `producto_extension` VALUES ('375', '67', '2010', '62');
INSERT INTO `producto_extension` VALUES ('376', '67', '16 meses en 90% roble francés y 10% roble americano.', '68');
INSERT INTO `producto_extension` VALUES ('377', '67', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('378', '67', '750', '64');
INSERT INTO `producto_extension` VALUES ('379', '67', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('380', '67', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('381', '67', 'Es un vino excelente que va de la mano con las carnes de caza, carnes asada acompañada de vegetales.', '67');
INSERT INTO `producto_extension` VALUES ('382', '68', '100% Cabernet Suavignon', '61');
INSERT INTO `producto_extension` VALUES ('383', '68', '2011', '62');
INSERT INTO `producto_extension` VALUES ('384', '68', '12 meses en 90% roble francés (30% nuevo) y 10% roble americano nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('385', '68', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('386', '68', '750', '64');
INSERT INTO `producto_extension` VALUES ('387', '68', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('388', '68', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('389', '68', 'Exquisito vino para acompañar con carnes de caza.', '67');
INSERT INTO `producto_extension` VALUES ('390', '69', '70% Cabernet Sauvignon 30% Merlot.', '61');
INSERT INTO `producto_extension` VALUES ('391', '69', '2010', '62');
INSERT INTO `producto_extension` VALUES ('392', '69', '6 meses en 90% roble francés (30% nuevo) y 10% roble americano nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('393', '69', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('394', '69', '750', '64');
INSERT INTO `producto_extension` VALUES ('395', '69', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('396', '69', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('397', '69', 'Delicioso vino para acompañar carnes rojas, patés, cordero y carnes de caza incluidas', '67');
INSERT INTO `producto_extension` VALUES ('398', '70', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('399', '70', '2011', '62');
INSERT INTO `producto_extension` VALUES ('400', '70', '16 meses en 90% Roble francés (30% nuevo), y 10% roble americano nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('401', '70', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('402', '70', '750', '64');
INSERT INTO `producto_extension` VALUES ('403', '70', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('404', '70', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('405', '70', 'Exelente para acompañar brochettes de pollo (panceta ahumada, morrón rojo, verde, cebolla y champignon).', '67');
INSERT INTO `producto_extension` VALUES ('406', '71', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('407', '71', '2011', '62');
INSERT INTO `producto_extension` VALUES ('408', '71', '16 meses en 90% Roble francés (30% nuevo), y 10% roble americano nuevo.', '68');
INSERT INTO `producto_extension` VALUES ('409', '71', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('410', '71', '750', '64');
INSERT INTO `producto_extension` VALUES ('411', '71', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('412', '71', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('413', '71', 'Exelente para acompañar brochettes de pollo (panceta ahumada, morrón rojo, verde, cebolla y champignon).', '67');
INSERT INTO `producto_extension` VALUES ('414', '72', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('415', '72', '2008', '62');
INSERT INTO `producto_extension` VALUES ('416', '72', 'En barricas de roble Francés', '68');
INSERT INTO `producto_extension` VALUES ('417', '72', 'Catena Zapata', '63');
INSERT INTO `producto_extension` VALUES ('418', '72', '750', '64');
INSERT INTO `producto_extension` VALUES ('419', '72', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('420', '72', 'Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('421', '72', 'Es un vino especial para acompañar pastas o verduras salteadas.', '67');
INSERT INTO `producto_extension` VALUES ('422', '77', '73% Malbec – 27% Cabernet Sauvignon', '61');
INSERT INTO `producto_extension` VALUES ('423', '77', '2011', '62');
INSERT INTO `producto_extension` VALUES ('424', '77', 'en barricas de roble francés durante 24 meses.', '68');
INSERT INTO `producto_extension` VALUES ('425', '77', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('426', '77', '750 CC.', '64');
INSERT INTO `producto_extension` VALUES ('427', '77', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('428', '77', 'Valle de Uco - Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('429', '77', 'Este vino resulta exelente para acompañar carnes roja.', '67');
INSERT INTO `producto_extension` VALUES ('430', '78', '50 % Syrah, 20% Tannat, 30% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('431', '78', '2010', '62');
INSERT INTO `producto_extension` VALUES ('432', '78', '18 meses, la madera utilizada fue de origen Francés en un 50% y Americano en un 50%', '68');
INSERT INTO `producto_extension` VALUES ('433', '78', 'Callia', '63');
INSERT INTO `producto_extension` VALUES ('434', '78', '750', '64');
INSERT INTO `producto_extension` VALUES ('435', '78', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('436', '78', 'San juan', '66');
INSERT INTO `producto_extension` VALUES ('437', '78', 'El Grand Callia es un perfecto compañero de carnes rojas, asadas o a la parrilla', '67');
INSERT INTO `producto_extension` VALUES ('438', '79', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('439', '79', '2010', '62');
INSERT INTO `producto_extension` VALUES ('440', '79', '19 meses en barricas de roble francés de primer uso.', '68');
INSERT INTO `producto_extension` VALUES ('441', '79', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('442', '79', '750 CC.', '64');
INSERT INTO `producto_extension` VALUES ('443', '79', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('444', '79', 'Valle de Uco, Tunuyán, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('445', '79', 'Vino para acompañar la alta gastronomía con base de carnes rojas y buena condimentación.', '67');
INSERT INTO `producto_extension` VALUES ('446', '80', '50 % Syrah, 20% Tannat, 30% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('447', '80', '2010', '62');
INSERT INTO `producto_extension` VALUES ('448', '80', '18 meses, la madera utilizada fue de origen Francés en un 50% y Americano en un 50%', '68');
INSERT INTO `producto_extension` VALUES ('449', '80', 'Callia', '63');
INSERT INTO `producto_extension` VALUES ('450', '80', '750', '64');
INSERT INTO `producto_extension` VALUES ('451', '80', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('452', '80', 'San juan', '66');
INSERT INTO `producto_extension` VALUES ('453', '80', 'El Grand Callia es un perfecto compañero de carnes rojas, asadas o a la parrilla', '67');
INSERT INTO `producto_extension` VALUES ('454', '81', 'Pinot noir', '61');
INSERT INTO `producto_extension` VALUES ('455', '81', '2009', '62');
INSERT INTO `producto_extension` VALUES ('456', '81', '19 meses en barricas de roble francés de primer uso.', '68');
INSERT INTO `producto_extension` VALUES ('457', '81', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('458', '81', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('459', '81', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('460', '81', 'Valle de Uco, Tunuyán, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('461', '81', 'Combinarlo con preparaciones de cocina fusión, harán exaltar aún mas el maridaje de ambos. Se aconseja decantar por 60 minutos antes de beberlo, sirviéndolo a 16°C. El tiempo de guarda mínimo recomendado es de 10 años', '67');
INSERT INTO `producto_extension` VALUES ('462', '82', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('463', '82', '2011', '62');
INSERT INTO `producto_extension` VALUES ('464', '82', 'Nueve meses en en barricas de roble americano y francés', '68');
INSERT INTO `producto_extension` VALUES ('465', '82', 'Callia', '63');
INSERT INTO `producto_extension` VALUES ('466', '82', '750', '64');
INSERT INTO `producto_extension` VALUES ('467', '82', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('468', '82', 'San juan', '66');
INSERT INTO `producto_extension` VALUES ('469', '82', 'Carnes rojas, carnes blancas, caza menor y quesos son alimentos que van de la mano con este exquisito vino', '67');
INSERT INTO `producto_extension` VALUES ('470', '83', '100% Merlot', '61');
INSERT INTO `producto_extension` VALUES ('471', '83', '2005', '62');
INSERT INTO `producto_extension` VALUES ('472', '83', '19 meses en barricas de roble francés de primer uso.', '68');
INSERT INTO `producto_extension` VALUES ('473', '83', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('474', '83', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('475', '83', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('476', '83', 'Valle de Uco, Tunuyán, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('477', '83', 'El maridaje de comidas elaboradas, condimentadas, quesos estacionados y buenas carnes rojas o de caza son buenos ejemplos de combinación. Se aconseja decantar por 60 minutos antes de beberlo, sirviéndolo a 16°C. El tiempo de guarda mínimo recomendado es de 10 años', '67');
INSERT INTO `producto_extension` VALUES ('478', '84', 'Pinot noir', '61');
INSERT INTO `producto_extension` VALUES ('479', '84', '2009', '62');
INSERT INTO `producto_extension` VALUES ('480', '84', '19 meses en barricas de roble francés de primer uso.', '68');
INSERT INTO `producto_extension` VALUES ('481', '84', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('482', '84', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('483', '84', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('484', '84', 'Valle de Uco, Tunuyán, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('485', '84', 'Combinarlo con preparaciones de cocina fusión, harán exaltar aún mas el maridaje de ambos. Se aconseja decantar por 60 minutos antes de beberlo, sirviéndolo a 16°C. El tiempo de guarda mínimo recomendado es de 10 años', '67');
INSERT INTO `producto_extension` VALUES ('486', '85', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('487', '85', '2010', '62');
INSERT INTO `producto_extension` VALUES ('488', '85', '19 meses en barricas de roble francés de primer uso.', '68');
INSERT INTO `producto_extension` VALUES ('489', '85', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('490', '85', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('491', '85', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('492', '85', 'Valle de Uco, Tunuyán, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('493', '85', 'Vino para acompañar la alta gastronomía con base de carnes rojas y buena condimentación', '67');
INSERT INTO `producto_extension` VALUES ('494', '86', '100% Syrah', '61');
INSERT INTO `producto_extension` VALUES ('495', '86', '2011', '62');
INSERT INTO `producto_extension` VALUES ('496', '86', 'Criado en barricas de roble Francés y Americano durante 8 meses. Estiba en botella durante 5 meses', '68');
INSERT INTO `producto_extension` VALUES ('497', '86', 'Callia', '63');
INSERT INTO `producto_extension` VALUES ('498', '86', '750', '64');
INSERT INTO `producto_extension` VALUES ('499', '86', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('500', '86', 'San juan', '66');
INSERT INTO `producto_extension` VALUES ('501', '86', 'Su exquisito sabor es perfecto para acompañar carnes rojas a la parrilla junto a vegetales', '67');
INSERT INTO `producto_extension` VALUES ('502', '87', '100% Merlot', '61');
INSERT INTO `producto_extension` VALUES ('503', '87', '2005', '62');
INSERT INTO `producto_extension` VALUES ('504', '87', 'criado 20 meses en barricas de roble francés de primer uso y 12 meses de guarda en botella', '68');
INSERT INTO `producto_extension` VALUES ('505', '87', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('506', '87', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('507', '87', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('508', '87', 'Valle de Uco, Tunuyán, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('509', '87', 'El maridaje de comidas elaboradas, condimentadas, quesos estacionados y buenas carnes rojas o de caza son buenos ejemplos de combinación.', '67');
INSERT INTO `producto_extension` VALUES ('510', '88', '100% Cabernet Suavignon', '61');
INSERT INTO `producto_extension` VALUES ('511', '88', '2011', '62');
INSERT INTO `producto_extension` VALUES ('512', '88', 'Nueve meses en en barricas de roble americano y francés', '68');
INSERT INTO `producto_extension` VALUES ('513', '88', 'Callia', '63');
INSERT INTO `producto_extension` VALUES ('514', '88', '750', '64');
INSERT INTO `producto_extension` VALUES ('515', '88', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('516', '88', 'San juan', '66');
INSERT INTO `producto_extension` VALUES ('517', '88', 'Su delicioso sabor y profundo aroma lo hacen perfecto para acompañar carnes rojas, asadas o a la parrilla', '67');
INSERT INTO `producto_extension` VALUES ('518', '89', '100% Syrah', '61');
INSERT INTO `producto_extension` VALUES ('519', '89', '2011', '62');
INSERT INTO `producto_extension` VALUES ('520', '89', 'Criado en barricas de roble Francés y Americano durante 8 meses. Estiba en botella durante 5 meses', '68');
INSERT INTO `producto_extension` VALUES ('521', '89', 'Callia', '63');
INSERT INTO `producto_extension` VALUES ('522', '89', '750', '64');
INSERT INTO `producto_extension` VALUES ('523', '89', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('524', '89', 'San juan', '66');
INSERT INTO `producto_extension` VALUES ('525', '89', 'Su exquisito sabor es perfecto para acompañar carnes rojas a la parrilla junto a vegetales', '67');
INSERT INTO `producto_extension` VALUES ('526', '90', '100% Malbec', '61');
INSERT INTO `producto_extension` VALUES ('527', '90', '2010', '62');
INSERT INTO `producto_extension` VALUES ('528', '90', '.', '68');
INSERT INTO `producto_extension` VALUES ('529', '90', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('530', '90', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('531', '90', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('532', '90', 'Valle de Uco, Tunuyán, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('533', '90', 'El maridaje de comidas elaboradas, condimentadas, quesos estacionados y buenas carnes rojas o de caza son buenos ejemplos de combinación.', '67');
INSERT INTO `producto_extension` VALUES ('534', '91', 'Pinot noir', '61');
INSERT INTO `producto_extension` VALUES ('535', '91', '2010.', '62');
INSERT INTO `producto_extension` VALUES ('536', '91', '.', '68');
INSERT INTO `producto_extension` VALUES ('537', '91', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('538', '91', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('539', '91', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('540', '91', 'Valle de Uco, Tunuyán, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('541', '91', 'Pescados y ensaladas verder es una exelente opcion para ser acompañado con este vino.', '67');
INSERT INTO `producto_extension` VALUES ('542', '92', '100% Cabernet Suavignon', '61');
INSERT INTO `producto_extension` VALUES ('543', '92', '2013', '62');
INSERT INTO `producto_extension` VALUES ('544', '92', 'Seis meses por madera, que corresponde al 50% de roble francés y 50% de roble americano.', '68');
INSERT INTO `producto_extension` VALUES ('545', '92', 'Callia', '63');
INSERT INTO `producto_extension` VALUES ('546', '92', '750', '64');
INSERT INTO `producto_extension` VALUES ('547', '92', 'Argentina', '65');
INSERT INTO `producto_extension` VALUES ('548', '92', 'San juan', '66');
INSERT INTO `producto_extension` VALUES ('549', '92', 'Este vino es un buena opción a la hora de comer carnes de caza y carnes rojas', '67');
INSERT INTO `producto_extension` VALUES ('550', '93', '64% Malbec | 18% Cabernet Sauvignon | 11% Merlot | 5% Cabernet Franc | 2% Petit Verdot', '61');
INSERT INTO `producto_extension` VALUES ('551', '93', '2011', '62');
INSERT INTO `producto_extension` VALUES ('552', '93', '.', '68');
INSERT INTO `producto_extension` VALUES ('553', '93', 'Salentein', '63');
INSERT INTO `producto_extension` VALUES ('554', '93', '750cc.', '64');
INSERT INTO `producto_extension` VALUES ('555', '93', 'Argentina.', '65');
INSERT INTO `producto_extension` VALUES ('556', '93', 'Valle de Uco, Tunuyán, Mendoza', '66');
INSERT INTO `producto_extension` VALUES ('557', '93', 'carnes y quesos', '67');

-- ----------------------------
-- Table structure for `producto_imagen`
-- ----------------------------
DROP TABLE IF EXISTS `producto_imagen`;
CREATE TABLE `producto_imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) DEFAULT NULL,
  `primario` tinyint(1) DEFAULT NULL,
  `extension` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2E3E7DFD7645698E` (`producto_id`),
  CONSTRAINT `FK_2E3E7DFD7645698E` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=314 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of producto_imagen
-- ----------------------------
INSERT INTO `producto_imagen` VALUES ('3', '3', '1', 'jpeg', '1', '2015-05-23 04:22:33');
INSERT INTO `producto_imagen` VALUES ('4', '4', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('5', '5', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('7', '7', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('8', '8', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('9', '9', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('10', '12', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('11', '13', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('12', '14', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('15', '18', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('16', '19', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('17', '20', '1', 'jpeg', '2', '2015-05-06 16:55:05');
INSERT INTO `producto_imagen` VALUES ('18', '21', '1', 'jpeg', '1', '2015-05-06 19:27:58');
INSERT INTO `producto_imagen` VALUES ('19', '17', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('20', '22', '1', 'jpeg', '2', '2015-05-06 19:31:38');
INSERT INTO `producto_imagen` VALUES ('21', '11', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('22', '23', '1', 'png', '1', '2015-05-06 23:38:54');
INSERT INTO `producto_imagen` VALUES ('23', '24', '1', 'png', '1', '2015-05-06 23:47:26');
INSERT INTO `producto_imagen` VALUES ('24', '25', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('25', '26', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('26', '27', '1', 'png', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('27', '28', '1', 'jpeg', '3', '2015-10-15 13:59:27');
INSERT INTO `producto_imagen` VALUES ('29', '31', '1', 'png', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('30', '34', '1', 'png', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('31', '35', '0', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('32', '38', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('33', '39', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('34', '40', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('35', '41', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('36', '42', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('37', '44', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('38', '46', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('39', '43', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('40', '47', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('41', '37', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('42', '48', '0', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('43', '49', '0', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('44', '50', '0', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('45', '62', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('46', '60', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('47', '59', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('48', '58', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('49', '57', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('50', '64', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('51', '63', '1', 'gif', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('52', '61', '1', 'gif', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('53', '45', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('54', '75', '1', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('55', '76', '0', 'jpeg', null, '0000-00-00 00:00:00');
INSERT INTO `producto_imagen` VALUES ('242', null, '0', 'jpeg', '0', '2015-05-06 05:05:49');
INSERT INTO `producto_imagen` VALUES ('243', null, '0', 'jpeg', '0', '2015-05-06 05:36:51');
INSERT INTO `producto_imagen` VALUES ('244', null, '0', 'png', '0', '2015-05-06 05:36:51');
INSERT INTO `producto_imagen` VALUES ('245', null, '0', 'jpeg', '0', '2015-05-06 05:39:17');
INSERT INTO `producto_imagen` VALUES ('246', null, '0', 'png', '0', '2015-05-06 05:39:17');
INSERT INTO `producto_imagen` VALUES ('247', null, '0', 'jpeg', '0', '2015-05-06 05:39:18');
INSERT INTO `producto_imagen` VALUES ('258', '18', '0', 'jpeg', '0', '2015-05-06 12:23:57');
INSERT INTO `producto_imagen` VALUES ('259', '18', '0', 'png', '0', '2015-05-06 12:23:57');
INSERT INTO `producto_imagen` VALUES ('260', '18', '0', 'jpeg', '0', '2015-05-06 12:23:57');
INSERT INTO `producto_imagen` VALUES ('261', '18', '0', 'jpeg', '0', '2015-05-06 12:23:57');
INSERT INTO `producto_imagen` VALUES ('262', '105', '0', 'jpeg', '3', '2015-05-06 18:57:48');
INSERT INTO `producto_imagen` VALUES ('263', '105', '0', 'png', '2', '2015-05-06 18:57:48');
INSERT INTO `producto_imagen` VALUES ('265', '20', '0', 'png', '1', '2015-05-06 16:55:05');
INSERT INTO `producto_imagen` VALUES ('266', '20', '0', 'gif', '3', '2015-05-06 16:55:05');
INSERT INTO `producto_imagen` VALUES ('269', '106', '0', 'jpeg', '0', '2015-05-06 19:03:31');
INSERT INTO `producto_imagen` VALUES ('270', '106', '0', 'jpeg', '0', '2015-05-06 19:03:31');
INSERT INTO `producto_imagen` VALUES ('271', '106', '0', 'png', '0', '2015-05-06 19:03:31');
INSERT INTO `producto_imagen` VALUES ('272', '106', '0', 'jpeg', '0', '2015-05-06 19:03:31');
INSERT INTO `producto_imagen` VALUES ('273', '107', '0', 'png', '0', '2015-05-06 19:05:32');
INSERT INTO `producto_imagen` VALUES ('274', '107', '0', 'jpeg', '0', '2015-05-06 19:05:32');
INSERT INTO `producto_imagen` VALUES ('275', '107', '0', 'jpeg', '0', '2015-05-06 19:05:32');
INSERT INTO `producto_imagen` VALUES ('276', null, '0', 'png', '0', '2015-05-06 19:06:33');
INSERT INTO `producto_imagen` VALUES ('277', null, '0', 'jpeg', '0', '2015-05-06 19:06:34');
INSERT INTO `producto_imagen` VALUES ('278', null, '0', 'png', '0', '2015-05-06 19:06:34');
INSERT INTO `producto_imagen` VALUES ('279', null, '0', 'jpeg', '0', '2015-05-06 19:06:34');
INSERT INTO `producto_imagen` VALUES ('280', '108', '0', 'jpeg', '0', '2015-05-06 19:16:44');
INSERT INTO `producto_imagen` VALUES ('281', '108', '0', 'png', '0', '2015-05-06 19:16:44');
INSERT INTO `producto_imagen` VALUES ('282', '108', '0', 'jpeg', '0', '2015-05-06 19:16:44');
INSERT INTO `producto_imagen` VALUES ('283', '109', '0', 'jpeg', '0', '2015-05-06 19:19:33');
INSERT INTO `producto_imagen` VALUES ('284', '109', '0', 'png', '0', '2015-05-06 19:19:33');
INSERT INTO `producto_imagen` VALUES ('285', '109', '0', 'jpeg', '0', '2015-05-06 19:19:33');
INSERT INTO `producto_imagen` VALUES ('286', null, '0', 'png', '0', '2015-05-06 19:20:36');
INSERT INTO `producto_imagen` VALUES ('287', null, '0', 'png', '0', '2015-05-06 19:20:36');
INSERT INTO `producto_imagen` VALUES ('288', null, '0', 'jpeg', '0', '2015-05-06 19:20:37');
INSERT INTO `producto_imagen` VALUES ('289', null, '0', 'jpeg', '0', '2015-05-06 19:23:18');
INSERT INTO `producto_imagen` VALUES ('290', null, '0', 'png', '0', '2015-05-06 19:23:19');
INSERT INTO `producto_imagen` VALUES ('291', null, '0', 'jpeg', '0', '2015-05-06 19:24:50');
INSERT INTO `producto_imagen` VALUES ('295', '21', '0', 'jpeg', '0', '2015-05-06 19:27:58');
INSERT INTO `producto_imagen` VALUES ('296', '22', '0', 'jpeg', '1', '2015-05-06 19:31:38');
INSERT INTO `producto_imagen` VALUES ('297', '23', '0', 'jpeg', '0', '2015-05-06 23:38:54');
INSERT INTO `producto_imagen` VALUES ('298', null, '0', 'jpeg', '0', '2015-05-06 23:40:02');
INSERT INTO `producto_imagen` VALUES ('299', null, '0', 'jpeg', '0', '2015-05-06 23:41:49');
INSERT INTO `producto_imagen` VALUES ('300', '24', '0', 'jpeg', '3', '2015-05-06 23:47:26');
INSERT INTO `producto_imagen` VALUES ('301', '24', '0', 'jpeg', '4', '2015-05-06 23:47:26');
INSERT INTO `producto_imagen` VALUES ('302', '24', '0', 'jpeg', '5', '2015-05-06 23:47:26');
INSERT INTO `producto_imagen` VALUES ('303', '24', '0', 'jpeg', '0', '2015-05-06 23:47:26');
INSERT INTO `producto_imagen` VALUES ('305', null, '0', 'jpeg', '0', '2015-05-08 12:43:45');
INSERT INTO `producto_imagen` VALUES ('307', '2', '0', 'jpeg', '0', '2015-05-23 04:10:47');
INSERT INTO `producto_imagen` VALUES ('308', null, '0', 'jpeg', '0', '2015-10-15 13:55:30');
INSERT INTO `producto_imagen` VALUES ('309', null, '0', 'jpeg', '0', '2015-10-15 13:57:09');
INSERT INTO `producto_imagen` VALUES ('310', null, '0', 'jpeg', '0', '2015-10-15 13:57:09');
INSERT INTO `producto_imagen` VALUES ('311', null, '0', 'jpeg', '0', '2015-10-15 13:57:10');
INSERT INTO `producto_imagen` VALUES ('312', '28', '0', 'jpeg', '1', '2015-10-15 13:59:27');
INSERT INTO `producto_imagen` VALUES ('313', '28', '0', 'jpeg', '2', '2015-10-15 13:59:27');

-- ----------------------------
-- Table structure for `proveedor`
-- ----------------------------
DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `localidad_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `razon_social` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_fantasia` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cuit` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_postal` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `pagina_web` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `contacto_telefono` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto_int` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto_fax` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto_movil` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moneda` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `limite_credito` double NOT NULL,
  `tipo_pago` int(11) DEFAULT NULL,
  `descuento` decimal(10,2) DEFAULT NULL,
  `cond_iva` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nro_cuenta` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacion` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_16C068CE67707C89` (`localidad_id`),
  KEY `IDX_16C068CEDB38439E` (`usuario_id`),
  CONSTRAINT `FK_9431EA6D67707C89` FOREIGN KEY (`localidad_id`) REFERENCES `parametro_localidad` (`id`),
  CONSTRAINT `FK_9431EA6DDB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of proveedor
-- ----------------------------

-- ----------------------------
-- Table structure for `reposicion`
-- ----------------------------
DROP TABLE IF EXISTS `reposicion`;
CREATE TABLE `reposicion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `codigo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_reposicion` datetime DEFAULT NULL,
  `fecha_alta` datetime DEFAULT NULL,
  `factura_numero` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E902AD82CB305D73` (`proveedor_id`),
  KEY `IDX_E902AD82DB38439E` (`usuario_id`),
  CONSTRAINT `FK_A65FAE52CB305D73` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedor` (`id`),
  CONSTRAINT `FK_A65FAE52DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of reposicion
-- ----------------------------

-- ----------------------------
-- Table structure for `reposicion_item`
-- ----------------------------
DROP TABLE IF EXISTS `reposicion_item`;
CREATE TABLE `reposicion_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reposicion_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BA21EBE47157A9BF` (`reposicion_id`),
  KEY `IDX_BA21EBE47645698E` (`producto_id`),
  CONSTRAINT `FK_BA21EBE47157A9BF` FOREIGN KEY (`reposicion_id`) REFERENCES `reposicion` (`id`),
  CONSTRAINT `FK_BA21EBE47645698E` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of reposicion_item
-- ----------------------------
