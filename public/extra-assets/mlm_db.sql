-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2025 lúc 11:26 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mlm_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('dyt-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1761191905),
('dyt-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1761191905;', 1761191905);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `ordering` int(11) NOT NULL DEFAULT 1000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent`, `ordering`, `created_at`, `updated_at`) VALUES
(1, 'Gadgets & Accesories', 'gadgets-accesories', 3, 1, '2025-10-17 18:15:17', '2025-10-20 22:56:48'),
(2, 'Smartwatches', 'smartwatches', 3, 2, '2025-10-17 18:15:38', '2025-10-20 22:57:00'),
(3, 'Wearables', 'wearables', 3, 3, '2025-10-17 18:15:57', '2025-10-20 22:57:09'),
(4, 'Accessories - Smart Phones & Tablets', 'accessories-smart-phones-tablets', 4, 4, '2025-10-14 00:08:42', '2025-10-20 23:00:06'),
(5, 'Chargers', 'chargers', 4, 5, '2025-10-17 18:16:44', '2025-10-20 23:00:18'),
(6, 'Powerbanks', 'powerbanks', 4, 6, '2025-10-14 00:41:07', '2025-10-20 23:00:29'),
(7, 'Smartphones', 'smartphones', 4, 7, '2025-10-14 00:41:18', '2025-10-20 23:00:44'),
(8, 'Smartphones & Tablets', 'smartphones-tablets', 4, 8, '2025-10-14 00:41:43', '2025-10-20 23:01:59'),
(9, 'Tablets', 'tablets', 4, 9, '2025-10-14 00:41:56', '2025-10-20 23:02:46'),
(10, 'Audio', 'audio', 5, 10, '2025-10-14 00:42:07', '2025-10-20 23:03:20'),
(11, 'Audio Speakers', 'audio-speakers', 5, 10, '2025-10-14 00:42:23', '2025-10-20 23:03:33'),
(12, 'Portable Audio', 'portable-audio', 5, 10, '2025-10-14 00:42:34', '2025-10-20 23:03:40'),
(13, 'Computer Cases', 'computer-cases', 7, 10, '2025-10-14 00:43:08', '2025-10-20 23:06:12'),
(14, 'Desktops', 'desktops', 7, 1000, '2025-10-17 20:45:22', '2025-10-20 23:06:22'),
(15, 'Monitors', 'monitors', 7, 1000, '2025-10-17 20:45:32', '2025-10-20 23:06:31'),
(16, 'Software', 'software', 7, 1000, '2025-10-17 20:45:48', '2025-10-20 23:06:38'),
(17, 'Printers', 'printers', 9, 1000, '2025-10-17 20:46:03', '2025-10-20 23:06:50'),
(18, 'Accessories - Video Games & Consoles', 'accessories-video-games-consoles', 15, 1000, '2025-10-17 20:46:11', '2025-10-20 23:08:39'),
(19, 'Action Games', 'action-games', 15, 1000, '2025-10-17 20:51:39', '2025-10-20 23:08:52'),
(20, 'Game Consoles', 'game-consoles', 15, 1000, '2025-10-17 20:51:47', '2025-10-20 23:09:02'),
(21, 'Racing Games', 'racing-games', 15, 1000, '2025-10-17 20:52:45', '2025-10-20 23:09:16'),
(22, 'Station Consoles', 'station-consoles', 15, 1000, '2025-10-17 20:53:30', '2025-10-20 23:09:25'),
(23, 'Video Games & Consoles', 'video-games-consoles', 15, 1000, '2025-10-17 20:53:51', '2025-10-20 23:09:36'),
(24, 'Xbox', 'xbox', 15, 1000, '2025-10-17 20:54:08', '2025-10-20 23:09:46'),
(25, 'Cases', 'cases', 16, 1000, '2025-10-17 20:54:22', '2025-10-20 23:12:16'),
(26, 'Chargers - Accessories', 'chargers-accessories', 16, 1000, '2025-10-17 20:54:31', '2025-10-20 23:12:34'),
(27, 'Headphone Accessories', 'headphone-accessories', 16, 1000, '2025-10-17 20:57:35', '2025-10-20 23:12:47'),
(28, 'Headphone Cases', 'headphone-cases', 16, 1000, '2025-10-17 20:58:12', '2025-10-20 23:12:57'),
(29, 'Headphones', 'headphones', 16, 1000, '2025-10-17 20:58:19', '2025-10-20 23:13:07'),
(30, 'Pendrives', 'pendrives', 16, 1000, '2025-10-17 20:58:34', '2025-10-20 23:13:24'),
(31, 'Power Banks', 'power-banks', 16, 1000, '2025-10-17 20:58:45', '2025-10-20 23:13:33'),
(32, 'Cameras', 'cameras', 17, 1000, '2025-10-17 20:58:54', '2025-10-20 23:13:55'),
(33, 'Photo Cameras', 'photo-cameras', 17, 1000, '2025-10-17 20:59:07', '2025-10-20 23:14:09'),
(34, 'Video Cameras', 'video-cameras', 17, 1000, '2025-10-17 21:00:06', '2025-10-20 23:14:19'),
(35, 'Blue-ray Players', 'blue-ray-players', 20, 1000, '2025-10-17 21:00:15', '2025-10-20 23:14:43'),
(36, 'DVD Players', 'dvd-players', 20, 1000, '2025-10-21 06:17:16', '2025-10-20 23:21:16'),
(37, 'Home & Audio Enternteinment', 'home-audio-enternteinment', 20, 1000, '2025-10-21 06:17:16', '2025-10-20 23:21:30'),
(38, 'Home Theatres', 'home-theatres', 20, 1000, '2025-10-21 06:17:16', '2025-10-20 23:21:44'),
(39, 'Projectors', 'projectors', 20, 1000, '2025-10-21 06:17:16', '2025-10-20 23:21:51'),
(40, 'Speakers', 'speakers', 20, 1000, '2025-10-21 06:17:16', '2025-10-20 23:21:58'),
(41, 'TVs', 'tvs', 20, 1000, '2025-10-21 06:17:16', '2025-10-20 23:22:08'),
(42, 'Accessories - Laptops & Computers', 'accessories-laptops-computers', 21, 1000, '2025-10-21 06:17:16', '2025-10-20 23:22:29'),
(43, 'All in One', 'all-in-one', 21, 1000, '2025-10-21 06:17:16', '2025-10-20 23:22:39'),
(44, 'Computer Accessories', 'computer-accessories', 21, 1000, '2025-10-21 06:17:16', '2025-10-20 23:22:48'),
(45, 'Computer Monitors', 'computer-monitors', 21, 1000, '2025-10-21 06:17:16', '2025-10-20 23:23:10'),
(46, 'Computers', 'computers', 21, 1000, '2025-10-21 06:17:16', '2025-10-20 23:23:00'),
(47, 'Desktop Computers', 'desktop-computers', 21, 1000, '2025-10-20 23:14:57', '2025-10-20 23:23:22'),
(48, 'Desktop PCs & Laptops', 'desktop-pcs-laptops', 21, 1000, '2025-10-20 23:23:35', '2025-10-20 23:23:35'),
(49, 'Gaming', 'gaming', 21, 1000, '2025-10-20 23:23:42', '2025-10-20 23:23:42'),
(50, 'Laptops', 'laptops', 21, 1000, '2025-10-20 23:23:48', '2025-10-20 23:23:48'),
(51, 'Mac Computers', 'mac-computers', 21, 1000, '2025-10-20 23:23:56', '2025-10-20 23:23:56'),
(52, 'Networking', 'networking', 21, 1000, '2025-10-20 23:24:03', '2025-10-20 23:24:03'),
(53, 'Notebooks', 'notebooks', 21, 1000, '2025-10-20 23:24:12', '2025-10-20 23:24:12'),
(54, 'Peripherals', 'peripherals', 21, 1000, '2025-10-20 23:24:18', '2025-10-20 23:24:18'),
(55, 'Refurbished Laptops', 'refurbished-laptops', 21, 1000, '2025-10-20 23:24:25', '2025-10-20 23:24:25'),
(56, 'Servers', 'servers', 21, 1000, '2025-10-20 23:24:31', '2025-10-20 23:24:31'),
(57, 'Software - Laptops & Computers', 'software-laptops-computers', 21, 1000, '2025-10-20 23:24:48', '2025-10-20 23:24:48'),
(58, 'Ultrabooks', 'ultrabooks', 21, 1000, '2025-10-20 23:25:02', '2025-10-20 23:25:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_meta_keywords` varchar(255) DEFAULT NULL,
  `site_meta_description` text DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_title`, `site_email`, `site_phone`, `site_meta_keywords`, `site_meta_description`, `site_logo`, `site_favicon`, `created_at`, `updated_at`) VALUES
(1, 'DYT', 'info@dyt.info', '(+84) 12-345-6789', 'wordpress, free api, programming, laravel, web development and tech.', 'Discover insightful tips, tutorials and guides to enhance you skills in programming, web development and tech. Stay updated with the lastest trends and improve your coding journe!', 'logo_68ecc5c7dddd6.png', 'favicon_68ef00efe084a.png', NULL, '2025-10-19 19:52:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_13_032039_create_user_social_links_table', 2),
(5, '2025_10_13_042317_create_general_settings_table', 3),
(6, '2025_10_14_013754_create_parent_categories_table', 4),
(7, '2025_10_14_013819_create_categories_table', 4),
(8, '2025_10_15_031303_create_posts_table', 5),
(9, '2025_10_23_020634_create_slides_table', 6),
(10, '2025_10_23_080221_create_newsletter_subscribers_table', 7),
(11, '2025_10_23_091442_add_is_notified_to_posts_table', 8),
(12, '2025_10_24_064805_create_site_social_links_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin@email.com', '2025-10-23 01:24:18', '2025-10-23 01:24:18'),
(11, 'will@email.com', '2025-10-23 20:32:23', '2025-10-23 20:32:23'),
(12, 'user@email.com', '2025-10-23 20:55:19', '2025-10-23 20:55:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parent_categories`
--

CREATE TABLE `parent_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT 1000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parent_categories`
--

INSERT INTO `parent_categories` (`id`, `name`, `slug`, `ordering`, `created_at`, `updated_at`) VALUES
(1, '12.3 inch', '12-3-inch', 1, '2025-10-13 20:00:28', '2025-10-20 22:53:36'),
(2, 'Ending Offers', 'ending-offers', 2, '2025-10-14 00:38:33', '2025-10-20 22:54:34'),
(3, 'Gadgets', 'gadgets', 3, '2025-10-14 00:38:41', '2025-10-20 22:55:11'),
(4, 'Smart Phones & Tablets', 'smart-phones-tablets', 5, '2025-10-14 00:39:02', '2025-10-20 22:57:33'),
(5, 'TV & Audio', 'tv-audio', 6, '2025-10-14 00:39:17', '2025-10-17 18:36:40'),
(6, '15 inch', '15-inch', 1000, '2025-10-17 02:25:50', '2025-10-20 23:04:14'),
(7, 'Computer Components', 'computer-components', 1000, '2025-10-17 02:26:11', '2025-10-20 23:04:28'),
(8, 'Gadgets & Accesories', 'gadgets-accesories', 1000, '2025-10-17 02:26:23', '2025-10-20 23:04:44'),
(9, 'Printers & Ink', 'printers-ink', 1000, '2025-10-18 02:14:49', '2025-10-20 23:04:59'),
(10, 'Uncategorized', 'uncategorized', 1000, '2025-10-18 02:15:27', '2025-10-20 23:05:17'),
(11, '17 inch', '17-inch', 1000, '2025-10-18 02:15:52', '2025-10-20 23:07:26'),
(12, 'Car Electronic & GPS', 'car-electronic-gps', 1000, '2025-10-18 02:15:52', '2025-10-20 23:07:35'),
(13, 'GPS & Navi', 'gps-navi', 1000, '2025-10-18 02:18:44', '2025-10-20 23:07:45'),
(14, 'Office Supplies', 'office-supplies', 1000, '2025-10-18 02:18:44', '2025-10-20 23:07:52'),
(15, 'Video Games & Consoles', 'video-games-consoles', 1000, '2025-10-18 02:19:58', '2025-10-20 23:08:05'),
(16, 'Accessories', 'accessories', 1000, '2025-10-18 02:19:58', '2025-10-20 23:10:19'),
(17, 'Cameras & Photography', 'cameras-photography', 1000, '2025-10-17 19:12:52', '2025-10-20 23:10:34'),
(20, 'Home Entertainment', 'home-entertainment', 1000, '2025-10-17 19:21:48', '2025-10-20 23:10:55'),
(21, 'Laptops & Computers', 'laptops-computers', 1000, '2025-10-17 19:22:00', '2025-10-20 23:11:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('will@email.com', 'M2F3QVdZZWdUM0xiU1RtVTR3YjRTazF0NzJDdFU0WHZKazFRM29tWm1JS0pXYmdhYjZMUGFscWZnSHhwbEF5Nw==', '2025-10-23 21:23:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `visibility` int(11) NOT NULL DEFAULT 1,
  `is_notified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category`, `title`, `slug`, `content`, `featured_image`, `tags`, `meta_keywords`, `meta_description`, `visibility`, `is_notified`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 'All Computers & Accessories', 'all-computers-accessories', '<p>All Computers &amp; Accessories</p>', '1760753034_1.jpg', 'Accessories,All Computers', 'All Computers & Accessories', 'All Computers & Accessories', 1, 0, '2025-10-15 00:41:28', '2025-10-17 19:03:56'),
(6, 2, 1, 'Laptops, Desktops & Monitors', 'laptops-desktops-monitors', '<p>Laptops, Desktops &amp; Monitors</p>', '1760753097_2.jpg', 'Laptops,Desktops ,Monitors', 'Laptops, Desktops & Monitors', 'Laptops, Desktops & Monitors', 1, 0, '2025-10-15 00:43:40', '2025-10-17 19:04:57'),
(7, 2, 1, 'Printers & Ink', 'printers-ink', '<p>Printers &amp; Ink</p>', '1760753135_3.jpg', 'Printers,Ink', 'Printers & Ink', 'Printers & Ink', 1, 0, '2025-10-15 00:47:54', '2025-10-17 19:07:03'),
(8, 2, 1, 'Networking & Internet Devices', 'networking-internet-devices', '<p>Networking &amp; Internet Devices</p>', '1760753186_4.jpg', 'Networking ,Internet Devices', 'Networking, Internet Devices', 'Networking & Internet Devices', 1, 0, '2025-10-15 00:49:25', '2025-10-17 19:06:26'),
(10, 3, 3, 'Lenses', 'lenses', '<p>Lenses</p>', '1760757818_8.jpg', 'Lenses', 'Lenses', 'Lenses', 1, 0, '2025-10-15 00:55:26', '2025-10-17 20:23:39'),
(11, 2, 1, 'Computer Accessories', 'computer-accessories', '<p>Computer Accessories</p>', '1760753272_5.jpg', 'Accessories,Computer', 'Computer, Accessories', 'Computer Accessories', 1, 0, '2025-10-15 00:57:05', '2025-10-17 19:07:52'),
(12, 2, 1, 'Software', 'software', '<p>Software</p>', '1760753393_6.jpg', 'Software', 'Software', 'Software', 1, 0, '2025-10-15 17:57:53', '2025-10-17 19:09:53'),
(14, 2, 25, 'All Office & Stationery', 'all-office-stationery', '<p>All Office &amp; Stationery</p>', '1760753433_7.jpg', 'Office ,Stationery', 'All Office & Stationery', 'All Office & Stationery', 1, 0, '2025-10-17 19:10:33', '2025-10-21 00:31:06'),
(15, 3, 3, 'Camera Accessories', 'camera-accessories', '<p>Camera Accessories</p>', '1760757861_9.jpg', 'Camera ,Accessories', 'Camera Accessories', 'Camera Accessories', 1, 0, '2025-10-17 20:24:21', '2025-10-17 20:24:21'),
(16, 3, 3, 'Security & Surveillance', 'security-surveillance', '<p>Security &amp; Surveillance</p>', '1760757886_10.jpg', 'Security ,Surveillance', 'Security & Surveillance', 'Security & Surveillance', 1, 0, '2025-10-17 20:24:46', '2025-10-17 20:24:46'),
(17, 3, 3, 'Binoculars & Telescopes', 'binoculars-telescopes', '<p>Binoculars &amp; Telescopes</p>', '1760757929_11.jpg', 'Telescopes,Binoculars', 'Binoculars & Telescopes', 'Binoculars & Telescopes', 1, 0, '2025-10-17 20:25:29', '2025-10-17 20:25:29'),
(18, 3, 3, 'Camcorders', 'camcorders', '<p>Camcorders</p>', '1760757949_12.jpg', 'Camcorders', 'Camcorders', 'Camcorders', 1, 0, '2025-10-17 20:25:49', '2025-10-17 20:25:49'),
(19, 3, 4, 'All Audio & Video', 'all-audio-video', '<p>Software</p>', '1760757986_13.jpg', 'Software', 'Software', 'Software', 1, 0, '2025-10-17 20:26:26', '2025-10-17 20:26:47'),
(20, 3, 4, 'Headphones & Speakers', 'headphones-speakers', '<p>Headphones &amp; Speakers</p>', '1760758032_14.jpg', 'Headphones ,Speakers', 'Headphones & Speakers', 'Headphones & Speakers', 1, 0, '2025-10-17 20:27:12', '2025-10-17 20:27:12'),
(21, 3, 5, 'All Mobile Phones', 'all-mobile-phones', '<p>All Mobile Phones</p>', '1760758089_15.jpg', 'Mobile ,Phones', 'All Mobile Phones', 'All Mobile Phones', 1, 0, '2025-10-17 20:28:09', '2025-10-17 20:28:09'),
(22, 3, 5, 'Smartphones', 'smartphones', '<p>Smartphones</p>', '1760758105_16.jpg', 'Smartphones', 'Smartphones', 'Smartphones', 1, 0, '2025-10-17 20:28:25', '2025-10-17 20:28:25'),
(23, 1, 5, 'Refurbished Mobiles', 'refurbished-mobiles', '<p>Refurbished Mobiles</p>', '1760758125_17.jpg', 'Refurbished Mobiles', 'Refurbished Mobiles', 'Refurbished Mobiles', 1, 0, '2025-10-17 20:28:45', '2025-10-17 20:28:45'),
(24, 1, 5, 'All Mobile Accessories', 'all-mobile-accessories', '<p>All Mobile Accessories</p>', '1760758166_18.jpg', 'All Mobile Accessories,Mobile ,Accessories', 'All Mobile Accessories', 'All Mobile Accessories', 1, 0, '2025-10-17 20:29:26', '2025-10-17 20:29:26'),
(25, 1, 5, 'Cases & Covers', 'cases-covers', '<p>Cases &amp; Covers</p>', '1760758185_19.jpg', 'Cases ,Covers', 'Cases & Covers', 'Cases & Covers', 1, 0, '2025-10-17 20:29:45', '2025-10-17 20:29:45'),
(26, 1, 5, 'All Tablets', 'all-tablets', '<p>All Tablets</p>', '1760758272_20.jpg', 'All Tablets', 'All Tablets', 'All Tablets', 1, 0, '2025-10-17 20:31:12', '2025-10-17 20:31:12'),
(27, 1, 5, 'Tablet Accessories', 'tablet-accessories', '<p>Tablet Accessories</p>', '1760758285_21.jpg', 'Tablet Accessories', 'Tablet Accessories', 'Tablet Accessories', 1, 0, '2025-10-17 20:31:25', '2025-10-17 20:31:25'),
(28, 1, 6, 'All Movies & TV Shows', 'all-movies-tv-shows', '<p>All Movies &amp; TV Shows</p>', '1760758326_22.jpg', 'All Movies & TV Shows', 'All Movies & TV Shows', 'All Movies & TV Shows', 1, 0, '2025-10-17 20:32:06', '2025-10-17 20:32:06'),
(29, 1, 6, 'All English', 'all-english', '<p>All English</p>', '1760758345_23.jpg', 'All English', 'All English', 'All English', 1, 0, '2025-10-17 20:32:25', '2025-10-17 20:32:25'),
(30, 1, 6, 'All Hindi', 'all-hindi', '<p>All Hindi</p>', '1760758362_24.jpg', 'All Hindi', 'All Hindi', 'All Hindi', 1, 0, '2025-10-17 20:32:43', '2025-10-17 20:32:43'),
(31, 1, 7, 'PC Games', 'pc-games', '<p>PC Games</p>', '1760758378_25.jpg', 'PC Games', 'PC Games', 'PC Games', 1, 0, '2025-10-17 20:32:58', '2025-10-17 20:32:58'),
(32, 1, 7, 'Consoles', 'consoles', '<p>Consoles</p>', '1760758391_26.jpg', 'Consoles', 'Consoles', 'Consoles', 1, 0, '2025-10-17 20:33:11', '2025-10-17 20:33:11'),
(33, 1, 7, 'Accessories', 'accessories', '<p>Accessories</p>', '1760758404_27.jpg', 'Accessories', 'Accessories', 'Accessories', 1, 0, '2025-10-17 20:33:24', '2025-10-17 20:33:24'),
(34, 1, 8, 'All Music', 'all-music', '<p>All Music</p>', '1760758439_28.jpg', 'All Music', 'All Music', 'All Music', 1, 0, '2025-10-17 20:33:59', '2025-10-17 20:33:59'),
(35, 1, 8, 'Indian Classical', 'indian-classical', '<p>Indian Classical</p>', '1760758456_29.jpg', 'Indian Classical', 'Indian Classical', 'Indian Classical', 1, 0, '2025-10-17 20:34:17', '2025-10-17 20:34:17'),
(36, 1, 8, 'Musical Instruments', 'musical-instruments', '<p>Musical Instruments</p>', '1760758471_30.jpg', 'Musical Instruments', 'Musical Instruments', 'Musical Instruments', 1, 0, '2025-10-17 20:34:31', '2025-10-17 20:34:31'),
(37, 1, 9, 'All Watches', 'all-watches', '<p>All Watches</p>', '1760758655_31.jpg', 'All Watches', 'All Watches', 'All Watches', 1, 0, '2025-10-17 20:37:35', '2025-10-17 20:37:35'),
(38, 1, 9, 'Men\'s Watches', 'men-s-watches', '<p>Men&#39;s Watches</p>', '1760758669_32.jpg', 'Men\'s Watches', 'Men\'s Watches', 'Men\'s Watches', 1, 0, '2025-10-17 20:37:49', '2025-10-17 20:37:49'),
(39, 1, 9, 'Women\'s Watches', 'women-s-watches', '<p>Women&#39;s Watches</p>', '1760758686_33.jpg', 'Women\'s Watches', 'Women\'s Watches', 'Women\'s Watches', 1, 0, '2025-10-17 20:38:06', '2025-10-17 20:38:06'),
(40, 1, 9, 'Premium Watches', 'premium-watches', '<p>Premium Watches</p>', '1760758698_34.jpg', 'Premium Watches', 'Premium Watches', 'Premium Watches', 1, 0, '2025-10-17 20:38:18', '2025-10-17 20:38:18'),
(41, 1, 9, 'Deals on Watches', 'deals-on-watches', '<p>Deals on Watches</p>', '1760758713_35.jpg', 'Deals on Watches', 'Deals on Watches', 'Deals on Watches', 1, 0, '2025-10-17 20:38:33', '2025-10-17 20:38:33'),
(42, 1, 10, 'Men\'s Sunglasses', 'men-s-sunglasses', '<p>Men&#39;s Sunglasses</p>', '1760758730_36.jpg', 'Men\'s Sunglasses', 'Men\'s Sunglasses', 'Men\'s Sunglasses', 1, 0, '2025-10-17 20:38:50', '2025-10-17 20:38:50'),
(43, 1, 11, 'All Cars & Bikes', 'all-cars-bikes', '<p>All Cars &amp; Bikes</p>', '1760758757_37.jpg', 'All Cars & Bikes', 'All Cars & Bikes', 'All Cars & Bikes', 1, 0, '2025-10-17 20:39:17', '2025-10-17 20:39:17'),
(44, 1, 11, 'Car & Bike Care', 'car-bike-care', '<p>Car &amp; Bike Care</p>', '1760758778_38.jpg', 'Car & Bike Care', 'Car & Bike Care', 'Car & Bike Care', 1, 0, '2025-10-17 20:39:38', '2025-10-17 20:39:38'),
(45, 1, 11, 'Lubricants', 'lubricants', '<p>Lubricants</p>', '1760758792_39.jpg', 'Lubricants', 'Lubricants', 'Lubricants', 1, 0, '2025-10-17 20:39:52', '2025-10-17 20:39:52'),
(46, 1, 12, 'Helmets & Gloves', 'helmets-gloves', '<p>Helmets &amp; Gloves</p>', '1760758807_40.jpg', 'Helmets & Gloves', 'Helmets & Gloves', 'Helmets & Gloves', 1, 0, '2025-10-17 20:40:07', '2025-10-17 20:40:07'),
(47, 1, 12, 'Bike Parts', 'bike-parts', '<p>Bike Parts</p>', '1760758819_41.jpg', 'Bike Parts', 'Bike Parts', 'Bike Parts', 1, 0, '2025-10-17 20:40:19', '2025-10-17 20:40:19'),
(48, 1, 13, 'All Industrial Supplies', 'all-industrial-supplies', '<p>All Industrial Supplies</p>', '1760758836_42.jpg', 'All Industrial Supplies', 'All Industrial Supplies', 'All Industrial Supplies', 1, 0, '2025-10-17 20:40:36', '2025-10-17 20:40:36'),
(49, 1, 13, 'Lab & Scientific', 'lab-scientific', '<p>Lab &amp; Scientific</p>', '1760758852_43.jpg', 'Lab & Scientific', 'Lab & Scientific', 'Lab & Scientific', 1, 0, '2025-10-17 20:40:52', '2025-10-17 20:40:52'),
(50, 1, 8, 'Televisions', 'televisions', '<p>Televisions</p>', '1760758945_44.jpg', 'Televisions', 'Televisions', 'Televisions', 1, 0, '2025-10-17 20:42:25', '2025-10-17 20:42:25'),
(51, 1, 8, 'Headphones', 'headphones', '<p>Headphones</p>', '1760758962_45.jpg', 'Headphones', 'Headphones', 'Headphones', 1, 0, '2025-10-17 20:42:42', '2025-10-17 20:42:42'),
(52, 1, 25, 'Smart TVs', 'smart-tvs', '<p>Smart TVs</p>', '1760759254_46.jpg', 'Smart TVs', 'Smart TVs', 'Smart TVs', 1, 0, '2025-10-17 20:47:35', '2025-10-17 20:47:35'),
(53, 1, 25, '4K TVs', '4k-tvs', '<p>4K TVs</p>', '1760759276_47.jpg', '4K TVs', '4K TVs', '4K TVs', 1, 0, '2025-10-17 20:47:56', '2025-10-17 20:47:56'),
(54, 1, 25, 'Full HD TVs', 'full-hd-tvs', '<p>Full HD TVs</p>', '1760759308_48.jpg', 'Full HD TVs', 'Full HD TVs', 'Full HD TVs', 1, 0, '2025-10-17 20:48:28', '2025-10-17 20:48:28'),
(55, 1, 26, 'Speakers', 'speakers', '<p>Speakers</p>', '1760759332_49.jpg', 'Speakers', 'Speakers', 'Speakers', 1, 0, '2025-10-17 20:48:52', '2025-10-17 20:48:52'),
(56, 1, 26, 'Home Theaters', 'home-theaters', '<p>Home Theaters</p>', '1760759352_50.jpg', 'Home Theaters', 'Home Theaters', 'Home Theaters', 1, 0, '2025-10-17 20:49:12', '2025-10-17 20:49:12'),
(57, 1, 26, 'Projectors', 'projectors', '<p>Projectors</p>', '1760759367_51.jpg', 'Projectors', 'Projectors', 'Projectors', 1, 0, '2025-10-17 20:49:27', '2025-10-17 20:49:27'),
(58, 1, 27, 'Samsung', 'samsung', '<p>Samsung</p>', '1760759387_52.jpg', 'Samsung', 'Samsung', 'Samsung', 1, 0, '2025-10-17 20:49:47', '2025-10-17 20:49:47'),
(59, 1, 27, 'Panasonic', 'panasonic', '<p>Panasonic</p>', '1760759400_53.jpg', 'Panasonic', 'Panasonic', 'Panasonic', 1, 0, '2025-10-17 20:50:00', '2025-10-17 20:50:00'),
(60, 1, 27, 'Micromax', 'micromax', '<p>Micromax</p>', '1760759417_54.jpg', 'Micromax', 'Micromax', 'Micromax', 1, 0, '2025-10-17 20:50:18', '2025-10-17 20:50:18'),
(61, 1, 28, 'Home Theater Systems', 'home-theater-systems', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>', '1760759440_55.jpg', 'Home,Theater, System', 'Home Theater Systems', 'Home Theater Systems', 1, 0, '2025-10-17 20:50:40', '2025-10-19 21:28:42'),
(62, 1, 44, 'Smartwatch tích hợp ECG', 'smartwatch-tích-hợp-ecg', '<p>Smartwatch tích hợp ECG là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758105_16.jpg', 'Tech,Gadget,Device', 'Smartwatch tích hợp ECG', 'Smartwatch tích hợp ECG', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(63, 1, 54, 'Loa mini Bluetooth cao cấp', 'loa-mini-bluetooth-cao-cấp', '<p>Loa mini Bluetooth cao cấp là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758698_34.jpg', 'Tech,Gadget,Device', 'Loa mini Bluetooth cao cấp', 'Loa mini Bluetooth cao cấp', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(64, 1, 20, 'Laptop OLED mỏng nhẹ', 'laptop-oled-mỏng-nhẹ', '<p>Laptop OLED mỏng nhẹ là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758404_27.jpg', 'Tech,Gadget,Device', 'Laptop OLED mỏng nhẹ', 'Laptop OLED mỏng nhẹ', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(65, 1, 5, 'Tai nghe true wireless', 'tai-nghe-true-wireless', '<p>Tai nghe true wireless là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758404_27.jpg', 'Tech,Gadget,Device', 'Tai nghe true wireless', 'Tai nghe true wireless', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(66, 1, 38, 'Router WiFi 7 siêu nhanh', 'router-wifi-7-siêu-nhanh', '<p>Router WiFi 7 siêu nhanh là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758185_19.jpg', 'Tech,Gadget,Device', 'Router WiFi 7 siêu nhanh', 'Router WiFi 7 siêu nhanh', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(67, 2, 14, 'Tablet dành cho designer', 'tablet-dành-cho-designer', '<p>Tablet dành cho designer là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753186_4.jpg', 'Tech,Gadget,Device', 'Tablet dành cho designer', 'Tablet dành cho designer', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(68, 1, 33, 'Bộ sạc nhanh 120W', 'bộ-sạc-nhanh-120w', '<p>Bộ sạc nhanh 120W là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758669_32.jpg', 'Tech,Gadget,Device', 'Bộ sạc nhanh 120W', 'Bộ sạc nhanh 120W', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(69, 1, 39, 'Camera hành trình 4K', 'camera-hành-trình-4k', '<p>Camera hành trình 4K là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758391_26.jpg', 'Tech,Gadget,Device', 'Camera hành trình 4K', 'Camera hành trình 4K', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(70, 1, 11, 'Chuột chơi game RGB', 'chuột-chơi-game-rgb', '<p>Chuột chơi game RGB là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758698_34.jpg', 'Tech,Gadget,Device', 'Chuột chơi game RGB', 'Chuột chơi game RGB', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(71, 3, 45, 'Bàn phím cơ silent', 'bàn-phím-cơ-silent', '<p>Bàn phím cơ silent là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757861_9.jpg', 'Tech,Gadget,Device', 'Bàn phím cơ silent', 'Bàn phím cơ silent', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(72, 1, 24, 'Ổ cứng di động SSD', 'ổ-cứng-di-dộng-ssd', '<p>Ổ cứng di động SSD là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758686_33.jpg', 'Tech,Gadget,Device', 'Ổ cứng di động SSD', 'Ổ cứng di động SSD', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(73, 1, 57, 'Tivi 4K HDR', 'tivi-4k-hdr', '<p>Tivi 4K HDR là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758326_22.jpg', 'Tech,Gadget,Device', 'Tivi 4K HDR', 'Tivi 4K HDR', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(74, 1, 42, 'Máy chiếu mini', 'máy-chiếu-mini', '<p>Máy chiếu mini là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758185_19.jpg', 'Tech,Gadget,Device', 'Máy chiếu mini', 'Máy chiếu mini', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(75, 1, 39, 'Máy ảnh mirrorless', 'máy-ảnh-mirrorless', '<p>Máy ảnh mirrorless là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758686_33.jpg', 'Tech,Gadget,Device', 'Máy ảnh mirrorless', 'Máy ảnh mirrorless', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(76, 1, 10, 'Micro thu âm chuyên nghiệp', 'micro-thu-âm-chuyên-nghiep', '<p>Micro thu âm chuyên nghiệp là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758456_29.jpg', 'Tech,Gadget,Device', 'Micro thu âm chuyên nghiệp', 'Micro thu âm chuyên nghiệp', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(77, 3, 44, 'Smart Home Hub', 'smart-home-hub', '<p>Smart Home Hub là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757929_11.jpg', 'Tech,Gadget,Device', 'Smart Home Hub', 'Smart Home Hub', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(78, 3, 15, 'Robot hút bụi AI', 'robot-hút-bụi-ai', '<p>Robot hút bụi AI là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757861_9.jpg', 'Tech,Gadget,Device', 'Robot hút bụi AI', 'Robot hút bụi AI', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(79, 1, 21, 'Loa Soundbar Dolby Atmos', 'loa-soundbar-dolby-atmos', '<p>Loa Soundbar Dolby Atmos là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758362_24.jpg', 'Tech,Gadget,Device', 'Loa Soundbar Dolby Atmos', 'Loa Soundbar Dolby Atmos', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(80, 1, 38, 'Laptop học sinh giá rẻ', 'laptop-học-sinh-giá-rẻ', '<p>Laptop học sinh giá rẻ là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758105_16.jpg', 'Tech,Gadget,Device', 'Laptop học sinh giá rẻ', 'Laptop học sinh giá rẻ', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(81, 1, 57, 'Tai nghe chống ồn', 'tai-nghe-chống-ồn', '<p>Tai nghe chống ồn là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758105_16.jpg', 'Tech,Gadget,Device', 'Tai nghe chống ồn', 'Tai nghe chống ồn', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(82, 1, 43, 'Dock mở rộng USB-C', 'dock-mở-rộng-usb-c', '<p>Dock mở rộng USB-C là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758807_40.jpg', 'Tech,Gadget,Device', 'Dock mở rộng USB-C', 'Dock mở rộng USB-C', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(83, 1, 11, 'Màn hình cong 34 inch', 'màn-hình-cong-34-inch', '<p>Màn hình cong 34 inch là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759387_52.jpg', 'Tech,Gadget,Device', 'Màn hình cong 34 inch', 'Màn hình cong 34 inch', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(84, 1, 28, 'Case PC RGB', 'case-pc-rgb', '<p>Case PC RGB là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758439_28.jpg', 'Tech,Gadget,Device', 'Case PC RGB', 'Case PC RGB', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(85, 1, 50, 'Bo mạch chủ Z790', 'bo-mạch-chủ-z790', '<p>Bo mạch chủ Z790 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758655_31.jpg', 'Tech,Gadget,Device', 'Bo mạch chủ Z790', 'Bo mạch chủ Z790', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(86, 3, 1, 'Chuột không dây văn phòng', 'chuột-không-dây-văn-phòng', '<p>Chuột không dây văn phòng là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757929_11.jpg', 'Tech,Gadget,Device', 'Chuột không dây văn phòng', 'Chuột không dây văn phòng', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(87, 1, 22, 'Loa vi tính 2.1', 'loa-vi-tính-2.1', '<p>Loa vi tính 2.1 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758757_37.jpg', 'Tech,Gadget,Device', 'Loa vi tính 2.1', 'Loa vi tính 2.1', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(88, 1, 1, 'Máy chơi game console', 'máy-chơi-game-console', '<p>Máy chơi game console là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758655_31.jpg', 'Tech,Gadget,Device', 'Máy chơi game console', 'Máy chơi game console', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(89, 3, 15, 'Bàn nâng công thái học', 'bàn-nâng-công-thái-học', '<p>Bàn nâng công thái học là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757929_11.jpg', 'Tech,Gadget,Device', 'Bàn nâng công thái học', 'Bàn nâng công thái học', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(90, 1, 8, 'Ổ cắm thông minh WiFi', 'ổ-cắm-thông-minh-wifi', '<p>Ổ cắm thông minh WiFi là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758439_28.jpg', 'Tech,Gadget,Device', 'Ổ cắm thông minh WiFi', 'Ổ cắm thông minh WiFi', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(91, 1, 50, 'Ổ đĩa NAS lưu trữ đám mây', 'ổ-dĩa-nas-lưu-trữ-dám-mây', '<p>Ổ đĩa NAS lưu trữ đám mây là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758778_38.jpg', 'Tech,Gadget,Device', 'Ổ đĩa NAS lưu trữ đám mây', 'Ổ đĩa NAS lưu trữ đám mây', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(92, 3, 20, 'Bộ phát sóng di động 5G', 'bộ-phát-sóng-di-dộng-5g', '<p>Bộ phát sóng di động 5G là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757818_8.jpg', 'Tech,Gadget,Device', 'Bộ phát sóng di động 5G', 'Bộ phát sóng di động 5G', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(93, 1, 44, 'Đèn bàn LED cảm ứng', 'dèn-bàn-led-cảm-ứng', '<p>Đèn bàn LED cảm ứng là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758125_17.jpg', 'Tech,Gadget,Device', 'Đèn bàn LED cảm ứng', 'Đèn bàn LED cảm ứng', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(94, 1, 53, 'Micro không dây cầm tay', 'micro-không-dây-cầm-tay', '<p>Micro không dây cầm tay là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758456_29.jpg', 'Tech,Gadget,Device', 'Micro không dây cầm tay', 'Micro không dây cầm tay', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(95, 1, 12, 'Webcam Full HD', 'webcam-full-hd', '<p>Webcam Full HD là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759367_51.jpg', 'Tech,Gadget,Device', 'Webcam Full HD', 'Webcam Full HD', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(96, 2, 35, 'SSD PCIe Gen5', 'ssd-pcie-gen5', '<p>SSD PCIe Gen5 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753186_4.jpg', 'Tech,Gadget,Device', 'SSD PCIe Gen5', 'SSD PCIe Gen5', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(97, 1, 12, 'Tản nhiệt nước AIO', 'tản-nhiet-nước-aio', '<p>Tản nhiệt nước AIO là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758105_16.jpg', 'Tech,Gadget,Device', 'Tản nhiệt nước AIO', 'Tản nhiệt nước AIO', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(98, 1, 7, 'Card đồ họa RTX 5090', 'card-dồ-họa-rtx-5090', '<p>Card đồ họa RTX 5090 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758757_37.jpg', 'Tech,Gadget,Device', 'Card đồ họa RTX 5090', 'Card đồ họa RTX 5090', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(99, 3, 54, 'Laptop AI hỗ trợ học tập', 'laptop-ai-hỗ-trợ-học-tập', '<p>Laptop AI hỗ trợ học tập là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757929_11.jpg', 'Tech,Gadget,Device', 'Laptop AI hỗ trợ học tập', 'Laptop AI hỗ trợ học tập', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(100, 1, 46, 'Điện thoại màn hình siêu mịn', 'dien-thoại-màn-hình-siêu-mịn', '<p>Điện thoại màn hình siêu mịn là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758185_19.jpg', 'Tech,Gadget,Device', 'Điện thoại màn hình siêu mịn', 'Điện thoại màn hình siêu mịn', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(101, 1, 47, 'Máy in laser văn phòng', 'máy-in-laser-văn-phòng', '<p>Máy in laser văn phòng là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758378_25.jpg', 'Tech,Gadget,Device', 'Máy in laser văn phòng', 'Máy in laser văn phòng', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(102, 2, 28, 'Loa di động pin 24h', 'loa-di-dộng-pin-24h', '<p>Loa di động pin 24h là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753135_3.jpg', 'Tech,Gadget,Device', 'Loa di động pin 24h', 'Loa di động pin 24h', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(103, 1, 22, 'Bộ nhớ RAM DDR5', 'bộ-nhớ-ram-ddr5', '<p>Bộ nhớ RAM DDR5 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758391_26.jpg', 'Tech,Gadget,Device', 'Bộ nhớ RAM DDR5', 'Bộ nhớ RAM DDR5', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(104, 1, 31, 'Tay cầm chơi game PS5', 'tay-cầm-chơi-game-ps5', '<p>Tay cầm chơi game PS5 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758713_35.jpg', 'Tech,Gadget,Device', 'Tay cầm chơi game PS5', 'Tay cầm chơi game PS5', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(105, 1, 39, 'Tai nghe DJ chuyên nghiệp', 'tai-nghe-dj-chuyên-nghiep', '<p>Tai nghe DJ chuyên nghiệp là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758439_28.jpg', 'Tech,Gadget,Device', 'Tai nghe DJ chuyên nghiệp', 'Tai nghe DJ chuyên nghiệp', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(106, 2, 56, 'Thiết bị mạng mesh WiFi', 'thiết-bị-mạng-mesh-wifi', '<p>Thiết bị mạng mesh WiFi là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753135_3.jpg', 'Tech,Gadget,Device', 'Thiết bị mạng mesh WiFi', 'Thiết bị mạng mesh WiFi', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(107, 1, 58, 'Đồng hồ đeo tay GPS', 'dồng-hồ-deo-tay-gps', '<p>Đồng hồ đeo tay GPS là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758285_21.jpg', 'Tech,Gadget,Device', 'Đồng hồ đeo tay GPS', 'Đồng hồ đeo tay GPS', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(108, 1, 10, 'Smart TV Android 12', 'smart-tv-android-12', '<p>Smart TV Android 12 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758272_20.jpg', 'Tech,Gadget,Device', 'Smart TV Android 12', 'Smart TV Android 12', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(109, 2, 18, 'Camera quan sát ban đêm', 'camera-quan-sát-ban-dêm', '<p>Camera quan sát ban đêm là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753393_6.jpg', 'Tech,Gadget,Device', 'Camera quan sát ban đêm', 'Camera quan sát ban đêm', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(110, 1, 34, 'Ổ lưu trữ cloud cá nhân', 'ổ-lưu-trữ-cloud-cá-nhân', '<p>Ổ lưu trữ cloud cá nhân là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759276_47.jpg', 'Tech,Gadget,Device', 'Ổ lưu trữ cloud cá nhân', 'Ổ lưu trữ cloud cá nhân', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(111, 2, 10, 'Máy chiếu 120 inch', 'máy-chiếu-120-inch', '<p>Máy chiếu 120 inch là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753034_1.jpg', 'Tech,Gadget,Device', 'Máy chiếu 120 inch', 'Máy chiếu 120 inch', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(112, 1, 33, 'Điều khiển thông minh IR', 'diều-khiển-thông-minh-ir', '<p>Điều khiển thông minh IR là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758730_36.jpg', 'Tech,Gadget,Device', 'Điều khiển thông minh IR', 'Điều khiển thông minh IR', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(113, 1, 31, 'Bộ lọc không khí mini', 'bộ-lọc-không-khí-mini', '<p>Bộ lọc không khí mini là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758345_23.jpg', 'Tech,Gadget,Device', 'Bộ lọc không khí mini', 'Bộ lọc không khí mini', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(114, 1, 41, 'Loa Bluetooth gắn tường', 'loa-bluetooth-gắn-tường', '<p>Loa Bluetooth gắn tường là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758698_34.jpg', 'Tech,Gadget,Device', 'Loa Bluetooth gắn tường', 'Loa Bluetooth gắn tường', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(115, 1, 22, 'Tablet giải trí màn lớn', 'tablet-giải-trí-màn-lớn', '<p>Tablet giải trí màn lớn là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759387_52.jpg', 'Tech,Gadget,Device', 'Tablet giải trí màn lớn', 'Tablet giải trí màn lớn', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(116, 2, 18, 'Máy ảnh compact du lịch', 'máy-ảnh-compact-du-lịch', '<p>Máy ảnh compact du lịch là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753272_5.jpg', 'Tech,Gadget,Device', 'Máy ảnh compact du lịch', 'Máy ảnh compact du lịch', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(117, 2, 7, 'Micro livestream USB', 'micro-livestream-usb', '<p>Micro livestream USB là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753135_3.jpg', 'Tech,Gadget,Device', 'Micro livestream USB', 'Micro livestream USB', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(118, 1, 16, 'Bộ chuyển HDMI không dây', 'bộ-chuyển-hdmi-không-dây', '<p>Bộ chuyển HDMI không dây là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758185_19.jpg', 'Tech,Gadget,Device', 'Bộ chuyển HDMI không dây', 'Bộ chuyển HDMI không dây', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(119, 1, 50, 'Laptop văn phòng pin 20h', 'laptop-văn-phòng-pin-20h', '<p>Laptop văn phòng pin 20h là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758778_38.jpg', 'Tech,Gadget,Device', 'Laptop văn phòng pin 20h', 'Laptop văn phòng pin 20h', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(120, 1, 26, 'Tai nghe thể thao chống nước', 'tai-nghe-thể-thao-chống-nước', '<p>Tai nghe thể thao chống nước là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758730_36.jpg', 'Tech,Gadget,Device', 'Tai nghe thể thao chống nước', 'Tai nghe thể thao chống nước', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(121, 1, 24, 'Router gaming tốc độ cao', 'router-gaming-tốc-dộ-cao', '<p>Router gaming tốc độ cao là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758757_37.jpg', 'Tech,Gadget,Device', 'Router gaming tốc độ cao', 'Router gaming tốc độ cao', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(122, 2, 20, 'Card mạng 10GbE', 'card-mạng-10gbe', '<p>Card mạng 10GbE là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753393_6.jpg', 'Tech,Gadget,Device', 'Card mạng 10GbE', 'Card mạng 10GbE', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(123, 2, 16, 'Tản nhiệt CPU RGB', 'tản-nhiet-cpu-rgb', '<p>Tản nhiệt CPU RGB là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753097_2.jpg', 'Tech,Gadget,Device', 'Tản nhiệt CPU RGB', 'Tản nhiệt CPU RGB', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(124, 1, 8, 'Máy chủ NAS gia đình', 'máy-chủ-nas-gia-dình', '<p>Máy chủ NAS gia đình là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758185_19.jpg', 'Tech,Gadget,Device', 'Máy chủ NAS gia đình', 'Máy chủ NAS gia đình', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(125, 1, 19, 'Thiết bị đeo thông minh trẻ em', 'thiết-bị-deo-thông-minh-trẻ-em', '<p>Thiết bị đeo thông minh trẻ em là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759332_49.jpg', 'Tech,Gadget,Device', 'Thiết bị đeo thông minh trẻ em', 'Thiết bị đeo thông minh trẻ em', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(126, 1, 45, 'Tai nghe học trực tuyến', 'tai-nghe-học-trực-tuyến', '<p>Tai nghe học trực tuyến là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758326_22.jpg', 'Tech,Gadget,Device', 'Tai nghe học trực tuyến', 'Tai nghe học trực tuyến', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(127, 3, 9, 'Camera webcam AI', 'camera-webcam-ai', '<p>Camera webcam AI là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753433_7.jpg', 'Tech,Gadget,Device', 'Camera webcam AI', 'Camera webcam AI', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(128, 2, 38, 'Smart light RGB', 'smart-light-rgb', '<p>Smart light RGB là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753272_5.jpg', 'Tech,Gadget,Device', 'Smart light RGB', 'Smart light RGB', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(129, 1, 35, 'Màn hình di động', 'màn-hình-di-dộng', '<p>Màn hình di động là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758166_18.jpg', 'Tech,Gadget,Device', 'Màn hình di động', 'Màn hình di động', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(130, 3, 36, 'Máy chiếu không dây', 'máy-chiếu-không-dây', '<p>Máy chiếu không dây là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758032_14.jpg', 'Tech,Gadget,Device', 'Máy chiếu không dây', 'Máy chiếu không dây', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(131, 3, 16, 'Chuột cảm ứng đa điểm', 'chuột-cảm-ứng-da-diểm', '<p>Chuột cảm ứng đa điểm là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757986_13.jpg', 'Tech,Gadget,Device', 'Chuột cảm ứng đa điểm', 'Chuột cảm ứng đa điểm', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(132, 1, 26, 'Ổ cứng ngoài tốc độ cao', 'ổ-cứng-ngoài-tốc-dộ-cao', '<p>Ổ cứng ngoài tốc độ cao là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759308_48.jpg', 'Tech,Gadget,Device', 'Ổ cứng ngoài tốc độ cao', 'Ổ cứng ngoài tốc độ cao', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(133, 1, 18, 'Dock sạc không dây', 'dock-sạc-không-dây', '<p>Dock sạc không dây là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758792_39.jpg', 'Tech,Gadget,Device', 'Dock sạc không dây', 'Dock sạc không dây', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(134, 1, 51, 'Thiết bị định vị GPS', 'thiết-bị-dịnh-vị-gps', '<p>Thiết bị định vị GPS là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758792_39.jpg', 'Tech,Gadget,Device', 'Thiết bị định vị GPS', 'Thiết bị định vị GPS', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(135, 1, 22, 'Máy in màu WiFi', 'máy-in-màu-wifi', '<p>Máy in màu WiFi là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758166_18.jpg', 'Tech,Gadget,Device', 'Máy in màu WiFi', 'Máy in màu WiFi', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(136, 1, 23, 'Laptop 2-trong-1', 'laptop-2-trong-1', '<p>Laptop 2-trong-1 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758686_33.jpg', 'Tech,Gadget,Device', 'Laptop 2-trong-1', 'Laptop 2-trong-1', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(137, 1, 49, 'Bộ nhớ USB 3.2', 'bộ-nhớ-usb-3.2', '<p>Bộ nhớ USB 3.2 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758852_43.jpg', 'Tech,Gadget,Device', 'Bộ nhớ USB 3.2', 'Bộ nhớ USB 3.2', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(138, 1, 55, 'Bộ chia HDMI', 'bộ-chia-hdmi', '<p>Bộ chia HDMI là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759332_49.jpg', 'Tech,Gadget,Device', 'Bộ chia HDMI', 'Bộ chia HDMI', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(139, 1, 49, 'Tivi mini cho xe hơi', 'tivi-mini-cho-xe-hơi', '<p>Tivi mini cho xe hơi là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758404_27.jpg', 'Tech,Gadget,Device', 'Tivi mini cho xe hơi', 'Tivi mini cho xe hơi', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(140, 2, 52, 'Smartwatch thể thao', 'smartwatch-thể-thao', '<p>Smartwatch thể thao là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753272_5.jpg', 'Tech,Gadget,Device', 'Smartwatch thể thao', 'Smartwatch thể thao', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(141, 3, 43, 'Router WiFi 6E', 'router-wifi-6e', '<p>Router WiFi 6E là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757818_8.jpg', 'Tech,Gadget,Device', 'Router WiFi 6E', 'Router WiFi 6E', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(142, 1, 4, 'Bàn phím không dây', 'bàn-phím-không-dây', '<p>Bàn phím không dây là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759332_49.jpg', 'Tech,Gadget,Device', 'Bàn phím không dây', 'Bàn phím không dây', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(143, 2, 3, 'Bộ chuyển tín hiệu âm thanh', 'bộ-chuyển-tín-hieu-âm-thanh', '<p>Bộ chuyển tín hiệu âm thanh là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753097_2.jpg', 'Tech,Gadget,Device', 'Bộ chuyển tín hiệu âm thanh', 'Bộ chuyển tín hiệu âm thanh', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(144, 3, 16, 'Loa để bàn Bluetooth', 'loa-dể-bàn-bluetooth', '<p>Loa để bàn Bluetooth là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757886_10.jpg', 'Tech,Gadget,Device', 'Loa để bàn Bluetooth', 'Loa để bàn Bluetooth', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(145, 1, 50, 'Thiết bị ghi âm mini', 'thiết-bị-ghi-âm-mini', '<p>Thiết bị ghi âm mini là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758730_36.jpg', 'Tech,Gadget,Device', 'Thiết bị ghi âm mini', 'Thiết bị ghi âm mini', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(146, 1, 50, 'Tai nghe phòng thu', 'tai-nghe-phòng-thu', '<p>Tai nghe phòng thu là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758456_29.jpg', 'Tech,Gadget,Device', 'Tai nghe phòng thu', 'Tai nghe phòng thu', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(147, 2, 33, 'Màn hình cảm ứng', 'màn-hình-cảm-ứng', '<p>Màn hình cảm ứng là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753186_4.jpg', 'Tech,Gadget,Device', 'Màn hình cảm ứng', 'Màn hình cảm ứng', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(148, 1, 19, 'Máy tính mini', 'máy-tính-mini', '<p>Máy tính mini là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758778_38.jpg', 'Tech,Gadget,Device', 'Máy tính mini', 'Máy tính mini', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(149, 1, 46, 'Ổ cắm điện tử', 'ổ-cắm-dien-tử', '<p>Ổ cắm điện tử là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758185_19.jpg', 'Tech,Gadget,Device', 'Ổ cắm điện tử', 'Ổ cắm điện tử', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(150, 1, 42, 'Smart TV 65 inch', 'smart-tv-65-inch', '<p>Smart TV 65 inch là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759276_47.jpg', 'Tech,Gadget,Device', 'Smart TV 65 inch', 'Smart TV 65 inch', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(151, 1, 13, 'Máy ảnh ống kính rời', 'máy-ảnh-ống-kính-rời', '<p>Máy ảnh ống kính rời là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758471_30.jpg', 'Tech,Gadget,Device', 'Máy ảnh ống kính rời', 'Máy ảnh ống kính rời', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(152, 3, 5, 'Ổ SSD di động', 'ổ-ssd-di-dộng', '<p>Ổ SSD di động là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757929_11.jpg', 'Tech,Gadget,Device', 'Ổ SSD di động', 'Ổ SSD di động', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(153, 1, 32, 'Tai nghe gaming 7.1', 'tai-nghe-gaming-7.1', '<p>Tai nghe gaming 7.1 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758792_39.jpg', 'Tech,Gadget,Device', 'Tai nghe gaming 7.1', 'Tai nghe gaming 7.1', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(154, 2, 18, 'Loa di động chống nước', 'loa-di-dộng-chống-nước', '<p>Loa di động chống nước là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753272_5.jpg', 'Tech,Gadget,Device', 'Loa di động chống nước', 'Loa di động chống nước', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19');
INSERT INTO `posts` (`id`, `author_id`, `category`, `title`, `slug`, `content`, `featured_image`, `tags`, `meta_keywords`, `meta_description`, `visibility`, `is_notified`, `created_at`, `updated_at`) VALUES
(155, 2, 39, 'Webcam 2K', 'webcam-2k', '<p>Webcam 2K là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753097_2.jpg', 'Tech,Gadget,Device', 'Webcam 2K', 'Webcam 2K', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(156, 1, 56, 'Laptop lập trình viên', 'laptop-lập-trình-viên', '<p>Laptop lập trình viên là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758852_43.jpg', 'Tech,Gadget,Device', 'Laptop lập trình viên', 'Laptop lập trình viên', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(157, 1, 17, 'Máy quét tài liệu', 'máy-quét-tài-lieu', '<p>Máy quét tài liệu là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760759387_52.jpg', 'Tech,Gadget,Device', 'Máy quét tài liệu', 'Máy quét tài liệu', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(158, 1, 23, 'Chuột vertical', 'chuột-vertical', '<p>Chuột vertical là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758456_29.jpg', 'Tech,Gadget,Device', 'Chuột vertical', 'Chuột vertical', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(159, 1, 25, 'Bàn phím layout 75%', 'bàn-phím-layout-75%', '<p>Bàn phím layout 75% là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758945_44.jpg', 'Tech,Gadget,Device', 'Bàn phím layout 75%', 'Bàn phím layout 75%', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(160, 3, 12, 'SSD external', 'ssd-external', '<p>SSD external là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757986_13.jpg', 'Tech,Gadget,Device', 'SSD external', 'SSD external', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(161, 1, 27, 'Dock hub đa năng', 'dock-hub-da-năng', '<p>Dock hub đa năng là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758698_34.jpg', 'Tech,Gadget,Device', 'Dock hub đa năng', 'Dock hub đa năng', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(162, 2, 34, 'Smartwatch pin 10 ngày', 'smartwatch-pin-10-ngày', '<p>Smartwatch pin 10 ngày là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753393_6.jpg', 'Tech,Gadget,Device', 'Smartwatch pin 10 ngày', 'Smartwatch pin 10 ngày', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(163, 1, 18, 'Loa công suất lớn', 'loa-công-suất-lớn', '<p>Loa công suất lớn là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758125_17.jpg', 'Tech,Gadget,Device', 'Loa công suất lớn', 'Loa công suất lớn', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(164, 1, 40, 'Router mesh WiFi 6', 'router-mesh-wifi-6', '<p>Router mesh WiFi 6 là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758362_24.jpg', 'Tech,Gadget,Device', 'Router mesh WiFi 6', 'Router mesh WiFi 6', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(165, 1, 56, 'Bộ điều khiển ánh sáng', 'bộ-diều-khiển-ánh-sáng', '<p>Bộ điều khiển ánh sáng là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758792_39.jpg', 'Tech,Gadget,Device', 'Bộ điều khiển ánh sáng', 'Bộ điều khiển ánh sáng', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(166, 2, 35, 'Camera trong nhà', 'camera-trong-nhà', '<p>Camera trong nhà là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760753186_4.jpg', 'Tech,Gadget,Device', 'Camera trong nhà', 'Camera trong nhà', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(167, 1, 38, 'Micro studio', 'micro-studio', '<p>Micro studio là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758698_34.jpg', 'Tech,Gadget,Device', 'Micro studio', 'Micro studio', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(168, 3, 33, 'Thiết bị phát sóng Bluetooth', 'thiết-bị-phát-sóng-bluetooth', '<p>Thiết bị phát sóng Bluetooth là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757886_10.jpg', 'Tech,Gadget,Device', 'Thiết bị phát sóng Bluetooth', 'Thiết bị phát sóng Bluetooth', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(169, 1, 16, 'Tablet pin 10000mAh', 'tablet-pin-10000mah', '<p>Tablet pin 10000mAh là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760758698_34.jpg', 'Tech,Gadget,Device', 'Tablet pin 10000mAh', 'Tablet pin 10000mAh', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(170, 3, 31, 'Card đồ họa dành cho AI', 'card-dồ-họa-dành-cho-ai', '<p>Card đồ họa dành cho AI là sản phẩm công nghệ hiện đại, được thiết kế nhằm mang lại hiệu suất cao và trải nghiệm người dùng tuyệt vời trong mọi tình huống sử dụng. Tối ưu cho người yêu công nghệ.</p>', '1760757929_11.jpg', 'Tech,Gadget,Device', 'Card đồ họa dành cho AI', 'Card đồ họa dành cho AI', 1, 0, '2025-10-21 06:51:19', '2025-10-21 06:51:19'),
(171, 3, 14, 'test newsletter post4', 'test-newsletter-post4', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1761269205_222.jpg', 'newsletter,subscribers', 'newsletter, subcribers', 'newsletter, subcribers', 0, 1, '2025-10-23 18:26:47', '2025-10-23 18:31:38'),
(172, 3, 33, 'test', 'test', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1761269358_125.jpg', 'test', NULL, NULL, 0, 1, '2025-10-23 18:29:18', '2025-10-23 18:31:50'),
(173, 3, 15, 'test1', 'test1', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1761269549_142.jpg', 'test', NULL, NULL, 1, 1, '2025-10-23 18:32:29', '2025-10-23 18:32:50'),
(174, 3, 33, 'test2', 'test2', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1761269684_18.jpg', 'test', NULL, NULL, 1, 1, '2025-10-23 18:34:44', '2025-10-23 18:34:44'),
(175, 1, 29, 'test3 - again', 'test3-again', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1761270047_18.jpg', NULL, NULL, NULL, 1, 1, '2025-10-23 18:40:47', '2025-10-23 20:49:45'),
(176, 1, 13, 'test4', 'test4', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1761276473_17.jpg', 'tag', NULL, NULL, 1, 1, '2025-10-23 20:27:55', '2025-10-23 20:27:56'),
(177, 1, 16, 'test5-k', 'test5-k', '<p>will@email.comk</p>', '1761276786_186.jpg', 'will@email.com,k', 'will@email.comk', 'will@email.comk', 1, 1, '2025-10-23 20:33:06', '2025-10-23 20:51:59'),
(178, 1, 29, 'test6', 'test6', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1761277956_18.jpg', 'aa', NULL, NULL, 1, 1, '2025-10-23 20:52:36', '2025-10-23 20:53:04'),
(179, 1, 1, 'tesy9', 'tesy9', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1761278154_20.jpg', 'a', NULL, NULL, 1, 1, '2025-10-23 20:55:54', '2025-10-23 20:55:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('zm5PtZ2ihQFUz1YtY4ouzgnpdfZsVByyfgeSyQbA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejJmS0wwcm5LYnplWjR2YzZicHhYdW9BcFpzTTVSRk9NdmJ2THdaciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9keXQudGVzdC9wcm9kdWN0cyI7fX0=', 1761297895);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `site_social_links`
--

CREATE TABLE `site_social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `site_social_links`
--

INSERT INTO `site_social_links` (`id`, `facebook_url`, `instagram_url`, `linkedin_url`, `twitter_url`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/DYT', 'https://www.instagram.com/DYT/', 'https://www.linkedin.com/in/DYT', 'https://x.com/DYT', '2025-10-24 00:01:40', '2025-10-24 00:15:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `ordering` int(11) NOT NULL DEFAULT 1000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `image`, `heading`, `link`, `status`, `ordering`, `created_at`, `updated_at`) VALUES
(2, 'SLD_20251023032405.jpg', 'Smartphone với màn hình gập thế hệ mới', 'http://Smartphone.com/smp', 1, 3, '2025-10-22 20:24:05', '2025-10-22 22:52:17'),
(3, 'SLD_20251023032439.jpg', 'Laptop gaming RTX 5090 mạnh mẽ', 'http://RTX5090.com', 1, 4, '2025-10-22 20:24:39', '2025-10-22 21:10:23'),
(4, 'SLD_20251023032529.jpg', 'Bluetooth chống nước IPX8', 'http://BluetoothIPX8.vn', 1, 6, '2025-10-22 20:25:29', '2025-10-22 21:10:58'),
(5, 'SLD_20251023032636.jpg', 'Bluetooth chống nước', 'http://bluetooth.com.vn/', 1, 5, '2025-10-22 20:26:36', '2025-10-22 21:10:58'),
(6, 'SLD_20251023032718.jpg', 'Camera an ninh AI thông minh', 'http://cameraai', 1, 1, '2025-10-22 20:27:18', '2025-10-22 21:10:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'admin',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `picture`, `bio`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr.Bob', 'admin@email.com', 'admin', NULL, '$2y$12$tcLK1BSQbgIQwqD8.cn0d.oUobsnStsvOv3wFGBvwbDmcFaazRyZO', 'IMG_68ec662731710.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum, leo metus luctus sem, vel vulputate diam ipsum sed lorem.', 'superAdmin', 'active', NULL, '2025-10-10 20:45:35', '2025-10-23 23:16:23'),
(2, 'Amanda William', 'will@email.com', 'will', NULL, '$2y$12$aGiUe8/kMY2OgElLoST4feIaHatYE4qmUTOtOQtEh0wyd0akmGIFW', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum, leo metus luctus sem, vel vulputate diam ipsum sed lorem.', 'admin', 'active', NULL, '2025-10-10 20:45:35', '2025-10-15 19:28:20'),
(3, 'Vincenzo', 'user@email.com', 'user', NULL, '$2y$12$WMsimJr2fYEvKqSzW8k.BO1YkZGSPKMSI6j46AwRhXQ0Ky2TclpmC', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum, leo metus luctus sem, vel vulputate diam ipsum sed lorem.', 'admin', 'active', NULL, '2025-10-10 20:45:35', '2025-10-23 21:07:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_social_links`
--

CREATE TABLE `user_social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `github_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_social_links`
--

INSERT INTO `user_social_links` (`id`, `user_id`, `facebook_url`, `instagram_url`, `youtube_url`, `linkedin_url`, `twitter_url`, `github_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'http://dyt.test/Facebook', 'http://dyt.test/Instagram', 'http://dyt.test/Youtube', 'http://dyt.test/LinkedIn', 'http://dyt.test/Twitter', 'http://dyt.test/Github', NULL, '2025-10-22 00:16:23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_subscribers_email_unique` (`email`);

--
-- Chỉ mục cho bảng `parent_categories`
--
ALTER TABLE `parent_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `site_social_links`
--
ALTER TABLE `site_social_links`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Chỉ mục cho bảng `user_social_links`
--
ALTER TABLE `user_social_links`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_social_links_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `parent_categories`
--
ALTER TABLE `parent_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT cho bảng `site_social_links`
--
ALTER TABLE `site_social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user_social_links`
--
ALTER TABLE `user_social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
