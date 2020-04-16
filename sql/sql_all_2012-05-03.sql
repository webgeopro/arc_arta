/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.1.41 : Database - arta
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `arta`;

/*Table structure for table `cms_attachment` */

DROP TABLE IF EXISTS `cms_attachment`;

CREATE TABLE `cms_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contentId` int(10) unsigned NOT NULL,
  `filename` varchar(255) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `mimeType` varchar(255) NOT NULL,
  `byteSize` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contentId` (`contentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cms_attachment` */

/*Table structure for table `cms_content` */

DROP TABLE IF EXISTS `cms_content`;

CREATE TABLE `cms_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nodeId` int(10) unsigned NOT NULL,
  `locale` varchar(50) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `body` longtext,
  `css` longtext,
  `url` varchar(255) DEFAULT NULL,
  `pageTitle` varchar(255) DEFAULT NULL,
  `breadcrumb` varchar(255) DEFAULT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` varchar(255) DEFAULT NULL,
  `metaKeywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contentId_locale` (`nodeId`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cms_content` */

/*Table structure for table `cms_node` */

DROP TABLE IF EXISTS `cms_node`;

CREATE TABLE `cms_node` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `parentId` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name_deleted` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cms_node` */

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `label` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `pic` varchar(30) DEFAULT NULL,
  `sort` tinyint(3) unsigned DEFAULT NULL,
  `visible` tinyint(1) DEFAULT '1',
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `pages` */

insert  into `pages`(`id`,`parent_id`,`name`,`label`,`comment`,`pic`,`sort`,`visible`,`content`) values (1,0,'О компании','about',NULL,'about_i.png',1,1,'<div style=\"font-size: 18px; color: #042E6F; float: left; font-weight: bolder;\">\r\n        КОМПАНИЯ «АРТА» - <br /> производитель продуктов питания<br /> высокого качества\r\n    </div>\r\n    <div style=\"float: right; color: #042E6F; font-size: 14px;\">\r\n        <ul>\r\n            <li>Дата образования: <b>19 декабря 1996 г.</b></li>\r\n            <li>Месторасположение завода: <b>РОССИЯ, Красноярский край, г. Ачинск</b></li>\r\n            <li>Офис: <b>РОССИЯ, г. Красноярск, ул. Перенсона, 52</b></li>\r\n            <li>Производственные мощности: <b>9 000 000 литров в месяц</b></li>\r\n        </ul>\r\n    </div>\r\n    <div style=\"clear: both; color: #042E6F; font-size: 14px;\"\">\r\n        Компания «АРТА» производит молочную и соковую продукцию. Качество - основной принцип и главная ценность\r\n        всей нашей деятельности. Производственная площадка Компании «АРТА» находится в г. Ачинск, где\r\n        применяются самые передовые технологии производства, выпускается продукция на основе высококачественного\r\n        сырья, уделяется большое внимание безопасности наших продуктов, экологии производства.Миссия Компании\r\n        «АРТА» - развитие культуры  потребления качественных продуктов питания людьми, заботящимися\r\n        о здоровье своей семьи.\r\n    </div>\r\n    <ul style=\"list-style:none;margin-top:15px;\">\r\n        <li style=\"float:left;padding:0 10px;\"><img src=\"/images/brands/mlada.png\"></li>\r\n        <li style=\"float:left;padding:0 10px;\"><img src=\"/images/brands/arta.png\"></li>\r\n        <li style=\"float:left;padding:0 10px;\"><img src=\"/images/brands/allyear.png\"></li>\r\n        <li style=\"float:left;padding:0 10px;\"><img src=\"/images/brands/luntik.png\"></li>\r\n    </ul>'),(2,0,'Новости','news',NULL,'news.png',2,1,'Заглушка из БД. Новости'),(3,0,'Наши бренды','brands',NULL,'brands.png',3,1,'Заглушка из БД. Бренды'),(4,0,'Контакты','contacts',NULL,'contacts.png',4,1,'Заглушка из БД. Контакты'),(5,0,'Акции','events',NULL,'events.png',5,1,'Заглушка из БД. Акции'),(6,0,'Новинки','novelty',NULL,'novelty.png',6,1,'<div style=\"background:url(\'/images/novelty_fon.jpg\') top center no-repeat; width:982px;margin:0 auto;\">\r\nТекст\r\n</div>'),(7,1,'География','geo',NULL,NULL,1,1,'География'),(8,1,'Партнеры','partners',NULL,NULL,2,1,'Партнеры'),(9,1,'Потребителям','info',NULL,NULL,3,1,'Потребителям');

/*Table structure for table `pages_products` */

DROP TABLE IF EXISTS `pages_products`;

CREATE TABLE `pages_products` (
  `id` int(10) unsigned NOT NULL,
  `page_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `pages_products` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `content` text,
  `pic` varchar(50) DEFAULT NULL,
  `label` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`comment`,`content`,`pic`,`label`) values (1,'Кофе','Комментарий кофе','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacus felis, lacinia at luctus tincidunt, porta at lacus. Mauris auctor, massa id luctus dignissim, neque nunc cursus dolor, eget vulputate lacus felis et tellus. Aliquam erat volutpat. Aliquam et leo elit. Nullam in placerat turpis. Aliquam erat volutpat. Fusce non felis sed mi fringilla pellentesque. Curabitur libero odio, blandit at condimentum quis, dignissim nec odio. Maecenas posuere vulputate consectetur. Donec vel libero eget velit porttitor porttitor vel sit amet augue. Integer vel venenatis elit.\r\n\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin dictum pharetra libero, in volutpat urna varius sit amet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc consectetur urna ac ante posuere bibendum. Suspendisse sed elit ante, sit amet dapibus purus. Aenean vitae tempor diam. Aliquam ac est lacinia dolor facilisis suscipit sed et tortor. Nam at ligula eget nisi aliquam hendrerit et et dui. Phasellus laoreet lorem nec turpis bibendum bibendum. Praesent convallis justo a nulla consectetur vehicula. Nulla fermentum, sem ac scelerisque vehicula, nunc metus vestibulum lectus, at rutrum lacus justo et lectus. ','cofe.png','cofe'),(2,'Капучино','Комментарий кап.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem nisi, feugiat ac euismod vel, consectetur bibendum augue. Proin ac turpis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin magna dolor, molestie non molestie elementum, aliquet nec orci. Sed facilisis, odio sit amet lobortis ultricies, elit nisi suscipit diam, vulputate dictum diam enim non sapien. Aliquam erat volutpat. Cras elit dolor, pharetra in sollicitudin ut, consectetur a mauris. Sed justo sapien, porta vel porttitor vel, venenatis et ipsum. Pellentesque vehicula est in metus dictum convallis.\r\n\r\nNulla sagittis ultricies aliquam. Mauris pharetra ipsum sed elit semper accumsan. In ullamcorper magna id urna elementum lacinia. Vivamus turpis turpis, vulputate ut malesuada sed, tempus non velit. Etiam a risus tortor. Maecenas ac dolor nibh, porta facilisis leo. Aenean sagittis egestas ante ultrices tempus. Ut at leo sit amet nisl blandit posuere ut at libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce iaculis vestibulum augue et auctor. Sed fringilla dignissim ipsum, eget lobortis arcu dictum eget. Suspendisse potenti. Aenean dolor tortor, consequat nec pellentesque ac, porttitor in sem. Cras sodales molestie neque, nec cursus urna hendrerit et. ','cofe2.png','cofe'),(3,'Мокко','Комментарий Мокко','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et tellus ut ligula ornare ultrices nec et purus. Quisque at adipiscing dui. Phasellus ipsum libero, ultrices ac dictum vitae, accumsan a tortor. Nulla facilisi. Mauris convallis bibendum elit. Sed non ipsum nibh. Maecenas gravida venenatis odio eget vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed risus justo. Nunc ut nisi metus, sit amet iaculis sapien. Nunc orci arcu, euismod non iaculis sed, venenatis vitae augue. Cras eu augue nisi.\r\n\r\nSuspendisse pellentesque iaculis enim, eget semper nisl mattis ut. Aliquam luctus malesuada ipsum eget faucibus. Nunc vitae tellus vitae nisl pharetra congue vitae sit amet tortor. Donec ipsum massa, rutrum non laoreet aliquam, sodales nec neque. Nunc lobortis mollis nunc, et mollis lorem tincidunt in. Suspendisse potenti. Aenean rhoncus luctus tristique. Morbi venenatis ornare tellus, laoreet rhoncus nunc congue quis. Ut fermentum vehicula ante, ut condimentum nulla placerat quis. ','cofe3.png','cofe');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
