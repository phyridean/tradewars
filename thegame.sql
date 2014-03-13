/*
SQLyog Community v11.0 (64 bit)
MySQL - 5.5.24-log : Database - thegame
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`thegame` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `thegame`;

/*Table structure for table `accounts` */

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE `accounts` (
  `accountid` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`accountid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `accounts` */

/*Table structure for table `characters` */

DROP TABLE IF EXISTS `characters`;

CREATE TABLE `characters` (
  `accountid` varchar(50) NOT NULL,
  `characterid` varchar(35) NOT NULL,
  `name` varchar(100) NOT NULL,
  `race` varchar(100) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `strength` int(100) NOT NULL DEFAULT '10',
  `dexterity` int(100) NOT NULL DEFAULT '10',
  `constitution` int(100) NOT NULL DEFAULT '10',
  `intelligence` int(100) NOT NULL DEFAULT '10',
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`accountid`,`characterid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `characters` */

/*Table structure for table `gear` */

DROP TABLE IF EXISTS `gear`;

CREATE TABLE `gear` (
  `gearid` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `quality` enum('Inferior','Common','Magic','Rare','Legendary','Set') NOT NULL,
  `slot` enum('Weapon','Head','Shoulders','Neck','Chest','Wrists','Hands','Finger','Legs','Feet','Backpack','Stash') NOT NULL,
  `classtype` varchar(100) NOT NULL,
  `setid` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gearid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gear` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
