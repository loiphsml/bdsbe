-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 06:25 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsbe`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_items`
--

CREATE TABLE `category_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_items`
--

INSERT INTO `category_items` (`id`, `name`, `path`, `description`, `image`, `image_mobile`, `level`, `parent_id`, `type`, `seo_title`, `seo_description`, `seo_keywords`, `order`, `isActive`, `created_at`, `updated_at`) VALUES
(60, 'Đất Nền Dự Án', 'dat-nen-du-an', '<p>\r\n	Đất Nền Dự Án\r\n</p>', '0', '0', 0, NULL, 1, 'Đất Nền Dự Án', 'Đất Nền Dự Án', 'Đất Nền Dự Án', 1, 1, '2018-05-13 13:22:57', '2018-05-13 13:22:57'),
(61, 'Căn Hộ Chung Cư', 'can-ho-chung-cu', '<p>\r\n	Đất Nền Dự Án\r\n</p>', 'http://localhost:8080/bdsbe/', 'http://localhost:8080/bdsbe/', 0, NULL, 1, 'Đất Nền Dự Án', 'Đất Nền Dự Án', 'Đất Nền Dự Án', 1, 1, '2018-05-13 13:22:57', '2018-05-13 13:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_permissions`
--

INSERT INTO `category_permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Role', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(2, 'User', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(3, 'Menu', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(4, 'Page', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(5, 'Post', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(7, 'Product', '2018-03-27 03:05:29', '2018-03-27 03:05:29'),
(8, 'Location', '2018-05-13 14:15:02', '2018-05-13 14:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `content`, `description`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'config-contact', '<p>\r\n	<strong><em><span style="background-color:#f1c40f;">Hotline đặt hàng</span>:</em></strong><em>&nbsp;&nbsp;<strong>097.388.9336 - 0914.675.777</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hotline hỗ trợ tư vấn và phản hồi ý kiến</em></strong><em>:&nbsp;&nbsp;<strong>097.388.9336</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hân hạnh được phục vụ quý khách hàng.!</em></strong>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Thông tin liên hệ với chúng tôi:</em></strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ THÉP KHÁNH NAM</strong>\r\n</p>\r\n\r\n<p>\r\n	<strong>TRỤ SỞ CHÍNH:</strong>&nbsp;<em>201 Bình Thành, KP 4, P. Bình Hưng Hòa, Q. Bình Tân, thành phố Hồ Chí Minh</em>\r\n</p>\r\n\r\n<p>\r\n	<strong>Di động:</strong><em>&nbsp;097.388.9336 - 0914.675.777</em>\r\n</p>', NULL, NULL, 1, NULL, '2018-03-30 09:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `path`, `level`, `is_active`, `order`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'TP Hồ Chí Minh', 'tp-ho-chi-minh', 0, 1, 1, 0, '2018-05-13 14:48:18', '2018-05-13 14:48:18'),
(2, 'Quận 1', 'quan-1', 1, 1, 1, 1, '2018-05-13 14:48:31', '2018-05-13 14:48:31'),
(3, 'Quận 2', 'quan-2', 1, 0, 2, 1, '2018-05-13 14:48:31', '2018-05-13 15:04:13'),
(4, 'Quận 3', 'quan-3', 1, 1, 3, 1, '2018-05-15 07:55:49', '2018-05-15 07:55:49'),
(5, 'Hà Nội', 'ha-noi', 0, 0, 2, 0, '2018-05-13 14:48:18', '2018-05-15 13:22:26'),
(6, 'Quận Ba Đình', 'quan-ba-dinh', 1, 0, 1, 5, '2018-05-13 14:48:31', '2018-05-15 13:23:07'),
(7, 'Quận Hoàn Kiếm', 'quan-hoan-kiem', 1, 0, 1, 5, '2018-05-13 14:48:31', '2018-05-15 13:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_14_140923_create_entrust_setup_tables', 1),
(4, '2018_05_13_205516_create_locations_table', 2),
(5, '2018_05_15_203645_create_units_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `category_permission_id`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Xem Danh Sách Quyền', 'Được Xem Danh Sách Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(2, 'role-create', 'Tạo Quyền Mới', 'Được Tạo Quyền Mới', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(3, 'role-edit', 'Cập Nhật Quyền', 'Được Cập Nhật Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(4, 'role-delete', 'Xóa Quyền', 'Được Xóa Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(5, 'user-list', 'Xem Danh Sách Users', 'Được Xem Danh Sách Users', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(6, 'user-create', 'Tạo User', 'Được Tạo User Mới', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(7, 'user-edit', 'Cập Nhật User', 'Được Cập Nhật User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(8, 'user-delete', 'Xóa user', 'Được Xóa User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(9, 'menu-list', 'Toàn Quyền Menu', 'Được Toàn Quyền Menu', 3, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(10, 'menu-create', 'Thêm Mới Menu', 'Được Thêm Mới Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(11, 'menu-edit', 'Cập Nhật Menu', 'Được Cập Nhật Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(12, 'menu-delete', 'Xóa Menu', 'Được Xóa Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(13, 'page-list', 'Toàn Quyền Trang', 'Được Toàn Quyền Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(14, 'page-create', 'Thêm Mới Trang', 'Được Thêm Mới Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(15, 'page-edit', 'Cập Nhật Trang', 'Được Cập Nhật Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(16, 'page-delete', 'Xóa Trang', 'Được Xóa Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(17, 'post-list', 'Toàn Quyền Bài Viết', 'Được Toàn Quyền Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(18, 'post-create', 'Thêm Mới Bài Viết', 'Được Thêm Mới Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(19, 'post-edit', 'Cập Nhật Bài Viết', 'Được Cập Nhật Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(20, 'post-delete', 'Xóa Bài Viết', 'Được Xóa Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(21, 'product-list', 'Toàn Quyền Sản Phẩm', 'Được Toàn Quyền Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(22, 'product-create', 'Thêm Mới Sản Phẩm', 'Được Thêm Mới Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(23, 'product-edit', 'Cập Nhật Sản Phẩm', 'Được Cập Nhật Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(24, 'product-delete', 'Xóa Sản Phẩm', 'Được Xóa Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(25, 'location-list', 'Toàn Quyền Địa Điểm', 'Được Toàn Quyền Địa Điểm', 8, '2018-05-13 14:16:04', '2018-05-13 14:16:04'),
(26, 'location-create', 'Thêm Mới Địa Điểm', 'Được Thêm Mới Địa Điểm', 8, '2018-05-13 14:16:04', '2018-05-13 14:16:04'),
(27, 'location-edit', 'Cập Nhật Địa Điểm', 'Được Cập Nhật Địa Điểm', 8, '2018-05-13 14:16:04', '2018-05-13 14:16:04'),
(28, 'location-delete', 'Xóa Địa Điểm', 'Được Xóa Địa Điểm', 8, '2018-05-13 14:16:04', '2018-05-13 14:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_image` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT '0',
  `area` int(11) DEFAULT '0',
  `location_id` int(11) NOT NULL,
  `unit_id` int(11) DEFAULT '1',
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `path`, `isActive`, `image`, `sub_image`, `description`, `content`, `price`, `area`, `location_id`, `unit_id`, `seo_title`, `seo_description`, `seo_keywords`, `order`, `user_id`, `category_product_id`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'test1', 1, 'images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', '<p>\r\n	test1\r\n</p>', '<p>\r\n	test1\r\n</p>', 20, 5, 1, 1, 'test1', 'test1', 'test1', 1, 1, 60, '2018-05-14 14:34:02', '2018-05-15 14:08:52'),
(2, 'test1 847', 'test1-847', 1, 'images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', '<p>\r\n	test1\r\n</p>', '<p>\r\n	test1\r\n</p>', 200, 200, 1, 1, 'test1', 'test1', 'test1', 1, 1, 60, '2018-05-14 14:34:02', '2018-05-14 14:39:26'),
(3, 'test1 656', 'test1-656', 1, 'images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', '<p>\r\n	test1\r\n</p>', '<p>\r\n	test1\r\n</p>', 200, 200, 4, 1, 'test1', 'test1', 'test1', 1, 1, 60, '2018-05-14 14:34:02', '2018-05-15 12:33:12'),
(4, 'test1 847 736 test1 847 736 test1 847 736 test1 847 736 test1 847 736 test1 847 736', 'test1-847-736-test1-847-736-test1-847-736-test1-847-736-test1-847-736-test1-847-736', 1, 'images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', '<p>\r\n	test1\r\n</p>', '<p>\r\n	test1\r\n</p>', 0, 200, 6, 1, 'test1', 'test1', 'test1', 1, 1, 60, '2018-05-14 14:34:02', '2018-05-15 13:23:38'),
(5, 'test1 858', 'test1-858', 1, 'images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', '<p>\r\n	test1\r\n</p>', '<p>\r\n	test1\r\n</p>', 2, 200, 4, 3, 'test1', 'test1', 'test1', 1, 1, 60, '2018-05-14 14:34:02', '2018-05-15 14:28:28'),
(6, 'test1 847 707', 'test1-847-707', 1, 'images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', '<p>\r\n	test1\r\n</p>', '<p>\r\n	test1\r\n</p>', 200, 200, 3, 1, 'test1', 'test1', 'test1', 1, 1, 60, '2018-05-14 14:34:02', '2018-05-15 12:32:38'),
(7, 'test1 656 221', 'test1-656-221', 1, 'images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/31948159_2081308462106421_1383449733871173632_n.jpg', '<p>\r\n	test1\r\n</p>', '<p>\r\n	test1\r\n</p>', 200, 200, 2, 2, 'test1', 'test1', 'test1', 1, 1, 60, '2018-05-14 14:34:02', '2018-05-15 14:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'administer the website and manage users', '2018-03-14 07:23:50', '2018-03-14 07:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'triệu/m2', NULL, NULL),
(2, 'triệu', NULL, NULL),
(3, 'tỷ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$mStg572JFNI89/0Cg7TOGOUkACFaBl/nsNeOvx8zglr1qyJPA0tj6', NULL, '2018-03-14 07:24:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_items`
--
ALTER TABLE `category_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_product_id_foreign` (`category_product_id`);

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
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_items`
--
ALTER TABLE `category_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_product_id_foreign` FOREIGN KEY (`category_product_id`) REFERENCES `category_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
