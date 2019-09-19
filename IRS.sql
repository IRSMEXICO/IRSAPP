/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.0.24a-community-nt : Database - irs
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
  `id_codigo` int(11) NOT NULL auto_increment,
  `codigo` varchar(10) default NULL,
  `tipo_actividad` varchar(150) NOT NULL,
  PRIMARY KEY  (`id_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cat_actividades` */

insert  into `cat_actividades`(`id_codigo`,`codigo`,`tipo_actividad`) values (1,'1250','Limpieza Oxido'),(2,'12509','Pulido'),(3,'15200','Inspeccion Visual');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) collate utf8_bin default NULL,
  `correo` varchar(100) collate utf8_bin default NULL,
  `usuario` varchar(100) collate utf8_bin default NULL,
  `contrasena` varchar(100) collate utf8_bin default NULL,
  `rol` varchar(100) collate utf8_bin default NULL,
  PRIMARY KEY  (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`nombre`,`correo`,`usuario`,`contrasena`,`rol`) values (1,'prueba','prueba@prueba.com','prueba','prueba','administrador'),(2,'prueba2','prueba2@prueba.com','prueba2','prueba2','usuario'),(3,'prueba3','prueba3@prueba.com','prueba3','prueba3','gerente');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
