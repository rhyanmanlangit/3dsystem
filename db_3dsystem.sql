/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.5.5-10.1.13-MariaDB : Database - db_3dsystem
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_3dsystem` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_3dsystem`;

/*Table structure for table `tbl_component` */

DROP TABLE IF EXISTS `tbl_component`;

CREATE TABLE `tbl_component` (
  `component_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `component_barcode` varchar(7) DEFAULT NULL,
  `component_name` varchar(125) DEFAULT NULL,
  `component_description` tinytext,
  `component_type_id` int(4) DEFAULT NULL,
  `manufacturer_id` int(4) DEFAULT NULL,
  `component_3d_drawing` varchar(125) DEFAULT NULL,
  `component_2d_drawing` varchar(125) DEFAULT NULL,
  `component_unit` varchar(125) DEFAULT NULL,
  `component_qty_porder` int(125) DEFAULT NULL,
  `component_prod_stock` int(125) DEFAULT NULL,
  `component_us_price_porder` double(10,2) DEFAULT NULL,
  `component_us_price_ppcs` double(10,2) DEFAULT NULL,
  `component_rp_price` double(10,2) DEFAULT NULL,
  `component_img` varchar(125) DEFAULT NULL,
  `component_remarks` tinytext,
  PRIMARY KEY (`component_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_component` */

/*Table structure for table `tbl_component_type` */

DROP TABLE IF EXISTS `tbl_component_type`;

CREATE TABLE `tbl_component_type` (
  `component_type_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `component_type_name` varchar(12) DEFAULT NULL,
  `component_type_alias` char(3) DEFAULT NULL,
  PRIMARY KEY (`component_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_component_type` */

insert  into `tbl_component_type`(`component_type_id`,`component_type_name`,`component_type_alias`) values (0001,'Spacer','SPC'),(0002,'adasd','ADS'),(0003,'Nut Screw','NSR'),(0004,'test','SSW'),(0005,'Bolt','BLT'),(0006,'NUT','NUT'),(0007,'TESt','TST'),(0008,'Kipay','KEP'),(0009,'Bolt Screw S','BSS'),(0010,'Mouse','MSE');

/*Table structure for table `tbl_manufacturer` */

DROP TABLE IF EXISTS `tbl_manufacturer`;

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `manufacturer_name` varchar(255) DEFAULT NULL,
  `manufacturer_addrs` text,
  `manufacturer_zip` int(9) DEFAULT NULL,
  `manufacturer_country` varchar(255) DEFAULT 'Not Specified',
  `manufacturer_phone_nos` int(15) DEFAULT NULL,
  `manufacturer_fax_nos` int(10) DEFAULT NULL,
  `manufacturer_email` varchar(255) DEFAULT 'Not Specified',
  `manufacturer_incharge` varchar(255) DEFAULT 'Not Specified',
  `manufacturer_designation` varchar(255) DEFAULT 'Not Specified',
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_manufacturer` */

insert  into `tbl_manufacturer`(`manufacturer_id`,`manufacturer_name`,`manufacturer_addrs`,`manufacturer_zip`,`manufacturer_country`,`manufacturer_phone_nos`,`manufacturer_fax_nos`,`manufacturer_email`,`manufacturer_incharge`,`manufacturer_designation`) values (00001,'-huawei','test',1234,'philippines',12312312,11112,'asds@gmail.com','tesst','test'),(00002,'aliexpress-huawei','test',1234,'philippines',12312312,11112,'asds@gmail.com','tesst','test'),(00003,NULL,'test',1234,'philippines',12312312,11112,'asds@gmail.com','tesst','test'),(00004,'huawei','test',1234,'philippines',12312312,11112,'asds@gmail.com','tesst','test'),(00005,'aliexpress-rhyan company','wala kong addresseh',1442,'philippines',412223,41114,'rhyan.m@3fdfablab.com','rhyan','salesman'),(00006,'aliexpress-sogo jr','testing',4114,'philippines',909232333,41144,'sogo@gmail.com','Jayson','salesman');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
