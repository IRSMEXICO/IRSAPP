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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `cat_actividades` */

insert  into `cat_actividades`(`id_codigo`,`codigo`,`tipo_actividad`) values (3,'1w','w123221234444yyy'),(4,'w','q12'),(8,'1123','123'),(9,'1123','123'),(11,'','prueba'),(12,NULL,'prueba');

/*Table structure for table `cat_captura` */

DROP TABLE IF EXISTS `cat_captura`;

CREATE TABLE `cat_captura` (
  `id_captura` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_captura` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_captura`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `cat_captura` */

insert  into `cat_captura`(`id_captura`,`tipo_captura`) values (1,'aaaaa112'),(2,'12sasdasd'),(3,'dasdasdasd'),(4,'aaaa');

/*Table structure for table `cat_contrato` */

DROP TABLE IF EXISTS `cat_contrato`;

CREATE TABLE `cat_contrato` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_contrato` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_contrato`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `cat_contrato` */

insert  into `cat_contrato`(`id_contrato`,`tipo_contrato`) values (2,'aaaaaa'),(4,'sssssss'),(6,'1234'),(8,'1234qwe'),(9,'jose poot');

/*Table structure for table `cat_moneda` */

DROP TABLE IF EXISTS `cat_moneda`;

CREATE TABLE `cat_moneda` (
  `id_moneda` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_moneda` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_moneda`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cat_moneda` */

insert  into `cat_moneda`(`id_moneda`,`tipo_moneda`) values (1,'sssssssqqq11123'),(2,'123123123');

/*Table structure for table `cat_motivo_tm` */

DROP TABLE IF EXISTS `cat_motivo_tm`;

CREATE TABLE `cat_motivo_tm` (
  `id_motivo_tm` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_motivo_tm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_motivo_tm`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cat_motivo_tm` */

insert  into `cat_motivo_tm`(`id_motivo_tm`,`tipo_motivo_tm`) values (1,'aaaaaaaaaaaaaaaa1234');

/*Table structure for table `cat_rate` */

DROP TABLE IF EXISTS `cat_rate`;

CREATE TABLE `cat_rate` (
  `id_rate` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_rate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cat_rate` */

insert  into `cat_rate`(`id_rate`,`tipo_rate`) values (1,'aaaaaaaaa12345'),(3,'aaaaaaaaa');

/*Table structure for table `cat_registro` */

DROP TABLE IF EXISTS `cat_registro`;

CREATE TABLE `cat_registro` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_registro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cat_registro` */

insert  into `cat_registro`(`id_registro`,`tipo_registro`) values (1,'1234'),(2,'aaaaa'),(3,'1234');

/*Table structure for table `cat_turno` */

DROP TABLE IF EXISTS `cat_turno`;

CREATE TABLE `cat_turno` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_turno` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `cat_turno` */

insert  into `cat_turno`(`id_turno`,`tipo_turno`) values (2,'asdasdasdasd'),(4,'123asd'),(5,'asdf');

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `fecha_ingreso` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `logs` */

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `rol` */

insert  into `rol`(`id_rol`,`rol`) values (1,'director'),(2,'gerente'),(3,'supervisor'),(4,'administrador'),(5,'usuario'),(6,'inspector');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`nombre`,`correo`,`usuario`,`contrasena`,`rol`) values (1,'prueba1','prueba1@prueba.com','prueba1','prueba1','1'),(2,'prueba2','prueba2@prueba.com','prueba2','prueba2','2'),(3,'prueba3','prueba3@prueba.com','prueba3','prueba3','3'),(4,'prueba4','prueba4@prueba.com','prueba4','prueba4','4'),(5,'prueba5','prueba5@prueba.com','prueba5','prueba5','5'),(6,'prueba6','prueba6@prueba.com','prueba6','prueba6','6');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
