-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2020 at 07:30 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itsupport_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `businessus`
--

CREATE TABLE `businessus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `businessus`
--

INSERT INTO `businessus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Refinery', '2017-07-28 11:39:28', '2017-07-28 11:39:29'),
(6, 'Project', '2017-10-28 09:50:27', '2017-10-28 11:23:45'),
(7, 'Fertilizer', '2017-10-28 11:23:29', '2017-10-28 11:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Network', '2017-07-28 10:37:13', '2017-07-28 10:37:13'),
(2, 'Internet', '2017-07-28 10:37:13', '2017-07-28 10:37:13'),
(3, 'Printers', '2017-07-28 10:37:13', '2017-07-28 10:37:13'),
(4, 'Operating System', '2017-07-28 10:37:14', '2017-07-28 10:37:14'),
(5, 'Software', '2017-07-28 10:37:14', '2017-07-28 10:37:14'),
(6, 'Hardware', '2017-07-28 10:37:14', '2017-07-28 10:37:14'),
(11, 'projector', '2017-10-27 15:10:27', '2017-10-27 15:10:27'),
(12, 'Laptop', '2017-10-27 15:11:06', '2017-10-27 15:11:06'),
(13, 'Keyboard', '2017-10-27 15:36:18', '2017-10-27 15:36:18');

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_assign`
-- (See below for the actual view)
--
CREATE TABLE `chart_assign` (
`fullname` varchar(255)
,`count_assigned` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_dept`
-- (See below for the actual view)
--
CREATE TABLE `chart_dept` (
`name` varchar(255)
,`issue_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_location`
-- (See below for the actual view)
--
CREATE TABLE `chart_location` (
`name` varchar(255)
,`request_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_resolve`
-- (See below for the actual view)
--
CREATE TABLE `chart_resolve` (
`name` varchar(255)
,`count_resolved` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_support_admin_pending`
-- (See below for the actual view)
--
CREATE TABLE `chart_support_admin_pending` (
`fullname` varchar(255)
,`pending_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_support_admin_resolve`
-- (See below for the actual view)
--
CREATE TABLE `chart_support_admin_resolve` (
`fullname` varchar(255)
,`resolved_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `ticket_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 8, '<p>why is my issue not resolve yet ?<br></p>', '2017-07-29 09:37:16', '2017-07-29 09:37:16'),
(2, 3, 1, 'we will get back to you in a moment please kindly exercise patient with us your issue will be resolve<br><p><br></p>', '2017-07-29 09:41:18', '2017-07-29 09:41:18'),
(3, 8, 1, '<p>your issue has been resolved<br></p>', '2017-08-01 15:10:28', '2017-08-01 15:10:28'),
(4, 8, 9, 'thank you for quick response<br><p><br></p>', '2017-08-01 15:11:33', '2017-08-01 15:11:33'),
(5, 16, 8, 'my issue has not been resolve yet<br><p><br></p>', '2017-09-28 08:30:21', '2017-09-28 08:30:21'),
(6, 16, 1, '<p>we wil resolve ur issue soon kindly be patience with us<br></p>', '2017-09-28 08:32:10', '2017-09-28 08:32:10'),
(7, 5, 8, 'i raised this ticket since 31-7-2017 till now it hasn\'t been resolve what happened<br><p><br></p>', '2017-10-28 07:37:18', '2017-10-28 07:37:18'),
(8, 5, 1, 'pls be patient the issue you raised is a technical one that is beyond the effort of&nbsp; support team, the issue has been escalated to our technical team kindly bear with us, we will get back to as soon as it been resolve. thank you for ur patient<br><p><br></p>', '2017-11-09 10:40:51', '2017-11-09 10:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin/Hr', '2017-10-30 11:27:20', '2017-10-30 11:27:20'),
(3, 'Civil', '2017-10-30 11:31:15', '2017-10-30 11:31:15'),
(4, 'Mechanical', '2017-10-30 11:31:33', '2017-10-30 11:31:33'),
(5, 'Electrical', '2017-10-30 11:31:51', '2017-10-30 11:31:51'),
(6, 'Intrumentation', '2017-10-30 11:32:10', '2017-10-30 11:32:10'),
(7, 'process', '2017-10-30 11:32:33', '2017-10-30 11:32:33'),
(8, 'QA/QC', '2017-10-30 11:32:52', '2017-10-30 11:32:52'),
(9, 'IT', '2017-10-30 11:33:06', '2017-10-30 11:33:06'),
(10, 'project Control', '2017-10-30 11:33:27', '2017-10-30 11:33:27'),
(11, 'Material mgt', '2017-10-30 11:33:43', '2017-10-30 11:33:43'),
(12, 'Safety', '2017-11-07 19:25:57', '2017-11-07 19:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Refinery Site', '2017-07-28 11:40:30', '2017-07-28 11:40:31'),
(2, 'Ikoyi', '2017-07-28 11:40:45', '2017-07-28 11:40:46'),
(4, 'Fertilizer Office Area', '2017-07-28 11:41:11', '2017-10-28 11:39:50'),
(5, 'TCF-Fertilizer', '2017-07-28 11:41:21', '2017-10-28 11:40:18'),
(8, 'Sapphire', '2017-10-28 11:31:36', '2017-10-28 11:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_24_080521_entrust_setup_tables', 1),
('2016_08_25_194238_create_tickets_table', 1),
('2016_08_25_194643_create_categories_table', 1),
('2016_08_25_194754_create_priorities_table', 1),
('2016_08_25_194805_create_statuses_table', 1),
('2016_08_25_212830_create_comments_table', 1),
('2016_08_30_173643_create_settings_table', 1),
('2017_07_25_143515_create_businessus_table', 1),
('2017_07_25_143546_create_locations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'manage-roles', 'Manage Roles', 'Permission for Managing Roles', '2017-07-28 10:37:10', '2017-07-28 10:37:10'),
(2, 'manage-tickets', 'Manage Tickets', 'Permission for Managing Tickets', '2017-07-28 10:37:10', '2017-07-28 10:37:10'),
(3, 'manage-users', 'Manage Users', 'Permission for Managing Users', '2017-07-28 10:37:10', '2017-07-28 10:37:10'),
(4, 'view-backend', 'View Backend', 'Permission for Viewing Backend', '2017-07-28 10:37:11', '2017-07-28 10:37:11'),
(5, 'manage-permissions', 'Manage Permissions', 'Permission for Managing Permissions', '2017-07-28 10:37:11', '2017-07-28 10:37:11'),
(6, 'manage-settings', 'Manage Settings', 'Permission for Managing Settings', '2017-07-28 10:37:11', '2017-07-28 10:37:11'),
(7, 'Users-ticket', 'Users-ticket', 'this is for users', '2017-07-28 10:50:09', '2017-07-29 09:59:14'),
(8, 'view-backend-user', 'view-backend-user', 'permission for viewing user backend', '2017-07-31 11:04:14', '2017-07-31 11:04:14'),
(9, 'view-tickets', 'view-tickets', 'this is for view only', '2017-09-28 10:23:38', '2017-09-28 12:54:19'),
(10, 'View-All-Request', 'View All Request', 'this to view all request', '2017-09-29 18:42:11', '2017-09-29 18:42:11'),
(11, 'view-dashboard-user', 'view-dashboard-user', 'this permission to view dashboard', '2017-10-25 09:04:16', '2017-10-25 09:05:31'),
(13, 'logout', 'logout', 'this is logout permission for all users', '2017-10-26 08:29:49', '2017-10-26 08:29:49'),
(15, 'system-mgmt', 'system-mgmt', 'This is the permission for system mgmt', '2017-10-28 10:46:08', '2017-10-28 10:46:08'),
(16, 'chart-report', 'chart-report', 'this is for Chart Reort', '2017-11-08 14:24:23', '2017-11-08 14:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(13, 1),
(15, 1),
(16, 1),
(2, 2),
(4, 2),
(9, 2),
(10, 2),
(11, 2),
(13, 2),
(4, 7),
(7, 7),
(11, 7),
(13, 7),
(1, 8),
(2, 8),
(3, 8),
(4, 8),
(5, 8),
(6, 8),
(7, 8),
(8, 8),
(9, 8),
(10, 8),
(11, 8),
(13, 8);

-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

CREATE TABLE `priorities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `priorities`
--

INSERT INTO `priorities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'High', '2017-07-28 10:37:14', '2017-07-28 10:37:14'),
(2, 'Normal', '2017-07-28 10:37:14', '2017-07-28 10:37:14'),
(3, 'Low', '2017-07-28 10:37:14', '2017-07-28 10:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin Role', 'This is the default admin role', '2017-07-28 10:37:11', '2017-07-28 10:37:11'),
(2, 'Moderator', 'Moderator Role', 'This is the default Moderator Role', '2017-07-28 10:37:11', '2017-07-28 10:37:11'),
(7, 'Users', 'Users Role', 'this is for users', '2017-07-28 10:51:02', '2017-07-28 10:51:02'),
(8, 'support_admin', 'support_admin', 'This is for support admin', '2017-10-27 12:14:47', '2017-10-27 12:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(9, 1),
(10, 2),
(4, 7),
(5, 7),
(6, 7),
(7, 7),
(8, 7),
(11, 7),
(13, 7),
(16, 7),
(22, 7),
(23, 7),
(24, 7),
(25, 7),
(27, 7),
(3, 8),
(12, 8),
(26, 8);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_url`, `email_from`, `email_to`, `created_at`, `updated_at`) VALUES
(1, 'IT Support System', 'http://itsupport.com', 'jeremiah.egwuemi@dangoteprojects.com', 'jerri4christ@yahoo.com', '2017-07-25 14:12:19', '2017-11-09 10:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Open', '2017-07-28 10:37:14', '2017-07-28 10:37:14'),
(2, 'pending', '2017-07-28 10:37:14', '2017-07-28 10:37:14'),
(3, 'Resolved', '2017-07-28 10:37:14', '2017-07-28 10:37:14'),
(4, 'Reopened', '2017-07-28 10:37:14', '2017-07-28 10:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `ticket_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `businessu_id` int(10) UNSIGNED NOT NULL,
  `priority_id` int(10) UNSIGNED NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `support_admin_id` int(10) UNSIGNED DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `resolve_date` date DEFAULT NULL,
  `resolve_time` time DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `request_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `category_id`, `ticket_id`, `businessu_id`, `priority_id`, `location_id`, `support_admin_id`, `subject`, `message`, `status_id`, `resolve_date`, `resolve_time`, `request_date`, `request_time`, `created_at`, `updated_at`) VALUES
(2, 7, 1, '0001', 1, 1, 1, 12, 'no internet', '<p>no internet access<br></p>', 3, '2017-07-28', '15:08:07', '2016-07-28', '20:59:50', '2017-07-28 19:59:50', '2017-12-05 15:31:27'),
(3, 8, 4, '0002', 2, 2, 4, 12, 'window problem', '<p>system is having issue please come and check<br></p>', 3, '2017-07-29', '08:08:51', '2017-07-29', '20:59:50', '2017-07-29 09:35:50', '2017-12-05 15:31:17'),
(4, 8, 1, '0003', 1, 2, 1, 12, 'no internet', '<p>please there is no internet access<br></p>', 2, NULL, NULL, '2017-07-31', '20:59:50', '2017-07-31 09:31:59', '2017-12-05 15:31:09'),
(5, 8, 3, '0004', 2, 2, 4, 12, 'printer installation', '<p>printer installation is needed in my office<br></p>', 1, NULL, NULL, '2017-07-31', '20:59:50', '2017-07-31 09:35:09', '2017-12-05 15:31:02'),
(7, 9, 3, '0005', 2, 2, 5, 26, 'printer is not working', 'i cant print<br><p><br></p>', 3, '2017-11-09', '07:11:04', '2017-11-01', '20:59:50', '2017-08-01 13:15:27', '2017-12-05 15:30:55'),
(8, 9, 1, '0006', 1, 1, 2, 12, 'network access', 'no network access please check<br><p><br></p>', 3, '2017-12-05', '03:12:30', '2017-08-01', '20:59:50', '2017-08-01 15:02:19', '2017-12-05 15:30:47'),
(9, 9, 2, '0007', 2, 2, 5, 12, 'down time', 'internet down time<br><p><br></p>', 2, NULL, NULL, '2017-08-01', '20:59:50', '2017-08-01 15:56:50', '2017-12-05 15:30:41'),
(10, 8, 1, '0008', 2, 1, 4, 3, 'printer is not working', '<p>printer not working<br></p>', 1, NULL, NULL, '2017-08-02', '20:59:50', '2017-08-02 07:45:48', '2017-12-05 15:30:35'),
(11, 9, 4, '0009', 2, 2, 2, 3, 'Operating system issue', 'operating system isssue<br><p><br></p>', 3, '2017-12-05', '03:12:54', '2017-11-02', '20:59:50', '2017-08-02 07:50:47', '2017-12-05 15:30:26');
INSERT INTO `tickets` (`id`, `user_id`, `category_id`, `ticket_id`, `businessu_id`, `priority_id`, `location_id`, `support_admin_id`, `subject`, `message`, `status_id`, `resolve_date`, `resolve_time`, `request_date`, `request_time`, `created_at`, `updated_at`) VALUES
(12, 11, 2, '0010', 1, 1, 1, 12, 'No internet', 'Please there is no internet I can\'t send mail<br><p><img style=\"width: 508px;\" src=\"data:image/jpeg;base64,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\" data-filename=\"georgesand383232.jpg\"><br></p>', 3, '2017-12-05', '03:12:44', '2017-08-02', '20:59:50', '2017-08-02 08:13:49', '2017-12-05 15:30:12');
INSERT INTO `tickets` (`id`, `user_id`, `category_id`, `ticket_id`, `businessu_id`, `priority_id`, `location_id`, `support_admin_id`, `subject`, `message`, `status_id`, `resolve_date`, `resolve_time`, `request_date`, `request_time`, `created_at`, `updated_at`) VALUES
(13, 12, 3, '0011', 1, 2, 1, 12, 'printer is not working in container 07', '<p>hello IT team printer in container 07 is not working can u please check</p><p>thank you<br><p><br></p></p>', 3, '2017-11-08', '01:11:58', '2017-08-04', '20:59:50', '2017-08-04 14:51:42', '2017-12-05 15:30:05'),
(14, 8, 1, '0012', 2, 1, 4, 12, 'no internet', '<p>please IT there is no internet in container 07<br></p>', 3, '2017-12-05', '03:12:15', '2017-08-15', '20:59:50', '2017-08-15 10:47:58', '2017-12-05 15:29:55'),
(15, 8, 1, '0013', 1, 2, 1, 12, 'no internet', '<p>no internet<img style=\"width: 147px;\" src=\"data:image/jpeg;base64,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\" data-filename=\"danglogo.jpg\"><br></p>', 3, '2017-12-05', '03:12:13', '2017-09-15', '20:59:50', '2017-09-15 16:50:29', '2017-12-05 15:29:49'),
(16, 8, 1, '0014', 1, 2, 1, 26, 'internet issue', '<p>internet problem<br></p>', 1, '2017-11-07', '17:10:26', '2017-09-28', '20:59:50', '2017-09-28 08:29:20', '2017-12-05 15:29:43'),
(17, 6, 4, '0015', 2, 1, 4, 3, 'keyboard issue', 'my system keyboard is bad, due for replacement<br><p><br></p>', 3, '2017-11-07', '15:10:01', '2015-10-26', '20:59:50', '2017-10-26 15:02:58', '2017-12-05 15:29:33'),
(18, 8, 1, '0017', 1, 1, 1, 3, 'issue', 'problem<p><br></p>', 2, '2017-10-27', '15:09:55', '2017-10-27', '20:59:50', '2017-10-27 09:52:55', '2017-11-11 08:16:08'),
(19, 6, 3, '0018', 2, 2, 4, 3, 'network', 'network<p><br></p>', 1, '2017-10-27', '14:10:58', '2017-11-05', '20:59:50', '2017-10-27 09:54:23', '2017-11-09 07:06:03'),
(20, 5, 11, '0019', 2, 2, 4, 3, 'projector connection', 'projector need to be connected as meeting room<br><p><br></p>', 3, '2017-11-07', '15:11:06', '2017-11-06', '12:11:00', '2017-10-28 08:02:17', '2017-11-08 14:20:18'),
(22, 8, 1, '0016', 1, 2, 1, 26, 'network', '<p>no network<br></p>', 3, '2017-11-08', '15:11:11', '2017-11-07', '12:11:00', '2017-11-08 09:50:26', '2017-11-09 09:14:44'),
(25, 5, 3, '0020', 1, 2, 2, 26, 'printer', 'i cant print<br><p><br></p>', 3, '2017-11-08', '15:11:15', '2017-11-08', '12:11:00', '2017-11-08 10:09:30', '2017-11-09 09:15:56'),
(26, 6, 12, '0021', 7, 2, 4, 26, 'laptop issue', 'laptop is faulty<br><p><br></p>', 1, NULL, NULL, '2017-11-08', '12:11:00', '2017-11-08 13:50:12', '2017-11-09 08:10:48'),
(27, 5, 13, '0022', 1, 2, 8, 3, 'keyboard issue', '<p>keyboard is bad<br></p>', 3, '2017-11-09', '09:11:54', '2017-11-08', '12:11:00', '2017-11-08 13:53:08', '2017-11-09 08:21:54'),
(28, 5, 5, '0023', 1, 2, 5, 3, 'software', 'software issue<br><p><br></p>', 1, NULL, NULL, '2017-11-09', '12:11:00', '2017-11-09 08:19:38', '2017-11-09 09:46:18'),
(29, 9, 6, '0024', 1, 2, 1, 12, 'system is bad', 'my system bad<br><p><br></p>', 2, '2017-11-09', '10:11:11', '2017-11-09', '12:11:00', '2017-11-09 09:33:30', '2017-11-11 08:15:33'),
(30, 5, 4, '0025', 7, 2, 5, 26, 'operating system ', 'having Operating system issue<br><p><br></p>', 2, NULL, NULL, '2017-11-09', '12:11:00', '2017-11-09 09:43:10', '2017-11-10 14:32:47'),
(31, 11, 12, '0026', 1, 1, 1, 26, 'laptop issue', '<p>laptop screen issue<br></p>', 3, '2017-11-09', '11:11:28', '2017-11-09', '12:11:00', '2017-11-09 10:01:25', '2017-11-09 10:02:28'),
(32, 11, 12, '0027', 1, 2, 2, 3, 'laptop issue', 'i need my laptop to be fix<br><p><br></p>', 3, '2017-11-11', '12:11:41', '2017-11-09', '12:11:00', '2017-11-09 10:24:51', '2017-11-11 11:34:41'),
(33, 27, 5, '0028', 7, 2, 4, 3, 'software installation', 'software installation needed in my system<br><p><br></p>', 1, NULL, NULL, '2017-11-11', '12:11:00', '2017-11-11 11:21:21', '2017-11-11 13:12:26'),
(34, 23, 12, '0029', 1, 1, 2, NULL, 'laptop Problem', 'My laptop is not coming up<br><p><br></p>', 1, NULL, NULL, '2017-11-11', '12:11:00', '2017-11-11 13:08:36', '2017-11-11 13:08:36'),
(35, 24, 3, '0030', 7, 1, 5, NULL, 'i cant print', '<p>pls help i cant print<br></p>', 1, NULL, NULL, '2017-11-11', '12:11:00', '2017-11-11 13:09:42', '2017-11-11 13:09:42'),
(36, 11, 1, '0031', 1, 1, 1, 26, 'cant send email', 'issue with app sending email<br><p><br></p>', 3, '2017-12-05', '11:12:50', '2017-12-05', '12:12:00', '2017-12-05 10:38:38', '2017-12-05 10:40:50'),
(37, 11, 1, '0032', 1, 2, 1, NULL, 'mail issue', 'email issue<br><p><br></p>', 1, NULL, NULL, '2017-12-05', '12:12:00', '2017-12-05 10:57:58', '2017-12-05 10:57:58'),
(38, 5, 11, '0033', 7, 2, 4, NULL, 'project not displaying', 'projector not displaying on the screen<br><p><br></p>', 1, NULL, NULL, '2017-12-05', '12:12:00', '2017-12-05 14:35:46', '2017-12-05 14:35:46'),
(39, 1, 1, '0034', 1, 1, 1, 26, 'Check', 'i cant', 1, NULL, NULL, '2018-02-13', '12:02:00', '2018-02-13 08:00:19', '2018-02-13 08:07:24'),
(40, 1, 5, '0035', 7, 2, 8, NULL, 'something', '<p>something<img style=\"width: 400px;\" src=\"data:image/png;base64,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\" data-filename=\"itsupport.png\"><p><br></p></p>', 1, NULL, NULL, '2018-02-13', '12:02:00', '2018-02-13 08:09:18', '2018-02-13 08:09:18'),
(41, 8, 2, '0036', 7, 1, 2, 26, 'help help', '<p>help help help help<br></p>', 3, '2018-06-27', '03:06:54', '2018-06-27', '12:06:00', '2018-06-27 14:24:08', '2018-06-27 14:29:54'),
(42, 8, 2, '0037', 7, 1, 4, NULL, 'internet is down', '<p>yea it is down&nbsp; hmmmmn<br></p>', 1, NULL, NULL, '2018-06-29', '12:06:00', '2018-06-29 12:36:05', '2018-06-29 12:36:05'),
(43, 8, 1, '0038', 1, 2, 1, 26, 'i cant print', '<p>ddkhkjlj\'k<br></p>', 3, '2020-07-03', '02:07:30', '2020-07-03', '12:07:00', '2020-07-03 13:21:28', '2020-07-03 13:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contactnum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dept_id` int(10) UNSIGNED DEFAULT NULL,
  `jobtitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth_token_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `gender`, `contactnum`, `dept_id`, `jobtitle`, `oauth_token`, `oauth_token_secret`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$CxLLjnnvGRLDKGYQDXvIq.k23TBl.oxXgauHdqCaqFkLgtaEz.Q1.', 'M', '08011111111', 9, 'IT Manager', NULL, NULL, 'HOR9LGYzf2YQiBoccFI7tZGcYmtdXQZguczXEJFYlenq8im9B5kC9swYZYT6', '2017-07-25 14:12:19', '2018-06-29 12:34:54'),
(2, 'Ajiga', 'ajiga@gmail.com', '$2y$10$qTAJM3y4xAH90jW1M.jvsuDDOOi.WQmzQu/q/YXG5st.uSGck9fwi', 'F', '08067888888', 9, 'CT officer', NULL, NULL, 'saFjWTBXJQP7rEGXXYY4HEiSmSM4ziGk8kBMwhFCAhzRvax91uAQekkx5rnK', '2016-08-29 12:42:19', '2017-11-08 09:03:50'),
(3, 'mikel', 'mikel@gmail.com', '$2y$10$qBUTeir/xLqMOHbKviOzcO7drUeEbUoGIvnQHyWx3VDL5nwPJ5x8C', 'm', '0805555454', 9, 'IT officer', NULL, NULL, NULL, '2016-08-29 12:42:19', '2017-11-08 08:59:48'),
(4, 'paddy', 'paddy@gmail.com', '$2y$10$VJmwnoO.57RHNWaXf75GPuJaWknWPleMqj.joxzwU3EfZzQS9cGN2', 'F', '0806787688', 7, 'snr process', NULL, NULL, NULL, '2016-08-29 12:42:19', '2016-08-29 12:42:19'),
(5, 'john', 'john@gmail.com', '$2y$10$DkG1Cc3DUQVhE3c5Ja8R9elSdXpy/C/Yad4FbOqE8DcgqcmhQP4yC', 'm', '0909876543', 1, 'snr admin', NULL, NULL, 'XeHCPrOIggCu7wKNNenrN6hHpjjieD20Xg0tmtIEMDpygh28T6ROxKjDVzs6', '2016-08-29 12:42:19', '2018-01-09 08:29:59'),
(6, 'martha', 'martha@gmail.com', '$2y$10$BsSuJsoffBLkFnoeJIfSVusWuKw0iDINuHKBqnCVaalZ4ZfA3R/lO', 'F', '070654321', 12, 'safty officer', NULL, NULL, 'AeQQP0oNAzcgZ3KVbH2iZ0GcMpGhbLb9be2g2RnupHeItsu5wrc4dA0OI2Js', '2016-08-29 12:42:19', '2017-11-09 08:18:41'),
(7, 'kaka', 'kaka@gmail.com', '$2y$10$L8PG.YZP.tP5EegiZtW2luM2FuJLUr9ToXx/NYLu3yyXAtS4TrUPG', 'male', '0805634123', 5, 'Snr elect engr', NULL, NULL, 'ABVdx8hVCrcSp0v3gxirkqeWlUN0dHamMDq2ZOwaIjRBKnPawStA0R46Dmgl', '2017-07-28 10:45:54', '2017-07-28 20:04:05'),
(8, 'laz obi', 'laz@gmail.com', '$2y$10$i6jASWH9WX52KyHB00NXpeJJdcCw9M59H0Qrrsxy9SrXu36Dre1aW', 'm', '08065783423', 4, 'GM mech', NULL, NULL, 'Il7ZbjNan7dYodT862xuuOwFHrsCrZnzZ3Kwm6MD4B7bhNji8WmrNLAk99UH', '2017-07-29 09:31:33', '2018-06-27 14:27:36'),
(9, 'Jerry Jude', 'egwuemijerryjude@gmail.com', '$2y$10$gAz22ANvDdOWcvEbCF66XePRcEXdiiiL4N.G3WLn1n./82GjDAj82', 'm', '08065783475', 9, 'Manager Elect', NULL, NULL, 'NcoHdJDlfHPRa5gWkQjAgwZKUBY4h50at2N6XZiTZYw7mn0F4Dv8r7QR80bd', '2017-07-31 09:57:32', '2017-11-09 09:54:17'),
(10, 'paul', 'paul@gmail.com', '$2y$10$CyDcNk8/DPb1eYQVPrksK.WKhk7ziRGqxUQ7joUKz2l1a0uQ6qSwq', 'm', '080654321', 4, 'snr mech engr', NULL, NULL, 'yY5DA8rGcJDFtBXimrby0qf9wqxXhsSBzTyP8E9AoJamC9BlWlfvnLvRzCHu', '2017-08-01 15:29:54', '2017-09-29 18:47:11'),
(11, 'misan', 'Orighomisan.Omatsone@DANGOTE.COM', '$2y$10$hm2rJZOavFFAA7/Gb0IDyuDtNsgsXXUMnLBMAcjAWVpj1WMcdLcXK', 'm', '08023242521', 9, 'Snr IT OFFicer', NULL, NULL, 'DA9GctRn9HS1wnPQPs1KdxvhAPKaUTTKnYmGC4LBfOxLWWJ9m6N9czGVSvR6', '2017-08-02 08:09:59', '2017-12-05 14:32:11'),
(12, 'lanre', 'lanre.alao@dangoteprojects.com', '$2y$10$XTGpwvdslTwmQbnUfBFTpuA0ME2mmfseQwvFB2X66DC26X1G265iq', 'm', '0806734512', 9, 'MT', NULL, NULL, 't4bOKzJjlt5QItNf9Bv5DLRiEfAdqpJbUq9lsBn0DlzOpJy9z2PCoWGKBz6R', '2017-08-02 14:05:57', '2017-08-04 14:51:52'),
(13, 'maxwell', 'max@gmail.com', '$2y$10$WEOcNZhDbV0B3J0hIpCSFux2sGhdPn9e6gmBMi8R8ARxy6plXk8S6', 'Male', '08065781212', 10, 'deputy mech engr', NULL, NULL, NULL, '2017-10-30 12:23:29', '2017-10-30 12:23:29'),
(16, 'jane', 'jane@gmail.com', '$2y$10$I0n7UOFRiFGOPoXjX7e/1eBxWRpDGKWpNhau7z3jNUgcmrYq03ipm', 'Female', '0703435355', 11, 'Inv officer', NULL, NULL, NULL, '2017-11-03 14:55:37', '2017-11-03 14:55:37'),
(22, 'Rejoice', 'rejoice@gmail.com', '$2y$10$BFqXH0K1PwFQGMxSHKZp/O5QkS6qAvt888k90uTPnesmVtn7G4cmC', 'Female', '9898847477', 8, 'QC officer', NULL, NULL, NULL, '2017-11-03 15:46:54', '2017-11-03 15:46:54'),
(23, 'Kate Henshaw', 'kate@gmail.com', '$2y$10$DMXwPCsFyFU88E7BDxeFzOv5t.QfadHzky0xoWaEpRPXkBtQxB7he', 'Female', '090877666', 3, 'manager', NULL, NULL, '2GjgRLJAs9E33qXEIpXDFacJfeNhzHQtgiiLGxNK9Tb4LiLgxjiPvdOJWroh', '2017-11-07 16:39:32', '2017-11-11 13:08:44'),
(24, 'Dogo Yaro', 'dogo@gmail.com', '$2y$10$CN4y60YWkgMes05b.OGuhOT3fuYwL0yb4L3AT9.M9LIV2D2rIf3u.', 'Male', '89876544', 7, 'csd', NULL, NULL, NULL, '2017-11-07 16:49:20', '2017-11-11 13:04:49'),
(25, 'Don Dan', 'don@gmail.com', '$2y$10$9fXCdi..ZoK58HS5a.q6MunAplWJOMvhltGh.la7sOWaAIgQplJhi', 'Male', '09888999', 6, 'officer', NULL, NULL, NULL, '2017-11-07 19:40:15', '2017-11-07 19:40:15'),
(26, 'Dare Kunle', 'dare@gmail.com', '$2y$10$xHK0pd.vszaG3viuVKRkN.vrTv7qx6VG0.e9/1okUj9A8PslTVH9i', 'Male', '08078655', 9, 'officer', NULL, NULL, NULL, '2017-11-08 09:11:29', '2017-11-08 09:11:29'),
(27, 'Nathan Okoro', 'nathan@gmail.com', '$2y$10$NxQhGDKPvl2CD.CxGUXYv.KL5Sqd9O7h2TDcho1TZeYjZikhQUIvy', 'male', '080986665', 6, 'Snr Project ctr', NULL, NULL, 'O1KGaY7LORGqqRuM4EhP5ULt15kp2AveIjfpnIQXUauuNoSJ5LWpQALBpkw5', '2017-11-11 09:41:12', '2017-11-11 13:06:43');

-- --------------------------------------------------------

--
-- Structure for view `chart_assign`
--
DROP TABLE IF EXISTS `chart_assign`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_assign`  AS  select `users`.`fullname` AS `fullname`,count(`tickets`.`ticket_id`) AS `count_assigned` from (`tickets` join `users` on((`tickets`.`support_admin_id` = `users`.`id`))) group by `users`.`fullname`,`tickets`.`support_admin_id` ;

-- --------------------------------------------------------

--
-- Structure for view `chart_dept`
--
DROP TABLE IF EXISTS `chart_dept`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_dept`  AS  select `depts`.`name` AS `name`,count(`tickets`.`ticket_id`) AS `issue_count` from ((`tickets` join `users` on(((`tickets`.`user_id` = `users`.`id`) and (`tickets`.`user_id` = `users`.`id`)))) join `depts` on((`users`.`dept_id` = `depts`.`id`))) group by `depts`.`id`,`depts`.`name` ;

-- --------------------------------------------------------

--
-- Structure for view `chart_location`
--
DROP TABLE IF EXISTS `chart_location`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_location`  AS  select `locations`.`name` AS `name`,count(`tickets`.`ticket_id`) AS `request_count` from ((`tickets` join `users` on(((`tickets`.`user_id` = `users`.`id`) and (`tickets`.`user_id` = `users`.`id`)))) join `locations` on((`tickets`.`location_id` = `locations`.`id`))) group by `locations`.`id`,`locations`.`name` ;

-- --------------------------------------------------------

--
-- Structure for view `chart_resolve`
--
DROP TABLE IF EXISTS `chart_resolve`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_resolve`  AS  select `statuses`.`name` AS `name`,count(`tickets`.`ticket_id`) AS `count_resolved` from (`tickets` join `statuses` on((`tickets`.`status_id` = `statuses`.`id`))) group by `statuses`.`name` ;

-- --------------------------------------------------------

--
-- Structure for view `chart_support_admin_pending`
--
DROP TABLE IF EXISTS `chart_support_admin_pending`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_support_admin_pending`  AS  select `users`.`fullname` AS `fullname`,count(`tickets`.`ticket_id`) AS `pending_count` from (`tickets` join `users` on((`tickets`.`support_admin_id` = `users`.`id`))) where (`tickets`.`status_id` = 2) group by `users`.`fullname`,`tickets`.`support_admin_id` ;

-- --------------------------------------------------------

--
-- Structure for view `chart_support_admin_resolve`
--
DROP TABLE IF EXISTS `chart_support_admin_resolve`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_support_admin_resolve`  AS  select `users`.`fullname` AS `fullname`,count(`tickets`.`ticket_id`) AS `resolved_count` from (`tickets` join `users` on((`tickets`.`support_admin_id` = `users`.`id`))) where (`tickets`.`status_id` = 3) group by `users`.`fullname`,`tickets`.`support_admin_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businessus`
--
ALTER TABLE `businessus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ticket_id_foreign` (`ticket_id`);

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `priorities`
--
ALTER TABLE `priorities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tickets_ticket_id_unique` (`ticket_id`),
  ADD KEY `tickets_location_id_foreign` (`location_id`) USING BTREE,
  ADD KEY `support_admin_id_index` (`support_admin_id`) USING BTREE,
  ADD KEY `support_admin_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_dept_id_index` (`dept_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businessus`
--
ALTER TABLE `businessus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `depts`
--
ALTER TABLE `depts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `priorities`
--
ALTER TABLE `priorities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `support_admin_id_foreign` FOREIGN KEY (`support_admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `depts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
