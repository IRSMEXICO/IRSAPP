# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Base de datos: irs
# Tiempo de Generación: 2019-10-19 6:06:40 p. m. +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla cat_actividades
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_actividades`;

CREATE TABLE `cat_actividades` (
  `id_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) DEFAULT NULL,
  `tipo_actividad` varchar(150) NOT NULL,
  PRIMARY KEY (`id_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla cat_captura
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_captura`;

CREATE TABLE `cat_captura` (
  `id_captura` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_captura` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_captura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla cat_cliente
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_cliente`;

CREATE TABLE `cat_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(25) DEFAULT '',
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `cat_cliente` WRITE;
/*!40000 ALTER TABLE `cat_cliente` DISABLE KEYS */;

INSERT INTO `cat_cliente` (`id_cliente`, `cliente`, `foto`)
VALUES
	(2,'poot',''),
	(3,'identi','../../content/img/piezas/IMG_Array.jpg');

/*!40000 ALTER TABLE `cat_cliente` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla cat_cliente_area
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_cliente_area`;

CREATE TABLE `cat_cliente_area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(25) DEFAULT '',
  `id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `cat_cliente_area` WRITE;
/*!40000 ALTER TABLE `cat_cliente_area` DISABLE KEYS */;

INSERT INTO `cat_cliente_area` (`id_area`, `area`, `id_cliente`)
VALUES
	(1,'abanicos',3);

/*!40000 ALTER TABLE `cat_cliente_area` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla cat_cliente_pieza
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_cliente_pieza`;

CREATE TABLE `cat_cliente_pieza` (
  `id_pieza` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(25) DEFAULT NULL,
  `piezas` varchar(25) DEFAULT '',
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pieza`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `cat_cliente_pieza` WRITE;
/*!40000 ALTER TABLE `cat_cliente_pieza` DISABLE KEYS */;

INSERT INTO `cat_cliente_pieza` (`id_pieza`, `id_cliente`, `piezas`, `foto`)
VALUES
	(3,3,'pruebaddddd','../../content/img/piezas/IMG_pruebaddddd.jpg');

/*!40000 ALTER TABLE `cat_cliente_pieza` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla cat_cliente_usuario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_cliente_usuario`;

CREATE TABLE `cat_cliente_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT '',
  `email` varchar(50) DEFAULT '',
  `cuenta` varchar(25) DEFAULT '',
  `contra` varchar(25) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `cat_cliente_usuario` WRITE;
/*!40000 ALTER TABLE `cat_cliente_usuario` DISABLE KEYS */;

INSERT INTO `cat_cliente_usuario` (`id`, `cliente`, `usuario`, `email`, `cuenta`, `contra`)
VALUES
	(1,3,'si jala si jala','prueba@gmail.com','prueba','si jala'),
	(2,3,'si funciono','prueba@gmail.com','prueba','prueba'),
	(3,3,'si funciono','prueba@gmail.com','prueba','prueba'),
	(4,3,'prueba','dasd@asdas.com','prueba','prueba');

/*!40000 ALTER TABLE `cat_cliente_usuario` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla cat_colaboradores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_colaboradores`;

CREATE TABLE `cat_colaboradores` (
  `Id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(50) DEFAULT '',
  `email` varchar(50) DEFAULT '',
  `cuenta` varchar(30) DEFAULT '',
  `contra` varchar(25) DEFAULT '',
  `rol` varchar(30) DEFAULT '',
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `cat_colaboradores` WRITE;
/*!40000 ALTER TABLE `cat_colaboradores` DISABLE KEYS */;

INSERT INTO `cat_colaboradores` (`Id_usuario`, `tipo_usuario`, `email`, `cuenta`, `contra`, `rol`)
VALUES
	(1,'sdadasd','aaa@aaa.com','prueba','prueba','dasd');

/*!40000 ALTER TABLE `cat_colaboradores` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla cat_contrato
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_contrato`;

CREATE TABLE `cat_contrato` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_contrato` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_contrato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla cat_moneda
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_moneda`;

CREATE TABLE `cat_moneda` (
  `id_moneda` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_moneda` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_moneda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla cat_motivo_tm
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_motivo_tm`;

CREATE TABLE `cat_motivo_tm` (
  `id_motivo_tm` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_motivo_tm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_motivo_tm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla cat_rate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_rate`;

CREATE TABLE `cat_rate` (
  `id_rate` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_rate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla cat_registro
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_registro`;

CREATE TABLE `cat_registro` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_registro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `cat_registro` WRITE;
/*!40000 ALTER TABLE `cat_registro` DISABLE KEYS */;

INSERT INTO `cat_registro` (`id_registro`, `tipo_registro`)
VALUES
	(1,'prueba123');

/*!40000 ALTER TABLE `cat_registro` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla cat_turno
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cat_turno`;

CREATE TABLE `cat_turno` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_turno` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `cat_turno` WRITE;
/*!40000 ALTER TABLE `cat_turno` DISABLE KEYS */;

INSERT INTO `cat_turno` (`id_turno`, `tipo_turno`)
VALUES
	(1,'verspertino');

/*!40000 ALTER TABLE `cat_turno` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla logs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `fecha_ingreso` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla orden_serv_horario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orden_serv_horario`;

CREATE TABLE `orden_serv_horario` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `turno` varchar(20) DEFAULT NULL,
  `horario` varchar(20) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `area_usuario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla orden_servicio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orden_servicio`;

CREATE TABLE `orden_servicio` (
  `id_orden` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_inicio` varchar(50) DEFAULT NULL,
  `id_pieza` int(11) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `correo_usaurio` varchar(100) DEFAULT NULL,
  `correo_irs` varchar(100) DEFAULT NULL,
  `jornada` varchar(20) DEFAULT NULL,
  `toat` varchar(10) DEFAULT NULL,
  `turno` varchar(20) DEFAULT NULL,
  `horarios_pactd` varchar(20) DEFAULT NULL,
  `captura_reporte` varchar(10) DEFAULT NULL,
  `trazabilidad` varchar(10) DEFAULT NULL,
  `id_actividad` int(11) DEFAULT NULL,
  `serv_contratado` varchar(100) DEFAULT NULL,
  `dias_laborales` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_orden`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla rol
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usuario` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `contrasena` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `rol` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `usuario`, `contrasena`, `rol`)
VALUES
	(1,X'707275656261',X'707275656261407072756562612E636F6D2E6D78',X'707275656261',X'707275656261',X'31'),
	(2,X'706F6F74',X'706F6F7440706F6F742E636F6D',X'706F6F74',X'706F6F74',X'41444D494E4953545241444F52');

/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
