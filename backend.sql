-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table backend_seaba_db.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.categories: ~3 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Parimary', '2017-07-23 14:56:52', '2017-07-23 14:56:52'),
	(2, 'Secondary', '2017-07-23 14:56:53', '2017-07-23 14:56:53'),
	(3, 'Others', '2017-07-23 14:56:53', '2017-07-23 14:56:53');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ticket_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_ticket_id_foreign` (`ticket_id`),
  CONSTRAINT `comments_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.comments: ~2 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `ticket_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '<p>kdsklds</p>', '2017-07-23 15:10:34', '2017-07-23 15:10:34'),
	(2, 1, 1, '<p>kkakla</p>', '2017-07-23 15:11:24', '2017-07-23 15:11:24');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.migrations: ~9 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2016_08_24_080521_entrust_setup_tables', 1),
	('2016_08_25_194238_create_tickets_table', 1),
	('2016_08_25_194643_create_categories_table', 1),
	('2016_08_25_194754_create_priorities_table', 1),
	('2016_08_25_194805_create_statuses_table', 1),
	('2016_08_25_212830_create_comments_table', 1),
	('2016_08_30_173643_create_settings_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.permissions: ~9 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'manage-roles', 'Manage Roles', 'Permission for Managing Roles', '2017-07-23 14:56:49', '2017-07-23 14:56:49'),
	(2, 'manage-tickets', 'Manage Tickets', 'Permission for Managing Tickets', '2017-07-23 14:56:49', '2017-07-23 14:56:49'),
	(3, 'manage-users', 'Manage Users', 'Permission for Managing Users', '2017-07-23 14:56:49', '2017-07-23 14:56:49'),
	(4, 'view-backend', 'View Backend', 'Permission for Viewing Backend', '2017-07-23 14:56:49', '2017-07-23 14:56:49'),
	(5, 'manage-permissions', 'Manage Permissions', 'Permission for Managing Permissions', '2017-07-23 14:56:49', '2017-07-23 14:56:49'),
	(6, 'manage-settings', 'Manage Settings', 'Permission for Managing Settings', '2017-07-23 14:56:49', '2017-07-23 14:56:49'),
	(7, 'students', 'Students view', 'Permission to view students portal', '2017-07-23 14:56:49', '2017-07-23 14:56:49'),
	(8, 'employees', 'Employees view', 'Permission to view Employees portal', '2017-07-23 14:56:49', '2017-07-23 14:56:49'),
	(9, 'parents', 'Parents view', 'Permission to view parents portal', '2017-07-23 14:56:49', '2017-07-23 14:56:49');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.permission_role: ~11 rows (approximately)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(2, 2),
	(3, 1),
	(3, 3),
	(4, 1),
	(4, 4),
	(5, 1),
	(5, 5),
	(6, 1),
	(6, 6);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.priorities
CREATE TABLE IF NOT EXISTS `priorities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.priorities: ~3 rows (approximately)
/*!40000 ALTER TABLE `priorities` DISABLE KEYS */;
INSERT INTO `priorities` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Critical', '2017-07-23 14:56:53', '2017-07-23 14:56:53'),
	(2, 'Normal', '2017-07-23 14:56:53', '2017-07-23 14:56:53'),
	(3, 'Low', '2017-07-23 14:56:53', '2017-07-23 14:56:53');
/*!40000 ALTER TABLE `priorities` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.roles: ~6 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'Admin Role', 'This is the default admin role', '2017-07-23 14:56:50', '2017-07-23 14:56:50'),
	(2, 'Moderator', 'Moderator Role', 'This is the default Moderator Role', '2017-07-23 14:56:50', '2017-07-23 14:56:50'),
	(3, 'Agent', 'Agent Role', 'This is the default Agent Role', '2017-07-23 14:56:50', '2017-07-23 14:56:50'),
	(4, 'Student', 'Student Role', 'This is the default Student Role', '2017-07-23 14:56:50', '2017-07-23 14:56:50'),
	(5, 'Employee', 'Employee Role', 'This is the default Employee Role', '2017-07-23 14:56:50', '2017-07-23 14:56:50'),
	(6, 'Parent', 'Parent Role', 'This is the default Parent Role', '2017-07-23 14:56:50', '2017-07-23 14:56:50');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.role_user: ~6 rows (approximately)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
	(1, 1),
	(2, 2),
	(3, 3),
	(4, 4),
	(5, 5),
	(6, 6);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.settings: ~1 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `site_name`, `site_url`, `email_from`, `email_to`, `created_at`, `updated_at`) VALUES
	(1, 'Seaba College', 'http://authemanict.com', 'authemany2k@outlook.com', 'authemany2k@gmail.com', '2016-08-29 13:42:19', '2016-08-29 13:42:19');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.statuses
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.statuses: ~4 rows (approximately)
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Open', '2017-07-23 14:56:53', '2017-07-23 14:56:53'),
	(2, 'In Progress', '2017-07-23 14:56:53', '2017-07-23 14:56:53'),
	(3, 'Closed', '2017-07-23 14:56:53', '2017-07-23 14:56:53'),
	(4, 'Reopened', '2017-07-23 14:56:53', '2017-07-23 14:56:53');
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.tickets
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `ticket_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priority_id` int(10) unsigned NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tickets_ticket_id_unique` (`ticket_id`),
  KEY `tickets_user_id_foreign` (`user_id`),
  CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.tickets: ~1 rows (approximately)
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` (`id`, `user_id`, `category_id`, `ticket_id`, `title`, `priority_id`, `message`, `status_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'TD1XR7SZH1', '2nd title', 1, '<p>kkws</p>', 1, '2017-07-23 15:10:25', '2017-07-23 15:10:25');
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;

-- Dumping structure for table backend_seaba_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth_token_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_provider_id_unique` (`provider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table backend_seaba_db.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `gender`, `location`, `website`, `provider`, `oauth_token`, `oauth_token_secret`, `provider_id`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$uf.SEY6ecJ5vNi4IFHDt/e/lQcsVIxiPNfIkCFQtL4.h5QJgwVMiy', 'M', 'Lagos,Nigeria', 'http://example.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016-08-29 13:42:19', '2016-08-29 13:42:19'),
	(2, 'Ajiga', 'ajiga', 'ajiga@gmail.com', '$2y$10$ub8KUsrXeEZQpmae8H3/Ne1qOAFf38Tc.ykcUxjbpWYANvR9yNOpK', 'F', 'Oslo,Norway', 'http://example.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016-08-29 13:42:19', '2016-08-29 13:42:19'),
	(3, 'Student', 'student', 'student@gmail.com', '$2y$10$xv0TUHp1PqKuvF4xlMxACOJaZSyJJRc0pvgh0pPV3nXbWlf2r5TQS', 'F', 'Oslo,Norway', 'http://example.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016-08-29 13:42:19', '2016-08-29 13:42:19'),
	(4, 'Employee', 'employee', 'employee@gmail.com', '$2y$10$M/gS8WywVs9RJYsTX7BBGOzGvMFr2hODb2cdO6YAfpl6FoFSrIlvi', 'F', 'New York,USA', 'http://example.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016-08-29 13:42:19', '2016-08-29 13:42:19'),
	(5, 'Teacher', 'teacher', 'teacher@gmail.com', '$2y$10$3qjjVwA1zfgLjL/ulTuu0.0mEmsx6Q6fOO5V7/Qe5B95ifqDJCJuC', 'F', 'Oslo,Norway', 'http://example.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016-08-29 13:42:19', '2016-08-29 13:42:19'),
	(6, 'Parent', 'parent', 'parent@gmail.com', '$2y$10$bIxj9aJPbaG/fKbLYJ.Kqu34apz1d637D8WcyKmsvN1Pi4EfxjBzi', 'F', 'Oslo,Norway', 'http://example.com', NULL, NULL, NULL, NULL, NULL, NULL, '2016-08-29 13:42:19', '2016-08-29 13:42:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
