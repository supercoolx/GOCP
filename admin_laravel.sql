/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.21-MariaDB : Database - admin_laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `accountant_info` */

DROP TABLE IF EXISTS `accountant_info`;

CREATE TABLE `accountant_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `accountant_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountant_middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountant_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountant_cell_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountant_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountant_skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountant_whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `accountant_info` */

insert  into `accountant_info`(`id`,`accountant_first_name`,`accountant_middle_name`,`accountant_last_name`,`accountant_cell_number`,`accountant_email`,`accountant_skype`,`accountant_whatsapp`,`status`,`created_at`,`updated_at`) values 
(1,'buyer 1','buyerlow','buyedsold','922066324','buyer1@gmail.com','buyer12','922066324','Active','2021-11-01 11:35:36','2021-11-01 11:37:43');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admin` */

/*Table structure for table `android` */

DROP TABLE IF EXISTS `android`;

CREATE TABLE `android` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sim_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imei` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calling_plane_costing_id` bigint(20) unsigned NOT NULL,
  `cellular_companies_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `andriod_calling_plane_costing_id_foreign` (`calling_plane_costing_id`),
  KEY `andriod_cellular_companies_id_foreign` (`cellular_companies_id`),
  CONSTRAINT `andriod_calling_plane_costing_id_foreign` FOREIGN KEY (`calling_plane_costing_id`) REFERENCES `calling_plane_costing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `andriod_cellular_companies_id_foreign` FOREIGN KEY (`cellular_companies_id`) REFERENCES `cellular_companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `android` */

/*Table structure for table `bank_info` */

DROP TABLE IF EXISTS `bank_info`;

CREATE TABLE `bank_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_ZIP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_swift` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_ACH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bank_info` */

insert  into `bank_info`(`id`,`bank_name`,`bank_address`,`bank_city`,`bank_country`,`bank_ZIP`,`bank_phone`,`bank_email`,`bank_swift`,`bank_account_email`,`bank_account_number`,`bank_ACH`,`status`,`created_at`,`updated_at`) values 
(1,'bank_name','bank_adress','bank_city','bank_country','9001','123456789','bank_email@email.com','BUKBGB22','bank_account_email@email.com','1245363','Accounts Receivable Conversion','Active','2021-11-03 08:47:49','2021-11-03 08:47:49');

/*Table structure for table `buyer_info` */

DROP TABLE IF EXISTS `buyer_info`;

CREATE TABLE `buyer_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `buyer_info` */

insert  into `buyer_info`(`id`,`first_name`,`middle_name`,`last_name`,`cell_number`,`email`,`skype`,`whatsapp`,`status`,`created_at`,`updated_at`) values 
(1,'first1','middle1','last1','123456780','email2@email.com','skype_340','123456780','Active','2021-11-03 08:28:52','2021-11-03 08:30:54');

/*Table structure for table `calling_phone` */

DROP TABLE IF EXISTS `calling_phone`;

CREATE TABLE `calling_phone` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `calling_plan_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellular_companies_id` bigint(20) unsigned NOT NULL,
  `call_plan_detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `calling_phone_cellular_companies_id_foreign` (`cellular_companies_id`),
  CONSTRAINT `calling_phone_cellular_companies_id_foreign` FOREIGN KEY (`cellular_companies_id`) REFERENCES `cellular_companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `calling_phone` */

insert  into `calling_phone`(`id`,`calling_plan_name`,`cellular_companies_id`,`call_plan_detail`,`status`,`created_at`,`updated_at`) values 
(4,'Bitel test perú',4,'13 soles','Active','2021-11-09 14:02:33','2021-11-18 14:16:30');

/*Table structure for table `calling_plane_costing` */

DROP TABLE IF EXISTS `calling_plane_costing`;

CREATE TABLE `calling_plane_costing` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `calling_phone_id` bigint(20) unsigned NOT NULL,
  `calling_plan_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calling_plan_cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usa_currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `calling_plane_costing_calling_phone_id_foreign` (`calling_phone_id`),
  CONSTRAINT `calling_plane_costing_calling_phone_id_foreign` FOREIGN KEY (`calling_phone_id`) REFERENCES `calling_phone` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `calling_plane_costing` */

insert  into `calling_plane_costing`(`id`,`calling_phone_id`,`calling_plan_name`,`calling_plan_cost`,`usa_currency`,`status`,`created_at`,`updated_at`) values 
(8,4,'Bitel test perú','10','2.5','Active','2021-11-09 14:05:17','2021-11-09 14:05:17');

/*Table structure for table `carrier_buy` */

DROP TABLE IF EXISTS `carrier_buy`;

CREATE TABLE `carrier_buy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_sale_price_id` bigint(20) unsigned NOT NULL,
  `sc_commission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carrier_buy_route_sale_price_id_foreign` (`route_sale_price_id`),
  CONSTRAINT `carrier_buy_route_sale_price_id_foreign` FOREIGN KEY (`route_sale_price_id`) REFERENCES `route_sale_price` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `carrier_buy` */

/*Table structure for table `carrier_buy_rout` */

DROP TABLE IF EXISTS `carrier_buy_rout`;

CREATE TABLE `carrier_buy_rout` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `carrier_by_rout_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellular_companies_id` bigint(20) unsigned NOT NULL,
  `carrier_id` bigint(20) unsigned NOT NULL,
  `route_sale_price_id` bigint(20) unsigned NOT NULL,
  `sc_commision` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carrier_buy_rout_cellular_companies_id_foreign` (`cellular_companies_id`),
  KEY `carrier_buy_rout_carrier_id_foreign` (`carrier_id`),
  KEY `carrier_buy_rout_route_sale_price_id_foreign` (`route_sale_price_id`),
  CONSTRAINT `carrier_buy_rout_carrier_id_foreign` FOREIGN KEY (`carrier_id`) REFERENCES `carrier_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `carrier_buy_rout_cellular_companies_id_foreign` FOREIGN KEY (`cellular_companies_id`) REFERENCES `cellular_companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `carrier_buy_rout_route_sale_price_id_foreign` FOREIGN KEY (`route_sale_price_id`) REFERENCES `route_sale_price` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `carrier_buy_rout` */

insert  into `carrier_buy_rout`(`id`,`carrier_by_rout_name`,`cellular_companies_id`,`carrier_id`,`route_sale_price_id`,`sc_commision`,`status`,`created_at`,`updated_at`) values 
(6,'zxc',5,1,4,'sc commision','Active','2021-12-19 07:34:54','2021-12-19 07:34:54');

/*Table structure for table `carrier_cs_payment` */

DROP TABLE IF EXISTS `carrier_cs_payment`;

CREATE TABLE `carrier_cs_payment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `carrier_buy_rout_id` bigint(20) unsigned NOT NULL,
  `time_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_mints` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carrier_cs_payment_carrier_buy_rout_id_foreign` (`carrier_buy_rout_id`),
  CONSTRAINT `carrier_cs_payment_carrier_buy_rout_id_foreign` FOREIGN KEY (`carrier_buy_rout_id`) REFERENCES `carrier_buy_rout` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `carrier_cs_payment` */

insert  into `carrier_cs_payment`(`id`,`carrier_buy_rout_id`,`time_range`,`create_payment`,`total_mints`,`status`,`created_at`,`updated_at`) values 
(3,6,'time range','paypal','total minute','Active','2021-12-19 08:45:44','2021-12-19 08:45:44');

/*Table structure for table `carrier_info` */

DROP TABLE IF EXISTS `carrier_info`;

CREATE TABLE `carrier_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `carrier_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_ZIP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `carrier_info` */

insert  into `carrier_info`(`id`,`carrier_name`,`carrier_address`,`carrier_city`,`carrier_country`,`carrier_ZIP`,`status`,`created_at`,`updated_at`) values 
(1,'peru carrier name','123 adresse','peru city','Peru','11','Active','2021-10-24 05:29:46','2021-11-03 08:27:17'),
(2,'carrier info','carrier adress','city','county','220','Active','2021-11-03 08:25:18','2021-11-03 08:25:18');

/*Table structure for table `carrier_invoice` */

DROP TABLE IF EXISTS `carrier_invoice`;

CREATE TABLE `carrier_invoice` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `carrier_buy_rout_id` bigint(20) unsigned NOT NULL,
  `time_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_mints` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carrier_invoice_carrier_buy_rout_id_foreign` (`carrier_buy_rout_id`),
  CONSTRAINT `carrier_invoice_carrier_buy_rout_id_foreign` FOREIGN KEY (`carrier_buy_rout_id`) REFERENCES `carrier_buy_rout` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `carrier_invoice` */

insert  into `carrier_invoice`(`id`,`carrier_buy_rout_id`,`time_range`,`total_mints`,`status`,`created_at`,`updated_at`) values 
(4,6,'time range','time range','Active','2021-12-19 08:32:02','2021-12-19 08:42:11');

/*Table structure for table `carrier_sales` */

DROP TABLE IF EXISTS `carrier_sales`;

CREATE TABLE `carrier_sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `carrier_sales` */

insert  into `carrier_sales`(`id`,`user_name`,`password`,`first_name`,`last_name`,`cell_number`,`email`,`skype`,`whatsapp`,`status`,`created_at`,`updated_at`) values 
(1,'carriername','123456','carrier','name','155876634','carriersale@email.com','123456','155876634','Active','2021-11-03 09:02:20','2021-11-03 09:07:17');

/*Table structure for table `cellular_companies` */

DROP TABLE IF EXISTS `cellular_companies`;

CREATE TABLE `cellular_companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cellular_company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countries_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cellular_companies_countries_id_foreign` (`countries_id`),
  CONSTRAINT `cellular_companies_countries_id_foreign` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cellular_companies` */

insert  into `cellular_companies`(`id`,`cellular_company_name`,`countries_id`,`status`,`created_at`,`updated_at`) values 
(4,'Bitel Perú',3,'Inactive','2021-11-09 14:01:42','2021-11-18 14:15:51'),
(5,'Company Madrid',4,'Active','2021-12-19 06:41:33','2021-12-19 06:42:52');

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `countries_timezone_id_foreign` (`timezone_id`),
  CONSTRAINT `countries_timezone_id_foreign` FOREIGN KEY (`timezone_id`) REFERENCES `timezone` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `countries` */

insert  into `countries`(`id`,`name`,`timezone_id`,`status`,`created_at`,`updated_at`) values 
(3,'Perú',5,'Active','2021-11-09 13:54:00','2021-11-09 13:54:27'),
(4,'Spain',7,'Active','2021-12-19 06:17:18','2021-12-19 06:17:18');

/*Table structure for table `cp_info` */

DROP TABLE IF EXISTS `cp_info`;

CREATE TABLE `cp_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellular_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_partner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payoneer_account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_connect` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mcp_id` bigint(20) unsigned NOT NULL,
  `countries_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cp_info_countries_id_foreign` (`countries_id`),
  CONSTRAINT `cp_info_countries_id_foreign` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cp_info` */

/*Table structure for table `cp_line_route_info` */

DROP TABLE IF EXISTS `cp_line_route_info`;

CREATE TABLE `cp_line_route_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calling_plane_costing_id` bigint(20) unsigned NOT NULL,
  `cellular_companies_id` bigint(20) unsigned NOT NULL,
  `line_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cp_line_route_info_calling_plane_costing_id_foreign` (`calling_plane_costing_id`),
  KEY `cp_line_route_info_cellular_companies_id_foreign` (`cellular_companies_id`),
  CONSTRAINT `cp_line_route_info_calling_plane_costing_id_foreign` FOREIGN KEY (`calling_plane_costing_id`) REFERENCES `calling_plane_costing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cp_line_route_info_cellular_companies_id_foreign` FOREIGN KEY (`cellular_companies_id`) REFERENCES `cellular_companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cp_line_route_info` */

/*Table structure for table `cp_payment` */

DROP TABLE IF EXISTS `cp_payment`;

CREATE TABLE `cp_payment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `carrier_info_id` bigint(20) unsigned NOT NULL,
  `time_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_mints` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gsm_mints` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cp_payment_carrier_info_id_foreign` (`carrier_info_id`),
  CONSTRAINT `cp_payment_carrier_info_id_foreign` FOREIGN KEY (`carrier_info_id`) REFERENCES `carrier_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cp_payment` */

insert  into `cp_payment`(`id`,`carrier_info_id`,`time_range`,`whatsapp_mints`,`gsm_mints`,`create_payment`,`status`,`created_at`,`updated_at`) values 
(2,1,'13','10','14','dasa15','Active','2021-11-01 10:48:06','2021-11-01 10:49:22');

/*Table structure for table `cpsystem` */

DROP TABLE IF EXISTS `cpsystem`;

CREATE TABLE `cpsystem` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cpsystem` */

/*Table structure for table `create_route` */

DROP TABLE IF EXISTS `create_route`;

CREATE TABLE `create_route` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `route_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellular_companies_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `create_route_cellular_companies_id_foreign` (`cellular_companies_id`),
  CONSTRAINT `create_route_cellular_companies_id_foreign` FOREIGN KEY (`cellular_companies_id`) REFERENCES `cellular_companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `create_route` */

insert  into `create_route`(`id`,`route_name`,`cellular_companies_id`,`status`,`created_at`,`updated_at`) values 
(3,'abcd',4,'Active','2021-11-16 11:06:34','2021-11-18 14:17:17');

/*Table structure for table `currency_exchange_report` */

DROP TABLE IF EXISTS `currency_exchange_report`;

CREATE TABLE `currency_exchange_report` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `currncey_id` bigint(20) unsigned NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usa_dollar_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `currency_exchange_report_currncey_id_foreign` (`currncey_id`),
  CONSTRAINT `currency_exchange_report_currncey_id_foreign` FOREIGN KEY (`currncey_id`) REFERENCES `currncey` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `currency_exchange_report` */

insert  into `currency_exchange_report`(`id`,`currncey_id`,`date`,`currency_value`,`usa_dollar_value`,`status`,`created_at`,`updated_at`) values 
(2,2,'09/11/2021','1','0.25','Active','2021-11-09 14:00:10','2021-12-19 06:38:43'),
(3,4,'10/10/2021','1','1.2','Active','2021-12-19 06:38:55','2021-12-19 06:38:55');

/*Table structure for table `currncey` */

DROP TABLE IF EXISTS `currncey`;

CREATE TABLE `currncey` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `currncey_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countries_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `currncey_countries_id_foreign` (`countries_id`),
  CONSTRAINT `currncey_countries_id_foreign` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `currncey` */

insert  into `currncey`(`id`,`currncey_name`,`countries_id`,`status`,`created_at`,`updated_at`) values 
(2,'Sol',3,'Active','2021-11-09 13:54:58','2021-11-09 13:55:41'),
(4,'Euro',4,'Active','2021-12-19 06:23:22','2021-12-19 06:23:22');

/*Table structure for table `deposits` */

DROP TABLE IF EXISTS `deposits`;

CREATE TABLE `deposits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `deposits` */

/*Table structure for table `digital` */

DROP TABLE IF EXISTS `digital`;

CREATE TABLE `digital` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `trasnfer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `digital` */

insert  into `digital`(`id`,`trasnfer_name`,`account`,`status`,`created_at`,`updated_at`) values 
(1,'Transfer Name','Account','Active','2021-11-03 09:10:51','2021-11-03 09:13:54');

/*Table structure for table `financial_info` */

DROP TABLE IF EXISTS `financial_info`;

CREATE TABLE `financial_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `financial_info` */

insert  into `financial_info`(`id`,`account_name`,`payment_method`,`status`,`created_at`,`updated_at`) values 
(1,'Account Name','Dafa','Active','2021-11-03 09:06:15','2021-11-03 09:06:15');

/*Table structure for table `invoice` */

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `invoice` */

/*Table structure for table `line` */

DROP TABLE IF EXISTS `line`;

CREATE TABLE `line` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `line_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imei` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_info_id` bigint(20) unsigned NOT NULL,
  `line_info_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `line_cp_info_id_foreign` (`cp_info_id`),
  CONSTRAINT `line_cp_info_id_foreign` FOREIGN KEY (`cp_info_id`) REFERENCES `cp_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `line` */

/*Table structure for table `line_info` */

DROP TABLE IF EXISTS `line_info`;

CREATE TABLE `line_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `line_info` */

/*Table structure for table `mcp` */

DROP TABLE IF EXISTS `mcp`;

CREATE TABLE `mcp` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mcp_connect` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mcp` */

insert  into `mcp`(`id`,`name`,`user_name`,`mcp_connect`,`status`,`created_at`,`updated_at`) values 
(1,'mcp1','mcp1','dasa','Active','2021-10-27 07:28:43','2021-10-27 07:28:43'),
(2,'mcp2','mcp2','22dasa','Active','2021-10-27 07:28:43','2021-10-27 07:28:43');

/*Table structure for table `mcp_payment` */

DROP TABLE IF EXISTS `mcp_payment`;

CREATE TABLE `mcp_payment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mcp_id` bigint(20) unsigned NOT NULL,
  `mcp_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_mints` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gsm_mints` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mcp_payment_mcp_id_foreign` (`mcp_id`),
  CONSTRAINT `mcp_payment_mcp_id_foreign` FOREIGN KEY (`mcp_id`) REFERENCES `mcp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mcp_payment` */

insert  into `mcp_payment`(`id`,`mcp_id`,`mcp_name`,`time_range`,`whatsapp_mints`,`gsm_mints`,`create_payment`,`status`,`created_at`,`updated_at`) values 
(2,1,'mcp1','15','15','15','dasa15','Active','2021-11-01 11:04:40','2021-11-01 11:10:53');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2017_07_12_145959_create_permission_tables',1),
(4,'2021_04_12_065509_create_deposits_table',1),
(5,'2021_04_12_082446_create_wallets_table',1),
(6,'2021_05_31_083232_carrier_sale',1),
(7,'2021_05_31_083738_financial_info',1),
(8,'2021_05_31_084007_digital',1),
(9,'2021_05_31_084104_bank_info',1),
(10,'2021_05_31_084348_carrier_info',1),
(11,'2021_05_31_084452_buyerinfo',1),
(12,'2021_05_31_084626_techinfo',1),
(13,'2021_05_31_084740_accountantinfo',1),
(14,'2021_06_01_121545_cp_payment',1),
(15,'2021_06_01_122132_android',1),
(16,'2021_06_07_153334_admin',1),
(17,'2021_06_07_165857_create_cpsystem_table',1),
(18,'2021_06_07_170419_create_timezone_table',1),
(19,'2021_06_07_170845_create_countries_table',1),
(20,'2021_06_07_171205_create_currncey_table',1),
(21,'2021_06_07_171610_create_currency_exchange_report_table',1),
(22,'2021_06_07_172001_create_cellular_companies_table',1),
(23,'2021_06_07_172359_create_calling_phone_table',1),
(24,'2021_06_07_172654_create_calling_plane_costing_table',1),
(25,'2021_06_07_172943_create_create_route_table',1),
(26,'2021_06_07_173219_create_route_sale_price_table',1),
(27,'2021_06_07_173427_create_carrier_buy_rout_table',1),
(28,'2021_06_07_175105_create_time_rang_table',1),
(29,'2021_06_25_122257_cp_info',1),
(30,'2021_06_25_132403_mcp',1),
(31,'2021_06_28_143201_cp_line_route_info',1),
(32,'2021_06_28_151712_line',1),
(33,'2021_06_28_153026_line_info',1),
(34,'2021_06_28_234134_pc_unit',1),
(35,'2021_07_04_204220_whatsapp',1),
(36,'2021_07_04_214404_sim',1),
(37,'2021_07_05_120958_android_table',1),
(38,'2021_07_06_131525_payment',1),
(39,'2021_07_06_131814_invoice',1),
(40,'2021_07_07_160728_payment_method',1),
(41,'2021_07_10_215441_carrier_buy',1),
(42,'2021_07_10_225033_carrierinvoice',1),
(43,'2021_07_14_074711_carrier_cs_payment',1),
(44,'2021_07_14_092223_create_cp_payment',1),
(45,'2021_07_14_105120_mcp_payment',1),
(46,'2021_10_23_185458_add_column_calling_plan_name_to_calling_plane_costing_table',2),
(47,'2021_10_24_103933_add_column_currency_name_to_currency_exchange_report_table',3),
(48,'2021_10_26_192256_add_carrier_by_rout_name_to_carrier_invoice',4),
(49,'2021_11_01_165653_add_rout_name_to_route_sale_price',5),
(50,'2021_11_01_170646_add_route_name_to_route_sale_price',6),
(51,'2021_11_01_175302_add_carrier_buy_rout_name_to_carrier_cs_payments',7),
(52,'2021_11_01_184402_add_carrier_info_name_to_cp_payment',8),
(53,'2021_11_01_185819_add_mcp_name_to_mcp_payment',9),
(54,'2021_11_01_201147_add_invoice_name_to_payment',10),
(55,'2021_11_01_204139_add_names_to_carrier_buy_rout',11),
(56,'2021_11_03_180306_change_types_in_carrier_sales',12),
(57,'2021_11_04_201100_add_fields_column_to_cp_info',12),
(58,'2021_11_06_074809_traffic_type',13),
(59,'2021_11_06_082247_remove_name_column_from_traffic_type',14),
(60,'2021_11_06_084337_traffic_time_range',15);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\User',1),
(1,'App\\User',13),
(2,'App\\User',2),
(2,'App\\User',13),
(3,'App\\User',7),
(3,'App\\User',11),
(3,'App\\User',13),
(4,'App\\User',3),
(4,'App\\User',8),
(4,'App\\User',12),
(4,'App\\User',13),
(5,'App\\User',5),
(5,'App\\User',13),
(6,'App\\User',14);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `payment_to_cs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rang_dates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_id` bigint(20) unsigned NOT NULL,
  `invoice_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `payment` */

insert  into `payment`(`id`,`payment_to_cs`,`amount`,`number`,`rang_dates`,`invoice_id`,`invoice_name`,`status`,`created_at`,`updated_at`) values 
(1,'bcp1','14','15','1999-12-02',5,'Peru renny','Active','2021-11-01 12:01:18','2021-11-03 09:10:01'),
(2,'bcp2','15','15','2020-12-31',4,'Peru renny','Active','2021-11-01 12:14:36','2021-11-01 12:14:36');

/*Table structure for table `payment_method` */

DROP TABLE IF EXISTS `payment_method`;

CREATE TABLE `payment_method` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `payment_method` */

insert  into `payment_method`(`id`,`name`,`status`,`created_at`,`updated_at`) values 
(1,'Payment Method','Active','2021-11-03 08:51:18','2021-11-03 08:51:18');

/*Table structure for table `pc_unit` */

DROP TABLE IF EXISTS `pc_unit`;

CREATE TABLE `pc_unit` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `time_up` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_info_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pc_unit_cp_info_id_foreign` (`cp_info_id`),
  CONSTRAINT `pc_unit_cp_info_id_foreign` FOREIGN KEY (`cp_info_id`) REFERENCES `cp_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pc_unit` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'admins_manage','web','2021-07-13 22:55:37','2021-07-13 22:55:37'),
(2,'carrier_manage','web','2021-07-13 22:55:37','2021-07-13 22:55:37'),
(3,'mcp_manage','web','2021-07-13 22:55:37','2021-07-13 22:55:37'),
(4,'cp_manage','web','2021-07-13 22:55:37','2021-07-13 22:55:37'),
(5,'carriersale_manage','web','2021-07-13 22:55:37','2021-07-13 22:55:37');

/*Table structure for table `referal_payments` */

DROP TABLE IF EXISTS `referal_payments`;

CREATE TABLE `referal_payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `referal_payments` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values 
(1,1),
(2,2),
(3,4),
(4,3),
(5,5);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'administrator','web','2021-07-13 22:55:37','2021-07-13 22:55:37'),
(2,'carrier','web','2021-07-13 22:55:38','2021-07-13 22:55:38'),
(3,'cp','web','2021-07-13 22:55:38','2021-07-13 22:55:38'),
(4,'mcp','web','2021-07-13 22:55:38','2021-07-13 22:55:38'),
(5,'carriersale','web','2021-07-13 22:55:38','2021-07-13 22:55:38'),
(6,'dealer','web','2021-12-18 19:17:55','2021-12-18 19:17:59');

/*Table structure for table `route_sale_price` */

DROP TABLE IF EXISTS `route_sale_price`;

CREATE TABLE `route_sale_price` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `create_route_id` bigint(20) unsigned NOT NULL,
  `sale_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `route_sale_price_create_route_id_foreign` (`create_route_id`),
  CONSTRAINT `route_sale_price_create_route_id_foreign` FOREIGN KEY (`create_route_id`) REFERENCES `create_route` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `route_sale_price` */

insert  into `route_sale_price`(`id`,`create_route_id`,`sale_price`,`status`,`created_at`,`updated_at`) values 
(3,3,'1.1','Active','2021-12-19 07:10:50','2021-12-19 07:10:50'),
(4,3,'1.3','Active','2021-12-19 07:21:44','2021-12-19 07:25:00'),
(5,3,'1.2','Inactive','2021-12-19 07:22:18','2021-12-19 07:22:18');

/*Table structure for table `sim` */

DROP TABLE IF EXISTS `sim`;

CREATE TABLE `sim` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imei` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calling_plane_costing_id` bigint(20) unsigned NOT NULL,
  `cellular_companies_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sim_calling_plane_costing_id_foreign` (`calling_plane_costing_id`),
  KEY `sim_cellular_companies_id_foreign` (`cellular_companies_id`),
  CONSTRAINT `sim_calling_plane_costing_id_foreign` FOREIGN KEY (`calling_plane_costing_id`) REFERENCES `calling_plane_costing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sim_cellular_companies_id_foreign` FOREIGN KEY (`cellular_companies_id`) REFERENCES `cellular_companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sim` */

/*Table structure for table `tech_info` */

DROP TABLE IF EXISTS `tech_info`;

CREATE TABLE `tech_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tech_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_cell_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tech_info` */

insert  into `tech_info`(`id`,`tech_first_name`,`tech_middle_name`,`tech_last_name`,`tech_cell_number`,`tech_email`,`tech_skype`,`tech_whatsapp`,`status`,`created_at`,`updated_at`) values 
(1,'techtest2','techtest2','techted2','922066324','tech@gmail.com','tech2','922066324','Active','2021-11-01 11:43:33','2021-11-01 11:49:08');

/*Table structure for table `time_rang` */

DROP TABLE IF EXISTS `time_rang`;

CREATE TABLE `time_rang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `from_time_stamp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_time_stamp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `time_rang` */

insert  into `time_rang`(`id`,`from_time_stamp`,`to_time_stamp`,`status`,`created_at`,`updated_at`) values 
(1,'14:00','02:00','Active','2021-10-26 10:41:18','2021-12-19 08:25:26'),
(2,'01:00','01:00','Active','2021-10-26 10:48:16','2021-10-26 10:48:16'),
(3,'20:08','20:08','Active','2021-10-26 11:08:31','2021-10-26 11:08:31'),
(4,'03:11','04:08','Active','2021-12-19 08:08:18','2021-12-19 08:08:18'),
(5,'14:00','02:03','Active','2021-12-19 08:23:48','2021-12-19 08:25:36');

/*Table structure for table `timezone` */

DROP TABLE IF EXISTS `timezone`;

CREATE TABLE `timezone` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `timezone_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actual` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `timezone` */

insert  into `timezone`(`id`,`timezone_name`,`actual`,`status`,`created_at`,`updated_at`) values 
(5,'Peru time','11:54','Inactive','2021-11-09 13:53:34','2021-11-18 14:13:50'),
(6,'Paris time','12:32','Active','2021-12-19 05:52:51','2021-12-19 05:56:57'),
(7,'Madrid','19:45','Active','2021-12-19 05:57:24','2021-12-19 05:57:40');

/*Table structure for table `traffic` */

DROP TABLE IF EXISTS `traffic`;

CREATE TABLE `traffic` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `route_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_sale_price_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_attempts_per_hour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_attempts_complete` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `average_call_duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `traffic` */

/*Table structure for table `traffic_time_range` */

DROP TABLE IF EXISTS `traffic_time_range`;

CREATE TABLE `traffic_time_range` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `traffic_name_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `traffic_type_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `traffic_time_range_traffic_type_id_foreign` (`traffic_type_id`),
  CONSTRAINT `traffic_time_range_traffic_type_id_foreign` FOREIGN KEY (`traffic_type_id`) REFERENCES `traffic_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `traffic_time_range` */

insert  into `traffic_time_range`(`id`,`traffic_name_range`,`traffic_type_id`,`status`,`created_at`,`updated_at`) values 
(3,'12',2,'Active','2021-11-07 03:53:28','2021-11-07 03:53:28');

/*Table structure for table `traffic_type` */

DROP TABLE IF EXISTS `traffic_type`;

CREATE TABLE `traffic_type` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `traffic_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `traffic_type` */

insert  into `traffic_type`(`id`,`traffic_name`,`status`,`created_at`,`updated_at`) values 
(2,'Cp','Active','2021-11-07 03:17:01','2021-11-07 03:17:01');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `refer_links` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer_link_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`country_name`,`remember_token`,`is_active`,`status`,`refer_links`,`referer_link_id`,`created_at`,`updated_at`) values 
(1,'Admin','admin@admin.com','$2y$10$8mmKZEgUH16dZ5.hEoL08.v1cawOotDfdGhNJLLoPlSGbB7AUryPy',NULL,NULL,0,1,'KHbP1C9yhd5p9cjnkMgH6CoUuGV448w6ol33AjXRPZmbyztiib3DsFL5xqiQ7AN5gIqrmy',NULL,'2021-07-13 22:55:39','2021-11-16 09:53:09'),
(2,'Carrier','carrier@carrier.com','$2y$10$sfdqZl1OkqFVhWbb88a1teDm6Y8YfudUJA/E7BrZqCH4nNBJxblT6',NULL,NULL,0,1,'LSdr6GIU8D1EVpvoELGeXhsICsKnzfOqXJbfzJRb1n3mUr7frDlCzhU9BxR4SiTBLKS70x',NULL,'2021-07-13 22:55:39','2021-11-16 11:39:01'),
(3,'aristid','aristid@cellularpartner.com','$2y$10$NAwsEb/mjsIAdvEr3lfIxeHrpkfLaVbySffK2erc7uzL9VNxgIJ3i',NULL,NULL,0,1,'DwitYQmDMDZNXVqGQqOHjYMeDKWrURrMGO3Zy5PJ3czt7f1gqpIL53kJ8znLkviY6WRb26',NULL,'2021-07-13 22:55:39','2021-11-17 11:15:50'),
(5,'CarrierSale','carriersale@cellularpartner.com','$2y$10$khVSHQ1V5ldp.hXA4GD7Yu3Od99by6UTR8EJaX6NXASw/cqu0d13u',NULL,NULL,0,1,'ZHnGgeTeG4YSACXfgx54RvcZtDbcXHUsNAJm6RgoTTsRNKef5HN5MQ9tLWQdBb6AmyFwNK',NULL,'2021-07-13 22:55:40','2021-11-16 11:47:32'),
(7,'cpcredentials','cpcredentials@cp.com','$2y$10$O2JowwwVK4Fq579H/DVibO1TiNep6i8NmqmawA4TrrnR.qRJ79f6.',NULL,NULL,0,1,'dMwuqPBiBIcUB1kl05mXXN97hHOsiApzFRe1QonufVHd924JhLkSJiNbEADxXcMuQjRUXi',' ','2021-10-24 04:46:17','2021-11-17 11:21:06'),
(8,'renny','rennyjurkovich@gmail.com','$2y$10$t2xMWgF2dAXjjYX6xpcfNOXpjhBGGYPQjY8gyDlQe5/x/2vMvdYza',NULL,NULL,0,0,'8AW6YnmvDYDyOO98ftEZPEBS9FFZmRXSjQFyM7QQuBEUQ69QkJHTQhzLgGfcfKg2OzUgBN',' ','2021-11-09 13:36:24','2021-11-09 13:36:24'),
(11,'test','test@test.com','$2y$10$OvDSQifo.td99ugqZ0XrTea8.0R5J5h1w0buwyfKtfV19bHIlVRZ.',NULL,NULL,0,0,NULL,NULL,'2021-11-16 11:08:34','2021-11-16 11:08:34'),
(12,'herry','herr@gmail.com','$2y$10$5.mA6bUmNKhxhPQSlnMFi.XlnhyS2KU4Pk.h85QxWP3vCSYn/GnOe',NULL,NULL,0,0,NULL,NULL,'2021-11-18 14:12:38','2021-11-18 14:12:38'),
(13,'Rabiya','Rabiyaanam45678@gmail.com','$2y$10$S3zwgv2SpC6.XUsXKZjGjemLO4Avxs02tSBJAG1.ClNfaNckM7/f6',NULL,NULL,0,0,'ZEzgEbjwnbd9m57tVdy39LbJW5OK0XdHi2VuL9lH6aupuTsio9Ft03Em4NF3NSLKrrSdJY',' ','2021-11-18 18:08:57','2021-11-18 18:08:57'),
(14,'Elon Musk','user@email.com','$2y$10$91OzN7ux//ytEZDfhMJbZuE/Inxp6q/7SgtsXAYtXeQ/ZabUDJAy6',NULL,NULL,0,0,'7mIUHoqSShZHIm96daWWxuYV6RD2qbpTL0gab5eCGBiXT2H42OvRu0AXCkIWTa1AHUJ7Cy',' ','2021-12-19 03:13:04','2021-12-19 09:25:09');

/*Table structure for table `wallets` */

DROP TABLE IF EXISTS `wallets`;

CREATE TABLE `wallets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invested_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `wallets` */

/*Table structure for table `whatsapp` */

DROP TABLE IF EXISTS `whatsapp`;

CREATE TABLE `whatsapp` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `whatsapp_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `whatsapp` */

insert  into `whatsapp`(`id`,`whatsapp_number`,`phone_number`,`status`,`created_at`,`updated_at`) values 
(1,'1234567890','1234567890',NULL,'2021-11-03 07:42:48','2021-11-12 03:39:28');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
