/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - db_spk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_spk` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_spk`;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`id_admin`,`nama`,`username`,`password`) values 
(1,'krisna','admin','admin'),
(2,'angga','admin2','admin2');

/*Table structure for table `tbl_bobot` */

DROP TABLE IF EXISTS `tbl_bobot`;

CREATE TABLE `tbl_bobot` (
  `id_bobot` int(11) NOT NULL AUTO_INCREMENT,
  `w1` double NOT NULL,
  `w2` double NOT NULL,
  `w3` double NOT NULL,
  `w4` double NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_bobot` */

insert  into `tbl_bobot`(`id_bobot`,`w1`,`w2`,`w3`,`w4`) values 
(1,0.5,0.2,0.2,0.15);

/*Table structure for table `tbl_nilai` */

DROP TABLE IF EXISTS `tbl_nilai`;

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `c1` float NOT NULL,
  `c2` float NOT NULL,
  `c3` float NOT NULL,
  `c4` float NOT NULL,
  `skor` double DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_nilai` */

insert  into `tbl_nilai`(`id_nilai`,`id_siswa`,`c1`,`c2`,`c3`,`c4`,`skor`) values 
(32,24,1000,123457000,3,4,0.654),
(33,26,80.4,3,2,4,0.038),
(34,27,78,3,3,4,0.04),
(35,28,79.9,4,3,3,0.04),
(36,29,85.7,4,2,4,0.042),
(37,30,77.7,4,3,4,0.04),
(38,31,82.2,4,3,4,0.04),
(39,32,77,3,3,4,0.04),
(40,33,75.7,3,2,4,0.038),
(41,34,81.3,4,3,4,0.04),
(42,35,76.6,3,3,3,0.04),
(43,36,84,3,3,4,0.04),
(44,37,77.8,4,2,3,0.038),
(45,38,81.6,4,2,3,0.038),
(46,39,82.3,4,3,4,0.04),
(47,40,82.9,4,3,3,0.04),
(48,41,81.2,4,2,2,0.036),
(49,42,79.8,4,3,4,0.04),
(50,43,77.3,4,3,4,0.04),
(51,44,76,3,3,4,0.04),
(52,45,83.6,4,3,4,0.04),
(53,46,81.6,4,2,4,0.038),
(54,47,80.1,4,2,4,0.038),
(55,48,80.7,4,3,4,0.04),
(56,49,79.2,4,3,4,0.04),
(57,50,79.2,4,3,3,0.04),
(58,53,0,1234,456,456,0.35);

/*Table structure for table `tbl_siswa` */

DROP TABLE IF EXISTS `tbl_siswa`;

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `kelas` int(60) NOT NULL,
  `nis` int(14) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_siswa` */

insert  into `tbl_siswa`(`id_siswa`,`nama`,`kelas`,`nis`) values 
(24,'Ni Kadek Alisa Budiasih',6,1820120001),
(26,'I Putu Gede Arya Krisna Budiar',6,1820120002),
(27,'I Kadek Putra Wiguna Yasa',6,1820120003),
(28,'I Komang Januarta Yasa',6,1820120004),
(29,'Agung Dalem Semare Dwi Pinatih',6,1820120005),
(30,'I Kadek Dika Pratama Putra',6,1820120006),
(31,'I Putu Dendi Prasetrya Adi Put',6,1820120007),
(32,'I Wayan Mertha Yasa',6,2147483647),
(33,'Ni Putu Dewi Andini Putri',6,1820120009),
(34,'Jesika Tersia Anut',6,1820120010),
(35,'Ni Komang Padnya Arimbawa',6,1820120011),
(36,'Ni Putu Sariasih',6,1820120012),
(37,'I Made Sanjaya',6,1820120013),
(38,'Ni Putu Yunik Apriani',6,1820120014),
(39,'Ni Made Anggreni',6,1820120015),
(40,'I Wayan Ardana Yasa',6,1820120016),
(41,'Ni Putu Cinta Eprilia Putri',6,1820120017),
(42,'Gusti Ayu Arya Komala Sari Sid',6,1820120018),
(43,'I Wayan Deta Rastika Saputra',6,1820120019),
(44,'I Kadek Riski Saputra',6,1820120020),
(45,'I Gede Raditya',6,1820120021),
(46,'Ni Luh Putu Citra Dewi',6,1820120022),
(47,'Ni Komang Andhini Purnama Ning',6,1820120023),
(48,'Ni Made Linda Prasetia',6,1820120024),
(49,'Putu Sentana Putra Seregeg',6,1820120215),
(50,'Ni Komang Reti Marcyana',6,1820120026),
(53,'tes',100,100000),
(54,'ewa',120000123,123456);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
