/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.4.6-MariaDB : Database - irs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`irs` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `irs`;

/*Table structure for table `cat_actividades` */

DROP TABLE IF EXISTS `cat_actividades`;

CREATE TABLE `cat_actividades` (
  `id_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) DEFAULT NULL,
  `tipo_actividad` varchar(150) NOT NULL,
  PRIMARY KEY (`id_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cat_actividades` */

insert  into `cat_actividades`(`id_codigo`,`codigo`,`tipo_actividad`) values (1,'asda123123','aaaa');

/*Table structure for table `cat_captura` */

DROP TABLE IF EXISTS `cat_captura`;

CREATE TABLE `cat_captura` (
  `id_captura` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_captura` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_captura`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cat_captura` */

insert  into `cat_captura`(`id_captura`,`tipo_captura`) values (1,'aaaaa');

/*Table structure for table `cat_contrato` */

DROP TABLE IF EXISTS `cat_contrato`;

CREATE TABLE `cat_contrato` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `contrato` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_contrato`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `cat_contrato` */

insert  into `cat_contrato`(`id_contrato`,`contrato`) values (1,'aaaaa'),(2,'aaaaaa'),(3,'aaaaaa'),(4,'sssssss');

/*Table structure for table `cat_moneda` */

DROP TABLE IF EXISTS `cat_moneda`;

CREATE TABLE `cat_moneda` (
  `id_moneda` int(11) NOT NULL AUTO_INCREMENT,
  `moneda` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_moneda`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cat_moneda` */

insert  into `cat_moneda`(`id_moneda`,`moneda`) values (1,'sssssssqqq');

/*Table structure for table `cat_motivo_tm` */

DROP TABLE IF EXISTS `cat_motivo_tm`;

CREATE TABLE `cat_motivo_tm` (
  `id_motivo_tm` int(11) NOT NULL AUTO_INCREMENT,
  `motivo_tm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_motivo_tm`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cat_motivo_tm` */

insert  into `cat_motivo_tm`(`id_motivo_tm`,`motivo_tm`) values (1,'aaaaaaaaaaaaaaaa');

/*Table structure for table `cat_rate` */

DROP TABLE IF EXISTS `cat_rate`;

CREATE TABLE `cat_rate` (
  `id_rate` int(11) NOT NULL AUTO_INCREMENT,
  `rate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cat_rate` */

insert  into `cat_rate`(`id_rate`,`rate`) values (1,'aaaaaaaaa'),(2,'aaaaaaaaa'),(3,'aaaaaaaaa');

/*Table structure for table `cat_tregistro` */

DROP TABLE IF EXISTS `cat_tregistro`;

CREATE TABLE `cat_tregistro` (
  `id_tregistro` int(11) NOT NULL AUTO_INCREMENT,
  `tregistro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tregistro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cat_tregistro` */

insert  into `cat_tregistro`(`id_tregistro`,`tregistro`) values (1,''),(2,'aaaaa');

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `fecha_ingreso` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `logs` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usuario` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `contrasena` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `rol` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`nombre`,`correo`,`usuario`,`contrasena`,`rol`) values (1,'prueba','prueba@prueba.com','prueba','prueba','administrador'),(2,'prueba2','prueba2@prueba.com','prueba2','prueba2','usuario'),(3,'prueba3','prueba3@prueba.com','prueba3','prueba3','gerente');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
