-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `parent_code` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `category` (`id`, `name`, `code`, `parent_id`, `parent_code`, `created_at`, `updated_at`) VALUES
(1,	'Ngành thực phẩm',	'nganh_thuc_pham',	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'địa chỉ toạ độ trên map',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2017_10_12_000000_create_permissions_table',	1),
(2,	'2017_10_12_000000_create_users_table',	1),
(3,	'2017_10_12_000002_create_roles_table',	1),
(4,	'2017_10_12_100000_create_password_resets_table',	1),
(5,	'2017_11_12_000000_create_menus_table',	1),
(6,	'2018_03_31_221841_create_sessions_table',	1),
(7,	'2018_03_31_224511_create_cache_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_permission_unique` (`permission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `permissions` (`id`, `permission`, `code`, `description`, `created_at`, `updated_at`) VALUES
(1,	'1|GET|api/user',	'',	'',	NULL,	NULL),
(2,	'1|GET|/',	'',	'',	NULL,	NULL),
(3,	'1|GET|config/user/index',	'',	'',	NULL,	NULL),
(4,	'1|GET|config/user/create',	'',	'',	NULL,	NULL),
(5,	'1|GET|config/user/edit/{id}',	'',	'',	NULL,	NULL),
(6,	'1|POST|config/user/store',	'',	'',	NULL,	NULL),
(7,	'1|GET|config/user/read',	'',	'',	NULL,	NULL),
(8,	'1|POST|config/user/update',	'',	'',	NULL,	NULL),
(9,	'1|GET|config/user/search',	'',	'',	NULL,	NULL),
(10,	'1|GET|config/user/edit-user-role/{id}',	'',	'',	NULL,	NULL),
(11,	'1|POST|config/user/update-edit-user-role',	'',	'',	NULL,	NULL),
(12,	'1|GET|config/role/index',	'',	'',	NULL,	NULL),
(13,	'1|GET|config/role/search',	'',	'',	NULL,	NULL),
(14,	'1|GET|config/role/create',	'',	'',	NULL,	NULL),
(15,	'1|GET|config/role/edit/{id}',	'',	'',	NULL,	NULL),
(16,	'1|POST|config/role/store',	'',	'',	NULL,	NULL),
(17,	'1|GET|config/role/read',	'',	'',	NULL,	NULL),
(18,	'1|POST|config/role/update',	'',	'',	NULL,	NULL),
(19,	'1|GET|config/role/permission',	'',	'',	NULL,	NULL),
(20,	'1|POST|config/permission/store',	'',	'',	NULL,	NULL),
(21,	'1|GET|login',	'',	'',	NULL,	NULL),
(22,	'1|POST|login',	'',	'',	NULL,	NULL),
(23,	'1|GET|logout',	'',	'',	NULL,	NULL),
(24,	'1|GET|register',	'',	'',	NULL,	NULL),
(25,	'1|POST|register',	'',	'',	NULL,	NULL),
(26,	'1|GET|password/reset',	'',	'',	NULL,	NULL),
(27,	'1|POST|password/email',	'',	'',	NULL,	NULL),
(28,	'1|GET|password/reset/{token}',	'',	'',	NULL,	NULL),
(29,	'1|POST|password/reset',	'',	'',	NULL,	NULL),
(30,	'1|GET|login/facebook',	'',	'',	NULL,	NULL),
(31,	'1|GET|login/facebook/callback',	'',	'',	NULL,	NULL),
(32,	'1|GET|home',	'',	'',	NULL,	NULL),
(33,	'1|GET|view_log_api',	'',	'',	NULL,	NULL),
(34,	'1|GET|clear_log_api',	'',	'',	NULL,	NULL),
(35,	'1|GET|view_log_framework',	'',	'',	NULL,	NULL),
(36,	'1|GET|clear_log_framework',	'',	'',	NULL,	NULL),
(37,	'1|GET|view_log_debug',	'',	'',	NULL,	NULL),
(38,	'1|GET|clear_log_debug',	'',	'',	NULL,	NULL);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'admin',	'2019-04-15 09:59:33',	'2019-04-15 09:59:33'),
(2,	'Khach',	'khach',	'2019-04-15 09:59:33',	'2019-04-15 09:59:33'),
(14,	'Doanh Nghiệp',	'doanh_nghiep',	'2019-04-18 05:37:28',	'2019-04-18 05:37:28'),
(15,	'Nhà phân phối',	'nha_phan_phoi',	'2019-04-18 05:37:40',	'2019-04-18 05:37:40'),
(16,	'Giám Sát',	'giam_sat',	'2019-04-18 05:37:53',	'2019-04-18 05:37:53'),
(17,	'Nhân Viên Kinh Doanh',	'nhan_vien_kinh_doanh',	'2019-04-18 05:38:07',	'2019-04-18 05:38:07');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tests`;
CREATE TABLE `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_token_expire_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_account_unique` (`account`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `role_id`, `account`, `email`, `password`, `facebook_id`, `facebook_token`, `facebook_token_expire_time`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'TA THANH LONG',	'1',	'thanhlong29689@gmail.com',	'thanhlong29689@gmail.com',	'$2y$10$X7oKnowdDqADxxpdxEW.buSXuypvNwUCL9bNvwAQRn/.CgkDXjj.2',	NULL,	NULL,	NULL,	NULL,	'NJS1QMiQcXTsBiyleiK6UWqtm3jWoABhsHDFQMbu0mXCiVZ6GDpU8wdwrNQq',	'2019-04-15 10:05:20',	'2019-04-15 10:05:20');

DROP TABLE IF EXISTS `user_product`;
CREATE TABLE `user_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `qty` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `user_product_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `zones`;
CREATE TABLE `zones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- 2019-04-20 04:54:03
