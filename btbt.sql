/*
SQLyog Ultimate v8.82 
MySQL - 5.7.38-log : Database - btweb_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`btweb_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `btweb_db`;

/*Table structure for table `t_featuredproduct` */

DROP TABLE IF EXISTS `t_featuredproduct`;

CREATE TABLE `t_featuredproduct` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text,
  `Image` text,
  `Price` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT 'Active',
  `Type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_featuredproduct` */

insert  into `t_featuredproduct`(`Id`,`Name`,`Description`,`Image`,`Price`,`Status`,`Type`) values (1,'VIVO 56','Very smart and worthy product','uploads/FeatureProduct/img.jpeg','26000','Active','New'),(2,'Laptop 32','Very smart and worthy product 55 inch smart TV','uploads/FeatureProduct/MicrosoftTeams-image (26).jpeg','200,000','Active','Featured');

/*Table structure for table `t_homeslider` */

DROP TABLE IF EXISTS `t_homeslider`;

CREATE TABLE `t_homeslider` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Desicription` text,
  `Status` varchar(15) DEFAULT 'Active',
  `Image` varchar(255) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_homeslider` */

insert  into `t_homeslider`(`Id`,`Name`,`Desicription`,`Status`,`Image`,`URL`) values (5,'B-Ngul Reacharge Now','Get 10% Extra','Active','uploads/slider/11.jpeg','bt.bt');

/*Table structure for table `t_news` */

DROP TABLE IF EXISTS `t_news`;

CREATE TABLE `t_news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text,
  `Date` date DEFAULT NULL,
  `Status` varchar(255) DEFAULT 'Active',
  `Type` varchar(255) DEFAULT NULL,
  `Image` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_news` */

insert  into `t_news`(`Id`,`Name`,`Description`,`Date`,`Status`,`Type`,`Image`) values (2,'dwef','fwefwefw','2022-06-28','Active','Announcement','uploads/News/img.jpeg');

/*Table structure for table `t_role` */

DROP TABLE IF EXISTS `t_role`;

CREATE TABLE `t_role` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Role_Name` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT 'Active',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_role` */

insert  into `t_role`(`Id`,`Role_Name`,`Status`) values (1,'Administartor','Active'),(2,'User','Active');

/*Table structure for table `t_sidedisplay` */

DROP TABLE IF EXISTS `t_sidedisplay`;

CREATE TABLE `t_sidedisplay` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Image` text,
  `Status` varchar(255) DEFAULT 'Active',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `t_sidedisplay` */

insert  into `t_sidedisplay`(`Id`,`Image`,`Status`) values (3,'uploads/sidedisplay/WhatsApp Image 2022-06-28 at 6.23.01 PM.jpeg','Active'),(4,'uploads/sidedisplay/WhatsApp Image 2022-06-28 at 6.23.01 PM (1).jpeg','Active');

/*Table structure for table `t_user_master` */

DROP TABLE IF EXISTS `t_user_master`;

CREATE TABLE `t_user_master` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Image` tinyblob,
  `Contact_No` varchar(8) NOT NULL,
  `Designation` varchar(200) DEFAULT NULL,
  `Role_Id` varchar(50) NOT NULL,
  `Status` enum('Active','InActive') NOT NULL DEFAULT 'Active',
  `Created_date` datetime DEFAULT NULL,
  `Entry_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `t_user_master` */

insert  into `t_user_master`(`Id`,`Name`,`Email`,`Password`,`Image`,`Contact_No`,`Designation`,`Role_Id`,`Status`,`Created_date`,`Entry_by`) values (1,'SONAM','sdorji815@gmail.com','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay',NULL,'17458669','Marketing Officer','Administrator','Active',NULL,NULL),(5,'Naku','naku@bt.bt','$2y$10$.NanuHNqLe9SKxIIiRwms.L1hs55Pe0NQV2RVP9JXuHpLG1iNelFu',NULL,'77458669',NULL,'Administartor','Active','2022-06-28 08:51:23','1'),(6,'Karma','karma@bt.bt','$2y$10$rfcFP0Z2Fe6QGv9aLW2B1eJyH7yuTZA/p1xXmUD55JX8q.zHpH7FK',NULL,'77458669',NULL,'User','Active','2022-06-28 11:03:57','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
