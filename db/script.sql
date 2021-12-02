CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping structure for table datos.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table datos.categoria: ~1 rows (approximately)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Dumping structure for table datos.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(50) NOT NULL DEFAULT '0',
  `tel_cliente` varchar(50) NOT NULL DEFAULT '0',
  `correo` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping structure for table datos.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` varchar(50) NOT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `des_producto` varchar(50),
  `precio` double NOT NULL DEFAULT '0',
  `url` varchar(150) DEFAULT NULL,
  `id_proveedor` int(11) NOT NULL DEFAULT '0',
  `id_categoria` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_producto`),
  KEY `FK_producto_proveedor` (`id_proveedor`),
  KEY `FK_producto_categoria` (`id_categoria`),
  CONSTRAINT `FK_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  CONSTRAINT `FK_producto_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table datos.clientes: 0 rows
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Dumping structure for table datos.cotizaciones
CREATE TABLE IF NOT EXISTS `cotizaciones` (
  `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_cotizacion` varchar(50) NOT NULL,
  `atencion` int(11) NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `condiciones_pago` varchar(50) NOT NULL,
  `validez_oferta` varchar(50) NOT NULL,
  `tiempo_entrega` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cotizacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table datos.cotizaciones: 0 rows
/*!40000 ALTER TABLE `cotizaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `cotizaciones` ENABLE KEYS */;

-- Dumping structure for table datos.cotizaciones_demo
CREATE TABLE IF NOT EXISTS `cotizaciones_demo` (
  `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `numero_cotizacion` int(11) NOT NULL,
  `fecha_cotizacion` datetime NOT NULL,
  `atencion` varchar(50) NOT NULL,
  `tel1` varchar(9) NOT NULL,
  `empresa` varchar(75) NOT NULL,
  `tel2` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `validez` varchar(20) NOT NULL,
  `entrega` varchar(20) NOT NULL,
  PRIMARY KEY (`id_cotizacion`),
  UNIQUE KEY `numero_cotizacion` (`numero_cotizacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table datos.cotizaciones_demo: ~0 rows (approximately)
/*!40000 ALTER TABLE `cotizaciones_demo` DISABLE KEYS */;
/*!40000 ALTER TABLE `cotizaciones_demo` ENABLE KEYS */;

-- Dumping structure for table datos.detalle_cotizacion_demo
CREATE TABLE IF NOT EXISTS `detalle_cotizacion_demo` (
  `id_detalle_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `numero_cotizacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL,
  PRIMARY KEY (`id_detalle_cotizacion`),
  KEY `numero_cotizacion` (`numero_cotizacion`,`id_producto`),
  CONSTRAINT `FK_detalle_cotizacion_demo_cotizaciones_demo` FOREIGN KEY (`numero_cotizacion`) REFERENCES `cotizaciones_demo` (`numero_cotizacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table datos.detalle_cotizacion_demo: ~0 rows (approximately)
/*!40000 ALTER TABLE `detalle_cotizacion_demo` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_cotizacion_demo` ENABLE KEYS */;




-- Dumping data for table datos.producto: ~0 rows (approximately)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Dumping structure for table datos.proveedor


-- Dumping data for table datos.proveedor: ~1 rows (approximately)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

-- Dumping structure for table datos.tmp_cotizacion
CREATE TABLE IF NOT EXISTS `tmp_cotizacion` (
  `id_tmp` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tmp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table datos.tmp_cotizacion: ~0 rows (approximately)
/*!40000 ALTER TABLE `tmp_cotizacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_cotizacion` ENABLE KEYS */;

-- Dumping structure for table datos.users
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `user_demo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



