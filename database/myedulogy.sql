-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for edulogy
CREATE DATABASE IF NOT EXISTS `edulogy` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `edulogy`;

-- Dumping structure for table edulogy.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table edulogy.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table edulogy.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Only First name',
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `signup_token` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique',
  `profilePic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=guest,1=admin,2=user',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=pending, 1=active, 2=inactive, 3=rejected, 4=deleted',
  `status_set_by` int(11) NOT NULL DEFAULT '0' COMMENT 'user id',
  `reset_code` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `device_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`userName`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table edulogy.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `signup_token`, `userName`, `profilePic`, `role`, `status`, `status_set_by`, `reset_code`, `device_id`, `login_token`) VALUES
	(1, 'Admin', 'Admin', 'admin@myedulogy.com', '$2y$10$mmgcEuwA6w4NUChZF52VjueNwbHbwfFSOmWKQZ8gweF1gliTAnZt6', NULL, '2017-11-05 14:12:54', NULL, NULL, 'admin', NULL, 1, 1, 0, NULL, NULL, NULL),
	(2, 'Dinanath', 'Thakur', 'kumardina@gmail.com', '$2y$10$3vvrqi1DwT5JEiGiXHn1luB/m/kVV.ehFbdaD2NVVGueGuKpvuyf6', NULL, '2017-11-05 14:14:04', NULL, NULL, 'kumardina', NULL, 2, 1, 0, NULL, NULL, NULL),
	(3, 'Dinanath', 'Thakur', 'kumardina023@gmail.com', '$2y$10$Ym1Cs9WnKlFLpX.DfRcS7OUbNcJqMIKk9x7AvxEYQHCSaDQ3jxerW', NULL, '2017-11-05 10:58:31', '2017-11-05 10:58:31', NULL, 'dina', '/assets/images/avatar-placeholder.jpg', 2, 0, 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table edulogy.usersmeta
CREATE TABLE IF NOT EXISTS `usersmeta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `addressline1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressline2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` int(11) NOT NULL COMMENT 'country id',
  `zipcode` varchar(16) COLLATE utf8_unicode_ci NOT NULL COMMENT 'international format [might be used whie checkout and in shipping api]]',
  `phone` varchar(16) COLLATE utf8_unicode_ci NOT NULL COMMENT 'international format',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table edulogy.usersmeta: ~0 rows (approximately)
/*!40000 ALTER TABLE `usersmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `usersmeta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
