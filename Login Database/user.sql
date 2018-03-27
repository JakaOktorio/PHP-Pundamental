/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.30-MariaDB : Database - user
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`user` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `user`;

/*Table structure for table `data_user` */

DROP TABLE IF EXISTS `data_user`;

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(170) DEFAULT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `baned` enum('Y','N') NOT NULL DEFAULT 'Y',
  `logintime` datetime DEFAULT NULL,
  `akses` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usernameunique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `data_user` */

insert  into `data_user`(`id`,`username`,`fullname`,`pass`,`email`,`telp`,`baned`,`logintime`,`akses`) values (1,'jaka','Jaka Oktorio','*4ACFE3202A5FF5CF467898FC58AAB1D615029441','jakaoktorio22@gmail.com','081250462104','Y','2018-03-12 11:34:45',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
