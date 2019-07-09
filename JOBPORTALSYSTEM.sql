/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.0.19-nt : Database - dbjobportal
*********************************************************************
Server version : 5.0.19-nt
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `dbjobportal`;

USE `dbjobportal`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `admin_login` */

DROP TABLE IF EXISTS `admin_login`;

CREATE TABLE `admin_login` (
  `id` varchar(100) default NULL,
  `username` varchar(100) default NULL,
  `password` varchar(100) default NULL,
  `name` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin_login` */

insert  into `admin_login`(`id`,`username`,`password`,`name`) values ('1','a','a','a');

/*Table structure for table `regestration` */

DROP TABLE IF EXISTS `regestration`;

CREATE TABLE `regestration` (
  `a1` varchar(100) default NULL,
  `a2` varchar(100) default NULL,
  `a3` varchar(100) default NULL,
  `a4` varchar(100) default NULL,
  `a5` varchar(100) default NULL,
  `a6` varchar(100) default NULL,
  `a7` varchar(100) default NULL,
  `a8` varchar(100) default NULL,
  `a9` varchar(100) default NULL,
  `a10` varchar(100) default NULL,
  `a11` varchar(100) default NULL,
  `a12` varchar(100) default NULL,
  `a13` varchar(100) default NULL,
  `a14` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `regestration` */

insert  into `regestration`(`a1`,`a2`,`a3`,`a4`,`a5`,`a6`,`a7`,`a8`,`a9`,`a10`,`a11`,`a12`,`a13`,`a14`) values ('5002','h','ghg','hgh','ghg','h','gh','h','ghg','hg','hg','hgh','h','hgh'),('','','','','','','','','','','','','','');

/*Table structure for table `regestration1` */

DROP TABLE IF EXISTS `regestration1`;

CREATE TABLE `regestration1` (
  `name` varchar(100) default NULL,
  `dob` varchar(100) default NULL,
  `gender` varchar(100) default NULL,
  `phone` varchar(100) default NULL,
  `address` varchar(100) default NULL,
  `contact_as` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  `password` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `regestration1` */

insert  into `regestration1`(`name`,`dob`,`gender`,`phone`,`address`,`contact_as`,`email`,`password`) values ('dfdddddddddddfdd','21-11-2013','Male','9999999999','df','','mahima','12345'),('s','28-10-2013','Male','9999999999','new delhi','delhi','s','s');

/*Table structure for table `vacancy` */

DROP TABLE IF EXISTS `vacancy`;

CREATE TABLE `vacancy` (
  `a1` varchar(100) default NULL,
  `a2` varchar(100) default NULL,
  `a3` varchar(100) default NULL,
  `a4` varchar(100) default NULL,
  `a5` varchar(100) default NULL,
  `a6` varchar(100) default NULL,
  `a7` varchar(100) default NULL,
  `a8` varchar(100) default NULL,
  `a9` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vacancy` */

insert  into `vacancy`(`a1`,`a2`,`a3`,`a4`,`a5`,`a6`,`a7`,`a8`,`a9`) values ('4211','jk','jk','jkj','kjk','jk','jk','jk','jk'),('4212','HR','dfdddddddddd','29-10-2013','fdf','dfd fd','9999999999','d','Andaman and Nicobar Islands');

/*Table structure for table `vacancy1` */

DROP TABLE IF EXISTS `vacancy1`;

CREATE TABLE `vacancy1` (
  `a1` varchar(100) default NULL,
  `a2` varchar(100) default NULL,
  `a3` varchar(100) default NULL,
  `a4` varchar(100) default NULL,
  `a5` varchar(100) default NULL,
  `a6` varchar(100) default NULL,
  `a7` varchar(100) default NULL,
  `a8` varchar(100) default NULL,
  `a9` varchar(100) default NULL,
  `a10` varchar(100) default NULL,
  `a11` varchar(100) default NULL,
  `a12` varchar(100) default NULL,
  `a13` varchar(100) default NULL,
  `a14` varchar(100) default NULL,
  `a15` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vacancy1` */

insert  into `vacancy1`(`a1`,`a2`,`a3`,`a4`,`a5`,`a6`,`a7`,`a8`,`a9`,`a10`,`a11`,`a12`,`a13`,`a14`,`a15`) values ('4212','HR','dfdddddddddd','29-10-2013','Male','dfd fd','9999999999','d','Andaman and Nicobar Islands','Yes',NULL,NULL,NULL,NULL,NULL),('4212','HR','dfdddddddddd','29-10-2013','fdf','dfd fd','9999999999','d','Andaman and Nicobar Islands','manisha','30-11-2013','Below 1 Year','dfd','9856556565','fd');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
