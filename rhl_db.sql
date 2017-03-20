/*
SQLyog Community v10.51 
MySQL - 5.5.11 : Database - rhl_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rhl_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `dist_appoint` */

DROP TABLE IF EXISTS `dist_appoint`;

CREATE TABLE `dist_appoint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fr_name` varchar(250) DEFAULT NULL,
  `fr_address` varchar(250) DEFAULT NULL,
  `fr_contact` varchar(250) DEFAULT NULL,
  `fr_propname` varchar(250) DEFAULT NULL,
  `fr_email` varchar(250) DEFAULT NULL,
  `fr_tin` varchar(250) DEFAULT NULL,
  `fr_cst` varchar(250) DEFAULT NULL,
  `fr_pan` varchar(250) DEFAULT NULL,
  `fr_bank` varchar(250) DEFAULT NULL,
  `fr_baccont` varchar(250) DEFAULT NULL,
  `fr_bifsc` varchar(250) DEFAULT NULL,
  `fr_transport` varchar(250) DEFAULT NULL,
  `fr_holiday` varchar(250) DEFAULT NULL,
  `fr_agencurnt` varchar(250) DEFAULT NULL,
  `fr_agenprev` varchar(250) DEFAULT NULL,
  `fr_obusiness` varchar(250) DEFAULT NULL,
  `fr_mdistrb` varchar(250) DEFAULT NULL,
  `fr_exparea` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `dist_appoint` */

insert  into `dist_appoint`(`id`,`fr_name`,`fr_address`,`fr_contact`,`fr_propname`,`fr_email`,`fr_tin`,`fr_cst`,`fr_pan`,`fr_bank`,`fr_baccont`,`fr_bifsc`,`fr_transport`,`fr_holiday`,`fr_agencurnt`,`fr_agenprev`,`fr_obusiness`,`fr_mdistrb`,`fr_exparea`) values (7,'test','test','1111111','test','test@mail.com','hg','hh','hh','hh','hh','hh','hhh','hhh','hhh','hhhh','hhhhh','hhhhhhhh','hhhhhhhhhhhhhh');

/*Table structure for table `distributer_user` */

DROP TABLE IF EXISTS `distributer_user`;

CREATE TABLE `distributer_user` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(100) DEFAULT NULL,
  `d_location` varchar(250) DEFAULT NULL,
  `d_contact` varchar(100) DEFAULT NULL,
  `d_email` varchar(100) DEFAULT NULL,
  `selocation` varchar(250) DEFAULT NULL,
  `ddate` varchar(100) DEFAULT NULL,
  `dtime` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `distributer_user` */

insert  into `distributer_user`(`d_id`,`d_name`,`d_location`,`d_contact`,`d_email`,`selocation`,`ddate`,`dtime`) values (3,'bvcbfgdssdfs','bvcbcfdsfdsfds','4444444','vbcbcvbvc@fg.dfdsf',NULL,NULL,NULL),(4,'prashant','pune','8600249455','prashant@mail.com',NULL,NULL,NULL),(5,'fgfdgfdg','fgfdgf','4444444','hjhgj@gf.dgfg',NULL,NULL,NULL),(6,'fgfdgfdg','fgfdgf','4444444','hjhgj@gf.dgfg',NULL,NULL,NULL),(7,'fgfdgfdg','fgfdgf','4444444','hjhgj@gf.dgfg',NULL,NULL,NULL),(8,'fgfdgfdg','fgfdgf','4444444','hjhgj@gf.dgfg',NULL,NULL,NULL);

/*Table structure for table `emp_dsr` */

DROP TABLE IF EXISTS `emp_dsr`;

CREATE TABLE `emp_dsr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(250) DEFAULT NULL,
  `emp_design` varchar(250) DEFAULT NULL,
  `emp_terit` varchar(250) DEFAULT NULL,
  `emp_headqtr` varchar(250) DEFAULT NULL,
  `emp_state` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `emp_workwith` varchar(250) DEFAULT NULL,
  `emp_tradename` varchar(250) DEFAULT NULL,
  `emp_trdcon` varchar(250) DEFAULT NULL,
  `emp_trdadd` varchar(250) DEFAULT NULL,
  `emp_purvisit` varchar(250) DEFAULT NULL,
  `emp_orderb` varchar(250) DEFAULT NULL,
  `emp_ordamt` varchar(250) DEFAULT NULL,
  `emp_trdrmk` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `emp_dsr` */

insert  into `emp_dsr`(`id`,`emp_name`,`emp_design`,`emp_terit`,`emp_headqtr`,`emp_state`,`date`,`emp_workwith`,`emp_tradename`,`emp_trdcon`,`emp_trdadd`,`emp_purvisit`,`emp_orderb`,`emp_ordamt`,`emp_trdrmk`) values (1,'shivay','God Father','duniya','kailash','kailsh','0/0/0000','vishnu','human','9999999','mangal','murder','25','fdsfsd','fdfds');

/*Table structure for table `ms_stock` */

DROP TABLE IF EXISTS `ms_stock`;

CREATE TABLE `ms_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fr_name` varchar(250) DEFAULT NULL,
  `fr_address` varchar(250) DEFAULT NULL,
  `fr_contact` varchar(250) DEFAULT NULL,
  `fr_propname` varchar(250) DEFAULT NULL,
  `fr_email` varchar(250) DEFAULT NULL,
  `fr_tin` varchar(250) DEFAULT NULL,
  `fr_cst` varchar(250) DEFAULT NULL,
  `fr_pan` varchar(250) DEFAULT NULL,
  `fr_bank` varchar(250) DEFAULT NULL,
  `fr_baccont` varchar(250) DEFAULT NULL,
  `fr_bifsc` varchar(250) DEFAULT NULL,
  `fr_transport` varchar(250) DEFAULT NULL,
  `fr_holiday` varchar(250) DEFAULT NULL,
  `fr_agencurnt` varchar(250) DEFAULT NULL,
  `fr_agenprev` varchar(250) DEFAULT NULL,
  `fr_obusiness` varchar(250) DEFAULT NULL,
  `fr_mdistrb` varchar(250) DEFAULT NULL,
  `fr_exparea` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `ms_stock` */

insert  into `ms_stock`(`id`,`fr_name`,`fr_address`,`fr_contact`,`fr_propname`,`fr_email`,`fr_tin`,`fr_cst`,`fr_pan`,`fr_bank`,`fr_baccont`,`fr_bifsc`,`fr_transport`,`fr_holiday`,`fr_agencurnt`,`fr_agenprev`,`fr_obusiness`,`fr_mdistrb`,`fr_exparea`) values (8,'shriram market','ayodhya','8600249488','shriram','shriram@mail.com','shr111','shr111','shr777','ayodhybank','abk555','ifsc444','truck','sunday','ayodhya','ayodhya','nothing','nothing','nothing'),(9,'RamIT','WTC','77777777777777','prashant','ramit@mail.com','f88','gf88','gg88','fd8','fgf888','fgfgf88','dfdf88','fdsfd','dfs','gfgd','gff','fgdg','hggh');

/*Table structure for table `order_product` */

DROP TABLE IF EXISTS `order_product`;

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(250) DEFAULT NULL,
  `grams` varchar(250) DEFAULT NULL,
  `qunt_case` varchar(250) DEFAULT NULL,
  `percval` varchar(250) DEFAULT NULL,
  `tocase` varchar(250) DEFAULT NULL,
  `toamt` varchar(250) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `order_product` */

insert  into `order_product`(`id`,`product`,`grams`,`qunt_case`,`percval`,`tocase`,`toamt`,`order_id`) values (1,'hgf','g','ghf','gh','gf','gh','gfh'),(2,'ASM','fdsfds','fdsf','dfdsf','fdsf','dfdsf','111'),(3,'TSO','dfds','fdsf','dfsf','dfsfdsf','dfffds','111'),(4,'ASM','50','2','25','50','100','111'),(5,'SE','25','1','2','20','200','111'),(6,'ASM','10','10','10','10','1000','0'),(7,'SE','20','20','20','200','2000','0'),(8,'ASM','10','10','10','10','1000','2'),(9,'SE','20','20','20','200','2000','2'),(10,'ASM','10','10','10','10','1000','3'),(11,'SE','20','20','20','200','2000','3'),(12,'SE','20','20','20','200','2000','3'),(13,'ASM','10','10','10','10','1000','4'),(14,'SE','20','20','20','200','2000','4'),(15,'SE','20','20','20','200','2000','4');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `dis_name` varchar(250) DEFAULT NULL,
  `dis_town` varchar(250) DEFAULT NULL,
  `tso_name` varchar(250) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `pay_method` varchar(250) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

insert  into `orders`(`dis_name`,`dis_town`,`tso_name`,`contact`,`pay_method`,`id`) values ('prashant','pune','ranjit','8600249455','CHEQUE',1),('prashant','pune','ranjit','8600249455','CHEQUE',2),('prashant','pune','ranjit','8600249455','CHEQUE',3),('prashant','pune','ranjit','8600249455','CHEQUE',4);

/*Table structure for table `sales_user` */

DROP TABLE IF EXISTS `sales_user`;

CREATE TABLE `sales_user` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) DEFAULT NULL,
  `s_email` varchar(100) DEFAULT NULL,
  `s_contact` varchar(100) DEFAULT NULL,
  `s_username` varchar(100) DEFAULT NULL,
  `s_password` varchar(100) DEFAULT NULL,
  `desigantion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `sales_user` */

insert  into `sales_user`(`s_id`,`s_name`,`s_email`,`s_contact`,`s_username`,`s_password`,`desigantion`) values (2,'fdgfdg','hgfhgf@fdg.ghgfh','gfhgfhfg','admin','admin@123','SE'),(3,'fgfdgdg','fgfg@hfgf.gfdg','fdfdsfdsfds','admin','admin@123','TSO'),(4,'fgfdgdg','fgfg@hfgf.gfdg','fdfdsfdsfds','admin','admin@123','RSM');

/*Table structure for table `sur_product` */

DROP TABLE IF EXISTS `sur_product`;

CREATE TABLE `sur_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `br_hrproduct` varchar(255) DEFAULT NULL,
  `lo_hrproduct` varchar(255) DEFAULT NULL,
  `br_skproduct` varchar(255) DEFAULT NULL,
  `lo_skproduct` varchar(255) DEFAULT NULL,
  `br_pordpercnt` varchar(100) DEFAULT NULL,
  `lo_pordpercnt` varchar(100) DEFAULT NULL,
  `suser_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `sur_product` */

insert  into `sur_product`(`id`,`br_hrproduct`,`lo_hrproduct`,`br_skproduct`,`lo_skproduct`,`br_pordpercnt`,`lo_pordpercnt`,`suser_id`) values (1,'jhgj,hgjhgj,hgjhgj,','hjhgj,hjgj,hjgj,','jhgjg,hgjhgj,jghj,','hjghj,hjhgj,jhgj,','55','55',0),(2,'lav,lav,lav,','kush,kush,kush,','hanuman,hanuman,vali,','sugriv,vali,hanuman,','2000','1000',20),(3,'fgh,klf,kjlfgd,','fgdjkl,lkfdg,lkhn,','klhghfkj,lghkjl,gkjlfd,','kjlghn,gjklfdgdjkl,kljgfdgfdhj,','55','55',21);

/*Table structure for table `sur_user` */

DROP TABLE IF EXISTS `sur_user`;

CREATE TABLE `sur_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `retail_no` int(11) DEFAULT NULL,
  `employe_no` int(11) DEFAULT NULL,
  `scheme` varchar(250) DEFAULT NULL,
  `advert` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `sur_user` */

insert  into `sur_user`(`id`,`name`,`address`,`state`,`retail_no`,`employe_no`,`scheme`,`advert`) values (20,'shri','bharat','bhrat',100000,1222222,'luckey draw,','TV,'),(21,'prashant','puine','dgh',65,55,'luckey draw,','TV,');

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_number` varchar(20) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `user_date` datetime NOT NULL,
  `user_show_pass` varchar(250) NOT NULL,
  `user_territory` varchar(250) NOT NULL,
  `user_status` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`user_id`,`first_name`,`last_name`,`user_name`,`user_email`,`user_password`,`user_number`,`user_state`,`user_city`,`user_role`,`user_code`,`user_date`,`user_show_pass`,`user_territory`,`user_status`) values (1,'Dnyanesh','M','admin','dnyanesh.mali@softinfology.com','8adcb100cdf06ea1525a125786eca9b9','9689483519','Maharashtra','Osmanabad','admin','','2017-03-15 00:00:00','','',0),(2,'Swapnil','T','swapnilt','swapnil@softinfology.com','03c7c0ace395d80182db07ae2c30f034','3434334343','Maharashtra','Pune','RSM','RSM/Pune/001','2017-03-15 12:20:47','','',0),(10,'admin','se','adminse','admin@mail.com','e6e061838856bf47e1de730719fb2609','8600249455','pune','pune','SE','SE/PUNE/2','2017-03-18 06:29:33','admin@123','pune',0);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `desigantion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`desigantion`) values (1,'admin','8adcb100cdf06ea1525a125786eca9b9','ADMIN');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
