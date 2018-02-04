-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for edulogy
CREATE DATABASE IF NOT EXISTS `edulogy` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `edulogy`;

-- Dumping structure for table edulogy.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `priority` tinyint(2) NOT NULL DEFAULT '0',
  `status` char(1) NOT NULL DEFAULT 'A',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table edulogy.category: ~10 rows (approximately)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `category`, `priority`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Project Management', 1, 'A', '2018-02-03 15:28:03', '2018-02-03 15:28:04'),
	(2, 'IT Service & Architecture', 2, 'A', '2018-02-03 15:29:42', '2018-02-03 15:29:43'),
	(3, 'Big Data and Analytics', 3, 'A', '2018-02-03 15:30:11', '2018-02-03 15:30:11'),
	(4, 'Cyber Security', 4, 'A', '2018-02-03 15:30:30', '2018-02-03 15:30:33'),
	(5, 'Digital Marketing', 5, 'A', '2018-02-03 15:30:51', '2018-02-03 15:30:51'),
	(6, 'Agile and Scrum', 6, 'A', '2018-02-03 15:31:16', '2018-02-03 15:31:16'),
	(7, 'Cloud Computing', 7, 'A', '2018-02-03 15:31:32', '2018-02-03 15:31:32'),
	(8, 'Quality Management', 8, 'A', '2018-02-03 15:31:51', '2018-02-03 15:31:52'),
	(9, 'Business Productivity Tools', 9, 'A', '2018-02-03 15:32:07', '2018-02-03 15:32:08'),
	(10, 'test', 0, 'A', '2018-02-04 04:41:20', '2018-02-04 04:41:20'),
	(12, 'testing', 0, 'A', '2018-02-04 04:44:55', '2018-02-04 04:44:55');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table edulogy.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` int(11) unsigned NOT NULL DEFAULT '0',
  `courseName` varchar(255) NOT NULL,
  `shortTitle` varchar(255) DEFAULT NULL,
  `longTitle` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `mainDescription` text,
  `otherDescription` text,
  `shortTitleVisibility` char(1) NOT NULL DEFAULT 'Y',
  `ratings` float(5,2) DEFAULT '0.00',
  `priority` tinyint(2) DEFAULT '0',
  `userEnrolled` int(11) NOT NULL DEFAULT '0',
  `status` char(1) NOT NULL DEFAULT 'A',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_courses_category` (`category`),
  CONSTRAINT `FK_courses_category` FOREIGN KEY (`category`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table edulogy.courses: ~1 rows (approximately)
DELETE FROM `courses`;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` (`id`, `category`, `courseName`, `shortTitle`, `longTitle`, `title`, `mainDescription`, `otherDescription`, `shortTitleVisibility`, `ratings`, `priority`, `userEnrolled`, `status`, `created_at`, `updated_at`, `img`) VALUES
	(1, 1, ' PMP®  Certification', '', '', '', 'The PMP certification is the global gold standard for project management professionals. Skilled and certified practitioners of project management are in high demand by employers in all industries.This PMP course online is designed to teach you the full scope of project management processes, and help you pass the PMP certification exam on your first attempt. Join the community of more than 500,000 PMPs in 185 countries and get PMP certified today!', NULL, 'Y', 0.00, 0, 0, 'A', '2018-02-03 15:37:07', '2018-02-03 17:10:06', '/assets/images/courses/pmp.jpg');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;

-- Dumping structure for table edulogy.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table edulogy.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table edulogy.sub_courses
CREATE TABLE IF NOT EXISTS `sub_courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `courseID` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `type` char(1) NOT NULL DEFAULT 'C',
  `price` float(10,2) NOT NULL DEFAULT '0.00',
  `offerType` char(1) DEFAULT NULL,
  `offerPrice` float(10,2) NOT NULL DEFAULT '0.00',
  `offerExpireOn` datetime DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_sub_courses_courses` (`courseID`),
  CONSTRAINT `FK_sub_courses_courses` FOREIGN KEY (`courseID`) REFERENCES `courses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table edulogy.sub_courses: ~0 rows (approximately)
DELETE FROM `sub_courses`;
/*!40000 ALTER TABLE `sub_courses` DISABLE KEYS */;
INSERT INTO `sub_courses` (`id`, `courseID`, `name`, `startDate`, `endDate`, `startTime`, `endTime`, `type`, `price`, `offerType`, `offerPrice`, `offerExpireOn`, `status`, `created_at`, `updated_at`) VALUES
	(2, 1, '', '2018-02-03 21:19:12', '2018-03-03 21:19:13', '21:19:17', '22:20:18', 'C', 1799.00, 'F', 150.00, '2019-02-03 21:19:31', 'A', '2018-02-03 21:19:36', '2018-02-03 23:15:53');
/*!40000 ALTER TABLE `sub_courses` ENABLE KEYS */;

-- Dumping structure for table edulogy.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Only First name',
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `signup_token` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table edulogy.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstName`, `lastName`, `userName`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `signup_token`, `profilePic`, `role`, `status`, `status_set_by`, `reset_code`, `device_id`, `login_token`) VALUES
	(5, 'Dinanath', 'Thakur', 'kumardina', 'kumardina023@gmail.com', '$2y$10$ld/lyfxE/fHIZdfoHqkzsu514lBl3xq/cuLJmJQIHKiz7AE8/jfzS', 'w7aSQ7KB7DvcbaKjetEShthSFprgu43WmHDf3w866EdCG8x7UVssbgQs3467', '2018-02-03 08:09:58', '2018-02-03 08:09:58', NULL, '/assets/images/avatar-placeholder.jpg', 2, 1, 0, NULL, NULL, NULL),
	(7, 'Edulogy', 'Admin', 'admin', 'admin@myedulogy.com', '$2y$10$IwrfPrng8dRVkySM49ZXSO7sptiurSqU.U7MVeo3hjz9DeggAVyAC', NULL, '2018-02-03 20:48:33', '2018-02-03 20:48:33', NULL, '/assets/images/avatar-placeholder.jpg', 1, 1, 0, NULL, NULL, NULL);
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
DELETE FROM `usersmeta`;
/*!40000 ALTER TABLE `usersmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `usersmeta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
