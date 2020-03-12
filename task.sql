/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 5.7.27-0ubuntu0.18.04.1 : Database - task
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`task` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `task`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` text,
  `approved` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`id`,`name`,`email`,`description`,`approved`) values 
(2,'marko','marko1@gmail.com','komentar2',1),
(4,'marko','marko3@gmail.com','komentar4	',1),
(5,'marija','marija@gmail.com','komentar5',1),
(6,'marija','marija1@gmail.com','komentar6',1),
(7,'marija','marija2@gmail.com','komentar7',1),
(8,'nikola','nikola@gmail.com','komentar8',1),
(20,'Marko','marko@gmail.com','Marko marko marko',1),
(21,'marija','marija@gmail.com','marija marija marija',0),
(22,'marija','marija@gmail.com','marija marija marija',0),
(23,'Marij','marija3@gmail.com','Marko je car',1),
(25,'marko','marko4@gmail.com','marko',0),
(31,'Marko','marko6@gmail.com','marko',0);

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`id`,`image`,`title`,`description`) values 
(4,'images/orange.jpg','product1','product1'),
(5,'images/lemon.jpg','product2','product2'),
(6,'images/kivi.jpg','product3','product3'),
(7,'images/banana.jpg','product4','product4'),
(8,'images/orange1.jpg','product5','product5'),
(9,'images/lemon1.jpg','product6','product6'),
(10,'images/kivi1.jpg','product7','product7'),
(11,'images/banana1.jpg','product8','product8'),
(12,'images/orange2.jpg','product9','product9');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`) values 
(1,'marko@gmail.com','$2y$10$yw2JESJQTtYv7fWVw6TQsuZusjIqUJ8BekH0nMD43XuMv234PPUMm'),
(2,'marko1@gmail.com','$2y$10$RQVZecIi7IJCgu8JXOzL9uL8juTWK9.ggIBvSP.1FKiCUmtAQELZ6'),
(3,'marko2@gmail.com','$2y$10$WpYp0L8fN4E5xrpucIS7nueyjpVGQp9b0zAwhzulCwhJ41BaGwKEi');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
